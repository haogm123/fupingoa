<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');

get_key("office_goods");
empty($do) && $do = 'list';
if ($do == 'list') {
	$id = getGP('id','G','int');
	$blog = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."office_goods  WHERE id = '$id'  ");
	include_once('template/edit.php');

} elseif ($do == 'save') {
	$savetype = getGP('savetype','P');
	$id = getGP('id','P','int');
	$goods_type = getGP('goods_type','P');
	$title=getGP('title','P');
	$specification=getGP('specification','P');
	$unit=getGP('unit','P');
	$price=getGP('price','P');
	$number=getGP('number','P');
	$content=getGP('content','P');
	$office_goods = array(
		'goods_type' => $goods_type,
		'title' => $title,
		'specification' => $specification,
		'unit' => $unit,
		'price' => $price,
		'number' => $number,
		'content' => $content
	);
	update_db('office_goods',$office_goods, array('id' => $id));
	$content=serialize($office_goods);
	$title='编辑办公用品信息';
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