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
			<h2 class="ui-tit-page">档案信息列表</h2>
			
			<div class="record-tit-amount">
				<p>总共有<span class="number"><?php echo public_number('file_read')?></span>条数据
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
		<input type="hidden" name="type" value="<?php echo $type?>" />
		<div class="ui-grid-21 ui-grid-right record-search">
		
			<div id="J-advanced-filter-option" class="">
				<div class="record-search-time fn-clear">
					<div class="ui-form-item ui-form-item-time">
					<label class="ui-form-label" for="J-start">编号：</label>
						<div class="ui-form-content">
							<input type="text" value="<?php echo urldecode($number)?>" name="number" style="width:80px;" class="ui-input search-keyword" id="J-keyword">
						</div>
						<label class="ui-form-label" for="J-start">名称：</label>
						<div class="ui-form-content">
							<input type="text" value="<?php echo urldecode($title)?>" name="title" style="width:80px;" class="ui-input search-keyword" id="J-keyword">
						</div>
						<label class="ui-form-label" for="J-start">申请周期：</label>
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
                                            <td width="9%" align="right" style="padding-right:10px;"><input type="button" value="新建档案" class="BigButtonBHover" onClick="javascript:window.location='admin.php?ac=add&fileurl=file'"></td>
                                          </tr>
                                        </table>
		  
										

	  </div>
	</div>
	<form name="excel" method="post" action="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>">
	<input type="hidden" name="vuidtype" value="<?php echo $vuidtype?>" />
	<input type="hidden" name="ischeck" value="<?php echo $ischeck?>" />
	<input type="hidden" name="title" value="<?php echo $title?>" />
	<input type="hidden" name="number" value="<?php echo $number?>" />
	<input type="hidden" name="vstartdate" value="<?php echo $vstartdate?>" />
	<input type="hidden" name="venddate" value="<?php echo $venddate?>" />
	<input type="hidden" name="type" value="<?php echo $type?>" />
		<input type="hidden" name="do" value="excel" />
		</form>
	<form name="update" method="post" action="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>">
		<input type="hidden" name="do" value="update" />
		<div class="ui-grid-21 ui-grid-right fn-clear" id="J-table-consume" coor="consumelist">
			<div class="ui-tab">
												<div class="ui-tab-trigger"> 
					<ul class="fn-clear"> 
<li class="ui-tab-trigger-item <?php if($_GET[type]=='1'){?>ui-tab-trigger-item-current<?php }?>">
<a href="admin.php?ac=file_read_key&fileurl=file&type=1" class="ui-tab-trigger-text">等待审批</a></li>
<li class="ui-tab-trigger-item <?php if($_GET[type]=='3' && $_GET[types]!='1'){?>  ui-tab-trigger-item-current<?php }?>">
<a href="admin.php?ac=file_read_key&fileurl=file&type=3" class="ui-tab-trigger-text">已审批</a></li>	
<li class="ui-tab-trigger-item<?php if($_GET[types]=='1'){?>  ui-tab-trigger-item-current<?php }?>">
<a href="admin.php?ac=file_read_key&fileurl=file&type=3&types=1" class="ui-tab-trigger-text">已借出</a></li>
<li class="ui-tab-trigger-item<?php if($_GET[type]==''){?>  ui-tab-trigger-item-current<?php }?>">
<a href="admin.php?ac=file_read_key&fileurl=file" class="ui-tab-trigger-text">档案一览</a></li>				
</ul>
				</div>
 
				<div class="ui-tab-container" id="myScene">
					<div class="ui-tab-container-item ui-tab-container-item-current">
					
					<div class="amount-scheme-a fn-clear">
<div class="fn-left"><?php echo get_usershow('-1','admin.php?ac='.$ac.'&fileurl='.$fileurl.'&ischeck='.$ischeck.'&number='.$number.'&title='.$title.'&vstartdate='.$vstartdate.'&venddate='.$venddate.'&type='.$type.'&enddate='.$enddate.'')?></div>
<div class="fn-right">
<?php echo get_exceldown('excel_36')?></div>
</div>
					
					
						<table id="tradeRecordsIndex" class="ui-table">

							<thead>
								<tr>
									<th class="checkbox">
									<input type="checkbox" class="checkbox" value="1" name="chkall" onClick="check_all(this)" /></th>
									<th width="100">档案编号</th>
									<th class="title">档案名称</th>
									<th width="100">申请人</th>
									<th width="120">申请日期</th>
									<th width="80" align="center">审批人</th>
									<th class="info">审批日期</th>
									<th width="80" align="center">当前状态</th>
									<th width="80" align="center">操作</th>
								</tr>
							</thead>
							
							
							
							
							<tbody>
<?foreach ($result as $row) {?>
																																								
<tr <?php if($result%2==0){?>class="split" <?php }?>>
<td class="checkbox">
<?php
get_boxlistkey("id[]",$row['id'],$row['uid'],$_USER->id)
?></td>
<td width="100"><?php echo $row['filenumber']?></td>
<td class="title">
<a href="admin.php?ac=views&do=edit&fileurl=file&id=<?php echo $row['fileid']?><?php if($row['type']=='3'){?>&adome=1<?php }?>"><?php echo $row['filename']?></a>
</td>
<td width="100"><?php echo get_realname($row['appperson'])?></td>
<td width="120"><?php echo $row['appdate']?></td>
<td width="80" align="center"><?php echo get_realname($row['examperson'])?></td>
<td class="info"><?php echo $row['examdate']?></td>
<td width="80" align="center"><?php
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
<td width="80" align="center">							
<?php
							global $db;
							$r = $db->fetch_one_array("SELECT b.* FROM ".DB_TABLEPRE."file a,".DB_TABLEPRE."file_type b where a.id='".$row['fileid']."' and a.filetype=b.id and b.keyuser like '%".get_realname($_USER->id)."%'   ORDER BY a.id desc limit 0,1");
							if ($r[keyuser]!=''){
							?>
							<?php if($row[type]=='1'){?>
							<a href="admin.php?ac=file_read_key&tid=<?php echo $row['id']?>&ltype=3&do=save&fileurl=file">审批</a> | <a href="admin.php?ac=file_read_key&do=save&fileurl=file&tid=<?php echo $row['id']?>&ltype=2">拒绝</a>
							<?php }elseif($row[type]=='3'){?>
							<a href="admin.php?ac=file_read_key&tid=<?php echo $row['id']?>&ltype=4&do=save&fileurl=file">归还档案</a>
							<?php }else{?>&nbsp;
							<?php echo "正常";}
							}else{
							echo "无权限";
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
 

