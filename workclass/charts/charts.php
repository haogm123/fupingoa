<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<link rel="stylesheet" type="text/css" href="template/default/content/css/style.css">
<script language="javascript" type="text/javascript" src="template/default/js/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="template/default/content/js/common.js"></script>
<title>Office 515158 2011 OA办公系统</title>
</head>
<body class="bodycolor">
<table width="90%" border="0" align="center" cellpadding="3" cellspacing="0" class="small">
  <tr>
    <td class="Big" style="font-size:12px;"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3"> 工作流统计模型管理</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<span style="font-size:12px; float:right; margin-right:20px;">
	<input type="button" value="新建模型" class="BigButtonBHover" onClick="javascript:window.location='admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&do=mana&view=add'">
	</span>
    </td>
  </tr>
</table>

<form name="update" method="post" action="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>">
  <input type="hidden" name="do" value="update"/>
<table class="TableBlock" border="0" width="90%" align="center">
 
   
	<tr>
      <td nowrap class="TableHeader" width="80">选项</td>
	  <!--<td nowrap class="TableHeader" width="120">排序</td> -->
      <td  class="TableHeader">模型名称</td>
      <td width="120" align="center" class="TableHeader">流程类型</td>
      <td width="200" align="center" class="TableHeader">流程模板</td>
    </tr>
<?foreach ($result as $row) {?>
	<tr>
      <td nowrap class="TableContent" width="5%">
	  <input type="checkbox" name="id[]" value="<?php echo $row['id']?>" class="checkbox"  />
</td>
<!--<td class="TableData"><?php echo $row['number']?></td> -->
      <td class="TableData"><?php echo $row['title']?></td>
	  <td align="center" class="TableData"><?php echo public_value('typename','workclass_type','tid='.$row["typeid"])?></td>
      
      <td align="center" class="TableData">
	  <?php echo public_value('title','workclass_template','tplid='.$row["tplid"])?>
	  </td>
    </tr>
	
<?}?>	

	
    <tr align="center" class="TableControl">
      <td height="35" colspan="9" align="left" nowrap>
        <input type="checkbox" class="checkbox" value="1" name="chkall" onClick="check_all(this)" /><b>全选</b>&nbsp;&nbsp;<input type="submit" name="delete" id="button" class="BigButtonBHover" value="删 除"/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo showpage($num,$pagesize,$page,$url)?>
</td>
    </tr>
  </table>
</form>


 
</body>
</html>
