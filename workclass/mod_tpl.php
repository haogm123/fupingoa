<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');
get_key("workclass_admin");
empty($do) && $do = 'list';
if ($do == 'list') {
	//列表信息 
	$wheresql = '';
	$page = max(1, getGP('page','G','int'));
	$pagesize = $_CONFIG->config_data('pagenum');
	$offset = ($page - 1) * $pagesize;
	$url = 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'';
	if ($typeid = getGP('typeid','G')) {
		$wheresql .= " AND typeid='".$typeid."'";
		$url .= '&typeid='.rawurlencode($typeid);
	}
	if ($title = getGP('title','G')) {
		$wheresql .= " AND title LIKE '%$title%' ";
		$url .= '&title='.rawurlencode($title);
	}
	$num = $db->result("SELECT COUNT(*) AS num FROM ".DB_TABLEPRE."workclass_template WHERE 1 $wheresql");
    $sql = "SELECT * FROM ".DB_TABLEPRE."workclass_template WHERE 1 $wheresql ORDER BY tplid desc LIMIT $offset, $pagesize";
	$result = $db->fetch_all($sql);
	include_once('mana/template.php');

} elseif ($do == 'update') {
	$idarr = getGP('id','P','array');
	foreach ($idarr as $id) {
		$db->query("DELETE FROM ".DB_TABLEPRE."workclass_template WHERE tplid = '$id'");
		$db->query("DELETE FROM ".DB_TABLEPRE."workclass_flow WHERE tplid= '$id'");
		$db->query("DELETE FROM ".DB_TABLEPRE."workclass_from WHERE tplid= '$id'");	
		$db->query("DELETE FROM ".DB_TABLEPRE."workclass WHERE tplid= '$id'");
		$db->query("DELETE FROM ".DB_TABLEPRE."workclass_db WHERE tplid= '$id'");
	}
	$content=serialize($idarr);
	$title='删除工作流模板';
	get_logadd($id,$content,$title,35,$_USER->id);
	show_msg('工作流模板删除成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'');

}elseif ($do == 'add') {
	include_once('mana/template_add.php');
}elseif ($do == 'addsave') {
	$title = getGP('title','P');
	$typeid = getGP('typeid','P');
	$tplkey = getGP('tplkey','P');
	$tpltype = '1';
	if(getGP('tpluser','P')!=''){
		$tpluser = getGP('tpluser','P');
	}else{
		$tpluser = '0';
	}
	if(getGP('tpladmin','P')!=''){
		$tpladmin = getGP('tpladmin','P');
	}else{
		$tpladmin = '0';
	}
	$uid = $_USER->id;
	if(getGP('tpladdr','P')!=''){
		$tpladdr = getGP('tpladdr','P');
	}else{
		$tpladdr = Pinyin($title).'.php';
	}
	//主表信息
	$workclass_template = array(
		'title' => $title,
		'typeid' => $typeid,
		'tplkey' => $tplkey,
		'tpltype' => $tpltype,
		'tpluser' => $tpluser,
		'tpladmin' => $tpladmin,
		'uid' => $uid,
		'tpladdr' => $tpladdr
	);
	//写入主表信息
	insert_db('workclass_template',$workclass_template);
	$id=$db->insert_id();
	$content=serialize($workclass_template);
	$title='添加工作流模型';
	get_logadd($id,$content,$title,35,$_USER->id);
	show_msg('工作流模型添加成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'');
}elseif ($do == 'edit') {
	
	$tplid = getGP('tplid','G','int');
	$blog = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."workclass_template  WHERE tplid = '$tplid'");
	include_once('mana/template_edit.php');
}elseif ($do == 'editsave') {
	$tplid = getGP('tplid','P','int');
	$title = getGP('title','P');
	$typeid = getGP('typeid','P');
	$tplkey = getGP('tplkey','P');
	if(getGP('tpluser','P')!=''){
		$tpluser = getGP('tpluser','P');
	}else{
		$tpluser = '0';
	}
	if(getGP('tpladmin','P')!=''){
		$tpladmin = getGP('tpladmin','P');
	}else{
		$tpladmin = '0';
	}
	$tpladdr = getGP('tpladdr','P');
	//主表信息
	$workclass_template = array(
		'title' => $title,
		'typeid' => $typeid,
		'tplkey' => $tplkey,
		'tpluser' => $tpluser,
		'tpladmin' => $tpladmin,
		'tpladdr' => $tpladdr
	);
	update_db('workclass_template',$workclass_template, array('tplid' => $tplid));
	//更新表单
	$workclass_from = array(
		'typeid' => $typeid
	);
	update_db('workclass_from',$workclass_from, array('tplid' => $tplid));
	//更新流程
	$workclass_flow = array(
		'typeid' => $typeid
	);
	update_db('workclass_flow',$workclass_flow, array('tplid' => $tplid));
	$content=serialize($workclass_template);
	$title='编辑工作流模板';
	get_logadd($id,$content,$title,35,$_USER->id);
	show_msg('工作流模板修改成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'');
}
?>