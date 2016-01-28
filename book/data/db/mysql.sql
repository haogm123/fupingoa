DROP TABLE IF EXISTS toa_book;
CREATE TABLE toa_book (
  id int(10) NOT NULL AUTO_INCREMENT,
  bookumber varchar(255) DEFAULT NULL,
  booktype varchar(20) DEFAULT NULL,
  bookname varchar(255) DEFAULT NULL,
  author varchar(255) DEFAULT NULL,
  publishing varchar(255) DEFAULT NULL,
  appendix varchar(255) DEFAULT NULL,
  booknum varchar(60) DEFAULT NULL,
  content text,
  type varchar(10) DEFAULT NULL,
  date datetime DEFAULT NULL,
  uid varchar(10) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS toa_book_read;
CREATE TABLE toa_book_read (
  id int(10) NOT NULL AUTO_INCREMENT,
  bookid varchar(10) DEFAULT NULL,
  booknumber varchar(255) DEFAULT NULL,
  bookname varchar(255) DEFAULT NULL,
  appperson varchar(50) DEFAULT NULL,
  examperson varchar(50) DEFAULT NULL,
  appdate datetime DEFAULT NULL,
  examdate datetime DEFAULT NULL,
  type varchar(10) DEFAULT NULL,
  date datetime DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS toa_book_type;
CREATE TABLE toa_book_type (
  id int(10) NOT NULL AUTO_INCREMENT,
  title varchar(255) DEFAULT NULL,
  father varchar(20) DEFAULT NULL,
  date datetime DEFAULT NULL,
  uid varchar(10) DEFAULT NULL,
  keyuser varchar(255) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;
INSERT INTO toa_menu (menuid, menuname, menuurl, fatherid, menutype, menunum, menukey) VALUES
(74, 'ͼ�����', 'admin.php?ac=index&fileurl=book', '10', '0', 3, '0'),
(117, 'ͼ�����', 'admin.php?ac=file_type&fileurl=book', '74', '2', 5, '0'),
(118, '�½�ͼ��', 'admin.php?ac=add&fileurl=book', '74', '2', 1, '0'),
(119, 'ͼ�����', 'admin.php?ac=index&fileurl=book', '74', '2', 2, '0'),
(120, 'ͼ�����', 'admin.php?ac=indexsearch&fileurl=book', '74', '2', 3, '0'),
(121, '��������', 'admin.php?ac=file_read_key&fileurl=book&type=1', '74', '2', 4, '0');
INSERT INTO toa_keytable (id, name, inputname, inputvalue, inputchecked, type, number, fatherid) VALUES
(176, 'ͼ��', 'input_name', '0', '1', '1', 2, '140'),
(177, 'ͼ�����', 'book_type', '1', '1', '2', 1, '176'),
(178, 'ͼ�����', 'book', '1', '1', '2', 2, '176'),
(179, 'ͼ�����', 'book_read', '1', '1', '2', 3, '176'),
(180, '��������', 'book_key', '1', '1', '2', 4, '176'),
(392, 'ͼ��', 'excel_24', '1', '1', '2', 5, '361');
