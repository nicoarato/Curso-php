/*
    mostrar todos los vendedores con su nombre y el numero de dias que llevan en el consecionario
*/

SELECT nombre, Datediff(curdate(),fecha_alta) as 'DIAS' FROM vendedores;