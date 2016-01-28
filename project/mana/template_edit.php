<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<link rel="stylesheet" type="text/css" href="template/default/content/css/style.css">
<script language="javascript" type="text/javascript" src="DatePicker/WdatePicker.js"></script>
<script src="template/default/tree/js/admincp.js?SES" type="text/javascript"></script>
<script charset="utf-8" src="eweb/kindeditor.js"></script>

<title>Office 515158 2011 OA办公系统</title>
 
</head>
<body <?php if($blog['tplkey']=='3'){?>onLoad="toggle2('div1');"<?php }?> class="bodycolor">
<table width="90%" border="0" align="center" cellpadding="3" cellspacing="0" class="small">
  <tr>
    <td class="Big"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3"> 项目模板编辑</span>&nbsp;&nbsp;&nbsp;&nbsp;
	<span style="font-size:12px; float:right; margin-right:20px;">
	
	<a href="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&typeid=<?php echo $typeid?>&modid=<?php echo $modid?>" style="font-size:12px;"><<返回列表页</a></span>
    </td>
  </tr>
</table>
<script Language="JavaScript"> 
function CheckForm()
{
   if(document.save.title.value=="")
   { alert("模板名称不能为空！");
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
function toggle(targetid){
     if (document.getElementById){
         target=document.getElementById(targetid);
             if (target.style.display=="block"){
                 target.style.display="none";
             } else {
                 target.style.display="none";
             }
     }
}
function toggle2(targetid){
     if (document.getElementById){
         target=document.getElementById(targetid);
             if (target.style.display=="none"){
                 target.style.display="block";
             } else {
                 target.style.display="block";
             }
     }
}

</script>
<style type="text/css"> 
#div1{display:none;}
#div2{display:block;}
</style>

<form name="save" method="post" action="?ac=<?php echo $ac?>&do=editsave&fileurl=<?php echo $fileurl?>&typeid=<?php echo $typeid?>&modid=<?php echo $modid?>">
	<input type="hidden" name="savetype" value="edit" />
	<input type="hidden" name="tplid" value="<?php echo $blog['tplid']?>" />
<table class="TableBlock" border="0" width="90%" align="center">
	<tr>
      <td nowrap class="TableContent" width="15%"> 模板名称：<? get_helps()?></td>
      <td class="TableData">
      <input type="text" name="title" class="BigInput" style="width:268px;" size="20" value="<?php echo $blog['title']?>" /></td>
    </tr>
	<tr>
      <td nowrap class="TableContent" width="15%"> 状态：<? get_helps()?></td>
      <td class="TableData">
	  <input name="tplkey" type="radio" value="1" <?php if($blog['tplkey']=='1'){?>checked="checked"<?php }?>  onclick="toggle('div1')" />正常
      <input name="tplkey" type="radio" value="2" onclick="toggle('div1')" <?php if($blog['tplkey']=='2'){?>checked="checked"<?php }?> />停用
	  <input name="tplkey" type="radio" value="3" onclick="toggle2('div1')" <?php if($blog['tplkey']=='3'){?>checked="checked"<?php }?> />模板集成
	  </td>
    </tr>
	<tr id="div1">
      <td nowrap class="TableContent" width="15%"> 模板文件地址：</td>
      <td class="TableData">
      <input type="text" name="tpladdr" class="BigInput" style="width:200px;" size="20" value="<?php echo $blog['tpladdr']?>" /></td>
    </tr>
    
    <tr align="center" class="TableControl">
      <td colspan="2" nowrap height="35">

		<input type="button" value="保存" class="BigButtonBHover" onClick="sendForm();">
        
      </td>
    </tr>
  </table>
</form>

 
</body>
</html>
