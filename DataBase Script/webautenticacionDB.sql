-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3307
-- Tiempo de generación: 13-05-2025 a las 01:45:44
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- --------------------------------------------------------
-- Base de datos: `webautenticacion`
-- --------------------------------------------------------

CREATE DATABASE IF NOT EXISTS `webautenticacion` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `webautenticacion`;

-- --------------------------------------------------------
-- Estructura de tabla para la tabla `usuarios`
-- --------------------------------------------------------

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombreCompleto` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `nacimiento` date NOT NULL,
  `password` varchar(255) NOT NULL,
  `creado_en` timestamp NOT NULL DEFAULT current_timestamp(),
  `reset_token` varchar(255) DEFAULT NULL,
  `token_expira` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------
-- Volcado de datos para la tabla `usuarios`
-- --------------------------------------------------------

INSERT INTO `usuarios` (`id`, `nombreCompleto`, `correo`, `nacimiento`, `password`, `creado_en`, `reset_token`, `token_expira`) VALUES
(1, 'Christian Carrasco', 'carrascochristian000@gmail.com', '2003-02-14', '$2y$10$jCUputp3TeXgkoWNlnaRe.twBQlfQerCJSo7b0psYjX1z6wehM3uS', '2025-04-29 22:56:39', NULL, NULL),
(2, 'Christian Carrasco', 'cacarrasco4@utpl.edu.ec', '2003-02-14', '$2y$10$tS6rGylGmlAgVSfCQENmOe90GeSyUkpP57LGnU4rhxSf8m2pcdwMa', '2025-04-30 01:07:01', NULL, NULL),
(3, 'Christian Carrasco', 'chrisalexandercarrasco@gmail.com', '2003-02-14', '$2y$10$.ZdmKD84OO6GD11wqM4Tv.iggkNpYLF8OpvkV7S86TQUdPCEu/tVe', '2025-04-30 02:00:39', NULL, NULL),
(4, 'Belén Chicaiza', 'dasalas8@espe.edu.ec', '2004-10-10', '$2y$10$TVMaezMTvwDhTpoazvZj5uvG7AsJb/ZP7LWWVL.jTJVx9dXpTdmuO', '2025-05-04 14:59:27', NULL, NULL),
(6, 'Erick Carrasco', 'erickcarrasco25052005@gmail.com', '2005-08-25', '$2y$10$AwDRKNVn.58jU3RWWIFVce7oXYSXKFkQ6SX86B/RgWmsSL4ptgnyy', '2025-05-04 20:24:50', NULL, NULL);

-- --------------------------------------------------------
-- Índices para tablas volcadas
-- --------------------------------------------------------

ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `correo` (`correo`);

-- --------------------------------------------------------
-- AUTO_INCREMENT de las tablas volcadas
-- --------------------------------------------------------

ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

COMMIT;
