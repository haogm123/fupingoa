<?php
include_once('head.php');
?>
<style>
<!--table
	{mso-displayed-decimal-separator:"\.";
	mso-displayed-thousand-separator:"\,";}
@page
	{margin:.75in .7in .75in .7in;
	mso-header-margin:.3in;
	mso-footer-margin:.3in;}
.font9
	{color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:宋体;
	mso-generic-font-family:auto;
	mso-font-charset:134;}
.font10
	{color:black;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;}
.font11
	{color:black;
	font-size:12.0pt;
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
	mso-font-charset:0;
	text-align:center;}
.xl66
	{mso-style-parent:style0;
	text-align:center;}
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
	text-align:center;
	border-top:1.0pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	white-space:normal;}
.xl69
	{mso-style-parent:style0;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	white-space:normal;}
.xl70
	{mso-style-parent:style0;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	text-align:center;
	border:.5pt solid windowtext;
	white-space:normal;}
.xl71
	{mso-style-parent:style0;
	text-align:center;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:1.0pt solid windowtext;
	white-space:normal;}
.xl72
	{mso-style-parent:style0;
	font-size:12.0pt;
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
	font-size:12.0pt;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	text-align:left;
	border:.5pt solid windowtext;
	white-space:normal;}
.xl75
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
.xl76
	{mso-style-parent:style0;
	font-size:12.0pt;
	text-align:left;
	border:.5pt solid windowtext;
	white-space:normal;}
.xl77
	{mso-style-parent:style0;
	font-size:18.0pt;
	font-weight:700;
	text-align:center;
	white-space:normal;}
.xl78
	{mso-style-parent:style0;
	font-size:18.0pt;
	font-weight:700;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	text-align:center;
	white-space:normal;}
.xl79
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
.xl80
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
.xl81
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
.xl82
	{mso-style-parent:style0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl83
	{mso-style-parent:style0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl84
	{mso-style-parent:style0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl85
	{mso-style-parent:style0;
	font-size:12.0pt;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl86
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
.xl87
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
.xl88
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
     <x:DefaultRowHeight>270</x:DefaultRowHeight>
     <x:Print>
      <x:ValidPrinterInfo/>
      <x:PaperSizeIndex>9</x:PaperSizeIndex>
      <x:HorizontalResolution>200</x:HorizontalResolution>
      <x:VerticalResolution>200</x:VerticalResolution>
     </x:Print>
     <x:Selected/>
     <x:Panes>
      <x:Pane>
       <x:Number>3</x:Number>
       <x:ActiveRow>1</x:ActiveRow>
       <x:ActiveCol>1</x:ActiveCol>
       <x:RangeSelection>$B$2:$D$2</x:RangeSelection>
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
     <x:Print>
      <x:ValidPrinterInfo/>
      <x:PaperSizeIndex>9</x:PaperSizeIndex>
      <x:HorizontalResolution>200</x:HorizontalResolution>
      <x:VerticalResolution>200</x:VerticalResolution>
     </x:Print>
     <x:ProtectContents>False</x:ProtectContents>
     <x:ProtectObjects>False</x:ProtectObjects>
     <x:ProtectScenarios>False</x:ProtectScenarios>
    </x:WorksheetOptions>
   </x:ExcelWorksheet>
   <x:ExcelWorksheet>
    <x:Name>Sheet3</x:Name>
    <x:WorksheetOptions>
     <x:DefaultRowHeight>270</x:DefaultRowHeight>
     <x:Print>
      <x:ValidPrinterInfo/>
      <x:PaperSizeIndex>9</x:PaperSizeIndex>
      <x:HorizontalResolution>200</x:HorizontalResolution>
      <x:VerticalResolution>200</x:VerticalResolution>
     </x:Print>
     <x:ProtectContents>False</x:ProtectContents>
     <x:ProtectObjects>False</x:ProtectObjects>
     <x:ProtectScenarios>False</x:ProtectScenarios>
    </x:WorksheetOptions>
   </x:ExcelWorksheet>
  </x:ExcelWorksheets>
  <x:WindowHeight>11640</x:WindowHeight>
  <x:WindowWidth>19200</x:WindowWidth>
  <x:WindowTopX>0</x:WindowTopX>
  <x:WindowTopY>90</x:WindowTopY>
  <x:ProtectStructure>False</x:ProtectStructure>
  <x:ProtectWindows>False</x:ProtectWindows>
 </x:ExcelWorkbook>
</xml><![endif]-->
</head>

<body link=blue vlink=purple class=xl66>

<table x:str border=0 cellpadding=0 cellspacing=0 width=696 style='border-collapse:
 collapse;table-layout:fixed;width:524pt'>
 <col class=xl66 width=174 span=4 style='mso-width-source:userset;mso-width-alt:
 5568;width:131pt'>
 <tr class=xl65 height=64 style='mso-height-source:userset;height:48.0pt'>
  <td colspan=4 height=64 class=xl77 width=696 style='height:48.0pt;width:524pt'>特殊工艺/环节验收单</td>
 </tr>
 <tr class=xl65 height=44 style='mso-height-source:userset;height:33.0pt'>
  <td height=44 class=xl68 width=174 style='height:33.0pt;width:131pt'>项目名称</td>
  <td colspan=3 class=xl79 width=522 style='border-right:1.0pt solid black;
  border-left:none;width:393pt'><?php echo P_I_DB($typeid,$tplid,'_4_13_3_1',500,25)?></td>
 </tr>
 <tr class=xl65 height=44 style='mso-height-source:userset;height:33.0pt'>
  <td height=44 class=xl69 width=174 style='height:33.0pt;border-top:none;
  width:131pt'><font class="font9">合同编号</font></td>
  <td class=xl74 width=174 style='border-top:none;border-left:none;width:131pt'><?php echo P_I_DB($typeid,$tplid,'_4_13_3_2',160,25)?></td>
  <td class=xl70 width=174 style='border-top:none;border-left:none;width:131pt'><font
  class="font9">工单号</font></td>
  <td class=xl75 width=174 style='border-top:none;border-left:none;width:131pt'><?php echo P_I_DB($typeid,$tplid,'_4_13_3_3',152,25)?></td>
 </tr>
 <tr height=130 style='mso-height-source:userset;height:97.5pt'>
  <td height=130 class=xl67 width=174 style='height:97.5pt;border-top:none;
  width:131pt'>特殊工艺情况<br>（甲方需求）</td>
  <td colspan=3 class=xl76 width=522 style='border-right:1.0pt solid black;
  border-left:none;width:393pt'><?php echo P_I_DB($typeid,$tplid,'_4_13_3_4',510,25)?></td>
 </tr>
 <tr height=130 style='mso-height-source:userset;height:97.5pt'>
  <td height=130 class=xl67 width=174 style='height:97.5pt;border-top:none;
  width:131pt'>技术要求</td>
  <td colspan=3 class=xl76 width=522 style='border-right:1.0pt solid black;
  border-left:none;width:393pt'><?php echo P_I_DB($typeid,$tplid,'_4_13_3_5',510,25)?></td>
 </tr>
 <tr height=44 style='mso-height-source:userset;height:33.0pt'>
  <td height=44 class=xl67 width=174 style='height:33.0pt;border-top:none;
  width:131pt'>技术图纸</td>
  <td colspan=3 class=xl88 width=522 style='border-right:1.0pt solid black;
  border-left:none;width:393pt'><?php echo P_I_DB($typeid,$tplid,'_4_13_3_6','',25)?></td>
 </tr>
 <tr height=130 style='mso-height-source:userset;height:97.5pt'>
  <td height=130 class=xl67 width=174 style='height:97.5pt;border-top:none;
  width:131pt'>制作完成情况</td>
  <td colspan=3 class=xl76 width=522 style='border-right:1.0pt solid black;
  border-left:none;width:393pt'><?php echo P_I_DB($typeid,$tplid,'_4_13_3_7',510,25)?></td>
 </tr>
 <tr height=47 style='mso-height-source:userset;height:35.25pt'>
  <td height=47 class=xl67 width=174 style='height:35.25pt;border-top:none;
  width:131pt'>完成效果</td>
  <td colspan=3 class=xl85 width=522 style='border-right:1.0pt solid black;
  border-left:none;width:393pt'><?php echo P_I_DB($typeid,$tplid,'_4_13_3_8','',25)?></td>
 </tr>
 <tr height=44 style='mso-height-source:userset;height:33.0pt'>
  <td height=44 class=xl67 width=174 style='height:33.0pt;border-top:none;
  width:131pt'>制作周期</td>
  <td colspan=3 class=xl76 width=522 style='border-right:1.0pt solid black;
  border-left:none;width:393pt'><?php echo P_I_DB($typeid,$tplid,'_4_13_3_9',500,25)?></td>
 </tr>
 <tr height=44 style='mso-height-source:userset;height:33.0pt'>
  <td height=44 class=xl71 width=174 style='height:33.0pt;width:131pt'>制作人员</td>
  <td colspan=3 class=xl76 width=522 style='border-right:1.0pt solid black;
  width:393pt'><?php echo P_I_DB($typeid,$tplid,'_4_13_3_10',500,25)?></td>
 </tr>
 <tr height=44 style='mso-height-source:userset;height:33.0pt'>
  <td height=44 class=xl67 width=174 style='height:33.0pt;width:131pt'>填报人</td>
  <td class=xl76 width=174 style='border-top:none;border-left:none;width:131pt'><?php echo P_I_DB($typeid,$tplid,'_4_13_3_11',80,25)?></td>
  <td class=xl72 width=174 style='border-top:none;border-left:none;width:131pt'>验收人</td>
  <td class=xl75 width=174 style='border-top:none;border-left:none;width:131pt'></td>
 </tr>
 <tr height=44 style='mso-height-source:userset;height:33.0pt'>
  <td height=44 class=xl73 width=174 style='height:33.0pt;border-top:none;
  width:131pt'>审批人</td>
  <td colspan=3 class=xl82 width=522 style='border-right:1.0pt solid black;
  border-left:none;width:393pt'>（附审批意见）</td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=174 style='width:131pt'></td>
  <td width=174 style='width:131pt'></td>
  <td width=174 style='width:131pt'></td>
  <td width=174 style='width:131pt'></td>
 </tr>
 <![endif]>
</table>
<?php
include_once('footer.php');
?>