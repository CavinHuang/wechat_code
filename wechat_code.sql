/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50719
Source Host           : localhost:3306
Source Database       : wechat_code

Target Server Type    : MYSQL
Target Server Version : 50719
File Encoding         : 65001

Date: 2017-10-18 10:32:59
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for site
-- ----------------------------
DROP TABLE IF EXISTS `site`;
CREATE TABLE `site` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `keywords` varchar(255) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `tj` varchar(255) NOT NULL DEFAULT '',
  `footer_note` varchar(255) NOT NULL DEFAULT '',
  `index_content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of site
-- ----------------------------
INSERT INTO `site` VALUES ('1', '111', '11', '11', '11@qq.com', '111', '11', '<p><img src=\"http://wechatcode.app/upload/2017/10-17/98f387be945e246f4d387c0ef6ea2174.jpg\" alt=\"undefined\"></p><p><img src=\"http://wechatcode.app/upload/2017/10-17/907ddfe43ad915445a6be20f65ec567c.jpg\" alt=\"undefined\"><br></p><p><img src=\"http://wechatcode.app/upload/2017/10-17/2a5723eb328d32c3500259c467b40291.jpg\" alt=\"undefined\"><br></p><p><p style=\"text-align: center;\"><p style=\"text-align: left;\">1、国内自养满月微信白号 （ 一个月左右不包功能，售后只包当天）。<br>2、国内自养满月实名微信白号 （一个月左右手机号注册身份证已实名，售后只包当天）。<br>3、国外自养三个月老号 （可做机器人，手机号注册三个月朋友圈有无不定随机发 货不包功能，售后只包当天）。<br>4、国内自养半年未实名微信老号（半年一手手机号有朋友圈不包功能，售后只包当天）。<br>5、国内自养半年实名微信老号 高质量老号出售（半年一手手机号有朋友圈身份证实名不包功能，售后只包 当天）。<br>6、微信代实名 （代身份证实名。）<br>7、微信实名代卡服务 （手机号注册身份证已实名带手机卡包邮，邮递给您，手机卡0月租不包功能）。</p><p style=\"text-align: left;\">8、其它账号需求：请直接联系客服！</p><p style=\"text-align: left;\"><br></p><p style=\"text-align: left;\"><img src=\"http://wechatcode.app/upload/2017/10-17/578f5649a7f3458acd09c99c68313d93.jpg\" alt=\"undefined\"><br></p><p style=\"text-align: left;\"><img src=\"http://wechatcode.app/upload/2017/10-17/61acb3bcf9ee27da3f9c39d805b255b7.jpg\" alt=\"undefined\"><br></p></p></p>');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_img` varchar(255) NOT NULL DEFAULT '',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `createtime` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', '11', '11', 'http://wechatcode.app/upload/2017/10-17/892c54f81dbae651c313e6317fce862d.jpg', '1', '0');
INSERT INTO `user` VALUES ('2', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'http://wechatcode.app/upload/2017/10-17/654b6a88cc77668d2d7b07828948bbc6.png', '1', '0');
