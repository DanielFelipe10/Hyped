-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 10-04-2023 a las 13:44:55
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
  `Nombre` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Imagen` text COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`ID`, `Nombre`, `Imagen`) VALUES
(1, 'Hoodies', 'https://cdn-icons-png.flaticon.com/512/9770/9770383.png'),
(2, 'Gorras', 'https://cdn-icons-png.flaticon.com/512/343/343232.png'),
(3, 'Gafas', 'https://cdn-icons-png.flaticon.com/512/5398/5398469.png'),
(4, 'Chaquetas', 'https://cdn-icons-png.flaticon.com/512/2182/2182706.png'),
(5, 'Básicos', 'https://cdn-icons-png.flaticon.com/512/2590/2590030.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) COLLATE utf8mb3_spanish2_ci NOT NULL,
  `Precio` float NOT NULL,
  `Descuento` int NOT NULL,
  `Descripción` text COLLATE utf8mb3_spanish2_ci NOT NULL,
  `Imagen` text COLLATE utf8mb3_spanish2_ci NOT NULL,
  `Disponibilidad` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`ID`, `Nombre`, `Precio`, `Descuento`, `Descripción`, `Imagen`, `Disponibilidad`) VALUES
(6, 'iPhone 14', 6500000, 5, 'Gran duración de batería. Dos tamaños perfectos. Ahora en amarillo. Más información. Cámara nivel pro. Fotos nivel wow. Ceramic Shield. Batería para todo el día. iOS 16. 6 colores. Accesibilidad.', 'https://www.apple.com/v/iphone-14-pro/d/images/meta/iphone-14-pro_overview__3dn6st99cpea_og.png', 1),
(7, 'iPhone 13', 5500000, 5, 'Modo nocturno, el 5G, el Face ID y el MagSafe para una carga inalámbrica más fácil.', 'https://andro4all.com/hero/2021/09/iPhone-13.jpg?width=768&aspect_ratio=16:9&format=nowebp', 1),
(8, 'iPhone X', 4300000, 20, 'Pantalla OLED de 5.8 pulgadas sin bordes, reconocimiento facial (Face ID), cámara trasera dual con estabilización óptica de imagen, procesador A11 Bionic, y carga inalámbrica.', 'https://www.enter.co/wp-content/uploads/2017/09/iPhone-X-sec.jpg', 2),
(9, 'Huawei Mate 30 PRO', 5100000, 30, 'Carga rápida, cámara trasera cuádruple con lentes Leica de alta calidad y cámara frontal de 32 megapíxeles', 'https://i0.wp.com/imgs.hipertextual.com/wp-content/uploads/2019/09/hipertextual-filtrados-completo-huawei-mate-30-mate-30-pro-mate-30-lite-su-edicion-especial-con-porsche-2019718901.jpg?fit=1910%2C1174&ssl=1', 1),
(10, 'Huawei Mate 50 PRO', 7000000, 5, 'Parlantes stereo, Face ID y lector de huellas bajo pantalla, resistencia al polvo y agua y EMUI 13', 'https://i.blogs.es/d8ac33/1366_2000/840_560.jpeg', 1),
(11, 'Airpods 2', 1200000, 5, 'Experimenta la comodidad y la calidad de sonido superior con los AirPods de 2ª generación con estuche de carga. Compra ahora y disfruta la máxima libertad.', 'https://expertreviews.b-cdn.net/sites/expertreviews/files/styles/er_main_wide/public/2021/02/apple_airpods_with_wireless_charging_2.jpg?itok=Yx4e1dV-', 1),
(12, 'Airpods Max', 2800000, 2, 'El equilibrio perfecto entre un audio de alta fidelidad increíble y la mágica facilidad de uso de los AirPods.', 'https://media.revistagq.com/photos/616d33712de042dc4fb2acb5/16:9/w_2560%2Cc_limit/GettyImages-1235728877.jpg', 1),
(13, 'Apple Watch SE', 1700000, 5, 'Nuevo procesador. Conexión celular y GPS. Resistencia al agua. Detección de Choques.', 'https://www.apple.com/newsroom/images/product/watch/standard/Apple-Watch-S8-2up-hero-220907_Full-Bleed-Image.jpg.large.jpg', 1),
(14, 'BOSE Soundlink Flex', 790000, 5, 'Es un buen compañero para hacer senderismo o tomar una ducha y ofrece una reproducción que distingue bien las voces e instrumentos.', 'https://cdn.computerhoy.com/sites/navi.axelspringer.es/public/media/image/2022/01/bose-soundlink-flex-analisis-opinion-2591845.jpg', 2),
(15, 'JBL Boombox 2', 1900000, 10, 'El Boombox 2 de JBL mantiene tu fiesta en marcha día y noche con su batería de increíble duración de 24 horas. El altavoz de JBL más potente. ¡Actívalo!', 'https://electrodomesticosmedellin.com/wp-content/uploads/2022/02/jbl2.jpg', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `ID_P` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Precio` float NOT NULL,
  `Categoria` int NOT NULL,
  `Descripcion` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Imagen` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Descuento` int NOT NULL,
  `Disponibilidad` int NOT NULL,
  PRIMARY KEY (`ID_P`),
  KEY `FK_Categoria` (`Categoria`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`ID_P`, `Nombre`, `Precio`, `Categoria`, `Descripcion`, `Imagen`, `Descuento`, `Disponibilidad`) VALUES
(1, 'Dolce & Gabbana Eyewear', 1870000, 3, 'Lentes de sol - DG Logo', 'https://cdn-images.farfetch-contents.com/16/08/95/43/16089543_32451138_1000.jpg', 0, 1),
(2, 'Burberry Eyewear', 1690000, 3, 'Lentes de sol con logo en mica y en marco', 'https://cdn-images.farfetch-contents.com/14/68/47/54/14684754_23209464_1000.jpg', 0, 1),
(3, 'Balenciaga Eyewear', 2674760, 3, 'Lentes de sol Shield 2.0 con armazón rectangular', 'https://cdn-images.farfetch-contents.com/19/14/35/28/19143528_42244636_1000.jpg', 10, 1),
(4, 'Rick Owens Eyewear', 4000000, 3, 'Lentes de sol Rick', 'https://cdn-images.farfetch-contents.com/19/06/96/19/19069619_44426168_1000.jpg', 5, 1),
(5, 'Supreme Washed', 567000, 2, 'Gorra con efecto lavado y colores llamativos ', 'https://cdn-images.farfetch-contents.com/18/10/77/66/18107766_40237307_1000.jpg', 0, 1),
(6, 'Supreme x TNF', 680000, 2, 'Gorra de senderismo Supreme en colaboración con The North Face', 'https://cdn-images.farfetch-contents.com/19/55/84/70/19558470_43557725_1000.jpg', 15, 1),
(7, 'Supreme Celtic', 590000, 2, 'Gorra Celtic Green-Pink con nudo', 'https://cdn-images.farfetch-contents.com/18/10/08/70/18100870_38534075_1000.jpg', 5, 1),
(8, 'Supreme SS22 ', 639000, 2, 'Gorro de pescador con logo SS22 Blue', 'https://cdn-images.farfetch-contents.com/18/50/74/64/18507464_40495255_1000.jpg', 0, 1),
(9, 'Supreme SS22 ', 639000, 2, 'Gorro de pescador con logo SS22 Black', 'https://cdn-images.farfetch-contents.com/18/50/82/44/18508244_40493435_1000.jpg', 5, 1),
(10, 'Maison Kitsuné', 1030000, 1, 'Hoodie Chillax Fox', 'https://media.maisonkitsune.com/media/catalog/product/k/m/km00307km0001-p199_01.jpg', 0, 1),
(11, 'Maison Kitsuné', 1180000, 1, 'Chillax fox patch classic hoodie', 'https://media.maisonkitsune.com/media/catalog/product/i/u/iu00355km0001-p485_01.jpg', 30, 1),
(12, 'Ripndip FFD ', 590000, 4, 'Fuckin Fuck Denim Jacket (Black)', 'https://cdn.shopify.com/s/files/1/0177/2424/products/IMG_7215_1024x1024.jpg?v=1666911851', 0, 1),
(13, 'Ripndip CC', 450000, 4, 'Checked Coaches Jacket (Black/Charcoal)', 'https://cdn.shopify.com/s/files/1/0177/2424/products/Summer22-_0042_027A7959_1024x1024.jpg?v=1654281085', 5, 1),
(14, 'Ripndip Sweater ', 390000, 1, 'Coconerm Knit Sweater (Black)', 'https://cdn.shopify.com/s/files/1/0177/2424/products/Knits-Fall22_0005_9R9A8525_1024x1024.jpg?v=1658446354', 0, 1),
(15, 'Ripndip Hoodie', 570000, 1, 'Coco Nermal Hoodie (Black)', 'https://cdn.shopify.com/s/files/1/0177/2424/products/smu_0007_9R9A8207_1024x1024.jpg?v=1655939495', 5, 1),
(16, 'Ripndip Polar', 720000, 4, 'Shmoody Polar Fleece Quilted Reversible Jacket (Clay/Purple)', 'https://cdn.shopify.com/s/files/1/0177/2424/products/Holiday21-Jackets_0052_KK2A0010_1024x1024.jpg?v=1634252535', 0, 1),
(17, 'Ripndip MJQ', 640000, 4, 'Mystic Jerm Quilted Bomber Jacket (Black)', 'https://cdn.shopify.com/s/files/1/0177/2424/products/Jackets-Fall22_0006_9R9A8461_1024x1024.jpg?v=1658361333', 0, 1),
(18, 'Ripndip Socks', 90000, 5, 'Lord Nermal Mid Socks (Olive)', 'https://cdn.shopify.com/s/files/1/0177/2424/products/IMG_4536_1024x1024.jpg?v=1675899464', 10, 1),
(19, 'Ripndip Socks', 81000, 5, 'We Out Here Mid Socks (Warm Grey)', 'https://cdn.shopify.com/s/files/1/0177/2424/products/IMG_4539_1024x1024.jpg?v=1675899493', 0, 1),
(20, 'Burberry Socks', 590000, 5, 'Calcetines con motivo Vintage Check', 'https://cdn-images.farfetch-contents.com/17/65/15/23/17651523_37704285_1000.jpg', 20, 1),
(21, 'Ripndip T-Shirt', 120000, 5, 'Nerma Lisa Pocket Tee (Slate)', 'https://cdn.shopify.com/s/files/1/0177/2424/products/IMG_6104_1024x1024.jpg?v=1675898891', 12, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
