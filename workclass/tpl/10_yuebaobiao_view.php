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
  <o:LastSaved>2013-04-03T14:58:10Z</o:LastSaved>
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
	text-align:center;}
.xl25
	{mso-style-parent:style0;
	vertical-align:middle;}
.xl26
	{mso-style-parent:style0;
	font-size:14.0pt;
	text-align:center;
	vertical-align:middle;}
.xl27
	{mso-style-parent:style0;
	font-size:14.0pt;}
.xl28
	{mso-style-parent:style0;
	font-weight:700;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;}
.xl29
	{mso-style-parent:style0;
	font-weight:700;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-pattern:auto none;}
.xl30
	{mso-style-parent:style0;
	font-weight:700;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-pattern:auto none;}
.xl31
	{mso-style-parent:style0;
	font-weight:700;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-pattern:auto none;}
.xl32
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;}
.xl33
	{mso-style-parent:style0;
	vertical-align:middle;
	border:.5pt solid windowtext;}
.xl34
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	padding-left:27px;
	mso-char-indent-count:1;}
.xl35
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	white-space:normal;}
.xl36
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-pattern:auto none;}
.xl37
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-pattern:auto none;}
.xl38
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-pattern:auto none;}
.xl39
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-pattern:auto none;}
.xl40
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-pattern:auto none;}
.xl41
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-pattern:auto none;}
.xl42
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-pattern:auto none;}
.xl43
	{mso-style-parent:style0;
	font-size:24.0pt;
	text-align:center;
	vertical-align:middle;}
.xl44
	{mso-style-parent:style0;
	font-size:14.0pt;
	text-align:left;
	vertical-align:middle;}
.xl45
	{mso-style-parent:style0;
	font-size:14.0pt;
	text-align:left;
	vertical-align:middle;
	padding-left:27px;
	mso-char-indent-count:1;}
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
     <x:Panes>
      <x:Pane>
       <x:Number>3</x:Number>
       <x:ActiveRow>51</x:ActiveRow>
       <x:ActiveCol>2</x:ActiveCol>
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

$htmls.="<table x:str border=0 cellpadding=0 cellspacing=0 width=1099 style='border-collapse:
 collapse;table-layout:fixed;width:825pt'>
 <col class=xl24 width=95 style='mso-width-source:userset;mso-width-alt:3040;
 width:71pt'>
 <col width=173 style='mso-width-source:userset;mso-width-alt:5536;width:130pt'>
 <col width=112 style='mso-width-source:userset;mso-width-alt:3584;width:84pt'>
 <col width=91 style='mso-width-source:userset;mso-width-alt:2912;width:68pt'>
 <col width=93 style='mso-width-source:userset;mso-width-alt:2976;width:70pt'>
 <col width=101 style='mso-width-source:userset;mso-width-alt:3232;width:76pt'>
 <col width=96 style='mso-width-source:userset;mso-width-alt:3072;width:72pt'>
 <col width=97 style='mso-width-source:userset;mso-width-alt:3104;width:73pt'>
 <col width=90 style='mso-width-source:userset;mso-width-alt:2880;width:68pt'>
 <col width=151 style='mso-width-source:userset;mso-width-alt:4832;width:113pt'>
 <tr height=80 style='mso-height-source:userset;height:60.0pt'>
  <td colspan=10 height=80 class=xl43 width=1099 style='height:60.0pt;
  width:825pt'>采购部采购情况月报表</td>
 </tr>
 <tr class=xl27 height=40 style='mso-height-source:userset;height:30.0pt'>
  <td colspan=4 height=40 class=xl45 style='height:30.0pt'>日期：". work_db($id,'_12_10_1')."</td>
  <td colspan=3 class=xl26 style='mso-ignore:colspan'></td>
  <td colspan=3 class=xl44>制表人：". get_realname($uid)."</td>
 </tr>
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl28 style='height:24.95pt'>　</td>
  <td class=xl28 style='border-left:none'>　</td>
  <td class=xl28 style='border-left:none'>　</td>
  <td colspan=2 class=xl29 style='border-left:none'>金额</td>
  <td colspan=2 class=xl30 style='border-left:none'>发票</td>
  <td colspan=2 class=xl31 style='border-left:none'>白条</td>
  <td rowspan=2 class=xl28>备注</td>
 </tr>
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl28 style='height:24.95pt;border-top:none'>付款方式</td>
  <td class=xl28 style='border-top:none;border-left:none'>供货商</td>
  <td class=xl28 style='border-top:none;border-left:none'>总金额</td>
  <td class=xl29 style='border-top:none;border-left:none'>已付金额</td>
  <td class=xl29 style='border-top:none;border-left:none'>未付金额</td>
  <td class=xl30 style='border-top:none;border-left:none'>已回发票</td>
  <td class=xl30 style='border-top:none;border-left:none'>未回发票</td>
  <td class=xl31 style='border-top:none;border-left:none'>已回收据</td>
  <td class=xl31 style='border-top:none;border-left:none'>未回收据</td>
 </tr>";
$a1=unserialize(work_db($id,'_12_10_a1'));
$a2=unserialize(work_db($id,'_12_10_a2'));
$a3=unserialize(work_db($id,'_12_10_a3'));
$a4=unserialize(work_db($id,'_12_10_a4'));
$a5=unserialize(work_db($id,'_12_10_a5'));
$a6=unserialize(work_db($id,'_12_10_a6'));
$a7=unserialize(work_db($id,'_12_10_a7'));
$a8=unserialize(work_db($id,'_12_10_a8'));
$a9=unserialize(work_db($id,'_12_10_a9'));
$htmls.="<tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td rowspan=6 height=198 class=xl39 style='height:149.7pt;border-top:none'>月结</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a1[0]."</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a2[0]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a3[0]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a4[0]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a5[0]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a6[0]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a7[0]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a8[0]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a9[0]."　</td>
 </tr>
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl33 style='height:24.95pt;border-top:none;border-left:
  none'>".$a1[1]."</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a2[1]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a3[1]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a4[1]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a5[1]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a6[1]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a7[1]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a8[1]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a9[1]."　</td>
 </tr>
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl33 style='height:24.95pt;border-top:none;border-left:
  none'>".$a1[2]."</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a2[2]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a3[2]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a4[2]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a5[2]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a6[2]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a7[2]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a8[2]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a9[2]."　</td>
 </tr>
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl33 style='height:24.95pt;border-top:none;border-left:
  none'>".$a1[3]."</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a2[3]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a3[3]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a4[3]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a5[3]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a6[3]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a7[3]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a8[3]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a9[3]."　</td>
 </tr>
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl33 style='height:24.95pt;border-top:none;border-left:
  none'>".$a1[4]."</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a2[4]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a3[4]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a4[4]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a5[4]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a6[4]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a7[4]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a8[4]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a9[4]."　</td>
 </tr>
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl33 style='height:24.95pt;border-top:none;border-left:
  none'>".$a1[5]."</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a2[5]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a3[5]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a4[5]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a5[5]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a6[5]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a7[5]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a8[5]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a9[5]."　</td>
 </tr>
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl32 style='height:24.95pt;border-top:none'>月结小计</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a1[6]."</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a2[6]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a3[6]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a4[6]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a5[6]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a6[6]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a7[6]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a8[6]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a9[6]."　</td>
 </tr>
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td rowspan=14 height=462 class=xl40 style='height:349.3pt;border-top:none'>现金</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a1[7]."</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a2[7]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a3[7]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a4[7]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a5[7]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a6[7]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a7[7]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a8[7]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a9[7]."　</td>
 </tr>
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl33 style='height:24.95pt;border-top:none;border-left:
  none'>".$a1[8]."</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a2[8]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a3[8]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a4[8]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a5[8]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a6[8]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a7[8]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a8[8]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a9[8]."　</td>
 </tr>
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl33 style='height:24.95pt;border-top:none;border-left:
  none'>".$a1[9]."</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a2[9]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a3[9]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a4[9]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a5[9]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a6[9]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a7[9]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a8[9]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a9[9]."　</td>
 </tr>
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl33 style='height:24.95pt;border-top:none;border-left:
  none'>".$a1[10]."</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a2[10]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a3[10]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a4[10]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a5[10]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a6[10]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a7[10]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a8[10]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a9[10]."　</td>
 </tr>
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl33 style='height:24.95pt;border-top:none;border-left:
  none'>".$a1[11]."</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a2[11]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a3[11]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a4[11]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a5[11]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a6[11]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a7[11]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a8[11]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a9[11]."　</td>
 </tr>
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl33 style='height:24.95pt;border-top:none;border-left:
  none'>".$a1[12]."</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a2[12]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a3[12]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a4[12]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a5[12]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a6[12]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a7[12]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a8[12]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a9[12]."　</td>
 </tr>
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl33 style='height:24.95pt;border-top:none;border-left:
  none'>".$a1[13]."</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a2[13]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a3[13]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a4[13]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a5[13]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a6[13]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a7[13]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a8[13]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a9[13]."　</td>
 </tr>
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl33 style='height:24.95pt;border-top:none;border-left:
  none'>".$a1[14]."</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a2[14]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a3[14]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a4[14]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a5[14]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a6[14]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a7[14]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a8[14]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a9[14]."　</td>
 </tr>
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl33 style='height:24.95pt;border-top:none;border-left:
  none'>".$a1[15]."</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a2[15]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a3[15]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a4[15]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a5[15]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a6[15]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a7[15]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a8[15]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a9[15]."　</td>
 </tr>
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl33 style='height:24.95pt;border-top:none;border-left:
  none'>".$a1[17]."</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a2[17]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a3[17]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a4[17]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a5[17]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a6[17]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a7[17]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a8[17]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a9[17]."　</td>
 </tr>
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl33 style='height:24.95pt;border-top:none;border-left:
  none'>".$a1[18]."</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a2[18]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a3[18]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a4[18]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a5[18]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a6[18]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a7[18]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a8[18]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a9[18]."　</td>
 </tr>
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl33 style='height:24.95pt;border-top:none;border-left:
  none'>".$a1[19]."</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a2[19]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a3[19]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a4[19]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a5[19]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a6[19]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a7[19]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a8[19]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a9[19]."　</td>
 </tr>
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl33 style='height:24.95pt;border-top:none;border-left:
  none'>".$a1[20]."</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a2[20]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a3[20]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a4[20]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a5[20]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a6[20]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a7[20]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a8[20]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a9[20]."　</td>
 </tr>
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl33 style='height:24.95pt;border-top:none;border-left:
  none'>".$a1[21]."</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a2[21]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a3[21]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a4[21]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a5[21]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a6[21]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a7[21]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a8[21]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a9[21]."　</td>
 </tr>
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td rowspan=9 height=297 class=xl41 style='height:224.55pt;border-top:none'>支票</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a1[22]."</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a2[22]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a3[22]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a4[22]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a5[22]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a6[22]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a7[22]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a8[22]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a9[22]."　</td>
 </tr>
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl33 style='height:24.95pt;border-top:none;border-left:
  none'>".$a1[23]."</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a2[23]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a3[23]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a4[23]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a5[23]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a6[23]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a7[23]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a8[23]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a9[23]."　</td>
 </tr>
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl33 style='height:24.95pt;border-top:none;border-left:
  none'>".$a1[24]."</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a2[24]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a3[24]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a4[24]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a5[24]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a6[24]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a7[24]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a8[24]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a9[24]."　</td>
 </tr>
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl33 style='height:24.95pt;border-top:none;border-left:
  none'>".$a1[25]."</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a2[25]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a3[25]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a4[25]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a5[25]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a6[25]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a7[25]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a8[25]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a9[25]."　</td>
 </tr>
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl33 style='height:24.95pt;border-top:none;border-left:
  none'>".$a1[26]."</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a2[26]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a3[26]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a4[26]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a5[26]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a6[26]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a7[26]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a8[26]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a9[26]."　</td>
 </tr>
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl33 style='height:24.95pt;border-top:none;border-left:
  none'>".$a1[27]."</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a2[27]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a3[27]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a4[27]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a5[27]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a6[27]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a7[27]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a8[27]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a9[27]."　</td>
 </tr>
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl33 style='height:24.95pt;border-top:none;border-left:
  none'>".$a1[28]."</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a2[28]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a3[28]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a4[28]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a5[28]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a6[28]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a7[28]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a8[28]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a9[28]."　</td>
 </tr>
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl33 style='height:24.95pt;border-top:none;border-left:
  none'>".$a1[29]."</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a2[29]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a3[29]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a4[29]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a5[29]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a6[29]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a7[29]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a8[29]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a9[29]."　</td>
 </tr>
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl33 style='height:24.95pt;border-top:none;border-left:
  none'>".$a1[30]."</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a2[30]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a3[30]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a4[30]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a5[30]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a6[30]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a7[30]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a8[30]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a9[30]."　</td>
 </tr>
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td rowspan=2 height=66 class=xl42 style='height:49.9pt;border-top:none'>电汇</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a1[31]."</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a2[31]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a3[31]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a4[31]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a5[31]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a6[31]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a7[31]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a8[31]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a9[31]."　</td>
 </tr>
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl33 style='height:24.95pt;border-top:none;border-left:
  none'>".$a1[32]."</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a2[32]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a3[32]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a4[32]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a5[32]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a6[32]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a7[32]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a8[32]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a9[32]."　</td>
 </tr>
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td rowspan=3 height=99 class=xl36 style='border-bottom:.5pt solid black;
  height:74.85pt;border-top:none'>租赁</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a1[33]."</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a2[33]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a3[33]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a4[33]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a5[33]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a6[33]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a7[33]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a8[33]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a9[33]."　</td>
 </tr>
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl33 style='height:24.95pt;border-top:none;border-left:
  none'>".$a1[34]."</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a2[34]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a3[34]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a4[34]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a5[34]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a6[34]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a7[34]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a8[34]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a9[34]."　</td>
 </tr>
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl33 style='height:24.95pt;border-top:none;border-left:
  none'>".$a1[35]."</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a2[35]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a3[35]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a4[35]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a5[35]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a6[35]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a7[35]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a8[35]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a9[35]."　</td>
 </tr>
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td rowspan=2 height=66 class=xl35 width=95 style='height:49.9pt;border-top:
  none;width:71pt'>现金支票<br>
    电汇租赁</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a1[36]."</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a2[36]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a3[36]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a4[36]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a5[36]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a6[36]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a7[36]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a8[36]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a9[36]."　</td>
 </tr>
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl33 style='height:24.95pt;border-top:none;border-left:
  none'>".$a1[37]."</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a2[37]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a3[37]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a4[37]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a5[37]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a6[37]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a7[37]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a8[37]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a9[37]."　</td>
 </tr>
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl32 style='height:24.95pt;border-top:none'>总计</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a1[38]."</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a2[38]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a3[38]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a4[38]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a5[38]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a6[38]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a7[38]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a8[38]."　</td>
  <td class=xl33 style='border-top:none;border-left:none'>".$a9[38]."　</td>
 </tr>
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td colspan=3 height=33 class=xl34 style='height:24.95pt'>部门负责人审批:".w_p_v(22,$id,'name')."</td>
  <td colspan=4 class=xl34>财务负责人审批:".w_p_v(23,$id,'name')."</td>
  <td colspan=3 class=xl34>总经理审批:".w_p_v(24,$id,'name')."</td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=95 style='width:71pt'></td>
  <td width=173 style='width:130pt'></td>
  <td width=112 style='width:84pt'></td>
  <td width=91 style='width:68pt'></td>
  <td width=93 style='width:70pt'></td>
  <td width=101 style='width:76pt'></td>
  <td width=96 style='width:72pt'></td>
  <td width=97 style='width:73pt'></td>
  <td width=90 style='width:68pt'></td>
  <td width=151 style='width:113pt'></td>
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