/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 50720
 Source Host           : localhost
 Source Database       : ztlele

 Target Server Type    : MySQL
 Target Server Version : 50720
 File Encoding         : utf-8

 Date: 11/28/2018 13:02:31 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `votelist`
-- ----------------------------
DROP TABLE IF EXISTS `votelist`;
CREATE TABLE `votelist` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `count` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `votelist`
-- ----------------------------
BEGIN;
INSERT INTO `votelist` VALUES ('1', '海华', '0'), ('2', '布心', '0'), ('3', '海富', '0'), ('4', '罗租', '0'), ('5', '塘头', '0'), ('6', '应人石', '0'), ('7', '塘尾', '0'), ('8', '和平', '0'), ('9', '兴围', '0'), ('10', '怀德', '0'), ('11', '金凤凰', '0'), ('12', '凯旋', '0'), ('13', '中洲', '0'), ('14', '御龙湾', '0'), ('15', '颐康园', '0'), ('16', '固戌', '0'), ('17', '富恒', '0'), ('18', '盐田', '0'), ('19', '流塘', '0'), ('20', '福中福', '0'), ('21', '黄田', '0'), ('22', '九围', '0'), ('23', '蓝天', '0'), ('24', '马鞍山', '0'), ('25', '新二', '0'), ('26', '衙边', '0'), ('27', '罗田', '0'), ('28', '居委会', '0'), ('29', '红星', '0'), ('30', '万象新天', '0');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
