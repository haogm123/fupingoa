<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');
get_key("project_config");
$typeid=$_GET['typeid'];
$tplid=$_GET['tplid'];
$modid=$_GET['modid'];
$formtype=$_GET['formtype'];
empty($do) && $do = 'list';
if ($do == 'list') {
	//列表信息 
	$wheresql = '';
	$page = max(1, getGP('page','G','int'));
	$pagesize = $_CONFIG->config_data('pagenum');
	$offset = ($page - 1) * $pagesize;
	$url = 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'&typeid='.$typeid.'&tplid='.$tplid.'&formtype='.$formtype.'&flowid='.$_GET['flowid'].'&formtypes='.$_GET['formtypes'].'';
	if($_GET['flowid']!=''){
		$wheresql .= " AND tplid='".$_GET['flowid']."'";
	}else{
		if ($tplid !='') {
			$wheresql .= " AND tplid='".$tplid."'";
		}
	}
	$num = $db->result("SELECT COUNT(*) AS num FROM ".DB_TABLEPRE."project_from WHERE typeid='".$typeid."' ".$wheresql." and formtype='".$formtype."' ");
    $sql = "SELECT * FROM ".DB_TABLEPRE."project_from WHERE typeid='".$typeid."' ".$wheresql." and formtype='".$formtype."' ORDER BY fromid asc LIMIT $offset, $pagesize";
	$result = $db->fetch_all($sql);
	include_once('mana/form.php');

} elseif ($do == 'add') {
	if($_GET['fromid']!=''){
		if($_POST['view']!=''){
			$fromid = getGP('fromid','G');
			$fromname = check_str(getGP('fromname','P'));
			$inputname = check_str(getGP('inputname','P'));
			$inputvalue = check_str(getGP('inputvalue','P'));
			$inputtype = getGP('inputtype','P');
			$inputtype1 = getGP('inputtype1','P');
			$inputvaluenum = check_str(getGP('inputvaluenum','P'));
			$confirmation = getGP('confirmation','P');
			//主表信息
			$project_from = array(
				'fromname' => $fromname,
				'inputname' => $inputname,
				'inputvalue' => $inputvalue,
				'inputtype' => $inputtype,
				'inputtype1' => $inputtype1,
				'inputvaluenum' => $inputvaluenum,
				'confirmation' => $confirmation
			);
			//写入主表信息
			update_db('project_from',$project_from, array('fromid' => $fromid));
			$content=serialize($project_from);
			$title='编辑项目表单';
			get_logadd($fromid,$content,$title,32,$_USER->id);
			show_msg('您要处理的信息操作成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'&tplid='.$tplid.'&typeid='.$typeid.'&formtype='.$formtype.'&flowid='.$_GET['flowid'].'&formtypes='.$_GET['formtypes'].'');
		}else{
			$fromid = getGP('fromid','G','int');
			$blog = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."project_from  WHERE fromid = '$fromid'  ");
			include_once('mana/form_edit.php');
		}
	}else{
		if($_POST['view']!=''){
			$fromname = check_str(getGP('fromname','P'));
			if($formtype=='2'){
				$inputname = '_'.$typeid.'_'.$tplid.'_'.$formtype.'_'.check_str(getGP('inputname','P'));
			}else{
				$inputname = '_'.$typeid.'_'.$tplid.'_'.$formtype.'_'.check_str(getGP('inputname','P'));
			}
			$inputvalue = check_str(getGP('inputvalue','P'));
			$inputtype = getGP('inputtype','P');
			$inputtype1 = getGP('inputtype1','P');
			$inputvaluenum = check_str(getGP('inputvaluenum','P'));
			$confirmation = getGP('confirmation','P');
			if($_GET['flowid']!=''){
				$tplids=$_GET['flowid'];
			}else{
				$tplids=$tplid;
			}
			//主表信息
			$project_from = array(
				'fromname' => $fromname,
				'inputname' => $inputname,
				'inputvalue' => $inputvalue,
				'inputtype' => $inputtype,
				'inputtype1' => $inputtype1,
				'inputvaluenum' => $inputvaluenum,
				'confirmation' => $confirmation,
				'uid' => $_USER->id,
				'tplid' => $tplids,
				'typeid' => $typeid,
				'formtype' => $formtype
			);
			//写入主表信息
			insert_db('project_from',$project_from);
			$id=$db->insert_id();
			$content=serialize($project_from);
			$title='添加项目表单';
			get_logadd($id,$content,$title,32,$_USER->id);
			show_msg('您要处理的信息操作成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'&tplid='.$tplid.'&typeid='.$typeid.'&formtype='.$formtype.'&flowid='.$_GET['flowid'].'&formtypes='.$_GET['formtypes'].'');
		}else{
			include_once('mana/form_add.php');
		}
	}
} elseif ($do == 'update') {
	$idarr = getGP('id','P','array');
	foreach ($idarr as $id) {
		$db->query("DELETE FROM ".DB_TABLEPRE."project_from WHERE fromid = '$id'");	
	}
	$content=serialize($idarr);
	$title='删除项目表单';
	get_logadd($id,$content,$title,32,$_USER->id);
	show_msg('您要处理的信息操作成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'&tplid='.$tplid.'&typeid='.$typeid.'&formtype='.$formtype.'&flowid='.$_GET['flowid'].'&formtypes='.$_GET['formtypes'].'');
}
?>