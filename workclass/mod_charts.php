<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');
get_key("excel_9");
require(TOA_ROOT.'include/function_charts.php');
empty($do) && $do = 'list';
if($_REQUEST['type']!=''){
	$type=$_REQUEST['type'];
}else{
	$type=1;
}
$typeid=$_REQUEST['typeid'];
$tplid=$_REQUEST['tplid'];
$datesart=$_REQUEST['datesart'];
$dateend=$_REQUEST['dateend'];
$datenum=$_GET['datenum'];
if($_GET['flashtype']!=''){
	$flashtype=$_GET['flashtype'];
}else{
	$flashtype='Column3D';
}
//Column3D,Line,Pie3D,Area2D,Bar2D,Doughnut2D
$fw='100%';
$fh='350';
if ($do == 'list') {
	$wheresql = '';
	if ($datesart!='' && $dateend!='') {
		$wheresql .= " AND (date>='".$datesart."' and date<='".$dateend."')";
	}
	if ($tplid!='') {
		$wheresqlt .= " AND tplid='".$tplid."' ";
	}
	if ($typeid!='') {
		$wheresqlt .= " AND typeid='".$typeid."' ";
	}
	if($type==1){
		//工作流类别统计
		$strtype  = "<chart caption='' xAxisName='工作流类别统计' yAxisName='工作流类别' showValues='0' formatNumberScale='0' showBorder='1'>";
		global $db;
		$sql = $db->query("SELECT typename,tid FROM ".DB_TABLEPRE."workclass_type  ORDER BY typenum Asc");
		while ($row = $db->fetch_array($sql)) {
			$numtype = $db->result("SELECT COUNT(*) AS numtype FROM ".DB_TABLEPRE."workclass WHERE typeid='".$row['tid']."' ".$wheresql."");
			$strtype .= "<set label='".$row['typename']."' value='".$numtype."' />";
		}
		$strtype .= "</chart>";
	}elseif($type==2){
		//工作流人员统计
		if($flashtype=='Bar2D'){
			$fw='100%';
			$fh='1250';
		}
		$strtype  = "<chart caption='' xAxisName='工作流成员发布统计' yAxisName='成员统计' showValues='0' formatNumberScale='0' showBorder='1'>";
		global $db;
		$sql = $db->query("SELECT a.id,b.name FROM ".DB_TABLEPRE."user a,".DB_TABLEPRE."user_view b where a.id=b.uid ORDER BY a.numbers Asc");
		while ($row = $db->fetch_array($sql)) {
			$numuser = $db->result("SELECT COUNT(*) AS numuser FROM ".DB_TABLEPRE."workclass WHERE uid='".$row['id']."' ".$wheresql."  ".$wheresqlt."");
			$strtype .= "<set label='".$row['name']."' value='".$numuser."' />";
		}
		$strtype .= "</chart>";
	}elseif($type==3){
	//工作流模型统计
		if($flashtype=='Bar2D' && $typeid==''){
			$fw='100%';
			$fh='1250';
		}
		$strtype  = "<chart caption='' xAxisName='工作流模型统计' yAxisName='模型统计' showValues='0' formatNumberScale='0' showBorder='1'>";
		global $db;
		if($typeid!=''){
			$sql = $db->query("SELECT tplid,title FROM ".DB_TABLEPRE."workclass_template where typeid='".$typeid."' ORDER BY tplid Asc");
		}else{
			$sql = $db->query("SELECT tplid,title FROM ".DB_TABLEPRE."workclass_template  ORDER BY tplid Asc");
		}
		while ($row = $db->fetch_array($sql)) {
			$numtpl = $db->result("SELECT COUNT(*) AS numtpl FROM ".DB_TABLEPRE."workclass WHERE tplid='".$row['tplid']."' ".$wheresql."");
			$strtype .= "<set label='".$row['title']."' value='".$numtpl."' />";
		}
		$strtype .= "</chart>";
	}elseif($type==4){
		//工作流审批状态统计
		//0未审批
		//1审批；
		//2拒绝;
		//3退回
		//4等待审批
		//5结束
		if ($datesart!='' && $dateend!='') {
			$wheresqls = " AND (a.date>='".$datesart."' and a.date<='".$dateend."')";
		}
		if ($tplid!='') {
			$wheresqls .= " AND a.tplid='".$tplid."' ";
		}
		if ($typeid!='') {
			$wheresqls .= " AND a.typeid='".$typeid."' ";
		}
		$strtype  = "<chart caption='' xAxisName='工作流审批状态统计' yAxisName='审批状态' showValues='0' formatNumberScale='0' showBorder='1'>";
		global $db;
		for($i=0;$i<=5;$i++){
			if($i!=3){
				$numkey = $db->result("SELECT COUNT(*) AS numkey FROM ".DB_TABLEPRE."workclass a,".DB_TABLEPRE."workclass_personnel b WHERE a.id=b.workid and pertype='".$i."'  ".$wheresqls." order by perid desc");
				if($i=='0'){
					$title='未审批';
				}elseif($i=='1'){
					$title='己审批';
				}elseif($i=='2'){
					$title='拒绝';
				}elseif($i=='3'){
					$title='退回';
				}elseif($i=='4'){
					$title='等待审批';
				}elseif($i=='5'){
					$title='结束';
				}
				$strtype .= "<set label='".$title."' value='".$numkey."' />";
			}
		}
		$numkeys = $db->result("SELECT COUNT(*) AS numkeys FROM ".DB_TABLEPRE."workclass  WHERE type='1'  ".$wheresql." order by id desc");
		$strtype .= "<set label='撤消' value='".$numkeys."' />";
		$strtype .= "</chart>";
	}else{
	}
	include_once('charts/list.php');

}elseif($do == 'tpl') {
	if($_GET['flashtype']==''){
		$flashtype='MSColumn3D';
	}
	if($_GET['chartsid']!=''){
		//获取数据
		$sql = "SELECT * FROM ".DB_TABLEPRE."workclass_charts where  id=".$_GET['chartsid']."";
		$charts = $db->fetch_one_array($sql);
		//获取图表数据
		$chartsdata=explode('||',$charts['numdata']);
		if($type==1){//按月
			//XML开始
			$strXML = "<chart caption='".$charts['title']."[按月]统计' numberPrefix='' formatNumberScale='1' rotateValues='1' placeValuesInside='1' decimals='2'>";
			//统计头
			$strXML .= "<categories>";
			$m=0;
			for($i=0;$i<12;$i++){
			$m++;
				$strXML .= "<category name='".$m."月' />";
			}
			$strXML .= "</categories>";
			//数据
			$charts['name']=unserialize($chartsdata[0]);
			$charts['value']=unserialize($chartsdata[1]);
			for($i=0;$i<4;$i++){
				if($charts['name'][$i]!=''){
					$strXML .= "<dataset seriesName='".$charts['name'][$i]."'>";
					if($charts['value'][$i]!=''){
					$chartsv=explode(',',$charts['value'][$i]);
						$m=0;
						for($s=0;$s<12;$s++){
							$m++;
							$numkeys = $db->result("SELECT sum(content) AS numkeys FROM ".DB_TABLEPRE."workclass_db a,".DB_TABLEPRE."workclass b  WHERE a.tplid='".$charts['tplid']."' and a.typeid='".$charts['typeid']."' and a.fromid='".$chartsv[0]."' and a.workid=b.id and month(date)= ".$m." order by did desc");
							if($numkeys==''){
								$numkeys=0;
							}
							$strXML .= "<set value='".sprintf("%01.2f",$numkeys)."' />";
						}
					}
					$strXML .= "</dataset>";
				}
			}
			$strXML .= "</chart>";
		}elseif($type==2){//按天
			//XML开始
			$strXML = "<chart caption='".$charts['title']."[按天]统计' numberPrefix='$' formatNumberScale='1' rotateValues='1' placeValuesInside='1' decimals='2'>";
			//统计头
			$strXML .= "<categories>";
			$m=0;
			$t=date(t,strtotime(get_date('Y/m',PHP_TIME).'/1'));
			for($i=0;$i<$t;$i++){
			$m++;
				$strXML .= "<category name='".$m."' />";
			}
			$strXML .= "</categories>";
			//数据
			$charts['name']=unserialize($chartsdata[0]);
			$charts['value']=unserialize($chartsdata[1]);
			for($i=0;$i<4;$i++){
				if($charts['name'][$i]!=''){
					$strXML .= "<dataset seriesName='".$charts['name'][$i]."'>";
					if($charts['value'][$i]!=''){
					$chartsv=explode(',',$charts['value'][$i]);
						$m=0;
						for($s=0;$s<$t;$s++){
							$m++;
							$numkeys = $db->result("SELECT sum(content) AS numkeys FROM ".DB_TABLEPRE."workclass_db a,".DB_TABLEPRE."workclass b  WHERE a.tplid='".$charts['tplid']."' and a.typeid='".$charts['typeid']."' and a.fromid='".$chartsv[0]."' and a.workid=b.id and year(date)= ".get_date('Y',PHP_TIME)." and month(date)= ".get_date('m',PHP_TIME)." and day(date)= ".$m." order by did desc");
							if($numkeys==''){
								$numkeys='0';
							}else{
								$numkeys=sprintf("%01.2f",$numkeys);
							}
							$strXML .= "<set value='".$numkeys."' />";
						}
					}
					$strXML .= "</dataset>";
				}
			}
			$strXML .= "</chart>";
		
		}
		include_once('charts/tpl.php');
	}else{
		global $_CACHE;
		get_cache('workclass_type');
		include_once('charts/tpllist.php');
	}
}elseif($do == 'mana') {
	if($_GET['view']!=''){
		if($_GET['view']=='save'){
			$number = '999';
			$typeid = check_str(getGP('typeid','P'));
			$tplid = check_str(getGP('tplid','P'));
			$title = check_str(getGP('title','P'));
			$numdataname=getGP('numdataname','P','array');
			$numdatavalue=getGP('numdatavalue','P','array');
			$numdata=serialize($numdataname).'||'.serialize($numdatavalue);
			$workclass_charts = array(
				'number' => $number,
				'typeid' => $typeid,
				'tplid' => $tplid,
				'title' => $title,
				'numdata' => $numdata
			);
			insert_db('workclass_charts',$workclass_charts);
			show_msg('您提交的信息处理成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'&do=mana');
		}else{
			include_once('charts/chartsadd.php');
		}
	}else{
		$sql = "SELECT * FROM ".DB_TABLEPRE."workclass_charts order by id desc";
		$result = $db->fetch_all($sql);
		include_once('charts/charts.php');
	}
}elseif ($do == 'ajax') {
	global $db;
	$query = $db->query("SELECT fromname,inputname,fromid FROM ".DB_TABLEPRE."workclass_from where tplid='".$_GET['tplid']."' and formtype=1 and inputtype=0 and inputtype1=1 ORDER BY fromid Asc");
	echo '<option value="">全部</option>';
	while ($row = $db->fetch_array($query)) {
		echo '<option value="'.$row['fromid'].','.$row['inputname'].'">'.$row['fromname'].'</option>';
	}
}elseif ($do == 'update') {
	$idarr = getGP('id','P','array');
	foreach ($idarr as $id) {
		$db->query("DELETE FROM ".DB_TABLEPRE."workclass_charts WHERE id = '$id' ");
	}
    show_msg('统计模型信息删除成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'&do=mana');

}
?>