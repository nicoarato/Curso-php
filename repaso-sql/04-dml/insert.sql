#insertar nuevos registros

INSERT INTO usuarios VALUES (null,'Victor', 'Lopez','lopez@victor.com','1234','2019-05-01');
INSERT INTO usuarios VALUES (null,'Paco', 'Antonio','paco@antonio.com','1234','2019-05-15');
INSERT INTO usuarios VALUES (null,'Antonio', 'Martinez','anto@martinez.com','1234','2019-06-15');


#insertar filas con algunas columnas.

INSERT INTO usuarios(email, password) VALUES('admin@admin.com','admin');
#fallara pues algunos de los campos son obligatorios.