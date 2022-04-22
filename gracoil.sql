create database gracoil;
use gracoil;
CREATE TABLE `gracoil`.`usuarios` ( `idUser` INT(64) NOT NULL AUTO_INCREMENT , `Nombre` VARCHAR(256) NOT NULL , `Puesto` VARCHAR(256) NOT NULL , `Ubicacion` VARCHAR(256) NOT NULL , PRIMARY KEY (`idUser`)) ENGINE = InnoDB;
INSERT INTO `usuarios` (`idUser`, `Nombre`, `Puesto`, `Ubicacion`) VALUES (NULL, 'Xchel Adrian Hernandez Alvarez', 'Practicante', 'Queretaro');
INSERT INTO `usuarios` (`idUser`, `Nombre`, `Puesto`, `Ubicacion`) VALUES (NULL, 'Omar Yair Hernandez Alvarez', 'Doctor', 'Queretaro');
INSERT INTO `usuarios` (`idUser`, `Nombre`, `Puesto`, `Ubicacion`) VALUES (NULL, 'Juan Carlos Mireles Gonzalez', 'RH', 'Queretaro');
INSERT INTO `usuarios` (`idUser`, `Nombre`, `Puesto`, `Ubicacion`) VALUES (NULL, 'Eduardo Capetillo Castillo', 'Limpieza', 'Queretaro');