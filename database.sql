/* Creamos la base de datos */
CREATE DATABASE horarios;
/* La usamos */
USE horarios;
/* Creamos una tabla */
CREATE TABLE horarios.tareas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tarea VARCHAR(100),
    horaInicio VARCHAR(50),
    horaFinal VARCHAR(50)
);

SELECT * FROM tareas;

UPDATE tareas set tarea = 'dormir', horaInicio = '$horaInicio', horaFinal = '$horaFinal' WHERE id = 11;