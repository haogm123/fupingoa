<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');

get_key("file_type_Increase");
empty($do) && $do = 'list';
if ($do == 'list') {
	include_once('template/file_type_add.php');

} elseif ($do == 'save') {
	$savetype = getGP('savetype','P');
	$title = getGP('title','P');
	$father=getGP('father','P');
	$keyuser=getGP('keyuser','P');
	$file_type = array(
		'title' => $title,
		'father' => $father,
		'keyuser' => $keyuser,
		'date' => get_date('Y-m-d',PHP_TIME),
		'uid' => $_USER->id
	);
	insert_db('file_type',$file_type);
	$id=$db->insert_id();
	$content=serialize($file_type);
	$title='新增档案类别';
	get_logadd($id,$content,$title,20,$_USER->id);
	show_msg('新增档案类别信息成功！', 'admin.php?ac=file_type&fileurl=file');

}
?>