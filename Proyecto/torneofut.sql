-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2013 a las 19:33:56
-- Versión del servidor: 5.5.32
-- Versión de PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `torneofut`
--
CREATE DATABASE IF NOT EXISTS `torneofut` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `torneofut`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `Id_Categoria` int(11) NOT NULL,
  `Tipo` varchar(15) NOT NULL,
  PRIMARY KEY (`Id_Categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `delegado`
--

CREATE TABLE IF NOT EXISTS `delegado` (
  `Id_Delegado` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `Telefono` int(20) NOT NULL,
  PRIMARY KEY (`Id_Delegado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dueño`
--

CREATE TABLE IF NOT EXISTS `dueño` (
  `Id_Dueño` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `Telefono` int(20) NOT NULL,
  `Id_Delegado` int(11) NOT NULL,
  PRIMARY KEY (`Id_Dueño`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE IF NOT EXISTS `equipo` (
  `Id_Equipo` int(11) NOT NULL,
  `Nom_Equipo` varchar(25) NOT NULL,
  `Playera` varchar(10) NOT NULL,
  `Short` varchar(10) NOT NULL,
  `Medias` varchar(10) NOT NULL,
  `Id_Categorias` int(11) NOT NULL,
  `Id_Dueño` int(11) NOT NULL,
  `Id_Tabla''` int(11) NOT NULL,
  PRIMARY KEY (`Id_Equipo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jornada`
--

CREATE TABLE IF NOT EXISTS `jornada` (
  `Id_Jornada` int(11) NOT NULL,
  `Hora` time NOT NULL,
  `Fecha` date NOT NULL,
  PRIMARY KEY (`Id_Jornada`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juega`
--

CREATE TABLE IF NOT EXISTS `juega` (
  `Id_Equipo` int(11) NOT NULL,
  `Id_Torneo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugador`
--

CREATE TABLE IF NOT EXISTS `jugador` (
  `Id_Jugador` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `Telefono` int(20) NOT NULL,
  `Id_Equipo` int(11) NOT NULL,
  PRIMARY KEY (`Id_Jugador`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pertenece`
--

CREATE TABLE IF NOT EXISTS `pertenece` (
  `Id_Jornada` int(11) NOT NULL,
  `Id_Torneo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posiciones`
--

CREATE TABLE IF NOT EXISTS `posiciones` (
  `Id_Tabla` int(11) NOT NULL,
  `Equipo` varchar(25) NOT NULL,
  `Juegos_Jugados` int(11) NOT NULL DEFAULT '0',
  `Juegos_Ganados` int(11) NOT NULL DEFAULT '0',
  `Juegos_Empatados` int(11) NOT NULL DEFAULT '0',
  `Juegos_Perdidos` int(11) NOT NULL DEFAULT '0',
  `Goles_Favor` int(11) NOT NULL DEFAULT '0',
  `Goles_Contra` int(11) NOT NULL DEFAULT '0',
  `Diferencia_Goles` int(11) NOT NULL DEFAULT '0',
  `Juegos_Perdidos_Default` int(11) NOT NULL DEFAULT '0',
  `Puntos` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id_Tabla`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `torneo`
--

CREATE TABLE IF NOT EXISTS `torneo` (
  `Id_Torneo` int(11) NOT NULL,
  `Horario` time NOT NULL,
  `Fecha` date NOT NULL,
  `Equipo_1` varchar(25) NOT NULL,
  `Equipo_2` varchar(25) NOT NULL,
  `Id_Categoria` int(11) NOT NULL,
  PRIMARY KEY (`Id_Torneo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
