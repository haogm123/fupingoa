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
	mso-footer-margin:.5in;
	mso-page-orientation:landscape;}
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
	font-size:24.0pt;}
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
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl28
	{mso-style-parent:style0;
	font-size:24.0pt;
	text-align:center;
	vertical-align:middle;
	white-space:normal;}
.xl29
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
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
     <x:Panes>
      <x:Pane>
       <x:Number>3</x:Number>
       <x:ActiveRow>5</x:ActiveRow>
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

<table x:str border=0 cellpadding=0 cellspacing=0 width=724 style='border-collapse:
 collapse;table-layout:fixed;width:544pt'>
 <col width=146 style='mso-width-source:userset;mso-width-alt:4672;width:110pt'>
 <col width=143 style='mso-width-source:userset;mso-width-alt:4576;width:107pt'>
 <col width=80 style='mso-width-source:userset;mso-width-alt:2560;width:60pt'>
 <col width=126 style='mso-width-source:userset;mso-width-alt:4032;width:95pt'>
 <col width=83 style='mso-width-source:userset;mso-width-alt:2656;width:62pt'>
 <col width=146 style='mso-width-source:userset;mso-width-alt:4672;width:110pt'>
 <tr class=xl25 height=80 style='mso-height-source:userset;height:60.0pt'>
  <td colspan=6 height=80 class=xl28 width=724 style='height:60.0pt;width:544pt'>员工扣款通知单</td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl24 width=146 style='height:30.0pt;width:110pt'>员工姓名</td>
  <td class=xl24 width=143 style='border-left:none;width:107pt'><?php echo W_I_DB($typeid,$tplid,'_19_47_1',50,25)?></td>
  <td class=xl24 width=80 style='border-left:none;width:60pt'>部门</td>
  <td class=xl24 width=126 style='border-left:none;width:95pt'><?php echo W_I_DB($typeid,$tplid,'_19_47_2',110,25)?></td>
  <td class=xl24 width=83 style='border-left:none;width:62pt'>职位</td>
  <td class=xl24 width=146 style='border-left:none;width:110pt'><?php echo W_I_DB($typeid,$tplid,'_19_47_3',120,25)?></td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl24 width=146 style='height:30.0pt;border-top:none;
  width:110pt'>扣款事由</td>
  <td colspan=5 class=xl26 width=578 style='border-right:.5pt solid black;
  border-left:none;width:434pt'><?php echo W_I_DB($typeid,$tplid,'_19_47_4',560,25)?></td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl24 width=146 style='height:30.0pt;border-top:none;
  width:110pt'>处理决定</td>
  <td colspan=5 class=xl26 width=578 style='border-right:.5pt solid black;
  border-left:none;width:434pt'><?php echo W_I_DB($typeid,$tplid,'_19_47_5',560,25)?></td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl24 width=146 style='height:30.0pt;border-top:none;
  width:110pt'>其他备注说明</td>
  <td colspan=5 class=xl26 width=578 style='border-right:.5pt solid black;
  border-left:none;width:434pt'><?php echo W_I_DB($typeid,$tplid,'_19_47_6',560,25)?></td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl24 width=146 style='height:30.0pt;border-top:none;
  width:110pt'>行政部发单</td>
  <td colspan=2 class=xl26 width=223 style='border-right:.5pt solid black;
  border-left:none;width:167pt'><?php echo W_I_DB($typeid,$tplid,'_19_47_7',200,25)?></td>
  <td class=xl24 width=126 style='border-top:none;border-left:none;width:95pt'>生效日期</td>
  <td colspan=2 class=xl26 width=229 style='border-right:.5pt solid black;
  border-left:none;width:172pt'><?php echo W_I_DB($typeid,$tplid,'_19_47_8',210,25)?></td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl24 width=146 style='height:30.0pt;border-top:none;
  width:110pt'>部门经理确认</td>
  <td colspan=2 class=xl26 width=223 style='border-right:.5pt solid black;
  border-left:none;width:167pt'>　</td>
  <td class=xl24 width=126 style='border-top:none;border-left:none;width:95pt'>日期</td>
  <td colspan=2 class=xl26 width=229 style='border-right:.5pt solid black;
  border-left:none;width:172pt'>　</td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl24 width=146 style='height:30.0pt;border-top:none;
  width:110pt'>总经理审批</td>
  <td colspan=2 class=xl26 width=223 style='border-right:.5pt solid black;
  border-left:none;width:167pt'>　</td>
  <td class=xl24 width=126 style='border-top:none;border-left:none;width:95pt'>日期</td>
  <td colspan=2 class=xl26 width=229 style='border-right:.5pt solid black;
  border-left:none;width:172pt'>　</td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl24 width=146 style='height:30.0pt;border-top:none;
  width:110pt'>申请员工确认签名</td>
  <td colspan=2 class=xl26 width=223 style='border-right:.5pt solid black;
  border-left:none;width:167pt'>　</td>
  <td class=xl24 width=126 style='border-top:none;border-left:none;width:95pt'>日期</td>
  <td colspan=2 class=xl26 width=229 style='border-right:.5pt solid black;
  border-left:none;width:172pt'>　</td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=146 style='width:110pt'></td>
  <td width=143 style='width:107pt'></td>
  <td width=80 style='width:60pt'></td>
  <td width=126 style='width:95pt'></td>
  <td width=83 style='width:62pt'></td>
  <td width=146 style='width:110pt'></td>
 </tr>
 <![endif]>
</table>

<?php
include_once('footer.php');
?>