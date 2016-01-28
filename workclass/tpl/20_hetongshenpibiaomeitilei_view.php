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
  <o:LastPrinted>2013-04-10T09:34:37Z</o:LastPrinted>
  <o:Created>2006-09-13T11:21:51Z</o:Created>
  <o:LastSaved>2013-04-10T09:36:04Z</o:LastSaved>
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
	border:.5pt solid windowtext;}
.xl67
	{mso-style-parent:style0;
	font-size:24.0pt;
	text-align:center;}
.xl68
	{mso-style-parent:style0;
	text-align:left;
	border:.5pt solid windowtext;
	white-space:normal;}
.xl69
	{mso-style-parent:style0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl70
	{mso-style-parent:style0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl71
	{mso-style-parent:style0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl72
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl73
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl74
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl75
	{mso-style-parent:style0;
	font-size:24.0pt;
	font-weight:700;
	text-align:center;}
.xl76
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:top;
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
     <x:DefaultRowHeight>439</x:DefaultRowHeight>
     <x:Unsynced/>
     <x:Print>
      <x:ValidPrinterInfo/>
      <x:PaperSizeIndex>9</x:PaperSizeIndex>
      <x:HorizontalResolution>200</x:HorizontalResolution>
      <x:VerticalResolution>200</x:VerticalResolution>
     </x:Print>
     <x:Selected/>
     <x:Panes>
      <x:Pane>
       <x:Number>3</x:Number>
       <x:ActiveRow>6</x:ActiveRow>
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
</xml><![endif]-->
</head>

<body link=blue vlink=purple class=xl65>';

$htmls.="<table x:str border=0 cellpadding=0 cellspacing=0 width=669 style='border-collapse:
 collapse;table-layout:fixed;width:502pt'>
 <col class=xl65 width=160 span=3 style='mso-width-source:userset;mso-width-alt:
 5120;width:120pt'>
 <col class=xl65 width=189 style='mso-width-source:userset;mso-width-alt:6048;
 width:142pt'>
 <tr class=xl67 height=80 style='mso-height-source:userset;height:60.0pt'>
  <td colspan=4 height=80 class=xl75 width=669 style='height:60.0pt;width:502pt'>合同审批表</td>
 </tr>
 <tr height=39 style='mso-height-source:userset;height:29.25pt'>
  <td height=39 class=xl66 style='height:29.25pt'>经办人</td>
  <td class=xl68 width=160 style='border-left:none;width:120pt'>". work_db($id,'_14_20_1')."</td>
  <td class=xl66 style='border-left:none'>日期</td>
  <td class=xl68 width=189 style='border-left:none;width:142pt'><span
  style='mso-spacerun:yes'>". work_db($id,'_14_20_2')."</span></td>
 </tr>
 <tr height=39 style='mso-height-source:userset;height:29.25pt'>
  <td height=39 class=xl66 style='height:29.25pt;border-top:none'>合同项目</td>
  <td colspan=3 class=xl69 width=509 style='border-right:.5pt solid black;
  border-left:none;width:382pt'>". work_db($id,'_14_20_3')."</td>
 </tr>
 <tr height=39 style='mso-height-source:userset;height:29.25pt'>
  <td height=39 class=xl66 style='height:29.25pt;border-top:none'>甲方</td>
  <td class=xl68 width=160 style='border-top:none;border-left:none;width:120pt'>". work_db($id,'_14_20_4')."</td>
  <td class=xl66 style='border-top:none;border-left:none'>乙方</td>
  <td class=xl68 width=189 style='border-top:none;border-left:none;width:142pt'>". work_db($id,'_14_20_5')."</td>
 </tr>
 <tr height=39 style='mso-height-source:userset;height:29.25pt'>
  <td height=39 class=xl66 style='height:29.25pt;border-top:none'>合同编号</td>
  <td class=xl68 width=160 style='border-top:none;border-left:none;width:120pt'>". work_db($id,'_14_20_6')."</td>
  <td class=xl66 style='border-top:none;border-left:none'>项目地点</td>
  <td class=xl68 width=189 style='border-top:none;border-left:none;width:142pt'>". work_db($id,'_14_20_7')."</td>
 </tr>
 <tr height=39 style='mso-height-source:userset;height:29.25pt'>
  <td height=39 class=xl66 style='height:29.25pt;border-top:none'>合同类型</td>
  <td class=xl68 width=160 style='border-top:none;border-left:none;width:120pt'>". work_db($id,'_14_20_8')."</td>
  <td class=xl66 style='border-top:none;border-left:none'>合同期限</td>
  <td class=xl68 width=189 style='border-top:none;border-left:none;width:142pt'>". work_db($id,'_14_20_9')."</td>
 </tr>
 <tr height=39 style='mso-height-source:userset;height:29.25pt'>
  <td height=39 class=xl66 style='height:29.25pt;border-top:none'>合同金额</td>
  <td colspan=3 class=xl68 width=509 style='border-left:none;width:382pt'>". work_db($id,'_14_20_10')."</td>
 </tr>
 <tr height=39 style='mso-height-source:userset;height:29.25pt'>
  <td height=39 class=xl66 style='height:29.25pt;border-top:none'>大写</td>
  <td colspan=3 class=xl68 width=509 style='border-left:none;width:382pt'>". work_db($id,'_14_20_11')."</td>
 </tr>
 <tr height=57 style='mso-height-source:userset;height:42.75pt'>
  <td height=57 class=xl66 style='height:42.75pt;border-top:none'>付款方式</td>
  <td colspan=3 class=xl68 width=509 style='border-left:none;width:382pt'>". work_db($id,'_14_20_12')."</td>
 </tr>
 <tr height=159 style='mso-height-source:userset;height:119.25pt'>
  <td height=159 class=xl66 style='height:119.25pt;border-top:none'>项目内容说明</td>
  <td colspan=3 class=xl76 width=509 style='border-left:none;width:382pt'>". work_db($id,'_14_20_13')."</td>
 </tr>
 <tr height=74 style='mso-height-source:userset;height:55.5pt'>
  <td height=74 class=xl66 style='height:55.5pt;border-top:none'>备注</td>
  <td colspan=3 class=xl72 width=509 style='border-right:.5pt solid black;
  border-left:none;width:382pt'>". work_db($id,'_14_20_14')."</td>
 </tr>
 <tr height=44 style='mso-height-source:userset;height:33.0pt'>
  <td height=44 class=xl66 style='height:33.0pt;border-top:none'>部门负责人审批</td>
  <td class=xl68 width=160 style='border-top:none;border-left:none;width:120pt'>".w_p_v(67,$id,'name')."</td>
  <td class=xl66 style='border-top:none;border-left:none'>财务负责人审批</td>
  <td class=xl68 width=189 style='border-top:none;border-left:none;width:142pt'>".w_p_v(68,$id,'name')."</td>
 </tr>
 <tr height=44 style='mso-height-source:userset;height:33.0pt'>
  <td height=44 class=xl66 style='height:33.0pt;border-top:none'>总经理审批</td>
  <td colspan=3 class=xl69 width=509 style='border-right:.5pt solid black;
  border-left:none;width:382pt'>".w_p_v(69,$id,'name')."</td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=160 style='width:120pt'></td>
  <td width=160 style='width:120pt'></td>
  <td width=160 style='width:120pt'></td>
  <td width=189 style='width:142pt'></td>
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