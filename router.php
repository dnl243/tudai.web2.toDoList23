<?php
require_once 'app/functions.php';

// home -> showTasks();
// form -> showForm();
// add -> addTask();
// delete/:id -> deleteTask($id);
// finish/:id -> finishTask($id);
// about -> showAbout();
// about/:id -> showAbout($id);

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

$action = empty($_GET['action']) ? 'home' : $_GET['action'];

$params = explode('/', $action);

switch ($params[0]) {
  case 'home':
    showTasks();
    break;
  case 'form':
    showForm();
    break;
  case 'add':
    addTask();
    break;
  case 'delete':
    removeTask($params[1]);
    break;
  case 'finish':
    finishTask($params[1]);
    break;
  case 'about':
    isset($params[1]) ?
      showAbout($params[1]) :
      showAbout();
    break;
  default:
    show404();
    break;
}
