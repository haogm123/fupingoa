<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<link rel="stylesheet" type="text/css" href="template/default/content/css/style.css">

<title>Office 515158 2011 OA办公系统</title>
 
</head>
<body class="bodycolor">
<table width="60%" border="0" align="center" cellpadding="3" cellspacing="0" class="small" style="margin-top:20px;margin-bottom:10px;">
  <tr>
    <td class="Big"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3"> 新建<?php echo $mid['modname']?></span>&nbsp;&nbsp;&nbsp;&nbsp;
	<span style="font-size:12px; float:right; margin-right:20px;">
	
	<a href="admin.php?ac=tpllist&fileurl=<?php echo $fileurl?>&modid=<?php echo $modid?>&projectid=<?php echo $projectid?>&typeid=<?php echo $typeid?>" style="font-size:12px;"><<返回列表页</a></span>
    </td>
  </tr>
</table>




<table class="TableBlock" border="0" width="40%" align="center">
	<?php
	global $db;
	$query = $db->query("SELECT tplid,title FROM ".DB_TABLEPRE."project_template where typeid='".$typeid."' and modid='".$modid."' ORDER BY tplid Asc");
	$i=0;
	while ($trow = $db->fetch_array($query)) {
	?>
    <tr>
      <td nowrap class="TableHeader" width="160" style="font-size:16px;">+ <a href="admin.php?ac=tpladd&fileurl=<?php echo $fileurl?>&modid=<?php echo $modid;?>&projectid=<?php echo $projectid;?>&typeid=<?php echo $typeid;?>&tplid=<?php echo $trow['tplid'];?>" ><?php echo $trow["title"]?></a></td>
    </tr>
<?php
}
?>
  </table>





</body>
</html>
