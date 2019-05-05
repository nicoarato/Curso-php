/*
visualizar todos los coches en cuya marca
tenga la letra A y cuyo modelo
comience con la F

*/

SELECT * from coches WHERE marca like '%a%' AND modelo like 'F%';