/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 100138
Source Host           : localhost:3306
Source Database       : crud_agenda

Target Server Type    : MYSQL
Target Server Version : 100138
File Encoding         : 65001

Date: 2021-02-27 03:42:52
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for contato
-- ----------------------------
DROP TABLE IF EXISTS `contato`;
CREATE TABLE `contato` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `descricao` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of contato
-- ----------------------------
INSERT INTO `contato` VALUES ('1', 'Pedro Henrique', '(31) 97179-7571', 'pedro2151.recall@gmail.com', '<p><strong>Desenvolvedor Web Design.</strong></p>');
