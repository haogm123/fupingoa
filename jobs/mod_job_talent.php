<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');
get_key("job_talent");

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
		$wheresql .= " AND jobpost='".$jobpost."'";
		$url .= '&jobpost='.rawurlencode($jobpost);
	}
	if ($job = getGP('job','G')) {
		$wheresql .= " AND job='".$job."'";
		$url .= '&job='.rawurlencode($job);
	}
	if ($education = getGP('education','G')) {
		$wheresql .= " AND education='".$education."'";
		$url .= '&education='.rawurlencode($education);
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
	$num = $db->result("SELECT COUNT(*) AS num FROM ".DB_TABLEPRE."job_talent WHERE 1 $wheresql ");
     $sql = "SELECT * FROM ".DB_TABLEPRE."job_talent WHERE 1 $wheresql  ORDER BY id desc LIMIT $offset, $pagesize";
	$result = $db->fetch_all($sql);
	include_once('template/job_talent.php');

} elseif ($do == 'update') {
	$idarr = getGP('id','P','array');
	foreach ($idarr as $id) {
		$db->query("DELETE FROM ".DB_TABLEPRE."job_talent WHERE id = '$id'  ");
		$db->query("DELETE FROM ".DB_TABLEPRE."job_hire WHERE job_talent = '$id'  ");	
	}
	$content=serialize($idarr);
	$title='删除人才库信息';
	get_logadd($id,$content,$title,27,$_USER->id);
	show_msg('删除人才库信息成功！', 'admin.php?ac=job_talent&fileurl=jobs');

}elseif ($do == 'excel') {
	$datename="job_".get_date('YmdHis',PHP_TIME);
	$outputFileName = 'data/excel/'.$datename.'.xls';
		$content = array();
		$archive=array("人才编号","招聘计划","姓名","性别","联系电话","应聘岗位","学历","发布人","附件简历","简历","发布人","日期");
		$content[] = $archive;
		$wheresql = '';
		if ($number = getGP('number','P')) {
			$wheresql .= " AND number='".$number."'";
		}
		if ($jobpost = getGP('jobpost','P')) {
			$wheresql .= " AND jobpost='".$jobpost."'";
		}
		if ($job = getGP('job','P')) {
			$wheresql .= " AND job='".$job."'";
		}
		if ($education = getGP('education','P')) {
			$wheresql .= " AND education='".$education."'";
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
		
		
		$sql = "SELECT * FROM ".DB_TABLEPRE."job_talent WHERE 1 $wheresql ORDER BY id desc";
		$result = $db->query($sql);
		while ($row = $db->fetch_array($result)) {	
			$archive = array(
				"".$row[number]."",
				"".get_job_name($row[jobpost])."",
				"".$row[name]."",
				"".$row[sex]."",
				"".$row[contact]."",
				"".get_postname($row[job])."",
				"".get_typename($row[education])."",
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