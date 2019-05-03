#modificar FILas 

update usuarios SET fecha = curdate() where nombre = 'victor' ;

update usuarios SET fecha = curdate(), apellido='GOMEZ' where id = 4 ;