<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html>
<head>
<title>信息添加编辑</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="template/default/content/css/style.css">
</head>
<body class="bodycolor">
<table width="70%" border="0" align="center" cellpadding="3" cellspacing="0" class="small">
  <tr>
    <td class="Big"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3">审批流程<?php echo $_title['name']?></span>&nbsp;&nbsp;&nbsp;&nbsp;
	<span style="font-size:12px; float:right; margin-right:20px;">
	<a href="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&tplid=<?php echo $tplid?>&typeid=<?php echo $typeid?>" style="font-size:12px;"><<返回列表页</a></span>
    </td>
  </tr>
</table>
<script Language="JavaScript"> 
function CheckForm()
{	
   if(document.save.flowname.value=="")
   { alert("流程名称不能为空！");
     document.save.flowname.focus();
     return (false);
   }
   return true;
}
function sendForm()
{
   if(CheckForm())
      document.save.submit();
}

window.onload = function (){
	<?php if($user['flowkey']=='3'){?>
		checkbox1(1);
	<?php }?>
	<?php if($user['flowkey2']=='1'){?>
		checkbox2(1);
	<?php }?>
	<?php if($user['flowdatetype']=='1'){?>
		checkbox3(1);
	<?php }?>
}


function checkbox1(value){
	if(value==1){
		div1.style.display="block";
	}else{
		div1.style.display="none";
	}
}

function checkbox2(value){
	if(value==1){
		div2.style.display="block";
	}else{
		div2.style.display="none";
	}
}

function checkbox3(value){
	if(value==1){
		div3.style.display="block";
	}else{
		div3.style.display="none";
	}
}
</script>
<style type="text/css"> 
#div1{
display:none;}
#div2{
display:none;}
#div3{
display:none;}
</style>
<form name="save" method="post" action="?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&do=add&tplid=<?php echo $tplid?>&typeid=<?php echo $typeid?>">
	<input type="hidden" name="view" value="edit" />
	<input type="hidden" name="fid" value="<?php echo $user['fid']?>" />
	 <table class="TableBlock" border="0" width="70%" align="center" style="border-bottom:#4686c6 solid 0px;">
	 
    
	
		<tr>
			<td nowrap class="TableContent" width="100">流程名称：<? get_helps()?></td>
			  <td class="TableData">
					<input type="text" class="BigInput" name="flowname" value="<?php echo $user['flowname']?>" size=30 >
		  </td>  	  	
		</tr>
		
		<tr>
			<td nowrap class="TableContent" width="100">流程步骤：</td>
			  <td class="TableData">
			  <?php
			  
			  echo '第<span style="font-size:18px; font-weight:bold; color:#FF0000;">'.$flownum.'</span>步';
			  ?>
			  <input type="hidden" name="flownum" value="<?php echo $flownum?>" />
		  </td>  	  	
		</tr>
		<tr>
			<td nowrap class="TableContent" width="100">流程类型：</td>
		  <td class="TableData">
			
			<input name="flowkey" type="radio" style="border:0;" value="1" <? if($user['flowkey']=='1'){?>checked="checked"<? }?> onClick="checkbox1('0')" />
			顺序流程
			<?php if($flownum>2){?>
			<input name="flowkey" type="radio" style="border:0;" value="3" <? if($user['flowkey']=='3'){?>checked="checked"<? }?> onClick="checkbox1('1')" />
      退回流程 
	  <?php }?>
			<input name="flowkey" type="radio" style="border:0;" value="2" <? if($user['flowkey']=='2'){?>checked="checked"<? }?> onClick="checkbox1('0')" />
			流程结束
			
		<br><font color="#868788">
		退回流程：指在审批中如果经审人不同意，可退回前面的流程进行重新处理；<br>
		顺序流程：指流程正常按步骤执行；<br>
		流程结束：指该节点审批完成后，流程自动结束；
		</font>	
		  </td>  	  	
		</tr>
	</table>	
	<div id="div1">
	   <table class="TableBlock" border="0" width="70%" align="center" style="border-top:#4686c6 solid 0px;">
		<tr >
      <td nowrap class="TableContent" width=100> 可退回步骤：</td>
      <td class="TableData">
	  <?php
	  $sqlu = "SELECT * FROM ".DB_TABLEPRE."workclass_flow WHERE tplid = '".$tplid."' and typeid = '".$typeid."' and flownum>1 and flownum<".$flownum." order by fid asc";
	  $results = $db->query($sqlu);
	  while ($upfid = $db->fetch_array($results)) {	
		  echo '<input name="flowkey4[]" type="checkbox" style="border:0;" value="'.$upfid['fid'].'"';
		  if(sizeof(explode($upfid['fid'].',',$user['flowkey4']))>1){
			  echo 'checked="checked" ';
		  }
		  echo ' />第'.$upfid['flownum'].'步:'.$upfid['flowname'];
	  }
	  ?>
	  
	  
		<br><font color="#868788">
		选择该流程可退回的步骤
		</font>
      </td>
    </tr>
	</table>
	</div>
	<table class="TableBlock" border="0" width="70%" align="center" style="border-top:#4686c6 solid 0px;">
	<tr>
			<td nowrap class="TableContent" width="100">审批状态：</td>
			  <td class="TableData">
	 <input name="flowkey2" type="radio" style="border:0;" onClick="checkbox2('1')" value="1" <? if($user['flowkey2']=='1'){?>checked="checked"<? }?> />
      多人审批
			<input name="flowkey2" type="radio" onClick="checkbox2('0')" style="border:0;" value="2" <? if($user['flowkey2']=='2'){?>checked="checked"<? }?> />
			单人审批
			
	  </td>  	  	
	   </tr>
	   </table>
	   <div id="div2">
	   <table class="TableBlock" border="0" width="70%" align="center" style="border-top:#4686c6 solid 0px;">
		<tr >
      <td nowrap class="TableContent" width="100"> 审批关系：</td>
      <td class="TableData">
	  <input name="flowkey3" type="radio" style="border:0;" value="1" <? if($user['flowkey3']=='1'){?>checked="checked"<? }?> />
      同时通过
			<input name="flowkey3" type="radio" style="border:0;" value="2" <? if($user['flowkey3']=='2'){?>checked="checked"<? }?> />
			一人通过
		<br><font color="#868788">
		同时通过：在多人审批时有效，选择此项表示多个同时同意后流程转到下一步<br>
		一人通过：只要其中一人通过，流程转向下一步；
		</font>
      </td>
    </tr>
	</table>
	</div>
	   <table class="TableBlock" border="0" width="70%" align="center" style="border-top:#4686c6 solid 0px;">
	<tr>
			<td nowrap class="TableContent" width="100">人员设定：<? get_helps()?></td>
			  <td class="TableData">
	  <?php
	  get_pubuser(2,"flowuser",$user['flowuser'],"+选择审批人员",50,3)
	  ?><br><font color="#868788">注：在工作流审批时，有权限操作该节点的工作人员，不设定时请留空</font>
	  </td>  	  	
	   </tr>
		<tr>
      <td nowrap class="TableContent"> 人员状态：</td>
      <td class="TableData">
	  <input name="flowkey1" type="radio" style="border:0;" value="1" <? if($user['flowkey1']=='1'){?>checked="checked"<? }?> />
      可选
			<input name="flowkey1" type="radio" style="border:0;" value="2" <? if($user['flowkey1']=='2'){?>checked="checked"<? }?> />
			不可选
		<br><font color="#868788">注：可选指在提交流程时可以再次设定审批人员</font>	
      </td>
    </tr>
	
<tr>
      <td nowrap class="TableContent"> 超时处理：</td>
      <td class="TableData">
	  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="30%" style="border-right:0px;border-bottom:0px;"><input name="flowdatetype" type="radio" style="border:0;" value="0" <? if($user['flowdatetype']=='0'){?>checked="checked"<? }?> onClick="checkbox3('0')" />
      不使用超时
			<input name="flowdatetype" type="radio" style="border:0;" value="1" <? if($user['flowdatetype']=='1'){?>checked="checked"<? }?> onClick="checkbox3('1')" />
			开启超时处理</td>
    <td width="70%" style="border-right:0px;border-bottom:0px;">
	<div id="div3">
	  <select name="flowdate">
	    <option value="30" <? if($user['flowdate']=='30'){?>selected="selected"<? }?>>30分钟</option>
		<option value="60" <? if($user['flowdate']=='60'){?>selected="selected"<? }?>>1小时</option>
		<option value="180" <? if($user['flowdate']=='180'){?>selected="selected"<? }?>>3小时</option>
		<option value="360" <? if($user['flowdate']=='360'){?>selected="selected"<? }?>>6小时</option>
		<option value="720" <? if($user['flowdate']=='720'){?>selected="selected"<? }?>>12小时</option>
		<option value="1440" <? if($user['flowdate']=='1440'){?>selected="selected"<? }?>>24小时</option>
		<option value="2880" <? if($user['flowdate']=='2880'){?>selected="selected"<? }?>>48小时</option>
		<option value="4320" <? if($user['flowdate']=='4320'){?>selected="selected"<? }?>>72小时</option>
	    </select>
	</div>
	
	</td>
  </tr>
  <tr>
    <td colspan="2" style="border-right:0px;border-bottom:0px;"><font color="#868788">注：超时处理是指在指定的时间内,审批人员没有审批该流程时由系统自动处理通过并转向下一步审批人员</font><br>
	<font color="red">超时处理开启后,如果下一步的流程中"人员设定"为空时,将直接拒绝流程,否则为通过</font></td>
    </tr>
</table>

	  
			
      </td>
    </tr>
		
		<tr align="center" class="TableControl">
			<td colspan="2" nowrap>
			<input type="button" value="保存" class="BigButtonBHover" onClick="sendForm();">&nbsp;	    </td>
	  </tr>
	 </table>
  
</form>

 
</body>
</html>
