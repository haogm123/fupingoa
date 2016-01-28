<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');
get_key("job_");

empty($do) && $do = 'list';
if ($do == 'list') {
	//列表信息 
	$wheresql = '';
	$page = max(1, getGP('page','G','int'));
	$pagesize = $_CONFIG->config_data('pagenum');
	$offset = ($page - 1) * $pagesize;
	$url = 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'';
	if ($blogtype = getGP('blogtype','G')) {
		$wheresql .= " AND type = '1'";
		$url .= '&blogtype='.$blogtype;	
	}
	if ($number = getGP('number','G')) {
		$wheresql .= " AND number='".$number."'";
		$url .= '&number='.rawurlencode($number);
	}
	if ($channel = getGP('channel','G')) {
		$wheresql .= " AND channel='".$channel."'";
		$url .= '&channel='.rawurlencode($channel);
	}
	if ($jobpost = getGP('jobpost','G')) {
		$wheresql .= " AND jobpost LIKE '%".$jobpost."%'";
		$url .= '&jobpost='.rawurlencode($jobpost);
	}
	//时间
	$vstartdate = getGP('vstartdate','G');
	$venddate = getGP('venddate','G');
	if ($vstartdate!='' && $venddate!='') {
		$wheresql .= " AND (startdate>='".$vstartdate."' and enddate<='".$venddate."')";
		$url .= '&vstartdate='.$vstartdate.'&venddate='.$venddate;
	}
	$vuidtype = getGP('vuidtype','G');
	if(!is_superadmin() && $vuidtype==''){
		$wheresql .= " AND (uid ='".$_USER->id."' or examination LIKE '%".get_realname($_USER->id)."%')";
	}
	if ($vuidtype!='') {
		if($vuidtype=='-1'){
				$wheresql .= get_subordinate($_USER->id,'uid');
			}else{
				$wheresql .= " and uid='".$vuidtype."'";
			}
		$url .= '&vuidtype='.$vuidtype;
	}
	$num = $db->result("SELECT COUNT(*) AS num FROM ".DB_TABLEPRE."job WHERE 1 $wheresql");
     $sql = "SELECT * FROM ".DB_TABLEPRE."job WHERE 1 $wheresql ORDER BY id desc LIMIT $offset, $pagesize";
	$result = $db->fetch_all($sql);

	include_once('template/index.php');

} elseif ($do == 'update') {
	
	$idarr = getGP('id','P','array');
	foreach ($idarr as $id) {
		$db->query("DELETE FROM ".DB_TABLEPRE."job WHERE id = '$id'  ");
		$db->query("DELETE FROM ".DB_TABLEPRE."job_talent WHERE jobpost = '$id'  ");
		$db->query("DELETE FROM ".DB_TABLEPRE."job_hire WHERE jobpost = '$id'  ");
	}
	$content=serialize($idarr);
	$title='删除招聘计划信息';
	get_logadd($id,$content,$title,27,$_USER->id);
	show_msg('招聘计划删除成功！', 'admin.php?ac=index&fileurl=jobs');

} elseif ($do == 'excel') {
	$datename="job_".get_date('YmdHis',PHP_TIME);
	$outputFileName = 'data/excel/'.$datename.'.xls';
		$content = array();
		$archive=array("计划编号","计划名称","招聘渠道","招聘费用","开始日期","结束日期","招聘人数","审批人","审批时间","附件","招聘说明","发布人","日期");
		$content[] = $archive;
		$wheresql = '';
		if ($blogtype = getGP('blogtype','P')) {
			$wheresql .= " AND type = '1'";
		}
		if ($number = getGP('number','P')) {
			$wheresql .= " AND number='".$number."'";
		}
		if ($channel = getGP('channel','P')) {
			$wheresql .= " AND channel='".$channel."'";
		}
		if ($jobpost = getGP('jobpost','P')) {
			$wheresql .= " AND jobpost LIKE '%".$jobpost."%'";
		}
		//时间
		$vstartdate = getGP('vstartdate','P');
		$venddate = getGP('venddate','P');
		if ($vstartdate!='' && $venddate!='') {
			$wheresql .= " AND (startdate>='".$vstartdate."' and enddate<='".$venddate."')";
		}
		$vuidtype = getGP('vuidtype','P');
		if(!is_superadmin() && $vuidtype==''){
			$wheresql .= " AND uid = $_USER->id";
		}
		if ($vuidtype!='') {
			if($vuidtype=='-1'){
				$wheresql .= get_subordinate($_USER->id,'uid');
			}else{
				$wheresql .= " and uid='".$vuidtype."'";
			}
		}
		
		
		$sql = "SELECT * FROM ".DB_TABLEPRE."job WHERE 1 $wheresql ORDER BY id desc";
		$result = $db->query($sql);
		while ($row = $db->fetch_array($result)) {	
			$archive = array(
				"".$row[number]."",
				"".$row[jobpost]."",
				"".get_typename($row[channel])."",
				"".$row[price]."",
				"".str_replace("-",".",$row[startdate])."",
				"".str_replace("-",".",$row[enddate])."",
				"".$row[jobnum]."人",
				"".$row[examination]."",
				"".str_replace("-",".",$row[examinationdate])."",
				"".$row[appendix]."",
				"".$row[content]."",
				"".get_realname($row['uid'])."",
				"".str_replace("-",".",$row[date]).""
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
}
?>