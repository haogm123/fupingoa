<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<link rel="stylesheet" type="text/css" href="template/default/content/css/style.css">
<link href="template/webui/ligerUI/skins/Aqua/css/ligerui-all.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="template/default/js/jquery.min.js"></script>
<script src="template/webui/ligerUI/js/ligerui.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(function (){
	$("#accordion1").ligerAccordion();
});
</script>
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
<a href="admin.php?ac=charts&fileurl=<?php echo $fileurl;?>&do=project&typeid=<?php echo $row['typeid'];?>&projectid=<?php echo $row['id'];?>" ><span><img src="template/default/content/images/p4.gif" width="16" height="16" align="absmiddle">报表与统计</span></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="admin.php?ac=list&do=view&fileurl=project&projectid=<?php echo $row['id']?>&down=ture"><span>
<img src="template/default/images/xls.gif" width="16" height="16" align="absmiddle">下载报表</span></a>
	<?php
	//创建模型数据
				global $db;
				$query = $db->query("SELECT modname,mid,key3 FROM ".DB_TABLEPRE."project_model where typeid='".$row['typeid']."' and key4!=2 ORDER BY mid Asc");
				while ($mod = $db->fetch_array($query)) {
					if($mod['key3']==0){
						echo '<a href="admin.php?ac=modlist&fileurl='.$fileurl.'&modid='.$mod['mid'].'&projectid='.$row['id'].'&typeid='.$row['typeid'].'" style="color:#006600"><span><img src="template/default/images/movetofolder.gif" width="16" height="16" align="absmiddle">'.$mod['modname'].'</span></a>';
					}else{
						echo '<a href="admin.php?ac=tpllist&fileurl='.$fileurl.'&modid='.$mod['mid'].'&projectid='.$row['id'].'&typeid='.$row['typeid'].'" style="color:#006600"><span><img src="template/default/images/movetofolder.gif" width="16" height="16" align="absmiddle">'.$mod['modname'].'</span></a>';
					}
				}
	?>
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
	<!--<a href="down.php?urls=<?php echo "data/excel/project/p_".$row['id'].".xls"?>">+打印</a>&nbsp;&nbsp; -->
	


 
</div>
</div>
<table width="95%" border="0" align="center" cellpadding="3" cellspacing="0" class="small">
  <tr>
    <td class="Big" style="font-size:12px;"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3">
	<?php echo $row['title']?>&nbsp;&nbsp;&nbsp;&nbsp;
	信息查看</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<span style="font-size:12px; float:right; margin-right:10px;">
	<a href="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>" style="font-size:12px;"><< 返回项目列表</a>
	
	</span>
    </td>
  </tr>
</table>
<div style="position:absolute; height:80%; width:100%;overflow:auto">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" style="padding-top:10px;width:200px;padding-left:5px;">
	<style type="text/css">
        #accordion1{height:300px;overflow:hidden;}
    </style>
	<div id="accordion1"> 
	<?php
	global $db;
	$query = $db->query("SELECT mid,modname,key3 FROM ".DB_TABLEPRE."project_model where typeid='".$row['typeid']."' ORDER BY mid Asc");
	while ($leftmod = $db->fetch_array($query)) {
	if($leftmod['key3']==0){
		$key3='mod';
	}else{
		$key3='tpl';
	}
	?>
     <div title="<?php echo $leftmod['modname'];?>" style="line-height:22px; padding-left:5px;">
       
             <?php
			$query2 = $db->query("SELECT * FROM ".DB_TABLEPRE."project_log where typeid='".$row['typeid']."' and modid='".$leftmod['mid']."' and projectid='".$row['id']."' ORDER BY lid desc");
			while ($leftlog = $db->fetch_array($query2)) {
			?>
           • <a href="admin.php?ac=<?php echo $key3;?>list&do=view&fileurl=<?php echo $fileurl;?>&lid=<?php echo $leftlog['lid']?>&modid=<?php echo $leftlog['modid']?>&projectid=<?php echo $leftlog['projectid']?>&typeid=<?php echo $leftlog['typeid']?>&tplid=<?php echo $leftlog['tplid']?>"><?php echo $leftlog['title'];?></a><br>
			<?php }?>
        
        </div>
	<?php }?>
	  </div>
	</td>
    <td valign="top">
<!--右边开始-->

<table class="TableBlock" border="0" width="98%" style="margin-top:10px;" align="center">
	 <tr>
      <td nowrap class="TableHeader" colspan="4"><b>&nbsp;基础数据</b></td>
    </tr>  
	<tr>
      <td nowrap class="TableContent" width="100"> 
        流水单号：</td>
      <td class="TableData"><?php echo $row["number"]?></td>
      <td class="TableContent" width="100">项目名称：</td>
      <td class="TableData"><?php echo $row["title"]?></td>
    </tr>
	<tr>
      <td nowrap class="TableContent" width="100">发起人：</td>
      <td class="TableData"><?php echo get_realname($row["uid"])?></td>
      <td class="TableContent" width="100">发起时间：</td>
      <td class="TableData"><?php echo $row["date"]?></td>
    </tr>
  </table>

<table class="TableBlock" border="0" width="98%" align="center"  style="margin-top:20px;"> 
<tr>
      <td nowrap class="TableHeader" colspan="2"><b>&nbsp;表单数据内容</b></td>
    </tr> 
</table> 
<?php
global $db;
$query = $db->query("SELECT a.*,b.inputtype,b.fromname FROM ".DB_TABLEPRE."project_db a,".DB_TABLEPRE."project_from b where a.projectid='".$row['id']."' and a.fromid=b.fromid and b.inputtype!='6' and (a.type=1 or a.type=4) and a.tplid='' ORDER BY a.did Asc");
	while ($rowdb = $db->fetch_array($query)) {
		echo '<table class="TableBlock" style=" border-top:0px;"  border="0" width="98%"';
		echo ' align="center" >'; 
		echo '<tr>';
		echo ' <td nowrap class="TableContent" width="15%" style="border-right:#cccccc solid 1px;">';  echo $rowdb["fromname"].'：</td>';
		echo '<td class="TableData">'; 
		if($rowdb["inputtype"]=='1'){
			echo '<img src="'.$rowdb["content"].'" />';
			echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;<a href="down.php?urls=';
			echo $rowdb["content"].'" target="_blank">下 载</a>';
		}elseif($from["inputtype"]=='2'){
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
	$nums = $db->result("SELECT a.*,b.inputtype,b.fromname FROM ".DB_TABLEPRE."project_db a,".DB_TABLEPRE."project_from b where a.projectid='".$row['id']."' and a.fromid=b.fromid and b.inputtype='6' and a.type=1 ORDER BY a.did Asc");
	$sql = "SELECT a.*,b.inputtype,b.fromname FROM ".DB_TABLEPRE."project_db a,".DB_TABLEPRE."project_from b where a.projectid='".$row['id']."' and a.fromid=b.fromid and b.inputtype='6' and a.type=1 ORDER BY a.did Asc";
	$results = $db->fetch_all($sql);
	if($nums>0){
		echo '<table class="TableBlock" border="0" width="98%" align="center"  style="margin-top:10px;"> '; 
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

<table class="TableBlock" border="0" width="98%" align="center"  style="margin-top:10px;">
<tr>
      <td nowrap class="TableHeader" colspan="2" id="m2"><b>&nbsp;附件下载</b></td>
    </tr> 
<?php
global $db;
$query = $db->query("SELECT * FROM ".DB_TABLEPRE."fileoffice WHERE officeid='".$row['id']."' and officetype='5' and filetype='2' ORDER BY id asc");
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

<table width="98%" border="0" align="center" cellpadding="3" cellspacing="0" class="small" style="margin-top:10px;">
  <tr>
    <td class="Big" style="font-size:12px;"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3">流程办理进度</span>
    </td>
  </tr>
</table>
<table class="TableBlock" border="0" width="98%" align="center" >
<?php
$sql = "SELECT * FROM ".DB_TABLEPRE."project_personnel where projectid='".$row['id']."' and appkey2=1 order by perid asc";
$result = $db->fetch_all($sql);
$i=0;
foreach ($result as $rows) {
$sql = "SELECT * FROM ".DB_TABLEPRE."project_flow  WHERE fid = '".$rows['flowid']."' and flowkey4=1";
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
<!--右边结束 -->	
	</td>
  </tr>
</table>

</div>

</body>
</html>
