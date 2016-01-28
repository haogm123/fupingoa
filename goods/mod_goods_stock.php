<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');

get_key("office_goods_stock");
global $db;
$key1 = $db->result("SELECT * FROM ".DB_TABLEPRE."office_goods_key where warehousing like '%".get_realname($_USER->id)."%' ");
	if($key1["warehousing"]==''){
		prompt('对不起，你没有权限执行本操作！');
	}
empty($do) && $do = 'list';
if ($do == 'list') {
	//列表信息 
	$wheresql = '';
	$page = max(1, getGP('page','G','int'));
	$pagesize = $_CONFIG->config_data('pagenum');
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
	if ($type = getGP('type','G')) {
		$wheresql .= " AND goods_type ='".$type."'";
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
	$num = $db->result("SELECT COUNT(*) AS num FROM ".DB_TABLEPRE."office_goods_stock WHERE 1 $wheresql ORDER BY id desc");
     $sql = "SELECT * FROM ".DB_TABLEPRE."office_goods_stock WHERE 1 $wheresql ORDER BY id desc LIMIT $offset, $pagesize";
	$result = $db->fetch_all($sql);
	include_once('template/goods_stock.php');
} elseif ($do == 'update') {
	$idarr = getGP('id','P','array');
	foreach ($idarr as $id) {
		$db->query("DELETE FROM ".DB_TABLEPRE."office_goods_stock WHERE id = '$id'  ");	
	}
	$content=serialize($idarr);
	$title='删除办公用品库存信息';
	get_logadd($id,$content,$title,23,$_USER->id);
	show_msg('办公用品库存删除成功！', 'admin.php?ac=goods_stock&fileurl=goods');

}elseif ($do == 'excel') {
	$datename="goods_".get_date('YmdHis',PHP_TIME);
	$outputFileName = 'data/excel/'.$datename.'.xls';
		$content = array();
		$archive=array("编号","分类","名称","规格","单位","单价","数量","类型","入库时间","入库人","备注");
		$content[] = $archive;
		$wheresql = '';
		if ($title = getGP('title','P')) {
			$wheresql .= " AND title LIKE '%$title%'";
		}
		//时间
		if ($number = getGP('number','P')) {
			$wheresql .= " AND number ='".$number."'";
		}
		if ($type = getGP('type','P')) {
			$wheresql .= " AND goods_type ='".$type."'";
			$url .= '&type='.rawurlencode($type);
		}
		$vuidtype = getGP('vuidtype','P');
		if(!is_superadmin() && $vuidtype==''){
			$wheresql .= " AND uid = $_USER->id";
		}
		if ($vuidtype!='') {
			$wheresql .=" ".get_subordinate($_USER->id,'uid');
		}
		
		
		$sql = "SELECT * FROM ".DB_TABLEPRE."office_goods_stock WHERE 1 $wheresql  ORDER BY id desc";
		$result = $db->query($sql);
		while ($row = $db->fetch_array($result)) {
			if($row['type']=='1'){
				$ttype= "初始建账";
			}elseif($row['type']=='2'){
				$ttype= "采购入账";
			}elseif($row['type']=='3'){
				$ttype= "盘点";
			}
			$archive = array(
				"".$row[number]."",
				"".get_goods_type_name($row['goods_type'])."",
				"".$row['title']."",
				"".$row['specification']."",
				"".$row['unit']."",
				"".$row['price']."RMB",
				"".$row['purchase'].$row['unit']."",
				"".$ttype."",
				"".str_replace("-",".",$row[date])."",
				"".get_realname($row['uid'])."",
				"".$row['content'].""
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