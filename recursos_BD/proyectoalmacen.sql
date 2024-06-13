-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-08-2023 a las 18:24:32
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectoalmacen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `idAdministrador` int(11) NOT NULL,
  `cedulaAdministrador` varchar(45) DEFAULT NULL,
  `nombreAdministrador` varchar(45) DEFAULT NULL,
  `AprellidoAdministrador` varchar(45) DEFAULT NULL,
  `telefonoAdministrador` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`idAdministrador`, `cedulaAdministrador`, `nombreAdministrador`, `AprellidoAdministrador`, `telefonoAdministrador`) VALUES
(1, '1', 'leo', 'rivas', '1'),
(8, '456', 'jorge', 'molano', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallesalida`
--

CREATE TABLE `detallesalida` (
  `idDetalleSalida` int(11) NOT NULL,
  `fechaEntregaDetalleSalida` varchar(45) DEFAULT NULL,
  `idSalida` int(11) NOT NULL,
  `idequipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `detallesalida`
--

INSERT INTO `detallesalida` (`idDetalleSalida`, `fechaEntregaDetalleSalida`, `idSalida`, `idequipo`) VALUES
(1, 'nunca', 2, 5),
(2, 'creo que ahy esta', 6, 6),
(3, 'KHSIULgsfky<', 4, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `idequipo` int(11) NOT NULL,
  `marcaE` varchar(45) DEFAULT NULL,
  `codigoE` varchar(45) DEFAULT NULL,
  `colorE` varchar(45) DEFAULT NULL,
  `despE` varchar(45) DEFAULT NULL,
  `estadoE` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`idequipo`, `marcaE`, `codigoE`, `colorE`, `despE`, `estadoE`) VALUES
(5, 'hp', 'dsg', 'negro', 'hecho kk', 1),
(6, 'asus', 'fgb', 'plateado', 'bueno', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salidaequipo`
--

CREATE TABLE `salidaequipo` (
  `idSalida` int(11) NOT NULL,
  `fechaSalida` varchar(45) DEFAULT NULL,
  `idusuario` int(11) NOT NULL,
  `idAdministrador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `salidaequipo`
--

INSERT INTO `salidaequipo` (`idSalida`, `fechaSalida`, `idusuario`, `idAdministrador`) VALUES
(2, 'se lo robaron', 1, 8),
(4, 'no aparece', 2, 1),
(6, 'nose ayer', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `contraseña` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombre`, `contraseña`) VALUES
(1, 'leo', '123'),
(2, 'jorge', '321');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`idAdministrador`);

--
-- Indices de la tabla `detallesalida`
--
ALTER TABLE `detallesalida`
  ADD PRIMARY KEY (`idDetalleSalida`),
  ADD KEY `fk_DetalleSalida_SalidaEquipo_idx` (`idSalida`),
  ADD KEY `fk_DetalleSalida_equipo1_idx` (`idequipo`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`idequipo`);

--
-- Indices de la tabla `salidaequipo`
--
ALTER TABLE `salidaequipo`
  ADD PRIMARY KEY (`idSalida`),
  ADD KEY `fk_SalidaEquipo_usuario1_idx` (`idusuario`),
  ADD KEY `fk_SalidaEquipo_Administrador1_idx` (`idAdministrador`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `idAdministrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `detallesalida`
--
ALTER TABLE `detallesalida`
  MODIFY `idDetalleSalida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `idequipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `salidaequipo`
--
ALTER TABLE `salidaequipo`
  MODIFY `idSalida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detallesalida`
--
ALTER TABLE `detallesalida`
  ADD CONSTRAINT `fk_DetalleSalida_SalidaEquipo` FOREIGN KEY (`idSalida`) REFERENCES `salidaequipo` (`idSalida`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_DetalleSalida_equipo1` FOREIGN KEY (`idequipo`) REFERENCES `equipo` (`idequipo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `salidaequipo`
--
ALTER TABLE `salidaequipo`
  ADD CONSTRAINT `fk_SalidaEquipo_Administrador1` FOREIGN KEY (`idAdministrador`) REFERENCES `administrador` (`idAdministrador`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_SalidaEquipo_usuario1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
