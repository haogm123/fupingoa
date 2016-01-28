<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<link rel="stylesheet" type="text/css" href="template/default/content/css/style.css">
<script language="javascript" type="text/javascript" src="DatePicker/WdatePicker.js"></script>
<script language="javascript" type="text/javascript" src="template/default/js/jquery.min.js"></script>
<script charset="utf-8" src="eweb/kindeditor.js"></script>
<title>Office 515158 2011 OA办公系统</title>
<script type="text/javascript"> 
filenumber_show()
function filenumber_show()
{
   jQuery.ajax({
      type: 'GET',
      url: 'admin.php?ac=file&fileurl=public&filenumber=<?php echo $filenumber?>&officetype=6&'+new Date(),
      success: function(data){
		  if(data!=''){
			  $("#filenumber").html(data);
		  }else{
			  $("#filenumber").html('还没有附件!');
		  }
      }
   });
}
function CheckForm()
{
   <?php if($mid['key2']==1){?>
   if(document.save.userkey.value=="")
   { alert("审批人员不能为空！");
     document.save.userkey.focus();
     return (false);
   }
   <?php }?>
   if(document.save.number.value=="")
   { alert("流水单号不能为空！");
     document.save.number.focus();
     return (false);
   }
   if(document.save.title.value=="")
   { alert("信息名称不能为空！");
     document.save.title.focus();
     return (false);
   }
<?
foreach ($result as $row) {
		if($row["confirmation"]=='1'){
?>

if(document.save.<?php echo $row["inputname"]?>.value=="")
   { alert("<?php echo $row["fromname"]?>不能为空！");
     document.save.<?php echo $row["inputname"]?>.focus();
     return (false);
   }
   
<?php
	}
}
?>
   return true;
}
function sendForm()
{
   if(CheckForm()){
      document.save.submit();
	}
}
</script>

</head>
<body class="bodycolor">
<form name="save" method="post" action="?ac=<?php echo $ac?>&do=add&fileurl=<?php echo $fileurl?>&typeid=<?php echo $typeid?>&projectid=<?php echo $projectid?>&modid=<?php echo $modid?>&tplid=<?php echo $tplid?>" style="margin-top:1px; margin-left:0px; margin-right:0px;">
<input type="hidden" name="filenumber" value="<?php echo $filenumber?>" />
<div id="navPanel">
<div id="search" style="float: left; padding-left:30px;">
	流水号<? get_helps()?>： <input name="number" type="text" class="BigInput" id="number" style="width: 120px;" value="<?php echo $number?>" maxlength="100" />&nbsp;&nbsp;&nbsp;&nbsp;
	<?php echo $mid['modname']?>名称<? get_helps()?>：<input type="text" name="title" class="BigInput" style="width:300px;" size="20" value="流水号[<?php echo $number?>]的项目<?php echo $mid['modname']?>" />&nbsp;&nbsp;&nbsp;&nbsp;
	<?php echo $mid['modname']?>绑定：<input name="numberview" readonly type="text" class="BigInput" id="numberview" style="width: 120px;" value="" /><input name="numberurl" readonly type="hidden" id="numberurl"/><a href="#" onClick="window.open ('admin.php?ac=project&fileurl=public&protype=view&projectid=<?php echo $projectid?>&typeid=<?php echo $typeid?>&tplid=<?php echo $tplid?>&number=<?php echo get_date('YmdHis',PHP_TIME)?>', 'newwindow', 'height=500, width=500, top=50, left=100, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=no, status=no')">+选择流水号</a>&nbsp;&nbsp;
	<input type="button" value=" 保 存 " class="BigButtonBHover" onClick="sendForm();">
</div>
</div>

<div style="position:absolute; height:90%; width:100%;overflow:auto">  
<table class="TableBlock" border="0" width="80%" align="center"  style="margin-top:20px;"> 
<tr>
      <td nowrap class="TableHeader" colspan="2"><b>&nbsp;填写表单信息</b></td>
    </tr> 
</table> 
<?
foreach ($result as $row) {
?>
<table <?php if($row["inputtype1"]=='2'){?>style="border-left:#4686c6 solid 1px;border-right:#cccccc solid 1px;border-bottom:#cccccc solid 1px;"<?php }else{?>class="TableBlock" style=" border-top:0px;"<?php }?> border="0" width="80%" align="center" > 
	<tr>
      <td nowrap class="TableContent" width="15%" style="border-right:#cccccc solid 1px;"> <?php echo $row["fromname"]?>：<?php if($row["confirmation"]=='1'){?><? get_helps()?><?php }?></td>
      <td class="TableData">
<?php
if($row["inputtype"]=='0'){
	if($row["inputtype1"]=='1'){
		echo get_project_input($row["inputname"],300,20,$row['inputvalue']);
	}elseif($row["inputtype1"]=='2'){
		echo get_project_textarea($row["inputname"],600,200,$row['inputvalue']);
	}elseif($row["inputtype1"]=='3'){//单选
		echo get_project_radio($row["inputname"],$row["inputvaluenum"],$row['inputvalue']);	
	}elseif($row["inputtype1"]=='4'){//多选
		echo get_project_checkbox($row["inputname"],$row["inputvaluenum"],$row['inputvalue']);	
	}elseif($row["inputtype1"]=='5'){//下拉
		echo get_project_select($row["inputname"],$row["inputvaluenum"],$row['inputvalue']);
	}
}elseif($row["inputtype"]=='1'){//图片
	public_upload($row["inputname"],$row["inputvalue"]);
}elseif($row["inputtype"]=='2'){//附件
	public_upload($row["inputname"],$row["inputvalue"]);
}elseif($row["inputtype"]=='3'){//日期
	echo get_project_date($row["inputname"]);
}elseif($row["inputtype"]=='4'){
	get_depabox(2,$row["inputname"],"","+选择部门",60,4);
}elseif($row["inputtype"]=='5'){
	get_pubuser(2,$row["inputname"],"","+选择人员",60,4);
}

?>
</td>
    </tr>
</table> 
<?php
}
//处理多输入表单
global $db;
$num = $db->result("SELECT * FROM ".DB_TABLEPRE."project_from where typeid='".$typeid."' and formtype='3' and tplid='".$tplid."' and inputtype=6 ORDER BY fromid Asc");
$sql = "SELECT * FROM ".DB_TABLEPRE."project_from where typeid='".$typeid."' and formtype='3' and tplid='".$tplid."' and inputtype=6 ORDER BY fromid Asc";
$results = $db->fetch_all($sql);
if($num>0){
?>

<table class="TableBlock" border="0" width="80%" align="center" > 
<tr>
      <td nowrap class="TableHeader" colspan="<?php echo $num?>"><b>&nbsp;填写多输入表单</b></td>
    </tr> 

	<tr>
      <td nowrap class="TableContent" width="50" align="center">编号</td>
	  <?php
	foreach ($results as $row) {
	?>
	 <td nowrap class="TableContent" align="center"><?php echo $row["fromname"]?></td>
	<?php }?>
    </tr>
	<?php for($i=0;$i<10;$i++){?>
	<tr>
      <td nowrap class="TableContent" width="50" align="center" style="font-size:16px;"><?php echo $i+1?></td>
	<?php
	foreach ($results as $row) {
	?>
	 <td nowrap class="TableData" align="center">
	 <textarea name="<?php echo $row["inputname"]?>[]" rows="5" style="width:120px;height:40px;line-height:20px;font-size:14px;"></textarea>
	 </td>
	<?php }?>
    </tr>
<?php }?>
</table>

<?php
}	
?>



<table class="TableBlock" border="0" width="80%" align="center">
<tr>
      <td nowrap class="TableHeader" colspan="2" id="m2"><b>&nbsp;附件设置</b></td>
    </tr>  
	<tr>
      <td nowrap class="TableContent" width="15%">附件文档：</td>
      <td class="TableData" id="filenumber">
	  
	  </td>
    </tr>
	<tr>
      <td nowrap class="TableContent" width="15%">附件操作：</td>
      <td class="TableData">
	  <input type="hidden" name="annexurlid" class="BigInput"  onpropertychange="filenumber_show();" />
	  <a href="#m2" onClick="window.open ('admin.php?ac=uploadadd&fileurl=public&name=annexurlid&filenumber=<?php echo $filenumber?>&officetype=6', 'newwindow', 'height=200, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=no, status=no')">+上传附件</a></td>
    </tr>
</table>
<?php
if($mid['key2']==1){
if($flow['fid']!=''){?>
<table class="TableBlock" border="0" width="80%" align="center">
<tr>
      <td nowrap class="TableHeader" colspan="2"><b>&nbsp;审批人员</b></td>
    </tr>
   <tr>
      <td nowrap class="TableContent" width="15%"> 
        设置审批人员：<? get_helps()?></td>
      <td class="TableData">
	  <input type="hidden" name="flowid" value="<?php echo $flow['fid']?>" />
	  <input type="hidden" name="appkey" value="<?php echo $flow['flowkey2']?>" />
	  <input type="hidden" name="appkey1" value="<?php echo $flow['flowkey3']?>" />
	  <?php
	 if($flow['flowkey2']=='2'){
		 //单人审批
		 if($flow['flowkey1']=='1'){//可选
			 get_pubuser(1,"userkey",'',"+选择审批人员",120,20);
		 }else{
			 get_pubuser(1,"userkey",'',"+选择审批人员",120,20,$flow['flowuser']);
		 }
	 }else{
		 if($flow['flowkey1']=='1'){//可选
			 get_pubuser(2,"userkey",$flow['flowuser'],"+选择审批人员",40,4);
		 }else{
			 echo "<textarea name='userkey' cols='40' rows='4'";
			 echo " readonly style='background-color:#F5F5F5;color:#006600;'>";
			 echo $flow['flowuser']."</textarea>";
			 echo "<input type='hidden' name='userkeyid' value='".get_realid($flow['flowuser'])."' />";
		 }
		
	 }
	 ?>
	 <br>
	 <?php get_smsbox("审批人员","work")?>
	 <br>
	 注：流程第一步审批人员，这里选择你的下一级办理人，必需填写！ 
	 </td>
    </tr>
	<?php if($_CONFIG->config_data('configinfoview')=='1'){?>
	<tr>
      <td nowrap class="TableContent" width="15%"> 
        通知其它人员：</td>
      <td class="TableData">
	  <?php
		 echo get_pubuser(2,"viewuser",'',"+选择人员",60,4);
	  ?>
	 <br>
	 注：为空表示不通知，如要通知项目审批之外的人员，请选择
	 </td>
    </tr>
	<?php }?>
</table> 
<?php }
}
?>
</div>
</form>	
</body>
</html>
