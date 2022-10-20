-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 02-08-2022 a las 20:35:15
-- Versión del servidor: 5.7.23-23
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `artesa88_laravel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ApellidoPaterno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ApellidoMaterno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Correo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `Nombre`, `ApellidoPaterno`, `ApellidoMaterno`, `Correo`, `Foto`, `created_at`, `updated_at`) VALUES
(1, 'Karla', 'Hernandez ', 'Zavala ', 'karla@gmail.com', 'fot.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Yureli', 'Juarez', 'Gonzalez', 'gonzalez@gmail.com', 'fom.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'karla', 'Yerza', 'Martinez ', 'yerza@gmail.com', 'fot.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'anahi ', 'hernandez', 'zavala', 'kar@gmail.com', 'kar.png ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'ana', 'ana ', 'ana', 'ana@gmail.com', ' nana.pnj', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('luzero990@gmail.com', '$2y$10$Q9BZxFJ9D5iLavhl9W4o8ubWzlsIF4wEFOg3/HbEfAZ0VgkLDI8z.', '2022-03-29 08:38:43'),
('vmmm.cobaeh@gmail.com', '$2y$10$DXbu8qhJOkeXi8sNlx0Aw.GdlLe7ELimKv5U4HKzPXczTuua4phi2', '2022-03-29 09:05:02'),
('20191164@uthh.edu.mx', '$2y$10$FE/ytiEM.R4Tj07i/8EA7eJi1QEnw61sZoX7aA9Ord5F726yKaFrG', '2022-04-01 22:24:52'),
('20191140@uthh.edu.mx', '$2y$10$ASm7CmcJ1P/pWvejN7qA7.QSzqQVENZs0vQiPVZ5PDXDR7Vt7Ch8G', '2022-07-28 03:25:10'),
('anahiherza26@gmail.com', '$2y$10$eMCfEXVwaSVFDehdoIgCY.MSFedPo/oGUk.Y5q0rA.3T.2LEENRJm', '2022-07-31 06:52:57'),
('geramayor.270801@gmail.com', '$2y$10$kxemM9SGBe93GQZBIZfv5.Has0U4DvsUrX6KyLyT3GP4tXbs6AMIm', '2022-08-02 13:53:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbladministradores`
--

CREATE TABLE `tbladministradores` (
  `intId` int(11) NOT NULL,
  `vchNombre` varchar(60) DEFAULT NULL,
  `vchCorreo` varchar(60) DEFAULT NULL,
  `vchPassword` varchar(12) DEFAULT NULL,
  `vchCodigop` varchar(5) DEFAULT NULL,
  `vchEstado` varchar(40) DEFAULT NULL,
  `vchMunicipio` varchar(100) DEFAULT NULL,
  `vchColonia` varchar(100) DEFAULT NULL,
  `vchTelefono` varchar(10) DEFAULT NULL,
  `vchFoto` varchar(20) DEFAULT NULL,
  `intRol` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbladministradores`
--

INSERT INTO `tbladministradores` (`intId`, `vchNombre`, `vchCorreo`, `vchPassword`, `vchCodigop`, `vchEstado`, `vchMunicipio`, `vchColonia`, `vchTelefono`, `vchFoto`, `intRol`) VALUES
(1, 'Yarasmin Tejada Lucero', 'luzero990@gmail.com', 'Lunas99$', NULL, NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblasesores`
--

CREATE TABLE `tblasesores` (
  `intId` int(11) NOT NULL,
  `vchNombre` varchar(60) DEFAULT NULL,
  `vchCorreo` varchar(60) DEFAULT NULL,
  `vchPassword` varchar(12) DEFAULT NULL,
  `vchCodigop` varchar(5) DEFAULT NULL,
  `vchEstado` varchar(40) DEFAULT NULL,
  `vchMunicipio` varchar(100) DEFAULT NULL,
  `vchColonia` varchar(100) DEFAULT NULL,
  `vchTelefono` varchar(10) DEFAULT NULL,
  `vchFoto` varchar(20) DEFAULT NULL,
  `intRol` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblasesores`
--

INSERT INTO `tblasesores` (`intId`, `vchNombre`, `vchCorreo`, `vchPassword`, `vchCodigop`, `vchEstado`, `vchMunicipio`, `vchColonia`, `vchTelefono`, `vchFoto`, `intRol`) VALUES
(1, 'Yarasmin Tejada Lucero', '20191140@uthh.edu.mx', '123456789', '43000', 'Hidalgo', 'Huejutla de Reyes', 'Centro', '7717051861', NULL, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblbitacora`
--

CREATE TABLE `tblbitacora` (
  `intId` int(11) NOT NULL,
  `vchUsuario` varchar(60) DEFAULT NULL,
  `vchTabla` varchar(30) DEFAULT NULL,
  `vchNew_datos` varchar(100) DEFAULT NULL,
  `vchOld_datos` varchar(100) DEFAULT NULL,
  `vchOperacion` varchar(40) DEFAULT NULL,
  `vchFecha` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblbuzon`
--

CREATE TABLE `tblbuzon` (
  `intId` int(11) NOT NULL,
  `vchNombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `vchOperacion` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `txtComentario` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tblbuzon`
--

INSERT INTO `tblbuzon` (`intId`, `vchNombre`, `vchOperacion`, `txtComentario`) VALUES
(1, 'Yarasmin Tejada Lucero', 'Sugerencia', 'Mejorar el chat.'),
(2, 'Juan Hernandez Lopez', 'Queja', '12345'),
(3, 'karla', 'Queja', 'Escribe...'),
(4, 'karla', 'Queja', 'Escribe...'),
(5, 'Juan Hernandez Lopez', 'Queja', 'reer'),
(6, 'karla', 'Queja', 'Escribe...'),
(7, 'Yarasmin Tejada Lucero', 'Sugerencia', 'ESCRIBE'),
(8, 'juan', 'Sugerencia', 'HHHH');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblcategorias`
--

CREATE TABLE `tblcategorias` (
  `intCat` int(11) NOT NULL,
  `vchCategoria` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblcategorias`
--

INSERT INTO `tblcategorias` (`intCat`, `vchCategoria`) VALUES
(1, 'Silla'),
(2, 'Mesa'),
(3, 'Cama'),
(4, 'Ropero'),
(5, 'Anomalía');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblcompradores`
--

CREATE TABLE `tblcompradores` (
  `intId` int(11) NOT NULL,
  `vchNombre` varchar(60) DEFAULT NULL,
  `vchCorreo` varchar(60) DEFAULT NULL,
  `vchPassword` varchar(60) DEFAULT NULL,
  `vchCodigop` varchar(5) DEFAULT NULL,
  `vchEstado` varchar(40) DEFAULT NULL,
  `vchMunicipio` varchar(100) DEFAULT NULL,
  `vchColonia` varchar(100) DEFAULT NULL,
  `vchTelefono` varchar(10) DEFAULT NULL,
  `vchFoto` varchar(20) DEFAULT NULL,
  `intRol` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblcompradores`
--

INSERT INTO `tblcompradores` (`intId`, `vchNombre`, `vchCorreo`, `vchPassword`, `vchCodigop`, `vchEstado`, `vchMunicipio`, `vchColonia`, `vchTelefono`, `vchFoto`, `intRol`) VALUES
(2, 'Karla Hernandez Hernandez', 'karla@gmail.com', 'karla123', '43000', 'Hidalgo', 'Huejutla de Reyes', 'Las palomas', '7785423695', 'alert.jpg', 4),
(44, 'Carol', 'vmmm.cobaeh@gmail.com', '123456', '43000', 'Hidalgo', 'Huejutla de Reyes', 'Huejutla de Reyes', '7752416985', NULL, 4),
(53, 'Yarasmin Tejada Lucero', '20191140@uthh.edu.mx', 'Lunas99$', NULL, NULL, NULL, NULL, NULL, NULL, 4),
(54, 'Sami', 'sami@gmail.com', 'KARla123!@', NULL, NULL, NULL, NULL, NULL, NULL, 4),
(55, 'juan perez', '111232@gmail.com', 'Barco.3vel', NULL, NULL, NULL, NULL, NULL, NULL, 4),
(56, 'samu', 'sam@gmail.com', 'Lunas99$', NULL, NULL, NULL, NULL, NULL, NULL, 4),
(57, 'Yael Jair Martinez Moreno', 'yaeljair@hotmail.com', 'Martinez1@', NULL, NULL, NULL, NULL, NULL, NULL, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblempresas`
--

CREATE TABLE `tblempresas` (
  `intId` int(11) NOT NULL,
  `vchNombre` varchar(60) DEFAULT NULL,
  `vchRfc` varchar(13) DEFAULT NULL,
  `vchCorreo` varchar(60) DEFAULT NULL,
  `vchGerente` varchar(60) DEFAULT NULL,
  `vchCodigop` varchar(5) DEFAULT NULL,
  `vchEstado` varchar(40) DEFAULT NULL,
  `vchMunicipio` varchar(100) DEFAULT NULL,
  `vchColonia` varchar(100) DEFAULT NULL,
  `vchTelefono` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblfaq`
--

CREATE TABLE `tblfaq` (
  `intId` int(11) NOT NULL,
  `intRol` int(11) DEFAULT NULL,
  `vchPregunta` varchar(60) DEFAULT NULL,
  `txtRespuesta` text,
  `vchFoto` varchar(20) DEFAULT NULL,
  `intTema` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblfaq`
--

INSERT INTO `tblfaq` (`intId`, `intRol`, `vchPregunta`, `txtRespuesta`, `vchFoto`, `intTema`) VALUES
(1, NULL, '¿Cómo incio sesión?', NULL, NULL, 1),
(2, NULL, '¿Que necesito para iniciar sesion?', NULL, NULL, NULL),
(3, NULL, 'Ventas', NULL, NULL, NULL),
(4, NULL, 'Devoluciones', NULL, NULL, NULL),
(5, NULL, 'Suscripciones', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblpedidos`
--

CREATE TABLE `tblpedidos` (
  `intId` int(11) NOT NULL,
  `intComprador` int(11) DEFAULT NULL,
  `intEstado` int(11) DEFAULT NULL,
  `vchTipoEntrega` varchar(60) DEFAULT NULL,
  `intProducto` int(11) DEFAULT NULL,
  `intCantidad` int(11) DEFAULT NULL,
  `vchFecha` varchar(10) DEFAULT NULL,
  `txtDomicilio` text,
  `fltPreciou` float DEFAULT NULL,
  `fltTotal` float DEFAULT NULL,
  `intTipopago` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblproductos`
--

CREATE TABLE `tblproductos` (
  `intId` int(11) NOT NULL,
  `vchNombre` varchar(50) DEFAULT NULL,
  `intCategoria` int(11) DEFAULT NULL,
  `fltPrecio` float DEFAULT NULL,
  `intExistencia` int(11) DEFAULT NULL,
  `txtDescripcion` text,
  `vchFoto1` varchar(150) DEFAULT NULL,
  `intProveedor` int(10) UNSIGNED NOT NULL,
  `vchFecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblproveedores`
--

CREATE TABLE `tblproveedores` (
  `intProv` int(11) NOT NULL,
  `vchProveedor` varchar(60) DEFAULT NULL,
  `vchCorreo` varchar(60) DEFAULT NULL,
  `vchPassword` varchar(12) DEFAULT NULL,
  `vchrfcProveedor` varchar(13) DEFAULT NULL,
  `vchCodigop` varchar(5) DEFAULT NULL,
  `vchEstado` varchar(40) DEFAULT NULL,
  `vchMunicipio` varchar(100) DEFAULT NULL,
  `vchColonia` varchar(100) DEFAULT NULL,
  `vchTelefono` varchar(10) DEFAULT NULL,
  `vchWhatsApp` varchar(10) DEFAULT NULL,
  `vchFoto` varchar(20) DEFAULT NULL,
  `intRol` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblproveedores`
--

INSERT INTO `tblproveedores` (`intProv`, `vchProveedor`, `vchCorreo`, `vchPassword`, `vchrfcProveedor`, `vchCodigop`, `vchEstado`, `vchMunicipio`, `vchColonia`, `vchTelefono`, `vchWhatsApp`, `vchFoto`, `intRol`) VALUES
(1, 'Anahi Hernandez Zavala', 'anahi@gmail.com', 'Lunas99$', '', '43060', 'Hidalgo', 'Atlapexco', 'Cochotla', '7711239702', '7785964526', NULL, 5),
(2, 'Yarasmin Tejada Lucero', '20191140@uthh.edu.mx', 'Lunas99$', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5),
(5, 'karla Anahi Hernandez Zavala', 'anahiherza26@gmail.com', 'Zava12!@', 'HEZK090126HM1', NULL, NULL, NULL, NULL, '7711517602', '6655443380', NULL, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblrepartidores`
--

CREATE TABLE `tblrepartidores` (
  `intId` int(11) NOT NULL,
  `vchNombre` varchar(60) DEFAULT NULL,
  `vchCorreo` varchar(60) DEFAULT NULL,
  `vchCodigop` varchar(5) DEFAULT NULL,
  `vchEstado` varchar(40) DEFAULT NULL,
  `vchMunicipio` varchar(100) DEFAULT NULL,
  `vchColonia` varchar(100) DEFAULT NULL,
  `vchTelefono` varchar(10) DEFAULT NULL,
  `vchFoto` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblroles`
--

CREATE TABLE `tblroles` (
  `intId` int(11) NOT NULL,
  `vchRol` varchar(18) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblroles`
--

INSERT INTO `tblroles` (`intId`, `vchRol`) VALUES
(1, 'Administrador'),
(2, 'Administrador Supe'),
(3, 'Asesor'),
(4, 'Comprador'),
(5, 'Proveedor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbltemas`
--

CREATE TABLE `tbltemas` (
  `intId` int(11) NOT NULL,
  `vchTema` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbltemas`
--

INSERT INTO `tbltemas` (`intId`, `vchTema`) VALUES
(1, 'Inicio de sesión'),
(2, 'Compras'),
(3, 'Cancelaciones'),
(4, 'Devoluciones'),
(5, 'Suscripciones');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `curp` varchar(18) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `codigopostal` int(11) DEFAULT NULL,
  `estado` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `municipio` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colonia` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user.png',
  `pregunta` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `respuesta` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `curp`, `codigopostal`, `estado`, `municipio`, `colonia`, `telefono`, `whatsapp`, `foto`, `pregunta`, `respuesta`, `role`) VALUES
(2, 'Karla Anahi', 'anahiherza26@gmail.com', NULL, '$2y$10$xK8AYS3Gg5NMcXAP1hrHRutVEi0avvE43WKVBf35vruJOXuEoi52C', 'GdBNCqOXGc9SzndE8JSNg9gzwhKQc1r0nzGRDfEJvDITZNDdrUTcdpO75lAT', NULL, NULL, 'MOKLOSN901NXJMO1P0', 43060, 'Hidalgo', 'Atlapexco', 'Cochotla', '4613258997', '7711234567', 'MOKLOSN901NXJMO1P0.jpg', '¿Cuál es el nombre de tu mascota?', 'mimi', 'Proveedor'),
(12, 'Yarasmin Tejada Lucero', 'yarasmin.tejada.lucero@gmail.com', NULL, '$2y$10$5MYTL/Lw8Op6bLl7T6dX/OEnfg44hzHXEZVtAOoanyTHLoWsiRdhK', '3rQnP7rFGaLEuItvOkx6t5VeVNw8g7OquSSJqGHCYDGassx44L6Y2FVBjNXs', NULL, NULL, 'TELY990909MHGJCR00', 43000, 'Hidalgo', 'Huejutla de Reyes', 'Jacarandas', '7717051861', '7717051861', 'TELY990909MHGJCR00.jpg', '¿Cómo se llama tu mejor amigo?', 'jose', 'Proveedor'),
(13, 'Mayra Vanessa Morales Hernández', 'mayravaneza54@gmail.com', NULL, '$2y$10$mrJMGn57pU3tpp1/Dje85Ou8eBmjl1zMKL6N6pKfGrs9gT8ve8./G', NULL, NULL, NULL, 'MOHM980729MMCRRY00', NULL, NULL, NULL, NULL, NULL, NULL, 'user.png', '¿Cuál es el nombre de tu mascota?', 'wanda', 'Comprador'),
(23, 'Gerardo Miguel Mayor', 'geramayor.2708011@gmail.com', NULL, '$2y$10$meQbldztk0ej2cAn31UoJOzi5ttpuzUs/MCu6Iq/fdfwH8AQF1cpK', NULL, NULL, NULL, 'MIMG010827HHGGYRA7', 43000, 'Hidalgo', 'Huejutla de Reyes', 'Parque de Poblamiento Solidaridad', '2345678988', '1234567898', 'MIMG010827HHGGYRA7.jpg', '¿Cuál es el nombre de tu mascota?', 'dd', 'Proveedor'),
(27, 'juan', 'juan@gmail.com', NULL, '$2y$10$ROokeGcHwHFY85Ca1hE8aOFXY6AsBqjLYr6saLwmUzfULKkc5jkA6', NULL, NULL, NULL, 'MOHM980729MMCRRY00', NULL, NULL, NULL, NULL, NULL, NULL, 'user.png', '¿Cuál es el nombre de tu mascota?', 'wanda', 'Proveedor'),
(28, 'jose', 'jose@gmail.com', NULL, '$2y$10$.UNAoiq9S3yzwz/y4iR.ReMFTh0E7MTrX/wwATRQXlOdoFSj8k3fS', NULL, NULL, NULL, 'MOHM980729MMCRRY00', NULL, NULL, NULL, NULL, NULL, NULL, 'user.png', '¿Cuál es el nombre de tu mascota?', 'wanduqui', 'Comprador'),
(29, 'Mayra Vanessa Morales Hernández', '20191230@uthh.com.mx', NULL, '$2y$10$5laqti60H5l8HDut7l8DOuxQrRFTNQiPvRaOIgwdod4nvHP8.H9ge', NULL, NULL, NULL, 'MOHM980729MMCRRY00', NULL, NULL, NULL, NULL, NULL, NULL, 'user.png', '¿Cuál es el nombre de tu mascota?', 'wanda', 'Comprador'),
(31, 'Mayra Vanessa Morales Hernández', '20191230@uthh.edu.mx', NULL, '$2y$10$ne.8W.ag3.DujmtDUIn1Ium9.ZphGd/2Qa9KVMePx5UZs09qSAVT2', NULL, NULL, NULL, 'MOHM980729MMCRRY00', NULL, NULL, NULL, NULL, NULL, NULL, 'user.png', 'Selecciona una opcion', 'wanda', 'Selecciona una opcion'),
(32, 'Jan Marco', 'janM@gmail.com', NULL, '$2y$10$1R.mEwFstNUHOdhhelFd.ucZatQ.SMC9y39Z6.bkDpbCLl3tIDC0a', NULL, NULL, NULL, 'AEHJ980630HHGNRV05', NULL, NULL, NULL, NULL, NULL, NULL, 'user.png', '¿Cuál es el nombre de tu mascota?', 'wanda', 'Proveedor');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbladministradores`
--
ALTER TABLE `tbladministradores`
  ADD PRIMARY KEY (`intId`),
  ADD KEY `fk_rol_admin` (`intRol`);

--
-- Indices de la tabla `tblasesores`
--
ALTER TABLE `tblasesores`
  ADD PRIMARY KEY (`intId`),
  ADD KEY `fk_rol_asesor` (`intRol`);

--
-- Indices de la tabla `tblbitacora`
--
ALTER TABLE `tblbitacora`
  ADD PRIMARY KEY (`intId`);

--
-- Indices de la tabla `tblbuzon`
--
ALTER TABLE `tblbuzon`
  ADD PRIMARY KEY (`intId`);

--
-- Indices de la tabla `tblcategorias`
--
ALTER TABLE `tblcategorias`
  ADD PRIMARY KEY (`intCat`);

--
-- Indices de la tabla `tblcompradores`
--
ALTER TABLE `tblcompradores`
  ADD PRIMARY KEY (`intId`);

--
-- Indices de la tabla `tblempresas`
--
ALTER TABLE `tblempresas`
  ADD PRIMARY KEY (`intId`);

--
-- Indices de la tabla `tblfaq`
--
ALTER TABLE `tblfaq`
  ADD PRIMARY KEY (`intId`),
  ADD KEY `fk_tema` (`intTema`),
  ADD KEY `fk_rol_faq` (`intRol`);

--
-- Indices de la tabla `tblpedidos`
--
ALTER TABLE `tblpedidos`
  ADD PRIMARY KEY (`intId`),
  ADD KEY `fk_comprador` (`intComprador`),
  ADD KEY `fk_producto` (`intProducto`);

--
-- Indices de la tabla `tblproductos`
--
ALTER TABLE `tblproductos`
  ADD PRIMARY KEY (`intId`),
  ADD KEY `fk_categoria` (`intCategoria`),
  ADD KEY `fk_proveedors` (`intProveedor`);

--
-- Indices de la tabla `tblproveedores`
--
ALTER TABLE `tblproveedores`
  ADD PRIMARY KEY (`intProv`),
  ADD KEY `vchrfcProveedor` (`vchrfcProveedor`);

--
-- Indices de la tabla `tblrepartidores`
--
ALTER TABLE `tblrepartidores`
  ADD PRIMARY KEY (`intId`);

--
-- Indices de la tabla `tblroles`
--
ALTER TABLE `tblroles`
  ADD PRIMARY KEY (`intId`);

--
-- Indices de la tabla `tbltemas`
--
ALTER TABLE `tbltemas`
  ADD PRIMARY KEY (`intId`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tbladministradores`
--
ALTER TABLE `tbladministradores`
  MODIFY `intId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tblbuzon`
--
ALTER TABLE `tblbuzon`
  MODIFY `intId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tblcategorias`
--
ALTER TABLE `tblcategorias`
  MODIFY `intCat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tblcompradores`
--
ALTER TABLE `tblcompradores`
  MODIFY `intId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de la tabla `tblproductos`
--
ALTER TABLE `tblproductos`
  MODIFY `intId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tblproveedores`
--
ALTER TABLE `tblproveedores`
  MODIFY `intProv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbladministradores`
--
ALTER TABLE `tbladministradores`
  ADD CONSTRAINT `fk_rol_admin` FOREIGN KEY (`intRol`) REFERENCES `tblroles` (`intId`);

--
-- Filtros para la tabla `tblasesores`
--
ALTER TABLE `tblasesores`
  ADD CONSTRAINT `fk_rol_asesor` FOREIGN KEY (`intRol`) REFERENCES `tblroles` (`intId`);

--
-- Filtros para la tabla `tblfaq`
--
ALTER TABLE `tblfaq`
  ADD CONSTRAINT `fk_rol_faq` FOREIGN KEY (`intRol`) REFERENCES `tblroles` (`intId`),
  ADD CONSTRAINT `fk_tema` FOREIGN KEY (`intTema`) REFERENCES `tbltemas` (`intId`);

--
-- Filtros para la tabla `tblpedidos`
--
ALTER TABLE `tblpedidos`
  ADD CONSTRAINT `fk_producto` FOREIGN KEY (`intProducto`) REFERENCES `tblproductos` (`intId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tblproductos`
--
ALTER TABLE `tblproductos`
  ADD CONSTRAINT `fk_categoria` FOREIGN KEY (`intCategoria`) REFERENCES `tblcategorias` (`intCat`),
  ADD CONSTRAINT `fk_proveedors` FOREIGN KEY (`intProveedor`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
