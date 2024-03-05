CREATE TABLE `plataforma_ventas_categos` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `id_dominio` int(11) DEFAULT NULL,
  `id_proveedor` int(11) DEFAULT NULL,
  `categoria` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

CREATE TABLE `plataforma_ventas_envios` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `id_dominio` int(11) DEFAULT NULL,
  `id_proveedor` int(11) DEFAULT NULL,
  `id_envio` int(11) DEFAULT NULL,
  `envio` text DEFAULT NULL,
  `costo` decimal(10,0) DEFAULT NULL,
  `moneda` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

CREATE TABLE `plataforma_ventas_marcas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_dominio` int(11) DEFAULT NULL,
  `id_proveedor` int(11) DEFAULT NULL,
  `id_marca` int(11) DEFAULT NULL,
  `marca` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

CREATE TABLE `plataforma_ventas_plataformas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_dominio` int(11) DEFAULT NULL,
  `id_plataforma` int(11) DEFAULT NULL,
  `plataforma` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

CREATE TABLE `plataforma_ventas_plataformas_publicidad` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_dominio` int(11) DEFAULT NULL,
  `id_plataforma` int(11) DEFAULT NULL,
  `id_campania` int(11) DEFAULT NULL,
  `publicidad` text DEFAULT NULL,
  `acoss` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

CREATE TABLE `plataforma_ventas_precio` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_dominio` int(11) DEFAULT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

CREATE TABLE `plataforma_ventas_productos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_dominio` int(11) DEFAULT NULL,
  `id_plataforma` int(11) DEFAULT NULL,
  `id_proveedor` int(11) DEFAULT NULL,
  `id_marca` int(11) DEFAULT NULL,
  `id_catego` int(11) DEFAULT NULL,
  `id_sub_catego` int(11) DEFAULT NULL,
  `producto` text DEFAULT NULL,
  `modelo` text DEFAULT NULL,
  `num_piezas` int(11) DEFAULT NULL,
  `inventario_minimo` int(11) DEFAULT NULL,
  `precio_venta` decimal(10,0) DEFAULT NULL,
  `descuento` decimal(10,0) DEFAULT NULL,
  `comision_plataforma` decimal(10,0) DEFAULT NULL,
  `fijo_plataforma` decimal(10,0) DEFAULT NULL,
  `id_campania` decimal(10,0) DEFAULT NULL,
  `id_costo_envio` int(11) DEFAULT NULL,
  `url_proveedor_1` text DEFAULT NULL,
  `url_proveedor_2` text DEFAULT NULL,
  `url_proveedor_3` text DEFAULT NULL,
  `url_proveedor_4` text DEFAULT NULL,
  `url_proveedor_5` text DEFAULT NULL,
  `url_proveedor_6` text DEFAULT NULL,
  `observaciones` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

CREATE TABLE `plataforma_ventas_proveedores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_dominio` int(11) NOT NULL,
  `nombre` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=75 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

CREATE TABLE `plataforma_ventas_stock` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_dominio` int(11) DEFAULT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

CREATE TABLE `plataforma_ventas_sub_categos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_dominio` int(11) DEFAULT NULL,
  `id_proveedor` int(11) DEFAULT NULL,
  `id_catego` int(11) DEFAULT NULL,
  `id_sub_catego` int(11) DEFAULT NULL,
  `sub_catego` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

CREATE TABLE `plataforma_ventas_tipo_cambio` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_dominio` int(11) DEFAULT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `normal` decimal(10,0) DEFAULT NULL,
  `preferencial` decimal(10,0) DEFAULT NULL,
  `un_dia` decimal(10,0) DEFAULT NULL,
  `una_semana` decimal(10,0) DEFAULT NULL,
  `dos_semanas` decimal(10,0) DEFAULT NULL,
  `tres_semanas` decimal(10,0) DEFAULT NULL,
  `un_mes` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

