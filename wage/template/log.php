<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<link rel="stylesheet" type="text/css" href="template/default/content/css/style.css">
<script language="javascript" type="text/javascript" src="template/default/js/jquery.min.js"></script>
<link href="template/webui/ligerUI1/skins/Aqua/css/ligerui-tree.css" rel="stylesheet" type="text/css" />
<link href="template/webui/ligerUI1/skins/Aqua/css/ligerui-dialog" rel="stylesheet" type="text/css" />
<link href="template/webui/ligerUI/skins/Aqua/css/ligerui-all.css" rel="stylesheet" type="text/css" />
<script src="template/webui/ligerUI/js/ligerui.min.js" type="text/javascript"></script>
<script src="template/webui/ligerUI1/js/core/base.js" type="text/javascript"></script>
<script src="template/webui/ligerUI1/js/plugins/ligerTree.js" type="text/javascript"></script>
<script src="template/webui/ligerUI1/js/plugins/ligerDrag.js" type="text/javascript"></script>
<script src="template/webui/ligerUI1/js/plugins/ligerDialog.js" type="text/javascript"></script>
<script src="template/webui/ligerUI1/js/plugins/ligerResizable.js" type="text/javascript"></script>
<script type="text/javascript">
$(function (){
	$("#accordion1").ligerAccordion();
	$("#tree2").ligerTree({ checkbox: false,slide: false});
});
</script>
<script type="text/javascript"> 
function sendForm()
{
   document.save.submit();
}
function wginfo(){
	$.ligerDialog.waitting('正在导出数据,请稍候...');
		setTimeout(function (){
		$.ligerDialog.closeWaitting();
	}, 2000);
}
function wgadd(){
	$.ligerDialog.open({ height: 400,width: 600, url: 'admin.php?ac=<?php echo $ac;?>&fileurl=<?php echo $fileurl;?>&wid=<?php echo $_GET['wid'];?>&do=logadd', isResize: true });
}
</script>
<title>Office 515158 2011 OA办公系统</title>
</head>
<body class="bodycolor">
<form name="save" method="post" action="?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&do=log" style="margin-top:0px; margin-left:0px; margin-right:0px;">
	<input type="hidden" name="view" value="save" />
<div id="navPanel">
<div id="navMenu" style="padding-left:50px;">
<a href="admin.php?ac=<?php echo $ac;?>&fileurl=<?php echo $fileurl;?>"><span><img src="template/webui/ligerUI1/skins/icons/home.gif" width="16" height="16" align="absmiddle">工资表管理</span></a>
<a href="admin.php?ac=<?php echo $ac;?>&fileurl=<?php echo $fileurl;?>&wid=<?php echo $_GET['wid'];?>&do=log" class="active"><span><img src="template/default/content/images/notify_new.gif" width="16" height="16" align="absmiddle"><?php echo $wage['title'];?></span></a>
<a href="admin.php?ac=<?php echo $ac;?>&fileurl=<?php echo $fileurl;?>&do=excel&wid=<?php echo $_GET['wid'];?>" onclick="wginfo();"><span><img src="template/webui/ligerUI1/skins/icons/back.gif" width="16" height="16" align="absmiddle">工资报表模板下载</span></a>
<a href="#" onclick="wgadd();"><span><img src="template/webui/ligerUI1/skins/icons/communication.gif" width="16" height="16" align="absmiddle">导入工资数据</span></a>
<a href="admin.php?ac=<?php echo $ac;?>&fileurl=<?php echo $fileurl;?>&do=view&wid=<?php echo $_GET['wid'];?>"><span><img src="template/webui/ligerUI1/skins/icons/search.gif" width="16" height="16" align="absmiddle"> 信息浏览</span></a>
</div>
<div id="search" style="float: right; padding-right:100px; line-height:30px;">
<span id="error" style="margin-right:20px; color:#FF0000; font-size:14px;"></span>
	<?php if($_GET['uid']!=''){?><input type="button" value="保存数据" class="BigButtonBHover" onClick="sendForm();"><?php }?>
	
</div>
</div>

<div style="position:absolute; height:90%; width:100%;overflow:auto"> 
<table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="top" style="padding-top:20px;width:240px;padding-left:5px;">
	<style type="text/css">
        #accordion1{height:400px;overflow:hidden;}
    </style>
	<div id="accordion1"> 
     <div title="成员选择" style="line-height:22px; padding-left:5px;">
      <ul id="tree2">
	     <?php 
		  global $db;
		  $query = $db->query("SELECT * FROM ".DB_TABLEPRE."department where father='0' ORDER BY id Asc");
		  while ($rowl = $db->fetch_array($query)) {
			  $blog = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."department where father='".$rowl['id']."'   ORDER BY id Asc");
			  $user = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."user WHERE departmentid = '".$rowl['id']."'");
			  if($_GET['uid']!=''){
				  $uid = $db->fetch_one_array("SELECT departmentid FROM ".DB_TABLEPRE."user WHERE  id= '".$_GET['uid']."'");
			  }
			  echo '<li ';
			  if($uid['departmentid']!=$rowl['id']){
				  echo 'isexpand="false"';
			  }
			  echo '>';
			  echo '  <span>'.$rowl['name'].'</span>';
			  if($blog['id']!=''){
				  tree_de($rowl['id'],$_GET['wid'],$_GET['uid']);
			  }
			  if($user['id']!=''){
				  tree_user($rowl['id'],$_GET['wid'],$_GET['uid']);
			  }
			  echo '</li>';
		  }
		  ?>  
    </ul>

        
        </div>
	  </div>
	</td>
    <td valign="top">
<!--右边开始-->
<input type="hidden" name="wid" value="<?php echo $_GET['wid'];?>" />
<input type="hidden" name="uid" value="<?php echo $row['uid']?>" />
<input type="hidden" name="username" value="<?php echo $row['username']?>" />	
<input type="hidden" name="name" value="<?php echo $row['name']?>" />
<input type="hidden" name="lid" value="<?php echo $row['lid']?>" />
<?php
if($_GET['uid']==''){
	echo '<table class="TableBlock" border="0" width="90%" align="center" style="margin-top:20px;">
<tr>
      <td nowrap class="TableHeader" ></td>
    </tr><tr>
      <td nowrap class="TableContent" style="font-size:24px; margin-left:20px; color:#FF0000;">请点开左边成员选择,选择你要添加数据的成员!</td>
    </tr></table>';
}else{
?>
<table class="TableBlock" border="0" width="90%" align="center" style="margin-top:20px;">
<tr>
      <td nowrap class="TableHeader" colspan="4">工资信息编辑</td>
    </tr>
	<tr>
      <td nowrap class="TableContent" width="15%"> 
        姓名：</td>
      <td class="TableData" width="35%"><?php echo $row['name'];?></td>
      <td class="TableContent" width="15%"> 备注：</td>
      <td class="TableData" width="35%"><input name="content" type="text" value="<?php echo $row['content'];?>" style="width:200px;height:28px; line-height:28px;border:0px;" />
       </td>
    </tr>
	<tr>
	  <?php
	  $n=0;
	  foreach ( $_CACHE['wage_type'] as $type) {
	  $n++;
	  $wdb = $db->fetch_one_array("SELECT content FROM ".DB_TABLEPRE."wage_data  WHERE type=".$viewtype." and viewid='".$viewid."' and tid='".$type['tid']."'");	
	  ?>
      <td nowrap class="TableContent"><?php echo $type['name'];?>：</td>
      <td class="TableData"><input name="type_<?php echo $type['tid']?>" type="text" value="<?php echo $wdb['content'];?>" style="width:200px; height:28px; line-height:28px;border:0px;"  onKeyUp="value=value.replace(/[^0-9^.]/g,'');"></td>
      <?php
	  if($n%2==0){
		  echo '</tr><tr>';
	  }
	  }
	  ?>
      
    </tr>
</table>
<?php }?>
<!--右边结束 -->	
	</td>
  </tr>
</table>




</div> 
</form>
 
</body>
</html>
