<?php
include_once('head.php');
?>
<style>
<!--table
	{mso-displayed-decimal-separator:"\.";
	mso-displayed-thousand-separator:"\,";}
@page
	{margin:1.0in .75in 1.0in .75in;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;}
.font7
	{color:black;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:宋体;
	mso-generic-font-family:auto;
	mso-font-charset:134;}
.font8
	{color:black;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:宋体;
	mso-generic-font-family:auto;
	mso-font-charset:134;}
.font9
	{color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:宋体;
	mso-generic-font-family:auto;
	mso-font-charset:134;}
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
	padding:0px;
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
	color:black;
	font-size:10.0pt;
	text-align:center;
	vertical-align:middle;
	white-space:normal;}
.xl25
	{mso-style-parent:style0;
	vertical-align:middle;}
.xl26
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;}
.xl27
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	white-space:normal;}
.xl28
	{mso-style-parent:style0;
	color:black;
	text-align:center;
	vertical-align:middle;
	white-space:normal;}
.xl29
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	white-space:normal;}
.xl30
	{mso-style-parent:style0;
	mso-number-format:"_-* \#\,\#\#0_-\;\\-* \#\,\#\#0_-\;_-* \0022-\0022_-\;_-\@_-";
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl31
	{mso-style-parent:style0;
	mso-number-format:"_ * \#\,\#\#0_ \;_ * \\-\#\,\#\#0_ \;_ * \0022-\0022_ \;_ \@_ ";
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl32
	{mso-style-parent:style0;
	mso-number-format:"Short Date";
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl33
	{mso-style-parent:style0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl34
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:gray;
	mso-pattern:auto none;
	white-space:normal;}
.xl35
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:gray;
	mso-pattern:auto none;
	white-space:normal;}
.xl36
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:gray;
	mso-pattern:auto none;
	white-space:normal;}
.xl37
	{mso-style-parent:style0;
	font-size:24.0pt;
	text-align:left;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;
	padding-left:405px;
	mso-char-indent-count:15;}
.xl38
	{mso-style-parent:style0;
	font-size:24.0pt;
	text-align:left;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;
	padding-left:405px;
	mso-char-indent-count:15;}
.xl39
	{mso-style-parent:style0;
	font-size:24.0pt;
	text-align:left;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;
	padding-left:405px;
	mso-char-indent-count:15;}
.xl40
	{mso-style-parent:style0;
	mso-number-format:"_-* \#\,\#\#0\.00_-\;\\-* \#\,\#\#0\.00_-\;_-* \0022-\0022??_-\;_-\@_-";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:gray;
	mso-pattern:auto none;
	white-space:normal;}
.xl41
	{mso-style-parent:style0;
	mso-number-format:"_-* \#\,\#\#0\.00_-\;\\-* \#\,\#\#0\.00_-\;_-* \0022-\0022??_-\;_-\@_-";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:gray;
	mso-pattern:auto none;
	white-space:normal;}
.xl42
	{mso-style-parent:style0;
	mso-number-format:"_-* \#\,\#\#0\.00_-\;\\-* \#\,\#\#0\.00_-\;_-* \0022-\0022??_-\;_-\@_-";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:gray;
	mso-pattern:auto none;
	white-space:normal;}
.xl43
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl44
	{mso-style-parent:style0;
	mso-number-format:"0\.00_ ";
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl45
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
.xl46
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
.xl47
	{mso-style-parent:style0;
	mso-number-format:"0\.00_ ";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl48
	{mso-style-parent:style0;
	mso-number-format:"0\.00_ ";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl49
	{mso-style-parent:style0;
	mso-number-format:"_-* \#\,\#\#0_-\;\\-* \#\,\#\#0_-\;_-* \0022-\0022_-\;_-\@_-";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl50
	{mso-style-parent:style0;
	mso-number-format:"_-* \#\,\#\#0_-\;\\-* \#\,\#\#0_-\;_-* \0022-\0022_-\;_-\@_-";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl51
	{mso-style-parent:style0;
	mso-number-format:"_-* \#\,\#\#0\.00_-\;\\-* \#\,\#\#0\.00_-\;_-* \0022-\0022??_-\;_-\@_-";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl52
	{mso-style-parent:style0;
	mso-number-format:"_-* \#\,\#\#0\.00_-\;\\-* \#\,\#\#0\.00_-\;_-* \0022-\0022??_-\;_-\@_-";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl53
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	white-space:normal;}
.xl54
	{mso-style-parent:style0;
	mso-number-format:"_ * \#\,\#\#0_ \;_ * \\-\#\,\#\#0_ \;_ * \0022-\0022_ \;_ \@_ ";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl55
	{mso-style-parent:style0;
	mso-number-format:"_ * \#\,\#\#0_ \;_ * \\-\#\,\#\#0_ \;_ * \0022-\0022_ \;_ \@_ ";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl56
	{mso-style-parent:style0;
	mso-number-format:"_ * \#\,\#\#0_ \;_ * \\-\#\,\#\#0_ \;_ * \0022-\0022_ \;_ \@_ ";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl57
	{mso-style-parent:style0;
	mso-number-format:"_-* \#\,\#\#0\.00_-\;\\-* \#\,\#\#0\.00_-\;_-* \0022-\0022??_-\;_-\@_-";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl58
	{mso-style-parent:style0;
	mso-number-format:"_-* \#\,\#\#0_-\;\\-* \#\,\#\#0_-\;_-* \0022-\0022_-\;_-\@_-";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl59
	{mso-style-parent:style0;
	mso-number-format:"_-* \#\,\#\#0_-\;\\-* \#\,\#\#0_-\;_-* \0022-\0022_-\;_-\@_-";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	background:silver;
	mso-pattern:auto none;
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
<![if !supportAnnotations]><style id="dynCom" type="text/css"><!-- --></style>

<script language="JavaScript"><!--

function msoCommentShow(com_id,anchor_id) {
	if(msoBrowserCheck()) {
	   c = document.all(com_id);
	   a = document.all(anchor_id);
	   if (null != c) {
		var cw = c.offsetWidth;
		var ch = c.offsetHeight;
		var aw = a.offsetWidth;
		var ah = a.offsetHeight;
		var x = a.offsetLeft;
		var y = a.offsetTop;
		var el = a;
		while (el.tagName != "BODY") {
		   el = el.offsetParent;
		   x = x + el.offsetLeft;
		   y = y + el.offsetTop;
		   }		
		var bw = document.body.clientWidth;
		var bh = document.body.clientHeight;
		var bsl = document.body.scrollLeft;
		var bst = document.body.scrollTop;
		if (x + cw + ah/2 > bw + bsl && x + aw - ah/2 - cw >= bsl ) {
		   c.style.left = x + aw - ah / 2 - cw; 
		}
		else {
		   c.style.left = x + ah/2; 
		}
		if (y + ch + ah/2 > bh + bst && y + ah/2 - ch >= bst ) {
	 	   c.style.top = y + ah/2 - ch;
		} 
		else {
		   c.style.top = y + ah/2;
		}
		c.style.visibility = "visible";
	   }
	}
}

function msoCommentHide(com_id) {
	if(msoBrowserCheck()) {
	  c = document.all(com_id)
	  if (null != c) {
	    c.style.visibility = "hidden";
	    c.style.left = "-10000";
	    c.style.top = "-10000";
	  }
	}
}

function msoBrowserCheck() {
 ms=navigator.appVersion.indexOf("MSIE");
 vers = navigator.appVersion.substring(ms+5, ms+6);
 ie4 = (ms>0) && (parseInt(vers) >=4);
 return ie4
}

if (msoBrowserCheck()) {
document.styleSheets.dynCom.addRule(".msocomspan1","position:absolute");
document.styleSheets.dynCom.addRule(".msocomspan2","position:absolute");
document.styleSheets.dynCom.addRule(".msocomspan2","left:-1.5ex");
document.styleSheets.dynCom.addRule(".msocomspan2","width:2ex");
document.styleSheets.dynCom.addRule(".msocomspan2","height:0.5em");
document.styleSheets.dynCom.addRule(".msocomanch","font-size:0.5em");
document.styleSheets.dynCom.addRule(".msocomanch","color:red");
document.styleSheets.dynCom.addRule(".msocomhide","display: none");
document.styleSheets.dynCom.addRule(".msocomtxt","visibility: hidden");
document.styleSheets.dynCom.addRule(".msocomtxt","position: absolute");        
document.styleSheets.dynCom.addRule(".msocomtxt","top:-10000");         
document.styleSheets.dynCom.addRule(".msocomtxt","left:-10000");         
document.styleSheets.dynCom.addRule(".msocomtxt","width: 33%");                 
document.styleSheets.dynCom.addRule(".msocomtxt","background: infobackground");
document.styleSheets.dynCom.addRule(".msocomtxt","color: infotext");
document.styleSheets.dynCom.addRule(".msocomtxt","border-top: 1pt solid threedlightshadow");
document.styleSheets.dynCom.addRule(".msocomtxt","border-right: 2pt solid threedshadow");
document.styleSheets.dynCom.addRule(".msocomtxt","border-bottom: 2pt solid threedshadow");
document.styleSheets.dynCom.addRule(".msocomtxt","border-left: 1pt solid threedlightshadow");
document.styleSheets.dynCom.addRule(".msocomtxt","padding: 3pt 3pt 3pt 3pt");
document.styleSheets.dynCom.addRule(".msocomtxt","z-index: 100");
}

// -->
</script>
<![endif]><!--[if gte mso 9]><xml>
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
       <x:ActiveRow>16</x:ActiveRow>
       <x:ActiveCol>11</x:ActiveCol>
       <x:RangeSelection>$L$17:$O$17</x:RangeSelection>
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
</xml><![endif]--><!--[if gte mso 9]><xml>
 <o:shapedefaults v:ext="edit" spidmax="2049"/>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <o:shapelayout v:ext="edit">
  <o:idmap v:ext="edit" data="1"/>
 </o:shapelayout></xml><![endif]-->
</head>

<body link=blue vlink=purple>

<table x:str border=0 cellpadding=0 cellspacing=0 width=2445 style='border-collapse:
 collapse;table-layout:fixed;width:1837pt'>
 <col width=55 style='mso-width-source:userset;mso-width-alt:1760;width:41pt'>
 <col width=109 style='mso-width-source:userset;mso-width-alt:3488;width:82pt'>
 <col width=143 style='mso-width-source:userset;mso-width-alt:4576;width:107pt'>
 <col width=82 style='mso-width-source:userset;mso-width-alt:2624;width:62pt'>
 <col width=106 style='mso-width-source:userset;mso-width-alt:3392;width:80pt'>
 <col width=95 style='mso-width-source:userset;mso-width-alt:3040;width:71pt'>
 <col width=76 style='mso-width-source:userset;mso-width-alt:2432;width:57pt'>
 <col width=78 style='mso-width-source:userset;mso-width-alt:2496;width:59pt'>
 <col width=87 style='mso-width-source:userset;mso-width-alt:2784;width:65pt'>
 <col width=86 style='mso-width-source:userset;mso-width-alt:2752;width:65pt'>
 <col width=83 style='mso-width-source:userset;mso-width-alt:2656;width:62pt'>
 <col width=82 style='mso-width-source:userset;mso-width-alt:2624;width:62pt'>
 <col width=94 style='mso-width-source:userset;mso-width-alt:3008;width:71pt'>
 <col width=126 style='mso-width-source:userset;mso-width-alt:4032;width:95pt'>
 <col width=93 style='mso-width-source:userset;mso-width-alt:2976;width:70pt'>
 <col width=114 style='mso-width-source:userset;mso-width-alt:3648;width:86pt'>
 <col width=95 style='mso-width-source:userset;mso-width-alt:3040;width:71pt'>
 <col width=99 style='mso-width-source:userset;mso-width-alt:3168;width:74pt'>
 <col width=91 style='mso-width-source:userset;mso-width-alt:2912;width:68pt'>
 <col width=93 style='mso-width-source:userset;mso-width-alt:2976;width:70pt'>
 <col width=81 style='mso-width-source:userset;mso-width-alt:2592;width:61pt'>
 <col width=80 style='mso-width-source:userset;mso-width-alt:2560;width:60pt'>
 <col width=79 style='mso-width-source:userset;mso-width-alt:2528;width:59pt'>
 <col width=82 style='mso-width-source:userset;mso-width-alt:2624;width:62pt'>
 <col width=145 style='mso-width-source:userset;mso-width-alt:4640;width:109pt'>
 <col width=91 style='mso-width-source:userset;mso-width-alt:2912;width:68pt'>
 <tr class=xl24 height=80 style='mso-height-source:userset;height:60.0pt'>
  <td colspan=26 height=80 class=xl37 width=2445 style='height:60.0pt;
  width:1837pt'>媒体经营汇总</td>
 </tr>
 <tr class=xl29 height=23 style='mso-height-source:userset;height:17.25pt'>
  <td colspan=4 height=23 class=xl34 width=389 style='border-right:.5pt solid black;
  height:17.25pt;width:292pt'>媒体规格</td>
  <td colspan=5 class=xl34 width=442 style='border-right:.5pt solid black;
  border-left:none;width:332pt'>占地签约情况</td>
  <td colspan=3 class=xl34 width=251 style='border-right:.5pt solid black;
  border-left:none;width:189pt'>手续审批期限</td>
  <td colspan=14 class=xl40 width=1363 style='border-right:.5pt solid black;
  border-left:none;width:1024pt' x:str="费用"><span
  style='mso-spacerun:yes'>&nbsp;</span>费用<span
  style='mso-spacerun:yes'>&nbsp;</span></td>
 </tr>
 <tr class=xl28 height=23 style='mso-height-source:userset;height:17.25pt'>
  <td rowspan=2 height=58 class=xl43 width=55 style='height:43.5pt;border-top:
  none;width:41pt'>序号</td>
  <td rowspan=2 class=xl43 width=109 style='border-top:none;width:82pt'>媒体编号</td>
  <td rowspan=2 class=xl43 width=143 style='border-top:none;width:107pt'>地点</td>
  <td rowspan=2 class=xl44 width=82 style='border-top:none;width:62pt'>面积</td>
  <td rowspan=2 class=xl47 width=106 style='border-bottom:.5pt solid black;
  border-top:none;width:80pt'>合同编号</td>
  <td rowspan=2 class=xl43 width=95 style='border-top:none;width:71pt'>合同期限</td>
  <td rowspan=2 class=xl43 width=76 style='border-top:none;width:57pt'>签约年限</td>
  <td rowspan=2 class=xl49 width=78 style='border-bottom:.5pt solid black;
  border-top:none;width:59pt' x:str="年租金"><span
  style='mso-spacerun:yes'>&nbsp;</span>年租金<span
  style='mso-spacerun:yes'>&nbsp;</span></td>
  <td rowspan=2 class=xl30 width=87 style='border-top:none;width:65pt'
  x:str="签约金额"><span style='mso-spacerun:yes'>&nbsp;</span>签约金额<span
  style='mso-spacerun:yes'>&nbsp;</span></td>
  <td rowspan=2 class=xl43 width=86 style='border-top:none;width:65pt'>市容</td>
  <td rowspan=2 class=xl43 width=83 style='border-top:none;width:62pt'>工商</td>
  <td rowspan=2 class=xl45 width=82 style='border-bottom:.5pt solid black;
  border-top:none;width:62pt'>其他</td>
  <td colspan=4 class=xl54 width=427 style='border-right:.5pt solid black;
  border-left:none;width:322pt' x:str="占地费/年"><span
  style='mso-spacerun:yes'>&nbsp;</span>占地费/年<span
  style='mso-spacerun:yes'>&nbsp;</span></td>
  <td colspan=4 class=xl51 width=378 style='border-right:.5pt solid black;
  border-left:none;width:283pt' x:str="电费/年"><span
  style='mso-spacerun:yes'>&nbsp;</span>电费/年<span
  style='mso-spacerun:yes'>&nbsp;</span></td>
  <td colspan=2 class=xl58 width=161 style='border-right:.5pt solid black;
  border-left:none;width:121pt' x:str="审批费用"><span
  style='mso-spacerun:yes'>&nbsp;</span>审批费用<span
  style='mso-spacerun:yes'>&nbsp;</span><![if !supportAnnotations]><span
  class=msocomspan1><span class=msocomspan2 id="_anchor_1"
  onmouseover="msoCommentShow('_com_1','_anchor_1')"
  onmouseout="msoCommentHide('_com_1')" language=JavaScript><a
  class=msocomanch href="#_msocom_1" name="_msoanchor_1">[1]</a></span></span><![endif]></td>
  <td colspan=2 class=xl51 width=161 style='border-right:.5pt solid black;
  border-left:none;width:121pt' x:str="其他费用"><span
  style='mso-spacerun:yes'>&nbsp;</span>其他费用<span
  style='mso-spacerun:yes'>&nbsp;</span><![if !supportAnnotations]><span
  class=msocomspan1><span class=msocomspan2 id="_anchor_2"
  onmouseover="msoCommentShow('_com_2','_anchor_2')"
  onmouseout="msoCommentHide('_com_2')" language=JavaScript><a
  class=msocomanch href="#_msocom_2" name="_msoanchor_2">[2]</a></span></span><![endif]></td>
  <td colspan=2 class=xl51 width=236 style='border-right:.5pt solid black;
  border-left:none;width:177pt' x:str="维修监测"><span
  style='mso-spacerun:yes'>&nbsp;</span>维修监测<span
  style='mso-spacerun:yes'>&nbsp;</span></td>
 </tr>
 <tr class=xl28 height=35 style='mso-height-source:userset;height:26.25pt'>
  <td height=35 class=xl30 width=94 style='height:26.25pt;border-top:none;
  border-left:none;width:71pt' x:str="已付款金额"><span
  style='mso-spacerun:yes'>&nbsp;</span>已付款金额<span
  style='mso-spacerun:yes'>&nbsp;</span></td>
  <td class=xl31 width=126 style='border-top:none;border-left:none;width:95pt'
  x:str="当月（年）付款"><span style='mso-spacerun:yes'>&nbsp;</span>当月（年）付款<span
  style='mso-spacerun:yes'>&nbsp;</span></td>
  <td class=xl32 width=93 style='border-top:none;border-left:none;width:70pt'>付款日期</td>
  <td class=xl31 width=114 style='border-top:none;border-left:none;width:86pt'
  x:str="累计付款金额"><span style='mso-spacerun:yes'>&nbsp;</span>累计付款金额<span
  style='mso-spacerun:yes'>&nbsp;</span></td>
  <td class=xl33 width=95 style='border-left:none;width:71pt'>上次电表数</td>
  <td class=xl33 width=99 style='border-left:none;width:74pt'>本次电表数</td>
  <td class=xl30 width=91 style='border-left:none;width:68pt' x:str="付款金额"><span
  style='mso-spacerun:yes'>&nbsp;</span>付款金额<span
  style='mso-spacerun:yes'>&nbsp;</span></td>
  <td class=xl30 width=93 style='border-left:none;width:70pt' x:str="付款日期"><span
  style='mso-spacerun:yes'>&nbsp;</span>付款日期<span
  style='mso-spacerun:yes'>&nbsp;</span></td>
  <td class=xl30 width=81 style='border-left:none;width:61pt' x:str="付款金额"><span
  style='mso-spacerun:yes'>&nbsp;</span>付款金额<span
  style='mso-spacerun:yes'>&nbsp;</span></td>
  <td class=xl32 width=80 style='border-left:none;width:60pt'>付款日期</td>
  <td class=xl30 width=79 style='border-left:none;width:59pt' x:str="付款金额"><span
  style='mso-spacerun:yes'>&nbsp;</span>付款金额<span
  style='mso-spacerun:yes'>&nbsp;</span></td>
  <td class=xl30 width=82 style='border-left:none;width:62pt' x:str="付款日期"><span
  style='mso-spacerun:yes'>&nbsp;</span>付款日期<span
  style='mso-spacerun:yes'>&nbsp;</span></td>
  <td class=xl30 width=145 style='border-left:none;width:109pt' x:str="检测内容"><span
  style='mso-spacerun:yes'>&nbsp;</span>检测内容<span
  style='mso-spacerun:yes'>&nbsp;</span></td>
  <td class=xl30 width=91 style='border-left:none;width:68pt' x:str="监测日期"><span
  style='mso-spacerun:yes'>&nbsp;</span>监测日期<span
  style='mso-spacerun:yes'>&nbsp;</span></td>
 </tr>
<?php
for($i=0;$i<16;$i++){
if($i<15){
?>
 <tr class=xl26 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl27 width=55 style='height:24.95pt;border-top:none;
  width:41pt'><?php echo $i+1?></td>
  <td class=xl27 width=109 style='border-top:none;border-left:none;width:82pt'><?php echo W_I_DB($typeid,$tplid,'_14_22_a1',100,25)?></td>
  <td class=xl27 width=143 style='border-top:none;border-left:none;width:107pt'><?php echo W_I_DB($typeid,$tplid,'_14_22_a2',130,25)?></td>
  <td class=xl27 width=82 style='border-top:none;border-left:none;width:62pt'><?php echo W_I_DB($typeid,$tplid,'_14_22_a3',70,25)?>　</td>
  <td class=xl27 width=106 style='border-top:none;border-left:none;width:80pt'><?php echo W_I_DB($typeid,$tplid,'_14_22_a4',90,25)?>　</td>
  <td class=xl27 width=95 style='border-top:none;border-left:none;width:71pt'><?php echo W_I_DB($typeid,$tplid,'_14_22_a5',80,25)?>　</td>
  <td class=xl27 width=76 style='border-top:none;border-left:none;width:57pt'><?php echo W_I_DB($typeid,$tplid,'_14_22_a6',70,25)?>　</td>
  <td class=xl27 width=78 style='border-top:none;border-left:none;width:59pt'><?php echo W_I_DB($typeid,$tplid,'_14_22_a7',70,25)?>　</td>
  <td class=xl27 width=87 style='border-top:none;border-left:none;width:65pt'><?php echo W_I_DB($typeid,$tplid,'_14_22_a8',70,25)?>　</td>
  <td class=xl27 width=86 style='border-top:none;border-left:none;width:65pt'><?php echo W_I_DB($typeid,$tplid,'_14_22_a9',70,25)?>　</td>
  <td class=xl27 width=83 style='border-top:none;border-left:none;width:62pt'><?php echo W_I_DB($typeid,$tplid,'_14_22_a10',70,25)?>　</td>
  <td class=xl27 width=82 style='border-top:none;border-left:none;width:62pt'><?php echo W_I_DB($typeid,$tplid,'_14_22_a11',70,25)?>　</td>
  <td class=xl27 width=94 style='border-top:none;border-left:none;width:71pt'><?php echo W_I_DB($typeid,$tplid,'_14_22_a12',80,25)?>　</td>
  <td class=xl27 width=126 style='border-top:none;border-left:none;width:95pt'><?php echo W_I_DB($typeid,$tplid,'_14_22_a13',100,25)?>　</td>
  <td class=xl27 width=93 style='border-top:none;border-left:none;width:70pt'><?php echo W_I_DB($typeid,$tplid,'_14_22_a14',80,25)?>　</td>
  <td class=xl27 width=114 style='border-top:none;border-left:none;width:86pt'><?php echo W_I_DB($typeid,$tplid,'_14_22_a15',80,25)?>　</td>
  <td class=xl27 width=95 style='border-top:none;border-left:none;width:71pt'><?php echo W_I_DB($typeid,$tplid,'_14_22_a16',80,25)?>　</td>
  <td class=xl27 width=99 style='border-top:none;border-left:none;width:74pt'><?php echo W_I_DB($typeid,$tplid,'_14_22_a17',80,25)?>　</td>
  <td class=xl27 width=91 style='border-top:none;border-left:none;width:68pt'><?php echo W_I_DB($typeid,$tplid,'_14_22_a18',70,25)?>　</td>
  <td class=xl27 width=93 style='border-top:none;border-left:none;width:70pt'><?php echo W_I_DB($typeid,$tplid,'_14_22_a19',70,25)?>　</td>
  <td class=xl27 width=81 style='border-top:none;border-left:none;width:61pt'><?php echo W_I_DB($typeid,$tplid,'_14_22_a20',70,25)?>　</td>
  <td class=xl27 width=80 style='border-top:none;border-left:none;width:60pt'><?php echo W_I_DB($typeid,$tplid,'_14_22_a21',70,25)?>　</td>
  <td class=xl27 width=79 style='border-top:none;border-left:none;width:59pt'><?php echo W_I_DB($typeid,$tplid,'_14_22_a22',70,25)?>　</td>
  <td class=xl27 width=82 style='border-top:none;border-left:none;width:62pt'><?php echo W_I_DB($typeid,$tplid,'_14_22_a23',70,25)?>　</td>
  <td class=xl27 width=145 style='border-top:none;border-left:none;width:109pt'><?php echo W_I_DB($typeid,$tplid,'_14_22_a24',120,25)?>　</td>
  <td class=xl27 width=91 style='border-top:none;border-left:none;width:68pt'><?php echo W_I_DB($typeid,$tplid,'_14_22_a25',80,25)?>　</td>
 </tr>
<?php
}else{
?>
 
 <tr class=xl26 height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl27 width=55 style='height:24.95pt;border-top:none;
  width:41pt'>合计</td>
  <td class=xl27 width=109 style='border-top:none;border-left:none;width:82pt'><?php echo W_I_DB($typeid,$tplid,'_14_22_a1',100,25)?></td>
  <td class=xl27 width=143 style='border-top:none;border-left:none;width:107pt'><?php echo W_I_DB($typeid,$tplid,'_14_22_a2',130,25)?></td>
  <td class=xl27 width=82 style='border-top:none;border-left:none;width:62pt'><?php echo W_I_DB($typeid,$tplid,'_14_22_a3',70,25)?>　</td>
  <td class=xl27 width=106 style='border-top:none;border-left:none;width:80pt'><?php echo W_I_DB($typeid,$tplid,'_14_22_a4',90,25)?>　</td>
  <td class=xl27 width=95 style='border-top:none;border-left:none;width:71pt'><?php echo W_I_DB($typeid,$tplid,'_14_22_a5',80,25)?>　</td>
  <td class=xl27 width=76 style='border-top:none;border-left:none;width:57pt'><?php echo W_I_DB($typeid,$tplid,'_14_22_a6',70,25)?>　</td>
  <td class=xl27 width=78 style='border-top:none;border-left:none;width:59pt'><?php echo W_I_DB($typeid,$tplid,'_14_22_a7',70,25)?>　</td>
  <td class=xl27 width=87 style='border-top:none;border-left:none;width:65pt'><?php echo W_I_DB($typeid,$tplid,'_14_22_a8',70,25)?>　</td>
  <td class=xl27 width=86 style='border-top:none;border-left:none;width:65pt'><?php echo W_I_DB($typeid,$tplid,'_14_22_a9',70,25)?>　</td>
  <td class=xl27 width=83 style='border-top:none;border-left:none;width:62pt'><?php echo W_I_DB($typeid,$tplid,'_14_22_a10',70,25)?>　</td>
  <td class=xl27 width=82 style='border-top:none;border-left:none;width:62pt'><?php echo W_I_DB($typeid,$tplid,'_14_22_a11',70,25)?>　</td>
  <td class=xl27 width=94 style='border-top:none;border-left:none;width:71pt'><?php echo W_I_DB($typeid,$tplid,'_14_22_a12',80,25)?>　</td>
  <td class=xl27 width=126 style='border-top:none;border-left:none;width:95pt'><?php echo W_I_DB($typeid,$tplid,'_14_22_a13',100,25)?>　</td>
  <td class=xl27 width=93 style='border-top:none;border-left:none;width:70pt'><?php echo W_I_DB($typeid,$tplid,'_14_22_a14',80,25)?>　</td>
  <td class=xl27 width=114 style='border-top:none;border-left:none;width:86pt'><?php echo W_I_DB($typeid,$tplid,'_14_22_a15',80,25)?>　</td>
  <td class=xl27 width=95 style='border-top:none;border-left:none;width:71pt'><?php echo W_I_DB($typeid,$tplid,'_14_22_a16',80,25)?>　</td>
  <td class=xl27 width=99 style='border-top:none;border-left:none;width:74pt'><?php echo W_I_DB($typeid,$tplid,'_14_22_a17',80,25)?>　</td>
  <td class=xl27 width=91 style='border-top:none;border-left:none;width:68pt'><?php echo W_I_DB($typeid,$tplid,'_14_22_a18',70,25)?>　</td>
  <td class=xl27 width=93 style='border-top:none;border-left:none;width:70pt'><?php echo W_I_DB($typeid,$tplid,'_14_22_a19',70,25)?>　</td>
  <td class=xl27 width=81 style='border-top:none;border-left:none;width:61pt'><?php echo W_I_DB($typeid,$tplid,'_14_22_a20',70,25)?>　</td>
  <td class=xl27 width=80 style='border-top:none;border-left:none;width:60pt'><?php echo W_I_DB($typeid,$tplid,'_14_22_a21',70,25)?>　</td>
  <td class=xl27 width=79 style='border-top:none;border-left:none;width:59pt'><?php echo W_I_DB($typeid,$tplid,'_14_22_a22',70,25)?>　</td>
  <td class=xl27 width=82 style='border-top:none;border-left:none;width:62pt'><?php echo W_I_DB($typeid,$tplid,'_14_22_a23',70,25)?>　</td>
  <td class=xl27 width=145 style='border-top:none;border-left:none;width:109pt'><?php echo W_I_DB($typeid,$tplid,'_14_22_a24',120,25)?>　</td>
  <td class=xl27 width=91 style='border-top:none;border-left:none;width:68pt'><?php echo W_I_DB($typeid,$tplid,'_14_22_a25',80,25)?>　</td>
 </tr>
 
<?php
}
 }?> 
 <tr class=xl25 height=46 style='mso-height-source:userset;height:35.1pt'>
  <td colspan=3 height=46 class=xl53 width=307 style='height:35.1pt;width:230pt'>填报人：<?php echo W_I_DB($typeid,$tplid,'_14_22_1',100,25)?></td>
  <td colspan=4 class=xl53 width=359 style='width:270pt'>部门负责人审批:</td>
  <td colspan=4 class=xl53 width=334 style='width:251pt'>财务负责人审批:</td>
  <td colspan=4 class=xl53 width=395 style='width:298pt'>总经理审批:</td>
  <td colspan=11 class=xl25 style='mso-ignore:colspan'></td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=55 style='width:41pt'></td>
  <td width=109 style='width:82pt'></td>
  <td width=143 style='width:107pt'></td>
  <td width=82 style='width:62pt'></td>
  <td width=106 style='width:80pt'></td>
  <td width=95 style='width:71pt'></td>
  <td width=76 style='width:57pt'></td>
  <td width=78 style='width:59pt'></td>
  <td width=87 style='width:65pt'></td>
  <td width=86 style='width:65pt'></td>
  <td width=83 style='width:62pt'></td>
  <td width=82 style='width:62pt'></td>
  <td width=94 style='width:71pt'></td>
  <td width=126 style='width:95pt'></td>
  <td width=93 style='width:70pt'></td>
  <td width=114 style='width:86pt'></td>
  <td width=95 style='width:71pt'></td>
  <td width=99 style='width:74pt'></td>
  <td width=91 style='width:68pt'></td>
  <td width=93 style='width:70pt'></td>
  <td width=81 style='width:61pt'></td>
  <td width=80 style='width:60pt'></td>
  <td width=79 style='width:59pt'></td>
  <td width=82 style='width:62pt'></td>
  <td width=145 style='width:109pt'></td>
  <td width=91 style='width:68pt'></td>
 </tr>
 <![endif]>
</table>


<?php
include_once('footer.php');
?>