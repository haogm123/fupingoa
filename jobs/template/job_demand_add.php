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
    <td class="Big"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3"> 新增招聘需求</span>&nbsp;&nbsp;&nbsp;&nbsp;
	<span style="font-size:12px;">
	
	<a href="admin.php?ac=job_demand&fileurl=<?php echo $fileurl?>" style="font-size:12px;">返回列表页</a><img src="template/default/content/images/f_ico.png" align="absmiddle"></span>
    </td>
  </tr>
</table>
<script Language="JavaScript"> 
function CheckForm()
{
   if(document.save.number.value=="")
   { alert("需求编号不能为空！");
     document.save.number.focus();
     return (false);
   }
   if(document.save.jobpost.value=="")
   { alert("招聘岗位不能为空！");
     document.save.jobpost.focus();
     return (false);
   }
   if(document.save.jobnum.value=="")
   { alert("招聘人数不能为空！");
     document.save.jobnum.focus();
     return (false);
   }
   if(document.save.department.value=="")
   { alert("招聘部门不能为空！");
     document.save.department.focus();
     return (false);
   }
   if(document.save.content.value=="")
   { alert("岗位要求不能为空！");
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
<form name="save" method="post" action="?ac=job_demand_add&do=save&fileurl=jobs">
	<input type="hidden" name="savetype" value="add" />
<table class="TableBlock" border="0" width="90%" align="center" style="border-bottom:#4686c6 solid 0px;">
 <tr>
      <td nowrap class="TableContent" width="15%"> 需求编号：<? get_helps()?></td>
      <td class="TableData">
      <input type="text" name="number" class="BigInput" size="40" value="<?php echo get_date('YmdHis',PHP_TIME)?>" /></td>
    </tr>
	
		<tr>
      <td nowrap class="TableContent" width="15%"> 招聘岗位：<? get_helps()?></td>
      <td class="TableData">
      <input type="text" name="jobpost" class="BigInput" style="width:268px;" value="" /></td>
    </tr>
	
	
		<tr>
      <td nowrap class="TableContent" width="15%"> 用人日期：</td>
      <td class="TableData">
      <input type="text" name="persondate" class="BigInput" style="width:168px;" size="20" value="" onClick="WdatePicker();" /></td>
    </tr>
	<tr>
      <td nowrap class="TableContent" width="15%"> 招聘人数：<? get_helps()?></td>
      <td class="TableData">
      <input type="text" name="jobnum" class="BigInput" size="15" value="" onKeyUp="value=value.replace(/[^0-9^.]/g,'');" /> 人</td>
    </tr>
	
    <tr>
      <td nowrap class="TableContent" width="15%"> 招聘部门：<? get_helps()?></td>
      <td class="TableData">
      <?php
	  get_depabox(2,"department","","+选择部门",60,3)
	  ?></td>
    </tr>
	
	<tr>
      <td nowrap class="TableContent"> 附件文档：</td>
      <td class="TableData">
<?php echo public_upload('appendix','')?>
      </td>
    </tr>
	
	
</table>
<table  width="90%" style="border-left:#4686c6 solid 1px;border-right:#4686c6 solid 1px;" align="center">	
    <tr>
      <td width="15%"  style="border-right:#CCCCCC solid 1px;">&nbsp;岗位要求：<? get_helps()?></td>
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
