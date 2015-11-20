/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : mall

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2015-11-20 17:01:45
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for mall_brand
-- ----------------------------
DROP TABLE IF EXISTS `mall_brand`;
CREATE TABLE `mall_brand` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT COMMENT '//id',
  `name` varchar(20) NOT NULL COMMENT '//名称',
  `url` varchar(200) NOT NULL COMMENT '//官方网站',
  `info` varchar(255) NOT NULL DEFAULT '',
  `reg_time` datetime NOT NULL COMMENT '//时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mall_brand
-- ----------------------------
INSERT INTO `mall_brand` VALUES ('2', '红豆南国', 'http://www.yc60.com', '红豆南国', '2015-11-20 16:39:21');
INSERT INTO `mall_brand` VALUES ('3', '喜洋洋', 'http://www.yc60.com', '喜洋洋', '2015-11-20 16:39:37');
INSERT INTO `mall_brand` VALUES ('4', '秋水伊人', 'http://www.yc60.com', '秋水伊人', '2015-11-20 16:52:20');

-- ----------------------------
-- Table structure for mall_level
-- ----------------------------
DROP TABLE IF EXISTS `mall_level`;
CREATE TABLE `mall_level` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `level_name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mall_level
-- ----------------------------
INSERT INTO `mall_level` VALUES ('1', '超级管理员');
INSERT INTO `mall_level` VALUES ('2', ' 普通管理员');
INSERT INTO `mall_level` VALUES ('3', ' 商品发布专员');
INSERT INTO `mall_level` VALUES ('4', ' 订单处理专员');

-- ----------------------------
-- Table structure for mall_manager
-- ----------------------------
DROP TABLE IF EXISTS `mall_manager`;
CREATE TABLE `mall_manager` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '//id',
  `user` varchar(20) NOT NULL COMMENT '//user',
  `pass` char(40) NOT NULL COMMENT '//pass',
  `level` tinyint(1) unsigned NOT NULL COMMENT '//等级',
  `login_count` smallint(6) unsigned NOT NULL COMMENT '//登录次数',
  `last_ip` varchar(20) NOT NULL COMMENT '//最后登录的ip',
  `last_time` datetime NOT NULL COMMENT '//最后登录的时间',
  `reg_time` datetime NOT NULL COMMENT '//注册时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mall_manager
-- ----------------------------
INSERT INTO `mall_manager` VALUES ('43', '小泽马丽雅', '7c4a8d09ca3762af61e59520943dc26494f8941b', '1', '0', '127.0.0.1', '0000-00-00 00:00:00', '2015-10-19 17:09:33');
INSERT INTO `mall_manager` VALUES ('45', 'admin', '7c4a8d09ca3762af61e59520943dc26494f8941b', '1', '13', '127.0.0.1', '2015-11-20 13:26:41', '2015-11-10 17:03:02');
INSERT INTO `mall_manager` VALUES ('25', 'admin5', '20eabe5d64b0e216796e834f52d61fd0b70332fc', '4', '0', '127.0.0.1', '0000-00-00 00:00:00', '2015-10-15 16:36:42');
INSERT INTO `mall_manager` VALUES ('46', 'admin8', '7c4a8d09ca3762af61e59520943dc26494f8941b', '1', '0', '127.0.0.1', '0000-00-00 00:00:00', '2015-11-11 10:23:54');
INSERT INTO `mall_manager` VALUES ('23', 'admin3', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2', '0', '127.0.0.1', '0000-00-00 00:00:00', '2015-10-15 16:36:13');
INSERT INTO `mall_manager` VALUES ('22', 'admin2', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2', '0', '127.0.0.1', '0000-00-00 00:00:00', '2015-10-15 16:35:52');
INSERT INTO `mall_manager` VALUES ('21', 'admin1', '7c4a8d09ca3762af61e59520943dc26494f8941b', '1', '0', '127.0.0.1', '0000-00-00 00:00:00', '2015-10-14 16:16:49');
INSERT INTO `mall_manager` VALUES ('30', '蜡笔小新 ', '7c4a8d09ca3762af61e59520943dc26494f8941b', '3', '0', '127.0.0.1', '0000-00-00 00:00:00', '2015-10-15 16:38:13');
INSERT INTO `mall_manager` VALUES ('32', '小王', '7c4a8d09ca3762af61e59520943dc26494f8941b', '1', '0', '127.0.0.1', '0000-00-00 00:00:00', '2015-10-15 16:38:52');
INSERT INTO `mall_manager` VALUES ('33', '小郑', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2', '0', '127.0.0.1', '0000-00-00 00:00:00', '2015-10-15 16:40:47');
INSERT INTO `mall_manager` VALUES ('34', '小戴', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2', '0', '127.0.0.1', '0000-00-00 00:00:00', '2015-10-15 16:42:07');
INSERT INTO `mall_manager` VALUES ('35', '小李', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2', '0', '127.0.0.1', '0000-00-00 00:00:00', '2015-10-15 16:44:19');
INSERT INTO `mall_manager` VALUES ('50', 'test', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2', '0', '127.0.0.1', '0000-00-00 00:00:00', '2015-11-12 09:42:37');
INSERT INTO `mall_manager` VALUES ('51', 'test1', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2', '0', '127.0.0.1', '0000-00-00 00:00:00', '2015-11-12 09:47:01');
INSERT INTO `mall_manager` VALUES ('40', '苍井空', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2', '0', '127.0.0.1', '0000-00-00 00:00:00', '2015-10-15 17:23:59');

-- ----------------------------
-- Table structure for mall_nav
-- ----------------------------
DROP TABLE IF EXISTS `mall_nav`;
CREATE TABLE `mall_nav` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '//id',
  `name` varchar(20) NOT NULL COMMENT '//导航名称',
  `info` varchar(200) NOT NULL COMMENT '//导航简介',
  `sort` mediumint(8) unsigned NOT NULL COMMENT '//排序',
  `sid` mediumint(8) NOT NULL COMMENT '//类别',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mall_nav
-- ----------------------------
INSERT INTO `mall_nav` VALUES ('30', '珠宝手表', '珠宝手表', '30', '0');
INSERT INTO `mall_nav` VALUES ('19', '女性服装', '女性服装', '1', '0');
INSERT INTO `mall_nav` VALUES ('28', '电子数码', '电子数码', '28', '0');
INSERT INTO `mall_nav` VALUES ('29', '时尚家居', '时尚家居', '29', '0');
INSERT INTO `mall_nav` VALUES ('22', '连衣裙', '连衣裙', '22', '19');
INSERT INTO `mall_nav` VALUES ('37', '牛仔裤', '牛仔裤', '37', '19');
INSERT INTO `mall_nav` VALUES ('31', '美容美发', '美容美发', '31', '0');
INSERT INTO `mall_nav` VALUES ('32', '家居建材', '家居建材', '32', '0');
INSERT INTO `mall_nav` VALUES ('33', '美食特产', '美食特产', '33', '0');
INSERT INTO `mall_nav` VALUES ('34', '日用百货', '日用百货', '34', '0');
INSERT INTO `mall_nav` VALUES ('35', '汽车用品', '汽车用品', '35', '0');
INSERT INTO `mall_nav` VALUES ('36', '母婴用品', '母婴用品', '36', '0');
