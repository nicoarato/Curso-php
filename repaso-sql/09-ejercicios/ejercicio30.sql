/*
mostrar los datos del vendedor con mas antiguedad en el
consecionario

*/

SELECT * from vendedores ORDER BY fecha_alta asc Limit 3;

/*
30 plus
obtener los coches con más unidades vendidas

*/

SELECT * from coches where id IN 
(SELECT coche_id from encargos where cantidad IN 
(SELECT max(cantidad) from encargos));


SELECT c.modelo, sum(e.cantidad) as 'Cantidad vendida' from encargos e
inner join coches c ON e.coche_id=c.id
group by 1 order by 2 desc limit 1;

SELECT c.modelo, sum(e.cantidad) as 'Cantidad vendida' from encargos e
right join coches c ON e.coche_id=c.id
group by 1;