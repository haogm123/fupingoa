<?php
echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html>
';
(!defined('IN_TOA') ||!defined('IN_ADMIN')) &&exit('Access Denied!');
get_key("appset_");
global $db;
$id=$_POST['fileid'];
$fontsize=$_POST['fontsize'];
$proofread=$_POST['proofread'];
$repairs=$_POST['repairs'];
$sealing=$_POST['sealing'];
if($id!=""){
if($fontsize!=""and $_USER->id==9){
$sql='UPDATE toa_approval SET fontsize = "'.$fontsize.'" WHERE id ='.$id;
mysql_query($sql);
}
if($proofread!=""and $proofread==get_realname($_USER->id)){
$sql='UPDATE toa_approval SET proofread = "'.$proofread.'" WHERE id ='.$id;
mysql_query($sql);
}
if($repairs!=""and $repairs==get_realname($_USER->id)){
$sql='UPDATE toa_approval SET repairs = "'.$repairs.'" WHERE id ='.$id;
mysql_query($sql);
}
if($sealing!=""and $sealing==get_realname($_USER->id)){
$sql='UPDATE toa_approval SET sealing = "'.$sealing.'" WHERE id ='.$id;
mysql_query($sql);
}
}
;echo '<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<link rel="stylesheet" type="text/css" href="template/default/content/css/style.css">
<script language="javascript" type="text/javascript" src="template/default/js/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="template/default/content/js/common.js"></script>
<title>OA办公系统</title>
</head>
<body>
<a href="admin.php?ac=appset&fileurl=app&wait=1"><b>待办件</b></a> |    
<a href="admin.php?ac=appset&fileurl=app&wait=0"><b>已办件</b></a>
<hr>

<table class="TableBlock" border="0" width="98%" align="center">
	<tr>
      <td width="100" class="TableHeader">①发文字号</td>
	  <td width="60" class="TableHeader">②缮印人</td>
	  <td width="60" class="TableHeader">③校对人</td>
	  <td width="60" class="TableHeader">④用印人</td>
      <td width="60" class="TableHeader">指定完成人</td>
      <td width="60" class="TableHeader">发布日期</td>
      <td width="140" class="TableHeader">发文标题</td>
      <td width="100" align="center" class="TableHeader">所属类别</td>
      <td width="60" align="center" class="TableHeader">用印申请人</td>
	  <td width="60" align="center" class="TableHeader">操作</td>
    </tr> 
';
$wait=$_GET['wait'];
if($wait==''){
$wait=1;
}
if($_USER->id==1 or $_USER->id==9){
if($wait==1){
$sql = "SELECT a.*,b.* FROM ".DB_TABLEPRE."approval a,".DB_TABLEPRE."personnel b where a.id=b.fileid  and b.pkey=5 and a.sqren!='' and a.fontsize='' group by a.id order by a.id desc";
}else{
$sql = "SELECT a.*,b.* FROM ".DB_TABLEPRE."approval a,".DB_TABLEPRE."personnel b where a.id=b.fileid  and b.pkey=5 and a.sqren!='' and a.fontsize!='' group by a.id order by a.id desc";
}
}elseif($_USER->id==165){
if($wait==1){
$sql = "SELECT a.*,b.* FROM ".DB_TABLEPRE."approval a,".DB_TABLEPRE."personnel b where a.id=b.fileid  and b.pkey=5 and a.sqren!='' and a.zd_repairs='吴朗' and repairs='' group by a.id order by a.id desc";
}else{
$sql = "SELECT a.*,b.* FROM ".DB_TABLEPRE."approval a,".DB_TABLEPRE."personnel b where a.id=b.fileid  and b.pkey=5 and a.sqren!='' and a.zd_repairs='吴朗' and a.repairs='吴朗' group by a.id order by a.id desc";
}
}elseif($_USER->id==160){
if($wait==1){
$sql = "SELECT a.*,b.* FROM ".DB_TABLEPRE."approval a,".DB_TABLEPRE."personnel b where a.id=b.fileid  and b.pkey=5 and a.sqren!='' and a.zd_repairs='冷雪丽' and a.repairs='' group by a.id order by a.id desc";
}else{
$sql = "SELECT a.*,b.* FROM ".DB_TABLEPRE."approval a,".DB_TABLEPRE."personnel b where a.id=b.fileid  and b.pkey=5 and a.sqren!='' and a.zd_repairs='冷雪丽' and a.repairs='冷雪丽' group by a.id order by a.id desc";
}
}else{
if($wait==1){
$sql = "SELECT a.*,b.* FROM ".DB_TABLEPRE."approval a,".DB_TABLEPRE."personnel b where a.id=b.fileid  and b.pkey=5 and a.sqren!='' and a.userid='".$_USER->id."' and proofread='' group by a.id order by a.id desc";
}else{
$sql = "SELECT a.*,b.* FROM ".DB_TABLEPRE."approval a,".DB_TABLEPRE."personnel b where a.id=b.fileid  and b.pkey=5 and a.sqren!='' and a.userid='".$_USER->id."' and proofread!='' group by a.id order by a.id desc";
}
}
$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
{
echo '<form name="update" method="post" action="admin.php?ac=appset&fileurl=app">';
echo "<tr>";
if($row["fontsize"]!=''){echo '<td class="TableData">'.$row["fontsize"].'</td>';}else{
echo  '<td class="TableData"><input size=15" type="test" name="fontsize"></td>';}
if($row["repairs"]!=''){echo '<td class="TableData">'.$row["repairs"].'</td>';}
elseif($row["fontsize"]==''){
echo '<td class="TableData">等待处理..</td>';
}else{
echo  '<td class="TableData"><input size=5 type="test" name="repairs"></td>';}
if($row["proofread"]!=''){echo '<td class="TableData">'.$row["proofread"].'</td>';}
elseif($row["repairs"]==''){
echo '<td class="TableData">等待处理..</td>';
}else{
echo  '<td class="TableData"><input size=5 type="test" name="proofread"></td>';}
if($row["sealing"]!=''){echo '<td class="TableData">'.$row["sealing"].'</td>';}
elseif($row["repairs"]==''){
echo '<td class="TableData">等待处理..</td>';
}else{
echo  '<td class="TableData"><input size=5 type="test" name="sealing"></td>';
}
echo  '<td class="TableData">'.$row["zd_repairs"]."</td>";
echo '<td class="TableData">'.date('Y-m-d',strtotime($row['issuedate']))."</td>";
echo  '<td class="TableData">'.$row["title"]."</td>";
echo  '<td class="TableData">发文审批（需用印）'.$row["fileid"].'</td>';
echo  '<td class="TableData">'.$row["sqren"].'</td>';
echo  '<td class="TableData"><a href="admin.php?ac=approval&do=view&fileurl=app&fileid='.$row["fileid"]."&apptype=".$row["apptype"].'">查看</a> | <a href="admin.php?ac=approval&do=upview&fileurl=app&fileid='.$row["fileid"]."&apptype=".$row["apptype"].'">修改</a> <input type="submit" value="设置"></td>';
echo '<input type="hidden" name="fileid" value='.$row["fileid"].'>';
echo "</form></tr>";
}
mysql_close($con)
;echo ' 



 </table>
</body>
</html>
';
?>