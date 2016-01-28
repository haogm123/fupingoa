<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');
get_key("approval_");
$apptype=$_GET['apptype'];
if($apptype!=''){
	$sql="SELECT * FROM ".DB_TABLEPRE."app_type  WHERE type = '1' and id='".$apptype."'";
	$type = $db->fetch_one_array($sql);
}
if($type['type']=='1'){
	$nodeid='1,2,3,4,5,6';
	$nodename='局办核稿,发文审稿,领导签发,发文会签,发文盖章,文件分发';
}else{
	$nodeid='1,2,3,4';
	$nodename='发文拟办,领导批示,发文分发,发文承办';
}
$filenumber=random(6,'0123456789').get_date('ymdHis',PHP_TIME);
empty($do) && $do = 'list';
if ($do == 'list') {
	//列表信息 
	$wheresql = '';
	$page = max(1, getGP('page','G','int'));
	$pagesize = $_CONFIG->config_data('pagenum');
	$offset = ($page - 1) * $pagesize;
	$url = 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'&type='.$_GET['type'];
	if($_GET['type']==1){
		if ($title = getGP('title','G')) {
			$wheresql .= " AND a.title LIKE '%$title%' ";
			$url .= '&title='.rawurlencode($title);
		}
		if ($organ = getGP('organ','G')) {
			$wheresql .= " AND a.organ LIKE '%$organ%' ";
			$url .= '&organ='.rawurlencode($organ);
		}
		if ($fontsize = getGP('fontsize','G')) {
			$wheresql .= " AND a.fontsize LIKE '%$fontsize%' ";
			$url .= '&fontsize='.rawurlencode($fontsize);
		}
		if ($category = getGP('category','G')) {
			$wheresql .= " AND a.category='".$category."'";
			$url .= '&category='.rawurlencode($category);
		}
		$tmp_pkey = $db->fetch_all("SELECT perid FROM ".DB_TABLEPRE."personnel_log WHERE uid='".$_USER->id."' AND pkey=0");
		foreach ($tmp_pkey as $tmp_perid) {
		$tmp_perid_str.=$tmp_perid['perid'].',';
		}
		$tmp_perid_str.='0';

		$num = $db->result("SELECT count(*) as num FROM ".DB_TABLEPRE."personnel a,".DB_TABLEPRE."approval b WHERE b.id=a.fileid AND a.pkey IN(0,4) AND a.name LIKE '%".get_realname($_USER->id)."%' AND b.akey<>1 AND a.type=2 AND (a.pkey=0 OR a.id IN($tmp_perid_str))");
		$sql = "SELECT b.* FROM ".DB_TABLEPRE."personnel a,".DB_TABLEPRE."approval b WHERE b.id=a.fileid AND a.pkey IN(0,4) AND a.name LIKE '%".get_realname($_USER->id)."%' AND b.akey<>1 AND a.type=2 AND (a.pkey=0 OR a.id IN($tmp_perid_str)) ORDER BY b.id desc LIMIT $offset, $pagesize";
	}elseif($_GET['type']==2){
		if ($title = getGP('title','G')) {
			$wheresql .= " AND a.title LIKE '%$title%' ";
			$url .= '&title='.rawurlencode($title);
		}
		if ($organ = getGP('organ','G')) {
			$wheresql .= " AND a.organ LIKE '%$organ%' ";
			$url .= '&organ='.rawurlencode($organ);
		}
		if ($fontsize = getGP('fontsize','G')) {
			$wheresql .= " AND a.fontsize LIKE '%$fontsize%' ";
			$url .= '&fontsize='.rawurlencode($fontsize);
		}
		if ($category = getGP('category','G')) {
			$wheresql .= " AND a.category='".$category."'";
			$url .= '&category='.rawurlencode($category);
		}
		$num = $db->result("select count(*) as num from ".DB_TABLEPRE."personnel a,".DB_TABLEPRE."approval b,".DB_TABLEPRE."app_type c where a.fileid=b.id and a.apptype=c.id and a.pkey in(0,4) and c.keyuser like '%".get_realname($_USER->id)."%' and b.akey<>1 and a.type=2 and c.appkey=2");
		$sql = "select b.* from ".DB_TABLEPRE."personnel a,".DB_TABLEPRE."approval b,".DB_TABLEPRE."app_type c where a.fileid=b.id and a.apptype=c.id and a.pkey in(0,4) and c.keyuser like '%".get_realname($_USER->id)."%' and b.akey<>1 and a.type=2 and c.appkey=2 order by b.id desc LIMIT $offset, $pagesize";
	}elseif($_GET['type']==3){
		if ($title = getGP('title','G')) {
			$wheresql .= " AND a.title LIKE '%$title%' ";
			$url .= '&title='.rawurlencode($title);
		}
		if ($organ = getGP('organ','G')) {
			$wheresql .= " AND a.organ LIKE '%$organ%' ";
			$url .= '&organ='.rawurlencode($organ);
		}
		if ($fontsize = getGP('fontsize','G')) {
			$wheresql .= " AND a.fontsize LIKE '%$fontsize%' ";
			$url .= '&fontsize='.rawurlencode($fontsize);
		}
		if ($category = getGP('category','G')) {
			$wheresql .= " AND a.category='".$category."'";
			$url .= '&category='.rawurlencode($category);
		}
		$num = $db->result("SELECT count(*) as num FROM ".DB_TABLEPRE."distribution a,".DB_TABLEPRE."approval b WHERE a.uid='".$_USER->id."' AND a.dkey=2 AND a.fileid=b.id AND ISNULL(a.viewdate)");
		$sql = "SELECT b.*,a.did FROM ".DB_TABLEPRE."distribution a,".DB_TABLEPRE."approval b WHERE a.uid='".$_USER->id."' AND a.dkey=2 AND a.fileid=b.id AND ISNULL(a.viewdate) order by a.did asc LIMIT $offset, $pagesize";
	}elseif($_GET['type']==4){
		if ($title = getGP('title','G')) {
			$wheresql .= " AND a.title LIKE '%$title%' ";
			$url .= '&title='.rawurlencode($title);
		}
		if ($organ = getGP('organ','G')) {
			$wheresql .= " AND a.organ LIKE '%$organ%' ";
			$url .= '&organ='.rawurlencode($organ);
		}
		if ($fontsize = getGP('fontsize','G')) {
			$wheresql .= " AND a.fontsize LIKE '%$fontsize%' ";
			$url .= '&fontsize='.rawurlencode($fontsize);
		}
		if ($category = getGP('category','G')) {
			$wheresql .= " AND a.category='".$category."'";
			$url .= '&category='.rawurlencode($category);
		}
		$num = $db->result("SELECT COUNT(*) AS num FROM ".DB_TABLEPRE."approval a,".DB_TABLEPRE."personnel b WHERE 1 $wheresql and a.id=b.fileid and b.pkey!=0 and b.type=2 and b.name like '%".get_realname($_USER->id)."%' order by b.id desc");
		$sql = "SELECT a.* FROM ".DB_TABLEPRE."approval a,".DB_TABLEPRE."personnel b WHERE 1 $wheresql and a.id=b.fileid and b.pkey!=0 and b.type=2 and b.name like '%".get_realname($_USER->id)."%' order by b.id desc LIMIT $offset, $pagesize";
	}elseif($_GET['type']==5){
		$tmp_pkey = $db->fetch_all("SELECT perid FROM ".DB_TABLEPRE."personnel_log WHERE uid='".$_USER->id."' AND pkey<>0 and type=2");
		foreach ($tmp_pkey as $tmp_perid) {
		$tmp_perid_str.=$tmp_perid['perid'].',';
		}
		$tmp_perid_str.='0';

		$num = $db->result("SELECT count(*) as num FROM ".DB_TABLEPRE."personnel a,".DB_TABLEPRE."approval b WHERE a.type=2 AND a.pkey<>0 AND a.name LIKE '%".get_realname($_USER->id)."%' AND a.lnstructions<>'生成发文拟稿，系统自动完成该步骤' and b.id=a.fileid AND (a.appkey=2 OR a.id IN($tmp_perid_str))");
		$sql = "SELECT b.* FROM ".DB_TABLEPRE."personnel a,".DB_TABLEPRE."approval b WHERE a.type=2 AND a.pkey<>0 AND a.name LIKE '%".get_realname($_USER->id)."%' AND a.lnstructions<>'生成发文拟稿，系统自动完成该步骤' and b.id=a.fileid AND (a.appkey=2 OR a.id IN($tmp_perid_str)) ORDER BY b.id desc LIMIT $offset, $pagesize";
	}else{
		if ($title = getGP('title','G')) {
			$wheresql .= " AND title LIKE '%$title%' ";
			$url .= '&title='.rawurlencode($title);
		}
		if ($organ = getGP('organ','G')) {
			$wheresql .= " AND organ LIKE '%$organ%' ";
			$url .= '&organ='.rawurlencode($organ);
		}
		if ($fontsize = getGP('fontsize','G')) {
			$wheresql .= " AND fontsize LIKE '%$fontsize%' ";
			$url .= '&fontsize='.rawurlencode($fontsize);
		}
		if ($category = getGP('category','G')) {
			$wheresql .= " AND category='".$category."'";
			$url .= '&category='.rawurlencode($category);
		}
		//权限
		$vuidtype = getGP('vuidtype','G');
		if(!is_superadmin() && $vuidtype==''){
			$wheresql .= " and userid='".$_USER->id."'";
		}
		if ($vuidtype!='') {
			if($vuidtype=='-1'){
				$wheresql .= get_subordinate($_USER->id,'userid');
			}else{
				$wheresql .= " and userid='".$vuidtype."'";
			}
			$url .= '&vuidtype='.$vuidtype;
		}
		$num = $db->result("SELECT COUNT(*) AS num FROM ".DB_TABLEPRE."approval WHERE 1 $wheresql  order by id desc");
		$sql = "SELECT * FROM ".DB_TABLEPRE."approval WHERE 1 $wheresql  order by id desc LIMIT $offset, $pagesize";
	}
	$result = $db->fetch_all($sql);
	include_once('approval/list.php');

}elseif ($do == 'mana') {
	if($_POST['view']!=''){
		$perid=getGP('perid','P');//当前审批ID
		$pkey=getGP('pkey','P');//状态
		$fileid=getGP('fileid','P');//公文ID
		if($pkey==1){
			$db->query("update ".DB_TABLEPRE."approval set zd_repairs='".getGP('zd_repairs','P')."',end_time='".getGP('end_time','P')."' WHERE id=".$fileid);
			$db->query("DELETE FROM ".DB_TABLEPRE."personnel_log WHERE perid = '".$perid."' ");
			$staff=explode(',',getGP('staff','P'));
			$staffid=explode(',',getGP('staffid','P'));
			if(sizeof($staffid)>1){
				$appkey=1;
				$appkey1=1;
			}else{
				$appkey=2;
				$appkey1=2;
			}
			$personnel = array(
				'name' =>getGP('staff','P'),
				'uid' =>getGP('staffid','P'),
				'node' =>getGP('node','P'),
				'pkey' =>0,
				'appkey' =>$appkey,
				'appkey1' =>$appkey1
				);
			update_db('personnel',$personnel, array('id' => $perid));
			if($appkey=='1'){
				for($i=0;$i<sizeof($staffid);$i++){
					$personnel_log = array(
						'type' => 2,
						'name' => $staff[$i],
						'uid' =>$staffid[$i],
						'pkey' =>0,
						'perid' =>$perid
						);
					insert_db('personnel_log',$personnel_log);
				}
			}
		}else{
			$db->query("update ".DB_TABLEPRE."personnel set pkey=5 where id = '".$perid."'");
		}
		$content=serialize($personnel1);
		$title='监控公文';
		get_logadd($id,$content,$title,14,$_USER->id);
		show_msg('公文信息己成功更新！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'&type=2');
	}else{
		//获取公文信息
		$sql = "SELECT * FROM ".DB_TABLEPRE."approval  WHERE id = '".$_GET['fileid']."'";
		$row = $db->fetch_one_array($sql);
		//获取当前流程
		$sql = "SELECT * FROM ".DB_TABLEPRE."personnel  WHERE fileid = '".$row['id']."' and type=2 and (pkey=0 or pkey=4) and apptype='".$row['category']."' order by id desc";
		$per = $db->fetch_one_array($sql);
		include_once('approval/mana.php');
	}
}elseif ($do == 'reading') {
	if($_POST['view']!=''){
		$did=getGP('did','P');//状态
		$fileid=getGP('fileid','P');//公文ID
		$distribution = array(
			'evaluation' =>getGP('content','P')
			);
		update_db('distribution',$distribution, array('did' => $did,'fileid' => $fileid,'uid' => $_USER->id));
		show_msg('公文信息己成功更新！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'&type=3');
	}else{
		$distribution = array(
			'viewdate' =>get_date('Y-m-d H:i:s',PHP_TIME)
			);
		update_db('distribution',$distribution, array('did' => $_GET['did'],'fileid' => $_GET['fileid'],'uid' => $_USER->id));
		//获取公文信息
		$sql = "SELECT * FROM ".DB_TABLEPRE."approval  WHERE id = '".$_GET['fileid']."'";
		$row = $db->fetch_one_array($sql);
		include_once('approval/reading.php');
	}
}elseif ($do == 'personnel') {
	if($_POST['view']!=''){
		$perid=getGP('perid','P');//当前审批ID
		$content=getGP('content','P');//批示
		$postscript=getGP('postscript','P');//附言
		$pkey=getGP('pkey','P');//状态
		$fileid=getGP('fileid','P');//公文ID
		$oldappkey=getGP('oldappkey','P');//状态
		$oldappkey1=getGP('oldappkey1','P');//状态
		if($pkey==3){
			//获取公文信息
			$sql = "SELECT * FROM ".DB_TABLEPRE."attachment  WHERE id = '".$fileid."'";
			$row = $db->fetch_one_array($sql);
			//获取下一步流程
			$sql = "SELECT * FROM ".DB_TABLEPRE."app_flow  WHERE fid=".getGP('updatefid','P')." and apptype='".$_GET['apptype']."'";
			$flow = $db->fetch_one_array($sql);
			include_once('approval/personnel_up.php');
			exit;
		}
		if($type['appkey']==1){
			$sql = "SELECT * FROM ".DB_TABLEPRE."app_flow  WHERE fid = '".getGP('oldappflow','P')."'";
			$flow = $db->fetch_one_array($sql);
			$perlnum = $db->result("SELECT COUNT(*) AS perlnum FROM ".DB_TABLEPRE."personnel_log where perid='".$perid."' and pkey=0");
			if($oldappkey==1){
				if($oldappkey1==1 && $perlnum>1 && $pkey!=2){
					$pkeys=4;
				}elseif($flow['flowkey']==3){
					$pkeys=5;
				}else{
					$pkeys=$pkey;
				}
			}else{
				$pkeys=$pkey;
				if($flow['flowkey']==3 && $pkey!=2){
					$pkeys=5;
				}
			}
			$personnel1 = array(
				'pkey' =>$pkeys,
				'approvaldate' =>get_date('Y-m-d H:i:s',PHP_TIME),
				'lnstructions' =>$content,
				'oapostscript' =>$postscript
				);
			update_db('personnel',$personnel1, array('id' => $perid));
			if($oldappkey==1){
				$per_log = array(
					'pkey' =>$pkey,
					'approvaldate' =>get_date('Y-m-d H:i:s',PHP_TIME),
					'lnstructions' =>$content,
					'oapostscript' =>$postscript
					);
				update_db('personnel_log',$per_log, array('perid' => $perid,'uid' => $_USER->id));
			}
			//创建下一步审批人员
			if(getGP('staffid','P')!='' && $pkeys!=2){
				$personnel2 = array(
					'type' => 2,
					'name' => getGP('staff','P'),
					'uid' =>getGP('staffid','P'),
					'pkey' =>0,
					'apptype' =>$apptype,
					'appflow' => getGP('appflow','P'),
					'appkey' => getGP('appkey','P'),
					'appkey1' => getGP('appkey1','P'),
					'fileid' => $fileid
					);
				insert_db('personnel',$personnel2);
				$pid=$db->insert_id();
				if(getGP('appkey','P')=='1'){
					$staff=explode(',',getGP('staff','P'));
					$staffid=explode(',',getGP('staffid','P'));
					for($i=0;$i<sizeof($staffid);$i++){
						$personnel_log = array(
							'type' => 2,
							'name' => $staff[$i],
							'uid' =>$staffid[$i],
							'pkey' =>0,
							'perid' =>$pid
							);
						insert_db('personnel_log',$personnel_log);
					}
				}
			}
		}else{
			//自由流程
			$perlnum = $db->result("SELECT COUNT(*) AS perlnum FROM ".DB_TABLEPRE."personnel_log where perid='".$perid."' and pkey=0");
			if($perlnum>1 && $pkey!=2){
				$pkeys=4;
			}else{
				$pkeys=$pkey;
			}
			$personnel1 = array(
				'pkey' =>$pkeys,
				'approvaldate' =>get_date('Y-m-d H:i:s',PHP_TIME),
				'lnstructions' =>$content,
				'oapostscript' =>$postscript
				);
			update_db('personnel',$personnel1, array('id' => $perid));
			if($oldappkey==1){
				$per_log = array(
					'pkey' =>$pkey,
					'approvaldate' =>get_date('Y-m-d H:i:s',PHP_TIME),
					'lnstructions' =>$content,
					'oapostscript' =>$postscript
					);
				update_db('personnel_log',$per_log, array('perid' => $perid,'uid' => $_USER->id));
			}
			if(getGP('staff','P')!=''){
				$staff=explode(',',getGP('staff','P'));
				$staffid=explode(',',getGP('staffid','P'));
				if(sizeof($staffid)>1){
					$appkey=1;
					$appkey1=1;
				}else{
					$appkey=2;
					$appkey1=2;
				}
				$personnel2 = array(
					'type' => 2,
					'name' => getGP('staff','P'),
					'uid' =>getGP('staffid','P'),
					'pkey' =>0,
					'apptype' =>$apptype,
					'appflow' => 0,
					'node' => getGP('node','P'),
					'appkey' => $appkey,
					'appkey1' => $appkey1,
					'fileid' => $fileid
					);
				insert_db('personnel',$personnel2);
				$pid=$db->insert_id();
				if($appkey=='1'){
					for($i=0;$i<sizeof($staffid);$i++){
						$personnel_log = array(
							'type' => 2,
							'name' => $staff[$i],
							'uid' =>$staffid[$i],
							'pkey' =>0,
							'perid' =>$pid
							);
						insert_db('personnel_log',$personnel_log);
					}
				}
			}
		}
		//更新阅读人员
		if(getGP('disnode','P')!=''){
			if(getGP('distribution','P')!='0'){
				$staff=explode(',',getGP('distribution','P'));
				$staffid=explode(',',getGP('distributionid','P'));
				for($i=0;$i<sizeof($staffid);$i++){
					$distribution = array(
						'dkey' => 2,
						'name' => $staff[$i],
						'uid' =>$staffid[$i],
						'fileid' =>$fileid,
						'disdate' =>get_date('Y-m-d H:i:s',PHP_TIME)
						);
					insert_db('distribution',$distribution);
				}
			}else{
				$query = $db->query("SELECT * FROM ".DB_TABLEPRE."user_view order by vid asc");
				while ($row = $db->fetch_array($query)) {
				$distribution = array(
					'dkey' => 2,
					'name' => $row['name'],
					'uid' =>$row['uid'],
					'fileid' =>$fileid,
					'disdate' =>get_date('Y-m-d H:i:s',PHP_TIME)
				);
				insert_db('distribution',$distribution);
				}
			}
		}
		$db->query("update ".DB_TABLEPRE."sms_receive set smskey=2 where receiveperson='".$_USER->id."' and content like '%fileid=$fileid&apptype=$apptype%'");//审批后设置相关短消息为已读
		if(getGP('sms_info_box_work','P')!=''){
			$content='传来一个公文需要审批，请进入公文待办进行审批!';
			$content.='<a href="admin.php?ac=approval&do=personnel&fileurl=app';
			$content.='&fileid='.$id.'&apptype='.$apptype.'">点击审批<a/>';
			SMS_ADD_POST(getGP('staff','P'),$content,0,0,$_USER->id);
		}
		//手机短信
		if(getGP('sms_info_box_work','P')!=''){
			$content='传来一个公文需要审批,请进入OA进行审批!';
			PHONE_ADD_POST(getGP('staffphone','P'),$content,getGP('staff','P'),0,0,$_USER->id);
		}
		$content=serialize($personnel1);
		$title='审批公文发文';
		get_logadd($id,$content,$title,14,$_USER->id);
		show_msg('公文信息己成功审批！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'&type=1');
	}else{
		//获取公文信息
		$sql = "SELECT * FROM ".DB_TABLEPRE."approval  WHERE id = '".$_GET['fileid']."'";
		$row = $db->fetch_one_array($sql);
		if($type['appkey']==1){
			//获取当前流程
			$sql = "SELECT a.*,b.flownum,b.flowkey1,b.flowkey,b.flowkey2,b.flownote,b.flowmovement FROM ".DB_TABLEPRE."personnel a,".DB_TABLEPRE."app_flow b  WHERE a.appflow=b.fid and a.fileid = '".$_GET['fileid']."' and a.type=2 and (a.pkey=0 or a.pkey=4) and a.apptype='".$_GET['apptype']."' order by a.id desc";
			$per = $db->fetch_one_array($sql);
			if($per['flowkey']!='3'){
				//获取下一步流程
				$sql = "SELECT * FROM ".DB_TABLEPRE."app_flow  WHERE flownum >'".$per['flownum']."' and apptype='".$_GET['apptype']."' order by flownum asc";
				$flow = $db->fetch_one_array($sql);
			}
			//获取分类信息
			//$sql = "SELECT * FROM ".DB_TABLEPRE."app_type  WHERE id='".$_GET['apptype']."'";
			//$type = $db->fetch_one_array($sql);
			$perlnums = $db->result("SELECT COUNT(*) AS perlnums FROM ".DB_TABLEPRE."personnel_log where perid='".$per['id']."' and pkey=0");
			if($per['appkey']==1 && $per['appkey1']==1){
				$wherestr=$perlnums<2 && $per['flowkey']!=3;
			}else{
				$wherestr=$per['flowkey']!=3;
			}
		}else{
			//获取当前流程
			$sql = "SELECT * FROM ".DB_TABLEPRE."personnel  WHERE name like '%".get_realname($_USER->id)."%' and fileid = '".$row['id']."' and type=2 and (pkey=0 or pkey=4) and apptype='".$row['category']."'";
			$per = $db->fetch_one_array($sql);
			if($per['appkey']=='1'){
				$perlnums = $db->result("SELECT COUNT(*) AS perlnums FROM ".DB_TABLEPRE."personnel_log where perid='".$per['id']."' and pkey=0");
			}			
			$wherestr=$perlnums<2;
		}
		include_once('approval/personnel.php');
	}
}elseif ($do == 'personnel_up') {
	if($_POST['view']!=''){
		$perid=getGP('perid','P');//当前审批ID
		$content=getGP('content','P');//批示
		$postscript=getGP('postscript','P');//附言
		$pkey=getGP('pkey','P');//状态
		$fileid=getGP('fileid','P');//公文ID
		$oldappkey=getGP('oldappkey','P');//状态
		$oldappkey1=getGP('oldappkey1','P');//状态
			$sql = "SELECT * FROM ".DB_TABLEPRE."app_flow  WHERE fid = '".getGP('oldappflow','P')."'";
			$flow = $db->fetch_one_array($sql);
			$personnel1 = array(
				'pkey' =>3,
				'approvaldate' =>get_date('Y-m-d H:i:s',PHP_TIME),
				'lnstructions' =>$content,
				'oapostscript' =>$postscript
				);
			update_db('personnel',$personnel1, array('id' => $perid));
			if($oldappkey==1){
				$per_log = array(
					'pkey' =>3,
					'approvaldate' =>get_date('Y-m-d H:i:s',PHP_TIME),
					'lnstructions' =>$content,
					'oapostscript' =>$postscript
					);
				update_db('personnel_log',$per_log, array('perid' => $perid,'uid' => $_USER->id));
			}
			//创建下一步审批人员
			if(getGP('staffid','P')!=''){
				$personnel2 = array(
					'type' => 2,
					'name' => getGP('staff','P'),
					'uid' =>getGP('staffid','P'),
					'pkey' =>0,
					'apptype' =>$apptype,
					'appflow' => getGP('appflow','P'),
					'appkey' => getGP('appkey','P'),
					'appkey1' => getGP('appkey1','P'),
					'fileid' => $fileid
					);
				insert_db('personnel',$personnel2);
				$pid=$db->insert_id();
				if(getGP('appkey','P')=='1'){
					$staff=explode(',',getGP('staff','P'));
					$staffid=explode(',',getGP('staffid','P'));
					for($i=0;$i<sizeof($staffid);$i++){
						$personnel_log = array(
							'type' => 2,
							'name' => $staff[$i],
							'uid' =>$staffid[$i],
							'pkey' =>0,
							'perid' =>$pid
							);
						insert_db('personnel_log',$personnel_log);
					}
				}
			}

		if(getGP('sms_info_box_work','P')!=''){
			$content='传来一个公文需要审批，请进入公文待办进行审批!';
			$content.='<a href="admin.php?ac=approval&do=personnel&fileurl=app';
			$content.='&fileid='.$id.'&apptype='.$apptype.'">点击审批<a/>';
			SMS_ADD_POST(getGP('staff','P'),$content,0,0,$_USER->id);
		}
		//手机短信
		if(getGP('sms_info_box_work','P')!=''){
			$content='传来一个公文需要审批,请进入OA进行审批!';
			PHONE_ADD_POST(getGP('staffphone','P'),$content,getGP('staff','P'),0,0,$_USER->id);
		}
		$content=serialize($personnel1);
		$title='审批公文收文';
		get_logadd($id,$content,$title,14,$_USER->id);
		show_msg('公文信息己成功审批！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'&type=1');
	}
}elseif ($do == 'appflow') {
	$sql = "SELECT * FROM ".DB_TABLEPRE."personnel where fileid='".$_GET['fileid']."' and type=2 order by id asc";
	$result = $db->fetch_all($sql);
	include_once('approval/appflow.php');
}elseif ($do == 'attakey') {
	$db->query("update ".DB_TABLEPRE."approval set akey=1 where id = '".getGP('fileid','G')."'");
	$content=getGP('fileid','G');
	$title='撤消公文发文';
	get_logadd($id,$content,$title,14,$_USER->id);
	show_msg('公文信息己成功撤消！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'');

}elseif ($do == 'view') {
	$sql = "SELECT * FROM ".DB_TABLEPRE."approval  WHERE id = '".$_GET['fileid']."'";
	$row = $db->fetch_one_array($sql);
	$sqls = "SELECT * FROM ".DB_TABLEPRE."personnel  WHERE fileid = '".$row['id']."' and type=2 and (pkey=0 or pkey=2 or pkey=4 or pkey=5) and apptype='".$row['category']."' order by id desc";
	$per = $db->fetch_one_array($sqls);
	$viewtype=$per['pkey'];
	include_once('approval/view.php');
}elseif ($do == 'printview') {
	$sql = "SELECT * FROM ".DB_TABLEPRE."approval  WHERE id = '".$_GET['fileid']."'";
	$row = $db->fetch_one_array($sql);
	$sqls = "SELECT * FROM ".DB_TABLEPRE."personnel  WHERE fileid = '".$row['id']."' and type=2 and (pkey=0 or pkey=2 or pkey=4 or pkey=5) and apptype='".$row['category']."' order by id desc";
	$per = $db->fetch_one_array($sqls);
	$viewtype=$per['pkey'];
	include_once('approval/printview.php');
}elseif($do == 'upview'){
	$sql = "SELECT * FROM ".DB_TABLEPRE."approval  WHERE id = '".$_GET['fileid']."'";
	$row = $db->fetch_one_array($sql);
	$sqls = "SELECT * FROM ".DB_TABLEPRE."personnel  WHERE fileid = '".$row['id']."' and type=2 and (pkey=0 or pkey=2 or pkey=4 or pkey=5) and apptype='".$row['category']."' order by id desc";
	$per = $db->fetch_one_array($sqls);
	$viewtype=$per['pkey'];
	include_once('approval/upview.php');
	
} elseif ($do == 'update') {
	$idarr = getGP('id','P','array');
	foreach ($idarr as $id) {
		$db->query("DELETE FROM ".DB_TABLEPRE."approval WHERE id = '$id' ");
		$db->query("DELETE FROM ".DB_TABLEPRE."personnel WHERE type=2 and fileid = '$id' ");
		$sql = "SELECT id FROM ".DB_TABLEPRE."personnel WHERE type=2 and fileid = '".$id."'";
		$row = $db->fetch_one_array($sql);
		$db->query("DELETE FROM ".DB_TABLEPRE."personnel_log WHERE perid = '".$row['id']."' ");
		$db->query("DELETE FROM ".DB_TABLEPRE."distribution WHERE dkey=2 and fileid = '$id' ");	
	}
	$content=getGP('fileid','G');
	$title='删除公文';
	get_logadd($id,$content,$title,14,$_USER->id);
	show_msg('公文信息删除成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'');

}elseif ($do == 'add') {
	if($apptype!=''){
		if($_POST['view']!=''){
			$jjcd = getGP('jjcd','P');
			$gwnum= getGP('gwnum','P');
			$fb = getGP('fb','P');
			$gkyj = getGP('gkyj','P');
			$annex = getGP('annexurl','P');
			$fontsize = getGP('fontsize','P');
			$secrecy = getGP('secrecy','P');
			$title = getGP('title','P');
			$keyword = getGP('keyword','P');
			$sponsor = getGP('sponsor','P');
			$proofread = getGP('proofread','P');
			$repairs = getGP('repairs','P');
			$sealing = getGP('sealing','P');
			$delivers = getGP('delivers','P');
			$sending = getGP('sending','P');
			$issuedate = getGP('issuedate','P');
			$zd_repairs=getGP('zd_repairs','P');//指定缮印人
			$uid=$_USER->id;
			$approval = array(
				'annex' => $annex,
				'fontsize' => $fontsize,
				'secrecy' => $secrecy,
				'title' => $title,
				'keyword' => $keyword,
				'sponsor' => $sponsor,
				'userid' => $uid,
				'proofread' => $proofread,
				'repairs' => $repairs,
				'sealing' => $sealing,
				'delivers' => $delivers,
				'sending' => $sending,
				'akey' => 0,
				'category' => $apptype,
				'issuedate' => $issuedate,
				'end_time' => $_POST['end_time'],
				'jjcd' => $jjcd,
				'gwnum'=> $gwnum,
				'fb' => $fb,
				'gkyj'=>$gkyj,
				'zd_repairs'=>$zd_repairs
			);
			if($_POST['save_type']=='1'){
				//写入主表信息
				insert_db('approval',$approval);
				$id=$db->insert_id();
				if(getGP('sms_info_box_work','P')!=''){
					//$content='传来一个公文需要审批，请进入公文待办进行审批!';
					$content='传来一个公文需要审批，请进入公文待办进行审批!';
					$content.='<a href="admin.php?ac=approval&do=personnel&fileurl=app';
					$content.='&fileid='.$id.'&apptype='.$apptype.'">点击审批<a/>';
					//接收人；内容；类型（1：有返回回值;0：无返回值）;URL
					SMS_ADD_POST(getGP('staff','P'),$content,0,0,$_USER->id);
				}
				//手机短信
				if(getGP('sms_info_box_work','P')!=''){
					$content='传来一个公文需要审批,请进入OA进行审批!';
					PHONE_ADD_POST(getGP('staffphone','P'),$content,getGP('staff','P'),0,0,$_USER->id);
				}
				//更新附件
				$fileoffice = array(
					'officeid' => $id
				);
				update_db('fileoffice',$fileoffice, array('number' =>$_POST['filenumber']));
				
				//写入流程
				if($type['appkey']=='1'){
					$sql = "SELECT * FROM ".DB_TABLEPRE."app_flow  WHERE apptype = '".$apptype."' and flownum=1 order by fid asc";
					$flow = $db->fetch_one_array($sql);
					$personnel1 = array(
						'type' => 2,
						'name' => get_realname($_USER->id),
						'uid' =>$_USER->id,
						'pkey' =>1,
						'approvaldate' =>get_date('Y-m-d H:i:s',PHP_TIME),
						'lnstructions' =>'生成发文拟稿，系统自动完成该步骤',
						'apptype' =>$apptype,
						'appflow' => $flow['fid'],
						'appkey' => 1,
						'appkey1' => 1,
						'fileid' => $id
					);
					insert_db('personnel',$personnel1);
					$personnel2 = array(
						'type' => 2,
						'name' => getGP('staff','P'),
						'uid' =>getGP('staffid','P'),
						'pkey' =>0,
						'apptype' =>$apptype,
						'appflow' => getGP('appflow','P'),
						'appkey' => getGP('appkey','P'),
						'appkey1' => getGP('appkey1','P'),
						'fileid' => $id
					);
					insert_db('personnel',$personnel2);
					$pid=$db->insert_id();
					if(getGP('appkey','P')=='1'){
						$staff=explode(',',getGP('staff','P'));
						$staffid=explode(',',getGP('staffid','P'));
						for($i=0;$i<sizeof($staffid);$i++){
							$personnel_log = array(
								'type' => 2,
								'name' => $staff[$i],
								'uid' =>$staffid[$i],
								'pkey' =>0,
								'perid' =>$pid
							);
							insert_db('personnel_log',$personnel_log);
						}
					}
				}else{
					$personnel1 = array(
						'type' => 2,
						'name' => get_realname($_USER->id),
						'uid' =>$_USER->id,
						'pkey' =>1,
						'approvaldate' =>get_date('Y-m-d H:i:s',PHP_TIME),
						'lnstructions' =>'生成发文拟稿，系统自动完成该步骤',
						'apptype' =>$apptype,
						'appflow' => 0,
						'appkey' => 2,
						'appkey1' => 2,
						'fileid' => $id
					);
					insert_db('personnel',$personnel1);
					$staff=explode(',',getGP('staff','P'));
					$staffid=explode(',',getGP('staffid','P'));
					if(sizeof($staffid)>1){
						$appkey=1;
						$appkey1=1;
					}else{
						$appkey=2;
						$appkey1=2;
					}
					$personnel2 = array(
						'type' => 2,
						'name' => getGP('staff','P'),
						'uid' =>getGP('staffid','P'),
						'pkey' =>0,
						'apptype' =>$apptype,
						'appflow' => 0,
						'node' => getGP('node','P'),
						'appkey' => $appkey,
						'appkey1' => $appkey1,
						'fileid' => $id
					);
					insert_db('personnel',$personnel2);
					$pid=$db->insert_id();
					if($appkey=='1'){
						for($i=0;$i<sizeof($staffid);$i++){
							$personnel_log = array(
								'type' => 2,
								'name' => $staff[$i],
								'uid' =>$staffid[$i],
								'pkey' =>0,
								'perid' =>$pid
							);
							insert_db('personnel_log',$personnel_log);
						}
					}
				}
				show_msg('公文发文信息提交成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl);
			}elseif($_POST['save_type']=='2'){
				//写入主表信息到草稿箱
				insert_db('approval_draft',$approval);
				show_msg('公文发文信已存草稿！', 'admin.php?ac='.$ac.'&do=add&apptype='.$apptype.'&do=draft&apptype='.$apptype.'&fileurl='.$fileurl);
				
			}elseif($_POST['save_type']=='3'){
				show_msg('公文发文信息提交成功！', 'admin.php?ac='.$ac.'&do=add&apptype='.$apptype.'&fileurl='.$fileurl);
			}
		}else{
			if($type['appkey']=='1'){
				//固定流程
				$sql = "SELECT * FROM ".DB_TABLEPRE."app_flow  WHERE apptype = '".$apptype."' and flownum>1 order by fid asc";
				$flow = $db->fetch_one_array($sql);
			}else{
			}
			include_once('approval/add.php');
		}
	}else{
		$sql = "SELECT name,id FROM ".DB_TABLEPRE."app_type  WHERE type = '1'";
		$result = $db->fetch_all($sql);
		include_once('approval/typelist.php');
	}
}elseif ($do == 'excel') {
	$datename="app_".get_date('YmdHis',PHP_TIME);
	$outputFileName = 'data/excel/'.$datename.'.xls';
		$content = array();
		$archive=array("标题","发文字号","密级","主题词","主办单位","拟稿人","校对","缮印","用印","主送","抄送","发布时间");
		$content[] = $archive;
		$wheresql = '';
		if ($title = getGP('title','P')) {
			$wheresql .= " AND title LIKE '%$title%' ";
		}
		if ($organ = getGP('organ','P')) {
			$wheresql .= " AND organ LIKE '%$organ%' ";
		}
		if ($fontsize = getGP('fontsize','P')) {
			$wheresql .= " AND fontsize LIKE '%$fontsize%' ";
		}
		if ($category = getGP('category','P')) {
			$wheresql .= " AND category='".$category."'";
		}
		//权限
		$vuidtype = getGP('vuidtype','P');
		if(!is_superadmin() && $vuidtype==''){
			$wheresql .= " and userid='".$_USER->id."'";
		}
		if ($vuidtype!='') {
			if($vuidtype=='-1'){
				$wheresql .= get_subordinate($_USER->id,'userid');
			}else{
				$wheresql .= " and userid='".$vuidtype."'";
			}
		}
		
		$sql = "SELECT a.* FROM ".DB_TABLEPRE."approval a WHERE 1 $wheresql ORDER BY a.id desc";
		$result = $db->query($sql);
		while ($row = $db->fetch_array($result)) {	
			$archive = array(
				"".$row['title']."",
				"".$row['fontsize']."",
				"".$row['secrecy']."",
				"".$row['keyword']."",
				"".$row['sponsor']."",
				"".get_realname($row['userid'])."",
				"".$row['proofread']."",
				"".$row['repairs']."",
				"".$row['sealing']."",
				"".$row['delivers']."",
				"".$row['sending']."",
				"".str_replace("-",".",$row[issuedate]).""
			);
			$content[] = $archive;
		}
	$excel = new ExcelWriter($outputFileName);
	if($excel==false) 
		echo $excel->error; 
	foreach($content as $v){
		$excel->writeLine($v);
	}
	$excel->sendfile($outputFileName);
}elseif ($do == 'draft') {
	if($_GET[id]!=''){//重新编辑草稿
		$result=$db->fetch_one_array("select * from toa_approval_draft where id=$_GET[id]");
		include_once('app/approval/oldadd.php');
	}else{//显示草稿列表
		$myid=$_USER->id;//登陆人ID
		$apptype=$_GET[apptype];//得到类型(需用印、不用印)
		$sql="select id,title,issuedate,fontsize,category from toa_approval_draft where userid=$myid and category=$apptype order by id desc";
		$result = $db->fetch_all($sql);
		include_once('app/approval/draft.php');
	}
}elseif($do=='draft_delect'){
	$db->query("DELETE FROM ".DB_TABLEPRE."approval_draft WHERE id = $_GET[id]");
	//删除草稿后查询剩余草稿记录并显示草稿列表
	$myid=$_USER->id;//登陆人ID
	$apptype=$_GET[apptype];//得到类型(需用印、不用印)
	$sql="select id,title,issuedate,fontsize,category from toa_approval_draft where userid=$myid and category=$apptype order by id desc";
	$result = $db->fetch_all($sql);
	include_once('app/approval/draft.php');
}


?>