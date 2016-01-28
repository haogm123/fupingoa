<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<link rel="stylesheet" type="text/css" href="template/default/content/css/style.css">
<script language="javascript" type="text/javascript" src="template/default/js/jquery.min.js"></script>
<script type="text/javascript">
function show_number(types)
{
   mytop=(screen.availHeight-600)/2;
   myleft=(screen.availWidth-1002)/2;
   window.open(""+types+"","","height=600,width=1002,status=0,toolbar=no,menubar=no,location=no,scrollbars=yes,top="+mytop+",left="+myleft+",resizable=yes");
} 

</script>
<title>Office 515158 2011 OA办公系统</title>
</head>
<body class="bodycolor">
<div id="navPanel" >
<div id="search" style="float: left; padding-left:30px; line-height:25px;">
	<b>流水号： </b><?php echo $row['number']?>&nbsp;&nbsp;&nbsp;&nbsp;
	<b>工作流名称：</b><?php echo $row['title']?>&nbsp;&nbsp;&nbsp;&nbsp;
	<?php if($row['numberview']!=''){?>
		<b><span>关连项目：</span></b>
		<?php
		$nview=explode(',',$row['numberview']);
		$nurl=explode(',',$row['numberurl']); 
		for($i=0;$i<sizeof($nview);$i++){
			echo ' <a href="javascript:;" onClick="show_number(';
			echo "'".$nurl[$i]."')";
			echo '"><span>';
			echo $nview[$i].'</span></a>';
		}
	}
	?>
	
	<!--&nbsp;&nbsp;
	<a href="#" onClick="expression.PrintOut(1,1,1,false,'打印机名',false,false);">+打印文件</a> --><a href="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&modid=<?php echo $modid?>&projectid=<?php echo $projectid?>&typeid=<?php echo $typeid?>&type=<?php echo $_GET['type']?>" style="font-size:12px;"><< 返回<?php echo $mod['modname']?>列表</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="down.php?urls=<?php echo "data/excel/project/l_".$row['lid'].".xls"?>">+导出报表</a>
	


 
</div>
</div>

<div align="center" style="position:absolute; height:85%; width:100%;overflow:auto; padding-bottom:20px; background-color:#FFFFFF;"> 
