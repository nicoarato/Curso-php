/*
Listar todos los encargos realizados con la marca de coche
y el nombre del cliente

*/

SELECT e.id, co.marca, c.nombre as 'Cliente' FROM encargos e 
INNER JOIN coches co on co.id=e.coche_id
INNER JOIN clientes c on c.id=e.cliente_id;
