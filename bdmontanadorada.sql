-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-05-2024 a las 00:11:33
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

--
-- Volcado de datos para la tabla `alimentacion`
--

INSERT INTO `alimentacion` (`id`, `colmena_id`, `jarabe`, `azucar`, `board`, `candy`, `otro`) VALUES
(1, 0, 'concentración: 3:2', '50', '20', '15', '12'),
(2, 1, 'concentración: 2:1', '', '', '', ''),
(3, 2, 'concentración: 1:1', '50', '25', '12', '00'),
(4, 1, 'concentración: otro', '', '', '', ''),
(5, 1, 'concentración: otro', '', '', '', ''),
(6, 1, 'concentración: otro', '', '', '', ''),
(7, 1, 'concentración: otro', '', '', '', ''),
(8, 0, 'concentración: otro', '', '', '', ''),
(9, 0, 'concentración: otro', '', '', '', ''),
(10, 1, 'concentración: otro', '50', '20', '15', '12');

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
  `ubicacion_map` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `apiarios`
--

INSERT INTO `apiarios` (`id`, `nombre`, `municipio`, `finca`, `granjero`, `telefono`, `fecha_instal`, `ubicacion_map`) VALUES
(1, 'colmenero', 'Hacari', 'la sagrada', 'Juan Esteban', '3125468752', '2023-02-22', ''),
(2, 'Don Rafa', 'Ocaña', 'Limonal', 'Samuel', '3178394885', '2024-06-12', ''),
(3, 'Jalea Real', 'playa', 'La unión', 'Dulian', '56325874', '2020-07-22', ''),
(4, 'Cocotos', 'Abrego', 'El cebollero', 'Sebastian hernandez', '3123339514', '2024-05-22', '');

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

--
-- Volcado de datos para la tabla `colmenas`
--

INSERT INTO `colmenas` (`id`, `apiario_id`, `tipo`, `qr`, `fecha_instal`) VALUES
(1, 1, 'Colmena Vertical', 'QR826947', '2020-07-22'),
(2, 2, 'Camara de cría', 'QR76737', '2020-07-22'),
(3, 3, 'Núcleo', 'QR238225', '2020-07-22'),
(4, 3, 'Colmena Vertical', 'QR871428', '2020-07-22'),
(5, 4, 'Camara de cría', 'QR705456', '2024-03-22'),
(6, 4, 'Núcleo', 'QR202432', '2020-07-22');

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

--
-- Volcado de datos para la tabla `colonias`
--

INSERT INTO `colonias` (`id`, `colmena_id`, `fuerza`, `temperamento`, `celdas`, `enjambre`, `alimento`, `notas`) VALUES
(1, 1, 'Muy fuerte', 'Muy Defensiva', 'No', 'No', 'No', 'excelente');

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

--
-- Volcado de datos para la tabla `cuadros`
--

INSERT INTO `cuadros` (`id`, `colmena_id`, `ocupados`, `cria`, `reserva`, `marco_vacio`, `marco_cambio`, `notas`) VALUES
(1, 1, 10, 10, 10, 10, 0, 'drgdfg'),
(2, 6, 10, 10, 10, 10, 0, 'dulian 2'),
(3, 1, 10, 10, 10, 10, 0, 'dsd'),
(4, 1, 10, 10, 10, 10, 0, 'dgg');

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

--
-- Volcado de datos para la tabla `equipamiento`
--

INSERT INTO `equipamiento` (`id`, `colmena_id`, `cria`, `alzas`, `medias`, `alimentador`, `polen`, `propoleo`, `reinas`, `excluidora`, `piquera`) VALUES
(1, 1, 5, 5, 5, 'No', 'No', 'No', 'No', 'No', 20),
(2, 2, 5, 5, 5, 'No', 'No', 'No', 'No', 'No', 20),
(3, 3, 5, 5, 5, 'No', 'No', 'No', 'No', 'No', 20),
(4, 4, 5, 5, 5, 'No', 'No', 'No', 'No', 'No', 20),
(5, 1, 5, 5, 5, 'No', 'No', 'No', 'No', 'No', 20),
(6, 1, 5, 5, 5, 'No', 'No', 'No', 'No', 'No', 20),
(7, 1, 5, 5, 5, 'No', 'No', 'No', 'No', 'No', 20),
(8, 1, 5, 5, 5, 'No', 'No', 'No', 'No', 'No', 20),
(9, 1, 5, 5, 5, 'No', 'No', 'No', 'No', 'No', 20),
(10, 6, 5, 5, 5, 'No', 'Si', 'No', 'No', 'No', 20),
(11, 6, 5, 5, 5, 'No', 'No', 'No', 'No', 'No', 20);

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

--
-- Volcado de datos para la tabla `reina`
--

INSERT INTO `reina` (`id`, `colmena_id`, `raza`, `linea`, `numero`, `fuente`, `año_nacimiento`, `postura`, `ciclo`, `notas`) VALUES
(1, 1, 'americana', 'exterior', '', 'Criada', '2020-07-22', 'Regular', 'Muerta', 'Excelente estado'),
(2, 3, 'americana', 'exterior', '32', 'Atrapada', '2020-07-22', 'Regular', 'Muerta', 'Desmejorada'),
(3, 2, 'americana', 'exterior', '32', 'Atrapada', '2020-07-14', 'Buena', 'Realera', 'Excelente estado'),
(4, 2, 'China', 'promax', '14', 'Comprada', '2024-02-22', 'Muy Buena', 'Madura', 'comprada nueva'),
(5, 5, 'americana', 'exterior', '32', 'Atrapada', '2023-06-22', 'Buena', 'Realera', 'Productiva'),
(6, 6, 'americana', 'exterior', '32', 'Atrapada', '2020-07-07', 'Muy Buena', 'Muerta', 'Dulian'),
(7, 6, 'China', 'promax', '32', 'Criada', '2020-07-22', 'Regular', 'Muerta', 'gdg');

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

--
-- Volcado de datos para la tabla `tratamiento`
--

INSERT INTO `tratamiento` (`id`, `colmena_id`, `enfermedad`, `medicina`, `nombre_medicina`, `fecha_aplicacion`, `fecha_dosis`, `dosis`, `notas`) VALUES
(1, 1, 'No hay nada', 0, '', '2020-07-22', '2020-07-22', '', 'Buen estado'),
(2, 1, 'Nosemosis', 0, 'acetaminofen', '2024-05-22', '2024-11-14', '30 mg', 'estar mas pendiente'),
(3, 0, 'Nosemosis', 0, '', '2020-07-22', '2020-07-22', '', 'dsfdds'),
(4, 0, 'Nosemosis', 0, '', '2020-07-22', '2020-07-22', '', 'dsfdds');

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
(1, 'uriel', 'uriel2024', 'uriel carvajalino');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `apiarios`
--
ALTER TABLE `apiarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `colmenas`
--
ALTER TABLE `colmenas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `colonias`
--
ALTER TABLE `colonias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cuadros`
--
ALTER TABLE `cuadros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `equipamiento`
--
ALTER TABLE `equipamiento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `reina`
--
ALTER TABLE `reina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tratamiento`
--
ALTER TABLE `tratamiento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
