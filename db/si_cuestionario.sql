/*
Navicat MySQL Data Transfer

Source Server         : mysql_local
Source Server Version : 100113
Source Host           : localhost:3306
Source Database       : si_cuestionario

Target Server Type    : MYSQL
Target Server Version : 100113
File Encoding         : 65001

Date: 2017-08-23 18:29:37
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
INSERT INTO `cue_cuestionario` VALUES ('1', 'Datos personales', null, null, null, null, null, null);

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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cue_opciones
-- ----------------------------
INSERT INTO `cue_opciones` VALUES ('1', '3', 'SI', '1');
INSERT INTO `cue_opciones` VALUES ('2', '3', 'NO', '1');
INSERT INTO `cue_opciones` VALUES ('3', '4', 'LA(S) TRABAJADORA(S) REQUERIDA(S) NO CONTESTÓ/NO CONTESTARON SU TELÉFONO', '1');
INSERT INTO `cue_opciones` VALUES ('4', '4', 'NO SE LLEGÓ A CONCRETAR LA CITA CON LA(S) TRABAJADORA(S)', '1');
INSERT INTO `cue_opciones` VALUES ('5', '4', 'LA(S) TRABAJADORA(S) NO TENÍA(N) DISPONIBILIDAD EN LAS FECHAS PROPUESTAS', '1');
INSERT INTO `cue_opciones` VALUES ('6', '4', 'NO EXISTÍAN TRABAJADORAS DISPONIBLES EN LA ESPECIALIDAD O RUBRO DE MI REQUERIMIENTO', '1');
INSERT INTO `cue_opciones` VALUES ('7', '4', 'NO EXISTÍA EL NÚMERO DE TRABAJADORAS REQUERIDAS PARA MI REQUERIMIENTO', '1');
INSERT INTO `cue_opciones` VALUES ('8', '5', 'EXCELENTE', '1');
INSERT INTO `cue_opciones` VALUES ('9', '5', 'MUY BUENO', '1');
INSERT INTO `cue_opciones` VALUES ('10', '5', 'BUENO', '1');
INSERT INTO `cue_opciones` VALUES ('11', '5', 'REGULAR', '1');
INSERT INTO `cue_opciones` VALUES ('12', '5', 'MALO', '1');
INSERT INTO `cue_opciones` VALUES ('13', '6', 'AUMENTAR EL NÚMERO DE TRABAJADORAS EN LA BASE DE DATOS', '1');
INSERT INTO `cue_opciones` VALUES ('14', '6', 'AUMENTAR EL NÚMERO DE ESPECIALIDADES DE LAS TRABAJADORAS EN LA BASE DE DATOS', '1');
INSERT INTO `cue_opciones` VALUES ('15', '6', 'PUNTUALIDAD DE LA(S) TRABAJADORA(S)', '1');
INSERT INTO `cue_opciones` VALUES ('16', '6', 'CUMPLIMIENTO DE LA(S) TRABAJADORA(S)', '1');
INSERT INTO `cue_opciones` VALUES ('17', '6', 'RAPIDEZ EN LA RESPUESTA DE LA(S) TRABAJADORA(S)', '1');
INSERT INTO `cue_opciones` VALUES ('18', '6', 'PRECIOS QUE COBRAN LAS MAESTRAS CONSTRUCTORAS POR SU TRABAJO', '1');
INSERT INTO `cue_opciones` VALUES ('19', '6', 'NINGUNO', '1');

-- ----------------------------
-- Table structure for cue_pregunta
-- ----------------------------
DROP TABLE IF EXISTS `cue_pregunta`;
CREATE TABLE `cue_pregunta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `enunciado` varchar(255) DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cue_pregunta
-- ----------------------------
INSERT INTO `cue_pregunta` VALUES ('1', 'Cual es su nombre?', 'text', '1');
INSERT INTO `cue_pregunta` VALUES ('2', 'Cual es su edad?', 'number', '2');
INSERT INTO `cue_pregunta` VALUES ('3', 'Estado civil', 'radio', '3');
INSERT INTO `cue_pregunta` VALUES ('4', 'Hobbies', 'checkbox', '4');
INSERT INTO `cue_pregunta` VALUES ('5', 'Pais', 'select', '5');
INSERT INTO `cue_pregunta` VALUES ('6', 'Comentario', 'textarea', '6');

-- ----------------------------
-- Table structure for cue_respuesta
-- ----------------------------
DROP TABLE IF EXISTS `cue_respuesta`;
CREATE TABLE `cue_respuesta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(255) DEFAULT NULL,
  `id_pregunta` int(11) DEFAULT NULL,
  `res_a` varchar(255) DEFAULT NULL,
  `res_b` int(11) DEFAULT NULL,
  `id_opciones` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cod_respuesta` (`id`) USING BTREE,
  KEY `cod_pregunta` (`id_pregunta`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cue_respuesta
-- ----------------------------
INSERT INTO `cue_respuesta` VALUES ('1', '80', '3', null, null, '1');
INSERT INTO `cue_respuesta` VALUES ('2', '80', '1', null, '3', null);
INSERT INTO `cue_respuesta` VALUES ('3', '80', '2', null, '3', null);
INSERT INTO `cue_respuesta` VALUES ('4', '80', '2', null, '4', null);
INSERT INTO `cue_respuesta` VALUES ('5', '80', '5', null, null, '10');
INSERT INTO `cue_respuesta` VALUES ('6', '80', '6', null, null, '16');
INSERT INTO `cue_respuesta` VALUES ('7', '80', '6', null, null, '17');
INSERT INTO `cue_respuesta` VALUES ('8', '80', '6', null, null, '18');
INSERT INTO `cue_respuesta` VALUES ('9', '60', '3', null, null, '1');
INSERT INTO `cue_respuesta` VALUES ('10', '60', '1', null, '20', null);
INSERT INTO `cue_respuesta` VALUES ('11', '60', '2', null, '2', null);
INSERT INTO `cue_respuesta` VALUES ('12', '60', '2', null, '4', null);
INSERT INTO `cue_respuesta` VALUES ('13', '60', '5', null, null, '11');
INSERT INTO `cue_respuesta` VALUES ('14', '60', '6', null, null, '14');
INSERT INTO `cue_respuesta` VALUES ('15', '60', '6', null, null, '16');
INSERT INTO `cue_respuesta` VALUES ('16', '81', '3', null, null, '1');
INSERT INTO `cue_respuesta` VALUES ('17', '81', '1', null, '1', null);
INSERT INTO `cue_respuesta` VALUES ('18', '81', '2', null, '3', null);
INSERT INTO `cue_respuesta` VALUES ('19', '81', '5', null, null, '8');
INSERT INTO `cue_respuesta` VALUES ('20', '81', '6', null, null, '13');
INSERT INTO `cue_respuesta` VALUES ('21', '84', '3', null, null, '1');
INSERT INTO `cue_respuesta` VALUES ('22', '84', '1', null, '1', null);
INSERT INTO `cue_respuesta` VALUES ('23', '84', '2', null, '1', null);
INSERT INTO `cue_respuesta` VALUES ('24', '84', '5', null, null, '10');
INSERT INTO `cue_respuesta` VALUES ('25', '84', '6', null, null, '14');
INSERT INTO `cue_respuesta` VALUES ('26', '84', '6', null, null, '16');
INSERT INTO `cue_respuesta` VALUES ('27', '85', '3', null, null, '1');
INSERT INTO `cue_respuesta` VALUES ('28', '85', '1', null, '1', null);
INSERT INTO `cue_respuesta` VALUES ('29', '85', '2', null, '3', null);
INSERT INTO `cue_respuesta` VALUES ('30', '85', '5', null, null, '10');
INSERT INTO `cue_respuesta` VALUES ('31', '85', '6', null, null, '16');
INSERT INTO `cue_respuesta` VALUES ('32', '85', '6', null, null, '17');
INSERT INTO `cue_respuesta` VALUES ('33', '85', '6', null, null, '18');
INSERT INTO `cue_respuesta` VALUES ('34', '103', '3', null, null, '2');
INSERT INTO `cue_respuesta` VALUES ('35', '103', '4', null, null, '5');
INSERT INTO `cue_respuesta` VALUES ('36', '103', '4', null, null, '6');
INSERT INTO `cue_respuesta` VALUES ('37', '103', '4', null, null, '7');
INSERT INTO `cue_respuesta` VALUES ('38', '100', '3', null, null, '1');
INSERT INTO `cue_respuesta` VALUES ('39', '100', '1', null, '1', null);
INSERT INTO `cue_respuesta` VALUES ('40', '100', '2', null, '3', null);
INSERT INTO `cue_respuesta` VALUES ('41', '100', '5', null, null, '8');
INSERT INTO `cue_respuesta` VALUES ('42', '100', '6', null, null, '13');
SET FOREIGN_KEY_CHECKS=1;
