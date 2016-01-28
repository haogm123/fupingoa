<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');


empty($do) && $do = 'list';
if ($do == 'edit') {
	$id = getGP('id','G','int');
	
	$blog = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."property  WHERE id = '$id' ");
	include_once('template/views.php');

} 

//读取部门
function GET_FILE_PUBLIC_LIST($selid=0)
{


	$str=""; 
    global $db;
	$query = $db->query("SELECT * FROM ".DB_TABLEPRE."property_type where id='".$selid."' ORDER BY id Asc  ");
	
	//if(count($query)>0){
	  // for($i=0;$i<$layer;$i++){
	   
	  // $str.="├";
	   
	  // }
	while ($row = $db->fetch_array($query)) {
	//$selstr = $row['id'] == $selid ? 'selected="selected"' : '';
	
	//$htmlstr= '<option value="'.$row['id'].'"  '.$selstr.'>'.$str.$row['title'].'</option>';
	
	echo $row['title'];

	//GET_FILE_PUBLIC_LIST($row['id'],$selid,$layer+1,$type);
	
	}

	//}
	
   return ;

}

?>