<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');

get_key("property_");

empty($do) && $do = 'list';
if ($do == 'list') {
	//列表信息 
	$wheresql = '';
	$page = max(1, getGP('page','G','int'));
	$pagesize = $_CONFIG->config_data('pagenum');
	$offset = ($page - 1) * $pagesize;
	$url = 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'';
	if ($title = getGP('title','G')) {
		$wheresql .= " AND name LIKE '%$title%'";
		$url .= '&title='.rawurlencode($title);
	}
	//时间
	if ($number = getGP('number','G')) {
		$wheresql .= " AND number ='".$number."'";
		$url .= '&number='.rawurlencode($number);
	}
	if ($type = getGP('type','G')) {
		$wheresql .= " AND department ='".$type."'";
		$url .= '&type='.rawurlencode($type);
	}
	$vuidtype = getGP('vuidtype','G');
	if(!is_superadmin() && $vuidtype==''){
		$wheresql .= " AND uid = $_USER->id";
	}
	if ($vuidtype!='') {
		$wheresql .=" ".get_subordinate($_USER->id,'uid');
		$url .= '&vuidtype='.$vuidtype;
	}
	//时间
	$vstartdate = getGP('vstartdate','G');
	$venddate = getGP('venddate','G');
	if ($vstartdate!='' && $venddate!='') {
		$wheresql .= " AND (startdate>='".$vstartdate."' and startdate<='".$venddate."')";
		$url .= '&vstartdate='.$vstartdate.'&venddate='.$venddate;
	}
	$num = $db->result("SELECT COUNT(*) AS num FROM ".DB_TABLEPRE."property WHERE 1 $wheresql");
     $sql = "SELECT * FROM ".DB_TABLEPRE."property WHERE 1 $wheresql ORDER BY id desc LIMIT $offset, $pagesize";
	$result = $db->fetch_all($sql);

	include_once('template/index.php');

} elseif ($do == 'update') {

	
	$idarr = getGP('id','P','array');
	foreach ($idarr as $id) {
		$db->query("DELETE FROM ".DB_TABLEPRE."property WHERE id = '$id'  ");
		$db->query("DELETE FROM ".DB_TABLEPRE."property_depreciation WHERE propertyid= '$id'  ");
			
	}
	$content=serialize($idarr);
	$title='删除固定资产信息';
	get_logadd($id,$content,$title,24,$_USER->id);
	show_msg('固定资产删除成功！', 'admin.php?ac=index&fileurl=property');

}elseif ($do == 'excel') {
	$datename="property_".get_date('YmdHis',PHP_TIME);
	$outputFileName = 'data/excel/'.$datename.'.xls';
		$content = array();
		$archive=array("资产编号","资产名称","资产类别","所属部门","资产净值","残值","折旧年限","累计折旧","月折旧额","启用日期","备注","使用人","发布时间","发布人");
		$content[] = $archive;
		$wheresql = '';
		if ($title = getGP('title','P')) {
			$wheresql .= " AND name LIKE '%$title%'";
		}
		//时间
		if ($number = getGP('number','P')) {
			$wheresql .= " AND number ='".$number."'";
		}
		if ($type = getGP('type','P')) {
			$wheresql .= " AND department ='".$type."'";
		}
		$vuidtype = getGP('vuidtype','P');
		if(!is_superadmin() && $vuidtype==''){
			$wheresql .= " AND uid = $_USER->id";
		}
		if ($vuidtype!='') {
			$wheresql .=" ".get_subordinate($_USER->id,'uid');
		}
		//时间
		$vstartdate = getGP('vstartdate','P');
		$venddate = getGP('venddate','P');
		if ($vstartdate!='' && $venddate!='') {
			$wheresql .= " AND (startdate>='".$vstartdate."' and startdate<='".$venddate."')";
		}
		
		
		$sql = "SELECT * FROM ".DB_TABLEPRE."property WHERE 1 $wheresql  ORDER BY id desc";
		$result = $db->query($sql);
		while ($row = $db->fetch_array($result)) {
			$archive = array(
				"".$row[number]."",
				"".$row[name]."",
				"".get_property_type_name($row[property_type])."",
				"".get_realdepaname($row[department])."",
				"".$row[cptl_val]."",
				"".$row[cptl_bal]."",
				"".$row[dpct_yy]."",
				"".$row[sum_dpct]."",
				"".$row[mon_dpct]."",
				"".str_replace("-",".",$row[startdate])."",
				"".$row[content]."",
				"".$row[user]."",
				"".str_replace("-",".",$row[date])."",
				"".get_realname($row['uid']).""
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