<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<link rel="stylesheet" type="text/css" href="template/default/content/css/style.css">
<script language="javascript" type="text/javascript" src="DatePicker/WdatePicker.js"></script>
<script src="template/default/tree/js/admincp.js?SES" type="text/javascript"></script>
<script charset="utf-8" src="eweb/kindeditor.js"></script>

<title>Office 515158 2011 OA办公系统</title>
 
</head>
<body>
<table width="90%" border="0" align="center" cellpadding="3" cellspacing="0" class="small">
  <tr>
    <td class="Big"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3"> 图书信息编辑</span>&nbsp;&nbsp;&nbsp;&nbsp;
	<span style="font-size:12px;">
	
	<a href="admin.php?ac=index&fileurl=<?php echo $fileurl?>" style="font-size:12px;">返回列表页</a><img src="template/default/content/images/f_ico.png" align="absmiddle"></span>
    </td>
  </tr>
</table>
<script Language="JavaScript"> 
function CheckForm()
{
   if(document.save.bookumber.value=="")
   { alert("图书编号不能为空！");
     document.save.bookumber.focus();
     return (false);
   }
   if(document.save.bookname.value=="")
   { alert("图书名称不能为空！");
     document.save.bookname.focus();
     return (false);
   }
   if(document.save.author.value=="")
   { alert("作者不能为空！");
     document.save.author.focus();
     return (false);
   }
   if(document.save.appendix.value=="")
   { alert("存放地点不能为空！");
     document.save.appendix.focus();
     return (false);
   }
   if(document.save.booknum.value=="")
   { alert("图书数量不能为空！");
     document.save.booknum.focus();
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
<form name="save" method="post" action="?ac=edit&do=save&fileurl=book">
	<input type="hidden" name="savetype" value="edit" />
	<input type="hidden" name="id" value="<?php echo $blog['id']?>" />
<table class="TableBlock" border="0" width="90%" align="center" style="border-bottom:#4686c6 solid 0px;">
    <tr>
      <td nowrap class="TableData" width="15%"> 图书类目：</td>
      <td class="TableData">
        <select class="BigStatic" name="booktype">
		<?php get_book_type(0,$blog['booktype'])?>
		</select>	</td>
    </tr>
    <tr>
      <td nowrap class="TableData"> 图书编号：<? get_helps()?></td>
      <td class="TableData">
<input name="bookumber" type="text" value="<?php echo $blog['bookumber']?>" class="BigInput" id="bookumber" style="width: 200px;" maxlength="100" />      </td>
    </tr>
	<tr>
      <td nowrap class="TableData"> 图书名称：<? get_helps()?></td>
      <td class="TableData">
<input name="bookname" type="text" class="BigInput" id="bookname" value="<?php echo $blog['bookname']?>" style="width: 300px;" maxlength="100" />      </td>
    </tr>
	<tr>
      <td nowrap class="TableData"> 作者：<? get_helps()?></td>
      <td class="TableData">
<input name="author" type="text" class="BigInput" id="author" value="<?php echo $blog['author']?>" style="width: 100px;" maxlength="100" /></td>
    </tr>
	<tr>
      <td nowrap class="TableData"> 出版社：</td>
      <td class="TableData">
<input name="publishing" type="text" class="BigInput" id="publishing" value="<?php echo $blog['publishing']?>" style="width: 300px;"  maxlength="100" />      </td>
    </tr>
	<tr>
      <td nowrap class="TableData"> 存放地点：<? get_helps()?></td>
      <td class="TableData">
<input name="appendix" type="text" class="BigInput" id="appendix" value="<?php echo $blog['appendix']?>" size="40" style="width: 350px;" />      </td>
    </tr>
	<tr>
      <td nowrap class="TableData"> 图书数量：<? get_helps()?></td>
      <td class="TableData">
<input name="booknum" type="text" class="BigInput" id="booknum" style="width: 80px;" onKeyUp="value=value.replace(/[^0-9]/g,'');" value="<?php echo $blog['booknum']?>" size="40" /> 
填写数字，该图书的数里  </td>
    </tr>
	
	
	
	
	
	
	<tr>
      <td nowrap class="TableHeader" colspan="2"><b>&nbsp;正文</b></td>
    </tr>
	
	</table>
<table  width="90%" style="border-left:#4686c6 solid 1px;border-right:#4686c6 solid 1px;" align="center">
    <tr>
      <td width="15%"  style="border-right:#CCCCCC solid 1px;">&nbsp;内容：<? get_helps()?></td>
      <td width="85%" style="padding-top:10px; padding-bottom:10px; padding-left:3px;"><script charset="utf-8" src="eweb/kindeditor.js"></script>
<script>
        KE.show({
                id : 'content'
        });
</script>
		<textarea name="content" cols="70" rows="12" class="input" style="width:600px;height:300px;"><?php echo $blog['content']?></textarea>	 
      </td>
    </tr>
</table>
<table width="90%" align="center" class="TableBlock no-top-border"> 
   
 
    <tr align="center" class="TableControl">
      <td colspan="2" nowrap height="35">

		<input type="button" name="Submit" value="保存信息" class="BigButton" onclick="sendForm();">       </td>
    </tr>
  </table>
</form>

</body>
</html>
