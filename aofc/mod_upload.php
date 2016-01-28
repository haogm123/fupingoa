<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>行政公文柜</title>
<link type="text/css" media="screen" charset="utf-8" rel="stylesheet" href="template/default/content/css/style.account-1.1.css" />
<link charset="utf-8" rel="stylesheet" href="template/default/content/css/personal.record-1.0.css" media="all" />
<style type="text/css"> 
.tip-faq{
	clear:both;
	margin-top:0px;
}
#J-table-consume{
	margin-bottom:40px;
}
.ui-form-tips .m-cue{
	 background-position: -27px -506px;
	 *background-position: -27px -505px;
}
#J-set-date a{
	font-family:宋体;
}
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
		<form method="post" action="admin.php?ac=search&fileurl=aofc" name="topSearchForm" class="ui-grid-21 ui-grid-right ui-form">
		<input type="hidden" name="do" value="list" />
		<div class="ui-grid-21 ui-grid-right record-search">
		
			<div id="J-advanced-filter-option" class="">
				<div class="record-search-time fn-clear" style="text-align:center;line-height:100px;font-weight:bold;">
					没有权限！<br>当前设置：只有缮印后的文件可以加入行政公文柜！
			  </div>
			</div>
		</div><!-- .record-search -->
		</form>
 
<!--
		<div class="ui-grid-21 ui-grid-right fn-clear" coor="total">
		                                <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                                          <tr>
                                            <td width="91%">
											<?php echo showpage(999,20,4,"baidu.com")?></td>
                                            <td width="9%" align="right" style="padding-right:10px;"><input name="button" type="button" class="BigButtonBHover" onClick="javascript:window.location='admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&do=add&type=<?php echo $_GET['type']?>'" value="发布信息"></td>
                                          </tr>
                                        </table>
		  
										

	  </div>-->
	  <? if($_POST['sscs'].$_POST['ftype'].$_POST['repairs'].$_POST['rtime1'].$_POST['rtime2']!=''){
	  
	  echo "行政公文柜总文件个数：0 ，根据您的查询，找到0个文件。";
	  }?>
	</div>
	
	</div>
 
 
	
</div>


</div>

                            

</body>
</html>
 