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
(1, '��������', '2', 1),
(2, '��Ч����', '2', 2),
(3, '����(��λ)', '', 5),
(4, '����(����)', '', 6),
(5, '��λҽ��', '', 4),
(6, '����ҽ��', '', 3),
(7, '������', '', 12),
(8, '��λʧҵ', '', 10),
(9, '����ʧҵ', '', 11),
(10, '������', '', 9),
(11, '������(��λ)', '', 8),
(12, '������(����)', '', 7),
(13, '����˰', '', 13),
(14, 'Ӧ��н��', '2', 14),
(15, 'ʵ��н��', '2', 15);
INSERT INTO toa_keytable (id, name, inputname, inputvalue, inputchecked, type, number, fatherid) VALUES
(524, '���ʱ�ɾ��', 'wage_delete', '1', '1', '2', 2, '518'),
(523, 'н�ʹ���', 'excel_51', '1', '1', '2', 10, '362'),
(522, 'н����Ŀ����', 'wage_type', '1', '1', '2', 3, '518'),
(521, '���Ź����ϱ�', 'wage_log', '1', '1', '2', 3, '518'),
(520, '���ʱ����', 'wage', '1', '1', '2', 1, '518'),
(519, '������������', 'wage_basis', '1', '1', '2', 4, '518'),
(518, 'н�ʹ���', 'input_name', '0', '1', '1', 2, '192');
INSERT INTO toa_menu (menuid, menuname, menuurl, fatherid, menutype, menunum, menukey) VALUES
(302, '������������', 'admin.php?ac=basis&fileurl=wage', '297', '0', 5, '0'),
(301, 'н����Ŀ����', 'admin.php?ac=type&fileurl=wage', '297', '0', 4, '0'),
(300, '���ʹ���', 'admin.php?ac=wage&fileurl=wage', '297', '0', 2, '0'),
(299, '�½����ʱ�', 'admin.php?ac=wage&do=add&fileurl=wage', '297', '0', 1, '0'),
(298, '���Ź����ϱ�', 'admin.php?ac=department&fileurl=wage', '297', '0', 3, '0'),
(297, 'н�ʹ���', 'admin.php?ac=wage&fileurl=wage', '11', '0', 8, '0');