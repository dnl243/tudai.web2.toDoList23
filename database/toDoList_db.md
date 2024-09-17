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

  INSERT INTO `tareas` (`id_tarea`, `titulo`, `descripcion`, `prioridad`, `finalizada`) VALUES
(NULL, 'Redactar informe mensual', 'Elaborar un informe detallado sobre los resultados del mes anterior', 4, 0),
(NULL, 'Preparar presentación', 'Crear una presentación para la reunión del equipo', 3, 0),
(NULL, 'Responder correos electrónicos', 'Dar respuesta a todos los correos pendientes', 2, 0),
(NULL, 'Asistir a reunión', 'Participar en la reunión de coordinación del proyecto', 1, 0),
(NULL, 'Actualizar base de datos', 'Ingresar nuevos registros en la base de datos de clientes', 5, 0),
(NULL, 'Realizar seguimiento de pedidos', 'Verificar el estado de los pedidos pendientes', 2, 0),
(NULL, 'Corregir errores en el código', 'Identificar y solucionar los errores en el código fuente', 4, 0),
(NULL, 'Diseñar nuevo logo', 'Crear un nuevo diseño para el logo de la empresa', 3, 0),
(NULL, 'Investigar nueva tecnología', 'Estudiar las últimas tendencias en tecnología de la información', 1, 0),
(NULL, 'Organizar evento', 'Planificar y ejecutar un evento corporativo', 5, 0);