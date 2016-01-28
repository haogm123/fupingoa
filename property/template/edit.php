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
    <td class="Big"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3"> 编辑固定资产</span>&nbsp;&nbsp;&nbsp;&nbsp;
	<span style="font-size:12px;">
	
	<a href="admin.php?ac=index&fileurl=<?php echo $fileurl?>" style="font-size:12px;">返回列表页</a><img src="template/default/content/images/f_ico.png" align="absmiddle"></span>
    </td>
  </tr>
</table>
<script Language="JavaScript"> 
function CheckForm()
{
   if(document.save.name.value=="")
   { alert("资产名称不能为空！");
     document.save.name.focus();
     return (false);
   }
   if(document.save.department.value=="")
   { alert("所属部门不能为空！");
     document.save.department.focus();
     return (false);
   }
   if(document.save.cptl_val.value=="")
   { alert("资产净值不能为空！");
     document.save.cptl_val.focus();
     return (false);
   }
   if(document.save.cptl_bal.value=="")
   { alert("残值(率)不能为空！");
     document.save.cptl_bal.focus();
     return (false);
   }
   if(document.save.dpct_yy.value=="")
   { alert("折旧年限不能为空！");
     document.save.dpct_yy.focus();
     return (false);
   }
   if(document.save.sum_dpct.value=="")
   { alert("累计折旧不能为空！");
     document.save.sum_dpct.focus();
     return (false);
   }
   if(document.save.mon_dpct.value=="")
   { alert("月折旧额不能为空！");
     document.save.mon_dpct.focus();
     return (false);
   }
   if(document.save.startdate.value=="")
   { alert("启用日期不能为空！");
     document.save.startdate.focus();
     return (false);
   }
   if(document.save.user.value=="")
   { alert("保管人不能为空！");
     document.save.user.focus();
     return (false);
   }
   
   return true;
}
function sendForm()
{
   if(CheckForm())
      document.save.submit();
}
 
//verify for netscape/mozilla
var isNS4 = (navigator.appName=="Netscape")?1:0;
 
function check_input()
{
  if(!isNS4)
  {
  	 if(event.keyCode < 45 || event.keyCode > 57)
  	    event.returnValue = false;
  }
  else
  {
  	 if(event.which < 45 || event.which > 57)
  	    return false;
  }  
}
 
function  ForDight(Dight,How)  
{  
           Dight  =  Math.round  (Dight*Math.pow(10,How))/Math.pow(10,How);  
           return  Dight;  
} 
 
function check_value(obj)
{
   
   if(obj.value=="")
      return;
   val=parseFloat(obj.value);
   if(isNaN(val))
   {
      alert("非法的数字");
      obj.focus();
      return;
   }
   if(val<0)
   {
      alert("数值不能小于0");
      obj.focus();
      return;
   }
   
   obj.value=ForDight(val,2);
 
   value_array=obj.value.split(".");
   if(value_array.length==1)
   {
   	  obj.value=value_array[0]+".00";
   	  return;
   }
   else if(value_array.length==2)
   {
   	  if(value_array[1].length==0)
   	    obj.value=value_array[0]+".00";
   	  else if(value_array[1].length==1)
   	    obj.value=value_array[0]+"."+value_array[1]+"0";
   	  else if(value_array[1].length>=2)
   	    obj.value=value_array[0]+"."+value_array[1].substr(0,2);
   }
}
 
function cal_mon_dpct()
{
   if(save.cptl_val.value=="")
   {
      alert("\"资产净值\"不能为空");
      document.save.cptl_val.focus();
      return;
   }
   if(save.cptl_bal.value=="")
   {
      alert("\"残值(率)\"不能为空");
      document.save.cptl_bal.focus();
      return;
   }
   if(save.dpct_yy.value=="")
   {
      alert("\"折旧年限\"不能为空");
      document.save.dpct_yy.focus();
      return;
   }
   if(save.sum_dpct.value=="")
   {
      save.sum_dpct.value="0.00";
      
   }
   
   _cptl_val=ForDight(parseFloat(save.cptl_val.value),2);
   _sum_dpct=ForDight(parseFloat(save.sum_dpct.value),2);
   _cptl_bal=ForDight(parseFloat(save.cptl_bal.value),2);
   _dpct_yy=ForDight(parseFloat(save.dpct_yy.value),2);
   if(_cptl_val<0)
   {
      alert("\"资产净值\"不能小于0");
      document.save.cptl_val.focus();
      return;
   }
   if(_sum_dpct<0)
   {
      alert("\"累计折旧\"不能小于0");
      document.save.sum_dpct.focus();
      return;
   }
   if(_cptl_bal<0)
   {
      alert("\"残值(率)\"不能小于0");
      document.save.cptl_bal.focus();
      return;
   }
   if(_dpct_yy<0)
   {
      alert("\"折旧年限\"不能小于0");
      document.save.dpct_yy.focus();
      return;
   }
    if(_cptl_val<_sum_dpct+_cptl_bal)
    {
       alert("\"残值\"和\"累计折旧\"之和不能大于\"资产净值\"");
       return;
    }
    _mon_dpct=(_cptl_val-_sum_dpct-_cptl_bal)/(_dpct_yy*12);
   save.mon_dpct.value=ForDight(_mon_dpct,2);
 
   check_value(save.mon_dpct);
}
 
</script>
<form name="save" method="post" action="?ac=edit&do=save&fileurl=property">
	<input type="hidden" name="savetype" value="edit" />
	<input type="hidden" name="id" value="<?php echo $blog['id']?>" />
<table class="TableBlock" border="0" width="90%" align="center">

    <tr>
      <td nowrap class="TableContent" width="15%"> 资产类别：</td>
      <td class="TableData">
        <select class="BigStatic" name="property_type">
		<?php get_property_type($blog['property_type'])?>
		</select>	</td>
    </tr>
    <tr>
      <td nowrap class="TableContent"> 资产编号：</td>
      <td class="TableData">  <?php echo $blog['number']?>   </td>
    </tr>
	<tr>
      <td nowrap class="TableContent"> 资产名称：<? get_helps()?></td>
      <td class="TableData">
<input name="name" type="text" class="BigInput" id="name" value="<?php echo $blog['name']?>" style="width: 300px;" maxlength="100" />      </td>
    </tr>
	<tr>
      <td nowrap class="TableContent"> 所属部门：</td>
      <td class="TableData">
<select class="BigStatic" name="department">
											<option value="0" ></option>
											<?php get_realdepalist(0,$blog['department'])?>
										</select></td>
    </tr>
	<tr>
      <td nowrap class="TableContent"> 资产净值：<? get_helps()?></td>
      <td class="TableData">
<input name="cptl_val" type="text" class="BigInput" id="cptl_val" onKeyUp="value=value.replace(/[^0-9^.]/g,'');" value="<?php echo $blog['cptl_val']?>" onkeypress="check_input()" onblur="check_value(this)" style="width: 120px;"  maxlength="100" />&nbsp;只能填写数字      </td>
    </tr>
	<tr>
      <td nowrap class="TableContent"> 残值：<? get_helps()?></td>
      <td class="TableData">
<input name="cptl_bal" type="text" class="BigInput" id="cptl_bal" onKeyUp="value=value.replace(/[^0-9^.]/g,'');" value="<?php echo $blog['cptl_bal']?>" onkeypress="check_input()" onblur="check_value(this)" size="40" style="width: 120px;" />&nbsp;只能填写数字     </td>
    </tr>
	<tr>
      <td nowrap class="TableContent"> 折旧年限：<? get_helps()?></td>
      <td class="TableData">
<input name="dpct_yy" type="text" class="BigInput" id="dpct_yy" style="width: 120px;" onKeyUp="value=value.replace(/[^0-9^.]/g,'');" value="<?php echo $blog['dpct_yy']?>" onkeypress="check_input()" onblur="check_value(this)" size="40" />&nbsp;只能填写数字 </td>
    </tr>
	<tr>
      <td nowrap class="TableContent"> 累计折旧：<? get_helps()?></td>
      <td class="TableData">
<input name="sum_dpct" type="text" class="BigInput" id="sum_dpct" style="width: 120px;" onKeyUp="value=value.replace(/[^0-9^.]/g,'');" value="<?php echo $blog['sum_dpct']?>" onkeypress="check_input()" onblur="check_value(this)"  size="40" />&nbsp;只能填写数字 </td>
    </tr>
	<tr>
      <td nowrap class="TableContent"> 月折旧额：<? get_helps()?></td>
      <td class="TableData">
<input name="mon_dpct" type="text" value="<?php echo $blog['mon_dpct']?>" class="BigInput" id="mon_dpct" style="width: 120px;" onKeyUp="value=value.replace(/[^0-9^.]/g,'');"  size="40" readonly /> <input type="button" name="MON_DPCT_CAL"  class="SmallButton" onclick="cal_mon_dpct()" value="计算">
</td>
    </tr>
	<tr>
      <td nowrap class="TableContent"> 启用日期：<? get_helps()?></td>
      <td class="TableData">
<input name="startdate" type="text" class="BigInput" id="startdate" onClick="WdatePicker();" style="width: 200px;" value="<?php echo $blog['startdate']?>" size="40" /> </td>
    </tr>
	
	<tr>
      <td nowrap class="TableContent"> 保管人：<? get_helps()?></td>
      <td class="TableData">
<?php
	  get_pubuser(2,"user",$blog['user'],"+选择保管人员",50,4)
	  ?><br> 指定该资产的保管人员      </td>
    </tr>
	</table>	
	<table  width="90%" style="border-left:#4686c6 solid 1px;border-right:#4686c6 solid 1px;" align="center">	
	<tr>
      <td nowrap class="TableContent" width="15%"> 备注：</td>
      <td class="TableData">
        <script>
        KE.show({
                id : 'content'
        });
</script>
				<textarea name="content" rows="5" cols="60" style="width:600px;height:300px;"><?php echo $blog['content']?></textarea> </td>
    </tr>
	
	
	</table>
  <table class="TableBlock" border="0" width="90%" align="center" style="border-top:#4686c6 solid 0px;">
	
	
 
    <tr align="center" class="TableControl">
      <td colspan="2" nowrap height="35">

		<input type="button" name="Submit" value="保存信息" class="BigButton" onclick="sendForm();">      </td>
    </tr>
  </table>
</form>
 
</body>
</html>
