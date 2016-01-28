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
	text-align:left;}
.xl66
	{mso-style-parent:style0;
	font-size:14.0pt;
	font-weight:700;
	text-align:center;
	white-space:normal;}
.xl67
	{mso-style-parent:style0;
	text-align:center;
	border-top:1.0pt solid windowtext;
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
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl69
	{mso-style-parent:style0;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	white-space:normal;}
.xl70
	{mso-style-parent:style0;
	text-align:center;
	border:.5pt solid windowtext;
	white-space:normal;}
.xl71
	{mso-style-parent:style0;
	text-align:center;
	border-top:none;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl72
	{mso-style-parent:style0;
	text-align:center;
	border-top:none;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl73
	{mso-style-parent:style0;
	text-align:center;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl74
	{mso-style-parent:style0;
	text-align:center;
	border-top:1.0pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl75
	{mso-style-parent:style0;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl76
	{mso-style-parent:style0;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:1.0pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl77
	{mso-style-parent:style0;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl78
	{mso-style-parent:style0;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl79
	{mso-style-parent:style0;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl80
	{mso-style-parent:style0;
	text-align:left;
	border:.5pt solid windowtext;
	white-space:normal;}
.xl81
	{mso-style-parent:style0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl82
	{mso-style-parent:style0;
	text-align:left;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl83
	{mso-style-parent:style0;
	text-align:left;
	border-top:1.0pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl84
	{mso-style-parent:style0;
	text-align:left;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl85
	{mso-style-parent:style0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl86
	{mso-style-parent:style0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl87
	{mso-style-parent:style0;
	text-align:left;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl88
	{mso-style-parent:style0;
	text-align:left;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl89
	{mso-style-parent:style0;
	text-align:left;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl90
	{mso-style-parent:style0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl91
	{mso-style-parent:style0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl92
	{mso-style-parent:style0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl93
	{mso-style-parent:style0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl94
	{mso-style-parent:style0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	white-space:normal;}
.xl95
	{mso-style-parent:style0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:none;
	white-space:normal;}
.xl96
	{mso-style-parent:style0;
	text-align:left;
	border-top:1.0pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl97
	{mso-style-parent:style0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl98
	{mso-style-parent:style0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl99
	{mso-style-parent:style0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl100
	{mso-style-parent:style0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl101
	{mso-style-parent:style0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl102
	{mso-style-parent:style0;
	text-align:left;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	white-space:normal;}
.xl103
	{mso-style-parent:style0;
	text-align:left;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl104
	{mso-style-parent:style0;
	text-align:left;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
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
     <x:DefaultRowHeight>499</x:DefaultRowHeight>
     <x:Unsynced/>
     <x:Print>
      <x:ValidPrinterInfo/>
      <x:PaperSizeIndex>9</x:PaperSizeIndex>
      <x:HorizontalResolution>200</x:HorizontalResolution>
      <x:VerticalResolution>200</x:VerticalResolution>
     </x:Print>
     <x:Selected/>
     <x:TopRowVisible>21</x:TopRowVisible>
     <x:Panes>
      <x:Pane>
       <x:Number>3</x:Number>
       <x:ActiveRow>27</x:ActiveRow>
       <x:ActiveCol>1</x:ActiveCol>
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

<table x:str border=0 cellpadding=0 cellspacing=0 width=1048 style='border-collapse:
 collapse;table-layout:fixed;width:788pt'>
 <col width=122 style='mso-width-source:userset;mso-width-alt:3904;width:92pt'>
 <col width=126 span=2 style='mso-width-source:userset;mso-width-alt:4032;
 width:95pt'>
 <col width=122 style='mso-width-source:userset;mso-width-alt:3904;width:92pt'>
 <col width=247 style='mso-width-source:userset;mso-width-alt:7904;width:185pt'>
 <col class=xl65 width=305 style='mso-width-source:userset;mso-width-alt:9760;
 width:229pt'>
 <tr height=66 style='mso-height-source:userset;height:50.1pt'>
  <td colspan=5 height=66 class=xl66 width=743 style='height:50.1pt;width:559pt'>项目过程修改确认记录</td>
  <td class=xl65 width=305 style='width:229pt'></td>
 </tr>
 <tr height=34 style='mso-height-source:userset;height:25.5pt'>
  <td height=34 class=xl67 width=122 style='height:25.5pt;width:92pt'>项目名称</td>
  <td colspan=2 class=xl82 width=252 style='border-right:.5pt solid black;
  border-left:none;width:190pt'><?php echo P_I_DB($typeid,$tplid,'_4_19_3_1',220,25)?></td>
  <td class=xl68 width=122 style='border-left:none;width:92pt'>日期</td>
  <td class=xl84 width=247 style='border-left:none;width:185pt'><?php echo P_I_DB($typeid,$tplid,'_4_19_3_2',220,25)?></td>
  <td class=xl65></td>
 </tr>
 <tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl69 width=122 style='height:24.95pt;border-top:none;
  width:92pt'>合同编号</td>
  <td colspan=4 class=xl80 width=621 style='border-right:1.0pt solid black;
  border-left:none;width:467pt'><?php echo P_I_DB($typeid,$tplid,'_4_19_3_3',600,25)?></td>
  <td class=xl65></td>
 </tr>
 <tr height=34 style='mso-height-source:userset;height:25.5pt'>
  <td height=34 class=xl69 width=122 style='height:25.5pt;border-top:none;
  width:92pt'>项目类型</td>
  <td colspan=4 class=xl80 width=621 style='border-right:1.0pt solid black;
  border-left:none;width:467pt' ><?php echo P_I_DB($typeid,$tplid,'_4_19_3_4',220,25)?></td>
  <td class=xl65></td>
 </tr>
 <tr height=34 style='mso-height-source:userset;height:25.5pt'>
  <td height=34 class=xl69 width=122 style='height:25.5pt;border-top:none;
  width:92pt'>项目地点</td>
  <td colspan=4 class=xl80 width=621 style='border-right:1.0pt solid black;
  border-left:none;width:467pt'><?php echo P_I_DB($typeid,$tplid,'_4_19_3_5',600,25)?></td>
  <td class=xl65></td>
 </tr>
 <tr height=34 style='mso-height-source:userset;height:25.5pt'>
  <td height=34 class=xl69 width=122 style='height:25.5pt;border-top:none;
  width:92pt'>项目期限</td>
  <td colspan=4 class=xl80 width=621 style='border-right:1.0pt solid black;
  border-left:none;width:467pt'><?php echo P_I_DB($typeid,$tplid,'_4_19_3_6',600,25)?></td>
  <td class=xl65></td>
 </tr>
 <tr height=161 style='mso-height-source:userset;height:120.75pt'>
  <td height=161 class=xl69 width=122 style='height:120.75pt;border-top:none;
  width:92pt'>项目需求</td>
  <td colspan=4 class=xl80 width=621 style='border-right:1.0pt solid black;
  border-left:none;width:467pt'><?php echo P_I_DB($typeid,$tplid,'_4_19_3_7',520,25)?></td>
  <td class=xl65></td>
 </tr>
 <tr height=34 style='mso-height-source:userset;height:25.5pt'>
  <td height=34 class=xl69 width=122 style='height:25.5pt;border-top:none;
  width:92pt'>业务员</td>
  <td colspan=2 class=xl85 width=252 style='border-right:.5pt solid black;
  border-left:none;width:190pt'><?php echo P_I_DB($typeid,$tplid,'_4_19_3_8',120,25)?></td>
  <td class=xl70 width=122 style='border-top:none;border-left:none;width:92pt'>填报人</td>
  <td class=xl81 width=247 style='border-top:none;border-left:none;width:185pt'><?php echo P_I_DB($typeid,$tplid,'_4_19_3_9',120,25)?></td>
  <td class=xl65></td>
 </tr>
 <tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td colspan=5 height=33 class=xl71 width=743 style='border-right:1.0pt solid black;
  height:24.95pt;width:559pt'>项目前期分析确认</td>
  <td class=xl65></td>
 </tr>
 <tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td rowspan=6 height=288 class=xl74 width=122 style='height:217.0pt;
  border-top:none;width:92pt'>设计部确认</td>
  <td class=xl68 width=126 style='border-top:none;border-left:none;width:95pt'>设计方案</td>
  <td colspan=3 class=xl87 width=495 style='border-right:1.0pt solid black;
  border-left:none;width:372pt'>上传附件/图片</td>
  <td class=xl65></td>
 </tr>
 <tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl70 width=126 style='height:24.95pt;border-top:none;
  border-left:none;width:95pt'>设计图纸</td>
  <td colspan=3 class=xl90 width=495 style='border-right:1.0pt solid black;
  border-left:none;width:372pt'>上传附件/图片</td>
  <td class=xl65></td>
 </tr>
 <tr height=103 style='mso-height-source:userset;height:77.25pt'>
  <td height=103 class=xl70 width=126 style='height:77.25pt;border-top:none;
  border-left:none;width:95pt'>设计部意见</td>
  <td colspan=3 class=xl90 width=495 style='border-right:1.0pt solid black;
  border-left:none;width:372pt'>文字编辑器</td>
  <td class=xl65></td>
 </tr>
 <tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl70 width=126 style='height:24.95pt;border-top:none;
  border-left:none;width:95pt'>填报人</td>
  <td colspan=3 class=xl90 width=495 style='border-right:1.0pt solid black;
  border-left:none;width:372pt'>选择人员</td>
  <td class=xl65></td>
 </tr>
 <tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl70 width=126 style='height:24.95pt;border-top:none;
  border-left:none;width:95pt'>审核人</td>
  <td colspan=3 class=xl90 width=495 style='border-right:1.0pt solid black;
  border-left:none;width:372pt'>选择人员</td>
  <td class=xl65></td>
 </tr>
 <tr height=53 style='mso-height-source:userset;height:39.95pt'>
  <td height=53 class=xl77 width=126 style='height:39.95pt;border-top:none;
  border-left:none;width:95pt'>审核意见</td>
  <td colspan=3 class=xl93 width=495 style='border-right:1.0pt solid black;
  border-left:none;width:372pt'>　</td>
  <td class=xl65></td>
 </tr>
 <tr height=103 style='mso-height-source:userset;height:77.25pt'>
  <td rowspan=9 height=387 class=xl74 width=122 style='height:291.85pt;
  width:92pt'>运营部确认</td>
  <td class=xl68 width=126 style='border-left:none;width:95pt'>工艺方案</td>
  <td colspan=3 class=xl96 width=495 style='border-right:1.0pt solid black;
  border-left:none;width:372pt'>文字编辑器</td>
  <td class=xl65></td>
 </tr>
 <tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl70 width=126 style='height:24.95pt;border-top:none;
  border-left:none;width:95pt'>结构图纸</td>
  <td colspan=3 class=xl80 width=495 style='border-right:1.0pt solid black;
  border-left:none;width:372pt'>上传附件/图片</td>
  <td class=xl65></td>
 </tr>
 <tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl70 width=126 style='height:24.95pt;border-top:none;
  border-left:none;width:95pt'>预算</td>
  <td colspan=3 class=xl80 width=495 style='border-right:1.0pt solid black;
  border-left:none;width:372pt'>上传附件（指定人可见 其他人员界面显示：——）</td>
  <td class=xl65></td>
 </tr>
 <tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl70 width=126 style='height:24.95pt;border-top:none;
  border-left:none;width:95pt'>成本</td>
  <td colspan=3 class=xl80 width=495 style='border-right:1.0pt solid black;
  border-left:none;width:372pt'>上传附件（指定人可见 其他人员界面显示：——）</td>
  <td class=xl65></td>
 </tr>
 <tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl70 width=126 style='height:24.95pt;border-top:none;
  border-left:none;width:95pt'>报价</td>
  <td colspan=3 class=xl80 width=495 style='border-right:1.0pt solid black;
  border-left:none;width:372pt'>手填（指定人可见 其他人员界面显示：——）</td>
  <td class=xl65></td>
 </tr>
 <tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl70 width=126 style='height:24.95pt;border-top:none;
  border-left:none;width:95pt'>项目材料清单</td>
  <td colspan=3 class=xl80 width=495 style='border-right:1.0pt solid black;
  border-left:none;width:372pt'>上传附件</td>
  <td class=xl65></td>
 </tr>
 <tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl70 width=126 style='height:24.95pt;border-top:none;
  border-left:none;width:95pt'>填报人</td>
  <td colspan=3 class=xl80 width=495 style='border-right:1.0pt solid black;
  border-left:none;width:372pt'>选择人员</td>
  <td class=xl65></td>
 </tr>
 <tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl70 width=126 style='height:24.95pt;border-top:none;
  border-left:none;width:95pt'>审核人</td>
  <td colspan=3 class=xl80 width=495 style='border-right:1.0pt solid black;
  border-left:none;width:372pt'>选择人员</td>
  <td class=xl65></td>
 </tr>
 <tr height=53 style='mso-height-source:userset;height:39.95pt'>
  <td height=53 class=xl77 width=126 style='height:39.95pt;border-top:none;
  border-left:none;width:95pt'>审核意见</td>
  <td colspan=3 class=xl97 width=495 style='border-right:1.0pt solid black;
  border-left:none;width:372pt'>　</td>
  <td class=xl65></td>
 </tr>
 <tr height=103 style='mso-height-source:userset;height:77.25pt'>
  <td rowspan=5 height=325 class=xl74 width=122 style='border-bottom:1.0pt solid black;
  height:244.35pt;width:92pt'>工程部确认</td>
  <td class=xl68 width=126 style='border-left:none;width:95pt'>工艺确认</td>
  <td colspan=3 class=xl96 width=495 style='border-right:1.0pt solid black;
  border-left:none;width:372pt'>手填</td>
  <td class=xl65></td>
 </tr>
 <tr height=103 style='mso-height-source:userset;height:77.25pt'>
  <td height=103 class=xl70 width=126 style='height:77.25pt;border-top:none;
  border-left:none;width:95pt'>制作方案</td>
  <td colspan=3 class=xl80 width=495 style='border-right:1.0pt solid black;
  border-left:none;width:372pt'>手填</td>
  <td class=xl65></td>
 </tr>
 <tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl70 width=126 style='height:24.95pt;border-top:none;
  border-left:none;width:95pt'>填报人</td>
  <td colspan=3 class=xl80 width=495 style='border-right:1.0pt solid black;
  border-left:none;width:372pt'>选择人员</td>
  <td class=xl65></td>
 </tr>
 <tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl70 width=126 style='height:24.95pt;border-top:none;
  border-left:none;width:95pt'>审核人</td>
  <td colspan=3 class=xl80 width=495 style='border-right:1.0pt solid black;
  border-left:none;width:372pt'>选择人员</td>
  <td class=xl65></td>
 </tr>
 <tr height=53 style='mso-height-source:userset;height:39.95pt'>
  <td height=53 class=xl79 width=126 style='height:39.95pt;border-top:none;
  border-left:none;width:95pt'>审核意见</td>
  <td colspan=3 class=xl100 width=495 style='border-right:1.0pt solid black;
  border-left:none;width:372pt'>　</td>
  <td class=xl65></td>
 </tr>
 <tr height=34 style='mso-height-source:userset;height:25.5pt'>
  <td colspan=5 height=34 class=xl102 width=743 style='border-right:1.0pt solid black;
  height:25.5pt;width:559pt'>副总确认：</td>
  <td class=xl65></td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=122 style='width:92pt'></td>
  <td width=126 style='width:95pt'></td>
  <td width=126 style='width:95pt'></td>
  <td width=122 style='width:92pt'></td>
  <td width=247 style='width:185pt'></td>
  <td width=305 style='width:229pt'></td>
 </tr>
 <![endif]>
</table>

<?php
include_once('footer.php');
?>