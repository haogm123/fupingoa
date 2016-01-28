<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>高级搜索</title>
<link type="text/css" media="screen" charset="utf-8" rel="stylesheet" href="template/default/content/css/style.account-1.1.css" />
<link charset="utf-8" rel="stylesheet" href="template/default/content/css/personal.record-1.0.css" media="all" />
<link rel="stylesheet" type="text/css" href="template/default/content/css/style.css">
<style type="text/css"> 
.tip-faq{
	clear:both;
	margin-top:0px;
}
#J-table-consume{
	margin-bottom:40px;
}
.ui-form-tips .m-cue{
	 background-position: -27px -506px;
	 *background-position: -27px -505px;
}
#J-set-date a{
	font-family:宋体;
}
</style>
<script type="text/javascript" charset="utf-8" src="template/default/content/js/arale.js"></script>
<script charset="utf-8" src="template/default/content/js/recordIndex.js?t=20110523"></script>
<script language="javascript" type="text/javascript" src="template/default/js/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="template/default/content/js/common.js"></script>
<script language="javascript" type="text/javascript" src="DatePicker/WdatePicker.js"></script>
</head>
<!--[if lt IE 7]><body class="ie6"><![endif]--><!--[if IE 7]><body class="ie7"><![endif]--><!--[if IE 8]><body class="ie8"><![endif]--><!--[if !IE]><!--><body><!--<![endif]-->
<div id="container" class="ui-container">
 
<div id="content" class="ui-content fn-clear" coor="default" coor-rate="0.02">
	<div class="ui-grid-21" coor="content">
		<div class="ui-grid-21 ui-grid-right record-tit" coor="title">
			<h2 class="ui-tit-page">高级文件搜索</h2>
			
			<div class="record-tit-amount">
				<p align=right>行政公文柜中共有<span class="number"><?php echo 0?></span>个文件</p><p>整个办公系统中（含行政公文柜）共有<span class="number">未知</span>个文件
              </p>
			</div>
		</div>
		
		<!-- 过滤表单 -->
		<form method="get" action="admin.php?" name="topSearchForm" class="ui-grid-21 ui-grid-right ui-form">
		<input type="hidden" name="ac" value="search_up" />
		<input type="hidden" name="fileurl" value="aofc" />
		<div class="ui-grid-21 ui-grid-right record-search">
		
			<div id="J-advanced-filter-option" class="">
				<div class="record-search-time fn-clear">
					<div class="ui-form-item ui-form-item-time">
						<label class="ui-form-label" for="J-start">文件名：</label>
						<div class="ui-form-content">
							<input type="text" value="<?php echo $_GET['filename']?>" name="filename" class="ui-input search-keyword" id="J-keyword" style="width:160px;">
						</div>
						<label class="ui-form-label" for="J-start">文件类型：</label>
						<div class="ui-form-content">
							<select name="ftype" class="BigStatic" style="width:100px;">
							<option value="">请选择</option>
							<option <? if($_GET['ftype']=='DOC'){echo "selected";}?> value="DOC">DOC</option>
							<option <? if($_GET['ftype']=='XLS'){echo "selected";}?> value="XLS">XLS</option>
							<option <? if($_GET['ftype']=='CEB'){echo "selected";}?> value="CEB">CEB</option>
							<option <? if($_GET['ftype']=='TXT'){echo "selected";}?> value="TXT">TXT</option>
							<option <? if($_GET['ftype']=='PDF'){echo "selected";}?> value="PDF">PDF</option>
							
							</select>
						</div>
						
						<label class="ui-form-label" for="J-start">上传时间：</label>
						<div class="ui-form-content">
						<input type="text" value="<?php echo $_GET['rtime1']?>"  class="ui-input i-date" readonly="readonly"  onClick="WdatePicker();" name='rtime1' > - <input type="text" value="<?php echo $_GET['rtime2']?>"  class="ui-input i-date" readonly="readonly"  onClick="WdatePicker();" name='rtime2' >
						</div>
						<label class="ui-form-label" for="J-start">曾用作：</label>
						<div class="ui-form-content">
							<select name="otype" class="BigStatic" style="width:100px;">
							<option value="">请选择</option>
							<option <? if($_GET['otype']=='1'){echo "selected";}?> value="1">公文收文</option>
							<option <? if($_GET['otype']=='2'){echo "selected";}?> value="2">公文发文</option>
							<option <? if($_GET['otype']=='3'){echo "selected";}?> value="3">流程周转</option>
							<option <? if($_GET['otype']=='4'){echo "selected";}?> value="4">短消息</option>
							<option <? if($_GET['otype']=='5'){echo "selected";}?> value="5">即时交谈</option>
							</select>
						</div>
						<label class="ui-form-label" for="J-start">类别：</label>
						<div class="ui-form-content">
							<select name="ftp" class="BigStatic" style="width:100px;">
							<option value="">请选择</option>
							<option <? if($_GET['ftp']=='2'){echo "selected";}?> value="2">附件</option>
							<option <? if($_GET['ftp']=='1'){echo "selected";}?> value="1">文档</option>
							</select>
						</div>
						<br><br><label class="ui-form-label" for="J-start">查询范围：</label>
						<div class="ui-form-content">
							<input type="radio" value="1" name="pos" checked>全局
							<input type="radio" value="2" name="pos">行政公文柜

						</div>
						<label class="ui-form-label" style="width:100px;margin-left:50px;"><input type="checkbox" name="fdisk">从磁盘上查找</label>
						<label class="ui-form-label" for="J-start">文件大小：</label>
						<div class="ui-form-content">
							<select name="fsize" class="BigStatic" style="width:160px;">
							<option value="">请选择</option>
							<option <? if($_GET['fsize']=='1'){echo "selected";}?> value="1">500KB以内</option>
							<option <? if($_GET['fsize']=='2'){echo "selected";}?> value="2">500KB-1MB</option>
							<option <? if($_GET['fsize']=='3'){echo "selected";}?> value="3">1MB-2MB</option>
							<option <? if($_GET['fsize']=='4'){echo "selected";}?> value="4">2MB-5MB</option>
							<option <? if($_GET['fsize']=='5'){echo "selected";}?> value="5">5MB以上</option>
							
							</select>

						</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						(注：当前未分配查询权限，只允许查询当前用户上传的文件)
						<div class="submit-time-container ">
							<div class="submit-time ui-button ui-button-sorange">
								<input type="submit" class="ui-button-text"id="J-submit-time" value="查 找"/>
							</div>
						</div>
						
					</div>
			  </div>
			</div>
		</div><!-- .record-search -->
		</form>
 
<table class="TableBlock" border="0" width="98%" align="center">
	<tr>
      <td width="10%" align="center" class="TableHeader">文件编号</td>
      <td width="15%" align="center" class="TableHeader">文件名</td>
      <td width="5%" align="center" class="TableHeader">文件类型</td>
      <td width="5%" align="center" class="TableHeader">文件类别</td>
      <td width="5%" align="center" class="TableHeader">文件来源</td>
      <td width="25%" align="center" class="TableHeader">相关内容</td>
      <td width="10%" align="center" class="TableHeader">上传人</td>
	  <td width="15%" align="center" class="TableHeader">上传时间</td>
      <td width="10%" align="center" class="TableHeader">操作</td>
    </tr>

<?
$filename=$_GET['filename'];
$ftype=$_GET['ftype'];
$rtime1=$_GET['rtime1'];
$rtime2=$_GET['rtime2'];
$otype=$_GET['otype'];
$ftp=$_GET['ftp'];
$pos=$_GET['pos'];

if($filename.$ftype.$rtime1.$rtime2.$otype.$ftp==''){ exit;}
if($pos!='1'){ echo "没有查询到结果";exit;}

	$page = max(1, getGP('page','G','int'));
	$pagesize = $_CONFIG->config_data('pagenum');
	$offset = ($page - 1) * $pagesize;
	$url = 'admin.php?ac=search_up&fileurl=aofc&filename='.$_GET['filename'].'&ftype='.$_GET['ftype'].'&rtime1='.$_GET['rtime1'].'&rtime2='.$_GET['rtime2'].'&otype='.$_GET['otype'].'&ftp='.$_GET['ftp'].'&pos='.$_GET['pos'];

$sql=" from ".DB_TABLEPRE."fileoffice where uid=".$_USER->id;
if ($filename!=''){$sql.=" and filename like '%".$filename."%'";}
if ($ftype!=''){$sql.=" and filename like '%".$ftype."'";}
if ($ftp!=''){$sql.=" and filetype=".$ftp;}
if ($otype=='1' || $otype=='2' || $otype=='3'){$sql.=" and officetype=".$otype;}
$num = $db->result("select count(*) as num".$sql);
$sql="select *".$sql." order by date desc LIMIT $offset, $pagesize";
$result = $db->query($sql);

while ($row = $db->fetch_array($result)) {
$fext=strtoupper(substr(strrchr($row['filename'],"."),1));
$fileview="";
if($row['filetype']=='1'){
	$filedown="<a target='_blank' href='ntko/uploadOfficeFile/".$row['fileid']."officefile".$row['filename']."'>下载</a>";
	//if($fext=="DOC"){$fileview="&nbsp;&nbsp;<a target='_blank' href='ntko/FileEdit.php?FileId=".$row['officeid']."&uid=".$_USER->id."&filenumber=".$row['number']."&officetype=".$row['officetype']."&date='>查看</a>";}
}elseif($row['filetype']=='2'){
	$filedown="<a href='".$row['fileaddr']."'>下载</a>";
}else{
	$filedown="【未知文件类别】";
}
	if($fext=="DOC"){$fileview="&nbsp;&nbsp;<a target='_blank' href='ntko/Fileview.php?id=".$row['id']."&FileId=".$row['fileid']."&uid=".$_USER->id."&filenumber=".$row['number']."&officetype=".$row['officetype']."&date=".$row['date']."'>查看</a>";}//多传个ID便于fileedit查找原文件

if($row['officetype']=="1"){
	$filefrom="公文收文";
	$abouttable="attachment";
	$aurl="admin.php?fileurl=app&ac=attachment&do=view&fileid=";
}elseif($row['officetype']=="2"){
	$filefrom="公文发文";
	$abouttable="approval";
	$aurl="admin.php?fileurl=app&ac=approval&do=view&fileid=";
}elseif($row['officetype']=="3"){
	$filefrom="工作流转";
	$abouttable="workclass";
	$aurl="admin.php?fileurl=workclass&ac=list&do=view&workid=";
}else{
	$filefrom="";
	$abouttable="";
}
if($row['officeid'].''!='' && $abouttable!=''){
	$cols = $db->fetch_one_array("select id,title from toa_".$abouttable." where id=".$row['officeid']);
	if($cols!=''){
		$aboutelse="<a href='".$aurl.$row['officeid']."'>".$cols['title']."</a>";
	}else{
		$aboutelse="相关内容未成功发布或已被删除";
	}

}else{

	$aboutelse="找不到相关内容";
//http://171.221.174.3:5104/admin.php?fileurl=workclass&ac=list&do=view&workid=1567
//http://171.221.174.3:5104/admin.php?&fileurl=appac=attachment&do=view&fileid=9386
//http://localhost:8090/ntko/FileEdit.php?FileId=1196&uid=1&filenumber=786916141010110829&officetype=2&date=2014-10-10%2011:08:29
}

?>
	<tr>
      <td align="center" class="TableData"><?php echo $row['number']?></td>
      <td align="center" class="TableData"><?php echo $row['filename']?></td>
      <td align="center" class="TableData"><?php echo $fext?></td>
      <td align="center" class="TableData"><?php if($row['filetype']=='1'){echo "文档";}elseif($row['filetype']=='2'){echo "附件";}?></td>
      <td align="center" class="TableData"><?php echo $filefrom?></td>
      <td align="center" class="TableData"><?php echo $aboutelse?></td>
      <td align="center" class="TableData"><?php echo get_realname($row['uid'])?></td>
      <td align="center" class="TableData"><?php echo $row['date']?></td>
	  <td align="center" class="TableData"><? echo $filedown.$fileview?></td>
	</tr>




<? }?>
    <tr align="center" class="TableControl">
      <td height="35" colspan="9" align="left" nowrap>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo showpage($num,$pagesize,$page,$url)?>
</td>
    </tr>
  </table>	  
	  
	</div>
	
	</div>
 
 
	
</div>


</div>

                            

</body>
</html>
 