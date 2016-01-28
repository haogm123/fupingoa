<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>行政公文柜</title>
<link rel="stylesheet" type="text/css" href="template/default/content/css/style.css">
<link type="text/css" media="screen" charset="utf-8" rel="stylesheet" href="template/default/content/css/style.account-1.1.css" />
<link charset="utf-8" rel="stylesheet" href="template/default/content/css/personal.record-1.0.css" media="all" />
<style type="text/css"> 
.aofc_type{background:url(aofc/fd.jpg) no-repeat;width:256px;height:256px;margin-top:50px;line-height:256px;overflow:hidden;text-align:right;font-size:22px;font-weight:bold;cursor:pointer;float:left;margin:20px;color:#FFFFFF;font-family:"黑体";filter:alpha(opacity=100)}
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
		
		<!-- .record-search -->
 
<?

empty($do) && $do = 'list';
if ($do == 'list') {
?>
<div class="ui-grid-21 ui-grid-right record-search">
		
			<div id="J-advanced-filter-option" class="">
				<div class="record-search-time fn-clear" style="text-align:left;line-height:30px;font-weight:bold;">
				点击分类进入设置页面
			  </div>
			</div>
		</div>
<?
$sql="select * from toa_aofc_type";
$result = $db->query($sql);

while ($row = $db->fetch_array($result)) {

?>
<div class="aofc_type" onMouseOver="javascript:this.style.filter='alpha(opacity=50)';" onMouseOut="javascript:this.style.filter='alpha(opacity=100)';" onClick="location='admin.php?ac=mana&fileurl=aofc&do=set&id=<? echo $row['ID']?>';"><? echo $row['title']?> &nbsp;<font size="2" color="yellow">点击设置&nbsp;</font></div>
<?
}


}elseif($do=='set'){
$sql="select * from toa_aofc_type where id=".$_GET['id'];
$row = $db->fetch_one_array($sql);

?>
<div class="ui-grid-21 ui-grid-right record-search">
		
			<div id="J-advanced-filter-option" class="">
				<div class="record-search-time fn-clear" style="text-align:left;line-height:30px;font-weight:bold;">
				如需设置调阅密码或修改密码，请牢记！
			  </div>
			</div>
		</div>

		<form name="save" method="post" action="admin.php?ac=mana&fileurl=aofc" name="topSearchForm" class="ui-grid-21 ui-grid-right ui-form">
		<input type="hidden" name="do" value="save" />
		<input type="hidden" name="id" value="<? echo $_GET['id']?>" />
 <table class="TableBlock" border="0" width="60%" align="center">
    <tr>
      <td nowrap="" class="TableContent" width="200">类别名称：<span style="color:red">(*)</span></td>
      <td class="TableData"><input type="text" class="BigInput" name="title" value="<? echo $row['title']?>" size="20">
      </td>
    </tr>
    
    <tr>
      <td nowrap="" class="TableContent">阅读人员</td>
      <td class="TableData">
		<textarea name="key_user_read" cols="60" rows="5" readonly="" style="background-color:#F5F5F5;color:#006600;"><? echo $row['key_user_read']?></textarea>
		<input type="hidden" name="key_user_readid" value="">
		<input type="hidden" name="key_user_readphone">
		<a href="#" onclick="window.open ('admin.php?ac=user_checkbox&fileurl=public&inputname=key_user_read&user=', 'newwindow', 'height=500, width=500, top=50, left=100, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=no, status=no')"><br>+选择允许阅读的人员</a>&nbsp;&nbsp;&nbsp;&nbsp;为空则允许所有人阅读
		</td>
    </tr>
    <tr>
      <td nowrap="" class="TableContent">查阅密码</td>
      <td class="TableData">
		<input type="password" class="BigInput" name="pwd_read" value="<? echo $row['pwd_read']?>">
		<br>设置查阅文件时需要验证的密码，为空则不验证密码。
		</td>
    </tr>
    <tr>
      <td nowrap="" class="TableContent">修改人员</td>
      <td class="TableData">
		<textarea name="key_user_write" cols="60" rows="5" readonly="" style="background-color:#F5F5F5;color:#006600;"><? echo $row['key_user_read']?></textarea>
		<input type="hidden" name="key_user_writeid" value="">
		<input type="hidden" name="key_user_writephone">
		<a href="#" onclick="window.open ('admin.php?ac=user_checkbox&fileurl=public&inputname=key_user_write&user=', 'newwindow', 'height=500, width=500, top=50, left=100, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=no, status=no')"><br>+选择允许修改的人员</a>&nbsp;&nbsp;&nbsp;&nbsp;为空则允许所有人修改
		</td>
    </tr>
    <tr>
      <td nowrap="" class="TableContent">修改密码</td>
      <td class="TableData">
		<input type="password" class="BigInput" name="pwd_write" value="<? echo $row['pwd_write']?>">
		<br>设置修改文件时需要验证的密码，为空则不验证密码。
		</td>
    </tr>
    <tr align="center" class="TableControl">
    	<td colspan="4" nowrap="">
    	<input type="submit" value="保存修改" class="BigButtonBHover">
		</td>
  </tr>
  </table>
  
</form>

<?
}elseif($do=='save'){
	$id=$_POST['id'];
	$title=$_POST['title'];
	$key_read=$_POST['key_user_read'];
	$key_write=$_POST['key_user_write'];
	$pwd_read=$_POST['pwd_read'];
	$pwd_write=$_POST['pwd_write'];

	if($title==''){show_msg('类别名称不允许为空！', 'admin.php?ac=overview&fileurl=aofc');exit;}
		$db->query("update toa_aofc_type set title='".$title."',key_user_read='".$key_read."',key_user_write='".$key_write."',pwd_read='".$pwd_read."',pwd_write='".$pwd_write."' where id=".$id);
		show_msg('类别修改成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'&type=2');


}
?>
	</div>
	
	</div>
	
</div>


</div>

                            

</body>
</html>
 