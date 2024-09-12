<?php
require_once 'tasks.php';
require_once 'about.php';

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
