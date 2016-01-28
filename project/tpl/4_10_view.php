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
  <o:Created>2006-09-13T11:21:51Z</o:Created>
  <o:LastSaved>2013-05-03T03:55:31Z</o:LastSaved>
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
	font-size:14.0pt;
	font-weight:700;
	text-align:center;}
.xl67
	{mso-style-parent:style0;
	text-align:center;
	border-top:1.0pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	white-space:normal;}
.xl68
	{mso-style-parent:style0;
	text-align:center;
	border-top:1.0pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl69
	{mso-style-parent:style0;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	white-space:normal;}
.xl70
	{mso-style-parent:style0;
	text-align:center;
	border:.5pt solid windowtext;
	white-space:normal;}
.xl71
	{mso-style-parent:style0;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	white-space:normal;}
.xl72
	{mso-style-parent:style0;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl73
	{mso-style-parent:style0;
	text-align:left;
	border-top:1.0pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl74
	{mso-style-parent:style0;
	text-align:left;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
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
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl78
	{mso-style-parent:style0;
	text-align:left;
	border:.5pt solid windowtext;
	white-space:normal;}
.xl79
	{mso-style-parent:style0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl80
	{mso-style-parent:style0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl81
	{mso-style-parent:style0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
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
       <x:ActiveRow>16</x:ActiveRow>
       <x:ActiveCol>1</x:ActiveCol>
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

$htmls.="<table x:str border=0 cellpadding=0 cellspacing=0 width=715 style='border-collapse:
 collapse;table-layout:fixed;width:536pt'>
 <col class=xl65 width=160 span=3 style='mso-width-source:userset;mso-width-alt:
 5120;width:120pt'>
 <col class=xl65 width=235 style='mso-width-source:userset;mso-width-alt:7520;
 width:176pt'>
 <tr height=49 style='mso-height-source:userset;height:36.75pt'>
  <td colspan=4 height=49 class=xl66 width=715 style='height:36.75pt;
  width:536pt'>".$title."</td>
 </tr>
 <tr height=39 style='mso-height-source:userset;height:29.25pt'>
  <td height=39 class=xl67 width=160 style='height:29.25pt;width:120pt'>经办人</td>
  <td class=xl73 width=160 style='border-left:none;width:120pt'>".project_db($id,'_4_10_2_1')."</td>
  <td class=xl68 width=160 style='border-left:none;width:120pt'>日期</td>
  <td class=xl74 width=235 style='border-left:none;width:176pt'>".project_db($id,'_4_10_2_2')."</td>
 </tr>
 <tr height=39 style='mso-height-source:userset;height:29.25pt'>
  <td height=39 class=xl69 width=160 style='height:29.25pt;border-top:none;
  width:120pt'>合同项目</td>
  <td colspan=3 class=xl75 width=555 style='border-right:1.0pt solid black;
  border-left:none;width:416pt'>".project_db($id,'_4_10_2_3')."</td>
 </tr>
 <tr height=39 style='mso-height-source:userset;height:29.25pt'>
  <td height=39 class=xl69 width=160 style='height:29.25pt;border-top:none;
  width:120pt'>甲方</td>
  <td class=xl78 width=160 style='border-top:none;border-left:none;width:120pt'>".project_db($id,'_4_10_2_4')."</td>
  <td class=xl70 width=160 style='border-top:none;border-left:none;width:120pt'>乙方</td>
  <td class=xl79 width=235 style='border-top:none;border-left:none;width:176pt'>".project_db($id,'_4_10_2_5')."</td>
 </tr>
 <tr height=39 style='mso-height-source:userset;height:29.25pt'>
  <td height=39 class=xl69 width=160 style='height:29.25pt;border-top:none;
  width:120pt'>合同编号</td>
  <td class=xl78 width=160 style='border-top:none;border-left:none;width:120pt'>".project_db($id,'_4_10_2_6')."</td>
  <td class=xl70 width=160 style='border-top:none;border-left:none;width:120pt'>项目地点</td>
  <td class=xl79 width=235 style='border-top:none;border-left:none;width:176pt'>".project_db($id,'_4_10_2_7')."</td>
 </tr>
 <tr height=39 style='mso-height-source:userset;height:29.25pt'>
  <td height=39 class=xl69 width=160 style='height:29.25pt;border-top:none;
  width:120pt'>合同类型</td>
  <td class=xl78 width=160 style='border-top:none;border-left:none;width:120pt'>".project_db($id,'_4_10_2_8')."</td>
  <td class=xl70 width=160 style='border-top:none;border-left:none;width:120pt'>合同期限</td>
  <td class=xl79 width=235 style='border-top:none;border-left:none;width:176pt'>".project_db($id,'_4_10_2_9')."</td>
 </tr>
 <tr height=39 style='mso-height-source:userset;height:29.25pt'>
  <td height=39 class=xl69 width=160 style='height:29.25pt;border-top:none;
  width:120pt'>合同金额</td>
  <td colspan=3 class=xl78 width=555 style='border-right:1.0pt solid black;
  border-left:none;width:416pt'>".project_db($id,'_4_10_2_10')."</td>
 </tr>
 <tr height=39 style='mso-height-source:userset;height:29.25pt'>
  <td height=39 class=xl69 width=160 style='height:29.25pt;border-top:none;
  width:120pt'>大写</td>
  <td colspan=3 class=xl78 width=555 style='border-right:1.0pt solid black;
  border-left:none;width:416pt'>".project_db($id,'_4_10_2_11')."</td>
 </tr>
 <tr height=57 style='mso-height-source:userset;height:42.75pt'>
  <td height=57 class=xl69 width=160 style='height:42.75pt;border-top:none;
  width:120pt'>付款方式</td>
  <td colspan=3 class=xl78 width=555 style='border-right:1.0pt solid black;
  border-left:none;width:416pt'>".project_db($id,'_4_10_2_12')."</td>
 </tr>
 <tr height=159 style='mso-height-source:userset;height:119.25pt'>
  <td height=159 class=xl69 width=160 style='height:119.25pt;border-top:none;
  width:120pt'>项目内容说明</td>
  <td colspan=3 class=xl78 width=555 style='border-right:1.0pt solid black;
  border-left:none;width:416pt'>".project_db($id,'_4_10_2_13')."</td>
 </tr>
 <tr height=74 style='mso-height-source:userset;height:55.5pt'>
  <td height=74 class=xl69 width=160 style='height:55.5pt;border-top:none;
  width:120pt'>备注</td>
  <td colspan=3 class=xl78 width=555 style='border-right:1.0pt solid black;
  border-left:none;width:416pt'>".project_db($id,'_4_10_2_14')."</td>
 </tr>
 <tr height=44 style='mso-height-source:userset;height:33.0pt'>
  <td height=44 class=xl69 width=160 style='height:33.0pt;border-top:none;
  width:120pt'>部门负责人审批</td>
  <td class=xl78 width=160 style='border-top:none;border-left:none;width:120pt'>".w_p_v(4,$id,'name')."</td>
  <td class=xl70 width=160 style='border-top:none;border-left:none;width:120pt'>运营负责人审批</td>
  <td class=xl79 width=235 style='border-top:none;border-left:none;width:176pt'>".w_p_v(5,$id,'name')."</td>
 </tr>
 <tr height=44 style='mso-height-source:userset;height:33.0pt'>
  <td height=44 class=xl71 width=160 style='height:33.0pt;border-top:none;
  width:120pt'>财务负责人审批</td>
  <td class=xl80 width=160 style='border-top:none;border-left:none;width:120pt'>".w_p_v(6,$id,'name')."</td>
  <td class=xl72 width=160 style='border-top:none;border-left:none;width:120pt'>总经理审批</td>
  <td class=xl81 width=235 style='border-top:none;border-left:none;width:176pt'>".w_p_v(7,$id,'name')."</td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=160 style='width:120pt'></td>
  <td width=160 style='width:120pt'></td>
  <td width=160 style='width:120pt'></td>
  <td width=235 style='width:176pt'></td>
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