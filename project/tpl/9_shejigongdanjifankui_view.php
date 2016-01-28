<?php
include_once('head_view.php');


function xls_views($id,$uid,$title){
$htmls.='<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:x="urn:schemas-microsoft-com:office:excel"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<meta name=ProgId content=Excel.Sheet>
<meta name=Generator content="Microsoft Excel 11">
<!--[if gte mso 9]><xml>
 <o:DocumentProperties>
  <o:Created>2006-09-13T11:21:51Z</o:Created>
  <o:LastSaved>2013-05-06T06:21:02Z</o:LastSaved>
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
	font-size:14.0pt;
	font-weight:700;
	text-align:center;
	white-space:normal;}
.xl66
	{mso-style-parent:style0;
	text-align:center;
	border:.5pt solid windowtext;
	white-space:normal;}
.xl67
	{mso-style-parent:style0;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl68
	{mso-style-parent:style0;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl69
	{mso-style-parent:style0;
	text-align:center;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl70
	{mso-style-parent:style0;
	text-align:center;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl71
	{mso-style-parent:style0;
	font-weight:700;
	text-align:center;
	border:.5pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl72
	{mso-style-parent:style0;
	text-align:left;
	white-space:normal;}
.xl73
	{mso-style-parent:style0;
	text-align:left;
	border:.5pt solid windowtext;
	white-space:normal;}
.xl74
	{mso-style-parent:style0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl75
	{mso-style-parent:style0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl76
	{mso-style-parent:style0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl77
	{mso-style-parent:style0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	white-space:normal;}
.xl78
	{mso-style-parent:style0;
	text-align:left;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	white-space:normal;}
.xl79
	{mso-style-parent:style0;
	text-align:left;
	border-top:none;
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
     <x:TopRowVisible>9</x:TopRowVisible>
     <x:Panes>
      <x:Pane>
       <x:Number>3</x:Number>
       <x:ActiveRow>16</x:ActiveRow>
       <x:ActiveCol>1</x:ActiveCol>
       <x:RangeSelection>$B$17:$D$17</x:RangeSelection>
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

<body link=blue vlink=purple>';

$htmls.="<table x:str border=0 cellpadding=0 cellspacing=0 width=710 style='border-collapse:
 collapse;table-layout:fixed;width:532pt'>
 <col width=135 style='mso-width-source:userset;mso-width-alt:4320;width:101pt'>
 <col width=220 style='mso-width-source:userset;mso-width-alt:7040;width:165pt'>
 <col width=135 style='mso-width-source:userset;mso-width-alt:4320;width:101pt'>
 <col width=220 style='mso-width-source:userset;mso-width-alt:7040;width:165pt'>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td colspan=2 height=37 class=xl72 width=355 style='height:27.95pt;
  width:266pt'>公司：".project_db($id,'_4_9_3_1')."</td>
  <td colspan=2 class=xl72 width=355 style='width:266pt'>No.:".project_db($id,'_4_9_3_2')."</td>
 </tr>
 <tr height=66 style='mso-height-source:userset;height:50.1pt'>
  <td colspan=4 height=66 class=xl65 width=710 style='height:50.1pt;width:532pt'>".$title."</td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td height=37 class=xl66 width=135 style='height:27.95pt;width:101pt'>日<span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp; </span>期</td>
  <td class=xl73 width=220 style='border-left:none;width:165pt'>".project_db($id,'_4_9_3_3')."</td>
  <td class=xl66 width=135 style='border-left:none;width:101pt'>完成日期</td>
  <td class=xl73 width=220 style='border-left:none;width:165pt'>".project_db($id,'_4_9_3_4')."</td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td height=37 class=xl66 width=135 style='height:27.95pt;border-top:none;
  width:101pt'>责 任 人</td>
  <td class=xl73 width=220 style='border-top:none;border-left:none;width:165pt'>".project_db($id,'_4_9_3_5')."</td>
  <td class=xl66 width=135 style='border-top:none;border-left:none;width:101pt'>责任部门</td>
  <td class=xl73 width=220 style='border-top:none;border-left:none;width:165pt'>".project_db($id,'_4_9_3_6')."</td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td height=37 class=xl66 width=135 style='height:27.95pt;border-top:none;
  width:101pt'>客户名称</td>
  <td colspan=3 class=xl74 width=575 style='border-right:.5pt solid black;
  border-left:none;width:431pt'>".project_db($id,'_4_9_3_7')."</td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td height=37 class=xl66 width=135 style='height:27.95pt;border-top:none;
  width:101pt'>项目名称</td>
  <td colspan=3 class=xl74 width=575 style='border-right:.5pt solid black;
  border-left:none;width:431pt'>".project_db($id,'_4_9_3_8')."</td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td height=37 class=xl66 width=135 style='height:27.95pt;border-top:none;
  width:101pt'>主要内容</td>
  <td colspan=3 class=xl74 width=575 style='border-right:.5pt solid black;
  border-left:none;width:431pt'>".project_db($id,'_4_9_3_9')."</td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td height=37 class=xl66 width=135 style='height:27.95pt;border-top:none;
  width:101pt'>尺<span style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp; </span>寸</td>
  <td class=xl73 width=220 style='border-top:none;border-left:none;width:165pt'>".project_db($id,'_4_9_3_10')."</td>
  <td class=xl66 width=135 style='border-top:none;border-left:none;width:101pt'>位<span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp; </span>置</td>
  <td class=xl73 width=220 style='border-top:none;border-left:none;width:165pt'>".project_db($id,'_4_9_3_11')."</td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td height=37 class=xl66 width=135 style='height:27.95pt;border-top:none;
  width:101pt'>材<span style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp; </span>质</td>
  <td class=xl73 width=220 style='border-top:none;border-left:none;width:165pt'>".project_db($id,'_4_9_3_12')."</td>
  <td class=xl66 width=135 style='border-top:none;border-left:none;width:101pt'>光<span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp; </span>源</td>
  <td class=xl73 width=220 style='border-top:none;border-left:none;width:165pt'>".project_db($id,'_4_9_3_13')."</td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td height=37 class=xl66 width=135 style='height:27.95pt;border-top:none;
  width:101pt'>提供材料</td>
  <td colspan=3 class=xl74 width=575 style='border-right:.5pt solid black;
  border-left:none;width:431pt'>".project_db($id,'_4_9_3_14')."</td>
 </tr>
 <tr height=100 style='mso-height-source:userset;height:75.0pt'>
  <td height=100 class=xl66 width=135 style='height:75.0pt;border-top:none;
  width:101pt'>设计要求</td>
  <td colspan=3 class=xl74 width=575 style='border-right:.5pt solid black;
  border-left:none;width:431pt'>".project_db($id,'_4_9_3_15')."</td>
 </tr>
 <tr height=80 style='mso-height-source:userset;height:60.0pt'>
  <td height=80 class=xl66 width=135 style='height:60.0pt;border-top:none;
  width:101pt'>要点备注</td>
  <td colspan=3 class=xl74 width=575 style='border-right:.5pt solid black;
  border-left:none;width:431pt'>".project_db($id,'_4_9_3_16')."</td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td height=37 class=xl67 width=135 style='height:27.95pt;border-top:none;
  width:101pt'><span style='mso-spacerun:yes'>&nbsp; </span>设计图打印</td>
  <td class=xl76 width=220 style='border-top:none;width:165pt'>".project_db($id,'_4_9_3_17')."</td>
  <td class=xl68 width=135 style='border-top:none;border-left:none;width:101pt'>打印纸质要求:</td>
  <td class=xl77 width=220 style='border-top:none;width:165pt'>复印纸<span
  style='mso-spacerun:yes'>".project_db($id,'_4_9_3_18')."
  </span>份</td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td height=37 class=xl68 width=135 style='height:27.95pt;border-top:none;
  width:101pt'>打印纸开要求:</td>
  <td class=xl77 width=220 style='border-top:none;width:165pt'>".project_db($id,'_4_9_3_19')."</td>
  <td class=xl69 width=135 style='border-left:none;width:101pt'>　</td>
  <td class=xl78 width=220 style='width:165pt'>打印纸<span
  style='mso-spacerun:yes'>".project_db($id,'_4_9_3_20')."
  </span>份</td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td height=37 class=xl69 width=135 style='height:27.95pt;width:101pt'>　</td>
  <td class=xl78 width=220 style='width:165pt'>　</td>
  <td class=xl69 width=135 style='border-left:none;width:101pt'>　</td>
  <td class=xl78 width=220 style='width:165pt'>照片纸<span
  style='mso-spacerun:yes'>".project_db($id,'_4_9_3_21')."
  </span>份</td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td height=37 class=xl70 width=135 style='height:27.95pt;width:101pt'><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>其他:</td>
  <td class=xl79 width=220 style='width:165pt'>".project_db($id,'_4_9_3_22')."</td>
  <td class=xl70 width=135 style='border-left:none;width:101pt'>　</td>
  <td class=xl79 width=220 style='width:165pt'>特种纸<span
  style='mso-spacerun:yes'>".project_db($id,'_4_9_3_23')."
  </span>份</td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td height=37 class=xl66 width=135 style='height:27.95pt;border-top:none;
  width:101pt'>部门负责人审批</td>
  <td colspan=3 class=xl73 width=575 style='border-left:none;width:431pt'>".w_p_v(32,$id,'name')."</td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td height=37 class=xl66 width=135 style='height:27.95pt;border-top:none;
  width:101pt'>设计负责人接收</td>
  <td colspan=3 class=xl73 width=575 style='border-left:none;width:431pt'>".w_p_v(33,$id,'name')."</td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td colspan=4 height=37 class=xl71 width=710 style='height:27.95pt;
  width:532pt'>设计反馈</td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td height=37 class=xl66 width=135 style='height:27.95pt;border-top:none;
  width:101pt'>任务分配设计人员</td>
  <td colspan=3 class=xl73 width=575 style='border-left:none;width:431pt'>".project_db($id,'_4_9_4_t1')."</td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td height=37 class=xl66 width=135 style='height:27.95pt;border-top:none;
  width:101pt'>方案</td>
  <td colspan=3 class=xl73 width=575 style='border-left:none;width:431pt'>".project_db($id,'_4_9_4_t2')."</td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td height=37 class=xl66 width=135 style='height:27.95pt;border-top:none;
  width:101pt'>效果图</td>
  <td colspan=3 class=xl73 width=575 style='border-left:none;width:431pt'>".project_db($id,'_4_9_4_t3')."</td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=135 style='width:101pt'></td>
  <td width=220 style='width:165pt'></td>
  <td width=135 style='width:101pt'></td>
  <td width=220 style='width:165pt'></td>
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