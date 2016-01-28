<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<link rel="stylesheet" type="text/css" href="template/default/content/css/style.css">
<script language="javascript" type="text/javascript" src="template/default/js/jquery.min.js"></script>
<script type="text/javascript">
function show_number(types)
{
   mytop=(screen.availHeight-600)/2;
   myleft=(screen.availWidth-1002)/2;
   window.open("admin.php?ac=list&do=view&fileurl=workclass&workid="+types+"","","height=600,width=1002,status=0,toolbar=no,menubar=no,location=no,scrollbars=yes,top="+mytop+",left="+myleft+",resizable=yes");
} 

</script>
<title>Office 515158 2011 OA办公系统</title>
</head>
<body class="bodycolor">

<div id="navPanel">
<div id="search" style="float: left; padding-left:30px;">
	<b>流水号： </b><?php echo $row['number']?>&nbsp;&nbsp;&nbsp;&nbsp;
	<b>工作流名称：</b><?php echo $row['title']?>&nbsp;&nbsp;&nbsp;&nbsp;
	<?php if($row['numberview']!=''){?>
		<b>关连流程：</b>
		<?php
		$nview=explode(',',$row['numberview']); 
		for($i=0;$i<sizeof($nview);$i++){
			$sqlv ="SELECT id FROM ".DB_TABLEPRE."workclass  WHERE number = '".$nview[$i]."'";
			$rowv = $db->fetch_one_array($sqlv);
			echo ' <a href="javascript:;" onClick="show_number('.$rowv['id'].')">';
			echo $nview[$i].'</a>';
		}
	}
	?>
&nbsp;&nbsp;
	<a href="down.php?urls=<?php echo "data/excel/workclass/".$row['id'].".xls"?>">+下载报表</a>
&nbsp;&nbsp;
<?php
$sql = "SELECT * FROM ".DB_TABLEPRE."workclass_personnel  WHERE workid = '".$row['id']."'  and (pertype=0 or pertype=2 or pertype=4 or pertype=5) and typeid='".$row['typeid']."'  order by perid desc";
$per = $db->fetch_one_array($sql);
//审批
			  $sql = "SELECT * FROM ".DB_TABLEPRE."workclass_personnel where name like '%".get_realname($_USER->id)."%' and (pertype=0 or pertype=4) and typeid='".$row['typeid']."' and workid='".$row['id']."'  order by perid desc";
			  $per = $db->fetch_one_array($sql);
			  if($per['perid']!=''){
				  if($per['appkey']==1 && $per['appkey1']==1){
					  $perlnum = $db->result("SELECT COUNT(*) AS perlnum FROM ".DB_TABLEPRE."workclass_personnel_log where perid='".$per['perid']."' and uid='".$_USER->id."' and pertype=0");
					  if($perlnum>0){
						  echo '<a href="admin.php?ac='.$ac.'&do=personnel&fileurl='.$fileurl.'&workid='.$row['id'].'" style="color:#FF0000;">+在线审批</a>';
					  }
				  }else{
					  echo '<a href="admin.php?ac='.$ac.'&do=personnel&fileurl='.$fileurl.'&workid='.$row['id'].'" style="color:#FF0000;">+在线审批</a>';
				  }
			  }

?>
	
</div>
</div>

<div style="position:absolute; height:90%; width:100%;overflow:auto">  
<table class="TableBlock" border="0" width="80%" style="margin-top:10px;" align="center">
	 <tr>
      <td nowrap class="TableHeader" colspan="4"><b>&nbsp;基础数据</b></td>
    </tr>  
	<tr>
      <td nowrap class="TableContent" width="100"> 
        流水单号：</td>
      <td class="TableData"><?php echo $row["number"]?></td>
      <td class="TableContent" width="100">工作流名称：</td>
      <td class="TableData"><?php echo $row["title"]?></td>
    </tr>
	
	<tr>
      <td nowrap class="TableContent" width="100"> 流程类型：</td>
      <td class="TableData"><?php echo public_value('typename','workclass_type','tid='.$row["typeid"])?></td>
      <td class="TableContent" width="100">所属模型：</td>
      <td class="TableData"><?php echo public_value('title','workclass_template','tplid='.$row["tplid"])?></td>
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
      <td nowrap class="TableHeader" colspan="2"><b>&nbsp;基础表单数据</b></td>
    </tr> 
</table> 
<?php
	echo '<table class="TableBlock" style=" border-top:0px;border-bottom:0px;"  border="0" width="80%"';
	echo ' align="center" >'; 
	echo '<tr>';
	global $db;
	$num = $db->result("SELECT COUNT(*) AS num FROM ".DB_TABLEPRE."workclass_db a,".DB_TABLEPRE."workclass_from b where a.workid='".$row['id']."' and a.fromid=b.fromid and b.inputtype!='6' and inputtype1!='2' ORDER BY b.inputnumber Asc");
	$query = $db->query("SELECT a.*,b.inputtype,b.fromname FROM ".DB_TABLEPRE."workclass_db a,".DB_TABLEPRE."workclass_from b where a.workid='".$row['id']."' and a.fromid=b.fromid and b.inputtype!='6' and inputtype1!='2' ORDER BY b.inputnumber Asc");
	$n=0;
	while ($rowdb = $db->fetch_array($query)) {
	$n++;
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
		if($n%2==0){
			echo '</tr><tr>';
		}
		if($num==$n && $num%2!=0){
			echo '<td nowrap class="TableContent" width="15%"> </td>
		  <td class="TableData"></td>';
		}
	}
	echo '    </tr>';
	echo '</table> ';
	
	$query = $db->query("SELECT a.*,b.inputtype,b.fromname FROM ".DB_TABLEPRE."workclass_db a,".DB_TABLEPRE."workclass_from b where a.workid='".$row['id']."' and a.fromid=b.fromid and b.inputtype!='6' and inputtype1='2' ORDER BY b.inputnumber Asc");
$n=0;
	while ($rowdb = $db->fetch_array($query)) {
	echo '<table  width="80%" style="border-left:#4686c6 solid 1px;border-right:#ccc solid 1px;border-bottom:#ccc solid 1px;" align="center">'; 
	echo '<tr>';
	echo ' <td nowrap class="TableContent" width="15%" height="30" style="border-right:#cccccc solid 1px;">';  echo $rowdb["fromname"].'：</td>';
	echo '<td class="TableData">';
	echo $rowdb["content"];
	echo '</td>';
	echo '    </tr>';
	echo '</table> ';
	}	
	//处理多输入表单
	global $db;
	$nums = $db->result("SELECT a.*,b.inputtype,b.fromname FROM ".DB_TABLEPRE."workclass_db a,".DB_TABLEPRE."workclass_from b where a.workid='".$row['id']."' and a.fromid=b.fromid and b.inputtype='6'  ORDER BY a.did Asc");
	$sql = "SELECT a.*,b.inputtype,b.fromname FROM ".DB_TABLEPRE."workclass_db a,".DB_TABLEPRE."workclass_from b where a.workid='".$row['id']."' and a.fromid=b.fromid and b.inputtype='6'  ORDER BY a.did Asc";
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
$query = $db->query("SELECT * FROM ".DB_TABLEPRE."fileoffice WHERE officeid='".$row['id']."' and officetype='3' and filetype='2' ORDER BY id asc");
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

<?php if($_CONFIG->config_data('configoffice')=='1'){?>
<table class="TableBlock" border="0" width="80%" align="center" style="margin-top:10px;">
<tr>
      <td nowrap class="TableHeader" colspan="2" id="m2"><b>&nbsp;正文</b></td>
    </tr> 
<?php
global $db;
$query = $db->query("SELECT * FROM ".DB_TABLEPRE."fileoffice WHERE officeid='".$row['id']."' and officetype='3' and filetype='1' ORDER BY id asc");
	while ($file = $db->fetch_array($query)) { 
?>
	<tr>
      <td nowrap class="TableContent" width="15%"><?php echo get_realname($file['uid'])?><br><?php echo $file['date']?></td>
      <td class="TableData">
	  <?php echo $file['filename']?>&nbsp;&nbsp;&nbsp;&nbsp;<a href="down.php?urls=ntko/uploadOfficeFile/<?php echo trim($file['fileid'])?>officefile<?php echo trim($file['filename'])?>">+下载</a>
	  </td>
    </tr>
<?php }?>
</table>
<? }?>
<table width="80%" border="0" align="center" cellpadding="3" cellspacing="0" class="small" style="margin-top:10px;">
  <tr>
    <td class="Big" style="font-size:12px;"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3">流程办理进度</span>
    </td>
  </tr>
</table>
<table class="TableBlock" border="0" width="80%" align="center" >
<?php
$sql = "SELECT * FROM ".DB_TABLEPRE."workclass_personnel where workid='".$row['id']."'  order by perid asc";
$result = $db->fetch_all($sql);
$i=0;
foreach ($result as $rows) {
$sql = "SELECT * FROM ".DB_TABLEPRE."workclass_flow  WHERE fid = '".$rows['flowid']."'";
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
	  <b>状态：</b><?php echo work_pertype($rows['pertype'])?><br>
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
		  <b>状态：</b><?php echo work_pertype($rows['pertype'])?><br>
		  <b>批示：</b><?php echo $rows['lnstructions']?><br></td>
		</tr>
		<?php }else{
			$query = $db->query("SELECT * FROM ".DB_TABLEPRE."workclass_personnel_log where perid='".$rows['perid']."' ORDER BY lid Asc");
			while ($log = $db->fetch_array($query)) {
		?>
		<tr>
		  <td nowrap class="TableContent" align="right" width="130">
		  <span style="font-size:16px;"><?php echo $log['name']?></span></td>
		  <td class="TableData">
		  <b>日期：</b><?php echo $log['approvaldate']?><br>
		  <b>状态：</b><?php echo work_pertype_log($log['pertype'])?><br>
		  <b>批示：</b><?php echo $log['lnstructions']?><br></td>
		</tr>
		<?php 
				}
			}
		}
	}?>
	
<?php }?>	
  </table>

</div>

</body>
</html>
