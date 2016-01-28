<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');
get_key("project_config");
$typeid=$_GET['typeid'];
$tplid=$_GET['tplid'];
$modid=$_GET['modid'];
$flowkey4=$_GET['flowkey4'];
empty($do) && $do = 'list';
if ($do == 'list') {
	$flow = $db->fetch_one_array("SELECT flownum FROM ".DB_TABLEPRE."project_flow WHERE tplid='".$tplid."' and typeid='".$typeid."' and flowkey4='".$flowkey4."' ORDER BY fid asc LIMIT 1");
	if($flow['flownum']!='1'){
		$project_flow = array(
			'flowname' => '申请人提交申请',
			'flownum' => 1,
			'flowkey' => 1,
			'flowkey1' => 1,
			'flowkey2' => 2,
			'flowkey3' => 2,
			'flowkey4' => $flowkey4,
			'tplid' => $tplid,
			'typeid' => $typeid,
			'uid' => $_USER->id
			);
		insert_db('project_flow',$project_flow);
	}
	//列表信息 
	$wheresql = '';
	$page = max(1, getGP('page','G','int'));
	$pagesize = $_CONFIG->config_data('pagenum');
	$offset = ($page - 1) * $pagesize;
	$url = 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'&typeid='.$typeid.'&tplid='.$tplid.'&flowkey4='.$flowkey4.'&modid='.$modid.'';
	$num = $db->result("SELECT COUNT(*) AS num FROM ".DB_TABLEPRE."project_flow WHERE tplid='".$tplid."' and typeid='".$typeid."'  and flowkey4='".$flowkey4."' order by fid asc");
     $sql = "SELECT * FROM ".DB_TABLEPRE."project_flow WHERE tplid='".$tplid."' and typeid='".$typeid."' and flowkey4='".$flowkey4."' order by fid asc LIMIT $offset, $pagesize";
	$result = $db->fetch_all($sql);
	include_once('mana/flow.php');

} elseif ($do == 'update') {
	$idarr = getGP('id','P','array');
	foreach ($idarr as $id) {
		$db->query("DELETE FROM ".DB_TABLEPRE."project_flow WHERE fid = '$id' ");	
	}
	$content=serialize($idarr);
	$title='删除审批流程';
	get_logadd($id,$content,$title,32,$_USER->id);
	show_msg('审批流程信息删除成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'&tplid='.$tplid.'&typeid='.$typeid.'&flowkey4='.$flowkey4.'&modid='.$modid.'');

}elseif ($do == 'add') {
	if($_POST['view']!=''){
		$fid = getGP('fid','P','int');
		if($fid!=''){
			$flowname = check_str(getGP('flowname','P'));
			$flownum = check_str(getGP('flownum','P'));
			$flowuser = check_str(getGP('flowuser','P'));
			$flowkey = getGP('flowkey','P');
			$flowkey1 = getGP('flowkey1','P');
			$flowkey2 = getGP('flowkey2','P');
			$flowkey3 = getGP('flowkey3','P');
			if($flowkey3==''){
				$flowkey3='2';
			}
			$project_flow = array(
				'flowname' => $flowname,
				'flowuser' => $flowuser,
				'flowkey' => $flowkey,
				'flowkey1' => $flowkey1,
				'flowkey2' => $flowkey2,
				'flowkey3' => $flowkey3
			);
			update_db('project_flow',$project_flow, array('fid' => $fid));
			$content='';
			$content=serialize($project_flow);
			$title='审批流程信息';
			get_logadd($id,$content,$title,32,$_USER->id);
			
		}else{
			$flowname = check_str(getGP('flowname','P'));
			$flownum = check_str(getGP('flownum','P'));
			$flowuser = check_str(getGP('flowuser','P'));
			$flowkey = getGP('flowkey','P');
			$flowkey1 = getGP('flowkey1','P');
			$flowkey2 = getGP('flowkey2','P');
			$flowkey3 = getGP('flowkey3','P');
			if($flowkey3==''){
				$flowkey3='2';
			}
			$project_flow = array(
				'flowname' => $flowname,
				'flownum' => $flownum,
				'flowuser' => $flowuser,
				'uid' => $_USER->id,
				'tplid' => $tplid,
				'typeid' => $typeid,
				'flowkey' => $flowkey,
				'flowkey1' => $flowkey1,
				'flowkey2' => $flowkey2,
				'flowkey3' => $flowkey3,
				'flowkey4' => $flowkey4
			);
			insert_db('project_flow',$project_flow);
			$id=$db->insert_id();
			$content=serialize($project_flow);
			$title='审批流程信息';
			get_logadd($id,$content,$title,32,$_USER->id);
		}
		show_msg('审批流程信息操作成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'&tplid='.$tplid.'&typeid='.$typeid.'&flowkey4='.$flowkey4.'&modid='.$modid.'');
	}else{
		$fid = getGP('fid','G','int');
		if($fid!=''){
			$user = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."project_flow  WHERE fid = '$fid'");
			$flownum=$user['flownum'];
			$_title['name']='编辑';
		}else{ 
			$apps = $db->fetch_one_array("SELECT flownum FROM ".DB_TABLEPRE."project_flow WHERE tplid='".$tplid."' and typeid='".$typeid."' and flowkey4='".$flowkey4."' ORDER BY fid desc LIMIT 1");
			$flownum=$apps["flownum"]+1;
			$user['flowkey']=1;
			$user['flowkey1']='1';
			$user['flowkey2']=2;
			$_title['name']='发布';
		}
		include_once('mana/flowadd.php');
	}
}
?>