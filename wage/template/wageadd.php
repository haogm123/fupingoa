<html>
<head>
<title>信息添加编辑</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="template/default/content/css/style.css">
<script language="javascript" type="text/javascript" src="DatePicker/WdatePicker.js"></script>
</head>
<body class="bodycolor">
<table width="60%" border="0" align="center" cellpadding="3" cellspacing="0" class="small">
  <tr>
    <td class="Big"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3">工资<?php echo $_title['name']?></span>&nbsp;&nbsp;&nbsp;&nbsp;
	<span style="font-size:12px;">
	
	<a href="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>" style="font-size:12px;">返回列表页</a><img src="template/default/content/images/f_ico.png" align="absmiddle"></span>
    </td>
  </tr>
</table>
<script Language="JavaScript"> 
function CheckForm()
{	
   if(document.save.sdate.value=="")
   { alert("开始日期不能为空！");
     document.save.sdate.focus();
     return (false);
   }
   if(document.save.edate.value=="")
   { alert("结束日期不能为空！");
     document.save.edate.focus();
     return (false);
   }
   if(document.save.year.value=="")
   { alert("工资年不能为空！");
     document.save.year.focus();
     return (false);
   }
   if(document.save.month.value=="")
   { alert("工资月不能为空！");
     document.save.month.focus();
     return (false);
   }
   if(document.save.title.value=="")
   { alert("主题不能为空！");
     document.save.title.focus();
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
<form name="save" method="post" action="?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&do=add">
	<input type="hidden" name="view" value="edit" />
	<input type="hidden" name="wid" value="<?php echo $user['wid']?>" />
	 <table class="TableBlock" border="0" width="60%" align="center" style="border-bottom:#4686c6 solid 0px;">
	 
    
	
		<tr>
			<td nowrap class="TableContent" width="100">名称：<? get_helps()?></td>
			  <td class="TableData">
					<input type="text" class="BigInput" name="title" value="<?php echo $user['title']?>" size=50 >
				</td>  	  	
		</tr>
	
		<tr>
		<tr>
			<td nowrap class="TableContent" width="100">开始日期：<? get_helps()?></td>
			  <td class="TableData">
					<input type="text" name="sdate" class="BigInput" size="15" value="<?php echo $sdate?>" onClick="WdatePicker();"/> 
				</td>  	  	
		</tr>
		<tr>
			<td nowrap class="TableContent" width="100">结束日期：<? get_helps()?></td>
			  <td class="TableData">
					<input type="text" name="edate" class="BigInput" size="15" value="<?php echo $edate?>" onClick="WdatePicker();"/> 
				</td>  	  	
		</tr>
      <td nowrap class="TableContent"> 工资月份：</td>
      <td class="TableData">
	  
	    <select name="year">
		<?php
		for($i=get_date('Y',PHP_TIME)-5;$i<=get_date('Y',PHP_TIME)+5;$i++){
			echo '<option value="'.$i.'" ';
			if($year==$i){
				echo 'selected';
			}
			echo '>'.$i.'</option>';
		}
		?>
        </select>年
	  <select name="month">
		<?php
		for($i=1;$i<=12;$i++){
			echo '<option value="'.$i.'" ';
			if($month==$i){
				echo 'selected';
			}
			echo '>'.$i.'</option>';
		}
		?>
        </select>月	
      </td>
    </tr>
	<tr>
			<td nowrap class="TableContent" width="100">备注：</td>
			  <td class="TableData">
					<textarea name="content" cols="40" rows="4" class="BigInput"><?php echo $user['content']?></textarea>
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
