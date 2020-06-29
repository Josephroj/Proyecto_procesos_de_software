-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 21-10-2017 a las 15:38:12
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.0.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aeroshoe_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idcategoria` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idcategoria`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'BOTAS DAMAS', '2017-10-16 20:43:26', '0000-00-00 00:00:00'),
(2, 'BOTAS CABALLEROS', '2017-10-16 20:43:26', '0000-00-00 00:00:00'),
(3, ' ZAPATOS CABALLEROS', '2017-10-16 20:43:26', '0000-00-00 00:00:00'),
(4, ' ZAPATOS DAMAS', '2017-10-16 20:43:26', '0000-00-00 00:00:00'),
(5, 'TACOS DAMAS', '2017-10-16 20:43:26', '0000-00-00 00:00:00'),
(6, 'SANDALIAS CABALLEROS', '2017-10-16 20:43:26', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `dni` char(8) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `direccion2` varchar(100) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `correo` varchar(80) NOT NULL,
  `password` varchar(255) NOT NULL,
  `verificado` tinyint(1) NOT NULL DEFAULT '0',
  `distrito` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `apellidos`, `dni`, `direccion`, `direccion2`, `telefono`, `correo`, `password`, `verificado`, `distrito`, `created_at`, `updated_at`) VALUES
(23, 'Luis Enrique', 'Ticse Quispe', '70221349', 'LOS MINERALES 120', 'los minerales 120', '959885302', 'i1512549@continental.edu.pe', '$2y$10$Jum4x229kR7HcdZSVrO1qe6nUexrDf3W9xRrbgwZD/g2iOTVvjL2a', 1, 'HUANCAYO', '2017-10-21 04:04:48', '2017-10-21 09:04:48'),
(25, 'Arnol', 'Villegas Sanelo', '76367635', 'ps. saul muñoz', 'los uranios', '983973993', 'i1512719@continental.edu.pe', '$2y$10$9iSY8TjjZxOgGSkO86GT0u4RrIwIS.Y5bTG4kehOp8ngJEJ1RMy6m', 1, 'HUANCAYO', '2017-10-21 04:15:54', '2017-10-19 12:00:36'),
(26, 'Lionel Andres', 'Ticse Esteban', '90989887', 'jr.Pasaje Santo domingio', 'Cerca del instituto', '987789987', 'luisenriqueticsequispe@gmail.com', '$2y$10$FLoS6RPuBY15TZ680kHdLOn.jBcZh0IM57b3ligYCfX/xOGlmutzW', 1, 'HUANCAYO', '2017-10-21 04:01:59', '2017-10-19 19:04:07'),
(27, 'clara', 'medina aguiular', '72376107', 'calle santi N° 123', 'calle santi N° 123', '937467121', 'cmedinaagui@gmail.com', '$2y$10$HKNYU7lHh3rR1QSqKZNjtOlEQ.eu14bkFECt0.EhP294Cs6BgrJUG', 1, 'CHILCA', '2017-10-19 14:14:14', '2017-10-19 19:14:14'),
(28, 'ENOS NOE', 'YAURI VILLANUEVA', '73422148', 'PASAJE SANTO DOMINGO 107', 'PASAJE SANTO DOMINGO 107', '978524578', 'i1512350@continental.edu.pe', '$2y$10$XcCMPPEP7dAIRg./laPvfe9VooRTu/VmEnj.e2dQ5xvIewyaV6NZi', 1, 'HUANCAYO', '2017-10-19 15:02:56', '2017-10-19 20:02:56'),
(29, 'BLANCA FLOR', 'ESTRADA CASAS', '77777777', 'CALLE REAL 123', 'CALLE REAL 123', '999999999', 'i1512210@continental.edu.pe', '$2y$10$rZUYoGInrdVpM/YY9amII.V7/XQ7NFaRHwNNOFpKsg5upEXYWyXHm', 0, 'HUANCAYO', '2017-10-19 22:09:03', '2017-10-19 22:09:03'),
(30, 'Franco Enrique', 'Condor Quispe ', '87676545', 'Calle San juan 230', 'Calle los plutonios', '090909099', 'luisticseteq@gmail.com', '$2y$10$LrPyrU0oMWgfyyOedBntOed4HWBCtWS3UZZkSrvZWUSHUVeyjhocS', 1, 'HUANCAYO', '2017-10-21 04:16:55', '2017-10-20 12:07:47'),
(31, 'CESAR', 'VILLANUEVA HUAYNALAYA', '11111111', 'JR. ARENALES N° 203', 'JR. ARENALES N° 203', '999999999', 'enosyauri@gmail.com', '$2y$10$5anrlOidOrRzhjV.RYJXWOeh/sghGzcmMyPc8H4asxqZglarNprYm', 1, 'HUANCAYO', '2017-10-21 05:27:16', '2017-10-21 10:27:16'),
(32, 'MOISES', 'RIOS CERRON', '88888888', 'CALLE REAL 200', 'CALLE REAL 200', '988888888', '73422148@pronabec.edu.pe', '$2y$10$B2vSC9VLvOWYYBKAPyra0uPO9Auzr/uPaKW7LhhRULW4on0ZVQXXa', 1, 'HUANCAYO', '2017-10-21 13:06:00', '2017-10-21 18:06:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_venta`
--

CREATE TABLE `detalle_venta` (
  `id` int(11) NOT NULL,
  `idventa` int(11) NOT NULL,
  `idproducto` int(11) NOT NULL,
  `cantidad` tinyint(4) NOT NULL,
  `talla` varchar(50) NOT NULL,
  `precio_venta` decimal(10,0) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle_venta`
--

INSERT INTO `detalle_venta` (`id`, `idventa`, `idproducto`, `cantidad`, `talla`, `precio_venta`, `created_at`, `updated_at`) VALUES
(1, 1, 155, 1, '35', '180', '2017-10-21 01:14:29', '2017-10-21 01:14:29'),
(2, 1, 158, 1, '35', '230', '2017-10-21 01:14:29', '2017-10-21 01:14:29'),
(3, 2, 167, 9, '35', '198', '2017-10-21 02:31:14', '2017-10-21 02:31:14'),
(4, 3, 157, 2, '35', '220', '2017-10-21 05:04:46', '2017-10-21 05:04:46'),
(5, 3, 155, 1, '35', '180', '2017-10-21 05:04:46', '2017-10-21 05:04:46'),
(6, 5, 155, 1, '35', '180', '2017-10-21 08:42:48', '2017-10-21 08:42:48'),
(7, 5, 160, 1, '35', '150', '2017-10-21 08:42:48', '2017-10-21 08:42:48'),
(8, 5, 159, 1, '35', '180', '2017-10-21 08:42:48', '2017-10-21 08:42:48'),
(9, 5, 166, 1, '35', '70', '2017-10-21 08:42:48', '2017-10-21 08:42:48'),
(10, 6, 156, 6, '39', '190', '2017-10-21 09:06:53', '2017-10-21 09:06:53'),
(11, 6, 164, 4, '39', '190', '2017-10-21 09:06:53', '2017-10-21 09:06:53'),
(12, 7, 159, 6, '35', '180', '2017-10-21 09:18:52', '2017-10-21 09:18:52'),
(13, 7, 160, 1, '35', '150', '2017-10-21 09:18:52', '2017-10-21 09:18:52'),
(14, 8, 160, 2, '38', '150', '2017-10-21 18:10:32', '2017-10-21 18:10:32'),
(15, 9, 165, 5, '35', '190', '2017-10-21 18:22:17', '2017-10-21 18:22:17'),
(16, 10, 166, 7, '37', '70', '2017-10-21 18:34:25', '2017-10-21 18:34:25'),
(17, 10, 157, 1, '37', '220', '2017-10-21 18:34:25', '2017-10-21 18:34:25'),
(18, 10, 160, 2, '37', '150', '2017-10-21 18:34:25', '2017-10-21 18:34:25'),
(19, 11, 167, 1, '35', '198', '2017-10-21 20:14:17', '2017-10-21 20:14:17'),
(20, 12, 160, 1, '35', '150', '2017-10-21 20:29:19', '2017-10-21 20:29:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `idmarca` int(11) NOT NULL,
  `nombremarca` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`idmarca`, `nombremarca`, `created_at`, `updated_at`) VALUES
(1, 'CALIMOD', '2017-10-16 20:47:59', '0000-00-00 00:00:00'),
(2, 'LUSSO', '2017-10-16 20:47:59', '0000-00-00 00:00:00'),
(3, 'FERRUCCI', '2017-10-16 20:47:59', '0000-00-00 00:00:00'),
(4, 'CARDUCCI', '2017-10-16 20:47:59', '0000-00-00 00:00:00'),
(5, 'RAGGIO', '2017-10-16 20:47:59', '0000-00-00 00:00:00'),
(6, 'SACCO VANZETTI', '2017-10-16 20:47:59', '0000-00-00 00:00:00'),
(7, 'PED FERRO', '2017-10-16 20:47:59', '0000-00-00 00:00:00'),
(8, 'ENZO FERRE', '2017-10-16 20:47:59', '0000-00-00 00:00:00'),
(9, 'GINO', '2017-10-16 20:47:59', '0000-00-00 00:00:00'),
(10, 'STRONGER', '2017-10-16 20:47:59', '0000-00-00 00:00:00'),
(11, 'BOSSO', '2017-10-16 20:47:59', '0000-00-00 00:00:00'),
(12, 'IGUANA', '2017-10-16 20:47:59', '0000-00-00 00:00:00'),
(13, 'MAC BAREN', '2017-10-16 20:47:59', '0000-00-00 00:00:00'),
(14, 'SERGIO PESSAGIO', '2017-10-16 20:47:59', '0000-00-00 00:00:00'),
(15, 'RIGGOLO', '2017-10-16 20:47:59', '0000-00-00 00:00:00'),
(16, 'LUISIANA', '2017-10-16 20:47:59', '0000-00-00 00:00:00'),
(17, 'CIRO FALBINI', '2017-10-16 20:47:59', '0000-00-00 00:00:00'),
(18, 'TODAY', '2017-10-16 20:47:59', '0000-00-00 00:00:00'),
(19, 'KINA', '2017-10-16 20:47:59', '0000-00-00 00:00:00'),
(20, 'BALENCIAGA', '2017-10-16 20:47:59', '0000-00-00 00:00:00'),
(21, 'VERONELLA', '2017-10-16 20:47:59', '0000-00-00 00:00:00'),
(22, 'PIERRE CARDINI', '2017-10-16 20:47:59', '0000-00-00 00:00:00'),
(23, 'MEZLAN', '2017-10-16 20:47:59', '0000-00-00 00:00:00'),
(24, 'AVA SHOES', '2017-10-16 20:47:59', '0000-00-00 00:00:00'),
(25, 'TASTE', '2017-10-16 20:47:59', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `idpago` int(11) NOT NULL,
  `idtransaccion` varchar(100) NOT NULL,
  `idclientepago` int(11) NOT NULL,
  `fechapago` datetime NOT NULL,
  `estado` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pago`
--

INSERT INTO `pago` (`idpago`, `idtransaccion`, `idclientepago`, `fechapago`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'e1b5e930-03d7-4b37-8867-6cf01dad19dd', 0, '0000-00-00 00:00:00', '4', '2017-10-21 01:14:29', '2017-10-21 01:14:29'),
(2, 'b94f11cc-91ac-4381-a7c2-d6db8cedc635', 0, '0000-00-00 00:00:00', '4', '2017-10-21 02:31:14', '2017-10-21 02:31:14'),
(3, 'c073569a-69b2-4a36-89a7-875337054c31', 0, '0000-00-00 00:00:00', '4', '2017-10-21 05:01:24', '2017-10-21 05:01:24'),
(4, 'c073569a-69b2-4a36-89a7-875337054c31', 0, '0000-00-00 00:00:00', '4', '2017-10-21 05:01:54', '2017-10-21 05:01:54'),
(5, '20726b0b-5e88-48b5-9ec4-898a2f077b11', 0, '0000-00-00 00:00:00', '4', '2017-10-21 05:04:46', '2017-10-21 05:04:46'),
(6, '20726b0b-5e88-48b5-9ec4-898a2f077b11', 0, '0000-00-00 00:00:00', '4', '2017-10-21 05:04:47', '2017-10-21 05:04:47'),
(7, 'fe5107fd-0d24-4123-9023-0cb46cb370a9', 0, '0000-00-00 00:00:00', '4', '2017-10-21 08:42:48', '2017-10-21 08:42:48'),
(8, '2553801c-2f95-429f-b903-7965b072d0e4', 0, '0000-00-00 00:00:00', '4', '2017-10-21 09:06:53', '2017-10-21 09:06:53'),
(9, '505d78c4-b05a-44eb-9cd4-8ad7562885d9', 0, '0000-00-00 00:00:00', '4', '2017-10-21 09:18:52', '2017-10-21 09:18:52'),
(10, 'df123783-67f5-45ad-8914-36f279a7b6ff', 73422148, '0000-00-00 00:00:00', '4', '2017-10-21 18:10:32', '2017-10-21 18:10:32'),
(11, 'b7591289-e13f-4964-9560-0b0d3c23d637', 73422148, '0000-00-00 00:00:00', '4', '2017-10-21 18:22:17', '2017-10-21 18:22:17'),
(12, '2cd1a277-853d-44bf-83d4-0a61705ae6a8', 0, '0000-00-00 00:00:00', '4', '2017-10-21 18:34:24', '2017-10-21 18:34:24'),
(13, '66493f51-a60a-4ce3-ae13-6b4fcdaa4028', 0, '0000-00-00 00:00:00', '4', '2017-10-21 20:13:17', '2017-10-21 20:13:17'),
(14, '66493f51-a60a-4ce3-ae13-6b4fcdaa4028', 0, '0000-00-00 00:00:00', '4', '2017-10-21 20:13:59', '2017-10-21 20:13:59'),
(15, '66493f51-a60a-4ce3-ae13-6b4fcdaa4028', 0, '0000-00-00 00:00:00', '4', '2017-10-21 20:14:17', '2017-10-21 20:14:17'),
(16, '488e26ea-e553-486a-b5a5-c4bf3477788e', 0, '0000-00-00 00:00:00', '4', '2017-10-21 20:28:16', '2017-10-21 20:28:16'),
(17, '488e26ea-e553-486a-b5a5-c4bf3477788e', 0, '0000-00-00 00:00:00', '4', '2017-10-21 20:28:57', '2017-10-21 20:28:57'),
(18, '488e26ea-e553-486a-b5a5-c4bf3477788e', 0, '0000-00-00 00:00:00', '4', '2017-10-21 20:29:19', '2017-10-21 20:29:19'),
(19, '488e26ea-e553-486a-b5a5-c4bf3477788e', 0, '0000-00-00 00:00:00', '4', '2017-10-21 20:30:17', '2017-10-21 20:30:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `idcategoria` int(11) NOT NULL,
  `idmarca` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `ruta_imagen` varchar(100) NOT NULL,
  `color` varchar(20) NOT NULL,
  `preciounitario` decimal(10,0) NOT NULL,
  `stock` int(11) NOT NULL,
  `descripcion` varchar(512) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `idcategoria`, `idmarca`, `nombre`, `ruta_imagen`, `color`, `preciounitario`, `stock`, `descripcion`, `created_at`, `updated_at`) VALUES
(155, 1, 1, 'BOTAS DAMAS', '/img-producto/user_image_155.jpg', 'negro', '180', 17, 'BOTAS DAMAS', '2017-10-21 03:42:48', '2017-10-21 08:42:48'),
(156, 1, 1, 'BOTAS DAMAS', '/img-producto/user_image_156.jpg', 'MARRÓN', '190', 46, 'BOTAS DAMAS', '2017-10-21 04:06:53', '2017-10-21 09:06:53'),
(157, 2, 10, 'BOTAS CABALLEROS', '/img-producto/user_image_157.jpg', 'CANELA', '220', 47, 'BOTAS CABALLEROS', '2017-10-21 13:34:25', '2017-10-21 18:34:25'),
(158, 2, 16, 'BOTAS CABALLEROS', '/img-producto/user_image_158.jpg', 'MARRÓN', '230', 49, 'BOTAS CABALLEROS', '2017-10-20 20:14:29', '2017-10-21 01:14:29'),
(159, 3, 1, 'ZAPATOS CABALLEROS', '/img-producto/user_image_159.jpg', 'NEGRO', '180', 58, 'ZAPATOS CABALLEROS', '2017-10-21 04:18:52', '2017-10-21 09:18:52'),
(160, 3, 1, 'ZAPATOS CABALLEROS', '/img-producto/user_image_160.jpg', 'NEGRO', '150', 43, 'ZAPATOS CABALLEROS', '2017-10-21 15:29:19', '2017-10-21 20:29:19'),
(161, 4, 4, 'ZAPATOS DAMAS', '/img-producto/user_image_161.jpg', 'MARRÓN', '189', 60, 'ZAPATOS DAMAS', '2017-10-20 19:56:45', '2017-10-21 00:56:45'),
(162, 4, 3, 'ZAPATOS DAMAS', '/img-producto/user_image_162.jpg', 'MARRÓN', '230', 60, 'ZAPATOS DAMAS', '2017-10-20 19:57:34', '2017-10-21 00:57:34'),
(163, 5, 18, 'TACOS DAMAS', '/img-producto/user_image_163.jpg', 'MARRÓN', '200', 60, 'TACOS DAMAS', '2017-10-20 19:58:19', '2017-10-21 00:58:19'),
(164, 5, 19, 'TACOS DAMAS', '/img-producto/user_image_164.jpg', 'NEGRO', '190', 36, 'TACOS DAMAS', '2017-10-21 04:06:53', '2017-10-21 09:06:53'),
(165, 6, 24, 'SANDALIAS CABALLEROS', '/img-producto/user_image_165.jpg', 'MARRÓN', '190', 45, 'SANDALIAS CABALLEROS', '2017-10-21 13:22:17', '2017-10-21 18:22:17'),
(166, 6, 1, 'SANDALIAS CABALLEROS', '/img-producto/user_image_166.jpg', 'NEGRO', '70', 75, 'SANDALIAS CABALLEROS', '2017-10-21 13:34:25', '2017-10-21 18:34:25'),
(167, 2, 4, 'BOTAS CABALLEROSS', '/img-producto/user_image_167.jpg', 'NEGRO', '198', 10, 'BOTAS CABALLEROSS negro', '2017-10-21 15:14:17', '2017-10-21 20:14:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `token`
--

CREATE TABLE `token` (
  `id` int(11) NOT NULL,
  `idcliente` int(11) NOT NULL,
  `fecha_caducidad` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `token` varchar(512) NOT NULL,
  `valido` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `token`
--

INSERT INTO `token` (`id`, `idcliente`, `fecha_caducidad`, `token`, `valido`, `created_at`, `updated_at`) VALUES
(24, 23, '2017-10-18 21:21:12', 'mLlprJAeNYcB03zFvVXrypjruv2WESap+ulyRw5e/O4F1tZes7mFr6EDWptEh26UxsbS1+LhKxA9eo3F/vifQQ==', 0, '2017-10-19 02:20:07', '2017-10-19 02:21:12'),
(26, 25, '2017-10-19 03:09:07', 'Xqq56/UcCV4p9DBE7MOXJtbVo+ZJxCiVNHg1KFJ+aWT1+kqSAMybXwizQdo9C/jyKaSHAB2ms1r09C3+4L3WRw==', 0, '2017-10-19 08:08:53', '2017-10-19 08:09:07'),
(27, 26, '2017-10-19 14:04:07', 'zqCpX3mn4nblMtcorbHQK3uHQHlR6tg1o5l/pVpwRUPbIk0N1T+1Mot8Pl+6FDCQxQBvGaTQbagbqrXDoRR69w==', 0, '2017-10-19 19:03:35', '2017-10-19 19:04:07'),
(28, 27, '2017-10-19 14:14:14', 'PjPnpm5/6lEV4qTNo/XSAmAuqbxKuTBiZquAebLxiM0qnJFMuA2dMBWtiGWdtHO+j7E9o2FBuhYWfBYXroFOzA==', 0, '2017-10-19 19:13:19', '2017-10-19 19:14:14'),
(29, 28, '2017-10-19 15:02:56', 'R8HN1fmHBsbyiZZeH5AEiiwrhYZM2zOjcyGCjwNeL8kbtlLtEKJtHoLhXikn+Jd+3E8TNee/vq38cXsLTzdoDw==', 0, '2017-10-19 19:13:58', '2017-10-19 20:02:56'),
(30, 29, '2017-10-19 22:09:03', 'WmCaa4qbvNrSGeLhWCG3Ltg3CExeITO8zu9ImmH3xUYhUSfyctrM0jPLq9RhgXMqb1SpTJfa9LKn1nC9gZhevw==', 1, '2017-10-19 22:09:03', '2017-10-19 22:09:03'),
(31, 30, '2017-10-20 07:07:47', 'FIcom5OONKftP+1EVMNJ42wh71LGqJA9ODyrA/I3RK2fKAjsdEFQ7NqIsGcUsuQ48vlm3Ui+DhpguIDxeZigqg==', 0, '2017-10-20 12:06:56', '2017-10-20 12:07:47'),
(32, 31, '2017-10-21 05:27:16', 'jr7oBJXqOkINDzvSGJuaVKGbVI6s6K8rURM3R3+EdWQNcwZp1RlrR69SBtWxXMPncl3BmBkylvc8rlAFMkRebQ==', 0, '2017-10-21 10:26:53', '2017-10-21 10:27:16'),
(33, 32, '2017-10-21 13:06:00', 'w8gkE4ttKztX26C1pM7aqKQZ/buMN8cRP+RokVOtWWX6QsfuqoqIovgW27nKxaKz6XMaIz5YlGvRf2YXnymtvA==', 0, '2017-10-21 18:05:24', '2017-10-21 18:06:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tokenpassword`
--

CREATE TABLE `tokenpassword` (
  `id` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `token` varchar(1000) NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tokenpassword`
--

INSERT INTO `tokenpassword` (`id`, `idusuario`, `token`, `estado`, `created_at`, `updated_at`) VALUES
(10, 25, 'eW/bCYvEnh8AmbswfrGiy1Wvqhw0Dw8YF6Kf5upnFzlXa/hv9+VhrGG8nTVD6Wdu1KU=', 0, '2017-10-19 06:43:14', '2017-10-19 11:43:14'),
(11, 23, 'Gp3aTf6SOHrUH1O5f3ONmvSwgqQnQ8JTg50pvptOYg/EJuumimE9VSWxwz0Di9HtaUg=', 0, '2017-10-19 14:56:43', '2017-10-19 19:56:43'),
(12, 23, 'XFiaxoELWgJ5XbRp0vCEUsGCqlmrs66n//8f7q6e9CsA/Es5+eRhGTSfRGOhKRPlS3I=', 0, '2017-10-19 14:58:07', '2017-10-19 19:58:07'),
(13, 23, 'lp/oZFcoFyqmQyCv0Zw/kJRPeequUuXeINBYmSrdCKx6HTkk3RxqFayHN42R3UBQJqs=', 0, '2017-10-21 04:04:38', '2017-10-21 09:04:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuarios` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(80) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuarios`, `nombre`, `correo`, `login`, `password`, `created_at`, `updated_at`) VALUES
(3, 'bladimir catamayo villar', 'i1512719@continental.edu.pe', 'cbladimir', '$2y$10$BaVmu2e0qsNAESrKZmdVHOoJpLkIYzPpJ1mldG8qFDm0z6v/.snJi', '2017-10-20 21:12:57', '2017-10-20 21:12:57'),
(4, 'Lukitas', 'luisenriqueticsequispe@gmail.com', 'Lticse', '$2y$10$YNDslndnErQUHi4mXmup.uyDxqYX6a1P8AhNiXHGY0mPwfKP.H7.S', '2017-10-21 04:22:40', '2017-10-20 21:27:36'),
(6, 'EnosNoe ', 'i1512350@continental.edu.pe', 'yenos', '$2y$10$RDXFpyyDAlshD1DhlckOve.RCESmPKZHuIuiK26SAQhOtNcpd.gZ2', '2017-10-21 04:24:09', '2017-10-21 09:23:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `idventas` int(11) NOT NULL,
  `idcliente` int(11) NOT NULL,
  `idpago` int(11) NOT NULL,
  `fecha_venta` datetime NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`idventas`, `idcliente`, `idpago`, `fecha_venta`, `total`, `created_at`, `updated_at`) VALUES
(1, 28, 1, '2017-10-20 20:14:29', '410.00', '2017-10-21 01:14:29', '2017-10-21 01:14:29'),
(2, 28, 2, '2017-10-20 21:31:14', '1782.00', '2017-10-21 02:31:14', '2017-10-21 02:31:14'),
(3, 26, 5, '2017-10-21 00:04:46', '620.00', '2017-10-21 05:04:46', '2017-10-21 05:04:46'),
(5, 26, 7, '2017-10-21 03:42:48', '580.00', '2017-10-21 08:42:48', '2017-10-21 08:42:48'),
(6, 23, 8, '2017-10-21 04:06:53', '1900.00', '2017-10-21 09:06:53', '2017-10-21 09:06:53'),
(7, 30, 9, '2017-10-21 04:18:52', '1230.00', '2017-10-21 09:18:52', '2017-10-21 09:18:52'),
(8, 32, 10, '2017-10-21 13:10:32', '300.00', '2017-10-21 18:10:32', '2017-10-21 18:10:32'),
(9, 32, 11, '2017-10-21 13:22:17', '950.00', '2017-10-21 18:22:17', '2017-10-21 18:22:17'),
(10, 31, 12, '2017-10-21 13:34:25', '1010.00', '2017-10-21 18:34:25', '2017-10-21 18:34:25'),
(11, 23, 15, '2017-10-21 15:14:17', '198.00', '2017-10-21 20:14:17', '2017-10-21 20:14:17'),
(12, 23, 18, '2017-10-21 15:29:19', '150.00', '2017-10-21 20:29:19', '2017-10-21 20:29:19'),
(13, 23, 19, '2017-10-21 15:30:17', '0.00', '2017-10-21 20:30:17', '2017-10-21 20:30:17');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idcategoria`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idventa` (`idventa`),
  ADD KEY `idproducto` (`idproducto`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`idmarca`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`idpago`),
  ADD KEY `idclientepago` (`idclientepago`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idcategoria` (`idcategoria`),
  ADD KEY `idmarca` (`idmarca`);

--
-- Indices de la tabla `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idcliente` (`idcliente`);

--
-- Indices de la tabla `tokenpassword`
--
ALTER TABLE `tokenpassword`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuarios`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`idventas`),
  ADD KEY `idcliente` (`idcliente`),
  ADD KEY `idpago` (`idpago`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `idmarca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT de la tabla `pago`
--
ALTER TABLE `pago`
  MODIFY `idpago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;
--
-- AUTO_INCREMENT de la tabla `token`
--
ALTER TABLE `token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT de la tabla `tokenpassword`
--
ALTER TABLE `tokenpassword`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `idventas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD CONSTRAINT `detalle_venta_ibfk_2` FOREIGN KEY (`idventa`) REFERENCES `ventas` (`idventas`) ON UPDATE CASCADE,
  ADD CONSTRAINT `detalle_venta_ibfk_3` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`id`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`idcategoria`) REFERENCES `categoria` (`idcategoria`),
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`idmarca`) REFERENCES `marca` (`idmarca`);

--
-- Filtros para la tabla `token`
--
ALTER TABLE `token`
  ADD CONSTRAINT `token_ibfk_1` FOREIGN KEY (`idcliente`) REFERENCES `clientes` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`idpago`) REFERENCES `pago` (`idpago`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`idcliente`) REFERENCES `clientes` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
