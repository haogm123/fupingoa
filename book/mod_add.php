<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');

get_key("book");
empty($do) && $do = 'list';
if ($do == 'list') {
	include_once('template/add.php');

} elseif ($do == 'save') {
	$savetype = getGP('savetype','P');
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
		'content' => $content,
		'type' => '0',
		'date' => get_date('Y-m-d H:i:s',PHP_TIME),
		'uid' => $_USER->id
	);
	insert_db('book',$book);
	$id=$db->insert_id();
	$content=serialize($book);
	$title='新增图书信息';
	get_logadd($id,$content,$title,22,$_USER->id);
    show_msg('图书信息发布成功！', 'admin.php?ac=index&fileurl=book');

}
?>