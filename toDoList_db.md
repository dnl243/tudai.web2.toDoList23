CREATE TABLE `db_tareas`.`tareas` (
  `id_tarea` INT NOT NULL AUTO_INCREMENT ,
  `titulo` VARCHAR(45) NOT NULL ,
  `descripcion` TEXT NULL ,
  `prioridad` INT NOT NULL ,
  `finalizada` BOOLEAN NULL DEFAULT FALSE ,
  PRIMARY KEY (`id_tarea`)) ENGINE = InnoDB;

INSERT INTO `tareas` (`id_tarea`, `titulo`, `descripcion`, `prioridad`, `finalizada`)
  VALUES (NULL, 'Tarea de prueba 1', 'Descripción de la tarea 1', '5', '0'),
  (NULL, 'Tarea de prueba 2', 'Descripción de la tarea 2', '4', '0');