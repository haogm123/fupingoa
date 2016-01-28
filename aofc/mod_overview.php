<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>行政公文柜</title>
<link type="text/css" media="screen" charset="utf-8" rel="stylesheet" href="template/default/content/css/style.account-1.1.css" />
<link charset="utf-8" rel="stylesheet" href="template/default/content/css/personal.record-1.0.css" media="all" />
<style type="text/css">
.aofc_type{background:url(aofc/fd.jpg) no-repeat;width:256px;height:256px;margin-top:50px;line-height:256px;overflow:hidden;text-align:right;font-size:22px;font-weight:bold;cursor:pointer;float:left;margin:20px;color:#aaff88;font-family:"黑体";filter:alpha(opacity=100)}
</style>
<script type="text/javascript" charset="utf-8" src="template/default/content/js/arale.js"></script>
<script charset="utf-8" src="template/default/content/js/recordIndex.js?t=20110523"></script>
<script language="javascript" type="text/javascript" src="template/default/js/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="template/default/content/js/common.js"></script>
<script language="javascript" type="text/javascript" src="DatePicker/WdatePicker.js"></script>
</head>
<!--[if lt IE 7]><body class="ie6"><![endif]--><!--[if IE 7]><body class="ie7"><![endif]--><!--[if IE 8]><body class="ie8"><![endif]--><!--[if !IE]><!--><body><!--<![endif]-->
<div id="container" class="ui-container">
 
<div id="content" class="ui-content fn-clear" coor="default" coor-rate="0.02">
	<div class="ui-grid-21" coor="content">
		<div class="ui-grid-21 ui-grid-right record-tit" coor="title">
			<h2 class="ui-tit-page">行政公文柜</h2>
			
			<div class="record-tit-amount">
				<p>总共有<span class="number"><?php echo 0?></span>个文件
              </p>
			</div>
		</div>
		
		<!-- 过滤表单 -->
		<form method="post" action="admin.php?ac=overview&fileurl=aofc" name="topSearchForm" class="ui-grid-21 ui-grid-right ui-form">
		<input type="hidden" name="do" value="save" />
		<div class="ui-grid-21 ui-grid-right record-search">
		
			<div id="J-advanced-filter-option" class="">
				<div class="record-search-time fn-clear" style="text-align:right;line-height:30px;font-weight:bold;">
				类别名称：
					<input name="newtype" type="text" class="ui-input search-keyword">
					<input name="button" type="submit" class="BigButtonBHover" value="新建类别">
			  </div>
			</div>
		</div><!-- .record-search -->
		</form>
 
<?

empty($do) && $do = 'list';
if ($do == 'list') {

$sql="select * from toa_aofc_type";
$result = $db->query($sql);

while ($row = $db->fetch_array($result)) {

?>
<div class="aofc_type" onMouseOver="javascript:this.style.filter='alpha(opacity=50)';" onMouseOut="javascript:this.style.filter='alpha(opacity=100)';"><? echo $row['title']." <font size=2 color=#ff9900>(".(0+$row['filecount'])?>个文件)&nbsp;</font></div>
<?
}


}elseif($do=='save'){
	$title=$_POST['newtype'];
	if($title==''){show_msg('类别名称不允许为空！', 'admin.php?ac=overview&fileurl=aofc');exit;}
		$db->query("insert into toa_aofc_type (title) values('".$title."')");
		show_msg('类别添加成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'&type=2');


}
?>
	</div>
	
	</div>
	
</div>


</div>

                            

</body>
</html>
 