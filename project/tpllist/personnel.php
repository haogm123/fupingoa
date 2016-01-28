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
      url: 'admin.php?ac=file&fileurl=public&officeid=<?php echo $_GET['projectid']?>&officetype=6&'+new Date(),
      success: function(data){
		  if(data!=''){
			  $("#filenumber").html(data);
		  }else{
			  $("#filenumber").html('还没有附件!');
		  }
      }
   });
}
function show_number()
{
   mytop=(screen.availHeight-600)/2;
   myleft=(screen.availWidth-1002)/2;
   window.open("admin.php?ac=<?php echo $ac?>&do=view&fileurl=<?php echo $fileurl?>&lid=<?php echo $row['lid']?>&modid=<?php echo $modid;?>&projectid=<?php echo $projectid;?>&typeid=<?php echo $typeid;?>&tplid=<?php echo $tplid;?>","","height=600,width=1002,status=0,toolbar=no,menubar=no,location=no,scrollbars=yes,top="+mytop+",left="+myleft+",resizable=yes");
}
</script>
<title>Office 515158 2011 OA办公系统</title>
 
</head>
<body class="bodycolor">
<table width="70%" border="0" align="center" cellpadding="3" cellspacing="0" class="small">
  <tr>
    <td class="Big"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3"> <?php echo $row['title']?></span>&nbsp;&nbsp;&nbsp;&nbsp;
	<span style="font-size:12px; float:right; margin-right:20px;">
	<a href="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&type=1&modid=<?php echo $modid;?>&projectid=<?php echo $projectid;?>&typeid=<?php echo $typeid;?>&tplid=<?php echo $tplid;?>" style="font-size:12px;"><< 返回审批列表</a>&nbsp;|&nbsp;<a href="#" onClick="window.open('admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&do=flow&lid=<?php echo $row['lid']?>&test=<?php echo $filenumber?>&modid=<?php echo $modid;?>&projectid=<?php echo $projectid;?>&typeid=<?php echo $typeid;?>&tplid=<?php echo $tplid;?>', 'newwindow', 'height=550, width=500, top=6, right=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=no, status=no')">
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
   if(document.save.staff.value=="")
   { alert("下一步审批人员不能为空！");
     document.save.staff.focus();
     return (false);
   }
   <?php }?>
   
   <?
	global $db;
	$query = $db->query("SELECT * FROM ".DB_TABLEPRE."project_from where typeid='".$row['typeid']."' and tplid='".$per['flowid']."' and formtype=4 ORDER BY fromid Asc");
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
</script>
	<form name="save" method="post" action="admin.php?ac=<?php echo $ac?>&do=personnel&fileurl=<?php echo $fileurl?>&modid=<?php echo $modid;?>&projectid=<?php echo $projectid;?>&typeid=<?php echo $typeid;?>&tplid=<?php echo $tplid;?>">
	<input type="hidden" name="view" value="edit" />
	<input type="hidden" name="lid" value="<?php echo $row['lid']?>" />
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
		echo '<td nowrap class="TableContent"> 批示意见：</td>';
		echo '<td class="TableData"><textarea name="content" cols="60" rows="3">';
		echo '</textarea></td></tr>';
		echo '<tr><td nowrap class="TableContent"> 操作类型：</td><td class="TableData">';
		echo '<input name="pkey" type="radio" style="border:0;" value="1" checked/>通过';
		echo '<input name="pkey" type="radio" style="border:0;" value="2" />拒绝';
		if($per['flowkey']==3){
			echo '<input name="pkey" type="radio" style="border:0;" value="3" />退回';
		}
		/*保留模块
		if($per['flowmovement']==6){
			echo '<input type="hidden" name="disnode" value="1" />';
			echo '<tr>';
			echo '<td nowrap class="TableContent"> 指定阅读人员：</td>';
			echo '<td class="TableData">';
			get_pubuser(2,"distribution","0","+选择阅读人员",40,4);
			echo '<br>';
			echo '注：为空表示所有人员可阅读';
			echo '</td></tr>';
		}*/
		if($wherestr){
			echo '<tr><td nowrap class="TableHeader"> 下一步审批流程：</td>';
			echo '<td class="TableData">';
			//设定下一步审批信息
			echo '<input type="hidden" name="flowid" value="'.$flow['fid'].'" />';
			echo '<input type="hidden" name="appkey" value="'.$flow['flowkey2'].'" />';
			echo '<input type="hidden" name="appkey1" value="'.$flow['flowkey3'].'" />';
			if($flow['flowkey2']=='2'){
			  //单人审批
				  if($flow['flowkey1']=='1'){//可选
					  get_pubuser(1,"staff",'',"+选择审批人员",120,20);
				  }else{//不可选
				  
					  get_pubuser(1,"staff",'',"+选择审批人员",120,20,$flow['flowuser']);
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
			echo '<td nowrap class="TableContent"> 通知其它人员：</td>';
			echo '<td class="TableData">';
			get_pubuser(2,"viewuser","0","+选择人员",40,4);
			echo '<br>';
			echo '注：为空表示不通知，如要通知工作流审批之外的人员，请选择';
			echo '</td></tr>';
		  }
	
	?>




<?php
global $db;
$num = $db->result("SELECT * FROM ".DB_TABLEPRE."project_from where typeid='".$row['typeid']."' and tplid='".$per['flowid']."'  and formtype=4 ORDER BY fromid Asc");
$query = $db->query("SELECT * FROM ".DB_TABLEPRE."project_from where typeid='".$row['typeid']."' and tplid='".$per['flowid']."' and formtype=4 ORDER BY fromid Asc");
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
		echo get_project_input($flowrow["inputname"],300,20,$flowrow['inputvalue']);
	}elseif($flowrow["inputtype1"]=='2'){
		echo get_project_textarea($flowrow["inputname"],600,200,$flowrow['inputvalue']);
	}elseif($flowrow["inputtype1"]=='3'){//单选
		echo get_project_radio($flowrow["inputname"],$flowrow["inputvaluenum"],$flowrow['inputvalue']);	
	}elseif($flowrow["inputtype1"]=='4'){//多选
		echo get_project_checkbox($flowrow["inputname"],$flowrow["inputvaluenum"],$flowrow['inputvalue']);	
	}elseif($flowrow["inputtype1"]=='5'){//下拉
		echo get_project_select($flowrow["inputname"],$flowrow["inputvaluenum"],$flowrow['inputvalue']);
	}
}elseif($flowrow["inputtype"]=='1'){//图片
	public_upload($flowrow["inputname"],$flowrow["inputvalue"]);
}elseif($flowrow["inputtype"]=='2'){//附件
	public_upload($flowrow["inputname"],$flowrow["inputvalue"]);
}elseif($flowrow["inputtype"]=='3'){//日期
	echo get_project_date($flowrow["inputname"]);
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
