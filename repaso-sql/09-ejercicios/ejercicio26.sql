/*
Sacar vendedores que tienen jefe y
sacar el nombre del jefe.

*/

select concat(v.nombre,' ',v.apellido) as 'Vendedor', concat(co.nombre,' ',co.apellido) as 'Jefe' from vendedores v
INNER JOIN vendedores co ON v.jefe=co.id;