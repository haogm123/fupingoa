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
    <td class="Big"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3"> <?php echo $blog['name']?>人才库</span>&nbsp;&nbsp;&nbsp;&nbsp;
	<span style="font-size:12px;">
	
	<a href="admin.php?ac=job_talent&fileurl=<?php echo $fileurl?>" style="font-size:12px;">返回列表页</a><img src="template/default/content/images/f_ico.png" align="absmiddle"></span>
    </td>
  </tr>
</table>
<form name="save" method="post" action="#" >


<table class="TableBlock" border="0" width="90%" align="center" style="border-bottom:#4686c6 solid 0px;">
  
 <tr>
      <td nowrap class="TableContent" width="15%"> 人才编号：</td>
      <td class="TableData">
      <?php echo $blog['number']?></td>
    </tr>
	
		<tr>
      <td nowrap class="TableContent" width="15%"> 招聘计划：</td>
      <td class="TableData">
      <?php echo get_job_name($blog['jobpost'])?></td>
    </tr>
	
	
		<tr>
      <td nowrap class="TableContent" width="15%"> 姓名：</td>
      <td class="TableData">
     <?php echo $blog['name']?></td>
    </tr>
	<tr>
      <td nowrap class="TableContent" width="15%"> 性别：</td>
      <td class="TableData">
      <?php echo $blog['sex']?></td>
    </tr>
	
    <tr>
      <td nowrap class="TableContent" width="15%"> 联系电话：</td>
      <td class="TableData">
      <?php echo $blog['contact']?></td>
    </tr>
	
	<tr>
      <td nowrap class="TableContent"> 应聘岗位：</td>
      <td class="TableData"><?php echo get_postname($blog['job'])?>

      </td>
    </tr>
	<tr>
      <td nowrap class="TableContent"> 学历：</td>
      <td class="TableData"><?php echo get_typename($blog["education"])?>
			
      </td>
    </tr>
	<tr>
      <td nowrap class="TableContent"> 附件简历：</td>
      <td class="TableData">
<a href="down.php?urls=<?php echo $blog['appendix']?>" target="_blank" >附件下载</a>      </td>
    </tr>
	<tr>
      <td nowrap class="TableContent"> 简历：</td>
      <td class="TableData"><?php echo $blog['content']?></td>
    </tr>
	
</table>

</form>
</body>
</html>
