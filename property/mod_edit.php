<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');

get_key("property_");
empty($do) && $do = 'list';
if ($do == 'edit') {
	$id = getGP('id','G','int');
	$blog = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."property  WHERE id = '$id' ");
	include_once('template/edit.php');

} elseif ($do == 'save') {
	$savetype = getGP('savetype','P');
	$id = getGP('id','P','int');
	$name = getGP('name','P');
	$property_type=getGP('property_type','P');
	$department=getGP('department','P');
	$cptl_val=getGP('cptl_val','P');
	$cptl_bal=getGP('cptl_bal','P');
	$dpct_yy=getGP('dpct_yy','P');
	$sum_dpct=getGP('sum_dpct','P');
	$mon_dpct=getGP('mon_dpct','P');
	$startdate=getGP('startdate','P');
	$content=getGP('content','P');
	$user=getGP('user','P');
	$property = array(
		'name' => $name,
		'property_type' => $property_type,
		'department' => $department,
		'cptl_val' => $cptl_val,
		'cptl_bal' => $cptl_bal,
		'dpct_yy' => $dpct_yy,
		'sum_dpct' => $sum_dpct,
		'mon_dpct' => $mon_dpct,
		'startdate' => $startdate,
		'content' => $content,
		'user' => $user
	);
	update_db('property',$property, array('id' => $id));
	$content=serialize($property);
	$title='编辑固定资产信息';
	get_logadd($id,$content,$title,24,$_USER->id);
    show_msg('固定资产信息编辑成功！', 'admin.php?ac=index&fileurl=property');

}
?>