<?php
/*
	[Office 515158] (C) 2009-2012 天生创想 Inc.
	$Id: function_book.php 1209087 2012-01-08 08:58:28Z baiwei.jiang $
*/
!defined('IN_TOA') && exit('Access Denied!');
//下拉分类
function get_book_type($fatherid=0,$selid=0,$layer=0)
{
	$str=""; 
    global $db;
	$query = $db->query("SELECT * FROM ".DB_TABLEPRE."book_type where father='$fatherid' ORDER BY id Asc  ");
	
	if(count($query)>0){
	   for($i=0;$i<$layer;$i++){
	   
	   $str.="├";
	   
	   }
	while ($row = $db->fetch_array($query)) {
	$selstr = $row['id'] == $selid ? 'selected="selected"' : '';
	
	$htmlstr= '<option value="'.$row['id'].'"  '.$selstr.'>'.$str.$row['title'].'</option>';
	
	echo $htmlstr;
	get_book_type($row['id'],$selid,$layer+1,$type);
	
	}

	}
	
   return ;

}
//读取分类
function get_book_type_name($id = 0) {
	global $db;
	$sql = "SELECT title FROM ".DB_TABLEPRE."book_type where id=".$id."  ";
	$result = $db->fetch_one_array($sql);
	return $result['title'];
}
?>