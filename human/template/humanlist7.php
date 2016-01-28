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
			<h2 class="ui-tit-page"><?php echo $human_type_name?>信息列表</h2>
			
			<div class="record-tit-amount">
				<p><!--总共有<span class="number"></span>条数据 -->
              </p>
			</div>
		</div>

 <!-- 过滤表单 -->
<form method="get" action="admin.php" name="save" class="ui-grid-21 ui-grid-right ui-form">
		<input type="hidden" name="ac" value="<?php echo $ac?>" />
		<input type="hidden" name="type" value="<?php echo $type?>" />
		<input type="hidden" name="do" value="list" />
		<input type="hidden" name="fileurl" value="<?php echo $fileurl?>" />
		<input type="hidden" name="vuidtype" value="<?php echo $vuidtype?>" />
		<div class="ui-grid-21 ui-grid-right record-search">

			<div id="J-advanced-filter-option" class="">
				<div class="record-search-time fn-clear">
					<div class="ui-form-item ui-form-item-time">
					
					<label class="ui-form-label" for="keyword">流水号：</label>
							<div id="J-keyword-type-select" class="ui-form-select-shell">
								<input type="text" value="<?php echo urldecode($number)?>" name="number" class="ui-input search-keyword" id="J-keyword">
							</div>
					
						<label class="ui-form-label" for="J-start">起止日期：</label>
						<div class="ui-form-content">
							<input type="text" value="<?php echo $vstartdate?>"  class="ui-input i-date" readonly="readonly"  onClick="WdatePicker();" name='vstartdate' > - <input type="text" value="<?php echo $venddate?>"  class="ui-input i-date" readonly="readonly"  onClick="WdatePicker();" name='venddate' >
						</div>
						<div class="submit-time-container ">
							<div class="submit-time ui-button ui-button-sorange">
								<input type="submit" class="ui-button-text"id="J-submit-time" value="查 找"/>
							</div>
						</div>
						<div id="J-set-date" class="quick-link-date  blue-links  ">
						
							<a href="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&ischeck=1&userkeytype=<?php echo $userkeytype?>&type=<?php echo $type?>" seed="CR-today" id="J-today" >今天</a>
							<a href="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&ischeck=2&userkeytype=<?php echo $userkeytype?>&type=<?php echo $type?>" seed="CR-sevenday" id="J-seven-day">3天以内</a>
							<a href="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&ischeck=3&userkeytype=<?php echo $userkeytype?>&type=<?php echo $type?>" seed="CR-month" id="J-a-month" >7天以内</a>
							<a href="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&ischeck=4&userkeytype=<?php echo $userkeytype?>&type=<?php echo $type?>" seed="CR-month" id="J-a-month" >1个月内</a>
							<a href="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&ischeck=5&userkeytype=<?php echo $userkeytype?>&type=<?php echo $type?>" seed="CR-month" id="J-a-month" >6个月内</a>
						</div>
					</div>
					<a href="javascript:;"  seed="CR-AdvancedFilter" id="J-filter-link" class="ui-btn-white-mini-more">更多选项</a>
									</div>
				
				<div class="record-search-option fn-clear">
					<div class="record-search-option-keyword  fn-hide  fn-clear">
						<div class="ui-form-item fn-left"  id="J-keyword-type-outer" style="width:100%;">


						<?php
						$numss=0;
						foreach ($companylist as $row) {
						$numss++
						?>
						<input type="hidden" name="kinputname[]" value="<?php echo $row["inputname"]?>" />
							<label class="ui-form-label" for="keyword"><?php echo $row["formname"]?>：</label>
							<div id="J-keyword-type-select" class="ui-form-select-shell">
							<?php
							if($row["type"]=='3'){
								echo '<input type="text" value="'.$fromkeyword[$row["inputname"]].'"  class="ui-input i-date" readonly="readonly"  onClick="WdatePicker();" name="fromkeyword['.$row["inputname"].']" >';
							}elseif($row["inputtype"]=='3' || $row["inputtype"]=='4' || $row["inputtype"]=='5'){
								
								$inputvaluenum=explode('|',$row["inputvaluenum"]); 
								echo '<select name="fromkeyword['.$row["inputname"].']" id="'.$row["inputname"].'">';
								echo '<option value="" selected="selected">选择内容</option>';
								for($i=0;$i<sizeof($inputvaluenum);$i++){
									echo '<option value="'.$inputvaluenum[$i].'" ';
									if(trim($fromkeyword[$row["inputname"]])==trim($inputvaluenum[$i])){
										echo 'selected="selected"';
									}
									echo '>'.$inputvaluenum[$i].'</option>';
									
								}
								echo '</select> ';
							}else{
								echo '<input type="text" value="'.$fromkeyword[$row["inputname"]].'" name="fromkeyword['.$row["inputname"].']" class="ui-input search-keyword" id="J-keyword">';
							}
							
							?>
							
								
							</div>
						<?php
						if($numss%4==0){
							echo '</div><div class="ui-form-item fn-left" id="J-keyword-type-outer" style="width:100%;">';
						}
						}
						?>
			
	
						</div>

					</div>
					
				</div>
				<div id="J-submit-form" class="record-search-submit  fn-hide ">
					<div class="ui-button ui-button-sorange">
				<input type="submit" class="ui-button-text"id="J-submit-time" value="查 找"/>
				</div>
					<input type="hidden" value="1" id="J-filter" />
					<input type="hidden" name="record-type" id="J-record-type" value="0" />

				</div>
			
			</div>
		</div><!-- .record-search -->
		</form>

		<div class="ui-grid-21 ui-grid-right fn-clear" coor="total">
		   <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                                          <tr>
                                            <td width="91%">
											<?php echo showpage($num,$pagesize,$page,$url)?></td>
                                            <td width="9%" align="right" style="padding-right:10px;"><input type="button" value="新增信息" class="BigButtonBHover" onClick="javascript:window.location='admin.php?ac=<?php echo $fileurl?>add&fileurl=<?php echo $fileurl?>&type=<?php echo $type?>'"></td>
                                          </tr>
                                        </table>
		  
										

	  </div>
	</div>
	<form name="excel" method="post" action="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>">
		<input type="hidden" name="do" value="excel" />
		<input type="hidden" name="type" value="<?php echo $type?>" />
		<input type="hidden" name="ischeck" value="<?php echo $ischeck?>" />
		<input type="hidden" name="vstartdate" value="<?php echo $vstartdate?>" />
		<input type="hidden" name="venddate" value="<?php echo $venddate?>" />
		<input type="hidden" name="number" value="<?php echo $number?>" />
		<input type="hidden" name="vuidtype" value="<?php echo $vuidtype?>" />
		<?foreach ($companylist as $row) {?>
		<input type="hidden" name="kinputname[]" value="<?php echo $row["inputname"]?>" />
		<input type="hidden" name="fromkeyword[<?php echo $row["inputname"]?>]" value="<?php echo $fromkeyword[$row["inputname"]]?>" />
		<?}?>
		</form>
	<form name="update" method="post" action="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>">
		<input type="hidden" name="do" value="update" />
		<input type="hidden" name="type" value="<?php echo $type?>" />
		<div class="ui-grid-21 ui-grid-right fn-clear" id="J-table-consume" coor="consumelist">
			<div class="ui-tab">
												<div class="ui-tab-trigger"> 
					<ul class="fn-clear"> 
<li class="ui-tab-trigger-item  ui-tab-trigger-item-current">
<a href="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&type=<?php echo $type?>" class="ui-tab-trigger-text">所有<?php echo $human_type_name?>信息</a></li>						
</ul>
				</div>
 
				<div class="ui-tab-container" id="myScene">
					<div class="ui-tab-container-item ui-tab-container-item-current">
<div class="amount-scheme-a fn-clear">
<div class="fn-left"><?php echo get_usershow('-1','admin.php?ac='.$ac.'&fileurl='.$fileurl.'&ischeck='.$ischeck.'&vstartdate='.$vstartdate.'&venddate='.$venddate.'&number='.$number.'&type='.$type.'')?></div>
<div class="fn-right">
<?php echo get_exceldown('excel_50')?></div>
</div>
					
						<table id="tradeRecordsIndex" class="ui-table">

							<thead>
								<tr>
									<th class="checkbox">
									<input type="checkbox" class="checkbox" value="1" name="chkall" onClick="check_all(this)" /></th>
									<th class="info">流水号</th>
									<th class="title">调动人员</th>
									<th class="info">调动类型</th>
									<th class="info">调动日期</th>
									<th class="info">调动生效日期</th>
									<th class="info">调动前职务</th>
									<th class="info">发布时间</th>
									<th width="120">操作</th>
								</tr>
							</thead>
							
							
							
							
							<tbody>
<?foreach ($result as $row) {?>
																																								
<tr <?php if($result%2==0){?>class="split" <?php }?>>
<td class="checkbox">
<?php
get_boxlistkey("id[]",$row['id'],$row['uid'],$_USER->id);
?></td>
<td class="info"><?php echo $row['number']?></td>
<td class="title">
<a href="admin.php?ac=humanlist&do=view&fileurl=human&id=<?php echo $row['id']?>&type=<?php echo $type?>"><?php echo $row['username']?></a>
</td>
<td class="info"><?php echo get_human_db($row['id'],"toa_7_TRANSFER_TYPE")?></td>
<td class="info"><?php echo get_human_db($row['id'],"toa_7_TRANSFER_DATE")?></td>
<td class="info"><?php echo get_human_db($row['id'],"toa_7_TRANSFER_EFFECTIVE_DATE")?></td>
<td class="info"><?php echo get_human_db($row['id'],"toa_7_TRAN_POSITION_BEFORE")?></td>
<td class="info"><?php echo $row['date']?></td>
<td width="120">
<?php get_urlkey("编辑","admin.php?ac=".$fileurl."add&fileurl=".$fileurl."&do=edit&id=".$row['id']."&type=".$type."","".$row['uid']!=$_USER->id && $row['workuser']!=$_USER->id."")?> | 
<a href="admin.php?ac=humanlist&do=view&fileurl=human&id=<?php echo $row['id']?>&type=<?php echo $type?>">查看</a>
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
 

