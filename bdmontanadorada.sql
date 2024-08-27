-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-08-2024 a las 17:37:35
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdmontanadorada`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alimentacion`
--

CREATE TABLE `alimentacion` (
  `id` int(11) NOT NULL,
  `colmena_id` int(70) NOT NULL,
  `jarabe` varchar(100) NOT NULL,
  `azucar` varchar(100) NOT NULL,
  `board` varchar(100) NOT NULL,
  `candy` varchar(100) NOT NULL,
  `otro` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apiarios`
--

CREATE TABLE `apiarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `municipio` varchar(100) NOT NULL,
  `finca` varchar(100) NOT NULL,
  `granjero` varchar(100) NOT NULL,
  `telefono` varchar(70) NOT NULL,
  `fecha_instal` date NOT NULL,
  `latitude` text NOT NULL,
  `longitude` text NOT NULL,
  `ubicacion_map` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colmenas`
--

CREATE TABLE `colmenas` (
  `id` int(11) NOT NULL,
  `apiario_id` int(20) NOT NULL,
  `tipo` varchar(200) NOT NULL,
  `qr` varchar(200) NOT NULL,
  `fecha_instal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colonias`
--

CREATE TABLE `colonias` (
  `id` int(11) NOT NULL,
  `colmena_id` int(70) NOT NULL,
  `fuerza` varchar(100) NOT NULL,
  `temperamento` varchar(100) NOT NULL,
  `celdas` varchar(70) NOT NULL,
  `enjambre` text NOT NULL,
  `alimento` varchar(70) NOT NULL,
  `notas` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuadros`
--

CREATE TABLE `cuadros` (
  `id` int(11) NOT NULL,
  `colmena_id` int(70) NOT NULL,
  `ocupados` int(70) NOT NULL,
  `cria` int(70) NOT NULL,
  `reserva` int(70) NOT NULL,
  `marco_vacio` int(70) NOT NULL,
  `marco_cambio` int(70) NOT NULL,
  `notas` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipamiento`
--

CREATE TABLE `equipamiento` (
  `id` int(11) NOT NULL,
  `colmena_id` int(100) NOT NULL,
  `cria` int(70) NOT NULL,
  `alzas` int(70) NOT NULL,
  `medias` int(70) NOT NULL,
  `alimentador` varchar(70) NOT NULL,
  `polen` varchar(70) NOT NULL,
  `propoleo` varchar(70) NOT NULL,
  `reinas` varchar(70) NOT NULL,
  `excluidora` varchar(70) NOT NULL,
  `piquera` int(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `produccion`
--

CREATE TABLE `produccion` (
  `id` int(11) NOT NULL,
  `colmena_id` int(200) NOT NULL,
  `fecha_produccion` date NOT NULL,
  `cosecha` varchar(100) NOT NULL,
  `cantidad` tinyint(10) NOT NULL,
  `cuadros` tinyint(10) NOT NULL,
  `notas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reina`
--

CREATE TABLE `reina` (
  `id` int(11) NOT NULL,
  `colmena_id` int(70) NOT NULL,
  `raza` varchar(100) NOT NULL,
  `linea` varchar(100) NOT NULL,
  `numero` varchar(100) NOT NULL,
  `fuente` varchar(100) NOT NULL,
  `año_nacimiento` varchar(100) NOT NULL,
  `postura` varchar(100) NOT NULL,
  `ciclo` varchar(100) NOT NULL,
  `notas` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tratamiento`
--

CREATE TABLE `tratamiento` (
  `id` int(11) NOT NULL,
  `colmena_id` int(70) NOT NULL,
  `enfermedad` varchar(100) NOT NULL,
  `medicina` int(70) NOT NULL,
  `nombre_medicina` varchar(200) DEFAULT NULL,
  `fecha_aplicacion` varchar(200) DEFAULT NULL,
  `fecha_dosis` varchar(200) DEFAULT NULL,
  `dosis` varchar(200) DEFAULT NULL,
  `notas` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `contraseña` varchar(200) NOT NULL,
  `nombre_completo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `contraseña`, `nombre_completo`) VALUES
(1, 'root', 'MontanaDorada3032#', 'Dairo Quintero Ascanio');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alimentacion`
--
ALTER TABLE `alimentacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `apiarios`
--
ALTER TABLE `apiarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `colmenas`
--
ALTER TABLE `colmenas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `colonias`
--
ALTER TABLE `colonias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cuadros`
--
ALTER TABLE `cuadros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `equipamiento`
--
ALTER TABLE `equipamiento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `produccion`
--
ALTER TABLE `produccion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reina`
--
ALTER TABLE `reina`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tratamiento`
--
ALTER TABLE `tratamiento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alimentacion`
--
ALTER TABLE `alimentacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `apiarios`
--
ALTER TABLE `apiarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `colmenas`
--
ALTER TABLE `colmenas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `colonias`
--
ALTER TABLE `colonias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cuadros`
--
ALTER TABLE `cuadros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `equipamiento`
--
ALTER TABLE `equipamiento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `produccion`
--
ALTER TABLE `produccion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reina`
--
ALTER TABLE `reina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tratamiento`
--
ALTER TABLE `tratamiento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
