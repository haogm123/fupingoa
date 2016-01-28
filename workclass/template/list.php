<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<link rel="stylesheet" type="text/css" href="template/default/content/css/style.css">
<script language="javascript" type="text/javascript" src="template/default/js/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="template/default/content/js/common.js"></script>
<script language="javascript" type="text/javascript" src="DatePicker/WdatePicker.js"></script>
<script type="text/javascript"> 
function searchtpl(id){
   var obj = document.getElementById("typeid");
   jQuery.ajax({
      type: 'GET',
      url: 'admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&do=ajax&typeid='+obj.value+'&date='+new Date(),
      success: function(data){
		  if(data!=''){
			  $("#tplid").html(data);
			 // alert(data);
		  }else{
			  $("#tplid").html('');
		  }
      }
   });
}
function sendForm()
{
   document.save.submit();
}
</script>
<title>Office 515158 2011 OA办公系统</title>
</head>
<body class="bodycolor">
<div id="navPanel">
<form method="get" action="admin.php" name="save" class="ui-grid-21 ui-grid-right ui-form" style=" margin-top:3px;">
<?php echo get_keyuser($ui,$un);?>
<div id="search" style="float: right;">

		<input type="hidden" name="ac" value="<?php echo $ac?>" />
		<input type="hidden" name="do" value="list" />
		<input type="hidden" name="fileurl" value="<?php echo $fileurl?>" />
		<input type="hidden" name="type" value="<?php echo $_GET['type']?>" />
		<input type="hidden" name="vuidtype" value="<?php echo $vuidtype?>" />
	类型： <select name="typeid" id="typeid" onchange="searchtpl()">
		<option value="" >全部</option>
			<?php echo work_type_options($typeid)?>
			</select>&nbsp;&nbsp;
	模型： <select name="tplid" id="tplid" style="width:200px;">
			<?php 
			global $db;
			$query = $db->query("SELECT title,tplid FROM ".DB_TABLEPRE."workclass_template where tplkey!=2 ORDER BY tplid Asc");
			echo '<option value="">全部</option>';
			while ($row = $db->fetch_array($query)) {
				echo '<option value="'.$row['tplid'].'">'.$row['title'].'</option>';
			}
			?>
		</select>&nbsp;&nbsp;	
		流水单号：<input type="text" name="number" size="15"
	value="<?php echo urldecode($number)?>" class="SmallInput" onClick="searchtpl();" />&nbsp;&nbsp;名称：<input type="text" name="title" size="15"
	value="<?php echo urldecode($title)?>" class="SmallInput" />&nbsp;&nbsp;起止日期：<input type="text" value="<?php echo $vstartdate?>"  style="width:80px;" readonly="readonly"  onClick="WdatePicker();" name='vstartdate' > - <input type="text" value="<?php echo $venddate?>"  style="width:80px;" readonly="readonly"  onClick="WdatePicker();" name='venddate' >&nbsp;&nbsp;<input
	type="submit" value="查 询" class="SmallButton" />



</div>
 </form>
</div>

<table width="98%" border="0" align="center" cellpadding="3" cellspacing="0" class="small">
  <tr>
    <td class="Big" style="font-size:12px;"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3"> 工作流信息列表</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<span style="font-size:12px; float:right; margin-right:50px;"><input type="button" value="新建流程" class="BigButtonBHover" onClick="javascript:window.location='admin.php?ac=workadd&fileurl=<?php echo $fileurl?>'">
	</span>
    </td>
  </tr>
</table>

<form name="update" method="post" action="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&type=<?php echo $_GET['type']?>">
<input type="hidden" name="do" value="update"/>
<table class="TableBlock" border="0" width="98%" align="center">
	<tr>
      <td nowrap class="TableHeader" width="50">选项</td>
      <td width="100" class="TableHeader">流水单号</td>
      <td class="TableHeader">工作流名称</td>
      <td width="90" align="center" class="TableHeader">申请人</td>
      <td width="120" align="center" class="TableHeader">申请时间</td>
      <td width="150" class="TableHeader">审批步骤</td>
      <td width="150" align="center" class="TableHeader">操作</td>
    </tr>
<?php
foreach ($result as $row) {
$sql = "SELECT * FROM ".DB_TABLEPRE."workclass_personnel  WHERE workid = '".$row['id']."'  and (pertype=0 or pertype=2 or pertype=4 or pertype=5) and typeid='".$row['typeid']."'  order by perid desc";
$per = $db->fetch_one_array($sql);
?>
	<tr>
      <td nowrap class="TableContent" width="5%">
<?php
if(!is_superadmin()){
	if($_GET['type']==3){
		if($per['pertype']==0 || $per['pertype']==2 || $row['type']==1){
			echo '<input type="checkbox" name="id[]" value="'.$row['id'].'" class="checkbox" />';
		}else{
			echo '<input type="checkbox" name="id[]" value="'.$row['id'].'" class="checkbox" disabled="disabled" />';
		}
	}elseif($_GET['type']==''){
		if($row['uid']==$_USER->id && ($per['pertype']==0 || $per['pertype']==2 || $row['type']==1)){
			echo '<input type="checkbox" name="id[]" value="'.$row['id'].'" class="checkbox" />';
		}else{
			echo '<input type="checkbox" name="id[]" value="'.$row['id'].'" class="checkbox" disabled="disabled" />';
		}
	}else{
		echo '<input type="checkbox" name="id[]" value="'.$row['id'].'" class="checkbox"  disabled="disabled"/>';
	}
}else{
	echo '<input type="checkbox" name="id[]" value="'.$row['id'].'" class="checkbox" />';
}
?>
	  
</td>
<td class="TableData"><?php echo $row['number']?></td>
 <td class="TableData"><a href="admin.php?ac=<?php echo $ac?>&do=view&fileurl=<?php echo $fileurl?>&workid=<?php echo $row['id']?>"><?php echo $row['title']?></a></td>
	  
      <td align="center" class="TableData"><?php echo get_realname($row['uid'])?></td>
      <td align="center" class="TableData"><?php echo $row['date']?></td>
      <td align="left" class="TableData">
	  <?php
	  $perkey=$per['pertype'];
	  if($per['pertype']==5){
		  echo '<font color=red>流程结束</font>';
	  }elseif($per['pertype']==2){
		  echo '<font color=red>流程被拒绝</font>';
	  }else{
	  	  $sql = "SELECT * FROM ".DB_TABLEPRE."workclass_flow  WHERE fid = '".$per['flowid']."' order by fid desc";
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
		  echo '流程己撤消';
	  }else{
			  //审批
			  $sql = "SELECT * FROM ".DB_TABLEPRE."workclass_personnel where name like '%".get_realname($_USER->id)."%' and (pertype=0 or pertype=4) and typeid='".$row['typeid']."' and workid='".$row['id']."'  order by perid desc";
			  $per = $db->fetch_one_array($sql);
			  if($per['perid']!=''){
				  if($per['appkey']==1 && $per['appkey1']==1){
					  $perlnum = $db->result("SELECT COUNT(*) AS perlnum FROM ".DB_TABLEPRE."workclass_personnel_log where perid='".$per['perid']."' and uid='".$_USER->id."' and pertype=0");
					  if($perlnum>0){
						  echo '<a href="admin.php?ac='.$ac.'&do=personnel&fileurl='.$fileurl.'&workid='.$row['id'].'">审批</a> | ';
					  }
				  }else{
					  echo '<a href="admin.php?ac='.$ac.'&do=personnel&fileurl='.$fileurl.'&workid='.$row['id'].'">审批</a> | ';
				  }
			  }
		  //撤消
		  if($_GET['type']==3){
			  if($perkey!=5 && $perkey!=2){
				  echo '<a href="admin.php?ac='.$ac.'&do=workkey&fileurl='.$fileurl.'&workid='.$row['id'].'">撤消</a> | ';
			  }
		  }elseif($_USER->id==$row['uid'] && $perkey!=5 && $perkey!=2){
			  echo '<a href="admin.php?ac='.$ac.'&do=workkey&fileurl='.$fileurl.'&workid='.$row['id'].'">撤消</a> | ';
		  }
		  echo '<a href="admin.php?ac='.$ac.'&do=view&fileurl='.$fileurl.'&workid='.$row['id'].'">查看</a> | ';
		  echo '<a href="#" ';
		  echo 'onClick="window.open (';
		  echo "'admin.php?ac=".$ac."&fileurl=".$fileurl."&do=flow&workid=".$row['id']."&test=".$filenumber."', 'newwindow', 'height=550, width=500, top=6, right=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=no, status=no')";
		  echo '">审批记录</a>';
	 }
	 ?>
	  </td>
    </tr>
	
<?php } ?>	

	
    <tr align="center" class="TableControl">
      <td height="35" colspan="7" align="left" nowrap>
        <input type="checkbox" class="checkbox" value="1" name="chkall" onClick="check_all(this)" /><b>全选</b>&nbsp;&nbsp;&nbsp;&nbsp;<img src="template/default/content/images/ico-1.png" align="absmiddle">
						  <a href="javascript:document:update.submit();">清理流程</a> &nbsp;&nbsp;
						  <?php
						if($_GET['type']==''){
						   echo get_exceldown('excel_9');
						}?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo showpage($num,$pagesize,$page,$url)?>
</td>
    </tr>
  </table>
</form>

	<form name="excel" method="post" action="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>">
		<input type="hidden" name="title" value="<?php echo $title?>" />
		<input type="hidden" name="number" value="<?php echo $number?>" />
		<input type="hidden" name="typeid" value="<?php echo $typeid?>" />
		<input type="hidden" name="tplid" value="<?php echo $tplid?>" />
		<input type="hidden" name="vstartdate" value="<?php echo $vstartdate?>" />
		<input type="hidden" name="venddate" value="<?php echo $venddate?>" />
		<input type="hidden" name="vuidtype" value="<?php echo $vuidtype?>" />
		<input type="hidden" name="do" value="excel" />
	</form>
 
</body>
</html>
