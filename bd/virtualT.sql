# Host: localhost  (Version 5.5.5-10.1.37-MariaDB)
# Date: 2019-03-01 22:54:56
# Generator: MySQL-Front 6.1  (Build 1.26)


#
# Structure for table "producto"
#

DROP TABLE IF EXISTS `producto`;
CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_producto` varchar(100) DEFAULT NULL,
  `codigo_producto` varchar(45) DEFAULT NULL,
  `tipo_producto` int(11) DEFAULT NULL,
  `costo_producto` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id_producto`),
  UNIQUE KEY `codigo_producto_UNIQUE` (`codigo_producto`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

#
# Data for table "producto"
#

INSERT INTO `producto` VALUES (1,'d','4936',1,99.00),(2,'asas','140',1,99.00),(3,'addad','609',1,99.00),(4,'7i5tk','4497',1,2324.00);

#
# Structure for table "pruducto_imagen"
#

DROP TABLE IF EXISTS `pruducto_imagen`;
CREATE TABLE `pruducto_imagen` (
  `id_pruducto_imagen` int(11) NOT NULL AUTO_INCREMENT,
  `producto_id_producto` int(11) NOT NULL,
  PRIMARY KEY (`id_pruducto_imagen`),
  KEY `fk_pruducto_imagen_producto1_idx` (`producto_id_producto`),
  CONSTRAINT `fk_pruducto_imagen_producto1` FOREIGN KEY (`producto_id_producto`) REFERENCES `producto` (`id_producto`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "pruducto_imagen"
#


#
# Structure for table "usuario"
#

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_completo` varchar(100) DEFAULT NULL,
  `user` varchar(50) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `tipo_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `user_UNIQUE` (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "usuario"
#


#
# Structure for table "producto_usuario"
#

DROP TABLE IF EXISTS `producto_usuario`;
CREATE TABLE `producto_usuario` (
  `id_producto_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `estatus` int(11) DEFAULT NULL,
  `codigo_venta` varchar(45) NOT NULL,
  `usuario_id_usuario` int(11) NOT NULL,
  `producto_id_producto` int(11) NOT NULL,
  PRIMARY KEY (`id_producto_usuario`),
  UNIQUE KEY `codigo_venta_UNIQUE` (`codigo_venta`),
  KEY `fk_producto_usuario_usuario_idx` (`usuario_id_usuario`),
  KEY `fk_producto_usuario_producto1_idx` (`producto_id_producto`),
  CONSTRAINT `fk_producto_usuario_producto1` FOREIGN KEY (`producto_id_producto`) REFERENCES `producto` (`id_producto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_producto_usuario_usuario` FOREIGN KEY (`usuario_id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "producto_usuario"
#

