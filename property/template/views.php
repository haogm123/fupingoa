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
    <td class="Big"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3"> 查看固定资产</span>&nbsp;&nbsp;&nbsp;&nbsp;
	<span style="font-size:12px;">
	
	<a href="admin.php?ac=index&fileurl=<?php echo $fileurl?>" style="font-size:12px;">返回列表页</a><img src="template/default/content/images/f_ico.png" align="absmiddle"></span>
    </td>
  </tr>
</table>
<form name="save" method="post" action="">
<table class="TableBlock" border="0" width="90%" align="center">

    <tr>
      <td nowrap class="TableContent" width="15%"> 资产类别：</td>
      <td class="TableData">
        <?php echo GET_FILE_PUBLIC_LIST($blog['property_type'])?>	</td>
    </tr>
    <tr>
      <td nowrap class="TableContent"> 资产编号：</td>
      <td class="TableData">  <?php echo $blog['number']?>   </td>
    </tr>
	<tr>
      <td nowrap class="TableContent"> 资产名称：</td>
      <td class="TableData">
<?php echo $blog['name']?>  </td>
    </tr>
	<tr>
      <td nowrap class="TableContent"> 所属部门：</td>
      <td class="TableData">
	  <?php echo get_realdepaname($blog['department'])?>
</td>
    </tr>
	<tr>
      <td nowrap class="TableContent"> 资产净值：</td>
      <td class="TableData">
<?php echo $blog['cptl_val']?>     </td>
    </tr>
	<tr>
      <td nowrap class="TableContent"> 残值：</td>
      <td class="TableData"><?php echo $blog['cptl_bal']?>     </td>
    </tr>
	<tr>
      <td nowrap class="TableContent"> 折旧年限：</td>
      <td class="TableData"><?php echo $blog['dpct_yy']?> </td>
    </tr>
	<tr>
      <td nowrap class="TableContent"> 累计折旧：</td>
      <td class="TableData"><?php echo $blog['sum_dpct']?> </td>
    </tr>
	<tr>
      <td nowrap class="TableContent"> 月折旧额：</td>
      <td class="TableData"><?php echo $blog['mon_dpct']?>
</td>
    </tr>
	<tr>
      <td nowrap class="TableContent"> 启用日期：</td>
      <td class="TableData"><?php echo $blog['startdate']?> </td>
    </tr>
	
	<tr>
      <td nowrap class="TableContent"> 保管人：</td>
      <td class="TableData"><?php echo $blog['user']?>     </td>
    </tr>
	
	<tr>
      <td nowrap class="TableContent"> 备注：</td>
      <td class="TableData"><?php echo $blog['content']?> </td>
    </tr>
	
	
	
	
	

    </tr>
  </table>
</form>
 
</body>
</html>
