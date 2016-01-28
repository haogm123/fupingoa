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
$query = $db->query("SELECT * FROM ".DB_TABLEPRE."workclass_from where typeid='".$typeid."' and tplid='".$tplid."'  and formtype=1 and inputtype!='6' and inputtype1!='3' and inputtype1!='4' ORDER BY inputnumber Asc");
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

<div style="position:absolute; height:90%; width:100%;overflow:auto">  
<table class="TableBlock" border="0" width="80%" align="center"  style="margin-top:20px;"> 
<tr>
      <td nowrap class="TableHeader" colspan="2"><b>&nbsp;基础表单信息</b></td>
    </tr> 
</table> 
<table class="TableBlock" border="0" width="80%" style="border-top:0px;" align="center">
<tr>
<?
global $db;
$num = $db->result("SELECT COUNT(*) AS num FROM ".DB_TABLEPRE."workclass_from where tplid='".$tplid."' and typeid='".$typeid."' and formtype=1 and inputtype!='6' and inputtype1!='2' ORDER BY inputnumber Asc");
$query = $db->query("SELECT * FROM ".DB_TABLEPRE."workclass_from where tplid='".$tplid."' and typeid='".$typeid."' and formtype=1 and inputtype!='6' and inputtype1!='2' ORDER BY inputnumber Asc");
$n=0;
	while ($row = $db->fetch_array($query)) {
	$n++;
?>
      <td nowrap class="TableContent" width="15%" style="border-right:#cccccc solid 1px;"> <?php echo $row["fromname"]?>：<?php if($row["confirmation"]=='1'){?><? get_helps()?><?php }?></td>
      <td class="TableData">
<?php
W_I_DB($typeid,$tplid,$row["inputname"],$row["w"],$row["h"],$row["inputvalue"]);
?>
</td>
   
<?php
if($n%2==0){
			echo '</tr><tr>';
		}
		if($num==$n && $num%2!=0){
			echo '<td nowrap class="TableContent" width="15%"> </td>
		  <td class="TableData"></td>';
		}
}
?>
</tr>
</table>
<?php
$query = $db->query("SELECT * FROM ".DB_TABLEPRE."workclass_from where tplid='".$tplid."' and typeid='".$typeid."' and formtype=1 and inputtype!='6' and inputtype1='2' ORDER BY inputnumber Asc");
$n=0;
	while ($row = $db->fetch_array($query)) {
?>
<table  width="80%" style="border-left:#4686c6 solid 1px;border-right:#ccc solid 1px;border-bottom:#ccc solid 1px;" align="center">
<tr>
<td nowrap style="border-right:#cccccc solid 1px;padding-left:3px;border-bottom:#ccc solid 1px;background:#f2f8ff;" width="15%"><?php echo $row["fromname"]?>：<?php if($row["confirmation"]=='1'){?><? get_helps()?><?php }?></td>
<td style="padding-top:10px; padding-bottom:10px; padding-left:3px;background:#fff;border-bottom:#ccc solid 1px;">
<?php
W_I_DB($typeid,$tplid,$row["inputname"],$row["w"],$row["h"],$row["inputvalue"]);
?>
</td></tr>
</table>
<?php }?>

<?php
//处理多输入表单
global $db;
$nums = $db->result("SELECT COUNT(*) AS nums FROM ".DB_TABLEPRE."workclass_from where tplid='".$tplid."' and typeid='".$typeid."' and formtype=1 and inputtype='6' ORDER BY inputnumber Asc");
$sql = "SELECT * FROM ".DB_TABLEPRE."workclass_from where tplid='".$tplid."' and typeid='".$typeid."' and formtype=1 and inputtype='6' ORDER BY inputnumber Asc";
$results = $db->fetch_all($sql);
if($nums>0){
?>

<table class="TableBlock" border="0" width="80%" align="center" style="margin-top:15px;"> 
<tr>
      <td nowrap class="TableHeader" colspan="<?php echo $nums+1;?>"><b>&nbsp;列表信息输入</b></td>
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
	if($row["w"]=='' || $row["w"]=='0') $row["w"]='120';
	if($row["h"]=='' || $row["h"]=='0') $row["h"]='25';
	?>
	 <td nowrap class="TableData" align="center">
	 <textarea name="<?php echo $row["inputname"]?>[]" rows="5" style="width:<?php echo $row["w"];?>px;height:<?php echo $row["h"];?>px;line-height:20px;font-size:14px;"></textarea>
	 </td>
	<?php }?>
    </tr>
<?php }?>
</table>

<?php
}	
?>



<table class="TableBlock" border="0" width="80%" align="center" style="margin-top:15px;">
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
	  <a href="#m2" onClick="window.open ('admin.php?ac=uploadadd&fileurl=public&name=annexurlid&filenumber=<?php echo $filenumber?>&officetype=3', 'newwindow', 'height=200, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=no, status=no')">+上传附件</a></td>
    </tr>
</table>

<?php if($_CONFIG->config_data('configoffice')=='1'){?>
<table class="TableBlock" border="0" width="80%" align="center"  style="margin-top:15px;">
	 <tr>
      <td nowrap class="TableHeader" colspan="2"><b>&nbsp;正文设置</b></td>
    </tr>  
	<tr>
      <td nowrap class="TableContent" width="15%">文档：</td>
      <td class="TableData" id="filenumberoffice">
	 </td>
    </tr>
	<tr>
      <td nowrap class="TableContent" width="15%">文档操作：</td>
      <td class="TableData">
	  <input type="hidden" name="fileofficeid" class="BigInput"  onpropertychange="fileoffice_show();" />
	  <a href="javascript:;" onClick="show_notk()">+新建word文档</a></td>
    </tr>
</table>
<? }?>

<table class="TableBlock" border="0" width="80%" align="center" style="margin-top:15px;">
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
	  <input type="hidden" name="flowdatetype" value="<?php echo $flow['flowdatetype']?>" />
	  <input type="hidden" name="flowdate" value="<?php echo $flow['flowdate']?>" />
	  <?php
	 if($flow['flowkey2']=='2'){
		 //单人审批
		 $flowuser=explode(',',$flow['flowuser']);
		 if($flow['flowkey1']=='1'){//可选
			 get_pubuser(1,"userkey",$flowuser[0],"+选择审批人员",120,20);
		 }else{
			 get_pubuser(1,"userkey",$flowuser[0],"+选择审批人员",120,20,$flow['flowuser']);
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
	 注：为空表示不通知，如要通知工作流审批之外的人员，请选择
	 </td>
    </tr>
	<?php }?>
</table> 

</div>
</form>	
</body>
</html>
