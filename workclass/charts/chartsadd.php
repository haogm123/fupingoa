<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html>
<head>
<title>信息添加编辑</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="template/default/content/css/style.css">
<script language="javascript" type="text/javascript" src="template/default/js/jquery.min.js"></script>
<script type="text/javascript"> 
function searchtpl(typeid){
   var obj = document.getElementById("typeid");
   jQuery.ajax({
      type: 'GET',
      url: 'admin.php?ac=list&fileurl=<?php echo $fileurl?>&do=ajax&typeid='+obj.value+'&date='+new Date(),
      success: function(data){
		  if(data!=''){
			  $("#tplid").html(data);
			  //alert(data);
		  }else{
			  $("#tplid").html('');
		  }
      }
   });
}
function searchtpl1(typeid){
   //获取表单
    var obj = document.getElementById("tplid");
   jQuery.ajax({
      type: 'GET',
      url: 'admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&do=ajax&tplid='+obj.value+'&date='+new Date(),
      success: function(data){
		  if(data!=''){
			  $("#numdata1").html(data);
			  $("#numdata2").html(data);
			  $("#numdata3").html(data);
			  $("#numdata4").html(data);
			  //alert(data);
		  }else{
			  $("#numdata").html('');
		  }
      }
   });
}
</script>
</head>
<body class="bodycolor" >
<table width="70%" border="0" align="center" cellpadding="3" cellspacing="0" class="small">
  <tr>
    <td class="Big"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3">流程统计模型添加</span>&nbsp;&nbsp;&nbsp;&nbsp;
	<span style="font-size:12px; float:right; margin-right:20px;">
	<a href="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&do=mana" style="font-size:12px;"><<返回列表页</a></span>
    </td>
  </tr>
</table>
<script Language="JavaScript"> 
function CheckForm()
{	
   if(document.save.title.value=="")
   { alert("统计名称不能为空！");
     document.save.title.focus();
     return (false);
   }
   if(document.save.typeid.value=="")
   { alert("流程类型不能为空！");
     document.save.typeid.focus();
     return (false);
   }
   if(document.save.tplid.value=="")
   { alert("流程类型不能为空！");
     document.save.tplid.focus();
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
<form name="save" method="post" action="?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&do=mana&view=save">
	 <table class="TableBlock" border="0" width="70%" align="center" style="border-bottom:#4686c6 solid 0px;">
		<tr>
			<td nowrap class="TableContent" width="100">统计名称：<? get_helps()?></td>
			  <td class="TableData">
					<input type="text" class="BigInput" name="title" value="" size=30 >
		  </td>  	  	
		</tr>
		
		<tr>
			<td nowrap class="TableContent" width="100">流程分类：</td>
			  <td class="TableData">
		流程类型：<select name="typeid" id="typeid" onchange="searchtpl()">
		<option value="" ></option>
			<?php echo work_type_options($typeid)?>
	  </select>
	  流程模型：
	  <select name="tplid" id="tplid" onchange="searchtpl1()">
	  <option value=""> </option>
		</select>
			  <br><font color="#868788">
		注：创建要统计的流程模型信息，必选；
		</font>	
		  </td>  	  	
		</tr>
		<tr>
			<td nowrap class="TableContent" width="100">汇总数据：</td>
		  <td class="TableData">
			名称1：<input type="text" class="BigInput" name="numdataname[]" value="" size=20 >&nbsp;&nbsp;对应表单数据项：<select name="numdatavalue[]" id="numdata1">
	  <option value=""> </option>
		</select><br>
			名称2：<input type="text" class="BigInput" name="numdataname[]" value="" size=20 >&nbsp;&nbsp;对应表单数据项：<select name="numdatavalue[]" id="numdata2">
	  <option value=""> </option>
		</select><br>
			名称3：<input type="text" class="BigInput" name="numdataname[]" value="" size=20 >&nbsp;&nbsp;对应表单数据项：<select name="numdatavalue[]" id="numdata3">
	  <option value=""> </option>
		</select><br>
			名称4：<input type="text" class="BigInput" name="numdataname[]" value="" size=20 >&nbsp;&nbsp;对应表单数据项：<select name="numdatavalue[]" id="numdata4">
	  <option value=""> </option>
		</select><br>
		<br><font color="#868788">
		注：汇总数据请选择在工作流表单数据项中为价格或数字的信息项，否则将无法统计；
		
		</font>	
		  </td>  	  	
		</tr>
	
		<tr align="center" class="TableControl">
			<td colspan="2" nowrap>
			<input type="button" value="保存" class="BigButtonBHover" onClick="sendForm();">&nbsp;	    </td>
	  </tr>
	 </table>
  
</form>

 
</body>
</html>
