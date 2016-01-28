<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<link rel="stylesheet" type="text/css" href="template/default/content/css/style.css">

<title>Office 515158 2011 OA办公系统</title>
 
</head>
<body class="bodycolor">
<table width="90%" border="0" align="center" cellpadding="3" cellspacing="0" class="small" style="margin-top:20px;margin-bottom:10px;">
  <tr>
    <td class="Big"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3"> 新建流程</span>&nbsp;&nbsp;&nbsp;&nbsp;
	<span style="font-size:12px; float:right; margin-right:20px;">
	
	<a href="admin.php?ac=list&fileurl=<?php echo $fileurl?>" style="font-size:12px;"><<返回列表页</a></span>
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
	$query = $db->query("SELECT * FROM ".DB_TABLEPRE."workclass_template where typeid='".$row["tid"]."' and (tplkey='1' or tplkey='3') and (tpluser like'%".get_realname($_USER->id)."%' or tpluser='0')  ORDER BY tplid Asc");
	$i=0;
	while ($trow = $db->fetch_array($query)) {
	$i++;
	$urls='"admin.php?ac='.$ac.'&fileurl='.$fileurl.'&typeid='.$row[tid].'&tplid='.$trow[tplid].'""';
	if($trow['tplkey']==3){
		if(file_exists("workclass/tpl/".$trow[tplid]."_".$trow[tpladdr])==''){
			$urls='"#" style="color:#868788"';
		}
	}
?>
<a href=<?php echo $urls?> ><img src="template/default/content/images/notify_new.gif" width="16" height="16" />
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
