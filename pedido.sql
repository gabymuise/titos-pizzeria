-- Crear una base de datos si aún no existe
CREATE DATABASE IF NOT EXISTS pedidos;

-- Usar la base de datos
USE pedidos;

-- Crear una tabla para almacenar pedidos
CREATE TABLE pedidos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tipo_pizza VARCHAR(255) NOT NULL,
    cantidad INT NOT NULL,
    direccion_entrega VARCHAR(255) NOT NULL,
    fecha_pedido TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

GRANT ALL PRIVILEGES ON pedidos.* TO 'nombre_de_usuario'@'localhost' IDENTIFIED BY 'tu_contraseña';
