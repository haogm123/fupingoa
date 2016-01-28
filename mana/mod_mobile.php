<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');
get_key("config_menu");
empty($do) && $do = 'list';
if($do == 'list') {
	 if(getGP('view','P')=='save'){
		 $idarr = getGP('id','P','array');
		 $title = getGP('title','P','array');
		 $linkurl = getGP('linkurl','P','array');
		 $number = getGP('number','P','array');
		 $ico = getGP('ico','P','array');
		 foreach ($idarr as $id) {
			 if($title[$id]!=''){
				 $mobile_model = array(
					 'title' => $title[$id],
					 'linkurl' =>$linkurl[$id],
					 'number' =>$number[$id],
					 'ico' =>$ico[$id]
					 );
				 update_db('mobile_model',$mobile_model, array('mid' => $id));
			 }
		 }
		 //更新新数据
		 foreach (getGP('newname','P','array') as $name) {
			 if($name!=''){
				 $mobile_model = array(
					 'title' => $name,
					 'number' =>999,
					 'type' =>$_GET['type'],
					 'type1' =>'1'
					 );
				 insert_db('mobile_model',$mobile_model);
				 //$id=$db->insert_id();
			 }
		 }
		 show_msg('手机应用操作成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'&type='.$_GET['type']);
	}elseif(getGP('id','G')!=''){
		$db->query("DELETE FROM ".DB_TABLEPRE."mobile_model WHERE mid = '".getGP('id','G')."'  ");
		show_msg('手机应用删除成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'&type='.$_GET['type']);
	}elseif(getGP('tid','G')!=''){
		$db->query("update ".DB_TABLEPRE."mobile_model set type1='".$_GET['type1']."' WHERE mid = '".getGP('tid','G')."'  ");
		show_msg('手机应用操作成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'&type='.$_GET['type']);
	}else{
		if($_GET['type']==''){
			$type='menu';
		}else{
			$type=$_GET['type'];
		}
		$sql = "SELECT * FROM ".DB_TABLEPRE."mobile_model where type='".$type."' ORDER BY number asc";
		$result = $db->fetch_all($sql);
		include_once('template/mobile.php');
	}
}

?>