CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(100) NOT NULL
);

INSERT INTO usuarios (nombre, correo)
VALUES
('Jose', 'jose@example.com'),
('Irene', 'irene@example.com');
