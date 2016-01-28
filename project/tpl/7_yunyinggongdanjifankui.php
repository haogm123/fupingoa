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
	text-align:center;}
.xl66
	{mso-style-parent:style0;
	text-align:center;
	border:.5pt solid windowtext;
	white-space:normal;}
.xl67
	{mso-style-parent:style0;
	text-align:left;
	border:.5pt solid windowtext;
	white-space:normal;}
.xl68
	{mso-style-parent:style0;
	font-size:14.0pt;
	font-weight:700;
	text-align:center;
	white-space:normal;}
.xl69
	{mso-style-parent:style0;
	text-align:center;
	white-space:normal;}
.xl70
	{mso-style-parent:style0;
	font-weight:700;
	text-align:center;
	border:.5pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl71
	{mso-style-parent:style0;
	text-align:left;
	white-space:normal;}
.xl72
	{mso-style-parent:style0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl73
	{mso-style-parent:style0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl74
	{mso-style-parent:style0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl75
	{mso-style-parent:style0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl76
	{mso-style-parent:style0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl77
	{mso-style-parent:style0;
	text-align:left;
	border-top:.5pt solid windowtext;
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
     <x:DefaultRowHeight>559</x:DefaultRowHeight>
     <x:Unsynced/>
     <x:Print>
      <x:ValidPrinterInfo/>
      <x:PaperSizeIndex>9</x:PaperSizeIndex>
      <x:HorizontalResolution>200</x:HorizontalResolution>
      <x:VerticalResolution>200</x:VerticalResolution>
     </x:Print>
     <x:Selected/>
     <x:TopRowVisible>8</x:TopRowVisible>
     <x:Panes>
      <x:Pane>
       <x:Number>3</x:Number>
       <x:ActiveRow>15</x:ActiveRow>
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
</xml><![endif]--><!--[if gte mso 9]><xml>
 <o:shapedefaults v:ext="edit" spidmax="2049"/>
</xml><![endif]-->
</head>

<body link=blue vlink=purple>

<table x:str border=0 cellpadding=0 cellspacing=0 width=756 style='border-collapse:
 collapse;table-layout:fixed;width:568pt'>
 <col class=xl65 width=133 style='mso-width-source:userset;mso-width-alt:4256;
 width:100pt'>
 <col width=245 style='mso-width-source:userset;mso-width-alt:7840;width:184pt'>
 <col width=133 style='mso-width-source:userset;mso-width-alt:4256;width:100pt'>
 <col width=245 style='mso-width-source:userset;mso-width-alt:7840;width:184pt'>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td colspan=2 height=37 class=xl71 width=378 style='height:27.95pt;
  width:284pt'>公司：<?php echo P_I_DB($typeid,$tplid,'_4_7_3_1',220,25)?></td>
  <td colspan=2 class=xl71 width=378 style='width:284pt'>No.:<?php echo P_I_DB($typeid,$tplid,'_4_7_3_2',220,25)?></td>
 </tr>
 <tr height=66 style='mso-height-source:userset;height:50.1pt'>
  <td colspan=4 height=66 class=xl68 width=756 style='height:50.1pt;width:568pt'>运营设计任务书</td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td height=37 class=xl66 width=133 style='height:27.95pt;width:100pt'>填表日期</td>
  <td class=xl67 width=245 style='border-left:none;width:184pt'><?php echo P_I_DB($typeid,$tplid,'_4_7_3_3',220,25)?></td>
  <td class=xl66 width=133 style='border-left:none;width:100pt'>完成日期</td>
  <td class=xl67 width=245 style='border-left:none;width:184pt'><?php echo P_I_DB($typeid,$tplid,'_4_7_3_4',220,25)?></td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td height=37 class=xl66 width=133 style='height:27.95pt;border-top:none;
  width:100pt'>责任人</td>
  <td class=xl67 width=245 style='border-top:none;border-left:none;width:184pt'><?php echo P_I_DB($typeid,$tplid,'_4_7_3_5',220,25)?></td>
  <td class=xl69 width=133 style='width:100pt'>责任部门</td>
  <td class=xl67 width=245 style='border-top:none;width:184pt'><?php echo P_I_DB($typeid,$tplid,'_4_7_3_6',120,25)?></td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td height=37 class=xl66 width=133 style='height:27.95pt;border-top:none;
  width:100pt'>客户名称</td>
  <td class=xl67 width=245 style='border-top:none;border-left:none;width:184pt'><?php echo P_I_DB($typeid,$tplid,'_4_7_3_7',220,25)?></td>
  <td class=xl66 width=133 style='border-left:none;width:100pt'>项目名称地点</td>
  <td class=xl67 width=245 style='border-top:none;border-left:none;width:184pt'><?php echo P_I_DB($typeid,$tplid,'_4_7_3_8',220,25)?></td>
 </tr>
 <tr height=88 style='mso-height-source:userset;height:66.0pt'>
  <td height=88 class=xl66 width=133 style='height:66.0pt;border-top:none;
  width:100pt'>项目内容材质尺寸</td>
  <td colspan=3 class=xl72 width=623 style='border-right:.5pt solid black;
  border-left:none;width:468pt'><?php echo P_I_DB($typeid,$tplid,'_4_7_3_9',520,25)?></td>
 </tr>
 <tr height=88 style='mso-height-source:userset;height:66.0pt'>
  <td height=88 class=xl66 width=133 style='height:66.0pt;border-top:none;
  width:100pt'>提供材料</td>
  <td colspan=3 class=xl72 width=623 style='border-right:.5pt solid black;
  border-left:none;width:468pt'>现场照片:<?php echo P_I_DB($typeid,$tplid,'_4_7_3_10','',25)?><br>
    效 果 图:<?php echo P_I_DB($typeid,$tplid,'_4_7_3_11','',25)?><br>
    三 视 图:<?php echo P_I_DB($typeid,$tplid,'_4_7_3_12','',25)?></td>
 </tr>
 <tr height=88 style='mso-height-source:userset;height:66.0pt'>
  <td height=88 class=xl66 width=133 style='height:66.0pt;border-top:none;
  width:100pt'>责任部门<br>拟定价格<br>及要求</td>
  <td colspan=3 class=xl67 width=623 style='border-left:none;width:468pt'><?php echo P_I_DB($typeid,$tplid,'_4_7_3_13',520,25)?></td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td height=37 class=xl66 width=133 style='height:27.95pt;border-top:none;
  width:100pt'>部门负责人意见</td>
  <td colspan=3 class=xl67 width=623 style='border-left:none;width:468pt'>　</td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td height=37 class=xl66 width=133 style='height:27.95pt;border-top:none;
  width:100pt'>运营负责人接收</td>
  <td colspan=3 class=xl67 width=623 style='border-left:none;width:468pt'>　</td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td colspan=4 height=37 class=xl70 width=756 style='height:27.95pt;
  width:568pt'>运营反馈</td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td height=37 class=xl66 width=133 style='height:27.95pt;border-top:none;
  width:100pt'>任务分配运营人员</td>
  <td colspan=3 class=xl67 width=623 style='border-left:none;width:468pt'></td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td height=37 class=xl66 width=133 style='height:27.95pt;border-top:none;
  width:100pt'>工艺</td>
  <td colspan=3 class=xl67 width=623 style='border-left:none;width:468pt'></td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td height=37 class=xl66 width=133 style='height:27.95pt;border-top:none;
  width:100pt'>结构图纸</td>
  <td colspan=3 class=xl67 width=623 style='border-left:none;width:468pt'></td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td height=37 class=xl66 width=133 style='height:27.95pt;border-top:none;
  width:100pt'>材料清单</td>
  <td colspan=3 class=xl75 width=623 style='border-right:.5pt solid black;
  border-left:none;width:468pt'></td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=133 style='width:100pt'></td>
  <td width=245 style='width:184pt'></td>
  <td width=133 style='width:100pt'></td>
  <td width=245 style='width:184pt'></td>
 </tr>
 <![endif]>
</table>

<?php
include_once('footer.php');
?>