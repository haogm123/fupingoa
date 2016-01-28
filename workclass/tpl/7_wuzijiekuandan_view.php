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
  <o:LastSaved>2013-04-05T06:22:20Z</o:LastSaved>
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
	vertical-align:middle;}
.xl26
	{mso-style-parent:style0;
	text-align:right;
	vertical-align:middle;}
.xl27
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	border:.5pt solid windowtext;
	white-space:normal;}
.xl28
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
       <x:ActiveRow>10</x:ActiveRow>
       <x:RangeSelection>$A$11:$C$11</x:RangeSelection>
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

$htmls.="<table x:str border=0 cellpadding=0 cellspacing=0 width=711 style='border-collapse:
 collapse;table-layout:fixed;width:534pt'>
 <col width=362 style='mso-width-source:userset;mso-width-alt:11584;width:272pt'>
 <col width=201 style='mso-width-source:userset;mso-width-alt:6432;width:151pt'>
 <col width=148 style='mso-width-source:userset;mso-width-alt:4736;width:111pt'>
 <tr height=80 style='mso-height-source:userset;height:60.0pt'>
  <td colspan=3 height=80 class=xl24 width=711 style='height:60.0pt;width:534pt'>物资申购借款单</td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td colspan=3 height=40 class=xl25 style='height:30.0pt'>";
  $_11_3_fs=work_db($id,'_11_7_1');
  $_11_3_fs=explode('-',$_11_3_fs); 
  $htmls.= $_11_3_fs[0].'年'.$_11_3_fs[1].'月'.$_11_3_fs[2].'日';
  $htmls.="</td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl27 width=362 style='height:30.0pt;width:272pt'>借款单位：". work_db($id,'_11_7_2')."</td>
  <td class=xl27 width=201 style='border-left:none;width:151pt'>借款部门：". work_db($id,'_11_7_3')."</td>
  <td class=xl27 width=148 style='border-left:none;width:111pt'>借款人：". work_db($id,'_11_7_user')."</td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl27 width=362 style='height:30.0pt;border-top:none;
  width:272pt'>借款金额（大写）：". work_db($id,'_11_7_4')."</td>
  <td colspan=2 class=xl27 width=349 style='border-left:none;width:262pt'>￥（小写）：". work_db($id,'_11_7_5')."</td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td colspan=3 height=40 class=xl27 width=711 style='height:30.0pt;width:534pt'>借款方式：". work_db($id,'_11_7_6')."</td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td colspan=3 height=40 class=xl27 width=711 style='height:30.0pt;width:534pt'>申购物品：". work_db($id,'_11_7_7')."</td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl27 width=362 style='height:30.0pt;border-top:none;
  width:272pt'>单价：". work_db($id,'_11_7_8')."</td>
  <td colspan=2 class=xl27 width=349 style='border-left:none;width:262pt'>数量：". work_db($id,'_11_7_9')."</td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td colspan=3 height=40 class=xl27 width=711 style='height:30.0pt;width:534pt'>申购物品图像：";
  if(work_db($id,'_11_7_10')!=''){
	  $htmls.="<img src='". work_db($id,'_11_7_10')."' width='500'/>";
  }
  $htmls.="</td>
 </tr>
 <tr height=80 style='mso-height-source:userset;height:60.0pt'>
  <td colspan=3 height=80 class=xl28 width=711 style='height:60.0pt;width:534pt'>收款单位信息：". work_db($id,'_11_7_11')."</td>
 </tr>
 <tr height=80 style='mso-height-source:userset;height:60.0pt'>
  <td colspan=3 height=80 class=xl28 width=711 style='height:60.0pt;width:534pt'>备注：". work_db($id,'_11_7_12')."</td>
 </tr>
 <tr height=80 style='mso-height-source:userset;height:60.0pt'>
  <td colspan=3 height=80 class=xl28 width=711 style='height:60.0pt;width:534pt'>部门申购申请：". work_db($id,'_11_7_13')."</td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td colspan=3 height=40 class=xl27 width=711 style='height:30.0pt;width:534pt'>行政负责人审批：".w_p_v(40,$id,'name')."</td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td colspan=3 height=40 class=xl27 width=711 style='height:30.0pt;width:534pt'>财务负责人审批：".w_p_v(41,$id,'name')."</td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td colspan=3 height=40 class=xl27 width=711 style='height:30.0pt;width:534pt'>总经理审批：".w_p_v(42,$id,'name')."</td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td colspan=3 height=40 class=xl26 style='height:30.0pt'></td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=362 style='width:272pt'></td>
  <td width=201 style='width:151pt'></td>
  <td width=148 style='width:111pt'></td>
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