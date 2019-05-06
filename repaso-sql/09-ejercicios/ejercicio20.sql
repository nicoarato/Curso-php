/*
    Seleccionar el grupo en el que 
    trabaja el vendedor con mayor salario
    y mostrar el nombre del grupo

*/

SELECT * from grupos
WHERE id in 
    (select grupo_id from vendedores 
    where sueldo = 
     (select max(sueldo) from vendedores));