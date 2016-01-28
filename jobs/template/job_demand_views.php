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
    <td class="Big"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3"> 查看招聘需求</span>&nbsp;&nbsp;&nbsp;&nbsp;
	<span style="font-size:12px;">
	
	<a href="admin.php?ac=job_demand&fileurl=<?php echo $fileurl?>" style="font-size:12px;">返回列表页</a><img src="template/default/content/images/f_ico.png" align="absmiddle"></span>
    </td>
  </tr>
</table>
	<form name="save" method="post" action="#" >
<table class="TableBlock" border="0" width="90%" align="center" style="border-bottom:#4686c6 solid 0px;">
 <tr>
      <td nowrap class="TableContent" width="15%"> 需求编号：</td>
      <td class="TableData">
      <?php echo $blog['number']?></td>
    </tr>
	
		<tr>
      <td nowrap class="TableContent" width="15%"> 招聘岗位：</td>
      <td class="TableData">
      <?php echo $blog['jobpost']?></td>
    </tr>
	
	
		<tr>
      <td nowrap class="TableContent" width="15%"> 用人日期：</td>
      <td class="TableData">
      <?php echo $blog['persondate']?></td>
    </tr>
	<tr>
      <td nowrap class="TableContent" width="15%"> 招聘人数：</td>
      <td class="TableData">
      <?php echo $blog['jobnum']?> 人</td>
    </tr>
	
    <tr>
      <td nowrap class="TableContent" width="15%"> 招聘部门：</td>
      <td class="TableData"><?php echo $blog['department']?></td>
    </tr>
	
	<tr>
      <td nowrap class="TableContent"> 附件文档：</td>
      <td class="TableData">
<a href="down.php?urls=<?php echo $blog['appendix']?>" target="_blank">附件下载</a>      </td>
    </tr>
	<tr>
      <td nowrap class="TableContent"> 岗位要求：</td>
      <td class="TableData"><?php echo $blog['content']?>    </td>
    </tr>
	
</table>

</form>
 
 
</body>
</html>
