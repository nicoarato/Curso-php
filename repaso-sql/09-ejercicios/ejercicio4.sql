/*
    sacar a todos los vendedores cuya fecha de alta
    sea posterior al 01 de julio de 2018



*/

SELECT * FROM vendedores WHERE fecha_alta >= '2018-07-01';

update vendedores set fecha_alta='2017-04-03' where id=8;