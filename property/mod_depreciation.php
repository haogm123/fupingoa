<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');

get_key("property_depreciation");

empty($do) && $do = 'list';
if ($do == 'list') {
	//列表信息 
	$wheresql = '';
	$page = max(1, getGP('page','G','int'));
	$pagesize = $_CONFIG->config_data('pagenum');
	$offset = ($page - 1) * $pagesize;
	$url = 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'';
	if ($title = getGP('title','G')) {
		$wheresql .= " AND name LIKE '%$title%'";
		$url .= '&title='.rawurlencode($title);
	}
	//时间
	if ($number = getGP('number','G')) {
		$wheresql .= " AND number ='".$number."'";
		$url .= '&number='.rawurlencode($number);
	}
	$num = $db->result("SELECT COUNT(*) AS num FROM ".DB_TABLEPRE."property WHERE 1 $wheresql");
     $sql = "SELECT * FROM ".DB_TABLEPRE."property WHERE 1 $wheresql ORDER BY id desc LIMIT $offset, $pagesize";
	$result = $db->fetch_all($sql);

	include_once('template/depreciation.php');

} elseif ($do == 'edit') {
	
	$id = getGP('id','G','int');
	$sumdpct=getGP('sumdpct','G');
	$price=getGP('price','G');
	$property = array(
			'sum_dpct' => $sumdpct
		);
	update_db('property',$property, array('id' => $id));

//////////////////////////////////////////
	$property_depreciation = array(
			'propertyid' => $id,
			'price' => $price,
			'date' => get_date('Y-m-d H:i:s',PHP_TIME),
			'startdate' => get_date('Y-m',PHP_TIME),
			'enddate' => get_date('Y-m',PHP_TIME)
		);
	insert_db('property_depreciation',$property_depreciation);
	show_msg('固定资产折旧成功！', 'admin.php?ac=depreciation&fileurl=property');

}
?>