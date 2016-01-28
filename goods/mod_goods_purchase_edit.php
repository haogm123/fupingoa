<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');

get_key("goods_purchase");
empty($do) && $do = 'list';
if ($do == 'list') {
    $id = getGP('id','G','int');
    $sql = "SELECT * FROM ".DB_TABLEPRE."goods_purchase_view WHERE goods_purchase='".$id."'   ORDER BY id asc";
	$result = $db->fetch_all($sql);
	/////////////////////
	$blog = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."goods_purchase  WHERE id = '$id'  ");
	include_once('template/goods_purchase_edit.php');

} elseif ($do == 'save') {

	$savetype = getGP('savetype','P');
	$gid = getGP('gid','P','int');
	$number = getGP('number','P');
	$application=getGP('application','P');
	$startdate=getGP('startdate','P');
	$purchase=getGP('purchase','P');
	$content=getGP('content','P');
	//计算总价
	$idarr = getGP('id','P','array');
	$arr_id="515158";
	foreach ($idarr as $id) {
		$arr_id=$arr_id.",".$id;
	}
	////////
	$goods_titlearr = getGP('goods_title','P','array');
	$arr_goods_title="515158";
	foreach ($goods_titlearr as $goods_title) {
		$arr_goods_title=$arr_goods_title.",".$goods_title;
	}
	////////
	$goods_specificationarr = getGP('goods_specification','P','array');
	$arr_goods_specification="515158";
	foreach ($goods_specificationarr as $goods_specification) {
		$arr_goods_specification=$arr_goods_specification.",".$goods_specification;
	}
	////////
	$goods_unitarr = getGP('goods_unit','P','array');
	$arr_goods_unit="515158";
	foreach ($goods_unitarr as $goods_unit) {
		$arr_goods_unit=$arr_goods_unit.",".$goods_unit;
	}
	////////
	$goods_goodsnumberarr = getGP('goods_goodsnumber','P','array');
	$arr_goods_goodsnumber="515158";
	foreach ($goods_goodsnumberarr as $goods_goodsnumber) {
		$arr_goods_goodsnumber=$arr_goods_goodsnumber.",".$goods_goodsnumber;
	}
	////////
	$goods_pricearr = getGP('goods_price','P','array');
	$arr_goods_price="515158";
	foreach ($goods_pricearr as $goods_price) {
		$arr_goods_price=$arr_goods_price.",".$goods_price;
	}
	$ids=explode(',',str_replace("515158,","",$arr_id));
	$goods_title=explode(',',str_replace("515158,","",$arr_goods_title));
	$goods_specification=explode(',',str_replace("515158,","",$arr_goods_specification));
	$goods_unit=explode(',',str_replace("515158,","",$arr_goods_unit));
	$goods_goodsnumber=explode(',',str_replace("515158,","",$arr_goods_goodsnumber));
	$goods_price=explode(',',str_replace("515158,","",$arr_goods_price));
	$pricenum='0';
	for($i=0;$i<sizeof($ids);$i++)
	{
	  $pricenum=$pricenum+($goods_goodsnumber[$i]*$goods_price[$i]);
	}
	
	$goods_purchase = array(
		'application' => $application,
		'number' => $number,
		'startdate' => $startdate,
		'pricenum' => $pricenum,
		'content' => $content,
		'purchase' => $purchase
	);
	update_db('goods_purchase',$goods_purchase, array('id' => $gid));
	//insert_db('goods_purchase',$goods_purchase);
	//$id=$db->insert_id();
	for($i=0;$i<sizeof($ids);$i++)
	{
	  $goods_purchase_view = array(
		'title' => $goods_title[$i],
		'specification' => $goods_specification[$i],
		'unit' => $goods_unit[$i],
		'price' => $goods_price[$i],
		'goodsnumber' => $goods_goodsnumber[$i]
	);
	update_db('goods_purchase_view',$goods_purchase_view, array('id' => $ids[$i]));
	//insert_db('goods_purchase_view',$goods_purchase_view);
	}
	show_msg('您要处理的信息操作成功！', 'admin.php?ac=goods_purchase&fileurl='.$fileurl.'');

}


?>