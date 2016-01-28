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
			<h2 class="ui-tit-page">招聘计划信息列表</h2>
			
			<div class="record-tit-amount">
				<p>总共有<span class="number"><?php echo public_number('job')?></span>条数据
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
							<input type="text" value="<?php echo urldecode($number)?>" name="number" class="ui-input search-keyword" id="J-keyword" style="width:80px;">
						</div>
						
						<label class="ui-form-label" for="J-start">名称：</label>
						<div class="ui-form-content">
							<input type="text" value="<?php echo urldecode($jobpost)?>" name="jobpost" class="ui-input search-keyword" style="width:120px;">
						</div>
						
						<label class="ui-form-label" for="J-start">计划周期：</label>
						<div class="ui-form-content">
						<input type="text" value="<?php echo $vstartdate?>"  class="ui-input i-date" readonly="readonly"  onClick="WdatePicker();" name='vstartdate' style="width:60px;"> - <input type="text" value="<?php echo $venddate?>"  class="ui-input i-date" readonly="readonly"  onClick="WdatePicker();" name='venddate' style="width:60px;">
						</div>
						<label class="ui-form-label" for="J-start">招聘渠道：</label>
						<div class="ui-form-content">
							<select name="channel" class="BigStatic">
			<option value="0" selected="selected">请选择渠道</option>
			<?php echo get_typelist($channel,16)?>
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
		                                <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                                          <tr>
                                            <td width="91%">
											<?php echo showpage($num,$pagesize,$page,$url)?></td>
                                            <td width="9%" align="right" style="padding-right:10px;"><input type="button" value="新增计划" class="BigButtonBHover" onClick="javascript:window.location='admin.php?ac=add&fileurl=jobs'"></td>
                                          </tr>
                                        </table>
		  
										

	  </div>
	</div>
	<form name="excel" method="post" action="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>">
	<input type="hidden" name="vuidtype" value="<?php echo $vuidtype?>" />
	<input type="hidden" name="ischeck" value="<?php echo $ischeck?>" />
	<input type="hidden" name="jobpost" value="<?php echo $jobpost?>" />
	<input type="hidden" name="number" value="<?php echo $number?>" />
	<input type="hidden" name="channel" value="<?php echo $channel?>" />
	<input type="hidden" name="vstartdate" value="<?php echo $vstartdate?>" />
	<input type="hidden" name="venddate" value="<?php echo $venddate?>" />
	<input type="hidden" name="blogtype" value="<?php echo $blogtype?>" />
		<input type="hidden" name="do" value="excel" />
		</form>
	<form name="update" method="post" action="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>">
		<input type="hidden" name="do" value="update" />
		<div class="ui-grid-21 ui-grid-right fn-clear" id="J-table-consume" coor="consumelist">
			<div class="ui-tab">
												<div class="ui-tab-trigger"> 
					<ul class="fn-clear"> 
<li class="ui-tab-trigger-item <?php if($_GET["blogtype"]==''){?> ui-tab-trigger-item-current<?php }?>">
<a href="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>" class="ui-tab-trigger-text">所有计划列表</a></li>
<li class="ui-tab-trigger-item <?php if($_GET["blogtype"]=='1'){?> ui-tab-trigger-item-current<?php }?>">
<a href="admin.php?ac=index&fileurl=jobs&blogtype=1" class="ui-tab-trigger-text">待审计划信息</a></li>	
</ul>
				</div>
 
				<div class="ui-tab-container" id="myScene">
					<div class="ui-tab-container-item ui-tab-container-item-current">
					
					<div class="amount-scheme-a fn-clear">
<div class="fn-left"><?php echo get_usershow('-1','admin.php?ac='.$ac.'&fileurl='.$fileurl.'&ischeck='.$ischeck.'&vstartdate='.$vstartdate.'&venddate='.$venddate.'&jobpost='.$jobpost.'&number='.$number.'&channel='.$channel.'&blogtype='.$blogtype.'')?></div>
<div class="fn-right">
<?php echo get_exceldown('excel_27')?></div>
</div>
					
					
						<table id="tradeRecordsIndex" class="ui-table">

							<thead>
								<tr>
									<th class="checkbox">
									<input type="checkbox" class="checkbox" value="1" name="chkall" onClick="check_all(this)" /></th>
									<th class="info">计划编号</th>
									<th class="title">计划名称</th>
									<th width="100">招聘渠道</th>
									<th width="80">招聘人数</th>
									<th width="80">开始日期</th>
									<th width="80">结束日期</th>
									<th width="60">状态</th>
									<th width="60">发布人</th>
									<th width="120">发布日期</th>
									<th width="120">操作</th>
								</tr>
							</thead>
							
							
							
							
							<tbody>
<?foreach ($result as $row) {?>
																																								
<tr <?php if($result%2==0){?>class="split" <?php }?>>
<td class="checkbox">
<?php echo get_boxlistkey("id[]",$row['id'],$row['uid'],$_USER->id)?></td>
<td class="info"><?php echo $row['number']?></td>
<td class="title">
<a href="admin.php?ac=views&fileurl=jobs&do=edit&id=<?php echo $row['id']?>"><?php echo $row['jobpost']?></a>
</td>
<td width="100"><?php echo get_typename($row["channel"])?></td>
<td width="80"><?php echo $row['jobnum']?> 人</td>
<td width="80"><?php echo $row['startdate']?></td>
<td width="80"><?php echo $row['enddate']?></td>
<td width="60"><?php if($row['type']=='1'){echo "<font color=#006600>待审</font>";}elseif($row['type']=='2'){echo "<font color=red>己批</font>";}else{echo "拒绝";}?></td>
<td width="60"><?php echo get_realname($row['uid'])?></td>
<td width="120"><?php echo $row['date']?></td>
<td width="120" align="center">
<?php if($row['type']=='1'){ ?>
<?php get_urlkey("编辑","admin.php?ac=edit&fileurl=jobs&do=edit&id=".$row['id']."","".$row['uid']!=$_USER->id)?> | 
<a class="detail" href="admin.php?ac=views&fileurl=jobs&do=edit&id=<?php echo $row['id']?>">查看</a> | 
<a class="detail" href="admin.php?ac=views&fileurl=jobs&do=edit&id=<?php echo $row['id']?>&keys=1">审批</a>
<?php }else{?>
<a class="detail" href="admin.php?ac=views&fileurl=jobs&do=edit&id=<?php echo $row['id']?>">查看</a>
<?php }?></td>
									
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
 

