<?php
include_once('head_view.php');


function xls_views($id,$uid,$title){
$htmls.='<html xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:x="urn:schemas-microsoft-com:office:excel"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<meta name=ProgId content=Excel.Sheet>
<meta name=Generator content="Microsoft Excel 11">
<!--[if gte mso 9]><xml>
 <o:DocumentProperties>
  <o:Author>Windows 用户</o:Author>
  <o:LastAuthor>fdsfds</o:LastAuthor>
  <o:LastPrinted>2013-05-03T12:44:48Z</o:LastPrinted>
  <o:Created>2012-09-20T07:02:14Z</o:Created>
  <o:LastSaved>2013-05-06T07:08:00Z</o:LastSaved>
  <o:Company>Users</o:Company>
  <o:Version>11.9999</o:Version>
 </o:DocumentProperties>
</xml><![endif]-->
<style>
<!--table
	{mso-displayed-decimal-separator:"\.";
	mso-displayed-thousand-separator:"\,";}
@page
	{margin:.63in .7in .75in .41in;
	mso-header-margin:.3in;
	mso-footer-margin:.3in;}
.font10
	{color:black;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:宋体;
	mso-generic-font-family:auto;
	mso-font-charset:134;}
.font11
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
	vertical-align:middle;
	white-space:nowrap;
	mso-rotate:0;
	mso-background-source:auto;
	mso-pattern:auto;
	color:black;
	font-size:11.0pt;
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
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:宋体;
	mso-generic-font-family:auto;
	mso-font-charset:134;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border:none;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:locked visible;
	white-space:nowrap;
	mso-rotate:0;}
.xl65
	{mso-style-parent:style0;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;}
.xl66
	{mso-style-parent:style0;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	text-align:center;
	border-top:1.0pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	white-space:normal;}
.xl67
	{mso-style-parent:style0;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	white-space:normal;}
.xl68
	{mso-style-parent:style0;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	white-space:normal;}
.xl69
	{mso-style-parent:style0;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	text-align:center;
	border:.5pt solid windowtext;
	white-space:normal;}
.xl70
	{mso-style-parent:style0;
	text-align:center;
	border:.5pt solid windowtext;
	white-space:normal;}
.xl71
	{mso-style-parent:style0;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl72
	{mso-style-parent:style0;
	font-size:12.0pt;
	mso-number-format:"_ * \#\,\#\#0\.00_ \;_ * \\-\#\,\#\#0\.00_ \;_ * \0022-\0022??_ \;_ \@_ ";
	text-align:center;
	border:.5pt solid windowtext;
	white-space:normal;}
.xl73
	{mso-style-parent:style0;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	white-space:normal;}
.xl74
	{mso-style-parent:style0;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl75
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	text-align:left;
	border:.5pt solid windowtext;
	white-space:normal;}
.xl76
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:"_ * \#\,\#\#0\.00_ \;_ * \\-\#\,\#\#0\.00_ \;_ * \0022-\0022??_ \;_ \@_ ";
	text-align:left;
	border:.5pt solid windowtext;
	white-space:normal;}
.xl77
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl78
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:"_ * \#\,\#\#0\.00_ \;_ * \\-\#\,\#\#0\.00_ \;_ * \0022-\0022??_ \;_ \@_ ";
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl79
	{mso-style-parent:style0;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:"_ * \#\,\#\#0\.00_ \;_ * \\-\#\,\#\#0\.00_ \;_ * \0022-\0022??_ \;_ \@_ ";
	text-align:left;
	border:.5pt solid windowtext;
	white-space:normal;}
.xl80
	{mso-style-parent:style0;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:"_ * \#\,\#\#0\.00_ \;_ * \\-\#\,\#\#0\.00_ \;_ * \0022-\0022??_ \;_ \@_ ";
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl81
	{mso-style-parent:style0;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl82
	{mso-style-parent:style0;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl83
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl84
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl85
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl86
	{mso-style-parent:style0;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	white-space:normal;}
.xl87
	{mso-style-parent:style0;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl88
	{mso-style-parent:style0;
	font-size:18.0pt;
	font-weight:700;
	text-align:center;
	white-space:normal;}
.xl89
	{mso-style-parent:style0;
	font-size:18.0pt;
	font-weight:700;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	text-align:center;
	white-space:normal;}
.xl90
	{mso-style-parent:style0;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl91
	{mso-style-parent:style0;
	text-align:center;
	border:.5pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl92
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl93
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	text-align:center;
	border:.5pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl94
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl95
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	text-align:left;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl96
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	text-align:left;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl97
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	text-align:left;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
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
     <x:DefaultRowHeight>300</x:DefaultRowHeight>
     <x:Print>
      <x:ValidPrinterInfo/>
      <x:PaperSizeIndex>9</x:PaperSizeIndex>
      <x:HorizontalResolution>600</x:HorizontalResolution>
      <x:VerticalResolution>600</x:VerticalResolution>
     </x:Print>
     <x:Selected/>
     <x:TopRowVisible>12</x:TopRowVisible>
     <x:Panes>
      <x:Pane>
       <x:Number>3</x:Number>
       <x:ActiveRow>29</x:ActiveRow>
       <x:ActiveCol>3</x:ActiveCol>
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
     <x:DefaultRowHeight>270</x:DefaultRowHeight>
     <x:ProtectContents>False</x:ProtectContents>
     <x:ProtectObjects>False</x:ProtectObjects>
     <x:ProtectScenarios>False</x:ProtectScenarios>
    </x:WorksheetOptions>
   </x:ExcelWorksheet>
   <x:ExcelWorksheet>
    <x:Name>Sheet3</x:Name>
    <x:WorksheetOptions>
     <x:DefaultRowHeight>270</x:DefaultRowHeight>
     <x:ProtectContents>False</x:ProtectContents>
     <x:ProtectObjects>False</x:ProtectObjects>
     <x:ProtectScenarios>False</x:ProtectScenarios>
    </x:WorksheetOptions>
   </x:ExcelWorksheet>
  </x:ExcelWorksheets>
  <x:WindowHeight>4395</x:WindowHeight>
  <x:WindowWidth>15075</x:WindowWidth>
  <x:WindowTopX>0</x:WindowTopX>
  <x:WindowTopY>165</x:WindowTopY>
  <x:ProtectStructure>False</x:ProtectStructure>
  <x:ProtectWindows>False</x:ProtectWindows>
 </x:ExcelWorkbook>
</xml><![endif]-->
</head>

<body link=blue vlink=purple class=xl65>';

$htmls.="<table x:str border=0 cellpadding=0 cellspacing=0 width=740 style='border-collapse:
 collapse;table-layout:fixed;width:556pt'>
 <col class=xl65 width=185 span=4 style='mso-width-source:userset;mso-width-alt:
 5920;width:139pt'>
 <tr height=66 style='mso-height-source:userset;height:50.1pt'>
  <td colspan=4 height=66 class=xl88 width=740 style='height:50.1pt;width:556pt'><span
  style='mso-spacerun:yes'>&nbsp;</span>".$title."</td>
 </tr>
 <tr height=31 style='mso-height-source:userset;height:23.25pt'>
  <td height=31 class=xl66 width=185 style='height:23.25pt;width:139pt'><font
  class='font11'>客户名称</font></td>
  <td colspan=3 class=xl95 width=555 style='border-right:1.0pt solid black;
  border-left:none;width:417pt'>".project_db($id,'_4_11_3_1')."</td>
 </tr>
 <tr height=31 style='mso-height-source:userset;height:23.25pt'>
  <td height=31 class=xl67 width=185 style='height:23.25pt;border-top:none;
  width:139pt'>项目名称</td>
  <td colspan=3 class=xl83 width=555 style='border-right:1.0pt solid black;
  border-left:none;width:417pt'>".project_db($id,'_4_11_3_2')."</td>
 </tr>
 <tr height=31 style='mso-height-source:userset;height:23.25pt'>
  <td height=31 class=xl67 width=185 style='height:23.25pt;border-top:none;
  width:139pt'>项目内容</td>
  <td colspan=3 class=xl83 width=555 style='border-right:1.0pt solid black;
  border-left:none;width:417pt'>".project_db($id,'_4_11_3_3')."</td>
 </tr>
 <tr height=31 style='mso-height-source:userset;height:23.25pt'>
  <td height=31 class=xl67 width=185 style='height:23.25pt;border-top:none;
  width:139pt'>项目周期</td>
  <td colspan=3 class=xl83 width=555 style='border-right:1.0pt solid black;
  border-left:none;width:417pt'>".project_db($id,'_4_11_3_4')."</td>
 </tr>
 <tr height=31 style='mso-height-source:userset;height:23.25pt'>
  <td height=31 class=xl67 width=185 style='height:23.25pt;border-top:none;
  width:139pt'>项目地点</td>
  <td colspan=3 class=xl83 width=555 style='border-right:1.0pt solid black;
  border-left:none;width:417pt'>".project_db($id,'_4_11_3_5')."</td>
 </tr>
 <tr height=31 style='mso-height-source:userset;height:23.25pt'>
  <td height=31 class=xl68 width=185 style='height:23.25pt;border-top:none;
  width:139pt'><font class='font11'>合同编号</font></td>
  <td class=xl75 width=185 style='border-top:none;border-left:none;width:139pt'>".project_db($id,'_4_11_3_6')."</td>
  <td class=xl69 width=185 style='border-top:none;border-left:none;width:139pt'><font
  class='font11'>工单号</font></td>
  <td class=xl77 width=185 style='border-top:none;border-left:none;width:139pt'>".project_db($id,'_4_11_3_7')."</td>
 </tr>
 <tr height=31 style='mso-height-source:userset;height:23.25pt'>
  <td height=31 class=xl68 width=185 style='height:23.25pt;border-top:none;
  width:139pt'><font class='font11'>签订合同金额</font></td>
  <td class=xl76 width=185 style='border-top:none;border-left:none;width:139pt'>".project_db($id,'_4_11_3_8')."</td>
  <td class=xl70 width=185 style='border-top:none;border-left:none;width:139pt'>增/减项后实际合同金额</td>
  <td class=xl78 width=185 style='border-top:none;border-left:none;width:139pt'>".project_db($id,'_4_11_3_9')."</td>
 </tr>
 <tr height=31 style='mso-height-source:userset;height:23.25pt'>
  <td height=31 class=xl68 width=185 style='height:23.25pt;border-top:none;
  width:139pt'><font class='font11'>预算成本</font></td>
  <td class=xl76 width=185 style='border-top:none;border-left:none;width:139pt'>".project_db($id,'_4_11_3_10')."</td>
  <td class=xl70 width=185 style='border-top:none;border-left:none;width:139pt'>实际成本</td>
  <td class=xl78 width=185 style='border-top:none;border-left:none;width:139pt'>".project_db($id,'_4_11_3_11')."</td>
 </tr>
 <tr height=31 style='mso-height-source:userset;height:23.25pt'>
  <td colspan=4 height=31 class=xl92 width=740 style='border-right:1.0pt solid black;
  height:23.25pt;width:556pt'><font class='font10'>实际成本明细</font></td>
 </tr>
 <tr height=31 style='mso-height-source:userset;height:23.25pt'>
  <td colspan=2 height=31 class=xl86 width=370 style='border-right:.5pt solid black;
  height:23.25pt;width:278pt'>成本明细</td>
  <td class=xl70 width=185 style='border-top:none;border-left:none;width:139pt'>金额</td>
  <td class=xl71 width=185 style='border-top:none;border-left:none;width:139pt'>所占比例</td>
 </tr>";
$a1=unserialize(project_db($id,'_4_11_3_a1'));
$a2=unserialize(project_db($id,'_4_11_3_a2')); 
$htmls.="<tr height=31 style='mso-height-source:userset;height:23.25pt'>
  <td rowspan=14 height=434 class=xl67 width=185 style='height:325.5pt;
  border-top:none;width:139pt'>直接成本</td>
  <td class=xl70 width=185 style='border-top:none;border-left:none;width:139pt'>材料费（本地）</td>
  <td class=xl76 width=185 style='border-top:none;border-left:none;width:139pt'>".$a1[0]."</td>
  <td class=xl78 width=185 style='border-top:none;border-left:none;width:139pt'>".$a2[0]."</td>
 </tr>
 <tr height=31 style='mso-height-source:userset;height:23.25pt'>
  <td height=31 class=xl70 width=185 style='height:23.25pt;border-top:none;
  border-left:none;width:139pt'>材料费（外埠采购）</td>
  <td class=xl76 width=185 style='border-top:none;border-left:none;width:139pt'>".$a1[1]."</td>
  <td class=xl78 width=185 style='border-top:none;border-left:none;width:139pt'>".$a2[1]."</td>
 </tr>
 <tr height=31 style='mso-height-source:userset;height:23.25pt'>
  <td height=31 class=xl70 width=185 style='height:23.25pt;border-top:none;
  border-left:none;width:139pt'>外包费</td>
  <td class=xl76 width=185 style='border-top:none;border-left:none;width:139pt'>".$a1[2]."</td>
  <td class=xl78 width=185 style='border-top:none;border-left:none;width:139pt'>".$a2[2]."</td>
 </tr>
 <tr height=31 style='mso-height-source:userset;height:23.25pt'>
  <td height=31 class=xl70 width=185 style='height:23.25pt;border-top:none;
  border-left:none;width:139pt'>人工费（自有）</td>
  <td class=xl76 width=185 style='border-top:none;border-left:none;width:139pt'>".$a1[3]."</td>
  <td class=xl78 width=185 style='border-top:none;border-left:none;width:139pt'>".$a2[3]."</td>
 </tr>
 <tr height=31 style='mso-height-source:userset;height:23.25pt'>
  <td height=31 class=xl70 width=185 style='height:23.25pt;border-top:none;
  border-left:none;width:139pt'>人工费（外请）</td>
  <td class=xl76 width=185 style='border-top:none;border-left:none;width:139pt'>".$a1[4]."</td>
  <td class=xl78 width=185 style='border-top:none;border-left:none;width:139pt'>".$a2[4]."</td>
 </tr>
 <tr height=31 style='mso-height-source:userset;height:23.25pt'>
  <td height=31 class=xl70 width=185 style='height:23.25pt;border-top:none;
  border-left:none;width:139pt'>外加工</td>
  <td class=xl76 width=185 style='border-top:none;border-left:none;width:139pt'>".$a1[5]."</td>
  <td class=xl78 width=185 style='border-top:none;border-left:none;width:139pt'>".$a2[5]."</td>
 </tr>
 <tr height=31 style='mso-height-source:userset;height:23.25pt'>
  <td height=31 class=xl70 width=185 style='height:23.25pt;border-top:none;
  border-left:none;width:139pt'>吊装费</td>
  <td class=xl76 width=185 style='border-top:none;border-left:none;width:139pt'>".$a1[6]."</td>
  <td class=xl78 width=185 style='border-top:none;border-left:none;width:139pt'>".$a2[6]."</td>
 </tr>
 <tr height=31 style='mso-height-source:userset;height:23.25pt'>
  <td height=31 class=xl70 width=185 style='height:23.25pt;border-top:none;
  border-left:none;width:139pt'>运费</td>
  <td class=xl76 width=185 style='border-top:none;border-left:none;width:139pt'>".$a1[7]."</td>
  <td class=xl78 width=185 style='border-top:none;border-left:none;width:139pt'>".$a2[7]."</td>
 </tr>
 <tr height=31 style='mso-height-source:userset;height:23.25pt'>
  <td height=31 class=xl70 width=185 style='height:23.25pt;border-top:none;
  border-left:none;width:139pt'>租赁费</td>
  <td class=xl76 width=185 style='border-top:none;border-left:none;width:139pt'>".$a1[8]."</td>
  <td class=xl78 width=185 style='border-top:none;border-left:none;width:139pt'>".$a2[8]."</td>
 </tr>
 <tr height=31 style='mso-height-source:userset;height:23.25pt'>
  <td height=31 class=xl70 width=185 style='height:23.25pt;border-top:none;
  border-left:none;width:139pt'>电费</td>
  <td class=xl76 width=185 style='border-top:none;border-left:none;width:139pt'>".$a1[9]."</td>
  <td class=xl78 width=185 style='border-top:none;border-left:none;width:139pt'>".$a2[9]."</td>
 </tr>
 <tr height=31 style='mso-height-source:userset;height:23.25pt'>
  <td height=31 class=xl70 width=185 style='height:23.25pt;border-top:none;
  border-left:none;width:139pt'>占地费</td>
  <td class=xl76 width=185 style='border-top:none;border-left:none;width:139pt'>".$a1[10]."</td>
  <td class=xl78 width=185 style='border-top:none;border-left:none;width:139pt'>".$a2[10]."</td>
 </tr>
 <tr height=31 style='mso-height-source:userset;height:23.25pt'>
  <td height=31 class=xl70 width=185 style='height:23.25pt;border-top:none;
  border-left:none;width:139pt'>审批费</td>
  <td class=xl76 width=185 style='border-top:none;border-left:none;width:139pt'>".$a1[11]."</td>
  <td class=xl78 width=185 style='border-top:none;border-left:none;width:139pt'>".$a2[11]."</td>
 </tr>
 <tr height=31 style='mso-height-source:userset;height:23.25pt'>
  <td height=31 class=xl70 width=185 style='height:23.25pt;border-top:none;
  border-left:none;width:139pt'>设计费</td>
  <td class=xl76 width=185 style='border-top:none;border-left:none;width:139pt'>".$a1[12]."</td>
  <td class=xl78 width=185 style='border-top:none;border-left:none;width:139pt'>".$a2[12]."</td>
 </tr>
 <tr height=31 style='mso-height-source:userset;height:23.25pt'>
  <td height=31 class=xl70 width=185 style='height:23.25pt;border-top:none;
  border-left:none;width:139pt'>税金</td>
  <td class=xl76 width=185 style='border-top:none;border-left:none;width:139pt'>".$a1[13]."</td>
  <td class=xl78 width=185 style='border-top:none;border-left:none;width:139pt'>".$a2[13]."</td>
 </tr>
 <tr height=31 style='mso-height-source:userset;height:23.25pt'>
  <td rowspan=4 height=124 class=xl67 width=185 style='height:93.0pt;
  border-top:none;width:139pt'>间接成本</td>
  <td class=xl72 width=185 style='border-top:none;border-left:none;width:139pt'
  ><span style='mso-spacerun:yes'>&nbsp;</span>差旅费<span
  style='mso-spacerun:yes'>&nbsp;</span></td>
  <td class=xl76 width=185 style='border-top:none;border-left:none;width:139pt'>".$a1[14]."</td>
  <td class=xl78 width=185 style='border-top:none;border-left:none;width:139pt'>".$a2[14]."</td>
 </tr>
 <tr height=31 style='mso-height-source:userset;height:23.25pt'>
  <td height=31 class=xl72 width=185 style='height:23.25pt;border-top:none;
  border-left:none;width:139pt' ><span
  style='mso-spacerun:yes'>&nbsp;</span>业务招待费<span
  style='mso-spacerun:yes'>&nbsp;</span></td>
  <td class=xl76 width=185 style='border-top:none;border-left:none;width:139pt'>".$a1[15]."</td>
  <td class=xl78 width=185 style='border-top:none;border-left:none;width:139pt'>".$a2[15]."</td>
 </tr>
 <tr height=31 style='mso-height-source:userset;height:23.25pt'>
  <td height=31 class=xl72 width=185 style='height:23.25pt;border-top:none;
  border-left:none;width:139pt' ><span
  style='mso-spacerun:yes'>&nbsp;</span>罚金<span
  style='mso-spacerun:yes'>&nbsp;</span></td>
  <td class=xl76 width=185 style='border-top:none;border-left:none;width:139pt'>".$a1[16]."</td>
  <td class=xl78 width=185 style='border-top:none;border-left:none;width:139pt'>".$a2[16]."</td>
 </tr>
 <tr height=31 style='mso-height-source:userset;height:23.25pt'>
  <td height=31 class=xl72 width=185 style='height:23.25pt;border-top:none;
  border-left:none;width:139pt' ><span
  style='mso-spacerun:yes'>&nbsp;</span>其他<span
  style='mso-spacerun:yes'>&nbsp;</span></td>
  <td class=xl76 width=185 style='border-top:none;border-left:none;width:139pt'>".$a1[17]."</td>
  <td class=xl78 width=185 style='border-top:none;border-left:none;width:139pt'>".$a2[17]."</td>
 </tr>
 <tr height=31 style='mso-height-source:userset;height:23.25pt'>
  <td colspan=2 height=31 class=xl90 width=370 style='height:23.25pt;
  width:278pt'>合计</td>
  <td class=xl76 width=185 style='border-top:none;border-left:none;width:139pt'>".$a1[18]."</td>
  <td class=xl78 width=185 style='border-top:none;border-left:none;width:139pt'>".$a2[18]."</td>
 </tr>
 <tr height=31 style='mso-height-source:userset;height:23.25pt'>
  <td height=31 class=xl73 width=185 style='height:23.25pt;border-top:none;
  width:139pt'>填报人</td>
  <td class=xl81 width=185 style='border-top:none;border-left:none;width:139pt'>".project_db($id,'_4_11_3_12')."</td>
  <td class=xl74 width=185 style='border-top:none;border-left:none;width:139pt'>审核人</td>
  <td class=xl82 width=185 style='border-top:none;border-left:none;width:139pt'>".w_p_v(35,$id,'name')."</td>
 </tr>
 <tr height=30 style='mso-height-source:userset;height:22.5pt'>
  <td height=30 colspan=4 class=xl65 style='height:22.5pt;mso-ignore:colspan'></td>
 </tr>
 <tr height=30 style='mso-height-source:userset;height:22.5pt'>
  <td height=30 colspan=4 class=xl65 style='height:22.5pt;mso-ignore:colspan'></td>
 </tr>
 <tr height=30 style='mso-height-source:userset;height:22.5pt'>
  <td height=30 colspan=4 class=xl65 style='height:22.5pt;mso-ignore:colspan'></td>
 </tr>
 <tr height=30 style='mso-height-source:userset;height:22.5pt'>
  <td height=30 colspan=4 class=xl65 style='height:22.5pt;mso-ignore:colspan'></td>
 </tr>
 <tr height=30 style='mso-height-source:userset;height:22.5pt'>
  <td height=30 colspan=4 class=xl65 style='height:22.5pt;mso-ignore:colspan'></td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=185 style='width:139pt'></td>
  <td width=185 style='width:139pt'></td>
  <td width=185 style='width:139pt'></td>
  <td width=185 style='width:139pt'></td>
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
$docs=trim(xls_views($row['lid'],$row['uid'],$row['title']));
$Path = "data/excel/project/l_".$row['lid'].".xls";
$fp = fopen($Path,"w"); 
fwrite($fp,$docs); 
fclose($fp);
echo $docs;
?>
<!--/内容部份 -->

<?php
include_once('footer_view.php');
?>