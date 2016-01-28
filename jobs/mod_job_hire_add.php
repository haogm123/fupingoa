<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');

get_key("job_hire");
empty($do) && $do = 'list';
if ($do == 'list') {
	include_once('template/job_hire_add.php');

} elseif ($do == 'save') {
	
	$savetype = getGP('savetype','P');
	$job_talent = getGP('job_talent','P');
	$jobpost = getGP('jobpost','P');
	$user = getGP('user','P');
	$department = getGP('department','P');
	$hiredate = getGP('hiredate','P');
	$job = getGP('job','P');
	$content = getGP('content','P');
	$date=get_date('Y-m-d H:i:s',PHP_TIME);
	//主表信息
	$job_hire = array(
		'job_talent' => $job_talent,
		'jobpost' => $jobpost,
		'user' => $user,
		'department' => $department,
		'hiredate' => $hiredate,
		'job' => $job,
		'content' => $content,
		'date' => $date,
		'uid' => $_USER->id
	);
	//写入主表信息
	insert_db('job_hire',$job_hire);
	$id=$db->insert_id();
	$content=serialize($job_hire);
	$title='新增人员录用';
	get_logadd($id,$content,$title,27,$_USER->id);
	show_msg('新增人员录用信息成功！', 'admin.php?ac=job_hire&fileurl=jobs');

}
?>