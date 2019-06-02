# Host: 192.168.10.10  (Version: 5.7.22-0ubuntu18.04.1)
# Date: 2018-08-27 19:15:45
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "bd"
#

DROP TABLE IF EXISTS `bd`;
CREATE TABLE `bd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `q1` text,
  `q2` text,
  `q3` text,
  `q4` text,
  `q5` text,
  `q19` text,
  `q7` text,
  `q8` text,
  `q9` text,
  `q10` text,
  `q11` text,
  `q12` text,
  `q13` text,
  `q14` text,
  `q15` text,
  `q16` text,
  `q17` text,
  `q18` text,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "bd"
#

/*!40000 ALTER TABLE `bd` DISABLE KEYS */;
/*!40000 ALTER TABLE `bd` ENABLE KEYS */;

#
# Structure for table "bda"
#

DROP TABLE IF EXISTS `bda`;
CREATE TABLE `bda` (
  `user` varchar(50) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `a1` text,
  `a2` text,
  `a3` text,
  `a4` text,
  `a5` text,
  `a19` text,
  `a7` text,
  `a8` text,
  `a9` text,
  `a10` text,
  `a11` text,
  `a12` text,
  `a13` text,
  `a14` text,
  `a15` text,
  `a16` text,
  `a17` text,
  `a18` text,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "bda"
#

/*!40000 ALTER TABLE `bda` DISABLE KEYS */;
/*!40000 ALTER TABLE `bda` ENABLE KEYS */;

#
# Structure for table "guestbook"
#

DROP TABLE IF EXISTS `guestbook`;
CREATE TABLE `guestbook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `qq` varchar(20) DEFAULT NULL,
  `info` text NOT NULL,
  `time` datetime NOT NULL,
  `ip` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=116 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "guestbook"
#

/*!40000 ALTER TABLE `guestbook` DISABLE KEYS */;
INSERT INTO `guestbook` VALUES (9,'æ˜Ÿç©º','1030417862','é‡è§æ›´å¥½çš„ä½ ','2017-09-21 21:46:20',NULL),(10,'å¤§ä¼Ÿå°‘','563607256','æˆ‘ä¼Ÿå°‘6é€¼','2017-11-07 09:23:59',NULL),(11,'å¶å¹³','qqq','\"><img src=1 onerror=alert`1`><','2018-03-03 15:39:58',NULL),(12,'lqvydaui','1','1','2018-03-03 15:40:53',NULL),(13,'yejmmqrk','1','response.write(9102363*9966042)','2018-03-03 15:44:14',NULL),(14,'fmtdibwb','1','1','2018-03-03 15:44:14',NULL),(15,'fmtdibwb','1','1','2018-03-03 15:44:14',NULL),(16,'yejmmqrk','1','\"+response.write(9102363*9966042)+\"','2018-03-03 15:44:14',NULL),(17,'fmtdibwb','1','-1 OR 2+720-720-1=0+0+0+1 -- ','2018-03-03 15:44:14',NULL),(18,'fmtdibwb','1','-1 OR 2+166-166-1=0+0+0+1','2018-03-03 15:44:14',NULL),(19,'fmtdibwb','1','1','2018-03-03 15:44:15',NULL),(20,'lknlrgxu','1','set|set&set','2018-03-03 15:44:15',NULL),(21,'fmtdibwb','1','-1\" OR 2+541-541-1=0+0+0+1 -- ','2018-03-03 15:44:15',NULL),(22,'lknlrgxu','1','$(nslookup qRgK0uiO)','2018-03-03 15:44:15',NULL),(23,'rcokkdca','1','DvgrLF4K','2018-03-03 15:44:15',NULL),(24,'mfdmyvdy','1','../../../../../../../../../../windows/win.ini','2018-03-03 15:44:15',NULL),(25,'rcokkdca','B6iQ3T0V','1','2018-03-03 15:44:15',NULL),(26,'lknlrgxu','set|set&set','1','2018-03-03 15:44:15',NULL),(27,'pivhtsdg','1','1','2018-03-03 15:44:15',NULL),(28,'eimduaim','1','${9999649+9999496}','2018-03-03 15:44:17',NULL),(29,'licahmyu','1','http://some-inexistent-website.acu/some_inexistent_file_with_long_name?.jpg','2018-03-03 15:44:20',NULL),(30,'licahmyu','1','1some_inexistent_file_with_long_name\0.jpg','2018-03-03 15:44:21',NULL),(31,'lknlrgxu','$(nslookup O0hQCtt0)','1','2018-03-03 15:44:21',NULL),(32,'mfdmyvdy','1','../../../../../../../../../../boot.ini','2018-03-03 15:44:21',NULL),(33,'H6SVJTdU','1','1','2018-03-03 15:44:21',NULL),(34,'eimduaim','${9999361+10000136}','1','2018-03-03 15:44:21',NULL),(35,'licahmyu','1','Http://testasp.vulnweb.com/t/fit.txt','2018-03-03 15:44:21',NULL),(36,'set|set&set','1','1','2018-03-03 15:44:21',NULL),(37,'pivhtsdg','1','1','2018-03-03 15:44:21',NULL),(38,'${10000315+9999192}','1','1','2018-03-03 15:44:30',NULL),(39,'pivhtsdg','','1','2018-03-03 15:44:30',NULL),(40,'mfdmyvdy','1','../../../../../../../../../../windows/win.ini\0.jpg','2018-03-03 15:44:30',NULL),(41,'licahmyu','1','http://testasp.vulnweb.com/t/fit.txt?.jpg','2018-03-03 15:44:30',NULL),(42,'TDA0dXhQZ1o=','1','1','2018-03-03 15:44:30',NULL),(43,'$(nslookup CSsuR1l3)','1','1','2018-03-03 15:44:30',NULL),(44,'bxsaiila','1','1&n964193=v906936','2018-03-03 15:44:30',NULL),(45,'mfdmyvdy','1','À®À®À¯À®À®À¯À®À®À¯À®À®À¯À®À®À¯À®À®À¯À®À®À¯À®À®À¯windowsÀ¯win.ini','2018-03-03 15:44:30',NULL),(46,'licahmyu','1','testasp.vulnweb.com','2018-03-03 15:44:30',NULL),(47,'twaabldg','1',')','2018-03-03 15:44:30',NULL),(48,'pivhtsdg','1','1','2018-03-03 15:44:30',NULL),(49,'xetohkes','1','Array','2018-03-03 15:44:30',NULL),(50,'mfdmyvdy','1','................windowswin.ini','2018-03-03 15:44:33',NULL),(51,'twaabldg','1','!(()&&!|*|*|','2018-03-03 15:44:33',NULL),(52,'wwnxwfmd','1&n949903=v995100','1','2018-03-03 15:44:33',NULL),(53,'mfdmyvdy','1','................windowswin.ini','2018-03-03 15:44:33',NULL),(54,'xetohkes','Array','1','2018-03-03 15:44:33',NULL),(55,'twaabldg','1','^(#$!@#$)(()))******','2018-03-03 15:44:33',NULL),(56,'mfdmyvdy','1','/.\\./.\\./.\\./.\\./.\\./.\\./windows/win.ini','2018-03-03 15:44:34',NULL),(57,'twaabldg',')','1','2018-03-03 15:44:34',NULL),(58,'bednwlxg','1',';print(md5(acunetix_wvs_security_test));','2018-03-03 15:44:34',NULL),(59,'wdnhgajs','1','http://testasp.vulnweb.com/t/xss.html?%00.jpg','2018-03-03 15:44:34',NULL),(60,'mfdmyvdy','1','../..//../..//../..//../..//../..//../..//../..//../..//windows/win.ini','2018-03-03 15:44:34',NULL),(61,'Array','1','1','2018-03-03 15:44:34',NULL),(62,'twaabldg','!(()&&!|*|*|','1','2018-03-03 15:44:34',NULL),(63,'mfdmyvdy','1','../.../.././../.../.././../.../.././../.../.././../.../.././../.../.././windows/win.ini','2018-03-03 15:44:34',NULL),(64,'twaabldg','^(#$!@#$)(()))******','1','2018-03-03 15:44:34',NULL),(65,'bednwlxg','1','\";print(md5(acunetix_wvs_security_test));$a=\"','2018-03-03 15:44:34',NULL),(66,'hggnairr','1','1','2018-03-03 15:44:34',NULL),(67,'licahmyu','testasp.vulnweb.com','1','2018-03-03 15:44:40',NULL),(68,')','1','1','2018-03-03 15:44:40',NULL),(69,'bednwlxg','1','${@print(md5(acunetix_wvs_security_test))}','2018-03-03 15:44:40',NULL),(70,'hggnairr','1','guestbook.php','2018-03-03 15:44:40',NULL),(71,'fmtdibwb','1','1','2018-03-03 15:44:40',NULL),(72,'hggnairr','1','guestbook.php\0','2018-03-03 15:44:40',NULL),(73,'mfdmyvdy','1','WEB-INF/web.xml','2018-03-03 15:44:40',NULL),(74,'!(()&&!|*|*|','1','1','2018-03-03 15:44:40',NULL),(75,'bkntdkla','1','http://hitTpA7S83kKx.bxss.me/','2018-03-03 15:44:40',NULL),(76,'fmtdibwb','1','1','2018-03-03 15:44:40',NULL),(77,'mfdmyvdy','1','WEB-INFweb.xml','2018-03-03 15:44:40',NULL),(78,'^(#$!@#$)(()))******','1','1','2018-03-03 15:44:40',NULL),(79,'hggnairr','1','guestbook.php/.','2018-03-03 15:44:40',NULL),(80,'hggnairr','1','1','2018-03-03 15:44:40',NULL),(81,'kepolxup','1','1','2018-03-03 15:44:40',NULL),(82,'hggnairr','guestbook.php','1','2018-03-03 15:44:40',NULL),(83,'hggnairr','guestbook.php\0','1','2018-03-03 15:44:40',NULL),(84,'testasp.vulnweb.com','1','1','2018-03-03 15:44:41',NULL),(85,'kepolxup','1','and(select 1 from(select count(*),concat((select concat(CHAR(52),CHAR(67),CHAR(117),CHAR(82),CHAR(89),CHAR(50),CHAR(82),CHAR(85),CHAR(113),CHAR(112),CHAR(66)) from information_schema.tables limit 0,1),floor(rand(0)*2))x from information_schema.tables group by x)a)and','2018-03-03 15:44:41',NULL),(86,'hggnairr','guestbook.php/.','1','2018-03-03 15:44:41',NULL),(87,'tsgnckme','1',')))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))','2018-03-03 15:44:41',NULL),(88,'kepolxup','1','(select 1 and row(1,1)>(select count(*),concat(concat(CHAR(52),CHAR(67),CHAR(117),CHAR(82),CHAR(89),CHAR(50),CHAR(82),CHAR(85),CHAR(113),CHAR(112),CHAR(66)),floor(rand()*2))x from (select 1 union select 2)a group by x limit 1))','2018-03-03 15:44:41',NULL),(89,'hggnairr','1','1','2018-03-03 15:44:41',NULL),(90,'kepolxup','1','(select convert(int,CHAR(52)+CHAR(67)+CHAR(117)+CHAR(82)+CHAR(89)+CHAR(50)+CHAR(82)+CHAR(85)+CHAR(113)+CHAR(112)+CHAR(66)) FROM syscolumns)','2018-03-03 15:44:41',NULL),(91,'guestbook.php','1','1','2018-03-03 15:44:41',NULL),(92,'kepolxup','1','convert(int,CHAR(52)+CHAR(67)+CHAR(117)+CHAR(82)+CHAR(89)+CHAR(50)+CHAR(82)+CHAR(85)+CHAR(113)+CHAR(112)+CHAR(66))','2018-03-03 15:44:41',NULL),(93,'guestbook.php\0','1','1','2018-03-03 15:44:41',NULL),(94,'fmtdibwb','1','1','2018-03-03 15:44:41',NULL),(95,'tcmxhmxs','1','/www.vulnweb.com','2018-03-03 15:44:41',NULL),(96,'guestbook.php/.','1','1','2018-03-03 15:44:41',NULL),(97,'mxnibbkl','1','<!--','2018-03-03 15:44:42',NULL),(98,'tcmxhmxs','/www.vulnweb.com','1','2018-03-03 15:44:43',NULL),(99,'kepolxup','1','1','2018-03-03 15:44:43',NULL),(100,'/www.vulnweb.com','1','1','2018-03-03 15:44:43',NULL),(101,'mxnibbkl','<!--','1','2018-03-03 15:44:43',NULL),(102,'hjbiirgd','1','1_9863','2018-03-03 15:44:43',NULL),(103,'mfdmyvdy','WEB-INF/web.xml','1','2018-03-03 15:44:43',NULL),(104,'<!--','1','1','2018-03-03 15:44:43',NULL),(105,'mfdmyvdy','WEB-INFweb.xml','1','2018-03-03 15:44:43',NULL),(106,'tcmbjtyb','1_9470','1','2018-03-03 15:44:43',NULL),(107,'tcmbjtyb_9246','1','1','2018-03-03 15:44:44',NULL),(108,'kepolxup','1','1','2018-03-03 15:44:53',NULL),(109,'WEB-INF/web.xml','1','1','2018-03-03 15:45:02',NULL),(110,'WEB-INFweb.xml','1','1','2018-03-03 15:45:08',NULL),(111,'fmtdibwb','1','1','2018-03-03 15:45:08',NULL),(112,'fmtdibwb','1','1','2018-03-03 15:45:09',NULL),(113,'1','1','1','2018-03-03 15:45:09',NULL),(114,'111','111','<svg/onload=alert`1`>','2018-03-03 16:29:03',NULL),(115,'111','222','<marquee>ä¼Ÿå°‘ä½ æ˜¯sb</marquee>','2018-03-03 16:30:50',NULL);
/*!40000 ALTER TABLE `guestbook` ENABLE KEYS */;

#
# Structure for table "kb"
#

DROP TABLE IF EXISTS `kb`;
CREATE TABLE `kb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `tn` int(11) NOT NULL DEFAULT '0',
  `title` varchar(30) NOT NULL,
  `week0112` text,
  `week0134` text,
  `week0156` text,
  `week0178` text,
  `week01910` text,
  `week011112` text,
  `week0212` text,
  `week0234` text,
  `week0256` text,
  `week0278` text,
  `week02910` text,
  `week021112` text,
  `week0312` text,
  `week0334` text,
  `week0356` text,
  `week03910` text,
  `week0378` text,
  `week031112` text,
  `week0412` text,
  `week0434` text,
  `week0456` text,
  `week0478` text,
  `week04910` text,
  `week041112` text,
  `week0512` text,
  `week0534` text,
  `week0556` text,
  `week0578` text,
  `week05910` text,
  `week051112` text,
  `week1112` text,
  `week1134` text,
  `week1156` text,
  `week1178` text,
  `week11910` text,
  `week111112` text,
  `week1212` text,
  `week1234` text,
  `week1256` text,
  `week1278` text,
  `week12910` text,
  `week121112` text,
  `week1312` text,
  `week1334` text,
  `week1356` text,
  `week1378` text,
  `week13910` text,
  `week131112` text,
  `week1412` text,
  `week1434` text,
  `week1456` text,
  `week1478` text,
  `week14910` text,
  `week141112` text,
  `week1512` text,
  `week1534` text,
  `week1556` text,
  `week1578` text,
  `week15910` text,
  `week151112` text,
  `desc` varchar(200) NOT NULL,
  `time` datetime NOT NULL,
  `been` text,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=94 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "kb"
#

/*!40000 ALTER TABLE `kb` DISABLE KEYS */;
INSERT INTO `kb` VALUES (81,'18780640540',1,'5','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'å½­ä¼Ÿ',NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ',NULL,NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'å½­ä¼Ÿ',NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ',NULL,NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,'550é²å¤§å¸ˆ24000','2018-08-27 07:58:30','163020011[jwweb123456789.]'),(82,'18780640540',1,'2','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,NULL,NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,NULL,NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','2222','2018-08-27 08:01:30','163020011[jwweb123456789.]'),(83,'18780640540',1,'2333','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,NULL,NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,NULL,NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','1222','2018-08-27 08:07:01','163020011[jwweb123456789.]'),(84,'18780640540',1,'222','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ',NULL,'å½­ä¼Ÿ',NULL,NULL,NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ',NULL,'å½­ä¼Ÿ',NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ',NULL,'å½­ä¼Ÿ',NULL,NULL,NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ',NULL,'å½­ä¼Ÿ',NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','22222','2018-08-27 08:11:01','163020011[jwweb123456789.]'),(85,'18780640540',1,'77',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'77','2018-08-27 08:16:42','163020011[jwweb123456789.]'),(86,'18780640540',1,'3543','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,NULL,NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,NULL,NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','345345','2018-08-27 08:20:57','163020011[jwweb123456789.]'),(87,'18780640540',1,'34trer','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'å½­ä¼Ÿ',NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ',NULL,NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'å½­ä¼Ÿ',NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ',NULL,NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,'ert','2018-08-27 08:22:57','163020011[jwweb123456789.]'),(88,'18780640540',1,'ger ','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,NULL,NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,NULL,NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','435ertrtre','2018-08-27 08:36:25','163020011[jwweb123456789.]'),(89,'18780640540',1,'32','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,NULL,NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,NULL,NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','32432','2018-08-27 08:53:37','163020011[jwweb123456789.]'),(90,'18780640540',1,'456','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,NULL,NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,NULL,NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','4564','2018-08-27 09:09:12','163020011[jwweb123456789.]'),(91,'18780640540',1,'4535','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,NULL,NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,NULL,NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','543543','2018-08-27 09:14:56','163020011[jwweb123456789.]'),(92,'18780640540',1,'435435','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,NULL,'å½­ä¼Ÿ',NULL,NULL,NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,NULL,'å½­ä¼Ÿ',NULL,NULL,NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','43543543','2018-08-27 09:16:47','163020011[jwweb123456789.]'),(93,'admin',1,'å“¦å“¦å“¦','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,NULL,'å½­ä¼Ÿ',NULL,NULL,NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,NULL,'å½­ä¼Ÿ',NULL,NULL,NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ',NULL,NULL,'å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','å½­ä¼Ÿ','çŸ›','2018-08-27 10:13:12','163020011[jwweb123456789.]');
/*!40000 ALTER TABLE `kb` ENABLE KEYS */;

#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phone` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `qq` varchar(20) NOT NULL,
  `regtime` datetime NOT NULL,
  `ip` varchar(30) NOT NULL,
  `lastTime` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "user"
#

/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
