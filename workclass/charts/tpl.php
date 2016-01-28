<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<link rel="stylesheet" type="text/css" href="template/default/content/css/style.css">
<script language="javascript" type="text/javascript" src="template/default/js/jquery.min.js"></script>
<SCRIPT LANGUAGE="Javascript" SRC="template/fusioncharts/FusionCharts.js"></SCRIPT>
<title>Office 515158 2011 OA办公系统</title>
</head>
<body class="bodycolor">
<table width="98%" border="0" align="center" cellpadding="3" cellspacing="0" class="small">
  <tr>
    <td class="Big" style="font-size:12px;"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3">工作流模型统计</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&flashtype=<?php echo $flashtype?>&do=tpl&chartsid=<?php echo $_GET['chartsid']?>&type=1" style="font-size:12px;">按月统计</a>&nbsp;|&nbsp;
	<a href="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&flashtype=<?php echo $flashtype?>&do=tpl&chartsid=<?php echo $_GET['chartsid']?>&type=2" style="font-size:12px;">按日统计</a><span style="font-size:12px; float:right; margin-right:50px;"><a href="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&flashtype=MSColumn3D&do=tpl&chartsid=<?php echo $_GET['chartsid']?>&type=<?php echo $_GET['type']?>" style="font-size:12px;">柱形图展示</a>&nbsp;|&nbsp;
	<a href="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&flashtype=MSLine&do=tpl&chartsid=<?php echo $_GET['chartsid']?>&type=<?php echo $_GET['type']?>" style="font-size:12px;">折线图展示</a>
	</span>
    </td>
  </tr>
</table>

<table width="98%" border="0" align="center" cellpadding="3" cellspacing="0" class="small">
  <tr>
    <td align="center" class="Big" style="font-size:12px; border:1px solid #CCCCCC;">
	<?php
	echo renderChart("template/fusioncharts/".$flashtype.".swf", "", $strXML, "productSales", $fw, $fh, false, false);
?></td>
  </tr>
</table>

</body>
</html>
