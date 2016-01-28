<?php
/*
	[Office 515158] (C) 2009-2012 天生创想 Inc.
	$Id: function_jobs.php 1209087 2012-01-08 08:58:28Z baiwei.jiang $
*/
!defined('IN_TOA') && exit('Access Denied!');
//招聘计划
function get_job_option($selid = 0) {
	global $db;
	$html = '';
	$sql = "SELECT id,number,jobpost FROM ".DB_TABLEPRE."job where type='2'";
	$query = $db->query($sql);
	while ($row = $db->fetch_array($query)) {
		$selstr = $row['id'] == $selid ? 'selected="selected"' : '';
		$html .= '<option value="'.$row['id'].'" '.$selstr.' >'.$row['jobpost'].'('.$row['number'].')</option>';
	}
	return $html;
}
//获取名称
function get_job_name($id = 0) {
	global $db;
	$sql = "SELECT jobpost FROM ".DB_TABLEPRE."job where id=".$id."  ";
	$result = $db->fetch_one_array($sql);
	return $result['jobpost'];
}
//人才库
function get_talent_option($selid = 0) {
	global $db;
	$html = '';
	$sql = "SELECT id,name FROM ".DB_TABLEPRE."job_talent";
	$query = $db->query($sql);
	while ($row = $db->fetch_array($query)) {
		$selstr = $row['id'] == $selid ? 'selected="selected"' : '';
		$html .= '<option value="'.$row['id'].'" '.$selstr.' >'.$row['name'].'</option>';
	}
	return $html;
}
//获取名称
function get_talent_name($id = 0) {
	global $db;
	$sql = "SELECT name FROM ".DB_TABLEPRE."job_talent where id=".$id."  ";
	$result = $db->fetch_one_array($sql);
	return $result['name'];
}
?>