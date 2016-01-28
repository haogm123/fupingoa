<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');
get_key("book_key");
empty($do) && $do = 'list';
if ($do == 'list') {
	//列表信息 
	$wheresql = '';
	$page = max(1, getGP('page','G','int'));
	$pagesize = $_CONFIG->config_data('pagenum');
	$offset = ($page - 1) * $pagesize;
	$url = 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'';
	if ($title = getGP('title','G')) {
		$wheresql .= " AND bookname LIKE '%".$title."%'";
		$url .= '&title='.rawurlencode($title);
	}
	if ($number = getGP('number','G')) {
		$wheresql .= " AND booknumber ='".$number."'";
		$url .= '&number='.rawurlencode($number);
	}
	//时间
	$vstartdate = getGP('vstartdate','G');
	$venddate = getGP('venddate','G');
	if ($vstartdate!='' && $venddate!='') {
		$wheresql .= " AND (date>='".$vstartdate."' and date<='".$venddate."')";
		$url .= '&vstartdate='.$vstartdate.'&venddate='.$venddate;
	}
	$types = getGP('types','G');
	if ($type = getGP('type','G')) {
		$wheresql .= " AND type ='".$type."'";
		$url .= '&type='.$type.'&types='.$types;
	}
	$num = $db->result("SELECT COUNT(*) AS num FROM ".DB_TABLEPRE."book_read  WHERE 1 $wheresql ORDER BY id desc");
    $sql = "SELECT * FROM ".DB_TABLEPRE."book_read WHERE 1 $wheresql ORDER BY id desc LIMIT $offset, $pagesize";
	$result = $db->fetch_all($sql);

	include_once('template/file_read_key.php');

}elseif ($do == 'save') {
	$tid = getGP('tid','G');
	$ltype = getGP('ltype','G');
	$r = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."book_read where id='".$tid."'  ORDER BY id desc limit 0,1");
	$book = array(
		'type' => $ltype
	);
	update_db('book',$book, array('id' => $r[bookid]));
    
	$book_read = array(
		'type' => $ltype,
		'examperson' => $_USER->id,
		'examdate' => get_date('Y-m-d H:i:s',PHP_TIME)
	);
	update_db('book_read',$book_read, array('id' => $tid));
    $content=serialize($book_read);
	$title='图书审批';
	get_logadd($tid,$content,$title,22,$_USER->id);
    show_msg('图书信息审批成功！', 'admin.php?ac=file_read_key&fileurl=book&type='.getGP('type','G').'');

} elseif ($do == 'update') {
	
	get_key("book");
	$idarr = getGP('id','P','array');
	foreach ($idarr as $id) {
		$db->query("DELETE FROM ".DB_TABLEPRE."book_read WHERE id= '$id' ");
	}
	$content=serialize($idarr);
	$title='删除图书借阅信息';
	get_logadd($id,$content,$title,22,$_USER->id);	
	show_msg('图书借阅记录删除成功！', 'admin.php?ac=file_read_key&fileurl=book&type='.getGP('type','P').'');

}
?>