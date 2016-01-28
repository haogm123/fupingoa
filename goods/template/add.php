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
    <td class="Big"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3"> 办公用品添加</span>&nbsp;&nbsp;&nbsp;&nbsp;
	<span style="font-size:12px;">
	
	<a href="admin.php?ac=index&fileurl=<?php echo $fileurl?>" style="font-size:12px;">返回列表页</a><img src="template/default/content/images/f_ico.png" align="absmiddle"></span>
    </td>
  </tr>
</table>
<script Language="JavaScript"> 
function CheckForm()
{
   if(document.save.goods_type.value=="")
   { alert("分类不能为空！");
     document.save.goods_type.focus();
     return (false);
   }
   if(document.save.title.value=="")
   { alert("名称不能为空！");
     document.save.title.focus();
     return (false);
   }
   if(document.save.number.value=="")
   { alert("编号不能为空！");
     document.save.number.focus();
     return (false);
   }
   if(document.save.unit.value=="")
   { alert("单位不能为空！");
     document.save.unit.focus();
     return (false);
   }
   if(document.save.price.value=="")
   { alert("单价不能为空！");
     document.save.price.focus();
     return (false);
   }
   if(document.save.content.value=="")
   { alert("内容描述不能为空！");
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

<form name="save" method="post" action="?ac=add&do=save&fileurl=goods">
	<input type="hidden" name="savetype" value="add" />
<table class="TableBlock" border="0" width="90%" align="center" style="border-bottom:#4686c6 solid 0px;">
    <tr>
      <td nowrap class="TableContent" width="15%"> 分类：<? get_helps()?></td>
      <td class="TableData">
        <select class="SelectStyle" name="goods_type">
		<?php GET_FILE_PUBLIC_LIST()?>
		</select>	还没有分类? <a href="admin.php?ac=goods_type_add&fileurl=goods">点击添加分类>> </a></td>
    </tr>
    <tr>
      <td nowrap class="TableContent"> 编号：<? get_helps()?></td>
      <td class="TableData">
<input name="number" type="text" class="BigInput" id="number" style="width: 300px;" value="<?php echo get_date('YmdHis',PHP_TIME)?>" maxlength="100" />      </td>
    </tr>
	<tr>
      <td nowrap class="TableContent"> 名称：<? get_helps()?></td>
      <td class="TableData">
<input name="title" type="text" class="BigInput" id="title" style="width: 300px;" maxlength="100" />      </td>
    </tr>
	<tr>
      <td nowrap class="TableContent"> 规格：</td>
      <td class="TableData">
<input name="specification" type="text" class="BigInput" id="specification" style="width: 300px;" maxlength="100" /></td>
    </tr>
	<tr>
      <td nowrap class="TableContent"> 单位：<? get_helps()?></td>
      <td class="TableData">
<input name="unit" type="text" class="BigInput" id="unit" style="width: 300px;"  maxlength="100" />      </td>
    </tr>
	<tr>
      <td nowrap class="TableContent"> 单价：<? get_helps()?></td>
      <td class="TableData">
<input name="price" type="text" class="BigInput" id="price" size="40" style="width: 100px;" onKeyUp="value=value.replace(/[^0-9^.]/g,'');" />/元  非中文，如填写格式"2.68"  </td>
    </tr>
<!--	<tr>
      <td nowrap class="TableHeader" colspan="2"><b>&nbsp;审批设置</b></td>
    </tr>
	<tr>
      <td nowrap class="TableData"> 采购人员：</td>
      <td class="TableData">
<a href="#" onClick="window.open ('admin.php?ac=oamember&fileurl=approval&inputname=purchase', 'newwindow', 'height=500, width=550, top=0, left=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=no, status=no')" >
			选择采购人员
			</a><input type="text" name="purchase" value="" style="border:0px; background-color:#FFFFFF; width:400px;"><br> 指该物品的采购负责人员,具有审批采购单申请权限! </td>
    </tr>
	<tr>
      <td nowrap class="TableData"> 审批人员：</td>
      <td class="TableData">
<a href="#" onClick="window.open ('admin.php?ac=oamember&fileurl=approval&inputname=examination', 'newwindow', 'height=500, width=550, top=0, left=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=no, status=no')" >
			选择审批人员
			</a><input type="text" name="examination" value="" style="border:0px; background-color:#FFFFFF; width:400px;"><br> 指该物品的管理人员，具有审批、管理该物品的权限</td>
    </tr>
	<tr>
      <td nowrap class="TableData"> 库存管理员：</td>
      <td class="TableData">
<a href="#" onClick="window.open ('admin.php?ac=oamember&fileurl=approval&inputname=warehousing', 'newwindow', 'height=500, width=550, top=0, left=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=no, status=no')" >
			选择库存人员
			</a><input type="text" name="warehousing" value="" style="border:0px; background-color:#FFFFFF; width:400px;"><br> 指该物品的库存管理员，具有入库、盘点的权限</td>
    </tr> -->

	
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
		<textarea name="content" cols="70" rows="12" class="input" style="width:600px;height:300px;"></textarea>	 
      </td>
    </tr>
</table>
<table width="90%" align="center" class="TableBlock no-top-border"> 
  
   
 
    <tr align="center" class="TableControl">
      <td colspan="2" nowrap height="35">

		<input type="button" name="Submit" value="保存信息" class="BigButton" onclick="sendForm();">      </td>
    </tr>
  </table>
</form>

 
</body>
</html>
