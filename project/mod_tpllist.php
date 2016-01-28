<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');
get_key("project_");
$typeid=$_GET['typeid'];
$projectid=$_GET['projectid'];
$modid=$_GET['modid'];
$tplid=$_GET['tplid'];
pro_mana_view($typeid,$_USER->id);
$sql = "SELECT * FROM ".DB_TABLEPRE."project_model  WHERE mid = '".$modid."'";
$mod = $db->fetch_one_array($sql);
//创建权限
global $db;
$manat = $db->fetch_one_array("SELECT tid FROM ".DB_TABLEPRE."project_type where (keyuser like '%".get_realname($_USER->id)."%' or keyuser='' or manauser like '%".get_realname($_USER->id)."%') and tid=".$typeid);
if(!is_superadmin() && $manat['tid']==''){
	$sql = "SELECT mid FROM ".DB_TABLEPRE."project_model  WHERE mid = '".$modid."' and (keyuser like '%".get_realname($_USER->id)."%' or keyuser='' or manauser like '%".get_realname($_USER->id)."%')";
	$mana = $db->fetch_one_array($sql);
	if($mana['mid']==''){
		show_msg('对不起，您没有使用的权限，不可用！', 'home.php?mid=8');
	}
}
empty($do) && $do = 'list';
if ($do == 'list') {
	//列表信息 
	$wheresqltype = '';
	$wheresql = '';
	$page = max(1, getGP('page','G','int'));
	$pagesize = $_CONFIG->config_data('pagenum');
	$offset = ($page - 1) * $pagesize;
	$url = 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'&type='.$_GET['type'];
		if ($title = getGP('title','G')) {
			$wheresqltype .= " AND a.title LIKE '%$title%' ";
			$url .= '&title='.rawurlencode($title);
		}
		if ($number = getGP('number','G')) {
			$wheresqltype .= " AND a.number='".$number."'";
			$url .= '&number='.rawurlencode($number);
		}
		if ($typeid !='') {
			$wheresqltype .= " AND a.typeid='".$typeid."'";
			$url .= '&typeid='.rawurlencode($typeid);
		}
		if ($tplid !='') {
			$wheresqltype .= " AND a.tplid='".$tplid."'";
			$url .= '&tplid='.rawurlencode($tplid);
		}
		if ($projectid!='') {
			$wheresqltype .= " AND a.projectid='".$projectid."'";
			$url .= '&projectid='.rawurlencode($projectid);
		}
		if ($modid!='') {
			$wheresqltype .= " AND a.modid='".$modid."'";
			$url .= '&modid='.rawurlencode($modid);
		}
		$vstartdate = getGP('vstartdate','G');
		$venddate = getGP('venddate','G');
		if ($vstartdate!='' && $venddate!='') {
			$wheresqltype .= " AND (a.date>='".$vstartdate."' and a.date<='".$venddate."')";
			$url .= '&vstartdate='.$vstartdate.'&venddate='.$venddate;
		}
	if($_GET['type']==1){
		$num = $db->result("SELECT COUNT(*) AS num FROM ".DB_TABLEPRE."project_log a,".DB_TABLEPRE."project_personnel b WHERE 1 $wheresqltype and  a.lid=b.projectid and (b.pertype=0 or b.pertype=4) and b.name like '%".get_realname($_USER->id)."%' and a.type!=1 and b.appkey2=3 order by b.perid asc");
		$sql = "SELECT a.* FROM ".DB_TABLEPRE."project_log a,".DB_TABLEPRE."project_personnel b WHERE 1 $wheresqltype and  a.lid=b.projectid and (b.pertype=0 or b.pertype=4) and b.name like '%".get_realname($_USER->id)."%' and a.type!=1 and b.appkey2=3 order by b.perid asc LIMIT $offset, $pagesize";
	}elseif($_GET['type']==3){
		$num = $db->result("SELECT COUNT(*) AS num FROM ".DB_TABLEPRE."project_log a,".DB_TABLEPRE."project_model b WHERE 1 ".$wheresqltype." and a.modid=b.mid and b.manauser like '%".get_realname($_USER->id)."%' order by a.lid desc");
		$sql = "SELECT a.* FROM ".DB_TABLEPRE."project_log a,".DB_TABLEPRE."project_model b WHERE 1 ".$wheresqltype." and a.modid=b.mid and b.manauser like '%".get_realname($_USER->id)."%' order by a.lid desc LIMIT $offset, $pagesize";
	}else{
		if ($title = getGP('title','G')) {
			$wheresql .= " AND title LIKE '%$title%' ";
			$url .= '&title='.rawurlencode($title);
		}
		if ($number = getGP('number','G')) {
			$wheresql .= " AND number='".$number."'";
			$url .= '&number='.rawurlencode($number);
		}
		if ($typeid !='') {
			$wheresql .= " AND typeid='".$typeid."'";
			$url .= '&typeid='.rawurlencode($typeid);
		}
		if ($tplid !='') {
			$wheresql .= " AND tplid='".$tplid."'";
			$url .= '&tplid='.rawurlencode($tplid);
		}
		if ($projectid !='') {
			$wheresql .= " AND projectid='".$projectid."'";
			$url .= '&projectid='.rawurlencode($projectid);
		}
		if ($modid !='') {
			$wheresql .= " AND modid='".$modid."'";
			$url .= '&modid='.rawurlencode($modid);
		}
		$vstartdate = getGP('vstartdate','G');
		$venddate = getGP('venddate','G');
		if ($vstartdate!='' && $venddate!='') {
			$wheresql .= " AND (date>='".$vstartdate."' and date<='".$venddate."')";
			$url .= '&vstartdate='.$vstartdate.'&venddate='.$venddate;
		}
		$num = $db->result("SELECT COUNT(*) AS num FROM ".DB_TABLEPRE."project_log WHERE 1 $wheresql  order by lid desc");
		$sql = "SELECT * FROM ".DB_TABLEPRE."project_log WHERE 1 $wheresql  order by lid desc LIMIT $offset, $pagesize";
	}
	$result = $db->fetch_all($sql);
	include_once('tpllist/list.php');

}elseif ($do == 'personnel') {
	if($_POST['view']!=''){
		$perid=getGP('perid','P');//当前审批ID
		$content=getGP('content','P');//批示
		$pkey=getGP('pkey','P');//状态
		$lid=getGP('lid','P');//流程ID
		$oldappkey=getGP('oldappkey','P');//状态
		$oldappkey1=getGP('oldappkey1','P');//状态
		//if($type['appkey']==1){
			$sql = "SELECT * FROM ".DB_TABLEPRE."project_flow  WHERE fid = '".getGP('oldappflow','P')."'";
			$flow = $db->fetch_one_array($sql);
			$perlnum = $db->result("SELECT COUNT(*) AS perlnum FROM ".DB_TABLEPRE."project_personnel_log where perid='".$perid."' and pertype=0");
			if($oldappkey==1){
				if($oldappkey1==1 && $perlnum>1 && $pkey!=2){
					$pkeys=4;
				}elseif($flow['flowkey']==2){
					$pkeys=5;
				}else{
					$pkeys=$pkey;
				}
			}else{
				$pkeys=$pkey;
				if($flow['flowkey']==2 && $pkey!=2){
					$pkeys=5;
				}
			}
			$personnel1 = array(
				'pertype' =>$pkeys,
				'approvaldate' =>get_date('Y-m-d H:i:s',PHP_TIME),
				'lnstructions' =>$content
				);
			update_db('project_personnel',$personnel1, array('perid' => $perid));
			if($oldappkey==1){
				$per_log = array(
					'pertype' =>$pkey,
					'approvaldate' =>get_date('Y-m-d H:i:s',PHP_TIME),
					'lnstructions' =>$content
					);
				update_db('project_personnel_log',$per_log, array('perid' => $perid,'uid' => $_USER->id));
				if($pkey==2){
					$personnel1 = array(
					'pertype' =>$pkey,
					'approvaldate' =>get_date('Y-m-d H:i:s',PHP_TIME),
					'lnstructions' =>$content
					);
					update_db('project_personnel',$personnel1, array('perid' => $perid));
				}
			}
			//创建下一步审批人员
			if(getGP('staffid','P')!='' && $pkeys!=2){
				$personnel2 = array(
					'name' => getGP('staff','P'),
					'uid' =>getGP('staffid','P'),
					'pertype' =>0,
					'projectid' =>$lid,
					'flowid' => getGP('flowid','P'),
					'appkey' => getGP('appkey','P'),
					'appkey1' => getGP('appkey1','P'),
					'typeid' => getGP('typeid','P'),
					'appkey2' => 3
					);
				insert_db('project_personnel',$personnel2);
				$pid=$db->insert_id();
				if(getGP('appkey','P')=='1'){
					$staff=explode(',',getGP('staff','P'));
					$staffid=explode(',',getGP('staffid','P'));
					for($i=0;$i<sizeof($staffid);$i++){
						$personnel_log = array(
							'name' => $staff[$i],
							'uid' =>$staffid[$i],
							'pertype' =>0,
							'perid' =>$pid,
							'projectid' =>$lid,
							'typeid' =>getGP('typeid','P'),
							'appkey2' => 3
							);
						insert_db('project_personnel_log',$personnel_log);
					}
				}
			}
		//写入表单信息
		$sql = "SELECT typeid,projectid FROM ".DB_TABLEPRE."project_log  WHERE lid = '".$lid."'";
		$work = $db->fetch_one_array($sql);
		if(getGP('flowfrom','P')=='1'){//fromflowid
			global $db;
			$query = $db->query("SELECT * FROM ".DB_TABLEPRE."project_from where typeid='".$work['typeid']."' and tplid='".getGP('fromflowid','P')."' and formtype=4 and inputtype!='6' ORDER BY fromid Asc");
			while ($row = $db->fetch_array($query)) {
				if($row['inputtype1']=='4'){
					$inputvalues='';
					$inputvalue=getGP(''.$row["inputname"].'','P','array');
					foreach ($inputvalue as $arrsave) {
						$inputvalues.=$arrsave.',';
					}
					$inputvalue=substr($inputvalues, 0, -1);
				}else{
					$inputvalue=trim(getGP(''.$row["inputname"].'','P'));
				}
				$project_db = array(
						'inputname' => $row["inputname"],
						'content' => $inputvalue,
						'projectid' => $lid,
						'tplid' => getGP('fromflowid','P'),
						'fromid' => $row["fromid"],
						'typeid' => $work['typeid'],
						'modid' => $modid,
						'type' => 4
					);
				insert_db('project_db',$project_db);
			
			}
			//写入数组
			global $db;
			$query = $db->query("SELECT * FROM ".DB_TABLEPRE."project_from where typeid='".$work['typeid']."' and tplid='".getGP('fromflowid','P')."' and formtype=4 and inputtype='6'   ORDER BY fromid Asc");
			while ($row = $db->fetch_array($query)) {
					$inputvalue=getGP(''.$row["inputname"].'','P','array');
					$project_db = array(
					'inputname' => $row["inputname"],
					'content' => serialize($inputvalue),
					'projectid' => $lid,
					'tplid' => getGP('fromflowid','P'),
					'fromid' => $row["fromid"],
					'typeid' => $work['typeid'],
					'modid' => $modid,
					'type' => 4
				);
				insert_db('project_db',$project_db);
			}
		}
		//通知审批人员
		if(getGP('sms_info_box_shownamemaster','P')!=''){
			//$content1='您有一个项目'.$mod['modname'].'需要审批,请进入项目'.$mod['modname'].'进行审批!';
			$content1='您有一个新"'.$mod['modname'].'"需要审批,请点击查看!<a href="admin.php?ac=tpllist&fileurl='.$fileurl.'&type=1&modid='.$modid.'&projectid='.$work['projectid'].'&typeid='.$typeid.'&tplid='.$tplid.'">点击审批>></a>';
			SMS_ADD_POST(getGP('staff','P'),$content1,0,0,$_USER->id);
		}
		//手机短信
		if(getGP('sms_phone_box_shownamemaster','P')!=''){
			$content2='您有一个项目'.$mod['modname'].'需要审批,请登录OA进行审批!';
			PHONE_ADD_POST(getGP('staffphone','P'),$content2,getGP('staff','P'),0,0,$_USER->id);
		}
		//通知其它人员
		if(getGP('viewuser','P')!='0'){
			$content3='您接收到一条来自项目'.$mod['modname'].'的通知,请进入项目'.$mod['modname'].'进行查看!';
			SMS_ADD_POST(getGP('viewuser','P'),$content3,0,0,$_USER->id);
		}
		//手机短信
		if(getGP('sms_phone_box_shownamemaster','P')!=''){
			$content4='您有一个项目'.$mod['modname'].'需要审批,请登录OA进行审批!';
			PHONE_ADD_POST(getGP('viewuserphone','P'),$content4,getGP('viewuser','P'),0,0,$_USER->id);
		}
		$content=serialize($personnel1);
		$title='审批项目'.$mod['modname'];
		get_logadd($id,$content,$title,32,$_USER->id);
		show_msg('项目'.$mod['modname'].'己成功审批！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'&modid='.$modid.'&projectid='.$projectid.'&typeid='.$typeid.'&tplid='.$tplid.'&type=1');
	}else{
		//获取项目信息
		$sql = "SELECT * FROM ".DB_TABLEPRE."project_log  WHERE lid = '".$_GET['lid']."'";
		$row = $db->fetch_one_array($sql);
			//获取当前流程
			$sql = "SELECT a.*,b.flowname,b.flownum,b.flowuser,b.flowkey,b.flowkey1,b.flowkey2,b.flowkey3 FROM ".DB_TABLEPRE."project_personnel a,".DB_TABLEPRE."project_flow b  WHERE a.flowid=b.fid and a.projectid = '".$_GET['lid']."' and a.appkey2=3 and (a.pertype=0 or a.pertype=4) order by a.perid desc";
			$per = $db->fetch_one_array($sql);
			if($per['flowkey']!='2'){
				//获取下一步流程
				$sql = "SELECT * FROM ".DB_TABLEPRE."project_flow  WHERE flownum >'".$per['flownum']."' and tplid='".$tplid."' and flowkey4=3 order by flownum asc";
				$flow = $db->fetch_one_array($sql);
			}
			$perlnums = $db->result("SELECT COUNT(*) AS perlnums FROM ".DB_TABLEPRE."project_personnel_log where perid='".$per['perid']."' and pertype=0");
			if($per['appkey']==1 && $per['appkey1']==1){
				$wherestr=$perlnums<2 && $per['flowkey']!=2;
			}else{
				$wherestr=$per['flowkey']!=2;
			}
		include_once('tpllist/personnel.php');
	}
}elseif ($do == 'flow') {
	$sql = "SELECT * FROM ".DB_TABLEPRE."project_personnel where projectid='".$_GET['lid']."' and appkey2=3 order by perid asc";
	$result = $db->fetch_all($sql);
	include_once('tpllist/flow.php');
}elseif ($do == 'workkey') {
	$db->query("update ".DB_TABLEPRE."project_log set type=1 where lid = '".getGP('lid','G')."'");
	$content=getGP('projectid','G');
	$title='撤消项目'.$mod['modname'];
	get_logadd($id,$content,$title,32,$_USER->id);
	show_msg('项目己成功撤消！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'&modid='.$modid.'&projectid='.$projectid.'&typeid='.$typeid.'&tplid='.$tplid.'');

}elseif ($do == 'view') {
	if($_POST['view']=='edit'){
		$info[bbsid]= getGP('lid','G');
		$info[title] = getGP('title','P');
		$info[author] = get_realname($_USER->id);
		$info[content] = getGP('content','P');
		$info[uid] = $_USER->id;
		$info[enddate] = get_date('Y-m-d H:i:s',PHP_TIME);
		$info[type] =10;
		insert_db('bbs_log',$info);
		$id=$db->insert_id();
		$content=serialize($info);
		$title='回复'.$mod['modname'].'的信息';
		get_logadd($id,$content,$title,32,$_USER->id);
		show_msg('信息回复成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'&type='.$_GET['type'].'&modid='.$modid.'&projectid='.$projectid.'&do=view&typeid='.$typeid.'&tplid='.$tplid.'&lid='.$_GET['lid']);
	}else{
		$sql = "SELECT * FROM ".DB_TABLEPRE."project_log  WHERE lid = '".$_GET['lid']."'";
		$row = $db->fetch_one_array($sql);
		$tpl = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."project_template where tplid=".$tplid."");
		if($tpl['tplkey']==3){
			include_once('tpl/'.$tplid.'_'.str_replace('.php','_view.php',$tpl['tpladdr']));
		}else{
			if($_GET['down']!=''){
				if(file_exists("project/tpl/".$typeid."_".$modid."_".$tplid.".php")!=''){
					include_once("project/tpl/".$typeid."_".$modid."_".$tplid.".php");
				}else{
					include_once('tpllist/view_excel.php');
				}
				header('Location: down.php?urls=data/excel/project/l_'.$row['lid'].'.xls');
			}
			include_once('tpllist/view.php');
		}
	}
}elseif ($do == 'update') {
	$idarr = getGP('id','P','array');
	foreach ($idarr as $id) {
		$db->query("DELETE FROM ".DB_TABLEPRE."project_log WHERE lid = '$id' ");
		$db->query("DELETE FROM ".DB_TABLEPRE."project_personnel where projectid = '$id' and appkey2=3");
		$db->query("DELETE FROM ".DB_TABLEPRE."project_personnel_log WHERE projectid = '".$id."' and appkey2=3");
		$db->query("DELETE FROM ".DB_TABLEPRE."project_db WHERE projectid = '$id' and type=3");
		$db->query("DELETE FROM ".DB_TABLEPRE."fileoffice WHERE officetype=6 and fileid=0 and officeid = '$id' ");	
	}
	$content=serialize($idarr);
	$title='删除项目'.$mod['modname'];
	get_logadd($id,$content,$title,32,$_USER->id);
	show_msg('项目删除成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'&type='.$_GET['type'].'&modid='.$modid.'&projectid='.$projectid.'&typeid='.$typeid.'&tplid='.$tplid.'');

}elseif ($do == 'excel') {
	$datename="project_log_".get_date('YmdHis',PHP_TIME);
	$outputFileName = 'data/excel/'.$datename.'.xls';
		$wheresql = '';
		if ($title = getGP('title','P')) {
			$wheresql .= " AND title LIKE '%$title%' ";
		}
		if ($number = getGP('number','P')) {
			$wheresql .= " AND number='".$number."'";
		}
		if ($typeid = getGP('typeid','P')) {
			$wheresql .= " AND typeid='".$typeid."'";
		}
		if ($modid = getGP('modid','P')) {
			$wheresql .= " AND modid='".$modid."'";
		}
		if ($projectid = getGP('projectid','P')) {
			$wheresql .= " AND projectid='".$projectid."'";
		}
		if ($tplid = getGP('tplid','P')) {
			$wheresql .= " AND tplid='".$tplid."'";
		}
		$vstartdate = getGP('vstartdate','P');
		$venddate = getGP('venddate','P');
		if ($vstartdate!='' && $venddate!='') {
			$wheresql .= " AND (date>='".$vstartdate."' and date<='".$venddate."')";
		}
		//获取表单
			$archive = array();
			$inputname = array();
			$sql="SELECT * FROM ".DB_TABLEPRE."project_from where typeid='".$typeid."' and formtype='3' and tplid='".$tplid."' and inputtype!=6 ORDER BY fromid Asc";
			$query = $db->query($sql);
			$archive[]="<b>流水单号</b>";
			$archive[]="<b>".$mod['modname']."名称</b>";
			$num=0;
			while ($row = $db->fetch_array($query)) {
				$num++;
				$archive[]="<b>".$row['fromname']."</b>";
				$inputname[]=$row['inputname'];
			}
			$archive[]="<b>发布时间</b>";
			$archive[]="<b>发布人</b>";
			$content = array();
			$content[] = $archive;
			$sql = "SELECT * FROM ".DB_TABLEPRE."project_log WHERE 1 $wheresql  ORDER BY lid desc";
			$result = $db->query($sql);
			while ($row = $db->fetch_array($result)) {	
				$archive = array();
				$archive[]=$row['number'];
				$archive[]=$row['title'];
				for($i=0;$i<$num;$i++){
					$blog = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."project_db  WHERE projectid = '".$row['lid']."' and inputname='".$inputname[$i]."' and type=3 ");
					$archive[]=str_replace("-",".",$blog['content']);
				}
				$archive[]=str_replace("-",".",$row['date']);
				$archive[]=get_realname($row['uid']);
				$content[] = $archive;
			}
	$excel = new ExcelWriter($outputFileName);
	if($excel==false) 
		echo $excel->error; 
	foreach($content as $v){
		$excel->writeLine($v);
	}
	$excel->sendfile($outputFileName);
}
?>