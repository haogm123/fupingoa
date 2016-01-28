<?php
!defined('IN_TOA') && exit('Access Denied!');
function app_movement_2($type){
	switch ($type)
	{
		case 1:
		  $html= "发文核稿";
		  break;
		case 2:
		  $html= "发文审稿";
		  break;
		case 3:
		  $html= "领导签发";
		  break;
		case 4:
		  $html= "发文会签";
		  break;
		case 5:
		  $html= "发文盖章";
		  break;
		case 6:
		  $html= "文件分发";
		  break;
		default:
		  $html= "无节点";
	}
	return $html;
}
function app_movement_1($type){
	switch ($type)
	{
		case 1:
		  $html= "收文拟办";
		  break;
		case 2:
		  $html= "领导批示";
		  break;
		case 3:
		  $html= "收文分发";
		  break;
		case 4:
		  $html= "收文承办";
		  break;
		default:
		  $html= "无节点";
	}
	return $html;
}
function app_flag($type){
	switch ($type)
	{
		case 1:
		  echo "可选";
		  break;
		case 2:
		  echo "<font color=red>不可选</font>";
		  break;
		default:
		  echo "错误类型";
	}
	return ;
}
function app_title($type){
	switch ($type)
	{
		case 1:
		  echo "发文字号";
		  break;
		case 2:
		  echo "主题词";
		  break;
		case 3:
		  echo "主办单位";
		  break;
		case 4:
		  echo "来文机关";
		  break;
		case 5:
		  echo "来文字号";
		  break;
		default:
		  echo "发文字号";
	}
	return ;
}
function app_type_key($type=2,$id=0,$user=''){
	global $db;
	$sql="SELECT id FROM ".DB_TABLEPRE."app_type  WHERE type = '2' and id='".$apptype."' and content like '%".get_realname($user)."%'";
	$row = $db->fetch_one_array($sql);
	if($row['id']!=''){
		return 1;
	}else{
		return 0;
	}
}
function app_pkey($type){
	switch ($type)
	{
		case 0:
		  echo "未审批";
		  break;
		case 1:
		  echo "通过";
		  break;
		case 2:
		  echo "拒绝";
		  break;
		case 3:
		  echo "退回";
		  break;
		case 4:
		  echo "等待审批";
		  break;
		case 5:
		  echo "结束";
		  break;
		default:
		  echo "错误类型";
	}
	return ;
}
function app_pkey_log($type){
	switch ($type)
	{
		case 0:
		  echo "未审批";
		  break;
		case 1:
		  echo "通过";
		  break;
		case 2:
		  echo "拒绝";
		  break;
		case 3:
		  echo "退回";
		  break;
		default:
		  echo "错误类型";
	}
	return ;
}
function app_view_per($perid=0){
	global $db;
	$query = $db->query("SELECT * FROM ".DB_TABLEPRE."personnel_log  WHERE perid='".$perid."' order by lid asc");
	while ($rowper = $db->fetch_array($query)) {
		if($rowper['approvaldate']!=''){
			echo '<TR HEIGHT=25>';
			echo '<TD>'.$rowper['lnstructions'].'</TD>';
			echo '<TD WIDTH=100>'.$rowper['name'].'</TD>';
			echo '<TD WIDTH=120>'.$rowper['approvaldate'].'</TD>';
			echo '</TR>';
		}
	}
}
//显示张谷局长UID=4签批
function app_view_zg($perid=0){
	global $db;
	$query = $db->query("SELECT * FROM ".DB_TABLEPRE."personnel_log  WHERE perid='".$perid."' and uid='4' order by lid asc");
	while ($rowper = $db->fetch_array($query)) {
		if($rowper['approvaldate']!=''){
			echo '<TR HEIGHT=25>';
			echo '<TD WIDTH=120>'.$rowper['lnstructions'].'</TD>';
			echo '<TD WIDTH=30>'.$rowper['name'].'</TD>';
			echo '<TD >'.$rowper['approvaldate'].'</TD>';
			echo '</TR>';
		}
	}
}
//不显示科员人员的审批
function app_view_post($perid=0){
	global $db;
	$query = $db->query("SELECT * FROM ".DB_TABLEPRE."personnel_log  WHERE perid='".$perid."' order by lid asc");
	while ($rowper = $db->fetch_array($query)) {
		if($rowper['approvaldate']!='' and get_gangwei($rowper['uid'])!=14){
			echo '<TR HEIGHT=25>';
			echo '<TD>'.$rowper['lnstructions'].'</TD>';
			echo '<TD WIDTH=100>'.$rowper['name'].'</TD>';
			echo '<TD WIDTH=120>'.$rowper['approvaldate'].'</TD>';
			echo '</TR>';
		}
	}
}
?>