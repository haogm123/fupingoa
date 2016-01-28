<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');

get_key("goods_purchase");
empty($do) && $do = 'list';
if ($do == 'list') {
	//列表信息 
	$wheresql = '';
	$page = max(1, getGP('page','G','int'));
	$pagesize = $_CONFIG->config_data('pagenum');
	$offset = ($page - 1) * $pagesize;
	$url = 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'';
	$num = $db->result("SELECT COUNT(*) AS num FROM ".DB_TABLEPRE."office_goods WHERE 1 $wheresql  ");
     $sql = "SELECT * FROM ".DB_TABLEPRE."office_goods WHERE 1 $wheresql   ORDER BY id desc LIMIT $offset, $pagesize";
	$result = $db->fetch_all($sql);

	include_once('template/goods_purchase_goodsadd.php');

}
?>