<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');

get_key("job_demand");
empty($do) && $do = 'list';
if ($do == 'list') {
	include_once('template/job_demand_add.php');

} elseif ($do == 'save') {
	
	$savetype = getGP('savetype','P');
	$number = getGP('number','P');
	$jobpost = getGP('jobpost','P');
	$persondate = getGP('persondate','P');
	$jobnum = getGP('jobnum','P');
	$department = getGP('department','P');
	$appendix = getGP('appendix','P');
	$content = getGP('content','P');
	$date=get_date('Y-m-d H:i:s',PHP_TIME);
	//主表信息
	$job_demand = array(
		'number' => $number,
		'jobpost' => $jobpost,
		'persondate' => $persondate,
		'jobnum' => $jobnum,
		'department' => $department,
		'appendix' => $appendix,
		'content' => $content,
		'date' => $date,
		'uid' => $_USER->id
	);
	//写入主表信息
	insert_db('job_demand',$job_demand);
	$id=$db->insert_id();
	$content=serialize($job_demand);
	$title='新增招聘需求';
	get_logadd($id,$content,$title,27,$_USER->id);
	show_msg('新增招聘需求成功！', 'admin.php?ac=job_demand&fileurl=jobs&blogtype=1');

}
?>