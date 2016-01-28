<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');
get_key("project_");
$typeid=$_GET['typeid'];
empty($do) && $do = 'list';
if ($do == 'list') {
	$num = $db->result("SELECT COUNT(*) AS num FROM ".DB_TABLEPRE."project_type");
	if($num>1 && $typeid==''){
		include_once('template/typelist.php');
	}else{
		$tid = $db->fetch_one_array("SELECT tid FROM ".DB_TABLEPRE."project_type");
		if($typeid==''){
			$typeid=$tid['tid'];
		}
		//使用权限
		if(!is_superadmin()){
			$mana = $db->fetch_one_array("SELECT tid FROM ".DB_TABLEPRE."project_type where (keyuser like '%".get_realname($_USER->id)."%' or keyuser='') and tid=".$typeid);
			if($mana['tid']==''){
				show_msg('对不起，您没有使用的权限，不可用！', 'home.php?mid=8');
			}
		}
		//生成流水号
		$number=get_date('YmdHis',PHP_TIME);
		$filenumber=random(6,'0123456789').get_date('ymdHis',PHP_TIME);
		//获取模板
		$from = $db->fetch_one_array("SELECT fromid FROM ".DB_TABLEPRE."project_from  WHERE typeid = '".$typeid."' and formtype=1");
		//读取流程数据
		$flow = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."project_flow  WHERE typeid = '".$typeid."' and flownum>1");
		if($from['fromid']==''){
			show_msg('无可用表单数据，不可用！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'');
		}
		include_once('template/workadd.php');
	}

}elseif ($do == 'add') {
	//固定选项
	$number = check_str(getGP('number','P'));
	$numberview = check_str(getGP('numberview','P'));
	$title = check_str(getGP('title','P'));
	$uid = $_USER->id;
	$date=get_date('Y-m-d H:i:s',PHP_TIME);
	$type=0;
	//写入主表信息
	$project = array(
		'number' => $number,
		'typeid' => $typeid,
		'title' => $title,
		'uid' => $uid,
		'date' => $date,
		'type' => $type,
		'statdate' => check_str(getGP('statdate','P')),
		'enddate' => check_str(getGP('enddate','P')),
		'numberview' => $numberview,
		'numberurl' => getGP('numberurl','P')
	);
	insert_db('project',$project);
	$id=$db->insert_id();
	//更新附件
	$fileoffice = array(
		'officeid' => $id
	);
	update_db('fileoffice',$fileoffice, array('number' =>$_POST['filenumber']));
	//写入单项数据
	global $db;
	$query = $db->query("SELECT * FROM ".DB_TABLEPRE."project_from where typeid='".$typeid."'  and formtype=1 and inputtype!=6 ORDER BY fromid Asc");
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
				'projectid' => $id,
				'tplid' => $tplid,
				'fromid' => $row["fromid"],
				'typeid' => $typeid,
				'type' => 1
			);
		insert_db('project_db',$project_db);
	
	}
	//写入数组
	global $db;
	$query = $db->query("SELECT * FROM ".DB_TABLEPRE."project_from where typeid='".$typeid."'  and formtype=1 and inputtype=6 ORDER BY fromid Asc");
	while ($row = $db->fetch_array($query)) {
			$inputvalue=getGP(''.$row["inputname"].'','P','array');
			$project_db = array(
			'inputname' => $row["inputname"],
			'content' => serialize($inputvalue),
			'projectid' => $id,
			'tplid' => $tplid,
			'fromid' => $row["fromid"],
			'typeid' => $typeid,
			'type' => 1
		);
		insert_db('project_db',$project_db);
	}
	//处理流程
	$sql = "SELECT * FROM ".DB_TABLEPRE."project_flow  WHERE typeid = '".$typeid."' and flownum=1 order by fid asc";
	$flow = $db->fetch_one_array($sql);
	if($flow['fid']!=''){
		$personnel1 = array(
			'name' => get_realname($_USER->id),
			'uid' =>$_USER->id,
			'designationdate' =>get_date('Y-m-d H:i:s',PHP_TIME),
			'approvaldate' =>get_date('Y-m-d H:i:s',PHP_TIME),
			'lnstructions' =>'生成项目立项单，系统自动完成该步骤',
			'pertype' =>1,
			'projectid' => $id,
			'typeid' =>$typeid,
			'flowid' => $flow['fid'],
			'appkey' => 2,
			'appkey1' => 2,
			'appkey2' => 1
			);
		insert_db('project_personnel',$personnel1);
		//写入审批流程
		$personnel2 = array(
			'name' => getGP('userkey','P'),
			'uid' =>getGP('userkeyid','P'),
			'designationdate' =>get_date('Y-m-d H:i:s',PHP_TIME),
			'pertype' =>0,
			'projectid' => $id,
			'typeid' =>$typeid,
			'flowid' => getGP('flowid','P'),
			'appkey' => getGP('appkey','P'),
			'appkey1' => getGP('appkey1','P'),
			'appkey2' => 1
			);
		insert_db('project_personnel',$personnel2);
		$pid=$db->insert_id();
		if(getGP('appkey','P')=='1'){
			$userkey=explode(',',getGP('userkey','P'));
			$userkeyid=explode(',',getGP('userkeyid','P'));
			for($i=0;$i<sizeof($userkeyid);$i++){
				$personnel_log = array(
					'name' => $userkey[$i],
					'uid' =>$userkeyid[$i],
					'pertype' =>0,
					'perid' =>$pid,
					'projectid' =>$id,
					'typeid' =>$typeid,
					'appkey2' =>1
					);
				insert_db('project_personnel_log',$personnel_log);
			}
		}
	}
	//提示
	if(getGP('sms_info_box_work','P')!=''){
		$content='您有一个新"'.$title.'"需要审批,请点击查看!<a href="admin.php?ac=list&fileurl=project&type=1">点击审批>></a>';
		//接收人；内容；类型（1：有返回回值;0：无返回值）;URL
		SMS_ADD_POST(getGP('userkey','P'),$content,0,0,$_USER->id);
	}
	//手机短信
	if(getGP('sms_phone_box_work','P')!=''){
		$content='您有一个新项目编号为"'.$number.'"需要审批,请登录OA进行审批!';
		PHONE_ADD_POST(getGP('userkeyphone','P'),$content,getGP('userkey','P'),0,0,$_USER->id);
	}
	//通知其它人员
	if(getGP('viewuser','P')!=''){
		$content2='您接收到一条项目为"'.$title.'"的通知,请点击“<a href="admin.php?ac=list&do=view&fileurl=project&projectid='.$id.'">查看</a>”!';
		SMS_ADD_POST(getGP('viewuser','P'),$content2,0,0,$_USER->id);
	}
	//手机短信
	if(getGP('sms_phone_box_work','P')!=''){
		$content2='您有一个项目需要审批,请登录OA进行审批!';
		PHONE_ADD_POST(getGP('viewuserphone','P'),$content2,getGP('viewuser','P'),0,0,$_USER->id);
	}
	//更新LOG
	$content=serialize($workclass);
	$title='新建项目';
	get_logadd($id,$content,$title,32,$_USER->id);
	show_msg($title.' 项目审批流程提交成功！', 'admin.php?ac=list&fileurl='.$fileurl);
}
?>