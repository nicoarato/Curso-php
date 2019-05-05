/* #modificar la comisión de los vendedores y ponerlo
#al 0.5% cuando ganan más de 50000
*/


UPDATE vendedores set comision= 0.5 WHERE sueldo >= 50000;