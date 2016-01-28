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
    <td class="Big"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3"> 新增人才</span>&nbsp;&nbsp;&nbsp;&nbsp;
	<span style="font-size:12px;">
	
	<a href="admin.php?ac=job_talent&fileurl=<?php echo $fileurl?>" style="font-size:12px;">返回列表页</a><img src="template/default/content/images/f_ico.png" align="absmiddle"></span>
    </td>
  </tr>
</table>
<script Language="JavaScript"> 
function CheckForm()
{
   if(document.save.number.value=="")
   { alert("人才编号不能为空！");
     document.save.number.focus();
     return (false);
   }
   if(document.save.jobpost.value=="")
   { alert("招聘计划不能为空！");
     document.save.jobpost.focus();
     return (false);
   }
   if(document.save.name.value=="")
   { alert("姓名不能为空！");
     document.save.name.focus();
     return (false);
   }
   if(document.save.contact.value=="")
   { alert("联系电话不能为空！");
     document.save.contact.focus();
     return (false);
   }
   if(document.save.job.value=="")
   { alert("应聘岗位不能为空！");
     document.save.job.focus();
     return (false);
   }
   if(document.save.education.value=="")
   { alert("学历不能为空！");
     document.save.education.focus();
     return (false);
   }
   if(document.save.content.value=="")
   { alert("简历不能为空！");
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
<form name="save" method="post" action="?ac=job_talent_add&do=save&fileurl=jobs">
	<input type="hidden" name="savetype" value="add" />
<table class="TableBlock" border="0" width="90%" align="center" style="border-bottom:#4686c6 solid 0px;">
 <tr>
      <td nowrap class="TableContent" width="15%"> 人才编号：<? get_helps()?></td>
      <td class="TableData">
      <input type="text" name="number" class="BigInput" size="40" value="<?php echo get_date('YmdHis',PHP_TIME)?>" /></td>
    </tr>
	
		<tr>
      <td nowrap class="TableContent" width="15%"> 招聘计划：<? get_helps()?></td>
      <td class="TableData">
      <select name="jobpost" class="BigStatic">
			<option value="" selected="selected">请选择计划</option>
			<?php echo get_job_option(0)?>
			</select></td>
    </tr>
	
	
		<tr>
      <td nowrap class="TableContent" width="15%"> 姓名：<? get_helps()?></td>
      <td class="TableData">
	  <?php
	  get_pubuser(1,"name","","+选择",70,20)
	  ?>
	  </td>
    </tr>
	<tr>
      <td nowrap class="TableContent" width="15%"> 性别：<? get_helps()?></td>
      <td class="TableData">
      <input name="sex" type="radio" value="男" checked style="border:0;" />男
			<input name="sex" type="radio" style="border:0;" value="女" />
			女	</td>
    </tr>
	
    <tr>
      <td nowrap class="TableContent" width="15%"> 联系电话：<? get_helps()?></td>
      <td class="TableData">
      <input type="text" name="contact" value="" class="BigInput" size="30"></td>
    </tr>
	
	<tr>
      <td nowrap class="TableContent"> 应聘岗位：<? get_helps()?></td>
      <td class="TableData">
<select class="BigStatic" name="job">
											<option value="0" ></option>
											<?php get_postlist(0,0)?>
										</select>
      </td>
    </tr>
	<tr>
      <td nowrap class="TableContent"> 学历：<? get_helps()?></td>
      <td class="TableData"><select name="education" class="BigStatic">
			<option value="0" selected="selected">请选择学历</option>
			<?php echo get_typelist(0,10)?>
			</select>
      </td>
    </tr>
	<tr>
      <td nowrap class="TableContent"> 附件简历：</td>
      <td class="TableData">
<?php echo public_upload('appendix','')?>
      </td>
    </tr>
	
</table>
<table  width="90%" style="border-left:#4686c6 solid 1px;border-right:#4686c6 solid 1px;" align="center">
    <tr>
      <td width="15%"  style="border-right:#CCCCCC solid 1px;">&nbsp;简历：<? get_helps()?></td>
      <td width="85%" style="padding-top:10px; padding-bottom:10px; padding-left:3px;"><script charset="utf-8" src="eweb/kindeditor.js"></script>
<script>
        KE.show({
                id : 'content'
        });
</script>
		<textarea name="content" cols="70" rows="12" class="input" style="width:600px;height:300px;"></textarea>	 
      </td>
    </tr>
</table>
<table class="TableBlock" border="0" width="90%" align="center" style="border-bottom:#4686c6 solid 0px;">
    <tr align="center" class="TableControl">
      <td colspan="2" nowrap height="35">

		<input type="button" name="Submit" value="保存信息" class="BigButton" onclick="sendForm();">
        
      </td>
    </tr>
  </table>
</form>
 
</body>
</html>
