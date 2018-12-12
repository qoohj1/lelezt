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

 Date: 12/12/2018 11:43:00 AM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `huafeicount`
-- ----------------------------
DROP TABLE IF EXISTS `huafeicount`;
CREATE TABLE `huafeicount` (
  `id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `count` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `huafeicount`
-- ----------------------------
BEGIN;
INSERT INTO `huafeicount` VALUES ('1', '10', '20'), ('2', '5', '40'), ('3', '2', '50');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
