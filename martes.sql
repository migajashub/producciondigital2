-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-10-2025 a las 22:20:10
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `martes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artistas`
--

CREATE TABLE `artistas` (
  `id` int(8) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `bio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `artistas`
--

INSERT INTO `artistas` (`id`, `nombre`, `bio`) VALUES
(1, '<h1>Ernst Ludwig Kirchner</h1>', '            <div class=\"artista_pagina\">\r\n                <div class=\"img_header_buscar\">\r\n<img src=\"img/kirchner_cuatro-bañistas_1910_exp.jpg\">\r\n                    </div>\r\n \r\n<div class=\"res_buscar\">\r\n             <h3>Biografía</h3>\r\n                <br><p>Nacido en 1880, después de egresar de la escuela, Kirchner estudió en la Real Universidad Técnica de Dresde. Ahí conoció a Bleyl, Heckel y Schmidt-Rottluff y se graduó como arquitecto. Al hallar intereses en común con ellos, decidieron fundar Die Brücke en 1905.\r\n                <br><br>En un inicio se enfocó en retratar paisajes, pero pronto se interesó en mostrar la figura humana, desnudos y escenas urbanas de Berlín. Tocaba temas como el caos de la vida moderna y la condición escabrosa humana. En 1913 llegó a exhibir sus obras en Estados Unidos, causando agitación entre los círculos artísticos americanos. En mayo de 1913 el grupo se diluyó por conflictos entre los miembros relacionados a la planificación de “La crónica de Brücke”\r\n                <br><br>Durante la Primera Guerra Mundial, atemorizado por la guerra, se ofreció como voluntario como conductor. Tras un colapso nervioso, se le fue declarado como inepto para el servicio y fue dado de alta. A fines de 1920 se realizaron numerosas exhibiciones dedicadas a Kirchner, siendo que en 1928 sus obras fueron mostradas en el Bienal de Venecia. En 1933, con el\r\n                ascenso al poder nazi, Kirchner estuvo inicialmente intrigado por el nuevo régimen, pero, tras el golpe de Hitler, en un estado de preocupación decidió no retornar a Alemania.\r\n                <br><br>Tras una retrospectiva importante en la Kunsthalle de Berna, se le obligó a Kirchner a abandonar su pseudónimo. Debido a la amenaza impuesta por los nazis, tuvo pérdidas relacionadas a las dificultades en vender sus obras. En 1937 los nazis\r\n                suprimieron su trabajo de las colecciones públicas, confiscaron sus obras y las difamaron como parte de la campaña de propaganda “Arte Degenerado”. Ese mismo año fue expulsado de la Academia Prusiana a la cual se había unido recientemente en 1931. Profundamente herido y sintiéndose desesperanzado, canceló su boda planeada con Erna Schilling. Tomó su propia vida en junio de 1938 frente a su casa en Wildboden.</p>\r\n</div>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `asunto` varchar(255) NOT NULL,
  `mensaje` text NOT NULL,
  `tipo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`id`, `nombre`, `email`, `asunto`, `mensaje`, `tipo`) VALUES
(1, 'vidrio quemado', 'vidrioquemado@gmail.com', '', 'auxilio', ''),
(2, 'muerdo vidrio', 'chompchomp@yahoo.com', 'he mordido vidrio', 'Me aconteció que mordí vidrio y mis dientes se rompieron', 'comentario');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `artistas`
--
ALTER TABLE `artistas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `artistas`
--
ALTER TABLE `artistas`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
