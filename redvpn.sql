-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-05-2015 a las 17:52:12
-- Versión del servidor: 5.5.36
-- Versión de PHP: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `redvpn`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `codigo` double NOT NULL AUTO_INCREMENT,
  `user` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre1` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `nombre2` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `apellido1` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `apellido2` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`codigo`),
  UNIQUE KEY `user` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=91026136 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`codigo`, `user`, `password`, `nombre1`, `nombre2`, `apellido1`, `apellido2`) VALUES
(930213, 'armando.escandalo', '123456', 'Armando', 'Buta', 'Escandalo', 'Percha'),
(91010736, 'kevin.casasbuenas', 'a1ced87e', 'Kevin', 'Rafael', 'Casasbuenas', 'Ortega'),
(91026135, 'linda.ojeda', 'linda901017', 'Linda', 'Patricia', 'Ojeda', 'Miranda');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
