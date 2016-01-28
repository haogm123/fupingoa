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
  <o:LastSaved>2013-05-07T06:52:53Z</o:LastSaved>
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
	text-align:center;
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
	text-align:left;
	white-space:normal;}
.xl69
	{mso-style-parent:style0;
	text-align:left;
	border:.5pt solid windowtext;
	white-space:normal;}
.xl70
	{mso-style-parent:style0;
	font-weight:700;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl71
	{mso-style-parent:style0;
	font-weight:700;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl72
	{mso-style-parent:style0;
	font-weight:700;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl73
	{mso-style-parent:style0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl74
	{mso-style-parent:style0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl75
	{mso-style-parent:style0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl76
	{mso-style-parent:style0;
	font-size:10.0pt;
	text-align:left;
	border:.5pt solid windowtext;
	white-space:normal;}
.xl77
	{mso-style-parent:style0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl78
	{mso-style-parent:style0;
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl79
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
     <x:TopRowVisible>18</x:TopRowVisible>
     <x:Panes>
      <x:Pane>
       <x:Number>3</x:Number>
       <x:ActiveRow>22</x:ActiveRow>
       <x:RangeSelection>$23:$33</x:RangeSelection>
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

$htmls.="<table x:str border=0 cellpadding=0 cellspacing=0 width=810 style='border-collapse:
 collapse;table-layout:fixed;width:608pt'>
 <col width=157 style='mso-width-source:userset;mso-width-alt:5024;width:118pt'>
 <col width=248 style='mso-width-source:userset;mso-width-alt:7936;width:186pt'>
 <col width=157 style='mso-width-source:userset;mso-width-alt:5024;width:118pt'>
 <col width=248 style='mso-width-source:userset;mso-width-alt:7936;width:186pt'>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td colspan=2 height=37 class=xl68 width=405 style='height:27.95pt;
  width:304pt'>公司：".project_db($id,'_4_17_3_1')."</td>
  <td class=xl65 width=157 style='width:118pt'>No.:</td>
  <td class=xl68 width=248 style='width:186pt'>".project_db($id,'_4_17_3_2')."</td>
 </tr>
 <tr height=66 style='mso-height-source:userset;height:50.1pt'>
  <td colspan=4 height=66 class=xl66 width=810 style='height:50.1pt;width:608pt'>".$title."</td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.75pt'>
  <td height=37 class=xl67 width=157 style='height:27.75pt;width:118pt'>日期</td>
  <td class=xl69 width=248 style='border-left:none;width:186pt'>".project_db($id,'_4_17_3_3')."</td>
  <td class=xl67 width=157 style='border-left:none;width:118pt'>经办业务员</td>
  <td class=xl69 width=248 style='border-left:none;width:186pt'>".project_db($id,'_4_17_3_4')."</td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.75pt'>
  <td height=37 class=xl67 width=157 style='height:27.75pt;border-top:none;
  width:118pt'>客户名称</td>
  <td class=xl69 width=248 style='border-top:none;border-left:none;width:186pt'>".project_db($id,'_4_17_3_5')."</td>
  <td class=xl67 width=157 style='border-top:none;border-left:none;width:118pt'>地址</td>
  <td class=xl69 width=248 style='border-top:none;border-left:none;width:186pt'>".project_db($id,'_4_17_3_6')."</td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.75pt'>
  <td height=37 class=xl67 width=157 style='height:27.75pt;border-top:none;
  width:118pt'>电话</td>
  <td class=xl69 width=248 style='border-top:none;border-left:none;width:186pt'>".project_db($id,'_4_17_3_7')."</td>
  <td class=xl67 width=157 style='border-top:none;border-left:none;width:118pt'>合同号</td>
  <td class=xl69 width=248 style='border-top:none;border-left:none;width:186pt'>".project_db($id,'_4_17_3_26')."</td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.75pt'>
  <td colspan=4 height=37 class=xl69 width=810 style='height:27.75pt;
  width:608pt'>是否处于质保期：".project_db($id,'_4_17_3_8')."</td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.75pt'>
  <td colspan=4 height=37 class=xl69 width=810 style='height:27.75pt;
  width:608pt'>客户是否已认定方案：".project_db($id,'_4_17_3_9')."</td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.75pt'>
  <td colspan=4 height=37 class=xl70 width=810 style='border-right:.5pt solid black;
  height:27.75pt;width:608pt'>施工项目具体内容说明</td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.75pt'>
  <td height=37 class=xl67 width=157 style='height:27.75pt;border-top:none;
  width:118pt'>制作项目名称</td>
  <td class=xl69 width=248 style='border-top:none;border-left:none;width:186pt'>".project_db($id,'_4_17_3_10')."</td>
  <td class=xl67 width=157 style='border-top:none;border-left:none;width:118pt'>工期要求</td>
  <td class=xl69 width=248 style='border-top:none;border-left:none;width:186pt'>".project_db($id,'_4_17_3_11')."</td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.75pt'>
  <td height=37 class=xl67 width=157 style='height:27.75pt;border-top:none;
  width:118pt'>具体说明</td>
  <td colspan=3 class=xl73 width=653 style='border-right:.5pt solid black;
  border-left:none;width:490pt'>".project_db($id,'_4_17_3_12')."</td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.75pt'>
  <td height=37 class=xl67 width=157 style='height:27.75pt;border-top:none;
  width:118pt'>规格尺寸</td>
  <td class=xl69 width=248 style='border-top:none;border-left:none;width:186pt'>".project_db($id,'_4_17_3_13')."</td>
  <td class=xl67 width=157 style='border-top:none;border-left:none;width:118pt'>施工地点</td>
  <td class=xl69 width=248 style='border-top:none;border-left:none;width:186pt'>".project_db($id,'_4_17_3_14')."</td>
 </tr>
 <tr height=128 style='mso-height-source:userset;height:96.0pt'>
  <td height=128 class=xl67 width=157 style='height:96.0pt;border-top:none;
  width:118pt'>安装位置</td>
  <td class=xl69 width=248 style='border-top:none;border-left:none;width:186pt'>".project_db($id,'_4_17_3_15')."</td>
  <td class=xl67 width=157 style='border-top:none;border-left:none;width:118pt'>附件</td>
  <td class=xl76 width=248 style='border-top:none;border-left:none;width:186pt'>效果图:".project_db($id,'_4_17_3_16')."<br>
    <br>
    结构图:".project_db($id,'_4_17_3_17')."<br>
    <br>
    材料清单:".project_db($id,'_4_17_3_18')."</td>
 </tr>
 <tr height=133 style='mso-height-source:userset;height:99.75pt'>
  <td height=133 class=xl67 width=157 style='height:99.75pt;border-top:none;
  width:118pt'>其他详细说明</td>
  <td colspan=3 class=xl73 width=653 style='border-right:.5pt solid black;
  border-left:none;width:490pt'>".project_db($id,'_4_17_3_19')."</td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl67 width=157 style='height:30.0pt;border-top:none;
  width:118pt'>现场电源联系人</td>
  <td class=xl69 width=248 style='border-top:none;border-left:none;width:186pt'>".project_db($id,'_4_17_3_20')."</td>
  <td class=xl67 width=157 style='border-top:none;border-left:none;width:118pt'>电话</td>
  <td class=xl69 width=248 style='border-top:none;border-left:none;width:186pt'>".project_db($id,'_4_17_3_21')."</td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl67 width=157 style='height:30.0pt;border-top:none;
  width:118pt'>现场业务接洽人</td>
  <td class=xl69 width=248 style='border-top:none;border-left:none;width:186pt'>".project_db($id,'_4_17_3_22')."</td>
  <td class=xl67 width=157 style='border-top:none;border-left:none;width:118pt'>电话</td>
  <td class=xl69 width=248 style='border-top:none;border-left:none;width:186pt'>".project_db($id,'_4_17_3_23')."</td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl67 width=157 style='height:30.0pt;border-top:none;
  width:118pt'>现场勘查人</td>
  <td class=xl69 width=248 style='border-top:none;border-left:none;width:186pt'>".project_db($id,'_4_17_3_24')."</td>
  <td class=xl67 width=157 style='border-top:none;border-left:none;width:118pt'>电话</td>
  <td class=xl69 width=248 style='border-top:none;border-left:none;width:186pt'>".project_db($id,'_4_17_3_25')."</td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td height=37 class=xl67 width=157 style='height:27.95pt;border-top:none;
  width:118pt'>部门负责人审批</td>
  <td colspan=3 class=xl77 width=653 style='border-right:.5pt solid black;
  border-left:none;width:490pt'>".w_p_v(48,$id,'name')."</td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td height=37 class=xl67 width=157 style='height:27.95pt;border-top:none;
  width:118pt'>工程制作负责人接收</td>
  <td colspan=3 class=xl77 width=653 style='border-right:.5pt solid black;
  border-left:none;width:490pt'>".w_p_v(49,$id,'name')."</td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td height=37 class=xl67 width=157 style='height:27.95pt;border-top:none;
  width:118pt'>维修人员</td>
  <td colspan=3 class=xl77 width=653 style='border-right:.5pt solid black;
  border-left:none;width:490pt'>".project_db($id,'_4_17_4_t1')."</td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td height=37 class=xl67 width=157 style='height:27.95pt;border-top:none;
  width:118pt'>完成日期</td>
  <td class=xl69 width=248 style='border-top:none;border-left:none;width:186pt'>".project_db($id,'_4_17_4_t2')."</td>
  <td class=xl67 width=157 style='border-top:none;border-left:none;width:118pt'>出厂检验报告</td>
  <td class=xl69 width=248 style='border-top:none;border-left:none;width:186pt'>".project_db($id,'_4_17_4_t3')."</td>
 </tr>
 <tr height=89 style='mso-height-source:userset;height:66.75pt'>
  <td height=89 class=xl67 width=157 style='height:66.75pt;border-top:none;
  width:118pt'>竣工说明</td>
  <td colspan=3 class=xl73 width=653 style='border-right:.5pt solid black;
  border-left:none;width:490pt'>".project_db($id,'_4_17_4_t4')."</td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.95pt'>
  <td height=37 class=xl67 width=157 style='height:27.95pt;border-top:none;
  width:118pt'>填报人</td>
  <td class=xl69 width=248 style='border-top:none;border-left:none;width:186pt'>".w_p_v(50,$id,'name')."</td>
  <td class=xl67 width=157 style='border-top:none;border-left:none;width:118pt'>审核人</td>
  <td class=xl69 width=248 style='border-top:none;border-left:none;width:186pt'>".w_p_v(51,$id,'name')."</td>
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