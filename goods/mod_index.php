<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');
get_key("office_goods");
empty($do) && $do = 'list';
if ($do == 'list') {
	//列表信息 
	$wheresql = '';
	$page = max(1, getGP('page','G','int'));
	$pagesize = $_CONFIG->config_data('pagenum');
	$offset = ($page - 1) * $pagesize;
	$url = 'admin.php?ac=index&fileurl=goods';

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
	
	

	$num = $db->result("SELECT COUNT(*) AS num FROM ".DB_TABLEPRE."office_goods WHERE 1 $wheresql");
     $sql = "SELECT * FROM ".DB_TABLEPRE."office_goods WHERE 1 $wheresql ORDER BY id desc LIMIT $offset, $pagesize";
	$result = $db->fetch_all($sql);

	include_once('template/index.php');

} elseif ($do == 'update') {

//if (check_purview('file_type_delete')!='1')
//{
// prompt('对不起，你没有权限执行本操作！');
//}
	
	$idarr = getGP('id','P','array');
	foreach ($idarr as $id) {
		$db->query("DELETE FROM ".DB_TABLEPRE."office_goods WHERE id = '$id'  ");
		$db->query("DELETE FROM ".DB_TABLEPRE."goods_purchase_view WHERE officegoods= '$id'  ");
		$db->query("DELETE FROM ".DB_TABLEPRE."office_goods_stock WHERE officegoods= '$id'  ");
		$db->query("DELETE FROM ".DB_TABLEPRE."office_goods_record WHERE officegoods= '$id'  ");
			
	}
	$content=serialize($idarr);
	$title='删除办公用品信息';
	get_logadd($id,$content,$title,23,$_USER->id);
	show_msg('办公用品信息删除成功！', 'admin.php?ac=index&fileurl=goods');

}elseif ($do == 'excel') {
	$datename="goods_".get_date('YmdHis',PHP_TIME);
	$outputFileName = 'data/excel/'.$datename.'.xls';
		$content = array();
		$archive=array("编号","分类","名称","规格","单位","单价","库存","描述","发布时间","发布人");
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
		}
		$vuidtype = getGP('vuidtype','P');
		if(!is_superadmin() && $vuidtype==''){
			$wheresql .= " AND uid = $_USER->id";
		}
		if ($vuidtype!='') {
			$wheresql .=" ".get_subordinate($_USER->id,'uid');
		}
		
		
		$sql = "SELECT * FROM ".DB_TABLEPRE."office_goods WHERE 1 $wheresql  ORDER BY id desc";
		$result = $db->query($sql);
		while ($row = $db->fetch_array($result)) {
			$key1 = $db->fetch_one_array("SELECT sum(purchase) as purchase FROM ".DB_TABLEPRE."office_goods_stock WHERE officegoods='".$row["id"]."'  ");
			$key2 = $db->fetch_one_array("SELECT sum(recordnum) as recordnum FROM ".DB_TABLEPRE."office_goods_record WHERE officegoods='".$row["id"]."' and (type='1' or type='3')  ");
			$num_read=$key1[purchase]-$key2[recordnum];	
			$archive = array(
				"".$row[number]."",
				"".get_goods_type_name($row['goods_type'])."",
				"".$row['title']."",
				"".$row['specification']."",
				"".$row['unit']."",
				"".$row['price']."RMB",
				"".$row['num_read'].$row['unit']."",
				"".$row['content']."",
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