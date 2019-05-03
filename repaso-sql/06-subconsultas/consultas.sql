#subconsultas

INSERT INTO usuarios VALUES(NULL, 'Admin', 'Admin', 'admin@admin','admin1234',curdate());

# mostrar solo los usarios que tengan entradas creadas

SELECT * FROM usuarios WHERE id in (select usuario_id from entradas);

#usuarios que no tienen entradas
SELECT * FROM usuarios WHERE id not in (select usuario_id from entradas);