/*
Navicat MySQL Data Transfer

Source Server         : SLDauct
Source Server Version : 50140
Source Host           : localhost:3306
Source Database       : SLDauct

Target Server Type    : MYSQL
Target Server Version : 50140
File Encoding         : 65001

Date: 2012-05-13 14:42:54
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `categories`
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('1', 'phones', 'phoneslol');
INSERT INTO `categories` VALUES ('2', 'tv', 'tvslol');
INSERT INTO `categories` VALUES ('3', 'laptop', 'laptopslol');
INSERT INTO `categories` VALUES ('4', '', '');

-- ----------------------------
-- Table structure for `items`
-- ----------------------------
DROP TABLE IF EXISTS `items`;
CREATE TABLE `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `owner_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `price` double NOT NULL,
  `income_date` date NOT NULL,
  `period` int(11) NOT NULL,
  `description` longtext,
  `manufacturer` text NOT NULL,
  `name` text NOT NULL,
  `conditionofitem` varchar(255) DEFAULT NULL,
  `last_bid_id` int(11) NOT NULL,
  `last_bid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of items
-- ----------------------------
INSERT INTO `items` VALUES ('1', '0', '1', '3000', '2012-05-02', '10000', 'Phone for life from auction', 'HTC', 'Cruise', ' new', '0', null);
INSERT INTO `items` VALUES ('2', '3', '1', '15000', '2012-05-04', '10', 'What a beatiful phone !', 'Phonesforidiots', 'Idiotphone 10k', 'new', '0', null);
INSERT INTO `items` VALUES ('3', '2', '2', '12500', '2012-05-13', '4', 'Just a standart tv what the hell ? ', 'Samsung', 'Tv', 'used', '0', null);
INSERT INTO `items` VALUES ('4', '4', '3', '7896', '2012-05-13', '25', 'Used laptop , good condition ,everything included.', 'Dell', 'AW100', 'used', '0', null);
INSERT INTO `items` VALUES ('5', '0', '0', '0', '0000-00-00', '0', null, '', '', null, '0', null);

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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'test1', 'tester', 'Pupkin', '123', '2012-05-13', '2012-05-13', 'qwerty', 'rodion987@gmail.com', 'Kharkiv , lenina ave 10 -20');
INSERT INTO `users` VALUES ('2', 'megaseller', 'vasya', 'pupkin', '123', '2012-05-13', '2012-05-13', 'qwerty', 'rodion987@gmail.com', 'address1');
INSERT INTO `users` VALUES ('3', 'anotheruser', 'petya', 'petin', '123', '2012-05-13', '2012-05-13', 'qwerty', 'parakhin.sergey@gmail.com', 'Nowhere town');
INSERT INTO `users` VALUES ('4', 'kitty15', 'Anna', 'Pifpaf', '123', '2012-05-13', '2012-05-13', 'kitty', 'kitty@mail.ru', 'hell');
INSERT INTO `users` VALUES ('5', 'pinky13', 'Juliet', 'idontknow', '123', '2012-05-25', null, 'qwerty', 'iamstupid@hotmail.com', 'hellyhell , 1 ave , 23 - 34 .');
INSERT INTO `users` VALUES ('6', 'anotherguy', 'Andrew', 'Peterson', '123', '2012-05-09', '2012-05-30', 'qwerty', 'andrew@gmail.com', 'New York , 10 , 27');
INSERT INTO `users` VALUES ('7', '', '', '', '', '0000-00-00', null, '', '', '');
