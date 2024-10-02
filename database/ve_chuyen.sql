/*
Navicat MySQL Data Transfer

Source Server         : Localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : kimlong_travel

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2022-04-09 09:57:42
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for ve_chuyen
-- ----------------------------
DROP TABLE IF EXISTS `ve_chuyen`;
CREATE TABLE `ve_chuyen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ma_cn` int(11) NOT NULL,
  `ma_gx` int(11) NOT NULL,
  `ma_dh` int(11) DEFAULT NULL,
  `trang_thai` int(11) DEFAULT NULL,
  `diem_don` varchar(30) DEFAULT NULL,
  `gio_don` time DEFAULT NULL,
  `diem_tra` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_ve_chuyen` (`ma_cn`,`ma_gx`),
  KEY `fk_gx` (`ma_gx`),
  KEY `fk_dh` (`ma_dh`),
  CONSTRAINT `fk_dh` FOREIGN KEY (`ma_dh`) REFERENCES `don_hang` (`id`),
  CONSTRAINT `fk_gx` FOREIGN KEY (`ma_gx`) REFERENCES `ghe_xe` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=272 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ve_chuyen
-- ----------------------------
INSERT INTO `ve_chuyen` VALUES ('1', '1', '14', '1', '0', 'Cầu Dài Hải Quang', null, 'BV Bạch Mai');
INSERT INTO `ve_chuyen` VALUES ('2', '1', '15', '1', '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('3', '1', '16', '2', '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('4', '1', '17', '3', '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('5', '1', '18', '4', '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('6', '1', '19', '5', '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('7', '1', '20', '6', '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('8', '1', '21', '7', '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('9', '1', '22', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('10', '1', '23', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('11', '1', '24', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('12', '1', '25', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('13', '1', '26', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('14', '1', '27', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('15', '1', '28', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('16', '2', '5', null, '1', 'Yên Định', null, 'Phạm Hùng - Đình Thôn');
INSERT INTO `ve_chuyen` VALUES ('17', '2', '6', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('18', '2', '7', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('19', '2', '8', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('20', '2', '9', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('21', '2', '10', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('22', '2', '11', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('23', '2', '12', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('24', '2', '13', null, '1', 'Bánh Mỳ 168', null, 'ĐH Thương Mại');
INSERT INTO `ve_chuyen` VALUES ('25', '3', '14', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('26', '3', '15', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('27', '3', '16', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('28', '3', '17', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('29', '3', '18', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('30', '3', '19', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('31', '3', '20', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('32', '3', '21', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('33', '3', '22', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('34', '3', '23', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('35', '3', '24', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('36', '3', '25', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('37', '3', '26', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('38', '3', '27', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('39', '3', '28', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('40', '4', '5', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('41', '4', '6', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('42', '4', '7', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('43', '4', '8', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('44', '4', '9', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('45', '4', '10', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('46', '4', '11', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('47', '4', '12', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('48', '4', '13', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('49', '17', '5', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('50', '17', '6', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('51', '17', '7', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('52', '17', '8', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('53', '17', '9', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('54', '17', '10', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('55', '17', '11', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('56', '17', '12', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('57', '17', '13', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('58', '18', '5', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('59', '18', '6', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('60', '18', '7', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('61', '18', '8', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('62', '18', '9', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('63', '18', '10', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('64', '18', '11', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('65', '18', '12', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('66', '18', '13', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('67', '6', '14', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('68', '6', '15', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('69', '6', '16', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('70', '6', '17', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('71', '6', '18', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('72', '6', '19', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('73', '6', '20', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('74', '6', '21', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('75', '6', '22', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('76', '6', '23', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('77', '6', '24', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('78', '6', '25', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('79', '6', '26', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('80', '6', '27', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('81', '6', '28', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('82', '8', '14', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('83', '8', '15', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('84', '8', '16', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('85', '8', '17', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('86', '8', '18', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('87', '8', '19', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('88', '8', '20', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('89', '8', '21', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('90', '8', '22', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('91', '8', '23', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('92', '8', '24', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('93', '8', '25', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('94', '8', '26', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('95', '8', '27', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('96', '8', '28', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('97', '7', '14', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('98', '7', '15', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('99', '7', '16', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('100', '7', '17', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('101', '7', '18', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('102', '7', '19', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('103', '7', '20', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('104', '7', '21', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('105', '7', '22', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('106', '7', '23', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('107', '7', '24', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('108', '7', '25', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('109', '7', '26', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('110', '7', '27', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('111', '7', '28', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('112', '9', '14', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('113', '9', '15', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('114', '9', '16', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('115', '9', '17', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('116', '9', '18', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('117', '9', '19', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('118', '9', '20', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('119', '9', '21', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('120', '9', '22', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('121', '9', '23', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('122', '9', '24', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('123', '9', '25', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('124', '9', '26', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('125', '9', '27', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('126', '9', '28', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('127', '5', '14', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('128', '5', '15', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('129', '5', '16', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('130', '5', '17', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('131', '5', '18', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('132', '5', '19', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('133', '5', '20', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('134', '5', '21', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('135', '5', '22', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('136', '5', '23', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('137', '5', '24', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('138', '5', '25', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('139', '5', '26', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('140', '5', '27', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('141', '5', '28', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('142', '10', '14', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('143', '10', '15', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('144', '10', '16', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('145', '10', '17', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('146', '10', '18', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('147', '10', '19', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('148', '10', '20', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('149', '10', '21', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('150', '10', '22', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('151', '10', '23', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('152', '10', '24', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('153', '10', '25', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('154', '10', '26', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('155', '10', '27', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('156', '10', '28', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('157', '11', '5', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('158', '11', '6', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('159', '11', '7', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('160', '11', '8', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('161', '11', '9', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('162', '11', '10', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('163', '11', '11', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('164', '11', '12', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('165', '11', '13', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('166', '12', '5', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('167', '12', '6', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('168', '12', '7', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('169', '12', '8', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('170', '12', '9', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('171', '12', '10', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('172', '12', '11', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('173', '12', '12', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('174', '12', '13', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('175', '19', '14', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('176', '19', '15', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('177', '19', '16', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('178', '19', '17', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('179', '19', '18', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('180', '19', '19', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('181', '19', '20', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('182', '19', '21', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('183', '19', '22', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('184', '19', '23', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('185', '19', '24', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('186', '19', '25', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('187', '19', '26', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('188', '19', '27', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('189', '19', '28', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('190', '20', '14', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('191', '20', '15', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('192', '20', '16', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('193', '20', '17', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('194', '20', '18', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('195', '20', '19', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('196', '20', '20', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('197', '20', '21', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('198', '20', '22', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('199', '20', '23', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('200', '20', '24', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('201', '20', '25', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('202', '20', '26', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('203', '20', '27', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('204', '20', '28', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('205', '21', '5', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('206', '21', '6', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('207', '21', '7', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('208', '21', '8', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('209', '21', '9', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('210', '21', '10', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('211', '21', '11', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('212', '21', '12', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('213', '21', '13', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('214', '22', '5', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('215', '22', '6', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('216', '22', '7', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('217', '22', '8', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('218', '22', '9', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('219', '22', '10', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('220', '22', '11', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('221', '22', '12', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('222', '22', '13', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('223', '13', '5', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('224', '13', '6', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('225', '13', '7', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('226', '13', '8', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('227', '13', '9', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('228', '13', '10', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('229', '13', '11', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('230', '13', '12', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('231', '13', '13', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('232', '14', '5', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('233', '14', '6', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('234', '14', '7', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('235', '14', '8', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('236', '14', '9', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('237', '14', '10', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('238', '14', '11', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('239', '14', '12', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('240', '14', '13', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('241', '15', '14', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('242', '15', '15', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('243', '15', '16', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('244', '15', '17', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('245', '15', '18', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('246', '15', '19', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('247', '15', '20', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('248', '15', '21', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('249', '15', '22', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('250', '15', '23', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('251', '15', '24', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('252', '15', '25', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('253', '15', '26', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('254', '15', '27', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('255', '15', '28', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('256', '16', '14', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('257', '16', '15', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('258', '16', '16', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('259', '16', '17', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('260', '16', '18', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('261', '16', '19', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('262', '16', '20', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('263', '16', '21', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('264', '16', '22', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('265', '16', '23', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('266', '16', '24', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('267', '16', '25', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('268', '16', '26', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('269', '16', '27', null, '0', null, null, null);
INSERT INTO `ve_chuyen` VALUES ('270', '16', '28', null, '0', null, null, null);
