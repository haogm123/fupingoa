<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<link rel="stylesheet" type="text/css" href="template/default/content/css/style.css">
<script language="javascript" type="text/javascript" src="template/default/js/jquery.min.js"></script>
<script type="text/javascript">
function show_number(types){
   mytop=(screen.availHeight-600)/2;
   myleft=(screen.availWidth-1002)/2;
   window.open("admin.php?ac=list&do=view&fileurl=workclass&workid="+types+"","","height=600,width=1002,status=0,toolbar=no,menubar=no,location=no,scrollbars=yes,top="+mytop+",left="+myleft+",resizable=yes");
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
		<b>关连流程：</b>
		<?php
		$nview=explode(',',$row['numberview']); 
		for($i=0;$i<sizeof($nview);$i++){
			$sqlv ="SELECT id FROM ".DB_TABLEPRE."workclass  WHERE number = '".trim($nview[$i])."'";
			$rowv = $db->fetch_one_array($sqlv);
			echo ' <a href="javascript:;" onClick="show_number('.$rowv['id'].')">';
			echo $nview[$i].'</a>&nbsp;|&nbsp;';
		}
	}
	?>
	
	<!--&nbsp;&nbsp;
	<a href="#" onClick="expression.PrintOut(1,1,1,false,'打印机名',false,false);">+打印文件</a> -->&nbsp;&nbsp;&nbsp;&nbsp;<a href="down.php?urls=<?php echo "data/excel/workclass/".$row['id'].".xls"?>">+导出报表</a>
&nbsp;&nbsp;&nbsp;&nbsp;
<?php
$sql = "SELECT * FROM ".DB_TABLEPRE."workclass_personnel  WHERE workid = '".$row['id']."'  and (pertype=0 or pertype=2 or pertype=4 or pertype=5) and typeid='".$row['typeid']."'  order by perid desc";
$per = $db->fetch_one_array($sql);
//审批
			  $sql = "SELECT * FROM ".DB_TABLEPRE."workclass_personnel where name like '%".get_realname($_USER->id)."%' and (pertype=0 or pertype=4) and typeid='".$row['typeid']."' and workid='".$row['id']."'  order by perid desc";
			  $per = $db->fetch_one_array($sql);
			  if($per['perid']!=''){
				  if($per['appkey']==1 && $per['appkey1']==1){
					  $perlnum = $db->result("SELECT COUNT(*) AS perlnum FROM ".DB_TABLEPRE."workclass_personnel_log where perid='".$per['perid']."' and uid='".$_USER->id."' and pertype=0");
					  if($perlnum>0){
						  echo '<a href="admin.php?ac='.$ac.'&do=personnel&fileurl='.$fileurl.'&workid='.$row['id'].'" style="color:#FF0000;">+在线审批</a>';
					  }
				  }else{
					  echo '<a href="admin.php?ac='.$ac.'&do=personnel&fileurl='.$fileurl.'&workid='.$row['id'].'" style="color:#FF0000;">+在线审批</a>';
				  }
			  }

?>


 
</div>
</div>

<div align="center" style="position:absolute; height:85%; width:100%;overflow:auto; padding-bottom:20px; background-color:#FFFFFF;"> 
