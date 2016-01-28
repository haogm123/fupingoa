<?php
(!defined('IN_TOA') ||!defined('IN_ADMIN')) &&exit('Access Denied!');
get_key("attachment_type");
if($_GET['title_type']!=''){
$title_type=$_GET['title_type'];
}else{
$title_type=1;
}
empty($do) &&$do = 'list';
if ($do == 'list') {
$wheresql = '';
$page = max(1,getGP('page','G','int'));
$pagesize = $_CONFIG->config_data('pagenum');
$offset = ($page -1) * $pagesize;
$url = 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'&title_type='.$title_type.'';
$num = $db->result("SELECT COUNT(*) AS num FROM ".DB_TABLEPRE."app_title WHERE type='".$title_type."' order by tid asc");
$sql = "SELECT * FROM ".DB_TABLEPRE."app_title WHERE type='".$title_type."' order by tid asc LIMIT $offset, $pagesize";
$result = $db->fetch_all($sql);
include_once('template/title.php');
}elseif ($do == 'update') {
$idarr = getGP('id','P','array');
foreach ($idarr as $id) {
$db->query("DELETE FROM ".DB_TABLEPRE."app_title WHERE tid = '$id' ");
}
$content=serialize($idarr);
$title='删除公文基础信息';
get_logadd($id,$content,$title,14,$_USER->id);
show_msg('公文基础信息删除成功！','admin.php?ac='.$ac.'&fileurl='.$fileurl.'&title_type='.$title_type.'');
}elseif ($do == 'add') {
if($_POST['view']!=''){
$tid = getGP('tid','P','int');
if($tid!=''){
$content = check_str(getGP('content','P'));
$app_title = array(
'content'=>$content,
'type'=>$title_type
);
update_db('app_title',$app_title,array('tid'=>$tid));
$content='';
$content=serialize($app_title);
$title='公文基础信息';
get_logadd($id,$content,$title,14,$_USER->id);
}else{
$content = check_str(getGP('content','P'));
$app_title = array(
'content'=>$content,
'type'=>$title_type
);
insert_db('app_title',$app_title);
$id=$db->insert_id();
$content=serialize($app_title);
$title='公文基础信息';
get_logadd($id,$content,$title,14,$_USER->id);
}
show_msg('公文基础信息操作成功！','admin.php?ac='.$ac.'&fileurl='.$fileurl.'&title_type='.$title_type.'');
}else{
$tid = getGP('tid','G','int');
if($tid!=''){
$user = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."app_title  WHERE tid = '$tid' ");
$_title['name']='编辑';
}else{
$_title['name']='发布';
}
include_once('template/titleadd.php');
}
}elseif ($do == 'option') {
if($_GET['view']!=''){
echo "<script>window.opener.document.save.".$_POST['inputname'].".value='".$_POST['content']."';</script>";
echo '<script language="JavaScript">window.close()</script>';
}else{
$sql="SELECT content FROM ".DB_TABLEPRE."app_title  WHERE type = '".$_GET['tid']."' order by tid asc";
$result = $db->fetch_all($sql);
include_once('template/optiontitle.php');
}
}
?>