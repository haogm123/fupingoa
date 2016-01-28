<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');

get_key("goods_type");
empty($do) && $do = 'list';
if ($do == 'list') {
	include_once('template/goods_type_add.php');

} elseif ($do == 'save') {
	$savetype = getGP('savetype','P');
	$title = getGP('title','P');
	$father=getGP('father','P');
	$goods_type = array(
		'title' => $title,
		'father' => $father,
		'uid' => $_USER->id
	);
	insert_db('goods_type',$goods_type);
	$id=$db->insert_id();
	$content=serialize($goods_type);
	$title='新增办公用品类别';
	get_logadd($id,$content,$title,23,$_USER->id);
	show_msg('新增办公用品类别成功！', 'admin.php?ac=goods_type&fileurl=goods');

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