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
    <td class="Big"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3"> <?php echo $blog['jobpost']?> 招聘计划</span>&nbsp;&nbsp;&nbsp;&nbsp;
	<span style="font-size:12px;">
	
	<a href="admin.php?ac=index&fileurl=<?php echo $fileurl?>" style="font-size:12px;">返回列表页</a><img src="template/default/content/images/f_ico.png" align="absmiddle"></span>
    </td>
  </tr>
</table>
	<form name="save" method="post" action="?ac=views&do=save&fileurl=jobs" >
	<input type="hidden" name="savetype" value="edit" />
	<input type="hidden" name="id" value="<?php echo $blog['id']?>" />
<table class="TableBlock" border="0" width="90%" align="center" style="border-bottom:#4686c6 solid 0px;">
 <?php if($_GET["keys"]=='1'){?>
 <tr>
      <td nowrap class="TableContent" width="15%"> 审批状态：</td>
      <td class="TableData"><input name="type" type="radio" value="2" checked="checked" />
        批准
          <input name="type" type="radio" value="3" />
        拒绝</td>
    </tr>
   <tr align="center" class="TableControl">
      <td colspan="2" nowrap height="35">

		<input type="submit" name="Submit" value="审批信息" class="BigButton"> 
        
      </td>
    </tr>
	<?php }?>
	<tr>
      <td nowrap class="TableContent" width="15%"> 计划编号：</td>
      <td class="TableData">
      <?php echo $blog['number']?></td>
    </tr>
	<tr>
      <td nowrap class="TableContent" width="15%"> 计划名称：</td>
      <td class="TableData">
      <?php echo $blog['jobpost']?></td>
    </tr>
	<tr>
      <td nowrap class="TableContent" width="15%"> 招聘渠道：</td>
      <td class="TableData">
      <?php echo get_typename($blog["channel"])?></td>
    </tr>
		<tr>
      <td nowrap class="TableContent" width="15%"> 招聘费用：</td>
      <td class="TableData">
      <?php echo $blog['price']?> RMB</td>
    </tr>
	
	<tr>
      <td nowrap class="TableContent" width="15%"> 开始日期：</td>
      <td class="TableData">
      <?php echo $blog['startdate']?></td>
    </tr>
	<tr>
      <td nowrap class="TableContent" width="15%"> 结束日期：</td>
      <td class="TableData">
      <?php echo $blog['enddate']?></td>
    </tr>

	<tr>
      <td nowrap class="TableContent" width="15%"> 招聘人数：</td>
      <td class="TableData">
      <?php echo $blog['jobnum']?> 人</td>
    </tr>
     <tr>
      <td nowrap class="TableContent" width="15%"> 审批人员：</td>
      <td class="TableData">
      <?php echo $blog['examination']?></td>
    </tr>
	<tr>
      <td nowrap class="TableContent"> 附件文档：</td>
      <td class="TableData">

 <a href="down.php?urls=<?php echo $blog['appendix']?>" target="_blank" >附件下载</a>      </td>
    </tr>
	<tr>
      <td nowrap class="TableContent"> 招聘说明：</td>
      <td class="TableData">
<?php echo $blog['content']?>     </td>
    </tr>

</table>
<table class="TableBlock" border="0" width="90%" align="center" style="border-bottom:#4686c6 solid 0px;">

 
    
    
  </table>
</form>
 
</body>
</html>
