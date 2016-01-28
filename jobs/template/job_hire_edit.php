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
    <td class="Big"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3"> 人才录用</span>&nbsp;&nbsp;&nbsp;&nbsp;
	<span style="font-size:12px;">
	
	<a href="admin.php?ac=job_hire&fileurl=<?php echo $fileurl?>" style="font-size:12px;">返回列表页</a><img src="template/default/content/images/f_ico.png" align="absmiddle"></span>
    </td>
  </tr>
</table>
<script Language="JavaScript"> 
function CheckForm()
{
   if(document.save.job_talent.value=="")
   { alert("被录用人不能为空！");
     document.save.job_talent.focus();
     return (false);
   }
   if(document.save.jobpost.value=="")
   { alert("招聘计划不能为空！");
     document.save.jobpost.focus();
     return (false);
   }
   if(document.save.user.value=="")
   { alert("录用负责人不能为空！");
     document.save.user.focus();
     return (false);
   }
   if(document.save.department.value=="")
   { alert("用人部门不能为空！");
     document.save.department.focus();
     return (false);
   }
   if(document.save.hiredate.value=="")
   { alert("录用日期不能为空！");
     document.save.hiredate.focus();
     return (false);
   }
   if(document.save.job.value=="")
   { alert("录用岗位不能为空！");
     document.save.job.focus();
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
	<form name="save" method="post" action="?ac=job_hire_edit&do=save&fileurl=jobs" >
	<input type="hidden" name="savetype" value="edit" />
	<input type="hidden" name="id" value="<?php echo $blog['id']?>" />
<table class="TableBlock" border="0" width="90%" align="center" style="border-bottom:#4686c6 solid 0px;">
 <tr>
      <td nowrap class="TableContent" width="15%"> 被录用人：<? get_helps()?></td>
      <td class="TableData">
      <select name="job_talent" class="BigStatic">
			<option value="0" selected="selected">请选择人员</option>
			<?php echo get_talent_option($blog['job_talent'])?>
			</select></td>
    </tr>
	
		<tr>
      <td nowrap class="TableContent" width="15%"> 招聘计划：<? get_helps()?></td>
      <td class="TableData">
      <select name="jobpost" class="BigStatic">
			<option value="0" selected="selected">请选择计划</option>
			<?php echo get_job_option($blog['jobpost'])?>
			</select></td>
    </tr>
	
	
		<tr>
      <td nowrap class="TableContent" width="15%"> 录用负责人：<? get_helps()?></td>
      <td class="TableData">
      
	  <?php
	  get_pubuser(2,"user",$blog['user'],"+选择录用负责人",50,4)
	  ?>
	  </td>
    </tr>
	<tr>
      <td nowrap class="TableContent" width="15%"> 用人部门：<? get_helps()?></td>
      <td class="TableData">
     
	   <?php
	  get_depabox(1,"department",$blog['department'],"+选择部门",120,20)
	  ?>
	  </td>
    </tr>
	
    <tr>
      <td nowrap class="TableContent" width="15%"> 录用日期：<? get_helps()?></td>
      <td class="TableData">
      <input type="text" name="hiredate" class="BigInput" style="width:168px;" size="20" value="<?php echo $blog['hiredate']?>" onClick="WdatePicker();" /></td>
    </tr>
	
	<tr>
      <td nowrap class="TableContent"> 录用岗位：<? get_helps()?></td>
      <td class="TableData">
<select class="BigStatic" name="job">
											<option value="0" ></option>
											<?php get_postlist(0,$blog['job'])?>
										</select>
      </td>
    </tr>
	<tr>
      <td nowrap class="TableContent"> 备注：</td>
      <td class="TableData">

 <input type="text" name="content" class="BigInput" size="60" value="<?php echo $blog['content']?>" />
      </td>
    </tr>

    
    <tr align="center" class="TableControl">
      <td colspan="2" nowrap height="35">

		<input type="button" name="Submit" value="保存信息" class="BigButton" onclick="sendForm();">
        
      </td>
    </tr>
  </table>
</form>
 
</body>
</html>
