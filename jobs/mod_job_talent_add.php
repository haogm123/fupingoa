<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');

get_key("job_talent");
empty($do) && $do = 'list';
if ($do == 'list') {
	include_once('template/job_talent_add.php');

} elseif ($do == 'save') {
	
	$savetype = getGP('savetype','P');
	$number = getGP('number','P');
	$jobpost = getGP('jobpost','P');
	$name = getGP('name','P');
	$sex = getGP('sex','P');
	$contact = getGP('contact','P');
	$job = getGP('job','P');
	$education = getGP('education','P');
	$appendix = getGP('appendix','P');
	$content = getGP('content','P');
	$date=get_date('Y-m-d H:i:s',PHP_TIME);
	//主表信息
	$job_talent = array(
		'number' => $number,
		'jobpost' => $jobpost,
		'name' => $name,
		'sex' => $sex,
		'contact' => $contact,
		'job' => $job,
		'education' => $education,
		'appendix' => $appendix,
		'content' => $content,
		'date' => $date,
		'uid' => $_USER->id
	);
	//写入主表信息
	insert_db('job_talent',$job_talent);
	$id=$db->insert_id();
	$content=serialize($job_talent);
	$title='新增人才库';
	get_logadd($id,$content,$title,27,$_USER->id);
	show_msg('新增人才库成功！', 'admin.php?ac=job_talent&fileurl=jobs');

}
?>