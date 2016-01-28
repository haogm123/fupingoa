<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');

get_key("office_goods_record");
empty($do) && $do = 'list';
if ($do == 'list') {
	//列表信息 
	$wheresql = '';
	$page = max(1, getGP('page','G','int'));
	$pagesize =$_CONFIG->config_data('pagenum');
	$offset = ($page - 1) * $pagesize;
	$url = 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'';
	if ($title = getGP('title','G')) {
		$wheresql .= " AND title LIKE '%$title%'";
		$url .= '&title='.rawurlencode($title);
	}
	//时间
	if ($number = getGP('number','G')) {
		$wheresql .= " AND number ='".$number."'";
		$url .= '&number='.rawurlencode($number);
	}
	if ($goods_type = getGP('goods_type','G')) {
		$wheresql .= " AND goods_type ='".$goods_type."'";
		$url .= '&goods_type='.rawurlencode($goods_type);
	}
	if ($type = getGP('type','G')) {
		$wheresql .= " AND type ='".$type."'";
		$url .= '&type='.rawurlencode($type);
	}
	$vuidtype = getGP('vuidtype','G');
	if(!is_superadmin() && $vuidtype==''){
		$key1 = $db->result("SELECT * FROM ".DB_TABLEPRE."office_goods_key where examination like '%".get_realname($_USER->id)."%' ");
		if($key1['examination']==''){
			$wheresql .= " AND uid = $_USER->id";
		}
		
	}
	if ($vuidtype!='') {
		$wheresql .=" ".get_subordinate($_USER->id,'uid');
		$url .= '&vuidtype='.$vuidtype;
	}
	$num = $db->result("SELECT COUNT(*) AS num FROM ".DB_TABLEPRE."office_goods_record WHERE 1 $wheresql");
     $sql = "SELECT * FROM ".DB_TABLEPRE."office_goods_record WHERE 1 $wheresql ORDER BY id desc LIMIT $offset, $pagesize";
	$result = $db->fetch_all($sql);
	include_once('template/goods_record_view.php');
}elseif ($do == 'keys') {
	
    $id = getGP('id','G','int');
	$key1 = getGP('key1','G','int');
	$office_goods_record = array(
		'type' => $key1,
		'examination' => get_realname($_USER->id)
	);
	update_db('office_goods_record',$office_goods_record, array('id' => $id));
	show_msg('办公用品信息审批成功！', 'admin.php?ac=goods_record_view&fileurl=goods&type=1');

}elseif ($do == 'excel') {
	$datename="goods_".get_date('YmdHis',PHP_TIME);
	$outputFileName = 'data/excel/'.$datename.'.xls';
		$content = array();
		$archive=array("编号","分类","名称","规格","单价","领用部门","领用人","领用数量","领用时间","审批人");
		$content[] = $archive;
		$wheresql = '';
		if ($title = getGP('title','P')) {
			$wheresql .= " AND title LIKE '%$title%'";
		}
		//时间
		if ($number = getGP('number','P')) {
			$wheresql .= " AND number ='".$number."'";
		}
		if ($goods_type = getGP('goods_type','P')) {
			$wheresql .= " AND goods_type ='".$goods_type."'";
		}
		if ($type = getGP('type','P')) {
			$wheresql .= " AND type ='".$type."'";
		}
		$vuidtype = getGP('vuidtype','P');
		if(!is_superadmin() && $vuidtype==''){
			$key1 = $db->result("SELECT * FROM ".DB_TABLEPRE."office_goods_key where examination like '%".get_realname($_USER->id)."%' ");
			if($key1['examination']==''){
				$wheresql .= " AND uid = $_USER->id";
			}
		}
		if ($vuidtype!='') {
			$wheresql .=" AND ".get_subordinate($_USER->id,'uid');
		}
		
		
		$sql = "SELECT * FROM ".DB_TABLEPRE."office_goods_record WHERE 1 $wheresql  ORDER BY id desc";
		$result = $db->query($sql);
		while ($row = $db->fetch_array($result)) {
			$archive = array(
				"".$row[number]."",
				"".get_goods_type_name($row['goods_type'])."",
				"".$row['title']."",
				"".$row['specification']."",
				"".$row['price']."RMB",
				"".get_realdepaname($row['department'])."",
				"".$row['recorduser']."",
				"".$row['recordnum'].$row['unit']."",
				"".str_replace("-",".",$row[date])."",
				"".$row['examination'].""
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