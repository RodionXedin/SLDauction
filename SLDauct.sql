/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50140
Source Host           : localhost:3306
Source Database       : SLDauct

Target Server Type    : MYSQL
Target Server Version : 50140
File Encoding         : 65001

Date: 2012-05-13 00:59:07
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `categories`
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL DEFAULT '0',
  `name` text,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

-- ----------------------------
-- Records of categories
-- ----------------------------

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
  `condition` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ItemOwner` (`owner_id`),
  KEY `category_id` (`category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

-- ----------------------------
-- Records of items
-- ----------------------------

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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

