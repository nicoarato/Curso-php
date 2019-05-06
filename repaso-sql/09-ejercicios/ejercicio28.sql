/*
Mostrar todos los vendedores tengan
o no clientes
mostrar el nro de clientes

*/

select concat(v.nombre,' ',v.apellido) as 'Vendedor' , count(c.id) as 'Cantidad de clientes' from clientes c 
RIGHT JOIN vendedores v ON v.id=c.vendedor_id
GROUP BY v.id;
