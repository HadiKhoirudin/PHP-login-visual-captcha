/*
Navicat MySQL Data Transfer

Source Server         : MySQL-Localhost
Source Server Version : 50505
Source Host           : 127.1.1.0:3306
Source Database       : leveling

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-07-31 10:08:43
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'Admin', 'admin', 'admin', 'admin');
INSERT INTO `admin` VALUES ('2', 'User', 'user', 'user', 'user');
INSERT INTO `admin` VALUES ('3', 'Test Saja', 'test', 'test', 'admin');
