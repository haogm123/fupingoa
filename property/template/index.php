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
			<h2 class="ui-tit-page">固定资产列表</h2>
			
			<div class="record-tit-amount">
				<p>总共有<span class="number"><?php echo public_number('property')?></span>条数据
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
							<input type="text" value="<?php echo urldecode($number)?>" name="number" style="width:120px;" class="ui-input search-keyword" id="J-keyword">
						</div>
						<label class="ui-form-label" for="J-start">名称：</label>
						<div class="ui-form-content">
							<input type="text" value="<?php echo urldecode($title)?>" name="title" class="ui-input search-keyword" id="J-keyword">
						</div>
						
						<label class="ui-form-label" for="J-start">所属部门：</label>
						<div class="ui-form-content">
		<select class="BigStatic" name="type">
		<option value="" selected></option>
		<?php get_realdepalist(0,$type)?>
		</select>
					  </div>
						<label class="ui-form-label" for="J-start">日期：</label>
						<div class="ui-form-content">
		<input type="text" value="<?php echo $vstartdate?>"  class="ui-input i-date" readonly="readonly"  onClick="WdatePicker();" name='vstartdate' > - <input type="text" value="<?php echo $venddate?>"  class="ui-input i-date" readonly="readonly"  onClick="WdatePicker();" name='venddate' >
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
		                                <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                                          <tr>
                                            <td width="91%">
											<?php echo showpage($num,$pagesize,$page,$url)?></td>
                                            <td width="9%" align="right" style="padding-right:10px;"><input type="button" value="新增资产" class="BigButtonBHover" onClick="javascript:window.location='admin.php?ac=add&fileurl=property'"></td>
                                          </tr>
                                        </table>
		  
										

	  </div>
	</div>
	<form name="excel" method="post" action="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>">
	<input type="hidden" name="vuidtype" value="<?php echo $vuidtype?>" />
	<input type="hidden" name="ischeck" value="<?php echo $ischeck?>" />
	<input type="hidden" name="title" value="<?php echo $title?>" />
	<input type="hidden" name="type" value="<?php echo $type?>" />
	<input type="hidden" name="number" value="<?php echo $number?>" />
	<input type="hidden" name="vstartdate" value="<?php echo $vstartdate?>" />
	<input type="hidden" name="venddate" value="<?php echo $venddate?>" />
		<input type="hidden" name="do" value="excel" />
		</form>
	<form name="update" method="post" action="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>">
		<input type="hidden" name="do" value="update" />
		<div class="ui-grid-21 ui-grid-right fn-clear" id="J-table-consume" coor="consumelist">
			<div class="ui-tab">
												<div class="ui-tab-trigger"> 
					<ul class="fn-clear"> 
<li class="ui-tab-trigger-item ui-tab-trigger-item-current">
<a href="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>" class="ui-tab-trigger-text">固定资产列表</a></li>
<li class="ui-tab-trigger-item">
<a href="admin.php?ac=depreciation&fileurl=property" class="ui-tab-trigger-text">固定资产折旧</a></li>					
</ul>
				</div>
 
				<div class="ui-tab-container" id="myScene">
					<div class="ui-tab-container-item ui-tab-container-item-current">
					
					<div class="amount-scheme-a fn-clear">
<div class="fn-left"><?php echo get_usershow('-1','admin.php?ac='.$ac.'&fileurl='.$fileurl.'&ischeck='.$ischeck.'&number='.$number.'&title='.$title.'&vstartdate='.$vstartdate.'&venddate='.$venddate.'&type='.$type.'')?></div>
<div class="fn-right">
<?php echo get_exceldown('excel_23')?></div>
</div>
					
					
						<table id="tradeRecordsIndex" class="ui-table">

							<thead>
								<tr>
									<th class="checkbox">
									<input type="checkbox" class="checkbox" value="1" name="chkall" onClick="check_all(this)" /></th>
									<th width="80">资产编号</th>
									<th class="title">资产名称</th>
									<th width="100">资产类别</th>
									<th width="120">所属部门</th>
									<th width="80">资产净值</th>
									<th width="60">保管人</th>
									<th class="info">发布时间</th>
									<th width="80">发布人</th>
									<th width="140">操作</th>
								</tr>
							</thead>
							
							
							
							
							<tbody>
<?foreach ($result as $row) {?>
																																								
<tr <?php if($result%2==0){?>class="split" <?php }?>>
<td class="checkbox">
<?php
get_boxlistkey("id[]",$row['id'],$row['uid'],$_USER->id)
?></td>
<td width="80"><?php echo $row['number']?></td>
<td class="title">
<a href="admin.php?ac=views&do=edit&fileurl=property&id=<?php echo $row['id']?>"><?php echo $row['name']?></a>
</td>
<td width="100"><?php echo get_property_type_name($row['property_type'])?></td>
<td width="120"><?php echo get_realdepaname($row['department'])?></td>
<td width="80"><?php echo $row['cptl_val']?></td>
<td width="60"><?php echo $row['user']?></td>
<td class="info"><?php echo $row['date']?></td>
<td width="80"><?php echo get_realname($row['uid'])?></td>
<td width="140">
<a href="admin.php?ac=views&do=edit&fileurl=property&id=<?php echo $row['id']?>">详情</a> | 
<?php get_urlkey("编辑","admin.php?ac=edit&do=edit&fileurl=property&id=".$row['id']."","".$row['uid']!=$_USER->id)?> | 
<a href="#" onClick="window.open ('admin.php?ac=depreciation_view&do=edit&fileurl=property&id=<?php echo $row['id']?>', 'newwindow', 'height=500, width=600, top=0, left=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=no, status=no')">折旧记录</a>
</td>						
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
						  <a href="javascript:document:update.submit();">删除数据</a>
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
 

