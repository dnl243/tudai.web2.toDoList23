<?php

function showTasks(){
  require_once 'templates/header.php';

// cuerpo de la página

  require_once 'templates/footer.php';
}

function show404(){
  //  <!-- header -->
  require_once 'templates/header.php'; ?>

  <!-- main section -->
  <main class="container mt-5">
    <h1 class="text-center mt-5">ERROR 404</h1>  
    <p class="text-center mb-5">Página no encontrada</p>  
  </main>

  <!-- footer -->
<?php require_once 'templates/footer.php';

}