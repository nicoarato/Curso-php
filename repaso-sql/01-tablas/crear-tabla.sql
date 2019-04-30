
/*tipos de datos*/
/*

varchar
char
int
integer
float
date, time , timestamp

Strings mas grandes
MEDIUMTEXT 16M caracteres
LONGTEXT 4billones caracteres
TEXT    65535 caracteres

ENTEROS MAS GRANDES
MEDIUMINT
BIGINT

*/



/*crear una tabla*/

CREATE TABLE usuarios (
    id  int(11) auto_increment NOT NULL ,
    nombre VARCHAR(100) NOT NULL,
    apellido VARCHAR(255) default 'sin apellido',
    email   VARCHAR(100) NOT NULL,
    password VARCHAR(255),
    CONSTRAINT pk_usuarios PRIMARY KEY(id)
);