<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<link rel="stylesheet" type="text/css" href="template/default/content/css/style.css">
<script language="javascript" type="text/javascript" src="DatePicker/WdatePicker.js"></script>
<script charset="utf-8" src="eweb/kindeditor.js"></script>
<script language="javascript" type="text/javascript" src="template/default/js/jquery.min.js"></script>
<script type="text/javascript"> 
filenumber_show()
function filenumber_show()
{
   jQuery.ajax({
      type: 'GET',
      url: 'admin.php?ac=file&fileurl=public&officeid=<?php echo $_GET['workid']?>&officetype=3&'+new Date(),
      success: function(data){
		  if(data!=''){
			  $("#filenumber").html(data);
		  }else{
			  $("#filenumber").html('还没有附件!');
		  }
      }
   });
}
fileoffice_show()
function fileoffice_show()
{
   jQuery.ajax({
      type: 'GET',
      url: 'admin.php?ac=file&do=office&fileurl=public&officeid=<?php echo $_GET['workid']?>&officetype=3&'+new Date(),
      success: function(data){
		  if(data!=''){
			  $("#filenumberoffice").html(data);
		  }else{
			  $("#filenumberoffice").html('还没有文档!');
		  }
      }
   });
}
function show_number()
{
   mytop=(screen.availHeight-600)/2;
   myleft=(screen.availWidth-1002)/2;
   window.open("admin.php?ac=list&do=view&fileurl=workclass&workid=<?php echo $row['id']?>","","height=600,width=1002,status=0,toolbar=no,menubar=no,location=no,scrollbars=yes,top="+mytop+",left="+myleft+",resizable=yes");
}
</script>
<title>Office 515158 2011 OA办公系统</title>
 
</head>
<body class="bodycolor">
<table width="70%" border="0" align="center" cellpadding="3" cellspacing="0" class="small">
  <tr>
    <td class="Big"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3"> <?php echo $row['title']?></span>&nbsp;&nbsp;&nbsp;&nbsp;
	<span style="font-size:12px; float:right; margin-right:20px;">
	<a href="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&type=1" style="font-size:12px;"><< 返回审批列表</a>&nbsp;|&nbsp;<a href="#" onClick="window.open('admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&do=flow&workid=<?php echo $row['id']?>&test=<?php echo $filenumber?>', 'newwindow', 'height=550, width=500, top=6, right=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=no, status=no')">
      <font color="red">查看审批记录</font>
</a>&nbsp;|&nbsp;<a href="javascript:;" onClick="show_number()">
      <font color="red">查看流程内容</font>
</a></span>
    </td>
  </tr>
</table>

<script Language="JavaScript">
 
function CheckForm()
{
   if(document.save.content.value=="")
   { alert("批示意见不能为空！");
     document.save.content.focus();
     return (false);
   }
   <?php if($wherestr){?>
   var chk=0;
   var chkObjs = document.getElementsByName("pkey");
   for(var i=0;i<chkObjs.length;i++){
	   if(chkObjs[i].checked){
		   chk = i;
		   break;
	   }
   }
   if(document.save.staff.value=="" && chk!=2)
   {
     alert("下一步审批人员不能为空！");
	 //alert(chk);
     document.save.staff.focus();
     return (false);
   }
   <?php }?>
   
   <?
	global $db;
	$query = $db->query("SELECT * FROM ".DB_TABLEPRE."workclass_from where typeid='".$row['typeid']."' and tplid='".$row['tplid']."' and  flowid='".$per['flowid']."' and formtype=2 and inputtype!='6' and inputtype1!='3' and inputtype1!='4' ORDER BY inputnumber Asc");
		while ($rowf = $db->fetch_array($query)) {
			if($rowf["confirmation"]=='1'){
	?>
	
	if(document.save.<?php echo $rowf["inputname"]?>.value=="")
	   { alert("<?php echo $rowf["fromname"]?>不能为空！");
		 document.save.<?php echo $rowf["inputname"]?>.focus();
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
   if(CheckForm())
      document.save.submit();
}
function checkbox1(value){
	if(value==1){
		div1.style.display="block";
		div2.style.display="none";
	}else{
		div1.style.display="none";
	}
}
</script>
<style type="text/css"> 
#div1{
display:none;}
</style>
	<form name="save" method="post" action="admin.php?ac=<?php echo $ac?>&do=personnel&fileurl=<?php echo $fileurl?>">
	<input type="hidden" name="view" value="edit" />
	<input type="hidden" name="title" value="<?php echo $row['title']?>" />
	<input type="hidden" name="workid" value="<?php echo $row['id']?>" />
	<input type="hidden" name="typeid" value="<?php echo $row['typeid']?>" />
	<input type="hidden" name="oldappkey" value="<?php echo $per['appkey']?>" />
	<input type="hidden" name="oldappkey1" value="<?php echo $per['appkey1']?>" />
	<input type="hidden" name="perid" value="<?php echo $per['perid']?>" />
	<input type="hidden" name="oldappflow" value="<?php echo $per['flowid']?>" />
<table class="TableBlock" border="0" width="70%" align="center">
	<tr>
      <td nowrap class="TableHeader" colspan="2"><b>&nbsp;审批操作</b></td>
    </tr>
	
	<?php
		echo '<tr>';
		echo '<td nowrap class="TableContent" width="15%"> 批示意见：</td>';
		echo '<td class="TableData"><textarea name="content" cols="60" rows="3">';
		echo '</textarea></td></tr>';
		echo '<tr><td nowrap class="TableContent"> 操作类型：</td><td class="TableData">';
		echo '<input name="pkey" id="pkey" type="radio" style="border:0;" value="1" onClick="checkbox1(0)" checked/>通过';
		echo '<input name="pkey" id="pkey" type="radio" onClick="checkbox1(0)" style="border:0;" value="2" />拒绝';
		if($per['flowkey']==3){
			echo '<input name="pkey" id="pkey" type="radio" onClick="checkbox1(1)" style="border:0;" value="3" />退回';
		}
		echo '</td></tr>';
		//退回
		if($per['flowkey']==3){
			echo '</table><div id="div1">
	   <table class="TableBlock" border="0" width="70%" align="center" style="border-top:#4686c6 solid 0px;">';
			echo '<tr><td nowrap class="TableContent" width="15%"> 选择退回流程步骤：</td>';
			echo '<td class="TableData">';
			//设定下一步审批信息
			$sqlu = "SELECT * FROM ".DB_TABLEPRE."workclass_flow WHERE fid in(".substr($per['flowkey4'], 0, -1).") order by fid asc";
			$results = $db->query($sqlu);
			while ($upfid = $db->fetch_array($results)) {	
				echo '<input name="updatefid" type="radio" style="border:0;" value="'.$upfid['fid'].'" />第'.$upfid['flownum'].'步:'.$upfid['flowname'];
			}
			echo '</td></tr></table></div>
	   <table class="TableBlock" border="0" width="70%" align="center" style="border-top:#4686c6 solid 0px;">';
		}
		if($wherestr){
			echo '<tr id="div2"><td nowrap class="TableHeader" width="15%"> 下一步审批流程：</td>';
			echo '<td class="TableData">';
			//设定下一步审批信息
			echo '<input type="hidden" name="flowid" value="'.$flow['fid'].'" />';
			echo '<input type="hidden" name="appkey" value="'.$flow['flowkey2'].'" />';
			echo '<input type="hidden" name="appkey1" value="'.$flow['flowkey3'].'" />';
			echo '<input type="hidden" name="flowdatetype" value="'.$flow['flowdatetype'].'"/>';
			echo '<input type="hidden" name="flowdate" value="'.$flow['flowdate'].'" />';
			if($flow['flowkey2']=='2'){
			  //单人审批
			  $flowuser=explode(',',$flow['flowuser']);
				  if($flow['flowkey1']=='1'){//可选
					  get_pubuser(1,"staff",$flowuser[0],"+选择审批人员",120,20);
				  }else{//不可选
					  get_pubuser(1,"staff",$flowuser[0],"+选择审批人员",120,20,$flow['flowuser']);
				  }
			  }else{
			  //多人审批
				  if($flow['flowkey1']=='1'){//可选
					  get_pubuser(2,"staff",$flow['flowuser'],"+选择审批人员",40,4);
				  }else{
					  //不可选
					  echo "<textarea name='staff' cols='40' rows='4'";
					  echo " readonly style='background-color:#F5F5F5;color:#006600;'>";
					  echo $flow['flowuser']."</textarea>";
					  echo "<input type='hidden' name='staffid' value='".get_realid($flow['flowuser'])."' />";
				  }
			  }
			  echo '<br>';
			  echo get_smsbox("审批人员","shownamemaster").'</td></tr>';
		  }
		  if($_CONFIG->config_data('configinfoview')=='1'){
			echo '<tr>';
			echo '<td nowrap class="TableContent" width="15%"> 通知其它人员：</td>';
			echo '<td class="TableData">';
			get_pubuser(2,"viewuser","0","+选择人员",40,4);
			echo '<br>';
			echo '注：为空表示不通知，如要通知工作流审批之外的人员，请选择';
			echo '</td></tr>';
		  }
	
	?>




<?php
global $db;
$num = $db->result("SELECT * FROM ".DB_TABLEPRE."workclass_from where typeid='".$row['typeid']."' and tplid='".$row['tplid']."' and  flowid='".$per['flowid']."' and formtype=2 ORDER BY inputnumber Asc");
$query = $db->query("SELECT * FROM ".DB_TABLEPRE."workclass_from where typeid='".$row['typeid']."' and tplid='".$row['tplid']."' and  flowid='".$per['flowid']."' and formtype=2 ORDER BY inputnumber Asc");
if($num>0){
?>
</table>
<input type="hidden" name="fromflowid"  value="<?php echo $per['flowid']?>"/>
<input type="hidden" name="flowfrom"  value="1"/>
<table class="TableBlock" border="0" width="70%" align="center"  style="margin-top:20px;"> 
<tr>
      <td nowrap class="TableHeader" colspan="2"><b>&nbsp;填写表单信息</b></td>
    </tr> 
</table> 
<?

	while ($flowrow = $db->fetch_array($query)) {
?>
<table <?php if($flowrow["inputtype1"]=='2'){?>style="border-left:#4686c6 solid 1px;border-right:#cccccc solid 1px;border-bottom:#cccccc solid 1px;"<?php }else{?>class="TableBlock" style=" border-top:0px;"<?php }?> border="0" width="70%" align="center" > 
	<tr>
      <td nowrap class="TableContent" width="15%" style="border-right:#cccccc solid 1px;"> <?php echo $flowrow["fromname"]?>：<?php if($flowrow["confirmation"]=='1'){?><? get_helps()?><?php }?></td>
      <td class="TableData">
<?php
if($flowrow["inputtype"]=='0'){
	if($flowrow["inputtype1"]=='1'){
		echo get_work_input($flowrow["inputname"],300,20,$flowrow['inputvalue']);
	}elseif($flowrow["inputtype1"]=='2'){
		echo get_work_textarea($flowrow["inputname"],600,200,$flowrow['inputvalue']);
	}elseif($flowrow["inputtype1"]=='3'){//单选
		echo get_work_radio($flowrow["inputname"],$flowrow["inputvaluenum"],$flowrow['inputvalue']);	
	}elseif($flowrow["inputtype1"]=='4'){//多选
		echo get_work_checkbox($flowrow["inputname"],$flowrow["inputvaluenum"],$flowrow['inputvalue']);	
	}elseif($flowrow["inputtype1"]=='5'){//下拉
		echo get_work_select($flowrow["inputname"],$flowrow["inputvaluenum"],$flowrow['inputvalue']);
	}
}elseif($flowrow["inputtype"]=='1'){//图片
	public_upload($flowrow["inputname"],$flowrow["inputvalue"]);
}elseif($flowrow["inputtype"]=='2'){//附件
	public_upload($flowrow["inputname"],$flowrow["inputvalue"]);
}elseif($flowrow["inputtype"]=='3'){//日期
	echo get_work_date($flowrow["inputname"]);
}elseif($flowrow["inputtype"]=='4'){
	get_depabox(2,$flowrow["inputname"],"","+选择部门",60,4);
}elseif($flowrow["inputtype"]=='5'){
	get_pubuser(2,$flowrow["inputname"],"","+选择人员",60,4);
}

?>
</td>
    </tr>
</table> 
<?php
}
?>
<table class="TableBlock" border="0" width="70%" align="center">
<?php
}	
?>
	
	
	
	<tr align="center" class="TableControl">
      <td colspan="2" nowrap height="35">
<input type="button" name="Submit" value="提交审批" class="BigButtonBHover" onclick="sendForm();"> 	  </td>
    </tr>
</table>

</form>

</body>
</html>
