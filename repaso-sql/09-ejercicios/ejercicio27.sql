/*
Mostrar los nombres  clientes y la 
cantidad de encargos 
que hayan realizado, incluyendo los
que no hayan realizado encargos


INSERT INTO clientes VALUES(null, 5,'Tienda Organica Inc', 'Murcia',0, curdate());
*/

SELECT c.nombre , count(e.id) from clientes c
left JOIN encargos e ON e.cliente_id=c.id
GROUP by c.nombre;

