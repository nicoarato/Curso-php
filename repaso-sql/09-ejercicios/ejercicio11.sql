/*
Visualizar todos los cargos de los vendedores
y el nro de vendedores en ese cargo
*/

select cargo, count(id) from vendedores v 
GROUP BY cargo order by count(id) desc;