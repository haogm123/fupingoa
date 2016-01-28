<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');
$typeid=$_GET['typeid'];
$tplid=$_GET['tplid'];
empty($do) && $do = 'list';
if ($do == 'list') {
	get_key("workclass_admin");
	$flow = $db->fetch_one_array("SELECT flownum FROM ".DB_TABLEPRE."workclass_flow WHERE tplid='".$tplid."' and typeid='".$typeid."' ORDER BY fid asc LIMIT 1");
	if($flow['flownum']!='1'){
		$workclass_flow = array(
			'flowname' => '申请人提交申请',
			'flownum' => 1,
			'flowkey' => 1,
			'flowkey1' => 1,
			'flowkey2' => 2,
			'flowkey3' => 2,
			'tplid' => $tplid,
			'typeid' => $typeid,
			'uid' => $_USER->id
			);
		insert_db('workclass_flow',$workclass_flow);
	}
	//列表信息 
	$wheresql = '';
	$page = max(1, getGP('page','G','int'));
	$pagesize = $_CONFIG->config_data('pagenum');
	$offset = ($page - 1) * $pagesize;
	$url = 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'&typeid='.$typeid.'&tplid='.$tplid.'';
	$num = $db->result("SELECT COUNT(*) AS num FROM ".DB_TABLEPRE."workclass_flow WHERE tplid='".$tplid."' and typeid='".$typeid."' order by fid asc");
     $sql = "SELECT * FROM ".DB_TABLEPRE."workclass_flow WHERE tplid='".$tplid."' and typeid='".$typeid."' order by fid asc LIMIT $offset, $pagesize";
	$result = $db->fetch_all($sql);
	include_once('mana/flow.php');

} elseif ($do == 'update') {
	get_key("workclass_admin");
	$idarr = getGP('id','P','array');
	foreach ($idarr as $id) {
		$db->query("DELETE FROM ".DB_TABLEPRE."workclass_flow WHERE fid = '$id' ");	
	}
	$content=serialize($idarr);
	$title='删除审批流程';
	get_logadd($id,$content,$title,14,$_USER->id);
	show_msg('审批流程信息删除成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'&tplid='.$tplid.'&typeid='.$typeid.'');
}elseif ($do == 'pic') {
	$num = $db->result("SELECT COUNT(*) AS num FROM ".DB_TABLEPRE."workclass_flow WHERE tplid='".$tplid."' and typeid='".$typeid."' order by fid asc");
    $sql = "SELECT * FROM ".DB_TABLEPRE."workclass_flow WHERE tplid='".$tplid."' and typeid='".$typeid."' order by fid asc";
	$result = $db->fetch_all($sql);
	include_once('mana/flowpic.php');
}elseif ($do == 'add') {
	get_key("workclass_admin");
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
			$flowdate = getGP('flowdate','P');
			$flowdatetype = getGP('flowdatetype','P');
			if($flowkey3==''){
				$flowkey3='2';
			}
			$flowkey4post=getGP('flowkey4','P','array');
			foreach ($flowkey4post as $arr4) {
				$flowkey4.=$arr4.',';
			}
			//$flowkey4=substr($flowkey4, 0, -1);
			$workclass_flow = array(
				'flowname' => $flowname,
				'flowuser' => $flowuser,
				'flowkey' => $flowkey,
				'flowkey1' => $flowkey1,
				'flowkey2' => $flowkey2,
				'flowkey3' => $flowkey3,
				'flowkey4' => $flowkey4,
				'flowdate' => $flowdate,
				'flowdatetype' => $flowdatetype
			);
			update_db('workclass_flow',$workclass_flow, array('fid' => $fid));
			$content='';
			$content=serialize($workclass_flow);
			$title='审批流程信息';
			get_logadd($id,$content,$title,35,$_USER->id);
			
		}else{
			$flowname = check_str(getGP('flowname','P'));
			$flownum = check_str(getGP('flownum','P'));
			$flowuser = check_str(getGP('flowuser','P'));
			$flowkey = getGP('flowkey','P');
			$flowkey1 = getGP('flowkey1','P');
			$flowkey2 = getGP('flowkey2','P');
			$flowkey3 = getGP('flowkey3','P');
			$flowdate = getGP('flowdate','P');
			$flowdatetype = getGP('flowdatetype','P');
			$flowkey4post=getGP('flowkey4','P','array');
			foreach ($flowkey4post as $arr4) {
				$flowkey4.=$arr4.',';
			}
			//$flowkey4=substr($flowkey4, 0, -1);
			$workclass_flow = array(
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
				'flowkey4' => $flowkey4,
				'flowdate' => $flowdate,
				'flowdatetype' => $flowdatetype
			);
			insert_db('workclass_flow',$workclass_flow);
			$id=$db->insert_id();
			$content=serialize($workclass_flow);
			$title='审批流程信息';
			get_logadd($id,$content,$title,35,$_USER->id);
		}
		show_msg('审批流程信息操作成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'&tplid='.$tplid.'&typeid='.$typeid.'');
	}else{
		$fid = getGP('fid','G','int');
		if($fid!=''){
			$user = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."workclass_flow  WHERE fid = '$fid'");
			$flownum=$user['flownum'];
			$_title['name']='编辑';
		}else{ 
			$apps = $db->fetch_one_array("SELECT flownum FROM ".DB_TABLEPRE."workclass_flow WHERE tplid='".$tplid."' and typeid='".$typeid."' ORDER BY fid desc LIMIT 1");
			$flownum=$apps["flownum"]+1;
			$user['flowkey']=1;
			$user['flowkey1']='1';
			$user['flowkey2']=2;
			$user['flowdatetype']=0;
			$user['flowdate']=30;
			$_title['name']='发布';
		}
		include_once('mana/flowadd.php');
	}
}
?>