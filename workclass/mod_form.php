<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');
get_key("workclass_admin");
$typeid=$_GET['typeid'];
$tplid=$_GET['tplid'];
$formtype=$_GET['formtype'];
$flowid=$_GET['flowid'];
empty($do) && $do = 'list';
if ($do == 'list') {
	//列表信息 
	$wheresql = '';
	$page = max(1, getGP('page','G','int'));
	$pagesize = $_CONFIG->config_data('pagenum');
	$offset = ($page - 1) * $pagesize;
	$url = 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'&typeid='.$typeid.'&tplid='.$tplid.'&formtype='.$formtype.'&flowid='.$flowid.'';
	if ($flowid !='') {
		$wheresql .= " AND flowid='".$flowid."'";
	}else{
		$wheresql .= " AND tplid='".$tplid."'";
	}
	$num = $db->result("SELECT COUNT(*) AS num FROM ".DB_TABLEPRE."workclass_from WHERE typeid='".$typeid."' ".$wheresql." and formtype='".$formtype."' ");
    $sql = "SELECT * FROM ".DB_TABLEPRE."workclass_from WHERE typeid='".$typeid."' ".$wheresql." and formtype='".$formtype."' ORDER BY inputnumber asc LIMIT $offset, $pagesize";
	$result = $db->fetch_all($sql);
	include_once('mana/form.php');

} elseif ($do == 'add') {
	if($_GET['fromid']!=''){
		if($_POST['view']!=''){
			$fromid = getGP('fromid','G');
			$fromname = check_str(getGP('fromname','P'));
			//$inputname = check_str(getGP('inputname','P'));
			$inputvalue = check_str(getGP('inputvalue','P'));
			$inputtype = getGP('inputtype','P');
			$inputtype1 = getGP('inputtype1','P');
			$inputvaluenum = check_str(getGP('inputvaluenum','P'));
			$confirmation = getGP('confirmation','P');
			$w = getGP('w','P');
			$h = getGP('h','P');
			//主表信息
			$workclass_from = array(
				'fromname' => $fromname,
				'inputvalue' => $inputvalue,
				'inputtype' => $inputtype,
				'inputtype1' => $inputtype1,
				'inputvaluenum' => $inputvaluenum,
				'confirmation' => $confirmation,
				'w' => $w,
				'h' => $h
			);
			//写入主表信息
			update_db('workclass_from',$workclass_from, array('fromid' => $fromid));
			$content=serialize($workclass_from);
			$title='编辑工作流表单';
			get_logadd($fromid,$content,$title,35,$_USER->id);
			show_msg('您要处理的信息操作成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'&tplid='.$tplid.'&flowid='.$flowid.'&typeid='.$typeid.'&formtype='.$formtype.'');
		}else{
			$fromid = getGP('fromid','G','int');
			$blog = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."workclass_from  WHERE fromid = '$fromid'  ");
			include_once('mana/form_edit.php');
		}
	}else{
		if($_POST['view']!=''){
			$fromname = check_str(getGP('fromname','P'));
			$filenumber=random(4,'0123456789').'_'.get_date('YmdHis',PHP_TIME);
			//if($formtype=='2'){
			//	$inputname = 'toa_'.$typeid.'_'.$tplid.'_'.$flowid.'_'.check_str(getGP('inputname','P'));
			//}else{
			$inputname = 'toa_'.$filenumber;
			//}
			$inputvalue = check_str(getGP('inputvalue','P'));
			$inputtype = getGP('inputtype','P');
			$inputtype1 = getGP('inputtype1','P');
			$inputvaluenum = check_str(getGP('inputvaluenum','P'));
			$confirmation = getGP('confirmation','P');
			$w = getGP('w','P');
			$h = getGP('h','P');
			//主表信息
			$workclass_from = array(
				'fromname' => $fromname,
				'inputname' => $inputname,
				'inputvalue' => $inputvalue,
				'inputtype' => $inputtype,
				'inputtype1' => $inputtype1,
				'inputvaluenum' => $inputvaluenum,
				'confirmation' => $confirmation,
				'uid' => $_USER->id,
				'tplid' => $tplid,
				'flowid' => $flowid,
				'typeid' => $typeid,
				'formtype' => $formtype,
				'w' => $w,
				'h' => $h,
				'inputnumber'=>999
			);
			//写入主表信息
			insert_db('workclass_from',$workclass_from);
			$id=$db->insert_id();
			$content=serialize($workclass_from);
			$title='添加工作流表单';
			get_logadd($id,$content,$title,35,$_USER->id);
			show_msg('您要处理的信息操作成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'&tplid='.$tplid.'&flowid='.$flowid.'&typeid='.$typeid.'&formtype='.$formtype.'');
		}else{
			include_once('mana/form_add.php');
		}
	}
} elseif ($do == '删 除') {
	$idarr = getGP('id','P','array');
	foreach ($idarr as $id) {
		$db->query("DELETE FROM ".DB_TABLEPRE."workclass_from WHERE fromid = '$id'");	
	}
	$content=serialize($idarr);
	$title='删除工作流表单';
	get_logadd($id,$content,$title,35,$_USER->id);
	show_msg('您要处理的信息操作成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'&tplid='.$tplid.'&flowid='.$flowid.'&typeid='.$typeid.'&formtype='.$formtype.'');
}elseif ($do == '排 序') {
	
	$idarr = getGP('id','P','array');
	$inputnumberarr = getGP('inputnumber','P','array');
	foreach ($idarr as $id) {
		if($inputnumberarr[$id]!='0'){
			$db->query("update ".DB_TABLEPRE."workclass_from set inputnumber='".$inputnumberarr[$id]."'  WHERE fromid = '$id' ");
		}else{
			$db->query("update ".DB_TABLEPRE."workclass_from set inputnumber='999'  WHERE fromid = '$id' ");
		}
	}
	show_msg('您要处理的信息操作成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'&tplid='.$tplid.'&flowid='.$flowid.'&typeid='.$typeid.'&formtype='.$formtype.'');

}
?>