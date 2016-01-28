<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');
get_key("wage_basis");
global $_CACHE;
get_cache('wage_type');
empty($do) && $do = 'list';
if($do == 'list') {
	 if(getGP('view','P')=='save'){
		 $newuid = getGP('newuid','P','array');
		 $newusername = getGP('newusername','P','array');
		 $newname = getGP('newname','P','array');
		 $newcontent = getGP('newcontent','P','array');
		 foreach ($newuid as $id) {
			 if($newname[$id]!=''){
				 $wage_basis = array(
					 'uid' => $id,
					 'username' => $newusername[$id],
					 'name' => $newname[$id],
					 'content' => $newcontent[$id]
					 );
				 insert_db('wage_basis',$wage_basis);
				 $vid=$db->insert_id();
				 //写数数据
				 //$sqlu = "SELECT tid,name FROM ".DB_TABLEPRE."wage_type order by tnumber asc";
			     //$results = $db->query($sqlu);
				 //while ($type = $db->fetch_array($results)) {
				 foreach ( $_CACHE['wage_type'] as $type) {
				 	 $contentdb = getGP('newtype_'.$type['tid'],'P','array');
					 $wage_data = array(
						 'viewid' => $vid,
						 'tid' => $type['tid'],
						 'name' => $type['name'],
						 'content' => $contentdb[$id],
						 'type' => 1
						 );
					 insert_db('wage_data',$wage_data);
				 }
				 $content=serialize($wage_type);
				 $title='添加薪资基础信息';
				 get_logadd($id,$content,$title,36,$_USER->id);
			 }
		 }
		 //更新数据
		 $bid = getGP('bid','P','array');
		 $username = getGP('username','P','array');
		 $name = getGP('name','P','array');
		 $content = getGP('content','P','array');
		 foreach ($bid as $id) {
			 if($name[$id]!=''){
				 $wage_basis = array(
					 'username' => $username[$id],
					 'name' => $name[$id],
					 'content' => $content[$id]
					 );
				 update_db('wage_basis',$wage_basis, array('bid' => $id));
			 }
			 //$sqlu = "SELECT tid,name FROM ".DB_TABLEPRE."wage_type order by tnumber asc";
			 //$results = $db->query($sqlu);
			 //while ($type = $db->fetch_array($results)) {
			 foreach ( $_CACHE['wage_type'] as $type) {
				 $contentdb = getGP('type_'.$type['tid'],'P','array');
				 $wdb = $db->fetch_one_array("SELECT did FROM ".DB_TABLEPRE."wage_data  WHERE type=1 and viewid='".$id."' and tid='".$type['tid']."'");
				 if($wdb['did']!=''){
					 $wage_data = array(
							 'content' => $contentdb[$id]
						 );
					 update_db('wage_data',$wage_data, array('viewid' => $id,'tid' => $type['tid'],'type' => 1));
				 }else{
				 	$wage_data = array(
						 'viewid' => $id,
						 'tid' => $type['tid'],
						 'name' => $type['name'],
						 'content' => $contentdb[$id],
						 'type' => 1
						 );
					 insert_db('wage_data',$wage_data);
				 }
			 }
		 }
		 
		 show_msg('薪资基础信息操作成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'');
	}elseif(getGP('id','G')!=''){
		$db->query("DELETE FROM ".DB_TABLEPRE."wage_type WHERE tid = '".getGP('id','G')."'  ");
		$content=getGP('id','G');
		$title='删除薪资项目';
		get_logadd(getGP('id','G'),$content,$title,36,$_USER->id);
		show_msg('薪资项目删除成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'');
	}else{
		$sql = "SELECT a.*,b.name FROM ".DB_TABLEPRE."user a,".DB_TABLEPRE."user_view b where  a.ischeck!=0 and a.id!=1 and a.id=b.uid ORDER BY a.numbers asc";
		$result = $db->fetch_all($sql);
		include_once('template/basis.php');
	}
}

?>