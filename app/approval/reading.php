<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<link rel="stylesheet" type="text/css" href="template/default/content/css/style.css">
<script language="javascript" type="text/javascript" src="template/default/js/jquery.min.js"></script>
<script type="text/javascript"> 
filenumber_show()
function filenumber_show()
{
   jQuery.ajax({
      type: 'GET',
      url: 'admin.php?ac=file&fileurl=public&officeid=<?php echo $_GET['fileid']?>&officetype=2&'+new Date(),
      success: function(data){
		  if(data!=''){
			  $("#filenumber").html(data);
		  }else{
			  $("#filenumber").html('还没有附件!');
		  }
      }
   });
}
fileoffice_show()
function fileoffice_show()
{
   jQuery.ajax({
      type: 'GET',
      url: 'admin.php?ac=file&do=office&fileurl=public&officeid=<?php echo $_GET['fileid']?>&officetype=2&'+new Date(),
      success: function(data){
		  if(data!=''){
			  $("#filenumberoffice").html(data);
		  }else{
			  $("#filenumberoffice").html('还没有文档!');
		  }
      }
   });
}
</script>
<title>OA办公系统</title>
 
</head>
<body class="bodycolor">
<table width="90%" border="0" align="center" cellpadding="3" cellspacing="0" class="small">
  <tr>
    <td class="Big"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3"> <?php echo $row['title']?>&nbsp;&nbsp;[阅读]</span>&nbsp;&nbsp;&nbsp;&nbsp;
	<span style="font-size:12px; float:right; margin-right:20px;">
	<a href="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&type=3" style="font-size:12px;"><< 返回阅读列表页</a></span>
    </td>
  </tr>
</table>
<script Language="JavaScript"> 
function CheckForm()
{
   if(document.save.content.value=="")
   { alert("点评意见不能为空！");
     document.save.content.focus();
     return (false);
   }
   return true;
}
function sendForm()
{
   if(CheckForm())
      document.save.submit();
}
</script>
<form name="save" method="post" action="admin.php?ac=<?php echo $ac?>&do=reading&fileurl=<?php echo $fileurl?>&apptype=<?php echo $apptype?>">
<input type="hidden" name="view" value="edit" />
<input type="hidden" name="fileid" value="<?php echo $row['id']?>" />
<input type="hidden" name="did" value="<?php echo $_GET['did']?>" />
<table class="TableBlock" border="0" width="60%" align="center">
	<tr>
      <td nowrap class="TableHeader" colspan="2"><b>&nbsp;公文点评</b></td>
    </tr>

    <tr>
      <td nowrap class="TableContent"> 点评意见：</td>
      <td class="TableData"><textarea name="content" cols="60" rows="3" id="content"></textarea>													</td>
    </tr>
	
	<tr align="center" class="TableControl">
      <td colspan="2" nowrap height="35">
<input type="button" name="Submit" value="点评审批" class="BigButtonBHover" onclick="sendForm();"> 	  </td>
    </tr>
</table>

</form>



<table border="0" width="90%" align="center" style="margin-top:20px;">
	<tr>
      <td width="90%" align="right" style="font-size:14px; font-weight:900;">发文日期：<?php echo $row['receiptdate']?></td>
    </tr>
	</table>
<table class="TableBlock" border="0" width="90%" align="center" style="margin-top:10px;">
	<tr>
      <td nowrap class="TableHeader" colspan="2"><b>&nbsp;发文内容处理</b></td>
    </tr>
	
	<tr>
      <td colspan="2" style="padding-left:30px; background:#ffffff;padding-right:30px;padding-top:10px;padding-bottom:10px;"> 
<style>
.tdtop{
 	font-size: 20pt;
 	color: #000000;
 	font-family: 宋体;
 	font-weight: bold;
}

.titleFont{
 	font-size: 11pt;
	color: #000000;
	font-family: 楷体_GB2312;
}

.inputDocStyle {
	BORDER-TOP: #8B8B8B 0px solid; 
	BORDER-BOTTOM: #8B8B8B 0px solid; 
	BORDER-LEFT: #8B8B8B 0px solid; 
	BORDER-RIGHT: #8B8B8B 0px solid; 
 	font-size: 14pt;
	width: 100%;
	HEIGHT: 25px; 
	BACKGROUND-COLOR: #F8E5E4;
}

.inputTextDocStyle {
	BORDER-TOP: #8B8B8B 0px solid; 
	BORDER-BOTTOM: #8B8B8B 0px solid; 
	BORDER-LEFT: #8B8B8B 0px solid; 
	BORDER-RIGHT: #8B8B8B 0px solid; 
 	font-size: 14pt;
	width: 100%;
	HEIGHT: 100%; 
	BACKGROUND-COLOR: #F8E5E4;
}

.Selectdocstyle {
	width: 100%;
	HEIGHT: 100%; 
	BORDER-TOP: #7F9DB9 0px solid; 
	BORDER-BOTTOM: #7F9DB9 0px solid; 
	BORDER-LEFT: #7F9DB9 0px solid; 
	BORDER-RIGHT: #7F9DB9 0px solid; 
	BACKGROUND-COLOR: #F8E5E4;
}

.sendTableStyle{
  	border-top:solid 2px #000000; 
  	border-left:solid 2px #000000; 
  	border-right:solid 1px #000000; 
  	border-bottom:solid 2px #000000; 
}

.sendTd{
  	border-bottom:solid 1px #000000; 
  	border-right:solid 1px #000000; 
 	PADDING-TOP: 6px; 
	PADDING-LEFT: 6px; 
 	font-size: 11pt;
	color: #FC3C03;
	font-family: 楷体_GB2312;
}

.sendTdBottom{
  	border-right:solid 1px #FC3C03; 
 	PADDING-TOP: 6px; 
	PADDING-LEFT: 6px; 
 	font-size: 11pt;
	color: #FC3C03;
	font-family: 楷体_GB2312;
}

.ReceiveTableStyle {
  	border-top:solid 2px #000000; 
  	border-left:solid 2px #000000; 
  	border-right:solid 1px #000000; 
  	border-bottom:solid 1px #000000; 
}

.ReceiveTd{
  	border-bottom:solid 1px #000000; 
  	border-right:solid 1px #000000; 
 	font-size: 11pt;
	color: #000000;
	font-family: 楷体_GB2312;
}





.head {
	font-size: 18pt; 
	font-family:楷体_GB2312; 
	color:red; 
	padding:5px
}

.littlehead {
	font-size: 11pt; 
	font-family:楷体_GB2312; 
	color:red;
}

.top {
	font-size: 11pt; 
	font-family:楷体_GB2312; 
	color:red; 
	border-top: 1 solid red;
}

.bottom {
	font-size: 11pt; 
	font-family:楷体_GB2312; 
	color:red; 
}

.lefttop {
	font-size: 11pt; 
	font-family:楷体_GB2312; 
	color:red; 
	border-left: 1 solid red; 
	border-top: 1 solid red;
}

.lefttopnored {
	font-size: 11pt; 
	font-family:楷体_GB2312; 
	border-left: 1 solid red; 
	border-top: 1 solid red;
}

.topbottom {
	font-size: 11pt; 
	font-family:楷体_GB2312;
	border-top: 1 double red;  
	border-bottom: 1 double red; 
	color:red; 
	padding:5px
}

.lefttopbottom {
	font-size: 11pt; 
	font-family:楷体_GB2312; 
	color:red; 
	border-left: 1 solid red; 
	border-top: 1 solid red;
	border-bottom: 1 solid red;
}


</style>
<TABLE width="735" HEIGHT=60 BORDER=0 ALIGN=center>
	<TR>
		<TD align="center" height=60 STYLE="font-size:24px; font-weight:bold;">四川省扶贫和移民工作局发文稿笺
		</TABLE>
      <table width="781" border="2" align="center" cellspacing="0" bordercolor="#FF0000" STYLE="font-size:14px;" class="titleFont">
        <tr>
          <td height="49" bordercolor="#FF0000" bgcolor="#FFFFFF">紧急程度</td>
          <td height="49" bordercolor="#FF0000" bgcolor="#FFFFFF"><?php echo $row['jjcd']?></td>
          <td height="49" bordercolor="#FF0000" bgcolor="#FFFFFF">密级</td>
          <td height="49" bordercolor="#FF0000" bgcolor="#FFFFFF"><?php echo $row['secrecy']?></td>
          <td height="49" bordercolor="#FF0000" bgcolor="#FFFFFF">发文字号</td>
          <td height="49" bordercolor="#000000" bgcolor="#FFFFFF"><?php echo $row['fontsize']?></td>
        </tr>
        <tr>
          <td colspan="6" bordercolor="#FF0000" bgcolor="#FFFFFF"><table width="831" border="1" cellspacing="0" bordercolor="#FF0000">
              <tr>
                <td width="277" rowspan="2" valign="top" bordercolor="#FF0000"><table border="0" width="100%" cellspacing="0" cellpadding="3">
                    <tr>
                      <td height="20" >领导签发：</td>
                    </tr>
                    <tr>
                      <td height="100" valign="top"><table border="0" cellpadding="2" cellspacing="0" width="98%" align="center">
                          <?php
			if($type['appkey']==1){
				global $db;
				$query = $db->query("SELECT a.*,b.flownum,b.flowkey1,b.flowkey,b.flowkey2,b.flownote FROM ".DB_TABLEPRE."personnel a,".DB_TABLEPRE."app_flow b  WHERE a.appflow=b.fid and a.fileid = '".$_GET['fileid']."' and a.type=2 and a.pkey!=0  and b.flowmovement=3 order by a.id desc");
				while ($rowper = $db->fetch_array($query)) {
					if($rowper['lnstructions']!=''){
						if($rowper['appkey']==1){
							app_view_per($rowper['id']);
						}else{
				?>
                          <tr height="25">
                            <td><?php echo $rowper['lnstructions']?></td>
                            <td width="60"><?php echo $rowper['name']?></td>
                            <td width="100"><?php echo $rowper['approvaldate']?></td>
                          </tr>
                          <?php
					   }
					}
			   }
		   }else{
			   global $db;
			   $query = $db->query("SELECT * FROM ".DB_TABLEPRE."personnel WHERE fileid = '".$_GET['fileid']."' and type=2 and pkey!=0  and node=3 order by id desc");
			   while ($rowper = $db->fetch_array($query)) {
				   if($rowper['lnstructions']!=''){
					   if($rowper['appkey']==1){
						   app_view_per($rowper['id']);
					   }else{
			   ?>
                          <tr height="25">
                            <td><?php echo $rowper['lnstructions']?></td>
                            <td width="60"><?php echo $rowper['name']?></td>
                            <td width="100"><?php echo $rowper['approvaldate']?></td>
                          </tr>
                          <?php 
					}
				}
			}
		}?>
                      </table></td>
                    </tr>
                </table></td>
                <td width="277" rowspan="2" valign="top"><table border="0" width="100%" cellspacing="0" cellpadding="3">
                    <tr>
                      <td height="20" >领导审签</td>
                    </tr>
                    <tr>
                      <td height="100" class="ItemTitleFontBlack"><table border="0" cellpadding="2" cellspacing="0" width="98%" align="center">
                          <?php
			if($type['appkey']==1){
				global $db;
				global $_USER;
				//$query = $db->query("SELECT a.*,b.flownum,b.flowkey1,b.flowkey,b.flowkey2,b.flownote FROM ".DB_TABLEPRE."personnel a,".DB_TABLEPRE."app_flow b  WHERE a.appflow=b.fid and a.fileid = '".$_GET['fileid']."' and a.type=2 and a.pkey!=0  and b.flowmovement=2 order by a.id desc");
				$query = $db->query("SELECT a.*,b.flownum,b.flowkey1,b.flowkey,b.flowkey2,b.flownote,c.* FROM ".DB_TABLEPRE."personnel a,".DB_TABLEPRE."app_flow b WHERE a.appflow=b.fid and a.fileid = '".$_GET['fileid']."' and a.type=2 and a.pkey!=0  and b.flowmovement=2 order by a.id desc");
				while ($rowper = $db->fetch_array($query)) {
						if($rowper['lnstructions']!='' ){
						if($rowper['appkey']==1){
							app_view_per($rowper['id']);
						}else{
				?>
                          <tr height="25">
                            <td><?php echo $rowper['lnstructions']?></td>
                            <td width="60"><?php echo $rowper['name']?></td>
                            <td width="100"><?php echo $rowper['approvaldate']?></td>
                          </tr>
                          <?php
					   }
				   }
			   }
		   }else{
			   global $db;
			   $query = $db->query("SELECT * FROM ".DB_TABLEPRE."personnel WHERE fileid = '".$_GET['fileid']."' and type=2 and pkey!=0  and node=2 order by id desc");
			   while ($rowper = $db->fetch_array($query)) {
			   if($rowper['lnstructions']!='' and get_pos(get_userid($rowper['name']))<2){
				   if($rowper['appkey']==1){
					   app_view_per($rowper['id']);
				   }else{
		   ?>
                          <tr height="25">
                            <td><?php echo $rowper['lnstructions']?></td>
                            <td width="60"><?php echo $rowper['name']?></td>
                            <td width="100"><?php echo $rowper['approvaldate']?></td>
                          </tr>
                          <?php 
				}
			}
			}
		}?>
                      </table></td>
                    </tr>
                </table></td>
                <td width="277" valign="top"><table border="0" width="100%" cellspacing="0" cellpadding="3">
                    <tr>
                      <td height="20">局处室委负责人核稿</td>
                    </tr>
                    <tr>
                      <td height="100" class="ItemTitleFontBlack"><table border="0" cellpadding="2" cellspacing="0" width="98%" align="center">
                          <?php
			if($type['appkey']==1){
				global $db;
				$query = $db->query("SELECT a.*,b.flownum,b.flowkey1,b.flowkey,b.flowkey2,b.flownote FROM ".DB_TABLEPRE."personnel a,".DB_TABLEPRE."app_flow b  WHERE a.appflow=b.fid and a.fileid = '".$_GET['fileid']."' and a.type=2 and a.pkey!=0  and b.flowmovement=2 order by a.id desc");
				while ($rowper = $db->fetch_array($query)) {
					if($rowper['lnstructions']!=''){
						if($rowper['appkey']==1){
							app_view_per($rowper['id']);
						}else{
				?>
                          <tr height="25">
                            <td><?php echo $rowper['lnstructions']?></td>
                            <td width="60"><?php echo $rowper['name']?></td>
                            <td width="100"><?php echo $rowper['approvaldate']?></td>
                          </tr>
                          <?php
					   }
				   }
			   }
		   }else{
			   global $db;
			   $query = $db->query("SELECT * FROM ".DB_TABLEPRE."personnel WHERE fileid = '".$_GET['fileid']."' and type=2 and pkey!=0  and node=2 order by id desc");
			   while ($rowper = $db->fetch_array($query)) {
			   if($rowper['lnstructions']!='' and get_pos(get_userid($rowper['name']))>2){
				   if($rowper['appkey']==1){
					   app_view_per($rowper['id']);
				   }else{
		   ?>
                          <tr height="25">
                            <td><?php echo $rowper['lnstructions']?></td>
                            <td width="60"><?php echo $rowper['name']?></td>
                            <td width="100"><?php echo $rowper['approvaldate']?></td>
                          </tr>
                          <?php 
				}
			}
			}
		}?>
                      </table></td>
                    </tr>
                </table></td>
              </tr>
              <tr>
                <td height="97" valign="top"><table border="0" width="104%" cellspacing="0" cellpadding="3">
                    <tr>
                      <td height="20" 局办公室核稿</td>
                    </tr>
                    <tr>
                      <td height="100" class="ItemTitleFontBlack" valign="top"><table border="0" cellpadding="2" cellspacing="0" width="98%" align="center">
                          <?php
			if($type['appkey']==1){
				global $db;
				$query = $db->query("SELECT a.*,b.flownum,b.flowkey1,b.flowkey,b.flowkey2,b.flownote FROM ".DB_TABLEPRE."personnel a,".DB_TABLEPRE."app_flow b  WHERE a.appflow=b.fid and a.fileid = '".$_GET['fileid']."' and a.type=2 and a.pkey!=0  and b.flowmovement=1 order by a.id desc");
				while ($rowper = $db->fetch_array($query)) {
				if($rowper['lnstructions']!=''){
					if($rowper['appkey']==1){
						app_view_per($rowper['id']);
					}else{
			?>
                          <tr height="25">
                            <td><?php echo $rowper['lnstructions']?></td>
                            <td width="60"><?php echo $rowper['name']?></td>
                            <td width="100"><?php echo $rowper['approvaldate']?></td>
                          </tr>
                          <?php
				   }
			   }
			   }
		   }else{
			   global $db;
			   $query = $db->query("SELECT * FROM ".DB_TABLEPRE."personnel WHERE fileid = '".$_GET['fileid']."' and type=2 and pkey!=0  and node=1 order by id desc");
			   while ($rowper = $db->fetch_array($query)) {
			   if($rowper['lnstructions']!=''){
				   if($rowper['appkey']==1){
					   app_view_per($rowper['id']);
				   }else{
		   ?>
                          <tr height="25">
                            <td><?php echo $rowper['lnstructions']?></td>
                            <td width="60"><?php echo $rowper['name']?></td>
                            <td width="100"><?php echo $rowper['approvaldate']?></td>
                          </tr>
                          <?php 
				}
			}
			}
		}?>
                      </table></td>
                    </tr>
                </table></td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td height="89" colspan="6" bordercolor="#000000" bgcolor="#FFFFFF"><table width="802" border="0" cellspacing="0">
              <tr>
                <td width="67" height="85">会签：</td>
                <td width="731"><table border="0" cellpadding="2" cellspacing="0" width="98%" align="center">
                    <?php
			if($type['appkey']==1){
				global $db;
				$query = $db->query("SELECT a.*,b.flownum,b.flowkey1,b.flowkey,b.flowkey2,b.flownote FROM ".DB_TABLEPRE."personnel a,".DB_TABLEPRE."app_flow b  WHERE a.appflow=b.fid and a.fileid = '".$_GET['fileid']."' and a.type=2 and a.pkey!=0  and b.flowmovement=4 order by a.id desc");
				while ($rowper = $db->fetch_array($query)) {
				if($rowper['lnstructions']!=''){
					if($rowper['appkey']==1){
						app_view_per($rowper['id']);
					}else{
			?>
                    <tr height="25">
                      <td><?php echo $rowper['lnstructions']?></td>
                      <td width="60"><?php echo $rowper['name']?></td>
                      <td width="140"><?php echo $rowper['approvaldate']?></td>
                    </tr>
                    <?php
				   }
			   }
			   }
		   }else{
			   global $db;
			   $query = $db->query("SELECT * FROM ".DB_TABLEPRE."personnel WHERE fileid = '".$_GET['fileid']."' and type=2 and pkey!=0  and node=4 order by id desc");
			   while ($rowper = $db->fetch_array($query)) {
			   if($rowper['lnstructions']!=''){
				   if($rowper['appkey']==1){
					   app_view_per($rowper['id']);
				   }else{
		   ?>
                    <tr height="25">
                      <td><?php echo $rowper['lnstructions']?></td>
                      <td width="60"><?php echo $rowper['name']?></td>
                      <td width="140"><?php echo $rowper['approvaldate']?></td>
                    </tr>
                    <?php 
				}
			}
			}
		}?>
                </table></td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td width="76" height="61" bordercolor="#FF0000" bgcolor="#FFFFFF">拟稿单位</td>
          <td width="205" bordercolor="#FF0000" bgcolor="#FFFFFF"><?php echo $row['sponsor']?></td>
          <td width="51" bordercolor="#FF0000" bgcolor="#FFFFFF">拟稿人</td>
          <td width="89" bordercolor="#FF0000" bgcolor="#FFFFFF"><?php echo get_realname( $row['userid'])?></td>
          <td width="112" bordercolor="#FF0000" bgcolor="#FFFFFF">份数</td>
          <td width="273" bordercolor="#FF0000" bgcolor="#FFFFFF"><?php echo $row['gwnum']?></td>
        </tr>
        <tr align="center">
          <td height="57" colspan="6" bordercolor="#FF0000" bgcolor="#FFFFFF"><table width="826" border="0" cellspacing="0">
              <tr>
                <td width="127" height="65">是否党政网发布:</td>
                <td width="238"><?php echo $row['fb']?></td>
                <td width="165">本部门网站公开意见:</td>
                <td width="288"><?php echo $row['gkyj']?></td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td colspan="6" bordercolor="#FF0000" bgcolor="#FFFFFF">文件标题：<?php echo $row['title']?></td>
        </tr>
        <tr>
          <td height="65" colspan="6" bordercolor="#FF0000" bgcolor="#FFFFFF">主送机关： <?php echo $row['delivers']?></td>
        </tr>
        <tr>
          <td height="57" colspan="6" bordercolor="#FF0000" bgcolor="#FFFFFF">抄送机关： <?php echo $row['sending']?></td>
        </tr>
        <tr>
          <td height="57" colspan="6" bordercolor="#FF0000" bgcolor="#FFFFFF"> 主 题 词： <?php echo $row['keyword']?></td>
        </tr>
        <tr>
          <td height="40" colspan="6" bordercolor="#FF0000" bgcolor="#FFFFFF"><table width="752" border="0" cellspacing="0">
              <tr>
                <td width="156" height="63">主办处室委校核人:</td>
                <td width="160"><?php echo $row['proofread']?></td>
                <td width="57">缮印人:</td>
                <td width="131"><?php echo $row['repairs']?></td>
                <td width="61">用印人:</td>
                <td width="175"><?php echo $row['sealing']?></td>
              </tr>
          </table></td>
        </tr>
      </table></td>
	</tr>
	
 
    
  </table>
  
  
<table class="TableBlock" border="0" width="90%" align="center" style="margin-top:20px;">
	<tr>
      <td nowrap class="TableHeader" colspan="2" id="m2"><b>&nbsp;附件设置</b></td>
    </tr>  
	<tr>
      <td nowrap class="TableContent" width="15%">附件文档：</td>
      <td class="TableData" id="filenumber">
	  
	  </td>
    </tr>
	
  
  <?php if($_CONFIG->config_data('configoffice')=='1'){?>
  
	 <tr>
      <td nowrap class="TableHeader" colspan="2"><b>&nbsp;正文设置</b></td>
    </tr>  
	<tr>
      <td nowrap class="TableContent" width="15%">文档：</td>
      <td class="TableData" id="filenumberoffice">
	 </td>
    </tr>
	<input type="hidden" name="fileofficeid" class="BigInput"  onpropertychange="fileoffice_show();" />
	 <? }?>
	</table>

</body>
</html>
