<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');
//global $db;
date_default_timezone_set("PRC");
$s4=date("Y-m-d H:i:s");

if($_GET['do']=='save'){
		  $sql = "SELECT * FROM ".DB_TABLEPRE."personnel where (lnstructions<>'生成收文拟办，系统自动完成该步骤' or isnull(lnstructions)) and fileid='".$_POST['id']."' and type='".$_POST['type']."' order by id desc limit 0,2";
	      $result9 = $db->fetch_all($sql);//print_r($result9);
			foreach ($result9 as $row9) {
				if($sql!=''){
					$sql='';
					if($row9['pkey']=='0'){
						$canback=$row9['id'];
					}else{
						$canback='0';
					}
				}else{
					if($canback!='0' && strpos('1'.$row9['name'],get_realname($_USER->id))>=1){
						$db->query("update ".DB_TABLEPRE."personnel set fileid='被回退：".$_POST['id']."',lnstructions='".$row9['lnstructions']."<br><font color=red>此操作在".$s4."被".get_realname($_USER->id)."回退，理由：".$_POST['ly']."</font>' WHERE id =".$canback." or id=".$row9['id']);
		////////////////////////////////
						$personnel2 = array(
							'type' =>$row9['type'],
							'name' =>$row9['name'],
							'uid' =>$row9['uid'],
							'node' =>$row9['node'],
							'pkey' =>0,
							'fileid' =>$row9['fileid'],
							'apptype' =>$row9['apptype'],
							'appflow' =>$row9['appflow'],
							'appkey' =>$row9['appkey'],
							'appkey1' =>$row9['appkey1']
							);
						insert_db('personnel',$personnel2);
					
						if($row9['appkey']=='1'){
							$staff=explode(',',$row9['name']);
							$staffid=explode(',',$row9['uid']);
							for($i=0;$i<sizeof($staffid);$i++){
								$personnel_log = array(
									'type' => 2,
									'name' => $staff[$i],
									'uid' =>$staffid[$i],
									'pkey' =>0,
									'perid' =>$row9['id']
									);
								insert_db('personnel_log',$personnel_log);
							}
						}
						//$db->query('UPDATE personnel SET oapostscript ="流程被回退，理由：".$_POST['ly'] where id=');
/////////////////////////////
						if ($_POST['type']=='1'){
							show_msg('操作成功，当前步骤已被撤销！', 'admin.php?ac=attachment&fileurl=app&type=5');
						}else{
							show_msg('操作成功，当前步骤已被撤销！', 'admin.php?ac=approval&fileurl=app&type=5');
						}
					}else{
						echo '在您提交回退操作前，该公文状态已发生变化，且当前状态无法进行回退操作！';
					}
				}
			}


}else{

	if ($_GET['type']=='1'){
		$tkey="attachment";
	}else{
		$tkey="approval";
	}
	$sql="select title from toa_".$tkey." where id=".$_GET['id'];
$row = $db->fetch_one_array($sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<link rel="stylesheet" type="text/css" href="template/default/content/css/style.css">
<title>OA办公系统</title>
 
</head>
<body class="bodycolor">
<table width="90%" border="0" align="center" cellpadding="3" cellspacing="0" class="small">
  <tr>
    <td class="Big"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3"> <?php echo $row['title']?></span>&nbsp;&nbsp;&nbsp;&nbsp;
	<span style="font-size:12px; float:right; margin-right:20px;">
	<a href="admin.php?ac=<?php echo $tkey?>&fileurl=app&type=5" style="font-size:12px;"><< 返回经办列表</a>&nbsp;|&nbsp;<a href="#" onClick="window.open('admin.php?ac=<?php echo $tkey?>&fileurl=app&do=appflow&fileid=<?php echo $_GET['id']?>', 'newwindow', 'height=550, width=500, top=6, right=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=no, status=no')"><font color="red">查看审批记录</font>
</a></span>
    </td>
  </tr>
</table>

<form name="save" method="post" action="admin.php?ac=returnback&fileurl=app&do=save">
<input type="hidden" name="id" value="<? echo $_GET['id']?>" />
<input type="hidden" name="type" value="<? echo $_GET['type']?>" />
<table class="TableBlock" border="0" width="90%" align="center">
	<tr>
      <td nowrap class="TableHeader" colspan="2"><b>&nbsp;撤回重新审批</b></td>
    </tr>
	<tr>
      <td nowrap align="right">请输入你要撤销的原因：</td><td nowrap><textarea name="ly" cols="60" rows="8"></textarea></td>
    </tr>
	
	</span>
	<tr align="center" class="TableControl">
      <td colspan="2" nowrap height="35">
<input type="button" name="Submit" value="提 交" class="BigButtonBHover" onclick="sendForm();"> 	  </td>
    </tr>
</table>

</form>
<script language="javascript">
function sendForm(){
	if (document.save.ly.value==""){
		alert("操作原因不能为空!");
		document.save.ly.focus();
	}else{
		document.save.submit();
	}
}

</script>
</body>
</html>


<?
}
?>