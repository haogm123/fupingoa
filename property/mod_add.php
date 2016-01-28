<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');
get_key("property_");

empty($do) && $do = 'list';
if ($do == 'list') {
	include_once('template/add.php');

} elseif ($do == 'save') {
	$number = getGP('number','P');
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
		'number' => $number,
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
		'user' => $user,
		'date' => get_date('Y-m-d H:i:s',PHP_TIME),
		'uid' => $_USER->id
	);
	insert_db('property',$property);
	$id=$db->insert_id();
	$content=serialize($property);
	$title='新增固定资产信息';
	get_logadd($id,$content,$title,24,$_USER->id);
	show_msg('固定资产信息发布成功！', 'admin.php?ac=index&fileurl=property');

}
?>