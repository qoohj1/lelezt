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

 Date: 12/12/2018 11:41:01 AM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `nicecount`
-- ----------------------------
DROP TABLE IF EXISTS `nicecount`;
CREATE TABLE `nicecount` (
  `id` int(11) NOT NULL,
  `count` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `nicecount`
-- ----------------------------
BEGIN;
INSERT INTO `nicecount` VALUES ('1', '20'), ('2', '20'), ('3', '20'), ('4', '20'), ('5', '20'), ('6', '20'), ('7', '20'), ('8', '20'), ('9', '20'), ('10', '20'), ('11', '20'), ('12', '20'), ('13', '20'), ('14', '20'), ('15', '20'), ('16', '20'), ('17', '20'), ('18', '20'), ('19', '20'), ('20', '20');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
