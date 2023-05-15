-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 15-05-2023 a las 14:20:13
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `ID` int NOT NULL,
  `Nombre` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Imagen` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Ventas` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`ID`, `Nombre`, `Imagen`, `Ventas`) VALUES
(1, 'Hoodies', 'https://cdn-icons-png.flaticon.com/512/9770/9770383.png', 376),
(2, 'Gorras', 'https://cdn-icons-png.flaticon.com/512/343/343232.png', 862),
(3, 'Gafas', 'https://cdn-icons-png.flaticon.com/512/5398/5398469.png', 961),
(4, 'Chaquetas', 'https://cdn-icons-png.flaticon.com/512/2182/2182706.png', 456),
(5, 'Básicos', 'https://cdn-icons-png.flaticon.com/512/2590/2590030.png', 923);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `ID_P` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Precio` float NOT NULL,
  `Categoria` int NOT NULL,
  `Descripcion` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Imagen` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Descuento` int NOT NULL,
  `Disponibilidad` int NOT NULL,
  `Pago` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  PRIMARY KEY (`ID_P`),
  KEY `FK_Categoria` (`Categoria`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`ID_P`, `Nombre`, `Precio`, `Categoria`, `Descripcion`, `Imagen`, `Descuento`, `Disponibilidad`, `Pago`) VALUES
(1, 'Dolce & Gabbana Eyewear', 1870000, 3, 'Lentes de sol - DG Logo', 'https://cdn-images.farfetch-contents.com/16/08/95/43/16089543_32451138_1000.jpg', 0, 1, '<script src=\"https://www.mercadopago.com.co/integrations/v1/web-payment-checkout.js\"\r\ndata-preference-id=\"1181224783-60fc2c7f-99ae-41ac-a757-fb6ce7ab8d1f\" data-source=\"button\">\r\n</script>\r\n\r\n'),
(2, 'Burberry Eyewear', 1690000, 3, 'Lentes de sol con logo en mica y en marco', 'https://cdn-images.farfetch-contents.com/14/68/47/54/14684754_23209464_1000.jpg', 0, 1, '<script src=\"https://www.mercadopago.com.co/integrations/v1/web-payment-checkout.js\"\r\ndata-preference-id=\"1181224783-2827dce5-d5c3-4bf0-8697-5b1245f19ad9\" data-source=\"button\">\r\n</script>\r\n\r\n'),
(3, 'Balenciaga Eyewear', 2674760, 3, 'Lentes de sol Shield 2.0 con armazón rectangular', 'https://cdn-images.farfetch-contents.com/19/14/35/28/19143528_42244636_1000.jpg', 10, 1, '<script src=\"https://www.mercadopago.com.co/integrations/v1/web-payment-checkout.js\"\r\ndata-preference-id=\"1181224783-bdbe9e22-1627-40b8-9375-738ac01f25a4\" data-source=\"button\">\r\n</script>\r\n\r\n'),
(4, 'Rick Owens Eyewear', 4000000, 3, 'Lentes de sol Rick', 'https://cdn-images.farfetch-contents.com/19/06/96/19/19069619_44426168_1000.jpg', 5, 1, '<script src=\"https://www.mercadopago.com.co/integrations/v1/web-payment-checkout.js\"\r\ndata-preference-id=\"1181224783-38de98a3-2465-4c46-aa3d-d8184eb959db\" data-source=\"button\">\r\n</script>\r\n\r\n'),
(5, 'Supreme Washed', 567000, 2, 'Gorra con efecto lavado y colores llamativos ', 'https://cdn-images.farfetch-contents.com/18/10/77/66/18107766_40237307_1000.jpg', 0, 1, '<script src=\"https://www.mercadopago.com.co/integrations/v1/web-payment-checkout.js\"\r\ndata-preference-id=\"1181224783-500fa9e5-16b1-4e61-b793-76de34c9d590\" data-source=\"button\">\r\n</script>\r\n\r\n'),
(6, 'Supreme x TNF', 680000, 2, 'Gorra de senderismo Supreme en colaboración con The North Face', 'https://cdn-images.farfetch-contents.com/19/55/84/70/19558470_43557725_1000.jpg', 15, 1, '<script src=\"https://www.mercadopago.com.co/integrations/v1/web-payment-checkout.js\"\r\ndata-preference-id=\"1181224783-85c31099-f8c9-49f0-8c5c-09193f595752\" data-source=\"button\">\r\n</script>\r\n\r\n'),
(7, 'Supreme Celtic', 590000, 2, 'Gorra Celtic Green-Pink con nudo', 'https://cdn-images.farfetch-contents.com/18/10/08/70/18100870_38534075_1000.jpg', 5, 1, '<script src=\"https://www.mercadopago.com.co/integrations/v1/web-payment-checkout.js\"\r\ndata-preference-id=\"1181224783-66c22568-eaa9-47ff-ac29-f8298662eac8\" data-source=\"button\">\r\n</script>\r\n\r\n'),
(8, 'Supreme SS22 ', 639000, 2, 'Gorro de pescador con logo SS22 Blue', 'https://i.imgur.com/wGLChjF.png', 0, 1, '<script src=\"https://www.mercadopago.com.co/integrations/v1/web-payment-checkout.js\"\r\ndata-preference-id=\"1181224783-7dc4b9b9-2c0f-4deb-8761-3be49f196531\" data-source=\"button\">\r\n</script>\r\n\r\n'),
(9, 'Supreme SS22 ', 639000, 2, 'Gorro de pescador con logo SS22 Black', 'https://cdn-images.farfetch-contents.com/18/50/82/44/18508244_40493435_1000.jpg', 5, 1, '<script src=\"https://www.mercadopago.com.co/integrations/v1/web-payment-checkout.js\"\r\ndata-preference-id=\"1181224783-e6ead29b-a58b-4b39-a356-0a7a73d27ae3\" data-source=\"button\">\r\n</script>\r\n\r\n'),
(10, 'Maison Kitsuné', 1030000, 1, 'Hoodie Chillax Fox', 'https://media.maisonkitsune.com/media/catalog/product/k/m/km00307km0001-p199_01.jpg', 0, 1, '<script src=\"https://www.mercadopago.com.co/integrations/v1/web-payment-checkout.js\"\r\ndata-preference-id=\"1181224783-29617db5-0232-4924-9240-d1ae8dfc0924\" data-source=\"button\">\r\n</script>\r\n\r\n'),
(11, 'Maison Kitsuné', 1180000, 1, 'Chillax fox patch classic hoodie', 'https://i.imgur.com/AjxRBeR.png', 30, 1, '<script src=\"https://www.mercadopago.com.co/integrations/v1/web-payment-checkout.js\"\r\ndata-preference-id=\"1181224783-a955beb4-18ff-4635-9621-34a896aae1c9\" data-source=\"button\">\r\n</script>\r\n\r\n'),
(12, 'Ripndip FFD ', 590000, 4, 'Fuckin Fuck Denim Jacket (Black)', 'https://cdn.shopify.com/s/files/1/0177/2424/products/IMG_7215_1024x1024.jpg?v=1666911851', 0, 1, '<script src=\"https://www.mercadopago.com.co/integrations/v1/web-payment-checkout.js\"\r\ndata-preference-id=\"1181224783-3d7c42b1-3f59-42c5-a8b6-f0c7ebc8720c\" data-source=\"button\">\r\n</script>\r\n\r\n'),
(13, 'Ripndip CC', 450000, 4, 'Checked Coaches Jacket (Black/Charcoal)', 'https://cdn.shopify.com/s/files/1/0177/2424/products/Summer22-_0042_027A7959_1024x1024.jpg?v=1654281085', 5, 1, '<script src=\"https://www.mercadopago.com.co/integrations/v1/web-payment-checkout.js\"\r\ndata-preference-id=\"1181224783-9d153323-b253-4ef4-93f3-6bdd0822060a\" data-source=\"button\">\r\n</script>\r\n\r\n'),
(14, 'Ripndip Sweater ', 390000, 1, 'Coconerm Knit Sweater (Black)', 'https://cdn.shopify.com/s/files/1/0177/2424/products/Knits-Fall22_0005_9R9A8525_1024x1024.jpg?v=1658446354', 0, 1, '<script src=\"https://www.mercadopago.com.co/integrations/v1/web-payment-checkout.js\"\r\ndata-preference-id=\"1181224783-428db1b2-bc54-481a-b3e3-8954cfea15f5\" data-source=\"button\">\r\n</script>\r\n\r\n'),
(15, 'Ripndip Hoodie', 570000, 1, 'Coco Nermal Hoodie (Black)', 'https://cdn.shopify.com/s/files/1/0177/2424/products/smu_0007_9R9A8207_1024x1024.jpg?v=1655939495', 5, 1, '<script src=\"https://www.mercadopago.com.co/integrations/v1/web-payment-checkout.js\"\r\ndata-preference-id=\"1181224783-d0d36bba-b0a9-4394-9ed6-c6405065b80b\" data-source=\"button\">\r\n</script>\r\n\r\n'),
(16, 'Ripndip Polar', 720000, 4, 'Shmoody Polar Fleece Quilted Reversible Jacket (Clay/Purple)', 'https://cdn.shopify.com/s/files/1/0177/2424/products/Holiday21-Jackets_0052_KK2A0010_1024x1024.jpg?v=1634252535', 0, 1, '<script src=\"https://www.mercadopago.com.co/integrations/v1/web-payment-checkout.js\"\r\ndata-preference-id=\"1181224783-08e91908-e6db-49c9-bc3b-5febbf3d8b15\" data-source=\"button\">\r\n</script>\r\n\r\n'),
(17, 'Ripndip MJQ', 640000, 4, 'Mystic Jerm Quilted Bomber Jacket (Black)', 'https://cdn.shopify.com/s/files/1/0177/2424/products/Jackets-Fall22_0006_9R9A8461_1024x1024.jpg?v=1658361333', 0, 1, '<script src=\"https://www.mercadopago.com.co/integrations/v1/web-payment-checkout.js\"\r\ndata-preference-id=\"1181224783-5f567fe2-e5fe-43d6-ac10-0dd87c19db7d\" data-source=\"button\">\r\n</script>\r\n\r\n'),
(18, 'Ripndip Socks', 90000, 5, 'Lord Nermal Mid Socks (Olive)', 'https://cdn.shopify.com/s/files/1/0177/2424/products/IMG_4536_1024x1024.jpg?v=1675899464', 10, 1, '<script src=\"https://www.mercadopago.com.co/integrations/v1/web-payment-checkout.js\"\r\ndata-preference-id=\"1181224783-6f28a59d-dad4-406c-8700-90a4e16f2c4b\" data-source=\"button\">\r\n</script>\r\n\r\n'),
(19, 'Ripndip Socks', 81000, 5, 'We Out Here Mid Socks (Warm Grey)', 'https://cdn.shopify.com/s/files/1/0177/2424/products/IMG_4539_1024x1024.jpg?v=1675899493', 0, 1, '<script src=\"https://www.mercadopago.com.co/integrations/v1/web-payment-checkout.js\"\r\ndata-preference-id=\"1181224783-9a1bf9c4-3e30-4ce8-bfdb-d22d2943b422\" data-source=\"button\">\r\n</script>\r\n\r\n'),
(20, 'Burberry Socks', 590000, 5, 'Calcetines con motivo Vintage Check', 'https://cdn-images.farfetch-contents.com/17/65/15/23/17651523_37704285_1000.jpg', 20, 1, '<script src=\"https://www.mercadopago.com.co/integrations/v1/web-payment-checkout.js\"\r\ndata-preference-id=\"1181224783-476ca742-84df-4627-916f-adee89330096\" data-source=\"button\">\r\n</script>\r\n\r\n\r\n\r\n'),
(21, 'Ripndip T-Shirt', 120000, 5, 'Nerma Lisa Pocket Tee (Slate)', 'https://cdn.shopify.com/s/files/1/0177/2424/products/IMG_6104_1024x1024.jpg?v=1675898891', 12, 1, '<script src=\"https://www.mercadopago.com.co/integrations/v1/web-payment-checkout.js\"\r\ndata-preference-id=\"1181224783-eb8e0f03-f318-4bff-b618-9519633ac0be\" data-source=\"button\">\r\n</script>\r\n\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscribciones`
--

DROP TABLE IF EXISTS `suscribciones`;
CREATE TABLE IF NOT EXISTS `suscribciones` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `suscribciones`
--

INSERT INTO `suscribciones` (`Id`, `Email`) VALUES
(2, 'suarezff@gmail.com'),
(3, 'anap@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `user_ID` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Password` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `rePassword` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  PRIMARY KEY (`user_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`user_ID`, `Nombre`, `Email`, `Password`, `rePassword`) VALUES
(1, 'Daniel Tovar', 'dfttcucho10@gmail.com', 'danieltovar', 'danieltovar'),
(2, 'Maicol Escobar', 'escobarm71@gmail.com', '32321', '32321');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
