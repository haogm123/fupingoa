<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');

get_key("job_");
empty($do) && $do = 'list';
if ($do == 'edit') {
	$id = getGP('id','G','int');
	$blog = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."job  WHERE id = '$id'  ");
	include_once('template/edit.php');

} elseif ($do == 'save') {
	
	$savetype = getGP('savetype','P');
	$id = getGP('id','P','int');
	$number = getGP('number','P');
	$jobpost = getGP('jobpost','P');
	$channel = getGP('channel','P');
	$price = getGP('price','P');
	$startdate = getGP('startdate','P');
	$enddate = getGP('enddate','P');
	$jobnum = getGP('jobnum','P');
	$examination = getGP('examination','P');
	$appendix = getGP('appendix','P');
	$content = getGP('content','P');	
	
	//主表信息
	$job = array(
		'number' => $number,
		'jobpost' => $jobpost,
		'channel' => $channel,
		'price' => $price,
		'startdate' => $startdate,
		'enddate' => $enddate,
		'jobnum' => $jobnum,
		'examination' => $examination,
		'appendix' => $appendix,
		'content' => $content
	);
	update_db('job',$job, array('id' => $id));
	$content=serialize($job);
	$title='编辑招聘计划';
	get_logadd($id,$content,$title,27,$_USER->id);
	show_msg('编辑招聘计划成功！', 'admin.php?ac=index&fileurl=jobs');
	

}

?>