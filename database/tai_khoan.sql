/*
Navicat MySQL Data Transfer

Source Server         : Localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : kimlong_travel

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2022-04-07 10:03:33
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten_tk` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `loai_tk` varchar(50) DEFAULT NULL,
  `mat_khau` varchar(255) NOT NULL,
  `dia_chi` varchar(100) DEFAULT NULL,
  `dien_thoai` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` (`id`, `name`, `email`,`type`, `password`, `address`, `phone`) VALUES ('1', 'Kim Long', 'long1502@gmail.com', 'quantri', '$2a$12$2hIDER9Lh8bWOwT4HzRUpO59AN1hmmNLUmIvEU1M5DIYThNgUgSGO', 'Hải Hậu', '0987888999');
INSERT INTO `users` (`id`, `name`, `email`,`type`, `password`, `address`, `phone`) VALUES ('2', 'Tiến Phát', 'phat95@gmail.com', 'nhanvien', '123456', 'Hải Hậu', '0967085852');
INSERT INTO `users` (`id`, `name`, `email`,`type`, `password`, `address`, `phone`) VALUES ('3', 'Trọng Hoàng', 'hoang98@gmail.com', 'laixe', '123456', 'Hải Hậu', '0838419095');
INSERT INTO `users` (`id`, `name`, `email`,`type`, `password`, `address`, `phone`) VALUES ('4', 'Văn Thanh', 'thanhmeo@gmail.com', 'khachhang', '123456', 'Hải Hậu', '0986666888');
INSERT INTO `users` (`id`, `name`, `email`,`type`, `password`, `address`, `phone`) VALUES ('5', 'Kim Yến', 'yen2101@gmail.com', 'khachhang', '123456', 'Hải Hậu', '0834767777');
INSERT INTO `users` (`id`, `name`, `email`,`type`, `password`, `address`, `phone`) VALUES ('6', 'Văn Tài', 'tai91@gmail.com', 'laixe', '123456', 'Hải Hậu', '0987877666');
INSERT INTO `users` (`id`, `name`, `email`,`type`, `password`, `address`, `phone`) VALUES ('7', 'Hoàng Hiếu', 'hieu@gmail.com', 'laixe', '123456', 'Hải Hậu', '0967432840');
INSERT INTO `users` (`id`, `name`, `email`,`type`, `password`, `address`, `phone`) VALUES ('8', 'Văn Lâm', 'lam90@gmail.com', 'laixe', '123456', 'Hải Hậu', '0986777832');
INSERT INTO `users` (`id`, `name`, `email`,`type`, `password`, `address`, `phone`) VALUES ('9', 'Mai Hiến', 'hienhoat@gmail.com', 'laixe', '123456', 'Hải Hậu', '083874777');
INSERT INTO `users` (`id`, `name`, `email`,`type`, `password`, `address`, `phone`) VALUES ('10', 'Ngô Vinh', 'vinh0709@gmail.com', 'khachhang', '123456', 'Hải Hậu', '0986545678');
INSERT INTO `users` (`id`, `name`, `email`,`type`, `password`, `address`, `phone`) VALUES ('11', 'Mai Thanh', 'thanh@gmail.com', 'khachhang', '123456', 'Hải Hậu', '0986356256');
INSERT INTO `users` (`id`, `name`, `email`,`type`, `password`, `address`, `phone`) VALUES ('12', 'Thanh Chinh', 'chinh@gmail.com', 'khachhang', '123456', 'Hải Hậu', '083767877');
INSERT INTO `users` (`id`, `name`, `email`,`type`, `password`, `address`, `phone`) VALUES ('13', 'Thuy Duyen', 'duyenngo@gmail.com', 'khachhang', '123456', 'Hải Hậu ', '083849878');
INSERT INTO `users` (`id`, `name`, `email`,`type`, `password`, `address`, `phone`) VALUES ('14', 'Tien Dung', 'dungngo@gmail.com', 'khachhang', '123456', 'Hải Hậu', '0986765345');
INSERT INTO `users` (`id`, `name`, `email`,`type`, `password`, `address`, `phone`) VALUES ('15', 'Mai Thu', 'thu@gmail.com', 'nhanvien', '123456', 'Hải Hậu', '0986736278');
