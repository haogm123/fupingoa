<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');
get_key("wage_type");
empty($do) && $do = 'list';
if($do == 'list') {
	 if(getGP('view','P')=='save'){
		 $idarr = getGP('id','P','array');
		 $name = getGP('name','P','array');
		 $typenum = getGP('typenum','P','array');
		 $type = getGP('type','P','array');
		 foreach ($idarr as $id) {
			 if($name[$id]!=''){
				 $wage_type = array(
					 'name' => $name[$id],
					 'type' =>$type[$id],
					 'tnumber' =>$typenum[$id]
					 );
				 update_db('wage_type',$wage_type, array('tid' => $id));
			 }
		 }
		 //更新新数据
		 foreach (getGP('newname','P','array') as $name) {
			 if($name!=''){
				 $wage_type = array(
					 'name' => $name,
					 'tnumber' =>999
					 );
				 insert_db('wage_type',$wage_type);
				 $id=$db->insert_id();
				 $content=serialize($wage_type);
				 $title='添加薪资项目';
				 get_logadd($id,$content,$title,36,$_USER->id);
			 }
		 }
		 oa_mana_recache('wage_type','tid','tnumber');
		 show_msg('薪资项目操作成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'');
	}elseif(getGP('id','G')!=''){
		$db->query("DELETE FROM ".DB_TABLEPRE."wage_type WHERE tid = '".getGP('id','G')."'  ");
		$content=getGP('id','G');
		$title='删除薪资项目';
		get_logadd(getGP('id','G'),$content,$title,36,$_USER->id);
		show_msg('薪资项目删除成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'');
	}else{
		get_key("wage_type");
		$sql = "SELECT * FROM ".DB_TABLEPRE."wage_type ORDER BY tnumber asc";
		$result = $db->fetch_all($sql);
		include_once('template/type.php');
	}
}

?>