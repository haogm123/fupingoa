<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');

get_key("goods_purchase");
empty($do) && $do = 'list';
if ($do == 'list') {
	$goodsid="515158";
    $idarr = getGP('id','P','array');
	foreach ($idarr as $id) {
		$goodsid=$goodsid.",".$id;
	}
    $sql = "SELECT * FROM ".DB_TABLEPRE."office_goods WHERE id in(".str_replace("515158,","",$goodsid).")   ORDER BY id desc";
	$result = $db->fetch_all($sql);
	if(str_replace("515158","",$goodsid)!=''){
	include_once('template/goods_purchase_add.php');
	}else{
	show_msg('您要处理的信息操作成功！', 'admin.php?ac=goods_purchase_goodsadd&fileurl=goods');
	}
	

} elseif ($do == 'save') {

	$savetype = getGP('savetype','P');
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
		'purchase' => $purchase,
		'key1' => 1,
		'uid' => $_USER->id
	);
	insert_db('goods_purchase',$goods_purchase);
	$id=$db->insert_id();
	for($i=0;$i<sizeof($ids);$i++)
	{
	  $goods_purchase_view = array(
		'goods_purchase' => $id,
		'officegoods' => $ids[$i],
		'title' => $goods_title[$i],
		'specification' => $goods_specification[$i],
		'unit' => $goods_unit[$i],
		'price' => $goods_price[$i],
		'goodsnumber' => $goods_goodsnumber[$i],
		'date' =>get_date('y-m-d H:i:s',PHP_TIME),
		'uid' => $_USER->id
	);
	insert_db('goods_purchase_view',$goods_purchase_view);
	}
	
	//发送提示信息
	//短消息
	if(getGP('sms_info_box_purchase','P')!=''){
		$content='您有一个采购任务需要执行,编号为：'.$number.';请进行处理!<a href="admin.php?ac=goods_purchase_views&do=list&fileurl=goods&id='.$id.'">点击处理>></a>';
		//接收人；内容；类型（1：有返回回值;0：无返回值）;URL
		SMS_ADD_POST($purchase,$content,0,0,$_USER->id);
	}
	//手机短信
	if(getGP('sms_phone_box_purchase','P')!=''){
		$content='您有一个采购任务需要执行,编号为：'.$number.';请登录OA进行处理!';
		PHONE_ADD_POST(getGP('purchasephone','P'),$content,$purchase,0,0,$_USER->id);
	}
	show_msg('您要处理的信息操作成功！', 'admin.php?ac=goods_purchase&fileurl='.$fileurl.'');

}


?>