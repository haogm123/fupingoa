<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');

get_key("office_goods_record");

empty($do) && $do = 'list';
if ($do == 'list') {
	//列表信息 
	$wheresql = '';
	$page = max(1, getGP('page','G','int'));
	$pagesize = $_CONFIG->config_data('pagenum');
	$offset = ($page - 1) * $pagesize;
	$url = 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'';

	if ($title = getGP('title','G')) {
		$wheresql .= " AND title LIKE '%$title%'";
		$url .= '&title='.rawurlencode($title);
	}
	//时间
	if ($number = getGP('number','G')) {
		$wheresql .= " AND number ='".$number."'";
		$url .= '&number='.rawurlencode($number);
	}
	if ($type = getGP('type','G')) {
		$wheresql .= " AND goods_type ='".$type."'";
		$url .= '&type='.rawurlencode($type);
	}
	
	
	$num = $db->result("SELECT COUNT(*) AS num FROM ".DB_TABLEPRE."office_goods WHERE 1 $wheresql");
     $sql = "SELECT * FROM ".DB_TABLEPRE."office_goods WHERE 1 $wheresql ORDER BY id desc LIMIT $offset, $pagesize";
	$result = $db->fetch_all($sql);

	include_once('template/goods_record.php');

}
?>