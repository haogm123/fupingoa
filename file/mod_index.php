<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');
get_key("file_");
empty($do) && $do = 'list';
if ($do == 'list') {
	//列表信息 
	$wheresql = '';
	$page = max(1, getGP('page','G','int'));
	$pagesize = $_CONFIG->config_data('pagenum');
	$offset = ($page - 1) * $pagesize;
	$url = 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'';
	if ($number = getGP('number','G')) {
		$wheresql .= " AND filenumber=".$number."";
		$url .= '&number='.rawurlencode($number);
	}
	if ($title = getGP('title','G')) {
		$wheresql .= " AND filename LIKE '%$title%'";
		$url .= '&title='.rawurlencode($title);
	}
	if ($enddate = getGP('enddate','G')) {
		$wheresql .= " AND enddate='".$enddate."'";
		$url .= '&enddate='.rawurlencode($enddate);
	}
	if ($filetype = getGP('filetype','G')) {
		$wheresql .= " AND filetype='".$filetype."'";
		$url .= '&filetype='.rawurlencode($filetype);
	}
	//时间
	$vstartdate = getGP('vstartdate','G');
	$venddate = getGP('venddate','G');
	if ($vstartdate!='' && $venddate!='') {
	$wheresql .= " AND (date>='".$vstartdate."' and date<='".$venddate."')";
	$url .= '&vstartdate='.$vstartdate.'&venddate='.$venddate;
	}
	$vuidtype = getGP('vuidtype','G');
	if(!is_superadmin() && $vuidtype==''){
		$wheresql .= " AND uid = $_USER->id";
	}
	if ($vuidtype!='') {
		$wheresql .=" ".get_subordinate($_USER->id,'uid');
		$url .= '&vuidtype='.$vuidtype;
	}
	
	$num = $db->result("SELECT COUNT(*) AS num FROM ".DB_TABLEPRE."file WHERE 1 $wheresql");
     $sql = "SELECT * FROM ".DB_TABLEPRE."file WHERE 1 $wheresql ORDER BY id desc LIMIT $offset, $pagesize";
	$result = $db->fetch_all($sql);
	include_once('template/index.php');

} elseif ($do == 'update') {
	
	get_key("file_type_delete");
	$idarr = getGP('id','P','array');
	foreach ($idarr as $id) {
		$db->query("DELETE FROM ".DB_TABLEPRE."file WHERE id = '$id'  ");
		$db->query("DELETE FROM ".DB_TABLEPRE."file_read WHERE fileid= '$id'  ");
	}
	$content=serialize($idarr);
	$title='删除档案信息';
	get_logadd($id,$content,$title,20,$_USER->id);
	show_msg('删除档案信息成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'');

}elseif ($do == 'excel') {
	$datename="file_".get_date('YmdHis',PHP_TIME);
	$outputFileName = 'data/excel/'.$datename.'.xls';
		$content = array();
		$archive=array("档案类目","档案编号","档案名称","保存期限","存放位置","页数","附件","摘要或全文","发布时间","发布人");
		$content[] = $archive;
		$wheresql = '';
		if ($number = getGP('number','P')) {
			$wheresql .= " AND filenumber=".$number."";
		}
		if ($title = getGP('title','P')) {
			$wheresql .= " AND filename LIKE '%$title%'";
		}
		if ($enddate = getGP('enddate','P')) {
			$wheresql .= " AND enddate='".$enddate."'";
		}
		if ($filetype = getGP('filetype','P')) {
			$wheresql .= " AND filetype='".$filetype."'";
		}
		//时间
		$vstartdate = getGP('vstartdate','P');
		$venddate = getGP('venddate','P');
		if ($vstartdate!='' && $venddate!='') {
		$wheresql .= " AND (date>='".$vstartdate."' and date<='".$venddate."')";
		}
		$vuidtype = getGP('vuidtype','P');
		if(!is_superadmin() && $vuidtype==''){
			$wheresql .= " AND uid = $_USER->id";
		}
		if ($vuidtype!='') {
			$wheresql .=" ".get_subordinate($_USER->id,'uid');
		}
		
		$sql = "SELECT * FROM ".DB_TABLEPRE."file WHERE 1 $wheresql  ORDER BY id desc";
		$result = $db->query($sql);
		while ($row = $db->fetch_array($result)) {
			$archive = array(
				"".get_file_type_name($row['filetype'])."",
				"".$row[filenumber]."",
				"".$row[filename]."",
				"".$row[enddate]."",
				"".$row[position]."",
				"".$row[page]."",
				"".$row[appendix]."",
				"".$row[content]."",
				"".str_replace("-",".",$row[date])."",
				"".get_realname($row['uid']).""
			);
			$content[] = $archive;
		}
	$excel = new ExcelWriter($outputFileName);
	if($excel==false) 
		echo $excel->error; 
	foreach($content as $v){
		$excel->writeLine($v);
	}
	$excel->sendfile($outputFileName);
}
?>