/*
    obtener una lista de los nombres 
    de los clientes con el importe de sus encargos
    acumulados

*/

SELECT c.nombre, sum(e.cantidad*co.precio) as 'Importe de encargos' from encargos e 
INNER JOIN clientes c ON c.id=e.cliente_id
INNER JOIN coches co ON e.coche_id=co.id
GROUP by c.nombre order by 2;
