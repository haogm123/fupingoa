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
	text-align:center;
	border-top:1.0pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	white-space:normal;}
.xl66
	{mso-style-parent:style0;
	text-align:center;
	border-top:1.0pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
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
	text-align:center;
	border:.5pt solid windowtext;
	white-space:normal;}
.xl69
	{mso-style-parent:style0;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	white-space:normal;}
.xl70
	{mso-style-parent:style0;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl71
	{mso-style-parent:style0;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl72
	{mso-style-parent:style0;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:1.0pt solid windowtext;
	white-space:normal;}
.xl73
	{mso-style-parent:style0;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl74
	{mso-style-parent:style0;
	text-align:left;
	border-top:1.0pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl75
	{mso-style-parent:style0;
	text-align:left;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl76
	{mso-style-parent:style0;
	text-align:left;
	border:.5pt solid windowtext;
	white-space:normal;}
.xl77
	{mso-style-parent:style0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl78
	{mso-style-parent:style0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl79
	{mso-style-parent:style0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl80
	{mso-style-parent:style0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl81
	{mso-style-parent:style0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl82
	{mso-style-parent:style0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl83
	{mso-style-parent:style0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl84
	{mso-style-parent:style0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl85
	{mso-style-parent:style0;
	font-size:14.0pt;
	font-weight:700;
	text-align:center;
	white-space:normal;}
.xl86
	{mso-style-parent:style0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	white-space:normal;}
.xl87
	{mso-style-parent:style0;
	text-align:left;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	white-space:normal;}
.xl88
	{mso-style-parent:style0;
	text-align:left;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl89
	{mso-style-parent:style0;
	text-align:left;
	border-top:none;
	border-right:1.0pt solid windowtext;
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
     <x:Zoom>115</x:Zoom>
     <x:Selected/>
     <x:Panes>
      <x:Pane>
       <x:Number>3</x:Number>
       <x:ActiveRow>16</x:ActiveRow>
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

<body link=blue vlink=purple>

<table x:str border=0 cellpadding=0 cellspacing=0 width=706 style='border-collapse:
 collapse;table-layout:fixed;width:530pt'>
 <col width=140 style='mso-width-source:userset;mso-width-alt:4480;width:105pt'>
 <col width=213 style='mso-width-source:userset;mso-width-alt:6816;width:160pt'>
 <col width=140 style='mso-width-source:userset;mso-width-alt:4480;width:105pt'>
 <col width=213 style='mso-width-source:userset;mso-width-alt:6816;width:160pt'>
 <tr height=59 style='mso-height-source:userset;height:44.25pt'>
  <td colspan=4 height=59 class=xl85 width=706 style='height:44.25pt;
  width:530pt'>项目竣工验收单</td>
 </tr>
 <tr height=34 style='mso-height-source:userset;height:25.5pt'>
  <td height=34 class=xl65 width=140 style='height:25.5pt;width:105pt'>客户名称</td>
  <td class=xl74 width=213 style='border-left:none;width:160pt'><?php echo P_I_DB($typeid,$tplid,'_4_16_3_1',190,25)?></td>
  <td class=xl66 width=140 style='border-left:none;width:105pt'>项目名称</td>
  <td class=xl75 width=213 style='border-left:none;width:160pt'><?php echo P_I_DB($typeid,$tplid,'_4_16_3_2',190,25)?></td>
 </tr>
 <tr height=34 style='mso-height-source:userset;height:25.5pt'>
  <td height=34 class=xl67 width=140 style='height:25.5pt;border-top:none;
  width:105pt'>施工单位</td>
  <td colspan=3 class=xl76 width=566 style='border-right:1.0pt solid black;
  border-left:none;width:425pt'><?php echo P_I_DB($typeid,$tplid,'_4_16_3_3',544,25)?></td>
 </tr>
 <tr height=34 style='mso-height-source:userset;height:25.5pt'>
  <td height=34 class=xl67 width=140 style='height:25.5pt;border-top:none;
  width:105pt'>项目类型</td>
  <td colspan=3 class=xl76 width=566 style='border-right:1.0pt solid black;
  border-left:none;width:425pt'><?php echo P_I_DB($typeid,$tplid,'_4_16_3_4',220,25)?></td>
 </tr>
 <tr height=34 style='mso-height-source:userset;height:25.5pt'>
  <td height=34 class=xl67 width=140 style='height:25.5pt;border-top:none;
  width:105pt'>项目地点</td>
  <td colspan=3 class=xl76 width=566 style='border-right:1.0pt solid black;
  border-left:none;width:425pt'><?php echo P_I_DB($typeid,$tplid,'_4_16_3_5',544,25)?></td>
 </tr>
 <tr height=34 style='mso-height-source:userset;height:25.5pt'>
  <td height=34 class=xl67 width=140 style='height:25.5pt;border-top:none;
  width:105pt'>开工日期</td>
  <td class=xl76 width=213 style='border-top:none;border-left:none;width:160pt'><?php echo P_I_DB($typeid,$tplid,'_4_16_3_6',200,25)?></td>
  <td class=xl68 width=140 style='border-top:none;border-left:none;width:105pt'>验收日期</td>
  <td class=xl77 width=213 style='border-top:none;border-left:none;width:160pt'><?php echo P_I_DB($typeid,$tplid,'_4_16_3_7',190,25)?></td>
 </tr>
 <tr height=34 style='mso-height-source:userset;height:25.5pt'>
  <td colspan=4 height=34 class=xl86 width=706 style='border-right:1.0pt solid black;
  height:25.5pt;width:530pt'><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp; </span>施工内容：</td>
 </tr>
 <tr height=158 style='mso-height-source:userset;height:118.5pt'>
  <td colspan=4 height=158 class=xl86 width=706 style='border-right:1.0pt solid black;
  height:118.5pt;width:530pt'><?php echo P_I_DB($typeid,$tplid,'_4_16_3_8',550,25)?></td>
 </tr>
 <tr height=34 style='mso-height-source:userset;height:25.5pt'>
  <td height=34 class=xl69 width=140 style='height:25.5pt;border-top:none;
  width:105pt'>项目负责人</td>
  <td class=xl70 width=213 style='border-top:none;border-left:none;width:160pt'><?php echo P_I_DB($typeid,$tplid,'_4_16_3_9',200,25)?></td>
  <td class=xl70 width=140 style='border-top:none;border-left:none;width:105pt'>日期</td>
  <td class=xl71 width=213 style='border-top:none;border-left:none;width:160pt'><?php echo P_I_DB($typeid,$tplid,'_4_16_3_10',190,25)?></td>
 </tr>
 <tr height=34 style='mso-height-source:userset;height:25.5pt'>
  <td colspan=4 height=34 class=xl87 width=706 style='border-right:1.0pt solid black;
  height:25.5pt;width:530pt'><span style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;
  </span>竣工确认：</td>
 </tr>
 <tr height=158 style='mso-height-source:userset;height:118.5pt'>
  <td colspan=4 height=158 class=xl86 width=706 style='border-right:1.0pt solid black;
  height:118.5pt;width:530pt'><?php echo P_I_DB($typeid,$tplid,'_4_16_3_11',550,25)?></td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td height=37 class=xl67 width=140 style='height:27.95pt;border-top:none;
  width:105pt'>现场确认单</td>
  <td colspan=3 class=xl82 width=566 style='border-right:1.0pt solid black;
  border-left:none;width:425pt'><?php echo P_I_DB($typeid,$tplid,'_4_16_3_12','',25)?></td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td height=37 class=xl72 width=140 style='height:27.95pt;border-top:none;
  width:105pt'>甲方验收人</td>
  <td class=xl78 width=213 style='border-top:none;border-left:none;width:160pt'><?php echo P_I_DB($typeid,$tplid,'_4_16_3_13',200,25)?></td>
  <td class=xl73 width=140 style='border-top:none;border-left:none;width:105pt'>日期</td>
  <td class=xl80 width=213 style='border-top:none;border-left:none;width:160pt'><?php echo P_I_DB($typeid,$tplid,'_4_16_3_14',190,25)?></td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td height=37 class=xl69 width=140 style='height:27.95pt;width:105pt'>填报人</td>
  <td class=xl79 width=213 style='border-left:none;width:160pt'><?php echo P_I_DB($typeid,$tplid,'_4_16_3_15',100,25)?></td>
  <td class=xl70 width=140 style='border-left:none;width:105pt'>审核人</td>
  <td class=xl81 width=213 style='border-left:none;width:160pt'>　</td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=140 style='width:105pt'></td>
  <td width=213 style='width:160pt'></td>
  <td width=140 style='width:105pt'></td>
  <td width=213 style='width:160pt'></td>
 </tr>
 <![endif]>
</table>
<?php
include_once('footer.php');
?>