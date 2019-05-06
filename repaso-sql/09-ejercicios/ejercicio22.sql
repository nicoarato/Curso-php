/*
obtener listado de clientes
id, nombre
numero de vendedor y nombre
*/

SELECT c.id as 'ID cliente', c.nombre as 'Cliente', c.vendedor_id as 'ID Vendedor', concat(v.nombre, ' ',v.apellido) as 'Vendedor'
FROM clientes c
INNER JOIN vendedores v ON v.id=c.vendedor_id;

SELECT c.id as 'ID cliente', c.nombre as 'Cliente', c.vendedor_id as 'ID Vendedor', concat(v.nombre, ' ',v.apellido) as 'Vendedor'
FROM clientes c, vendedores v
where  v.id=c.vendedor_id;