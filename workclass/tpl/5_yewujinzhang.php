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
	font-size:24.0pt;
	text-align:center;
	vertical-align:middle;}
.xl25
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl26
	{mso-style-parent:style0;
	text-align:right;
	vertical-align:middle;}
.xl27
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	border:.5pt solid windowtext;
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
       <x:ActiveRow>9</x:ActiveRow>
       <x:RangeSelection>$A$10:$C$10</x:RangeSelection>
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

<table x:str border=0 cellpadding=0 cellspacing=0 width=836 style='border-collapse:
 collapse;table-layout:fixed;width:627pt'>
 <col width=324 style='mso-width-source:userset;mso-width-alt:10368;width:243pt'>
 <col width=231 style='mso-width-source:userset;mso-width-alt:7392;width:173pt'>
 <col width=281 style='mso-width-source:userset;mso-width-alt:8992;width:211pt'>
 <tr height=80 style='mso-height-source:userset;height:60.0pt'>
  <td colspan=3 height=80 class=xl24 width=836 style='height:60.0pt;width:627pt'>业务进账单</td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td colspan=3 height=40 class=xl25 style='height:30.0pt'>日期：<?php echo W_I_DB($typeid,$tplid,'_11_5_1',200,20)?></td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl27 width=324 style='height:30.0pt;border-top:none;
  width:243pt'>收款单位：<?php echo W_I_DB($typeid,$tplid,'_11_5_2',220,20)?></td>
  <td class=xl27 width=231 style='border-top:none;border-left:none;width:173pt'>收款部门：<?php echo W_I_DB($typeid,$tplid,'_11_5_3',60,20)?></td>
  <td class=xl27 width=281 style='border-top:none;border-left:none;width:211pt'>收款人：<?php echo W_I_DB($typeid,$tplid,'_11_5_user',100,20)?></td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td colspan=2 height=40 class=xl27 width=555 style='height:30.0pt;width:416pt'>付款单位：<?php echo W_I_DB($typeid,$tplid,'_11_5_4',430,20)?></td>
  <td class=xl27 width=281 style='border-top:none;border-left:none;width:211pt'>合同编号：<?php echo W_I_DB($typeid,$tplid,'_11_5_5',180,20)?></td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td colspan=3 height=40 class=xl27 width=836 style='height:30.0pt;width:627pt'>进账项目：<?php echo W_I_DB($typeid,$tplid,'_11_5_6',736,20)?></td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td colspan=3 height=40 class=xl27 width=836 style='height:30.0pt;width:627pt'>合同总额：<?php echo W_I_DB($typeid,$tplid,'_11_5_7',736,20)?></td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl27 width=324 style='height:30.0pt;border-top:none;
  width:243pt' x:str="本次收款金额（小写）： ">本次收款金额（小写）：<?php echo W_I_DB($typeid,$tplid,'_11_5_8',130,20)?></td>
  <td colspan=2 class=xl27 width=512 style='border-left:none;width:384pt'>金额大写：<?php echo W_I_DB($typeid,$tplid,'_11_5_9',413,20)?></td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl27 width=324 style='height:30.0pt;border-top:none;
  width:243pt'>回款比例：<?php echo W_I_DB($typeid,$tplid,'_11_5_10',227,20)?></td>
  <td class=xl27 width=231 style='border-top:none;border-left:none;width:173pt'>尾款：<?php echo W_I_DB($typeid,$tplid,'_11_5_11',170,20)?></td>
  <td class=xl27 width=281 style='border-top:none;border-left:none;width:211pt'>尾款到期日期：<?php echo W_I_DB($typeid,$tplid,'_11_5_12',150,20)?></td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl27 width=324 style='height:30.0pt;border-top:none;
  width:243pt'>财务部签收人员：<?php echo W_I_DB($typeid,$tplid,'_11_5_13',100,20)?></td>
  <td colspan=2 class=xl27 width=512 style='border-left:none;width:384pt'>签收日期：<?php echo W_I_DB($typeid,$tplid,'_11_5_14',414,20)?></td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td colspan=3 height=40 class=xl27 width=836 style='height:30.0pt;width:627pt'>备注：<?php echo W_I_DB($typeid,$tplid,'_11_5_15',770,20)?></td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td colspan=3 height=40 class=xl27 width=836 style='height:30.0pt;width:627pt'>部门负责人审批：</td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td colspan=3 height=40 class=xl27 width=836 style='height:30.0pt;width:627pt'>财务负责人审批：</td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td colspan=3 height=40 class=xl27 width=836 style='height:30.0pt;width:627pt'>总经理审批：</td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td colspan=3 height=40 class=xl26 style='height:30.0pt'
  x:str="经手人：                   "></td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=324 style='width:243pt'></td>
  <td width=231 style='width:173pt'></td>
  <td width=281 style='width:211pt'></td>
 </tr>
 <![endif]>
</table>

<?php
include_once('footer.php');
?>