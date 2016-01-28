<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<link rel="stylesheet" type="text/css" href="template/default/content/css/style.css">
<script language="javascript" type="text/javascript" src="DatePicker/WdatePicker.js"></script>
<script src="template/default/tree/js/admincp.js?SES" type="text/javascript"></script>
<script charset="utf-8" src="eweb/kindeditor.js"></script>

<title>Office 515158 2011 OA办公系统</title>
 
</head>
<body>
<table width="90%" border="0" align="center" cellpadding="3" cellspacing="0" class="small">
  <tr>
    <td class="Big"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3"> 图书信息查看</span>&nbsp;&nbsp;&nbsp;&nbsp;
	<span style="font-size:12px;">
	
	<a href="admin.php?ac=index&fileurl=<?php echo $fileurl?>" style="font-size:12px;">返回列表页</a><img src="template/default/content/images/f_ico.png" align="absmiddle"></span>
    </td>
  </tr>
</table>
<form name="save" method="post" action="#">
<table class="TableBlock" border="0" width="90%" align="center" style="border-bottom:#4686c6 solid 0px;">
    <tr>
      <td nowrap class="TableData" width="15%"> 图书类目：</td>
      <td class="TableData"><?php echo get_book_type_name($blog['booktype'])?>
       	</td>
    </tr>
    <tr>
      <td nowrap class="TableData"> 图书编号：</td>
      <td class="TableData">
<?php echo $blog['bookumber']?>      </td>
    </tr>
	<tr>
      <td nowrap class="TableData"> 图书名称：</td>
      <td class="TableData">
<?php echo $blog['bookname']?>    </td>
    </tr>
	<tr>
      <td nowrap class="TableData"> 作者：</td>
      <td class="TableData">
<?php echo $blog['author']?></td>
    </tr>
	<tr>
      <td nowrap class="TableData"> 出版社：</td>
      <td class="TableData">
<?php echo $blog['publishing']?>     </td>
    </tr>
	<tr>
      <td nowrap class="TableData"> 存放地点：</td>
      <td class="TableData">
<?php echo $blog['appendix']?>  </td>
    </tr>
	<tr>
      <td nowrap class="TableData"> 图书数量：</td>
      <td class="TableData">
<?php echo $blog['booknum']?>本  </td>
    </tr>
	
	
	
	
	
	
	<tr>
      <td nowrap class="TableHeader" colspan="2"><b>&nbsp;正文</b></td>
    </tr>
	
	</table>
<table  width="90%" style="border-left:#4686c6 solid 1px;border-right:#4686c6 solid 1px;" align="center">
    <tr>
      <td width="15%"  style="border-right:#CCCCCC solid 1px;">&nbsp;内容：</td>
      <td width="85%" style="padding-top:10px; padding-bottom:10px; padding-left:3px;"><?php echo $blog['content']?>	 
      </td>
    </tr>
</table>
<table width="90%" align="center" class="TableBlock no-top-border"> 
   
 
    <tr align="center" class="TableControl">
      <td colspan="2" nowrap height="35">
    </td>
    </tr>
  </table>
</form>
</body>
</html>
