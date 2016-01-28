<?php
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');

get_key("goods_type");
empty($do) && $do = 'list';
if ($do == 'list') {
	include_once('template/goods_type.php');

} elseif ($do == 'delete') {
	
	$id = getGP('id','G','int');
	$db->query("DELETE FROM ".DB_TABLEPRE."goods_type WHERE id = '$id'  ");
	$content=$id;
	$title='删除办公用品类别';
	get_logadd($id,$content,$title,23,$_USER->id);
	show_msg('删除办公用品类别成功！', 'admin.php?ac=goods_type&fileurl=goods');

} 


//department
function get_position_list_save($fatherid=0,$selid=0,$layer=0,$ac,$fileurl){
    global $db;
	$sql="SELECT * FROM ".DB_TABLEPRE."goods_type where father='$fatherid'    ORDER BY id Asc";
	$query = $db->query($sql);
	echo '<tbody id="group_'.trim($fatherid).'">';
	if(count($query)>0){
		while ($row = $db->fetch_array($query)) {
			$rsfno = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."goods_type where father='".$row[id]."'    ORDER BY id asc limit 0,1");
			echo '<tr class="hover">';
			echo '<td class="td25"></td>';
			echo '<td class="td25">'.get_realname($row['uid']).'';
			echo '<td><div class="board">'.$row['title'].'</div></td>';
			echo '<td width="160">';
			get_urlkey("编辑","admin.php?ac=goods_type&do=edit&fileurl=goods&id=".$row['id']."","".$row['uid']!=$_USER->id);
			
			if($rsfno[id]==''){
				echo '&nbsp;|&nbsp;';
				get_urlkey("删除","admin.php?ac=goods_type&fileurl=goods&do=delete&id=".$row['id']."","".$row['uid']!=$_USER->id);
			}
			
			echo '</td></tr>';
	
			if($rsfno[id]!=''){
				get_position_list_save_view($row['id'],$selid,$layer+1,$ac,$fileurl);
			}
		}
	}
   echo '</tbody>';
   return ;

}
function get_position_list_save_view($fatherid=0,$selid=0,$layer=0,$ac,$fileurl){
    global $db;
	$sql="SELECT * FROM ".DB_TABLEPRE."goods_type where father='$fatherid'    ORDER BY id Asc";
	$query = $db->query($sql);
	if(count($query)>0){
		for($i=0;$i<$layer;$i++){
		   $str.="&nbsp;&nbsp;&nbsp;&nbsp;";
		   }
		while ($row = $db->fetch_array($query)) {
			$rsfno = $db->fetch_one_array("SELECT * FROM ".DB_TABLEPRE."goods_type where father='".$row[id]."'    ORDER BY id asc limit 0,1");
			echo '<tr class="hover">';
			echo '<td class="td25"></td>';
			echo '<td class="td25">'.get_realname($row['uid']).'';
			echo '<td><div class="board">'.$str.$row['title'].'</div></td>';
			echo '<td width="160">';
			get_urlkey("编辑","admin.php?ac=goods_type_edit&do=edit&fileurl=goods&id=".$row['id']."","".$row['uid']!=$_USER->id);
			
			if($rsfno[id]==''){
				echo '&nbsp;|&nbsp;';
				get_urlkey("删除","admin.php?ac=goods_type&fileurl=goods&do=delete&id=".$row['id']."","".$row['uid']!=$_USER->id);
			}
			
			echo '</td></tr>';
			if($rsfno[id]!=''){
				get_position_list_save_view($row['id'],$selid,$layer+1,$ac,$fileurl);
			}
			
		}
	}
   return ;

} 
?>