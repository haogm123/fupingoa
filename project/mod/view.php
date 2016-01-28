<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<link rel="stylesheet" type="text/css" href="template/default/content/css/style.css">
<script language="javascript" type="text/javascript" src="template/default/js/jquery.min.js"></script>
<script charset="utf-8" src="eweb/kindeditor.js"></script>
<script type="text/javascript">
function show_number(types)
{
   mytop=(screen.availHeight-600)/2;
   myleft=(screen.availWidth-1002)/2;
   window.open(""+types+"","","height=600,width=1002,status=0,toolbar=no,menubar=no,location=no,scrollbars=yes,top="+mytop+",left="+myleft+",resizable=yes");
} 

</script>
<title>Office 515158 2011 OA办公系统</title>
</head>
<body class="bodycolor">

<div id="navPanel">
<div id="navMenu">
	<a href="admin.php?ac=<?php echo $ac?>&do=view&fileurl=<?php echo $fileurl?>&modid=<?php echo $modid?>&projectid=<?php echo $projectid?>&typeid=<?php echo $typeid?>&lid=<?php echo $row['lid']?>&down=ture"><span>
<img src="template/default/images/xls.gif" width="16" height="16" align="absmiddle">下载报表</span></a>
	<?php if($row['numberview']!=''){?>
		<b><a><span>关连项目：</span></a></b>
		<?php
		$nview=explode(',',$row['numberview']);
		$nurl=explode(',',$row['numberurl']); 
		for($i=0;$i<sizeof($nview);$i++){
			echo ' <a href="javascript:;" onClick="show_number(';
			echo "'".$nurl[$i]."')";
			echo '"><span>';
			echo $nview[$i].'</span></a>';
		}
	}
	?>
	
	&nbsp;&nbsp;
	<!--<a href="down.php?urls=<?php echo "data/excel/workclass/".$row['lid'].".xls"?>">+打印</a>&nbsp;&nbsp; -->
	


 
</div>
</div>
<table width="80%" border="0" align="center" cellpadding="3" cellspacing="0" class="small">
  <tr>
    <td class="Big" style="font-size:12px;"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3">
	<?php echo $row['title']?>&nbsp;&nbsp;&nbsp;&nbsp;
	信息查看</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<span style="font-size:12px; float:right; margin-right:10px;">
	<a href="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&modid=<?php echo $modid?>&projectid=<?php echo $projectid?>&typeid=<?php echo $typeid?>&type=<?php echo $_GET['type']?>" style="font-size:12px;"><< 返回<?php echo $mod['modname']?>列表</a>
	
	</span>
    </td>
  </tr>
</table>
<div style="position:absolute; height:80%; width:100%;overflow:auto">  

<table class="TableBlock" border="0" width="80%" style="margin-top:10px;" align="center">
	 <tr>
      <td nowrap class="TableHeader" colspan="4"><b>&nbsp;基础数据</b></td>
    </tr>  
	<tr>
      <td nowrap class="TableContent" width="100"> 
        流水单号：</td>
      <td class="TableData"><?php echo $row["number"]?></td>
      <td class="TableContent" width="100">名称：</td>
      <td class="TableData"><?php echo $row["title"]?></td>
    </tr>

	<tr>
      <td nowrap class="TableContent" width="100">发起人：</td>
      <td class="TableData"><?php echo get_realname($row["uid"])?></td>
      <td class="TableContent" width="100">发起时间：</td>
      <td class="TableData"><?php echo $row["date"]?></td>
    </tr>
  </table>

<table class="TableBlock" border="0" width="80%" align="center"  style="margin-top:20px;"> 
<tr>
      <td nowrap class="TableHeader" colspan="2"><b>&nbsp;表单数据内容</b></td>
    </tr> 
</table> 
<?php
global $db;
$query = $db->query("SELECT a.*,b.inputtype,b.fromname FROM ".DB_TABLEPRE."project_db a,".DB_TABLEPRE."project_from b where a.projectid='".$row['lid']."' and a.fromid=b.fromid and b.inputtype!='6'  and a.typeid='".$typeid."' and (a.type='2' or a.type='4') and a.modid='".$modid."' ORDER BY a.did Asc");
	while ($rowdb = $db->fetch_array($query)) {
		echo '<table class="TableBlock" style=" border-top:0px;"  border="0" width="80%"';
		echo ' align="center" >'; 
		echo '<tr>';
		echo ' <td nowrap class="TableContent" width="15%" style="border-right:#cccccc solid 1px;">';  echo $rowdb["fromname"].'：</td>';
		echo '<td class="TableData">'; 
		if($rowdb["inputtype"]=='1'){
			echo '<img src="'.$rowdb["content"].'" />';
			echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;<a href="down.php?urls=';
			echo $rowdb["content"].'" target="_blank">下 载</a>';
		}elseif($rowdb["inputtype"]=='2'){
			echo $rowdb["content"];
			echo '&nbsp;&nbsp;&nbsp;&nbsp;<a href="down.php?urls=';
			echo $rowdb["content"].'" target="_blank">下 载</a>';
		}else{
			echo $rowdb["content"];
		}
		echo '</td>';
		echo '    </tr>';
		echo '</table> ';
	}	
	//处理多输入表单
	global $db;
	$nums = $db->result("SELECT a.*,b.inputtype,b.fromname FROM ".DB_TABLEPRE."project_db a,".DB_TABLEPRE."project_from b where a.projectid='".$row['lid']."' and a.fromid=b.fromid and b.inputtype='6'  and a.typeid='".$typeid."' and a.type='2' and a.modid='".$modid."' ORDER BY a.did Asc");
	$sql = "SELECT a.*,b.inputtype,b.fromname FROM ".DB_TABLEPRE."project_db a,".DB_TABLEPRE."project_from b where a.projectid='".$row['lid']."' and a.fromid=b.fromid and b.inputtype='6'  and a.typeid='".$typeid."' and a.type='2' and a.modid='".$modid."' ORDER BY a.did Asc";
	$results = $db->fetch_all($sql);
	if($nums>0){
		echo '<table class="TableBlock" border="0" width="80%" align="center"  style="margin-top:10px;"> '; 
		echo '<tr>';
		echo ' <td nowrap class="TableHeader" width="50" align="center">编号</td>';
			foreach ($results as $rows) {
				echo '<td nowrap class="TableHeader" align="center">'.$rows["fromname"].'</td>';
			}
		echo ' </tr>';
		for($i=0;$i<10;$i++){
			echo '<tr>';
			echo '<td nowrap class="TableContent" width="50" align="center" style="font-size:16px;">';
			echo $i+1;
			echo '</td>';
			foreach ($results as $rows) {
				$a1=unserialize($rows["content"]);
				echo '<td nowrap class="TableData" align="center">';
				echo $a1[$i];
				echo '</td>';
			}
			echo '</tr>';
		}
		echo '</table>';
	}	
?>

<table class="TableBlock" border="0" width="80%" align="center"  style="margin-top:10px;">
<tr>
      <td nowrap class="TableHeader" colspan="2" id="m2"><b>&nbsp;附件下载</b></td>
    </tr> 
<?php
global $db;
$query = $db->query("SELECT * FROM ".DB_TABLEPRE."fileoffice WHERE officeid='".$row['lid']."' and officetype='6' and filetype='2' ORDER BY id asc");
	while ($file = $db->fetch_array($query)) { 
?>
	<tr>
      <td nowrap class="TableContent" width="15%"><?php echo get_realname($file['uid'])?><br><?php echo $file['date']?></td>
      <td class="TableData">
	  <?php echo $file['filename']?>&nbsp;&nbsp;&nbsp;&nbsp;<a href="down.php?urls=<?php echo $file['fileaddr']?>">+下载</a>
	  </td>
    </tr>
<?php }?>
</table>

<?php if($mod['key1']==1){?>
<form name="save" method="post" action="admin.php?ac=<?php echo $ac?>&do=view&fileurl=<?php echo $fileurl?>&lid=<?php echo $row['lid']?>&modid=<?php echo $modid?>&projectid=<?php echo $projectid?>&typeid=<?php echo $typeid?>&type=<?php echo $_GET['type']?>" style="padding:0px; margin:0px;">
	<input type="hidden" name="view" value="edit" />
<?php
$n=0;
global $db;
$query = $db->query("SELECT * FROM ".DB_TABLEPRE."bbs_log where bbsid='".$row["lid"]."' and type='10'  ORDER BY id Asc");
	while ($bbs = $db->fetch_array($query)) {
$n++;
?>
	
	<table width="80%" border="0" align="center" cellpadding="3" cellspacing="0" class="small" style='margin-top:10px;'>
  <tr>
    <td class="Big"><span style="font-size:12px;">&nbsp;<span style="font-size:34px; font-weight:bold; color:#FF0000;"><?php echo $n?></span>&nbsp;楼&nbsp;&nbsp;<img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3"><?php echo $bbs['title']?></span>
	
	<?php if($_USER->id==$bbs['uid']){?>
	<!--<a href="admin.php?ac=<?php echo $ac?>&fileurl=knowledge&do=views&view=del&id=<?php echo $bbs['id']?>&bbsid=<?php echo $row['lid']?>" style="font-size:12px;">删除</a> -->
	<? }?>
	</span>
    </td>
  </tr>
</table>
	
	<table class="TableBlock" border="0" width="80%" align="center" style="border-bottom:#4686c6 solid 0px;">
		<tr>
			<td nowrap class="TableContent" width="90">回复时间：</td>
			  <td class="TableData"><?php echo $bbs['enddate']?></td>  	  	
		</tr>
		
		<tr>
      <td nowrap class="TableContent"> 发布人：</td>
      <td class="TableData"><?php echo $bbs["author"]?></td>
    </tr>
	</table>	
	<table  width="80%" style="border-left:#4686c6 solid 1px;border-right:#4686c6 solid 1px;border-bottom:#4686c6 solid 1px;" align="center">
	<tr>
      <td colspan="2" bgcolor="#FFFFFF" style="padding:20px 20px 20px 20px;"><?php echo $bbs['content']?></td>
    </tr>
	</table>	
	
<?php
	}
?>

<table class="TableBlock" width="80%" align="center" style="border-bottom:#4686c6 solid 0px;margin-top:20px;">
		<tr>
			<td nowrap class="TableHeader" width="90">回复主题：<? get_helps()?></td>
			  <td class="TableData">
					<input type="text" name="title" class="BigInput" style="width:368px;" size="20" value="回复:<?php echo $row["title"]?>" />
				</td>  	  	
		</tr>
		
	
	</table>	
	<table  width="80%" style="border-left:#4686c6 solid 1px;border-right:#4686c6 solid 1px;" align="center">	
		<tr>
			<td nowrap class="TableContent" width="94" style="border-right:#cccccc solid 1px;">回复内容：</td>
			  <td class="TableData" style="padding-top:10px; padding-bottom:10px; padding-left:3px;">
<script>
        KE.show({
                id : 'content'
        });
</script>
		<textarea name="content" cols="70" rows="12" class="input" style="width:600px;height:200px;"></textarea>
			</td>
		</tr>
		</table>
  <table class="TableBlock" border="0" width="80%" align="center" style="border-top:#4686c6 solid 0px;">
		
		<tr align="center" class="TableControl">
			<td colspan="2" nowrap>
			<input type="Submit" value="回复贴子" class="BigButtonBHover"></td>
	  </tr>
	 </table>

  
</form>

<?php }?>

<?php if($mod['key2']==1){?>
<table width="80%" border="0" align="center" cellpadding="3" cellspacing="0" class="small" style="margin-top:10px;">
  <tr>
    <td class="Big" style="font-size:12px;"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3">流程办理进度</span>
    </td>
  </tr>
</table>
<table class="TableBlock" border="0" width="80%" align="center" >
<?php
$sql = "SELECT * FROM ".DB_TABLEPRE."project_personnel where projectid='".$row['lid']."' and appkey2=2  order by perid asc";
$result = $db->fetch_all($sql);
$i=0;
foreach ($result as $rows) {
$sql = "SELECT * FROM ".DB_TABLEPRE."project_flow  WHERE fid = '".$rows['flowid']."'";
$flow = $db->fetch_one_array($sql);
$i++;
?>
	<tr>
      <td nowrap class="TableHeader" width="130">
	  第<b style="font-size:16px;"><?php echo $i?></b>步:<?php echo $flow['flowname']?></td>
      <td class="TableContent"><b>审批人员：</b><?php echo $rows['name']?>
	  <?php
	  if($rows['pertype']==0){
		  echo '<font color=red>[等待审批中]</font>';
	  }
	  ?>
	  </td>
    </tr>
	<?php if($flow['flownum']==1){?>
	<tr>
      <td nowrap class="TableContent" align="right" width="130">
	  <span style="font-size:16px;"><?php echo $rows['name']?></span></td>
      <td class="TableData">
	  <b>日期：</b><?php echo $rows['approvaldate']?><br>
	  <b>状态：</b><?php echo project_pertype($rows['pertype'])?><br>
	  <b>批示：</b><?php echo $rows['lnstructions']?><br></td>
    </tr>
	<?php }else{?>
		<?php
		if($rows['pertype']!=0){
			if($rows['appkey']==2){?>
		<tr>
		  <td nowrap class="TableContent" align="right" width="130">
		  <span style="font-size:16px;"><?php echo $rows['name']?></span></td>
		  <td class="TableData">
		  <b>日期：</b><?php echo $rows['approvaldate']?><br>
		  <b>状态：</b><?php echo project_pertype($rows['pertype'])?><br>
		  <b>批示：</b><?php echo $rows['lnstructions']?><br></td>
		</tr>
		<?php }else{
			$query = $db->query("SELECT * FROM ".DB_TABLEPRE."project_personnel_log where perid='".$rows['perid']."' ORDER BY lid Asc");
			while ($log = $db->fetch_array($query)) {
		?>
		<tr>
		  <td nowrap class="TableContent" align="right" width="130">
		  <span style="font-size:16px;"><?php echo $log['name']?></span></td>
		  <td class="TableData">
		  <b>日期：</b><?php echo $log['approvaldate']?><br>
		  <b>状态：</b><?php echo project_pertype_log($log['pertype'])?><br>
		  <b>批示：</b><?php echo $log['lnstructions']?><br></td>
		</tr>
		<?php 
				}
			}
		}
	}?>
	
<?php }?>	
  </table>
<?php }?>
</div>

</body>
</html>
