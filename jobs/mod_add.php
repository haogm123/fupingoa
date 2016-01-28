<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');

get_key("job_");
empty($do) && $do = 'list';
if ($do == 'list') {
	include_once('template/add.php');

} elseif ($do == 'save') {
	
	$savetype = getGP('savetype','P');
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
	$date=get_date('Y-m-d H:i:s',PHP_TIME);
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
		'content' => $content,
		'type' => 1,
		'date' => $date,
		'uid' => $_USER->id
	);
	//写入主表信息
	insert_db('job',$job);
	$id=$db->insert_id();
	$content=serialize($job);
	$title='添加招聘计划';
	get_logadd($id,$content,$title,27,$_USER->id);
	show_msg('添加招聘计划成功！', 'admin.php?ac=index&fileurl=jobs');

}
?>