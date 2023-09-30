-- Crear una base de datos si aún no existe
CREATE DATABASE IF NOT EXISTS usuarios;

-- Usar la base de datos
USE usuarios;

-- Crear la tabla de usuarios
CREATE TABLE `usuarios` (
  `usuario` varchar(20) NOT NULL,
  `password` varchar(60) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;