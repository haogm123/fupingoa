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
	border:.5pt solid windowtext;
	white-space:normal;}
.xl25
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	border:.5pt solid windowtext;
	white-space:normal;}
.xl26
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl27
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl28
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl29
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl30
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl31
	{mso-style-parent:style0;
	font-size:24.0pt;
	text-align:center;
	vertical-align:middle;}
.xl32
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	border-top:none;
	border-right:none;
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
       <x:ActiveRow>7</x:ActiveRow>
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

<table x:str border=0 cellpadding=0 cellspacing=0 width=789 style='border-collapse:
 collapse;table-layout:fixed;width:592pt'>
 <col width=109 style='mso-width-source:userset;mso-width-alt:3488;width:82pt'>
 <col width=143 style='mso-width-source:userset;mso-width-alt:4576;width:107pt'>
 <col width=126 style='mso-width-source:userset;mso-width-alt:4032;width:95pt'>
 <col width=144 style='mso-width-source:userset;mso-width-alt:4608;width:108pt'>
 <col width=120 style='mso-width-source:userset;mso-width-alt:3840;width:90pt'>
 <col width=147 style='mso-width-source:userset;mso-width-alt:4704;width:110pt'>
 <tr height=80 style='mso-height-source:userset;height:60.0pt'>
  <td colspan=6 height=80 class=xl31 width=789 style='height:60.0pt;width:592pt'>员工复职登记表</td>
 </tr>
 <tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td colspan=6 height=33 class=xl32 style='height:24.95pt'>编号:<?php echo W_I_DB($typeid,$tplid,'_19_46_1',200,25)?></td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl24 width=109 style='height:30.0pt;border-top:none;
  width:82pt'>姓名</td>
  <td class=xl24 width=143 style='border-top:none;border-left:none;width:107pt'><?php echo W_I_DB($typeid,$tplid,'_19_46_2',50,25)?></td>
  <td class=xl24 width=126 style='border-top:none;border-left:none;width:95pt'>员工编号</td>
  <td class=xl24 width=144 style='border-top:none;border-left:none;width:108pt'><?php echo W_I_DB($typeid,$tplid,'_19_46_3',120,25)?></td>
  <td class=xl24 width=120 style='border-top:none;border-left:none;width:90pt'>入司日期</td>
  <td class=xl24 width=147 style='border-top:none;border-left:none;width:110pt'><?php echo W_I_DB($typeid,$tplid,'_19_46_4',120,25)?></td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl24 width=109 style='height:30.0pt;border-top:none;
  width:82pt'>复职原因</td>
  <td colspan=5 class=xl26 width=680 style='border-right:.5pt solid black;
  border-left:none;width:510pt'><?php echo W_I_DB($typeid,$tplid,'_19_46_5',200,25)?></td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl24 width=109 style='height:30.0pt;border-top:none;
  width:82pt'>最后工作日</td>
  <td colspan=5 class=xl26 width=680 style='border-right:.5pt solid black;
  border-left:none;width:510pt'><?php echo W_I_DB($typeid,$tplid,'_19_46_6',665,25)?></td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl24 width=109 style='height:30.0pt;border-top:none;
  width:82pt'>　</td>
  <td colspan=2 class=xl29 width=269 style='border-right:.5pt solid black;
  border-left:none;width:202pt'>原</td>
  <td colspan=2 class=xl29 width=264 style='border-right:.5pt solid black;
  border-left:none;width:198pt'>复职</td>
  <td class=xl24 width=147 style='border-top:none;border-left:none;width:110pt'>备注</td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl24 width=109 style='height:30.0pt;border-top:none;
  width:82pt'>部门</td>
  <td colspan=2 class=xl29 width=269 style='border-right:.5pt solid black;
  border-left:none;width:202pt'><?php echo W_I_DB($typeid,$tplid,'_19_46_7',240,25)?></td>
  <td colspan=2 class=xl29 width=264 style='border-right:.5pt solid black;
  border-left:none;width:198pt'><?php echo W_I_DB($typeid,$tplid,'_19_46_8',240,25)?></td>
  <td class=xl24 width=147 style='border-top:none;border-left:none;width:110pt'><?php echo W_I_DB($typeid,$tplid,'_19_46_9',120,25)?></td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl24 width=109 style='height:30.0pt;border-top:none;
  width:82pt'>生效日期</td>
  <td colspan=5 class=xl26 width=680 style='border-right:.5pt solid black;
  border-left:none;width:510pt'><?php echo W_I_DB($typeid,$tplid,'_19_46_10',665,25)?></td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl24 width=109 style='height:30.0pt;border-top:none;
  width:82pt'>部门主管意见</td>
  <td class=xl25 width=143 style='border-top:none;border-left:none;width:107pt'>　</td>
  <td class=xl24 width=126 style='border-top:none;border-left:none;width:95pt'>行政部经理意见</td>
  <td class=xl25 width=144 style='border-top:none;border-left:none;width:108pt'>　</td>
  <td class=xl24 width=120 style='border-top:none;border-left:none;width:90pt'>总经理意见</td>
  <td class=xl25 width=147 style='border-top:none;border-left:none;width:110pt'>　</td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl24 width=109 style='height:30.0pt;border-top:none;
  width:82pt'>签字</td>
  <td class=xl25 width=143 style='border-top:none;border-left:none;width:107pt'>　</td>
  <td class=xl24 width=126 style='border-top:none;border-left:none;width:95pt'>签字</td>
  <td class=xl25 width=144 style='border-top:none;border-left:none;width:108pt'>　</td>
  <td class=xl24 width=120 style='border-top:none;border-left:none;width:90pt'>签字</td>
  <td class=xl25 width=147 style='border-top:none;border-left:none;width:110pt'>　</td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=109 style='width:82pt'></td>
  <td width=143 style='width:107pt'></td>
  <td width=126 style='width:95pt'></td>
  <td width=144 style='width:108pt'></td>
  <td width=120 style='width:90pt'></td>
  <td width=147 style='width:110pt'></td>
 </tr>
 <![endif]>
</table>
<?php
include_once('footer.php');
?>