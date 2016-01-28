<?php
/*
	[Office 515158] (C) 2009-2012 天生创想 Inc.
	$Id: function_work.php 1209087 2012-01-08 08:58:28Z baiwei.jiang $
*/
!defined('IN_TOA') && exit('Access Denied!');
//直接获取流程信息
function w_p_v($id=0,$wid=0,$value=''){
	global $db;
	$row = $db->fetch_one_array("SELECT ".$value.",perid,appkey FROM ".DB_TABLEPRE."project_personnel where flowid='".$id."' and projectid='".$wid."' and pertype!=0 ORDER BY perid Asc");
	if($row['appkey']==2){
		return $row[$value];
	}else{
		$sql = "SELECT ".$value.",pertype FROM ".DB_TABLEPRE."project_personnel_log WHERE perid='".$row['perid']."' ORDER BY lid asc";
		$result = $db->query($sql);
		while ($log = $db->fetch_array($result)) {
			if($log['pertype']!=0){
				$html.=$log[$value].',';
			}
		}
		return substr($html, 0, -1);
	}
}

//获取项目数据
function project_db($id=0,$name=''){
	global $db;
	$row = $db->fetch_one_array("SELECT content,fromid FROM ".DB_TABLEPRE."project_db where projectid='".$id."' and inputname='".$name."'  ORDER BY did Asc");
	//获取表单数据
	$flow = $db->fetch_one_array("SELECT inputtype FROM ".DB_TABLEPRE."project_from where fromid='".$row['fromid']."' ORDER BY fromid Asc");
	if($flow['inputtype']=='2'){
		if($row['content']!=''){
			return '<a href="down.php?urls='.$row['content'].'">下载附件</a>';
		}	
	}else{
		return $row['content'];	
	}
}
//单选
function get_project_radio($name='',$radiovalue='',$value=''){
		$inputvaluenum=explode('|',$radiovalue); 
		for($i=0;$i<sizeof($inputvaluenum);$i++){
			$html.= '<input name="'.$name.'" type="radio" value="'.$inputvaluenum[$i].'" ';
			if($value==''){
				if($i=='0'){
					$html.= 'checked="checked"';
				}
			}else{
				if($value==$inputvaluenum[$i]){
					$html.= 'checked="checked"';
				}
			}
			$html.= '/>'.$inputvaluenum[$i].'';
		}
	return $html;
}
//多选
function get_project_checkbox($name='',$radiovalue='',$value=''){
		$inputvaluenum=explode('|',$radiovalue); 
		for($i=0;$i<sizeof($inputvaluenum);$i++){
			$html.= '<input name="'.$name.'[]" type="checkbox" value="'.$inputvaluenum[$i].'" ';
			if($value==''){
				if($i=='0'){
					$html.= 'checked="checked"';
				}
			}else{
				if($value==$inputvaluenum[$i]){
					$html.= 'checked="checked"';
				}
			}
			$html.= '/>'.$inputvaluenum[$i].'';
		}
	return $html;
}
//日期
function get_project_date($name='',$w=300,$h=20){
	return '<input size="10" style="width:'.$w.'px;height:'.$h.'px;line-height:'.$h.'px;font-size:14px;" type="text" value="'.get_date('Y-m-d',PHP_TIME).'" name="'.$name.'" onClick="WdatePicker();" />';
}

//文本域
function get_project_input($name='',$w=300,$h=20,$value=''){
	return '<input type="text" name="'.$name.'" style="width:'.$w.'px;height:'.$h.'px;line-height:'.$h.'px;font-size:14px;" value="'.$value.'" />';
}
//下拉框
function get_project_select($name='',$radiovalue='',$value=''){
	$inputvaluenum=explode('|',$radiovalue); 
	$html.='<select name="'.$name.'" id="'.$name.'">';
	$html.='<option value="" selected="selected">选择内容</option>';
	for($i=0;$i<sizeof($inputvaluenum);$i++){
		$html.='<option value="'.$inputvaluenum[$i].'">'.$inputvaluenum[$i].'</option>';	
	}
	$html.='</select> ';
	return $html;
}
//文本框
function get_project_textarea($name='',$w=600,$h=200,$value=''){
	$_CONFIG=new config();
	if($_CONFIG->config_data('configwork')=='1'){
		$html.="<script>
						KE.show({
								id : '".$name."'
						});
				</script>";
	}
	$html.= '<textarea name="'.$name.'" style="width:'.$w.'px;height:'.$h.'px;" class="BigInput">'.$value.'</textarea>';
	return $html;
}
//模板植入单框数据读取
function P_I_DB($typeid=0,$tplid=0,$inputname='',$w=0,$h=0,$value='',$type6=0){
	global $db;
	$tpl = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."project_from where typeid='".$typeid."' and tplid='".$tplid."' and inputname='".$inputname."'  ORDER BY fromid Asc");
	if($tpl['inputtype']=='0'){
		if($tpl["inputtype1"]=='1'){
			echo get_project_input($tpl["inputname"],$w,$h,$tpl['inputvalue']);
		}elseif($tpl["inputtype1"]=='2'){
			echo get_project_textarea($tpl["inputname"],$w,$h,$tpl['inputvalue']);
		}elseif($tpl["inputtype1"]=='3'){
			echo get_project_radio($tpl["inputname"],$tpl["inputvaluenum"],$tpl['inputvalue']);
		}elseif($tpl["inputtype1"]=='4'){
			echo get_project_checkbox($tpl["inputname"],$tpl["inputvaluenum"],$tpl['inputvalue']);		
		}elseif($tpl["inputtype1"]=='5'){
			echo get_project_select($tpl["inputname"],$tpl["inputvaluenum"],$tpl['inputvalue']);	
		}
	}elseif($tpl["inputtype"]=='1'){
		public_upload($tpl["inputname"],$w,$h);
	}elseif($tpl["inputtype"]=='2'){
		public_upload($tpl["inputname"],$w,$h);
	}elseif($tpl["inputtype"]=='3'){
		echo get_project_date($tpl["inputname"],$w,$h);
	}elseif($tpl["inputtype"]=='4'){
		$_USER = new User();
		get_depabox(1,$tpl["inputname"],get_depauseridname($_USER->id),"+选择部门",$w,$h);
	}elseif($tpl["inputtype"]=='5'){
		get_pubuser(1,$tpl["inputname"],"","+选择人员",$w,$h);
	}elseif($tpl["inputtype"]=='6'){
		if($type6!=0){
			echo '<textarea name="'.$tpl["inputname"].'[]" style="width:'.$w.'px;font-size:14px;" rows="'.$h.'">'.$value.'</textarea>';
		}else{
			echo '<input type="text" name="'.$tpl["inputname"].'[]" style="border:1px;line-height:'.$h.'px;width:'.$w.'px;height:'.$h.'px;font-size:14px;" value="'.$value.'" />';
		}
	}
}
function project_pertype($type){
	switch ($type)
	{
		case 0:
		  echo "未审批";
		  break;
		case 1:
		  echo "通过";
		  break;
		case 2:
		  echo "拒绝";
		  break;
		case 3:
		  echo "退回";
		  break;
		case 4:
		  echo "等待审批";
		  break;
		case 5:
		  echo "结束";
		  break;
		default:
		  echo "错误类型";
	}
	return ;
}
function project_pertype_log($type){
	switch ($type)
	{
		case 0:
		  echo "未审批";
		  break;
		case 1:
		  echo "通过";
		  break;
		case 2:
		  echo "拒绝";
		  break;
		case 3:
		  echo "退回";
		  break;
		default:
		  echo "错误类型";
	}
	return ;
}
//使用权限
function pro_mana_view($typeid=0,$user=0){
	if(!is_superadmin()){
		global $db;
		$mana = $db->fetch_one_array("SELECT tid FROM ".DB_TABLEPRE."project_type where (keyuser like '%".get_realname($user)."%' or keyuser='' or manauser like '%".get_realname($user)."%') and tid=".$typeid);
		if($mana['tid']==''){
			show_msg('对不起，您没有使用的权限，不可用！', 'home.php?mid=8');
		}
	}
}
?>