<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<link rel="stylesheet" type="text/css" href="template/default/content/css/style.css">

<title>Office 515158 2011 OA办公系统</title>
 
</head>
<body class="bodycolor">
<table width="90%" border="0" align="center" cellpadding="3" cellspacing="0" class="small" style="margin-top:20px;margin-bottom:10px;">
  <tr>
    <td class="Big"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3"> 选择统计表单</span>&nbsp;&nbsp;&nbsp;&nbsp;
	<span style="font-size:12px; float:right; margin-right:20px;">
	
	</span>
    </td>
  </tr>
</table>




<table class="TableBlock" border="0" width="90%" align="center">
<?
foreach ( $_CACHE['workclass_type'] as $row) {
?>
    <tr>
      <td nowrap class="TableHeader" width="160" style="font-size:16px;"> <?php echo $row["typename"]?></td>
      <td class="TableData">
<?
	global $db;
	$query = $db->query("SELECT * FROM ".DB_TABLEPRE."workclass_charts where typeid='".$row["tid"]."' ORDER BY id Asc");
	while ($trow = $db->fetch_array($query)) {
?>
<a href="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&typeid=<?php echo $trow['typeid']?>&tplid=<?php echo $trow['tplid']?>&chartsid=<?php echo $trow['id']?>&do=tpl" ><img src="template/default/content/images/carts.gif" width="16" height="16" />
            <?php echo $trow[title]?></a>
<?php
if($i%5=='0'){
//echo '</tr><tr>';
}
}	
?> </td>
    </tr>
<?}?>
  </table>





</body>
</html>
