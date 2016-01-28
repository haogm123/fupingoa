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
  <o:LastSaved>2013-04-16T02:29:49Z</o:LastSaved>
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
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl27
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl28
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
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
.xl30
	{mso-style-parent:style0;
	text-align:left;
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
     <x:LeftColumnVisible>5</x:LeftColumnVisible>
     <x:Panes>
      <x:Pane>
       <x:Number>3</x:Number>
       <x:ActiveRow>1</x:ActiveRow>
       <x:ActiveCol>17</x:ActiveCol>
       <x:RangeSelection>$R$2:$R$3</x:RangeSelection>
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

$htmls.="<table x:str border=0 cellpadding=0 cellspacing=0 width=1917 style='border-collapse:
 collapse;table-layout:fixed;width:1441pt'>
 <col width=88 style='mso-width-source:userset;mso-width-alt:2816;width:66pt'>
 <col width=146 style='mso-width-source:userset;mso-width-alt:4672;width:110pt'>
 <col width=178 style='mso-width-source:userset;mso-width-alt:5696;width:134pt'>
 <col width=129 style='mso-width-source:userset;mso-width-alt:4128;width:97pt'>
 <col width=124 style='mso-width-source:userset;mso-width-alt:3968;width:93pt'>
 <col width=84 style='mso-width-source:userset;mso-width-alt:2688;width:63pt'>
 <col width=80 style='mso-width-source:userset;mso-width-alt:2560;width:60pt'>
 <col width=101 style='mso-width-source:userset;mso-width-alt:3232;width:76pt'>
 <col width=132 style='mso-width-source:userset;mso-width-alt:4224;width:99pt'>
 <col width=102 style='mso-width-source:userset;mso-width-alt:3264;width:77pt'>
 <col width=96 style='mso-width-source:userset;mso-width-alt:3072;width:72pt'>
 <col width=91 style='mso-width-source:userset;mso-width-alt:2912;width:68pt'>
 <col width=86 style='mso-width-source:userset;mso-width-alt:2752;width:65pt'>
 <col width=89 style='mso-width-source:userset;mso-width-alt:2848;width:67pt'>
 <col width=84 style='mso-width-source:userset;mso-width-alt:2688;width:63pt'>
 <col width=82 style='mso-width-source:userset;mso-width-alt:2624;width:62pt'>
 <col width=79 style='mso-width-source:userset;mso-width-alt:2528;width:59pt'>
 <col width=146 style='mso-width-source:userset;mso-width-alt:4672;width:110pt'>
 <tr height=80 style='mso-height-source:userset;height:60.0pt'>
  <td colspan=18 height=80 class=xl31 width=1917 style='height:60.0pt;
  width:1441pt'>".work_db($id,'_19_48_1')."年<span style='mso-spacerun:yes'>".work_db($id,'_19_48_2')."</span>月份公务车行车记录</td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td rowspan=2 height=52 class=xl26 width=88 style='border-bottom:.5pt solid black;
  height:40.2pt;border-top:none;width:66pt'>日期</td>
  <td class=xl25 width=146 style='border-top:none;border-left:none;width:110pt'>用车</td>
  <td rowspan=2 class=xl26 width=178 style='border-bottom:.5pt solid black;
  border-top:none;width:134pt'>行程</td>
  <td rowspan=2 class=xl26 width=129 style='border-bottom:.5pt solid black;
  border-top:none;width:97pt'>合同号/管理</td>
  <td rowspan=2 class=xl26 width=124 style='border-bottom:.5pt solid black;
  border-top:none;width:93pt'>用车部门</td>
  <td rowspan=2 class=xl26 width=84 style='border-bottom:.5pt solid black;
  border-top:none;width:63pt'>用车人</td>
  <td rowspan=2 class=xl26 width=80 style='border-bottom:.5pt solid black;
  border-top:none;width:60pt'>司机</td>
  <td rowspan=2 class=xl26 width=101 style='border-bottom:.5pt solid black;
  border-top:none;width:76pt'>入部门</td>
  <td rowspan=2 class=xl26 width=132 style='border-bottom:.5pt solid black;
  border-top:none;width:99pt'>车牌号</td>
  <td colspan=2 class=xl25 width=198 style='border-left:none;width:149pt'>时间</td>
  <td colspan=2 class=xl25 width=177 style='border-left:none;width:133pt'>公里数</td>
  <td class=xl25 width=89 style='border-top:none;border-left:none;width:67pt'>里程数</td>
  <td class=xl25 width=84 style='border-top:none;border-left:none;width:63pt'>加油前</td>
  <td rowspan=2 class=xl26 width=82 style='border-bottom:.5pt solid black;
  border-top:none;width:62pt'>加油金额</td>
  <td class=xl25 width=79 style='border-top:none;border-left:none;width:59pt'>加油量</td>
  <td rowspan=2 class=xl26 width=146 style='border-bottom:.5pt solid black;
  border-top:none;width:110pt'>卡号</td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl25 width=146 style='height:20.1pt;border-top:none;
  border-left:none;width:110pt'>事由</td>
  <td class=xl25 width=102 style='border-top:none;border-left:none;width:77pt'>出车</td>
  <td class=xl25 width=96 style='border-top:none;border-left:none;width:72pt'>收车</td>
  <td class=xl25 width=91 style='border-top:none;border-left:none;width:68pt'>出车</td>
  <td class=xl25 width=86 style='border-top:none;border-left:none;width:65pt'>收车</td>
  <td class=xl25 width=89 style='border-top:none;border-left:none;width:67pt'>（公里）</td>
  <td class=xl25 width=84 style='border-top:none;border-left:none;width:63pt'>公里数</td>
  <td class=xl25 width=79 style='border-top:none;border-left:none;width:59pt'>（升）</td>
 </tr>";
$m=0;
$a1=unserialize(work_db($id,'_19_48_a1'));
$a2=unserialize(work_db($id,'_19_48_a2'));
$a3=unserialize(work_db($id,'_19_48_a3'));
$a4=unserialize(work_db($id,'_19_48_a4'));
$a5=unserialize(work_db($id,'_19_48_a5'));
$a6=unserialize(work_db($id,'_19_48_a6'));
$a7=unserialize(work_db($id,'_19_48_a7'));
$a8=unserialize(work_db($id,'_19_48_a8'));
$a9=unserialize(work_db($id,'_19_48_a9'));
$a10=unserialize(work_db($id,'_19_48_a10'));
$a11=unserialize(work_db($id,'_19_48_a11'));
$a12=unserialize(work_db($id,'_19_48_a12'));
$a13=unserialize(work_db($id,'_19_48_a13'));
$a14=unserialize(work_db($id,'_19_48_a14'));
$a15=unserialize(work_db($id,'_19_48_a15'));
$a16=unserialize(work_db($id,'_19_48_a16'));
$a17=unserialize(work_db($id,'_19_48_a17'));
$a18=unserialize(work_db($id,'_19_48_a18'));
for($i=0;$i<15;$i++){
$m++;
$htmls.="<tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl24 width=88 style='height:24.95pt;border-top:none;
  width:66pt'>".$a1[$i]."</td>
  <td class=xl24 width=146 style='border-top:none;border-left:none;width:110pt'>".$a2[$i]."</td>
  <td class=xl24 width=178 style='border-top:none;border-left:none;width:134pt'>".$a3[$i]."</td>
  <td class=xl24 width=129 style='border-top:none;border-left:none;width:97pt'>".$a4[$i]."</td>
  <td class=xl24 width=124 style='border-top:none;border-left:none;width:93pt'>".$a5[$i]."</td>
  <td class=xl24 width=84 style='border-top:none;border-left:none;width:63pt'>".$a6[$i]."</td>
  <td class=xl24 width=80 style='border-top:none;border-left:none;width:60pt'>".$a7[$i]."</td>
  <td class=xl24 width=101 style='border-top:none;border-left:none;width:76pt'>".$a8[$i]."</td>
  <td class=xl24 width=132 style='border-top:none;border-left:none;width:99pt'>".$a9[$i]."</td>
  <td class=xl24 width=102 style='border-top:none;border-left:none;width:77pt'>".$a10[$i]."</td>
  <td class=xl24 width=96 style='border-top:none;border-left:none;width:72pt'>".$a11[$i]."</td>
  <td class=xl24 width=91 style='border-top:none;border-left:none;width:68pt'>".$a12[$i]."</td>
  <td class=xl24 width=86 style='border-top:none;border-left:none;width:65pt'>".$a13[$i]."</td>
  <td class=xl24 width=89 style='border-top:none;border-left:none;width:67pt'>".$a14[$i]."</td>
  <td class=xl24 width=84 style='border-top:none;border-left:none;width:63pt'>".$a15[$i]."</td>
  <td class=xl24 width=82 style='border-top:none;border-left:none;width:62pt'>".$a16[$i]."</td>
  <td class=xl24 width=79 style='border-top:none;border-left:none;width:59pt'>".$a17[$i]."</td>
  <td class=xl24 width=146 style='border-top:none;border-left:none;width:110pt'>".$a18[$i]."</td>
 </tr>";
}
$htmls.="<tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td colspan=3 height=33 class=xl28 width=412 style='border-right:.5pt solid black;
  height:24.95pt;width:310pt'>部门负责人审批：".w_p_v(155,$id,'name')."</td>
  <td colspan=15 class=xl28 width=1505 style='border-right:.5pt solid black;
  border-left:none;width:1131pt'>行政负责人审批：".w_p_v(156,$id,'name')."</td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=88 style='width:66pt'></td>
  <td width=146 style='width:110pt'></td>
  <td width=178 style='width:134pt'></td>
  <td width=129 style='width:97pt'></td>
  <td width=124 style='width:93pt'></td>
  <td width=84 style='width:63pt'></td>
  <td width=80 style='width:60pt'></td>
  <td width=101 style='width:76pt'></td>
  <td width=132 style='width:99pt'></td>
  <td width=102 style='width:77pt'></td>
  <td width=96 style='width:72pt'></td>
  <td width=91 style='width:68pt'></td>
  <td width=86 style='width:65pt'></td>
  <td width=89 style='width:67pt'></td>
  <td width=84 style='width:63pt'></td>
  <td width=82 style='width:62pt'></td>
  <td width=79 style='width:59pt'></td>
  <td width=146 style='width:110pt'></td>
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