<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');
get_key("project_config");
$typeid=$_GET['typeid'];
empty($do) && $do = 'list';
if ($do == 'list') {
	//列表信息 
	$wheresql = '';
	$page = max(1, getGP('page','G','int'));
	$pagesize = $_CONFIG->config_data('pagenum');
	$offset = ($page - 1) * $pagesize;
	$url = 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'&typeid='.$typeid;
	$num = $db->result("SELECT COUNT(*) AS num FROM ".DB_TABLEPRE."project_model where typeid=".$typeid." order by mid asc");
    $sql = "SELECT * FROM ".DB_TABLEPRE."project_model where typeid=".$typeid." order by mid asc LIMIT $offset, $pagesize";
	$result = $db->fetch_all($sql);
	include_once('mana/model.php');

} elseif ($do == 'update') {
	$idarr = getGP('id','P','array');
	foreach ($idarr as $id) {
		$db->query("DELETE FROM ".DB_TABLEPRE."project_model WHERE mid = '$id'");
		$db->query("DELETE FROM ".DB_TABLEPRE."project_flow WHERE tplid= '$id' and flowkey4=2");	
		$db->query("DELETE FROM ".DB_TABLEPRE."project_template WHERE modid= '$id'");
		$db->query("DELETE FROM ".DB_TABLEPRE."project_from WHERE tplid= '$id' and formtype=2");
		$db->query("DELETE FROM ".DB_TABLEPRE."project_log WHERE modid= '$id'");
		$db->query("DELETE FROM ".DB_TABLEPRE."project_db WHERE modid= '$id'");
		$db->query("DELETE FROM ".DB_TABLEPRE."project_personnel WHERE projectid= '$id' and appkey2=2");
		$db->query("DELETE FROM ".DB_TABLEPRE."project_personnel_log WHERE projectid= '$id' and appkey2=2");
	}
	$content=serialize($idarr);
	$title='删除项目模型';
	get_logadd($id,$content,$title,32,$_USER->id);
	show_msg('项目模型删除成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'&typeid='.$typeid);

}elseif ($do == 'add') {
	include_once('mana/model_add.php');
}elseif ($do == 'addsave') {
	$project_model[modname] = getGP('modname','P');
	$project_model[manauser] = getGP('manauser','P');
	$project_model[keyuser] = getGP('keyuser','P');
	$project_model[typeid] = $typeid;
	$project_model[key1] = getGP('key1','P');
	$project_model[key2] = getGP('key2','P');
	$project_model[key3] = getGP('key3','P');
	$project_model[key4] = getGP('key4','P');
	$project_model[uid] = $_USER->id;
	//写入主表信息
	insert_db('project_model',$project_model);
	$id=$db->insert_id();
	if(getGP('key3','P')==0 && getGP('key4','P')=='3'){
		$db->query("update ".DB_TABLEPRE."project_model set addr='".$typeid."_".$id.".php' where mid=".$id);
	}
	$content=serialize($project_model);
	$title='添加项目模型';
	get_logadd($id,$content,$title,32,$_USER->id);
	show_msg('项目模型添加成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'&typeid='.$typeid);
}elseif ($do == 'edit') {
	$mid = getGP('mid','G','int');
	$view = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."project_model  WHERE mid = '$mid'");
	include_once('mana/model_edit.php');
}elseif ($do == 'editsave') {
	$project_model[modname] = getGP('modname','P');
	$project_model[manauser] = getGP('manauser','P');
	$project_model[keyuser] = getGP('keyuser','P');
	$project_model[key1] = getGP('key1','P');
	$project_model[key2] = getGP('key2','P');
	$project_model[key3] = getGP('key3','P');
	$project_model[key4] = getGP('key4','P');
	update_db('project_model',$project_model, array('mid' => getGP('mid','P')));
	$content=serialize($project_model);
	$title='编辑项目模型';
	get_logadd($id,$content,$title,32,$_USER->id);
	show_msg('项目模型修改成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'&typeid='.$typeid);
}
?>