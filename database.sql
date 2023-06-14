/* Creamos la base de datos */
CREATE DATABASE usuarios;
/* La usamos */
USE usuarios;
/* Creamos una tabla */
CREATE TABLE usuarios.users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50),
    correo VARCHAR(100),
    fecha DATE
)