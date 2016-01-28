DROP TABLE IF EXISTS toa_property;
CREATE TABLE toa_property (
  id int(10) NOT NULL AUTO_INCREMENT,
  number varchar(255) DEFAULT NULL,
  name varchar(255) DEFAULT NULL,
  property_type varchar(20) DEFAULT NULL,
  department varchar(20) DEFAULT NULL,
  cptl_val varchar(60) DEFAULT NULL,
  cptl_bal varchar(60) DEFAULT NULL,
  dpct_yy varchar(60) DEFAULT NULL,
  sum_dpct varchar(60) DEFAULT NULL,
  mon_dpct varchar(60) DEFAULT NULL,
  startdate datetime DEFAULT NULL,
  content text,
  user varchar(255) DEFAULT NULL,
  date datetime DEFAULT NULL,
  uid varchar(20) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS toa_property_depreciation;
CREATE TABLE toa_property_depreciation (
  id int(10) NOT NULL AUTO_INCREMENT,
  propertyid varchar(10) DEFAULT NULL,
  price varchar(30) DEFAULT NULL,
  date datetime DEFAULT NULL,
  startdate varchar(60) DEFAULT NULL,
  enddate varchar(60) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS toa_property_type;
CREATE TABLE toa_property_type (
  id int(10) NOT NULL AUTO_INCREMENT,
  title varchar(255) DEFAULT NULL,
  uid varchar(10) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;
INSERT INTO toa_keytable (id, name, inputname, inputvalue, inputchecked, type, number, fatherid) VALUES
(262, '�̶��ʲ�', 'input_name', '0', '1', '1', 4, '140'),
(263, '����', 'property_', '1', '1', '1', 1, '262'),
(264, '�ܾ�', 'property_', '0', '2', '1', 2, '262'),
(265, '�ʲ�����', 'property_type', '1', '1', '2', 4, '262'),
(266, '�ʲ��۾�', 'property_depreciation', '1', '1', '2', 3, '262'),
(391, '�̶��ʲ�', 'excel_23', '1', '1', '2', 4, '361');
INSERT INTO toa_menu (menuid, menuname, menuurl, fatherid, menutype, menunum, menukey) VALUES
(73, '�̶��ʲ�����', 'admin.php?ac=index&fileurl=property', '10', '0', 2, '0'),
(129, '�ʲ����', 'admin.php?ac=property_type&fileurl=property', '73', '2', 4, '0'),
(130, '�̶��ʲ�����', 'admin.php?ac=index&fileurl=property', '73', '2', 2, '0'),
(131, '���ӹ̶��ʲ�', 'admin.php?ac=add&fileurl=property', '73', '2', 1, '0'),
(132, '�̶��ʲ��۾�', 'admin.php?ac=depreciation&fileurl=property', '73', '2', 3, '0');
