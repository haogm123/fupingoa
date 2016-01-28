<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');

get_key("property_depreciation");
empty($do) && $do = 'list';
if ($do == 'edit') {
	//列表信息 
	 $id = getGP('id','G','int');
     $sql = "SELECT * FROM ".DB_TABLEPRE."property_depreciation WHERE propertyid='".$id."'  ORDER BY id desc";
	$result = $db->fetch_all($sql);
	include_once('template/depreciation_view.php');

} 
?>