<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');

get_key("office_goods_key");
empty($do) && $do = 'list';
if ($do == 'list') {
	$id = getGP('id','G','int');
	$blog = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."office_goods_key  order by id desc");
	include_once('template/office_goods_key.php');

} elseif ($do == 'save') {
	
	$savetype = getGP('savetype','P');
	$id = getGP('id','P','int');
	$purchase=getGP('purchase','P');
	$examination=getGP('examination','P');
	$warehousing=getGP('warehousing','P');
	$office_goods_key = array(
		'purchase' => $purchase,
		'examination' => $examination,
		'warehousing' => $warehousing
	);
	if($id!=''){
	update_db('office_goods_key',$office_goods_key, array('id' => $id));
	}else{
	insert_db('office_goods_key',$office_goods_key);
	}
	show_msg('您要处理的信息操作成功！', 'admin.php?ac=office_goods_key&fileurl='.$fileurl.'');

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