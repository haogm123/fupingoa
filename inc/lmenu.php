<?php
	/*
	*/
	define('IN_ADMIN',True);
	require_once('../include/common.php');
	if ( !$_USER->id ) {
		show_msg('你还没有登录，请先登录', 'login.php', 1000);
	}
	if($_GET["menuid"]){
		$muid=$_GET["menuid"];
	}else{
		$muid=3;
	}
	global $_CACHE;
	get_cache('menu');
	$my_g=$_USER->groupname;
	foreach ( $_CACHE['menu'] as $row) {
		if($row['fatherid']==$muid and $my_g!='系统管理员'){
				if(crm_menu_view($row["menuid"])) {
					if($row[menutype]!='1'){
						$aa=get_pp($row[menuname]);
						//echo $row[menuname]."++".$aa."**<br>";
						//自写
						if($aa!=0){
						echo '<h3 class="f14"><span class="switchs cu on" title="展开与收缩"></span>'.$row[menuname].'</h3>';
						//crm_menu_tow($row[menuid]);
						crm_menu_my($row[menuid]);
						//echo $row[menuid]."++<br>";
						//echo "<span class='cu' title='点击操作'></span><a href=javascript:_MP(".$row[menuid].",'".$row[menuurl]."'); hidefocus='true' style='outline:none;'>".$row[menuname]."</a>";

						}
					}
				}else{
				//自写
				$aa=get_pp($row[menuname]);
				//echo $row[menuname]."++".$aa."**<br>";
				if(is_superadmin()){
				echo "<h3 class='f14'><span class='cu' title='点击操作'></span><a href=javascript:_MP(".$row[menuid].",'".$row[menuurl]."'); hidefocus='true' style='outline:none;'>".$row[menuname]."</a></h3>";
				}
				if($aa!=0 and $row[menutype]!='1' and !is_superadmin()){
				//if($row[menutype]!='1'){
				echo "<h3 class='f14'><span class='cu' title='点击操作'></span><a href=javascript:_MP(".$row[menuid].",'".$row[menuurl]."'); hidefocus='true' style='outline:none;'>".$row[menuname]."</a></h3>";
					} 
				}
		}
	}
?>
<script type="text/javascript"> 
$(".switchs").each(function(i){
	var ul = $(this).parent().next();
	$(this).click(
	function(){
		if(ul.is(':visible')){
			ul.hide();
			$(this).removeClass('on');
				}else{
			ul.show();
			$(this).addClass('on');
		}
	})
});
</script>
