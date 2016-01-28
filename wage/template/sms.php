<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<link rel="stylesheet" type="text/css" href="template/default/content/css/style.css">
<script language="javascript" type="text/javascript" src="template/default/js/jquery.min.js"></script>
<link href="template/webui/ligerUI1/skins/Aqua/css/ligerui-tree.css" rel="stylesheet" type="text/css" />
<link href="template/webui/ligerUI1/skins/Aqua/css/ligerui-dialog" rel="stylesheet" type="text/css" />
<link href="template/webui/ligerUI/skins/Aqua/css/ligerui-all.css" rel="stylesheet" type="text/css" />
<script src="template/webui/ligerUI/js/ligerui.min.js" type="text/javascript"></script>
<script src="template/webui/ligerUI1/js/core/base.js" type="text/javascript"></script>
<script src="template/webui/ligerUI1/js/plugins/ligerTree.js" type="text/javascript"></script>
<script src="template/webui/ligerUI1/js/plugins/ligerDrag.js" type="text/javascript"></script>
<script src="template/webui/ligerUI1/js/plugins/ligerDialog.js" type="text/javascript"></script>
<script src="template/webui/ligerUI1/js/plugins/ligerResizable.js" type="text/javascript"></script>
<script type="text/javascript">
$(function (){
	$("#accordion1").ligerAccordion();
	$("#tree2").ligerTree({ checkbox: false,slide: false});
});
</script>
<script type="text/javascript"> 
function sendForm()
{
   document.save.submit();
}
function wginfo(){
	$.ligerDialog.waitting('正在导出数据,请稍候...');
		setTimeout(function (){
		$.ligerDialog.closeWaitting();
	}, 2000);
}
function wgadd(){
	$.ligerDialog.open({ height: 400,width: 600, url: 'admin.php?ac=<?php echo $ac;?>&fileurl=<?php echo $fileurl;?>&wid=<?php echo $_GET['wid'];?>&do=logadd', isResize: true });
}
</script>
<title>Office 515158 2011 OA办公系统</title>
</head>
<body class="bodycolor">
<form name="save" method="post" action="?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&do=sms" style="margin-top:0px; margin-left:0px; margin-right:0px;">
	<input type="hidden" name="view" value="save" />
	<input type="hidden" name="wid" value="<?php echo $_GET['wid'];?>" />
<div id="navPanel">
<div id="navMenu" style="padding-left:50px;">
<a href="admin.php?ac=<?php echo $ac;?>&fileurl=<?php echo $fileurl;?>"><span><img src="template/webui/ligerUI1/skins/icons/home.gif" width="16" height="16" align="absmiddle">工资表管理</span></a>
<a href="#"  class="active"><span><img src="template/webui/ligerUI1/skins/icons/outbox.gif" width="16" height="16" align="absmiddle"> 工资条发送</span></a>
</div>
<div id="search" style="float: right; padding-right:100px; line-height:30px;">
<input type="button" value="消息发送" class="BigButtonBHover" onClick="sendForm();">
	
	
</div>
</div>

<div style="position:absolute; height:90%; width:100%;overflow:auto"> 



<table class="TableBlock" border="0" width="98%" align="center" style="margin-top:20px;">
		
		<tr style="height:30px;">
<?php
$n=0;
foreach ($result as $log) {
$n++;
?>
		
		<td align="center" width="50" class="TableContent">
		<input type="checkbox" name="uid[]" value="<?php echo $log['uid']?>" class="checkbox" />
		</td>
		<td align="center"  class="TableData">
		<input type="hidden" name="name[<?php echo $log['uid']?>]" value="<?php echo $log['name']?>"/>
		<?php echo $log['name']?></td>
		<?php
		$content='';
		foreach ( $_CACHE['wage_type'] as $type) {
			$wdb = $db->fetch_one_array("SELECT content FROM ".DB_TABLEPRE."wage_data  WHERE type=2 and viewid='".$log['lid']."' and tid='".$type['tid']."' and wid='".$row['wid']."'");
			$content.=$type['name'].':'.$wdb['content']."<br>";
		}
		$content.=$log['content']."<br>";	
		?>
		
	<input type="hidden" name="content[<?php echo $log['uid']?>]" value="<?php echo $content;?>"/> 	</td>
		
<?php
if($n%8==0){
	echo '</tr><tr>';
}
}
?>
</tr>

	 </table>



</div> 
</form>
 
</body>
</html>
