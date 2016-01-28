<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<link rel="stylesheet" type="text/css" href="template/default/content/css/style.css">
<script language="javascript" type="text/javascript" src="DatePicker/WdatePicker.js"></script>
<script src="template/default/tree/js/admincp.js?SES" type="text/javascript"></script>
<script charset="utf-8" src="eweb/kindeditor.js"></script>

<title>OA办公系统</title>
 
</head>
<body>
<table width="90%" border="0" align="center" cellpadding="3" cellspacing="0" class="small">
  <tr>
    <td class="Big"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3"> 权限配置</span>&nbsp;&nbsp;&nbsp;&nbsp;
	<span style="font-size:12px;">
	
	<a href="admin.php?ac=index&fileurl=<?php echo $fileurl?>" style="font-size:12px;">返回列表页</a><img src="template/default/content/images/f_ico.png" align="absmiddle"></span>
    </td>
  </tr>
</table>
<form name="save" method="post" action="?ac=office_goods_key&do=save&fileurl=goods">
	<input type="hidden" name="savetype" value="add" />
	<input type="hidden" name="id" value="<?php echo $blog['id']?>" />
<table class="TableBlock" border="0" width="90%" align="center" style="border-bottom:#4686c6 solid 0px;">
	<tr>
      <td nowrap class="TableContent"> 采购人员：</td>
      <td class="TableData">

			<?php
	  get_pubuser(2,"purchase",$blog['purchase'],"+选择采购人员",50,4)
	  ?>
			<br> 指该物品的采购负责人员，具有审批采购单申请权限! </td>
    </tr> 
	<tr>
      <td nowrap class="TableContent"> 审批人员：</td>
      <td class="TableData">

			<?php
	  get_pubuser(2,"examination",$blog['examination'],"+选择审批人员",50,4)
	  ?>
			<br> 指该物品的管理人员，具有审批、管理该物品的权限</td>
    </tr> 
	<tr>
      <td nowrap class="TableContent"> 库存管理员：</td>
      <td class="TableData">

		<?php
	  get_pubuser(2,"warehousing",$blog['warehousing'],"+选择库存人员",50,4)
	  ?>
			<br> 指该物品的库存管理员，具有入库、盘点的权限</td>
    </tr>
	
	
	
	
	
 
    <tr align="center" class="TableControl">
      <td colspan="2" nowrap height="35">

		<input type="submit" name="Submit" value="保存信息" class="BigButton">      </td>
    </tr>
  </table>
</form>
 
</body>
</html>
