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
<form name="save" method="post" action="?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&do=log" style="margin-top:0px; margin-left:0px; margin-right:0px;">
	<input type="hidden" name="view" value="save" />
<div id="navPanel">
<div id="navMenu" style="padding-left:50px;">
<a href="admin.php?ac=<?php echo $ac;?>&fileurl=<?php echo $fileurl;?>"><span><img src="template/webui/ligerUI1/skins/icons/home.gif" width="16" height="16" align="absmiddle">工资表管理</span></a>
<?php if($row['type']==1){?>
<a href="admin.php?ac=<?php echo $ac;?>&fileurl=<?php echo $fileurl;?>&wid=<?php echo $_GET['wid'];?>&do=log"><span><img src="template/default/content/images/notify_new.gif" width="16" height="16" align="absmiddle">数据管理</span></a>
<?php }?>
<a href="admin.php?ac=<?php echo $ac;?>&fileurl=<?php echo $fileurl;?>&do=down&wid=<?php echo $_GET['wid'];?>" onclick="wginfo();"><span><img src="template/webui/ligerUI1/skins/icons/back.gif" width="16" height="16" align="absmiddle">工资报表下载</span></a>
<?php if($row['type']==1){?>
<a href="#" onclick="wgadd();"><span><img src="template/webui/ligerUI1/skins/icons/communication.gif" width="16" height="16" align="absmiddle">导入工资数据</span></a>
<?php }?>
<a href="admin.php?ac=<?php echo $ac;?>&fileurl=<?php echo $fileurl;?>&do=view&wid=<?php echo $_GET['wid'];?>"  class="active"><span><img src="template/webui/ligerUI1/skins/icons/search.gif" width="16" height="16" align="absmiddle"> 信息浏览</span></a>
</div>
<div id="search" style="float: right; padding-right:100px; line-height:30px;">
<span id="error" style="margin-right:20px; color:#FF0000; font-size:14px;"></span>
	
	
</div>
</div>

<div style="position:absolute; height:90%; width:100%;overflow:auto"> 

<table class="TableBlock" border="0" width="98%" align="center" style="margin-top:20px;">
<tr>
      <td nowrap class="TableHeader" colspan="4"><?php echo $row['title'];?></td>
    </tr>
	<tr>
      <td nowrap class="TableContent" width="15%"> 
        名称：</td>
      <td class="TableData" width="35%"><?php echo $row['title'];?></td>
      <td class="TableContent" width="15%"> 工资月份：</td>
      <td class="TableData" width="35%"><?php echo $row['year'];?>年<?php echo $row['month'];?>月       </td>
    </tr>
	<tr>
      <td nowrap class="TableContent" width="15%"> 
        开始日期：</td>
      <td class="TableData" width="35%"><?php echo $row['sdate'];?></td>
      <td class="TableContent" width="15%"> 结束日期：</td>
      <td class="TableData" width="35%"><?php echo $row['edate'];?></td>
    </tr>
	<tr>
      <td nowrap class="TableContent" width="15%"> 
        备注：</td>
      <td colspan="3" class="TableData"><?php echo $row['content'];?> </td>
      </tr>
	
</table>
<!--右边结束 -->	

<table class="TableBlock" border="0" width="98%" align="center" style="margin-top:20px;">
		<tr>
		<td width="60" align="center" nowrap class="TableHeader">姓名</td>
		<?php
		//$sqlu = "SELECT * FROM ".DB_TABLEPRE."wage_type order by tnumber asc";
		//$results = $db->query($sqlu);
		//while ($type = $db->fetch_array($results)) {	
		foreach ( $_CACHE['wage_type'] as $type) {
		?>
		<td width="80" align="center" nowrap class="TableHeader"><?php echo $type['name'];?></td>
		<?php }?>
		<td width="100" align="center" class="TableHeader">备注</td>  	  	
		</tr>
<?php
$n=0;
foreach ($result as $log) {
$n++;
if($n%2==0){
	$TableContent='TableContent';
	$b='background:#f2f8ff;';
}else{
	$TableContent='TableData';
	$b='background:#ffffff;';
}
?>
		<tr style="height:30px;">
		<td align="center" width="60" class="<?php echo $TableContent;?>"><?php echo $log['name']?></td>
		<?php
		foreach ( $_CACHE['wage_type'] as $type) {
		$wdb = $db->fetch_one_array("SELECT content FROM ".DB_TABLEPRE."wage_data  WHERE type=2 and viewid='".$log['lid']."' and tid='".$type['tid']."' and wid='".$row['wid']."'");	
		?>
		<td align="center" nowrap class="<?php echo $TableContent;?>"><?php echo $wdb['content'];?> </td>
		<?php }?>
			
		  <td align="center" class="<?php echo $TableContent;?>">
		 <?php echo $log['content']?>
	      </td>	  	
		</tr>
<?php
}
?>


	 </table>



</div> 
</form>
 
</body>
</html>
