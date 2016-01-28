<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<link rel="stylesheet" type="text/css" href="template/default/content/css/style.css">
<script language="javascript" type="text/javascript" src="template/default/js/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="template/default/content/js/common.js"></script>
<title>OA办公系统</title>
</head>
<body class="bodycolor">
<div id="navPanel">&nbsp;&nbsp;
<?php
if($_GET['type']==''){
	echo get_usershow('-1','admin.php?ac='.$ac.'&fileurl='.$fileurl.'&organ='.$organ.'&vstartdate='.$vstartdate.'&venddate='.$venddate.'&title='.$title.'&fontsize='.$fontsize.'&category='.$category.'&number='.$number.'');
}
?> 
<div id="search" style="float: right;">
<form method="get" action="admin.php?apptype=<?php echo $apptype?>&type=<?php echo $_GET['type']?>" name="topSearchForm" class="ui-grid-21 ui-grid-right ui-form" style=" margin-top:3px;">
		<input type="hidden" name="ac" value="<?php echo $ac?>" />
		<input type="hidden" name="do" value="list" />
		<input type="hidden" name="typedd" value="<?php echo $_GET['type'].$_GET['typedd']?>" />
		<input type="hidden" name="fileurl" value="<?php echo $fileurl?>" />
		<input type="hidden" name="vuidtype" value="<?php echo $vuidtype?>" />
	发文类型： <select name="category" class="SmallSelect">
	<option value="">全部</option>
	<?php
		$query = $db->query("SELECT * FROM ".DB_TABLEPRE."app_type where type='1' ORDER BY id Asc");
		while ($row = $db->fetch_array($query)) {
	?>
		<option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
	<?php }?>
		</select>&nbsp;&nbsp;&nbsp;&nbsp;标题：<input type="text" name="title" size="15"
	value="<?php echo urldecode($title)?>" class="SmallInput" />&nbsp;&nbsp;&nbsp;&nbsp;字号：<input type="text" name="fontsize" size="15"
	value="<?php echo urldecode($fontsize)?>" class="SmallInput" />&nbsp;&nbsp;&nbsp;&nbsp;主办单位：<input type="text" name="organ" size="15"
	value="<?php echo urldecode($organ)?>" class="SmallInput" /> <input
	type="submit" value="查 询" class="SmallButton" />&nbsp;&nbsp;&nbsp;&nbsp;


 </form>
</div>
</div>

<table width="98%" border="0" align="center" cellpadding="3" cellspacing="0" class="small">
  <tr>
    <td class="Big" style="font-size:12px;"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3"> 公文发文管理</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<span style="font-size:12px; float:right; margin-right:50px;"><input type="button" value="新建发文" class="BigButtonBHover" onClick="javascript:window.location='admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&do=add'">
	</span>
    </td>
  </tr>
</table>
<!--
<form name="update" method="post" action="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&apptype=<?php echo $apptype?>">-->
<input type="hidden" name="do" value="update"/>
<table class="TableBlock" border="0" width="98%" align="center">
	<tr>
      <!--<td nowrap class="TableHeader" width="50">选项</td>-->
      <td width="130" class="TableHeader">发文字号</td>
      <td width="100" class="TableHeader">发布日期</td>
	  <td width="80" class="TableHeader">办结时间</td>
      <td class="TableHeader">发文标题</td>
      <td width="140" align="center" class="TableHeader">所属类别</td>
      <td width="80" align="center" class="TableHeader">发布人</td>
      <td width="140" class="TableHeader">审批步骤</td>
      <td width="180" align="center" class="TableHeader">操作</td>
    </tr>
<? 
	foreach ($result as $row) {
?>
<?php
////屏蔽已审批的公文
//if($row['pkey']==4){
//	$sql="select id from ".DB_TABLEPRE."personnel where pkey=4 and  fileid='".$row['id']."'";
//	$perid=$db->result($sql);
//	$pkeynum=$db->result("SELECT COUNT(*) AS pkeynum FROM ".DB_TABLEPRE."personnel_log where perid='".$perid."' and uid='".$_USER->id."' and pkey=1 ");
//	if($pkeynum==1){
//		continue;
//	}
//}
?>
	<tr><!--
      <td nowrap class="TableContent" width="5%">
	  <input type="checkbox" name="id[]" value="<?php echo $row['id']?>" class="checkbox" />
</td>-->
      <td class="TableData"><?php echo $row['fontsize']?></td>
      <td class="TableData"><?php echo date('Y-m-d',strtotime($row['issuedate']))?></td>
<td class="TableData">
	  <? 
	  if ($row['end_time']!='' && $row['end_time']!='0000-00-00'){
	  echo $row['end_time']."<br>";
	  	$sydays=(strtotime($row['end_time'])-strtotime(date("Y/m/d")))/86400;
		if($sydays==0){
			echo "<font color='red'>今天已是最<br>后一天了！</font>";
		}elseif($sydays>0){
			echo "剩余 $sydays 天";
		}else{
			echo "<font color='red'>已超期 ".(0-$sydays)." 天</font>";
		}
		
	  }else{
	 	 echo "<font color='green'>未设定</font>";
	  }
	  
	  
	  ?></td>
      <td class="TableData"><a href="admin.php?ac=<?php echo $ac?>&do=view&fileurl=<?php echo $fileurl?>&fileid=<?php echo $row['id']?>&apptype=<?php echo $row['category']?>"><?php echo $row['title']?></a></td>
      <td align="center" class="TableData"><?php echo public_value('name','app_type',"id='".$row['category']."'")?></td>
      <td align="center" class="TableData"><?php echo get_realname($row['userid'])?></td>
      <td align="left" class="TableData">
	  <?php
	  $sql = "SELECT * FROM ".DB_TABLEPRE."personnel  WHERE fileid = '".$row['id']."' and type=2 and (pkey=0 or pkey=2 or pkey=4 or pkey=5) and apptype='".$row['category']."' order by id desc";
	  $per = $db->fetch_one_array($sql);
	  $perkey=$per['pkey'];
	  if($per['pkey']==5){
		  echo '<font color=red>流程结束</font>';
	  }elseif($per['pkey']==2){
		  echo '<font color=red>流程被拒绝</font>';
	  }else{
	  	  if($type['appkey']=='1'){
			  $sql = "SELECT * FROM ".DB_TABLEPRE."app_flow  WHERE fid = '".$per['appflow']."' order by fid desc";
			  $flow = $db->fetch_one_array($sql);
			  if($flow['flownum']!=''){
				  echo '<b>第<span style="font-size:18px; font-weight:bold; color:#FF0000;">'.$flow['flownum'].'</span>步：'.$flow['flowname'].'</b><br>';
				  echo '审批人：'.$per['name'];
			  }
		  }else{
			  $sql = "SELECT * FROM ".DB_TABLEPRE."personnel  WHERE fileid = '".$row['id']."' and type=2 and (pkey=0 or pkey=4) and apptype='".$row['category']."' order by id desc";
			  $pers = $db->fetch_one_array($sql);
			  echo '<b><span style="font-size:14px; font-weight:bold; color:#FF0000;">下一步：</span>'.app_movement_2(trim($pers['node'])).'</b><br>';
			  echo '审批人：'.$pers['name'];
		  }
	  }
	  ?>	  </td>
      <td align="center" class="TableData">
	  <?php
	  if($row['akey']==1){
		  echo '公文己撤消';
	  }else{
	  	  if($_GET['type']==2 || $_GET['typedd']==2){
			  echo '<a href="admin.php?ac='.$ac.'&do=mana&fileurl='.$fileurl.'&fileid='.$row['id'].'&apptype='.$row['category'].'">监控</a> | ';
		  }elseif($_GET['type']==3 || $_GET['typedd']==3){
			  echo '<a href="admin.php?ac='.$ac.'&do=reading&fileurl='.$fileurl.'&fileid='.$row['id'].'&apptype='.$row['category'].'&did='.$row['did'].'">阅读</a> | ';
		  }elseif($_GET['type']!=6){
			  //审批
			  $sql = "SELECT * FROM ".DB_TABLEPRE."personnel where name like '%".get_realname($_USER->id)."%' and (pkey=0 or pkey=4) and apptype='".$row['category']."' and fileid='".$row['id']."' and type=2  order by id desc";
			  $per = $db->fetch_one_array($sql);
			  if($per['id']!=''){
				  if($per['appkey']==1 && $per['appkey1']==1){
					  $perlnum = $db->result("SELECT COUNT(*) AS perlnum FROM ".DB_TABLEPRE."personnel_log where perid='".$per['id']."' and uid='".$_USER->id."' and pkey=0");
					  if($perlnum>0){
						  echo '<a href="admin.php?ac='.$ac.'&do=personnel&fileurl='.$fileurl.'&fileid='.$row['id'].'&apptype='.$row['category'].'">审批</a> | ';
					  }
				  }else{
					  echo '<a href="admin.php?ac='.$ac.'&do=personnel&fileurl='.$fileurl.'&fileid='.$row['id'].'&apptype='.$row['category'].'">审批</a> | ';
				  }
			  }
		  }
		  //撤消
		  if($_USER->id==$row['userid'] && $perkey!=5 && $perkey!=2 && $_GET['type']!=6){
			  echo '<a href="admin.php?ac='.$ac.'&do=attakey&fileurl='.$fileurl.'&fileid='.$row['id'].'&apptype='.$row['category'].'">撤消</a> | ';
		  }
		  echo '<a href="admin.php?ac='.$ac.'&do=view&fileurl='.$fileurl.'&fileid='.$row['id'].'&apptype='.$row['category'].'">查看</a> | ';
		  echo '<a href="#" ';
		  echo 'onClick="window.open (';
		  echo "'admin.php?ac=".$ac."&fileurl=".$fileurl."&do=appflow&fileid=".$row['id']."&apptype=".$row['category']."&test=".$filenumber."', 'newwindow', 'height=550, width=500, top=6, right=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=no, status=no')";
		  echo '">审批记录</a>';
		  //增加用印申请
		  if($row['sqren']=='' and $perkey==5){
		  echo '<br><a href=admin.php?ac=appyy&fileurl=app&fileid='.$row['id'].'>申请文号</a> ';
		  }else{
		 // echo '已申请用印';
		  }
		 // echo $perkey;
		  //回退上一步
		  if($_GET['type']!=6){
			  $sql = "SELECT id,type,name,pkey,fileid FROM ".DB_TABLEPRE."personnel where (lnstructions<>'生成发文拟稿，系统自动完成该步骤' or isnull(lnstructions)) and fileid='".$row['id']."' and type=2 order by id desc limit 0,2";
			  $result9 = $db->fetch_all($sql);//print_r($result9);
				foreach ($result9 as $row9) {
					if($sql!=''){
						$sql='';
						if($row9['pkey']=='0'){
							$canback='1';//echo '999ddd';
						}else{
							$canback='0';
						}
					}else{//echo $row9['name'].get_realname($_USER->id);
						if($canback=='1' && strpos('1'.$row9['name'],get_realname($_USER->id))>=1){
							echo '<br><a href=admin.php?ac=returnback&fileurl=app&id='.$row9['fileid'].'&type='.$row9['type'].'>撤回重新审批</a> ';
						}
					}
				}
			}
		 //发起人开放监控权限,流程结束时不能监控
		 if($_USER->id==$row['userid'] and $perkey!=5){
		echo "| <a href='admin.php?ac=approval&do=mana&fileurl=app&fileid=".$row['id']."&apptype=".$row['category']."'>监控</a>"; 
			 }
	 }
	 ?>	  </td>
    </tr>
	
<?}?>	

	
    <tr align="center" class="TableControl">
      <td height="35" colspan="7" align="left" nowrap><!--
        <input type="checkbox" class="checkbox" value="1" name="chkall" onClick="check_all(this)" /><b>全选</b>&nbsp;&nbsp;&nbsp;&nbsp;<img src="template/default/content/images/ico-1.png" align="absmiddle">
						  <a href="javascript:document:update.submit();">清理公文</a> &nbsp;&nbsp;
						  <?php
						if($_GET['type']==''){
						   echo get_exceldown('excel_34');
						}?>-->
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo showpage($num,$pagesize,$page,$url)?></td>
    </tr>
  </table><!--
</form>

<form name="excel" method="post" action="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>">
	<input type="hidden" name="organ" value="<?php echo $organ?>" />
	<input type="hidden" name="fontsize" value="<?php echo $fontsize?>" />
	<input type="hidden" name="category" value="<?php echo $category?>" />
	<input type="hidden" name="title" value="<?php echo $title?>" />
	<input type="hidden" name="vuidtype" value="<?php echo $vuidtype?>" />
		<input type="hidden" name="do" value="excel" />
		</form>-->
 
</body>
</html>
