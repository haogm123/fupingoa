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
    <td class="Big"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3"> 编辑办公用品采购</span>&nbsp;&nbsp;&nbsp;&nbsp;
	<span style="font-size:12px;">
	
	<a href="admin.php?ac=goods_purchase&fileurl=<?php echo $fileurl?>" style="font-size:12px;">返回列表页</a><img src="template/default/content/images/f_ico.png" align="absmiddle"></span>
    </td>
  </tr>
</table>
<script Language="JavaScript"> 
function CheckForm()
{
   if(document.save.number.value=="")
   { alert("单号不能为空！");
     document.save.number.focus();
     return (false);
   }
   if(document.save.application.value=="")
   { alert("申请人不能为空！");
     document.save.application.focus();
     return (false);
   }
   if(document.save.startdate.value=="")
   { alert("申请日期不能为空！");
     document.save.startdate.focus();
     return (false);
   }
   if(document.save.purchase.value=="")
   { alert("采购人不能为空！");
     document.save.purchase.focus();
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
<form name="save" method="post" action="?ac=goods_purchase_edit&do=save&fileurl=goods">
	<input type="hidden" name="savetype" value="edit" />
	<input type="hidden" name="gid" value="<?php echo $blog['id']?>" />
<table class="TableBlock" border="0" width="90%" align="center" style="border-bottom:#4686c6 solid 0px;">
    <tr>
      <td nowrap class="TableContent">单号:<? get_helps()?></td>
      <td class="TableData"><input name="number" type="text" class="BigInput" id="number" style="width: 300px;" value="<?php echo $blog['number']?>" maxlength="100" />  </td>
    </tr>
    <tr>
      <td nowrap class="TableContent" width="15%"> 申请人：<? get_helps()?></td>
      <td class="TableData">
			<?php
	  get_pubuser(1,"application",$blog['application'],"+选择申请人",60,20)
	  ?>
			</td>
    </tr>
    <tr>
      <td nowrap class="TableContent"> 申请日期：<? get_helps()?></td>
      <td class="TableData">
<input name="startdate" type="text" class="BigInput" id="startdate" style="width: 120px;" value="<?php echo $blog['startdate']?>" maxlength="100" onClick="WdatePicker();" />      </td>
    </tr>
	<tr>
      <td nowrap class="TableContent"> 采购人：<? get_helps()?></td>
      <td class="TableData">
			<?php
	  get_pubuser(2,"purchase",$blog['purchase'],"+选择采购人员",50,4)
	  ?>
			<br> 指定该采购单的采购人员!      </td>
    </tr>
	<tr>
      <td nowrap class="TableContent"> 备注：</td>
      <td class="TableData">
        <textarea name="content" cols="60" rows="4" class="BigInput" id="content"><?php echo $blog['content']?></textarea></td>
    </tr>
	
	<tr>
      <td nowrap class="TableHeader" colspan="2"><b>&nbsp;物品设置</b></td>
    </tr>
	<tr>
      <td nowrap class="TableContent"> 采购物品：</td>
      <td class="TableData"><div style="float:left; width:100%; background-color:#FFFFFF; border:1px solid #999999; height:260px;overflow:hidden;overflow-y:scroll;">
	  
	  <table width="95%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="6%" height="30" align="center" bgcolor="#CCCCCC">ID</td>
          <td width="39%" height="30" align="center" bgcolor="#CCCCCC">名称</td>
          <td width="21%" height="30" align="center" bgcolor="#CCCCCC">规格</td>
          <td width="11%" height="30" align="center" bgcolor="#CCCCCC">单位</td>
		  <td width="10%" height="30" align="center" bgcolor="#CCCCCC">数量</td>
          <td width="13%" height="30" align="center" bgcolor="#CCCCCC">单价</td>
        </tr>
		<?foreach ($result as $row) {?>
        <tr>
          <td height="20" align="center">
		  <input type="hidden" name="id[]" value="<?php echo $row['id']?>" />
		  <?php echo $row['id']?></td>
          <td height="20"><input name="goods_title[]" type="text" class="BigInput" style="width: 220px;" value="<?php echo $row['title']?>" /></td>
          <td height="20"><input name="goods_specification[]" type="text" class="BigInput" style="width: 120px;" value="<?php echo $row['specification']?>" /></td>
          <td height="20"><input name="goods_unit[]" type="text" class="BigInput" style="width: 60px;" value="<?php echo $row['unit']?>" /></td>
		  <td height="20"><input name="goods_goodsnumber[]" type="text" class="BigInput" style="width: 40px;" value="<?php echo $row['goodsnumber']?>" onKeyUp="value=value.replace(/[^0-9]/g,'');" /></td>
          <td height="20"><input name="goods_price[]" type="text" class="BigInput" style="width: 40px;" value="<?php echo $row['price']?>" onKeyUp="value=value.replace(/[^0-9^.]/g,'');" />RMB</td>
        </tr>
		<?}?>
        <tr>
          <td height="30" colspan="6"><?php echo showpage($num,$pagesize,$page,$url)?></td>
          </tr>
      </table>
	  </div></td>
    </tr>
	
	
   
 
    <tr align="center" class="TableControl">
      <td colspan="2" nowrap height="35">

		<input type="button" name="Submit" value="保存信息" class="BigButton" onclick="sendForm();">    </td>
    </tr>
  </table>
</form>

 
</body>
</html>
