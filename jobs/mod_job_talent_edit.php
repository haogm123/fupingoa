<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');
get_key("job_talent");

empty($do) && $do = 'list';
if ($do == 'edit') {
	$id = getGP('id','G','int');
	$blog = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."job_talent  WHERE id = '$id'");
	include_once('template/job_talent_edit.php');

} elseif ($do == 'save') {
	
	$savetype = getGP('savetype','P');
	$id = getGP('id','P','int');
	$number = getGP('number','P');
	$jobpost = getGP('jobpost','P');
	$name = getGP('name','P');
	$sex = getGP('sex','P');
	$contact = getGP('contact','P');
	$job = getGP('job','P');
	$education = getGP('education','P');
	$appendix = getGP('appendix','P');
	$content = getGP('content','P');
	
	
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
		'content' => $content
	);
	update_db('job_talent',$job_talent, array('id' => $id));
	$content=serialize($job_talent);
	$title='编辑人才库';
	get_logadd($id,$content,$title,27,$_USER->id);
	show_msg('编辑人才库成功！', 'admin.php?ac=job_talent&fileurl=jobs');
	

}
?>