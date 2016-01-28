<?php
/*
	[Office 515158] (C) 2009-2012 天生创想 Inc.
	$Id: function_property.php 1209087 2012-01-08 08:58:28Z baiwei.jiang $
*/
!defined('IN_TOA') && exit('Access Denied!');
//获取分类
function get_property_type($selid=0)
{


	$str=""; 
    global $db;
	$query = $db->query("SELECT * FROM ".DB_TABLEPRE."property_type ORDER BY id Asc  ");
	while ($row = $db->fetch_array($query)) {
	$selstr = $row['id'] == $selid ? 'selected="selected"' : '';
	
	$htmlstr= '<option value="'.$row['id'].'"  '.$selstr.'>'.$str.$row['title'].'</option>';
	
	echo $htmlstr;
	}
	
   return ;

}
//读取分类
function get_property_type_name($id = 0) {
	global $db;
	$sql = "SELECT title FROM ".DB_TABLEPRE."property_type where id=".$id."  ";
	$result = $db->fetch_one_array($sql);
	return $result['title'];
}

?>