DROP TABLE IF EXISTS toa_project_type;
CREATE TABLE toa_project_type (
  tid int(11) NOT NULL AUTO_INCREMENT,
  title varchar(64) DEFAULT NULL,
  manauser text,
  keyuser text,
  type1 varchar(2) DEFAULT NULL,
  type2 varchar(2) DEFAULT NULL,
  uid varchar(16) DEFAULT NULL,
  PRIMARY KEY (tid)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS toa_project_model;
CREATE TABLE toa_project_model (
  mid int(11) NOT NULL AUTO_INCREMENT,
  modname varchar(64) DEFAULT NULL,
  manauser text,
  keyuser text,
  typeid varchar(16) DEFAULT NULL,
  key1 varchar(2) DEFAULT NULL,
  key2 varchar(2) DEFAULT NULL,
  key3 varchar(2) DEFAULT NULL,
  key4 varchar(2) DEFAULT NULL,
  addr varchar(64) DEFAULT NULL,
  uid varchar(16) DEFAULT NULL,
  PRIMARY KEY (mid)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS toa_project_flow;
CREATE TABLE toa_project_flow (
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
  flowkey4 varchar(2) DEFAULT NULL,
  PRIMARY KEY (fid)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS toa_project_template;
CREATE TABLE toa_project_template (
  tplid int(11) NOT NULL AUTO_INCREMENT,
  title varchar(64) DEFAULT NULL,
  typeid varchar(16) DEFAULT NULL,
  modid varchar(16) DEFAULT NULL,
  tplkey varchar(2) DEFAULT NULL,
  tpltype varchar(2) DEFAULT NULL,
  uid varchar(16) DEFAULT NULL,
  tpladdr varchar(64) DEFAULT NULL,
  number varchar(16) DEFAULT NULL,
  PRIMARY KEY (tplid)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS toa_project_from;
CREATE TABLE toa_project_from (
  fromid int(11) NOT NULL AUTO_INCREMENT,
  fromname varchar(64) DEFAULT NULL,
  inputname varchar(64) DEFAULT NULL,
  inputvalue varchar(128) DEFAULT NULL,
  inputtype varchar(2) DEFAULT NULL,
  inputtype1 varchar(2) DEFAULT NULL,
  inputvaluenum text,
  confirmation varchar(2) DEFAULT NULL,
  uid varchar(16) DEFAULT NULL,
  tplid varchar(16) DEFAULT NULL,
  typeid varchar(16) DEFAULT NULL,
  formtype varchar(2) DEFAULT NULL,
  PRIMARY KEY (fromid)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS toa_project;
CREATE TABLE toa_project (
  id int(11) NOT NULL AUTO_INCREMENT,
  number varchar(64) DEFAULT NULL,
  typeid varchar(16) DEFAULT NULL,
  title varchar(255) DEFAULT NULL,
  uid varchar(16) DEFAULT NULL,
  type varchar(2) DEFAULT NULL,
  numberview text,
  numberurl text,
  statdate date DEFAULT NULL,
  enddate date DEFAULT NULL,
  date datetime DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS toa_project_log;
CREATE TABLE toa_project_log(
  lid int(11) NOT NULL AUTO_INCREMENT,
  number varchar(64) DEFAULT NULL,
  typeid varchar(16) DEFAULT NULL,
  title varchar(255) DEFAULT NULL,
  uid varchar(16) DEFAULT NULL,
  type varchar(2) DEFAULT NULL,
  numberview text,
  numberurl text,
  projectid varchar(16) DEFAULT NULL,
  modid varchar(16) DEFAULT NULL,
  tplid varchar(16) DEFAULT NULL,
  date datetime DEFAULT NULL,
  PRIMARY KEY (lid)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS toa_project_db;
CREATE TABLE toa_project_db(
  did int(11) NOT NULL AUTO_INCREMENT,
  inputname varchar(64) DEFAULT NULL,
  content text,
  projectid varchar(16) DEFAULT NULL,
  tplid varchar(16) DEFAULT NULL,
  fromid varchar(16) DEFAULT NULL,
  typeid varchar(16) DEFAULT NULL,
  modid varchar(16) DEFAULT NULL,
  type varchar(2) DEFAULT NULL,
  PRIMARY KEY (did)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS toa_project_personnel;
CREATE TABLE toa_project_personnel(
  perid int(11) NOT NULL AUTO_INCREMENT,
  name varchar(32) DEFAULT NULL,
  uid varchar(16) DEFAULT NULL,
  designationdate datetime DEFAULT NULL,
  approvaldate datetime DEFAULT NULL,
  lnstructions varchar(255) DEFAULT NULL,
  pertype varchar(2) DEFAULT NULL,
  projectid varchar(16) DEFAULT NULL,
  typeid varchar(16) DEFAULT NULL,
  flowid varchar(16) DEFAULT NULL,
  appkey varchar(2) DEFAULT NULL,
  appkey1 varchar(2) DEFAULT NULL,
  appkey2 varchar(2) DEFAULT NULL,
  PRIMARY KEY (perid)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS toa_project_personnel_log;
CREATE TABLE toa_project_personnel_log (
  lid int(11) NOT NULL AUTO_INCREMENT,
  name varchar(32) DEFAULT NULL,
  uid varchar(16) DEFAULT NULL,
  designationdate datetime DEFAULT NULL,
  approvaldate datetime DEFAULT NULL,
  lnstructions varchar(255) DEFAULT NULL,
  pertype varchar(2) DEFAULT NULL,
  perid varchar(16) DEFAULT NULL,
  projectid varchar(16) DEFAULT NULL,
  typeid varchar(16) DEFAULT NULL,
  appkey2 varchar(2) DEFAULT NULL,
  PRIMARY KEY (lid)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;
INSERT INTO toa_menu (menuid, menuname, menuurl, fatherid, menutype, menunum, menukey) VALUES
(8, '项目管理', 'home.php?mid=8', '0', '0', 8, '1'),
(59, '新建项目', 'admin.php?ac=workadd&fileurl=project', '8', '2', 1, '0'),
(60, '项目管理', 'admin.php?ac=list&fileurl=project&type=3', '8', '2', 3, '0'),
(61, '项目审批', 'admin.php?ac=list&fileurl=project&type=1', '8', '2', 2, '0'),
(62, '项目列表', 'admin.php?ac=list&fileurl=project', '8', '2', 4, ''),
(63, '项目设置', 'admin.php?ac=type&fileurl=project', '8', '0', 6, '0'),
(283, '报表与统计', 'admin.php?ac=charts&fileurl=project', '8', '0', 5, '0');
INSERT INTO toa_keytable (id, name, inputname, inputvalue, inputchecked, type, number, fatherid) VALUES
(365, '项目', 'input_name', '0', '1', '1', 8, '357'),
(267, '项目管理', 'input_name', '0', '1', '1', 6, '0'),
(268, '基础信息设置', 'project_config', '1', '1', '2', 3, '267'),
(269, '项目管理', 'project_', '1', '1', '2', 1, '267'),
(270, '允许', 'project_config', '1', '1', '1', 1, '268'),
(271, '拒绝', 'project_config', '0', '2', '1', 2, '268'),
(272, '允许', 'project_', '1', '1', '1', 1, '269'),
(273, '拒绝', 'project_', '0', '2', '1', 2, '269'),
(274, '项目任务', 'input_name', '0', '1', '1', 2, '267'),
(275, '允许', 'project_duty', '1', '1', '1', 1, '274'),
(276, '拒绝', 'project_duty', '0', '2', '1', 2, '274'),
(405, '任务', 'excel_38', '1', '1', '2', 2, '365'),
(406, '项目', 'excel_37', '1', '1', '2', 1, '365');