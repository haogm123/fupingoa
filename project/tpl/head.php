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
   { alert("名称不能为空！");
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
	<?php echo $mid['modname']?>绑定： <input name="numberview" readonly type="text" class="BigInput" id="numberview" style="width: 120px;" value="" /><input name="numberurl" readonly type="hidden" id="numberurl"/><a href="#" onClick="window.open ('admin.php?ac=project&fileurl=public&protype=view&projectid=<?php echo $projectid?>&typeid=<?php echo $typeid?>&number=<?php echo get_date('YmdHis',PHP_TIME)?>', 'newwindow', 'height=500, width=500, top=50, left=100, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=no, status=no')">+选择流水号</a>&nbsp;&nbsp;
	<input type="button" value=" 保 存 " class="BigButtonBHover" onClick="sendForm();">
</div>
</div>

<div align="center" style="position:absolute; height:85%; width:100%;overflow:auto; padding-bottom:20px; background-color:#FFFFFF;">  

