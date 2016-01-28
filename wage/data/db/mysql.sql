DROP TABLE IF EXISTS toa_wage_type;
CREATE TABLE toa_wage_type (
  tid int(11) NOT NULL AUTO_INCREMENT,
  name varchar(32) DEFAULT NULL,
  type varchar(2) DEFAULT NULL,
  tnumber int(11) DEFAULT NULL,
  PRIMARY KEY (tid)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS toa_wage_basis;
CREATE TABLE toa_wage_basis (
  bid int(11) NOT NULL AUTO_INCREMENT,
  uid varchar(16) DEFAULT NULL,
  username varchar(32) DEFAULT NULL,
  name varchar(32) DEFAULT NULL,
  content text,
  PRIMARY KEY (bid)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS toa_wage;
CREATE TABLE toa_wage (
  wid int(11) NOT NULL AUTO_INCREMENT,
  sdate date DEFAULT NULL,
  edate date DEFAULT NULL,
  year varchar(16) DEFAULT NULL,
  month varchar(16) DEFAULT NULL,
  content text,
  uid varchar(16) DEFAULT NULL,
  title varchar(64) DEFAULT NULL,
  type varchar(2) DEFAULT NULL,
  date datetime DEFAULT NULL,
  PRIMARY KEY (wid)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS toa_wage_log;
CREATE TABLE toa_wage_log (
  lid int(11) NOT NULL AUTO_INCREMENT,
  uid varchar(16) DEFAULT NULL,
  username varchar(32) DEFAULT NULL,
  name varchar(32) DEFAULT NULL,
  content text,
  wid varchar(16) DEFAULT NULL,
  PRIMARY KEY (lid)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS toa_wage_data;
CREATE TABLE toa_wage_data (
  did int(11) NOT NULL AUTO_INCREMENT,
  viewid varchar(16) DEFAULT NULL,
  tid varchar(32) DEFAULT NULL,
  name varchar(32) DEFAULT NULL,
  content text,
  type varchar(2) DEFAULT NULL,
  wid varchar(16) DEFAULT NULL,
  uid varchar(16) DEFAULT NULL,
  PRIMARY KEY (did)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO toa_wage_type (tid, name, type, tnumber) VALUES
(1, '基本工资', '2', 1),
(2, '绩效工资', '2', 2),
(3, '养老(单位)', '', 5),
(4, '养老(个人)', '', 6),
(5, '单位医疗', '', 4),
(6, '个人医疗', '', 3),
(7, '生育险', '', 12),
(8, '单位失业', '', 10),
(9, '个人失业', '', 11),
(10, '工伤险', '', 9),
(11, '公积金(单位)', '', 8),
(12, '公积金(个人)', '', 7),
(13, '所得税', '', 13),
(14, '应付薪金', '2', 14),
(15, '实领薪金', '2', 15);
INSERT INTO toa_keytable (id, name, inputname, inputvalue, inputchecked, type, number, fatherid) VALUES
(524, '工资表删除', 'wage_delete', '1', '1', '2', 2, '518'),
(523, '薪资管理', 'excel_51', '1', '1', '2', 10, '362'),
(522, '薪资项目设置', 'wage_type', '1', '1', '2', 3, '518'),
(521, '部门工资上报', 'wage_log', '1', '1', '2', 3, '518'),
(520, '工资表管理', 'wage', '1', '1', '2', 1, '518'),
(519, '基础数据配置', 'wage_basis', '1', '1', '2', 4, '518'),
(518, '薪资管理', 'input_name', '0', '1', '1', 2, '192');
INSERT INTO toa_menu (menuid, menuname, menuurl, fatherid, menutype, menunum, menukey) VALUES
(302, '基础数据配置', 'admin.php?ac=basis&fileurl=wage', '297', '0', 5, '0'),
(301, '薪资项目设置', 'admin.php?ac=type&fileurl=wage', '297', '0', 4, '0'),
(300, '工资管理', 'admin.php?ac=wage&fileurl=wage', '297', '0', 2, '0'),
(299, '新建工资表', 'admin.php?ac=wage&do=add&fileurl=wage', '297', '0', 1, '0'),
(298, '部门工资上报', 'admin.php?ac=department&fileurl=wage', '297', '0', 3, '0'),
(297, '薪资管理', 'admin.php?ac=wage&fileurl=wage', '11', '0', 8, '0');