/*
mostrar los vendedores del grupo 2
ordenamos por salario de mayor a menor

*/

select nombre, apellido, sueldo FROM vendedores where grupo_id=2 order by sueldo desc;