<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<link rel="stylesheet" type="text/css" href="template/default/content/css/style.css">

<title>Office 515158 2011 OA办公系统</title>
 
</head>
<body class="bodycolor">
<table width="70%" border="0" align="center" cellpadding="3" cellspacing="0" class="small">
  <tr>
    <td class="Big"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3"> 项目模型创建</span>&nbsp;&nbsp;&nbsp;&nbsp;
	<span style="font-size:12px; float:right; margin-right:20px;">
	
	<a href="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&typeid=<?php echo $typeid?>" style="font-size:12px;"><<返回列表页</a></span>
    </td>
  </tr>
</table>
<script Language="JavaScript"> 
function CheckForm()
{
   if(document.save.modname.value=="")
   { alert("名称不能为空！");
     document.save.modname.focus();
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
<form name="save" method="post" action="?ac=<?php echo $ac?>&do=addsave&fileurl=<?php echo $fileurl?>&typeid=<?php echo $typeid?>">
<table class="TableBlock" border="0" width="70%" align="center">

	<tr>
      <td nowrap class="TableContent" width="15%"> 模型名称：<? get_helps()?></td>
      <td class="TableData">
      <input type="text" name="modname" class="BigInput" style="width:268px;" size="20" value="" /></td>
    </tr>

	<tr>
      <td nowrap class="TableContent" width="15%"> 使用人员：</td>
      <td class="TableData">
      <?php
	  get_pubuser(2,"keyuser","","+选择使用人员",50,4)
	  ?><br>注：是指允许使用此模型的人员，留空为全体人员使用
	  </td>
    </tr>
	<tr>
      <td nowrap class="TableContent" width="15%"> 管理人员：</td>
      <td class="TableData">
      <?php
	  get_pubuser(2,"manauser","","+选择管理人员",50,4)
	  ?><br>注：是指可以管理此模型下信息的用户
	  
	  </td>
    </tr>
		<tr>
      <td nowrap class="TableContent" width="15%"> 回贴功能：<? get_helps()?></td>
      <td class="TableData">
	  <input name="key1" type="radio" value="0" checked="checked" />否
      <input name="key1" type="radio" value="1" />是
	  <br>注：指该模型下的表单提交成功后，是否带回复讨论功能
	  </td>
    </tr>
	<tr>
      <td nowrap class="TableContent" width="15%"> 审批流程：<? get_helps()?></td>
      <td class="TableData">
	  <input name="key2" type="radio" value="0" />否
      <input name="key2" type="radio" value="1"  checked="checked" />是
	  <br>注：指该模型下的表单是否带审批流程
	  </td>
    </tr>
	<tr>
      <td nowrap class="TableContent" width="15%"> 表单方式：<? get_helps()?></td>
      <td class="TableData">
	  <input name="key3" type="radio" value="0"  checked="checked"/>单表单
      <input name="key3" type="radio" value="1"  />多表单
	  <br>注：单表单是指该模型只存在一个表单，多表单指可以创建无数个
	  </td>
    </tr>
	<tr>
      <td nowrap class="TableContent" width="15%"> 类型：<? get_helps()?></td>
      <td class="TableData">
	  <input name="key4" type="radio" value="1"  checked="checked"/>正常
      <input name="key4" type="radio" value="2"  />停用
	  <input name="key4" type="radio" value="3"  />模板集成
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
