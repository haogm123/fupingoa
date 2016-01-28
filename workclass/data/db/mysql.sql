DROP TABLE IF EXISTS toa_workclass;
CREATE TABLE toa_workclass (
  id int(11) NOT NULL AUTO_INCREMENT,
  number varchar(64) DEFAULT NULL,
  typeid varchar(16) DEFAULT NULL,
  tplid varchar(16) DEFAULT NULL,
  title varchar(255) DEFAULT NULL,
  uid varchar(16) DEFAULT NULL,
  date datetime DEFAULT NULL,
  type varchar(2) DEFAULT NULL,
  numberview varchar(255) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM AUTO_INCREMENT=1000 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS toa_workclass_db;
CREATE TABLE toa_workclass_db (
  did int(11) NOT NULL AUTO_INCREMENT,
  inputname varchar(64) DEFAULT NULL,
  content text,
  workid varchar(16) DEFAULT NULL,
  tplid varchar(16) DEFAULT NULL,
  fromid varchar(16) DEFAULT NULL,
  typeid varchar(16) DEFAULT NULL,
  type varchar(2) NOT NULL,
  PRIMARY KEY (did)
) ENGINE=MyISAM AUTO_INCREMENT=1000 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS toa_workclass_flow;
CREATE TABLE toa_workclass_flow (
  fid int(11) NOT NULL AUTO_INCREMENT,
  flowname varchar(64) DEFAULT NULL,
  flownum varchar(2) DEFAULT NULL,
  flowuser varchar(128) DEFAULT NULL,
  uid varchar(16) DEFAULT NULL,
  tplid varchar(16) DEFAULT NULL,
  typeid varchar(16) DEFAULT NULL,
  flowkey varchar(2) DEFAULT NULL,
  flowkey1 varchar(2) DEFAULT NULL,
  flowkey2 varchar(2) DEFAULT NULL,
  flowkey3 varchar(2) DEFAULT NULL,
  flowkey4 varchar(64) DEFAULT NULL,
  flowdate varchar(16) DEFAULT NULL,
  flowdatetype varchar(2) DEFAULT NULL,
  PRIMARY KEY (fid)
) ENGINE=MyISAM AUTO_INCREMENT=1000 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS toa_workclass_from;
CREATE TABLE toa_workclass_from (
  fromid int(11) NOT NULL AUTO_INCREMENT,
  fromname varchar(64) DEFAULT NULL,
  inputname varchar(64) DEFAULT NULL,
  inputvalue varchar(128) DEFAULT NULL,
  inputtype varchar(2) DEFAULT NULL,
  inputtype1 varchar(2) DEFAULT NULL,
  inputvaluenum tinytext,
  confirmation varchar(2) DEFAULT NULL,
  uid varchar(16) DEFAULT NULL,
  tplid varchar(16) DEFAULT NULL,
  flowid varchar(16) DEFAULT NULL,
  typeid varchar(16) DEFAULT NULL,
  formtype varchar(2) DEFAULT NULL,
  inputnumber int(11) DEFAULT NULL,
  w varchar(16) DEFAULT NULL,
  h varchar(16) DEFAULT NULL,
  PRIMARY KEY (fromid)
) ENGINE=MyISAM AUTO_INCREMENT=1000 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS toa_workclass_personnel;
CREATE TABLE toa_workclass_personnel (
  perid int(11) NOT NULL AUTO_INCREMENT,
  name varchar(32) DEFAULT NULL,
  uid varchar(16) DEFAULT NULL,
  designationdate datetime DEFAULT NULL,
  approvaldate datetime DEFAULT NULL,
  lnstructions varchar(255) DEFAULT NULL,
  pertype varchar(2) DEFAULT NULL,
  workid varchar(16) DEFAULT NULL,
  typeid varchar(16) DEFAULT NULL,
  flowid varchar(16) DEFAULT NULL,
  appkey varchar(2) DEFAULT NULL,
  appkey1 varchar(2) DEFAULT NULL,
  flowdate varchar(16) DEFAULT NULL,
  flowdatetype varchar(2) DEFAULT NULL,
  PRIMARY KEY (perid)
) ENGINE=MyISAM AUTO_INCREMENT=1000 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS toa_workclass_personnel_log;
CREATE TABLE toa_workclass_personnel_log (
  lid int(11) NOT NULL AUTO_INCREMENT,
  name varchar(32) DEFAULT NULL,
  uid varchar(16) DEFAULT NULL,
  approvaldate datetime DEFAULT NULL,
  lnstructions varchar(255) DEFAULT NULL,
  pertype varchar(2) DEFAULT NULL,
  perid varchar(16) DEFAULT NULL,
  workid varchar(16) DEFAULT NULL,
  typeid varchar(16) DEFAULT NULL,
  PRIMARY KEY (lid)
) ENGINE=MyISAM AUTO_INCREMENT=1000 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS toa_workclass_template;
CREATE TABLE toa_workclass_template (
  tplid int(11) NOT NULL AUTO_INCREMENT,
  title varchar(64) DEFAULT NULL,
  typeid varchar(16) DEFAULT NULL,
  tplkey varchar(2) DEFAULT NULL,
  tpltype varchar(2) DEFAULT NULL,
  tpluser text,
  tpladmin text,
  uid varchar(16) DEFAULT NULL,
  tpladdr varchar(64) DEFAULT NULL,
  PRIMARY KEY (tplid)
) ENGINE=MyISAM AUTO_INCREMENT=1000 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS toa_workclass_type;
CREATE TABLE toa_workclass_type (
  tid int(11) NOT NULL AUTO_INCREMENT,
  typename varchar(64) DEFAULT NULL,
  uid varchar(16) DEFAULT NULL,
  typenum int(11) NOT NULL,
  PRIMARY KEY (tid)
) ENGINE=MyISAM AUTO_INCREMENT=1000 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS toa_workclass_charts;
CREATE TABLE toa_workclass_charts (
  id int(11) NOT NULL AUTO_INCREMENT,
  number varchar(16) DEFAULT NULL,
  typeid varchar(16) DEFAULT NULL,
  tplid varchar(16) DEFAULT NULL,
  title varchar(255) DEFAULT NULL,
  numdata text,
  search text,
  PRIMARY KEY (id)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1000;
INSERT INTO toa_keytable (id, name, inputname, inputvalue, inputchecked, type, number, fatherid) VALUES
(359, '工作流', 'input_name', '0', '1', '1', 2, '357'),
(277, '工作流', 'input_name', '0', '1', '1', 7, '0'),
(278, '工作流', 'input_name', '0', '1', '1', 1, '277'),
(279, '流程管理', 'input_name', '0', '1', '1', 2, '277'),
(280, '允许', 'workclass', '1', '1', '1', 1, '278'),
(281, '拒绝', 'workclass', '0', '2', '1', 2, '278'),
(282, '新建流程', 'workclass_add', '1', '1', '2', 3, '278'),
(283, '删除', 'workclass_delete', '1', '1', '2', 4, '278'),
(284, '允许', 'workclass_admin', '1', '1', '1', 1, '279'),
(285, '拒绝', 'workclass_admin', '0', '2', '1', 2, '279'),
(376, '允许', 'excel_9', '1', '1', '1', 1, '359'),
(377, '拒绝', 'excel_9', '0', '1', '1', 2, '359');
INSERT INTO toa_menu (menuid, menuname, menuurl, fatherid, menutype, menunum, menukey) VALUES
(4, '工作流转', 'home.php?mid=4', '0', '0', 2, '1'),
(277, '报表与统计', 'admin.php?ac=charts&fileurl=workclass', '4', '2', 6, '0'),
(278, '流程综合统计', 'admin.php?ac=charts&fileurl=workclass', '277', '2', 1, '0'),
(279, '流程模型统计', 'admin.php?ac=charts&fileurl=workclass&do=tpl', '277', '2', 2, '0'),
(280, '统程模型管理', 'admin.php?ac=charts&fileurl=workclass&do=mana', '277', '2', 3, '0'),
(269, '流程管理', 'admin.php?ac=list&fileurl=workclass&type=3', '4', '2', 4, '0'),
(270, '流程设置', 'admin.php?ac=type&fileurl=workclass', '4', '2', 7, '0'),
(271, '新建流程', 'admin.php?ac=workadd&fileurl=workclass', '4', '2', 1, '0'),
(272, '待我审批', 'admin.php?ac=list&fileurl=workclass&type=1', '4', '2', 2, '0'),
(273, '经我审批', 'admin.php?ac=list&fileurl=workclass&type=2', '4', '2', 3, '0'),
(274, '流程列表', 'admin.php?ac=list&fileurl=workclass', '4', '2', 5, '0'),
(275, '工作流类别管理', 'admin.php?ac=type&fileurl=workclass', '270', '2', 1, '0'),
(276, '工作流模型管理', 'admin.php?ac=tpl&fileurl=workclass', '270', '2', 2, '0');

