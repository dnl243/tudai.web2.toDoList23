<?php
require_once 'toDoList_db.php';

function showTasks()
{
  require_once 'templates/header.php';
  $task = getTasks();
?>
  <main class="d-flex justify-content-center">
    <table class="table text-center" style="width: 80vw;">
      <thead>
        <tr>
          <th scope="col">id_tarea</th>
          <th scope="col">título</th>
          <th scope="col">descripción</th>
          <th scope="col">prioridad</th>
          <th scope="col">finalizada</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($task as $task) : ?>
          <tr>
            <th scope="row"><?= $task->id_tarea; ?></th>
            <td><?= $task->titulo; ?></td>
            <td><?= $task->descripcion; ?></td>
            <td><?= $task->prioridad; ?></td>
            <td><?= $task->finalizada; ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </main>

<?php require_once 'templates/footer.php';
}

function showForm()
{
  require_once 'templates/header.php';
?>
  <main class="container">
    <!-- formulario de alta de tarea -->
    <form action="add" method="post" class="my-4">
      <div class="row">
        <div class="col-9">
          <div class="form-group">
            <label>Título</label>
            <input required type="text" name="title" class="form-control">
          </div>
        </div>
        <div class="col-3">
          <div class="form-group">
            <label>Prioridad</label>
            <select required name="priority" class="form-control">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label>Descripcion</label>
        <textarea required name="description" rows="3" class="form-control"></textarea>
      </div>
      <button type="submit" class="btn btn-primary mt-2">Guardar</button>
    </form>
  </main>

<?php require_once 'templates/footer.php';
}

function addTask()
{
  if (!empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['priority'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $priority = $_POST['priority'];
    $id = insertAsk($title, $description, $priority);
    // si $id vuelve 0 hubo un error
    // si $id vuelve !0 se inserto correctamente
    if ($id) {
      // en un HTML con el tag base podriamos usar
      // header('location: /home');
      // como es solo una funcion voy a llamar a showTasks
      showTasks();
    } else {
      echo "ERROR AL INSERTAR LA TAREA";
    }
  } else {
    echo "ERROR EN LA CARGA DE LA TAREA";
  }
}

function showAbout($id = null)
{
  require_once 'templates/header.php';
  require_once 'about_db.php';
  $developers = getDevelopers(); ?>

  <!-- main section -->
  <main class="container mt-5">
    <h1>About</h1>

    <div class="row">
      <div class="col">
        <div class="list-group" style="width: 18rem;">
          <?php foreach ($developers as $developer) : ?>
            <a href="about/<?= $developer->id; ?>" class="list-group-item list-group-item-action">
              <?= $developer->name; ?>
            </a>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="col">
        <?php
        if (!empty($id)) {
          $developer = getDevelopersById($id);
        ?>
          <div class="card" style="width: 18rem;">
            <img src="images/avatar.png" class="card-img-top">
            <div class="card-body">
              <h4 class="card-title"><?= $developer->name; ?></h4>
              <h5 class="card-subtitle"><?= $developer->role; ?></h5>
              <p><?= $developer->email; ?></p>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
    </div>

  </main>

  <!-- footer -->
<?php require_once 'templates/footer.php';
}

function show404()
{
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
