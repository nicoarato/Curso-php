#Renombrar una tabla#

ALTER TABLE usuarios RENAME TO usuarios_renom;

#Cambiar nombre de una columna

ALTER TABLE usuarios_renom CHANGE apellidos apellido VARCHAR(100) NULL; 

#modificar columna sin cambiar columna

ALTER TABLE usuarios_renom MODIFY apellido VARCHAR(40) NOT NULL;

#añadir columna

ALTER TABLE usuarios_renom ADD website VARCHAR(100) null;

# añadir restricción a columna

ALTER TABLE usuarios_renom ADD CONSTRAINT uq_email UNIQUE(email);

#borrar una columna

ALTER TABLE usuarios_renom DROP website;