/*
Navicat MySQL Data Transfer

Source Server         : SLDauct
Source Server Version : 50140
Source Host           : localhost:3306
Source Database       : SLDauct

Target Server Type    : MYSQL
Target Server Version : 50140
File Encoding         : 65001

Date: 2012-03-26 13:28:15
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
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
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Pupkin', 'VASYA', '', '1234fadf', '2025-03-28', '2026-03-20', '123qwe', 'rodion987@gmail.com', 'улица пупкина 58, город пупкинск');
INSERT INTO `users` VALUES ('40', 'ttt44t1', '1235', '51251234', '123', '2012-03-25', null, '123125', 'rodion987@gmail.com', 'Kharkiv , lenina ave 10 -20');
