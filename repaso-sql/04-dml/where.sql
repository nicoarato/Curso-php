#consulta con una condicion

SELECT * FROM usuarios WHERE email = 'lopez@victor.com';

/*
operadores de comparacion

=
!=
<
>
<=
>=

between A and B
in
is null
is not null
like (como)
not like

operadores logicos

OR
AND
NOT

comodines
like 
% muchos caracteres
_ un caracter   

*/

SELECT nombre , apellido from usuarios where YEAR(fecha) = 2019;

SELECT nombre , apellido from usuarios where YEAR(fecha) != 2019;

SELECT nombre , apellido from usuarios where YEAR(fecha) != 2019 or isnull(fecha);

SELECT email from usuarios where password = '1234' and apellido like '%a%';

SELECT email from usuarios where password = '1234';

SELECT * FROM usuarios where year(fecha)%2 != 0;

SELECT upper(nombre) as 'Nombre', apellido as 'Apellido' FROM usuarios where (length(nombre)>5) and (YEAR(fecha)<2020);

SELECT id, upper(nombre) as 'Nombre', apellido as 'Apellido' FROM usuarios where (length(nombre)>5) and (YEAR(fecha)<2020);

SELECT * from usuarios ORDER BY fecha DESC;

SELECT * FROM usuarios limit 0,2;