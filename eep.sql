/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50616
Source Host           : localhost:3306
Source Database       : eep

Target Server Type    : MYSQL
Target Server Version : 50616
File Encoding         : 65001

Date: 2014-05-24 01:09:18
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `accounts`
-- ----------------------------
DROP TABLE IF EXISTS `accounts`;
CREATE TABLE `accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(4) DEFAULT NULL,
  `username` varchar(32) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `name` varchar(32) DEFAULT NULL,
  `surname` varchar(32) DEFAULT NULL,
  `id_number` varchar(9) DEFAULT NULL,
  `telephone` decimal(10,0) DEFAULT NULL,
  `creation_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `role_id` (`role_id`),
  CONSTRAINT `role_id` FOREIGN KEY (`role_id`) REFERENCES `account_roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of accounts
-- ----------------------------

-- ----------------------------
-- Table structure for `account_roles`
-- ----------------------------
DROP TABLE IF EXISTS `account_roles`;
CREATE TABLE `account_roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of account_roles
-- ----------------------------
INSERT INTO `account_roles` VALUES ('1', 'Administrator');
INSERT INTO `account_roles` VALUES ('2', 'User');

-- ----------------------------
-- Table structure for `apa`
-- ----------------------------
DROP TABLE IF EXISTS `apa`;
CREATE TABLE `apa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `apa_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of apa
-- ----------------------------
INSERT INTO `apa` VALUES ('1', 'Αττικής');
INSERT INTO `apa` VALUES ('2', 'Μακεδονίας - Θράκης');
INSERT INTO `apa` VALUES ('3', 'Ηπείρου - Δυτικής Μακεδονίας');
INSERT INTO `apa` VALUES ('4', 'Θεσσαλίας - Στερεάς Ελλάδας');
INSERT INTO `apa` VALUES ('5', 'Πελοποννήσου, Δυτικής Ελλάδας και Ιονίου');
INSERT INTO `apa` VALUES ('6', 'Αιγαίου');
INSERT INTO `apa` VALUES ('7', 'Κρήτης');

-- ----------------------------
-- Table structure for `applications`
-- ----------------------------
DROP TABLE IF EXISTS `applications`;
CREATE TABLE `applications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_id` int(11) DEFAULT NULL,
  `submission_date` datetime DEFAULT NULL,
  `validation_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `account_id` (`account_id`),
  CONSTRAINT `account_id` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of applications
-- ----------------------------
INSERT INTO `applications` VALUES ('1', '1', '2014-05-17 14:02:34', null);
INSERT INTO `applications` VALUES ('2', '2', '2014-05-22 14:02:49', null);
INSERT INTO `applications` VALUES ('3', '3', '2014-05-14 14:03:03', null);
INSERT INTO `applications` VALUES ('4', '4', '2014-05-14 14:03:11', null);

-- ----------------------------
-- Table structure for `categories`
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('1', 'A1');
INSERT INTO `categories` VALUES ('2', 'A2');

-- ----------------------------
-- Table structure for `form_t`
-- ----------------------------
DROP TABLE IF EXISTS `form_t`;
CREATE TABLE `form_t` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `application_id` int(11) DEFAULT NULL,
  `apa_id` int(11) DEFAULT NULL,
  `yphresia_hmerominia` datetime DEFAULT NULL,
  `yphresia_ar_protok` int(11) DEFAULT NULL,
  `yphresia_perivantollogiki_tautotita` varchar(60) DEFAULT NULL,
  `xrhsths_tax_dieuthinsi` varchar(80) DEFAULT NULL,
  `xrhsths_tilefwno` decimal(10,0) DEFAULT NULL,
  `xrhsths_fax` decimal(10,0) DEFAULT NULL,
  `xrhsths_email` varchar(64) DEFAULT NULL,
  `xrhsths_titlos_ergou` varchar(400) DEFAULT NULL,
  `foreas_epwnumia` varchar(200) DEFAULT NULL,
  `foreas_dieuthinsi` varchar(80) DEFAULT NULL,
  `foreas_perioxi` varchar(80) DEFAULT NULL,
  `foreas_tilefwno` decimal(10,0) DEFAULT NULL,
  `foreas_fax` decimal(10,0) DEFAULT NULL,
  `foreas_email` varchar(64) DEFAULT NULL,
  `foreas_ypeuthinos_epikoinwnias` varchar(64) DEFAULT NULL,
  `foreas_ypeuthinos_tilefwno` decimal(10,0) DEFAULT NULL,
  `foreas_ypeuthinos_email` varchar(64) DEFAULT NULL,
  `foreas_ypeuthinos_thesi` varchar(64) DEFAULT NULL,
  `meletitis_epwnumia` varchar(200) DEFAULT NULL,
  `meletitis_dieuthinsi` varchar(80) DEFAULT NULL,
  `meletitis_perioxi` varchar(80) DEFAULT NULL,
  `meletitis_tilefwno` decimal(10,0) DEFAULT NULL,
  `meletitis_fax` decimal(10,0) DEFAULT NULL,
  `meletitis_email` varchar(64) DEFAULT NULL,
  `meletitis_ypeuthinos_epikoinwnias` varchar(64) DEFAULT NULL,
  `meletitis_ypeuthinos_tilefwno` decimal(10,0) DEFAULT NULL,
  `meletitis_ypeuthinos_email` varchar(64) DEFAULT NULL,
  `meletitis_ypeuthinos_thesi` varchar(64) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `aa` int(3) DEFAULT NULL,
  `egsa87_1` varchar(25) DEFAULT NULL,
  `egsa87_2` varchar(25) DEFAULT NULL,
  `egsa87_3` varchar(25) DEFAULT NULL,
  `wgs84_1` varchar(25) DEFAULT NULL,
  `wgs84_2` varchar(25) DEFAULT NULL,
  `wgs84_3` varchar(25) DEFAULT NULL,
  `perifereia_id` int(11) DEFAULT NULL,
  `perifereiaki_enotita_id` int(11) DEFAULT NULL,
  `dimos` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `application_id` (`application_id`),
  KEY `apa_id` (`apa_id`),
  KEY `category_id` (`category_id`),
  KEY `type_id` (`type_id`),
  KEY `perifereia_id` (`perifereia_id`),
  KEY `perifereiaki_enotita_id` (`perifereiaki_enotita_id`),
  CONSTRAINT `apa_id` FOREIGN KEY (`apa_id`) REFERENCES `apa` (`id`),
  CONSTRAINT `application_id` FOREIGN KEY (`application_id`) REFERENCES `applications` (`id`),
  CONSTRAINT `category_id` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  CONSTRAINT `perifereiaki_enotita_id` FOREIGN KEY (`perifereiaki_enotita_id`) REFERENCES `perifereiakes_enotites` (`id`),
  CONSTRAINT `perifereia_id` FOREIGN KEY (`perifereia_id`) REFERENCES `perifereies` (`id`),
  CONSTRAINT `type_id` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of form_t
-- ----------------------------
INSERT INTO `form_t` VALUES ('1', '1', '1', '2014-05-16 14:04:07', '734563', 'Ταυτότητα 1', 'Ισίωδου 12', '6975523555', '2105486600', 'k@mail.com', 'Έργο 1', 'Φορέας 1', 'Ισίωδου 12', 'Καλαμάτα', '2105489666', '2105563247', 'foreas1@mail.com', 'Υπεύθυνος 1', '6977777778', 'ypeuthinos1@mail.com', 'Θέση 1', 'Μελετητής 1', 'Διεύθυνση Μελετητή 1', 'Περιοχή Α', '2109999992', '2019928308', 'meletitis@mail.com', 'Υπεύθυνος Μελετητής 1', '2150006981', 'ypeuthinosmeletis@mail.com', 'Θέση 2', '2', '5', '12', '24.668311,35.342441', '24.676551,35.309949', '24.736975,35.303224', null, null, null, '3', '1', 'Δήμος Α');
INSERT INTO `form_t` VALUES ('2', '2', '3', '2014-05-06 14:31:13', '998445', 'Ταυτότητα 2', 'Διεύθυνση Α2, Περιοχή 2', '6988876632', '2108889990', 'mailuser@mail.com', 'Έργο 2', 'Φορέας 2', 'Ισιώδου 13', 'Πάτρα', '2105689888', '2105488987', 'foreas2@mail.com', 'Υπεύθυνος 2', '6987755663', 'ypeuthinos2@mail.com', 'Θέση 2', 'Μελετητής 2', 'Διεύθυνση Μελετητή 2', 'Περιοχή Β', '2105563215', '2145503669', 'meletitis@mail2.com', 'Υπεύθυνος Μελετητής 2', '2140000698', 'ypeuthinosmeletis2@mail.com', 'Θέση 10', '2', '1', '123', '23.937720,35.316672', '23.837470,35.293137', '23.981665,35.241560', null, null, null, '4', '4', 'Δήμος Δ');
INSERT INTO `form_t` VALUES ('3', '3', '4', '2014-05-30 15:37:41', '987433', 'Ταυτότητα 3', 'Διεύθυνση Α, Περιοχή 2', '6988556456', '2100546695', 'mailuse3r@mail.com', 'Έργο 3', 'Φορέας 3', 'Ισιώδου 14', 'Αθήνα', '2100000000', '2100000000', 'foreas3@g.com', 'Υπεύθυνος 3', '6988888545', 'ypeuthinos3@mail.com', 'Θέση 3', 'Μελετητής 3', 'Διεύθυνση Μελετητή 3', 'Περιοχή Γ', '2105463321', '2156632001', 'melet@mail3.com', 'Υπεύθυνος Μελετητής 3', '2101022154', 'ypeuthinosmeletis3@mail.com', 'Θέση 11', '2', '4', '9', '23.937720,35.316672', '23.837470,35.293137', '23.981665,35.241560', null, null, null, '2', '3', 'Δήμος Χ');
INSERT INTO `form_t` VALUES ('4', '4', '3', '2014-05-13 15:44:18', '663256', 'Ταυτότητα 4', 'Διεύθυνση Γ, Περιοχή 3', '6999655412', '2101100563', 'jj@gmail.com', 'Έργο 4', 'Φορέας 4', 'Ισιώδου 27', 'Κρήτη', '2510033646', '2450003162', 'foreas@hk.com', 'Υπεύθυνος 4', '6998556321', 'ypeuth@mmail.com', 'Θέση 10', 'Μελετητής 8', 'Διεύθυνση Μελετητή 9', 'Περιοχή Δ', '2105563210', '2103365899', 'meleeet@gmail.com', 'Υπεύθυνος Μελετητής 9', '2115500364', 'ypeuthinosmeletis3@mail.com', 'Θέση 8', '2', '10', '11', '24.668311,35.342441', '24.676551,35.309949', '24.736975,35.303224', null, null, null, '5', '2', 'Δήμος Ε');

-- ----------------------------
-- Table structure for `perifereiakes_enotites`
-- ----------------------------
DROP TABLE IF EXISTS `perifereiakes_enotites`;
CREATE TABLE `perifereiakes_enotites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `enotita_name` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of perifereiakes_enotites
-- ----------------------------
INSERT INTO `perifereiakes_enotites` VALUES ('1', 'Αθηνών');
INSERT INTO `perifereiakes_enotites` VALUES ('2', 'Αιτωλοακαρνανίας');
INSERT INTO `perifereiakes_enotites` VALUES ('3', 'Ανατολικής Αττικής');
INSERT INTO `perifereiakes_enotites` VALUES ('4', 'Αργολίδας');
INSERT INTO `perifereiakes_enotites` VALUES ('5', 'Αρκαδίας');
INSERT INTO `perifereiakes_enotites` VALUES ('6', 'Άρτας');
INSERT INTO `perifereiakes_enotites` VALUES ('7', 'Αχαΐας');
INSERT INTO `perifereiakes_enotites` VALUES ('8', 'Βοιωτίας');
INSERT INTO `perifereiakes_enotites` VALUES ('9', 'Γρεβενών');
INSERT INTO `perifereiakes_enotites` VALUES ('10', 'Δράμας');
INSERT INTO `perifereiakes_enotites` VALUES ('11', 'Δυτικής Αττικής');
INSERT INTO `perifereiakes_enotites` VALUES ('12', 'Δωδεκανήσου');
INSERT INTO `perifereiakes_enotites` VALUES ('13', 'Έβρου');
INSERT INTO `perifereiakes_enotites` VALUES ('14', 'Εύβοιας');
INSERT INTO `perifereiakes_enotites` VALUES ('15', 'Ευρυτανίας');
INSERT INTO `perifereiakes_enotites` VALUES ('16', 'Ζακύνθου');
INSERT INTO `perifereiakes_enotites` VALUES ('17', 'Ηλείας');
INSERT INTO `perifereiakes_enotites` VALUES ('18', 'Ημαθίας');
INSERT INTO `perifereiakes_enotites` VALUES ('19', 'Ηρακλείου');
INSERT INTO `perifereiakes_enotites` VALUES ('20', 'Θεσπρωτίας');
INSERT INTO `perifereiakes_enotites` VALUES ('21', 'Θεσσαλονίκης');
INSERT INTO `perifereiakes_enotites` VALUES ('22', 'Ιωαννίνων');
INSERT INTO `perifereiakes_enotites` VALUES ('23', 'Καβάλας');
INSERT INTO `perifereiakes_enotites` VALUES ('24', 'Καρδίτσας');
INSERT INTO `perifereiakes_enotites` VALUES ('25', 'Καστοριάς');
INSERT INTO `perifereiakes_enotites` VALUES ('26', 'Κέρκυρας');
INSERT INTO `perifereiakes_enotites` VALUES ('27', 'Κεφαλληνίας');
INSERT INTO `perifereiakes_enotites` VALUES ('28', 'Κιλκίς');
INSERT INTO `perifereiakes_enotites` VALUES ('29', 'Κοζάνης');
INSERT INTO `perifereiakes_enotites` VALUES ('30', 'Κορινθίας');
INSERT INTO `perifereiakes_enotites` VALUES ('31', 'Κυκλάδων');
INSERT INTO `perifereiakes_enotites` VALUES ('32', 'Λακωνίας');
INSERT INTO `perifereiakes_enotites` VALUES ('33', 'Λάρισας');
INSERT INTO `perifereiakes_enotites` VALUES ('34', 'Λασιθίου');
INSERT INTO `perifereiakes_enotites` VALUES ('35', 'Λέσβου');
INSERT INTO `perifereiakes_enotites` VALUES ('36', 'Λευκάδας');
INSERT INTO `perifereiakes_enotites` VALUES ('37', 'Μαγνησίας');
INSERT INTO `perifereiakes_enotites` VALUES ('38', 'Μεσσηνίας');
INSERT INTO `perifereiakes_enotites` VALUES ('39', 'Ξάνθης');
INSERT INTO `perifereiakes_enotites` VALUES ('40', 'Πειραιώς');
INSERT INTO `perifereiakes_enotites` VALUES ('41', 'Πέλλης');
INSERT INTO `perifereiakes_enotites` VALUES ('42', 'Πιερίας');
INSERT INTO `perifereiakes_enotites` VALUES ('43', 'Πρέβεζας');
INSERT INTO `perifereiakes_enotites` VALUES ('44', 'Ρεθύμνης');
INSERT INTO `perifereiakes_enotites` VALUES ('45', 'Ρεθύμνου');
INSERT INTO `perifereiakes_enotites` VALUES ('46', 'Ροδόπης');
INSERT INTO `perifereiakes_enotites` VALUES ('47', 'Σάμου');
INSERT INTO `perifereiakes_enotites` VALUES ('48', 'Σερρών');
INSERT INTO `perifereiakes_enotites` VALUES ('49', 'Τρικάλων');
INSERT INTO `perifereiakes_enotites` VALUES ('50', 'Φθιώτιδος');
INSERT INTO `perifereiakes_enotites` VALUES ('51', 'Φλώρινας');
INSERT INTO `perifereiakes_enotites` VALUES ('52', 'Φωκίδας');
INSERT INTO `perifereiakes_enotites` VALUES ('53', 'Χαλκιδικής');
INSERT INTO `perifereiakes_enotites` VALUES ('54', 'Χανίων');
INSERT INTO `perifereiakes_enotites` VALUES ('55', 'Χίου');

-- ----------------------------
-- Table structure for `perifereies`
-- ----------------------------
DROP TABLE IF EXISTS `perifereies`;
CREATE TABLE `perifereies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `perifereia_onoma` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of perifereies
-- ----------------------------
INSERT INTO `perifereies` VALUES ('1', 'Ανατολικής Μακεδονίας και Θράκης');
INSERT INTO `perifereies` VALUES ('2', 'Αττικής');
INSERT INTO `perifereies` VALUES ('3', 'Βορείου Αιγαίου');
INSERT INTO `perifereies` VALUES ('4', 'Δυτικής Ελλάδας');
INSERT INTO `perifereies` VALUES ('5', 'Ηπείρου');
INSERT INTO `perifereies` VALUES ('6', 'Θεσσαλίας');
INSERT INTO `perifereies` VALUES ('7', 'Ιονίων Νήσων');
INSERT INTO `perifereies` VALUES ('8', 'Κεντρικής Μακεδονίας');
INSERT INTO `perifereies` VALUES ('9', 'Κρήτης');
INSERT INTO `perifereies` VALUES ('10', 'Νοτίου Αιγαίου');
INSERT INTO `perifereies` VALUES ('11', 'Πελοποννήσου');
INSERT INTO `perifereies` VALUES ('12', 'Στερεάς Ελλάδας');

-- ----------------------------
-- Table structure for `types`
-- ----------------------------
DROP TABLE IF EXISTS `types`;
CREATE TABLE `types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(110) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of types
-- ----------------------------
INSERT INTO `types` VALUES ('1', 'Ομάδα 1η -Έργα χερσαίων και εναέριων μεταφορών');
INSERT INTO `types` VALUES ('2', 'Ομάδα 2η – Υδραυλικά έργα');
INSERT INTO `types` VALUES ('3', 'Ομάδα 3η – Λιμενικά έργα');
INSERT INTO `types` VALUES ('4', 'Ομάδα 4η – Συστήματα περιβαλλοντικών υποδομών');
INSERT INTO `types` VALUES ('5', 'Ομάδα 5η – Εξορυκτικές δραστηριότητες');
INSERT INTO `types` VALUES ('6', 'Ομάδα 6η – Τουριστικές εγκαταστάσεις και έργα αστικής ανάπτυξης ');
INSERT INTO `types` VALUES ('7', 'Ομάδα 7η - Πτηνοκτηνοτροφικές εγκαταστάσεις');
INSERT INTO `types` VALUES ('8', 'Ομάδα 8η - Υδατοκαλλιέργειες');
INSERT INTO `types` VALUES ('9', 'Ομάδα 9η - Βιομηχανικές και συναφείς εγκαταστάσεις');
INSERT INTO `types` VALUES ('10', 'Ομάδα 10η - Ανανεώσιμες πηγές ενέργειας');
INSERT INTO `types` VALUES ('11', 'Ομάδα 11η - Μεταφορά ενέργειας καυσίμων και χημικών ουσιών');
INSERT INTO `types` VALUES ('12', 'Ομάδα 12η - Ειδικά έργα και δραστηριότητες');
