<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');
get_key("project_");
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
		if ($typeid = getGP('typeid','G')) {
			$wheresqltype .= " AND a.typeid='".$typeid."'";
			$url .= '&typeid='.rawurlencode($typeid);
		}
		$vstartdate = getGP('vstartdate','G');
		$venddate = getGP('venddate','G');
		if ($vstartdate!='' && $venddate!='') {
			$wheresqltype .= " AND (a.date>='".$vstartdate."' and a.date<='".$venddate."')";
			$url .= '&vstartdate='.$vstartdate.'&venddate='.$venddate;
		}
	if($_GET['type']==1){
		$num = $db->result("SELECT COUNT(*) AS num FROM ".DB_TABLEPRE."project a,".DB_TABLEPRE."project_personnel b WHERE 1 $wheresqltype and  a.id=b.projectid and (b.pertype=0 or b.pertype=4) and b.name like '%".get_realname($_USER->id)."%' and a.type!=1 and b.appkey2=1 order by b.perid asc");
		$sql = "SELECT a.* FROM ".DB_TABLEPRE."project a,".DB_TABLEPRE."project_personnel b WHERE 1 $wheresqltype and  a.id=b.projectid and (b.pertype=0 or b.pertype=4) and b.name like '%".get_realname($_USER->id)."%' and a.type!=1 and b.appkey2=1 order by b.perid asc LIMIT $offset, $pagesize";
	}elseif($_GET['type']==3){
		$num = $db->result("SELECT COUNT(*) AS num FROM ".DB_TABLEPRE."project a,".DB_TABLEPRE."project_type b WHERE 1 ".$wheresqltype." and a.typeid=b.tid and b.manauser like '%".get_realname($_USER->id)."%' order by a.id desc");
		$sql = "SELECT a.* FROM ".DB_TABLEPRE."project a,".DB_TABLEPRE."project_type b WHERE 1 ".$wheresqltype." and a.typeid=b.tid and b.manauser like '%".get_realname($_USER->id)."%' order by a.id desc LIMIT $offset, $pagesize";
	}else{
		if ($title = getGP('title','G')) {
			$wheresql .= " AND title LIKE '%$title%' ";
			$url .= '&title='.rawurlencode($title);
		}
		if ($number = getGP('number','G')) {
			$wheresql .= " AND number='".$number."'";
			$url .= '&number='.rawurlencode($number);
		}
		if ($typeid = getGP('typeid','G')) {
			$wheresql .= " AND typeid='".$typeid."'";
			$url .= '&typeid='.rawurlencode($typeid);
		}
		$vstartdate = getGP('vstartdate','G');
		$venddate = getGP('venddate','G');
		if ($vstartdate!='' && $venddate!='') {
			$wheresql .= " AND (date>='".$vstartdate."' and date<='".$venddate."')";
			$url .= '&vstartdate='.$vstartdate.'&venddate='.$venddate;
		}
		//权限
		$vuidtype = getGP('vuidtype','G');
		if(!is_superadmin() && $vuidtype==''){
			$wheresql .= " and uid='".$_USER->id."'";
		}
		if ($vuidtype!='') {
			if($vuidtype=='-1'){
				$wheresql .= get_subordinate($_USER->id,'uid');
			}else{
				$wheresql .= " and uid='".$vuidtype."'";
			}
			$url .= '&vuidtype='.$vuidtype;
		}
		
		$num = $db->result("SELECT COUNT(*) AS num FROM ".DB_TABLEPRE."project WHERE 1 $wheresql  order by id desc");
		$sql = "SELECT * FROM ".DB_TABLEPRE."project WHERE 1 $wheresql  order by id desc LIMIT $offset, $pagesize";
	}
	$result = $db->fetch_all($sql);
	include_once('template/list.php');

}elseif ($do == 'personnel') {
	if($_POST['view']!=''){
		$perid=getGP('perid','P');//当前审批ID
		$content=getGP('content','P');//批示
		$pkey=getGP('pkey','P');//状态
		$projectid=getGP('projectid','P');//流程ID
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
					'projectid' =>$projectid,
					'flowid' => getGP('flowid','P'),
					'appkey' => getGP('appkey','P'),
					'appkey1' => getGP('appkey1','P'),
					'typeid' => getGP('typeid','P'),
					'appkey2' => 1
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
							'projectid' =>$projectid,
							'typeid' =>getGP('typeid','P'),
							'appkey2' => 1
							);
						insert_db('project_personnel_log',$personnel_log);
					}
				}
			}
		//写入表单信息
		if(getGP('flowfrom','P')=='1'){//fromflowid
			$sql = "SELECT typeid FROM ".DB_TABLEPRE."project  WHERE id = '".$projectid."'";
			$work = $db->fetch_one_array($sql);
			global $db;
			$query = $db->query("SELECT * FROM ".DB_TABLEPRE."project_from where typeid='".$work['typeid']."' and tplid='".getGP('fromflowid','P')."' and formtype=4 and inputtype!='6'   ORDER BY fromid Asc");
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
						'projectid' => $projectid,
						'tplid' => getGP('fromflowid','P'),
						'fromid' => $row["fromid"],
						'typeid' => $work['typeid'],
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
					'projectid' => $projectid,
					'tplid' => getGP('fromflowid','P'),
					'fromid' => $row["fromid"],
					'typeid' => $work['typeid'],
					'type' => 4
				);
				insert_db('project_db',$project_db);
			}
		}
		//通知审批人员
		if(getGP('sms_info_box_shownamemaster','P')!=''){
			$content1='您有一个项目需要审批,请点击进入项目进行审批!';
			SMS_ADD_POST(getGP('staff','P'),$content1,0,0,$_USER->id);
		}
		//手机短信
		if(getGP('sms_phone_box_shownamemaster','P')!=''){
			$content2='您有一个项目需要审批,请登录OA进行审批!';
			PHONE_ADD_POST(getGP('staffphone','P'),$content2,getGP('staff','P'),0,0,$_USER->id);
		}
		//通知其它人员
		if(getGP('viewuser','P')!=''){
			$content3='您接收到一条来自项目的通知,请点击“<a href="admin.php?ac=list&do=view&fileurl=project&projectid='.$projectid.'">查看</a>”项目!';
			SMS_ADD_POST(getGP('viewuser','P'),$content3,0,0,$_USER->id);
		}
		//手机短信
		if(getGP('sms_phone_box_shownamemaster','P')!=''){
			$content4='您有一个项目需要审批,请登录OA进行审批!';
			PHONE_ADD_POST(getGP('viewuserphone','P'),$content4,getGP('viewuser','P'),0,0,$_USER->id);
		}
		$content=serialize($personnel1);
		$title='审批项目';
		get_logadd($id,$content,$title,32,$_USER->id);
		show_msg('项目己成功审批！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'&type=1');
	}else{
		//获取项目信息
		$sql = "SELECT * FROM ".DB_TABLEPRE."project  WHERE id = '".$_GET['projectid']."'";
		$row = $db->fetch_one_array($sql);
		//pro_mana_view($row['typeid'],$_USER->id);
			//获取当前流程
			$sql = "SELECT a.*,b.flowname,b.flownum,b.flowuser,b.flowkey,b.flowkey1,b.flowkey2,b.flowkey3 FROM ".DB_TABLEPRE."project_personnel a,".DB_TABLEPRE."project_flow b  WHERE a.flowid=b.fid and a.projectid = '".$_GET['projectid']."' and a.appkey2=1 and (a.pertype=0 or a.pertype=4) order by a.perid desc";
			$per = $db->fetch_one_array($sql);
			if($per['flowkey']!='2'){
				//获取下一步流程
				$sql = "SELECT * FROM ".DB_TABLEPRE."project_flow  WHERE flownum >'".$per['flownum']."' and tplid='".$row['typeid']."' and flowkey4=1 order by flownum asc";
				$flow = $db->fetch_one_array($sql);
			}
			$perlnums = $db->result("SELECT COUNT(*) AS perlnums FROM ".DB_TABLEPRE."project_personnel_log where perid='".$per['perid']."' and pertype=0");
			if($per['appkey']==1 && $per['appkey1']==1){
				$wherestr=$perlnums<2 && $per['flowkey']!=2;
			}else{
				$wherestr=$per['flowkey']!=2;
			}
		include_once('template/personnel.php');
	}
}elseif ($do == 'flow') {
	$sql = "SELECT * FROM ".DB_TABLEPRE."project_personnel where projectid='".$_GET['projectid']."' and appkey2=1 order by perid asc";
	$result = $db->fetch_all($sql);
	include_once('template/flow.php');
}elseif ($do == 'workkey') {
	$db->query("update ".DB_TABLEPRE."project set type=1 where id = '".getGP('projectid','G')."'");
	$content=getGP('projectid','G');
	$title='撤消项目';
	get_logadd($id,$content,$title,32,$_USER->id);
	show_msg('项目己成功撤消！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'');

}elseif ($do == 'view') {
	$sql = "SELECT * FROM ".DB_TABLEPRE."project  WHERE id = '".$_GET['projectid']."'";
	$row = $db->fetch_one_array($sql);
	pro_mana_view($row['typeid'],$_USER->id);
	if($_GET['down']!=''){
		if(file_exists("project/tpl/type_".$row['typeid'].".php")!=''){
			include_once("project/tpl/type_".$row['typeid'].".php");
		}else{
			include_once('template/view_excel.php');
		}
		header('Location: down.php?urls=data/excel/project/p_'.$row['id'].'.xls');
	}
	include_once('template/view.php');
}elseif ($do == 'update') {
	$idarr = getGP('id','P','array');
	foreach ($idarr as $id) {
		$db->query("DELETE FROM ".DB_TABLEPRE."project WHERE id = '$id' ");
		$db->query("DELETE FROM ".DB_TABLEPRE."project_log WHERE projectid = '$id' ");
		$db->query("DELETE FROM ".DB_TABLEPRE."project_personnel where projectid = '$id' ");
		$db->query("DELETE FROM ".DB_TABLEPRE."project_personnel_log WHERE projectid = '".$id."' ");
		$db->query("DELETE FROM ".DB_TABLEPRE."project_db WHERE projectid = '$id' ");
		$db->query("DELETE FROM ".DB_TABLEPRE."fileoffice WHERE officetype=5 and fileid=0 and officeid = '$id' ");	
	}
	$content=serialize($idarr);
	$title='删除项目';
	get_logadd($id,$content,$title,32,$_USER->id);
	show_msg('项目删除成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'&type='.$_GET['type']);

}elseif ($do == 'excel') {
	$datename="project_".get_date('YmdHis',PHP_TIME);
	$outputFileName = 'data/excel/'.$datename.'.xls';
		$wheresql = '';
		if ($typeid = getGP('typeid','P')) {
			$wheresql .= " AND typeid = '".$typeid."'";	
		}
		if ($title = getGP('title','P')) {
			$wheresql .= " AND title LIKE '%$title%'";
		}
		if ($number = getGP('number','P')) {
			$wheresql .= " AND number = '".$number."'";
		}
		//时间
		$venddate = getGP('venddate','P');
		$vstartdate = getGP('vstartdate','P');
		if ($vstartdate!='' && $venddate!='') {
			$wheresql .= " AND (startdate<'".$vstartdate."' and enddate>'".$venddate."')";
		}
		//权限
		$vuidtype = getGP('vuidtype','P');
		if(!is_superadmin() && $vuidtype==''){
			$wheresql .= " and uid='".$_USER->id."'";
		}
		if ($vuidtype!='') {
			if($vuidtype=='-1'){
				$wheresql .= get_subordinate($_USER->id,'uid');
			}else{
				$wheresql .= " and uid='".$vuidtype."'";
			}
		}
		if ($typeid!='') {
			//获取表单
			$archive = array();
			$inputname = array();
			$query = $db->query("SELECT * FROM ".DB_TABLEPRE."project_from where typeid='".$typeid."' and formtype=1  ORDER BY fromid Asc");
			$archive[]="<b>流水单号</b>";
			$archive[]="<b>项目名称</b>";
			$num=0;
			while ($row = $db->fetch_array($query)) {
				$num++;
				$archive[]="<b>".$row['fromname']."</b>";
				$inputname[]=$row['inputname'];
			}
			$archive[]="<b>发起时间</b>";
			$archive[]="<b>发起人</b>";
			$content = array();
			$content[] = $archive;
			$sql = "SELECT * FROM ".DB_TABLEPRE."project WHERE 1 $wheresql  ORDER BY id desc";
			$result = $db->query($sql);
			while ($row = $db->fetch_array($result)) {	
				$archive = array();
				$archive[]=$row['number'];
				$archive[]=$row['title'];
				for($i=0;$i<$num;$i++){
					$blog = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."project_db  WHERE projectid = '".$row['id']."' and inputname='".$inputname[$i]."' and type=1 ");
					$archive[]=str_replace("-",".",$blog['content']);
				}
				$archive[]=str_replace("-",".",$row['date']);
				$archive[]=get_realname($row['uid']);
				$content[] = $archive;
			}
		}else{
			//处理多模板业务
			//获取模板
			$query = $db->query("SELECT * FROM ".DB_TABLEPRE."project_type  ORDER BY tid Asc");
			$templateid=array();
			$templatename=array();
			$templatenum=0;
			while ($row = $db->fetch_array($query)) {
				$templatenum++;
				$templateid[]=$row['tid'];
				$templatename[]=$row['title'];
			}
			$content = array();
			for($m=0;$m<$templatenum;$m++){
				$template = $db->fetch_one_array("SELECT id FROM ".DB_TABLEPRE."project  WHERE typeid = '".$templateid[$m]."'");
				if($template['id']!=''){
					$content[] =array("<font size=3 color=red><b>".$templatename[$m]."</b></font>");
					$archive = array();
					$inputname = array();
					$query = $db->query("SELECT * FROM ".DB_TABLEPRE."project_from where typeid='".$templateid[$m]."' and formtype=1 ORDER BY fromid Asc");
					$archive[]="<b>流水单号</b>";
					$archive[]="<b>项目名称</b>";
					$num=0;
					while ($row = $db->fetch_array($query)) {
						$num++;
						$archive[]="<b>".$row['fromname']."</b>";
						$inputname[]=$row['inputname'];
					}
					$archive[]="<b>发起时间</b>";
					$archive[]="<b>发起人</b>";
					$content[] = $archive;
					$sql = "SELECT * FROM ".DB_TABLEPRE."project WHERE 1 $wheresql AND typeid='".$templateid[$m]."' ORDER BY id desc";
					$result = $db->query($sql);
					while ($row = $db->fetch_array($result)) {	
						$archive = array();
						$archive[]=$row['number'];
						$archive[]=$row['title'];
						for($i=0;$i<$num;$i++){
							$blog = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."project_db  WHERE projectid = '".$row['id']."' and inputname='".$inputname[$i]."' and type=1");
							$archive[]=str_replace("-",".",$blog['content']);
						}
						$archive[]=str_replace("-",".",$row['date']);
						$archive[]=get_realname($row['uid']);
						$content[] = $archive;
					}
				}
			}
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