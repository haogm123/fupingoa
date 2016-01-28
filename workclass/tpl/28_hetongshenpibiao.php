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
	text-align:center;
	vertical-align:middle;
	white-space:normal;}
.xl25
	{mso-style-parent:style0;
	font-size:24.0pt;
	text-align:center;
	vertical-align:middle;
	white-space:normal;}
.xl26
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	white-space:normal;}
.xl27
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	border:.5pt solid windowtext;
	white-space:normal;}
.xl28
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl29
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl30
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	white-space:normal;}
.xl31
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	white-space:normal;}
.xl32
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl33
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl34
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl35
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl36
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl37
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:top;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl38
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:top;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl39
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:top;
	border-top:none;
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
     <x:TopRowVisible>6</x:TopRowVisible>
     <x:Panes>
      <x:Pane>
       <x:Number>3</x:Number>
       <x:ActiveRow>11</x:ActiveRow>
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

<body link=blue vlink=purple>

<table x:str border=0 cellpadding=0 cellspacing=0 width=650 style='border-collapse:
 collapse;table-layout:fixed;width:488pt'>
 <col width=138 style='mso-width-source:userset;mso-width-alt:4416;width:104pt'>
 <col width=145 style='mso-width-source:userset;mso-width-alt:4640;width:109pt'>
 <col width=144 style='mso-width-source:userset;mso-width-alt:4608;width:108pt'>
 <col width=223 style='mso-width-source:userset;mso-width-alt:7136;width:167pt'>
 <tr class=xl25 height=80 style='mso-height-source:userset;height:60.0pt'>
  <td colspan=4 height=80 class=xl25 width=650 style='height:60.0pt;width:488pt'>合同审批表</td>
 </tr>
 <tr class=xl24 height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl26 width=138 style='height:30.0pt;width:104pt'>经办人</td>
  <td class=xl27 width=145 style='border-left:none;width:109pt'><?php echo W_I_DB($typeid,$tplid,'_17_28_1',50,25)?></td>
  <td class=xl26 width=144 style='border-left:none;width:108pt'>日期</td>
  <td class=xl27 width=223 style='border-left:none;width:167pt'><?php echo W_I_DB($typeid,$tplid,'_17_28_2',200,25)?></td>
 </tr>
 <tr class=xl24 height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl26 width=138 style='height:30.0pt;border-top:none;
  width:104pt'>合同项目</td>
  <td colspan=3 class=xl34 width=512 style='border-right:.5pt solid black;
  border-left:none;width:384pt'><?php echo W_I_DB($typeid,$tplid,'_17_28_3',490,25)?></td>
 </tr>
 <tr class=xl24 height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl26 width=138 style='height:30.0pt;border-top:none;
  width:104pt'>甲方</td>
  <td class=xl27 width=145 style='border-top:none;border-left:none;width:109pt'><?php echo W_I_DB($typeid,$tplid,'_17_28_4',130,25)?></td>
  <td class=xl26 width=144 style='border-top:none;border-left:none;width:108pt'>乙方</td>
  <td class=xl27 width=223 style='border-top:none;border-left:none;width:167pt'><?php echo W_I_DB($typeid,$tplid,'_17_28_5',200,25)?></td>
 </tr>
 <tr class=xl24 height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl26 width=138 style='height:30.0pt;border-top:none;
  width:104pt'>合同编号</td>
  <td class=xl27 width=145 style='border-top:none;border-left:none;width:109pt'><?php echo W_I_DB($typeid,$tplid,'_17_28_6',130,25)?></td>
  <td class=xl26 width=144 style='border-top:none;border-left:none;width:108pt'>项目地点</td>
  <td class=xl27 width=223 style='border-top:none;border-left:none;width:167pt'><?php echo W_I_DB($typeid,$tplid,'_17_28_7',200,25)?></td>
 </tr>
 <tr class=xl24 height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl26 width=138 style='height:30.0pt;border-top:none;
  width:104pt'>合同类型</td>
  <td class=xl27 width=145 style='border-top:none;border-left:none;width:109pt'><?php echo W_I_DB($typeid,$tplid,'_17_28_8',130,25)?></td>
  <td class=xl26 width=144 style='border-top:none;border-left:none;width:108pt'>合同期限</td>
  <td class=xl27 width=223 style='border-top:none;border-left:none;width:167pt'><?php echo W_I_DB($typeid,$tplid,'_17_28_9',200,25)?></td>
 </tr>
 <tr class=xl24 height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl26 width=138 style='height:30.0pt;border-top:none;
  width:104pt'>合同金额</td>
  <td colspan=3 class=xl27 width=512 style='border-left:none;width:384pt'><?php echo W_I_DB($typeid,$tplid,'_17_28_10',490,25)?></td>
 </tr>
 <tr class=xl24 height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl26 width=138 style='height:30.0pt;border-top:none;
  width:104pt'>大写</td>
  <td colspan=3 class=xl27 width=512 style='border-left:none;width:384pt'><?php echo W_I_DB($typeid,$tplid,'_17_28_11',490,25)?></td>
 </tr>
 <tr class=xl24 height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl28 width=138 style='height:30.0pt;border-top:none;
  width:104pt'>付款方式</td>
  <td colspan=3 class=xl33 width=512 style='border-left:none;width:384pt'><?php echo W_I_DB($typeid,$tplid,'_17_28_12',490,25)?></td>
 </tr>
 <tr class=xl24 height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl32 width=138 style='height:20.1pt;width:104pt'>项目内容说明</td>
  <td class=xl30 width=145 style='width:109pt'>　</td>
  <td class=xl30 width=144 style='width:108pt'>　</td>
  <td class=xl31 width=223 style='width:167pt'>　</td>
 </tr>
 <tr class=xl24 height=66 style='mso-height-source:userset;height:50.1pt'>
  <td colspan=4 height=66 class=xl37 width=650 style='border-right:.5pt solid black;
  height:50.1pt;width:488pt'><?php echo W_I_DB($typeid,$tplid,'_17_28_13',630,25)?></td>
 </tr>
 <tr class=xl24 height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl29 width=138 style='height:30.0pt;width:104pt'>备注</td>
  <td colspan=3 class=xl34 width=512 style='border-right:.5pt solid black;
  border-left:none;width:384pt'><?php echo W_I_DB($typeid,$tplid,'_17_28_14',490,25)?></td>
 </tr>
 <tr class=xl24 height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl26 width=138 style='height:30.0pt;border-top:none;
  width:104pt'>部门负责人审批</td>
  <td class=xl27 width=145 style='border-top:none;border-left:none;width:109pt'>　</td>
  <td class=xl26 width=144 style='border-top:none;border-left:none;width:108pt'>运营负责人审批</td>
  <td class=xl27 width=223 style='border-top:none;border-left:none;width:167pt'>　</td>
 </tr>
 <tr class=xl24 height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl26 width=138 style='height:30.0pt;border-top:none;
  width:104pt'>财务负责人审批</td>
  <td class=xl27 width=145 style='border-top:none;border-left:none;width:109pt'>　</td>
  <td class=xl26 width=144 style='border-top:none;border-left:none;width:108pt'>总经理审批</td>
  <td class=xl27 width=223 style='border-top:none;border-left:none;width:167pt'>　</td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=138 style='width:104pt'></td>
  <td width=145 style='width:109pt'></td>
  <td width=144 style='width:108pt'></td>
  <td width=223 style='width:167pt'></td>
 </tr>
 <![endif]>
</table>
<?php
include_once('footer.php');
?>