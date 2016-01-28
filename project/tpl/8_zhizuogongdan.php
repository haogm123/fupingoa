<?php
include_once('head.php');
?>
<style>
<!--table
	{mso-displayed-decimal-separator:"\.";
	mso-displayed-thousand-separator:"\,";}
@page
	{margin:.75in .24in .75in .24in;
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
	text-align:left;
	white-space:normal;}
.xl66
	{mso-style-parent:style0;
	font-size:14.0pt;
	font-weight:700;
	text-align:center;
	white-space:normal;}
.xl67
	{mso-style-parent:style0;
	text-align:center;
	border:.5pt solid windowtext;
	white-space:normal;}
.xl68
	{mso-style-parent:style0;
	border:.5pt solid windowtext;
	white-space:normal;}
.xl69
	{mso-style-parent:style0;
	font-weight:700;
	text-align:left;
	border:.5pt solid windowtext;
	white-space:normal;}
.xl70
	{mso-style-parent:style0;
	text-align:center;
	white-space:normal;}
.xl71
	{mso-style-parent:style0;
	text-align:left;
	border:.5pt solid windowtext;
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
	font-size:10.0pt;
	text-align:left;
	border:.5pt solid windowtext;
	white-space:normal;}
.xl76
	{mso-style-parent:style0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl77
	{mso-style-parent:style0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl78
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
     <x:DefaultRowHeight>402</x:DefaultRowHeight>
     <x:Unsynced/>
     <x:Print>
      <x:ValidPrinterInfo/>
      <x:PaperSizeIndex>9</x:PaperSizeIndex>
      <x:HorizontalResolution>200</x:HorizontalResolution>
      <x:VerticalResolution>200</x:VerticalResolution>
     </x:Print>
     <x:Selected/>
     <x:TopRowVisible>9</x:TopRowVisible>
     <x:Panes>
      <x:Pane>
       <x:Number>3</x:Number>
       <x:ActiveRow>11</x:ActiveRow>
       <x:ActiveCol>1</x:ActiveCol>
       <x:RangeSelection>$B$12:$D$12</x:RangeSelection>
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

<table x:str border=0 cellpadding=0 cellspacing=0 width=810 style='border-collapse:
 collapse;table-layout:fixed;width:608pt'>
 <col width=157 style='mso-width-source:userset;mso-width-alt:5024;width:118pt'>
 <col width=248 style='mso-width-source:userset;mso-width-alt:7936;width:186pt'>
 <col width=157 style='mso-width-source:userset;mso-width-alt:5024;width:118pt'>
 <col width=248 style='mso-width-source:userset;mso-width-alt:7936;width:186pt'>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td colspan=2 height=37 class=xl65 width=405 style='height:27.95pt;
  width:304pt'>公司：<?php echo P_I_DB($typeid,$tplid,'_4_8_3_1',300,25)?></td>
  <td class=xl70 width=157 style='width:118pt'>No.:</td>
  <td class=xl65 width=248 style='width:186pt'><?php echo P_I_DB($typeid,$tplid,'_4_8_3_2',200,25)?></td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td colspan=4 height=37 class=xl66 width=810 style='height:27.95pt;
  width:608pt'>工程制作通知单</td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td height=37 class=xl67 width=157 style='height:27.95pt;width:118pt'>日期</td>
  <td class=xl71 width=248 style='border-left:none;width:186pt'><?php echo P_I_DB($typeid,$tplid,'_4_8_3_3',220,25)?></td>
  <td class=xl67 width=157 style='border-left:none;width:118pt'>经办业务员</td>
  <td class=xl71 width=248 style='border-left:none;width:186pt'><?php echo P_I_DB($typeid,$tplid,'_4_8_3_4',220,25)?></td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td height=37 class=xl67 width=157 style='height:27.95pt;border-top:none;
  width:118pt'>客户名称</td>
  <td class=xl71 width=248 style='border-top:none;border-left:none;width:186pt'><?php echo P_I_DB($typeid,$tplid,'_4_8_3_5',220,25)?></td>
  <td class=xl67 width=157 style='border-top:none;border-left:none;width:118pt'>地址</td>
  <td class=xl71 width=248 style='border-top:none;border-left:none;width:186pt'><?php echo P_I_DB($typeid,$tplid,'_4_8_3_6',220,25)?></td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td height=37 class=xl67 width=157 style='height:27.95pt;border-top:none;
  width:118pt'>电话</td>
  <td class=xl71 width=248 style='border-top:none;border-left:none;width:186pt'><?php echo P_I_DB($typeid,$tplid,'_4_8_3_7',220,25)?></td>
  <td class=xl67 width=157 style='border-top:none;border-left:none;width:118pt'>合同号</td>
  <td class=xl71 width=248 style='border-top:none;border-left:none;width:186pt'><?php echo P_I_DB($typeid,$tplid,'_4_8_3_8',220,25)?></td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td colspan=4 height=37 class=xl72 width=810 style='border-right:.5pt solid black;
  height:27.95pt;width:608pt'>客户是否已认定方案：<?php echo P_I_DB($typeid,$tplid,'_4_8_3_9',60,25)?></td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td colspan=4 height=37 class=xl69 width=810 style='height:27.95pt;
  width:608pt'>施工项目具体内容说明</td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td height=37 class=xl67 width=157 style='height:27.95pt;border-top:none;
  width:118pt'>制作项目名称</td>
  <td class=xl71 width=248 style='border-top:none;border-left:none;width:186pt'><?php echo P_I_DB($typeid,$tplid,'_4_8_3_10',220,25)?></td>
  <td class=xl67 width=157 style='border-top:none;border-left:none;width:118pt'>工期要求</td>
  <td class=xl71 width=248 style='border-top:none;border-left:none;width:186pt'><?php echo P_I_DB($typeid,$tplid,'_4_8_3_11',220,25)?></td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td height=37 class=xl67 width=157 style='height:27.95pt;border-top:none;
  width:118pt'>具体说明</td>
  <td colspan=3 class=xl72 width=653 style='border-right:.5pt solid black;
  border-left:none;width:490pt'><?php echo P_I_DB($typeid,$tplid,'_4_8_3_12',625,25)?></td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td height=37 class=xl67 width=157 style='height:27.95pt;border-top:none;
  width:118pt'>规格尺寸</td>
  <td class=xl71 width=248 style='border-top:none;border-left:none;width:186pt'><?php echo P_I_DB($typeid,$tplid,'_4_8_3_13',220,25)?></td>
  <td class=xl67 width=157 style='border-top:none;border-left:none;width:118pt'>施工地点</td>
  <td class=xl71 width=248 style='border-top:none;border-left:none;width:186pt'><?php echo P_I_DB($typeid,$tplid,'_4_8_3_14',220,25)?></td>
 </tr>
 <tr height=110 style='mso-height-source:userset;height:82.5pt'>
  <td height=110 class=xl67 width=157 style='height:82.5pt;border-top:none;
  width:118pt'>安装位置</td>
  <td class=xl71 width=248 style='border-top:none;border-left:none;width:186pt'><textarea name="_4_8_3_15" style="width:200px;font-size:14px;" rows="5"></textarea></td>
  <td class=xl67 width=157 style='border-top:none;border-left:none;width:118pt'>附件</td>
  <td class=xl75 width=248 style='border-top:none;border-left:none;width:186pt'
 >效果图<span
  style='mso-spacerun:yes'><input type="text" name="_4_8_3_16" class="BigInput" size="15" value="" /><a href="#" onClick="window.open ('admin.php?ac=uploadadd&fileurl=public&name=_4_8_3_16', 'newwindow', 'height=200, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=no, status=no')">+附件上传</a></span><br>
    <br>
    结构图<span style='mso-spacerun:yes'><input type="text" name="_4_8_3_17" class="BigInput" size="15" value="" /><a href="#" onClick="window.open ('admin.php?ac=uploadadd&fileurl=public&name=_4_8_3_17', 'newwindow', 'height=200, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=no, status=no')">+附件上传</a></span></td>
 </tr>
 <tr height=133 style='mso-height-source:userset;height:99.75pt'>
  <td height=133 class=xl67 width=157 style='height:99.75pt;border-top:none;
  width:118pt'>其他详细说明</td>
  <td colspan=3 class=xl72 width=653 style='border-right:.5pt solid black;
  border-left:none;width:490pt'><?php echo P_I_DB($typeid,$tplid,'_4_8_3_18',560,25)?></td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td height=37 class=xl67 width=157 style='height:27.95pt;border-top:none;
  width:118pt'>现场电源联系人</td>
  <td class=xl71 width=248 style='border-top:none;border-left:none;width:186pt'><?php echo P_I_DB($typeid,$tplid,'_4_8_3_19',220,25)?></td>
  <td class=xl67 width=157 style='border-top:none;border-left:none;width:118pt'>电话</td>
  <td class=xl71 width=248 style='border-top:none;border-left:none;width:186pt'><?php echo P_I_DB($typeid,$tplid,'_4_8_3_20',220,25)?></td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td height=37 class=xl67 width=157 style='height:27.95pt;border-top:none;
  width:118pt'>现场业务接洽人</td>
  <td class=xl71 width=248 style='border-top:none;border-left:none;width:186pt'><?php echo P_I_DB($typeid,$tplid,'_4_8_3_21',220,25)?></td>
  <td class=xl67 width=157 style='border-top:none;border-left:none;width:118pt'>电话</td>
  <td class=xl71 width=248 style='border-top:none;border-left:none;width:186pt'><?php echo P_I_DB($typeid,$tplid,'_4_8_3_22',220,25)?></td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td height=37 class=xl67 width=157 style='height:27.95pt;border-top:none;
  width:118pt'>现场勘查人</td>
  <td class=xl71 width=248 style='border-top:none;border-left:none;width:186pt'><?php echo P_I_DB($typeid,$tplid,'_4_8_3_23',220,25)?></td>
  <td class=xl67 width=157 style='border-top:none;border-left:none;width:118pt'>电话</td>
  <td class=xl71 width=248 style='border-top:none;border-left:none;width:186pt'><?php echo P_I_DB($typeid,$tplid,'_4_8_3_24',220,25)?></td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td height=37 class=xl67 width=157 style='height:27.95pt;border-top:none;
  width:118pt'>部门负责人审批</td>
  <td colspan=3 class=xl76 width=653 style='border-right:.5pt solid black;
  border-left:none;width:490pt'>　</td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td height=37 class=xl67 width=157 style='height:27.95pt;border-top:none;
  width:118pt'>工程制作负责人接收</td>
  <td colspan=3 class=xl76 width=653 style='border-right:.5pt solid black;
  border-left:none;width:490pt'>　</td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=157 style='width:118pt'></td>
  <td width=248 style='width:186pt'></td>
  <td width=157 style='width:118pt'></td>
  <td width=248 style='width:186pt'></td>
 </tr>
 <![endif]>
</table>

<?php
include_once('footer.php');
?>