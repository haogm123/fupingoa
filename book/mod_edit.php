<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');

get_key("book");
empty($do) && $do = 'list';
if ($do == 'edit') {
	$id = getGP('id','G','int');
	$blog = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."book  WHERE id = '$id' ");
	include_once('template/edit.php');

} elseif ($do == 'save') {
	$savetype = getGP('savetype','P');
	$id = getGP('id','P','int');
	$booktype = getGP('booktype','P');
	$bookumber=getGP('bookumber','P');
	$bookname=getGP('bookname','P');
	$author=getGP('author','P');
	$publishing=getGP('publishing','P');
	$appendix=getGP('appendix','P');
	$booknum=getGP('booknum','P');
	$content=getGP('content','P');
	$book = array(
		'booktype' => $booktype,
		'bookumber' => $bookumber,
		'bookname' => $bookname,
		'author' => $author,
		'publishing' => $publishing,
		'appendix' => $appendix,
		'booknum' => $booknum,
		'content' => $content
	);
	update_db('book',$book, array('id' => $id));
	$content=serialize($book);
	$title='编辑图书信息';
	get_logadd($id,$content,$title,22,$_USER->id);
	show_msg('图书信息编辑成功！', 'admin.php?ac=index&fileurl=book');

}
?>