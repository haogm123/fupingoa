<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');
get_key("project_config");
empty($do) && $do = 'list';
if ($do == 'list') {
	//列表信息 
	$wheresql = '';
	$page = max(1, getGP('page','G','int'));
	$pagesize = $_CONFIG->config_data('pagenum');
	$offset = ($page - 1) * $pagesize;
	$url = 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'';
	$num = $db->result("SELECT COUNT(*) AS num FROM ".DB_TABLEPRE."project_type order by tid asc");
    $sql = "SELECT * FROM ".DB_TABLEPRE."project_type order by tid asc LIMIT $offset, $pagesize";
	$result = $db->fetch_all($sql);
	include_once('mana/type.php');

} elseif ($do == 'update') {
	$idarr = getGP('id','P','array');
	foreach ($idarr as $id) {
		$db->query("DELETE FROM ".DB_TABLEPRE."project_type WHERE tid = '$id'");
		$db->query("DELETE FROM ".DB_TABLEPRE."project_model WHERE typeid= '$id'");
		$db->query("DELETE FROM ".DB_TABLEPRE."project_flow WHERE typeid= '$id'");	
		$db->query("DELETE FROM ".DB_TABLEPRE."project_template WHERE typeid= '$id'");
		$db->query("DELETE FROM ".DB_TABLEPRE."project_from WHERE typeid= '$id'");
		$db->query("DELETE FROM ".DB_TABLEPRE."project WHERE typeid= '$id'");
		$db->query("DELETE FROM ".DB_TABLEPRE."project_log WHERE typeid= '$id'");
		$db->query("DELETE FROM ".DB_TABLEPRE."project_db WHERE typeid= '$id'");
		$db->query("DELETE FROM ".DB_TABLEPRE."project_personnel WHERE typeid= '$id'");
		$db->query("DELETE FROM ".DB_TABLEPRE."project_personnel_log WHERE typeid= '$id'");
	}
	$content=serialize($idarr);
	$title='删除项目类别';
	get_logadd($id,$content,$title,32,$_USER->id);
	show_msg('项目类别删除成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'');

}elseif ($do == 'add') {
	include_once('mana/type_add.php');
}elseif ($do == 'addsave') {
	$project_type[title] = getGP('title','P');
	$project_type[manauser] = getGP('manauser','P');
	$project_type[keyuser] = getGP('keyuser','P');
	$project_type[type1] = getGP('type1','P');
	$project_type[type2] = '1';
	$project_type[uid] = $_USER->id;
	//写入主表信息
	insert_db('project_type',$project_type);
	$id=$db->insert_id();
	$content=serialize($project_type);
	$title='添加项目类别';
	get_logadd($id,$content,$title,32,$_USER->id);
	show_msg('项目类别添加成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'');
}elseif ($do == 'edit') {
	$tid = getGP('tid','G','int');
	$view = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."project_type  WHERE tid = '$tid'");
	include_once('mana/type_edit.php');
}elseif ($do == 'editsave') {
	$project_type[title] = getGP('title','P');
	$project_type[manauser] = getGP('manauser','P');
	$project_type[keyuser] = getGP('keyuser','P');
	$project_type[type1] = getGP('type1','P');
	update_db('project_type',$project_type, array('tid' => getGP('tid','P')));
	$content=serialize($project_type);
	$title='编辑项目类别';
	get_logadd($id,$content,$title,32,$_USER->id);
	show_msg('项目类别修改成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'');
}
?>