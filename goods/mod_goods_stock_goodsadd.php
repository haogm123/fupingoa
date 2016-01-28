<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');

get_key("office_goods_stock");
global $db;
$key1 = $db->result("SELECT * FROM ".DB_TABLEPRE."office_goods_key where warehousing like '%".get_realname($_USER->id)."%' ");
	if($key1["warehousing"]==''){
		prompt('对不起，你没有权限执行本操作！');
	}

empty($do) && $do = 'list';
if ($do == 'list') {
	//列表信息 
	$wheresql = '';
	$page = max(1, getGP('page','G','int'));
	$pagesize = $_CONFIG->config_data('pagenum');
	$offset = ($page - 1) * $pagesize;
	$url = 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'';
	$num = $db->result("SELECT COUNT(*) AS num FROM ".DB_TABLEPRE."office_goods WHERE 1 $wheresql");
     $sql = "SELECT * FROM ".DB_TABLEPRE."office_goods WHERE 1 $wheresql ORDER BY id desc LIMIT $offset, $pagesize";
	$result = $db->fetch_all($sql);

	include_once('template/goods_stock_goodsadd.php');

}
?>