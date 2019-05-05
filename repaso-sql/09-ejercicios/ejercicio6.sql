/*
visualizar el nombre y los apellidos de los vendedores en
una misma columna y su fecha de registro y el dia de la 
semana en que se registraron

*/

select concat(nombre, ' ', apellido) as 'Nombre', fecha_alta, dayname(fecha_alta) as 'Dia de alta'
from vendedores;