<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<link href="template/public/css/clientPublic.css" rel="stylesheet" type="text/css"/>
<link href="template/public/css/codeMgr.css" rel="stylesheet" type="text/css"/>
<link href="template/public/css/tabSwitch.css" rel="stylesheet" type="text/css"/>
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
function show_help()
{
   mytop=(screen.availHeight-430)/2;
   myleft=(screen.availWidth-800)/2;
   window.open("admin.php?ac=view&fileurl=help&helpid=<?php echo $fileurl?>","","height=470,width=800,status=0,toolbar=no,menubar=no,location=no,scrollbars=yes,top="+mytop+",left="+myleft+",resizable=yes");
}
</script>
<title>Office 515158 2011 OA办公系统</title>
 
</head>
<body>

<div id="CodeShowBlock">
<table cellpadding="0" cellspacing="0" class="data-box"><thead>
<tr class="border-in">
<th class="title"><div>发生时间</div></th>
<th class="status"><div>起始时间</div></th>
<th class="scale"><div>结束时间</div></th>
<th class="scale"><div>折旧金额</div></th>

</tr>
</thead><tbody>

<?foreach ($result as $row) {?>
<td class="title"><?php echo $row['date']?></td>
<td class="scale"><?php echo $row['startdate']?></td>
<td class="scale"><?php echo $row['enddate']?></td>
<td class="scale"><?php echo $row['price']?></td>
					
						
						</tr>
<?}?>


</tbody></table>
 
</div>

 
 
</body>
</html>
