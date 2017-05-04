/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : laravel

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-05-04 17:58:21
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '' COMMENT '名字',
  `age` tinyint(1) unsigned zerofill NOT NULL DEFAULT '0' COMMENT '年龄',
  `sex` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '1，男，2，女',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `updated_at` int(11) unsigned NOT NULL DEFAULT '0',
  `created_at` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', '孙浩波', '23', '1', '0', '1493831570', '1493831570');
INSERT INTO `user` VALUES ('2', '赵鸳鸳', '25', '2', '0', '1493831570', '1493831570');
INSERT INTO `user` VALUES ('3', '胡阳', '24', '1', '0', '1493831570', '1493831570');
INSERT INTO `user` VALUES ('4', '蒋志', '24', '1', '0', '1493831570', '1493831570');
INSERT INTO `user` VALUES ('5', '曾攀', '24', '1', '0', '1493832236', '1493832236');
INSERT INTO `user` VALUES ('6', '贺运路', '24', '1', '0', '1493834152', '1493832364');
