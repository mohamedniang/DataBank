<div class="bs-docs-section container">
  <h1 id="list-group" class="page-header titre">Gestion de vidéos</h1>

  <?php if (!empty($notifications)) {
    echo '<div class="alert ' . $class . '" role="alert">'; ?>
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" title="Annuler" onclick="this.parentElement.style.display='none'">&times;</button>
    <?php
    echo '<strong id="notifications">Notifications!</strong> ' . $notifications . '
      </div>';
  } ?>

  <?php
  foreach ($tab as $gestion) {
    ?>

    <div class="row">
      <div class="col-lg-3">
        <video src="donnees/videos/<?= $gestion->CONTENUDOC ?>" width="290px" controls></video>
      </div>
      <div class="col-lg-6">
        <a href="donnees/videos/<?= $gestion->CONTENUDOC ?>" target="_blank" class="list-group-item">
          <h4 class="list-group-item-heading"><?= $gestion->TITRE ?></h4>
          <p class="list-group-item-text"><?= $gestion->CONTENUDOC ?></p>
        </a>
      </div>
      <div class="col-lg-3">
        <button class="list-group-item btn btn-primary btn-lg" data-toggle="modal" data-target="#myDocVi" title="Code : <?= $gestion->CODEDOC ?>">
          <img src="icons/gestions.png" width="35px" height="35px" class="list-group-item-heading" />Modifier
        </button>
      </div>

      <?php if (isAdmin() == 1) { ?>
        <div class="col">
          <?php if ($gestion->IDOC != 1) { ?>
            <button class="list-group-item btn btn-primary btn-lg" data-toggle="modal" data-target="#myDocLockVi" title="Code : <?= $gestion->CODEDOC ?>">
              <img src="icons/unlocked.png" width="35px" height="35px" class="list-group-item-heading" />Bloquer</button>
          <?php } else { ?>
            <button class="list-group-item btn btn-danger btn-lg" data-toggle="modal" data-target="#myDocUnLockVi" title="Code : <?= $gestion->CODEDOC ?>">
              <img src="icons/lock-padlock.png" width="35px" height="35px" class="list-group-item-heading" />Déloquer</button>
          <?php } ?>
        </div>
      <?php } ?>
    </div>

  <?php } ?>