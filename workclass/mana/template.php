<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<link rel="stylesheet" type="text/css" href="template/default/content/css/style.css">
<script language="javascript" type="text/javascript" src="template/default/js/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="template/default/content/js/common.js"></script>
<title>Office 515158 2011 OA办公系统</title>
 
</head>
<body class="bodycolor">

<div id="navPanel">&nbsp;&nbsp;
<div id="search" style="float: left;">
<form method="get" action="admin.php" name="topSearchForm" class="ui-grid-21 ui-grid-right ui-form" style=" margin-top:3px;">
		<input type="hidden" name="ac" value="<?php echo $ac?>" />
		<input type="hidden" name="do" value="list" />
		<input type="hidden" name="fileurl" value="<?php echo $fileurl?>" />
	类别： <select name="typeid">
			<option value="" selected="selected">请选择类别</option>
			<?php echo work_type_options($typeid)?>
			</select>&nbsp;&nbsp;&nbsp;&nbsp;名称：<input type="text" name="title" size="15"
	value="<?php echo urldecode($title)?>" class="SmallInput" />&nbsp;&nbsp;&nbsp;&nbsp;<input
	type="submit" value="查 询" class="SmallButton" />&nbsp;&nbsp;&nbsp;&nbsp;


 </form>
</div>
</div>

<table width="90%" border="0" align="center" cellpadding="3" cellspacing="0" class="small">
  <tr>
    <td class="Big"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3">工作流模型管理</span>
	<span style="font-size:12px; float:right; margin-right:20px;">
	<input type="button" value="新增模型" class="BigButtonBHover" onClick="javascript:window.location='admin.php?ac=<?php echo $ac?>&do=add&fileurl=<?php echo $fileurl?>'">
	</span>
    </td>
  </tr>
</table>
<form name="update" method="post" action="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>">
		<input type="hidden" name="do" value="update" />	 
	 <table class="TableBlock" border="0" width="90%" align="center">
		<tr>
			<td nowrap class="TableHeader" width="30"></td>
			  <td width="120" align="center" class="TableHeader">流程类别</td>
			  <td class="TableHeader" width="180">模板名称</td>
			  <td width="80" align="center" class="TableHeader">状态</td>
			  <td width="50" align="center" class="TableHeader">类型</td>
			  <td class="TableHeader" >管理人员</td>
			  <td width="120" align="left" class="TableHeader">文件地址</td>	
			  
			  <td width="80" align="center" class="TableHeader">发布人</td>

			  <td class="TableHeader" width="140">操作</td>
			    	  	
		</tr>
	<?php foreach ($result as $row) { ?>
		<tr>
      <td nowrap class="TableContent">
	  <?php
	 if(!is_superadmin()){
		 $dnum=$db->result("SELECT COUNT(*) AS dnum FROM ".DB_TABLEPRE."workclass_from where tplid='".$row['tplid']."' and formtype=1");
		if($dnum<1){
			if($row['tpltype']!='1'){
				get_boxlistkey("id[]",$row['tplid'],$row['uid'],$_USER->id);
			}else{
				echo '<input type="checkbox" name="id[]" value="'.$row['tplid'].'" disabled="disabled" />';
			}
		}else{
			echo '<input type="checkbox" name="id[]" value="'.$row['tplid'].'" disabled="disabled" />';
		}
	}else{
		echo '<input type="checkbox" name="id[]" value="'.$row['tplid'].'"/>';
	}
	?>
	  </td>
      <td align="center" class="TableData"><?php echo public_value('typename','workclass_type'," tid='".$row['typeid']."'")?></td>
      <td class="TableData">
	  <?php
	  if(file_exists("workclass/tpl/".$row['tplid'].'_'.$row["tpladdr"])!=''){
		  echo '<img class="v-al-middle" src="template/default/images/newfolder.gif" />';
	  }
	  echo $row['title'];
	  
	  ?>
	  </td>
      <td align="center" class="TableData">
	  <?php
		if($row["tplkey"]=='1'){
		echo '<font color=red>正常</font>';
		}elseif($row["tplkey"]=='2'){
		echo '<font color=#006600>停用</font>';
		}elseif($row["tplkey"]=='3'){
		echo '<font color=#006600>模板集成</font>';
		}
		?>	  </td>
      <td align="center" class="TableData">
	  <?php
		if($row["tpltype"]=='1'){
		echo '<font color=#cccccc>系统</font>';
		}elseif($row["tpltype"]=='2'){
		echo '<font color=#006600>用户</font>';
		}
		?>	  </td>
		<td class="TableData">
	  <?php
	  if($row['tpladmin']!='0'){
		  echo $row['tpladmin'];
	  }else{
		  echo '无用户';
	  }
	  ?>
	  </td>
    <td align="left" class="TableData">
	  <?php echo $row['tplid'].'_'.$row["tpladdr"]?></td>
	  
    <td align="center" class="TableData">
	 <?php echo get_realname($row['uid'])?>	  </td>
    <td align="center" class="TableData">
	  <?php get_urlkey("编辑","admin.php?ac=".$ac."&do=edit&fileurl=".$fileurl."&tplid=".$row['tplid']."","".$row['uid']!=$_USER->id)?> | 
<a href="admin.php?ac=form&fileurl=<?php echo $fileurl?>&tplid=<?php echo $row['tplid']?>&formtype=1&typeid=<?php echo $row['typeid']?>">表单管理</a> | 
<a href="admin.php?ac=flow&fileurl=<?php echo $fileurl?>&tplid=<?php echo $row['tplid']?>&typeid=<?php echo $row['typeid']?>">流程设置</a>
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
