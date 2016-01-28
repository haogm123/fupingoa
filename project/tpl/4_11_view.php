<?php
include_once('head_view.php');


function xls_views($id,$uid,$title){
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
  <o:LastSaved>2013-05-06T02:57:41Z</o:LastSaved>
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
	text-align:left;
	vertical-align:middle;
	white-space:normal;}
.xl25
	{mso-style-parent:style0;
	font-size:20.0pt;
	text-align:center;
	vertical-align:middle;
	white-space:normal;}
.xl26
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	white-space:normal;}
.xl27
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
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

$htmls.="<table x:str border=0 cellpadding=0 cellspacing=0 width=1262 style='border-collapse:
 collapse;table-layout:fixed;width:948pt'>
 <col width=63 style='mso-width-source:userset;mso-width-alt:2016;width:47pt'>
 <col width=133 style='mso-width-source:userset;mso-width-alt:4256;width:100pt'>
 <col width=209 style='mso-width-source:userset;mso-width-alt:6688;width:157pt'>
 <col width=98 style='mso-width-source:userset;mso-width-alt:3136;width:74pt'>
 <col width=139 style='mso-width-source:userset;mso-width-alt:4448;width:104pt'>
 <col width=167 style='mso-width-source:userset;mso-width-alt:5344;width:125pt'>
 <col width=85 style='mso-width-source:userset;mso-width-alt:2720;width:64pt'>
 <col width=186 style='mso-width-source:userset;mso-width-alt:5952;width:140pt'>
 <col width=182 style='mso-width-source:userset;mso-width-alt:5824;width:137pt'>
 <tr height=80 style='mso-height-source:userset;height:60.0pt'>
  <td colspan=9 height=80 class=xl25 width=1262 style='height:60.0pt;
  width:948pt'>".project_db($id,'_4_11_2_date')."工程制作进度</td>
 </tr>
 <tr height=47 style='mso-height-source:userset;height:35.25pt'>
  <td height=47 class=xl26 width=63 style='height:35.25pt;width:47pt'>序号</td>
  <td class=xl26 width=133 style='border-left:none;width:100pt'>班组</td>
  <td class=xl26 width=209 style='border-left:none;width:157pt'>工作内容</td>
  <td class=xl26 width=98 style='border-left:none;width:74pt'>负责人</td>
  <td class=xl26 width=139 style='border-left:none;width:104pt'>实际工作人员</td>
  <td class=xl26 width=167 style='border-left:none;width:125pt'>外请人员</td>
  <td class=xl26 width=85 style='border-left:none;width:64pt'>是否完成<br>
    本日工作</td>
  <td class=xl26 width=186 style='border-left:none;width:140pt'>未完成情况</td>
  <td class=xl26 width=182 style='border-left:none;width:137pt'>其他备注</td>
 </tr>";
$m=0;
$a1=unserialize(project_db($id,'_4_11_2_a1'));
$a2=unserialize(project_db($id,'_4_11_2_a2'));
$a3=unserialize(project_db($id,'_4_11_2_a3'));
$a4=unserialize(project_db($id,'_4_11_2_a4'));
$a5=unserialize(project_db($id,'_4_11_2_a5'));
$a6=unserialize(project_db($id,'_4_11_2_a6'));
$a7=unserialize(project_db($id,'_4_11_2_a7'));
$a8=unserialize(project_db($id,'_4_11_2_a8'));
for($i=0;$i<15;$i++){
$m++;
$htmls.=" <tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl26 width=63 style='height:24.95pt;border-top:none;
  width:47pt'>".$m."</td>
  <td class=xl26 width=133 style='border-top:none;border-left:none;width:100pt'>".$a1[$i]."</td>
  <td class=xl26 width=209 style='border-top:none;border-left:none;width:157pt'>".$a2[$i]."</td>
  <td class=xl26 width=98 style='border-top:none;border-left:none;width:74pt'>".$a3[$i]."</td>
  <td class=xl26 width=139 style='border-top:none;border-left:none;width:104pt'>".$a4[$i]."</td>
  <td class=xl26 width=167 style='border-top:none;border-left:none;width:125pt'>".$a5[$i]."</td>
  <td class=xl26 width=85 style='border-top:none;border-left:none;width:64pt'>".$a6[$i]."</td>
  <td class=xl26 width=186 style='border-top:none;border-left:none;width:140pt'>".$a7[$i]."</td>
  <td class=xl26 width=182 style='border-top:none;border-left:none;width:137pt'>".$a8[$i]."</td>
 </tr>";
} 
$htmls.="<tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td colspan=4 height=33 class=xl27 width=503 style='height:24.95pt;
  width:378pt'>填报人：".get_realname($uid)."</td>
  <td colspan=5 class=xl24 style='mso-ignore:colspan'></td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=63 style='width:47pt'></td>
  <td width=133 style='width:100pt'></td>
  <td width=209 style='width:157pt'></td>
  <td width=98 style='width:74pt'></td>
  <td width=139 style='width:104pt'></td>
  <td width=167 style='width:125pt'></td>
  <td width=85 style='width:64pt'></td>
  <td width=186 style='width:140pt'></td>
  <td width=182 style='width:137pt'></td>
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
$docs=trim(xls_views($row['lid'],$row['uid'],$row['title']));
$Path = "data/excel/project/l_".$row['lid'].".xls";
$fp = fopen($Path,"w"); 
fwrite($fp,$docs); 
fclose($fp);
echo $docs;
?>
<!--/内容部份 -->

<?php
include_once('footer_view.php');
?>