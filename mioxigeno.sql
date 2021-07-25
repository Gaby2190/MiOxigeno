/*
Navicat MySQL Data Transfer

Source Server         : mal
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : mioxigeno

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2021-07-23 13:41:56
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for proveedores
-- ----------------------------
DROP TABLE IF EXISTS `proveedores`;
CREATE TABLE `proveedores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `direccion` text COLLATE utf8_spanish_ci NOT NULL,
  `correo` text COLLATE utf8_spanish_ci NOT NULL,
  `telefono` text COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` text COLLATE utf8_spanish_ci NOT NULL,
  `capacidad` text COLLATE utf8_spanish_ci NOT NULL,
  `usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `perfil` text COLLATE utf8_spanish_ci NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `ultimo_login` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of proveedores
-- ----------------------------
INSERT INTO `proveedores` VALUES ('1', 'Oximedon Oxigeno Medicinal ', 'Miraflores Bajo (Sur)', 'bralozano125@hotmail.com', '0983325529', '1', '10', 'OOM', '$2a$07$asxx54ahjppf45sd87a5auFL5K1.Cmt9ZheoVVuudOi5BCi10qWly', 'PROVEEDOR', 'views/img/proveedores/OOM/601.jpg', '1', '0000-00-00 00:00:00', '2021-07-23 10:32:43');
INSERT INTO `proveedores` VALUES ('2', 'Oxicentro', 'Colon y Ramon Pinto (Centro)', 'oxicentroloja@gmail.com', '0988894588', '4', '12', 'Oxicentro', '$2a$07$asxx54ahjppf45sd87a5auFL5K1.Cmt9ZheoVVuudOi5BCi10qWly', 'PROVEEDOR', 'views/img/proveedores/Oxicentro/403.jpg', '1', '0000-00-00 00:00:00', '2021-07-23 11:34:32');
INSERT INTO `proveedores` VALUES ('3', 'Oxiwest', '24 de Mayo yZoilo Rodriguez', 'cobijosred@gmail.com', '0994409808', '1', '1', 'Oxiwest', '$2a$07$asxx54ahjppf45sd87a5auFL5K1.Cmt9ZheoVVuudOi5BCi10qWly', 'PROVEEDOR', 'views/img/proveedores/Oxiwest/428.jpg', '0', '0000-00-00 00:00:00', '2021-07-23 12:31:44');

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `direccion` text COLLATE utf8_spanish_ci NOT NULL,
  `correo` text COLLATE utf8_spanish_ci NOT NULL,
  `telefono` text COLLATE utf8_spanish_ci NOT NULL,
  `usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `perfil` text COLLATE utf8_spanish_ci NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `ultimo_login` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES ('1', 'Admin', 'Quito', 'mallopez@hotmail.es', '0987648213', 'admin', '$2a$07$asxx54ahjppf45sd87a5aufV0tZPci244b0DsnuFaj9qLMtNSO/Ju', 'ADMINISTRADOR', 'views/img/usuarios/admin/507.jpg', '1', '2021-07-23 13:33:08', '2021-07-23 13:33:08');
INSERT INTO `usuarios` VALUES ('3', 'Mario Lopez', 'Flavio Alfaro', 'mallopez@hotmail.es', '0987648213', 'mariolopez', '$2a$07$asxx54ahjppf45sd87a5auFL5K1.Cmt9ZheoVVuudOi5BCi10qWly', 'USUARIO', 'views/img/usuarios/mariolopez/588.jpg', '1', '2021-07-23 13:14:29', '2021-07-23 13:14:29');
INSERT INTO `usuarios` VALUES ('4', 'Miguel Lopez', 'Quito', 'joslopez@hotmail.com', '0987648213', 'joslop', '$2a$07$asxx54ahjppf45sd87a5auFL5K1.Cmt9ZheoVVuudOi5BCi10qWly', 'USUARIO', 'views/img/usuarios/joslop/179.jpg', '0', '0000-00-00 00:00:00', '2021-07-23 12:40:48');
