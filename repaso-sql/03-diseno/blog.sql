CREATE TABLE usuarios(
    id INT(255) auto_increment NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    apellido VARCHAR(100) not NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    fecha DATE NOT NULL,
    CONSTRAINT pk_usuarios PRIMARY KEY(id),
    CONSTRAINT uq_email UNIQUE(email) 
)ENGINE=InnoDb; 
/*forza que no se repitan emails*/
/*integridad referencial, que lass claves existan*/

CREATE TABLE categorias(
    id INT(255) auto_increment NOT NULL,
    nombre VARCHAR(100),
    CONSTRAINT pk_categorias PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE entradas(
    id  INT(255) auto_increment NOT NULL,
    usuario_id INT(255) NOT NULL,
    categoria_id INT(255) NOT NULL,
    titulo  VARCHAR(255) NOT NULL,
    descripcion MEDIUMTEXT,
    fecha   DATE NOT NULL,
    CONSTRAINT pk_entradas PRIMARY KEY(id),
    CONSTRAINT fk_entrada_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id),
    CONSTRAINT fk_entrada_categoria FOREIGN KEY(categoria_id) REFERENCES categorias(id)

)ENGINE=InnoDb;