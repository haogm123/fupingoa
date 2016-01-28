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
			<h2 class="ui-tit-page">图书借阅列表</h2>
			
			<div class="record-tit-amount">
				<p>总共有<span class="number"><?php echo public_number('book_read')?></span>条数据
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
<li class="ui-tab-trigger-item">
<a href="admin.php?ac=indexsearch&fileurl=book" class="ui-tab-trigger-text">图书借阅</a></li>
<li class="ui-tab-trigger-item <?php if($_GET[type]=='1'){?> ui-tab-trigger-item-current<? }?>">
<a href="admin.php?ac=file_read&fileurl=book&type=1" class="ui-tab-trigger-text">等待借阅</a></li>	
<li class="ui-tab-trigger-item <?php if($_GET[type]=='3'){?> ui-tab-trigger-item-current<? }?>">
<a href="admin.php?ac=file_read&fileurl=book&type=3" class="ui-tab-trigger-text">已借图书</a></li>
<li class="ui-tab-trigger-item <?php if($_GET[type]=='4'){?> ui-tab-trigger-item-current<? }?>">
<a href="admin.php?ac=file_read&fileurl=book&type=4" class="ui-tab-trigger-text">已归还图书</a></li>					
</ul>
				</div>
 
				<div class="ui-tab-container" id="myScene">
					<div class="ui-tab-container-item ui-tab-container-item-current">
					
			
						<table id="tradeRecordsIndex" class="ui-table">

							<thead>
								<tr>
									<th class="checkbox">
									<input type="checkbox" class="checkbox" value="1" name="chkall" onClick="check_all(this)" /></th>
									<th width="100">图书编号</th>
									<th class="title">图书名称</th>
									<th width="100">申请人</th>
									<th width="120">申请日期</th>
									<th width="80" align="center">审批人</th>
									<th class="info">审批日期</th>
									<th width="80" align="center">当前状态</th>
								</tr>
							</thead>
							
							
							
							
							<tbody>
<?foreach ($result as $row) {?>
																																								
<tr <?php if($result%2==0){?>class="split" <?php }?>>
<td class="checkbox">
<?php
get_boxlistkey("id[]",$row['id'],$row['appperson'],$_USER->id)
?></td>
<td width="100"><?php echo $row['booknumber']?></td>
<td class="title"><?php echo $row['bookname']?>
</td>
<td width="100"><?php echo get_realname($row['appperson'])?></td>
<td width="120"><?php echo $row['appdate']?></td>
<td width="80" align="center"><?php echo get_realname($row['examperson'])?></td>
<td class="info"><?php echo $row['examdate']?></td>
<td width="80" align="center">
<?php
							if($row['type']=='1'){
							echo "待审";
							}elseif($row['type']=='2'){
							echo "未通过";
							}elseif($row['type']=='3'){
							echo "借阅中";
							}elseif($row['type']=='4'){
							echo "己归还";
							}
							
							
							?></td>						
</tr>
<?}?>			
																									
</tbody>
		</table>
 
											</div>
					
					<div class="fn-clear">
						<!-- 图释 -->
					  <div class="iconTip fn-left" style="padding-left:15px;">
					<input type="checkbox" class="checkbox" value="1" name="chkall" onClick="check_all(this)" /> 全选 &nbsp;
						  <a class="js-add-contact"><span></span></a>
						  <a href="javascript:document:update.submit();">撤消申请</a>
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
 

