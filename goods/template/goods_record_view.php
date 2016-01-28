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
			<h2 class="ui-tit-page">办公用品领用列表</h2>
			
			<div class="record-tit-amount">
				<p>总共有<span class="number"><?php echo public_number('office_goods_record')?></span>条数据
              </p>
			</div>
		</div>
		
		<!-- 过滤表单 -->
		<form method="get" action="admin.php" name="topSearchForm" class="ui-grid-21 ui-grid-right ui-form">
		<input type="hidden" name="ischeck" value="<?php echo $ischeck?>" />
		<input type="hidden" name="ac" value="<?php echo $ac?>" />
		<input type="hidden" name="do" value="list" />
		<input type="hidden" name="fileurl" value="<?php echo $fileurl?>" />
		<input type="hidden" name="vuidtype" value="<?php echo $vuidtype?>" />
		<div class="ui-grid-21 ui-grid-right record-search">
		
			<div id="J-advanced-filter-option" class="">
				<div class="record-search-time fn-clear">
					<div class="ui-form-item ui-form-item-time">
					<label class="ui-form-label" for="J-start">编号：</label>
						<div class="ui-form-content">
							<input type="text" value="<?php echo urldecode($number)?>" name="number" class="ui-input search-keyword" id="J-keyword">
						</div>
						<label class="ui-form-label" for="J-start">名称：</label>
						<div class="ui-form-content">
							<input type="text" value="<?php echo urldecode($title)?>" name="title" class="ui-input search-keyword" id="J-keyword">
						</div>
						
						<label class="ui-form-label" for="J-start">类别：</label>
						<div class="ui-form-content">
		<select class="SelectStyle" name="goods_type">
		<option value="" selected></option>
		<?php get_goods_type(0,$goods_type)?>
		</select>
					  </div>
						
						
						<div class="submit-time-container ">
							<div class="submit-time ui-button ui-button-sorange">
								<input type="submit" class="ui-button-text"id="J-submit-time" value="查 找"/>
							</div>
						</div>
						
					</div>
			  </div>
			</div>
		</div><!-- .record-search -->
		</form>
 

		<div class="ui-grid-21 ui-grid-right fn-clear" coor="total">
		                                
		  
										

	  </div>
	</div>
	<form name="excel" method="post" action="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>">
	<input type="hidden" name="vuidtype" value="<?php echo $vuidtype?>" />
	<input type="hidden" name="ischeck" value="<?php echo $ischeck?>" />
	<input type="hidden" name="title" value="<?php echo $title?>" />
	<input type="hidden" name="type" value="<?php echo $type?>" />
	<input type="hidden" name="goods_type" value="<?php echo $goods_type?>" />
	<input type="hidden" name="number" value="<?php echo $number?>" />
		<input type="hidden" name="do" value="excel" />
		</form>
	<form name="update" method="post" action="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>">
		<input type="hidden" name="do" value="update" />
		<div class="ui-grid-21 ui-grid-right fn-clear" id="J-table-consume" coor="consumelist">
			<div class="ui-tab">
												<div class="ui-tab-trigger"> 
					<ul class="fn-clear"> 
<li class="ui-tab-trigger-item">
<a href="admin.php?ac=goods_record&fileurl=goods" class="ui-tab-trigger-text">办公用品领用</a></li>
<li class="ui-tab-trigger-item <?php if($_GET["type"]==''){?>ui-tab-trigger-item-current<? }?>">
<a href="admin.php?ac=goods_record_view&fileurl=goods" class="ui-tab-trigger-text">领用列表</a></li>
<li class="ui-tab-trigger-item <?php if($_GET["type"]=='1'){?>ui-tab-trigger-item-current<? }?>">
<a href="admin.php?ac=goods_record_view&fileurl=goods&type=1" class="ui-tab-trigger-text">领用审批</a></li>					
</ul>
				</div>
 
				<div class="ui-tab-container" id="myScene">
					<div class="ui-tab-container-item ui-tab-container-item-current">
					
					<div class="amount-scheme-a fn-clear">
<div class="fn-left"><?php echo get_usershow('-1','admin.php?ac='.$ac.'&fileurl='.$fileurl.'&ischeck='.$ischeck.'&number='.$number.'&title='.$title.'&goods_type='.$goods_type.'&type='.$type.'')?></div>
<div class="fn-right">
<?php echo get_exceldown('excel_20')?></div>
</div>
					
					
						<table id="tradeRecordsIndex" class="ui-table">

							<thead>
								<tr>
									<th class="checkbox">
									<input type="checkbox" class="checkbox" value="1" name="chkall" onClick="check_all(this)" /></th>
									<th width="60">编号</th>
									<th width="100">分类</th>
									<th class="title">名称</th>
									<th width="60">规格</th>
									<th width="80">单价</th>
									<th width="80">领用部门</th>
									<th width="60">领用人</th>
									<th width="60">领用数量</th>
									<th class="info">领用时间</th>
									<th width="80">审批人</th>
									<th width="100">操作</th>
								</tr>
							</thead>
							
							
							
							
							<tbody>
<?foreach ($result as $row) {?>
																																								
<tr <?php if($result%2==0){?>class="split" <?php }?>>
<td class="checkbox">
<?php
get_boxlistkey("id[]",$row['id'],$row['uid'],$_USER->id)
?></td>
<td width="60"><?php echo $row['number']?></td>
<td width="100"><?php echo get_goods_type_name($row['goods_type'])?></td>
<td class="title">
<?php echo $row['title']?>
</td>
<td width="100"><?php echo $row['specification']?></td>
<td width="60"><span style="font-size:16px; color:#FF0000; font-weight:900;"><?php echo $row['price']?></span>RMB</td>
<td width="80"><?php echo get_realdepaname($row['department'])?></td>
<td width="60"><?php echo $row['recorduser']?></td>
<td width="80"><span style="font-size:16px; color:#006600;font-weight:900;"><?php echo $row['recordnum']?></span><?php echo $row['unit']?></td>
<td class="info"><?php echo $row['date']?></td>
<td width="80"><?php echo $row['examination']?></td>
<td width="100">
<?php
if($row["type"]=='1'){
global $db;
$key1 = $db->result("SELECT * FROM ".DB_TABLEPRE."office_goods_key where examination like '%".get_realname($_USER->id)."%'  ");
if($key1["examination"]!=''){
?>
<a href="admin.php?ac=goods_record_view&do=keys&fileurl=goods&id=<?php echo $row['id']?>&key1=3">批准</a> | <a href="admin.php?ac=goods_record_view&do=keys&fileurl=goods&id=<?php echo $row['id']?>&key1=2">拒绝</a>
<?php
}
}else{

if($row['type']=='1'){
echo "待审";
}elseif($row['type']=='2'){
echo "拒绝";
}elseif($row['type']=='3'){
echo "<font color=red>己领用</font>";
}
}
?>
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
 

