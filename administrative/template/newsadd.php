<html>
<head>
<title>信息添加编辑</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="template/default/content/css/style.css">
<script language="javascript" type="text/javascript" src="DatePicker/WdatePicker.js"></script>
<script charset="utf-8" src="eweb/kindeditor.js"></script>
</head>
<body class="bodycolor">
<table width="90%" border="0" align="center" cellpadding="3" cellspacing="0" class="small">
  <tr>
    <td class="Big"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3"><?php echo $_news['title']?>信息<?php echo $_title['name']?></span>&nbsp;&nbsp;&nbsp;&nbsp;
	<span style="font-size:12px;">
	
	<a href="admin.php?ac=<?php echo $ac?>&fileurl=administrative&type=<?php echo $_GET['type']?>" style="font-size:12px;">返回列表页</a><img src="template/default/content/images/f_ico.png" align="absmiddle"></span>
    </td>
  </tr>
</table>
<script Language="JavaScript"> 
function CheckForm()
{
   if(document.save.title.value=="")
   { alert("标题不能为空！");
     document.save.title.focus();
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
      document.save.submit();
}
</script>

<form name="save" method="post" action="?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&do=add&type=<?php echo $_GET['type']?>">
	<input type="hidden" name="view" value="edit" />
	
	<input type="hidden" name="id" value="<?php if($do!='draft'){echo $user['id'] ;}?>" />
	<input type="hidden" name="type" value="<?php echo $_GET[type]?>" />
	 <table class="TableBlock" border="0" width="90%" align="center" style="border-bottom:#4686c6 solid 0px;">
	 <?php if($_GET[type]=='2'){?>
    <tr>
      <td nowrap class="TableContent" width="100"> 缩略图：</td>
      <td class="TableData">
	  <input type="text" name="pic" class="input" size="30" value="<?php echo $user['pic']?>" /> <a href="#" onClick="window.open ('admin.php?ac=uploadadd&fileurl=public&name=pic', 'newwindow', 'height=200, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=no, status=no')">+上传图片</a></td>
    </tr>
	<?php }?>
		<tr>
			<td nowrap class="TableContent" width="100">主题：<? get_helps()?></td>
			  <td class="TableData">
					<input type="text" class="BigInput" name="subject" value="<?php echo $user['subject']?>" size=50 >
				</td>  	  	
		</tr>
	<?php if($user['id']==''){?>
		<tr>
      <td nowrap class="TableContent"> 阅读人：</td>
      <td class="TableData">
	  <?php
	  get_pubuser(2,"shownamemaster",0,"+选择阅读人",50,4)
	  ?>
	   <br>请选择阅读人,不选为所有人可查看&nbsp;&nbsp;&nbsp;&nbsp;<?php get_smsbox("阅读人","shownamemaster")?>
      </td>
    </tr>
	<?}?>	
	<tr>
      <td nowrap class="TableContent" width="100"> 附件设置：</td>
      <td class="TableData">
	<div id="div_filelist"></div>

	<input type="hidden" name="appendix" value="<?php echo $user['appendix']?>"><a href="#" onclick="window.open ('admin.php?ac=uploadadd&amp;fileurl=public&amp;name=appendix&create_url=1', 'newwindow', 'height=200, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=no, status=no')">+附件上传</a>	

	<?php //echo public_upload('appendix','')?>
	<style>#div_filelist font{cursor:pointer}</style>
	<script language="javascript">
	OM_update_fl();
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
		//alert("找不到分隔"+fl);
		document.save.appendix.value="【<a href="+fl+">未命名文件</a>】";
		fl=document.save.appendix.value;
	}
	var jg=fl.substr(0,9);
	var fa=fl.split(jg);
	var longf,fname,ss;
	ss="";
		for (var i=1;i<fa.length;i++){
		//alert(fa[i]);
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
		
	
	</table>	
	<table  width="90%" style="border-left:#4686c6 solid 1px;border-right:#4686c6 solid 1px;" align="center">	
		<tr>
			<td nowrap class="TableContent" width="104" style="border-right:#cccccc solid 1px;">内容：<? get_helps()?></td>
			  <td class="TableData" style="padding-top:10px; padding-bottom:10px; padding-left:3px;">
			  
			  <script>
        KE.show({
                id : 'content'
        });
</script>
				<textarea name="content" rows="5" cols="60" style="width:600px;height:300px;"><?php echo $user['content']?></textarea>
			</td>
		</tr>
		</table>
  <table class="TableBlock" border="0" width="90%" align="center" style="border-top:#4686c6 solid 0px;">
		
		<tr align="center" class="TableControl">
			<td align="center">
			<input type="button" value="保存发布" class="BigButtonBHover" onClick="sendForm();">
			<input type="hidden" value="1" name="save_type">
			<input type="button" value="保存草稿" class="BigButtonBHover" onClick="document.save.save_type.value='2';document.save.submit();">
			</td>
	     </tr>s
	 </table>
  
</form>

 
</body>
</html>
