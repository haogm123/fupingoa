<?php

(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');

get_key("property_type");

empty($do) && $do = 'list';

if($do == 'list') {
		if(getGP('view','P')=='save'){
		
		$idarr = getGP('id','P','array');
		$name = getGP('name','P','array');
		foreach ($idarr as $id) {
			if($name[$id]=='')$name[$id]='新固定资产类别名称';
			$property_type = array(
				'title' => $name[$id]
			);
			update_db('property_type',$property_type, array('id' => $id));
		}
		$newname = 't';
		foreach (getGP('newname','P','array') as $name) {
			$newname.=',,'.$name;
		}
		$newname=explode(',,',str_replace('t,,','',$newname));
		if($newname!=''){
			for($i=0;$i<sizeof($newname);$i++){
				if($newname[$i]!='t'){
					if($newname[$i]=='')$newname[$i]='新固定资产类别名称';
					$property_type = array(
						'title' => $newname[$i],
						'uid' => $_USER->id
					);
					insert_db('property_type',$property_type);
					$id=$db->insert_id();
					$content=$newname[$i].get_log(1).$_POST['type'].get_log(1).$_USER->id;
					$title='添加固定资产类别';
					get_logadd($id,$content,$title,24,$_USER->id);
				}
			}
		}
		show_msg('固定资产类别操作成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'');
	}elseif(getGP('id','G')!=''){
		
		$db->query("DELETE FROM ".DB_TABLEPRE."property_type WHERE id = '".getGP('id','G')."'  ");
		$content=getGP('id','G').get_log(1).$_USER->id;
		$title='删除固定资产类别';
		get_logadd(getGP('id','G'),$content,$title,24,$_USER->id);
		show_msg('固定资产类别删除成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'');
	}else{
		$sql = "SELECT * FROM ".DB_TABLEPRE."property_type   ORDER BY id asc";
		$result = $db->fetch_all($sql);
		include_once('template/property_type.php');
	}
}
?>