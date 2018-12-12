/*
 Navicat Premium Data Transfer

 Source Server         : ztlele
 Source Server Type    : MySQL
 Source Server Version : 50720
 Source Host           : localhost
 Source Database       : ztlele

 Target Server Type    : MySQL
 Target Server Version : 50720
 File Encoding         : utf-8

 Date: 12/12/2018 11:42:06 AM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `nicelist`
-- ----------------------------
DROP TABLE IF EXISTS `nicelist`;
CREATE TABLE `nicelist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vote` int(11) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

SET FOREIGN_KEY_CHECKS = 1;
