<table class="TableBlock" border="0" width="99%" align="center"  style="margin-top:20px;">
<tr>
      <td nowrap class="TableHeader" colspan="2" id="m2" align="left"><b>&nbsp;附件设置</b></td>
    </tr>  
	<tr>
      <td nowrap class="TableContent" width="15%" style="font-size:12px;">附件文档：</td>
      <td class="TableData" id="filenumber" align="left" style="font-size:12px;">
	  
	  </td>
    </tr>
	<tr>
      <td nowrap class="TableContent" width="15%" style="font-size:12px;">附件操作：</td>
      <td class="TableData" align="left" style="font-size:12px;">
	  <input type="hidden" name="annexurlid" class="BigInput"  onpropertychange="filenumber_show();" />
	  <a href="#m2" onClick="window.open ('admin.php?ac=uploadadd&fileurl=public&name=annexurlid&filenumber=<?php echo $filenumber?>&officetype=6', 'newwindow', 'height=200, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=no, status=no')">+上传附件</a></td>
    </tr>
</table>
<?php
if($mid['key2']==1){
if($flow['fid']!=''){?>
<table class="TableBlock" border="0" width="99%"  align="center" >
<tr>
      <td nowrap class="TableHeader" colspan="2" align="left"><b>&nbsp;审批人员</b></td>
    </tr>
   <tr>
      <td nowrap class="TableContent" width="15%" valign="top" style="font-size:12px;"> 
        设置审批人员：<? get_helps()?></td>
      <td class="TableData" align="left" style="font-size:12px;">
	  <input type="hidden" name="flowid" value="<?php echo $flow['fid']?>" />
	  <input type="hidden" name="appkey" value="<?php echo $flow['flowkey2']?>" />
	  <input type="hidden" name="appkey1" value="<?php echo $flow['flowkey3']?>" />
	  <?php
	 if($flow['flowkey2']=='2'){
		 //单人审批
		 if($flow['flowkey1']=='1'){//可选
			 get_pubuser(1,"userkey",'',"+选择审批人员",120,20);
		 }else{
			 get_pubuser(1,"userkey",'',"+选择审批人员",120,20,$flow['flowuser']);
		 }
	 }else{
		 if($flow['flowkey1']=='1'){//可选
			 get_pubuser(2,"userkey",$flow['flowuser'],"+选择审批人员",40,4);
		 }else{
			 echo "<textarea name='userkey' cols='40' rows='4'";
			 echo " readonly style='background-color:#F5F5F5;color:#006600;'>";
			 echo $flow['flowuser']."</textarea>";
			 echo "<input type='hidden' name='userkeyid' value='".get_realid($flow['flowuser'])."' />";
		 }
		
	 }
	 ?>
	 <br>
	 <?php get_smsbox("审批人员","work")?>
	 <br>
	 注：流程第一步审批人员，这里选择你的下一级办理人，必需填写！ 
	 </td>
    </tr>
	<?php if($_CONFIG->config_data('configinfoview')=='1'){?>
	<tr>
      <td nowrap class="TableContent" width="15%" style="font-size:12px;"> 
        通知其它人员：</td>
      <td class="TableData" align="left" style="font-size:12px;">
	  <?php
		 echo get_pubuser(2,"viewuser",'',"+选择人员",60,2);
	  ?>
	 <br>
	 注：为空表示不通知，如要通知工作流审批之外的人员，请选择
	 </td>
    </tr>
	<?php }?>
</table>
<?php }
}
?>
</div>
</form>	
</body>
</html>
