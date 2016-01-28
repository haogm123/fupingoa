<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>信息操作页面</title>
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
<script type="text/javascript"> 
E.onDOMReady(function() {

	record = new AP.widget.Record({
		dom: {
			queryForm : "queryForm",
			searchForm : "topSearchForm",
			keyword : "J-keyword",
			keywordType : "J-keyword-type"
		}
	});

	//切换高级筛选状态
	E.on('J-filter-link', 'click', record.switchFilter);
});

</script>
</head>
<!--[if lt IE 7]><body class="ie6"><![endif]--><!--[if IE 7]><body class="ie7"><![endif]--><!--[if IE 8]><body class="ie8"><![endif]--><!--[if !IE]><!--><body><!--<![endif]-->
<div id="container" class="ui-container">
 
<div id="content" class="ui-content fn-clear" coor="default" coor-rate="0.02">
	<div class="ui-grid-21" coor="content">
		<div class="ui-grid-21 ui-grid-right record-tit" coor="title">
			<h2 class="ui-tit-page">采购信息入库</h2>
			
			<div class="record-tit-amount">
				<p>总共有<span class="number"><?php echo public_number('goods_purchase')?></span>条数据
              </p>
			</div>
		</div>
		

	</div>
	
	<form name="update" method="post" action="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>">
		<input type="hidden" name="do" value="update" />
		<div class="ui-grid-21 ui-grid-right fn-clear" id="J-table-consume" coor="consumelist">
			<div class="ui-tab">
												<div class="ui-tab-trigger"> 
					<ul class="fn-clear"> 
<li class="ui-tab-trigger-item ui-tab-trigger-item-current">
<a href="admin.php?ac=goods_purchase&fileurl=goods" class="ui-tab-trigger-text">采购物品入库</a></li>					
</ul>
				</div>
 
				<div class="ui-tab-container" id="myScene">
					<div class="ui-tab-container-item ui-tab-container-item-current">
						<table id="tradeRecordsIndex" class="ui-table">

							<thead>
								<tr>
									<th class="checkbox">
									<input type="checkbox" class="checkbox" value="1" name="chkall" onClick="check_all(this)" /></th>
									<th class="info">申请人</th>
									<th class="info">申请日期</th>
									<th class="info">金额合计</th>
									<th width="80">审批人</th>
									<th width="80">采购人</th>
									<th class="info">审批时间</th>
									<th width="60">状态</th>
									<th width="80">发布人</th>
									<th width="80">操作</th>
								</tr>
							</thead>
							
							
							
							
							<tbody>
<?foreach ($result as $row) {?>																																							
<tr <?php if($result%2==0){?>class="split" <?php }?>>
<td class="checkbox">
<?php
get_boxlistkey("id[]",$row['id'],$row['uid'],$_USER->id)
?></td>
<td class="info"><?php echo $row['application']?></td>
<td class="info"><?php echo $row['startdate']?></td>
<td class="info"><?php echo $row['pricenum']?>RMB
</td>
<td width="80"><?php echo $row['examination']?></td>
<td width="80"><?php echo $row['purchase']?></td>
<td class="info"><?php echo $row['keydate']?></td>
<td width="60"><?php
if($row['key1']=='1'){
echo "待审";
}elseif($row['key1']=='2'){
echo "通过";
}elseif($row['key1']=='3'){
echo "拒绝";
}elseif($row['key1']=='4'){
echo "己入库";
}
?></td>
<td width="80"><?php echo get_realname($row['uid'])?></td>
<td width="80">
<a href="admin.php?ac=goods_purchase_stock&do=keys&fileurl=goods&id=<?php echo $row['id']?>">入 库</a> | <a href="admin.php?ac=goods_purchase_views&do=list&fileurl=goods&id=<?php echo $row['id']?>">查看</a>
</td>						
</tr>
<?}?>			
																									
</tbody>
		</table>
 
											</div>
					
					<div class="fn-clear">
						<!-- 图释 -->
					  <div class="iconTip fn-left" style="padding-left:15px;">
</div>
						
												<div class="page page-nobg fn-right">
							<span class="page-link"><?php echo showpage($num,$pagesize,$page,$url)?></span>
						</div>
						<!-- /分页 -->
											</div>
				</div>
			</div>
 
		
		</div>
		
 </form>		
	</div>
 
 
	
</div>


</div>

                            

</body>
</html>
 

