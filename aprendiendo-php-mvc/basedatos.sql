CREATE DATABASE notas_master;
USE notas_master;



CREATE TABLE usuarios(
    id  int(255) auto_increment not NULL,
    nombre      VARCHAR(100) not NULL,
    apellidos   VARCHAR(100) NOT NULL,
    email       VARCHAR(255) NOT NULL,
    password    VARCHAR(255) NOT NULL,
    fecha date  NOT NULL,
    CONSTRAINT  pk_usuarios PRIMARY KEY(id),
    CONSTRAINT  uq_email UNIQUE(email)
)ENGINE=InnoDB;

CREATE TABLE notas(
    id          int(255) auto_increment not NULL,
    usuario_id  INT(255) NOT NULL,
    titulo      VARCHAR(100) not NULL,
    descripcion MEDIUMTEXT,
    fecha       date NOT NULL,
    CONSTRAINT  pk_notas PRIMARY KEY(id),
    CONSTRAINT fk_nota_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id)
)ENGINE=InnoDB;

