/* visualizar los apellidos de los vendedores
su fecha y su nro de grupo
ordenado por fecha descendente y limitarlo a los 4 ultimos


 */

 select apellido, fecha_alta, id FROM vendedores
 order BY fecha_alta desc;