<html><head><title>自动发送短消息模块 [请勿关闭此页面]</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
	define('IN_ADMIN',True);
	require_once('../include/common.php');


//SELECT id FROM  `toa_attachment` WHERE `attakey`=0 and DATEDIFF( NOW( ) , end_time ) <3


$sql="SELECT id,DATEDIFF(NOW(),end_time) as days,1 as tp,'attachment' as ftab FROM toa_attachment WHERE attakey=0 and DATEDIFF(NOW(),end_time)>-4 union all SELECT id,DATEDIFF(NOW(),end_time) as days,2 as tp,'approval' as ftab FROM toa_approval WHERE akey=0 and DATEDIFF(NOW(),end_time)>-4";

$result = $db->query($sql);
$i=0;
while ($row = $db->fetch_array($result)) {
	if($row['days']==0){
		$content="你有一条公文需要在今天完成审批，请尽快处理！";
	}elseif($row['days']<0){
		$content="你有一条公文需要在".(0-$row['days'])."天内完成审批！";
	}else{
		$content="你有一条公文已超期".$row['days']."天，请尽快处理！";
	}
	$query = $db->query("SELECT id,name,pkey,apptype FROM toa_personnel where fileid=".$row['id']." and type=".$row['tp']." and pkey in(0,4)");
	while ($log = $db->fetch_array($query)) {
	$i+=1;
	$content.='<a href="admin.php?ac='.$row['ftab'].'&do=personnel&fileurl=app';
	$content.='&fileid='.$row['id'].'&apptype='.$log['apptype'].'">进入办理<a/>';
	
		if($log['pkey']=='0'){
			SMS_ADD_POST($log['name'],$content,0,0,1);
			echo $row['id'].$content."NAME:".$log['name']."<br>";
		}else{
			$query2 = $db->query("SELECT name FROM toa_personnel_log where perid=".$log['id']." and pkey=0");
			while ($logg = $db->fetch_array($query2)) {
				SMS_ADD_POST($logg['name'],$content,0,0,1);
				echo "[多人]".$row['id'].$content."NAME:".$logg['name']."<br>";
			}
		}
	}
}
date_default_timezone_set("PRC");
echo date("Y-m-d H:i:s");
?><br>运行成功，共有<? echo $i?>条公文符合提醒条件！<br>5d64d624bb
<script language="javascript">

setTimeout("go();",3600000);
function go(){
setTimeout("go();",3600000);
var weekArray = new Array("星期日", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六");
var week = weekArray[new Date().getDay()];// 这个就是你想要的结果吧   
if(week=="星期六" || week=="星期日"){return false;}
var dt = new Date();
var ttt=dt.getHours();
if(ttt<9 || ttt>17){return false;}
document.location='http://localhost:5104/inc/auto_send.php?&date='+new Date()
}

</script>