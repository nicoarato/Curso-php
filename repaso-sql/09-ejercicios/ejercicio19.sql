/*
Obtener los vendedores con 2 o más clientes

*/


SELECT concat(nombre,' ',apellido) as 'Vendedores' from vendedores where id in 
(select vendedor_id from clientes
group by vendedor_id having count(id)>=2);
