<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html>
<head>
<title>信息添加编辑</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="template/default/content/css/style.css">
<script language="javascript" type="text/javascript" src="template/default/js/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="template/default/content/js/common.js"></script>
</head>
<body class="bodycolor">
	 <table width="90%" border="0" align="center" cellpadding="3" cellspacing="0" class="small">
  <tr>
    <td class="Big"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3">项目表单信息列表</span>
	<span style="font-size:12px; float:right; margin-right:20px;">
	<?php
	if($formtype=='1'){
		$acs='admin.php?ac=type&fileurl='.$fileurl.'';
	}elseif($formtype=='2'){
		$acs='admin.php?ac=model&fileurl='.$fileurl.'&typeid='.$typeid;
	}elseif($formtype=='3'){
		$acs='admin.php?ac=tpl&fileurl='.$fileurl.'&modid='.$modid.'&typeid='.$typeid;
	}else{
		$acs='admin.php?ac=flow&fileurl='.$fileurl.'&tplid='.$tplid.'&typeid='.$typeid.'&flowkey4='.$_GET['formtypes'];
	}
	?>
	<a href="<?php echo $acs?>" style="font-size:12px;"><<返回上一级</a>&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value="新建表单" class="BigButtonBHover" onClick="javascript:window.location='admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&tplid=<?php echo $tplid?>&typeid=<?php echo $typeid?>&modid=<?php echo $modid?>&formtype=<?php echo $formtype?>&do=add&flowid=<?php echo $_GET['flowid']?>&formtypes=<?php echo $_GET['formtypes']?>'">
	</span>
    </td>
  </tr>
</table>
<form name="update" method="post" action="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&tplid=<?php echo $tplid?>&typeid=<?php echo $typeid?>&formtype=<?php echo $formtype?>&modid=<?php echo $modid?>&flowid=<?php echo $_GET['flowid']?>&formtypes=<?php echo $_GET['formtypes']?>"> 
<input type="hidden" name="do" value="update" />
	 <table class="TableBlock" border="0" width="90%" align="center">
		<tr>
			<td nowrap class="TableHeader" width="30"></td>
			  <td class="TableHeader">表单名称</td>
			  <td class="TableHeader" width="90" >控件名称</td>
			  <td width="80" align="center" class="TableHeader">默认值</td>
			  <td width="60" align="center" class="TableHeader">类型</td>
			  <td width="80" align="center" class="TableHeader">表单类型</td>
			  <td width="80" align="center" class="TableHeader">验证方式</td>
			  <td class="TableHeader" width="100" align="center">发布人</td>
			  <td class="TableHeader" width="80" align="center">操作</td>
			    	  	
		</tr>
	<?php foreach ($result as $row) {?>
		<tr>
      <td nowrap class="TableContent">
<?php
$dnum=$db->result("SELECT COUNT(*) AS dnum FROM ".DB_TABLEPRE."project_db where fromid='".$row['fromid']."'");
if($dnum<1){
	if(is_superadmin()){
		get_boxlistkey("id[]",$row['fromid'],$row['uid'],$_USER->id);
	}else{
		echo '<input type="checkbox" name="id[]" value="'.$row['fromid'].'" disabled="disabled" />';
	}
}else{
	echo '<input type="checkbox" name="id[]" value="'.$row['fromid'].'" disabled="disabled" />';
}
?>
	  </td>
      <td class="TableData"><?php echo $row['fromname']?></td>
      <td class="TableData"><?php echo $row['inputname']?></td>
      <td align="center" class="TableData"><?php echo $row['inputvalue']?></td>
      <td align="center" class="TableData">
		<?php
		if($row["inputtype"]=='1'){
			echo '<font color=red>图片</font>';
		}elseif($row["inputtype"]=='2'){
			echo '<font color=#006600>附件</font>';
		}elseif($row["inputtype"]=='3'){
			echo '<font color=#006600>日期</font>';
		}elseif($row["inputtype"]=='4'){
			echo '<font color=#006600>部门</font>';
		}elseif($row["inputtype"]=='5'){
			echo '<font color=#006600>成员</font>';
		}elseif($row["inputtype"]=='0'){
			echo '<font color=#006600>表单</font>';
		}elseif($row["inputtype"]=='6'){
			echo '<font color=#006600>多输入列表</font>';
		}
	?></td>
    <td align="center" class="TableData">
	<?php
		if($row["inputtype1"]=='1'){
			echo '<font color=red>输入框</font>';
		}elseif($row["inputtype1"]=='2'){
			echo '<font color=#006600>输入区</font>';
		}elseif($row["inputtype1"]=='3'){
			echo '<font color=#006600>单选</font>';
		}elseif($row["inputtype1"]=='4'){
			echo '<font color=#006600>复选</font>';
		}elseif($row["inputtype1"]=='5'){
			echo '<font color=#006600>下拉</font>';
		}
	?></td>
    <td align="center" class="TableData">
	<?php
		if($row["confirmation"]=='1'){
			echo '<font color=red>是</font>';
		}elseif($row["confirmation"]=='2'){
			echo '<font color=#006600>否</font>';
		}
	?></td>
<td align="center" class="TableData">
	  <?php echo get_realname($row['uid'])?>
	  </td>
	  <td align="center" class="TableData">
	  <?php
//if($tpl['temptype']!='1'){
get_urlkey("编辑","admin.php?ac=".$ac."&do=add&fileurl=".$fileurl."&fromid=".$row['fromid']."&tplid=".$tplid."&typeid=".$typeid."&modid=".$modid."&formtype=".$formtype."&flowid=".$_GET['flowid']."&formtypes=".$_GET['formtypes']."","".$row['uid']!=$_USER->id);
//}?>
	  </td>
    </tr>
	<?php }?>
	<tr align="center" class="TableControl">
			<td colspan="10" align="left" nowrap>
			  <input type="checkbox" class="checkbox" value="1" name="chkall" onClick="check_all(this)" /> 全选 &nbsp;
						  
						  <img src="template/default/content/images/ico-1.png" align="absmiddle">
						  <a href="javascript:document:update.submit();">删除数据</a> <?php echo showpage($num,$pagesize,$page,$url)?>
	  </td>
	  </tr>
  </table>
  
</form>	
</body>
</html>
