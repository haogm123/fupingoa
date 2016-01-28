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
	text-align:right;
	vertical-align:middle;}
.xl25
	{mso-style-parent:style0;
	font-size:24.0pt;
	text-align:center;
	vertical-align:middle;}
.xl26
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;}
.xl27
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	border:.5pt solid windowtext;}
.xl28
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:top;
	border:.5pt solid windowtext;}
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
       <x:ActiveRow>5</x:ActiveRow>
       <x:ActiveCol>4</x:ActiveCol>
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

<table x:str border=0 cellpadding=0 cellspacing=0 width=740 style='border-collapse:
 collapse;table-layout:fixed;width:556pt'>
 <col width=217 style='mso-width-source:userset;mso-width-alt:6944;width:163pt'>
 <col width=234 style='mso-width-source:userset;mso-width-alt:7488;width:176pt'>
 <col width=289 style='mso-width-source:userset;mso-width-alt:9248;width:217pt'>
 <tr height=80 style='mso-height-source:userset;height:60.0pt'>
  <td colspan=3 height=80 class=xl25 width=740 style='height:60.0pt;width:556pt'>付款申请单（费用）</td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td colspan=2 height=40 class=xl26 style='height:30.0pt; text-align:left;'>日期：<?php echo W_I_DB($typeid,$tplid,'_11_3_fs',200,20)?></td>
  <td height=40 class=xl26 style='height:30.0pt; text-align:right'>单号：<?php echo W_I_DB($typeid,$tplid,'_11_3_1213',200,20)?></td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl27 style='height:30.0pt'>申请人：<?php echo W_I_DB($typeid,$tplid,'_11_3_user',50,20)?></td>
  <td class=xl27 style='border-left:none'>部门：<?php echo W_I_DB($typeid,$tplid,'_11_3_dix',80,20)?></td>
  <td class=xl27 style='border-left:none'>请款类别：<?php echo W_I_DB($typeid,$tplid,'_11_3_type',200,20)?></td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl27 style='height:30.0pt;border-top:none'>项目：<?php echo W_I_DB($typeid,$tplid,'_11_3_pro',150,20)?></td>
  <td class=xl27 style='border-top:none;border-left:none'>合同编号：<?php echo W_I_DB($typeid,$tplid,'_11_3_number',140,20)?></td>
  <td class=xl27 style='border-top:none;border-left:none'>费用类别：<?php echo W_I_DB($typeid,$tplid,'_11_3_types',200,20)?></td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td colspan=2 height=40 class=xl27 style='height:30.0pt'>付款金额：<?php echo W_I_DB($typeid,$tplid,'_11_3_price',355,20)?></td>
  <td class=xl27 style='border-top:none;border-left:none'>大写：<?php echo W_I_DB($typeid,$tplid,'_11_3_prices',230,20)?></td>
 </tr>
 <tr height=121 style='mso-height-source:userset;height:90.75pt'>
  <td colspan=2 height=121 class=xl28 style='height:90.75pt'>付款说明：<?php echo W_I_DB($typeid,$tplid,'_11_3_note',440,20)?></td>
  <td class=xl27 style='border-top:none;border-left:none'>部门负责人审批：</td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td colspan=2 height=40 class=xl27 style='height:30.0pt'>付款单位：<?php echo W_I_DB($typeid,$tplid,'_11_3_company',355,20)?></td>
  <td class=xl27 style='border-top:none;border-left:none'>财务负责人审批：</td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td colspan=2 height=40 class=xl27 style='height:30.0pt'>收款单位：<?php echo W_I_DB($typeid,$tplid,'_11_3_myyp',355,20)?></td>
  <td class=xl27 style='border-top:none;border-left:none'>总经理审批：</td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td colspan=3 height=40 class=xl24 style='height:30.0pt'></td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=217 style='width:163pt'></td>
  <td width=234 style='width:176pt'></td>
  <td width=289 style='width:217pt'></td>
 </tr>
 <![endif]>
</table>
<?php
include_once('footer.php');
?>