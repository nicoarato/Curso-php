/*
crear una vista llamada vendedoresA
que incluirá todos los vendedores
 del grupo "Vendedores A"

*/

CREATE VIEW vendedoresA AS
SELECT v.* from vendedores v 
inner JOIN grupos g ON g.id=v.grupo_id
WHERE g.nombre='Vendedores A';

SELECT * FROM vendedores WHERE grupo_id in 
(select id from grupos where nombre='Vendedores A');