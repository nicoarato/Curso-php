/*
mostrar los 2 clientes con mayor
numero de pedidos
y cuantos pedidos han hecho*/

SELECT e.cliente_id, c.nombre, count(e.id) from encargos e
INNER JOIN clientes c ON e.cliente_id= c.id
GROUP BY e.cliente_id ORDER BY 3 DESC limit 2;
