<?php
// 1- Abrimos una conexión
// 2- Enviamos la consulta y nos devuelve el resultado
// 3- Procesamos los datos
// 4- Cerramos la conexión; en PDO no es necesario cerrar la conexión

function getConection()
{
  return new PDO('mysql:host=localhost;dbname=db_tareas;charset=utf8', 'root', '');
}

function getTasks()
{
  // 1- Abrimos una conexión
  $db = getConection();

  // 2- Enviamos la consulta y obtenemos el resultado
  $query = $db->prepare('SELECT * FROM tareas');
  $query->execute();
  $tareas = $query->fetchAll(PDO::FETCH_OBJ);

  // 3- Procesamos los datos
  return $tareas;
}

function insertAsk($title, $description, $priority)
{
  // 1- Abrimos una conexión
  $db = getConection();

  // 2- Enviamos la consulta y obtenemos el resultado
  $query = $db->prepare('INSERT INTO tareas(titulo, descripcion, prioridad) VALUES (?,?,?)');
  $query->execute([$title, $description, $priority]);

  return $db->lastInsertId();
}
