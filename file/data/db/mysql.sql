DROP TABLE IF EXISTS toa_file_read;
CREATE TABLE toa_file_read (
   id int(10) NOT NULL AUTO_INCREMENT,
  fileid varchar(10) DEFAULT NULL,
  filenumber varchar(20) DEFAULT NULL,
  filename varchar(200) DEFAULT NULL,
  appperson varchar(20) DEFAULT NULL,
  examperson varchar(20) DEFAULT NULL,
  appdate datetime DEFAULT NULL,
  examdate datetime DEFAULT NULL,
  type varchar(10) DEFAULT NULL,
  date datetime DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS toa_file_type;
CREATE TABLE toa_file_type (
  id int(10) NOT NULL AUTO_INCREMENT,
  title varchar(200) DEFAULT NULL,
  father varchar(10) DEFAULT NULL,
  date datetime DEFAULT NULL,
  uid varchar(10) DEFAULT NULL,
  keyuser varchar(255) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS toa_file;
CREATE TABLE toa_file (
  id int(10) NOT NULL AUTO_INCREMENT,
  filetype varchar(10) DEFAULT NULL,
  filenumber varchar(20) DEFAULT NULL,
  filename varchar(200) DEFAULT NULL,
  enddate varchar(10) DEFAULT NULL,
  position varchar(200) DEFAULT NULL,
  page varchar(10) DEFAULT NULL,
  appendix varchar(500) DEFAULT NULL,
  content text,
  type varchar(10) DEFAULT NULL,
  date datetime DEFAULT NULL,
  uid varchar(10) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;
INSERT INTO toa_keytable (id, name, inputname, inputvalue, inputchecked, type, number, fatherid) VALUES
(364, '����', 'input_name', '0', '1', '1', 7, '357'),
(84, '��������', 'input_name', '0', '1', '1', 10, '0'),
(85, '������Ŀ', 'input_name', '0', '1', '1', 4, '84'),
(86, '����', 'file_type', '1', '1', '1', 1, '85'),
(87, '��ֹ', 'file_type', '0', '2', '1', 2, '85'),
(88, '���', 'file_type_Increase', '1', '1', '2', 3, '85'),
(89, '�༭', 'file_type_edit', '1', '1', '2', 4, '85'),
(90, 'ɾ��', 'file_type_delete', '1', '1', '2', 5, '85'),
(91, '��������', 'input_name', '0', '1', '1', 1, '84'),
(92, '����', 'file_', '1', '1', '1', 1, '91'),
(93, '��ֹ', 'file_', '0', '2', '1', 2, '91'),
(94, '���', 'file_Increase', '1', '1', '2', 3, '91'),
(95, '�༭', 'file_edit', '1', '1', '2', 4, '91'),
(96, 'ɾ��', 'file_delete', '1', '1', '2', 5, '91'),
(97, '��������', 'input_name', '0', '1', '1', 2, '84'),
(98, '����', 'file_read', '1', '1', '1', 1, '97'),
(99, '��ֹ', 'file_read', '0', '2', '1', 2, '97'),
(100, '��������', 'input_name', '0', '1', '1', 3, '84'),
(101, '����', 'file_read_key', '1', '1', '1', 1, '100'),
(102, '��ֹ', 'file_read_key', '0', '2', '1', 2, '100'),
(403, '����', 'excel_35', '1', '1', '2', 1, '364'),
(404, '���ļ�¼', 'excel_36', '1', '1', '2', 2, '364');
INSERT INTO toa_menu (menuid, menuname, menuurl, fatherid, menutype, menunum, menukey) VALUES
(6, '��������', 'home.php?mid=6', '0', '0', 7, '1'),
(40, '�������', 'admin.php?ac=file_type&fileurl=file', '6', '2', 5, '0'),
(41, '�½�����', 'admin.php?ac=add&fileurl=file', '6', '2', 1, ''),
(42, '��������', 'admin.php?ac=index&fileurl=file', '6', '2', 2, ''),
(43, '��������', 'admin.php?ac=indexsearch&fileurl=file', '6', '2', 3, '0'),
(44, '��������', 'admin.php?ac=file_read_key&fileurl=file&type=1', '6', '2', 4, '');
