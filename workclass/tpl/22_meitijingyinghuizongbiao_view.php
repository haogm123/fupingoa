<?php
include_once('head_view.php');


function xls_views($id,$uid){
$htmls.='<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:x="urn:schemas-microsoft-com:office:excel"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<meta name=ProgId content=Excel.Sheet>
<meta name=Generator content="Microsoft Excel 11">
<!--[if !mso]>
<style>
v\:* {behavior:url(#default#VML);}
o\:* {behavior:url(#default#VML);}
x\:* {behavior:url(#default#VML);}
.shape {behavior:url(#default#VML);}
</style>
<![endif]--><!--[if gte mso 9]><xml>
 <o:DocumentProperties>
  <o:Created>1996-12-17T01:32:42Z</o:Created>
  <o:LastSaved>2013-04-10T10:12:46Z</o:LastSaved>
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
.font7
	{color:black;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:宋体;
	mso-generic-font-family:auto;
	mso-font-charset:134;}
.font8
	{color:black;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:宋体;
	mso-generic-font-family:auto;
	mso-font-charset:134;}
.font9
	{color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:宋体;
	mso-generic-font-family:auto;
	mso-font-charset:134;}
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
	padding:0px;
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
	color:black;
	font-size:10.0pt;
	text-align:center;
	vertical-align:middle;
	white-space:normal;}
.xl25
	{mso-style-parent:style0;
	vertical-align:middle;}
.xl26
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;}
.xl27
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	white-space:normal;}
.xl28
	{mso-style-parent:style0;
	color:black;
	text-align:center;
	vertical-align:middle;
	white-space:normal;}
.xl29
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	white-space:normal;}
.xl30
	{mso-style-parent:style0;
	mso-number-format:"_-* \#\,\#\#0_-\;\\-* \#\,\#\#0_-\;_-* \0022-\0022_-\;_-\@_-";
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl31
	{mso-style-parent:style0;
	mso-number-format:"_ * \#\,\#\#0_ \;_ * \\-\#\,\#\#0_ \;_ * \0022-\0022_ \;_ \@_ ";
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl32
	{mso-style-parent:style0;
	mso-number-format:"Short Date";
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl33
	{mso-style-parent:style0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl34
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:gray;
	mso-pattern:auto none;
	white-space:normal;}
.xl35
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:gray;
	mso-pattern:auto none;
	white-space:normal;}
.xl36
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:gray;
	mso-pattern:auto none;
	white-space:normal;}
.xl37
	{mso-style-parent:style0;
	font-size:24.0pt;
	text-align:left;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;
	padding-left:405px;
	mso-char-indent-count:15;}
.xl38
	{mso-style-parent:style0;
	font-size:24.0pt;
	text-align:left;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;
	padding-left:405px;
	mso-char-indent-count:15;}
.xl39
	{mso-style-parent:style0;
	font-size:24.0pt;
	text-align:left;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;
	padding-left:405px;
	mso-char-indent-count:15;}
.xl40
	{mso-style-parent:style0;
	mso-number-format:"_-* \#\,\#\#0\.00_-\;\\-* \#\,\#\#0\.00_-\;_-* \0022-\0022??_-\;_-\@_-";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:gray;
	mso-pattern:auto none;
	white-space:normal;}
.xl41
	{mso-style-parent:style0;
	mso-number-format:"_-* \#\,\#\#0\.00_-\;\\-* \#\,\#\#0\.00_-\;_-* \0022-\0022??_-\;_-\@_-";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:gray;
	mso-pattern:auto none;
	white-space:normal;}
.xl42
	{mso-style-parent:style0;
	mso-number-format:"_-* \#\,\#\#0\.00_-\;\\-* \#\,\#\#0\.00_-\;_-* \0022-\0022??_-\;_-\@_-";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:gray;
	mso-pattern:auto none;
	white-space:normal;}
.xl43
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl44
	{mso-style-parent:style0;
	mso-number-format:"0\.00_ ";
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl45
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl46
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl47
	{mso-style-parent:style0;
	mso-number-format:"0\.00_ ";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl48
	{mso-style-parent:style0;
	mso-number-format:"0\.00_ ";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl49
	{mso-style-parent:style0;
	mso-number-format:"_-* \#\,\#\#0_-\;\\-* \#\,\#\#0_-\;_-* \0022-\0022_-\;_-\@_-";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl50
	{mso-style-parent:style0;
	mso-number-format:"_-* \#\,\#\#0_-\;\\-* \#\,\#\#0_-\;_-* \0022-\0022_-\;_-\@_-";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl51
	{mso-style-parent:style0;
	mso-number-format:"_-* \#\,\#\#0\.00_-\;\\-* \#\,\#\#0\.00_-\;_-* \0022-\0022??_-\;_-\@_-";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl52
	{mso-style-parent:style0;
	mso-number-format:"_-* \#\,\#\#0\.00_-\;\\-* \#\,\#\#0\.00_-\;_-* \0022-\0022??_-\;_-\@_-";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl53
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	white-space:normal;}
.xl54
	{mso-style-parent:style0;
	mso-number-format:"_ * \#\,\#\#0_ \;_ * \\-\#\,\#\#0_ \;_ * \0022-\0022_ \;_ \@_ ";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl55
	{mso-style-parent:style0;
	mso-number-format:"_ * \#\,\#\#0_ \;_ * \\-\#\,\#\#0_ \;_ * \0022-\0022_ \;_ \@_ ";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl56
	{mso-style-parent:style0;
	mso-number-format:"_ * \#\,\#\#0_ \;_ * \\-\#\,\#\#0_ \;_ * \0022-\0022_ \;_ \@_ ";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl57
	{mso-style-parent:style0;
	mso-number-format:"_-* \#\,\#\#0\.00_-\;\\-* \#\,\#\#0\.00_-\;_-* \0022-\0022??_-\;_-\@_-";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl58
	{mso-style-parent:style0;
	mso-number-format:"_-* \#\,\#\#0_-\;\\-* \#\,\#\#0_-\;_-* \0022-\0022_-\;_-\@_-";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl59
	{mso-style-parent:style0;
	mso-number-format:"_-* \#\,\#\#0_-\;\\-* \#\,\#\#0_-\;_-* \0022-\0022_-\;_-\@_-";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	background:silver;
	mso-pattern:auto none;
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
     <x:Panes>
      <x:Pane>
       <x:Number>3</x:Number>
       <x:ActiveRow>16</x:ActiveRow>
       <x:ActiveCol>11</x:ActiveCol>
       <x:RangeSelection>$L$17:$O$17</x:RangeSelection>
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
</xml><![endif]--><!--[if gte mso 9]><xml>
 <o:shapedefaults v:ext="edit" spidmax="2049"/>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <o:shapelayout v:ext="edit">
  <o:idmap v:ext="edit" data="1"/>
 </o:shapelayout></xml><![endif]-->
</head>

<body link=blue vlink=purple>';

$htmls.="<table x:str border=0 cellpadding=0 cellspacing=0 width=2445 style='border-collapse:
 collapse;table-layout:fixed;width:1837pt'>
 <tr class=xl24 height=80 style='mso-height-source:userset;height:60.0pt'>
  <td colspan=26 height=80 class=xl37 width=2445 style='height:60.0pt;
  width:1837pt'>媒体经营汇总</td>
 </tr>
 <tr class=xl29 height=23 style='mso-height-source:userset;height:17.25pt'>
  <td colspan=4 height=23 class=xl34 width=389 style='border-right:.5pt solid black;
  height:17.25pt;width:292pt'>媒体规格</td>
  <td colspan=5 class=xl34 width=442 style='border-right:.5pt solid black;
  border-left:none;width:332pt'>占地签约情况</td>
  <td colspan=3 class=xl34 width=251 style='border-right:.5pt solid black;
  border-left:none;width:189pt'>手续审批期限</td>
  <td colspan=14 class=xl40 width=1363 style='border-right:.5pt solid black;
  border-left:none;width:1024pt'>费用</td>
 </tr>
 <tr class=xl28 height=23 style='mso-height-source:userset;height:17.25pt'>
  <td rowspan=2 height=58 class=xl43 width=55 style='height:43.5pt;border-top:
  none;width:41pt'>序号</td>
  <td rowspan=2 class=xl43 width=109 style='border-top:none;width:82pt'>媒体编号</td>
  <td rowspan=2 class=xl43 width=143 style='border-top:none;width:107pt'>地点</td>
  <td rowspan=2 class=xl44 width=82 style='border-top:none;width:62pt'>面积</td>
  <td rowspan=2 class=xl47 width=106 style='border-bottom:.5pt solid black;
  border-top:none;width:80pt'>合同编号</td>
  <td rowspan=2 class=xl43 width=95 style='border-top:none;width:71pt'>合同期限</td>
  <td rowspan=2 class=xl43 width=76 style='border-top:none;width:57pt'>签约年限</td>
  <td rowspan=2 class=xl49 width=78 style='border-bottom:.5pt solid black;
  border-top:none;width:59pt'>年租金</td>
  <td rowspan=2 class=xl30 width=87 style='border-top:none;width:65pt'
  >签约金额</td>
  <td rowspan=2 class=xl43 width=86 style='border-top:none;width:65pt'>市容</td>
  <td rowspan=2 class=xl43 width=83 style='border-top:none;width:62pt'>工商</td>
  <td rowspan=2 class=xl45 width=82 style='border-bottom:.5pt solid black;
  border-top:none;width:62pt'>其他</td>
  <td colspan=4 class=xl54 width=427 style='border-right:.5pt solid black;
  border-left:none;width:322pt'>占地费/年</td>
  <td colspan=4 class=xl51 width=378 style='border-right:.5pt solid black;
  border-left:none;width:283pt' >电费/年</td>
  <td colspan=2 class=xl58 width=161 style='border-right:.5pt solid black;
  border-left:none;width:121pt' >审批费用</td>
  <td colspan=2 class=xl51 width=161 style='border-right:.5pt solid black;
  border-left:none;width:121pt' >其他费用</td>
  <td colspan=2 class=xl51 width=236 style='border-right:.5pt solid black;
  border-left:none;width:177pt' >维修监测</td>
 </tr>
 <tr class=xl28 height=35 style='mso-height-source:userset;height:26.25pt'>
  <td height=35 class=xl30 width=94 style='height:26.25pt;border-top:none;
  border-left:none;width:71pt' >已付款金额</td>
  <td class=xl31 width=126 style='border-top:none;border-left:none;width:95pt'
  >当月（年）付款</td>
  <td class=xl32 width=93 style='border-top:none;border-left:none;width:70pt'>付款日期</td>
  <td class=xl31 width=114 style='border-top:none;border-left:none;width:86pt'
  >累计付款金额</td>
  <td class=xl33 width=95 style='border-left:none;width:71pt'>上次电表数</td>
  <td class=xl33 width=99 style='border-left:none;width:74pt'>本次电表数</td>
  <td class=xl30 width=91 style='border-left:none;width:68pt'>付款金额</td>
  <td class=xl30 width=93 style='border-left:none;width:70pt'>付款日期</td>
  <td class=xl30 width=81 style='border-left:none;width:61pt' >付款金额</td>
  <td class=xl32 width=80 style='border-left:none;width:60pt'>付款日期</td>
  <td class=xl30 width=79 style='border-left:none;width:59pt' >付款金额</td>
  <td class=xl30 width=82 style='border-left:none;width:62pt'>付款日期</td>
  <td class=xl30 width=145 style='border-left:none;width:109pt'>检测内容</td>
  <td class=xl30 width=91 style='border-left:none;width:68pt'>监测日期</td>
 </tr>";
$a1=unserialize(work_db($id,'_14_22_a1'));
$a2=unserialize(work_db($id,'_14_22_a2'));
$a3=unserialize(work_db($id,'_14_22_a3'));
$a4=unserialize(work_db($id,'_14_22_a4'));
$a5=unserialize(work_db($id,'_14_22_a5'));
$a6=unserialize(work_db($id,'_14_22_a6'));
$a7=unserialize(work_db($id,'_14_22_a7'));
$a8=unserialize(work_db($id,'_14_22_a8'));
$a9=unserialize(work_db($id,'_14_22_a9'));
$a10=unserialize(work_db($id,'_14_22_a10'));
$a11=unserialize(work_db($id,'_14_22_a11'));
$a12=unserialize(work_db($id,'_14_22_a12'));
$a13=unserialize(work_db($id,'_14_22_a13'));
$a14=unserialize(work_db($id,'_14_22_a14'));
$a15=unserialize(work_db($id,'_14_22_a15'));
$a16=unserialize(work_db($id,'_14_22_a16'));
$a17=unserialize(work_db($id,'_14_22_a17'));
$a18=unserialize(work_db($id,'_14_22_a18'));
$a19=unserialize(work_db($id,'_14_22_a19'));
$a20=unserialize(work_db($id,'_14_22_a20'));
$a21=unserialize(work_db($id,'_14_22_a21'));
$a22=unserialize(work_db($id,'_14_22_a22'));
$a23=unserialize(work_db($id,'_14_22_a23'));
$a24=unserialize(work_db($id,'_14_22_a24'));
$a25=unserialize(work_db($id,'_14_22_a25'));
$m=0;
for($i=0;$i<15;$i++){ 
$m++;
$htmls.="<tr class=xl26 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl27 width=55 style='height:24.95pt;border-top:none;
  width:41pt'>".$m."</td>
  <td class=xl27 width=109 style='border-top:none;border-left:none;width:82pt'>".$a1[$i]."</td>
  <td class=xl27 width=143 style='border-top:none;border-left:none;width:107pt'>".$a2[$i]."</td>
  <td class=xl27 width=82 style='border-top:none;border-left:none;width:62pt'>".$a3[$i]."</td>
  <td class=xl27 width=106 style='border-top:none;border-left:none;width:80pt'>".$a4[$i]."</td>
  <td class=xl27 width=95 style='border-top:none;border-left:none;width:71pt'>".$a5[$i]."</td>
  <td class=xl27 width=76 style='border-top:none;border-left:none;width:57pt'>".$a6[$i]."</td>
  <td class=xl27 width=78 style='border-top:none;border-left:none;width:59pt'>".$a7[$i]."</td>
  <td class=xl27 width=87 style='border-top:none;border-left:none;width:65pt'>".$a8[$i]."</td>
  <td class=xl27 width=86 style='border-top:none;border-left:none;width:65pt'>".$a9[$i]."</td>
  <td class=xl27 width=83 style='border-top:none;border-left:none;width:62pt'>".$a10[$i]."</td>
  <td class=xl27 width=82 style='border-top:none;border-left:none;width:62pt'>".$a11[$i]."</td>
  <td class=xl27 width=94 style='border-top:none;border-left:none;width:71pt'>".$a12[$i]."</td>
  <td class=xl27 width=126 style='border-top:none;border-left:none;width:95pt'>".$a13[$i]."</td>
  <td class=xl27 width=93 style='border-top:none;border-left:none;width:70pt'>".$a14[$i]."</td>
  <td class=xl27 width=114 style='border-top:none;border-left:none;width:86pt'>".$a15[$i]."</td>
  <td class=xl27 width=95 style='border-top:none;border-left:none;width:71pt'>".$a16[$i]."</td>
  <td class=xl27 width=99 style='border-top:none;border-left:none;width:74pt'>".$a17[$i]."</td>
  <td class=xl27 width=91 style='border-top:none;border-left:none;width:68pt'>".$a18[$i]."</td>
  <td class=xl27 width=93 style='border-top:none;border-left:none;width:70pt'>".$a19[$i]."</td>
  <td class=xl27 width=81 style='border-top:none;border-left:none;width:61pt'>".$a20[$i]."</td>
  <td class=xl27 width=80 style='border-top:none;border-left:none;width:60pt'>".$a21[$i]."</td>
  <td class=xl27 width=79 style='border-top:none;border-left:none;width:59pt'>".$a22[$i]."</td>
  <td class=xl27 width=82 style='border-top:none;border-left:none;width:62pt'>".$a23[$i]."</td>
  <td class=xl27 width=145 style='border-top:none;border-left:none;width:109pt'>".$a24[$i]."</td>
  <td class=xl27 width=91 style='border-top:none;border-left:none;width:68pt'>".$a25[$i]."</td>
 </tr>";
} 
 
$htmls.=" <tr class=xl26 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl27 width=55 style='height:24.95pt;border-top:none;
  width:41pt'>合计</td>
  <td class=xl27 width=109 style='border-top:none;border-left:none;width:82pt'>".$a1[15]."</td>
  <td class=xl27 width=143 style='border-top:none;border-left:none;width:107pt'>".$a2[15]."</td>
  <td class=xl27 width=82 style='border-top:none;border-left:none;width:62pt'>".$a3[15]."</td>
  <td class=xl27 width=106 style='border-top:none;border-left:none;width:80pt'>".$a4[15]."</td>
  <td class=xl27 width=95 style='border-top:none;border-left:none;width:71pt'>".$a5[15]."</td>
  <td class=xl27 width=76 style='border-top:none;border-left:none;width:57pt'>".$a6[15]."</td>
  <td class=xl27 width=78 style='border-top:none;border-left:none;width:59pt'>".$a7[15]."</td>
  <td class=xl27 width=87 style='border-top:none;border-left:none;width:65pt'>".$a8[15]."</td>
  <td class=xl27 width=86 style='border-top:none;border-left:none;width:65pt'>".$a9[15]."</td>
  <td class=xl27 width=83 style='border-top:none;border-left:none;width:62pt'>".$a10[15]."</td>
  <td class=xl27 width=82 style='border-top:none;border-left:none;width:62pt'>".$a11[15]."</td>
  <td class=xl27 width=94 style='border-top:none;border-left:none;width:71pt'>".$a12[15]."</td>
  <td class=xl27 width=126 style='border-top:none;border-left:none;width:95pt'>".$a13[15]."</td>
  <td class=xl27 width=93 style='border-top:none;border-left:none;width:70pt'>".$a14[15]."</td>
  <td class=xl27 width=114 style='border-top:none;border-left:none;width:86pt'>".$a15[15]."</td>
  <td class=xl27 width=95 style='border-top:none;border-left:none;width:71pt'>".$a16[15]."</td>
  <td class=xl27 width=99 style='border-top:none;border-left:none;width:74pt'>".$a17[15]."</td>
  <td class=xl27 width=91 style='border-top:none;border-left:none;width:68pt'>".$a18[15]."</td>
  <td class=xl27 width=93 style='border-top:none;border-left:none;width:70pt'>".$a19[15]."</td>
  <td class=xl27 width=81 style='border-top:none;border-left:none;width:61pt'>".$a20[15]."</td>
  <td class=xl27 width=80 style='border-top:none;border-left:none;width:60pt'>".$a21[15]."</td>
  <td class=xl27 width=79 style='border-top:none;border-left:none;width:59pt'>".$a22[15]."</td>
  <td class=xl27 width=82 style='border-top:none;border-left:none;width:62pt'>".$a23[15]."</td>
  <td class=xl27 width=145 style='border-top:none;border-left:none;width:109pt'>".$a24[15]."</td>
  <td class=xl27 width=91 style='border-top:none;border-left:none;width:68pt'>".$a25[15]."</td>
 </tr>";
 
 
$htmls.="<tr class=xl25 height=46 style='mso-height-source:userset;height:35.1pt'>
  <td colspan=3 height=46 class=xl53 width=307 style='height:35.1pt;width:230pt'>填报人：". work_db($id,'_14_22_1')."</td>
  <td colspan=4 class=xl53 width=359 style='width:270pt'>部门负责人审批:".w_p_v(73,$id,'name')."</td>
  <td colspan=4 class=xl53 width=334 style='width:251pt'>财务负责人审批:".w_p_v(74,$id,'name')."</td>
  <td colspan=4 class=xl53 width=395 style='width:298pt'>总经理审批:".w_p_v(75,$id,'name')."</td>
  <td colspan=11 class=xl25 style='mso-ignore:colspan'></td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=55 style='width:41pt'></td>
  <td width=109 style='width:82pt'></td>
  <td width=143 style='width:107pt'></td>
  <td width=82 style='width:62pt'></td>
  <td width=106 style='width:80pt'></td>
  <td width=95 style='width:71pt'></td>
  <td width=76 style='width:57pt'></td>
  <td width=78 style='width:59pt'></td>
  <td width=87 style='width:65pt'></td>
  <td width=86 style='width:65pt'></td>
  <td width=83 style='width:62pt'></td>
  <td width=82 style='width:62pt'></td>
  <td width=94 style='width:71pt'></td>
  <td width=126 style='width:95pt'></td>
  <td width=93 style='width:70pt'></td>
  <td width=114 style='width:86pt'></td>
  <td width=95 style='width:71pt'></td>
  <td width=99 style='width:74pt'></td>
  <td width=91 style='width:68pt'></td>
  <td width=93 style='width:70pt'></td>
  <td width=81 style='width:61pt'></td>
  <td width=80 style='width:60pt'></td>
  <td width=79 style='width:59pt'></td>
  <td width=82 style='width:62pt'></td>
  <td width=145 style='width:109pt'></td>
  <td width=91 style='width:68pt'></td>
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