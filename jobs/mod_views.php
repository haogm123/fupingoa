<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');


empty($do) && $do = 'list';
if ($do == 'edit') {
	$id = getGP('id','G','int');
	if($_GET["keys"]=='1'){
	
	$blog = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."job  WHERE id = '$id' and examination like '%".get_realname($_USER->id)."%'  ");
	if ($blog["examination"]==''){
	prompt('对不起，你没有权限执行本操作！');
	}
	}else{
	$blog = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."job  WHERE id = '$id' ");
	}
	include_once('template/views.php');

} elseif ($do == 'save') {
	
	$savetype = getGP('savetype','P');
	$id = getGP('id','P','int');
	$type = getGP('type','P');
	
	//主表信息
	$job = array(
		'type' => $type,
		'examinationdate' => get_date('Y-m-d H:i:s',PHP_TIME)
	);
	update_db('job',$job, array('id' => $id));
	$content=serialize($job);
	$title='审批招聘计划';
	get_logadd($id,$content,$title,27,$_USER->id);
	show_msg('审批招聘计划信息成功！', 'admin.php?ac=index&fileurl=jobs');
	

}

?>