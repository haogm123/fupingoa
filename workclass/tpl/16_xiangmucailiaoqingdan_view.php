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
<link rel=File-List href="项目材料清单.files/filelist.xml">
<link rel=Edit-Time-Data href="项目材料清单.files/editdata.mso">
<link rel=OLE-Object-Data href="项目材料清单.files/oledata.mso">
<!--[if gte mso 9]><xml>
 <o:DocumentProperties>
  <o:Created>1996-12-17T01:32:42Z</o:Created>
  <o:LastSaved>2013-03-31T07:22:00Z</o:LastSaved>
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
	font-size:14.0pt;}
.xl25
	{mso-style-parent:style0;
	font-size:14.0pt;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;}
.xl26
	{mso-style-parent:style0;
	font-size:14.0pt;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	white-space:normal;}
.xl27
	{mso-style-parent:style0;
	font-size:14.0pt;
	vertical-align:middle;
	border:.5pt solid windowtext;}
.xl28
	{mso-style-parent:style0;
	font-size:14.0pt;
	text-align:left;
	vertical-align:middle;
	border:.5pt solid windowtext;}
.xl29
	{mso-style-parent:style0;
	font-size:24.0pt;
	text-align:center;
	vertical-align:middle;}
.xl30
	{mso-style-parent:style0;
	font-size:14.0pt;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;}
.xl31
	{mso-style-parent:style0;
	font-size:14.0pt;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl32
	{mso-style-parent:style0;
	font-size:14.0pt;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
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
</head>';

$htmls.="<body link=blue vlink=purple>";

$htmls.="<table x:str border=0 cellpadding=0 cellspacing=0 width=806 style='border-collapse:
 collapse;table-layout:fixed;width:605pt'>
 <col width=171 style='mso-width-source:userset;mso-width-alt:5472;width:128pt'>
 <col width=218 style='mso-width-source:userset;mso-width-alt:6976;width:164pt'>
 <col width=168 style='mso-width-source:userset;mso-width-alt:5376;width:126pt'>
 <col width=249 style='mso-width-source:userset;mso-width-alt:7968;width:187pt'>
 <tr height=80 style='mso-height-source:userset;height:60.0pt'>
  <td colspan=4 height=80 class=xl29 width=806 style='height:60.0pt;width:605pt'>项目材料清单</td>
 </tr>
 <tr class=xl24 height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl25 style='height:30.0pt'>项目名称</td>
  <td class=xl27 style='border-left:none'>".work_db($id,'_12_16_name')."</td>
  <td class=xl26 width=168 style='border-left:none;width:126pt'>日期</td>
  <td class=xl27 style='border-left:none'>".work_db($id,'_12_16_date')."</td>
 </tr>
 <tr class=xl24 height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl25 style='height:30.0pt;border-top:none'>合同编号</td>
  <td class=xl27 style='border-top:none;border-left:none'>". work_db($id,'_12_16_number')."</td>
  <td class=xl26 width=168 style='border-top:none;border-left:none;width:126pt'>项目地点</td>
  <td class=xl27 style='border-top:none;border-left:none'>". work_db($id,'_12_16_address')."</td>
 </tr>
 <tr class=xl24 height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl25 style='height:30.0pt;border-top:none'>项目类型</td>
  <td colspan=3 class=xl30 style='border-right:.5pt solid black;border-left:
  none'>". work_db($id,'_12_16_type')."</td>
 </tr>
 <tr class=xl24 height=123 style='mso-height-source:userset;height:92.25pt'>
  <td height=123 class=xl25 style='height:92.25pt;border-top:none'>所需材料清单</td>
  <td colspan=3 class=xl30 style='border-right:.5pt solid black;border-left:
  none'>". work_db($id,'_12_16_content')."</td>
 </tr>
 <tr class=xl24 height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl25 style='height:30.0pt;border-top:none'>填报人</td>
  <td class=xl28 style='border-top:none;border-left:none'>". get_realname($uid)."</td>
  <td class=xl26 width=168 style='border-top:none;border-left:none;width:126pt'>部门负责人审批</td>
  <td class=xl27 style='border-top:none;border-left:none'>
  ".w_p_v(10,$id,'name')."
  </td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=171 style='width:128pt'></td>
  <td width=218 style='width:164pt'></td>
  <td width=168 style='width:126pt'></td>
  <td width=249 style='width:187pt'></td>
 </tr>
 <![endif]>
</table> 


</body>

</html>";
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