<?php
/*
	[Office 515158] (C) 2009-2012 天生创想 Inc.
	$Id: function_goods.php 1209087 2012-01-08 08:58:28Z baiwei.jiang $
*/
!defined('IN_TOA') && exit('Access Denied!');
//获取分类列表
function get_goods_type($fatherid=0,$selid=0,$layer=0)
{
	$str=""; 
    global $db;
	$query = $db->query("SELECT * FROM ".DB_TABLEPRE."goods_type where father='$fatherid' ORDER BY id Asc  ");
	
	if(count($query)>0){
	   for($i=0;$i<$layer;$i++){
	   
	   $str.="├";
	   
	   }
	while ($row = $db->fetch_array($query)) {
	$selstr = $row['id'] == $selid ? 'selected="selected"' : '';
	
	$htmlstr= '<option value="'.$row['id'].'"  '.$selstr.'>'.$str.$row['title'].'</option>';
	
	echo $htmlstr;

	get_goods_type($row['id'],$selid,$layer+1,$type);
	
	}

	}
	
   return ;

}
//获取分类名称
function get_goods_type_name($id=0)
{
	global $db;
	if(trim($id)){
		$sql = "SELECT * FROM ".DB_TABLEPRE."goods_type where id=".$id."";
		if($result = $db->fetch_one_array($sql)){
			return $result['title'];
		}
	}
}
//专为导出采购单用
function get_goods_purchase_view($id){
	global $db;
	$html='';
	$query = $db->query("SELECT * FROM ".DB_TABLEPRE."goods_purchase_view WHERE goods_purchase='".$id."'  ORDER BY id asc");
	while ($row = $db->fetch_array($query)) {
		$html.=$row['title'].' / '.$row['specification'].' / '.$row['unit'].' / '.$row['goodsnumber'].' / '.$row['price'].'RMB  ----------------------------------';
	}
	return $html;
}
?>