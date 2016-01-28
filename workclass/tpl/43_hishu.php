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
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
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
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl28
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl29
	{mso-style-parent:style0;
	font-size:24.0pt;
	text-align:center;
	vertical-align:middle;}
.xl30
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	border-top:none;
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
     <x:TopRowVisible>3</x:TopRowVisible>
     <x:Panes>
      <x:Pane>
       <x:Number>3</x:Number>
       <x:ActiveRow>5</x:ActiveRow>
       <x:ActiveCol>3</x:ActiveCol>
       <x:RangeSelection>$D$6:$F$6</x:RangeSelection>
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

<table x:str border=0 cellpadding=0 cellspacing=0 width=653 style='border-collapse:
 collapse;table-layout:fixed;width:490pt'>
 <col width=108 style='mso-width-source:userset;mso-width-alt:3456;width:81pt'>
 <col width=107 style='mso-width-source:userset;mso-width-alt:3424;width:80pt'>
 <col width=123 style='mso-width-source:userset;mso-width-alt:3936;width:92pt'>
 <col width=94 style='mso-width-source:userset;mso-width-alt:3008;width:71pt'>
 <col width=93 style='mso-width-source:userset;mso-width-alt:2976;width:70pt'>
 <col width=128 style='mso-width-source:userset;mso-width-alt:4096;width:96pt'>
 <tr height=80 style='mso-height-source:userset;height:60.0pt'>
  <td colspan=6 height=80 class=xl29 width=653 style='height:60.0pt;width:490pt'>员工岗位变动通知书</td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td colspan=3 height=40 class=xl30 width=338 style='height:30.0pt;width:253pt'>编号：<?php echo W_I_DB($typeid,$tplid,'_19_43_1',200,25)?></td>
  <td colspan=3 style='mso-ignore:colspan'></td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl24 width=108 style='height:30.0pt;border-top:none;
  width:81pt'>姓名</td>
  <td class=xl24 width=107 style='border-top:none;border-left:none;width:80pt'><?php echo W_I_DB($typeid,$tplid,'_19_43_2',90,25)?></td>
  <td class=xl24 width=123 style='border-top:none;border-left:none;width:92pt'>性别</td>
  <td class=xl24 width=94 style='border-left:none;width:71pt'><?php echo W_I_DB($typeid,$tplid,'_19_43_3',200,25)?></td>
  <td class=xl24 width=93 style='border-left:none;width:70pt'>入司日期</td>
  <td class=xl24 width=128 style='border-left:none;width:96pt'><?php echo W_I_DB($typeid,$tplid,'_19_43_4',100,25)?></td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl24 width=108 style='height:30.0pt;border-top:none;
  width:81pt'>调动原因</td>
  <td colspan=5 class=xl26 width=545 style='border-right:.5pt solid black;
  border-left:none;width:409pt'><?php echo W_I_DB($typeid,$tplid,'_19_43_5',200,25)?></td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl24 width=108 style='height:30.0pt;border-top:none;
  width:81pt'>最后工作日</td>
  <td colspan=5 class=xl26 width=545 style='border-right:.5pt solid black;
  border-left:none;width:409pt'><?php echo W_I_DB($typeid,$tplid,'_19_43_6',530,25)?></td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl25 width=108 style='height:30.0pt;border-top:none;
  width:81pt'>　</td>
  <td class=xl25 width=107 style='border-top:none;border-left:none;width:80pt'>由</td>
  <td class=xl25 width=123 style='border-top:none;border-left:none;width:92pt'>去</td>
  <td colspan=3 class=xl25 width=315 style='border-left:none;width:237pt'>备注</td>
 </tr>
<?php
$content='部门,职位,等级,员工证号,薪金';
$content=explode(',',$content);
for($i=0;$i<5;$i++){
?>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl24 width=108 style='height:30.0pt;border-top:none;
  width:81pt'><?php echo $content[$i]?></td>
  <td class=xl24 width=107 style='border-top:none;border-left:none;width:80pt'><?php echo W_I_DB($typeid,$tplid,'_19_43_a1',100,25)?></td>
  <td class=xl24 width=123 style='border-top:none;border-left:none;width:92pt'><?php echo W_I_DB($typeid,$tplid,'_19_43_a2',110,25)?></td>
  <td colspan=3 class=xl24 width=315 style='border-left:none;width:237pt'><?php echo W_I_DB($typeid,$tplid,'_19_43_a3',300,25)?></td>
 </tr>
<?php }?>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl24 width=108 style='height:30.0pt;border-top:none;
  width:81pt'>生效日期</td>
  <td colspan=5 class=xl26 width=545 style='border-right:.5pt solid black;
  border-left:none;width:409pt'><?php echo W_I_DB($typeid,$tplid,'_19_43_7',530,25)?></td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl24 width=108 style='height:30.0pt;border-top:none;
  width:81pt'>原员工姓名</td>
  <td colspan=2 class=xl26 width=230 style='border-right:.5pt solid black;
  border-left:none;width:172pt'><?php echo W_I_DB($typeid,$tplid,'_19_43_8',100,25)?></td>
  <td class=xl24 width=94 style='border-top:none;border-left:none;width:71pt'>最后工作日</td>
  <td colspan=2 class=xl26 width=221 style='border-right:.5pt solid black;
  border-left:none;width:166pt'><?php echo W_I_DB($typeid,$tplid,'_19_43_9',205,25)?></td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl24 width=108 style='height:30.0pt;border-top:none;
  width:81pt'>部门主管意见</td>
  <td class=xl24 width=107 style='border-top:none;border-left:none;width:80pt'>　</td>
  <td class=xl24 width=123 style='border-top:none;border-left:none;width:92pt'>行政部经理意见</td>
  <td class=xl24 width=94 style='border-top:none;border-left:none;width:71pt'>　</td>
  <td class=xl24 width=93 style='border-top:none;border-left:none;width:70pt'>总经理意见</td>
  <td class=xl24 width=128 style='border-top:none;border-left:none;width:96pt'>　</td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl24 width=108 style='height:30.0pt;border-top:none;
  width:81pt'>签字</td>
  <td class=xl24 width=107 style='border-top:none;border-left:none;width:80pt'>　</td>
  <td class=xl24 width=123 style='border-top:none;border-left:none;width:92pt'>签字</td>
  <td class=xl24 width=94 style='border-top:none;border-left:none;width:71pt'>　</td>
  <td class=xl24 width=93 style='border-top:none;border-left:none;width:70pt'>签字</td>
  <td class=xl24 width=128 style='border-top:none;border-left:none;width:96pt'>　</td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=108 style='width:81pt'></td>
  <td width=107 style='width:80pt'></td>
  <td width=123 style='width:92pt'></td>
  <td width=94 style='width:71pt'></td>
  <td width=93 style='width:70pt'></td>
  <td width=128 style='width:96pt'></td>
 </tr>
 <![endif]>
</table>


<?php
include_once('footer.php');
?>