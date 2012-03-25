/*
Navicat MySQL Data Transfer

Source Server         : SLDauct
Source Server Version : 50140
Source Host           : localhost:3306
Source Database       : SLDauct

Target Server Type    : MYSQL
Target Server Version : 50140
File Encoding         : 65001

Date: 2012-03-25 19:51:38
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `regkey` text NOT NULL,
  `regdate` date NOT NULL,
  `confirationdate` date DEFAULT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Pupkin', '123qwe', '1234fadf', '2025-03-20', '2026-03-20', 'rodion987@gmail.com', 'улица пупкина 58, город пупкинск');
