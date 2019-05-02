#mostrar los registros de una tabla.TABLE

SELECT email, nombre, apellido FROM usuarios;

#mostrar todos los campos

SELECT * FROM usuarios;

#operadores aritmeticos

SELECT id, email , (4+7) as 'Operacion' FROM usuarios ORDER BY id;
SELECT id, email , (id+7) as 'Operacion' FROM usuarios ORDER BY id;

#Funciones matematicas

SELECT ABS(-5) as 'Operacion' FROM usuarios;
SELECT ROUND(7.41) as 'Operacion' FROM usuarios;
SELECT ROUND(7.41,1) as 'Operacion' FROM usuarios;
SELECT TRUNCATE(7.912,2) as 'Operacion' FROM usuarios;

#FUNCIONES PARA CARACTERES

SELECT upper(nombre) from usuarios;

SELECT lower(nombre) from usuarios;

SELECT concat(nombre, ' ' , apellido) as 'Nombre completo' from usuarios;

SELECT upper(concat(nombre, ' ' , apellido)) as 'Nombre completo' from usuarios;

SELECT email, length(concat(nombre, ' ' , apellido)) as 'Nombre completo' from usuarios;

#quita espacios de izquierda y derecha
SELECT trim(concat('       ',nombre, ' ' , apellido,'     ')) as 'Nombre completo' from usuarios;


#fechas

#muestra fecha actual
SELECT email,fecha, curdate() as 'Fecha actual' from usuarios;

#diferencia entre fechas

SELECT email,datediff(fecha, curdate()) as 'Fecha actual' from usuarios;

#nombre del dia
SELECT email, dayname(fecha) as 'Dia' from usuarios;

SELECT email, dayofmonth(fecha) as 'Dia' from usuarios;

SELECT email, dayofweek(fecha) as 'Dia' from usuarios;

SELECT email, dayofyear(fecha) as 'Dia' from usuarios;
SELECT email, month(fecha) as 'Dia' from usuarios;
SELECT email, year(fecha) as 'Dia' from usuarios;


SELECT email, curtime() as 'Hora actual' from usuarios;

SELECT email, sysdate() as 'Hora actual del sistema operativo' from usuarios;

SELECT email, date_format(fecha,'%d-%m-%y') as 'Formateando fechas' from usuarios;
SELECT email, date_format(fecha,'%d-%M-%Y') as 'Formateando fechas' from usuarios;


#Funciones utiles

SELECT email, ISNULL(apellido) FROM usuarios;

#compara strings
SELECT email, STRCMP('hola','hola') FROM usuarios;

#version sql
SELECT VERSION() FROM usuarios;

#usuario con el que estoy haciendo la consulta
SELECT USER() FROM usuarios;

#muestra solo los diferentes
SELECT DISTINCT USER() FROM usuarios;

#nombre de la database que estoy usando
SELECT DISTINCT DATABASE() FROM usuarios;

SELECT ifnull(apellido, 'Este campo esta vacio') FROM usuarios;





















