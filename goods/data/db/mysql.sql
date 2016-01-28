DROP TABLE IF EXISTS toa_office_goods;
CREATE TABLE toa_office_goods (
  id int(10) NOT NULL AUTO_INCREMENT,
  goods_type varchar(255) DEFAULT NULL,
  title varchar(255) DEFAULT NULL,
  specification varchar(255) DEFAULT NULL,
  unit varchar(60) DEFAULT NULL,
  price varchar(60) DEFAULT NULL,
  number varchar(60) DEFAULT NULL,
  content text,
  purchase varchar(255) DEFAULT NULL,
  examination varchar(255) DEFAULT NULL,
  warehousing varchar(255) DEFAULT NULL,
  date datetime DEFAULT NULL,
  uid varchar(10) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS toa_office_goods_key;
CREATE TABLE toa_office_goods_key (
  id int(8) NOT NULL AUTO_INCREMENT,
  purchase varchar(255) DEFAULT NULL,
  examination varchar(255) DEFAULT NULL,
  warehousing varchar(255) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS toa_office_goods_record;
CREATE TABLE toa_office_goods_record (
  id int(10) NOT NULL AUTO_INCREMENT,
  goods_type varchar(255) DEFAULT NULL,
  title varchar(255) DEFAULT NULL,
  specification varchar(255) DEFAULT NULL,
  unit varchar(50) DEFAULT NULL,
  price varchar(60) DEFAULT NULL,
  number varchar(50) DEFAULT NULL,
  content text,
  recorduser varchar(60) DEFAULT NULL,
  department varchar(10) DEFAULT NULL,
  type varchar(10) DEFAULT NULL,
  officegoods varchar(10) DEFAULT NULL,
  date datetime DEFAULT NULL,
  uid varchar(10) DEFAULT NULL,
  recordnum varchar(20) DEFAULT NULL,
  examination varchar(30) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS toa_office_goods_stock;
CREATE TABLE toa_office_goods_stock (
  id int(10) NOT NULL AUTO_INCREMENT,
  officegoods varchar(10) DEFAULT NULL,
  goods_type varchar(255) DEFAULT NULL,
  title varchar(255) DEFAULT NULL,
  specification varchar(255) DEFAULT NULL,
  unit varchar(60) DEFAULT NULL,
  price varchar(60) DEFAULT NULL,
  number varchar(60) DEFAULT NULL,
  content text,
  purchase varchar(255) DEFAULT NULL,
  type varchar(10) DEFAULT NULL,
  date datetime DEFAULT NULL,
  uid varchar(10) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS toa_goods_purchase;
CREATE TABLE toa_goods_purchase (
  id int(10) NOT NULL AUTO_INCREMENT,
  application varchar(255) DEFAULT NULL,
  startdate date DEFAULT NULL,
  content varchar(255) DEFAULT NULL,
  pricenum varchar(60) DEFAULT NULL,
  examination varchar(255) DEFAULT NULL,
  keydate datetime DEFAULT NULL,
  key1 varchar(10) DEFAULT NULL,
  uid varchar(10) DEFAULT NULL,
  number varchar(255) DEFAULT NULL,
  purchase varchar(60) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS toa_goods_purchase_view;
CREATE TABLE toa_goods_purchase_view (
  id int(10) NOT NULL AUTO_INCREMENT,
  goods_purchase varchar(20) DEFAULT NULL,
  officegoods varchar(20) DEFAULT NULL,
  title varchar(255) DEFAULT NULL,
  specification varchar(255) DEFAULT NULL,
  unit varchar(60) DEFAULT NULL,
  price varchar(60) DEFAULT NULL,
  number varchar(60) DEFAULT NULL,
  date datetime DEFAULT NULL,
  uid varchar(10) DEFAULT NULL,
  goodsnumber varchar(10) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS toa_goods_type;
CREATE TABLE toa_goods_type (
  id int(10) NOT NULL AUTO_INCREMENT,
  title varchar(255) DEFAULT NULL,
  father varchar(255) DEFAULT NULL,
  uid varchar(10) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;
INSERT INTO toa_keytable (id, name, inputname, inputvalue, inputchecked, type, number, fatherid) VALUES
(163, '�칫��Ʒ', 'input_name', '0', '1', '1', 1, '140'),
(170, '�������', 'goods_type', '1', '1', '2', 6, '163'),
(171, '�칫��Ʒ����', 'office_goods', '1', '1', '2', 1, '163'),
(172, '�칫��Ʒ�ɹ�', 'goods_purchase', '1', '1', '2', 2, '163'),
(173, '������', 'office_goods_stock', '1', '1', '2', 3, '163'),
(174, '�칫��Ʒ����', 'office_goods_record', '1', '1', '2', 4, '163'),
(175, '����Ȩ������', 'office_goods_key', '1', '1', '2', 5, '163'),
(388, '�칫��Ʒ����', 'excel_20', '1', '1', '2', 1, '361'),
(389, '�칫��Ʒ��Ϣ', 'excel_21', '1', '1', '2', 2, '361'),
(390, '�칫��Ʒ�ɹ�', 'excel_22', '1', '1', '2', 3, '361');
INSERT INTO toa_menu (menuid, menuname, menuurl, fatherid, menutype, menunum, menukey) VALUES
(72, '�칫��Ʒ����', 'admin.php?ac=index&fileurl=goods', '10', '0', 1, '0'),
(122, '�칫��Ʒ��������', 'admin.php?ac=goods_type&fileurl=goods', '72', '2', 6, '0'),
(123, '�칫��Ʒ����', 'admin.php?ac=index&fileurl=goods', '72', '2', 2, '0'),
(124, '�칫��Ʒ�ɹ�', 'admin.php?ac=goods_purchase&fileurl=goods', '72', '2', 3, '0'),
(125, '�칫��Ʒ������', 'admin.php?ac=goods_stock&fileurl=goods', '72', '2', 4, '0'),
(126, '�칫��Ʒ����', 'admin.php?ac=goods_record&fileurl=goods', '72', '2', 1, '0'),
(127, '����Ȩ������', 'admin.php?ac=office_goods_key&fileurl=goods', '72', '2', 5, '0');
