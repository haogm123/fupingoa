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
    <td class="Big"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3"> 档案信息发布</span>&nbsp;&nbsp;&nbsp;&nbsp;
	<span style="font-size:12px;">
	
	<a href="admin.php?ac=index&fileurl=<?php echo $fileurl?>" style="font-size:12px;">返回列表页</a><img src="template/default/content/images/f_ico.png" align="absmiddle"></span>
    </td>
  </tr>
</table>
<script Language="JavaScript"> 
function CheckForm()
{
   if(document.save.filenumber.value=="")
   { alert("档案编号不能为空！");
     document.save.filenumber.focus();
     return (false);
   }
   if(document.save.filename.value=="")
   { alert("档案名称不能为空！");
     document.save.filename.focus();
     return (false);
   }
   if(document.save.position.value=="")
   { alert("存放位置不能为空！");
     document.save.position.focus();
     return (false);
   }
   if(document.save.content.value=="")
   { alert("内容不能为空！");
     document.save.content.focus();
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
<form name="save" method="post" action="?ac=add&do=save&fileurl=file">
	<input type="hidden" name="savetype" value="add" />
<table class="TableBlock" border="0" width="90%" align="center" style="border-bottom:#4686c6 solid 0px;">

    <tr>
      <td nowrap class="TableContent" width="120"> 档案类目：</td>
      <td class="TableData"><select class="BigStatic" name="filetype">
		<?php get_file_type_option()?>
		</select></td>
      <td class="TableContent" width="120">档案编号：<? get_helps()?></td>
      <td class="TableData">
      <input name="filenumber" type="text" class="BigInput" id="filenumber" style="width: 300px;" maxlength="100" value="<?php echo get_date('YmdHis',PHP_TIME)?>" /></td>
    </tr>
    <tr>
      <td nowrap class="TableContent" width="120"> 档案名称：<? get_helps()?></td>
      <td class="TableData"><input name="filename" type="text" class="BigInput" id="filename" style="width: 300px;" maxlength="100" /></td>
      <td class="TableContent" width="120">保存期限：</td>
      <td class="TableData">
      <select name="enddate" class="BigStatic" id="enddate">
									  <option value="0">请选择</option>
									  <option value="5">五年</option>
									  <option value="99">永久</option>
									  <option selected="selected" value="1">一年</option>
									  <option value="3">三年</option>
									  </select> </td>
    </tr>
	<tr>
      <td nowrap class="TableContent">存放位置：<? get_helps()?></td>
      <td class="TableData"><input name="position" type="text" class="BigInput" id="position" style="width: 300px;" onFocus="this.select();" maxlength="100" /> </td>
      <td class="TableContent">页数：</td>
      <td class="TableData"><input name="page" type="text" class="BigInput" id="page" onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" />      </td>
    </tr>

	
	<tr>
      <td nowrap class="TableHeader" colspan="4"><b>&nbsp;附件</b></td>
    </tr>
	
    <tr>
      <td nowrap class="TableContent">附件一：</td>
      <td colspan="3" class="TableData">
	    <?php echo public_upload('file1','')?>	  </td>
    </tr>
	 <tr>
      <td nowrap class="TableContent">附件二：</td>
      <td colspan="3" class="TableData">
	    <?php echo public_upload('file2','')?>	  </td>
    </tr>
	 <tr>
      <td nowrap class="TableContent">附件三：</td>
      <td colspan="3" class="TableData">
	    <?php echo public_upload('file3','')?>	 </td>
    </tr>
	
	<tr>
      <td nowrap class="TableHeader" colspan="4"><b>&nbsp;正文</b></td>
    </tr>
	</table>
<table  width="90%" style="border-left:#4686c6 solid 1px;border-right:#4686c6 solid 1px;" align="center">
    <tr>
      <td width="124"  style="border-right:#CCCCCC solid 1px;">&nbsp;内容：<? get_helps()?></td>
      <td  style="padding-top:10px; padding-bottom:10px; padding-left:3px;">
<script>
        KE.show({
                id : 'content'
        });
</script>
		<textarea name="content" cols="70" rows="12" class="input" style="width:600px;height:300px;"></textarea>	 
      </td>
    </tr>
</table>
   <table width="90%" align="center" class="TableBlock no-top-border"> 
   
 
    <tr align="center" class="TableControl">
      <td colspan="2" nowrap height="35">

		<input type="button" value="保存" class="BigButtonBHover" onClick="sendForm();"> </td>
    </tr>
  </table>
</form>
 
</body>
</html>
