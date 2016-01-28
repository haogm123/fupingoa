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
  <o:LastSaved>2013-04-03T09:05:54Z</o:LastSaved>
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
	vertical-align:middle;}
.xl25
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;}
.xl26
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	border:.5pt solid windowtext;}
.xl27
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl28
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	border:.5pt solid windowtext;
	padding-left:27px;
	mso-char-indent-count:1;}
.xl29
	{mso-style-parent:style0;
	vertical-align:middle;
	border:.5pt solid windowtext;}
.xl30
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	padding-left:54px;
	mso-char-indent-count:2;}
.xl31
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	padding-left:54px;
	mso-char-indent-count:2;}
.xl32
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	padding-left:54px;
	mso-char-indent-count:2;}
.xl33
	{mso-style-parent:style0;
	font-size:24.0pt;
	text-align:center;
	vertical-align:middle;}
.xl34
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	padding-left:27px;
	mso-char-indent-count:1;}
.xl35
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	padding-left:27px;
	mso-char-indent-count:1;}
.xl36
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:silver;
	mso-pattern:auto none;}
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
       <x:ActiveCol>2</x:ActiveCol>
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

$htmls.="<table x:str border=0 cellpadding=0 cellspacing=0 width=1172 style='border-collapse:
 collapse;table-layout:fixed;width:881pt'>
 <col width=72 style='width:54pt'>
 <col width=176 style='mso-width-source:userset;mso-width-alt:5632;width:132pt'>
 <col width=125 style='mso-width-source:userset;mso-width-alt:4000;width:94pt'>
 <col width=138 style='mso-width-source:userset;mso-width-alt:4416;width:104pt'>
 <col width=101 style='mso-width-source:userset;mso-width-alt:3232;width:76pt'>
 <col width=85 style='mso-width-source:userset;mso-width-alt:2720;width:64pt'>
 <col width=79 style='mso-width-source:userset;mso-width-alt:2528;width:59pt'>
 <col width=90 style='mso-width-source:userset;mso-width-alt:2880;width:68pt'>
 <col width=88 style='mso-width-source:userset;mso-width-alt:2816;width:66pt'>
 <col width=92 style='mso-width-source:userset;mso-width-alt:2944;width:69pt'>
 <col width=126 style='mso-width-source:userset;mso-width-alt:4032;width:95pt'>
 <tr height=80 style='mso-height-source:userset;height:60.0pt'>
  <td colspan=11 height=80 class=xl33 width=1172 style='height:60.0pt;
  width:881pt'>采购物品申购计划单</td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td colspan=4 height=40 class=xl34 style='height:30.0pt'>部门：".work_db($id,'_12_18_dep')."</td>
  <td colspan=4 class=xl34>供货商：".work_db($id,'_12_18_company')." </td>
  <td colspan=3 class=xl34>单号：".work_db($id,'_12_18_111')."</td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td colspan=4 height=40 class=xl35 style='height:30.0pt'>项目名称：".work_db($id,'_12_18_name')."</td>
  <td colspan=4 class=xl35>合同编号：".work_db($id,'_12_18_number')."</td>
  <td colspan=3 class=xl35>工单号：".work_db($id,'_12_18_zipcode')."</td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl36 style='height:30.0pt;border-top:none'>序号</td>
  <td class=xl36 style='border-top:none;border-left:none'>申购物品名称</td>
  <td class=xl36 style='border-top:none;border-left:none'>品牌</td>
  <td class=xl36 style='border-top:none;border-left:none'>规格</td>
  <td class=xl36 style='border-top:none;border-left:none'>型号</td>
  <td class=xl36 style='border-top:none;border-left:none'>颜色</td>
  <td class=xl36 style='border-top:none;border-left:none'>单位</td>
  <td class=xl36 style='border-top:none;border-left:none'>数量</td>
  <td class=xl36 style='border-top:none;border-left:none'>单价</td>
  <td class=xl36 style='border-top:none;border-left:none'>金额</td>
  <td class=xl36 style='border-top:none;border-left:none'>备注</td>
 </tr>";
$_12_18_wname=unserialize(work_db($id,'_12_18_wname'));
	 $_12_18_wping=unserialize(work_db($id,'_12_18_wping'));
	 $_12_18_wgg=unserialize(work_db($id,'_12_18_wgg'));
	 $_12_18_wxh=unserialize(work_db($id,'_12_18_wxh'));
	 $_12_18_wys=unserialize(work_db($id,'_12_18_wys'));
	 $_12_18_wdw=unserialize(work_db($id,'_12_18_wdw'));
	 $_12_18_wxl=unserialize(work_db($id,'_12_18_wxl'));
	 $_12_18_wdj=unserialize(work_db($id,'_12_18_wdj'));
	 $_12_18_wprice=unserialize(work_db($id,'_12_18_wprice'));
	 $_12_18_wnote=unserialize(work_db($id,'_12_18_wnote'));
for($i=0;$i<15;$i++){
$m=$i+1;
	 
	 $htmls.="<tr height=33 style='mso-height-source:userset;height:24.95pt'>
	  <td height=33 class=xl25 style='height:24.95pt;border-top:none' x:num>".$m."</td>
	  <td class=xl26 style='border-top:none;border-left:none'>".$_12_18_wname[$i]."</td>
	  <td class=xl26 style='border-top:none;border-left:none'>".$_12_18_wping[$i]."</td>
	  <td class=xl26 style='border-top:none;border-left:none'>".$_12_18_wgg[$i]."</td>
	  <td class=xl26 style='border-top:none;border-left:none'>".$_12_18_wxh[$i]."</td>
	  <td class=xl26 style='border-top:none;border-left:none'>".$_12_18_wys[$i]."</td>
	  <td class=xl26 style='border-top:none;border-left:none'>".$_12_18_wdw[$i]."</td>
	  <td class=xl26 style='border-top:none;border-left:none'>".$_12_18_wxl[$i]."</td>
	  <td class=xl26 style='border-top:none;border-left:none'>".$_12_18_wdj[$i]."</td>
	  <td class=xl26 style='border-top:none;border-left:none'>".$_12_18_wprice[$i]."</td>
	  <td class=xl26 style='border-top:none;border-left:none'>".$_12_18_wnote[$i]."</td>
	 </tr>";
} 
 
 $htmls.="<tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td colspan=2 height=40 class=xl25 style='height:30.0pt'>合计:</td>
  <td colspan=9 class=xl30 style='border-right:.5pt solid black;border-left:
  none'><span style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp; </span>￥<span
  style='mso-spacerun:yes'>".work_db($id,'_12_18_hj')."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span>大写:".work_db($id,'_12_18_pidfdd')."</td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td colspan=11 height=40 class=xl28 style='height:30.0pt'>付款方式：".work_db($id,'_12_18_type')."</td>
 </tr>
 <tr height=80 style='mso-height-source:userset;height:60.0pt'>
  <td colspan=2 height=80 class=xl25 style='height:60.0pt'>备注：</td>
  <td colspan=9 class=xl29 style='border-left:none'>".work_db($id,'_12_18_note')."</td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td colspan=2 height=40 class=xl27 style='height:30.0pt'>采购部经手人：". get_realname($uid)."</td>
  <td colspan=2 class=xl27>采购部负责人：".w_p_v(12,$id,'name')."</td>
  <td colspan=4 class=xl27>财务部负责人：".w_p_v(13,$id,'name')."</td>
  <td colspan=3 class=xl27>总经理审批：".w_p_v(14,$id,'name')."</td>
 </tr>

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