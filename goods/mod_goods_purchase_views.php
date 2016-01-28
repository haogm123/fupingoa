<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');

get_key("goods_purchase");
empty($do) && $do = 'list';
if ($do == 'list') {
    $id = getGP('id','G','int');
    $sql = "SELECT * FROM ".DB_TABLEPRE."goods_purchase_view WHERE goods_purchase='".$id."'  ORDER BY id asc";
	$result = $db->fetch_all($sql);
	/////////////////////
	$blog = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."goods_purchase  WHERE id = '$id' ");
	include_once('template/goods_purchase_views.php');

}


?>