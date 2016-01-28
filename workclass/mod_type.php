<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');
get_key("workclass_admin");
empty($do) && $do = 'list';
if($do == 'list') {
	 if(getGP('view','P')=='save'){
		 $idarr = getGP('id','P','array');
		 $name = getGP('name','P','array');
		 $typenum = getGP('typenum','P','array');
		 foreach ($idarr as $id) {
			 if($name[$id]!=''){
				 $workclass_type = array(
					 'typename' => $name[$id],
					 'typenum' =>$typenum[$id]
					 );
				 update_db('workclass_type',$workclass_type, array('tid' => $id));
			 }
		 }
		 //更新新数据
		 foreach (getGP('newname','P','array') as $name) {
			 if($name!=''){
				 $workclass_type = array(
					 'typename' => $name,
					 'uid' => $_USER->id,
					 'typenum' =>999
					 );
				 insert_db('workclass_type',$workclass_type);
				 $id=$db->insert_id();
				 $content=serialize($workclass_type);
				 $title='添加工作流类别';
				 get_logadd($id,$content,$title,35,$_USER->id);
			 }
		 }
		 oa_mana_recache('workclass_type','tid','typenum');
		 show_msg('工作流类别操作成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'');
	}elseif(getGP('id','G')!=''){
		$db->query("DELETE FROM ".DB_TABLEPRE."workclass_type WHERE tid = '".getGP('id','G')."'  ");
		$db->query("DELETE FROM ".DB_TABLEPRE."workclass_template WHERE typeid = '".getGP('id','G')."'  ");
		$db->query("DELETE FROM ".DB_TABLEPRE."workclass_flow WHERE typeid = '".getGP('id','G')."'  ");
		$db->query("DELETE FROM ".DB_TABLEPRE."workclass_from WHERE typeid = '".getGP('id','G')."'  ");
		$db->query("DELETE FROM ".DB_TABLEPRE."workclass WHERE typeid = '".getGP('id','G')."'  ");
		$db->query("DELETE FROM ".DB_TABLEPRE."workclass_db WHERE typeid = '".getGP('id','G')."'  ");
		$db->query("DELETE FROM ".DB_TABLEPRE."workclass_personnel WHERE typeid = '".getGP('id','G')."'  ");
		$db->query("DELETE FROM ".DB_TABLEPRE."workclass_personnel_log WHERE typeid = '".getGP('id','G')."'  ");
		$content=getGP('id','G');
		$title='删除工作流类别';
		get_logadd(getGP('id','G'),$content,$title,35,$_USER->id);
		show_msg('工作流类别删除成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'');
	}else{
		get_key("workclass_admin");
		$sql = "SELECT * FROM ".DB_TABLEPRE."workclass_type ORDER BY typenum asc";
		$result = $db->fetch_all($sql);
		include_once('mana/type.php');
	}
}

?>