<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<link rel="stylesheet" type="text/css" href="template/default/content/css/style.css">
<script language="javascript" type="text/javascript" src="template/default/js/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="template/default/content/js/common.js"></script>
<title>OA办公系统</title>
</head>
<body class="bodycolor">
<table width="40%" border="0" align="center" cellpadding="3" cellspacing="0" class="small">
  <tr>
    <td class="Big" style="font-size:12px;"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3"> 公文发文拟稿</span>
    </td>
  </tr>
</table>

<form name="update" method="post" action="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&node_type=<?php echo $node_type?>">
  <input type="hidden" name="do" value="update"/>
<table class="TableBlock" border="0" width="40%" align="center">

<?foreach ($result as $row) {?>
	<tr>
      <td nowrap class="TableHeader" width="180" style="font-size:16px;">
	  <?php echo $row['name']?></td>

      <td align="center" class="TableData"><a href="admin.php?ac=<?php echo $ac?>&do=add&fileurl=<?php echo $fileurl?>&apptype=<?php echo $row['id']?>">新建发文拟稿</a>&nbsp&nbsp&nbsp
	  <a href="admin.php?ac=<?php echo $ac?>&do=draft&fileurl=<?php echo $fileurl?>&apptype=<?php echo $row['id']?>"><span class="big3">（草稿箱）</a>
</td>
    </tr>
	
<?}?>	
  </table>
</form>


 
</body>
</html>
