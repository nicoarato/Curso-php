/*
Mostrar el nombre y salario de los vendedores con cargo de
'Ayudante en tienda'

*/

SELECT concat(nombre,' ', apellido) as 'Nombre', sueldo
FROM vendedores where cargo='Ayudante en tienda';