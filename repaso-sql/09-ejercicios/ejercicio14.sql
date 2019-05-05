/*
visualizar las unidades vendidas de cada
coche a cada cliente mostrando el 
nombre del producto, el nro de cliente
y la suma de unidades.

*/

SELECT sum(e.cantidad), c.modelo, cl.nombre as 'Cliente' from encargos e
INNER JOIN coches c ON e.coche_id=c.id
INNER JOIN clientes cl ON cl.id=e.cliente_id
group by e.coche_id, e.cliente_id;