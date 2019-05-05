# Las consultas multitablas no son optimas.BY
#para ello existen los inner join

#mostrar las entradas con el nombre del autor y el nombre de la categoria

SELECT e.id, e.titulo, u.nombre as 'Autor', c.nombre as 'Categoria' 
FROM entradas e, usuarios u, categorias c
WHERE e.usuario_id = u.id AND e.categoria_id = c.id;

#inner JOIN

SELECT e.id, e.titulo, u.nombre as 'Autor', c.nombre as 'Categoria' 
FROM entradas e
INNER JOIN usuarios u ON e.usuario_id = u.id
INNER JOIN categorias c ON e.categoria_id = c.id ;



SELECT e.id, e.titulo, u.nombre as 'Autor', c.nombre as 'Categoria' 
FROM entradas e, usuarios u, categorias c
WHERE e.usuario_id = u.id AND e.categoria_id = c.id AND c.nombre = 'Accion';

#----------------------------------------------------
#mostrar el nombre de las categorias y al lado cuantas entradas tienen

SELECT c.nombre, count(e.id)
from categorias c, entradas e 
where c.id = e.categoria_id GROUP BY e.categoria_id;


SELECT c.nombre, count(e.id)
FROM categorias c
INNER JOIN entradas e ON e.categoria_id = c.id GROUP BY e.categoria_id;

SELECT c.nombre, count(e.id)
FROM categorias c
LEFT JOIN entradas e ON e.categoria_id = c.id GROUP BY e.categoria_id;
# LEFT JOIN muestra todas las filas de la tabla de la izquierda aunque no tenga 
# ocurrencias en la tabla de la derecha


SELECT c.nombre, count(e.id)
FROM entradas e
RIGHT JOIN categorias c ON e.categoria_id = c.id GROUP BY e.categoria_id;

# con RIGHT JOIN podemos mostrar los datos de la tabla a 
#la derecha aunque no sea la tabla principal.

#----------------------------------------------------


#mostrar el email de los usuarios y al lado cuantas entradas tienen

SELECT u.email, count(titulo) 
from usuarios u, entradas e 
WHERE u.id = e.usuario_id GROUP BY e.usuario_id;

