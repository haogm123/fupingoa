<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<link rel="stylesheet" type="text/css" href="template/default/content/css/style.css">
<script language="javascript" type="text/javascript" src="DatePicker/WdatePicker.js"></script>
<script src="template/default/tree/js/admincp.js?SES" type="text/javascript"></script>
<script charset="utf-8" src="eweb/kindeditor.js"></script>

<title>四川省扶贫和移民工作局 OA办公系统</title>
 
</head>
<body>
<table width="90%" border="0" align="center" cellpadding="3" cellspacing="0" class="small">
  <tr>
    <td class="Big"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3"> 发送短消息</span>&nbsp;&nbsp;&nbsp;&nbsp;
	<span style="font-size:12px;">
	
	<a href="admin.php?ac=receive&fileurl=<?php echo $fileurl?>" style="font-size:12px;">返回列表页</a><img src="template/default/content/images/f_ico.png" align="absmiddle"></span>
    </td>
  </tr>
</table>
<script Language="JavaScript"> 
function CheckForm()
{
   if(document.save.receiveperson.value=="")
   { alert("接收人不能为空！");
     document.save.receiveperson.focus();
     return (false);
   }
   if(document.save.content.value=="")
   { alert("内容不能为空！");
     document.save.content.focus();
     return (false);
   }   
   return true;
}
function sendForm()
{
   if(CheckForm())
   document.save.content.style.display='none';
   document.save.content.value+='&nbsp;<b>附件：</b>'+document.save.appendix.value;
   document.save.appendix.value='';
   document.save.submit();
}
</script>
<form name="save" method="post" action="?ac=add&do=save&fileurl=sms">
	<input type="hidden" name="savetype" value="add" />
<table class="TableBlock" border="0" width="90%" align="center" style="border-bottom:#4686c6 solid 0px;">
    <tr>
      <td nowrap class="TableContent" width="15%"> 接收人：<? get_helps()?></td>
      <td class="TableData">
        
	<?php
	  get_pubuser(2,"receiveperson","","+选择接收人",60,3)
	  ?>
    <tr>
      <td nowrap class="TableContent">内容：<? get_helps()?></td>
      <td class="TableData"><textarea name="content" cols="70" rows="8" class="InputAreaStyle"></textarea> 
      </td>
    </tr>
   <tr>
      <td nowrap class="TableContent"> 附件文档：</td>
      <td class="TableData">
	<?php //echo public_upload('appendix','')?>
	<div id="div_filelist"></div>

	<input type="hidden" name="appendix"><a href="#" onclick="window.open ('admin.php?ac=uploadadd&amp;fileurl=public&amp;name=appendix&create_url=1', 'newwindow', 'height=200, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=no, status=no')">+附件上传</a>	
	<style>#div_filelist font{cursor:pointer}</style>
	<script language="javascript">
	function OM_delete_fl(fl){
	var t=document.save.appendix.value;
	var l=t.indexOf(fl)-9;//alert("文件名起始位置："+l);
	var e=t.indexOf("</a>",l)+5;//alert("结束位置："+e);
	var n=e-l;//alert("长度："+n);
	var s=t.substr(l,n);
	var j=document.save.appendix.value;
	document.save.appendix.value=j.replace(s,"");
	OM_update_fl();
	}
	function OM_update_fl(){
	var fl=document.save.appendix.value;
	if(fl==""){div_filelist.innerHTML="";return false;}
	if(fl.indexOf("【<a href=")==-1){
		document.save.appendix.value="【<a href="+fl+">未命名文件</a>】";
		fl=document.save.appendix.value;
	}
	var jg=fl.substr(0,9);
	var fa=fl.split(jg);
	var longf,fname,ss;
	ss="";
		for (var i=1;i<fa.length;i++){
			longf=fa[i].split(">")[0];
			fname=fa[i].substr(longf.length+1,fa[i].length-longf.length-6);
			//alert (fname+longf);
			ss+=fname+'<font color=red onclick=OM_delete_fl("'+longf+'")>删除</font><br>';
		}
		div_filelist.innerHTML=ss;
	}
	</script>
      </td>
    </tr>
 
    <tr align="center" class="TableControl">
      <td colspan="2" nowrap height="35">
     <input type="button" name="Submit" value="发送短消息" class="BigButton" onclick="sendForm();">
      </td>
    </tr>
  </table>
</form>
</body>
</html>
