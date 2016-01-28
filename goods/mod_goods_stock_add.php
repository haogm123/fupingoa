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
	$goodsid="515158";
    $idarr = getGP('id','P','array');
	foreach ($idarr as $id) {
		$goodsid=$goodsid.",".$id;
	}
	//echo str_replace("515158,","",$goodsid);
	//exit;
    $sql = "SELECT * FROM ".DB_TABLEPRE."office_goods WHERE id in(".str_replace("515158,","",$goodsid).")   ORDER BY id desc";
	$result = $db->fetch_all($sql);
	if(str_replace("515158","",$goodsid)!=''){
	include_once('template/goods_stock_add.php');
	}else{
	goto_page('admin.php?ac=goods_stock_goodsadd&fileurl=goods');
	}
	

} elseif ($do == 'save') {

	$savetype = getGP('savetype','P');
	$type=getGP('type','P');
	$content=getGP('content','P');
	//计算总价
	$idarr = getGP('id','P','array');
	$arr_id="515158";
	foreach ($idarr as $id) {
		$arr_id=$arr_id.",".$id;
	}
	//
	$goods_typearr = getGP('goods_type','P','array');
	$arr_goods_type="515158";
	foreach ($goods_typearr as $goods_type) {
		$arr_goods_type=$arr_goods_type.",".$goods_type;
	}
	//
	$titlearr = getGP('title','P','array');
	$arr_title="515158";
	foreach ($titlearr as $title) {
		$arr_title=$arr_title.",".$title;
	}
	//
	$specificationarr = getGP('specification','P','array');
	$arr_specification="515158";
	foreach ($specificationarr as $specification) {
		$arr_specification=$arr_specification.",".$specification;
	}
	//
	$unitarr = getGP('unit','P','array');
	$arr_unit="515158";
	foreach ($unitarr as $unit) {
		$arr_unit=$arr_unit.",".$unit;
	}
	//
	$pricearr = getGP('price','P','array');
	$arr_price="515158";
	foreach ($pricearr as $price) {
		$arr_price=$arr_price.",".$price;
	}
	//
	$numberarr = getGP('number','P','array');
	$arr_number="515158";
	foreach ($numberarr as $number) {
		$arr_number=$arr_number.",".$number;
	}
	//
	$purchasearr = getGP('purchase','P','array');
	$arr_purchase="515158";
	foreach ($purchasearr as $purchase) {
		$arr_purchase=$arr_purchase.",".$purchase;
	}
	
	$id=explode(',',str_replace("515158,","",$arr_id));
	$goods_type=explode(',',str_replace("515158,","",$arr_goods_type));
	$title=explode(',',str_replace("515158,","",$arr_title));
	$specification=explode(',',str_replace("515158,","",$arr_specification));
	$unit=explode(',',str_replace("515158,","",$arr_unit));
	$price=explode(',',str_replace("515158,","",$arr_price));
	$number=explode(',',str_replace("515158,","",$arr_number));
	$purchase=explode(',',str_replace("515158,","",$arr_purchase));
	
	for($i=0;$i<sizeof($id);$i++)
	{
	  $office_goods_stock = array(
		'officegoods' => $id[$i],
		'goods_type' => $goods_type[$i],
		'title' => $title[$i],
		'specification' => $specification[$i],
		'unit' => $unit[$i],
		'price' => $price[$i],
		'number' => $number[$i],
		'content' => $content,
		'purchase' => $purchase[$i],
		'type' => $type,
		'date' =>get_date('y-m-d H:i:s',PHP_TIME),
		'uid' => $_USER->id
	);
	insert_db('office_goods_stock',$office_goods_stock);
	}
	//$content=$goods_type.get_log(1).$title.get_log(1).$specification.get_log(1).$unit.get_log(1).$price.get_log(1).$number.get_log(1).$content.get_log(1).$purchase.get_log(1).$examination.get_log(1).$warehousing;
	//$title='新增办公用品信息';
	//get_logadd($id,$content,$title,23,$_USER->id);
	show_msg('办公用品库存信息操作成功！', 'admin.php?ac=goods_stock&fileurl=goods');

}


?>