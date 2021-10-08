CREATE DATABASE IF NOT EXISTS `avalyst_teste` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `avalyst_teste`;

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `contactId` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL COMMENT '(00) 00000-0000',
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  PRIMARY KEY (`contactId`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` (`contactId`, `name`, `email`, `phone`, `dateCreated`, `dateUpdated`) VALUES
	(1, 'teste', 'teste@teste.com', '(41) 99710-9166', '2021-10-05 15:56:12', '2021-10-05 15:56:12'),
	(2, 'Leonardo Maia Costa', 'avalmaiacosta@gmail.com', '', '2021-10-05 17:49:26', '2021-10-05 17:49:26'),
	(3, 'Teste ABC', 'ABC@gmail.com', '', '2021-10-05 17:49:48', '2021-10-05 17:49:48'),
	(4, 'Leonardo Maia Costa', 'lmaiacosta@gmail.com', '', '2021-10-05 17:52:18', '2021-10-05 17:52:18'),
	(5, 'Leonardo Maia Costa', 'lmaiacosta@gmail.com', '41 99710-9166', '2021-10-08 11:42:01', '2021-10-08 11:42:01'),
	(6, 'Leonardo Maia Costa', 'lmaiacosta@gmail.com', '41 9971166', '2021-10-08 11:42:11', '2021-10-08 11:42:11'),
	(7, 'Leonardo Ribas Maia', 'lribasmaia@gmail.com', '41999999999', '2021-10-08 13:27:01', '2021-10-08 13:27:01'),
	(8, 'Fernanda Ribas Costa', 'fer@gmail.com', '30101010010', '2021-10-08 13:30:13', '2021-10-08 13:30:13');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userId` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  PRIMARY KEY (`userId`) USING BTREE,
  UNIQUE KEY `email` (`email`),
  KEY `idx_name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`userId`, `name`, `email`, `password`, `dateCreated`, `dateUpdated`) VALUES
	(1, 'leo', 'lmaiacosta@gmail.com', '7a838ff0903968a514512433a5df9ae0', '2021-10-08 15:27:38', '2021-10-08 15:27:38'),
	(2, 'leoa', 'lmaiacosta@gmail.coma', '7a838ff0903968a514512433a5df9ae0', '2021-10-08 15:27:38', '2021-10-08 15:27:38'),
	(3, 'Leonardo', 'aaa@aaa.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-10-08 16:19:28', '2021-10-08 16:19:28');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
