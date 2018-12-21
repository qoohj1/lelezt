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

 Date: 12/21/2018 14:14:59 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `staticstic`
-- ----------------------------
DROP TABLE IF EXISTS `staticstic`;
CREATE TABLE `staticstic` (
  `id` int(11) NOT NULL,
  `count` int(11) DEFAULT NULL,
  `first` int(11) DEFAULT NULL,
  `second` int(11) DEFAULT NULL,
  `third` int(11) DEFAULT NULL,
  `fourth` int(11) DEFAULT NULL,
  `fifth` int(11) DEFAULT NULL,
  `sixth` int(11) DEFAULT NULL,
  `seventh` int(11) DEFAULT NULL,
  `eighth` int(11) DEFAULT NULL,
  `ninth` int(11) DEFAULT NULL,
  `tenth` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `staticstic`
-- ----------------------------
BEGIN;
INSERT INTO `staticstic` VALUES ('1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
