<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');

get_key("office_goods");
empty($do) && $do = 'list';
if ($do == 'list') {
	include_once('template/add.php');

} elseif ($do == 'save') {
	$savetype = getGP('savetype','P');
	$goods_type = getGP('goods_type','P');
	$title=getGP('title','P');
	$specification=getGP('specification','P');
	$unit=getGP('unit','P');
	$price=getGP('price','P');
	$number=getGP('number','P');
	$content=getGP('content','P');
	//$purchase=getGP('purchase','P');
	//$examination=getGP('examination','P');
	//$warehousing=getGP('warehousing','P');
	$office_goods = array(
		'goods_type' => $goods_type,
		'title' => $title,
		'specification' => $specification,
		'unit' => $unit,
		'price' => $price,
		'number' => $number,
		'content' => $content,
		'date' => get_date('Y-m-d H:i:s',PHP_TIME),
		'uid' => $_USER->id
	);
	insert_db('office_goods',$office_goods);
	$id=$db->insert_id();
	$content=serialize($office_goods);
	$title='新增办公用品信息';
	get_logadd($id,$content,$title,23,$_USER->id);
	show_msg('您要处理的信息操作成功！', 'admin.php?ac=index&fileurl='.$fileurl.'');

}

//读取部门
function GET_FILE_PUBLIC_LIST($fatherid=0,$selid=0,$layer=0)
{


	$str=""; 
    global $db;
	$query = $db->query("SELECT * FROM ".DB_TABLEPRE."goods_type where father='$fatherid'   ORDER BY id Asc  ");
	
	if(count($query)>0){
	   for($i=0;$i<$layer;$i++){
	   
	   $str.="├";
	   
	   }
	while ($row = $db->fetch_array($query)) {
	$selstr = $row['id'] == $selid ? 'selected="selected"' : '';
	
	$htmlstr= '<option value="'.$row['id'].'"  '.$selstr.'>'.$str.$row['title'].'</option>';
	
	echo $htmlstr;

	GET_FILE_PUBLIC_LIST($row['id'],$selid,$layer+1,$type);
	
	}

	}
	
   return ;

}

?>