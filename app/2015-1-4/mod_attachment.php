<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');
get_key("attachment_");
$apptype=$_GET['apptype'];
if($apptype!=''){
	$sql="SELECT * FROM ".DB_TABLEPRE."app_type  WHERE type = '2' and id='".$apptype."'";
	$type = $db->fetch_one_array($sql);
}
if($type['type']=='1'){
	$nodeid='1,2,3,4,5,6';
	$nodename='发文核稿,发文审稿,领导签发,发文会签,发文盖章,文件分发';
}else{
	$nodeid='1,2,3,4';
	$nodename='收文拟办,领导批示,收文分发,收文承办';
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
		if ($number = getGP('number','G')) {
			$wheresql .= " AND a.number='".$number."'";
			$url .= '&number='.rawurlencode($number);
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
		//多人审批已经审批了意见的不在显示
		$tmp_pkey = $db->fetch_all("SELECT perid FROM ".DB_TABLEPRE."personnel_log WHERE uid='".$_USER->id."' AND pkey=0 and type=1");
		foreach ($tmp_pkey as $tmp_perid) {
		$tmp_perid_str.=$tmp_perid['perid'].',';
		}
		$tmp_perid_str.='0';

		$num = $db->result("SELECT count(*) as num FROM ".DB_TABLEPRE."personnel a,".DB_TABLEPRE."attachment b WHERE b.id=a.fileid AND a.pkey IN(0,4) AND a.name LIKE '%".get_realname($_USER->id)."%' AND b.attakey<>1 AND a.type=1 AND (a.pkey=0 OR a.id IN($tmp_perid_str))");
		$sql = "SELECT b.* FROM ".DB_TABLEPRE."personnel a,".DB_TABLEPRE."attachment b WHERE b.id=a.fileid AND a.pkey IN(0,4) AND a.name LIKE '%".get_realname($_USER->id)."%' AND b.attakey<>1 AND a.type=1 AND (a.pkey=0 OR a.id IN($tmp_perid_str)) ORDER BY b.type=1 DESC,b.receiptdate ASC LIMIT $offset, $pagesize";

		//$sql="SELECT a.* FROM ".DB_TABLEPRE."attachment a,".DB_TABLEPRE."personnel b,".DB_TABLEPRE."personnel_log c where (a.id=b.fileid and (b.pkey=0) and b.name like '%".get_realname($_USER->id)."%' and a.attakey!=1 and b.type=1 and appkey=2) or (a.id=b.fileid and (b.pkey=0 or b.pkey=4) and a.attakey!=1 and b.type=1 and  (b.id=c.perid and c.pkey=0 and c.uid=$_USER->id) and appkey=1)  group by a.id order by a.type desc,a.id desc LIMIT $offset, $pagesize ";
		//$num=$db->result($sql);
	}elseif($_GET['type']==2){
		if ($title = getGP('title','G')) {
			$wheresql .= " AND a.title LIKE '%$title%' ";
			$url .= '&title='.rawurlencode($title);
		}
		if ($number = getGP('number','G')) {
			$wheresql .= " AND a.number='".$number."'";
			$url .= '&number='.rawurlencode($number);
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
		$num = $db->result("select count(*) as num from ".DB_TABLEPRE."personnel a,".DB_TABLEPRE."attachment b,".DB_TABLEPRE."app_type c where a.fileid=b.id and a.apptype=c.id and a.pkey in(0,4) and c.keyuser like '%".get_realname($_USER->id)."%' and b.attakey<>1 and a.type=1 and c.appkey=2");
		$sql = "select b.* from ".DB_TABLEPRE."personnel a,".DB_TABLEPRE."attachment b,".DB_TABLEPRE."app_type c where a.fileid=b.id and a.apptype=c.id and a.pkey in(0,4) and c.keyuser like '%".get_realname($_USER->id)."%' and b.attakey<>1 and a.type=1 and c.appkey=2 order by b.type=1 desc,b.receiptdate desc LIMIT $offset, $pagesize";
	}elseif($_GET['type']==3){
		if ($title = getGP('title','G')) {
			$wheresql .= " AND a.title LIKE '%$title%' ";
			$url .= '&title='.rawurlencode($title);
		}
		if ($number = getGP('number','G')) {
			$wheresql .= " AND a.number='".$number."'";
			$url .= '&number='.rawurlencode($number);
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
		$num = $db->result("SELECT count(*) as num FROM ".DB_TABLEPRE."distribution a,".DB_TABLEPRE."attachment b WHERE a.uid='".$_USER->id."' AND a.dkey=1 AND a.fileid=b.id AND ISNULL(a.viewdate)");
		$sql = "SELECT b.*,a.did FROM ".DB_TABLEPRE."distribution a,".DB_TABLEPRE."attachment b WHERE a.uid='".$_USER->id."' AND a.dkey=1 AND a.fileid=b.id AND ISNULL(a.viewdate) order by a.did asc LIMIT $offset, $pagesize";
	}elseif($_GET['type']==4){
		if ($title = getGP('title','G')) {
			$wheresql .= " AND a.title LIKE '%$title%' ";
			$url .= '&title='.rawurlencode($title);
		}
		if ($number = getGP('number','G')) {
			$wheresql .= " AND a.number='".$number."'";
			$url .= '&number='.rawurlencode($number);
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
		$num = $db->result("SELECT COUNT(*) AS num FROM ".DB_TABLEPRE."attachment a,".DB_TABLEPRE."personnel b WHERE 1 $wheresql and a.id=b.fileid and b.pkey!=0 and b.type=1 and b.name like '%".get_realname($_USER->id)."%' order by b.id desc");
		$sql = "SELECT a.* FROM ".DB_TABLEPRE."attachment a,".DB_TABLEPRE."personnel b WHERE 1 $wheresql and a.id=b.fileid and b.pkey!=0 and b.type=1 and b.name like '%".get_realname($_USER->id)."%' order by b.id desc LIMIT $offset, $pagesize";
	}elseif($_GET['type']==5){
		$tmp_pkey = $db->fetch_all("SELECT perid FROM ".DB_TABLEPRE."personnel_log WHERE uid='".$_USER->id."' AND pkey<>0 and type=1");
		foreach ($tmp_pkey as $tmp_perid) {
		$tmp_perid_str.=$tmp_perid['perid'].',';
		}
		$tmp_perid_str.='0';

		$num = $db->result("SELECT count(*) as num FROM ".DB_TABLEPRE."personnel a,".DB_TABLEPRE."attachment b WHERE a.type=1 AND a.pkey<>0 AND a.name LIKE '%".get_realname($_USER->id)."%' AND a.lnstructions<>'生成收文拟办，系统自动完成该步骤' and b.id=a.fileid AND (a.appkey=2 OR a.id IN($tmp_perid_str))");
		$sql = "SELECT b.* FROM ".DB_TABLEPRE."personnel a,".DB_TABLEPRE."attachment b WHERE a.type=1 AND a.pkey<>0 AND a.name LIKE '%".get_realname($_USER->id)."%' AND a.lnstructions<>'生成收文拟办，系统自动完成该步骤' and b.id=a.fileid AND (a.appkey=2 OR a.id IN($tmp_perid_str)) ORDER BY b.id desc LIMIT $offset, $pagesize";
	}else{
		if ($title = getGP('title','G')) {
			$wheresql .= " AND title LIKE '%$title%' ";
			$url .= '&title='.rawurlencode($title);
		}
		if ($number = getGP('number','G')) {
			$wheresql .= " AND number='".$number."'";
			$url .= '&number='.rawurlencode($number);
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
			$wheresql .= " and uid='".$_USER->id."'";
		}
		if ($vuidtype!='') {
			if($vuidtype=='-1'){
				if($vuidtype=='-1'){
				$wheresql .= get_subordinate($_USER->id,'uid');
			}else{
				$wheresql .= " and uid='".$vuidtype."'";
			}
			}else{
				$wheresql .= " and uid='".$vuidtype."'";
			}
			$url .= '&vuidtype='.$vuidtype;
		}
		$num = $db->result("SELECT COUNT(*) AS num FROM ".DB_TABLEPRE."attachment WHERE 1 $wheresql  order by id desc");
		$sql = "SELECT * FROM ".DB_TABLEPRE."attachment WHERE 1 $wheresql  order by id desc LIMIT $offset, $pagesize";
	}
	$result = $db->fetch_all($sql);
	include_once('attachment/list.php');

}elseif ($do == 'mana') {
	if($_POST['view']!=''){
		$perid=getGP('perid','P');//当前审批ID
		$pkey=getGP('pkey','P');//状态
		$fileid=getGP('fileid','P');//公文ID
		if($pkey==1){
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
			$db->query("update ".DB_TABLEPRE."attachment set end_time='".getGP('end_time','P')."' WHERE id=".$fileid);
			update_db('personnel',$personnel, array('id' => $perid));
			if($appkey=='1'){
				for($i=0;$i<sizeof($staffid);$i++){
					$personnel_log = array(
						'type' => 1,
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
		$sql = "SELECT * FROM ".DB_TABLEPRE."attachment  WHERE id = '".$_GET['fileid']."'";
		$row = $db->fetch_one_array($sql);
		//获取当前流程
		$sql = "SELECT * FROM ".DB_TABLEPRE."personnel  WHERE fileid = '".$row['id']."' and type=1 and (pkey=0 or pkey=4) and apptype='".$row['category']."'  order by id desc";
		$per = $db->fetch_one_array($sql);
		include_once('attachment/mana.php');
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
		$sql = "SELECT * FROM ".DB_TABLEPRE."attachment  WHERE id = '".$_GET['fileid']."'";
		$row = $db->fetch_one_array($sql);
		include_once('attachment/reading.php');
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
			include_once('attachment/personnel_up.php');
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
					'type' => 1,
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
							'type' => 1,
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
					'type' => 1,
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
							'type' => 1,
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
		if(getGP('disnode','P')!='' && $pkey!=2){
			if(getGP('distribution','P')!='0'){
				$staff=explode(',',getGP('distribution','P'));
				$staffid=explode(',',getGP('distributionid','P'));
				for($i=0;$i<sizeof($staffid);$i++){
					$distribution = array(
						'dkey' => 1,
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
					'dkey' => 1,
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
			$content='您有一个公文需要审批，请进入公文待办进行审批!';
			$content.='<a href="admin.php?ac=attachment&do=personnel&fileurl=app';
			$content.='&fileid='.$id.'&apptype='.$apptype.'">点击审批<a/>';
			SMS_ADD_POST(getGP('staff','P'),$content,0,0,$_USER->id);
		}
		//手机短信
		if(getGP('sms_info_box_work','P')!=''){
			$content='您有一个公文需要审批,请进入OA进行审批!';
			PHONE_ADD_POST(getGP('staffphone','P'),$content,getGP('staff','P'),0,0,$_USER->id);
		}
		$content=serialize($personnel1);
		$title='审批公文收文';
		get_logadd($id,$content,$title,14,$_USER->id);
		show_msg('公文信息己成功审批！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'&type=1');
	}else{
		//获取公文信息
		$sql = "SELECT * FROM ".DB_TABLEPRE."attachment  WHERE id = '".$_GET['fileid']."'";
		$row = $db->fetch_one_array($sql);
		if($type['appkey']==1){
			//获取当前流程
			$sql = "SELECT a.*,b.flownum,b.flowkey1,b.flowkey,b.flowkey2,b.flownote,b.flowmovement FROM ".DB_TABLEPRE."personnel a,".DB_TABLEPRE."app_flow b  WHERE a.appflow=b.fid and a.fileid = '".$_GET['fileid']."' and a.type=1 and (a.pkey=0 or a.pkey=4) and a.apptype='".$_GET['apptype']."' order by a.id desc";
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
			$sql = "SELECT * FROM ".DB_TABLEPRE."personnel  WHERE name like '%".get_realname($_USER->id)."%' and fileid = '".$row['id']."' and type=1 and (pkey=0 or pkey=4) and apptype='".$row['category']."'";

			$per = $db->fetch_one_array($sql);
			if($per['appkey']=='1'){
				$perlnums = $db->result("SELECT COUNT(*) AS perlnums FROM ".DB_TABLEPRE."personnel_log where perid='".$per['id']."' and pkey=0");
			}			
			$wherestr=$perlnums<2;
		}
		include_once('attachment/personnel.php');
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
					'type' => 1,
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
							'type' => 1,
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
			$content='您有一个公文需要审批，请进入公文待办进行审批!';
			$content.='<a href="admin.php?ac=attachment&do=personnel&fileurl=app';
			$content.='&fileid='.$id.'&apptype='.$apptype.'">点击审批<a/>';
			SMS_ADD_POST(getGP('staff','P'),$content,0,0,$_USER->id);
		}
		//手机短信
		if(getGP('sms_info_box_work','P')!=''){
			$content='您有一个公文需要审批,请进入OA进行审批!';
			PHONE_ADD_POST(getGP('staffphone','P'),$content,getGP('staff','P'),0,0,$_USER->id);
		}
		$content=serialize($personnel1);
		$title='审批公文收文';
		get_logadd($id,$content,$title,14,$_USER->id);
		show_msg('公文信息己成功审批！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'&type=1');
	}
}elseif ($do == 'appflow') {
	$sql = "SELECT * FROM ".DB_TABLEPRE."personnel where fileid='".$_GET['fileid']."' and type=1 order by id asc";
	$result = $db->fetch_all($sql);
	//print_r($result);
	include_once('attachment/appflow.php');
}elseif ($do == 'attakey') {
	$db->query("update ".DB_TABLEPRE."attachment set attakey=1 where id = '".getGP('fileid','G')."'");
	$content=getGP('fileid','G');
	$title='撤消公文收文';
	get_logadd($id,$content,$title,14,$_USER->id);
	show_msg('公文信息己成功撤消！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'');

}elseif ($do == 'view') {
	$sql = "SELECT * FROM ".DB_TABLEPRE."attachment  WHERE id = '".$_GET['fileid']."'";
	$row = $db->fetch_one_array($sql);
	$sqls = "SELECT * FROM ".DB_TABLEPRE."personnel  WHERE fileid = '".$row['id']."' and type=1 and (pkey=0 or pkey=2 or pkey=4 or pkey=5) and apptype='".$row['category']."' order by id desc";
	$per = $db->fetch_one_array($sqls);
	$viewtype=$per['pkey'];
	include_once('attachment/view.php');

} elseif ($do == 'update') {
	$idarr = getGP('id','P','array');
	foreach ($idarr as $id) {
		$db->query("DELETE FROM ".DB_TABLEPRE."attachment WHERE id = '$id' ");
		$db->query("DELETE FROM ".DB_TABLEPRE."personnel WHERE type=1 and fileid = '$id' ");
		$sql = "SELECT id FROM ".DB_TABLEPRE."personnel WHERE type=1 and fileid = '".$id."'";
		$row = $db->fetch_one_array($sql);
		$db->query("DELETE FROM ".DB_TABLEPRE."personnel_log WHERE perid = '".$row['id']."' ");
		$db->query("DELETE FROM ".DB_TABLEPRE."distribution WHERE dkey=1 and fileid = '$id' ");	
	}
	$content=getGP('fileid','G');
	$title='删除公文';
	get_logadd($id,$content,$title,14,$_USER->id);
	show_msg('公文信息删除成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'');

}elseif ($do == 'add') {
	if($apptype!=''){
		if($_POST['view']!=''){
			$number = getGP('number','P');
			$shares = getGP('shares','P');
			$annexurl = getGP('annexurl','P');
			$annex = getGP('annex','P');
			$organ = getGP('organ','P');
			$fontsize = getGP('fontsize','P');
			$title = getGP('title','P');
			$receiptdate = getGP('receiptdate','P');
			$uid=$_USER->id;
			$attype=getGP('attype','P');
			$attachment = array(
				'number' => $number,
				'shares' => $shares,
				'annexurl' => $annexurl,
				'annex' => $annex,
				'organ' => $organ,
				'fontsize' => $fontsize,
				'title' => $title,
				'category' => $apptype,
				'receiptdate' => $receiptdate,
				'end_time' => $_POST['end_time'],
				'attakey' =>0,
				'uid' => $uid,
				'type' => $attype  //写入紧急程度
			);
			if($_POST['save_type']=='1'){
				//写入主表信息
				insert_db('attachment',$attachment);
				$id=$db->insert_id();
				if(getGP('sms_info_box_work','P')!=''){
					//$content='您有一个公文需要审批，请进入公文待办进行审批!';
					$content='您有一个公文需要审批，请进入公文待办进行审批!';
					$content.='<a href="admin.php?ac=attachment&do=personnel&fileurl=app';
					$content.='&fileid='.$id.'&apptype='.$apptype.'">点击审批<a/>';
					//接收人；内容；类型（1：有返回回值;0：无返回值）;URL
					SMS_ADD_POST(getGP('staff','P'),$content,0,0,$_USER->id);
				}
				//手机短信
				if(getGP('sms_info_box_work','P')!=''){
					$content='您有一个公文需要审批,请进入OA进行审批!';
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
						'type' => 1,
						'name' => get_realname($_USER->id),
						'uid' =>$_USER->id,
						'pkey' =>1,
						'approvaldate' =>get_date('Y-m-d H:i:s',PHP_TIME),
						'lnstructions' =>'生成收文拟办，系统自动完成该步骤',
						'apptype' =>$apptype,
						'appflow' => $flow['fid'],
						'appkey' => 1,
						'appkey1' => 1,
						'fileid' => $id
					);
					insert_db('personnel',$personnel1);
					$personnel2 = array(
						'type' => 1,
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
								'type' => 1,
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
						'type' => 1,
						'name' => get_realname($_USER->id),
						'uid' =>$_USER->id,
						'pkey' =>1,
						'approvaldate' =>get_date('Y-m-d H:i:s',PHP_TIME),
						'lnstructions' =>'生成收文拟办，系统自动完成该步骤',
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
						'type' => 1,
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
								'type' => 1,
								'name' => $staff[$i],
								'uid' =>$staffid[$i],
								'pkey' =>0,
								'perid' =>$pid
							);
							insert_db('personnel_log',$personnel_log);
						}
					}
				}
				show_msg('公文收文信息提交成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl);
			}elseif($_POST['save_type']=='2'){
				//写入主表信息到草稿箱
				insert_db('attachment_draft',$attachment);
				show_msg('公文收文信已存草稿！', 'admin.php?ac='.$ac.'&do=add&apptype='.$apptype.'&do=draft&apptype='.$apptype.'&fileurl='.$fileurl);
//http://localhost:8082/admin.php?ac=approval&do=draft&apptype=13
				
			}elseif($_POST['save_type']=='3'){
				show_msg('公文收文信息提交成功！', 'admin.php?ac='.$ac.'&do=add&apptype='.$apptype.'&fileurl='.$fileurl);
			}
		}else{
			if($type['appkey']=='1'){
				//固定流程
				$sql = "SELECT * FROM ".DB_TABLEPRE."app_flow  WHERE apptype = '".$apptype."' and flownum>1 order by fid asc";
				$flow = $db->fetch_one_array($sql);
			}else{
			}
			include_once('attachment/add.php');
		}
	}else{
		$sql = "SELECT name,id FROM ".DB_TABLEPRE."app_type  WHERE type = '2'";
		$result = $db->fetch_all($sql);
		include_once('attachment/typelist.php');
	}
}elseif ($do == 'excel') {
	$datename="app_".get_date('YmdHis',PHP_TIME);
	$outputFileName = 'data/excel/'.$datename.'.xls';
		$content = array();
		$archive=array("来文编号","份数","来文机关","来文字号","来文标题","承办结果","签收人","收文日期");
		$content[] = $archive;
		$wheresql = '';
		if ($title = getGP('title','P')) {
			$wheresql .= " AND a.title LIKE '%$title%' ";
		}
		if ($organ = getGP('organ','P')) {
			$wheresql .= " AND a.organ LIKE '%$organ%' ";
		}
		if ($fontsize = getGP('fontsize','P')) {
			$wheresql .= " AND a.fontsize LIKE '%$fontsize%' ";
		}
		if ($category = getGP('category','P')) {
			$wheresql .= " AND a.category='".$category."'";
		}
		if ($number = getGP('number','P')) {
			$wheresql .= " AND a.number='".$number."'";
		}
		$vuidtype = getGP('vuidtype','P');
		//权限
		$vuidtype = getGP('vuidtype','P');
		if(!is_superadmin() && $vuidtype==''){
			$wheresql .= " and a.uid='".$_USER->id."'";
		}
		if ($vuidtype!='') {
			if($vuidtype=='-1'){
				$wheresql .= get_subordinate($_USER->id,'a.uid');
			}else{
				$wheresql .= " and a.uid='".$vuidtype."'";
			}
		}
		$sql = "SELECT a.* FROM ".DB_TABLEPRE."attachment a WHERE 1 $wheresql  ORDER BY a.id desc";
		$result = $db->query($sql);
		while ($row = $db->fetch_array($result)) {	
			$archive = array(
				"".$row['number']."",
				"".$row['shares']."",
				"".$row['organ']."",
				"".$row['fontsize']."",
				"".$row['title']."",
				"".$row['result']."",
				"".get_realname($row['uid'])."",
				"".str_replace("-",".",$row[receiptdate]).""
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
		$result=$db->fetch_one_array("select * from toa_attachment_draft where id=$_GET[id]");
		//print_r($result);
		include_once('app/attachment/oldadd.php');
	}else{//显示草稿列表
		$myid=$_USER->id;//登陆人ID
		$apptype=$_GET[apptype];//得到类型(需用印、不用印)
		$sql="select id,title,receiptdate,category from toa_attachment_draft where uid=$myid and category=$apptype order by id desc";
		$result = $db->fetch_all($sql);
		include_once('app/attachment/draft.php');
	}
}
elseif($do=='draft_delect'){
	$db->query("DELETE FROM ".DB_TABLEPRE."attachment_draft WHERE id = $_GET[id]");
	//删除草稿后查询剩余草稿记录并显示草稿列表
	$myid=$_USER->id;//登陆人ID
	$apptype=$_GET[apptype];//得到类型(需用印、不用印)
	$sql="select id,title,receiptdate,category from toa_attachment_draft where uid=$myid and category=$apptype order by id desc";
	$result = $db->fetch_all($sql);
	include_once('app/attachment/draft.php');
}

?>