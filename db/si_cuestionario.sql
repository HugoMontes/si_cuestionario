/*
Navicat MySQL Data Transfer

Source Server         : mysql_local
Source Server Version : 100113
Source Host           : localhost:3306
Source Database       : si_cuestionario

Target Server Type    : MYSQL
Target Server Version : 100113
File Encoding         : 65001

Date: 2017-08-27 14:31:31
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for cue_cuestionario
-- ----------------------------
DROP TABLE IF EXISTS `cue_cuestionario`;
CREATE TABLE `cue_cuestionario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) DEFAULT NULL,
  `creado` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `creado_por` int(11) DEFAULT NULL,
  `modificado` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `modificado_por` int(11) DEFAULT NULL,
  `publicado` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `despublicado` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cue_cuestionario
-- ----------------------------
INSERT INTO `cue_cuestionario` VALUES ('1', 'Cuestionario de prueba', '2017-08-26 19:59:43', '1', '2017-08-26 19:59:43', '1', '2017-08-26 19:59:43', '2017-08-26 19:59:43');

-- ----------------------------
-- Table structure for cue_opciones
-- ----------------------------
DROP TABLE IF EXISTS `cue_opciones`;
CREATE TABLE `cue_opciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pregunta` int(11) DEFAULT NULL,
  `enunciado` varchar(255) DEFAULT NULL,
  `estado` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cod_opciones` (`id`) USING BTREE,
  KEY `cod_pregunta` (`id_pregunta`) USING BTREE,
  CONSTRAINT `fk_pregunta` FOREIGN KEY (`id_pregunta`) REFERENCES `cue_pregunta` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cue_opciones
-- ----------------------------
INSERT INTO `cue_opciones` VALUES ('1', '3', 'soltero', '1');
INSERT INTO `cue_opciones` VALUES ('2', '3', 'casado', '1');
INSERT INTO `cue_opciones` VALUES ('3', '3', 'divorciado', '1');
INSERT INTO `cue_opciones` VALUES ('4', '3', 'viudo', '1');
INSERT INTO `cue_opciones` VALUES ('5', '4', 'Leer', '1');
INSERT INTO `cue_opciones` VALUES ('6', '4', 'Bailar', '1');
INSERT INTO `cue_opciones` VALUES ('7', '4', 'Jugar', '1');
INSERT INTO `cue_opciones` VALUES ('8', '4', 'Gimnasio', '1');
INSERT INTO `cue_opciones` VALUES ('9', '5', 'Bolivia', '1');
INSERT INTO `cue_opciones` VALUES ('10', '5', 'Peru', '1');

-- ----------------------------
-- Table structure for cue_pregunta
-- ----------------------------
DROP TABLE IF EXISTS `cue_pregunta`;
CREATE TABLE `cue_pregunta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `enunciado` varchar(255) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `id_cuestionario` int(11) DEFAULT NULL,
  `estado` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cod_pregunta` (`id`),
  KEY `cod_cuestionario` (`id_cuestionario`) USING BTREE,
  CONSTRAINT `fk_cuestionario` FOREIGN KEY (`id_cuestionario`) REFERENCES `cue_cuestionario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cue_pregunta
-- ----------------------------
INSERT INTO `cue_pregunta` VALUES ('1', 'Como se llama?', '1', 'text', '1', '1');
INSERT INTO `cue_pregunta` VALUES ('2', 'Cual es su edad?', '2', 'number', '1', '1');
INSERT INTO `cue_pregunta` VALUES ('3', 'Estado civil', '3', 'radio', '1', '1');
INSERT INTO `cue_pregunta` VALUES ('4', 'Pasatiempos', '4', 'checkbox', '1', '1');
INSERT INTO `cue_pregunta` VALUES ('5', 'Pais', '5', 'select', '1', '1');
INSERT INTO `cue_pregunta` VALUES ('6', 'Comentario', '6', 'textarea', '1', '1');

-- ----------------------------
-- Table structure for cue_respuesta
-- ----------------------------
DROP TABLE IF EXISTS `cue_respuesta`;
CREATE TABLE `cue_respuesta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(255) DEFAULT NULL,
  `id_pregunta` int(11) DEFAULT NULL,
  `respuesta` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cod_respuesta` (`id`) USING BTREE,
  KEY `cod_pregunta` (`id_pregunta`) USING BTREE,
  CONSTRAINT `fk_pregunta_resp` FOREIGN KEY (`id_pregunta`) REFERENCES `cue_pregunta` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cue_respuesta
-- ----------------------------
INSERT INTO `cue_respuesta` VALUES ('1', '1', '1', 'Juan');
INSERT INTO `cue_respuesta` VALUES ('2', '1', '2', '24');
INSERT INTO `cue_respuesta` VALUES ('3', '1', '3', '3');
INSERT INTO `cue_respuesta` VALUES ('4', '1', '4', '5,7,8');
INSERT INTO `cue_respuesta` VALUES ('5', '1', '5', '9');
INSERT INTO `cue_respuesta` VALUES ('6', '1', '6', 'Mi comentario');
SET FOREIGN_KEY_CHECKS=1;
