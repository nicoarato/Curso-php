#inserts para categorias

INSERT INTO categorias VALUES(null, 'Accion');
INSERT INTO categorias VALUES(null, 'Rol');
INSERT INTO categorias VALUES(null, 'Deportes');

#inserts para entradas

INSERT INTO entradas values(null, 1, 1, 'Novedades del GTA 5', 'Review del GTA 5', curdate());
INSERT INTO entradas values(null, 1, 2, 'Review LOL', 'Todo sobre el LOL', curdate());
INSERT INTO entradas values(null, 1, 3, 'Nuevos jugadores de FIFA19', 'Review del FIFA19', curdate());

INSERT INTO entradas values(null, 4, 1, 'Novedades del Assasins', 'Review del Assasins', curdate());
INSERT INTO entradas values(null, 4, 2, 'Review WOW', 'Todo sobre el WOW', curdate());
INSERT INTO entradas values(null, 4, 3, 'Nuevos jugadores de PES19', 'Review del PES19', curdate());

INSERT INTO entradas values(null, 3, 1, 'Novedades del COD', 'Review del COD', curdate());
INSERT INTO entradas values(null, 3, 1, 'Review Fortnite', 'Todo sobre el Fortnite', curdate());
INSERT INTO entradas values(null, 3, 3, 'Nuevos jugadores de F1 2020', 'Review del F1 2020', curdate());
