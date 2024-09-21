<?php
// PDO es una interface de acceso a bases de datos
// En este caso ingresa a mysql desde php

// 1- Abrimos una conexión
// 2- Enviamos la consulta y nos devuelve el resultado
// 3- Procesamos los datos
// 4- Cerramos la conexión; en PDO no es necesario cerrar la conexión

function getConection()
{
  return new PDO('mysql:host=localhost;dbname=db_toDoList23;charset=utf8', 'root', '');
}

function getTasks()
{
  // 1- Abrimos una conexión
  $db = getConection();

  // 2- Enviamos la consulta y obtenemos el resultado
  $query = $db->prepare('SELECT * FROM tareas');
  $query->execute();
  $tasks = $query->fetchAll(PDO::FETCH_OBJ);

  // 3- Procesamos los datos
  return $tasks;
}

function insertTask($title, $description, $priority)
{
  // 1- Abrimos una conexión
  $db = getConection();

  // 2- Enviamos la consulta y obtenemos el resultado
  $query = $db->prepare('INSERT INTO tareas(titulo, descripcion, prioridad) VALUES (?,?,?)');
  $query->execute([$title, $description, $priority]);

  return $db->lastInsertId();
}

function deleteTask($id_tarea)
{
  // 1- Abrimos una conexión
  $db = getConection();

  // 2- Enviamos la consulta y obtenemos el resultado
  $query = $db->prepare('DELETE FROM tareas WHERE id_tarea=?');
  $query->execute([$id_tarea]);
}

function updateTask($id_tarea)
{
  // 1- Abrimos una conexión
  $db = getConection();

  // 2- Enviamos la consulta y obtenemos el resultado
  $query = $db->prepare('UPDATE tareas SET finalizada = 1 WHERE id_tarea=?');
  $query->execute([$id_tarea]);
}
