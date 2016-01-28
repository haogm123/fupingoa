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

INSERT INTO toa_workclass VALUES ('1097','20140612143534','1007','1020','���ڱ�����ݡ�ʡ���������Ժ���͵��������ٸĸ�ṹ���������ߴ�ʩ��ʵ����Բ鱨�桱������ϵĺ����ؼ���','3','2014-06-12 14:42:43','0','');
INSERT INTO toa_workclass VALUES ('1094','20140610180147','1007','1020','���ڱ���2014���ϰ��깤���ܽἰ�°��깤���ƻ���֪ͨ','3','2014-06-10 18:03:39','1','');
INSERT INTO toa_workclass VALUES ('1092','20140610173530','1008','1019','��ˮ��20140610173530 ������ת','41','2014-06-10 17:38:28','0','');
INSERT INTO toa_workclass VALUES ('1098','20140613093148','1000','1015','��ˮ��20140613093148 �����ڲ���ת','163','2014-06-13 09:33:21','0','');
INSERT INTO toa_workclass VALUES ('1099','20140613154859','1008','1019','���ڿ�չ���������������ļ�ֵ�ۡ����������⹫��Ա��������ѵ��֪ͨ','41','2014-06-13 15:50:36','0','');
INSERT INTO toa_workclass VALUES ('1101','20140613164050','1008','1019','���ڱ�����ݡ�ʡ���������Ժ���͵��������ٸĸ���ṹ���������ߴ�ʩ��ʵ����Բ鱨�桱������ϵĺ�','41','2014-06-13 16:44:45','0','');
INSERT INTO toa_workclass VALUES ('1102','20140616151220','1000','1015','��ˮ��20140616151220 �����ڲ���ת','57','2014-06-16 15:15:21','0','');
INSERT INTO toa_workclass VALUES ('1103','20140616155342','1000','1015','��ˮ��20140616155342 �����ڲ���ת','163','2014-06-16 16:00:17','0','');
INSERT INTO toa_workclass VALUES ('1104','20140616172329','1000','1015','��ˮ��20140616172329 �����ڲ���ת','57','2014-06-16 17:25:53','0','');
INSERT INTO toa_workclass VALUES ('1105','20140617144854','1000','1015','��ˮ��20140617144854 �����ڲ���ת','163','2014-06-17 14:50:18','0','');
INSERT INTO toa_workclass VALUES ('1109','20140618100722','1000','1022','��ˮ��20140618100722 �ַ��ļ�','163','2014-06-18 10:08:20','0','');
INSERT INTO toa_workclass VALUES ('1110','20140618102618','1000','1022','����ת��������Ժ��ƶ�����ӡ������ƶ������������ָ����ϵ����֪ͨ����֪ͨ������ƶ����[2014]126�� ��','167','2014-06-18 10:31:14','0','');
INSERT INTO toa_workclass VALUES ('1108','20140618095838','1000','1022','��ˮ��20140618095838 �ַ��ļ�','167','2014-06-18 10:01:49','0','');
INSERT INTO toa_workclass VALUES ('1111','20140618103714','1000','1022','����ת��������Ժ��ƶ�����ӡ������ƶ������������ָ����ϵ����֪ͨ����֪ͨ������ƶ����[2014]126��&nbsp;&nbsp;��','167','2014-06-18 10:38:27','0','');
INSERT INTO toa_workclass VALUES ('1112','20140618110241','1007','1020','�й��Ĵ�ʡί�칫�����ڳ���ʡί���簲ȫ����Ϣ���쵼С���֪ͨ','3','2014-06-18 11:04:20','0','');
INSERT INTO toa_workclass VALUES ('1113','20140618110720','1000','1022','���ڱ����»�����������֪ͨ','92','2014-06-18 11:09:23','0','');
INSERT INTO toa_workclass VALUES ('1114','20140618111208','1000','1022','���ڱ����»�����������֪ͨ','92','2014-06-18 11:16:26','0','');
INSERT INTO toa_workclass VALUES ('1115','20140618113320','1000','1022','��ˮ��20140618113320 �ַ��ļ�','163','2014-06-18 11:33:59','0','');
INSERT INTO toa_workclass VALUES ('1116','20140618154122','1008','1019','����ת��������������������������������ɽ����ѡ������ҵ����չ��Ŀ�ʽ𱨸�ĺ�������ʾ','41','2014-06-18 15:44:30','0','');
INSERT INTO toa_workclass VALUES ('1117','20140619094727','1000','1015','��ˮ��20140619094727 �����ڲ���ת','163','2014-06-19 09:49:08','0','');
INSERT INTO toa_workclass VALUES ('1096','20140611174428','1008','1019','�����������ũ�ʽ����Ϲ���ʵʩ�취��������壩����ĺ�','41','2014-06-11 17:47:08','0','����ũ����2014��71��');

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

INSERT INTO toa_workclass_from VALUES ('1000','΢������','toa_9922_20131210203556','','0','2','','1','1','1000','','1000','1','999','','');
INSERT INTO toa_workclass_from VALUES ('1010','��ʾ��','toa_3785_20131218165823','','0','2','','1','1','1006','','1000','1','999','','');
INSERT INTO toa_workclass_from VALUES ('1017','��ֵ�����','toa_3898_20140320111043','','0','1','','1','193','1016','1049','1000','2','999','','');
INSERT INTO toa_workclass_from VALUES ('1008','�칫��Ʒ�ɹ�','toa_0019_20131218160829','','0','2','','1','1','1009','','1000','1','999','','');
INSERT INTO toa_workclass_from VALUES ('1016','����','toa_7090_20140226203712','','0','2','','1','192','1015','','1000','1','999','','');
INSERT INTO toa_workclass_from VALUES ('1012','�ɹ���','toa_5979_20131218170914','','0','2','','1','1','1010','','1000','1','999','','');
INSERT INTO toa_workclass_from VALUES ('1013','�����������뵥','toa_6605_20131218171009','','0','2','','1','1','1011','','1004','1','999','','');
INSERT INTO toa_workclass_from VALUES ('1015','��ӡ��','toa_2352_20131218175222','','0','2','','1','1','1013','','1005','1','999','','');
INSERT INTO toa_workclass_from VALUES ('1018','��˱�','toa_6584_20140606103425','','0','2','','1','192','1017','1051','1000','2','999','','');
INSERT INTO toa_workclass_from VALUES ('1022','������ת','toa_7380_20140612103848','','0','2','','1','48','1021','','1011','1','999','350','350');
INSERT INTO toa_workclass_from VALUES ('1020','������ת','toa_8412_20140610171558','','0','2','','1','41','1019','','1008','1','999','350','350');
INSERT INTO toa_workclass_from VALUES ('1021','������ת','toa_4028_20140610175507','','0','2','','1','3','1020','','1007','1','999','400','500');
INSERT INTO toa_workclass_from VALUES ('1023','�ļ��ַ�','toa_9369_20140618092830','','0','2','','1','167','1022','','1000','1','999','350','250');

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

INSERT INTO toa_workclass_personnel VALUES ('1000','����','3','2013-12-13 11:37:58','2013-12-13 11:37:58','�����������뵥��ϵͳ�Զ���ɸò���','1','1000','1000','1005','2','2','2013-12-13 11:37','0');
INSERT INTO toa_workclass_personnel VALUES ('1001','����','2','2013-12-13 11:37:58','','','0','1000','1000','1006','2','','','0');
INSERT INTO toa_workclass_personnel VALUES ('1002','����','3','2013-12-13 11:47:41','2013-12-13 11:47:41','�����������뵥��ϵͳ�Զ���ɸò���','1','1001','1000','1007','2','2','2013-12-13 11:47','0');
INSERT INTO toa_workclass_personnel VALUES ('1003','����','2','2013-12-13 11:47:41','2013-12-13 11:49:04','ͬ��','5','1001','1000','1008','2','2','','0');
INSERT INTO toa_workclass_personnel VALUES ('1028','����Ա','1','2013-12-18 17:29:12','2013-12-18 17:29:12','�����������뵥��ϵͳ�Զ���ɸò���','1','1013','1004','1034','2','2','2013-12-18 17:29','0');
INSERT INTO toa_workclass_personnel VALUES ('1029','����','2','2013-12-18 17:29:12','2013-12-18 17:30:23','ͬ�⣬���ǩ','1','1013','1004','1035','2','','','0');
INSERT INTO toa_workclass_personnel VALUES ('1030','������','30','','2013-12-18 17:31:53','���׹�','3','1013','1004','1036','2','','','0');
INSERT INTO toa_workclass_personnel VALUES ('1031','����','2','','','','0','1013','1004','1035','2','','','0');
INSERT INTO toa_workclass_personnel VALUES ('1231','��ε','163','2014-06-17 14:50:18','2014-06-17 14:50:18','�����������뵥��ϵͳ�Զ���ɸò���','1','1105','1000','1043','2','2','2014-06-17 14:50','0');
INSERT INTO toa_workclass_personnel VALUES ('1230','����÷','62','2014-06-16 17:25:53','2014-06-19 10:33:02','����','1','1104','1000','1044','2','2','','0');
INSERT INTO toa_workclass_personnel VALUES ('1229','���','57','2014-06-16 17:25:53','2014-06-16 17:25:53','�����������뵥��ϵͳ�Զ���ɸò���','1','1104','1000','1043','2','2','2014-06-16 17:25','0');
INSERT INTO toa_workclass_personnel VALUES ('1232','����','193','2014-06-17 14:50:18','','','0','1105','1000','1044','2','2','','0');
INSERT INTO toa_workclass_personnel VALUES ('1242','Ĳ��','167','2014-06-18 10:31:14','2014-06-18 10:31:14','�����������뵥��ϵͳ�Զ���ɸò���','1','1110','1000','1067','2','2','2014-06-18 10:31','0');
INSERT INTO toa_workclass_personnel VALUES ('1239','��ε','163','2014-06-18 10:08:20','2014-06-18 10:08:20','�����������뵥��ϵͳ�Զ���ɸò���','1','1109','1000','1067','2','2','2014-06-18 10:08','0');
INSERT INTO toa_workclass_personnel VALUES ('1240','���,��ǿ,���ǰ�','57,58,61','2014-06-18 10:08:20','2014-06-18 16:53:01','�Ѱ���','2','1109','1000','1068','1','1','','0');
INSERT INTO toa_workclass_personnel VALUES ('1241','Ĳ��','167','','2014-06-18 10:43:46','����','5','1108','1000','1069','2','','','0');
INSERT INTO toa_workclass_personnel VALUES ('1237','Ĳ��','167','2014-06-18 10:01:49','2014-06-18 10:01:49','�����������뵥��ϵͳ�Զ���ɸò���','1','1108','1000','1067','2','2','2014-06-18 10:01','0');
INSERT INTO toa_workclass_personnel VALUES ('1238','����','3','2014-06-18 10:01:49','2014-06-18 10:16:46','����','1','1108','1000','1068','1','1','','0');
INSERT INTO toa_workclass_personnel VALUES ('1243','�Ź�,����,�޻���,���Ǳ�,��ΰ��,��ά��,�Ż���,����,����,','4,14,15,16,17,18','2014-06-18 10:31:14','2014-06-19 11:39:18','��','4','1110','1000','1068','1','1','','0');
INSERT INTO toa_workclass_personnel VALUES ('1244','Ĳ��','167','2014-06-18 10:38:27','2014-06-18 10:38:27','�����������뵥��ϵͳ�Զ���ɸò���','1','1111','1000','1067','2','2','2014-06-18 10:38','0');
INSERT INTO toa_workclass_personnel VALUES ('1245','������,��,����','10,90,92','2014-06-18 10:38:27','2014-06-18 10:41:35','����','4','1111','1000','1068','1','1','','0');
INSERT INTO toa_workclass_personnel VALUES ('1246','����','3','2014-06-18 11:04:20','2014-06-18 11:04:20','�����������뵥��ϵͳ�Զ���ɸò���','1','1112','1007','1060','2','2','2014-06-18 11:04','0');
INSERT INTO toa_workclass_personnel VALUES ('1247','����','54','2014-06-18 11:04:20','2014-06-18 14:38:45','����','1','1112','1007','1061','2','','','0');
INSERT INTO toa_workclass_personnel VALUES ('1248','����','92','2014-06-18 11:09:23','2014-06-18 11:09:23','�����������뵥��ϵͳ�Զ���ɸò���','1','1113','1000','1067','2','2','2014-06-18 11:09','0');
INSERT INTO toa_workclass_personnel VALUES ('1249','Ĳ��','167','2014-06-18 11:09:23','2014-06-18 11:11:03','�յ�','1','1113','1000','1068','1','1','','0');
INSERT INTO toa_workclass_personnel VALUES ('1250','����','92','','','','0','1113','1000','1069','2','','','0');
INSERT INTO toa_workclass_personnel VALUES ('1251','����','92','2014-06-18 11:16:26','2014-06-18 11:16:26','�����������뵥��ϵͳ�Զ���ɸò���','1','1114','1000','1067','2','2','2014-06-18 11:16','0');
INSERT INTO toa_workclass_personnel VALUES ('1252','�Ź�,����,�޻���,���Ǳ�,��ΰ��,��ά��,�Ż���,����,����,','4,14,15,16,17,18','2014-06-18 11:16:26','2014-06-19 11:39:59','֪����','4','1114','1000','1068','1','1','','0');
INSERT INTO toa_workclass_personnel VALUES ('1255','����,������,����,������,Ĳ��','3,31,54,56,167','','2014-06-19 09:38:28','�����°���','4','1112','1007','1062','1','1','','0');
INSERT INTO toa_workclass_personnel VALUES ('1253','��ε','163','2014-06-18 11:33:59','2014-06-18 11:33:59','�����������뵥��ϵͳ�Զ���ɸò���','1','1115','1000','1067','2','2','2014-06-18 11:33','0');
INSERT INTO toa_workclass_personnel VALUES ('1254','����','63','2014-06-18 11:33:59','','','0','1115','1000','1068','1','1','','0');
INSERT INTO toa_workclass_personnel VALUES ('1256','����','41','2014-06-18 15:44:30','2014-06-18 15:44:30','�����������뵥��ϵͳ�Զ���ɸò���','1','1116','1008','1056','2','2','2014-06-18 15:44','0');
INSERT INTO toa_workclass_personnel VALUES ('1257','����','37','2014-06-18 15:44:30','','','0','1116','1008','1057','2','','','0');
INSERT INTO toa_workclass_personnel VALUES ('1258','��ǿ','58','','','','0','1103','1000','1045','2','2','','0');
INSERT INTO toa_workclass_personnel VALUES ('1259','��ε','163','2014-06-19 09:49:08','2014-06-19 09:49:08','�����������뵥��ϵͳ�Զ���ɸò���','1','1117','1000','1043','2','2','2014-06-19 09:49','0');
INSERT INTO toa_workclass_personnel VALUES ('1260','���','57','2014-06-19 09:49:08','','','0','1117','1000','1044','2','2','','0');
INSERT INTO toa_workclass_personnel VALUES ('1261','����','193','','','','0','1104','1000','1045','2','2','','0');
INSERT INTO toa_workclass_personnel VALUES ('1226','���ǰ�','61','2014-06-16 15:15:21','2014-06-18 16:51:59','�Ѱ���','2','1102','1000','1044','2','2','','0');
INSERT INTO toa_workclass_personnel VALUES ('1227','��ε','163','2014-06-16 16:00:17','2014-06-16 16:00:17','�����������뵥��ϵͳ�Զ���ɸò���','1','1103','1000','1043','2','2','2014-06-16 16:00','0');
INSERT INTO toa_workclass_personnel VALUES ('1228','���','57','2014-06-16 16:00:17','2014-06-18 16:13:28','��ȫ�����ģ�������ǿ�ʹ�С��ɽ��Сʦ��С������ƽ��ί�Ľ���Ҫ��;��쵼�����ʾ�ᴩ���ͼ���կ����ָ�������С�','1','1103','1000','1044','2','2','','0');
INSERT INTO toa_workclass_personnel VALUES ('1225','���','57','2014-06-16 15:15:21','2014-06-16 15:15:21','�����������뵥��ϵͳ�Զ���ɸò���','1','1102','1000','1043','2','2','2014-06-16 15:15','0');
INSERT INTO toa_workclass_personnel VALUES ('1184','����','54','2014-06-08 10:04:29','','','0','1085','1007','1053','2','','','0');
INSERT INTO toa_workclass_personnel VALUES ('1185','����Ա','1','2014-06-08 10:24:13','2014-06-08 10:24:13','�����������뵥��ϵͳ�Զ���ɸò���','1','1086','1007','1052','2','2','2014-06-08 10:24','0');
INSERT INTO toa_workclass_personnel VALUES ('1186','����','54','2014-06-08 10:24:13','2014-06-08 10:25:25','�ٸ���','5','1086','1007','1053','2','2','','0');
INSERT INTO toa_workclass_personnel VALUES ('1187','����Ա','1','2014-06-08 10:39:13','2014-06-08 10:39:13','�����������뵥��ϵͳ�Զ���ɸò���','1','1087','1007','1052','2','2','2014-06-08 10:39','0');
INSERT INTO toa_workclass_personnel VALUES ('1188','����','54','2014-06-08 10:39:13','2014-06-08 10:41:20','���޸���','2','1087','1007','1054','2','','','0');
INSERT INTO toa_workclass_personnel VALUES ('1224','����','55','','','','0','1101','1008','1058','1','1','','0');
INSERT INTO toa_workclass_personnel VALUES ('1222','����','41','2014-06-13 16:44:45','2014-06-13 16:44:45','�����������뵥��ϵͳ�Զ���ɸò���','1','1101','1008','1056','2','2','2014-06-13 16:44','0');
INSERT INTO toa_workclass_personnel VALUES ('1205','����','3','','','','0','1094','1007','1062','2','','','0');
INSERT INTO toa_workclass_personnel VALUES ('1223','����','37','2014-06-13 16:44:45','2014-06-13 16:48:17','���˴����ļ�Ҫ���ṩ�йز���','1','1101','1008','1057','2','','','0');
INSERT INTO toa_workclass_personnel VALUES ('1203','����','3','2014-06-10 18:03:39','2014-06-10 18:03:39','�����������뵥��ϵͳ�Զ���ɸò���','1','1094','1007','1060','2','2','2014-06-10 18:03','0');
INSERT INTO toa_workclass_personnel VALUES ('1204','����','54','2014-06-10 18:03:39','2014-06-10 18:07:04','�����°���','1','1094','1007','1061','2','','','0');
INSERT INTO toa_workclass_personnel VALUES ('1199','����','41','2014-06-10 17:38:28','2014-06-10 17:38:28','�����������뵥��ϵͳ�Զ���ɸò���','1','1092','1008','1056','2','2','2014-06-10 17:38','0');
INSERT INTO toa_workclass_personnel VALUES ('1200','����','37','2014-06-10 17:38:28','2014-06-10 18:09:25','���˴�ǣͷ����Ҫ����ɰ����ܽ᣻������¬���ֱ�Բ���������������ʽ���������а����ܽᣬ���ĸ彻�˴����ܡ�','1','1092','1008','1057','2','','','0');
INSERT INTO toa_workclass_personnel VALUES ('1206','¬ǿ,������,����','38,39,55','','2014-06-18 09:19:58','�Ѱ���','4','1092','1008','1058','1','1','','0');
INSERT INTO toa_workclass_personnel VALUES ('1219','����,¬ǿ,������,���,����,������,����','37,38,39,40,41,4','','2014-06-18 09:31:46','��Ҫ��μ���ѵ�Ͳ���','4','1099','1008','1058','1','1','','0');
INSERT INTO toa_workclass_personnel VALUES ('1209','����','41','2014-06-11 17:47:08','2014-06-11 17:47:08','�����������뵥��ϵͳ�Զ���ɸò���','1','1096','1008','1056','2','2','2014-06-11 17:47','0');
INSERT INTO toa_workclass_personnel VALUES ('1210','����','37','2014-06-11 17:47:08','2014-06-11 17:54:10','���˴��������ظ���','1','1096','1008','1057','2','','','0');
INSERT INTO toa_workclass_personnel VALUES ('1211','����','55','','2014-06-17 17:20:53','�ѻظ���������','5','1096','1008','1058','1','1','','0');
INSERT INTO toa_workclass_personnel VALUES ('1212','����','3','2014-06-12 14:42:43','2014-06-12 14:42:43','�����������뵥��ϵͳ�Զ���ɸò���','1','1097','1007','1060','2','2','2014-06-12 14:42','0');
INSERT INTO toa_workclass_personnel VALUES ('1213','������','31','2014-06-12 14:42:43','2014-06-12 14:49:06','��Ĳ������','1','1097','1007','1061','2','','','0');
INSERT INTO toa_workclass_personnel VALUES ('1214','����','3','','2014-06-12 14:50:26','','5','1097','1007','1062','2','','','0');
INSERT INTO toa_workclass_personnel VALUES ('1215','��ε','163','2014-06-13 09:33:21','2014-06-13 09:33:21','�����������뵥��ϵͳ�Զ���ɸò���','1','1098','1000','1043','2','2','2014-06-13 09:33','0');
INSERT INTO toa_workclass_personnel VALUES ('1216','���ǰ�','61','2014-06-13 09:33:21','2014-06-18 16:50:27','�Ѱ���','2','1098','1000','1044','2','2','','0');
INSERT INTO toa_workclass_personnel VALUES ('1217','����','41','2014-06-13 15:50:36','2014-06-13 15:50:36','�����������뵥��ϵͳ�Զ���ɸò���','1','1099','1008','1056','2','2','2014-06-13 15:50','0');
INSERT INTO toa_workclass_personnel VALUES ('1218','����','37','2014-06-13 15:50:36','2014-06-13 15:57:34','��ÿλͬ־���ļ�Ҫ��ѧϰ���μӿ��ԡ�','1','1099','1008','1057','2','','','0');
INSERT INTO toa_workclass_personnel VALUES ('1183','����Ա','1','2014-06-08 10:04:29','2014-06-08 10:04:29','�����������뵥��ϵͳ�Զ���ɸò���','1','1085','1007','1052','2','2','2014-06-08 10:04','0');

DROP TABLE IF EXISTS toa_workclass_type;
CREATE TABLE `toa_workclass_type` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `typename` varchar(64) DEFAULT NULL,
  `uid` varchar(16) DEFAULT NULL,
  `typenum` int(11) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=1014 DEFAULT CHARSET=utf8;

INSERT INTO toa_workclass_type VALUES ('1000','����ҵ��','1','999');
INSERT INTO toa_workclass_type VALUES ('1004','�칫��','1','999');
INSERT INTO toa_workclass_type VALUES ('1005','���ص�ί','1','999');
INSERT INTO toa_workclass_type VALUES ('1007','��Ϣͳ�ƴ�','1','999');
INSERT INTO toa_workclass_type VALUES ('1008','�ƻ�����','41','999');
INSERT INTO toa_workclass_type VALUES ('1010','��������','74','999');
INSERT INTO toa_workclass_type VALUES ('1011','�滮��','48','999');
INSERT INTO toa_workclass_type VALUES ('1012','ʡ���񹤳̿�������','219','999');
INSERT INTO toa_workclass_type VALUES ('1013','��ƶ����ָ����','163','999');

