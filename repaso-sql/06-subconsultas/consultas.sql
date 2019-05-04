#subconsultas

INSERT INTO usuarios VALUES(NULL, 'Admin', 'Admin', 'admin@admin','admin1234',curdate());

# mostrar solo los usarios que tengan entradas creadas

SELECT * FROM usuarios WHERE id in (select usuario_id from entradas);

#usuarios que no tienen entradas
SELECT * FROM usuarios WHERE id not in (select usuario_id from entradas);

#usuarios que tengan alguna entrada que en su titutlo hable de Gta 



INSERT INTO entradas VALUES(NULL, 3 ,1 , "Guia de GTA Vice city", "GTA", curdate() );

SELECT nombre, apellido FROM usuarios where id IN (select usuario_id from entradas where titulo like '%GTA%' );

#sacar todas las entradas de la categoría accion utiliando su nombre

SELECT titulo from entradas where categoria_id in 
    (select id from categorias where nombre = 'Accion');


#mostrar las categorias con más de 3 entradas

SELECT nombre from categorias where id IN
    (SELECT categoria_id FROM entradas group by categoria_id HAVING count(categoria_id)>=3);



#mostrar los usuarios quecrearon una entrada un martes.

SELECT * from usuarios where id in 
    (select usuario_id from entradas where dayofweek(fecha)=3);

#mostrar el nombre del usuario que tenga más entradas.

select nombre from usuarios where id IN
    (SELECT usuario_id, count(id) from entradas group by usuario_id order by count(id) desc limit 2);

#mostrar las categorias sin entradas
