DROP TABLE IF EXISTS toa_job;
CREATE TABLE toa_job (
  id int(8) NOT NULL AUTO_INCREMENT,
  number varchar(255) DEFAULT NULL,
  jobpost varchar(255) DEFAULT NULL,
  channel varchar(20) DEFAULT NULL,
  price varchar(60) DEFAULT NULL,
  startdate varchar(60) DEFAULT NULL,
  enddate varchar(60) DEFAULT NULL,
  jobnum varchar(20) DEFAULT NULL,
  examination varchar(255) DEFAULT NULL,
  examinationdate datetime DEFAULT NULL,
  appendix varchar(255) DEFAULT NULL,
  content text,
  type varchar(10) DEFAULT NULL,
  uid varchar(10) DEFAULT NULL,
  date datetime DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS toa_job_demand;
CREATE TABLE toa_job_demand (
  id int(8) NOT NULL AUTO_INCREMENT,
  number varchar(255) DEFAULT NULL,
  jobpost varchar(255) DEFAULT NULL,
  persondate varchar(60) DEFAULT NULL,
  jobnum varchar(60) DEFAULT NULL,
  department varchar(255) DEFAULT NULL,
  appendix varchar(255) DEFAULT NULL,
  content text,
  uid varchar(10) DEFAULT NULL,
  date datetime DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS toa_job_hire;
CREATE TABLE toa_job_hire (
  id int(10) NOT NULL AUTO_INCREMENT,
  job_talent varchar(20) DEFAULT NULL,
  jobpost varchar(20) DEFAULT NULL,
  user varchar(255) DEFAULT NULL,
  department varchar(255) DEFAULT NULL,
  hiredate varchar(60) DEFAULT NULL,
  job varchar(60) DEFAULT NULL,
  content text,
  uid varchar(10) DEFAULT NULL,
  date datetime DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS toa_job_talent;
CREATE TABLE toa_job_talent (
  id int(10) NOT NULL AUTO_INCREMENT,
  number varchar(255) DEFAULT NULL,
  jobpost varchar(20) DEFAULT NULL,
  name varchar(40) DEFAULT NULL,
  sex varchar(20) DEFAULT NULL,
  contact varchar(255) DEFAULT NULL,
  job varchar(60) DEFAULT NULL,
  education varchar(20) DEFAULT NULL,
  appendix varchar(255) DEFAULT NULL,
  content text,
  uid varchar(10) DEFAULT NULL,
  date datetime DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;
INSERT INTO toa_menu (menuid, menuname, menuurl, fatherid, menutype, menunum, menukey) VALUES
(81, '招聘管理', 'admin.php?ac=job_demand&fileurl=jobs', '11', '2', 1, '0'),
(141, '招聘需求', 'admin.php?ac=job_demand&fileurl=jobs', '81', '2', 1, '0'),
(142, '招聘计划', 'admin.php?ac=index&fileurl=jobs', '81', '2', 2, '0'),
(143, '人才库', 'admin.php?ac=job_talent&fileurl=jobs', '81', '2', 3, '0'),
(144, '招聘录用', 'admin.php?ac=job_hire&fileurl=jobs', '81', '2', 4, '0');
INSERT INTO toa_keytable (id, name, inputname, inputvalue, inputchecked, type, number, fatherid) VALUES
(208, '招聘管理', 'input_name', '0', '1', '1', 1, '192'),
(209, '招聘需求', 'job_demand', '1', '2', '2', 1, '208'),
(210, '招聘计划', 'job_', '1', '2', '2', 2, '208'),
(211, '人才库', 'job_talent', '1', '2', '2', 3, '208'),
(212, '招聘录用', 'job_hire', '1', '2', '2', 4, '208'),
(394, '招聘需求', 'excel_26', '1', '1', '2', 2, '362'),
(395, '招聘计划', 'excel_27', '1', '1', '2', 3, '362'),
(396, '人才库', 'excel_28', '1', '1', '2', 4, '362'),
(397, '人员录用', 'excel_29', '1', '1', '2', 5, '362');
