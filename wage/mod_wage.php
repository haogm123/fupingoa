<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');
get_key("wage");
global $_CACHE;
get_cache('wage_type');
empty($do) && $do = 'list';
if ($do == 'list') {
	//列表信息 
	$wheresql = '';
	$page = max(1, getGP('page','G','int'));
	$pagesize = $_CONFIG->config_data('pagenum');
	$offset = ($page - 1) * $pagesize;
	$url = 'admin.php?ac='.$ac.'&fileurl='.$fileurl;
		if ($title = getGP('title','G')) {
			$wheresql .= " AND title LIKE '%$title%' ";
			$url .= '&title='.rawurlencode($title);
		}
		$vstartdate = getGP('vstartdate','G');
		$venddate = getGP('venddate','G');
		if ($vstartdate!='' && $venddate!='') {
			$wheresql .= " AND (date>='".$vstartdate."' and date<='".$venddate."')";
			$url .= '&vstartdate='.$vstartdate.'&venddate='.$venddate;
		}
		//权限判断
		$un = getGP('un','G');
		$ui = getGP('ui','G');
		if(!is_superadmin() && $ui==''){
			$wheresql .= " and uid='".$_USER->id."'";
		}
		if ($ui!='') {
			$wheresql .= " and uid in(".$ui.")";
			$url .= '&ui='.$ui.'&un='.$un;
		}

		$num = $db->result("SELECT COUNT(*) AS num FROM ".DB_TABLEPRE."wage WHERE 1 $wheresql  order by wid desc");
		$sql = "SELECT * FROM ".DB_TABLEPRE."wage WHERE 1 $wheresql  order by wid desc LIMIT $offset, $pagesize";
	$result = $db->fetch_all($sql);
	include_once('template/list.php');

}elseif ($do == 'add') {
	if($_POST['view']!=''){
		$wid = getGP('wid','P','int');
		if($wid!=''){
			$sdate = check_str(getGP('sdate','P'));
			$edate = check_str(getGP('edate','P'));
			$title = check_str(getGP('title','P'));
			$year = getGP('year','P');
			$month = getGP('month','P');
			$content = getGP('content','P');
			$wage = array(
				'sdate' => $sdate,
				'edate' => $edate,
				'title' => $title,
				'year' => $year,
				'month' => $month,
				'content' => $content
			);
			update_db('wage',$wage, array('wid' => $wid));
			$content='';
			$content=serialize($wage);
			$title='编辑工资表信息';
			get_logadd($id,$content,$title,36,$_USER->id);
			
		}else{
			$sdate = check_str(getGP('sdate','P'));
			$edate = check_str(getGP('edate','P'));
			$title = check_str(getGP('title','P'));
			$year = getGP('year','P');
			$month = getGP('month','P');
			$content = getGP('content','P');
			$uid=$_USER->id;
			$date = get_date('Y-m-d H:i:s',PHP_TIME);
			$wage = array(
				'sdate' => $sdate,
				'edate' => $edate,
				'year' => $year,
				'month' => $month,
				'content' => $content,
				'uid' => $uid,
				'date' => $date,
				'type' => 1,
				'title' => $title
			);
			insert_db('wage',$wage);
			$id=$db->insert_id();
			$content=serialize($wage);
			$title='新建工资表信息';
			get_logadd($id,$content,$title,36,$_USER->id);
		}
		show_msg('工资表信息操作成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'');
	}else{
		$wid = getGP('wid','G','int');
		if($wid!=''){
			$user = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."wage  WHERE wid = '$wid' ");
			$sdate=$user['sdate'];
			$edate=$user['edate'];
			$year=$user['year'];
			$month=$user['month'];
			$_title['name']='编辑';
		}else{ 
			$sdate=get_date('Y-m-d',PHP_TIME);
			$edate=get_date('Y-m-d',PHP_TIME);
			$year=get_date('Y',PHP_TIME);
			$month=get_date('m',PHP_TIME);
			$user['title']=get_date('Y',PHP_TIME).'年'.get_date('m',PHP_TIME).'月 工资表';
			$_title['name']='发布';
		}
		include_once('template/wageadd.php');
	}
}elseif ($do == 'type') {
	$db->query("update ".DB_TABLEPRE."wage set type='".$_GET['type']."' where wid = '".getGP('wid','G')."'");
	show_msg('工资表信息操作成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'');

}elseif ($do == 'view') {
	$sql = "SELECT * FROM ".DB_TABLEPRE."wage  WHERE wid = '".$_GET['wid']."'";
	$row = $db->fetch_one_array($sql);
	$sql = "SELECT * FROM ".DB_TABLEPRE."wage_log  WHERE wid = '".$row['wid']."' order by lid asc";
	$result = $db->fetch_all($sql);
	include_once('template/view.php');
}elseif ($do == 'update') {
	get_key("wage_delete");
	$idarr = getGP('id','P','array');
	foreach ($idarr as $id) {
		$db->query("DELETE FROM ".DB_TABLEPRE."wage WHERE wid = '$id' ");
		$db->query("DELETE FROM ".DB_TABLEPRE."wage_log where wid = '$id' ");
		$db->query("DELETE FROM ".DB_TABLEPRE."wage_data WHERE wid = '".$id."' and type=2");
	}
	$content=serialize($idarr);
	$title='删除工资表';
	get_logadd($id,$content,$title,36,$_USER->id);
	show_msg('工资表删除成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl);

}elseif ($do == 'down') {
	get_key("excel_51");
	$datename="wage_".get_date('YmdHis',PHP_TIME);
	$outputFileName = 'data/excel/'.$datename.'.xls';
			$sql = "SELECT * FROM ".DB_TABLEPRE."wage  WHERE wid = '".$_GET['wid']."'";
			$row = $db->fetch_one_array($sql);
			$sql = "SELECT * FROM ".DB_TABLEPRE."wage_log  WHERE wid = '".$row['wid']."' order by lid asc";
			$result = $db->fetch_all($sql);
			//获取表单
			$archive = array();
			$inputname = array();
			$archive[]="<b>姓名</b>";
			$num=0;
			foreach ( $_CACHE['wage_type'] as $type) {
				$archive[]="<b>".$type['name']."</b>";
			}
			$archive[]="<b>备注</b>";
			$content = array();
			$content[] = $archive;
			foreach ($result as $log) {	
				$archive = array();
				$archive[]=$log['name'];
				foreach ( $_CACHE['wage_type'] as $type) {
					$wdb = $db->fetch_one_array("SELECT content FROM ".DB_TABLEPRE."wage_data  WHERE type=2 and viewid='".$log['lid']."' and tid='".$type['tid']."' and wid='".$row['wid']."'");	
					$archive[]=$wdb['content'];
				}
				
				$archive[]=trim($log['content']);
				$content[] = $archive;
		}
	$excel = new ExcelWriter($outputFileName);
	if($excel==false) 
		echo $excel->error; 
	foreach($content as $v){
		$excel->writeLine($v);
	}
	$excel->sendfile($outputFileName);
}elseif ($do == 'log') {
	if(getGP('view','P')=='save'){
		$wage_log = array(
			'uid' => getGP('uid','P'),
			'username' => getGP('username','P'),
			'name' => getGP('name','P'),
			'content' => getGP('content','P'),
			'wid' => getGP('wid','P')
			);
		insert_db('wage_log',$wage_log);
		$vid=$db->insert_id();
		foreach ( $_CACHE['wage_type'] as $type) {
			$wage_data = array(
				'viewid' => $vid,
				'tid' => $type['tid'],
				'name' => $type['name'],
				'content' => getGP('type_'.$type['tid'].'','P'),
				'type' => 2,
				'wid'=> getGP('wid','P'),
				'uid'=> getGP('uid','P')
				);
			insert_db('wage_data',$wage_data);
		}
		$content=serialize($wage_type);
		$title='添加薪资数据信息';
		get_logadd($id,$content,$title,36,$_USER->id);
		show_msg('人员工资信息操作成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'&do=log&wid='.getGP('wid','P').'&uid='.getGP('uid','P'));
	}
	$wage = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."wage  WHERE wid='".$_GET['wid']."'");
	if($_GET['uid']!='' && $_GET['wid']!=''){
		$row = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."wage_log  WHERE uid = '".$_GET['uid']."' and wid='".$_GET['wid']."'");
		$viewtype=2;
		$viewid=$row['lid'];
		if($row['uid']==''){
			$row = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."wage_basis  WHERE uid = '".$_GET['uid']."'");
			$viewtype=1;
			$viewid=$row['bid'];
		}
	}
	//$sql = "SELECT a.*,b.name FROM ".DB_TABLEPRE."user a,".DB_TABLEPRE."user_view b where  a.ischeck!=0 and a.id!=1 and a.id=b.uid ORDER BY a.numbers asc";
	//$result = $db->fetch_all($sql);
	include_once('template/log.php');
}elseif ($do == 'excel') {
	$datename="wage_".get_date('YmdHis',PHP_TIME);
	//$outputFileName = 'data/excel/'.$datename.'.cvs';
			//获取表单
			$archive="ID,姓名";
			foreach ( $_CACHE['wage_type'] as $type) {
				$archive.=",".$type['name']."";
			}
			$archive.=",备注\n";
			$sql = "SELECT a.id,b.name FROM ".DB_TABLEPRE."user a,".DB_TABLEPRE."user_view b where  a.ischeck!=0 and a.id!=1 and a.id=b.uid ORDER BY a.numbers asc";
			$result = $db->query($sql);
			while ($row = $db->fetch_array($result)) {
				$basis = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."wage_basis  WHERE uid = '".$row['id']."'");
				$archive.=$row['id'].",".$row['name'];
				foreach ( $_CACHE['wage_type'] as $type) {
					$wdb = $db->fetch_one_array("SELECT content FROM ".DB_TABLEPRE."wage_data  WHERE type=1 and viewid='".$basis['bid']."' and tid='".$type['tid']."'");
					$archive.=",".$wdb['content'];
				}
				
				$archive.=",备注\n";
				
		  }
		  $archive=iconv('UTF-8','GB2312',$archive);
	header("Content-type:text/csv"); 
	header("Content-Disposition:attachment;filename=".$datename.".csv"); 
	header('Cache-Control:must-revalidate,post-check=0,pre-check=0'); 
	header('Expires:0'); 
	header('Pragma:public');
	echo $archive;
}elseif ($do == 'logadd') {
	if(getGP('view','P')=='save'){
		$handle = fopen(getGP('address','P'), 'r');
		$result = input_csv($handle); //解析csv
		$len_result = count($result);
		if($len_result==0){
			echo '没有任何数据！';
			exit;
		}
		$wid=getGP('wid','P');
		for ($i = 1; $i < $len_result; $i++) { //循环获取各字段值
			if($result[$i][0]!=''){
				$db->query("DELETE FROM ".DB_TABLEPRE."wage_log WHERE uid = '".$result[$i][0]."' and wid=".$wid." ");
				$db->query("DELETE FROM ".DB_TABLEPRE."wage_data WHERE uid = '".$result[$i][0]."' and wid=".$wid." and type=2");    
				$user = $db->fetch_one_array("SELECT username FROM ".DB_TABLEPRE."user WHERE id = '".$result[$i][0]."'");
				$wage_log = array(
					'uid' => $result[$i][0],
					'username' => $user['username'],
					'name' => mb_convert_encoding($result[$i][1],"UTF-8","GB2312"),
					'wid' => $wid
					);
				insert_db('wage_log',$wage_log);
				$vid=$db->insert_id();
				$s=1;
				foreach ( $_CACHE['wage_type'] as $type) {
				$s++;
					$wage_data = array(
						'viewid' => $vid,
						'tid' => $type['tid'],
						'name' => $type['name'],
						'content' => mb_convert_encoding($result[$i][$s],"UTF-8","GB2312"),
						'type' => 2,
						'uid' => $result[$i][0],
						'wid' => $wid
						);
					insert_db('wage_data',$wage_data);
				}
			}
			//echo $result[$i][0].'<br>';
		}
		fclose($handle); //关闭指针
		echo    '导入成功';
		exit;
		//show_msg('人员工资信息导入成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'&do=log&wid='.getGP('wid','P'));
	}
	include_once('template/excel.php');
}elseif ($do == 'sms') {
	if($_POST['view']!=''){
		$uid = getGP('uid','P','array');
		$name = getGP('name','P','array');
		$content = getGP('content','P','array');
		foreach ($uid as $id) {
			SMS_ADD_POST($name[$id],$content[$id],0,0,$_USER->id);
		}
		show_msg('工资条发送成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'&do=sms&wid='.$name = getGP('wid','P'));
	}else{
		$sql = "SELECT * FROM ".DB_TABLEPRE."wage  WHERE wid = '".$_GET['wid']."'";
		$row = $db->fetch_one_array($sql);
		$sql = "SELECT * FROM ".DB_TABLEPRE."wage_log  WHERE wid = '".$row['wid']."' order by lid asc";
		$result = $db->fetch_all($sql);
		include_once('template/sms.php');
	}
}
?>