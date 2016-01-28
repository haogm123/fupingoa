<html>
<head>
<title>信息添加编辑</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="template/default/content/css/style.css">
<script src="template/default/tree/js/admincp.js?SES" type="text/javascript"></script>
<script src="template/default/js/jquery-1.4.2.min.js" type="text/javascript"></script>

</head>
<body class="bodycolor">
<script Language="JavaScript"> 
function sendForm()
{
   document.save.submit();
   $("#error").html('数据保存中,请不要关闭...');
}
</script>
<form name="save" method="post" action="?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>" style="margin-top:0px; margin-left:0px; margin-right:0px;">
	<input type="hidden" name="view" value="save" />
<div id="navPanel">
<div id="navMenu" style="padding-left:50px;">
<a href="admin.php?ac=<?php echo $ac;?>&fileurl=<?php echo $fileurl;?>" class="active"><span><img src="template/default/content/images/notify_new.gif" width="16" height="16" align="absmiddle">薪资基础信息配置</span></a>

</div>
<div id="search" style="float: right; padding-right:100px; line-height:30px;">
<span id="error" style="margin-right:20px; color:#FF0000; font-size:14px;"></span>
	<input type="button" value="保存数据" class="BigButtonBHover" onClick="sendForm();">
	
</div>
</div>

<div style="position:absolute; height:90%; width:100%;overflow:auto; padding-left:10px; padding-right:10px;padding-bottom:20px;">



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
foreach ($result as $row) {
$basis = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."wage_basis  WHERE uid = '".$row['id']."'");
if($basis['bid']==''){
	$input='new';
	$infoid=$row['id'];
}else{
	$infoid=$basis['bid'];
}
$n++;
if($n%2==0){
	$TableContent='TableContent';
	$b='background:#f2f8ff;';
}else{
	$TableContent='TableData';
	$b='background:#ffffff;';
}
?>
<input type="hidden" name="bid[]" value="<?php echo $basis['bid']?>" />
<input type="hidden" name="<?php echo $input;?>uid[]" value="<?php echo $row['id']?>" />
<input type="hidden" name="<?php echo $input;?>username[<?php echo $infoid;?>]" value="<?php echo $row['username']?>" />	
<input type="hidden" name="<?php echo $input;?>name[<?php echo $infoid;?>]" value="<?php echo $row['name']?>" />
		<tr style="height:30px;">
		<td align="center" width="60" class="<?php echo $TableContent;?>"><?php echo $row['name']?></td>
		<?php
		//$sqlu = "SELECT * FROM ".DB_TABLEPRE."wage_type order by tnumber asc";
		//$results = $db->query($sqlu);
		//while ($type = $db->fetch_array($results)) {
		foreach ( $_CACHE['wage_type'] as $type) {
		$wdb = $db->fetch_one_array("SELECT content FROM ".DB_TABLEPRE."wage_data  WHERE type=1 and viewid='".$basis['bid']."' and tid='".$type['tid']."'");	
		?>
		<td align="center" nowrap class="<?php echo $TableContent;?>"><input name="<?php echo $input;?>type_<?php echo $type['tid']?>[<?php echo $infoid;?>]" type="text" value="<?php echo $wdb['content'];?>" style="width:80px; height:28px; line-height:28px;border:0px;<?php echo $b;?>"  onKeyUp="value=value.replace(/[^0-9^.]/g,'');">		  </td>
		<?php }?>
			
		  <td align="center" class="<?php echo $TableContent;?>">
		 <input name="<?php echo $input;?>content[<?php echo $infoid;?>]" type="text" class="BigInput" value="<?php echo $basis['content']?>" style="width:100px;height:28px; line-height:28px;border:0px;<?php echo $b;?>" />
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






















