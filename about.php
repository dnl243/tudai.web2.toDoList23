  <?php

  function showAbout($id = null)
  {
    require_once 'templates/header.php';
    require_once 'db_fake.php';
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
