<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');

get_key("book");
empty($do) && $do = 'list';
if ($do == 'list') {
	//列表信息 
	$wheresql = '';
	$page = max(1, getGP('page','G','int'));
	$pagesize = $_CONFIG->config_data('pagenum');
	$offset = ($page - 1) * $pagesize;
	$url = 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'';
	if ($title = getGP('title','G')) {
		$wheresql .= " AND bookname LIKE '%".$title."%'";
		$url .= '&title='.rawurlencode($title);
	}
	if ($number = getGP('number','G')) {
		$wheresql .= " AND bookumber ='".$number."'";
		$url .= '&number='.rawurlencode($number);
	}
	if ($filetype = getGP('filetype','G')) {
		$wheresql .= " AND booktype ='".$filetype."'";
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
	
	$num = $db->result("SELECT COUNT(*) AS num FROM ".DB_TABLEPRE."book WHERE 1 $wheresql");
     $sql = "SELECT * FROM ".DB_TABLEPRE."book WHERE 1 $wheresql ORDER BY id desc LIMIT $offset, $pagesize";
	$result = $db->fetch_all($sql);

	include_once('template/index.php');

} elseif ($do == 'update') {
	get_key("book");
	
	$idarr = getGP('id','P','array');
	foreach ($idarr as $id) {
		$db->query("DELETE FROM ".DB_TABLEPRE."book WHERE id = '$id' ");
		$db->query("DELETE FROM ".DB_TABLEPRE."book_read WHERE bookid= '$id' ");	
	}
	$content=serialize($idarr);
	$title='删除图书信息';
	get_logadd($id,$content,$title,22,$_USER->id);
	show_msg('图书信息删除成功！', 'admin.php?ac=index&fileurl=book');

}elseif ($do == 'excel') {
	$datename="book_".get_date('YmdHis',PHP_TIME);
	$outputFileName = 'data/excel/'.$datename.'.xls';
		$content = array();
		$archive=array("图书类目","图书编号","书名","作者","出版社","存放地点","图书数量","备注","发布时间","发布人");
		$content[] = $archive;
		$wheresql = '';
		if ($title = getGP('title','P')) {
			$wheresql .= " AND bookname LIKE '%".$title."%'";
		}
		if ($number = getGP('number','P')) {
			$wheresql .= " AND bookumber ='".$number."'";
		}
		if ($filetype = getGP('filetype','P')) {
			$wheresql .= " AND booktype ='".$filetype."'";
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
		
		$sql = "SELECT * FROM ".DB_TABLEPRE."book WHERE 1 $wheresql  ORDER BY id desc";
		$result = $db->query($sql);
		while ($row = $db->fetch_array($result)) {
			$archive = array(
				"".get_book_type_name($row['booktype'])."",
				"".$row[bookumber]."",
				"".$row[bookname]."",
				"".$row[author]."",
				"".$row[publishing]."",
				"".$row[appendix]."",
				"".$row[booknum]."",
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