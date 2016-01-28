<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');
get_key("job_hire");

empty($do) && $do = 'list';
if ($do == 'list') {
	//列表信息 
	$wheresql = '';
	$page = max(1, getGP('page','G','int'));
	$pagesize = $_CONFIG->config_data('pagenum');
	$offset = ($page - 1) * $pagesize;
	$url = 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'';
	if ($job = getGP('job','G')) {
		$wheresql .= " AND job='".$job."'";
		$url .= '&job='.rawurlencode($job);
	}
	if ($department = getGP('department','G')) {
		$wheresql .= " AND department='".$department."'";
		$url .= '&department='.rawurlencode($department);
	}
	if ($jobpost = getGP('jobpost','G')) {
		$wheresql .= " AND jobpost='".$jobpost."'";
		$url .= '&jobpost='.rawurlencode($jobpost);
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
	$num = $db->result("SELECT COUNT(*) AS num FROM ".DB_TABLEPRE."job_hire WHERE 1 $wheresql");
     $sql = "SELECT * FROM ".DB_TABLEPRE."job_hire WHERE 1 $wheresql ORDER BY id desc LIMIT $offset, $pagesize";
	$result = $db->fetch_all($sql);
	include_once('template/job_hire.php');

} elseif ($do == 'update') {
	$idarr = getGP('id','P','array');
	foreach ($idarr as $id) {
		$db->query("DELETE FROM ".DB_TABLEPRE."job_hire WHERE id = '$id'  ");	
	}
	$content=serialize($idarr);
	$title='删除人员录用信息';
	get_logadd($id,$content,$title,27,$_USER->id);
	show_msg('删除人员录用信息成功！', 'admin.php?ac=job_hire&fileurl=jobs');

}elseif ($do == 'excel') {
	$datename="job_".get_date('YmdHis',PHP_TIME);
	$outputFileName = 'data/excel/'.$datename.'.xls';
		$content = array();
		$archive=array("被录用人","招聘计划","录用负责人","用人部门","录用日期","录用岗位","备注","发布人","日期");
		$content[] = $archive;
		$wheresql = '';
		if ($job = getGP('job','P')) {
			$wheresql .= " AND job='".$job."'";
		}
		if ($department = getGP('department','P')) {
			$wheresql .= " AND department='".$department."'";
		}
		if ($jobpost = getGP('jobpost','P')) {
			$wheresql .= " AND jobpost='".$jobpost."'";
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
		
		
		$sql = "SELECT * FROM ".DB_TABLEPRE."job_hire WHERE 1 $wheresql ORDER BY id desc";
		$result = $db->query($sql);
		while ($row = $db->fetch_array($result)) {	
			$archive = array(
				"".get_talent_name($row['job_talent'])."",
				"".get_job_name($row['jobpost'])."",
				"".$row['user']."",
				"".$row[department]."",
				"".str_replace("-",".",$row[hiredate])."",
				"".get_postname($row['job'])."",
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