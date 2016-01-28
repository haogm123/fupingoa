<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<link rel="stylesheet" type="text/css" href="template/default/content/css/style.css">
<link href="template/webui/ligerUI/skins/Aqua/css/ligerui-all.css" rel="stylesheet" type="text/css" />
<script src="template/webui/jquery/jquery-1.3.2.min.js" type="text/javascript"></script>   
<script src="template/webui/ligerUI/js/ligerui.min.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript" src="template/default/content/js/common.js"></script>
<script language="javascript" type="text/javascript" src="DatePicker/WdatePicker.js"></script>
<title>Office 515158 2011 OA办公系统</title>
<script type="text/javascript">
$(function (){
	$("#accordion1").ligerAccordion();
});
</script> 
</head>
<body class="bodycolor">
<div id="navPanel">
  <div id="navMenu">
  <?php if($mod['key2']==1){?>
    <a href="admin.php?ac=<?php echo $ac;?>&fileurl=<?php echo $fileurl;?>&type=1&modid=<?php echo $modid;?>&projectid=<?php echo $projectid;?>&typeid=<?php echo $typeid;?>" <?php if($_GET['type']==1){?> class="active"<?php }?>><span><img src="template/default/content/images/p1.gif" width="16" height="16" align="absmiddle"><?php echo $mod['modname']?>审批</span></a>
	<a href="admin.php?ac=<?php echo $ac;?>&fileurl=<?php echo $fileurl;?>&type=3&modid=<?php echo $modid;?>&projectid=<?php echo $projectid;?>&typeid=<?php echo $typeid;?>" <?php if($_GET['type']==3){?> class="active"<?php }?>><span><img src="template/default/content/images/p2.gif" width="16" height="16" align="absmiddle"><?php echo $mod['modname']?>管理</span></a>
	<?php }?>
	<a href="admin.php?ac=<?php echo $ac;?>&fileurl=<?php echo $fileurl;?>&modid=<?php echo $modid;?>&projectid=<?php echo $projectid;?>&typeid=<?php echo $typeid;?>" <?php if($_GET['type']==''){?> class="active"<?php }?>><span><img src="template/default/content/images/p3.gif" width="16" height="16" align="absmiddle"><?php echo $mod['modname']?>信息列表</span></a>
	<a href="admin.php?ac=charts&fileurl=<?php echo $fileurl;?>&modid=<?php echo $modid;?>&projectid=<?php echo $projectid;?>&typeid=<?php echo $typeid;?>&do=mod" ><span><img src="template/default/content/images/p4.gif" width="16" height="16" align="absmiddle">报表与统计</span></a>
  </div>
  <form method="get" action="admin.php" name="topSearchForm" class="ui-grid-21 ui-grid-right ui-form" style=" margin-top:3px;">
		<input type="hidden" name="ac" value="<?php echo $ac?>" />
		<input type="hidden" name="do" value="list" />
		<input type="hidden" name="fileurl" value="<?php echo $fileurl?>" />
		<input type="hidden" name="type" value="<?php echo $_GET['type']?>" />
		<input type="hidden" name="modid" value="<?php echo $modid?>" />
		<input type="hidden" name="projectid" value="<?php echo $projectid?>" />
		<input type="hidden" name="typeid" value="<?php echo $typeid?>" />
		流水单号：<input type="text" name="number" size="15"
	value="<?php echo urldecode($number)?>" class="SmallInput" onClick="searchtpl();" />&nbsp;&nbsp;<?php echo $mod['modname']?>名称：<input type="text" name="title" size="15"
	value="<?php echo urldecode($title)?>" class="SmallInput" />&nbsp;&nbsp;起止日期：<input type="text" value="<?php echo $vstartdate?>"  style="width:80px;" readonly="readonly"  onClick="WdatePicker();" name='vstartdate' > - <input type="text" value="<?php echo $venddate?>"  style="width:80px;" readonly="readonly"  onClick="WdatePicker();" name='venddate' >&nbsp;&nbsp;<input
	type="submit" value="查 询" class="SmallButton" />


 </form>
</div>
<table width="98%" border="0" align="center" cellpadding="3" cellspacing="0" class="small">
  <tr>
    <td class="Big" style="font-size:12px;"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3">
	<a href="admin.php?ac=list&do=view&fileurl=<?php echo $fileurl?>&projectid=<?php echo $projectid?>"><?php echo public_value('title','project','id='.$projectid);?></a>&nbsp;&nbsp;&nbsp;&nbsp;
	<?php echo $mod['modname']?>信息列表</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<span style="font-size:12px; float:right; margin-right:50px;">
	<a href="admin.php?ac=list&fileurl=<?php echo $fileurl?>&do=view&projectid=<?php echo $projectid;?>" style="font-size:12px;"><< 返回项目管理</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="button" value="新增信息" class="BigButtonBHover" onClick="javascript:window.location='admin.php?ac=modadd&fileurl=<?php echo $fileurl?>&modid=<?php echo $modid;?>&projectid=<?php echo $projectid;?>&typeid=<?php echo $typeid;?>'">
	</span>
    </td>
  </tr>
</table>
<div style="position:absolute; height:82%; width:100%;overflow:auto"> 
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" style="padding-top:15px;width:200px;padding-left:5px;">
	<style type="text/css">
        #accordion1{height:300px;overflow:hidden;}
    </style>
	<div id="accordion1"> 
	<?php
	global $db;
	$query = $db->query("SELECT mid,modname,key3 FROM ".DB_TABLEPRE."project_model where typeid='".$typeid."' and mid!='".$_GET['modid']."' ORDER BY mid Asc");
	while ($leftmod = $db->fetch_array($query)) {
	if($mod['key3']==0){
		$key3='mod';
	}else{
		$key3='tpl';
	}
	?>
     <div title="<?php echo $leftmod['modname'];?>" style="line-height:22px; padding-left:5px;">
       
             <?php
			$query2 = $db->query("SELECT * FROM ".DB_TABLEPRE."project_log where typeid='".$typeid."' and modid='".$leftmod['mid']."' and projectid='".$projectid."' ORDER BY lid desc");
			while ($leftlog = $db->fetch_array($query2)) {
			?>
           • <a href="admin.php?ac=<?php echo $key3;?>list&do=view&fileurl=<?php echo $fileurl;?>&lid=<?php echo $leftlog['lid']?>&modid=<?php echo $leftlog['modid']?>&projectid=<?php echo $leftlog['projectid']?>&typeid=<?php echo $leftlog['typeid']?>&tplid=<?php echo $leftlog['tplid']?>"><?php echo $leftlog['title'];?></a><br>
			<?php }?>
        
        </div>
	<?php }?>
	  </div>
	</td>
    <td valign="top">
<!--右边开始-->


<form name="update" method="post" action="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&type=<?php echo $_GET['type']?>&modid=<?php echo $modid;?>&projectid=<?php echo $projectid;?>&typeid=<?php echo $typeid;?>">
<input type="hidden" name="do" value="update"/>
<table class="TableBlock" border="0" width="100%" align="center">
	<tr>
      <td nowrap class="TableHeader" width="50">选项</td>
      <td width="100" class="TableHeader">流水单号</td>
      <td class="TableHeader">名称</td>
      <td width="90" align="center" class="TableHeader">发起人</td>
      <td width="90" align="center" class="TableHeader">发起时间</td>
	  <?php if($mod['key2']==1){?>
      <td width="150" class="TableHeader">审批步骤</td>
	  
      <td width="180" align="center" class="TableHeader">操作</td>
	  <?php }?>
    </tr>
<?php
foreach ($result as $row) {
$sql = "SELECT * FROM ".DB_TABLEPRE."project_personnel  WHERE projectid = '".$row['lid']."'  and (pertype=0 or pertype=2 or pertype=4 or pertype=5) and typeid='".$row['typeid']."' and appkey2=2  order by perid desc";
$per = $db->fetch_one_array($sql);
?>
	<tr>
      <td nowrap class="TableContent" width="5%">
<?php
if(!is_superadmin()){
	if($_GET['type']==3){
		if($per['pertype']==0 || $per['pertype']==2 || $row['type']==1){
			echo '<input type="checkbox" name="id[]" value="'.$row['lid'].'" class="checkbox" />';
		}else{
			echo '<input type="checkbox" name="id[]" value="'.$row['lid'].'" class="checkbox" disabled="disabled" />';
		}
	}elseif($_GET['type']==''){
		if($row['uid']==$_USER->id && ($per['pertype']==0 || $per['pertype']==2 || $row['type']==1)){
			echo '<input type="checkbox" name="id[]" value="'.$row['lid'].'" class="checkbox" />';
		}else{
			echo '<input type="checkbox" name="id[]" value="'.$row['lid'].'" class="checkbox" disabled="disabled" />';
		}
	}else{
		echo '<input type="checkbox" name="id[]" value="'.$row['lid'].'" class="checkbox"  disabled="disabled"/>';
	}
}else{
	echo '<input type="checkbox" name="id[]" value="'.$row['lid'].'" class="checkbox" />';
}
?>
	  
</td>
<td class="TableData"><?php echo $row['number']?></td>
 <td class="TableData"><a href="admin.php?ac=<?php echo $ac?>&do=view&fileurl=<?php echo $fileurl?>&lid=<?php echo $row['lid']?>&modid=<?php echo $modid;?>&projectid=<?php echo $projectid;?>&typeid=<?php echo $typeid;?>"><?php echo $row['title']?></a></td>
      <td align="center" class="TableData"><?php echo get_realname($row['uid'])?></td>
      <td align="center" class="TableData"><?php echo str_replace(' ','<br>',$row['date'])?></td>
	  <?php if($mod['key2']==1){?>
		  <td align="left" class="TableData">
		  <?php
		  $perkey=$per['pertype'];
		  if($per['pertype']==5){
			  echo '<font color=red>'.$mod['modname'].'流程结束</font>';
		  }elseif($per['pertype']==2){
			  echo '<font color=red>'.$mod['modname'].'流程被拒绝</font>';
		  }else{
			  $sql = "SELECT * FROM ".DB_TABLEPRE."project_flow  WHERE fid = '".$per['flowid']."' and flowkey4=2 order by fid desc";
			  $flow = $db->fetch_one_array($sql);
			  if($flow['flownum']!=''){
				  echo '<b>第<span style="font-size:18px; font-weight:bold; color:#FF0000;">'.$flow['flownum'].'</span>步：'.$flow['flowname'].'</b><br>';
				  echo '审批人：'.$per['name'];
			  }
		  }
		  ?>
		  </td>
	  
      <td align="center" class="TableData">
	  <?php
	  if($row['type']==1){
		  echo $mod['modname'].'己撤消';
	  }else{
			  //审批
			  $sql = "SELECT * FROM ".DB_TABLEPRE."project_personnel where name like '%".get_realname($_USER->id)."%' and (pertype=0 or pertype=4) and typeid='".$row['typeid']."' and projectid='".$row['lid']."' and appkey2=2 order by perid desc";
			  $per = $db->fetch_one_array($sql);
			  if($per['perid']!=''){
				  if($per['appkey']==1 && $per['appkey1']==1){
					  $perlnum = $db->result("SELECT COUNT(*) AS perlnum FROM ".DB_TABLEPRE."project_personnel_log where perid='".$per['perid']."' and uid='".$_USER->id."' and pertype=0 and appkey2=2");
					  if($perlnum>0){
						  echo '<a href="admin.php?ac='.$ac.'&do=personnel&fileurl='.$fileurl.'&lid='.$row['lid'].'&modid='.$modid.'&projectid='.$projectid.'&typeid='.$typeid.'">审批</a> | ';
					  }
				  }else{
					  echo '<a href="admin.php?ac='.$ac.'&do=personnel&fileurl='.$fileurl.'&lid='.$row['lid'].'&modid='.$modid.'&projectid='.$projectid.'&typeid='.$typeid.'">审批</a> | ';
				  }
			  }
		  //撤消
		  if($_GET['type']==3){
			  if($perkey!=5 && $perkey!=2){
				  echo '<a href="admin.php?ac='.$ac.'&do=workkey&fileurl='.$fileurl.'&lid='.$row['lid'].'&modid='.$modid.'&projectid='.$projectid.'&typeid='.$typeid.'">撤消</a> | ';
			  }
		  }elseif($_USER->id==$row['uid'] && $perkey!=5 && $perkey!=2){
			  echo '<a href="admin.php?ac='.$ac.'&do=workkey&fileurl='.$fileurl.'&lid='.$row['lid'].'&modid='.$modid.'&projectid='.$projectid.'&typeid='.$typeid.'">撤消</a> | ';
		  }
		  echo '<a href="admin.php?ac='.$ac.'&do=view&fileurl='.$fileurl.'&lid='.$row['lid'].'&modid='.$modid.'&projectid='.$projectid.'&typeid='.$typeid.'">查看</a> | ';
		  echo '<a href="#" ';
		  echo 'onClick="window.open (';
		  echo "'admin.php?ac=".$ac."&fileurl=".$fileurl."&do=flow&lid=".$row['lid']."&test=".$filenumber."&modid=".$modid."&projectid=".$projectid."&typeid=".$typeid."', 'newwindow', 'height=550, width=500, top=6, right=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=no, status=no')";
		  echo '">审批记录</a>';
	 }
	 ?>

	  </td>
	  <?php }?>
    </tr>
	
<?php } ?>	

	
    <tr align="center" class="TableControl">
      <td height="35" colspan="8" align="left" nowrap>
        <input type="checkbox" class="checkbox" value="1" name="chkall" onClick="check_all(this)" /><b>全选</b>&nbsp;&nbsp;&nbsp;&nbsp;<img src="template/default/content/images/ico-1.png" align="absmiddle">
						  <a href="javascript:document:update.submit();">清理数据</a> &nbsp;&nbsp;
						  <?php
						if($_GET['type']==''){
						   echo get_exceldown('excel_37');
						}?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo showpage($num,$pagesize,$page,$url)?>
</td>
    </tr>
  </table>
</form>

	<form name="excel" method="post" action="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&modid=<?php echo $modid;?>&projectid=<?php echo $projectid;?>&typeid=<?php echo $typeid;?>">
		<input type="hidden" name="title" value="<?php echo $title?>" />
		<input type="hidden" name="number" value="<?php echo $number?>" />
		<input type="hidden" name="modid" value="<?php echo $modid?>" />
		<input type="hidden" name="projectid" value="<?php echo $projectid?>" />
		<input type="hidden" name="typeid" value="<?php echo $typeid?>" />
		<input type="hidden" name="vstartdate" value="<?php echo $vstartdate?>" />
		<input type="hidden" name="venddate" value="<?php echo $venddate?>" />
		<input type="hidden" name="do" value="excel" />
	</form>
<!--右边结束 -->	
	</td>
  </tr>
</table>
</div>
</body>
</html>
