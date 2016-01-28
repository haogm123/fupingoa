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
      url: 'admin.php?ac=file&fileurl=public&filenumber=<?php echo $filenumber?>&officetype=3&'+new Date(),
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
      url: 'admin.php?ac=file&do=office&fileurl=public&filenumber=<?php echo $filenumber?>&officetype=3&'+new Date(),
      success: function(data){
		  if(data!=''){
			  $("#filenumberoffice").html(data);
		  }else{
			  $("#filenumberoffice").html('还没有文档!');
		  }
      }
   });
}
function show_notk()
{
   mytop=(screen.availHeight-600)/2;
   myleft=(screen.availWidth-1002)/2;
   window.open("ntko/FileEdit.php?fileType=word&FileId=51515800000&filenumber=<?php echo $filenumber?>&officetype=3&uid=<?php echo $_USER->id?>&date=<?php echo get_date('Y-m-d H:i:s',PHP_TIME)?>","","height=600,width=1002,status=0,toolbar=no,menubar=no,location=no,scrollbars=yes,top="+mytop+",left="+myleft+",resizable=yes");
} 
function CheckForm()
{
   if(document.save.userkey.value=="")
   { alert("审批人员不能为空！");
     document.save.userkey.focus();
     return (false);
   }
   if(document.save.number.value=="")
   { alert("流水单号不能为空！");
     document.save.number.focus();
     return (false);
   }
   if(document.save.title.value=="")
   { alert("工作流名称不能为空！");
     document.save.title.focus();
     return (false);
   }
<?
global $db;
$query = $db->query("SELECT * FROM ".DB_TABLEPRE."workclass_from where typeid='".$typeid."' and tplid='".$tplid."'  and formtype=1 ORDER BY fromid Asc");
	while ($row = $db->fetch_array($query)) {
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
<form name="save" method="post" action="?ac=<?php echo $ac?>&do=add&fileurl=<?php echo $fileurl?>&typeid=<?php echo $typeid?>&tplid=<?php echo $tplid?>" style="margin-top:5px; margin-left:0px; margin-right:0px;">
<input type="hidden" name="filenumber" value="<?php echo $filenumber?>" />
<div id="navPanel">
<div id="search" style="float: left; padding-left:30px;">
	流水号<? get_helps()?>： <input name="number" type="text" class="BigInput" id="number" style="width: 120px;" value="<?php echo $number?>" maxlength="100" />&nbsp;&nbsp;&nbsp;&nbsp;
	工作流名称<? get_helps()?>：<input type="text" name="title" class="BigInput" style="width:300px;" size="20" value="流水号<?php echo $number?> <?php echo trim($tpl["title"]);?>" />&nbsp;&nbsp;&nbsp;&nbsp;
	工作流绑定： <input name="numberview" type="text" class="BigInput" id="numberview" style="width: 120px;" value="" /><a href="#" onClick="window.open ('admin.php?ac=workclass&fileurl=public&inputname=numberview', 'newwindow', 'height=500, width=500, top=50, left=100, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=no, status=no')">+选择流水号</a>&nbsp;&nbsp;
	<input type="button" value=" 保 存 " class="BigButtonBHover" onClick="sendForm();">

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onClick="window.open ('admin.php?ac=flow&fileurl=workclass&tplid=<?php echo $tplid?>&typeid=<?php echo $typeid?>&do=pic', 'newwindow<?php echo $typeid?>', 'height=620, width=800, top=6, right=0, toolbar=no, menubar=no, scrollbars=yes, resizable=yes,location=no, status=no')" style="color:red;">+查看流程图</a>
</div>
</div>

<div align="center" style="position:absolute; height:85%; width:100%;overflow:auto; padding-bottom:20px; background-color:#FFFFFF;">  

