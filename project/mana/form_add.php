<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<link rel="stylesheet" type="text/css" href="template/default/content/css/style.css">
<script language="javascript" type="text/javascript" src="DatePicker/WdatePicker.js"></script>
<script src="template/default/tree/js/admincp.js?SES" type="text/javascript"></script>
<script charset="utf-8" src="eweb/kindeditor.js"></script>

<title>Office 515158 2011 OA办公系统</title>
 
</head>
<body class="bodycolor">
<table width="90%" border="0" align="center" cellpadding="3" cellspacing="0" class="small">
  <tr>
    <td class="Big"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3"> 项目表单新建</span>&nbsp;&nbsp;&nbsp;&nbsp;
	<span style="font-size:12px; float:right; margin-right:20px;">
	
	<a href="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&tplid=<?php echo $tplid?>&typeid=<?php echo $typeid?>&formtype=<?php echo $formtype?>&modid=<?php echo $modid?>&flowid=<?php echo $_GET['flowid']?>&formtypes=<?php echo $_GET['formtypes']?>" style="font-size:12px;"><<返回列表页</a></span>
    </td>
  </tr>
</table>
<script Language="JavaScript"> 
function CheckForm()
{
   if(document.save.fromname.value=="")
   { alert("表单名称不能为空！");
     document.save.fromname.focus();
     return (false);
   }
   if(document.save.inputname.value=="")
   { alert("控件名称不能为空！");
     document.save.inputname.focus();
     return (false);
   }
   if(document.save.inputtype.value=="")
   { alert("表单类型不能为空！");
     document.save.inputtype.focus();
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

<form name="save" method="post" action="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&tplid=<?php echo $tplid?>&typeid=<?php echo $typeid?>&formtype=<?php echo $formtype?>&do=add&modid=<?php echo $modid?>&flowid=<?php echo $_GET['flowid']?>&formtypes=<?php echo $_GET['formtypes']?>">
	<input type="hidden" name="view" value="add" />
<table class="TableBlock" border="0" width="90%" align="center">
	<tr>
      <td nowrap class="TableContent" width="15%"> 表单名称：<? get_helps()?></td>
      <td class="TableData">
      <input type="text" name="fromname" class="BigInput" style="width:268px;" size="20" value="" /></td>
    </tr>
	<tr>
      <td nowrap class="TableContent" width="15%"> 控件名称：<? get_helps()?></td>
      <td class="TableData">
      <input type="text" name="inputname" class="BigInput" style="width:268px;" size="20" value="" /></td>
    </tr>
	<tr>
      <td nowrap class="TableContent" width="15%"> 默认值：</td>
      <td class="TableData">
      <input type="text" name="inputvalue" class="BigInput" style="width:268px;" size="20" value="" />
	  </td>
    </tr>
	<tr>
      <td nowrap class="TableContent" width="15%"> 类型：</td>
      <td class="TableData">
	  <input name="inputtype" type="radio" onclick="toggle2('div2')" value="0" checked="checked"/>
	  正常
	  <input name="inputtype" type="radio" value="1" onclick="toggle('div2')"/>图片
      <input name="inputtype" type="radio" value="2" onclick="toggle('div2')"/>附件
	  <input name="inputtype" type="radio" value="3" onclick="toggle('div2')"/>日期
	  <input name="inputtype" type="radio" value="4" onclick="toggle('div2')"/>部门
	  <input name="inputtype" type="radio" value="5" onclick="toggle('div2')"/>成员
	  <input name="inputtype" type="radio" value="6" onclick="toggle('div2')"/>多输入列表
	  </td>
    </tr>
	
	
 <tbody class="TableBlock" border="0" width="90%"  id="div2">
	
	
	<tr>
      <td nowrap class="TableContent" width="15%"> 表单类型：</td>
      <td class="TableData">
      <input name="inputtype1" type="radio" value="1" checked="checked" onclick="toggle('div1')" />
      输入框
      <input name="inputtype1" type="radio" value="2" onclick="toggle('div1')" />输入区
	  <input name="inputtype1" type="radio" value="3" onclick="toggle2('div1')" />单选
	  <input name="inputtype1" type="radio" value="4" onclick="toggle2('div1')" />复选
	  <input name="inputtype1" type="radio" value="5" onclick="toggle2('div1')" />下拉
	  </td>
    </tr>
	
	<tr id="div1">
      <td nowrap class="TableContent" width="15%"> 表单参数：<? get_helps()?></td>
      <td class="TableData">
        <textarea name="inputvaluenum" cols="60" rows="4" class="BigInput"></textarea>
		<br>参数格式："名称|名称|名称",注意多个名称之间用“|”分隔
	  
	  </td>
    </tr>
	
	</tbody>
 
	
	
	<tr>
      <td nowrap class="TableContent" width="15%"> 验证方式：</td>
      <td class="TableData">
	  <input name="confirmation" type="radio" value="1" checked="checked" />
	  是
      <input name="confirmation" type="radio" value="2" />否
	  <br>注：选择"是"表示该项为必填项
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
