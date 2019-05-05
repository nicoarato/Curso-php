/* vistas
consulta almacenada que se utiliza
como tabla virtual que no almacena datos
utiliza asociaciones de las tablas originales
de forma que siempre se mantiene actualizada.



*/


CREATE VIEW entradas_con_nombres AS
SELECT e.id, e.titulo, u.nombre as 'Autor', c.nombre as 'Categoria' 
FROM entradas e
INNER JOIN usuarios u ON e.usuario_id = u.id
INNER JOIN categorias c ON e.categoria_id = c.id ;

/*
estas vistas se pueden operar como tablas.

select * from entradas_con_nombres where ....
*/

DROP view entradas_con_nombres;