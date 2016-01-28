<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');

get_key("job_hire");
empty($do) && $do = 'list';
if ($do == 'edit') {
	$id = getGP('id','G','int');
	$blog = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."job_hire  WHERE id = '$id'  ");
	include_once('template/job_hire_edit.php');

} elseif ($do == 'save') {
	
	$savetype = getGP('savetype','P');
	$id = getGP('id','P','int');
	$job_talent = getGP('job_talent','P');
	$jobpost = getGP('jobpost','P');
	$user = getGP('user','P');
	$department = getGP('department','P');
	$hiredate = getGP('hiredate','P');
	$job = getGP('job','P');
	$content = getGP('content','P');
	
	
	//主表信息
	$job_hire = array(
		'job_talent' => $job_talent,
		'jobpost' => $jobpost,
		'user' => $user,
		'department' => $department,
		'hiredate' => $hiredate,
		'job' => $job,
		'content' => $content
	);
	update_db('job_hire',$job_hire, array('id' => $id));
	$content=serialize($job_hire);
	$title='编辑人员录用';
	get_logadd($id,$content,$title,27,$_USER->id);
	show_msg('编辑人员录用信息成功！', 'admin.php?ac=job_hire&fileurl=jobs');
	

}
?>