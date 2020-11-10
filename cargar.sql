CREATE DATABASE biblioteca CHARACTER SET utf8 COLLATE utf8_general_ci;

use datos;

CREATE TABLE inodoros (
	inodoro INT NOT NULL AUTO_INCREMENT, 
	nombre CHAR(100), 
	material  CHAR(50), 
	color CHAR(15), 
	tipo CHAR(100), 
	KEY (inodoro) 
); 

INSERT INTO inodoros VALUES ('inodoro de los dioses', 'oro puro', 
       'oro', 'Descarga ecologica' ); 

INSERT INTO inodoros VALUES ( 'Inodoro estandar', ' Ceramica',  'Crema',
     'Descarga tradicional' ); 

INSERT INTO inodoros VALUES ('La Bella Durmiente', 'Ceramica',  'Blanco', 'Descarga tradicional' ); 

CREATE TABLE ventainodoros (
	inodoro INT NOT NULL AUTO_INCREMENT, 
	nombre CHAR(100), 
	material  CHAR(50), 
	color CHAR(15), 
	tipo CHAR(100), 
	KEY (inodoro) 
); 





