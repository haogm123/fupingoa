<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<link rel="stylesheet" type="text/css" href="template/default/content/css/style.css">

<title>Office 515158 2011 OA办公系统</title>
 
</head>
<body class="bodycolor">
<table width="70%" border="0" align="center" cellpadding="3" cellspacing="0" class="small">
  <tr>
    <td class="Big"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3"> 项目类型创建</span>&nbsp;&nbsp;&nbsp;&nbsp;
	<span style="font-size:12px; float:right; margin-right:20px;">
	
	<a href="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>" style="font-size:12px;"><<返回列表页</a></span>
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
</script>
<form name="save" method="post" action="?ac=<?php echo $ac?>&do=addsave&fileurl=<?php echo $fileurl?>">
<table class="TableBlock" border="0" width="70%" align="center">

	<tr>
      <td nowrap class="TableContent" width="15%"> 类型名称：<? get_helps()?></td>
      <td class="TableData">
      <input type="text" name="title" class="BigInput" style="width:268px;" size="20" value="" /></td>
    </tr>
	<tr>
      <td nowrap class="TableContent" width="15%"> 状态：<? get_helps()?></td>
      <td class="TableData">
	  <input name="type1" type="radio" value="0" checked="checked" />正常
      <input name="type1" type="radio" value="1" />停用
	  </td>
    </tr>
	<tr>
      <td nowrap class="TableContent" width="15%"> 使用人员：</td>
      <td class="TableData">
      <?php
	  get_pubuser(2,"keyuser","","+选择使用人员",50,4)
	  ?><br>注：是指允许使用此类型的人员，留空为全体人员使用
	  </td>
    </tr>
	<tr>
      <td nowrap class="TableContent" width="15%"> 管理人员：</td>
      <td class="TableData">
      <?php
	  get_pubuser(2,"manauser","","+选择管理人员",50,4)
	  ?><br>注：是指可以管理此类型下项目主体信息的用户
	  
	  </td>
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
