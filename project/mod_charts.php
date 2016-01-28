<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');
get_key("excel_37");
require(TOA_ROOT.'include/function_charts.php');
empty($do) && $do = 'list';
$typeid=$_REQUEST['typeid'];
$tplid=$_REQUEST['tplid'];
$modid=$_REQUEST['modid'];
$projectid=$_REQUEST['projectid'];
if($_GET['flashtype']!=''){
	$flashtype=$_GET['flashtype'];
}else{
	$flashtype='Column3D';
}
//Column3D,Line,Pie3D,Area2D,Bar2D,Doughnut2D
$fw='100%';
$fh='350';
if ($do == 'list') {
	if($_REQUEST['type']!=''){
		$type=$_REQUEST['type'];
	}else{
		$type=1;
	}
	if($type==1){
		$title='月份';
		$strtype  = "<chart caption='' xAxisName='项目统计[月份]' yAxisName='月份统计' showValues='0' formatNumberScale='0' showBorder='1'>";
		$m=0;
		for($i=0;$i<12;$i++){
		$m++;
			$numuser = $db->result("SELECT COUNT(*) AS numuser FROM ".DB_TABLEPRE."project WHERE month(date)= ".$m."");
			$strtype .= "<set label='".$m."月' value='".$numuser."' />";
		}
		$strtype .= "</chart>";
	}elseif($type==2){
		$title='日期';
		$strtype  = "<chart caption='' xAxisName='项目统计[日期]' yAxisName='日期统计' showValues='0' formatNumberScale='0' showBorder='1'>";
		$m=0;
		$t=date(t,strtotime(get_date('Y/m',PHP_TIME).'/1'));
		for($i=0;$i<$t;$i++){
		$m++;
			$numuser = $db->result("SELECT COUNT(*) AS numuser FROM ".DB_TABLEPRE."project WHERE year(date)= ".get_date('Y',PHP_TIME)." and month(date)= ".get_date('m',PHP_TIME)." and day(date)= ".$m."");
			$strtype .= "<set label='".$m."日' value='".$numuser."' />";
		}
		$strtype .= "</chart>";
	}elseif($type==3){
		$title='成员';
		if($flashtype=='Bar2D'){
			$fw='100%';
			$fh='1250';
		}
		$strtype  = "<chart caption='' xAxisName='项目统计[成员]' yAxisName='成员统计' showValues='0' formatNumberScale='0' showBorder='1'>";
		global $db;
		$sql = $db->query("SELECT a.id,b.name FROM ".DB_TABLEPRE."user a,".DB_TABLEPRE."user_view b where a.id=b.uid ORDER BY a.numbers Asc");
		while ($row = $db->fetch_array($sql)) {
			$numuser = $db->result("SELECT COUNT(*) AS numuser FROM ".DB_TABLEPRE."project WHERE uid='".$row['id']."'");
			$strtype .= "<set label='".$row['name']."' value='".$numuser."' />";
		}
		$strtype .= "</chart>";
	}elseif($type==4){
		$title='审批状态';
		$strtype  = "<chart caption='' xAxisName='项目统计[审批状态]' yAxisName='审批状态' showValues='0' formatNumberScale='0' showBorder='1'>";
		global $db;
		for($i=0;$i<=5;$i++){
			if($i!=3){
				$numkey = $db->result("SELECT COUNT(*) AS numkey FROM ".DB_TABLEPRE."project a,".DB_TABLEPRE."project_personnel b WHERE a.id=b.projectid and pertype='".$i."' and appkey2=1 order by perid desc");
				if($i=='0'){
					$titles='未审批';
				}elseif($i=='1'){
					$titles='己审批';
				}elseif($i=='2'){
					$titles='拒绝';
				}elseif($i=='3'){
					$titles='退回';
				}elseif($i=='4'){
					$titles='等待审批';
				}elseif($i=='5'){
					$titles='结束';
				}
				$strtype .= "<set label='".$titles."' value='".$numkey."' />";
			}
		}
		$numkeys = $db->result("SELECT COUNT(*) AS numkeys FROM ".DB_TABLEPRE."project  WHERE type='1'  ".$wheresql." order by id desc");
		$strtype .= "<set label='撤消' value='".$numkeys."' />";
		$strtype .= "</chart>";
	}else{
	}
	include_once('charts/list.php');

}elseif($do == 'project') {
	if($_REQUEST['type']!=''){
		$type=$_REQUEST['type'];
	}else{
		$type=4;
	}
	$project = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."project where id=".$projectid."");
	if($type==1){
		$title=$project['title'].'&nbsp;&nbsp;&nbsp;&nbsp;[月份]';
		$strtype  = "<chart caption='' xAxisName='".$project[title]."&nbsp;&nbsp;[月份]统计' yAxisName='月份统计' showValues='0' formatNumberScale='0' showBorder='1'>";
		$m=0;
		for($i=0;$i<12;$i++){
		$m++;
			$numuser = $db->result("SELECT COUNT(*) AS numuser FROM ".DB_TABLEPRE."project_log WHERE month(date)= ".$m." and projectid=".$projectid);
			$strtype .= "<set label='".$m."月' value='".$numuser."' />";
		}
		$strtype .= "</chart>";
	}elseif($type==2){
		$title=$project['title'].'&nbsp;&nbsp;&nbsp;&nbsp;[日期]';
		$strtype  = "<chart caption='' xAxisName='".$project[title]."&nbsp;&nbsp;[日期]统计' yAxisName='日期统计' showValues='0' formatNumberScale='0' showBorder='1'>";
		$m=0;
		$t=date(t,strtotime(get_date('Y/m',PHP_TIME).'/1'));
		for($i=0;$i<$t;$i++){
		$m++;
			$numuser = $db->result("SELECT COUNT(*) AS numuser FROM ".DB_TABLEPRE."project_log WHERE year(date)= ".get_date('Y',PHP_TIME)." and month(date)= ".get_date('m',PHP_TIME)." and day(date)= ".$m." and projectid=".$projectid);
			$strtype .= "<set label='".$m."日' value='".$numuser."' />";
		}
		$strtype .= "</chart>";
	}elseif($type==3){
		$title=$project['title'].'&nbsp;&nbsp;&nbsp;&nbsp;[成员]';
		if($flashtype=='Bar2D'){
			$fw='100%';
			$fh='1250';
		}
		$strtype  = "<chart caption='' xAxisName='".$project[title]."&nbsp;&nbsp;[成员]统计' yAxisName='成员统计' showValues='0' formatNumberScale='0' showBorder='1'>";
		//获取项目成员
		$uid=$project['uid'];
		global $db;
		$sql = $db->query("SELECT uid,lid FROM ".DB_TABLEPRE."project_log where projectid=".$projectid." ORDER BY lid Asc");
		while ($row = $db->fetch_array($sql)) {
			$uid.=','.$row['uid'];
			$lid.=','.$row['lid'];
		}
		$prolid=$projectid.$lid;
		global $db;
		$sql = $db->query("SELECT uid FROM ".DB_TABLEPRE."project_personnel where projectid in(".$prolid.") ORDER BY perid Asc");
		while ($row = $db->fetch_array($sql)) {
			$uid.=','.$row['uid'];
		}
		global $db;
		$sql = $db->query("SELECT a.id,b.name FROM ".DB_TABLEPRE."user a,".DB_TABLEPRE."user_view b where a.id=b.uid and a.id in(".$uid.") ORDER BY a.numbers Asc");
		while ($row = $db->fetch_array($sql)) {
			$numuser = $db->result("SELECT COUNT(*) AS numuser FROM ".DB_TABLEPRE."project_log WHERE uid='".$row['id']."' and projectid=".$projectid."");
			$strtype .= "<set label='".$row['name']."' value='".$numuser."' />";
		}
		$strtype .= "</chart>";
	}elseif($type==4){
		$title=$project['title'].'&nbsp;&nbsp;&nbsp;&nbsp;[模型]';
		$strtype  = "<chart caption='' xAxisName='".$project[title]."&nbsp;&nbsp;[模型]统计' yAxisName='模型统计' showValues='0' formatNumberScale='0' showBorder='1'>";
		global $db;
		$sql = $db->query("SELECT mid,modname FROM ".DB_TABLEPRE."project_model where typeid='".$project['typeid']."' ORDER BY mid Asc");
		while ($row = $db->fetch_array($sql)) {
			$numuser = $db->result("SELECT COUNT(*) AS numuser FROM ".DB_TABLEPRE."project_log WHERE modid='".$row['mid']."' and projectid=".$projectid);
			$strtype .= "<set label='".$row['modname']."' value='".$numuser."' />";
		}
		$strtype .= "</chart>";
	}else{
	}
	include_once('charts/project.php');
	
}elseif($do == 'mod') {
	if($_REQUEST['type']!=''){
		$type=$_REQUEST['type'];
	}else{
		$type=1;
	}
	$project = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."project where id=".$projectid."");
	if($type==1){
		$title=$project['title'].'&nbsp;&nbsp;&nbsp;&nbsp;[月份]';
		$strtype  = "<chart caption='' xAxisName='".$project[title]."&nbsp;&nbsp;[月份]统计' yAxisName='月份统计' showValues='0' formatNumberScale='0' showBorder='1'>";
		$m=0;
		for($i=0;$i<12;$i++){
		$m++;
			$numuser = $db->result("SELECT COUNT(*) AS numuser FROM ".DB_TABLEPRE."project_log WHERE month(date)= ".$m." and projectid=".$projectid." and modid='".$modid."' and typeid='".$typeid."'");
			$strtype .= "<set label='".$m."月' value='".$numuser."' />";
		}
		$strtype .= "</chart>";
	}elseif($type==2){
		$title=$project['title'].'&nbsp;&nbsp;&nbsp;&nbsp;[日期]';
		$strtype  = "<chart caption='' xAxisName='".$project[title]."&nbsp;&nbsp;[日期]统计' yAxisName='日期统计' showValues='0' formatNumberScale='0' showBorder='1'>";
		$m=0;
		$t=date(t,strtotime(get_date('Y/m',PHP_TIME).'/1'));
		for($i=0;$i<$t;$i++){
		$m++;
			$numuser = $db->result("SELECT COUNT(*) AS numuser FROM ".DB_TABLEPRE."project_log WHERE year(date)= ".get_date('Y',PHP_TIME)." and month(date)= ".get_date('m',PHP_TIME)." and day(date)= ".$m." and projectid=".$projectid." and modid='".$modid."' and typeid='".$typeid."'");
			$strtype .= "<set label='".$m."日' value='".$numuser."' />";
		}
		$strtype .= "</chart>";
	}elseif($type==3){
		$title=$project['title'].'&nbsp;&nbsp;&nbsp;&nbsp;[成员]';
		if($flashtype=='Bar2D'){
			$fw='100%';
			$fh='1250';
		}
		$strtype  = "<chart caption='' xAxisName='".$project[title]."&nbsp;&nbsp;[成员]统计' yAxisName='成员统计' showValues='0' formatNumberScale='0' showBorder='1'>";
		//获取项目成员
		$uid=$project['uid'];
		global $db;
		$sql = $db->query("SELECT uid,lid FROM ".DB_TABLEPRE."project_log where projectid=".$projectid." ORDER BY lid Asc");
		while ($row = $db->fetch_array($sql)) {
			$uid.=','.$row['uid'];
			$lid.=','.$row['lid'];
		}
		$prolid=$projectid.$lid;
		global $db;
		$sql = $db->query("SELECT uid FROM ".DB_TABLEPRE."project_personnel where projectid in(".$prolid.") ORDER BY perid Asc");
		while ($row = $db->fetch_array($sql)) {
			$uid.=','.$row['uid'];
		}
		global $db;
		$sql = $db->query("SELECT a.id,b.name FROM ".DB_TABLEPRE."user a,".DB_TABLEPRE."user_view b where a.id=b.uid and a.id in(".$uid.") ORDER BY a.numbers Asc");
		while ($row = $db->fetch_array($sql)) {
			$numuser = $db->result("SELECT COUNT(*) AS numuser FROM ".DB_TABLEPRE."project_log WHERE uid='".$row['id']."' and projectid=".$projectid." and modid='".$modid."' and typeid='".$typeid."'");
			$strtype .= "<set label='".$row['name']."' value='".$numuser."' />";
		}
		$strtype .= "</chart>";
	}else{
	}
	include_once('charts/mod.php');
	
}elseif ($do == 'tpl') {

	if($_REQUEST['type']!=''){
		$type=$_REQUEST['type'];
	}else{
		$type=1;
	}
	$project = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."project where id=".$projectid."");
	if($type==1){
		$title=$project['title'].'&nbsp;&nbsp;&nbsp;&nbsp;[月份]';
		$strtype  = "<chart caption='' xAxisName='".$project[title]."&nbsp;&nbsp;[月份]统计' yAxisName='月份统计' showValues='0' formatNumberScale='0' showBorder='1'>";
		$m=0;
		for($i=0;$i<12;$i++){
		$m++;
			$numuser = $db->result("SELECT COUNT(*) AS numuser FROM ".DB_TABLEPRE."project_log WHERE month(date)= ".$m." and projectid=".$projectid." and modid='".$modid."' and typeid='".$typeid."'");
			$strtype .= "<set label='".$m."月' value='".$numuser."' />";
		}
		$strtype .= "</chart>";
	}elseif($type==2){
		$title=$project['title'].'&nbsp;&nbsp;&nbsp;&nbsp;[日期]';
		$strtype  = "<chart caption='' xAxisName='".$project[title]."&nbsp;&nbsp;[日期]统计' yAxisName='日期统计' showValues='0' formatNumberScale='0' showBorder='1'>";
		$m=0;
		$t=date(t,strtotime(get_date('Y/m',PHP_TIME).'/1'));
		for($i=0;$i<$t;$i++){
		$m++;
			$numuser = $db->result("SELECT COUNT(*) AS numuser FROM ".DB_TABLEPRE."project_log WHERE year(date)= ".get_date('Y',PHP_TIME)." and month(date)= ".get_date('m',PHP_TIME)." and day(date)= ".$m." and projectid=".$projectid." and modid='".$modid."' and typeid='".$typeid."'");
			$strtype .= "<set label='".$m."日' value='".$numuser."' />";
		}
		$strtype .= "</chart>";
	}elseif($type==3){
		$title=$project['title'].'&nbsp;&nbsp;&nbsp;&nbsp;[成员]';
		if($flashtype=='Bar2D'){
			$fw='100%';
			$fh='1250';
		}
		$strtype  = "<chart caption='' xAxisName='".$project[title]."&nbsp;&nbsp;[成员]统计' yAxisName='成员统计' showValues='0' formatNumberScale='0' showBorder='1'>";
		//获取项目成员
		$uid=$project['uid'];
		global $db;
		$sql = $db->query("SELECT uid,lid FROM ".DB_TABLEPRE."project_log where projectid=".$projectid." ORDER BY lid Asc");
		while ($row = $db->fetch_array($sql)) {
			$uid.=','.$row['uid'];
			$lid.=','.$row['lid'];
		}
		$prolid=$projectid.$lid;
		global $db;
		$sql = $db->query("SELECT uid FROM ".DB_TABLEPRE."project_personnel where projectid in(".$prolid.") ORDER BY perid Asc");
		while ($row = $db->fetch_array($sql)) {
			$uid.=','.$row['uid'];
		}
		global $db;
		$sql = $db->query("SELECT a.id,b.name FROM ".DB_TABLEPRE."user a,".DB_TABLEPRE."user_view b where a.id=b.uid and a.id in(".$uid.") ORDER BY a.numbers Asc");
		while ($row = $db->fetch_array($sql)) {
			$numuser = $db->result("SELECT COUNT(*) AS numuser FROM ".DB_TABLEPRE."project_log WHERE uid='".$row['id']."' and projectid=".$projectid." and modid='".$modid."' and typeid='".$typeid."'");
			$strtype .= "<set label='".$row['name']."' value='".$numuser."' />";
		}
		$strtype .= "</chart>";
	}elseif($type==4){
		$title=$project['title'].'&nbsp;&nbsp;&nbsp;&nbsp;[模板]';
		$strtype  = "<chart caption='' xAxisName='".$project[title]."&nbsp;&nbsp;[模板]统计' yAxisName='模板统计' showValues='0' formatNumberScale='0' showBorder='1'>";
		global $db;
		$sql = $db->query("SELECT tplid,title FROM ".DB_TABLEPRE."project_template where typeid='".$typeid."' and modid='".$modid."' ORDER BY tplid Asc");
		while ($row = $db->fetch_array($sql)) {
			$numuser = $db->result("SELECT COUNT(*) AS numuser FROM ".DB_TABLEPRE."project_log WHERE tplid='".$row['tplid']."' and projectid=".$projectid);
			$strtype .= "<set label='".$row['title']."' value='".$numuser."' />";
		}
		$strtype .= "</chart>";
	}else{
	}
	include_once('charts/tpl.php');

}
?>