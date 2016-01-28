<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');

get_key("job_demand");
empty($do) && $do = 'list';
if ($do == 'list') {
	$id = getGP('id','G','int');
	$blog = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."job_demand  WHERE id = '$id'");
	include_once('template/job_demand_views.php');

}

?>