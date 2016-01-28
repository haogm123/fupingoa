<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');
get_key("file_type_edit");

empty($do) && $do = 'list';
if ($do == 'edit') {
	$id = getGP('id','G','int');
	$workdate = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."file_type  WHERE id = '$id'");
	include_once('template/file_type_edit.php');

} elseif ($do == 'save') {
	
	$savetype = getGP('savetype','P');
	$id = getGP('id','P','int');
	$title = getGP('title','P');
	$father = getGP('father','P');
	$keyuser=getGP('keyuser','P');
	//$uid=$_USER->id;
	$file_type = array(
		'title' => $title,
		'father' => $father,
		'keyuser' => $keyuser
	);
	update_db('file_type',$file_type, array('id' => $id));
	$content=serialize($file_type);
	$title='编辑档案类别';
	get_logadd($id,$content,$title,20,$_USER->id);
	show_msg('编辑档案类别信息成功！', 'admin.php?ac=file_type&fileurl=file');
	

}

?>