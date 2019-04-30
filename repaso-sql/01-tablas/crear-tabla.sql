
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
    id  int(11),
    nombre VARCHAR(100),
    apellido VARCHAR(255),
    email   VARCHAR(100),
    password VARCHAR(255)
);