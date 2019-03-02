/*
 Navicat Premium Data Transfer

 Source Server         : ZEROS
 Source Server Type    : MySQL
 Source Server Version : 50721
 Source Host           : localhost:3306
 Source Schema         : proyect_infraccion

 Target Server Type    : MySQL
 Target Server Version : 50721
 File Encoding         : 65001

 Date: 23/02/2019 17:02:45
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for infracciones
-- ----------------------------
DROP TABLE IF EXISTS `infracciones`;
CREATE TABLE `infracciones`  (
															 `id` int(11) NOT NULL AUTO_INCREMENT,
															 `usuario` int not null,
															 `vehiculo` int(11) NOT NULL,
															 `ley` int(11) NOT NULL,
															 `fecha` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
															 `estado` int(1) NULL DEFAULT 1,
															 PRIMARY KEY (`id`) USING BTREE,
															 INDEX `usuarios`(`usuario`) USING BTREE,
															 INDEX `vehiculo`(`vehiculo`) USING BTREE,
															 INDEX `leyes`(`ley`) USING BTREE,
															 CONSTRAINT `infracciones_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
															 CONSTRAINT `infracciones_ibfk_2` FOREIGN KEY (`vehiculo`) REFERENCES `vehiculos` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
															 CONSTRAINT `infracciones_ibfk_3` FOREIGN KEY (`ley`) REFERENCES `leyes` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of infracciones
-- ----------------------------
INSERT INTO `infracciones` VALUES (1,2, 1, 1, '2019-02-23 17:01:57', 1);
INSERT INTO `infracciones` VALUES (2,2,2, 3, '2019-02-23 17:01:57', 1);
INSERT INTO `infracciones` VALUES (3,2,1, 3, '2019-02-23 17:01:57', 1);
INSERT INTO `infracciones` VALUES (4,2,1, 5, '2019-02-23 17:01:57', 1);
INSERT INTO `infracciones` VALUES (5,2,6, 1, '2019-02-23 17:01:57', 1);
INSERT INTO `infracciones` VALUES (6,2, 2, 8, '2019-02-23 17:01:57', 1);

-- ----------------------------
-- Table structure for ley
-- ----------------------------
DROP TABLE IF EXISTS `leyes`;
CREATE TABLE `leyes`  (
											`id` int(11) NOT NULL AUTO_INCREMENT,
											`codigo` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
											`detalle` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
											`valor` decimal(10, 0) NOT NULL,
											PRIMARY KEY (`id`) USING BTREE,
											UNIQUE INDEX `codigo`(`codigo`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ley
-- ----------------------------
INSERT INTO `leyes` VALUES (1, '0001', 'No portar la Tarjeta de Control', 830000);
INSERT INTO `leyes` VALUES (2, '0002', 'Transitar sin dispositivos que permitan la parada inmediata o con ellos_ pero en estado defectuoso', 830000);
INSERT INTO `leyes` VALUES (3, '0003', 'delantar en lugares prohibidos o hacer uso indebido del carril', 830000);
INSERT INTO `leyes` VALUES (4, '0004', 'Transitar por zonas prohibidas.', 830000);
INSERT INTO `leyes` VALUES (5, '0005', 'Transitar sin los dispositivos luminosos requeridos', 830000);
INSERT INTO `leyes` VALUES (6, '0006', 'Transitar por las aceras o lugares destinados a los peatones y donde la autoridad lo prohiba', 830000);
INSERT INTO `leyes` VALUES (7, '0007', 'Dejar o recoger pasajeros en sitios distintos de los demarcados por las autoridades.', 830000);
INSERT INTO `leyes` VALUES (8, '0008', 'Transitar sin atender alguna de las siguientes reglas', 830000);
INSERT INTO `leyes` VALUES (9, '0009', 'Actuar de manera que ponga en peligro su integridad fisica', 830000);
INSERT INTO `leyes` VALUES (10, '0010', 'Conducir realizando maniobras altamente peligrosas_siempre y cuando ponga en peligro a las personas o cosas y que constituya conductas dolosas o altamente imprudentes. En caso de las motocicletas se inmovilizaran hasta tanto pague la multa', 830000);

-- ----------------------------
-- Table structure for personas
-- ----------------------------
DROP TABLE IF EXISTS `personas`;
CREATE TABLE `personas`  (
													 `id` int(11) NOT NULL AUTO_INCREMENT,
													 `documento` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT '',
													 `pNombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
													 `sNombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT '',
													 `pApellido` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
													 `sApellido` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
													 PRIMARY KEY (`id`) USING BTREE,
													 UNIQUE INDEX `documento`(`documento`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personas
-- ----------------------------
INSERT INTO `personas` VALUES (1, '1065847473', 'ENRIQUE', 'ALFREDO', 'AARON', 'RODRIGUEZ');
INSERT INTO `personas` VALUES (2, '1065625663', 'JOSE', 'ELIAS', 'ACOSTA', 'BUELVAS');
INSERT INTO `personas` VALUES (3, '1065998452', 'PEDRO', 'JOSE', 'ACOSTA', 'CADENA');
INSERT INTO `personas` VALUES (4, '1010133966', 'KEVIN', 'JOSEPH', 'ACOSTA', 'LOPEZ');
INSERT INTO `personas` VALUES (5, '1068418109', 'ENOR', 'ANTONIO', 'ACOSTA', 'RICARDO');
INSERT INTO `personas` VALUES (6, '1065821125', 'DAYNER', 'JAVIER', 'ACOSTA', 'SALAS');
INSERT INTO `personas` VALUES (7, '1065820392', 'NEIBER', 'JOSE', 'ACU脩A', 'ARRIETA');
INSERT INTO `personas` VALUES (8, '1065834191', 'BRYAN', 'ANDRES', 'ACU脩A', 'DONADO');
INSERT INTO `personas` VALUES (9, '1003242728', 'JHONATAN', 'ALONSO', 'ACU脩A', 'PLATA');
INSERT INTO `personas` VALUES (10, '94120513197', 'INDIRA', 'SOL', 'ACU脩A', 'RODRIGUEZ');

-- ----------------------------
-- Table structure for tipoVehiculos
-- ----------------------------
DROP TABLE IF EXISTS `tipoVehiculos`;
CREATE TABLE `tipoVehiculos`  (
																`id` int(11) NOT NULL AUTO_INCREMENT,
																`tipo` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
																PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tipoVehiculos
-- ----------------------------
INSERT INTO `tipoVehiculos` VALUES (1, 'Motocicleta');
INSERT INTO `tipoVehiculos` VALUES (2, 'Motocarro');
INSERT INTO `tipoVehiculos` VALUES (3, 'Autobus');
INSERT INTO `tipoVehiculos` VALUES (4, 'Camion');
INSERT INTO `tipoVehiculos` VALUES (5, 'Furgon');
INSERT INTO `tipoVehiculos` VALUES (6, 'automovil');

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios`  (
													 `id` int(11) NOT NULL AUTO_INCREMENT,
													 `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
													 `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
													 `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
													 `rol` int(1) NULL DEFAULT 1,
													 `nuip` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT '',
													 `nombres` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT '',
													 `apellidos` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT '',
													 `edad` int(11) NULL DEFAULT 0,
													 PRIMARY KEY (`id`) USING BTREE,
													 UNIQUE INDEX `username`(`username`) USING BTREE,
													 UNIQUE INDEX `email`(`email`) USING BTREE,
													 UNIQUE INDEX `nuip`(`nuip`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES (1, 'zeros', 'wowzeros2@gmail.com', sha1('toor'), 2, '1234567890', 'wow', 'zeros', 21);
INSERT INTO `usuarios` VALUES (2, 'policia', 'policia@gmail.com', sha1('test'), 1, '1234567891', 'agente', 'test', 21);

-- ----------------------------
-- Table structure for vehiculos
-- ----------------------------
DROP TABLE IF EXISTS `vehiculos`;
CREATE TABLE `vehiculos`  (
														`id` int(11) NOT NULL AUTO_INCREMENT,
														`placa` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
														`tipo` int(11) NOT NULL,
														`persona` int(11) NOT NULL,
														PRIMARY KEY (`id`) USING BTREE,
														UNIQUE INDEX `placa`(`placa`) USING BTREE,
														INDEX `tipo`(`tipo`) USING BTREE,
														INDEX `persona`(`persona`) USING BTREE,
														CONSTRAINT `vehiculos_ibfk_1` FOREIGN KEY (`tipo`) REFERENCES `tipoVehiculos` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
														CONSTRAINT `vehiculos_ibfk_2` FOREIGN KEY (`persona`) REFERENCES `personas` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of vehiculos
-- ----------------------------
INSERT INTO `vehiculos` VALUES (1, 'ABC-123', 6, 1);
INSERT INTO `vehiculos` VALUES (2, 'ABC-124', 6, 1);
INSERT INTO `vehiculos` VALUES (3, 'ABC-125', 6, 2);
INSERT INTO `vehiculos` VALUES (4, 'ABC-126', 6, 3);
INSERT INTO `vehiculos` VALUES (5, 'ABC-127', 6, 4);
INSERT INTO `vehiculos` VALUES (6, 'ABC-120', 6, 6);
INSERT INTO `vehiculos` VALUES (7, 'ABC-129', 6, 7);

SET FOREIGN_KEY_CHECKS = 1;
