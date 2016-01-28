<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');
get_key("wage_log");
global $_CACHE;
get_cache('wage_type');
empty($do) && $do = 'list';
if ($do == 'list') {
	//列表信息 
	$wheresql = '';
	$page = max(1, getGP('page','G','int'));
	$pagesize = $_CONFIG->config_data('pagenum');
	$offset = ($page - 1) * $pagesize;
	$url = 'admin.php?ac='.$ac.'&fileurl='.$fileurl;
		$num = $db->result("SELECT COUNT(*) AS num FROM ".DB_TABLEPRE."wage WHERE type=1  order by wid desc");
		$sql = "SELECT * FROM ".DB_TABLEPRE."wage WHERE type=1  order by wid desc LIMIT $offset, $pagesize";
	$result = $db->fetch_all($sql);
	include_once('template/department.php');

}elseif ($do == 'log') {
	if(getGP('view','P')=='save'){
		$newuid = getGP('newuid','P','array');
		 $newusername = getGP('newusername','P','array');
		 $newname = getGP('newname','P','array');
		 $newcontent = getGP('newcontent','P','array');
		 foreach ($newuid as $id) {
			 if($newname[$id]!=''){
				 $wage_log = array(
					 'uid' => $id,
					 'username' => $newusername[$id],
					 'name' => $newname[$id],
					 'content' => $newcontent[$id],
					 'wid'=>getGP('wid','P')
					 );
				 insert_db('wage_log',$wage_log);
				 $vid=$db->insert_id();
				 //写数数据
				 foreach ( $_CACHE['wage_type'] as $type) {
				 	if($type['type']==2){
						 $contentdb = getGP('newtype_'.$type['tid'],'P','array');
						 $wage_data = array(
							 'viewid' => $vid,
							 'tid' => $type['tid'],
							 'name' => $type['name'],
							 'content' => $contentdb[$id],
							 'type' => 2,
							 'wid' => getGP('wid','P'),
							 'uid' => $id
							 );
						 insert_db('wage_data',$wage_data);
					}
				 }
				 
			 }
		 }
		 //更新数据
		 $lid = getGP('lid','P','array');
		 $username = getGP('username','P','array');
		 $name = getGP('name','P','array');
		 $content = getGP('content','P','array');
		 foreach ($lid as $id) {
			 if($name[$id]!=''){
				 $wage_log = array(
					 'username' => $username[$id],
					 'name' => $name[$id],
					 'content' => $content[$id]
					 );
				 update_db('wage_log',$wage_log, array('lid' => $id));
			 }
			 
			 foreach ( $_CACHE['wage_type'] as $type) {
			 	if($type['type']==2){
					 $contentdb = getGP('type_'.$type['tid'],'P','array');
					 $wdb = $db->fetch_one_array("SELECT did FROM ".DB_TABLEPRE."wage_data  WHERE type=2 and viewid='".$id."' and tid='".$type['tid']."' and wid='".getGP('wid','P')."'");
					 if($wdb['did']!=''){
						 $wage_data = array(
								 'content' => $contentdb[$id]
							 );
						 update_db('wage_data',$wage_data, array('viewid' => $id,'tid' => $type['tid'],'type' => 2,'wid' => getGP('wid','P')));
					 }
				 }
			 }
		 }
		 
		show_msg('人员工资信息操作成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'&do=log&wid='.getGP('wid','P'));
	}
	//获取部门信息
	$dep = $db->fetch_one_array("SELECT departmentid FROM ".DB_TABLEPRE."user   WHERE id='".$_USER->id."'");
	$sql = "SELECT a.*,b.name FROM ".DB_TABLEPRE."user a,".DB_TABLEPRE."user_view b where  a.ischeck!=0 and a.id!=1 and a.id=b.uid and a.departmentid=".$dep['departmentid']." ORDER BY a.numbers asc";
	$result = $db->fetch_all($sql);
	include_once('template/del_log.php');
}
?>