<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');

get_key("office_goods_stock");

global $db;
$key1 = $db->result("SELECT * FROM ".DB_TABLEPRE."office_goods_key where warehousing like '%".get_realname($_USER->id)."%'  ");
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
	$num = $db->result("SELECT COUNT(*) AS num FROM ".DB_TABLEPRE."goods_purchase WHERE key1='2'   ORDER BY id desc");
     $sql = "SELECT * FROM ".DB_TABLEPRE."goods_purchase WHERE key1='2'  ORDER BY id desc LIMIT $offset, $pagesize";
	$result = $db->fetch_all($sql);

	include_once('template/goods_purchase_stock.php');

}elseif ($do == 'keys') {
	
    $id = getGP('id','G','int');
	global $db;
	$query = $db->query("SELECT * FROM ".DB_TABLEPRE."goods_purchase_view where goods_purchase='".$id."'   ORDER BY id Asc");
		while ($row = $db->fetch_array($query)) {
			$rsrow = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."office_goods where id=".$row[officegoods]."   ORDER BY id desc limit 0,1");
			$office_goods_stock = array(
					'officegoods' => $row['officegoods'],
					'goods_type' => $rsrow['goods_type'],
					'title' => $row['title'],
					'specification' => $row['specification'],
					'unit' => $row['unit'],
					'price' => $row['price'],
					'number' => $rsrow['number'],
					'content' => '采购入库',
					'purchase' => $row['goodsnumber'],
					'type' => 2,
					'date' =>get_date('y-m-d H:i:s',PHP_TIME),
					'uid' => $_USER->id
					);
			insert_db('office_goods_stock',$office_goods_stock);
			
		}
		//更新采购表
		$goods_purchase = array(
		'key1' => 4
		);
		update_db('goods_purchase',$goods_purchase, array('id' => $id));
		show_msg('采购信息入库成功！', 'admin.php?ac=goods_purchase_stock&fileurl=goods');

}
?>