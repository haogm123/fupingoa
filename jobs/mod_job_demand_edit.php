<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');

get_key("job_demand");
empty($do) && $do = 'list';
if ($do == 'edit') {
	$id = getGP('id','G','int');
	$blog = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."job_demand  WHERE id = '$id'");
	include_once('template/job_demand_edit.php');

} elseif ($do == 'save') {
	
	$savetype = getGP('savetype','P');
	$id = getGP('id','P','int');
	$number = getGP('number','P');
	$jobpost = getGP('jobpost','P');
	$persondate = getGP('persondate','P');
	$jobnum = getGP('jobnum','P');
	$department = getGP('department','P');
	$appendix = getGP('appendix','P');
	$content = getGP('content','P');
	//主表信息
	$job_demand = array(
		'number' => $number,
		'jobpost' => $jobpost,
		'persondate' => $persondate,
		'jobnum' => $jobnum,
		'department' => $department,
		'appendix' => $appendix,
		'content' => $content
	);
	update_db('job_demand',$job_demand, array('id' => $id));
	$content=serialize($job_demand);
	$title='编辑招聘需求';
	get_logadd($id,$content,$title,27,$_USER->id);
	show_msg('编辑招聘需求成功！', 'admin.php?ac=job_demand&fileurl=jobs&blogtype=1');
	

}

?>