<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');

get_key("book_read");
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
		$wheresql .= " AND bookumber ='".$number."'";
		$url .= '&number='.rawurlencode($number);
	}
	if ($filetype = getGP('filetype','G')) {
		$wheresql .= " AND booktype ='".$filetype."'";
		$url .= '&filetype='.rawurlencode($filetype);
	}
	//时间
	$vstartdate = getGP('vstartdate','G');
	$venddate = getGP('venddate','G');
	if ($vstartdate!='' && $venddate!='') {
		$wheresql .= " AND (date>='".$vstartdate."' and date<='".$venddate."')";
		$url .= '&vstartdate='.$vstartdate.'&venddate='.$venddate;
	}
	$vuidtype = getGP('vuidtype','G');
	if(!is_superadmin() && $vuidtype==''){
		$wheresql .= " AND uid = $_USER->id";
	}
	if ($vuidtype!='') {
		$wheresql .=" ".get_subordinate($_USER->id,'uid');
		$url .= '&vuidtype='.$vuidtype;
	}
	
	$num = $db->result("SELECT COUNT(*) AS num FROM ".DB_TABLEPRE."book WHERE 1 $wheresql");
     $sql = "SELECT * FROM ".DB_TABLEPRE."book WHERE 1 $wheresql ORDER BY id desc LIMIT $offset, $pagesize";
	$result = $db->fetch_all($sql);

	include_once('template/indexsearch.php');

} elseif ($do == 'save') {
	$id = getGP('id','G','int');
	
	//读取数据
	$r = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."book where id='".$id."'  ORDER BY id desc limit 0,1");
	$booknumber = $r[bookumber];
	$bookname = $r[bookname];
	$appperson = $_USER->id;
	$examperson = '0';
	$appdate =get_date('Y-m-d H:i:s',PHP_TIME);
	$type ='1';
	$date =get_date('Y-m-d H:i:s',PHP_TIME);
	$book_read = array(
		'bookid' => $id,
		'booknumber' => $booknumber,
		'bookname' => $bookname,
		'appperson' => $appperson,
		'appdate' => $appdate,
		'type' => $type,
		'date' => $date
	);
	$book = array(
		'type' => $type
	);
	//写入主表信息
	insert_db('book_read',$book_read);
	$content=serialize($book_read);
	$title='图书借阅';
	get_logadd($id,$content,$title,22,$_USER->id);
	update_db('book',$book, array('id' => $id));
	show_msg('图书申请成功！', 'admin.php?ac=file_read&type=1&fileurl=book');

}
?>