/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : laravel

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-05-26 17:03:15
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for spider_log
-- ----------------------------
DROP TABLE IF EXISTS `spider_log`;
CREATE TABLE `spider_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text,
  `updated_at` int(11) DEFAULT '0',
  `created_at` int(11) DEFAULT '0',
  `key` varchar(64) DEFAULT '',
  `type` smallint(6) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `key` (`key`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of spider_log
-- ----------------------------
INSERT INTO `spider_log` VALUES ('45', '{\"open_url\":\"\\/group\\/6424279115470110977\\/\",\"group_id\":\"6424279115470110977\",\"image_url\":\"http:\\/\\/p1.pstatp.com\\/list\\/240x240\\/1dcf000cafe1017f79ad\",\"title\":\"\\u5185\\u8499\\u53e4\\u81ea\\u6cbb\\u533a\\u653f\\u534f\\u539f\\u526f\\u4e3b\\u5e2d\\u8d75\\u9ece\\u5e73\\u88ab\\u6838\\u51c6\\u6b7b\\u5211\"}', '1495785910', '1495785910', 'c2bd9b46101f9c302d099f5eb4ab00c6', '0');
INSERT INTO `spider_log` VALUES ('46', '{\"open_url\":\"\\/group\\/6424092314797244674\\/\",\"group_id\":\"6424092314797244674\",\"image_url\":\"http:\\/\\/p1.pstatp.com\\/list\\/240x240\\/22cf0004ed756bf1655e\",\"title\":\"\\u201c\\u4e5d\\u4e8c\\u5171\\u8bc6\\u201d\\u5c31\\u662f\\u201c\\u4e00\\u4e2d\\u5404\\u8868\\u201d\\uff1f\\u56fd\\u53f0\\u529e\\u8fd9\\u6837\\u56de\\u5e94\\u5434\\u6566\\u4e49\"}', '1495785910', '1495785910', '8e1850b9b8e17590a95b5f9a8920700f', '0');
INSERT INTO `spider_log` VALUES ('47', '{\"open_url\":\"\\/group\\/6424330728901787905\\/\",\"group_id\":\"6424330728901787905\",\"image_url\":\"http:\\/\\/p9.pstatp.com\\/list\\/240x240\\/22cf00062969f111f459\",\"title\":\"\\u8db3\\u534f\\u91cd\\u7f5a\\u6052\\u5927\\u548c\\u5e7f\\u5dde\\u8d5b\\u533a\\uff1a\\u5f20\\u7433\\u8283\\u505c\\u8d5b \\u8d5b\\u533a\\u7f5a5\\u4e07+\\u4e25\\u91cd\\u8b66\\u544a\"}', '1495785910', '1495785910', '2d8572cd8fa1c276bdee69aa89255f53', '0');
INSERT INTO `spider_log` VALUES ('48', '{\"open_url\":\"\\/group\\/6424317666379170049\\/\",\"group_id\":\"6424317666379170049\",\"image_url\":\"http:\\/\\/p1.pstatp.com\\/list\\/240x240\\/22ce0002af224ba10b3d\",\"title\":\"\\u6211\\u7684\\u9ad8\\u8003 \\u88ab\\u9876\\u66ff\\u8005\\u738b\\u5a1c\\u5a1c\\uff1a\\u4eca\\u5e74\\u518d\\u6b21\\u9ad8\\u8003\\uff0c\\u8fd9\\u662f\\u4e00\\u6b21\\u81ea\\u6211\\u6551\\u8d4e\"}', '1495785910', '1495785910', '09dbd36de5cf0552f4fa311305734ec7', '0');
INSERT INTO `spider_log` VALUES ('49', '{\"open_url\":\"\\/group\\/6424093954069774593\\/\",\"group_id\":\"6424093954069774593\",\"image_url\":\"http:\\/\\/p9.pstatp.com\\/list\\/240x240\\/213900052ad726d99a79\",\"title\":\"\\u6c5f\\u82cf\\u9996\\u864e\\u60c5\\u5987\\u4e00\\u5ba1\\u83b7\\u521112\\u5e74\\uff0c\\u4e8c\\u5ba1\\u6539\\u52246\\u5e74\"}', '1495785910', '1495785910', '9e2f2706bf0a91e0cb29fde2476f631a', '0');
INSERT INTO `spider_log` VALUES ('50', '{\"open_url\":\"\\/group\\/6423965156627857666\\/\",\"group_id\":\"6423965156627857666\",\"image_url\":\"http:\\/\\/p3.pstatp.com\\/list\\/240x240\\/22b6000b028a136625f4\",\"title\":\"\\u4e2d\\u79fb\\u52a8CEO\\uff1a\\u4f1a\\u5343\\u65b9\\u767e\\u8ba1\\u963b\\u6b62\\u65e0\\u9650\\u6d41\\u91cf\\u8ba1\\u5212\\uff0c\\u540e\\u679c\\u4e0d\\u582a\\u8bbe\\u60f3\"}', '1495785910', '1495785910', '432f2683b162223502536c01c356d922', '0');
INSERT INTO `spider_log` VALUES ('51', '{\"open_url\":\"\\/group\\/6424316829694886146\\/\",\"group_id\":\"6424316829694886146\",\"image_url\":\"http:\\/\\/p1.pstatp.com\\/list\\/240x240\\/22b80000f292a14541bf\",\"title\":\"\\u53c8\\u4e00\\u4e2a\\u201c\\u56fd\\u6c11\\u8001\\u516c\\u201d\\u767b\\u4e0a\\u821e\\u53f0\\uff0c27\\u5c81\\u5f53\\u8463\\u4e8b\\uff0c\\u5e74\\u85aa120\\u4e07\\uff0c\\u8001\\u7238\\u8eab\\u5bb695\\u4ebf\"}', '1495785910', '1495785910', 'b895b6601712deb8ae054ad487a85668', '0');
INSERT INTO `spider_log` VALUES ('52', '{\"open_url\":\"\\/group\\/6424259256832229889\\/\",\"group_id\":\"6424259256832229889\",\"image_url\":\"http:\\/\\/p3.pstatp.com\\/list\\/240x240\\/22bc00061f02ebb5d3d1\",\"title\":\"\\u56fd\\u9632\\u90e8\\uff1a\\u4eca\\u5e74\\u8d77\\u4e0d\\u518d\\u4ece\\u9ad8\\u4e2d\\u6bd5\\u4e1a\\u751f\\u548c\\u5728\\u6821\\u5927\\u5b66\\u751f\\u4e2d\\u8003\\u6838\\u9009\\u62d4\\u56fd\\u9632\\u751f\"}', '1495785910', '1495785910', '0d8671fe725831de885266b2dfe206f2', '0');
INSERT INTO `spider_log` VALUES ('53', '{\"open_url\":\"\\/group\\/6424346450633785601\\/\",\"group_id\":\"6424346450633785601\",\"image_url\":\"http:\\/\\/p3.pstatp.com\\/list\\/240x240\\/22d0000236c146d07a04\",\"title\":\"\\u5c71\\u4e1c\\u68c0\\u65b9\\u5bf9\\u201c\\u8fb1\\u6bcd\\u6848\\u201d\\u5904\\u8b66\\u6c11\\u8b66\\u4e0d\\u4e88\\u5211\\u4e8b\\u7acb\\u6848\\uff0c\\u9644\\u6848\\u4ef6\\u56de\\u987e\"}', '1495785910', '1495785910', '81ac79754ff3b9e782b6042ea8ff51c3', '0');
INSERT INTO `spider_log` VALUES ('54', '{\"open_url\":\"\\/group\\/6424098049098809602\\/\",\"group_id\":\"6424098049098809602\",\"image_url\":\"http:\\/\\/p9.pstatp.com\\/list\\/240x240\\/22bc00043b73559925fa\",\"title\":\"\\u7f8e\\u519b\\u8230\\u53c8\\u95ef\\u6211\\u5357\\u6d77\\u5c9b\\u790112\\u6d77\\u91cc \\u4f46\\u770b\\u5230\\u7684\\u201c\\u98ce\\u666f\\u201d\\u5df2\\u5927\\u4e3a\\u4e0d\\u540c\"}', '1495785910', '1495785910', '934b3827b8ed0ba188fbe6c2375e6991', '0');
INSERT INTO `spider_log` VALUES ('55', '{\"open_url\":\"\\/group\\/6424318994576834817\\/\",\"group_id\":\"6424318994576834817\",\"image_url\":\"http:\\/\\/p3.pstatp.com\\/list\\/240x240\\/22bf0000ca4e980d30df\",\"title\":\"\\u6628\\u5929\\u65b0\\u95fb\\u8054\\u64ad\\u7684\\u4e00\\u6761\\u7247\\u5b50\\u53c8\\u6253\\u4e0a\\u4e86\\u9a6c\\u8d5b\\u514b\\uff0c\\u6709\\u591a\\u795e\\u79d8\\uff1f\"}', '1495785910', '1495785910', '7ef418661dc05d1b7852c153d8de45f3', '0');
INSERT INTO `spider_log` VALUES ('56', '{\"open_url\":\"\\/group\\/6424047603318882562\\/\",\"group_id\":\"6424047603318882562\",\"image_url\":\"http:\\/\\/p3.pstatp.com\\/list\\/240x240\\/22b6000ce82a49ad6676\",\"title\":\"\\u62db\\u8fdc\\u8840\\u6848\\u90aa\\u6559\\u4fe1\\u5f92\\u72f1\\u4e2d\\u5fcf\\u6094\\uff1a\\u542c\\u8bf4\\u5973\\u540c\\u4f19\\u88ab\\u6267\\u884c\\u6b7b\\u5211 \\u5934\\u90fd\\u70b8\\u4e86\"}', '1495786163', '1495786163', '225b239069262962c4799682281ded87', '0');
INSERT INTO `spider_log` VALUES ('57', '{\"open_url\":\"\\/group\\/6424266686841504002\\/\",\"group_id\":\"6424266686841504002\",\"image_url\":\"http:\\/\\/p1.pstatp.com\\/list\\/240x240\\/22c00000b1950c29ca42\",\"title\":\"\\u5916\\u5a92\\uff1a\\u7279\\u6717\\u666e\\u4e00\\u6539\\u201c\\u514b\\u5236\\u201d\\u8ba9\\u519b\\u8230\\u64c5\\u95ef\\u7f8e\\u6d4e\\u7901\\u6d77\\u57df\\u610f\\u6b32\\u4f55\\u4e3a\\uff1f\"}', '1495789302', '1495789302', 'df6e64c3d65db0ea2e378282aaff7c7b', '0');
INSERT INTO `spider_log` VALUES ('58', '{\"open_url\":\"\\/group\\/6424355888929374466\\/\",\"group_id\":\"6424355888929374466\",\"image_url\":\"http:\\/\\/p3.pstatp.com\\/list\\/240x240\\/22ce0003197fd4ea2cfe\",\"title\":\"\\u4e2d\\u592e\\u8bf4\\u8981\\u7ba1\\u8d771\\u4ebf\\u201c\\u5355\\u8eab\\u72d7\\u201d\\u7684\\u7ec8\\u8eab\\u5927\\u4e8b\\u540e\\uff0c\\u8fd9\\u4e2a\\u7701\\u7387\\u5148\\u884c\\u52a8\\u4e86\"}', '1495789302', '1495789302', '1a72197f370a791649bbcdd08747c384', '0');
