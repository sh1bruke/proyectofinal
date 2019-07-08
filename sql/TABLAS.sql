CREATE TABLE IF NOT EXISTS usuario (
usuarioID INT UNSIGNED DEFAULT NULL AUTO_INCREMENT,
dni INT (8) UNSIGNED NOT NULL UNIQUE,
nombre VARCHAR (40) NOT NULL,
apellido VARCHAR (40) NOT NULL,
mail VARCHAR (50) NOT NULL,
contraseña VARCHAR (50) NOT NULL,
direccion VARCHAR (30) NOT NULL,
ciudad VARCHAR (20) NOT NULL,
celular INT (15) NOT NULL,
fechanacimiento DATETIME,
transito BOOLEAN,
voluntario BOOLEAN,
apradina BOOLEAN,
adopta BOOLEAN,
PRIMARY KEY (usuarioID)
);


CREATE TABLE  IF NOT EXISTS  animal (
animalID INT UNSIGNED DEFAULT NULL AUTO_INCREMENT,
nombre VARCHAR (15) NOT NULL UNIQUE,
sexo VARCHAR (10) NOT NULL,
edad INT (2) UNSIGNED NOT NULL,
cuidados_especiales BOOLEAN,
raza VARCHAR (15) NOT NULL,
adoptado BOOLEAN,
en_proceso_de_adopcion BOOLEAN,
PRIMARY KEY (animalID)
);


CREATE TABLE IF NOT EXISTS  publicacion (
publicacionID INT UNSIGNED DEFAULT NULL AUTO_INCREMENT,
titulo VARCHAR (15) NOT NULL,
texto TEXT NOT NULL,
fechapublicacion DATETIME,
animalID INT,
PRIMARY KEY (publicacionID),
FOREIGN KEY (animalID) REFERENCES animal(animalID)
);

/*me tira error cuando crea las tablas de publicacion y mensaje*/
/*algo referido al constraint. Resolver y/o preguntar*/


CREATE TABLE IF NOT EXISTS  mensaje (
mensajeID INT UNSIGNED DEFAULT NULL AUTO_INCREMENT,
mensaje TEXT NOT NULL,
fechamensaje DATETIME,
usuarioID INT,
animalID INT,
PRIMARY KEY (mensajeID),
FOREIGN KEY (usuarioID) REFERENCES usuario(usuarioID),
FOREIGN KEY (animalID) REFERENCES animal(animalID)
);