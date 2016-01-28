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
    <td class="Big"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3">流程表单信息列表</span>
	<span style="font-size:12px; float:right; margin-right:20px;">
	<?php
	if($formtype=='1'){
		$acs='tpl';
	}else{
		$acs='flow';
	}
	?>
	<a href="admin.php?ac=<?php echo $acs?>&fileurl=<?php echo $fileurl?>&tplid=<?php echo $tplid?>&typeid=<?php echo $typeid?>" style="font-size:12px;"><<返回上一级</a>&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value="新建表单" class="BigButtonBHover" onClick="javascript:window.location='admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&tplid=<?php echo $tplid?>&typeid=<?php echo $typeid?>&formtype=<?php echo $formtype?>&flowid=<?php echo $flowid?>&do=add'">
	</span>
    </td>
  </tr>
</table>
<form name="update" method="post" action="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&tplid=<?php echo $tplid?>&typeid=<?php echo $typeid?>&formtype=<?php echo $formtype?>&flowid=<?php echo $flowid?>"> 
<input type="hidden" name="do" value="update" />
	 <table class="TableBlock" border="0" width="90%" align="center">
		<tr>
			<td nowrap class="TableHeader" width="30"></td>
			<td width="6%" align="center" class="TableHeader">排序</td>
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
$dnum=$db->result("SELECT COUNT(*) AS dnum FROM ".DB_TABLEPRE."workclass_db where fromid='".$row['fromid']."'");
if($dnum<1){
	$tpl = $db->fetch_one_array("SELECT tpltype FROM ".DB_TABLEPRE."workclass_template  WHERE tplid = '".$row['tplid']."' ");
	if($tpl['tpltype']!='1' || is_superadmin()){
		get_boxlistkey("id[]",$row['fromid'],$row['uid'],$_USER->id);
	}else{
		echo '<input type="checkbox" name="id[]" value="'.$row['fromid'].'" disabled="disabled" />';
	}
}else{
	echo '<input type="checkbox" name="id[]" value="'.$row['fromid'].'" disabled="disabled" />';
}
?>
	  </td>
	  <td class="TableData"><input name="inputnumber[<?php echo $row['fromid'];?>]" type="text" style="width:30px;" value="<?php echo $row['inputnumber']?>" /></td>
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
get_urlkey("编辑","admin.php?ac=".$ac."&do=add&fileurl=".$fileurl."&fromid=".$row['fromid']."&tplid=".$tplid."&typeid=".$typeid."&flowid=".$flowid."&formtype=".$formtype."","".$row['uid']!=$_USER->id);
//}?>
	  </td>
    </tr>
	<?php }?>
	<tr align="center" class="TableControl">
			<td colspan="10" align="left" nowrap>
			  <input type="checkbox" class="checkbox" value="1" name="chkall" onClick="check_all(this)" /> 全选 &nbsp;&nbsp;<input type="submit" name="do" id="button" class="BigButtonBHover" value="排 序"/> &nbsp;&nbsp;<input type="submit" name="do" id="button" class="BigButtonBHover" value="删 除"/><?php echo showpage($num,$pagesize,$page,$url)?>
	  </td>
	  </tr>
  </table>
  
</form>	
</body>
</html>
