<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<link rel="stylesheet" type="text/css" href="template/default/content/css/style.css">
<script language="javascript" type="text/javascript" src="template/default/js/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="template/default/content/js/common.js"></script>
<script language="javascript" type="text/javascript" src="DatePicker/WdatePicker.js"></script>
<script type="text/javascript"> 
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
		<input type="hidden" name="vuidtype" value="<?php echo $vuidtype?>" />&nbsp;&nbsp;名称：<input type="text" name="title" size="15"
	value="<?php echo urldecode($title)?>" class="SmallInput"/>&nbsp;&nbsp;起止日期：<input type="text" value="<?php echo $vstartdate?>"  style="width:80px;" readonly="readonly"  onClick="WdatePicker();" name='vstartdate' > - <input type="text" value="<?php echo $venddate?>"  style="width:80px;" readonly="readonly"  onClick="WdatePicker();" name='venddate' >&nbsp;&nbsp;<input
	type="submit" value="查 询" class="SmallButton" />



</div>
 </form>
</div>

<table width="98%" border="0" align="center" cellpadding="3" cellspacing="0" class="small">
  <tr>
    <td class="Big" style="font-size:12px;"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3"> 工资信息列表</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<span style="font-size:12px; float:right; margin-right:50px;"><input type="button" value="新建工资表" class="BigButtonBHover" onClick="javascript:window.location='admin.php?ac=<?php echo $ac?>&do=add&fileurl=<?php echo $fileurl?>'">
	</span>
    </td>
  </tr>
</table>

<form name="update" method="post" action="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>">
<input type="hidden" name="do" value="update"/>
<table class="TableBlock" border="0" width="98%" align="center">
	<tr>
      <td nowrap class="TableHeader" width="50">选项</td>
      <td class="TableHeader">名称</td>
	  <td width="100" align="center" class="TableHeader">开始日期</td>
	  <td width="100" align="center" class="TableHeader">结束日期</td>
	  <td width="150" align="center" class="TableHeader">工资月份</td>
      <td width="90" align="center" class="TableHeader">发布人</td>
      <td width="80" align="center" class="TableHeader">发布时间</td>
	  <td width="60" align="center" class="TableHeader">状态</td>
      <td width="170" align="center" class="TableHeader">操作</td>
    </tr>
<?php
foreach ($result as $row) {
?>
	<tr>
      <td nowrap class="TableContent" width="5%">
<?php
	get_boxlistkey("id[]",$row['wid'],$row['uid'],$_USER->id);
	?>
	  
</td>
 <td class="TableData"><a href="admin.php?ac=<?php echo $ac?>&do=view&fileurl=<?php echo $fileurl?>&wid=<?php echo $row['wid']?>"><?php echo $row['title']?></a></td>
<td align="center" class="TableData"><?php echo $row['sdate']?></td>
<td align="center" class="TableData"><?php echo $row['edate']?></td>
<td align="center" class="TableData"><?php echo $row['year']?>年<?php echo $row['month']?>月</td>	  
      <td align="center" class="TableData"><?php echo get_realname($row['uid'])?></td>
      <td align="center" class="TableData"><?php echo str_replace(' ','<br>',$row['date'])?></td>
	  <td align="center" class="TableData">
	  <?php
	  if($row['type']==1){
		  echo '开启';
	  }else{
		  echo '结束';
	  }
	  ?></td>
      <td align="center" class="TableData"><a href="admin.php?ac=<?php echo $ac;?>&fileurl=<?php echo $fileurl;?>&do=view&wid=<?php echo $row['wid']?>">查看</a> | <a href="admin.php?ac=<?php echo $ac;?>&fileurl=<?php echo $fileurl;?>&do=add&wid=<?php echo $row['wid']?>">编辑</a> |
<?php
if($row['type']==1){
	echo '<a href="admin.php?ac='.$ac.'&fileurl='.$fileurl.'&do=type&wid='.$row['wid'].'&type=2" style="color:#FF0000;">结束</a> | ';
	echo '<a href="admin.php?ac='.$ac.'&fileurl='.$fileurl.'&do=log&wid='.$row['wid'].'">数据管理</a>';
}else{
	echo '<a href="admin.php?ac='.$ac.'&fileurl='.$fileurl.'&do=type&wid='.$row['wid'].'&type=1" style="color:#FF0000;">开启</a> | ';
	
	echo '<a href="admin.php?ac='.$ac.'&fileurl='.$fileurl.'&do=sms&wid='.$row['wid'].'">发送工资条</a>';
}
?>	  
</td>
    </tr>
	
<?php } ?>	

	
    <tr align="center" class="TableControl">
      <td height="35" colspan="9" align="left" nowrap>
        <input type="checkbox" class="checkbox" value="1" name="chkall" onClick="check_all(this)" /><b>全选</b>&nbsp;&nbsp;&nbsp;&nbsp;<img src="template/default/content/images/ico-1.png" align="absmiddle">
						  <a href="javascript:document:update.submit();">清理流程</a> &nbsp;&nbsp;
						  <?php
						echo get_exceldown('excel_51');
						?>
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
