<?php
/*
	[Office 515158] (C) 2009-2014 天生创想 Inc.
	$Id: function_wage.php 1209087 
*/
!defined('IN_TOA') && exit('Access Denied!');
function tree_de($id,$wid,$uid){
	global $db;
	$query = $db->query("SELECT * FROM ".DB_TABLEPRE."department where father='".$id."' ORDER BY id Asc");
	$html.= '<ul>';       
	while ($rowl = $db->fetch_array($query)) {
		$blog = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."department where father='".$rowl['id']."'   ORDER BY id Asc");
		$user = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."user WHERE departmentid = '".$rowl['id']."'");
		if($uid!=''){
				  $uid = $db->fetch_one_array("SELECT departmentid FROM ".DB_TABLEPRE."user WHERE  id= '".$uid."'");
			  }
			  $html.= '<li ';
			  if($uid['departmentid']!=$rowl['id']){
				  $html.= 'isexpand="false"';
			  }
			  $html.= '>';
		$html.= '  <span>'.$rowl['name'].'</span>';
		if($blog['id']!=''){
			tree_de($rowl['id'],$wid,$uid);
		}
		if($user['id']!=''){
			tree_user($rowl['id'],$wid,$uid);
		 }
		$html.= '</li>';
	}
	$html.= '</ul>';
	echo $html; 
}
function tree_user($id,$wid,$uid){
	global $db;
	$query = $db->query("SELECT a.id,b.name FROM ".DB_TABLEPRE."user a,".DB_TABLEPRE."user_view b WHERE a.departmentid = '".$id."' and a.id=b.uid ORDER BY a.numbers Asc");
	$html.= '<ul>';       
	while ($rowl = $db->fetch_array($query)) {
		$html.= '<li>';
		$html.= '  <span><a href="admin.php?ac=wage&fileurl=wage&do=log&wid='.$wid.'&uid='.$rowl['id'].'" ';
		if($uid==$rowl['id']){
			$html.=' style="color:#009900;font-size:14px; font-weight:900;"';
		}
		$html.='>'.$rowl['name'].'</a></span>';
		$html.= '</li>';
	}
	$html.= '</ul>';
	echo $html; 
}
?>