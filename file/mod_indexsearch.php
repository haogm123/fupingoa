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
	
	$num = $db->result("SELECT COUNT(*) AS num FROM ".DB_TABLEPRE."file WHERE 1 $wheresql");
     $sql = "SELECT * FROM ".DB_TABLEPRE."file WHERE 1 $wheresql ORDER BY id desc LIMIT $offset, $pagesize";
	$result = $db->fetch_all($sql);

	include_once('template/indexsearch.php');

} elseif ($do == 'save') {
	
	$id = getGP('id','G','int');
	//读取数据
	$r = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."file where id='".$id."'   ORDER BY id desc limit 0,1");
	$filenumber = $r[filenumber];
	$filename = $r[filename];
	$appperson = $_USER->id;
	$examperson = '0';
	$appdate =get_date('Y-m-d H:i:s',PHP_TIME);
	$type ='1';
	$date =get_date('Y-m-d H:i:s',PHP_TIME);
	$file_read = array(
		'fileid' => $id,
		'filenumber' => $filenumber,
		'filename' => $filename,
		'appperson' => $appperson,
		'appdate' => $appdate,
		'type' => $type,
		'date' => $date
	);
	$file = array(
		'type' => $type
	);
	//写入主表信息
	insert_db('file_read',$file_read);
	$content=serialize($file_read);
	$title='档案借阅';
	get_logadd($id,$content,$title,20,$_USER->id);
	update_db('file',$file, array('id' => $id));
	show_msg('档案借阅信息提交成功！', 'admin.php?ac=file_read&type=1&fileurl='.$fileurl.'');

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