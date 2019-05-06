/*
Listar los encargos con el nombre del coche,
nombre del cliente pero cuando unicamente
cuando sea de Barcelona. 


*/

SELECT e.id, co.modelo, c.nombre, c.ciudad from encargos e 
INNER JOIN coches co on co.id=e.coche_id
INNER JOIN clientes c on c.id=e.cliente_id
WHERE c.ciudad='Barcelona';