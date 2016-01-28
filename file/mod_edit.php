<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');


get_key("file_edit");
empty($do) && $do = 'list';
if ($do == 'edit') {
	$id = getGP('id','G','int');
	$blog = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."file  WHERE id = '$id'");
	include_once('template/edit.php');

} elseif ($do == 'save') {
	$savetype = getGP('savetype','P');
	$id = getGP('id','P','int');
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
		'content' => $content
	);
	update_db('file',$file, array('id' => $id));
	$content=serialize($file);
	$title='编辑档案信息';
	get_logadd($id,$content,$title,20,$_USER->id);
	show_msg('编辑档案信息成功！', 'admin.php?ac=index&fileurl=file');

}
?>