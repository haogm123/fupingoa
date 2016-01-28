<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<link rel="stylesheet" type="text/css" href="template/default/content/css/style.css">
<script language="javascript" type="text/javascript" src="template/default/js/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="DatePicker/WdatePicker.js"></script>
<script type="text/javascript"> 
function searchtpl(typeid){
   var obj = document.getElementById("typeid");
   jQuery.ajax({
      type: 'GET',
      url: 'admin.php?ac=list&fileurl=<?php echo $fileurl?>&do=ajax&typeid='+obj.value+'&date='+new Date(),
      success: function(data){
		  if(data!=''){
			  $("#tplid").html(data);
			  //alert(data);
		  }else{
			  $("#tplid").html('');
		  }
      }
   });
}
</script>
<title>Office 515158 2011 OA办公系统</title>
</head>
<body class="bodycolor">
<div id="navPanel">
<div id="search" style="float: right;">
<form method="get" action="admin.php" name="topSearchForm" class="ui-grid-21 ui-grid-right ui-form" style=" margin-top:0px;">
	<input type="hidden" name="ac" value="<?php echo $ac?>" />
	<input type="hidden" name="do" value="list" />
	<input type="hidden" name="fileurl" value="<?php echo $fileurl?>" />
	<input name="type" type="radio" value="1" <?php if($type==1){?>checked="checked"<?php }?> />
	类别统计
	<input type="radio" name="type" value="2" <?php if($type==2){?>checked="checked"<?php }?> />成员统计
	<input type="radio" name="type" value="3" <?php if($type==3){?>checked="checked"<?php }?> />模型统计
	<input type="radio" name="type" value="4" <?php if($type==4){?>checked="checked"<?php }?> />审批状态统计
	<?php if($type!=1){?>
	&nbsp;&nbsp;	
	类型： 
	<select name="typeid" id="typeid" onchange="searchtpl()">
		<option value="" >全部</option>
			<?php echo work_type_options($typeid)?>
	  </select>
	  <?php }?>
	  <?php if($type!=1 && $type!=3){?>
	  &nbsp;&nbsp;
	模型： <select name="tplid" id="tplid">
			<?php 
			global $db;
			if($typeid!=''){
				$query = $db->query("SELECT title,tplid FROM ".DB_TABLEPRE."workclass_template where tplkey!=2 and typeid='".$typeid."' ORDER BY tplid Asc");
			}else{
				$query = $db->query("SELECT title,tplid FROM ".DB_TABLEPRE."workclass_template where tplkey!=2 ORDER BY tplid Asc");
			}
			echo '<option value="">全部</option>';
			while ($row = $db->fetch_array($query)) {
				echo '<option value="'.$row['tplid'].'" ';
				if($tplid==$row['tplid']){
					echo 'selected="selected"';
				}
				echo '>'.$row['title'].'</option>';
			}
			?>
		</select>
		<?php }?>
		&nbsp;&nbsp;	
		日期：<input type="text" value="<?php echo $datesart?>"  style="width:80px;" readonly="readonly"  onClick="WdatePicker();" name='datesart' > - <input type="text" value="<?php echo $dateend?>"  style="width:80px;" readonly="readonly"  onClick="WdatePicker();" name='dateend' >&nbsp;&nbsp;<input
	type="submit" value="查 询" class="SmallButton" />


 </form>
</div>
</div>
<div style="position:absolute; height:90%; width:100%;overflow:auto"> 
<table width="98%" border="0" align="center" cellpadding="3" cellspacing="0" class="small" style="margin-top:6px;">
  <tr>
    <td class="Big" style="font-size:12px;"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3">工作流综合统计</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px; float:right; margin-right:50px;"><a href="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&flashtype=Column3D&type=<?php echo $type?>&typeid=<?php echo $typeid?>&tplid=<?php echo $tplid?>&datesart=<?php echo $datesart?>&dateend=<?php echo $dateend?>&datenum=<?php echo $datenum?>" style="font-size:12px;">柱形图展示</a>&nbsp;|&nbsp;
	<a href="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&flashtype=Line&type=<?php echo $type?>&typeid=<?php echo $typeid?>&tplid=<?php echo $tplid?>&datesart=<?php echo $datesart?>&dateend=<?php echo $dateend?>&datenum=<?php echo $datenum?>" style="font-size:12px;">折线图展示</a>&nbsp;|&nbsp;
	<a href="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&flashtype=Pie3D&type=<?php echo $type?>&typeid=<?php echo $typeid?>&tplid=<?php echo $tplid?>&datesart=<?php echo $datesart?>&dateend=<?php echo $dateend?>&datenum=<?php echo $datenum?>" style="font-size:12px;">饼图展示</a>&nbsp;|&nbsp;
	<a href="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&flashtype=Area2D&type=<?php echo $type?>&typeid=<?php echo $typeid?>&tplid=<?php echo $tplid?>&datesart=<?php echo $datesart?>&dateend=<?php echo $dateend?>&datenum=<?php echo $datenum?>" style="font-size:12px;">面积图展示</a>&nbsp;|&nbsp;
	<a href="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&flashtype=Bar2D&type=<?php echo $type?>&typeid=<?php echo $typeid?>&tplid=<?php echo $tplid?>&datesart=<?php echo $datesart?>&dateend=<?php echo $dateend?>&datenum=<?php echo $datenum?>" style="font-size:12px;">条形图展示</a>&nbsp;|&nbsp;
	<a href="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&flashtype=Doughnut2D&type=<?php echo $type?>&typeid=<?php echo $typeid?>&tplid=<?php echo $tplid?>&datesart=<?php echo $datesart?>&dateend=<?php echo $dateend?>&datenum=<?php echo $datenum?>" style="font-size:12px;">环形图展示</a>
	</span>
    </td>
  </tr>
</table>

<table width="98%" border="0" align="center" cellpadding="3" cellspacing="0" class="small">
  <tr>
    <td align="center" class="Big" style="font-size:12px;">
	<?php echo renderChartHTML("template/fusioncharts/".$flashtype.".swf", "", $strtype, "",$fw, $fh, false)?>    </td>
  </tr>
</table>
</div>
</body>
</html>
