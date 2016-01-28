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


<table width="98%" border="0" align="center" cellpadding="3" cellspacing="0" class="small">
  <tr>
    <td class="Big" style="font-size:12px;"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3"> 工资信息列表</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<span style="font-size:12px; float:right; margin-right:50px;">
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
 <td class="TableData"><?php echo $row['title']?></td>
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
      <td align="center" class="TableData"><!--<img src="template/webui/ligerUI1/skins/icons/back.gif"><a href="admin.php?ac=<?php echo $ac;?>&fileurl=<?php echo $fileurl;?>&do=view&wid=<?php echo $row['wid']?>">下载工资报表</a>   --><img src="template/webui/ligerUI1/skins/icons/memeber.gif"><a href="admin.php?ac=<?php echo $ac;?>&fileurl=<?php echo $fileurl;?>&do=log&wid=<?php echo $row['wid']?>">工资上报</a> 
</td>
    </tr>
	
<?php } ?>	

	
    <tr align="center" class="TableControl">
      <td height="35" colspan="9" align="left" nowrap>
        <?php echo showpage($num,$pagesize,$page,$url)?>
</td>
    </tr>
  </table>
</form>

	
</body>
</html>
