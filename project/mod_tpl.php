<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');
get_key("project_config");
$typeid=$_GET['typeid'];
$modid=$_GET['modid'];
empty($do) && $do = 'list';
if ($do == 'list') {
	//列表信息 
	$wheresql = '';
	$page = max(1, getGP('page','G','int'));
	$pagesize = $_CONFIG->config_data('pagenum');
	$offset = ($page - 1) * $pagesize;
	$url = 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'&typeid='.$typeid.'&modid='.$modid.'';
	if ($typeid!='') {
		$wheresql .= " AND typeid='".$typeid."'";
	}
	if ($modid!='') {
		$wheresql .= " AND modid='".$modid."'";
	}
	if ($title = getGP('title','G')) {
		$wheresql .= " AND title LIKE '%$title%' ";
		$url .= '&title='.rawurlencode($title);
	}
	$num = $db->result("SELECT COUNT(*) AS num FROM ".DB_TABLEPRE."project_template WHERE 1 $wheresql");
    $sql = "SELECT * FROM ".DB_TABLEPRE."project_template WHERE 1 $wheresql ORDER BY tplid desc LIMIT $offset, $pagesize";
	$result = $db->fetch_all($sql);
	include_once('mana/template.php');

} elseif ($do == 'update') {
	$idarr = getGP('id','P','array');
	foreach ($idarr as $id) {
		$db->query("DELETE FROM ".DB_TABLEPRE."project_template WHERE tplid = '$id'");
		$db->query("DELETE FROM ".DB_TABLEPRE."project_from WHERE tplid= '$id' and formtype=3");
		$db->query("DELETE FROM ".DB_TABLEPRE."project_flow WHERE tplid= '$id' and flowkey4=3");	
	}
	$content=serialize($idarr);
	$title='删除项目模板';
	get_logadd($id,$content,$title,32,$_USER->id);
	show_msg('项目模板删除成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'&typeid='.$typeid.'&modid='.$modid.'');

}elseif ($do == 'add') {
	include_once('mana/template_add.php');
}elseif ($do == 'addsave') {
	$title = getGP('title','P');
	$tplkey = getGP('tplkey','P');
	$tpltype = '1';
	$uid = $_USER->id;
	if(getGP('tpladdr','P')!=''){
		$tpladdr = getGP('tpladdr','P');
	}else{
		$tpladdr = Pinyin($title).'.php';
	}
	//主表信息
	$project_template = array(
		'title' => $title,
		'typeid' => $typeid,
		'modid' => $modid,
		'tplkey' => $tplkey,
		'tpltype' => $tpltype,
		'uid' => $uid,
		'tpladdr' => $tpladdr
	);
	//写入主表信息
	insert_db('project_template',$project_template);
	$id=$db->insert_id();
	$content=serialize($project_template);
	$title='添加项目模型';
	get_logadd($id,$content,$title,32,$_USER->id);
	show_msg('项目模型添加成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'&typeid='.$typeid.'&modid='.$modid.'');
}elseif ($do == 'edit') {
	
	$tplid = getGP('tplid','G','int');
	$blog = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."project_template  WHERE tplid = '$tplid'");
	include_once('mana/template_edit.php');
}elseif ($do == 'editsave') {
	$tplid = getGP('tplid','P','int');
	$title = getGP('title','P');
	$tplkey = getGP('tplkey','P');
	$tpladdr = getGP('tpladdr','P');
	//主表信息
	$project_template = array(
		'title' => $title,
		'tplkey' => $tplkey,
		'tpladdr' => $tpladdr
	);
	update_db('project_template',$project_template, array('tplid' => $tplid));
	$content=serialize($project_template);
	$title='编辑项目模板';
	get_logadd($id,$content,$title,32,$_USER->id);
	show_msg('项目模板修改成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'&typeid='.$typeid.'&modid='.$modid.'');
}
?>