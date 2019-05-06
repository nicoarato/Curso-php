/*
1. Diseñar y crear bdatos de un consecionario


*/

CREATE DATABASE IF NOT EXISTS consecionario;
USE consecionario;



CREATE TABLE coches (
    id      int(10) auto_increment NOT NULL,
    modelo  VARCHAR(100) NOT NULL,
    marca   VARCHAR(50),
    precio  INT(20) NOT NULL,
    stock   INT(255) NOT NULL,
    CONSTRAINT pk_coches PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE grupos (
    id      INT(10) auto_increment NOT NULL,
    nombre  VARCHAR(100) NOT NULL,
    ciudad  VARCHAR(100),
    CONSTRAINT pk_grupos PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE vendedores (
    id  INT(10) auto_increment NOT NULL,
    grupo_id    INT(10) NOT NULL,
    jefe        int(10),
    nombre      VARCHAR(100) NOT NULL,
    apellido    VARCHAR(150) ,
    cargo       VARCHAR(50) ,
    fecha_alta  DATE,
    sueldo      float(20,2),
    comision    FLOAT(10,2),
    CONSTRAINT  pk_vendedores PRIMARY KEY(id),
    CONSTRAINT fk_vendedor_grupo FOREIGN KEY(grupo_id) REFERENCES grupos(id),
    CONSTRAINT fk_vendedor_jefe FOREIGN KEY(jefe) REFERENCES vendedores(id)
)ENGINE=InnoDB;

 CREATE TABLE clientes (
    id          INT(10) auto_increment NOT NULL,
    vendedor_id INT(10),
    nombre      VARCHAR(150) NOT NULL,
    ciudad      varchar(100),
    gastado     float(50,2),
    fecha       date,
    CONSTRAINT pk_clientes PRIMARY KEY(id),
    CONSTRAINT fk_cliente_vendedor FOREIGN KEY(vendedor_id) REFERENCES vendedores(id)
)ENGINE=InnoDB;

CREATE TABLE encargos (
    id  INT(10) auto_increment NOT NULL,
    cliente_id  INT(10) NOT NULL,
    coche_id    int(10) NOT null,
    cantidad    INT(100),
    fecha       DATE,
    CONSTRAINT pk_encargos PRIMARY KEY(id),
    CONSTRAINT fk_cliente FOREIGN KEY(cliente_id) REFERENCES clientes(id),
    CONSTRAINT fk_coche FOREIGN KEY(coche_id) REFERENCES coches(id)
)ENGINE=InnoDB;



#Relleno de bdatos

#coches

INSERT INTO coches VALUES(null,'Renault Clio','Renault',12000,13);
INSERT INTO coches VALUES(null,'Seat Panda','Seat',10000,10);
INSERT INTO coches VALUES(null,'Mercedes Ranchera','Mercedes Benz',32000,24);
INSERT INTO coches VALUES(null,'Porche Cayene','Porche',65000,5);
INSERT INTO coches VALUES(null,'Lambo Aventador','Lamborgini',170000,2);
INSERT INTO coches VALUES(null,'Ferrari Spider','Ferrari',245000,80);





#grupos

INSERT INTO grupos VALUES(null,'Vendedores A', 'Madrid');
INSERT INTO grupos VALUES(null,'Vendedores B', 'Madrid');
INSERT INTO grupos VALUES(null,'Directores mecanicos', 'Madrid');
INSERT INTO grupos VALUES(null,'Vendedores A', 'Barcelona');
INSERT INTO grupos VALUES(null,'Vendedores B', 'Barcelona');
INSERT INTO grupos VALUES(null,'Vendedores C', 'Valencia');
INSERT INTO grupos VALUES(null,'Vendedores A', 'Bilbao');
INSERT INTO grupos VALUES(null,'Vendedores B', 'Pamplona');
INSERT INTO grupos VALUES(null,'Vendedores C', 'Saniago de Compostela');

#vendedores

INSERT INTO vendedores VALUES(null,1,null,'David', 'Lopez','Responsable de tienda', curdate(),30000,4);
INSERT INTO vendedores VALUES(null,1,1,'Fran', 'Martinez','Ayudante en tienda', curdate(),23000,2);
INSERT INTO vendedores VALUES(null,2,null,'Nelson', 'Sanchez','Responsable de tienda', curdate(),38000,5);
INSERT INTO vendedores VALUES(null,2,3,'Jesus', 'Lopez','Ayudante de tienda', curdate(),12000,6);
INSERT INTO vendedores VALUES(null,3,null,'Victor', 'Lopez','Mecanico jefe', curdate(),50000,2);
INSERT INTO vendedores VALUES(null,4,null,'Antonio', 'Lopez','Vendedor de recambios', curdate(),13000,8);
INSERT INTO vendedores VALUES(null,5,null,'Salvador', 'Lopez','Vendedor experto', curdate(),60000,2);
INSERT INTO vendedores VALUES(null,6,null,'Joaquin', 'Lopez','Ejecutivo de cuentas', curdate(),80000,1);
INSERT INTO vendedores VALUES(null,6,8,'Luis', 'Lopez','Ayudante en tienda', curdate(),10000,10);

#clientes

INSERT INTO clientes VALUES(null, 1,'Construcciones Diaz Inc', 'Alcobendas',24000, curdate());
INSERT INTO clientes VALUES(null, 1,'Fruteria Antonia Inc', 'Fuenlabrada',40000, curdate());
INSERT INTO clientes VALUES(null, 1,'Imprenta Martinez Inc', 'Barcelona',32000, curdate());
INSERT INTO clientes VALUES(null, 1,'Jesus Colchones Inc', 'El Prat',96000, curdate());
INSERT INTO clientes VALUES(null, 1,'Bar Pepe Inc', 'Valencia',170000, curdate());
INSERT INTO clientes VALUES(null, 1,'Tienda Inc', 'Murcia',245000, curdate());


#encargos

INSERT INTO encargos VALUES(null, 1, 1 , 2, curdate());
INSERT INTO encargos VALUES(null, 2, 2 , 4, curdate());
INSERT INTO encargos VALUES(null, 3, 3 , 1, curdate());
INSERT INTO encargos VALUES(null, 4, 3 , 3, curdate());
INSERT INTO encargos VALUES(null, 5, 5 , 1, curdate());
INSERT INTO encargos VALUES(null, 6, 6 , 1, curdate());

/*--------------------------------------*/
#consulta

SELECT e.cantidad, c.nombre, co.modelo as 'modelos'
from encargos e
INNER JOIN clientes c ON e.cliente_id = c.id
INNER JOIN coches co on e.coche_id = co.id 
ORDER by co.id;







