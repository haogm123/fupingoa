DROP TABLE IF EXISTS toa_attachment;
CREATE TABLE toa_attachment (
  id int(8) NOT NULL AUTO_INCREMENT,
  number varchar(120) DEFAULT NULL,
  shares varchar(80) DEFAULT NULL,
  annexurl varchar(120) DEFAULT NULL,
  annex varchar(120) DEFAULT NULL,
  organ varchar(120) DEFAULT NULL,
  fontsize varchar(120) DEFAULT NULL,
  title varchar(120) DEFAULT NULL,
  result varchar(500) DEFAULT NULL,
  category varchar(40) DEFAULT NULL,
  uid varchar(10) DEFAULT NULL,
  type varchar(10) DEFAULT NULL,
  receiptdate date DEFAULT NULL,
  attakey varchar(10) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS toa_approval;
CREATE TABLE toa_approval (
  id int(8) NOT NULL AUTO_INCREMENT,
  makingname varchar(120) DEFAULT NULL,
  annex varchar(120) DEFAULT NULL,
  fontsize varchar(120) DEFAULT NULL,
  secrecy varchar(120) DEFAULT NULL,
  title varchar(120) DEFAULT NULL,
  keyword varchar(120) DEFAULT NULL,
  sponsor varchar(120) DEFAULT NULL,
  userid varchar(10) DEFAULT NULL,
  proofread varchar(120) DEFAULT NULL,
  repairs varchar(120) DEFAULT NULL,
  sealing varchar(120) DEFAULT NULL,
  delivers varchar(120) DEFAULT NULL,
  sending varchar(120) DEFAULT NULL,
  akey varchar(10) DEFAULT NULL,
  category varchar(10) DEFAULT NULL,
  issuedate datetime DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS toa_distribution;
CREATE TABLE toa_distribution (
  did int(11) NOT NULL AUTO_INCREMENT,
  name varchar(20) DEFAULT NULL,
  uid varchar(10) DEFAULT NULL,
  disdate datetime DEFAULT NULL,
  viewdate datetime DEFAULT NULL,
  evaluation varchar(200) DEFAULT NULL,
  dkey varchar(10) DEFAULT NULL,
  fileid varchar(10) DEFAULT NULL,
  PRIMARY KEY (did)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS toa_app_flow;
CREATE TABLE toa_app_flow (
  fid int(8) NOT NULL AUTO_INCREMENT,
  flowname varchar(64) DEFAULT NULL,
  apptype varchar(16) DEFAULT NULL,
  flownum int(8) DEFAULT NULL,
  flowkey varchar(8) DEFAULT NULL,
  flowkey1 varchar(8) NOT NULL,
  flowkey2 varchar(8) NOT NULL,
  flownote varchar(255) NOT NULL,
  flowuser varchar(255) NOT NULL,
  flowmovement varchar(8) NOT NULL,
  flowflag varchar(8) NOT NULL,
  PRIMARY KEY (fid)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS toa_app_flow_view;
CREATE TABLE toa_app_flow_view (
  fvid int(8) NOT NULL AUTO_INCREMENT,
  flow_view_name varchar(60) DEFAULT NULL,
  flow_view_type varchar(60) DEFAULT NULL,
  flow_view_user_key varchar(120) DEFAULT NULL,
  flow_view_user varchar(120) DEFAULT NULL,
  flow_id varchar(10) DEFAULT NULL,
  PRIMARY KEY (fvid)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS toa_app_title;
CREATE TABLE toa_app_title (
  tid int(8) NOT NULL AUTO_INCREMENT,
  content varchar(120) DEFAULT NULL,
  type varchar(10) DEFAULT NULL,
  PRIMARY KEY (tid)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS toa_app_type;
CREATE TABLE toa_app_type (
  id int(10) NOT NULL AUTO_INCREMENT,
  name varchar(60) DEFAULT NULL,
  keyuser varchar(100) DEFAULT NULL,
  content varchar(120) DEFAULT NULL,
  type varchar(10) DEFAULT NULL,
  appkey varchar(8) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS toa_personnel;
CREATE TABLE toa_personnel (
  id int(8) NOT NULL AUTO_INCREMENT,
  type varchar(5) DEFAULT NULL,
  name varchar(255) DEFAULT NULL,
  uid varchar(255) DEFAULT NULL,
  designationdate datetime DEFAULT NULL,
  approvaldate datetime DEFAULT NULL,
  lnstructions varchar(200) DEFAULT NULL,
  node varchar(20) DEFAULT NULL,
  pkey varchar(16) DEFAULT NULL,
  fileid varchar(16) DEFAULT NULL,
  apptype varchar(16) NOT NULL,
  appflow varchar(16) NOT NULL,
  appkey varchar(8) NOT NULL,
  appkey1 varchar(8) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS toa_personnel_log;
CREATE TABLE toa_personnel_log (
  lid int(8) NOT NULL AUTO_INCREMENT,
  type varchar(5) DEFAULT NULL,
  name varchar(32) DEFAULT NULL,
  uid varchar(16) DEFAULT NULL,
  approvaldate datetime DEFAULT NULL,
  lnstructions varchar(200) DEFAULT NULL,
  pkey varchar(16) DEFAULT NULL,
  perid varchar(16) NOT NULL,
  PRIMARY KEY (lid)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;
INSERT INTO toa_menu (menuid, menuname, menuurl, fatherid, menutype, menunum, menukey) VALUES
(5, '公文管理', 'home.php?mid=5', '0', '0', 6, '1'),
(38, '收文管理', 'admin.php?ac=attachment&fileurl=app', '5', '0', 1, '0'),
(39, '发文管理', 'admin.php?ac=index&fileurl=approval', '5', '0', 2, '0'),
(113, '公文类别设置', 'admin.php?ac=type&fileurl=app', '5', '2', 5, '0'),
(116, '基础信息设置', 'admin.php?ac=title&fileurl=app', '5', '0', 6, '0'),
(281, '报表与统计', 'admin.php?ac=charts&fileurl=app', '5', '0', 4, '0'),
(251, '收文审批', 'admin.php?ac=attachment&fileurl=app&type=1', '38', '2', 1, '0'),
(252, '收文阅读', 'admin.php?ac=attachment&fileurl=app&type=3', '38', '2', 2, '0'),
(255, '收文列表', 'admin.php?ac=attachment&fileurl=app', '38', '2', 4, '0'),
(256, '收文监控', 'admin.php?ac=attachment&fileurl=app&type=2', '38', '2', 3, '0'),
(257, '收文拟办', 'admin.php?ac=attachment&fileurl=app&do=add', '38', '2', 0, '0'),
(258, '发文拟稿', 'admin.php?ac=approval&fileurl=app&do=add', '39', '2', 1, '0'),
(259, '发文办理', 'admin.php?ac=approval&fileurl=app&type=1', '39', '2', 2, '0'),
(260, '发文阅读', 'admin.php?ac=approval&fileurl=app&type=3', '39', '2', 3, '0'),
(261, '发文监控', 'admin.php?ac=approval&fileurl=app&type=2', '39', '2', 4, '0'),
(262, '发文列表', 'admin.php?ac=approval&fileurl=app', '39', '2', 5, '0');
INSERT INTO toa_keytable (id, name, inputname, inputvalue, inputchecked, type, number, fatherid) VALUES
(75, '公文管理', 'input_name', '0', '1', '1', 4, '0'),
(76, '发文设置', 'input_name', '0', '1', '1', 1, '75'),
(77, '允许', 'approval_', '1', '1', '1', 1, '76'),
(78, '禁止', 'approval_', '0', '2', '1', 2, '76'),
(79, '公文类别设置', 'approval_mang', '1', '1', '2', 3, '76'),
(80, '收文设置', 'input_name', '0', '1', '1', 22, '75'),
(81, '允许', 'attachment_', '1', '1', '1', 1, '80'),
(82, '禁止', 'attachment_', '0', '2', '1', 2, '80'),
(83, '公文信息设置', 'attachment_type', '1', '1', '2', 3, '80'),
(363, '公文', 'input_name', '0', '1', '1', 6, '357'),
(401, '收文', 'excel_33', '1', '1', '2', 1, '363'),
(402, '发文', 'excel_34', '1', '1', '2', 2, '363');
