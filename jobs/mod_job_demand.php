<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');
get_key("job_demand");

empty($do) && $do = 'list';
if ($do == 'list') {
	//列表信息 
	$wheresql = '';
	$page = max(1, getGP('page','G','int'));
	$pagesize = $_CONFIG->config_data('pagenum');
	$offset = ($page - 1) * $pagesize;
	$url = 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'';
	if ($number = getGP('number','G')) {
		$wheresql .= " AND number='".$number."'";
		$url .= '&number='.rawurlencode($number);
	}
	if ($jobpost = getGP('jobpost','G')) {
		$wheresql .= " AND jobpost LIKE '%".$jobpost."%'";
		$url .= '&jobpost='.rawurlencode($jobpost);
	}
	//时间
	$vstartdate = getGP('vstartdate','G');
	$venddate = getGP('venddate','G');
	if ($vstartdate!='' && $venddate!='') {
		$wheresql .= " AND (persondate>='".$vstartdate."' and persondate<='".$venddate."')";
		$url .= '&vstartdate='.$vstartdate.'&venddate='.$venddate;
	}
	$vuidtype = getGP('vuidtype','G');
	if(!is_superadmin() && $vuidtype==''){
		$wheresql .= " AND uid = $_USER->id";
	}
	if ($vuidtype!='') {
		if($vuidtype=='-1'){
				$wheresql .= get_subordinate($_USER->id,'uid');
			}else{
				$wheresql .= " and uid='".$vuidtype."'";
			}
		$url .= '&vuidtype='.$vuidtype;
	}
	$ischeck = getGP('ischeck','G');
	$url .= '&ischeck='.$ischeck;
	if ($ischeck=='1') {
		$wheresql .= " AND DATE_SUB(CURDATE(), INTERVAL 1 DAY)<=date(date) ";
	}
	if ($ischeck=='2') {
		$getdate=get_date('Y-m',PHP_TIME)."-".(get_date('d',PHP_TIME)-1);
		$wheresql .= " AND date ='".$getdate."' ";	
	}
	if ($ischeck=='3') {
		$wheresql .= " AND DATE_SUB(CURDATE(), INTERVAL 7 DAY)<=date(date) ";	
	}
	if ($ischeck=='4') {
		$wheresql .= " AND DATE_SUB(CURDATE(),INTERVAL 1 MONTH)<=date(date) ";	
	}
	if ($ischeck=='5') {
		$wheresql .= " AND DATE_SUB(CURDATE(),INTERVAL 6 MONTH)<=date(date) ";	
	}
	$num = $db->result("SELECT COUNT(*) AS num FROM ".DB_TABLEPRE."job_demand WHERE 1 $wheresql");
     $sql = "SELECT * FROM ".DB_TABLEPRE."job_demand WHERE 1 $wheresql ORDER BY id desc LIMIT $offset, $pagesize";
	$result = $db->fetch_all($sql);

	include_once('template/job_demand.php');

} elseif ($do == 'update') {
	
	$idarr = getGP('id','P','array');
	foreach ($idarr as $id) {
		$db->query("DELETE FROM ".DB_TABLEPRE."job_demand WHERE id = '$id' ");	
	}
	$content=serialize($idarr);
	$title='删除招聘需求信息';
	get_logadd($id,$content,$title,27,$_USER->id);
	show_msg('招聘需求删除成功！', 'admin.php?ac=job_demand&fileurl=jobs');

}elseif ($do == 'excel') {
	$datename="job_".get_date('YmdHis',PHP_TIME);
	$outputFileName = 'data/excel/'.$datename.'.xls';
		$content = array();
		$archive=array("需求编号","招聘岗位","用人日期","招聘人数","招聘部门","附件","岗位要求","发布人","日期");
		$content[] = $archive;
		$wheresql = '';
		if ($number = getGP('number','P')) {
			$wheresql .= " AND number='".$number."'";
		}
		if ($jobpost = getGP('jobpost','P')) {
			$wheresql .= " AND jobpost LIKE '%".$jobpost."%'";
		}
		//时间
		$vstartdate = getGP('vstartdate','P');
		$venddate = getGP('venddate','P');
		if ($vstartdate!='' && $venddate!='') {
			$wheresql .= " AND (persondate>='".$vstartdate."' and persondate<='".$venddate."')";
		}
		$vuidtype = getGP('vuidtype','P');
		if(!is_superadmin() && $vuidtype==''){
			$wheresql .= " AND uid = $_USER->id";
		}
		if ($vuidtype!='') {
			if($vuidtype=='-1'){
				$wheresql .= get_subordinate($_USER->id,'uid');
			}else{
				$wheresql .= " and uid='".$vuidtype."'";
			}
		}
		
		
		$ischeck = getGP('ischeck','P');
		if ($ischeck=='1') {
			$wheresql .= " AND DATE_SUB(CURDATE(), INTERVAL 1 DAY)<=date(date) ";
		}
		if ($ischeck=='2') {
			$getdate=get_date('Y-m',PHP_TIME)."-".(get_date('d',PHP_TIME)-1);
			$wheresql .= " AND date ='".$getdate."' ";	
		}
		if ($ischeck=='3') {
			$wheresql .= " AND DATE_SUB(CURDATE(), INTERVAL 7 DAY)<=date(date) ";	
		}
		if ($ischeck=='4') {
			$wheresql .= " AND DATE_SUB(CURDATE(),INTERVAL 1 MONTH)<=date(date) ";	
		}
		if ($ischeck=='5') {
			$wheresql .= " AND DATE_SUB(CURDATE(),INTERVAL 6 MONTH)<=date(date) ";	
		}
		$sql = "SELECT * FROM ".DB_TABLEPRE."job_demand WHERE 1 $wheresql ORDER BY id desc";
		$result = $db->query($sql);
		while ($row = $db->fetch_array($result)) {	
			$archive = array(
				"".$row[number]."",
				"".$row[jobpost]."",
				"".str_replace("-",".",$row[persondate])."",
				"".$row[jobnum]."",
				"".$row[department]."",
				"".$row[appendix]."",
				"".$row[content]."",
				"".get_realname($row['uid'])."",
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