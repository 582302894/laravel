/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : laravel

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-05-17 17:51:02
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for ip_log
-- ----------------------------
DROP TABLE IF EXISTS `ip_log`;
CREATE TABLE `ip_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ip` varchar(20) NOT NULL DEFAULT '',
  `url` varchar(150) NOT NULL,
  `referer` varchar(255) DEFAULT '',
  `updated_at` int(11) DEFAULT '0',
  `created_at` int(11) DEFAULT '0',
  `title` varchar(50) DEFAULT '',
  `content` varchar(255) DEFAULT '',
  `type` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ip_log
-- ----------------------------
INSERT INTO `ip_log` VALUES ('1', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494914226', '1494914226', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('2', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494914241', '1494914241', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('3', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494914289', '1494914289', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('4', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494914290', '1494914290', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('5', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494915443', '1494915443', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('6', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494915444', '1494915444', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('7', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494915444', '1494915444', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('8', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494916599', '1494916599', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('9', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494916600', '1494916600', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('10', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494916601', '1494916601', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('11', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494916603', '1494916603', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('12', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494916603', '1494916603', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('13', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494916647', '1494916647', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('14', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494916648', '1494916648', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('15', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494916661', '1494916661', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('16', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494916729', '1494916729', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('17', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494916833', '1494916833', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('18', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494916834', '1494916834', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('19', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494916834', '1494916834', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('20', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494916835', '1494916835', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('21', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494916855', '1494916855', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('22', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494916888', '1494916888', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('23', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494916888', '1494916888', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('24', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494916889', '1494916889', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('25', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494916901', '1494916901', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('26', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494916902', '1494916902', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('27', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494916905', '1494916905', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('28', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494917010', '1494917010', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('29', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494917011', '1494917011', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('30', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494917011', '1494917011', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('31', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494917018', '1494917018', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('32', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494917018', '1494917018', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('33', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494917020', '1494917020', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('34', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494917020', '1494917020', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('35', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494917025', '1494917025', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('36', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494917025', '1494917025', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('37', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494917027', '1494917027', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('38', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494917070', '1494917070', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('39', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494917387', '1494917387', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('40', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494917389', '1494917389', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('41', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494917395', '1494917395', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('42', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494917441', '1494917441', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('43', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494917448', '1494917448', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('44', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494917469', '1494917469', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('45', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494917985', '1494917985', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('46', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/index', '1494918006', '1494918006', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('47', '127.0.0.1', '/user/login', '', '1494918116', '1494918116', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('48', '127.0.0.1', '/user/login', '', '1494918196', '1494918196', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('49', '127.0.0.1', '/user/login', '', '1494918202', '1494918202', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('50', '127.0.0.1', '/user/login', '', '1494918252', '1494918252', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('51', '127.0.0.1', '/user/login', '', '1494918451', '1494918451', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('52', '127.0.0.1', '/user/login', '', '1494918460', '1494918460', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('53', '127.0.0.1', '/user/login', '', '1494918473', '1494918473', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('54', '127.0.0.1', '/user/login', '', '1494918480', '1494918480', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('55', '127.0.0.1', '/user/login', '', '1494918509', '1494918509', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('56', '127.0.0.1', '/user/login', '', '1494918544', '1494918544', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('57', '127.0.0.1', '/user/login', '', '1494918611', '1494918611', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('58', '127.0.0.1', '/user/login', '', '1494918625', '1494918625', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('59', '127.0.0.1', '/user/login', '', '1494918629', '1494918629', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('60', '127.0.0.1', '/user/login', '', '1494918673', '1494918673', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('61', '127.0.0.1', '/user/login', '', '1494918682', '1494918682', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('62', '127.0.0.1', '/user/login', '', '1494918686', '1494918686', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('63', '127.0.0.1', '/user/login', '', '1494918711', '1494918711', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('64', '127.0.0.1', '/user/login', '', '1494918712', '1494918712', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('65', '127.0.0.1', '/user/login', '', '1494918746', '1494918746', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('66', '127.0.0.1', '/user/login', '', '1494918784', '1494918784', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('67', '127.0.0.1', '/user/login', '', '1494918942', '1494918942', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('68', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494918948', '1494918948', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('69', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494918948', '1494918948', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('70', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494919131', '1494919131', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('71', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494919219', '1494919219', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('72', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494919238', '1494919238', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('73', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494919292', '1494919292', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('74', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494919345', '1494919345', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('75', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494919373', '1494919373', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('76', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494919390', '1494919390', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('77', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494919411', '1494919411', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('78', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494919427', '1494919427', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('79', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494919447', '1494919447', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('80', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/index', '1494920000', '1494920000', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('81', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494920038', '1494920038', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('82', '127.0.0.1', '/user/login', '', '1494921974', '1494921974', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('83', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494921976', '1494921976', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('84', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/index', '1494924702', '1494924702', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('85', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494924709', '1494924709', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('86', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/index', '1494924722', '1494924722', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('87', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494924727', '1494924727', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('88', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/index', '1494924749', '1494924749', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('89', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494924772', '1494924772', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('90', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/index', '1494924783', '1494924783', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('91', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494924803', '1494924803', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('92', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/index', '1494924841', '1494924841', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('93', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/index', '1494924841', '1494924841', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('94', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/index', '1494924842', '1494924842', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('95', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/index', '1494924843', '1494924843', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('96', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494924852', '1494924852', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('97', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494924852', '1494924852', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('98', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494924856', '1494924856', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('99', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/index', '1494990877', '1494990877', 'user.login', '', '1');
INSERT INTO `ip_log` VALUES ('100', '127.0.0.1', '/user/login', 'http://local.qq582302894.com/user/login', '1494990879', '1494990879', 'user.login', '', '1');

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
  `year` smallint(2) DEFAULT '0',
  `month` tinyint(1) DEFAULT '0',
  `day` tinyint(1) DEFAULT '0',
  `photo` varchar(100) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', '孙浩波', '23', '1', '0', '1493831570', '1493831570', '0', '0', '0', '');
INSERT INTO `user` VALUES ('2', '赵鸳鸳', '25', '2', '0', '1493831570', '1493831570', '0', '0', '0', '');
INSERT INTO `user` VALUES ('3', '胡阳', '24', '1', '0', '1493831570', '1493831570', '0', '0', '0', '');
INSERT INTO `user` VALUES ('4', '蒋志', '24', '1', '0', '1493831570', '1493831570', '0', '0', '0', '');
INSERT INTO `user` VALUES ('5', '曾攀', '24', '1', '0', '1493832236', '1493832236', '0', '0', '0', '');
INSERT INTO `user` VALUES ('6', '贺运路', '24', '1', '0', '1493834152', '1493832364', '0', '0', '0', '');
INSERT INTO `user` VALUES ('7', 'test', '0', '0', '0', '1494907218', '1494907218', '0', '0', '0', '');

-- ----------------------------
-- Table structure for user_auth
-- ----------------------------
DROP TABLE IF EXISTS `user_auth`;
CREATE TABLE `user_auth` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) unsigned NOT NULL DEFAULT '0',
  `account` varchar(50) NOT NULL DEFAULT '' COMMENT '帐号',
  `password` varchar(60) NOT NULL DEFAULT '' COMMENT '密码 32位md5加密',
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '类型，帐号密码',
  `updated_at` int(11) DEFAULT '0',
  `created_at` int(11) DEFAULT '0',
  `remember_token` varchar(200) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_auth
-- ----------------------------
INSERT INTO `user_auth` VALUES ('1', '1', 'sunhaobo', '$2y$10$UhXEYDcMWKdbdkff75r9/.SQCJjIDqJmO3LlPpCUI.d7PW2urcMZi', '1', '1494924700', '1493831570', 't2IYFxSwFNSnd0r4Z4IpSCZIbFQbOL59LtlXMrZPdys6R9etqUrDKQ5Ql8jT');
INSERT INTO `user_auth` VALUES ('2', '7', 'test', '$2y$10$HlVy3s8FGvWU5ep/sjQJbusGJfmqaynVhbh83Scl953ZBnAZYLV9i', '1', '1494924782', '1494907219', 'DI96JWCpJpgLCooLQePILT4q76j6ZIKE6qmkov2ZTV7Am7AdwwmZrNYHxxeE');
