<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');

get_key("goods_type");
empty($do) && $do = 'list';
if ($do == 'edit') {
	$id = getGP('id','G','int');
	$workdate = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."goods_type  WHERE id = '$id'  ");
	include_once('template/goods_type_edit.php');

} elseif ($do == 'save') {
	
	$savetype = getGP('savetype','P');
	$id = getGP('id','P','int');
	$title = getGP('title','P');
	$father = getGP('father','P');
	//$uid=$_USER->id;
	$goods_type = array(
		'title' => $title,
		'father' => $father
	);
	update_db('goods_type',$goods_type, array('id' => $id));
	$content=serialize($goods_type);
	$title='编辑办公用品类别';
	get_logadd($id,$content,$title,23,$_USER->id);
	show_msg('编辑办公用品类别成功！', 'admin.php?ac=goods_type&fileurl=goods');
	//echo '<script language="JavaScript">window.close();window.opener.location.reload();/script>';
	

}
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