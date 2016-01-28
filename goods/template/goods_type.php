 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="x-ua-compatible" content="ie=7" />
<link href="template/default/tree/images/admincp.css?SES" rel="stylesheet" type="text/css" />
</head>
<body>
<script src="template/default/tree/js/common.js?SES" type="text/javascript"></script>
<script src="template/default/tree/js/admincp.js?SES" type="text/javascript"></script>
<div id="append_parent"></div>
<div class="container" id="cpcontainer"><div class="itemtitle"><h3>办公用品类别设置</h3></div>
<table class="tb tb2 " id="tips">
<tr><th  class="partition"><a href="javascript:;" onclick="show_all()">全部展开</a> | <a href="javascript:;" onclick="hide_all()">全部折叠</a> </th></tr></table>
<script type="text/JavaScript"> 
var forumselect = '';
var rowtypedata ='';
</script>
<form name="cpform" method="post" autocomplete="off" action="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&do=save" >
<!--menu star-->
<table class="tb tb2 ">
<!--title-->
<tr class="header"><th></th><th>发布人</th><th>名称</th><th>操作</th></tr>
<!--one-->
<?php
			
			global $db;
	        $query = $db->query("SELECT * FROM ".DB_TABLEPRE."goods_type where father='0'   ORDER BY id Asc  ");
			while ($row = $db->fetch_array($query)) {
			$rsfnow = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."goods_type where father='".$row[id]."'   ORDER BY id desc limit 0,1");
			?>
<tr class="hover">
<td class="td25" onclick="toggle_group('group_<?php echo trim($row[id])?>', $('a_group_<?php echo trim($row[id])?>'))">
<a href="javascript:;" id="a_group_<?php echo trim($row[id])?>">[-]</a></td>
			<td class="td25"><?php echo get_realname($row['uid'])?></td>
			<td><div class="parentboard"><?php echo $row['title']?></div></td>
			
			<td width="160"><?php get_urlkey("编辑","admin.php?ac=goods_type_edit&do=edit&fileurl=goods&id=".$row['id']."","".$row['uid']!=$_USER->id)?>
		  <?php
			
	       if($rsfnow[id]==''){
		   ?>
		   | 
		   <?php get_urlkey("删除","admin.php?ac=goods_type&fileurl=goods&do=delete&id=".$row['id']."","".$row['uid']!=$_USER->id)?>
		   <?php
		   }
		   ?></td>
			</tr>
			
<!--view-->

<?php
if($rsfnow[id]!=''){
	      //get_ArticleSorts_list($row['id'],0,0,$_USER->id);
	get_position_list_save($row['id'],0,0,$ac,$fileurl);
}
?>

			
<?php
}
?>		
			
			
			
			
			
			
			
			
<tr><td></td><td colspan="4"><div><a href="admin.php?ac=goods_type_add&fileurl=goods" class="addtr">添加新类别</a></div></td><td class="bold"></td></tr>
			
			
			
			
			
			
			<script type="text/JavaScript">_attachEvent(document.documentElement, 'keydown', function (e) { entersubmit(e, 'editsubmit'); });</script></table>
</form>
 
</div>
</body>
</html>
