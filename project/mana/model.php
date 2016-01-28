<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<link rel="stylesheet" type="text/css" href="template/default/content/css/style.css">
<script src="template/default/js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript" src="template/default/content/js/common.js"></script>
<title>Office 515158 2011 OA办公系统</title>
 
</head>
<body class="bodycolor">

<table width="90%" border="0" align="center" cellpadding="3" cellspacing="0" class="small">
  <tr>
    <td class="Big"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3">项目模型管理</span>
	<span style="font-size:12px; float:right; margin-right:20px;">
	<a href="<?php echo 'admin.php?ac=type&fileurl='.$fileurl.'';?>" style="font-size:12px;"><<返回上一级</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="button" value="新增模型" class="BigButtonBHover" onClick="javascript:window.location='admin.php?ac=<?php echo $ac?>&do=add&fileurl=<?php echo $fileurl?>&typeid=<?php echo $typeid?>'">
	</span>
    </td>
  </tr>
</table>
<form name="update" method="post" action="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&typeid=<?php echo $typeid?>">
		<input type="hidden" name="do" value="update" />	 
	 <table class="TableBlock" border="0" width="90%" align="center">
		<tr>
			<td nowrap class="TableHeader" width="30"></td>
			  <td class="TableHeader" >名称</td>
			  <td width="80" align="center" class="TableHeader">回复状态</td>
			  <td width="80" align="center" class="TableHeader">审批状态</td>
			  <td width="80" align="center" class="TableHeader">表单方式</td>	
			  <td width="80" align="center" class="TableHeader">状态</td>
			  <td width="100" align="center" class="TableHeader">模板地址</td>
			  <td width="80" align="center" class="TableHeader">发布人</td>
			  <td width="200" align="center" class="TableHeader">操作</td>
			    	  	
		</tr>
	<?php foreach ($result as $row) { ?>
		<tr>
      <td nowrap class="TableContent">
	  <?php
	 if(!is_superadmin()){
		 $dnum=$db->result("SELECT COUNT(*) AS dnum FROM ".DB_TABLEPRE."project_template where modid='".$row['mid']."'");
		if($dnum<1){
			get_boxlistkey("id[]",$row['mid'],$row['uid'],$_USER->id);
		}else{
			echo '<input type="checkbox" name="id[]" value="'.$row['mid'].'" disabled="disabled" />';
		}
	}else{
		echo '<input type="checkbox" name="id[]" value="'.$row['mid'].'"/>';
	}
	?>
	  </td>
      <td class="TableData">
	  <?php echo $row['modname'];?>
	  </td>
      <td align="center" class="TableData">
	  <?php
	  if($row['key1']=='0'){
		  echo '否';
	  }else{
		  echo '是';
	  }
	  ?>
	  </td>
      <td align="center" class="TableData">
	  <?php
	  if($row['key2']=='0'){
		  echo '否';
	  }else{
		  echo '是';
	  }
	  ?>
	  </td>
		<td align="center" class="TableData">
	  <?php
	  if($row['key3']=='0'){
		  echo '单表单';
	  }else{
		  echo '多表单';
	  }
	  ?>	  </td>
    <td align="center" class="TableData">
	 
	 <?php
	  if($row['key4']=='1'){
		  echo '正常';
	  }elseif($row['key4']=='2'){
		  echo '停用';
	  }else{
		  echo '模板集成';
	  }
	  ?>	 </td>
	 <td align="center" class="TableData">
	 <?php echo $row['addr']?></td> 
    <td align="center" class="TableData">
	 <?php echo get_realname($row['uid'])?>	  </td>
    <td align="center" class="TableData">
	  <?php get_urlkey("编辑","admin.php?ac=".$ac."&do=edit&fileurl=".$fileurl."&mid=".$row['mid']."&typeid=".$typeid."","".$row['uid']!=$_USER->id)?> |
<?php if($row['key3']==1){?> 
<a href="admin.php?ac=tpl&fileurl=<?php echo $fileurl?>&modid=<?php echo $row['mid']?>&typeid=<?php echo $row['typeid']?>">模板管理</a>
<?php }else{?>
<a href="admin.php?ac=form&fileurl=<?php echo $fileurl?>&tplid=<?php echo $row['mid']?>&formtype=2&typeid=<?php echo $row['typeid']?>">表单管理</a>
<?php if($row['key2']==1){?>
 | 
<a href="admin.php?ac=flow&fileurl=<?php echo $fileurl?>&tplid=<?php echo $row['mid']?>&typeid=<?php echo $row['typeid']?>&flowkey4=2">流程管理</a>
<?php 
}
}?>
	  </td>
    </tr>
	<?php } ?>
	<tr align="center" class="TableControl">
			<td colspan="9" align="left" nowrap>
			  <input type="checkbox" class="checkbox" value="1" name="chkall" onClick="check_all(this)" /> 全选 &nbsp;
						  
						  <img src="template/default/content/images/ico-1.png" align="absmiddle">
						  <a href="javascript:document:update.submit();">删除数据</a> <?php echo showpage($num,$pagesize,$page,$url)?>
	  </td>
	  </tr>
  </table>
  
</form>	
</body>
</html>
