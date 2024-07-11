/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 100428
Source Host           : localhost:3306
Source Database       : cajasbioprot

Target Server Type    : MYSQL
Target Server Version : 100428
File Encoding         : 65001

Date: 2024-07-11 18:21:52
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for cajas
-- ----------------------------
DROP TABLE IF EXISTS `cajas`;
CREATE TABLE `cajas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero_interno` int(11) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `estado` enum('disponible','ocupada','pendiente') DEFAULT NULL,
  `contenido` longtext DEFAULT NULL,
  `qr_caja` varchar(255) DEFAULT '',
  `img_src` longtext DEFAULT NULL,
  `created_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `pdf_caja` varchar(500) DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNUMERO_INTERNO` (`numero_interno`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of cajas
-- ----------------------------
INSERT INTO `cajas` VALUES ('1', null, 'CAJA 1', 'ocupada', null, null, null, '2024-07-10 17:05:34', '2024-07-10 17:05:34', 'AP 088 - CLAVICULA.pdf');
INSERT INTO `cajas` VALUES ('2', null, 'BOXA 2', 'disponible', 'dsfdfd', null, null, '2024-07-08 10:25:53', '2024-07-08 10:25:53', 'AP 088 - CLAVICULA.pdf');

-- ----------------------------
-- Table structure for caja_movimientos
-- ----------------------------
DROP TABLE IF EXISTS `caja_movimientos`;
CREATE TABLE `caja_movimientos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `caja_id` int(50) DEFAULT NULL,
  `fecha_salida` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `fecha_entrada` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `paciente` varchar(255) DEFAULT NULL,
  `medico` varchar(255) DEFAULT NULL,
  `servicio` varchar(255) DEFAULT NULL,
  `tipo_entrada` enum('ENTRADA','SALIDA') DEFAULT NULL,
  `momento_retiro` enum('Primer Mañana','Segunda Mañana','Tarde','Noche') DEFAULT NULL,
  `created_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `usuario_despacho` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of caja_movimientos
-- ----------------------------
INSERT INTO `caja_movimientos` VALUES ('3', '1', '2024-07-11 00:00:00', '2024-07-10 00:00:00', 'Prueba', 'Lazarte', 'Hospital', null, 'Primer Mañana', null, null, null);
INSERT INTO `caja_movimientos` VALUES ('4', '1', '2024-07-11 00:00:00', '2024-07-10 00:00:00', 'adsadsa', 'sdas', 'sadasd', '', 'Primer Mañana', null, null, null);
INSERT INTO `caja_movimientos` VALUES ('5', '1', '2024-07-11 00:00:00', '2024-07-10 00:00:00', 'dsfds', 'dsfsd', 'dsfsdf', '', 'Primer Mañana', null, null, null);
INSERT INTO `caja_movimientos` VALUES ('8', '1', '2024-07-11 00:00:00', '2024-07-10 00:00:00', 'dfsdf', 'dsfdsf', 'sdfsdf', '', 'Primer Mañana', null, null, null);
INSERT INTO `caja_movimientos` VALUES ('9', '1', '2024-07-11 00:00:00', '2024-07-10 00:00:00', 'dsfdsfds', 'fsdf', 'dsfsdfds', '', 'Primer Mañana', null, null, null);
INSERT INTO `caja_movimientos` VALUES ('10', '1', '2024-07-11 00:00:00', '2024-07-10 00:00:00', 'dsfdsf', 'sdfsdfds', 'sdfsdf', '', 'Primer Mañana', null, null, null);
INSERT INTO `caja_movimientos` VALUES ('11', '1', '2024-07-11 00:00:00', '2024-07-10 00:00:00', 'dsfdsf', 'sdfsdfds', 'sdfsdf', '', 'Primer Mañana', null, null, null);
INSERT INTO `caja_movimientos` VALUES ('12', '1', '2024-07-11 00:00:00', '2024-07-10 00:00:00', 'dsfdsf', 'sdfsdfds', 'sdfsdf', '', 'Primer Mañana', null, null, null);
INSERT INTO `caja_movimientos` VALUES ('13', '1', '2024-07-11 00:00:00', '2024-07-10 00:00:00', 'dsfdsf', 'sdfsdfds', 'sdfsdf', '', 'Primer Mañana', null, null, null);
INSERT INTO `caja_movimientos` VALUES ('14', '1', '2024-07-11 00:00:00', '2024-07-10 00:00:00', 'dsfdsf', 'sdfsdfds', 'sdfsdf', '', 'Primer Mañana', null, null, null);
INSERT INTO `caja_movimientos` VALUES ('15', '1', '2024-07-11 00:00:00', '2024-07-10 00:00:00', 'dsfdsf', 'dsfdsf', 'dsfdsf', '', 'Primer Mañana', null, null, null);
INSERT INTO `caja_movimientos` VALUES ('16', '1', '2024-07-11 00:00:00', '2024-07-10 00:00:00', 'sdfdsf', 'dsfd', 'dsfsdf', '', 'Primer Mañana', null, null, null);
INSERT INTO `caja_movimientos` VALUES ('17', '1', '2024-07-11 00:00:00', '2024-07-10 00:00:00', 'dsfsd', 'sdfds', 'dsfsd', '', 'Primer Mañana', null, null, null);

-- ----------------------------
-- Table structure for grupos
-- ----------------------------
DROP TABLE IF EXISTS `grupos`;
CREATE TABLE `grupos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of grupos
-- ----------------------------
INSERT INTO `grupos` VALUES ('1', 'ADMIN');
INSERT INTO `grupos` VALUES ('2', 'OPERADOR');
INSERT INTO `grupos` VALUES ('3', 'PUBLIC');
INSERT INTO `grupos` VALUES ('4', null);

-- ----------------------------
-- Table structure for permisos_grupos
-- ----------------------------
DROP TABLE IF EXISTS `permisos_grupos`;
CREATE TABLE `permisos_grupos` (
  `id` int(11) NOT NULL,
  `grupo_id` int(11) DEFAULT NULL,
  `acceso` tinyint(1) DEFAULT NULL,
  `programa` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of permisos_grupos
-- ----------------------------

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `usuario` varchar(255) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `grupo_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES ('1', 'Super Admin', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '1', '2024-06-27 18:38:14', '2024-06-27 18:38:09');
INSERT INTO `usuarios` VALUES ('2', 'Operador', 'operador', 'e10adc3949ba59abbe56e057f20f883e', '2', '2024-06-27 18:38:39', '2024-06-27 18:38:41');
SET FOREIGN_KEY_CHECKS=1;
