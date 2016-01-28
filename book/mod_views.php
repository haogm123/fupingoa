<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');

//if ( !is_superadmin() && !check_purview('manage_link') ) prompt('对不起，你没有权限执行本操作！');
//初始化信息，进入表单页面
empty($do) && $do = 'list';
if ($do == 'edit') {
	$id = getGP('id','G','int');
	$blog = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."book  WHERE id = '$id' ");
	include_once('template/views.php');

}elseif ($do == 'save') {

goto_page(getGP('dow','P'));

}

//读取部门
function GET_FILE_PUBLIC_LIST($fatherid=0,$selid=0,$layer=0)
{


	$str=""; 
    global $db;
	$query = $db->query("SELECT * FROM ".DB_TABLEPRE."book_type where father='$fatherid'  ORDER BY id Asc  ");
	
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