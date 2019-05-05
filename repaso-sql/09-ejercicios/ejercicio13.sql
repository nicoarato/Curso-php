/*
sacar la media de sueldos entre todos
los vendedores por grupo*/

SELECT round(avg(sueldo)), grupo_id, g.nombre, g.ciudad from vendedores
INNER JOIN grupos g ON g.id=grupo_id
GROUP BY grupo_id;