/*
obtener un listado de
clientes atendidos por el vendedor
DAvid Lopez


*/

SELECT c.nombre from clientes c 
INNER JOIN vendedores v ON c.vendedor_id=v.id 
AND v.nombre='David' AND v.apellido='Lopez';


/*tarda mas*/
SELECT nombre from clientes 
WHERE vendedor_id IN 
(SELECT id from vendedores WHERE nombre='David' AND apellido='Lopez');
