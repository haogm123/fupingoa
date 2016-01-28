<?php
include_once('head_view.php');


function xls_views($id,$uid){
$htmls.='<html xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:x="urn:schemas-microsoft-com:office:excel"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<meta name=ProgId content=Excel.Sheet>
<meta name=Generator content="Microsoft Excel 11">
<!--[if gte mso 9]><xml>
 <o:DocumentProperties>
  <o:Created>1996-12-17T01:32:42Z</o:Created>
  <o:LastSaved>2013-04-05T07:03:38Z</o:LastSaved>
  <o:Version>11.9999</o:Version>
 </o:DocumentProperties>
 <o:OfficeDocumentSettings>
  <o:RemovePersonalInformation/>
 </o:OfficeDocumentSettings>
</xml><![endif]-->
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
	background:silver;
	mso-pattern:auto none;}
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
	font-size:24.0pt;
	text-align:center;
	vertical-align:middle;}
.xl27
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;}
.xl28
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl29
	{mso-style-parent:style0;
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
       <x:ActiveRow>8</x:ActiveRow>
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

<body link=blue vlink=purple>';

$htmls.="<table x:str border=0 cellpadding=0 cellspacing=0 width=1293 style='border-collapse:
 collapse;table-layout:fixed;width:971pt'>
 <col width=108 style='mso-width-source:userset;mso-width-alt:3456;width:81pt'>
 <col width=193 style='mso-width-source:userset;mso-width-alt:6176;width:145pt'>
 <col width=84 style='mso-width-source:userset;mso-width-alt:2688;width:63pt'>
 <col width=89 style='mso-width-source:userset;mso-width-alt:2848;width:67pt'>
 <col width=213 style='mso-width-source:userset;mso-width-alt:6816;width:160pt'>
 <col width=75 style='mso-width-source:userset;mso-width-alt:2400;width:56pt'>
 <col width=114 style='mso-width-source:userset;mso-width-alt:3648;width:86pt'>
 <col width=185 style='mso-width-source:userset;mso-width-alt:5920;width:139pt'>
 <col width=160 style='mso-width-source:userset;mso-width-alt:5120;width:120pt'>
 <col width=72 style='width:54pt'>
 <tr height=80 style='mso-height-source:userset;height:60.0pt'>
  <td colspan=10 height=80 class=xl26 width=1293 style='height:60.0pt;
  width:971pt'>部门备用金使用情况月报表</td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td colspan=6 height=40 class=xl27 style='height:30.0pt'>部门：". work_db($id,'_11_8_1')."</td>
  <td colspan=4 class=xl27>填报人：". work_db($id,'_11_8_user')."</td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td colspan=10 height=40 class=xl27 style='height:30.0pt'>日期（日期区间）:". work_db($id,'_11_8_2')."</td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl24 style='height:30.0pt'>日期</td>
  <td class=xl24 style='border-left:none'>明细</td>
  <td class=xl24 style='border-left:none'>金额</td>
  <td class=xl24 style='border-left:none'>领用人</td>
  <td class=xl25 width=213 style='border-left:none;width:160pt'>结转日期<br>
    （进费用报销流程）</td>
  <td class=xl24 style='border-left:none'>是否报回</td>
  <td class=xl24 style='border-left:none'>回款日</td>
  <td class=xl24 style='border-left:none'>借方</td>
  <td class=xl24 style='border-left:none'>贷方</td>
  <td class=xl24 style='border-left:none'>余额</td>
 </tr>";
$a1=unserialize(work_db($id,'_11_8_a1'));
$a2=unserialize(work_db($id,'_11_8_a2'));
$a3=unserialize(work_db($id,'_11_8_a3'));
$a4=unserialize(work_db($id,'_11_8_a4'));
$a5=unserialize(work_db($id,'_11_8_a5'));
$a6=unserialize(work_db($id,'_11_8_a6'));
$a7=unserialize(work_db($id,'_11_8_a7'));
$a8=unserialize(work_db($id,'_11_8_a8'));
$a9=unserialize(work_db($id,'_11_8_a9'));
$a10=unserialize(work_db($id,'_11_8_a10'));
for($i=0;$i<15;$i++){

 $htmls.="<tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl29 width=108 style='height:24.95pt;border-top:none;
  width:81pt'>".$a1[$i]."</td>
  <td class=xl29 width=193 style='border-top:none;border-left:none;width:145pt'>".$a2[$i]."</td>
  <td class=xl29 width=84 style='border-top:none;border-left:none;width:63pt'>".$a3[$i]."</td>
  <td class=xl29 width=89 style='border-top:none;border-left:none;width:67pt'>".$a4[$i]."</td>
  <td class=xl29 width=213 style='border-top:none;border-left:none;width:160pt'>".$a5[$i]."</td>
  <td class=xl29 width=75 style='border-top:none;border-left:none;width:56pt'>".$a6[$i]."</td>
  <td class=xl29 width=114 style='border-top:none;border-left:none;width:86pt'>".$a7[$i]."</td>
  <td class=xl29 width=185 style='border-top:none;border-left:none;width:139pt'>".$a8[$i]."</td>
  <td class=xl29 width=160 style='border-top:none;border-left:none;width:120pt'>".$a9[$i]."</td>
  <td class=xl29 width=72 style='border-top:none;border-left:none;width:54pt'>".$a10[$i]."</td>

 </tr>";
}
$htmls.="
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td colspan=10 height=40 class=xl28 style='height:30.0pt'>财务审批：".w_p_v(45,$id,'name')."</td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=108 style='width:81pt'></td>
  <td width=193 style='width:145pt'></td>
  <td width=84 style='width:63pt'></td>
  <td width=89 style='width:67pt'></td>
  <td width=213 style='width:160pt'></td>
  <td width=75 style='width:56pt'></td>
  <td width=114 style='width:86pt'></td>
  <td width=185 style='width:139pt'></td>
  <td width=160 style='width:120pt'></td>
  <td width=72 style='width:54pt'></td>
 </tr>
 <![endif]>
</table>

</body>

</html>

";
return $htmls;
}?>



<!--内容部份 -->
<?php
$docs=trim(xls_views($row['id'],$row['uid']));
$Path = "data/excel/workclass/".$row['id'].".xls";
$fp = fopen($Path,"w"); 
fwrite($fp,$docs); 
fclose($fp);
echo $docs;
?>
<!--/内容部份 -->

<?php
include_once('footer_view.php');
?>