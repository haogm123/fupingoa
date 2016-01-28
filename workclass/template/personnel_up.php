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
   if(document.save.staff.value=="")
   {
     alert("下一步审批人员不能为空！");
	 //alert(chk);
     document.save.staff.focus();
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
	<form name="save" method="post" action="admin.php?ac=<?php echo $ac?>&do=personnel&fileurl=<?php echo $fileurl?>">
	<input type="hidden" name="view" value="edit" />
	<input type="hidden" name="title" value="<?php echo $row['title']?>" />
	<input type="hidden" name="workid" value="<?php echo $row['id']?>" />
	<input type="hidden" name="typeid" value="<?php echo $row['typeid']?>" />
	<input type="hidden" name="oldappkey" value="<?php echo $oldappkey?>" />
	<input type="hidden" name="oldappkey1" value="<?php echo $oldappkey1?>" />
	<input type="hidden" name="perid" value="<?php echo $perid?>" />
	<input type="hidden" name="oldappflow" value="<?php echo getGP('oldappflow','P')?>" />
	<input type="hidden" name="content" value="<?php echo getGP('content','P')?>" />
	<input type="hidden" name="viewuser" value="<?php echo getGP('viewuser','P')?>" />
	<input type="hidden" name="pkey" value="3" />
	<input type="hidden" name="views" value="3" />
<table class="TableBlock" border="0" width="70%" align="center">
	<tr>
      <td nowrap class="TableHeader" colspan="2"><b>&nbsp;审批操作</b></td>
    </tr>
	
	<?php
			echo '<tr><td nowrap class="TableContent" width="15%"> 退回审批人员：</td>';
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
	
	?>

	<tr align="center" class="TableControl">
      <td colspan="2" nowrap height="35">
<input type="button" name="Submit" value="提交审批" class="BigButtonBHover" onclick="sendForm();"> 	  </td>
    </tr>
</table>

</form>

</body>
</html>
