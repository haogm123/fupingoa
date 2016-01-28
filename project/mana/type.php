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
    <td class="Big"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3">项目类型管理</span>
	<span style="font-size:12px; float:right; margin-right:20px;">
	<input type="button" value="新增类型" class="BigButtonBHover" onClick="javascript:window.location='admin.php?ac=<?php echo $ac?>&do=add&fileurl=<?php echo $fileurl?>'">
	</span>
    </td>
  </tr>
</table>
<form name="update" method="post" action="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>">
		<input type="hidden" name="do" value="update" />	 
	 <table class="TableBlock" border="0" width="90%" align="center">
		<tr>
			<td nowrap class="TableHeader" width="30"></td>
			  <td class="TableHeader" width="200">名称</td>
			  <td width="160" align="center" class="TableHeader">管理人员</td>
			  <td align="center" class="TableHeader">使用人员</td>
			  <td width="60" align="center" class="TableHeader">状态</td>	
			  <td width="60" align="center" class="TableHeader">类型</td>
			  <td width="80" align="center" class="TableHeader">发布人</td>
			  <td width="200" align="center" class="TableHeader">操作</td>
			    	  	
		</tr>
	<?php foreach ($result as $row) { ?>
		<tr>
      <td nowrap class="TableContent">
	  <?php
	 if(!is_superadmin()){
		 $dnum=$db->result("SELECT COUNT(*) AS dnum FROM ".DB_TABLEPRE."project_model where typeid='".$row['tid']."'");
		if($dnum<1){
			if($row['type2']!='1'){
				get_boxlistkey("id[]",$row['tid'],$row['uid'],$_USER->id);
			}else{
				echo '<input type="checkbox" name="id[]" value="'.$row['tid'].'" disabled="disabled" />';
			}
		}else{
			echo '<input type="checkbox" name="id[]" value="'.$row['tid'].'" disabled="disabled" />';
		}
	}else{
		echo '<input type="checkbox" name="id[]" value="'.$row['tid'].'"/>';
	}
	?>
	  </td>
      <td class="TableData">
	  <?php echo $row['title'];?>
	  </td>
      <td align="center" class="TableData"><?php echo $row['manauser'];?></td>
      <td align="center" class="TableData"><?php echo $row['keyuser'];?></td>
		<td align="center" class="TableData">
	  <?php
	  if($row['type1']=='0'){
		  echo '正常';
	  }else{
		  echo '关闭';
	  }
	  ?>	  </td>
    <td align="center" class="TableData">
	 
	 <?php
	  if($row['type2']=='1'){
		  echo '系统';
	  }else{
		  echo '用户';
	  }
	  ?>	 </td>
	  
    <td align="center" class="TableData">
	 <?php echo get_realname($row['uid'])?>	  </td>
    <td align="center" class="TableData">
	  <?php get_urlkey("编辑","admin.php?ac=".$ac."&do=edit&fileurl=".$fileurl."&tid=".$row['tid']."","".$row['uid']!=$_USER->id)?> | 
<a href="admin.php?ac=model&fileurl=<?php echo $fileurl?>&typeid=<?php echo $row['tid']?>">模型管理</a> | 
<a href="admin.php?ac=form&fileurl=<?php echo $fileurl?>&tplid=<?php echo $row['tid']?>&formtype=1&typeid=<?php echo $row['tid']?>">表单管理</a> | 
<a href="admin.php?ac=flow&fileurl=<?php echo $fileurl?>&tplid=<?php echo $row['tid']?>&typeid=<?php echo $row['tid']?>&flowkey4=1">流程管理</a>
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
