/*
Navicat MySQL Data Transfer

Source Server         : Localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : kimlong_travel

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2022-04-07 10:18:40
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for don_hang
-- ----------------------------
DROP TABLE IF EXISTS `don_hang`;
CREATE TABLE `don_hang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `thoi_gian` datetime DEFAULT NULL,
  `so_ve` int(11) DEFAULT NULL,
  `trang_thai` int(11) DEFAULT NULL,
  `ma_tk` int(11) NOT NULL,
  `ghi_chu` text DEFAULT NULL,
  `li_do` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_kh` (`ma_tk`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of don_hang
-- ----------------------------
INSERT INTO `don_hang` VALUES ('1', '2022-02-23 22:45:13', '1', '0', '4', null, null);
INSERT INTO `don_hang` VALUES ('2', '2022-02-24 22:45:52', '1', '0', '5', null, null);
INSERT INTO `don_hang` VALUES ('3', '2022-02-25 22:46:48', '1', '0', '10', null, null);
INSERT INTO `don_hang` VALUES ('4', '2022-02-26 22:47:23', '1', '0', '11', null, null);
INSERT INTO `don_hang` VALUES ('5', '2022-02-28 22:47:40', '1', '0', '12', null, null);
INSERT INTO `don_hang` VALUES ('6', '2022-02-28 22:47:57', '1', '0', '13', null, null);
INSERT INTO `don_hang` VALUES ('7', '2022-03-02 22:48:30', '1', '1', '14', null, null);
