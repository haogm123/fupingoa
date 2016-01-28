<?php
include_once('head_view.php');


function xls_views($id,$uid){
$htmls.='<html xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:x="urn:schemas-microsoft-com:office:excel"
xmlns="http://www.w3.org/TR/REC-html40">
<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<meta name=ProgId content=Excel.Sheet>
<meta name=Generator content="Microsoft Excel 11">
<!--[if gte mso 9]><xml>
 <o:DocumentProperties>
  <o:Created>1996-12-17T01:32:42Z</o:Created>
  <o:LastSaved>2013-04-17T09:20:37Z</o:LastSaved>
  <o:Version>11.9999</o:Version>
 </o:DocumentProperties>
 <o:OfficeDocumentSettings>
  <o:RemovePersonalInformation/>
 </o:OfficeDocumentSettings>
</xml><![endif]-->
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
	text-align:left;
	vertical-align:middle;
	border:.5pt solid windowtext;
	white-space:normal;}
.xl25
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	white-space:normal;}
.xl26
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;}
.xl27
	{mso-style-parent:style0;
	font-size:24.0pt;
	text-align:center;
	vertical-align:middle;}
.xl28
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	white-space:normal;}
.xl29
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl30
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl31
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl32
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	white-space:normal;}
.xl33
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl34
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl35
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;}
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
<!--[if gte mso 9]><xml>
 <x:ExcelWorkbook>
  <x:ExcelWorksheets>
   <x:ExcelWorksheet>
    <x:Name>Sheet1</x:Name>
    <x:WorksheetOptions>
     <x:DefaultRowHeight>285</x:DefaultRowHeight>
     <x:Print>
      <x:ValidPrinterInfo/>
      <x:PaperSizeIndex>9</x:PaperSizeIndex>
      <x:HorizontalResolution>180</x:HorizontalResolution>
      <x:VerticalResolution>180</x:VerticalResolution>
     </x:Print>
     <x:CodeName>Sheet1</x:CodeName>
     <x:Selected/>
     <x:TopRowVisible>18</x:TopRowVisible>
     <x:Panes>
      <x:Pane>
       <x:Number>3</x:Number>
       <x:ActiveRow>8</x:ActiveRow>
       <x:ActiveCol>5</x:ActiveCol>
      </x:Pane>
     </x:Panes>
     <x:ProtectContents>False</x:ProtectContents>
     <x:ProtectObjects>False</x:ProtectObjects>
     <x:ProtectScenarios>False</x:ProtectScenarios>
    </x:WorksheetOptions>
   </x:ExcelWorksheet>
   <x:ExcelWorksheet>
    <x:Name>Sheet2</x:Name>
    <x:WorksheetOptions>
     <x:DefaultRowHeight>285</x:DefaultRowHeight>
     <x:CodeName>Sheet2</x:CodeName>
     <x:ProtectContents>False</x:ProtectContents>
     <x:ProtectObjects>False</x:ProtectObjects>
     <x:ProtectScenarios>False</x:ProtectScenarios>
    </x:WorksheetOptions>
   </x:ExcelWorksheet>
   <x:ExcelWorksheet>
    <x:Name>Sheet3</x:Name>
    <x:WorksheetOptions>
     <x:DefaultRowHeight>285</x:DefaultRowHeight>
     <x:CodeName>Sheet3</x:CodeName>
     <x:ProtectContents>False</x:ProtectContents>
     <x:ProtectObjects>False</x:ProtectObjects>
     <x:ProtectScenarios>False</x:ProtectScenarios>
    </x:WorksheetOptions>
   </x:ExcelWorksheet>
  </x:ExcelWorksheets>
  <x:WindowHeight>4530</x:WindowHeight>
  <x:WindowWidth>8505</x:WindowWidth>
  <x:WindowTopX>480</x:WindowTopX>
  <x:WindowTopY>120</x:WindowTopY>
  <x:AcceptLabelsInFormulas/>
  <x:ProtectStructure>False</x:ProtectStructure>
  <x:ProtectWindows>False</x:ProtectWindows>
 </x:ExcelWorkbook>
</xml><![endif]-->
</head>

<body link=blue vlink=purple>';

$htmls.="<table x:str border=0 cellpadding=0 cellspacing=0 width=919 style='border-collapse:
 collapse;table-layout:fixed;width:690pt'>
 <col width=124 style='mso-width-source:userset;mso-width-alt:3968;width:93pt'>
 <col width=158 style='mso-width-source:userset;mso-width-alt:5056;width:119pt'>
 <col width=113 style='mso-width-source:userset;mso-width-alt:3616;width:85pt'>
 <col width=232 style='mso-width-source:userset;mso-width-alt:7424;width:174pt'>
 <col width=124 style='mso-width-source:userset;mso-width-alt:3968;width:93pt'>
 <col width=168 style='mso-width-source:userset;mso-width-alt:5376;width:126pt'>
 <tr height=80 style='mso-height-source:userset;height:60.0pt'>
  <td colspan=6 height=80 class=xl27 width=919 style='height:60.0pt;width:690pt'>员工离职交接单</td>
 </tr>
 <tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td colspan=3 height=33 class=xl28 width=395 style='height:24.95pt;
  width:297pt'>编号:".work_db($id,'_19_66_1')."</td>
  <td colspan=3 class=xl28 width=524 style='width:393pt'>填表日期:".work_db($id,'_19_66_2')."</td>
 </tr>
 <tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl25 width=124 style='height:24.95pt;width:93pt'>姓<span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp; </span>名</td>
  <td class=xl24 width=158 style='border-left:none;width:119pt'>".work_db($id,'_19_66_3')."</td>
  <td class=xl25 width=113 style='border-left:none;width:85pt'>职<span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp; </span>务</td>
  <td class=xl24 width=232 style='border-left:none;width:174pt'>".work_db($id,'_19_66_4')."</td>
  <td class=xl25 width=124 style='border-left:none;width:93pt'>部<span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp; </span>门</td>
  <td class=xl24 width=168 style='border-left:none;width:126pt'>".work_db($id,'_19_66_5')."</td>
 </tr>
 <tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl25 width=124 style='height:24.95pt;border-top:none;
  width:93pt'>最后工作日</td>
  <td class=xl24 width=158 style='border-top:none;border-left:none;width:119pt'>".work_db($id,'_19_66_6')."</td>
  <td class=xl25 width=113 style='border-top:none;border-left:none;width:85pt'>现
  住 址</td>
  <td class=xl24 width=232 style='border-top:none;border-left:none;width:174pt'>".work_db($id,'_19_66_7')."</td>
  <td class=xl25 width=124 style='border-top:none;border-left:none;width:93pt'>联系电话</td>
  <td class=xl24 width=168 style='border-top:none;border-left:none;width:126pt'>".work_db($id,'_19_66_8')."</td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td colspan=6 height=40 class=xl28 width=919 style='height:30.0pt;width:690pt'>部门工作交接</td>
 </tr>
 <tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl25 width=124 style='height:24.95pt;width:93pt'>交接明细单</td>
  <td colspan=2 class=xl24 width=271 style='border-left:none;width:204pt'>".work_db($id,'_19_66_9')."</td>
  <td class=xl25 width=232 style='border-left:none;width:174pt'><span
  style='mso-spacerun:yes'>&nbsp;</span>合同</td>
  <td colspan=2 class=xl24 width=292 style='border-left:none;width:219pt'>".work_db($id,'_19_66_10')."</td>
 </tr>
 <tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl25 width=124 style='height:24.95pt;border-top:none;
  width:93pt'>其他</td>
  <td colspan=5 class=xl24 width=795 style='border-left:none;width:597pt'>".work_db($id,'_19_66_11')."</td>
 </tr>
 <tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl25 width=124 style='height:24.95pt;border-top:none;
  width:93pt'>附件</td>
  <td colspan=5 class=xl24 width=795 style='border-left:none;width:597pt'>".work_db($id,'_19_66_12')."</td>
 </tr>
 <tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl25 width=124 style='height:24.95pt;border-top:none;
  width:93pt'>工作交接人</td>
  <td class=xl24 width=158 style='border-top:none;border-left:none;width:119pt'>".work_db($id,'_19_66_13')."</td>
  <td class=xl25 width=113 style='border-top:none;border-left:none;width:85pt'>工作接收人</td>
  <td class=xl24 width=232 style='border-top:none;border-left:none;width:174pt'>".work_db($id,'_19_66_14')."</td>
  <td class=xl25 width=124 style='border-top:none;border-left:none;width:93pt'>部门责任人审批</td>
  <td class=xl24 width=168 style='border-top:none;border-left:none;width:126pt'>".w_p_v(212,$id,'name')."</td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td colspan=6 height=40 class=xl32 width=919 style='height:30.0pt;width:690pt'>行政工作交接</td>
 </tr>
 <tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl25 width=124 style='height:24.95pt;width:93pt'>办公文具</td>
  <td class=xl24 width=158 style='border-left:none;width:119pt'>".work_db($id,'_19_66_213_1')."</td>
  <td class=xl25 width=113 style='border-left:none;width:85pt'>工作日志</td>
  <td class=xl24 width=232 style='border-left:none;width:174pt'>".work_db($id,'_19_66_213_2')."</td>
  <td class=xl25 width=124 style='border-left:none;width:93pt'>电话/长途卡</td>
  <td class=xl24 width=168 style='border-left:none;width:126pt'>".work_db($id,'_19_66_213_3')."</td>
 </tr>
 <tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl25 width=124 style='height:24.95pt;border-top:none;
  width:93pt'>抽屉钥匙</td>
  <td class=xl24 width=158 style='border-top:none;border-left:none;width:119pt'>".work_db($id,'_19_66_213_4')."</td>
  <td class=xl25 width=113 style='border-top:none;border-left:none;width:85pt'>公司门钥匙</td>
  <td class=xl24 width=232 style='border-top:none;border-left:none;width:174pt'>".work_db($id,'_19_66_213_5')."</td>
  <td class=xl25 width=124 style='border-top:none;border-left:none;width:93pt'>车<span
  style='mso-spacerun:yes'>&nbsp; </span>钥<span style='mso-spacerun:yes'>&nbsp;
  </span>匙</td>
  <td class=xl24 width=168 style='border-top:none;border-left:none;width:126pt'>".work_db($id,'_19_66_213_6')."</td>
 </tr>
 <tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl25 width=124 style='height:24.95pt;border-top:none;
  width:93pt'>油<span style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp; </span>卡</td>
  <td class=xl24 width=158 style='border-top:none;border-left:none;width:119pt'>".work_db($id,'_19_66_213_7')."</td>
  <td class=xl25 width=113 style='border-top:none;border-left:none;width:85pt'>电<span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp; </span>脑</td>
  <td class=xl24 width=232 style='border-top:none;border-left:none;width:174pt'>".work_db($id,'_19_66_213_8')."</td>
  <td class=xl25 width=124 style='border-top:none;border-left:none;width:93pt'>桌<span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>椅</td>
  <td class=xl24 width=168 style='border-top:none;border-left:none;width:126pt'>".work_db($id,'_19_66_213_9')."</td>
 </tr>
 <tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl25 width=124 style='height:24.95pt;border-top:none;
  width:93pt'>其<span style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp; </span>他</td>
  <td colspan=5 class=xl29 width=795 style='border-right:.5pt solid black;
  border-left:none;width:597pt'>".work_db($id,'_19_66_213_10')."</td>
 </tr>
 <tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td colspan=4 height=33 class=xl33 width=627 style='border-right:.5pt solid black;
  height:24.95pt;width:471pt'>　</td>
  <td colspan=2 class=xl29 width=292 style='border-right:.5pt solid black;
  border-left:none;width:219pt'>行政专员:".w_p_v(213,$id,'name')."</td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td colspan=6 height=40 class=xl32 width=919 style='height:30.0pt;width:690pt'>人事工作交接</td>
 </tr>
 <tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl25 width=124 style='height:24.95pt;width:93pt'>考<span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp; </span>勤</td>
  <td colspan=5 class=xl29 width=795 style='border-right:.5pt solid black;
  border-left:none;width:597pt'>应出勤<span
  style='mso-spacerun:yes'>".work_db($id,'_19_66_214_1')."</span>天；实际出勤<span
  style='mso-spacerun:yes'>".work_db($id,'_19_66_214_2')."</span>天 ；其中病/事假<span
  style='mso-spacerun:yes'>".work_db($id,'_19_66_214_3')."</span>天；矿工<span
  style='mso-spacerun:yes'>".work_db($id,'_19_66_214_4')."</span>天；迟到<span
  style='mso-spacerun:yes'>".work_db($id,'_19_66_214_5')."</span>次；缺勤<span
  style='mso-spacerun:yes'>".work_db($id,'_19_66_214_6')."</span>时</td>
 </tr>
 <tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl25 width=124 style='height:24.95pt;border-top:none;
  width:93pt'>入职手续</td>
  <td colspan=5 class=xl29 width=795 style='border-right:.5pt solid black;
  border-left:none;width:597pt'>入职日期:<span
  style='mso-spacerun:yes'>".work_db($id,'_19_66_214_7')."
  </span>；转正日期:".work_db($id,'_19_66_214_8')."</td>
 </tr>
 <tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl25 width=124 style='height:24.95pt;border-top:none;
  width:93pt'>社<span style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp; </span>保</td>
  <td colspan=5 class=xl29 width=795 style='border-right:.5pt solid black;
  border-left:none;width:597pt'>公司缴纳保险日期:<span
  style='mso-spacerun:yes'>".work_db($id,'_19_66_214_9')."
  </span>；公司停缴保险日期:".work_db($id,'_19_66_214_10')."</td>
 </tr>
 <tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl25 width=124 style='height:24.95pt;border-top:none;
  width:93pt'>合<span style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp; </span>同</td>
  <td colspan=5 class=xl29 width=795 style='border-right:.5pt solid black;
  border-left:none;width:597pt'>合同签订日期:<span
  style='mso-spacerun:yes'>".work_db($id,'_19_66_214_11')."
  </span>；合同解约期:".work_db($id,'_19_66_214_12')."</td>
 </tr>
 <tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl25 width=124 style='height:24.95pt;border-top:none;
  width:93pt'>其<span style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp; </span>他</td>
  <td colspan=5 class=xl29 width=795 style='border-right:.5pt solid black;
  border-left:none;width:597pt'>".work_db($id,'_19_66_214_13')."</td>
 </tr>
 <tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td colspan=4 height=33 class=xl33 width=627 style='border-right:.5pt solid black;
  height:24.95pt;width:471pt'>　</td>
  <td colspan=2 class=xl29 width=292 style='border-right:.5pt solid black;
  border-left:none;width:219pt'>人事专员：".w_p_v(214,$id,'name')."</td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td colspan=6 height=40 class=xl28 width=919 style='height:30.0pt;width:690pt'>财务工作交接</td>
 </tr>
 <tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl25 width=124 style='height:24.95pt;width:93pt'>欠款</td>
  <td class=xl24 width=158 style='border-left:none;width:119pt'>".work_db($id,'_19_66_215_1')."</td>
  <td class=xl25 width=113 style='border-left:none;width:85pt'>欠款合计</td>
  <td class=xl24 width=232 style='border-left:none;width:174pt'>".work_db($id,'_19_66_215_2')."</td>
  <td class=xl25 width=124 style='border-left:none;width:93pt'><span
  style='mso-spacerun:yes'>&nbsp;</span>还款方式</td>
  <td class=xl24 width=168 style='border-left:none;width:126pt'>".work_db($id,'_19_66_215_3')."</td>
 </tr>
 <tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl25 width=124 style='height:24.95pt;border-top:none;
  width:93pt'>其他</td>
  <td colspan=5 class=xl29 width=795 style='border-right:.5pt solid black;
  border-left:none;width:597pt'>".work_db($id,'_19_66_215_4')."</td>
 </tr>
 <tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td colspan=4 height=33 class=xl33 width=627 style='border-right:.5pt solid black;
  height:24.95pt;width:471pt'>　</td>
  <td colspan=2 class=xl29 width=292 style='border-right:.5pt solid black;
  border-left:none;width:219pt'>财务经理：".w_p_v(215,$id,'name')."</td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td colspan=6 height=40 class=xl28 width=919 style='height:30.0pt;width:690pt'>行政部审批</td>
 </tr>
 <tr height=80 style='mso-height-source:userset;height:60.0pt'>
  <td colspan=6 height=80 class=xl29 width=919 style='border-right:.5pt solid black;
  height:60.0pt;width:690pt'>".w_p_v(216,$id,'lnstructions')."</td>
 </tr>
 <tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td colspan=4 height=33 class=xl33 width=627 style='border-right:.5pt solid black;
  height:24.95pt;width:471pt'>　</td>
  <td colspan=2 class=xl29 width=292 style='border-right:.5pt solid black;
  border-left:none;width:219pt'>行政部经理：".w_p_v(216,$id,'name')."</td>
 </tr>
 <tr class=xl26 height=40 style='mso-height-source:userset;height:30.0pt'>
  <td colspan=6 height=40 class=xl28 width=919 style='height:30.0pt;width:690pt'>总经理审批</td>
 </tr>
 <tr height=80 style='mso-height-source:userset;height:60.0pt'>
  <td colspan=6 height=80 class=xl24 width=919 style='height:60.0pt;width:690pt'>".w_p_v(217,$id,'lnstructions')."</td>
 </tr>
 <tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td colspan=4 height=33 class=xl25 width=627 style='height:24.95pt;
  width:471pt'>　</td>
  <td colspan=2 class=xl24 width=292 style='border-left:none;width:219pt'>总经理：".w_p_v(217,$id,'name')."</td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=124 style='width:93pt'></td>
  <td width=158 style='width:119pt'></td>
  <td width=113 style='width:85pt'></td>
  <td width=232 style='width:174pt'></td>
  <td width=124 style='width:93pt'></td>
  <td width=168 style='width:126pt'></td>
 </tr>
 <![endif]>
</table>

</body>

</html>


";
return $htmls;
}?>



<!--内容部份 -->
<?php
$docs=trim(xls_views($row['id'],$row['uid']));
$Path = "data/excel/workclass/".$row['id'].".xls";
$fp = fopen($Path,"w"); 
fwrite($fp,$docs); 
fclose($fp);
echo $docs;
?>
<!--/内容部份 -->

<?php
include_once('footer_view.php');
?>