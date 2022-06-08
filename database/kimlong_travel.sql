/*
Navicat MySQL Data Transfer

Source Server         : Localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : kimlong_travel

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2022-05-19 16:57:25
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for chuyen
-- ----------------------------
DROP TABLE IF EXISTS `chuyen`;
CREATE TABLE `chuyen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten_chuyen` varchar(50) DEFAULT NULL,
  `ma_tuyen` int(11) NOT NULL,
  `ma_lx` int(11) NOT NULL,
  `gio` time DEFAULT NULL,
  `thu_tu` int(11) NOT NULL,
  `chieu` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `un_chuyen` (`ma_tuyen`,`thu_tu`),
  KEY `fk_loaixe` (`ma_lx`),
  CONSTRAINT `fk_loaixe` FOREIGN KEY (`ma_lx`) REFERENCES `loai_xe` (`id`),
  CONSTRAINT `fk_tuyen` FOREIGN KEY (`ma_tuyen`) REFERENCES `tuyen` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of chuyen
-- ----------------------------
INSERT INTO `chuyen` VALUES ('1', 'Hải Thịnh - ĐH Mỏ(1)', '1', '4', '03:45:00', '1', 'di');
INSERT INTO `chuyen` VALUES ('2', 'Trực Phú - Nhổn/Nội Bài(1)', '3', '3', '03:50:00', '3', 'di');
INSERT INTO `chuyen` VALUES ('3', 'ĐH Mỏ - Hải Thịnh(1)', '1', '4', '07:00:00', '2', 've');
INSERT INTO `chuyen` VALUES ('4', 'Nhổn/Nội Bài - Trực Phú(1)', '3', '3', '07:30:00', '4', 've');
INSERT INTO `chuyen` VALUES ('5', 'Hải Thịnh - ĐH Mỏ(2)', '1', '4', '12:50:00', '11', 'di');
INSERT INTO `chuyen` VALUES ('6', 'Hải Thịnh - Mỏ/Nội Bài(1)', '2', '4', '07:05:00', '7', 'di');
INSERT INTO `chuyen` VALUES ('7', 'Hải Thịnh - Mỏ/Nội Bài(2)', '2', '3', '08:05:00', '9', 'di');
INSERT INTO `chuyen` VALUES ('8', 'Mỏ/Nội Bài - Hải Thịnh(1)', '2', '4', '12:50:00', '8', 've');
INSERT INTO `chuyen` VALUES ('9', 'Mỏ/Nội Bài - Hải Thịnh(2)', '2', '3', '12:50:00', '10', 've');
INSERT INTO `chuyen` VALUES ('10', 'ĐH Mỏ - Hải Thịnh(2)', '1', '4', '16:00:00', '12', 've');
INSERT INTO `chuyen` VALUES ('11', 'Trực Phú - Nhổn/Nội Bài(2)', '3', '4', '12:50:00', '13', 'di');
INSERT INTO `chuyen` VALUES ('12', 'Nhổn/Nội Bài - Trực Phú(2)', '3', '4', '17:30:00', '14', 've');
INSERT INTO `chuyen` VALUES ('13', 'Hải Thịnh - Nhổn(1)', '4', '3', '16:00:00', '19', 'di');
INSERT INTO `chuyen` VALUES ('14', 'Nhổn - Hải Thịnh(1)', '4', '3', '19:00:00', '20', 've');
INSERT INTO `chuyen` VALUES ('15', 'Hải Thịnh - ĐH Mỏ(3)', '1', '4', '17:10:00', '21', 'di');
INSERT INTO `chuyen` VALUES ('16', 'ĐH Mỏ - Hải Thịnh(3)', '1', '4', '20:30:00', '22', 've');
INSERT INTO `chuyen` VALUES ('17', 'Hải Thịnh - Mỏ/Nội Bài(3)', '2', '3', '07:00:00', '5', 'di');
INSERT INTO `chuyen` VALUES ('18', 'Mỏ/Nội Bài - Hải Thịnh(3)', '2', '3', '14:30:00', '6', 've');
INSERT INTO `chuyen` VALUES ('19', 'Hải Thịnh - Nhổn(2)', '4', '4', '14:50:00', '15', 'di');
INSERT INTO `chuyen` VALUES ('20', 'Nhổn - Hải Thịnh(2)', '4', '4', '18:45:00', '16', 've');
INSERT INTO `chuyen` VALUES ('21', 'Trực Phú - Nhổn/Nội Bài(3)', '3', '3', '15:30:00', '17', 'di');
INSERT INTO `chuyen` VALUES ('22', 'Nhổn/Nội Bài - Trực Phú(3)', '3', '3', '19:15:00', '18', 've');

-- ----------------------------
-- Table structure for chuyen_ngay
-- ----------------------------
DROP TABLE IF EXISTS `chuyen_ngay`;
CREATE TABLE `chuyen_ngay` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ma_chuyen` int(11) NOT NULL,
  `ma_xe` int(11) DEFAULT NULL,
  `ngay` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_chuyen_ngay` (`ma_chuyen`),
  KEY `fk_chuyen_ngay_xe` (`ma_xe`),
  CONSTRAINT `fk_chuyen_ngay` FOREIGN KEY (`ma_chuyen`) REFERENCES `chuyen` (`id`),
  CONSTRAINT `fk_chuyen_ngay_xe` FOREIGN KEY (`ma_xe`) REFERENCES `xe` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of chuyen_ngay
-- ----------------------------
INSERT INTO `chuyen_ngay` VALUES ('1', '1', '2', '2022-05-19');
INSERT INTO `chuyen_ngay` VALUES ('2', '3', '2', '2022-05-19');
INSERT INTO `chuyen_ngay` VALUES ('3', '1', '5', '2022-05-19');
INSERT INTO `chuyen_ngay` VALUES ('4', '3', '5', '2022-05-19');
INSERT INTO `chuyen_ngay` VALUES ('11', '2', '12', '2022-05-07');
INSERT INTO `chuyen_ngay` VALUES ('12', '4', '12', '2022-05-07');
INSERT INTO `chuyen_ngay` VALUES ('13', '13', '15', '2022-05-08');
INSERT INTO `chuyen_ngay` VALUES ('14', '14', '15', '2022-05-08');
INSERT INTO `chuyen_ngay` VALUES ('24', '11', '12', '2022-05-07');
INSERT INTO `chuyen_ngay` VALUES ('25', '12', '12', '2022-05-07');
INSERT INTO `chuyen_ngay` VALUES ('26', '7', '5', '2022-05-09');

-- ----------------------------
-- Table structure for diem_do
-- ----------------------------
DROP TABLE IF EXISTS `diem_do`;
CREATE TABLE `diem_do` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten_dd` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UC_chuyen` (`ten_dd`)
) ENGINE=InnoDB AUTO_INCREMENT=146 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of diem_do
-- ----------------------------
INSERT INTO `diem_do` VALUES ('130', '126 Phạm Văn Đồng');
INSERT INTO `diem_do` VALUES ('55', '90 N.Trãi');
INSERT INTO `diem_do` VALUES ('137', 'Bánh Mỳ 168');
INSERT INTO `diem_do` VALUES ('34', 'Bến đò Nam Thanh');
INSERT INTO `diem_do` VALUES ('97', 'BigC');
INSERT INTO `diem_do` VALUES ('70', 'Bưởi - Cầu T11');
INSERT INTO `diem_do` VALUES ('68', 'Bưởi - Đào Tấn');
INSERT INTO `diem_do` VALUES ('69', 'Bưởi - Đội Cấn');
INSERT INTO `diem_do` VALUES ('57', 'BV Bạch Mai');
INSERT INTO `diem_do` VALUES ('117', 'BVĐK YH Cổ Truyền');
INSERT INTO `diem_do` VALUES ('56', 'C.Vượt Ngã 4 Vọng');
INSERT INTO `diem_do` VALUES ('44', 'C.Xăng Hòa Vượng');
INSERT INTO `diem_do` VALUES ('39', 'C.Xăng Nam Vân');
INSERT INTO `diem_do` VALUES ('59', 'C.Xăng Ngã Tư Sở');
INSERT INTO `diem_do` VALUES ('12', 'Cầu Dài Hải Quang');
INSERT INTO `diem_do` VALUES ('123', 'Cầu Dậu');
INSERT INTO `diem_do` VALUES ('105', 'Cầu Diễn');
INSERT INTO `diem_do` VALUES ('13', 'Cầu Hải Nhuận');
INSERT INTO `diem_do` VALUES ('95', 'Cầu Hải Quang 1');
INSERT INTO `diem_do` VALUES ('9', 'Cầu Hải Tân');
INSERT INTO `diem_do` VALUES ('20', 'Cầu Hàng Báo');
INSERT INTO `diem_do` VALUES ('19', 'Cầu Hàng Vàng');
INSERT INTO `diem_do` VALUES ('88', 'Cầu Ninh Mỹ');
INSERT INTO `diem_do` VALUES ('29', 'Cầu Thần Lộ');
INSERT INTO `diem_do` VALUES ('94', 'Cầu Thống Đường');
INSERT INTO `diem_do` VALUES ('31', 'Cầu Vô Tình');
INSERT INTO `diem_do` VALUES ('38', 'Cầu Vòi');
INSERT INTO `diem_do` VALUES ('89', 'Cầu Đen');
INSERT INTO `diem_do` VALUES ('37', 'Cầu Đồng Lư');
INSERT INTO `diem_do` VALUES ('23', 'Cầy Dầu Thanh Khâm');
INSERT INTO `diem_do` VALUES ('21', 'Chợ Cầu');
INSERT INTO `diem_do` VALUES ('90', 'Chợ Trại');
INSERT INTO `diem_do` VALUES ('24', 'Chợ Trâu');
INSERT INTO `diem_do` VALUES ('7', 'Chợ Đập');
INSERT INTO `diem_do` VALUES ('28', 'Chợ Đường');
INSERT INTO `diem_do` VALUES ('8', 'Cồn');
INSERT INTO `diem_do` VALUES ('93', 'Cồn(10m)');
INSERT INTO `diem_do` VALUES ('36', 'Cống Khâm');
INSERT INTO `diem_do` VALUES ('125', 'Cổng Ra Bến Xe Nước Ngầm');
INSERT INTO `diem_do` VALUES ('67', 'CV Thủ Lệ');
INSERT INTO `diem_do` VALUES ('6', 'Dốc Hải Triều');
INSERT INTO `diem_do` VALUES ('48', 'Gầm Cao Tốc Guột');
INSERT INTO `diem_do` VALUES ('138', 'Giải Phóng');
INSERT INTO `diem_do` VALUES ('33', 'H.Nghị-Phía L.Q.Đôn');
INSERT INTO `diem_do` VALUES ('127', 'Hải Châu');
INSERT INTO `diem_do` VALUES ('5', 'Hải Hòa');
INSERT INTO `diem_do` VALUES ('128', 'Hải Ninh');
INSERT INTO `diem_do` VALUES ('10', 'Hải Tây');
INSERT INTO `diem_do` VALUES ('126', 'Hải Thịnh');
INSERT INTO `diem_do` VALUES ('25', 'Hải Vân');
INSERT INTO `diem_do` VALUES ('11', 'Hải Đông');
INSERT INTO `diem_do` VALUES ('72', 'HQV - Bia hơi Hải Xồm');
INSERT INTO `diem_do` VALUES ('75', 'HQV - C.Xăng CĐSP');
INSERT INTO `diem_do` VALUES ('73', 'HQV - C.Xăng N.Tân');
INSERT INTO `diem_do` VALUES ('74', 'HQV - Chợ N.Tân');
INSERT INTO `diem_do` VALUES ('76', 'HQV - HVCTQG');
INSERT INTO `diem_do` VALUES ('71', 'HQV - Ngõ 5');
INSERT INTO `diem_do` VALUES ('77', 'HQV - Đặng Thùy Trâm');
INSERT INTO `diem_do` VALUES ('4', 'HT-Cổng Sáng');
INSERT INTO `diem_do` VALUES ('2', 'HT-Trường cấp 3');
INSERT INTO `diem_do` VALUES ('103', 'HTM - Nguyễn Cơ Thạch');
INSERT INTO `diem_do` VALUES ('104', 'HTM - Nguyễn Đổng Chi');
INSERT INTO `diem_do` VALUES ('98', 'Keangnam');
INSERT INTO `diem_do` VALUES ('27', 'Lạc Quần-Cổng Chào');
INSERT INTO `diem_do` VALUES ('63', 'Láng - Cầu 361');
INSERT INTO `diem_do` VALUES ('65', 'Láng - Cầu Cót');
INSERT INTO `diem_do` VALUES ('60', 'Láng - Cầu Mọc');
INSERT INTO `diem_do` VALUES ('61', 'Láng - L.V.Lương');
INSERT INTO `diem_do` VALUES ('62', 'Láng - T.D.Hưng');
INSERT INTO `diem_do` VALUES ('66', 'Láng-Cầu Yên Hòa');
INSERT INTO `diem_do` VALUES ('132', 'LĐT - Giáp H.T.Mậu');
INSERT INTO `diem_do` VALUES ('102', 'LĐT - Giáp HTM');
INSERT INTO `diem_do` VALUES ('129', 'N.Hữu Thọ');
INSERT INTO `diem_do` VALUES ('54', 'N.Trãi - ATM BIDV');
INSERT INTO `diem_do` VALUES ('53', 'N.Trãi - Nguyễn Tuân');
INSERT INTO `diem_do` VALUES ('14', 'Ngã 3 Hải Hà');
INSERT INTO `diem_do` VALUES ('17', 'Ngã 3 Hải Thanh');
INSERT INTO `diem_do` VALUES ('86', 'Ngã 3 Trực Thái');
INSERT INTO `diem_do` VALUES ('92', 'Ngã 4 Hải Cường');
INSERT INTO `diem_do` VALUES ('26', 'Ngã 4 Hải Hậu');
INSERT INTO `diem_do` VALUES ('30', 'Ngặt Kéo');
INSERT INTO `diem_do` VALUES ('35', 'Ngặt Kéo Nam Hồng');
INSERT INTO `diem_do` VALUES ('122', 'Nghiêm Xuân Yêm');
INSERT INTO `diem_do` VALUES ('121', 'Ngõ 13 KDT');
INSERT INTO `diem_do` VALUES ('96', 'Ngõ 13 Khuất Duy Tiến');
INSERT INTO `diem_do` VALUES ('133', 'Ngõ 20 Phạm Hùng');
INSERT INTO `diem_do` VALUES ('119', 'Ngõ 289 KDT');
INSERT INTO `diem_do` VALUES ('131', 'Ngõ 66 H.T.Mậu');
INSERT INTO `diem_do` VALUES ('111', 'Nội Bài(Nội địa)');
INSERT INTO `diem_do` VALUES ('112', 'Nội Bìa(Quốc tế)');
INSERT INTO `diem_do` VALUES ('41', 'NĐ-Cầu S2');
INSERT INTO `diem_do` VALUES ('42', 'NĐ-Cầu Vượt NB');
INSERT INTO `diem_do` VALUES ('47', 'NĐ-Chợ Lợn');
INSERT INTO `diem_do` VALUES ('46', 'NĐ-Chợ Mạng');
INSERT INTO `diem_do` VALUES ('43', 'NĐ-Trần Huy Liệu');
INSERT INTO `diem_do` VALUES ('40', 'NĐ-Vũ Hữu Lợi');
INSERT INTO `diem_do` VALUES ('45', 'NĐ-Đầu Vôi');
INSERT INTO `diem_do` VALUES ('113', 'Phạm Hùng');
INSERT INTO `diem_do` VALUES ('100', 'Phạm Hùng - Duy Tân');
INSERT INTO `diem_do` VALUES ('99', 'Phạm Hùng - Đình Thôn');
INSERT INTO `diem_do` VALUES ('52', 'Pháp Vân');
INSERT INTO `diem_do` VALUES ('49', 'Phủ Lý');
INSERT INTO `diem_do` VALUES ('106', 'Phúc Diễn');
INSERT INTO `diem_do` VALUES ('79', 'PVĐ - Cổ Nhuế');
INSERT INTO `diem_do` VALUES ('81', 'PVĐ - CV Hòa Bình');
INSERT INTO `diem_do` VALUES ('115', 'PVĐ - D.K.Thiện');
INSERT INTO `diem_do` VALUES ('78', 'PVĐ - Metro');
INSERT INTO `diem_do` VALUES ('82', 'PVĐ - Ngõ 132');
INSERT INTO `diem_do` VALUES ('80', 'PVĐ - Resco');
INSERT INTO `diem_do` VALUES ('108', 'S.Thị Trần Anh');
INSERT INTO `diem_do` VALUES ('87', 'THPT  An Phúc');
INSERT INTO `diem_do` VALUES ('91', 'THPT B Hải Hậu');
INSERT INTO `diem_do` VALUES ('16', 'THPT T.Q.Tuấn');
INSERT INTO `diem_do` VALUES ('32', 'THPT Đoàn Kết');
INSERT INTO `diem_do` VALUES ('116', 'Tòa nhà Bắc Hà');
INSERT INTO `diem_do` VALUES ('118', 'Tòa Nhà FLC + 50m');
INSERT INTO `diem_do` VALUES ('50', 'Trạm Thu Phí Liêm Tuyền');
INSERT INTO `diem_do` VALUES ('51', 'Trạm Thường Tín');
INSERT INTO `diem_do` VALUES ('85', 'Trực Cường');
INSERT INTO `diem_do` VALUES ('84', 'Trực Phú');
INSERT INTO `diem_do` VALUES ('58', 'Trường Chinh');
INSERT INTO `diem_do` VALUES ('22', 'Trường THCS Hải Hưng');
INSERT INTO `diem_do` VALUES ('15', 'UBND Hải Hà');
INSERT INTO `diem_do` VALUES ('3', 'UBND Hải Thịnh');
INSERT INTO `diem_do` VALUES ('107', 'Văn Tiến Dũng');
INSERT INTO `diem_do` VALUES ('64', 'Viện Nhi TW');
INSERT INTO `diem_do` VALUES ('18', 'Yên Định');
INSERT INTO `diem_do` VALUES ('109', 'ĐH Công Nghiệp');
INSERT INTO `diem_do` VALUES ('83', 'ĐH Mỏ');
INSERT INTO `diem_do` VALUES ('114', 'ĐH Ngoại Ngữ');
INSERT INTO `diem_do` VALUES ('120', 'ĐH PCCC');
INSERT INTO `diem_do` VALUES ('110', 'ĐH Thành Đô');
INSERT INTO `diem_do` VALUES ('101', 'ĐH Thương Mại');
INSERT INTO `diem_do` VALUES ('1', 'Đưa đón TĐC');

-- ----------------------------
-- Table structure for don_hang
-- ----------------------------
DROP TABLE IF EXISTS `don_hang`;
CREATE TABLE `don_hang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `thoi_gian` datetime DEFAULT NULL,
  `so_ve` int(11) DEFAULT NULL,
  `trang_thai` int(11) DEFAULT NULL,
  `ma_tk` int(11) unsigned NOT NULL,
  `ghi_chu` text DEFAULT NULL,
  `li_do` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_donhang` (`ma_tk`),
  CONSTRAINT `fk_donhang` FOREIGN KEY (`ma_tk`) REFERENCES `users` (`id`)
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
INSERT INTO `don_hang` VALUES ('7', '2022-03-02 22:48:30', '1', '0', '14', null, null);

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for ghe_xe
-- ----------------------------
DROP TABLE IF EXISTS `ghe_xe`;
CREATE TABLE `ghe_xe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `thu_tu` int(11) NOT NULL,
  `ky_hieu` varchar(10) NOT NULL,
  `ma_lx` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_ghe_xe` (`ma_lx`,`thu_tu`),
  CONSTRAINT `fk_tx` FOREIGN KEY (`ma_lx`) REFERENCES `tai_khoan` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ghe_xe
-- ----------------------------
INSERT INTO `ghe_xe` VALUES ('1', '1', 'A1', '1');
INSERT INTO `ghe_xe` VALUES ('2', '2', 'A2', '1');
INSERT INTO `ghe_xe` VALUES ('3', '3', 'A3', '1');
INSERT INTO `ghe_xe` VALUES ('4', '4', 'A4', '1');
INSERT INTO `ghe_xe` VALUES ('5', '1', 'B1', '3');
INSERT INTO `ghe_xe` VALUES ('6', '2', 'B2', '3');
INSERT INTO `ghe_xe` VALUES ('7', '3', 'B3', '3');
INSERT INTO `ghe_xe` VALUES ('8', '4', 'B4', '3');
INSERT INTO `ghe_xe` VALUES ('9', '5', 'B5', '3');
INSERT INTO `ghe_xe` VALUES ('10', '6', 'B6', '3');
INSERT INTO `ghe_xe` VALUES ('11', '7', 'B7', '3');
INSERT INTO `ghe_xe` VALUES ('12', '8', 'B8', '3');
INSERT INTO `ghe_xe` VALUES ('13', '9', 'B9', '3');
INSERT INTO `ghe_xe` VALUES ('14', '1', 'C1', '4');
INSERT INTO `ghe_xe` VALUES ('15', '2', 'C2', '4');
INSERT INTO `ghe_xe` VALUES ('16', '3', 'C3', '4');
INSERT INTO `ghe_xe` VALUES ('17', '4', 'C4', '4');
INSERT INTO `ghe_xe` VALUES ('18', '5', 'C5', '4');
INSERT INTO `ghe_xe` VALUES ('19', '6', 'C6', '4');
INSERT INTO `ghe_xe` VALUES ('20', '7', 'C7', '4');
INSERT INTO `ghe_xe` VALUES ('21', '8', 'C8', '4');
INSERT INTO `ghe_xe` VALUES ('22', '9', 'C9', '4');
INSERT INTO `ghe_xe` VALUES ('23', '10', 'C10', '4');
INSERT INTO `ghe_xe` VALUES ('24', '11', 'C11', '4');
INSERT INTO `ghe_xe` VALUES ('25', '12', 'C12', '4');
INSERT INTO `ghe_xe` VALUES ('26', '13', 'C13', '4');
INSERT INTO `ghe_xe` VALUES ('27', '14', 'C14', '4');
INSERT INTO `ghe_xe` VALUES ('28', '15', 'C15', '4');

-- ----------------------------
-- Table structure for hinh_anh
-- ----------------------------
DROP TABLE IF EXISTS `hinh_anh`;
CREATE TABLE `hinh_anh` (
  `id` int(11) NOT NULL,
  `anh` text DEFAULT NULL,
  `ma_lx` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hinh_anh
-- ----------------------------

-- ----------------------------
-- Table structure for loai_xe
-- ----------------------------
DROP TABLE IF EXISTS `loai_xe`;
CREATE TABLE `loai_xe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten_lx` varchar(50) NOT NULL,
  `so_ghe` int(11) NOT NULL,
  `gia_ve` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `un_loaixe` (`ten_lx`,`so_ghe`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of loai_xe
-- ----------------------------
INSERT INTO `loai_xe` VALUES ('1', 'Xe 4 chỗ', '4', '200000');
INSERT INTO `loai_xe` VALUES ('2', 'Xe 7 chỗ', '7', '200000');
INSERT INTO `loai_xe` VALUES ('3', 'Xe 9 chỗ', '9', '170000');
INSERT INTO `loai_xe` VALUES ('4', 'Xe 16 chỗ', '15', '120000');
INSERT INTO `loai_xe` VALUES ('5', 'Xe 24 chỗ', '24', '110000');
INSERT INTO `loai_xe` VALUES ('6', 'Xe 29 chỗ', '29', '110000');
INSERT INTO `loai_xe` VALUES ('7', 'Xe 32 chỗ', '32', '100000');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('4', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('5', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('6', '2019_08_19_000000_create_failed_jobs_table', '1');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for tai_khoan
-- ----------------------------
DROP TABLE IF EXISTS `tai_khoan`;
CREATE TABLE `tai_khoan` (
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
-- Records of tai_khoan
-- ----------------------------
INSERT INTO `tai_khoan` VALUES ('1', 'Kim Long', 'long1502@gmail.com', 'quantri', '$2a$12$2hIDER9Lh8bWOwT4HzRUpO59AN1hmmNLUmIvEU1M5DIYThNgUgSGO', 'Hải Hậu', '0987888999');
INSERT INTO `tai_khoan` VALUES ('2', 'Tiến Phát', 'phat95@gmail.com', 'nhanvien', '123456', 'Hải Hậu', '0967085852');
INSERT INTO `tai_khoan` VALUES ('3', 'Trọng Hoàng', 'hoang98@gmail.com', 'laixe', '123456', 'Hải Hậu', '0838419095');
INSERT INTO `tai_khoan` VALUES ('4', 'Văn Thanh', 'thanhmeo@gmail.com', 'khachhang', '123456', 'Hải Hậu', '0986666888');
INSERT INTO `tai_khoan` VALUES ('5', 'Kim Yến', 'yen2101@gmail.com', 'khachhang', '123456', 'Hải Hậu', '0834767777');
INSERT INTO `tai_khoan` VALUES ('6', 'Văn Tài', 'tai91@gmail.com', 'laixe', '123456', 'Hải Hậu', '0987877666');
INSERT INTO `tai_khoan` VALUES ('7', 'Hoàng Hiếu', 'hieu@gmail.com', 'laixe', '123456', 'Hải Hậu', '0967432840');
INSERT INTO `tai_khoan` VALUES ('8', 'Văn Lâm', 'lam90@gmail.com', 'laixe', '123456', 'Hải Hậu', '0986777832');
INSERT INTO `tai_khoan` VALUES ('9', 'Mai Hiến', 'hienhoat@gmail.com', 'laixe', '123456', 'Hải Hậu', '083874777');
INSERT INTO `tai_khoan` VALUES ('10', 'Ngô Vinh', 'vinh0709@gmail.com', 'khachhang', '123456', 'Hải Hậu', '0986545678');
INSERT INTO `tai_khoan` VALUES ('11', 'Mai Thanh', 'thanh@gmail.com', 'khachhang', '123456', 'Hải Hậu', '0986356256');
INSERT INTO `tai_khoan` VALUES ('12', 'Thanh Chinh', 'chinh@gmail.com', 'khachhang', '123456', 'Hải Hậu', '083767877');
INSERT INTO `tai_khoan` VALUES ('13', 'Thuy Duyen', 'duyenngo@gmail.com', 'khachhang', '123456', 'Hải Hậu ', '083849878');
INSERT INTO `tai_khoan` VALUES ('14', 'Tien Dung', 'dungngo@gmail.com', 'khachhang', '123456', 'Hải Hậu', '0986765345');
INSERT INTO `tai_khoan` VALUES ('15', 'Mai Thu', 'thu@gmail.com', 'nhanvien', '123456', 'Hải Hậu', '0986736278');

-- ----------------------------
-- Table structure for tuyen
-- ----------------------------
DROP TABLE IF EXISTS `tuyen`;
CREATE TABLE `tuyen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten_tuyen` varchar(50) DEFAULT NULL,
  `diem_dau` varchar(50) DEFAULT NULL,
  `diem_cuoi` varchar(50) DEFAULT NULL,
  `diem_dn` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tuyen
-- ----------------------------
INSERT INTO `tuyen` VALUES ('1', 'Hải Thịnh - ĐH Mỏ', 'Hải Thịnh', 'ĐH Mỏ', 'Trạm dừng nghỉ Liêm Tuyền');
INSERT INTO `tuyen` VALUES ('2', 'Hải Thịnh - Mỏ/Nội Bài', 'Hải Thịnh', 'Nội bài', 'Trạm dừng nghỉ Thanh Khâm');
INSERT INTO `tuyen` VALUES ('3', 'Trực Phú - Nhổn/Nội Bài', 'Trực Phú', 'Nội Bài', 'Trạm dừng nghỉ Thanh Khâm');
INSERT INTO `tuyen` VALUES ('4', 'Hải Thịnh - Nhổn', 'Hải Thịnh', 'Nhổn', 'Trạm dừng nghỉ Thanh Khâm');

-- ----------------------------
-- Table structure for tuyen_diemdo
-- ----------------------------
DROP TABLE IF EXISTS `tuyen_diemdo`;
CREATE TABLE `tuyen_diemdo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ma_tuyen` int(11) NOT NULL,
  `ma_dd` int(11) NOT NULL,
  `chieu_xe` varchar(15) DEFAULT '',
  `loai_dd` varchar(15) DEFAULT NULL,
  `thoi_gian` time DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_dd` (`ma_dd`)
) ENGINE=InnoDB AUTO_INCREMENT=642 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tuyen_diemdo
-- ----------------------------
INSERT INTO `tuyen_diemdo` VALUES ('3', '1', '1', 'di', 'don', '03:00:00');
INSERT INTO `tuyen_diemdo` VALUES ('4', '1', '2', 'di', 'don', '03:02:00');
INSERT INTO `tuyen_diemdo` VALUES ('5', '1', '3', 'di', 'don', '03:05:00');
INSERT INTO `tuyen_diemdo` VALUES ('6', '1', '4', 'di', 'don', '03:10:00');
INSERT INTO `tuyen_diemdo` VALUES ('8', '1', '6', 'di', 'don', '03:18:00');
INSERT INTO `tuyen_diemdo` VALUES ('9', '1', '7', 'di', 'don', '03:21:00');
INSERT INTO `tuyen_diemdo` VALUES ('10', '1', '8', 'di', 'don', '03:25:00');
INSERT INTO `tuyen_diemdo` VALUES ('11', '1', '9', 'di', 'don', '03:27:00');
INSERT INTO `tuyen_diemdo` VALUES ('12', '1', '10', 'di', 'don', '03:30:00');
INSERT INTO `tuyen_diemdo` VALUES ('13', '1', '11', 'di', 'don', '03:32:00');
INSERT INTO `tuyen_diemdo` VALUES ('14', '1', '12', 'di', 'don', '03:37:00');
INSERT INTO `tuyen_diemdo` VALUES ('15', '1', '13', 'di', 'don', '03:39:00');
INSERT INTO `tuyen_diemdo` VALUES ('16', '1', '14', 'di', 'don', '03:41:00');
INSERT INTO `tuyen_diemdo` VALUES ('17', '1', '15', 'di', 'don', '03:43:00');
INSERT INTO `tuyen_diemdo` VALUES ('18', '1', '16', 'di', 'don', '03:45:00');
INSERT INTO `tuyen_diemdo` VALUES ('19', '1', '17', 'di', 'don', '03:48:00');
INSERT INTO `tuyen_diemdo` VALUES ('20', '1', '18', 'di', 'don', '03:50:00');
INSERT INTO `tuyen_diemdo` VALUES ('21', '1', '19', 'di', 'don', '03:52:00');
INSERT INTO `tuyen_diemdo` VALUES ('22', '1', '20', 'di', 'don', '03:54:00');
INSERT INTO `tuyen_diemdo` VALUES ('23', '1', '21', 'di', 'don', '03:55:00');
INSERT INTO `tuyen_diemdo` VALUES ('24', '1', '22', 'di', 'don', '03:56:00');
INSERT INTO `tuyen_diemdo` VALUES ('25', '1', '23', 'di', 'don', '03:57:00');
INSERT INTO `tuyen_diemdo` VALUES ('26', '1', '24', 'di', 'don', '03:58:00');
INSERT INTO `tuyen_diemdo` VALUES ('27', '1', '25', 'di', 'don', '04:00:00');
INSERT INTO `tuyen_diemdo` VALUES ('28', '1', '26', 'di', 'don', '04:01:00');
INSERT INTO `tuyen_diemdo` VALUES ('29', '1', '27', 'di', 'don', '04:02:00');
INSERT INTO `tuyen_diemdo` VALUES ('30', '1', '28', 'di', 'don', '04:03:00');
INSERT INTO `tuyen_diemdo` VALUES ('31', '1', '29', 'di', 'don', '04:05:00');
INSERT INTO `tuyen_diemdo` VALUES ('32', '1', '30', 'di', 'don', '04:07:00');
INSERT INTO `tuyen_diemdo` VALUES ('33', '1', '31', 'di', 'don', '04:09:00');
INSERT INTO `tuyen_diemdo` VALUES ('34', '1', '32', 'di', 'don', '04:10:00');
INSERT INTO `tuyen_diemdo` VALUES ('35', '1', '33', 'di', 'don', '04:11:00');
INSERT INTO `tuyen_diemdo` VALUES ('37', '1', '35', 'di', 'don', '04:15:00');
INSERT INTO `tuyen_diemdo` VALUES ('38', '1', '36', 'di', 'don', '04:16:00');
INSERT INTO `tuyen_diemdo` VALUES ('39', '1', '37', 'di', 'don', '04:17:00');
INSERT INTO `tuyen_diemdo` VALUES ('40', '1', '38', 'di', 'don', '04:19:00');
INSERT INTO `tuyen_diemdo` VALUES ('41', '1', '39', 'di', 'don', '04:20:00');
INSERT INTO `tuyen_diemdo` VALUES ('42', '1', '40', 'di', 'don', '04:21:00');
INSERT INTO `tuyen_diemdo` VALUES ('43', '1', '41', 'di', 'don', '04:22:00');
INSERT INTO `tuyen_diemdo` VALUES ('44', '1', '42', 'di', 'don', '04:24:00');
INSERT INTO `tuyen_diemdo` VALUES ('45', '1', '43', 'di', 'don', '04:26:00');
INSERT INTO `tuyen_diemdo` VALUES ('46', '1', '44', 'di', 'don', '04:28:00');
INSERT INTO `tuyen_diemdo` VALUES ('47', '1', '45', 'di', 'don', '04:33:00');
INSERT INTO `tuyen_diemdo` VALUES ('48', '1', '46', 'di', 'don', '04:43:00');
INSERT INTO `tuyen_diemdo` VALUES ('49', '1', '50', 'di', 'tra', '05:18:00');
INSERT INTO `tuyen_diemdo` VALUES ('50', '1', '51', 'di', 'tra', '05:28:00');
INSERT INTO `tuyen_diemdo` VALUES ('51', '1', '52', 'di', 'tra', '05:33:00');
INSERT INTO `tuyen_diemdo` VALUES ('52', '1', '53', 'di', 'tra', '05:35:00');
INSERT INTO `tuyen_diemdo` VALUES ('53', '1', '54', 'di', 'tra', '05:38:00');
INSERT INTO `tuyen_diemdo` VALUES ('54', '1', '55', 'di', 'tra', '05:40:00');
INSERT INTO `tuyen_diemdo` VALUES ('55', '1', '56', 'di', 'tra', '05:45:00');
INSERT INTO `tuyen_diemdo` VALUES ('56', '1', '57', 'di', 'tra', '05:48:00');
INSERT INTO `tuyen_diemdo` VALUES ('57', '1', '58', 'di', 'tra', '05:51:00');
INSERT INTO `tuyen_diemdo` VALUES ('59', '1', '60', 'di', 'tra', '06:01:00');
INSERT INTO `tuyen_diemdo` VALUES ('60', '1', '61', 'di', 'tra', '06:02:00');
INSERT INTO `tuyen_diemdo` VALUES ('61', '1', '62', 'di', 'tra', '06:04:00');
INSERT INTO `tuyen_diemdo` VALUES ('62', '1', '63', 'di', 'tra', '06:05:00');
INSERT INTO `tuyen_diemdo` VALUES ('63', '1', '64', 'di', 'tra', '06:06:00');
INSERT INTO `tuyen_diemdo` VALUES ('64', '1', '65', 'di', 'tra', '06:07:00');
INSERT INTO `tuyen_diemdo` VALUES ('65', '1', '66', 'di', 'tra', '06:09:00');
INSERT INTO `tuyen_diemdo` VALUES ('66', '1', '67', 'di', 'tra', '06:11:00');
INSERT INTO `tuyen_diemdo` VALUES ('68', '1', '69', 'di', 'tra', '06:13:00');
INSERT INTO `tuyen_diemdo` VALUES ('69', '1', '70', 'di', 'tra', '06:14:00');
INSERT INTO `tuyen_diemdo` VALUES ('70', '1', '71', 'di', 'tra', '06:15:00');
INSERT INTO `tuyen_diemdo` VALUES ('71', '1', '72', 'di', 'tra', '06:16:00');
INSERT INTO `tuyen_diemdo` VALUES ('72', '1', '73', 'di', 'tra', '06:17:00');
INSERT INTO `tuyen_diemdo` VALUES ('73', '1', '74', 'di', 'tra', '06:18:00');
INSERT INTO `tuyen_diemdo` VALUES ('74', '1', '75', 'di', 'tra', '06:20:00');
INSERT INTO `tuyen_diemdo` VALUES ('75', '1', '76', 'di', 'tra', '06:21:00');
INSERT INTO `tuyen_diemdo` VALUES ('76', '1', '77', 'di', 'tra', '06:22:00');
INSERT INTO `tuyen_diemdo` VALUES ('77', '1', '78', 'di', 'tra', '06:23:00');
INSERT INTO `tuyen_diemdo` VALUES ('78', '1', '79', 'di', 'tra', '06:24:00');
INSERT INTO `tuyen_diemdo` VALUES ('79', '1', '80', 'di', 'tra', '06:25:00');
INSERT INTO `tuyen_diemdo` VALUES ('80', '1', '81', 'di', 'tra', '06:28:00');
INSERT INTO `tuyen_diemdo` VALUES ('81', '1', '82', 'di', 'tra', '06:29:00');
INSERT INTO `tuyen_diemdo` VALUES ('82', '1', '83', 'di', 'tra', '06:31:00');
INSERT INTO `tuyen_diemdo` VALUES ('83', '1', '83', 've', 'don', '06:45:00');
INSERT INTO `tuyen_diemdo` VALUES ('84', '1', '82', 've', 'don', '06:46:00');
INSERT INTO `tuyen_diemdo` VALUES ('85', '1', '81', 've', 'don', '06:47:00');
INSERT INTO `tuyen_diemdo` VALUES ('86', '1', '80', 've', 'don', '06:49:00');
INSERT INTO `tuyen_diemdo` VALUES ('87', '1', '79', 've', 'don', '06:50:00');
INSERT INTO `tuyen_diemdo` VALUES ('88', '1', '78', 've', 'don', '06:51:00');
INSERT INTO `tuyen_diemdo` VALUES ('89', '1', '77', 've', 'don', '06:52:00');
INSERT INTO `tuyen_diemdo` VALUES ('90', '1', '76', 've', 'don', '06:54:00');
INSERT INTO `tuyen_diemdo` VALUES ('91', '1', '75', 've', 'don', '06:57:00');
INSERT INTO `tuyen_diemdo` VALUES ('92', '1', '74', 've', 'don', '06:58:00');
INSERT INTO `tuyen_diemdo` VALUES ('93', '1', '73', 've', 'don', '06:59:00');
INSERT INTO `tuyen_diemdo` VALUES ('94', '1', '72', 've', 'don', '07:02:00');
INSERT INTO `tuyen_diemdo` VALUES ('95', '1', '71', 've', 'don', '07:04:00');
INSERT INTO `tuyen_diemdo` VALUES ('96', '1', '70', 've', 'don', '07:05:00');
INSERT INTO `tuyen_diemdo` VALUES ('97', '1', '69', 've', 'don', '07:06:00');
INSERT INTO `tuyen_diemdo` VALUES ('99', '1', '67', 've', 'don', '07:09:00');
INSERT INTO `tuyen_diemdo` VALUES ('100', '1', '66', 've', 'don', '07:11:00');
INSERT INTO `tuyen_diemdo` VALUES ('101', '1', '65', 've', 'don', '07:12:00');
INSERT INTO `tuyen_diemdo` VALUES ('102', '1', '64', 've', 'don', '07:14:00');
INSERT INTO `tuyen_diemdo` VALUES ('103', '1', '63', 've', 'don', '07:15:00');
INSERT INTO `tuyen_diemdo` VALUES ('104', '1', '62', 've', 'don', '07:16:00');
INSERT INTO `tuyen_diemdo` VALUES ('105', '1', '61', 've', 'don', '07:17:00');
INSERT INTO `tuyen_diemdo` VALUES ('106', '1', '60', 've', 'don', '07:18:00');
INSERT INTO `tuyen_diemdo` VALUES ('108', '1', '55', 've', 'don', '07:22:00');
INSERT INTO `tuyen_diemdo` VALUES ('109', '1', '54', 've', 'don', '07:25:00');
INSERT INTO `tuyen_diemdo` VALUES ('110', '1', '53', 've', 'don', '07:29:00');
INSERT INTO `tuyen_diemdo` VALUES ('111', '1', '47', 've', 'tra', '08:29:00');
INSERT INTO `tuyen_diemdo` VALUES ('112', '1', '46', 've', 'tra', '08:34:00');
INSERT INTO `tuyen_diemdo` VALUES ('113', '1', '45', 've', 'tra', '08:39:00');
INSERT INTO `tuyen_diemdo` VALUES ('114', '1', '44', 've', 'tra', '08:44:00');
INSERT INTO `tuyen_diemdo` VALUES ('115', '1', '43', 've', 'tra', '08:45:00');
INSERT INTO `tuyen_diemdo` VALUES ('116', '1', '42', 've', 'tra', '08:46:00');
INSERT INTO `tuyen_diemdo` VALUES ('117', '1', '41', 've', 'tra', '08:47:00');
INSERT INTO `tuyen_diemdo` VALUES ('118', '1', '40', 've', 'tra', '08:49:00');
INSERT INTO `tuyen_diemdo` VALUES ('119', '1', '39', 've', 'tra', '08:50:00');
INSERT INTO `tuyen_diemdo` VALUES ('120', '1', '38', 've', 'tra', '08:51:00');
INSERT INTO `tuyen_diemdo` VALUES ('121', '1', '37', 've', 'tra', '08:53:00');
INSERT INTO `tuyen_diemdo` VALUES ('122', '1', '36', 've', 'tra', '08:54:00');
INSERT INTO `tuyen_diemdo` VALUES ('123', '1', '35', 've', 'tra', '08:55:00');
INSERT INTO `tuyen_diemdo` VALUES ('125', '1', '33', 've', 'tra', '08:58:00');
INSERT INTO `tuyen_diemdo` VALUES ('126', '1', '32', 've', 'tra', '09:03:00');
INSERT INTO `tuyen_diemdo` VALUES ('127', '1', '31', 've', 'tra', '09:08:00');
INSERT INTO `tuyen_diemdo` VALUES ('128', '1', '30', 've', 'tra', '09:13:00');
INSERT INTO `tuyen_diemdo` VALUES ('129', '1', '29', 've', 'tra', '09:15:00');
INSERT INTO `tuyen_diemdo` VALUES ('130', '1', '28', 've', 'tra', '09:16:00');
INSERT INTO `tuyen_diemdo` VALUES ('131', '1', '27', 've', 'tra', '09:24:00');
INSERT INTO `tuyen_diemdo` VALUES ('132', '1', '26', 've', 'tra', '09:26:00');
INSERT INTO `tuyen_diemdo` VALUES ('133', '1', '25', 've', 'tra', '09:28:00');
INSERT INTO `tuyen_diemdo` VALUES ('134', '1', '24', 've', 'tra', '09:32:00');
INSERT INTO `tuyen_diemdo` VALUES ('135', '1', '23', 've', 'tra', '09:33:00');
INSERT INTO `tuyen_diemdo` VALUES ('136', '1', '22', 've', 'tra', '09:34:00');
INSERT INTO `tuyen_diemdo` VALUES ('137', '1', '21', 've', 'tra', '09:36:00');
INSERT INTO `tuyen_diemdo` VALUES ('138', '1', '20', 've', 'tra', '09:37:00');
INSERT INTO `tuyen_diemdo` VALUES ('139', '1', '19', 've', 'tra', '09:40:00');
INSERT INTO `tuyen_diemdo` VALUES ('140', '1', '18', 've', 'tra', '09:41:00');
INSERT INTO `tuyen_diemdo` VALUES ('141', '1', '17', 've', 'tra', '09:46:00');
INSERT INTO `tuyen_diemdo` VALUES ('142', '1', '16', 've', 'tra', '09:47:00');
INSERT INTO `tuyen_diemdo` VALUES ('143', '1', '15', 've', 'tra', '09:48:00');
INSERT INTO `tuyen_diemdo` VALUES ('144', '1', '14', 've', 'tra', '09:49:00');
INSERT INTO `tuyen_diemdo` VALUES ('145', '1', '13', 've', 'tra', '09:51:00');
INSERT INTO `tuyen_diemdo` VALUES ('146', '1', '12', 've', 'tra', '09:54:00');
INSERT INTO `tuyen_diemdo` VALUES ('147', '1', '11', 've', 'tra', '09:59:00');
INSERT INTO `tuyen_diemdo` VALUES ('148', '1', '10', 've', 'tra', '10:02:00');
INSERT INTO `tuyen_diemdo` VALUES ('149', '1', '9', 've', 'tra', '10:04:00');
INSERT INTO `tuyen_diemdo` VALUES ('150', '1', '8', 've', 'tra', '10:06:00');
INSERT INTO `tuyen_diemdo` VALUES ('151', '1', '7', 've', 'tra', '10:09:00');
INSERT INTO `tuyen_diemdo` VALUES ('152', '1', '6', 've', 'tra', '10:12:00');
INSERT INTO `tuyen_diemdo` VALUES ('154', '1', '4', 've', 'tra', '10:20:00');
INSERT INTO `tuyen_diemdo` VALUES ('155', '1', '3', 've', 'tra', '10:23:00');
INSERT INTO `tuyen_diemdo` VALUES ('156', '1', '2', 've', 'tra', '10:25:00');
INSERT INTO `tuyen_diemdo` VALUES ('157', '2', '126', 'di', 'don', '05:00:00');
INSERT INTO `tuyen_diemdo` VALUES ('160', '2', '127', 'di', 'don', '05:05:00');
INSERT INTO `tuyen_diemdo` VALUES ('161', '2', '128', 'di', 'don', '05:10:00');
INSERT INTO `tuyen_diemdo` VALUES ('162', '2', '89', 'di', 'don', '05:15:00');
INSERT INTO `tuyen_diemdo` VALUES ('163', '2', '90', 'di', 'don', '05:18:00');
INSERT INTO `tuyen_diemdo` VALUES ('164', '2', '91', 'di', 'don', '05:21:00');
INSERT INTO `tuyen_diemdo` VALUES ('165', '2', '92', 'di', 'don', '05:25:00');
INSERT INTO `tuyen_diemdo` VALUES ('166', '2', '93', 'di', 'don', '05:30:00');
INSERT INTO `tuyen_diemdo` VALUES ('167', '2', '94', 'di', 'don', '05:35:00');
INSERT INTO `tuyen_diemdo` VALUES ('168', '2', '95', 'di', 'don', '05:40:00');
INSERT INTO `tuyen_diemdo` VALUES ('169', '2', '18', 'di', 'don', '05:45:00');
INSERT INTO `tuyen_diemdo` VALUES ('170', '2', '19', 'di', 'don', '05:47:00');
INSERT INTO `tuyen_diemdo` VALUES ('171', '2', '20', 'di', 'don', '05:49:00');
INSERT INTO `tuyen_diemdo` VALUES ('172', '2', '21', 'di', 'don', '05:50:00');
INSERT INTO `tuyen_diemdo` VALUES ('173', '2', '22', 'di', 'don', '05:51:00');
INSERT INTO `tuyen_diemdo` VALUES ('174', '2', '23', 'di', 'don', '05:52:00');
INSERT INTO `tuyen_diemdo` VALUES ('175', '2', '24', 'di', 'don', '05:53:00');
INSERT INTO `tuyen_diemdo` VALUES ('176', '2', '25', 'di', 'don', '05:54:00');
INSERT INTO `tuyen_diemdo` VALUES ('177', '2', '26', 'di', 'don', '05:55:00');
INSERT INTO `tuyen_diemdo` VALUES ('178', '2', '27', 'di', 'don', '05:57:00');
INSERT INTO `tuyen_diemdo` VALUES ('179', '2', '28', 'di', 'don', '06:01:00');
INSERT INTO `tuyen_diemdo` VALUES ('180', '2', '29', 'di', 'don', '06:05:00');
INSERT INTO `tuyen_diemdo` VALUES ('181', '2', '30', 'di', 'don', '06:07:00');
INSERT INTO `tuyen_diemdo` VALUES ('182', '2', '31', 'di', 'don', '06:08:00');
INSERT INTO `tuyen_diemdo` VALUES ('183', '2', '32', 'di', 'don', '06:12:00');
INSERT INTO `tuyen_diemdo` VALUES ('184', '2', '33', 'di', 'don', '06:13:00');
INSERT INTO `tuyen_diemdo` VALUES ('185', '2', '34', 'di', 'don', '06:14:00');
INSERT INTO `tuyen_diemdo` VALUES ('186', '2', '37', 'di', 'don', '06:15:00');
INSERT INTO `tuyen_diemdo` VALUES ('187', '2', '38', 'di', 'don', '06:16:00');
INSERT INTO `tuyen_diemdo` VALUES ('188', '2', '39', 'di', 'don', '06:18:00');
INSERT INTO `tuyen_diemdo` VALUES ('189', '2', '40', 'di', 'don', '06:20:00');
INSERT INTO `tuyen_diemdo` VALUES ('190', '2', '41', 'di', 'don', '06:22:00');
INSERT INTO `tuyen_diemdo` VALUES ('191', '2', '42', 'di', 'don', '06:24:00');
INSERT INTO `tuyen_diemdo` VALUES ('192', '2', '43', 'di', 'don', '06:26:00');
INSERT INTO `tuyen_diemdo` VALUES ('193', '2', '44', 'di', 'don', '06:28:00');
INSERT INTO `tuyen_diemdo` VALUES ('194', '2', '45', 'di', 'don', '06:30:00');
INSERT INTO `tuyen_diemdo` VALUES ('195', '2', '46', 'di', 'don', '06:35:00');
INSERT INTO `tuyen_diemdo` VALUES ('196', '2', '47', 'di', 'don', '06:40:00');
INSERT INTO `tuyen_diemdo` VALUES ('197', '2', '129', 'di', 'tra', '07:55:00');
INSERT INTO `tuyen_diemdo` VALUES ('198', '2', '130', 'di', 'tra', '08:00:00');
INSERT INTO `tuyen_diemdo` VALUES ('199', '2', '122', 'di', 'tra', '08:10:00');
INSERT INTO `tuyen_diemdo` VALUES ('200', '2', '96', 'di', 'tra', '08:15:00');
INSERT INTO `tuyen_diemdo` VALUES ('201', '2', '97', 'di', 'tra', '08:20:00');
INSERT INTO `tuyen_diemdo` VALUES ('202', '2', '98', 'di', 'tra', '08:23:00');
INSERT INTO `tuyen_diemdo` VALUES ('203', '2', '99', 'di', 'tra', '08:25:00');
INSERT INTO `tuyen_diemdo` VALUES ('204', '2', '114', 'di', 'tra', '08:27:00');
INSERT INTO `tuyen_diemdo` VALUES ('205', '2', '130', 'di', 'tra', '08:32:00');
INSERT INTO `tuyen_diemdo` VALUES ('206', '2', '78', 'di', 'tra', '08:35:00');
INSERT INTO `tuyen_diemdo` VALUES ('207', '2', '79', 'di', 'tra', '08:37:00');
INSERT INTO `tuyen_diemdo` VALUES ('208', '2', '80', 'di', 'tra', '08:39:00');
INSERT INTO `tuyen_diemdo` VALUES ('209', '2', '81', 'di', 'tra', '08:41:00');
INSERT INTO `tuyen_diemdo` VALUES ('210', '2', '82', 'di', 'tra', '08:43:00');
INSERT INTO `tuyen_diemdo` VALUES ('211', '2', '83', 'đi', 'tra', '08:45:00');
INSERT INTO `tuyen_diemdo` VALUES ('212', '2', '83', 've', 'don', '09:15:00');
INSERT INTO `tuyen_diemdo` VALUES ('213', '2', '82', 've', 'don', '09:18:00');
INSERT INTO `tuyen_diemdo` VALUES ('214', '2', '81', 've', 'don', '09:20:00');
INSERT INTO `tuyen_diemdo` VALUES ('215', '2', '80', 've', 'don', '09:22:00');
INSERT INTO `tuyen_diemdo` VALUES ('216', '2', '78', 've', 'don', '09:25:00');
INSERT INTO `tuyen_diemdo` VALUES ('217', '2', '130', 've', 'don', '09:28:00');
INSERT INTO `tuyen_diemdo` VALUES ('218', '2', '114', 've', 'don', '09:30:00');
INSERT INTO `tuyen_diemdo` VALUES ('219', '2', '131', 've', 'don', '09:31:00');
INSERT INTO `tuyen_diemdo` VALUES ('220', '2', '132', 've', 'don', '09:34:00');
INSERT INTO `tuyen_diemdo` VALUES ('221', '2', '101', 've', 'don', '09:35:00');
INSERT INTO `tuyen_diemdo` VALUES ('222', '2', '133', 've', 'don', '09:37:00');
INSERT INTO `tuyen_diemdo` VALUES ('223', '2', '99', 've', 'don', '09:40:00');
INSERT INTO `tuyen_diemdo` VALUES ('224', '2', '98', 've', 'don', '09:42:00');
INSERT INTO `tuyen_diemdo` VALUES ('225', '2', '96', 've', 'don', '09:57:00');
INSERT INTO `tuyen_diemdo` VALUES ('226', '2', '122', 've', 'don', '10:07:00');
INSERT INTO `tuyen_diemdo` VALUES ('227', '2', '123', 've', 'don', '10:12:00');
INSERT INTO `tuyen_diemdo` VALUES ('228', '2', '137', 've', 'tra', '11:07:00');
INSERT INTO `tuyen_diemdo` VALUES ('229', '2', '47', 've', 'tra', '11:12:00');
INSERT INTO `tuyen_diemdo` VALUES ('230', '2', '46', 've', 'tra', '11:17:00');
INSERT INTO `tuyen_diemdo` VALUES ('231', '2', '45', 've', 'tra', '11:22:00');
INSERT INTO `tuyen_diemdo` VALUES ('232', '2', '44', 've', 'tra', '11:27:00');
INSERT INTO `tuyen_diemdo` VALUES ('233', '2', '43', 've', 'tra', '11:29:00');
INSERT INTO `tuyen_diemdo` VALUES ('234', '2', '42', 've', 'tra', '11:31:00');
INSERT INTO `tuyen_diemdo` VALUES ('235', '2', '41', 've', 'tra', '11:33:00');
INSERT INTO `tuyen_diemdo` VALUES ('236', '2', '40', 've', 'tra', '11:37:00');
INSERT INTO `tuyen_diemdo` VALUES ('237', '2', '39', 've', 'tra', '11:40:00');
INSERT INTO `tuyen_diemdo` VALUES ('238', '2', '38', 've', 'tra', '11:43:00');
INSERT INTO `tuyen_diemdo` VALUES ('239', '2', '37', 've', 'tra', '11:46:00');
INSERT INTO `tuyen_diemdo` VALUES ('240', '2', '36', 've', 'tra', '11:49:00');
INSERT INTO `tuyen_diemdo` VALUES ('241', '2', '35', 've', 'tra', '11:52:00');
INSERT INTO `tuyen_diemdo` VALUES ('242', '2', '34', 've', 'tra', '11:54:00');
INSERT INTO `tuyen_diemdo` VALUES ('243', '2', '33', 've', 'tra', '11:57:00');
INSERT INTO `tuyen_diemdo` VALUES ('244', '2', '31', 've', 'tra', '12:00:00');
INSERT INTO `tuyen_diemdo` VALUES ('245', '2', '30', 've', 'tra', '12:03:00');
INSERT INTO `tuyen_diemdo` VALUES ('246', '2', '28', 've', 'tra', '12:08:00');
INSERT INTO `tuyen_diemdo` VALUES ('247', '2', '27', 've', 'tra', '12:10:00');
INSERT INTO `tuyen_diemdo` VALUES ('248', '2', '26', 've', 'tra', '12:12:00');
INSERT INTO `tuyen_diemdo` VALUES ('249', '2', '25', 've', 'tra', '12:14:00');
INSERT INTO `tuyen_diemdo` VALUES ('250', '2', '24', 've', 'tra', '12:16:00');
INSERT INTO `tuyen_diemdo` VALUES ('251', '2', '23', 've', 'tra', '12:18:00');
INSERT INTO `tuyen_diemdo` VALUES ('252', '2', '22', 've', 'tra', '12:19:00');
INSERT INTO `tuyen_diemdo` VALUES ('253', '2', '21', 've', 'tra', '12:20:00');
INSERT INTO `tuyen_diemdo` VALUES ('254', '2', '20', 've', 'tra', '12:21:00');
INSERT INTO `tuyen_diemdo` VALUES ('255', '2', '19', 've', 'tra', '12:22:00');
INSERT INTO `tuyen_diemdo` VALUES ('256', '2', '18', 've', 'tra', '12:23:00');
INSERT INTO `tuyen_diemdo` VALUES ('257', '2', '95', 've', 'tra', '12:24:00');
INSERT INTO `tuyen_diemdo` VALUES ('258', '2', '94', 've', 'tra', '12:26:00');
INSERT INTO `tuyen_diemdo` VALUES ('259', '2', '8', 've', 'tra', '12:28:00');
INSERT INTO `tuyen_diemdo` VALUES ('260', '2', '92', 've', 'tra', '12:31:00');
INSERT INTO `tuyen_diemdo` VALUES ('261', '2', '91', 've', 'tra', '12:36:00');
INSERT INTO `tuyen_diemdo` VALUES ('262', '2', '90', 've', 'tra', '12:38:00');
INSERT INTO `tuyen_diemdo` VALUES ('263', '2', '89', 've', 'tra', '12:41:00');
INSERT INTO `tuyen_diemdo` VALUES ('264', '2', '128', 've', 'tra', '12:44:00');
INSERT INTO `tuyen_diemdo` VALUES ('265', '2', '127', 've', 'tra', '12:49:00');
INSERT INTO `tuyen_diemdo` VALUES ('266', '2', '126', 've', 'tra', '12:54:00');
INSERT INTO `tuyen_diemdo` VALUES ('269', '3', '1', 'di', 'don', '03:00:00');
INSERT INTO `tuyen_diemdo` VALUES ('270', '3', '84', 'di', 'don', '03:05:00');
INSERT INTO `tuyen_diemdo` VALUES ('271', '3', '85', 'di', 'don', '03:08:00');
INSERT INTO `tuyen_diemdo` VALUES ('272', '3', '86', 'di', 'don', '03:10:00');
INSERT INTO `tuyen_diemdo` VALUES ('273', '3', '87', 'di', 'don', '03:13:00');
INSERT INTO `tuyen_diemdo` VALUES ('274', '3', '88', 'di', 'don', '03:15:00');
INSERT INTO `tuyen_diemdo` VALUES ('275', '3', '89', 'di', 'don', '03:20:00');
INSERT INTO `tuyen_diemdo` VALUES ('276', '3', '90', 'di', 'don', '03:23:00');
INSERT INTO `tuyen_diemdo` VALUES ('277', '3', '91', 'di', 'don', '03:25:00');
INSERT INTO `tuyen_diemdo` VALUES ('278', '3', '92', 'di', 'don', '03:30:00');
INSERT INTO `tuyen_diemdo` VALUES ('279', '3', '93', 'di', 'don', '03:35:00');
INSERT INTO `tuyen_diemdo` VALUES ('280', '3', '94', 'di', 'don', '03:40:00');
INSERT INTO `tuyen_diemdo` VALUES ('281', '3', '95', 'di', 'don', '03:45:00');
INSERT INTO `tuyen_diemdo` VALUES ('282', '3', '18', 'di', 'don', '03:50:00');
INSERT INTO `tuyen_diemdo` VALUES ('283', '3', '19', 'di', 'don', '03:52:00');
INSERT INTO `tuyen_diemdo` VALUES ('284', '3', '20', 'di', 'don', '03:54:00');
INSERT INTO `tuyen_diemdo` VALUES ('285', '3', '21', 'di', 'don', '03:55:00');
INSERT INTO `tuyen_diemdo` VALUES ('286', '3', '22', 'di', 'don', '03:56:00');
INSERT INTO `tuyen_diemdo` VALUES ('287', '3', '24', 'di', 'don', '03:57:00');
INSERT INTO `tuyen_diemdo` VALUES ('288', '3', '25', 'di', 'don', '03:58:00');
INSERT INTO `tuyen_diemdo` VALUES ('289', '3', '26', 'di', 'don', '04:00:00');
INSERT INTO `tuyen_diemdo` VALUES ('290', '3', '27', 'di', 'don', '04:02:00');
INSERT INTO `tuyen_diemdo` VALUES ('291', '3', '28', 'di', 'don', '04:06:00');
INSERT INTO `tuyen_diemdo` VALUES ('292', '3', '29', 'di', 'don', '04:10:00');
INSERT INTO `tuyen_diemdo` VALUES ('293', '3', '30', 'di', 'don', '04:11:00');
INSERT INTO `tuyen_diemdo` VALUES ('294', '3', '31', 'di', 'don', '04:12:00');
INSERT INTO `tuyen_diemdo` VALUES ('295', '3', '32', 'di', 'don', '04:13:00');
INSERT INTO `tuyen_diemdo` VALUES ('296', '3', '34', 'di', 'don', '04:17:00');
INSERT INTO `tuyen_diemdo` VALUES ('297', '3', '35', 'di', 'don', '04:18:00');
INSERT INTO `tuyen_diemdo` VALUES ('298', '3', '36', 'di', 'don', '04:19:00');
INSERT INTO `tuyen_diemdo` VALUES ('299', '3', '37', 'di', 'don', '04:20:00');
INSERT INTO `tuyen_diemdo` VALUES ('300', '3', '38', 'di', 'don', '04:21:00');
INSERT INTO `tuyen_diemdo` VALUES ('301', '3', '39', 'di', 'don', '04:23:00');
INSERT INTO `tuyen_diemdo` VALUES ('302', '3', '40', 'di', 'don', '04:25:00');
INSERT INTO `tuyen_diemdo` VALUES ('303', '3', '41', 'di', 'don', '04:27:00');
INSERT INTO `tuyen_diemdo` VALUES ('304', '3', '42', 'di', 'don', '04:29:00');
INSERT INTO `tuyen_diemdo` VALUES ('305', '3', '43', 'di', 'don', '04:32:00');
INSERT INTO `tuyen_diemdo` VALUES ('306', '3', '44', 'di', 'don', '04:35:00');
INSERT INTO `tuyen_diemdo` VALUES ('307', '3', '45', 'di', 'don', '04:40:00');
INSERT INTO `tuyen_diemdo` VALUES ('308', '3', '46', 'di', 'don', '04:45:00');
INSERT INTO `tuyen_diemdo` VALUES ('309', '3', '47', 'di', 'don', '04:50:00');
INSERT INTO `tuyen_diemdo` VALUES ('310', '3', '137', 'di', 'don', '04:55:00');
INSERT INTO `tuyen_diemdo` VALUES ('311', '3', '121', 'di', 'tra', '06:00:00');
INSERT INTO `tuyen_diemdo` VALUES ('312', '3', '97', 'di', 'tra', '06:10:00');
INSERT INTO `tuyen_diemdo` VALUES ('313', '3', '98', 'di', 'tra', '06:15:00');
INSERT INTO `tuyen_diemdo` VALUES ('314', '3', '99', 'di', 'tra', '06:16:00');
INSERT INTO `tuyen_diemdo` VALUES ('315', '3', '100', 'di', 'tra', '06:18:00');
INSERT INTO `tuyen_diemdo` VALUES ('316', '3', '101', 'di', 'tra', '06:20:00');
INSERT INTO `tuyen_diemdo` VALUES ('317', '3', '102', 'di', 'tra', '06:34:00');
INSERT INTO `tuyen_diemdo` VALUES ('318', '3', '103', 'di', 'tra', '06:35:00');
INSERT INTO `tuyen_diemdo` VALUES ('319', '3', '104', 'di', 'tra', '06:36:00');
INSERT INTO `tuyen_diemdo` VALUES ('320', '3', '105', 'di', 'tra', '06:38:00');
INSERT INTO `tuyen_diemdo` VALUES ('321', '3', '106', 'di', 'tra', '06:40:00');
INSERT INTO `tuyen_diemdo` VALUES ('322', '3', '107', 'di', 'tra', '06:43:00');
INSERT INTO `tuyen_diemdo` VALUES ('323', '3', '108', 'di', 'tra', '06:45:00');
INSERT INTO `tuyen_diemdo` VALUES ('324', '3', '109', 'di', 'tra', '06:48:00');
INSERT INTO `tuyen_diemdo` VALUES ('325', '3', '110', 'di', 'tra', '06:51:00');
INSERT INTO `tuyen_diemdo` VALUES ('326', '3', '110', 've', 'don', '07:15:00');
INSERT INTO `tuyen_diemdo` VALUES ('327', '3', '109', 've', 'don', '07:20:00');
INSERT INTO `tuyen_diemdo` VALUES ('328', '3', '108', 've', 'don', '07:23:00');
INSERT INTO `tuyen_diemdo` VALUES ('329', '3', '107', 've', 'don', '07:25:00');
INSERT INTO `tuyen_diemdo` VALUES ('330', '3', '106', 've', 'don', '07:27:00');
INSERT INTO `tuyen_diemdo` VALUES ('331', '3', '105', 've', 'don', '07:29:00');
INSERT INTO `tuyen_diemdo` VALUES ('332', '3', '104', 've', 'don', '07:30:00');
INSERT INTO `tuyen_diemdo` VALUES ('333', '3', '103', 've', 'don', '07:31:00');
INSERT INTO `tuyen_diemdo` VALUES ('334', '3', '102', 've', 'don', '07:33:00');
INSERT INTO `tuyen_diemdo` VALUES ('335', '3', '101', 've', 'don', '07:35:00');
INSERT INTO `tuyen_diemdo` VALUES ('336', '3', '99', 've', 'don', '07:44:00');
INSERT INTO `tuyen_diemdo` VALUES ('337', '3', '98', 've', 'don', '07:45:00');
INSERT INTO `tuyen_diemdo` VALUES ('338', '3', '119', 've', 'don', '07:52:00');
INSERT INTO `tuyen_diemdo` VALUES ('339', '3', '137', 've', 'tra', '09:05:00');
INSERT INTO `tuyen_diemdo` VALUES ('340', '3', '47', 've', 'tra', '09:10:00');
INSERT INTO `tuyen_diemdo` VALUES ('341', '3', '46', 've', 'tra', '09:15:00');
INSERT INTO `tuyen_diemdo` VALUES ('342', '3', '45', 've', 'tra', '09:20:00');
INSERT INTO `tuyen_diemdo` VALUES ('343', '3', '43', 've', 'tra', '09:29:00');
INSERT INTO `tuyen_diemdo` VALUES ('344', '3', '42', 've', 'tra', '09:31:00');
INSERT INTO `tuyen_diemdo` VALUES ('345', '3', '41', 've', 'tra', '09:33:00');
INSERT INTO `tuyen_diemdo` VALUES ('346', '3', '40', 've', 'tra', '09:35:00');
INSERT INTO `tuyen_diemdo` VALUES ('347', '3', '39', 've', 'tra', '09:38:00');
INSERT INTO `tuyen_diemdo` VALUES ('348', '3', '38', 've', 'tra', '09:41:00');
INSERT INTO `tuyen_diemdo` VALUES ('349', '3', '37', 've', 'tra', '09:44:00');
INSERT INTO `tuyen_diemdo` VALUES ('350', '3', '36', 've', 'tra', '09:47:00');
INSERT INTO `tuyen_diemdo` VALUES ('351', '3', '35', 've', 'tra', '09:50:00');
INSERT INTO `tuyen_diemdo` VALUES ('352', '3', '34', 've', 'tra', '09:52:00');
INSERT INTO `tuyen_diemdo` VALUES ('353', '3', '33', 've', 'tra', '09:55:00');
INSERT INTO `tuyen_diemdo` VALUES ('354', '3', '32', 've', 'tra', '09:58:00');
INSERT INTO `tuyen_diemdo` VALUES ('355', '3', '31', 've', 'tra', '09:59:00');
INSERT INTO `tuyen_diemdo` VALUES ('356', '3', '30', 've', 'tra', '10:01:00');
INSERT INTO `tuyen_diemdo` VALUES ('357', '3', '29', 've', 'tra', '10:03:00');
INSERT INTO `tuyen_diemdo` VALUES ('358', '3', '28', 've', 'tra', '10:06:00');
INSERT INTO `tuyen_diemdo` VALUES ('359', '3', '27', 've', 'tra', '10:08:00');
INSERT INTO `tuyen_diemdo` VALUES ('360', '3', '26', 've', 'tra', '10:10:00');
INSERT INTO `tuyen_diemdo` VALUES ('361', '3', '25', 've', 'tra', '10:12:00');
INSERT INTO `tuyen_diemdo` VALUES ('362', '3', '24', 've', 'tra', '10:14:00');
INSERT INTO `tuyen_diemdo` VALUES ('363', '3', '23', 've', 'tra', '10:16:00');
INSERT INTO `tuyen_diemdo` VALUES ('364', '3', '21', 've', 'tra', '10:17:00');
INSERT INTO `tuyen_diemdo` VALUES ('365', '3', '20', 've', 'tra', '10:18:00');
INSERT INTO `tuyen_diemdo` VALUES ('366', '3', '19', 've', 'tra', '10:19:00');
INSERT INTO `tuyen_diemdo` VALUES ('367', '3', '18', 've', 'tra', '10:20:00');
INSERT INTO `tuyen_diemdo` VALUES ('368', '3', '95', 've', 'tra', '10:22:00');
INSERT INTO `tuyen_diemdo` VALUES ('369', '3', '94', 've', 'tra', '10:24:00');
INSERT INTO `tuyen_diemdo` VALUES ('370', '3', '93', 've', 'tra', '10:26:00');
INSERT INTO `tuyen_diemdo` VALUES ('371', '3', '92', 've', 'tra', '10:29:00');
INSERT INTO `tuyen_diemdo` VALUES ('372', '3', '91', 've', 'tra', '10:34:00');
INSERT INTO `tuyen_diemdo` VALUES ('373', '3', '90', 've', 'tra', '10:36:00');
INSERT INTO `tuyen_diemdo` VALUES ('374', '3', '89', 've', 'tra', '10:39:00');
INSERT INTO `tuyen_diemdo` VALUES ('375', '3', '88', 've', 'tra', '10:42:00');
INSERT INTO `tuyen_diemdo` VALUES ('376', '3', '87', 've', 'tra', '10:45:00');
INSERT INTO `tuyen_diemdo` VALUES ('377', '3', '86', 've', 'tra', '10:48:00');
INSERT INTO `tuyen_diemdo` VALUES ('378', '3', '85', 've', 'tra', '10:53:00');
INSERT INTO `tuyen_diemdo` VALUES ('379', '3', '84', 've', 'tra', '10:58:00');
INSERT INTO `tuyen_diemdo` VALUES ('381', '4', '126', 'di', 'don', '15:15:00');
INSERT INTO `tuyen_diemdo` VALUES ('382', '4', '127', 'di', 'don', '15:20:00');
INSERT INTO `tuyen_diemdo` VALUES ('383', '4', '128', 'di', 'don', '15:25:00');
INSERT INTO `tuyen_diemdo` VALUES ('384', '4', '89', 'di', 'don', '15:30:00');
INSERT INTO `tuyen_diemdo` VALUES ('385', '4', '90', 'di', 'don', '15:32:00');
INSERT INTO `tuyen_diemdo` VALUES ('386', '4', '91', 'di', 'don', '15:35:00');
INSERT INTO `tuyen_diemdo` VALUES ('387', '4', '92', 'di', 'don', '15:40:00');
INSERT INTO `tuyen_diemdo` VALUES ('388', '4', '93', 'di', 'don', '15:45:00');
INSERT INTO `tuyen_diemdo` VALUES ('389', '4', '94', 'di', 'don', '15:50:00');
INSERT INTO `tuyen_diemdo` VALUES ('390', '4', '95', 'di', 'don', '15:55:00');
INSERT INTO `tuyen_diemdo` VALUES ('391', '4', '18', 'di', 'don', '16:00:00');
INSERT INTO `tuyen_diemdo` VALUES ('392', '4', '19', 'di', 'don', '16:02:00');
INSERT INTO `tuyen_diemdo` VALUES ('393', '4', '20', 'di', 'don', '16:04:00');
INSERT INTO `tuyen_diemdo` VALUES ('394', '4', '21', 'di', 'don', '16:05:00');
INSERT INTO `tuyen_diemdo` VALUES ('395', '4', '22', 'di', 'don', '16:06:00');
INSERT INTO `tuyen_diemdo` VALUES ('396', '4', '23', 'di', 'don', '16:07:00');
INSERT INTO `tuyen_diemdo` VALUES ('397', '4', '24', 'di', 'don', '16:08:00');
INSERT INTO `tuyen_diemdo` VALUES ('398', '4', '25', 'di', 'don', '16:10:00');
INSERT INTO `tuyen_diemdo` VALUES ('399', '4', '26', 'di', 'don', '16:12:00');
INSERT INTO `tuyen_diemdo` VALUES ('400', '4', '27', 'di', 'don', '16:13:00');
INSERT INTO `tuyen_diemdo` VALUES ('401', '4', '28', 'di', 'don', '16:16:00');
INSERT INTO `tuyen_diemdo` VALUES ('402', '4', '29', 'di', 'don', '16:20:00');
INSERT INTO `tuyen_diemdo` VALUES ('403', '4', '30', 'di', 'don', '16:21:00');
INSERT INTO `tuyen_diemdo` VALUES ('404', '4', '31', 'di', 'don', '16:22:00');
INSERT INTO `tuyen_diemdo` VALUES ('405', '4', '32', 'di', 'don', '16:23:00');
INSERT INTO `tuyen_diemdo` VALUES ('406', '4', '33', 'di', 'don', '16:27:00');
INSERT INTO `tuyen_diemdo` VALUES ('407', '4', '34', 'di', 'don', '16:28:00');
INSERT INTO `tuyen_diemdo` VALUES ('408', '4', '35', 'di', 'don', '16:29:00');
INSERT INTO `tuyen_diemdo` VALUES ('409', '4', '36', 'di', 'don', '16:30:00');
INSERT INTO `tuyen_diemdo` VALUES ('410', '4', '37', 'di', 'don', '16:32:00');
INSERT INTO `tuyen_diemdo` VALUES ('411', '4', '38', 'di', 'don', '16:33:00');
INSERT INTO `tuyen_diemdo` VALUES ('412', '4', '39', 'di', 'don', '16:35:00');
INSERT INTO `tuyen_diemdo` VALUES ('413', '4', '40', 'di', 'don', '16:37:00');
INSERT INTO `tuyen_diemdo` VALUES ('414', '4', '41', 'di', 'don', '16:38:00');
INSERT INTO `tuyen_diemdo` VALUES ('415', '4', '42', 'di', 'don', '16:39:00');
INSERT INTO `tuyen_diemdo` VALUES ('416', '4', '43', 'di', 'don', '16:41:00');
INSERT INTO `tuyen_diemdo` VALUES ('417', '4', '44', 'di', 'don', '16:45:00');
INSERT INTO `tuyen_diemdo` VALUES ('418', '4', '45', 'di', 'don', '16:50:00');
INSERT INTO `tuyen_diemdo` VALUES ('419', '4', '46', 'di', 'don', '16:55:00');
INSERT INTO `tuyen_diemdo` VALUES ('420', '4', '47', 'di', 'don', '17:00:00');
INSERT INTO `tuyen_diemdo` VALUES ('421', '4', '137', 'di', 'don', '17:02:00');
INSERT INTO `tuyen_diemdo` VALUES ('422', '4', '121', 'di', 'tra', '18:10:00');
INSERT INTO `tuyen_diemdo` VALUES ('423', '4', '97', 'di', 'tra', '18:15:00');
INSERT INTO `tuyen_diemdo` VALUES ('424', '4', '98', 'di', 'tra', '18:18:00');
INSERT INTO `tuyen_diemdo` VALUES ('425', '4', '99', 'di', 'tra', '18:20:00');
INSERT INTO `tuyen_diemdo` VALUES ('426', '4', '101', 'di', 'tra', '18:25:00');
INSERT INTO `tuyen_diemdo` VALUES ('427', '4', '102', 'di', 'tra', '18:26:00');
INSERT INTO `tuyen_diemdo` VALUES ('428', '4', '103', 'di', 'tra', '18:28:00');
INSERT INTO `tuyen_diemdo` VALUES ('429', '4', '104', 'di', 'tra', '18:30:00');
INSERT INTO `tuyen_diemdo` VALUES ('430', '4', '105', 'di', 'tra', '18:32:00');
INSERT INTO `tuyen_diemdo` VALUES ('431', '4', '106', 'di', 'tra', '18:34:00');
INSERT INTO `tuyen_diemdo` VALUES ('432', '4', '107', 'di', 'tra', '18:36:00');
INSERT INTO `tuyen_diemdo` VALUES ('433', '4', '108', 'di', 'tra', '18:38:00');
INSERT INTO `tuyen_diemdo` VALUES ('434', '4', '109', 'di', 'tra', '18:43:00');
INSERT INTO `tuyen_diemdo` VALUES ('435', '4', '110', 'di', 'tra', '18:48:00');
INSERT INTO `tuyen_diemdo` VALUES ('436', '4', '110', 've', 'don', '18:45:00');
INSERT INTO `tuyen_diemdo` VALUES ('437', '4', '109', 've', 'don', '18:50:00');
INSERT INTO `tuyen_diemdo` VALUES ('438', '4', '108', 've', 'don', '18:53:00');
INSERT INTO `tuyen_diemdo` VALUES ('439', '4', '107', 've', 'don', '18:55:00');
INSERT INTO `tuyen_diemdo` VALUES ('440', '4', '106', 've', 'don', '18:57:00');
INSERT INTO `tuyen_diemdo` VALUES ('441', '4', '105', 've', 'don', '18:59:00');
INSERT INTO `tuyen_diemdo` VALUES ('442', '4', '104', 've', 'don', '19:00:00');
INSERT INTO `tuyen_diemdo` VALUES ('443', '4', '103', 've', 'don', '19:01:00');
INSERT INTO `tuyen_diemdo` VALUES ('444', '4', '102', 've', 'don', '19:02:00');
INSERT INTO `tuyen_diemdo` VALUES ('445', '4', '101', 've', 'don', '19:03:00');
INSERT INTO `tuyen_diemdo` VALUES ('446', '4', '99', 've', 'don', '19:05:00');
INSERT INTO `tuyen_diemdo` VALUES ('447', '4', '98', 've', 'don', '19:07:00');
INSERT INTO `tuyen_diemdo` VALUES ('448', '4', '119', 've', 'don', '19:17:00');
INSERT INTO `tuyen_diemdo` VALUES ('449', '4', '137', 've', 'tra', '20:27:00');
INSERT INTO `tuyen_diemdo` VALUES ('450', '4', '47', 've', 'tra', '20:32:00');
INSERT INTO `tuyen_diemdo` VALUES ('451', '4', '46', 've', 'tra', '20:37:00');
INSERT INTO `tuyen_diemdo` VALUES ('452', '4', '45', 've', 'tra', '20:42:00');
INSERT INTO `tuyen_diemdo` VALUES ('453', '4', '44', 've', 'tra', '20:44:00');
INSERT INTO `tuyen_diemdo` VALUES ('454', '4', '43', 've', 'tra', '20:48:00');
INSERT INTO `tuyen_diemdo` VALUES ('455', '4', '42', 've', 'tra', '20:50:00');
INSERT INTO `tuyen_diemdo` VALUES ('456', '4', '41', 've', 'tra', '20:52:00');
INSERT INTO `tuyen_diemdo` VALUES ('457', '4', '40', 've', 'tra', '20:54:00');
INSERT INTO `tuyen_diemdo` VALUES ('458', '4', '39', 've', 'tra', '20:57:00');
INSERT INTO `tuyen_diemdo` VALUES ('459', '4', '38', 've', 'tra', '21:00:00');
INSERT INTO `tuyen_diemdo` VALUES ('460', '4', '37', 've', 'tra', '21:03:00');
INSERT INTO `tuyen_diemdo` VALUES ('461', '4', '36', 've', 'tra', '21:06:00');
INSERT INTO `tuyen_diemdo` VALUES ('462', '4', '35', 've', 'tra', '21:09:00');
INSERT INTO `tuyen_diemdo` VALUES ('463', '4', '34', 've', 'tra', '21:11:00');
INSERT INTO `tuyen_diemdo` VALUES ('464', '4', '33', 've', 'tra', '21:14:00');
INSERT INTO `tuyen_diemdo` VALUES ('465', '4', '32', 've', 'tra', '21:15:00');
INSERT INTO `tuyen_diemdo` VALUES ('466', '4', '31', 've', 'tra', '21:17:00');
INSERT INTO `tuyen_diemdo` VALUES ('467', '4', '30', 've', 'tra', '21:19:00');
INSERT INTO `tuyen_diemdo` VALUES ('468', '4', '29', 've', 'tra', '21:21:00');
INSERT INTO `tuyen_diemdo` VALUES ('469', '4', '28', 've', 'tra', '21:24:00');
INSERT INTO `tuyen_diemdo` VALUES ('470', '4', '27', 've', 'tra', '21:26:00');
INSERT INTO `tuyen_diemdo` VALUES ('471', '4', '26', 've', 'tra', '21:28:00');
INSERT INTO `tuyen_diemdo` VALUES ('472', '4', '25', 've', 'tra', '21:30:00');
INSERT INTO `tuyen_diemdo` VALUES ('473', '4', '24', 've', 'tra', '21:32:00');
INSERT INTO `tuyen_diemdo` VALUES ('474', '4', '23', 've', 'tra', '21:34:00');
INSERT INTO `tuyen_diemdo` VALUES ('475', '4', '22', 've', 'tra', '21:35:00');
INSERT INTO `tuyen_diemdo` VALUES ('476', '4', '21', 've', 'tra', '21:26:00');
INSERT INTO `tuyen_diemdo` VALUES ('477', '4', '20', 've', 'tra', '21:37:00');
INSERT INTO `tuyen_diemdo` VALUES ('478', '4', '19', 've', 'tra', '21:38:00');
INSERT INTO `tuyen_diemdo` VALUES ('479', '4', '18', 've', 'tra', '21:38:00');
INSERT INTO `tuyen_diemdo` VALUES ('480', '4', '95', 've', 'tra', '21:40:00');
INSERT INTO `tuyen_diemdo` VALUES ('481', '4', '94', 've', 'tra', '21:42:00');
INSERT INTO `tuyen_diemdo` VALUES ('482', '4', '93', 've', 'tra', '21:44:00');
INSERT INTO `tuyen_diemdo` VALUES ('483', '4', '92', 've', 'tra', '21:47:00');
INSERT INTO `tuyen_diemdo` VALUES ('484', '4', '91', 've', 'tra', '21:52:00');
INSERT INTO `tuyen_diemdo` VALUES ('485', '4', '90', 've', 'tra', '21:54:00');
INSERT INTO `tuyen_diemdo` VALUES ('486', '4', '89', 've', 'tra', '21:57:00');
INSERT INTO `tuyen_diemdo` VALUES ('487', '4', '128', 've', 'tra', '22:00:00');
INSERT INTO `tuyen_diemdo` VALUES ('488', '4', '127', 've', 'tra', '22:06:00');
INSERT INTO `tuyen_diemdo` VALUES ('489', '4', '126', 've', 'tra', '22:10:00');
INSERT INTO `tuyen_diemdo` VALUES ('490', '5', '9', 'di', 'don', '14:27:00');
INSERT INTO `tuyen_diemdo` VALUES ('491', '5', '8', 'di', 'don', '14:30:00');
INSERT INTO `tuyen_diemdo` VALUES ('492', '5', '10', 'di', 'don', '14:33:00');
INSERT INTO `tuyen_diemdo` VALUES ('493', '5', '11', 'di', 'don', '14:36:00');
INSERT INTO `tuyen_diemdo` VALUES ('494', '5', '12', 'di', 'don', '14:39:00');
INSERT INTO `tuyen_diemdo` VALUES ('495', '5', '13', 'di', 'don', '14:41:00');
INSERT INTO `tuyen_diemdo` VALUES ('496', '5', '14', 'di', 'don', '14:43:00');
INSERT INTO `tuyen_diemdo` VALUES ('497', '5', '15', 'di', 'don', '14:45:00');
INSERT INTO `tuyen_diemdo` VALUES ('498', '5', '16', 'di', 'don', '14:47:00');
INSERT INTO `tuyen_diemdo` VALUES ('499', '5', '17', 'di', 'don', '14:48:00');
INSERT INTO `tuyen_diemdo` VALUES ('500', '5', '18', 'di', 'don', '14:50:00');
INSERT INTO `tuyen_diemdo` VALUES ('501', '5', '19', 'di', 'don', '14:52:00');
INSERT INTO `tuyen_diemdo` VALUES ('502', '5', '20', 'di', 'don', '14:54:00');
INSERT INTO `tuyen_diemdo` VALUES ('503', '5', '21', 'di', 'don', '14:55:00');
INSERT INTO `tuyen_diemdo` VALUES ('504', '5', '22', 'di', 'don', '14:56:00');
INSERT INTO `tuyen_diemdo` VALUES ('505', '5', '23', 'di', 'don', '14:57:00');
INSERT INTO `tuyen_diemdo` VALUES ('506', '5', '24', 'di', 'don', '14:58:00');
INSERT INTO `tuyen_diemdo` VALUES ('507', '5', '25', 'di', 'don', '15:00:00');
INSERT INTO `tuyen_diemdo` VALUES ('508', '5', '26', 'di', 'don', '15:02:00');
INSERT INTO `tuyen_diemdo` VALUES ('509', '5', '27', 'di', 'don', '15:03:00');
INSERT INTO `tuyen_diemdo` VALUES ('510', '5', '28', 'di', 'don', '15:05:00');
INSERT INTO `tuyen_diemdo` VALUES ('511', '5', '29', 'di', 'don', '15:07:00');
INSERT INTO `tuyen_diemdo` VALUES ('512', '5', '30', 'di', 'don', '15:09:00');
INSERT INTO `tuyen_diemdo` VALUES ('513', '5', '31', 'di', 'don', '15:11:00');
INSERT INTO `tuyen_diemdo` VALUES ('514', '5', '32', 'di', 'don', '15:14:00');
INSERT INTO `tuyen_diemdo` VALUES ('515', '5', '33', 'di', 'don', '15:16:00');
INSERT INTO `tuyen_diemdo` VALUES ('516', '5', '34', 'di', 'don', '15:19:00');
INSERT INTO `tuyen_diemdo` VALUES ('517', '5', '35', 'di', 'don', '15:21:00');
INSERT INTO `tuyen_diemdo` VALUES ('518', '5', '36', 'di', 'don', '15:24:00');
INSERT INTO `tuyen_diemdo` VALUES ('519', '5', '37', 'di', 'don', '15:27:00');
INSERT INTO `tuyen_diemdo` VALUES ('520', '5', '38', 'di', 'don', '15:30:00');
INSERT INTO `tuyen_diemdo` VALUES ('521', '5', '39', 'di', 'don', '15:32:00');
INSERT INTO `tuyen_diemdo` VALUES ('522', '5', '40', 'di', 'don', '15:34:00');
INSERT INTO `tuyen_diemdo` VALUES ('523', '5', '41', 'di', 'don', '15:36:00');
INSERT INTO `tuyen_diemdo` VALUES ('524', '5', '42', 'di', 'don', '15:38:00');
INSERT INTO `tuyen_diemdo` VALUES ('525', '5', '43', 'di', 'don', '15:40:00');
INSERT INTO `tuyen_diemdo` VALUES ('526', '5', '44', 'di', 'don', '15:42:00');
INSERT INTO `tuyen_diemdo` VALUES ('527', '5', '45', 'di', 'don', '15:47:00');
INSERT INTO `tuyen_diemdo` VALUES ('528', '5', '46', 'di', 'don', '15:48:00');
INSERT INTO `tuyen_diemdo` VALUES ('529', '5', '52', 'di', 'tra', '17:32:00');
INSERT INTO `tuyen_diemdo` VALUES ('530', '5', '138', 'di', 'tra', '17:37:00');
INSERT INTO `tuyen_diemdo` VALUES ('531', '5', '56', 'di', 'tra', '17:42:00');
INSERT INTO `tuyen_diemdo` VALUES ('532', '5', '58', 'di', 'tra', '17:47:00');
INSERT INTO `tuyen_diemdo` VALUES ('533', '5', '59', 'di', 'tra', '17:49:00');
INSERT INTO `tuyen_diemdo` VALUES ('534', '5', '60', 'di', 'tra', '17:50:00');
INSERT INTO `tuyen_diemdo` VALUES ('535', '5', '61', 'di', 'tra', '17:52:00');
INSERT INTO `tuyen_diemdo` VALUES ('536', '5', '62', 'di', 'tra', '17:54:00');
INSERT INTO `tuyen_diemdo` VALUES ('537', '5', '63', 'di', 'tra', '17:56:00');
INSERT INTO `tuyen_diemdo` VALUES ('538', '5', '64', 'di', 'tra', '17:57:00');
INSERT INTO `tuyen_diemdo` VALUES ('539', '5', '65', 'di', 'tra', '17:58:00');
INSERT INTO `tuyen_diemdo` VALUES ('540', '5', '66', 'di', 'tra', '17:59:00');
INSERT INTO `tuyen_diemdo` VALUES ('541', '5', '67', 'di', 'tra', '18:01:00');
INSERT INTO `tuyen_diemdo` VALUES ('542', '5', '68', 'di', 'tra', '18:02:00');
INSERT INTO `tuyen_diemdo` VALUES ('543', '5', '69', 'di', 'tra', '18:03:00');
INSERT INTO `tuyen_diemdo` VALUES ('544', '5', '70', 'di', 'tra', '18:04:00');
INSERT INTO `tuyen_diemdo` VALUES ('545', '5', '71', 'di', 'tra', '18:05:00');
INSERT INTO `tuyen_diemdo` VALUES ('546', '5', '72', 'di', 'tra', '18:06:00');
INSERT INTO `tuyen_diemdo` VALUES ('547', '5', '73', 'di', 'tra', '18:07:00');
INSERT INTO `tuyen_diemdo` VALUES ('548', '5', '74', 'di', 'tra', '18:08:00');
INSERT INTO `tuyen_diemdo` VALUES ('549', '5', '75', 'di', 'tra', '18:09:00');
INSERT INTO `tuyen_diemdo` VALUES ('550', '5', '76', 'di', 'tra', '18:10:00');
INSERT INTO `tuyen_diemdo` VALUES ('551', '5', '77', 'di', 'tra', '18:11:00');
INSERT INTO `tuyen_diemdo` VALUES ('552', '5', '78', 'di', 'tra', '18:12:00');
INSERT INTO `tuyen_diemdo` VALUES ('553', '5', '79', 'di', 'tra', '18:14:00');
INSERT INTO `tuyen_diemdo` VALUES ('554', '5', '80', 'di', 'tra', '18:15:00');
INSERT INTO `tuyen_diemdo` VALUES ('555', '5', '81', 'di', 'tra', '18:16:00');
INSERT INTO `tuyen_diemdo` VALUES ('556', '5', '82', 'di', 'tra', '18:17:00');
INSERT INTO `tuyen_diemdo` VALUES ('557', '5', '83', 'di', 'tra', '18:25:00');
INSERT INTO `tuyen_diemdo` VALUES ('558', '5', '83', 've', 'don', '18:30:00');
INSERT INTO `tuyen_diemdo` VALUES ('559', '5', '82', 've', 'don', '18:33:00');
INSERT INTO `tuyen_diemdo` VALUES ('560', '5', '80', 've', 'don', '18:35:00');
INSERT INTO `tuyen_diemdo` VALUES ('561', '5', '78', 've', 'don', '18:37:00');
INSERT INTO `tuyen_diemdo` VALUES ('562', '5', '77', 've', 'don', '18:41:00');
INSERT INTO `tuyen_diemdo` VALUES ('563', '5', '76', 've', 'don', '18:44:00');
INSERT INTO `tuyen_diemdo` VALUES ('564', '5', '75', 've', 'don', '18:46:00');
INSERT INTO `tuyen_diemdo` VALUES ('565', '5', '74', 've', 'don', '18:49:00');
INSERT INTO `tuyen_diemdo` VALUES ('566', '5', '73', 've', 'don', '18:50:00');
INSERT INTO `tuyen_diemdo` VALUES ('567', '5', '72', 've', 'don', '18:51:00');
INSERT INTO `tuyen_diemdo` VALUES ('568', '5', '71', 've', 'don', '18:54:00');
INSERT INTO `tuyen_diemdo` VALUES ('569', '5', '70', 've', 'don', '18:56:00');
INSERT INTO `tuyen_diemdo` VALUES ('570', '5', '69', 've', 'don', '18:57:00');
INSERT INTO `tuyen_diemdo` VALUES ('571', '5', '68', 've', 'don', '18:58:00');
INSERT INTO `tuyen_diemdo` VALUES ('572', '5', '67', 've', 'don', '18:59:00');
INSERT INTO `tuyen_diemdo` VALUES ('573', '5', '66', 've', 'don', '19:01:00');
INSERT INTO `tuyen_diemdo` VALUES ('574', '5', '65', 've', 'don', '19:03:00');
INSERT INTO `tuyen_diemdo` VALUES ('575', '5', '64', 've', 'don', '19:04:00');
INSERT INTO `tuyen_diemdo` VALUES ('576', '5', '63', 've', 'don', '19:06:00');
INSERT INTO `tuyen_diemdo` VALUES ('577', '5', '62', 've', 'don', '19:08:00');
INSERT INTO `tuyen_diemdo` VALUES ('578', '5', '61', 've', 'don', '19:10:00');
INSERT INTO `tuyen_diemdo` VALUES ('579', '5', '60', 've', 'don', '19:11:00');
INSERT INTO `tuyen_diemdo` VALUES ('580', '5', '59', 've', 'don', '19:14:00');
INSERT INTO `tuyen_diemdo` VALUES ('581', '5', '58', 've', 'don', '19:17:00');
INSERT INTO `tuyen_diemdo` VALUES ('582', '5', '138', 've', 'don', '19:22:00');
INSERT INTO `tuyen_diemdo` VALUES ('583', '5', '47', 've', 'tra', '20:22:00');
INSERT INTO `tuyen_diemdo` VALUES ('584', '5', '46', 've', 'tra', '20:27:00');
INSERT INTO `tuyen_diemdo` VALUES ('586', '5', '45', 've', 'tra', '20:32:00');
INSERT INTO `tuyen_diemdo` VALUES ('587', '5', '44', 've', 'tra', '20:37:00');
INSERT INTO `tuyen_diemdo` VALUES ('588', '5', '43', 've', 'tra', '20:38:00');
INSERT INTO `tuyen_diemdo` VALUES ('589', '5', '42', 've', 'tra', '20:39:00');
INSERT INTO `tuyen_diemdo` VALUES ('590', '5', '41', 've', 'tra', '20:40:00');
INSERT INTO `tuyen_diemdo` VALUES ('591', '5', '40', 've', 'tra', '20:41:00');
INSERT INTO `tuyen_diemdo` VALUES ('592', '5', '39', 've', 'tra', '20:43:00');
INSERT INTO `tuyen_diemdo` VALUES ('593', '5', '38', 've', 'tra', '20:44:00');
INSERT INTO `tuyen_diemdo` VALUES ('594', '5', '37', 've', 'tra', '20:46:00');
INSERT INTO `tuyen_diemdo` VALUES ('595', '5', '36', 've', 'tra', '20:47:00');
INSERT INTO `tuyen_diemdo` VALUES ('596', '5', '35', 've', 'tra', '20:48:00');
INSERT INTO `tuyen_diemdo` VALUES ('597', '5', '34', 've', 'tra', '20:49:00');
INSERT INTO `tuyen_diemdo` VALUES ('598', '5', '33', 've', 'tra', '20:52:00');
INSERT INTO `tuyen_diemdo` VALUES ('599', '5', '32', 've', 'tra', '20:53:00');
INSERT INTO `tuyen_diemdo` VALUES ('600', '5', '31', 've', 'tra', '20:58:00');
INSERT INTO `tuyen_diemdo` VALUES ('601', '5', '30', 've', 'tra', '21:03:00');
INSERT INTO `tuyen_diemdo` VALUES ('602', '5', '29', 've', 'tra', '21:05:00');
INSERT INTO `tuyen_diemdo` VALUES ('603', '5', '28', 've', 'tra', '21:10:00');
INSERT INTO `tuyen_diemdo` VALUES ('604', '5', '27', 've', 'tra', '21:14:00');
INSERT INTO `tuyen_diemdo` VALUES ('605', '5', '26', 've', 'tra', '21:16:00');
INSERT INTO `tuyen_diemdo` VALUES ('606', '5', '25', 've', 'tra', '21:18:00');
INSERT INTO `tuyen_diemdo` VALUES ('607', '5', '24', 've', 'tra', '21:22:00');
INSERT INTO `tuyen_diemdo` VALUES ('608', '5', '23', 've', 'tra', '21:23:00');
INSERT INTO `tuyen_diemdo` VALUES ('609', '5', '22', 've', 'tra', '21:24:00');
INSERT INTO `tuyen_diemdo` VALUES ('610', '5', '21', 've', 'tra', '21:26:00');
INSERT INTO `tuyen_diemdo` VALUES ('611', '5', '20', 've', 'tra', '21:27:00');
INSERT INTO `tuyen_diemdo` VALUES ('612', '5', '19', 've', 'tra', '21:30:00');
INSERT INTO `tuyen_diemdo` VALUES ('613', '5', '18', 've', 'tra', '21:31:00');
INSERT INTO `tuyen_diemdo` VALUES ('614', '5', '17', 've', 'tra', '21:36:00');
INSERT INTO `tuyen_diemdo` VALUES ('615', '5', '16', 've', 'tra', '21:37:00');
INSERT INTO `tuyen_diemdo` VALUES ('616', '5', '15', 've', 'tra', '21:38:00');
INSERT INTO `tuyen_diemdo` VALUES ('617', '5', '14', 've', 'tra', '21:39:00');
INSERT INTO `tuyen_diemdo` VALUES ('618', '5', '13', 've', 'tra', '21:41:00');
INSERT INTO `tuyen_diemdo` VALUES ('619', '5', '12', 've', 'tra', '21:44:00');
INSERT INTO `tuyen_diemdo` VALUES ('620', '5', '11', 've', 'tra', '21:49:00');
INSERT INTO `tuyen_diemdo` VALUES ('622', '5', '10', 've', 'tra', '21:52:00');
INSERT INTO `tuyen_diemdo` VALUES ('623', '5', '9', 've', 'tra', '21:54:00');
INSERT INTO `tuyen_diemdo` VALUES ('624', '5', '8', 've', 'tra', '21:56:00');
INSERT INTO `tuyen_diemdo` VALUES ('627', '2', '137', 'di', 'tra', '11:37:00');
INSERT INTO `tuyen_diemdo` VALUES ('629', '4', '130', 'di', 'don', '12:51:00');
INSERT INTO `tuyen_diemdo` VALUES ('630', '4', '130', 'di', 'don', '12:51:00');
INSERT INTO `tuyen_diemdo` VALUES ('631', '4', '130', 'di', 'don', '12:51:00');
INSERT INTO `tuyen_diemdo` VALUES ('638', '3', '55', 've', 'don', '13:42:00');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Ngô Kim Long', 'long1502@gmail.com', null, 'quantri', '$2y$10$zsYV9U3UswBNdoyja/7KMOXiRgqyjAXWlxXwfuhtGtqzXpYh/M8tO', 'Hà Nội', '0987666888', null, null, '2022-04-07 16:48:30');
INSERT INTO `users` VALUES ('2', 'Tiến Phát', 'phat95@gmail.com', null, 'nhanvien', '$2a$12$EDn7SdKPwKoTQla5d1Z28e7Rmr2v7.vBseOK.ntnKYmUxpz4EeMhG', 'Hải Hậu', '0967085852', null, null, '2022-04-07 04:58:47');
INSERT INTO `users` VALUES ('3', 'Trọng Hoàng', 'hoang98@gmail.com', null, 'laixe', '$2a$12$EDn7SdKPwKoTQla5d1Z28e7Rmr2v7.vBseOK.ntnKYmUxpz4EeMhG', 'Hải Hậu', '0838419095', null, null, null);
INSERT INTO `users` VALUES ('4', 'Văn Thanh', 'thanhmeo@gmail.com', null, 'khachhang', '$2a$12$EDn7SdKPwKoTQla5d1Z28e7Rmr2v7.vBseOK.ntnKYmUxpz4EeMhG', 'Hải Hậu', '0986666888', null, null, null);
INSERT INTO `users` VALUES ('5', 'Kim Yến', 'yen2101@gmail.com', null, 'khachhang', '$2a$12$EDn7SdKPwKoTQla5d1Z28e7Rmr2v7.vBseOK.ntnKYmUxpz4EeMhG', 'Hải Hậu', '0834767777', null, null, null);
INSERT INTO `users` VALUES ('6', 'Văn Tài', 'tai91@gmail.com', null, 'laixe', '$2a$12$EDn7SdKPwKoTQla5d1Z28e7Rmr2v7.vBseOK.ntnKYmUxpz4EeMhG', 'Hải Hậu', '0987877666', null, null, null);
INSERT INTO `users` VALUES ('7', 'Hoàng Hiếu', 'hieu@gmail.com', null, 'laixe', '$2a$12$EDn7SdKPwKoTQla5d1Z28e7Rmr2v7.vBseOK.ntnKYmUxpz4EeMhG', 'Hải Hậu', '0967432840', null, null, null);
INSERT INTO `users` VALUES ('8', 'Văn Lâm', 'lam90@gmail.com', null, 'laixe', '$2a$12$EDn7SdKPwKoTQla5d1Z28e7Rmr2v7.vBseOK.ntnKYmUxpz4EeMhG', 'Hải Hậu', '0986777832', null, null, null);
INSERT INTO `users` VALUES ('9', 'Mai Hiến', 'hienhoat@gmail.com', null, 'laixe', '$2a$12$EDn7SdKPwKoTQla5d1Z28e7Rmr2v7.vBseOK.ntnKYmUxpz4EeMhG', 'Hải Hậu', '083874777', null, null, null);
INSERT INTO `users` VALUES ('10', 'Ngô Vinh', 'vinh0709@gmail.com', null, 'khachhang', '$2a$12$EDn7SdKPwKoTQla5d1Z28e7Rmr2v7.vBseOK.ntnKYmUxpz4EeMhG', 'Hải Hậu', '0986545678', null, null, null);
INSERT INTO `users` VALUES ('11', 'Mai Thanh', 'thanh@gmail.com', null, 'khachhang', '$2a$12$EDn7SdKPwKoTQla5d1Z28e7Rmr2v7.vBseOK.ntnKYmUxpz4EeMhG', 'Hải Hậu', '0986356256', null, null, null);
INSERT INTO `users` VALUES ('12', 'Thanh Chinh', 'chinh@gmail.com', null, 'khachhang', '$2a$12$EDn7SdKPwKoTQla5d1Z28e7Rmr2v7.vBseOK.ntnKYmUxpz4EeMhG', 'Hải Hậu', '083767877', null, null, null);
INSERT INTO `users` VALUES ('13', 'Thuy Duyen', 'duyenngo@gmail.com', null, 'khachhang', '$2a$12$EDn7SdKPwKoTQla5d1Z28e7Rmr2v7.vBseOK.ntnKYmUxpz4EeMhG', 'Hải Hậu ', '083849878', null, null, null);
INSERT INTO `users` VALUES ('14', 'Tien Dung', 'dungngo@gmail.com', null, 'khachhang', '$2a$12$EDn7SdKPwKoTQla5d1Z28e7Rmr2v7.vBseOK.ntnKYmUxpz4EeMhG', 'Hải Hậu', '0986765345', null, null, null);
INSERT INTO `users` VALUES ('15', 'Mai Thu', 'thu556@gmail.com', null, 'nhanvien', '$2y$10$KO1uANkpSm24KbqV/qgRK.pk7q4zH2CiDw96qNgImPaHvobPOun5a', 'Hải Hậu', '0986736278', null, null, '2022-04-07 16:47:00');

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
  CONSTRAINT `fk_chuyenngay` FOREIGN KEY (`ma_cn`) REFERENCES `chuyen_ngay` (`id`),
  CONSTRAINT `fk_dh` FOREIGN KEY (`ma_dh`) REFERENCES `don_hang` (`id`),
  CONSTRAINT `fk_gx` FOREIGN KEY (`ma_gx`) REFERENCES `ghe_xe` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=457 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ve_chuyen
-- ----------------------------
INSERT INTO `ve_chuyen` VALUES ('272', '1', '14', '1', '1', 'UBND Hải Thịnh', null, 'Bưởi - Đội Cấn');
INSERT INTO `ve_chuyen` VALUES ('273', '1', '15', '1', '1', 'Cồn', null, 'Láng - T.D.Hưng');
INSERT INTO `ve_chuyen` VALUES ('274', '1', '16', '2', '1', 'UBND Hải Hà', null, 'HQV - Chợ N.Tân');
INSERT INTO `ve_chuyen` VALUES ('275', '1', '17', '3', '1', 'Dốc Hải Triều', null, 'Viện Nhi TW');
INSERT INTO `ve_chuyen` VALUES ('277', '1', '21', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('278', '1', '23', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('282', '1', '26', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('283', '1', '28', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('284', '1', '18', null, '1', 'UBND Hải Thịnh', null, '90 N.Trãi');
INSERT INTO `ve_chuyen` VALUES ('285', '1', '19', null, '1', 'UBND Hải Thịnh', null, '90 N.Trãi');
INSERT INTO `ve_chuyen` VALUES ('286', '1', '20', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('287', '1', '22', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('288', '1', '24', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('289', '1', '25', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('290', '1', '27', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('291', '2', '12', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('292', '2', '6', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('293', '2', '7', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('294', '2', '13', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('295', '2', '5', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('296', '2', '8', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('297', '2', '9', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('298', '2', '10', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('299', '2', '11', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('300', '3', '14', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('301', '3', '15', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('302', '3', '16', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('303', '3', '17', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('304', '3', '18', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('305', '3', '19', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('306', '3', '20', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('307', '3', '21', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('308', '3', '22', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('309', '3', '23', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('310', '3', '24', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('313', '3', '25', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('314', '3', '26', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('315', '3', '27', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('316', '3', '28', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('317', '4', '14', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('318', '4', '15', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('319', '4', '16', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('320', '4', '17', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('321', '4', '18', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('322', '4', '19', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('323', '4', '20', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('324', '4', '21', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('325', '4', '22', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('326', '4', '23', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('327', '4', '24', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('328', '4', '25', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('329', '4', '26', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('330', '4', '27', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('331', '4', '28', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('346', '11', '14', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('347', '11', '15', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('348', '11', '16', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('349', '11', '17', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('350', '11', '18', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('351', '11', '19', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('352', '11', '20', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('353', '11', '21', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('354', '11', '22', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('355', '11', '23', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('356', '11', '24', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('357', '11', '25', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('358', '11', '26', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('359', '11', '27', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('360', '11', '28', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('361', '12', '14', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('362', '12', '15', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('363', '12', '16', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('364', '12', '17', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('365', '12', '18', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('366', '12', '19', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('367', '12', '20', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('368', '12', '21', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('369', '12', '22', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('370', '12', '23', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('371', '12', '24', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('372', '12', '25', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('373', '12', '26', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('374', '12', '27', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('375', '12', '28', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('376', '13', '5', null, '1', 'Cầu Hàng Vàng', null, 'ĐH Thương Mại');
INSERT INTO `ve_chuyen` VALUES ('377', '13', '6', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('378', '13', '7', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('379', '13', '8', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('380', '13', '9', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('381', '13', '10', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('382', '13', '11', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('383', '13', '12', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('384', '13', '13', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('385', '14', '5', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('386', '14', '6', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('387', '14', '7', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('388', '14', '8', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('389', '14', '9', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('390', '14', '10', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('391', '14', '11', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('392', '14', '12', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('393', '14', '13', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('418', '24', '14', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('419', '24', '15', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('420', '24', '16', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('421', '24', '17', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('422', '24', '18', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('423', '24', '19', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('424', '24', '20', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('425', '24', '21', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('426', '24', '22', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('427', '24', '23', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('428', '24', '24', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('429', '24', '25', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('430', '24', '26', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('431', '24', '27', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('432', '24', '28', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('433', '25', '14', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('434', '25', '15', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('435', '25', '16', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('436', '25', '17', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('437', '25', '18', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('438', '25', '19', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('439', '25', '20', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('440', '25', '21', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('441', '25', '22', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('442', '25', '23', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('443', '25', '24', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('444', '25', '25', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('445', '25', '26', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('446', '25', '27', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('447', '25', '28', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('448', '26', '5', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('449', '26', '6', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('450', '26', '7', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('451', '26', '8', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('452', '26', '9', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('453', '26', '10', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('454', '26', '11', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('455', '26', '12', null, null, null, null, null);
INSERT INTO `ve_chuyen` VALUES ('456', '26', '13', null, null, null, null, null);

-- ----------------------------
-- Table structure for xe
-- ----------------------------
DROP TABLE IF EXISTS `xe`;
CREATE TABLE `xe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten_xe` varchar(50) DEFAULT NULL,
  `bien_so` varchar(15) DEFAULT NULL,
  `anh` text DEFAULT NULL,
  `gioi_thieu` text DEFAULT NULL,
  `ma_lx` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_lx` (`ma_lx`),
  CONSTRAINT `fk_lx` FOREIGN KEY (`ma_lx`) REFERENCES `loai_xe` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xe
-- ----------------------------
INSERT INTO `xe` VALUES ('2', 'ND002', '29B-193.05', null, null, '4');
INSERT INTO `xe` VALUES ('5', 'ND005', '29B-195.02', null, null, '4');
INSERT INTO `xe` VALUES ('11', 'ND802', '29B-502.83', null, null, '3');
INSERT INTO `xe` VALUES ('12', 'ND801', '29B-504.88', null, null, '3');
INSERT INTO `xe` VALUES ('13', 'ND812', '29B-502.83', null, null, '3');
INSERT INTO `xe` VALUES ('14', 'ND003', '29B-567.78', null, null, '4');
INSERT INTO `xe` VALUES ('15', 'ND006', '18B-019.24', null, null, '4');
INSERT INTO `xe` VALUES ('16', 'ND810', '29B-190.50', null, null, '3');

-- ----------------------------
-- Table structure for xe_anh
-- ----------------------------
DROP TABLE IF EXISTS `xe_anh`;
CREATE TABLE `xe_anh` (
  `id` int(11) NOT NULL,
  `ma_xe` int(11) DEFAULT NULL,
  `ma_anh` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_ma_xe` (`ma_xe`),
  KEY `fk_ma_anh` (`ma_anh`),
  CONSTRAINT `fk_ma_anh` FOREIGN KEY (`ma_anh`) REFERENCES `hinh_anh` (`id`),
  CONSTRAINT `fk_ma_xe` FOREIGN KEY (`ma_xe`) REFERENCES `xe` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xe_anh
-- ----------------------------
