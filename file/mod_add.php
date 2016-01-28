<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');
get_key("file_Increase");

empty($do) && $do = 'list';
if ($do == 'list') {
	include_once('template/add.php');

} elseif ($do == 'save') {
	$savetype = getGP('savetype','P');
	$filetype = getGP('filetype','P');
	$filenumber=getGP('filenumber','P');
	$filename=getGP('filename','P');
	$enddate=getGP('enddate','P');
	$position=getGP('position','P');
	$page=getGP('page','P');
	$appendix=getGP('file1','P').",".getGP('file2','P').",".getGP('file3','P');
	$content=getGP('content','P');
	$file = array(
		'filetype' => $filetype,
		'filenumber' => $filenumber,
		'filename' => $filename,
		'enddate' => $enddate,
		'position' => $position,
		'page' => $page,
		'appendix' => $appendix,
		'content' => $content,
		'type' => '0',
		'date' => get_date('Y-m-d H:i:s',PHP_TIME),
		'uid' => $_USER->id
	);
	insert_db('file',$file);
	$id=$db->insert_id();
	$content=serialize($file);
	$title='新增档案信息';
	get_logadd($id,$content,$title,20,$_USER->id);
	show_msg('新增档案信息成功！', 'admin.php?ac=index&fileurl=file');

}
?>