use usuarios;

CREATE TABLE usuarios(
    idUsuario smallint unsigned AUTO_INCREMENT PRIMARY KEY,
    nombre varchar(100) NOT NULL,
    correo varchar(200) NOT NULL,
    password varchar(150) NOT NULL,
    perfil char(1) NOT NULL,
    CONSTRAINT chk_perfil CHECK (perfil IN ('A', 'P'))
);