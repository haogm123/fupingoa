<html>
<head>
<title>信息添加编辑</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="template/default/content/css/style.css">
<script src="template/default/js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="template/default/tree/js/admincp.js?SES" type="text/javascript"></script>
</head>
<body class="bodycolor">
<div id="navPanel">
<div id="navMenu">
<a href="admin.php?ac=mobile&fileurl=<?php echo $fileurl;?>&type=menu" <?php if($type=='menu'){?>class="active"<?php }?>><span><img src="template/default/images/admin_img/plugin_debug.png" width="16" height="16" align="absmiddle">内置手机应用</span></a><a href="admin.php?ac=mobile&fileurl=<?php echo $fileurl;?>&type=model" <?php if($type=='model'){?>class="active"<?php }?>><span>
<img src="template/default/images/admin_img/plugin_debug.png" width="16" height="16" align="absmiddle">应用集成管理</span></a>
</div>
</div>
<table width="90%" border="0" align="center" cellpadding="3" cellspacing="0" class="small">
  <tr>
    <td class="Big"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3"> 手机应用管理</span>&nbsp;&nbsp;&nbsp;&nbsp;
	
    </td>
  </tr>
</table>
<script Language="JavaScript"> 
function CheckForm()
{
   if(document.save.title.value=="")
   { alert("名称不能为空！");
     document.save.title.focus();
     return (false);
   }
   
   return true;
}
function sendForm()
{
   if(CheckForm())
      document.save.submit();
}

var rowtypedata = [
	[ [5, '<div>名称：<input name="newname[]" type="text" class="BigInput" value="" size="40" />  <a href="javascript:;" style="font-size:12px;" onClick="deleterow(this)">删除此项</a></div>']],
];
</script>

<form name="save" method="post" action="?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&type=<?php echo $type?>">
	<input type="hidden" name="view" value="save" />
	 <table class="TableBlock" border="0" width="90%" align="center">
		<tr>
		<td width="60" align="center" nowrap class="TableHeader">排序</td>
		  <td nowrap class="TableHeader">名称</td>
			<td width="200" align="center" nowrap class="TableHeader">连接</td>
			  <td width="200" align="center" class="TableHeader">ico</td> 
			  <td width="90" align="center" class="TableHeader">操作</td>  	  	
		</tr>
<?foreach ($result as $row) {?>
	<input type="hidden" name="id[]" value="<?php echo $row['mid']?>" />	
		<tr>
		<td align="center" class="TableContent"><input name="number[<?php echo $row['mid']?>]" type="text" class="BigInput" value="<?php echo $row['number']?>" style="width:40px;" /></td>
		  <td nowrap class="TableData"><input name="title[<?php echo $row['mid']?>]" type="text" class="BigInput" value="<?php echo $row['title']?>" size="40" /></td>
			<td align="center" nowrap class="TableData"><input name="linkurl[<?php echo $row['mid']?>]" type="text" style="width:200px;" class="BigInput" value="<?php echo $row['linkurl']?>" size="40" <?php if($type!='model'){?>readonly<?php }?> /></td>
			<td align="center" nowrap class="TableData"><?php echo $row['type']?>/<input name="ico[<?php echo $row['mid']?>]" type="text" class="BigInput" value="<?php
			if($row['ico']!=''){
				echo $row['ico'];
			}else{
				echo $row['mid'].'.png';
			}
			?>" style="width:100px;" /></td>
		  <td align="center" class="TableData">
		  <?php
		  if($row['type1']=='1'){
		  ?>
<a href="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&tid=<?php echo $row['mid']?>&type=<?php echo $type?>&type1=0" title="开启指手机终端显示，关闭后手机终端将不会显示">关闭</a>
		  <?php }else{?>
		  <a href="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&tid=<?php echo $row['mid']?>&type=<?php echo $type?>&type1=1" title="开启指手机终端显示，关闭后手机终端将不会显示">开启</a>
		  <?php }?>	
		  <?php
		  if($type=='model'){
		  ?> | 
<a href="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&id=<?php echo $row['mid']?>&type=<?php echo $type?>" title="您确定要删除吗？删除后手机终端将不会出现这个功能">删除</a>
		  <?php }?>
		   </td>	  	
		</tr>
<?}?>
<tr>
		  <td colspan="5" nowrap class="TableData">
		  
		  <table width="100%">
		   
	
				<tr><td colspan="7"><div><?php if($type=='model'){?><a href="#" onClick="addrow(this, 0)" class="addtr">+增加新项</a><?php }?></div></td></tr>
			</table>
		  
		  
      </td>
	    </tr>
		<tr align="center" class="TableControl">
			<td colspan="5" nowrap>
			<input type="button" value="保存" class="BigButtonBHover" onClick="sendForm();">&nbsp;	    </td>
	  </tr>
	 </table>
  
</form>

 
</body>

</html>






















