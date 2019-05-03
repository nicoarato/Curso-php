# consultas de agrupamiento

SELECT titulo from entradas;

SELECT titulo from entradas group by categoria_id=1;

SELECT categoria_id , count(titulo) as 'Cantidad de entradas' from entradas group by categoria_id;

#consulta de agrupamiento con condiciones

# HAVING es al GROUP BY lo que WHERE es a una consulta normal.
SELECT categoria_id , count(titulo) as 'Cantidad de entradas' from entradas group by categoria_id
HAVING count(titulo)>=4;

#funciones de agrupamiento

/*
AVG
count
max
min
sum

*/

SELECT * from entradas;

SELECT id as 'Promedio', titulo FROM entradas where id = (select avg(id) from entradas)  order by id desc;

SELECT count(id) as 'cantidad' FROM entradas;

SELECT id as 'Maximo', titulo FROM entradas where id = (select max(id) from entradas)  order by id desc;

SELECT id as 'Minimo', titulo FROM entradas where id = (select min(id) from entradas)  order by id desc;

SELECT sum(id) as 'Suma' FROM entradas;

