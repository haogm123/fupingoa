<?php
include_once('head.php');
?>

<style>
<!--table
	{mso-displayed-decimal-separator:"\.";
	mso-displayed-thousand-separator:"\,";}
@page
	{margin:1.0in .75in 1.0in .75in;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;}
tr
	{mso-height-source:auto;
	mso-ruby-visibility:none;}
col
	{mso-width-source:auto;
	mso-ruby-visibility:none;}
br
	{mso-data-placement:same-cell;}
.style0
	{mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	white-space:nowrap;
	mso-rotate:0;
	mso-background-source:auto;
	mso-pattern:auto;
	color:windowtext;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:宋体;
	mso-generic-font-family:auto;
	mso-font-charset:134;
	border:none;
	mso-protection:locked visible;
	mso-style-name:常规;
	mso-style-id:0;}
td
	{mso-style-parent:style0;
	padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:宋体;
	mso-generic-font-family:auto;
	mso-font-charset:134;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border:none;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:locked visible;
	white-space:nowrap;
	mso-rotate:0;}
.xl24
	{mso-style-parent:style0;
	font-size:14.0pt;}
.xl25
	{mso-style-parent:style0;
	font-size:14.0pt;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;}
.xl26
	{mso-style-parent:style0;
	font-size:14.0pt;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	white-space:normal;}
.xl27
	{mso-style-parent:style0;
	font-size:14.0pt;
	vertical-align:middle;
	border:.5pt solid windowtext;}
.xl28
	{mso-style-parent:style0;
	font-size:14.0pt;
	text-align:left;
	vertical-align:middle;
	border:.5pt solid windowtext;}
.xl29
	{mso-style-parent:style0;
	font-size:24.0pt;
	text-align:center;
	vertical-align:middle;}
.xl30
	{mso-style-parent:style0;
	font-size:14.0pt;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;}
.xl31
	{mso-style-parent:style0;
	font-size:14.0pt;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl32
	{mso-style-parent:style0;
	font-size:14.0pt;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
ruby
	{ruby-align:left;}
rt
	{color:windowtext;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:宋体;
	mso-generic-font-family:auto;
	mso-font-charset:134;
	mso-char-type:none;
	display:none;}
-->
</style>


<table x:str border=0 cellpadding=0 cellspacing=0 width=806 style='border-collapse:
 collapse;table-layout:fixed;width:605pt'>
 <col width=171 style='mso-width-source:userset;mso-width-alt:5472;width:128pt'>
 <col width=218 style='mso-width-source:userset;mso-width-alt:6976;width:164pt'>
 <col width=168 style='mso-width-source:userset;mso-width-alt:5376;width:126pt'>
 <col width=249 style='mso-width-source:userset;mso-width-alt:7968;width:187pt'>
 <tr height=80 style='mso-height-source:userset;height:60.0pt'>
  <td colspan=4 height=80 class=xl29 width=806 style='height:60.0pt;width:605pt'>项目材料清单</td>
 </tr>
 <tr class=xl24 height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl25 style='height:30.0pt'>项目名称</td>
  <td class=xl27 style='border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_16_name',200,30)?></td>
  <td class=xl26 width=168 style='border-left:none;width:126pt'>日期</td>
  <td class=xl27 style='border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_16_date',220,30)?>　</td>
 </tr>
 <tr class=xl24 height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl25 style='height:30.0pt;border-top:none'>合同编号</td>
  <td class=xl27 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_16_number',200,30)?></td>
  <td class=xl26 width=168 style='border-top:none;border-left:none;width:126pt'>项目地点</td>
  <td class=xl27 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_16_address',220,30)?></td>
 </tr>
 <tr class=xl24 height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl25 style='height:30.0pt;border-top:none'>项目类型</td>
  <td colspan=3 class=xl30 style='border-right:.5pt solid black;border-left:
  none'><?php echo W_I_DB($typeid,$tplid,'_12_16_type',617,30)?></td>
 </tr>
 <tr class=xl24 height=123 style='mso-height-source:userset;height:92.25pt'>
  <td height=123 class=xl25 style='height:92.25pt;border-top:none'>所需材料清单</td>
  <td colspan=3 class=xl30 style='border-right:.5pt solid black;border-left:
  none'><?php echo W_I_DB($typeid,$tplid,'_12_16_content',623,30)?></td>
 </tr>
 <tr class=xl24 height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl25 style='height:30.0pt;border-top:none'>填报人</td>
  <td class=xl28 style='border-top:none;border-left:none'><?php echo get_realname($_USER->id)?></td>
  <td class=xl26 width=168 style='border-top:none;border-left:none;width:126pt'>部门负责人审批</td>
  <td class=xl27 style='border-top:none;border-left:none'></td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=171 style='width:128pt'></td>
  <td width=218 style='width:164pt'></td>
  <td width=168 style='width:126pt'></td>
  <td width=249 style='width:187pt'></td>
 </tr>
 <![endif]>
</table> 

<?php
include_once('footer.php');
?>