<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');
get_key("book_read");
empty($do) && $do = 'list';
if ($do == 'list') {
	//列表信息 
	$wheresql = '';
	$page = max(1, getGP('page','G','int'));
	$pagesize = $_CONFIG->config_data('pagenum');
	$offset = ($page - 1) * $pagesize;
	$url = 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'';
	if ($type = getGP('type','G')) {
		$wheresql .= " AND type ='".$type."'";
		$url .= '&type='.$type;
	}
	$vuidtype = getGP('vuidtype','G');
	if(!is_superadmin() && $vuidtype==''){
		$wheresql .= " AND appperson = $_USER->id";
	}
	if ($vuidtype!='') {
		$wheresql .=" ".get_subordinate($_USER->id,'appperson');
		$url .= '&vuidtype='.$vuidtype;
	}
	$num = $db->result("SELECT COUNT(*) AS num FROM ".DB_TABLEPRE."book_read  WHERE 1 $wheresql ORDER BY id desc");
    $sql = "SELECT * FROM ".DB_TABLEPRE."book_read WHERE 1 $wheresql ORDER BY id desc LIMIT $offset, $pagesize";
	$result = $db->fetch_all($sql);
	include_once('template/file_read.php');

} elseif ($do == 'update') {
	
	$idarr = getGP('id','P','array');
	foreach ($idarr as $id) {
		$r = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."book_read where id='".$id."'  ORDER BY id desc limit 0,1");
		$file = array(
			'type' => '0'
		);
		update_db('file',$file, array('id' => $r[fileid]));
		$db->query("DELETE FROM ".DB_TABLEPRE."book_read WHERE id = '$id' ");
	}
	show_msg('图书信息撤消成功！', 'admin.php?ac=indexsearch&fileurl=book');

}
?>