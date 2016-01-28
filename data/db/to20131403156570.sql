DROP TABLE IF EXISTS toa_workclass;
CREATE TABLE `toa_workclass` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` varchar(64) DEFAULT NULL,
  `typeid` varchar(16) DEFAULT NULL,
  `tplid` varchar(16) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `uid` varchar(16) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `type` varchar(2) DEFAULT NULL,
  `numberview` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1118 DEFAULT CHARSET=utf8;

INSERT INTO toa_workclass VALUES ('1097','20140612143534','1007','1020','关于报送起草“省政府向国务院报送的稳增长促改革结构惠民生政策措施落实情况自查报告”所需材料的函（特急）','3','2014-06-12 14:42:43','0','');
INSERT INTO toa_workclass VALUES ('1094','20140610180147','1007','1020','关于报送2014年上半年工作总结及下半年工作计划的通知','3','2014-06-10 18:03:39','1','');
INSERT INTO toa_workclass VALUES ('1092','20140610173530','1008','1019','流水号20140610173530 公文流转','41','2014-06-10 17:38:28','0','');
INSERT INTO toa_workclass VALUES ('1098','20140613093148','1000','1015','流水号20140613093148 处室内部流转','163','2014-06-13 09:33:21','0','');
INSERT INTO toa_workclass VALUES ('1099','20140613154859','1008','1019','关于开展“培育社会主义核心价值观、做人民满意公务员”主题培训的通知','41','2014-06-13 15:50:36','0','');
INSERT INTO toa_workclass VALUES ('1101','20140613164050','1008','1019','关于报送起草“省政府向国务院报送的稳增长促改革调结构惠民生政策措施落实情况自查报告”所需材料的函','41','2014-06-13 16:44:45','0','');
INSERT INTO toa_workclass VALUES ('1102','20140616151220','1000','1015','流水号20140616151220 处室内部流转','57','2014-06-16 15:15:21','0','');
INSERT INTO toa_workclass VALUES ('1103','20140616155342','1000','1015','流水号20140616155342 处室内部流转','163','2014-06-16 16:00:17','0','');
INSERT INTO toa_workclass VALUES ('1104','20140616172329','1000','1015','流水号20140616172329 处室内部流转','57','2014-06-16 17:25:53','0','');
INSERT INTO toa_workclass VALUES ('1105','20140617144854','1000','1015','流水号20140617144854 处室内部流转','163','2014-06-17 14:50:18','0','');
INSERT INTO toa_workclass VALUES ('1109','20140618100722','1000','1022','流水号20140618100722 分发文件','163','2014-06-18 10:08:20','0','');
INSERT INTO toa_workclass VALUES ('1110','20140618102618','1000','1022','关于转发《国务院扶贫办关于印发〈扶贫开发建档立卡指标体系〉的通知》的通知（川扶贫移民发[2014]126号 ）','167','2014-06-18 10:31:14','0','');
INSERT INTO toa_workclass VALUES ('1108','20140618095838','1000','1022','流水号20140618095838 分发文件','167','2014-06-18 10:01:49','0','');
INSERT INTO toa_workclass VALUES ('1111','20140618103714','1000','1022','关于转发《国务院扶贫办关于印发〈扶贫开发建档立卡指标体系〉的通知》的通知（川扶贫移民发[2014]126号&nbsp;&nbsp;）','167','2014-06-18 10:38:27','0','');
INSERT INTO toa_workclass VALUES ('1112','20140618110241','1007','1020','中共四川省委办公厅关于成立省委网络安全和信息化领导小组的通知','3','2014-06-18 11:04:20','0','');
INSERT INTO toa_workclass VALUES ('1113','20140618110720','1000','1022','关于报送下基层相关情况的通知','92','2014-06-18 11:09:23','0','');
INSERT INTO toa_workclass VALUES ('1114','20140618111208','1000','1022','关于报送下基层相关情况的通知','92','2014-06-18 11:16:26','0','');
INSERT INTO toa_workclass VALUES ('1115','20140618113320','1000','1022','流水号20140618113320 分发文件','163','2014-06-18 11:33:59','0','');
INSERT INTO toa_workclass VALUES ('1116','20140618154122','1008','1019','关于转报《美姑县人民政府关于请求解决美姑山羊保种选育及产业化发展项目资金报告的函》的请示','41','2014-06-18 15:44:30','0','');
INSERT INTO toa_workclass VALUES ('1117','20140619094727','1000','1015','流水号20140619094727 处室内部流转','163','2014-06-19 09:49:08','0','');
INSERT INTO toa_workclass VALUES ('1096','20140611174428','1008','1019','关于征求《深化涉农资金整合工作实施办法》（代拟稿）意见的函','41','2014-06-11 17:47:08','0','川财农函【2014】71号');

DROP TABLE IF EXISTS toa_workclass_charts;
CREATE TABLE `toa_workclass_charts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` varchar(16) DEFAULT NULL,
  `typeid` varchar(16) DEFAULT NULL,
  `tplid` varchar(16) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `numdata` text,
  `search` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1000 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS toa_workclass_from;
CREATE TABLE `toa_workclass_from` (
  `fromid` int(11) NOT NULL AUTO_INCREMENT,
  `fromname` varchar(64) DEFAULT NULL,
  `inputname` varchar(64) DEFAULT NULL,
  `inputvalue` varchar(128) DEFAULT NULL,
  `inputtype` varchar(2) DEFAULT NULL,
  `inputtype1` varchar(2) DEFAULT NULL,
  `inputvaluenum` tinytext,
  `confirmation` varchar(2) DEFAULT NULL,
  `uid` varchar(16) DEFAULT NULL,
  `tplid` varchar(16) DEFAULT NULL,
  `flowid` varchar(16) DEFAULT NULL,
  `typeid` varchar(16) DEFAULT NULL,
  `formtype` varchar(2) DEFAULT NULL,
  `inputnumber` int(11) DEFAULT NULL,
  `w` varchar(16) DEFAULT NULL,
  `h` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`fromid`)
) ENGINE=MyISAM AUTO_INCREMENT=1024 DEFAULT CHARSET=utf8;

INSERT INTO toa_workclass_from VALUES ('1000','微薄内容','toa_9922_20131210203556','','0','2','','1','1','1000','','1000','1','999','','');
INSERT INTO toa_workclass_from VALUES ('1010','请示单','toa_3785_20131218165823','','0','2','','1','1','1006','','1000','1','999','','');
INSERT INTO toa_workclass_from VALUES ('1017','残值单审核','toa_3898_20140320111043','','0','1','','1','193','1016','1049','1000','2','999','','');
INSERT INTO toa_workclass_from VALUES ('1008','办公用品采购','toa_0019_20131218160829','','0','2','','1','1','1009','','1000','1','999','','');
INSERT INTO toa_workclass_from VALUES ('1016','内容','toa_7090_20140226203712','','0','2','','1','192','1015','','1000','1','999','','');
INSERT INTO toa_workclass_from VALUES ('1012','采购单','toa_5979_20131218170914','','0','2','','1','1','1010','','1000','1','999','','');
INSERT INTO toa_workclass_from VALUES ('1013','档案借阅申请单','toa_6605_20131218171009','','0','2','','1','1','1011','','1004','1','999','','');
INSERT INTO toa_workclass_from VALUES ('1015','用印单','toa_2352_20131218175222','','0','2','','1','1','1013','','1005','1','999','','');
INSERT INTO toa_workclass_from VALUES ('1018','审核表','toa_6584_20140606103425','','0','2','','1','192','1017','1051','1000','2','999','','');
INSERT INTO toa_workclass_from VALUES ('1022','公文流转','toa_7380_20140612103848','','0','2','','1','48','1021','','1011','1','999','350','350');
INSERT INTO toa_workclass_from VALUES ('1020','公文流转','toa_8412_20140610171558','','0','2','','1','41','1019','','1008','1','999','350','350');
INSERT INTO toa_workclass_from VALUES ('1021','办文流转','toa_4028_20140610175507','','0','2','','1','3','1020','','1007','1','999','400','500');
INSERT INTO toa_workclass_from VALUES ('1023','文件分发','toa_9369_20140618092830','','0','2','','1','167','1022','','1000','1','999','350','250');

DROP TABLE IF EXISTS toa_workclass_personnel;
CREATE TABLE `toa_workclass_personnel` (
  `perid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) DEFAULT NULL,
  `uid` varchar(16) DEFAULT NULL,
  `designationdate` datetime DEFAULT NULL,
  `approvaldate` datetime DEFAULT NULL,
  `lnstructions` varchar(255) DEFAULT NULL,
  `pertype` varchar(2) DEFAULT NULL,
  `workid` varchar(16) DEFAULT NULL,
  `typeid` varchar(16) DEFAULT NULL,
  `flowid` varchar(16) DEFAULT NULL,
  `appkey` varchar(2) DEFAULT NULL,
  `appkey1` varchar(2) DEFAULT NULL,
  `flowdate` varchar(16) DEFAULT NULL,
  `flowdatetype` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`perid`)
) ENGINE=MyISAM AUTO_INCREMENT=1262 DEFAULT CHARSET=utf8;

INSERT INTO toa_workclass_personnel VALUES ('1000','王柯','3','2013-12-13 11:37:58','2013-12-13 11:37:58','生成流程申请单，系统自动完成该步骤','1','1000','1000','1005','2','2','2013-12-13 11:37','0');
INSERT INTO toa_workclass_personnel VALUES ('1001','唐义','2','2013-12-13 11:37:58','','','0','1000','1000','1006','2','','','0');
INSERT INTO toa_workclass_personnel VALUES ('1002','王柯','3','2013-12-13 11:47:41','2013-12-13 11:47:41','生成流程申请单，系统自动完成该步骤','1','1001','1000','1007','2','2','2013-12-13 11:47','0');
INSERT INTO toa_workclass_personnel VALUES ('1003','唐义','2','2013-12-13 11:47:41','2013-12-13 11:49:04','同意','5','1001','1000','1008','2','2','','0');
INSERT INTO toa_workclass_personnel VALUES ('1028','管理员','1','2013-12-18 17:29:12','2013-12-18 17:29:12','生成流程申请单，系统自动完成该步骤','1','1013','1004','1034','2','2','2013-12-18 17:29','0');
INSERT INTO toa_workclass_personnel VALUES ('1029','唐义','2','2013-12-18 17:29:12','2013-12-18 17:30:23','同意，请会签','1','1013','1004','1035','2','','','0');
INSERT INTO toa_workclass_personnel VALUES ('1030','李庆友','30','','2013-12-18 17:31:53','不妥哈','3','1013','1004','1036','2','','','0');
INSERT INTO toa_workclass_personnel VALUES ('1031','唐义','2','','','','0','1013','1004','1035','2','','','0');
INSERT INTO toa_workclass_personnel VALUES ('1231','刘蔚','163','2014-06-17 14:50:18','2014-06-17 14:50:18','生成流程申请单，系统自动完成该步骤','1','1105','1000','1043','2','2','2014-06-17 14:50','0');
INSERT INTO toa_workclass_personnel VALUES ('1230','王晓梅','62','2014-06-16 17:25:53','2014-06-19 10:33:02','已阅','1','1104','1000','1044','2','2','','0');
INSERT INTO toa_workclass_personnel VALUES ('1229','李华聪','57','2014-06-16 17:25:53','2014-06-16 17:25:53','生成流程申请单，系统自动完成该步骤','1','1104','1000','1043','2','2','2014-06-16 17:25','0');
INSERT INTO toa_workclass_personnel VALUES ('1232','处长','193','2014-06-17 14:50:18','','','0','1105','1000','1044','2','2','','0');
INSERT INTO toa_workclass_personnel VALUES ('1242','牟敏','167','2014-06-18 10:31:14','2014-06-18 10:31:14','生成流程申请单，系统自动完成该步骤','1','1110','1000','1067','2','2','2014-06-18 10:31','0');
INSERT INTO toa_workclass_personnel VALUES ('1239','刘蔚','163','2014-06-18 10:08:20','2014-06-18 10:08:20','生成流程申请单，系统自动完成该步骤','1','1109','1000','1067','2','2','2014-06-18 10:08','0');
INSERT INTO toa_workclass_personnel VALUES ('1240','李华聪,王强,刘登安','57,58,61','2014-06-18 10:08:20','2014-06-18 16:53:01','已办理','2','1109','1000','1068','1','1','','0');
INSERT INTO toa_workclass_personnel VALUES ('1241','牟敏','167','','2014-06-18 10:43:46','结束','5','1108','1000','1069','2','','','0');
INSERT INTO toa_workclass_personnel VALUES ('1237','牟敏','167','2014-06-18 10:01:49','2014-06-18 10:01:49','生成流程申请单，系统自动完成该步骤','1','1108','1000','1067','2','2','2014-06-18 10:01','0');
INSERT INTO toa_workclass_personnel VALUES ('1238','王柯','3','2014-06-18 10:01:49','2014-06-18 10:16:46','已收','1','1108','1000','1068','1','1','','0');
INSERT INTO toa_workclass_personnel VALUES ('1243','张谷,刘兵,邹积立,何智彬,向伟益,刘维嘉,张华林,杨晖,都勤,','4,14,15,16,17,18','2014-06-18 10:31:14','2014-06-19 11:39:18','阅','4','1110','1000','1068','1','1','','0');
INSERT INTO toa_workclass_personnel VALUES ('1244','牟敏','167','2014-06-18 10:38:27','2014-06-18 10:38:27','生成流程申请单，系统自动完成该步骤','1','1111','1000','1067','2','2','2014-06-18 10:38','0');
INSERT INTO toa_workclass_personnel VALUES ('1245','王政洲,杨邦华,韩敏','10,90,92','2014-06-18 10:38:27','2014-06-18 10:41:35','已收','4','1111','1000','1068','1','1','','0');
INSERT INTO toa_workclass_personnel VALUES ('1246','王柯','3','2014-06-18 11:04:20','2014-06-18 11:04:20','生成流程申请单，系统自动完成该步骤','1','1112','1007','1060','2','2','2014-06-18 11:04','0');
INSERT INTO toa_workclass_personnel VALUES ('1247','刘燕','54','2014-06-18 11:04:20','2014-06-18 14:38:45','已阅','1','1112','1007','1061','2','','','0');
INSERT INTO toa_workclass_personnel VALUES ('1248','韩敏','92','2014-06-18 11:09:23','2014-06-18 11:09:23','生成流程申请单，系统自动完成该步骤','1','1113','1000','1067','2','2','2014-06-18 11:09','0');
INSERT INTO toa_workclass_personnel VALUES ('1249','牟敏','167','2014-06-18 11:09:23','2014-06-18 11:11:03','收到','1','1113','1000','1068','1','1','','0');
INSERT INTO toa_workclass_personnel VALUES ('1250','韩敏','92','','','','0','1113','1000','1069','2','','','0');
INSERT INTO toa_workclass_personnel VALUES ('1251','韩敏','92','2014-06-18 11:16:26','2014-06-18 11:16:26','生成流程申请单，系统自动完成该步骤','1','1114','1000','1067','2','2','2014-06-18 11:16','0');
INSERT INTO toa_workclass_personnel VALUES ('1252','张谷,刘兵,邹积立,何智彬,向伟益,刘维嘉,张华林,杨晖,都勤,','4,14,15,16,17,18','2014-06-18 11:16:26','2014-06-19 11:39:59','知道了','4','1114','1000','1068','1','1','','0');
INSERT INTO toa_workclass_personnel VALUES ('1255','王柯,吴守清,刘燕,李立峰,牟敏','3,31,54,56,167','','2014-06-19 09:38:28','请王柯办理。','4','1112','1007','1062','1','1','','0');
INSERT INTO toa_workclass_personnel VALUES ('1253','刘蔚','163','2014-06-18 11:33:59','2014-06-18 11:33:59','生成流程申请单，系统自动完成该步骤','1','1115','1000','1067','2','2','2014-06-18 11:33','0');
INSERT INTO toa_workclass_personnel VALUES ('1254','蒋蓉','63','2014-06-18 11:33:59','','','0','1115','1000','1068','1','1','','0');
INSERT INTO toa_workclass_personnel VALUES ('1256','王丹','41','2014-06-18 15:44:30','2014-06-18 15:44:30','生成流程申请单，系统自动完成该步骤','1','1116','1008','1056','2','2','2014-06-18 15:44','0');
INSERT INTO toa_workclass_personnel VALUES ('1257','朱蓉','37','2014-06-18 15:44:30','','','0','1116','1008','1057','2','','','0');
INSERT INTO toa_workclass_personnel VALUES ('1258','王强','58','','','','0','1103','1000','1045','2','2','','0');
INSERT INTO toa_workclass_personnel VALUES ('1259','刘蔚','163','2014-06-19 09:49:08','2014-06-19 09:49:08','生成流程申请单，系统自动完成该步骤','1','1117','1000','1043','2','2','2014-06-19 09:49','0');
INSERT INTO toa_workclass_personnel VALUES ('1260','李华聪','57','2014-06-19 09:49:08','','','0','1117','1000','1044','2','2','','0');
INSERT INTO toa_workclass_personnel VALUES ('1261','处长','193','','','','0','1104','1000','1045','2','2','','0');
INSERT INTO toa_workclass_personnel VALUES ('1226','刘登安','61','2014-06-16 15:15:21','2014-06-18 16:51:59','已办理','2','1102','1000','1044','2','2','','0');
INSERT INTO toa_workclass_personnel VALUES ('1227','刘蔚','163','2014-06-16 16:00:17','2014-06-16 16:00:17','生成流程申请单，系统自动完成该步骤','1','1103','1000','1043','2','2','2014-06-16 16:00','0');
INSERT INTO toa_workclass_personnel VALUES ('1228','李华聪','57','2014-06-16 16:00:17','2014-06-18 16:13:28','请全处传阅，并请王强和大小凉山办小师、小范将昌平常委的讲话要求和局领导相关批示贯穿到彝家新寨建设指导工作中。','1','1103','1000','1044','2','2','','0');
INSERT INTO toa_workclass_personnel VALUES ('1225','李华聪','57','2014-06-16 15:15:21','2014-06-16 15:15:21','生成流程申请单，系统自动完成该步骤','1','1102','1000','1043','2','2','2014-06-16 15:15','0');
INSERT INTO toa_workclass_personnel VALUES ('1184','刘燕','54','2014-06-08 10:04:29','','','0','1085','1007','1053','2','','','0');
INSERT INTO toa_workclass_personnel VALUES ('1185','管理员','1','2014-06-08 10:24:13','2014-06-08 10:24:13','生成流程申请单，系统自动完成该步骤','1','1086','1007','1052','2','2','2014-06-08 10:24','0');
INSERT INTO toa_workclass_personnel VALUES ('1186','刘燕','54','2014-06-08 10:24:13','2014-06-08 10:25:25','再改下','5','1086','1007','1053','2','2','','0');
INSERT INTO toa_workclass_personnel VALUES ('1187','管理员','1','2014-06-08 10:39:13','2014-06-08 10:39:13','生成流程申请单，系统自动完成该步骤','1','1087','1007','1052','2','2','2014-06-08 10:39','0');
INSERT INTO toa_workclass_personnel VALUES ('1188','刘燕','54','2014-06-08 10:39:13','2014-06-08 10:41:20','再修改下','2','1087','1007','1054','2','','','0');
INSERT INTO toa_workclass_personnel VALUES ('1224','潘晔','55','','','','0','1101','1008','1058','1','1','','0');
INSERT INTO toa_workclass_personnel VALUES ('1222','王丹','41','2014-06-13 16:44:45','2014-06-13 16:44:45','生成流程申请单，系统自动完成该步骤','1','1101','1008','1056','2','2','2014-06-13 16:44','0');
INSERT INTO toa_workclass_personnel VALUES ('1205','王柯','3','','','','0','1094','1007','1062','2','','','0');
INSERT INTO toa_workclass_personnel VALUES ('1223','朱蓉','37','2014-06-13 16:44:45','2014-06-13 16:48:17','请潘处按文件要求提供有关材料','1','1101','1008','1057','2','','','0');
INSERT INTO toa_workclass_personnel VALUES ('1203','王柯','3','2014-06-10 18:03:39','2014-06-10 18:03:39','生成流程申请单，系统自动完成该步骤','1','1094','1007','1060','2','2','2014-06-10 18:03','0');
INSERT INTO toa_workclass_personnel VALUES ('1204','刘燕','54','2014-06-10 18:03:39','2014-06-10 18:07:04','请王柯办理。','1','1094','1007','1061','2','','','0');
INSERT INTO toa_workclass_personnel VALUES ('1199','王丹','41','2014-06-10 17:38:28','2014-06-10 17:38:28','生成流程申请单，系统自动完成该步骤','1','1092','1008','1056','2','2','2014-06-10 17:38','0');
INSERT INTO toa_workclass_personnel VALUES ('1200','朱蓉','37','2014-06-10 17:38:28','2014-06-10 18:09:25','请潘处牵头，按要求完成半年总结；刘处、卢处分别对财务管理工作、移民资金管理工作进行半年总结，将文稿交潘处汇总。','1','1092','1008','1057','2','','','0');
INSERT INTO toa_workclass_personnel VALUES ('1206','卢强,刘明忠,潘晔','38,39,55','','2014-06-18 09:19:58','已办理','4','1092','1008','1058','1','1','','0');
INSERT INTO toa_workclass_personnel VALUES ('1219','朱蓉,卢强,刘明忠,杨建红,王丹,苟会琼,潘晔','37,38,39,40,41,4','','2014-06-18 09:31:46','按要求参加培训和测试','4','1099','1008','1058','1','1','','0');
INSERT INTO toa_workclass_personnel VALUES ('1209','王丹','41','2014-06-11 17:47:08','2014-06-11 17:47:08','生成流程申请单，系统自动完成该步骤','1','1096','1008','1056','2','2','2014-06-11 17:47','0');
INSERT INTO toa_workclass_personnel VALUES ('1210','朱蓉','37','2014-06-11 17:47:08','2014-06-11 17:54:10','请潘处提出建议回复。','1','1096','1008','1057','2','','','0');
INSERT INTO toa_workclass_personnel VALUES ('1211','潘晔','55','','2014-06-17 17:20:53','已回复财政厅。','5','1096','1008','1058','1','1','','0');
INSERT INTO toa_workclass_personnel VALUES ('1212','王柯','3','2014-06-12 14:42:43','2014-06-12 14:42:43','生成流程申请单，系统自动完成该步骤','1','1097','1007','1060','2','2','2014-06-12 14:42','0');
INSERT INTO toa_workclass_personnel VALUES ('1213','吴守清','31','2014-06-12 14:42:43','2014-06-12 14:49:06','请牟敏办理。','1','1097','1007','1061','2','','','0');
INSERT INTO toa_workclass_personnel VALUES ('1214','王柯','3','','2014-06-12 14:50:26','','5','1097','1007','1062','2','','','0');
INSERT INTO toa_workclass_personnel VALUES ('1215','刘蔚','163','2014-06-13 09:33:21','2014-06-13 09:33:21','生成流程申请单，系统自动完成该步骤','1','1098','1000','1043','2','2','2014-06-13 09:33','0');
INSERT INTO toa_workclass_personnel VALUES ('1216','刘登安','61','2014-06-13 09:33:21','2014-06-18 16:50:27','已办理','2','1098','1000','1044','2','2','','0');
INSERT INTO toa_workclass_personnel VALUES ('1217','王丹','41','2014-06-13 15:50:36','2014-06-13 15:50:36','生成流程申请单，系统自动完成该步骤','1','1099','1008','1056','2','2','2014-06-13 15:50','0');
INSERT INTO toa_workclass_personnel VALUES ('1218','朱蓉','37','2014-06-13 15:50:36','2014-06-13 15:57:34','请每位同志按文件要求学习并参加考试。','1','1099','1008','1057','2','','','0');
INSERT INTO toa_workclass_personnel VALUES ('1183','管理员','1','2014-06-08 10:04:29','2014-06-08 10:04:29','生成流程申请单，系统自动完成该步骤','1','1085','1007','1052','2','2','2014-06-08 10:04','0');

DROP TABLE IF EXISTS toa_workclass_type;
CREATE TABLE `toa_workclass_type` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `typename` varchar(64) DEFAULT NULL,
  `uid` varchar(16) DEFAULT NULL,
  `typenum` int(11) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=1014 DEFAULT CHARSET=utf8;

INSERT INTO toa_workclass_type VALUES ('1000','公共业务','1','999');
INSERT INTO toa_workclass_type VALUES ('1004','办公室','1','999');
INSERT INTO toa_workclass_type VALUES ('1005','机关党委','1','999');
INSERT INTO toa_workclass_type VALUES ('1007','信息统计处','1','999');
INSERT INTO toa_workclass_type VALUES ('1008','计划财务处','41','999');
INSERT INTO toa_workclass_type VALUES ('1010','移民后扶处','74','999');
INSERT INTO toa_workclass_type VALUES ('1011','规划处','48','999');
INSERT INTO toa_workclass_type VALUES ('1012','省移民工程开发中心','219','999');
INSERT INTO toa_workclass_type VALUES ('1013','扶贫开发指导处','163','999');

