<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<link rel="stylesheet" type="text/css" href="template/default/content/css/style.css">
<script language="javascript" type="text/javascript" src="template/default/js/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="DatePicker/WdatePicker.js"></script>
<script type="text/javascript"> 
filenumber_show()
function filenumber_show()
{
   jQuery.ajax({
      type: 'GET',
      url: 'admin.php?ac=file&fileurl=public&filenumber=<?php echo $filenumber?>&officetype=1&'+new Date(),
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
      url: 'admin.php?ac=file&do=office&fileurl=public&filenumber=<?php echo $filenumber?>&officetype=1&'+new Date(),
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
   window.open("ntko/FileEdit.php?fileType=word&FileId=51515800000&filenumber=<?php echo $filenumber?>&officetype=1&uid=<?php echo $_USER->id?>&date=<?php echo get_date('Y-m-d H:i:s',PHP_TIME)?>","","height=600,width=1002,status=0,toolbar=no,menubar=no,location=no,scrollbars=yes,top="+mytop+",left="+myleft+",resizable=yes");
}
</script>
<title> OA办公系统</title>
</head>
<body class="bodycolor">
<table width="90%" border="0" align="center" cellpadding="3" cellspacing="0" class="small">
  <tr>
    <td class="Big"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3"> <?php echo $type['name']?>收文拟办</span>&nbsp;&nbsp;&nbsp;&nbsp;
	
    </td>
  </tr>
</table>
<script Language="JavaScript"> 
function CheckForm()
{
   if(document.save.staff.value=="")
   { alert("拟办人员不能为空！");
     document.save.staff.focus();
     return (false);
   }
   if(document.save.organ.value=="")
   { alert("来文单位不能为空！");
     document.save.organ.focus();
     return (false);
   } 
   if(document.save.fontsize.value=="")
   { alert("来文字号不能为空！");
     document.save.fontsize.focus();
     return (false);
   } 
   if(document.save.title.value=="")
   { alert("来文标题不能为空！");
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
<form name="save" method="post" action="?ac=<?php echo $ac?>&do=add&fileurl=<?php echo $fileurl?>&apptype=<?php echo $apptype?>">
	<input type="hidden" name="filenumber" value="<?php echo $filenumber?>" />
	<input type="hidden" name="view" value="add" />
	<table border="0" width="90%" align="center">
	<tr>
      <td align="right"> 来文日期：<input style="width:172px;" class="inputdate" type="text" value="<?php echo get_date('Y-m-d',PHP_TIME)?>" name="receiptdate" onClick="WdatePicker();" />&nbsp; &nbsp;办结时间：<input style="width:172px;" class="inputdate" type="text" value="" name="end_time" onClick="WdatePicker();" /></td>
    </tr>
	</table>
	<table class="TableBlock" border="0" width="90%" align="center">
	<tr>
      <td nowrap class="TableHeader" colspan="2"><b>&nbsp;来文表单处理</b></td>
    </tr>
	
	<tr>
      <td colspan="2" style="padding-left:30px; background:#ffffff;padding-right:30px;padding-top:10px;padding-bottom:10px;"> 
<style>
.tdtop{
 	font-size: 20pt;
 	color: #FC3C03;
 	font-family: 宋体;
 	font-weight: bold;
}

.titleFont{
 	font-size: 11pt;
	color: #FC3C03;
	font-family: 楷体_GB2312;
}

.inputDocStyle {
	BORDER-TOP: #8B8B8B 0px solid; 
	BORDER-BOTTOM: #8B8B8B 0px solid; 
	BORDER-LEFT: #8B8B8B 0px solid; 
	BORDER-RIGHT: #8B8B8B 0px solid; 
 	font-size: 14pt;
	width: 100%;
	HEIGHT: 25px; 
	BACKGROUND-COLOR: #F8E5E4;
}

.inputTextDocStyle {
	BORDER-TOP: #8B8B8B 0px solid; 
	BORDER-BOTTOM: #8B8B8B 0px solid; 
	BORDER-LEFT: #8B8B8B 0px solid; 
	BORDER-RIGHT: #8B8B8B 0px solid; 
 	font-size: 14pt;
	width: 100%;
	HEIGHT: 100%; 
	BACKGROUND-COLOR: #F8E5E4;
}

.Selectdocstyle {
	width: 100%;
	HEIGHT: 100%; 
	BORDER-TOP: #7F9DB9 0px solid; 
	BORDER-BOTTOM: #7F9DB9 0px solid; 
	BORDER-LEFT: #7F9DB9 0px solid; 
	BORDER-RIGHT: #7F9DB9 0px solid; 
	BACKGROUND-COLOR: #F8E5E4;
}

.sendTableStyle{
  	border-top:solid 2px #FC3C03; 
  	border-left:solid 2px #FC3C03; 
  	border-right:solid 1px #FC3C03; 
  	border-bottom:solid 2px #FC3C03; 
}

.sendTd{
  	border-bottom:solid 1px #FC3C03; 
  	border-right:solid 1px #FC3C03; 
 	PADDING-TOP: 6px; 
	PADDING-LEFT: 6px; 
 	font-size: 11pt;
	color: #FC3C03;
	font-family: 楷体_GB2312;
}

.sendTdBottom{
  	border-right:solid 1px #FC3C03; 
 	PADDING-TOP: 6px; 
	PADDING-LEFT: 6px; 
 	font-size: 11pt;
	color: #FC3C03;
	font-family: 楷体_GB2312;
}

.ReceiveTableStyle {
  	border-top:solid 2px #000000; 
  	border-left:solid 2px #000000; 
  	border-right:solid 1px #000000; 
  	border-bottom:solid 1px #000000; 
}

.ReceiveTd{
  	border-bottom:solid 1px #000000; 
  	border-right:solid 1px #000000; 
 	font-size: 11pt;
	color: #000000;
	font-family: 楷体_GB2312;
}





.head {
	font-size: 18pt; 
	font-family:楷体_GB2312; 
	color:red; 
	padding:5px
}

.littlehead {
	font-size: 11pt; 
	font-family:楷体_GB2312; 
	color:red;
}

.top {
	font-size: 11pt; 
	font-family:楷体_GB2312; 
	color:red; 
	border-top: 1 solid red;
}

.bottom {
	font-size: 11pt; 
	font-family:楷体_GB2312; 
	color:red; 
}

.lefttop {
	font-size: 11pt; 
	font-family:楷体_GB2312; 
	color:red; 
	border-left: 1 solid red; 
	border-top: 1 solid red;
}

.lefttopnored {
	font-size: 11pt; 
	font-family:楷体_GB2312; 
	border-left: 1 solid red; 
	border-top: 1 solid red;
}

.topbottom {
	font-size: 11pt; 
	font-family:楷体_GB2312;
	border-top: 1 double red;  
	border-bottom: 1 double red; 
	color:red; 
	padding:5px
}

.lefttopbottom {
	font-size: 11pt; 
	font-family:楷体_GB2312; 
	color:red; 
	border-left: 1 solid red; 
	border-top: 1 solid red;
	border-bottom: 1 solid red;
}


</style>
	  <TABLE BORDER=0 ALIGN=center CELLPADDING=0 CELLSPACING=0 CLASS=ReceiveTableStyle ID=docTable>
	<TR HEIGHT=30 ALIGN=center>
		<TD CLASS=ReceiveTd WIDTH=80>来文编号</TD>
		<TD CLASS=ReceiveTd WIDTH=200><input class="inputDocStyle" type="text" name="number" value="<?php echo get_date('YmdHis',PHP_TIME)?>" /></TD>
		<TD CLASS=ReceiveTd WIDTH=60>份数</TD>
		<TD CLASS=ReceiveTd WIDTH=100><input class="inputDocStyle" onKeyUp="value=value.replace(/[^0-9^]/g,'');" type="text" name="shares" /></TD>
		<TD CLASS=ReceiveTd WIDTH=60>紧急程度</TD>
		<TD CLASS=ReceiveTd WIDTH=100>
		<select name="attype" id="attype" size="1">                   
         <option value='0'>普件</option>
<option value='1'>急件</option></select>
</TD>
	</TR>
	<TR HEIGHT=30 ALIGN=center>
		<TD CLASS=ReceiveTd>来文机关<? get_helps()?></TD>
		<TD CLASS=ReceiveTd>
		<TABLE WIDTH=100% BORDER=0 CELLSPACING=0 CELLPADDING=0 HEIGHT=100%>
								<TR>
								  <TD width="300"><input class="inputDocStyle" type="text" name="organ" /></TD>
									<TD WIDTH=80 ALIGN=center style="padding-left:10px;"><a href="#" onClick="window.open ('admin.php?ac=title&fileurl=app&inputname=organ&do=option&tid=4', 'newwindow', 'height=500, width=550, top=0, left=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=no, status=no')" >
			+选择
			</a></TD>
								</TR>
							</TABLE>
		
		</TD>
		<TD CLASS=ReceiveTd>来文字号<? get_helps()?></TD>
		<TD CLASS=ReceiveTd COLSPAN=3>
		<TABLE WIDTH=100% BORDER=0 CELLSPACING=0 CELLPADDING=0 HEIGHT=100%>
								<TR>
								  <TD width="200"><input class="inputDocStyle" type="text" name="fontsize" /></TD>
									<TD WIDTH=80 ALIGN=center style="padding-left:10px;"><a href="#" onClick="window.open ('admin.php?ac=title&fileurl=app&inputname=fontsize&do=option&tid=5', 'newwindow', 'height=500, width=550, top=0, left=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=no, status=no')" >
			+选择
			</a></TD>
								</TR>
							</TABLE>
		</TD>
	</TR>
	<TR HEIGHT=30 ALIGN=center>
		<TD CLASS=ReceiveTd>来文标题<? get_helps()?></TD>
		<TD CLASS=ReceiveTd COLSPAN=5><input class="inputDocStyle" type="text" name="title" value="<?php echo $type['name']?>:来文编号为[<?php echo get_date('YmdHis',PHP_TIME)?>]的文件" /></TD>
	</TR>
	<TR HEIGHT=100>
		<TD CLASS=ReceiveTd ALIGN=center>拟办意见</TD>
		<TD CLASS=ReceiveTd COLSPAN=5><BR>
			</TD>
	</TR>
	<TR HEIGHT=300>
		<TD CLASS=ReceiveTd ALIGN=center>领导批示</TD>
		<TD CLASS=ReceiveTd VALIGN=TOP COLSPAN=5><BR>
			</TD>
	</TR>
	<TR HEIGHT=100>
		<TD CLASS=ReceiveTd ALIGN=center>承办结果</TD>
		<TD CLASS=ReceiveTd COLSPAN=5><BR>
			</TD>
	</TR>
</TABLE>
	  
	  </td>
      </tr>
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
	  <a href="#m2" onClick="window.open ('admin.php?ac=uploadadd&fileurl=public&name=annexurlid&filenumber=<?php echo $filenumber?>&officetype=1', 'newwindow', 'height=200, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=no, status=no')">+上传附件</a></td>
    </tr>
  
  <?php if($_CONFIG->config_data('configoffice')=='1'){?>
  
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
	 <? }?>
	 <tr id="uid2">
      <td nowrap class="TableHeader" colspan="2"><b>&nbsp;审批流转设置</b></td>
    </tr>
    <tr>
      <td nowrap class="TableContent"> 拟办人员：<? get_helps()?></td>
      <td class="TableData">
		<input type="hidden" name="appflow" value="<?php echo $flow['fid']?>" />
		<input type="hidden" name="appkey" value="<?php echo $flow['flowkey1']?>" />
		<input type="hidden" name="appkey1" value="<?php echo $flow['flowkey2']?>" />
	  <?php
	  if($type['appkey']=='1'){
	  //固定流程
		  if($flow['flowkey1']=='2'){
		  //单人审批
			  if($flow['flowflag']=='1'){//可选
				  get_pubuser(1,"staff",'',"+选择审批人员",120,20);
			  }else{//不可选
				  get_pubuser(1,"staff",'',"+选择审批人员",120,20,$flow['flowuser']);
			  }
		  }else{
		  //多人审批
			  if($flow['flowflag']=='1'){//可选
				  get_pubuser(2,"staff",$flow['flowuser'],"+选择审批人员",40,4);
			  }else{
			  	  //不可选
				  echo "<textarea name='staff' cols='40' rows='4'";
				  echo " readonly style='background-color:#F5F5F5;color:#006600;'>";
				  echo $flow['flowuser']."</textarea>";
				  echo "<input type='hidden' name='staffid' value='".get_realid($flow['flowuser'])."' />";
			  }
		  }
	  }else{
		  //自由流程
		  get_pubuser(2,"staff",$flow['flowuser'],"+选择审批人员",40,4);
		  echo '<br>节点动作设定：';
		  $nodeid=explode(',',$nodeid);
		  $nodename=explode(',',$nodename);
		  for($i=0;$i<sizeof($nodeid);$i++){
			 echo '<input name="node" type="radio" value="'.$nodeid[$i].'" ';
			 if(trim($i)==0){
			    echo ' checked="checked"';
			 }
			 echo ' style="border:0;" />'.$nodename[$i];
		  }
	  }
	  ?>
	  <br>
	 <?php get_smsbox("审批人员","work")?>
	  
	  <!--<input  type="hidden" name="staffname" value="">
			<input  type="hidden" name="staffid" value="">
			<input  type="hidden" name="phone" value="">
			<a href="#uid2" onClick="window.open ('admin.php?ac=attamember&fileurl=attachment&type=0', 'newwindow', 'height=500, width=550, top=0, left=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=no, status=no')">+选择拟办人员</a><input type="text" name="staff" value="" style="border:0px; background-color:#FFFFFF; width:40px;">&nbsp;&nbsp;&nbsp;&nbsp;<?php get_smsbox("审批人员","keyuser")?> --></td>
    </tr>
 
<tr align="center" class="TableControl">
      <td colspan="2" nowrap height="35">
<input type="button" name="Submit" value="存草稿" class="BigButtonBHover" onclick=" document.save.save_type.value='2';document.save.submit();">      
<input type="button" name="Submit" value="发布信息" class="BigButtonBHover" onclick="sendForm();">
<input type="hidden" value="1" name="save_type">
<input type="button" name="Submit" value="继续新建" class="BigButtonBHover" onclick=" document.save.save_type.value='3';sendForm();">      
	   </td>
    </tr>
  </table>
</form>
 
</body>
</html>
