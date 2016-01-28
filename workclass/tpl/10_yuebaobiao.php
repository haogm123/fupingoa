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

<body link=blue vlink=purple>

<table x:str border=0 cellpadding=0 cellspacing=0 width=1099 style='border-collapse:
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
  <td colspan=4 height=40 class=xl45 style='height:30.0pt'>日期：<?php echo W_I_DB($typeid,$tplid,'_12_10_1',200,20)?></td>
  <td colspan=3 class=xl26 style='mso-ignore:colspan'></td>
  <td colspan=3 class=xl44>制表人：<?php echo get_realname($_USER->id)?></td>
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
 </tr>
 
 
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td rowspan=6 height=198 class=xl39 style='height:149.7pt;border-top:none'>月结</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a1',160,25)?></td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a2',90,25)?></td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a3',80,25)?></td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a4',80,25)?></td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a5',80,25)?></td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a6',80,25)?></td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a7',80,25)?></td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a8',80,25)?></td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a9',140,25)?></td>
 </tr>
<?php
for($i=0;$i<5;$i++){
?>
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl33 style='height:24.95pt;border-top:none;border-left:
  none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a1',160,25)?></td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a2',90,25)?></td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a3',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a4',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a5',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a6',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a7',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a8',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a9',140,25)?>　</td>
 </tr>
 <?php }?>
 
 
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl32 style='height:24.95pt;border-top:none'>月结小计</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a1',160,25)?></td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a2',90,25)?></td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a3',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a4',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a5',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a6',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a7',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a8',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a9',140,25)?>　</td>
 </tr>
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td rowspan=15 height=462 class=xl40 style='height:349.3pt;border-top:none'>现金</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a1',160,25)?></td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a2',90,25)?></td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a3',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a4',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a5',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a6',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a7',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a8',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a9',140,25)?>　</td>
 </tr>
 
<?php
for($i=0;$i<14;$i++){
?>
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td class=xl33 style='height:24.95pt;border-top:none;border-left:
  none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a1',160,25)?></td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a2',90,25)?></td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a3',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a4',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a5',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a6',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a7',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a8',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a9',140,25)?>　</td>
 </tr>
<?php }?>
 
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td rowspan=9 height=297 class=xl41 style='height:224.55pt;border-top:none'>支票</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a1',160,25)?></td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a2',90,25)?></td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a3',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a4',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a5',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a6',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a7',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a8',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a9',140,25)?>　</td>
 </tr>
 <?php
for($i=0;$i<8;$i++){
?>
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td class=xl33 style='height:24.95pt;border-top:none;border-left:
  none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a1',160,25)?></td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a2',90,25)?></td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a3',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a4',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a5',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a6',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a7',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a8',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a9',140,25)?>　</td>
 </tr>
<?php }?>
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td rowspan=2 height=66 class=xl42 style='height:49.9pt;border-top:none'>电汇</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a1',160,25)?></td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a2',90,25)?></td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a3',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a4',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a5',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a6',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a7',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a8',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a9',140,25)?>　</td>
 </tr>
  <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td class=xl33 style='height:24.95pt;border-top:none;border-left:
  none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a1',160,25)?></td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a2',90,25)?></td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a3',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a4',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a5',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a6',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a7',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a8',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a9',140,25)?>　</td>
 </tr>
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td rowspan=3 height=99 class=xl36 style='border-bottom:.5pt solid black;
  height:74.85pt;border-top:none'>租赁</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a1',160,25)?></td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a2',90,25)?></td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a3',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a4',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a5',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a6',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a7',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a8',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a9',140,25)?>　</td>
 </tr>
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td class=xl33 style='height:24.95pt;border-top:none;border-left:
  none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a1',160,25)?></td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a2',90,25)?></td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a3',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a4',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a5',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a6',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a7',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a8',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a9',140,25)?>　</td>
 </tr>
  <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td class=xl33 style='height:24.95pt;border-top:none;border-left:
  none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a1',160,25)?></td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a2',90,25)?></td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a3',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a4',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a5',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a6',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a7',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a8',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a9',140,25)?>　</td>
 </tr>
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td rowspan=2 height=66 class=xl35 width=95 style='height:49.9pt;border-top:
  none;width:71pt'>现金支票<br>
    电汇租赁</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a1',160,25)?></td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a2',90,25)?></td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a3',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a4',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a5',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a6',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a7',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a8',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a9',140,25)?>　</td>
 </tr>
  <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td class=xl33 style='height:24.95pt;border-top:none;border-left:
  none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a1',160,25)?></td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a2',90,25)?></td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a3',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a4',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a5',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a6',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a7',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a8',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a9',140,25)?>　</td>
 </tr>
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl32 style='height:24.95pt;border-top:none'>总计</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a1',160,25)?></td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a2',90,25)?></td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a3',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a4',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a5',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a6',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a7',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a8',80,25)?>　</td>
  <td class=xl33 style='border-top:none;border-left:none'><?php echo W_I_DB($typeid,$tplid,'_12_10_a9',140,25)?>　</td>
 </tr>
 <tr class=xl25 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td colspan=3 height=33 class=xl34 style='height:24.95pt'>部门负责人审批</td>
  <td colspan=4 class=xl34>财务负责人审批</td>
  <td colspan=3 class=xl34>总经理审批</td>
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
<?php
include_once('footer.php');
?>