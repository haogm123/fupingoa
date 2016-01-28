<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');

get_key("file_read_key");
function get_reallists($fid=0)
{
    global $db;
	$html='';
	$query = $db->query("SELECT title FROM ".DB_TABLEPRE."file_type where id='".$fid."'   ORDER BY id desc limit 0,1");
	while ($rowuser = $db->fetch_array($query)) {
	$html .= $rowuser[title];
	}
	return $html;
}



empty($do) && $do = 'list';
if ($do == 'list') {
	//列表信息 
	$wheresql = '';
	$page = max(1, getGP('page','G','int'));
	$pagesize = $_CONFIG->config_data('pagenum');
	$offset = ($page - 1) * $pagesize;
	$url = 'admin.php?ac=file_read_key&fileurl=file';
	if ($type = getGP('type','G')) {
		$wheresql .= " AND type ='".$type."'";
		$url .= '&type='.$type;
	}
	if ($number = getGP('number','G')) {
		$wheresql .= " AND filenumber=".$number."";
		$url .= '&number='.rawurlencode($number);
	}
	if ($title = getGP('title','G')) {
		$wheresql .= " AND filename LIKE '%$title%'";
		$url .= '&title='.rawurlencode($title);
	}
	//时间
	$vstartdate = getGP('vstartdate','G');
	$venddate = getGP('venddate','G');
	if ($vstartdate!='' && $venddate!='') {
		$wheresql .= " AND (date>='".$vstartdate."' and date<='".$venddate."')";
		$url .= '&vstartdate='.$vstartdate.'&venddate='.$venddate;
	}
	
	$num = $db->result("SELECT COUNT(*) AS num FROM ".DB_TABLEPRE."file_read  WHERE 1 $wheresql ORDER BY id desc");
    $sql = "SELECT * FROM ".DB_TABLEPRE."file_read WHERE 1 $wheresql ORDER BY id desc LIMIT $offset, $pagesize";
	$result = $db->fetch_all($sql);

	include_once('template/file_read_key.php');

} elseif ($do == 'save') {
	
	$tid = getGP('tid','G');
	$ltype = getGP('ltype','G');
	$r = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."file_read where id='".$tid."'   ORDER BY id desc limit 0,1");
	$file = array(
		'type' => $ltype
		
	);
	update_db('file',$file, array('id' => $r[fileid]));
    
	$file_read = array(
		'type' => $ltype,
		'examperson' => $_USER->id,
		'examdate' => get_date('Y-m-d H:i:s',PHP_TIME)
	);
	update_db('file_read',$file_read, array('id' => $tid));
    $content=$ltype;
	$title='档案审批';
	get_logadd($tid,$content,$title,20,$_USER->id);
	show_msg('档案信息审批成功！', 'admin.php?ac=file_read_key&fileurl=file&type='.getGP('type','G').'');

}elseif ($do == 'excel') {
	$datename="file_".get_date('YmdHis',PHP_TIME);
	$outputFileName = 'data/excel/'.$datename.'.xls';
		$content = array();
		$archive=array("档案编号","档案名称","申请人","审批人","申请时间","审批时间","发布时间");
		$content[] = $archive;
		$wheresql = '';
		if ($type = getGP('type','P')) {
			$wheresql .= " AND type ='".$type."'";
		}
		if ($number = getGP('number','P')) {
			$wheresql .= " AND filenumber=".$number."";
		}
		if ($title = getGP('title','P')) {
			$wheresql .= " AND filename LIKE '%$title%'";
		}
		//时间
		$vstartdate = getGP('vstartdate','P');
		$venddate = getGP('venddate','P');
		if ($vstartdate!='' && $venddate!='') {
			$wheresql .= " AND (date>='".$vstartdate."' and date<='".$venddate."')";
		}
		$vuidtype = getGP('vuidtype','P');
		if(!is_superadmin() && $vuidtype==''){
			$wheresql .= "and appperson='".$_USER->id."' ";
		}
		if ($vuidtype!='') {
			$wheresql .=" ".get_subordinate($_USER->id,'appperson');
		}
		
		$sql = "SELECT * FROM ".DB_TABLEPRE."file_read WHERE 1 $wheresql  ORDER BY id desc";
		$result = $db->query($sql);
		while ($row = $db->fetch_array($result)) {
			$archive = array(
				"".$row[filenumber]."",
				"".$row[filename]."",
				"".get_realname($row['appperson'])."",
				"".get_realname($row[examperson])."",
				"".str_replace("-",".",$row[appdate])."",
				"".str_replace("-",".",$row[examdate])."",
				"".str_replace("-",".",$row[date]).""
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