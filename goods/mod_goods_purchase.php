<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');
$ischeck=$_GET['ischeck'];
if($_GET['ischeck']==' '){
	$_check['ischeck']='  ui-tab-trigger-item-current';
}else{
	$_check['ischeck'.$_GET['ischeck']]='  ui-tab-trigger-item-current';
}
get_key("goods_purchase");
empty($do) && $do = 'list';
if ($do == 'list') {
	//列表信息 
	$wheresql = '';
	$page = max(1, getGP('page','G','int'));
	$pagesize = $_CONFIG->config_data('pagenum');
	$offset = ($page - 1) * $pagesize;
	$url = 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'';
	if ($number = getGP('number','G')) {
		$wheresql .= " AND number ='".$number."'";
	}
	//时间
	$vstartdate = getGP('vstartdate','G');
	$venddate = getGP('venddate','G');
	if ($vstartdate!='' && $venddate!='') {
		$wheresql .= " AND (startdate>='".$vstartdate."' and startdate<='".$venddate."')";
		$url .= '&vstartdate='.$vstartdate.'&venddate='.$venddate;
	}
	$vuidtype = getGP('vuidtype','G');
	if(!is_superadmin() && $vuidtype==''){
		$key1 = $db->result("SELECT * FROM ".DB_TABLEPRE."office_goods_key where examination like '%".get_realname($_USER->id)."%' ");
		if($key1['examination']==''){
			$wheresql .= " AND (uid = '".$_USER->id."' or purchase like '%".get_realname($_USER->id)."%')";
		}
	}
	if ($vuidtype!='') {
		$wheresql .=" ".get_subordinate($_USER->id,'uid');
		$url .= '&vuidtype='.$vuidtype;
	}
	if ($ischeck!='') {
		$wheresql .= " AND key1='".$ischeck."'";
		$url .= '&ischeck='.rawurlencode($ischeck);
	}
	$num = $db->result("SELECT COUNT(*) AS num FROM ".DB_TABLEPRE."goods_purchase WHERE 1 $wheresql ORDER BY id desc");
     $sql = "SELECT * FROM ".DB_TABLEPRE."goods_purchase WHERE 1 $wheresql ORDER BY id desc LIMIT $offset, $pagesize";
	$result = $db->fetch_all($sql);
	include_once('template/goods_purchase.php');

} elseif ($do == 'update') {
	
	$idarr = getGP('id','P','array');
	foreach ($idarr as $id) {
		$db->query("DELETE FROM ".DB_TABLEPRE."goods_purchase WHERE id = '$id'  ");
		$db->query("DELETE FROM ".DB_TABLEPRE."goods_purchase_view WHERE goods_purchase= '$id'  ");	
	}
	$content=serialize($idarr);
	$title='删除办公用品采购信息';
	get_logadd($id,$content,$title,23,$_USER->id);
	show_msg('办公用品采购信息删除成功！', 'admin.php?ac=goods_purchase&fileurl=goods');

}elseif ($do == 'keys') {
	
    $id = getGP('id','G','int');
	$key1 = getGP('key1','G','int');
	$goods_purchase = array(
		'key1' => $key1,
		'examination' => get_realname($_USER->id),
		'keydate' => get_date('Y-m-d H:i:s',PHP_TIME)
	);
	update_db('goods_purchase',$goods_purchase, array('id' => $id));
	show_msg('办公用品采购信息审批成功！', 'admin.php?ac=goods_purchase&fileurl=goods&key1='.$_GET["key1"].'');

}elseif ($do == 'excel') {
	$datename="goods_".get_date('YmdHis',PHP_TIME);
	$outputFileName = 'data/excel/'.$datename.'.xls';
		$content = array();
		$archive=array("编号","申请人","申请日期","金额合计","审批人","采购人","审批时间","状态","发布人","采购产品清单");
		$content[] = $archive;
		$wheresql = '';
		if ($number = getGP('number','P')) {
			$wheresql .= " AND number ='".$number."'";
		}
		//时间
		$vstartdate = getGP('vstartdate','P');
		$venddate = getGP('venddate','P');
		if ($vstartdate!='' && $venddate!='') {
			$wheresql .= " AND (startdate>='".$vstartdate."' and startdate<='".$venddate."')";
		}
		$vuidtype = getGP('vuidtype','P');
		if(!is_superadmin() && $vuidtype==''){
			$key1 = $db->result("SELECT * FROM ".DB_TABLEPRE."office_goods_key where examination like '%".get_realname($_USER->id)."%' ");
			if($key1['examination']==''){
				$wheresql .= " AND (uid = '".$_USER->id."' or purchase like '%".get_realname($_USER->id)."%')";
			}
		}
		if ($vuidtype!='') {
			$wheresql .=" ".get_subordinate($_USER->id,'uid');
		}
		
		
		$ischeck = getGP('ischeck','P');
		if ($ischeck!='') {
			$wheresql .= " AND key1='".$ischeck."'";
		}
		$sql = "SELECT * FROM ".DB_TABLEPRE."goods_purchase WHERE 1 $wheresql  ORDER BY id desc";
		$result = $db->query($sql);
		while ($row = $db->fetch_array($result)) {
			if($row['key1']=='1'){
				$type= "待审";
			}elseif($row['key1']=='2'){
				$type= "通过";
			}elseif($row['key1']=='3'){
				$type= "拒绝";
			}elseif($row['key1']=='4'){
				$type= "己入库";
			}	
			$archive = array(
				"".$row[number]."",
				"".$row[application]."",
				"".str_replace("-",".",$row[startdate])."",
				"".$row[pricenum]."RMB",
				"".$row[examination]."",
				"".$row[purchase]."",
				"".str_replace("-",".",$row[keydate])."",
				"".$type."",
				"".get_realname($row['uid'])."",
				"".get_goods_purchase_view($row['id']).""
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