/* listar los clientes que han hecho
encargos de mercedes ranchera
*/

SELECT c.nombre FROM clientes c
inner JOIN encargos e ON e.cliente_id=c.id
inner JOIN coches co on e.coche_id=co.id 
where co.modelo='Mercedes Ranchera'
group by c.nombre;


select * from clientes WHERE id IN
(select cliente_id from encargos 
where coche_id IN
(select id from coches where modelo like '%Mercedes Ranchera%')
);

SELECT c.* FROM clientes c
inner JOIN encargos e ON e.cliente_id=c.id
inner JOIN coches co on e.coche_id=co.id 
where co.modelo='Mercedes Ranchera'
group by c.nombre;