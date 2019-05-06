/*
obtener el nombre y las ciudades de los clientes
con encargos igual o mayor a 3 unidades en adelante

*/

SELECT nombre, ciudad FROM clientes WHERE id in 
(select cliente_id FROM encargos 
    where cantidad>=3);