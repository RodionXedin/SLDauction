/*
Date: 2012-03-26 14:19:00
*/

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `firstname` text NOT NULL,
  `secondname` text NOT NULL,
  `regkey` text NOT NULL,
  `regdate` date NOT NULL,
  `confirationdate` date DEFAULT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY (`ID`)
) DEFAULT CHARSET=utf8;

