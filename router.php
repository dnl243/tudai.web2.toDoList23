<?php
require_once 'app/functions.php';

// home -> showTasks();
// about -> showAbout();
// about/:id -> showAbout($id);

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

$action = empty($_GET['action']) ? 'home' : $_GET['action'];

$params = explode('/', $action);

switch ($params[0]) {
  case 'home':
    showTasks();
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
