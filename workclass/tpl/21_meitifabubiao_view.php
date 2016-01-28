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
  <o:LastSaved>2013-04-10T09:49:06Z</o:LastSaved>
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
	font-size:24.0pt;
	text-align:center;
	vertical-align:middle;}
.xl25
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:silver;
	mso-pattern:auto none;}
.xl26
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	white-space:normal;}
.xl27
	{mso-style-parent:style0;
	vertical-align:middle;
	border:.5pt solid windowtext;
	white-space:normal;}
.xl28
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
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
     <x:LeftColumnVisible>2</x:LeftColumnVisible>
     <x:Panes>
      <x:Pane>
       <x:Number>3</x:Number>
       <x:ActiveRow>1</x:ActiveRow>
       <x:ActiveCol>8</x:ActiveCol>
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

$htmls.="<table x:str border=0 cellpadding=0 cellspacing=0 width=1289 style='border-collapse:
 collapse;table-layout:fixed;width:968pt'>
 <col width=117 style='mso-width-source:userset;mso-width-alt:3744;width:88pt'>
 <col width=144 style='mso-width-source:userset;mso-width-alt:4608;width:108pt'>
 <col width=131 style='mso-width-source:userset;mso-width-alt:4192;width:98pt'>
 <col width=117 style='mso-width-source:userset;mso-width-alt:3744;width:88pt'>
 <col width=108 style='mso-width-source:userset;mso-width-alt:3456;width:81pt'>
 <col width=221 style='mso-width-source:userset;mso-width-alt:7072;width:166pt'>
 <col width=206 style='mso-width-source:userset;mso-width-alt:6592;width:155pt'>
 <col width=110 style='mso-width-source:userset;mso-width-alt:3520;width:83pt'>
 <col width=135 style='mso-width-source:userset;mso-width-alt:4320;width:101pt'>
 <tr class=xl24 height=80 style='mso-height-source:userset;height:60.0pt'>
  <td colspan=9 height=80 class=xl24 width=1289 style='height:60.0pt;
  width:968pt'>媒体发布金额明细表</td>
 </tr>";

$htmls.="<tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl25 style='height:30.0pt'>媒体编号</td>
  <td class=xl25 style='border-left:none'>媒体位置</td>
  <td class=xl25 style='border-left:none'>合同编号</td>
  <td class=xl25 style='border-left:none'>所属客户</td>
  <td class=xl25 style='border-left:none'>合同类型</td>
  <td class=xl25 style='border-left:none'>客户名称</td>
  <td class=xl25 style='border-left:none'>制作内容</td>
  <td class=xl25 style='border-left:none'>合同金额</td>
  <td class=xl25 style='border-left:none'>发布期限</td>
 </tr>";
$a1=unserialize(work_db($id,'_14_21_a1'));
$a2=unserialize(work_db($id,'_14_21_a2'));
$a3=unserialize(work_db($id,'_14_21_a3'));
$a4=unserialize(work_db($id,'_14_21_a4'));
$a5=unserialize(work_db($id,'_14_21_a5'));
$a6=unserialize(work_db($id,'_14_21_a6'));
$a7=unserialize(work_db($id,'_14_21_a7'));
$a8=unserialize(work_db($id,'_14_21_a8'));
$a9=unserialize(work_db($id,'_14_21_a9'));
for($i=0;$i<15;$i++){ 
$htmls.="<tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl26 width=117 style='height:24.95pt;border-top:none;
  width:88pt'>".$a1[$i]."</td>
  <td class=xl27 width=144 style='border-top:none;border-left:none;width:108pt'>".$a2[$i]."</td>
  <td class=xl27 width=131 style='border-top:none;border-left:none;width:98pt'>".$a3[$i]."</td>
  <td class=xl27 width=117 style='border-top:none;border-left:none;width:88pt'>".$a4[$i]."</td>
  <td class=xl27 width=108 style='border-top:none;border-left:none;width:81pt'>".$a5[$i]."</td>
  <td class=xl27 width=221 style='border-top:none;border-left:none;width:166pt'>".$a6[$i]."</td>
  <td class=xl27 width=206 style='border-top:none;border-left:none;width:155pt'>".$a7[$i]."</td>
  <td class=xl27 width=110 style='border-top:none;border-left:none;width:83pt'>".$a8[$i]."</td>
  <td class=xl27 width=135 style='border-top:none;border-left:none;width:101pt'>".$a9[$i]."</td>
 </tr>";
}
$htmls.="<tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td colspan=4 height=40 class=xl28 width=509 style='height:30.0pt;width:382pt'>填报人：". work_db($id,'_14_21_1')."</td>
  <td colspan=5 class=xl28 width=780 style='width:586pt'>部门负责人审批:".w_p_v(71,$id,'name')."</td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=117 style='width:88pt'></td>
  <td width=144 style='width:108pt'></td>
  <td width=131 style='width:98pt'></td>
  <td width=117 style='width:88pt'></td>
  <td width=108 style='width:81pt'></td>
  <td width=221 style='width:166pt'></td>
  <td width=206 style='width:155pt'></td>
  <td width=110 style='width:83pt'></td>
  <td width=135 style='width:101pt'></td>
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