/*
obtener listado con encargos realizados
por el cliente 'Fruteria Antonia Inc'

*/

SELECT e.id , e.cantidad, c.nombre, co.modelo , e.fecha from encargos e
INNER JOIN clientes c ON c.id=e.cliente_id
INNER JOIN coches co ON co.id=e.coche_id
Where e.cliente_id IN 
(SELECT id from clientes where nombre='Fruteria Antonia Inc') ;



SELECT * from encargos 
Where cliente_id IN 
(SELECT id from clientes where nombre='Fruteria Antonia Inc') ;

