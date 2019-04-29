<div class="bs-docs-section container">
  <h1 id="list-group" class="page-header titre">Gestion de projets</h1>

  <?php if (!empty($notifications)) {
    echo '<div class="alert ' . $class . '" role="alert">'; ?>
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" title="Annuler" onclick="this.parentElement.style.display='none'">&times;</button>
    <?php
    echo '<strong id="notifications">Notifications!</strong> ' . $notifications . '
      </div>';
  } ?>
</div>
<div class="container">

  <?php
  foreach ($tab as $gestion) {
    ?>

    <div class="fontify">
      <div class="list-group">
        <div class="list-group-item d-flex justify-content-between align-items-center">
          <a href="index.php?page=lire&home=Projets&data=<?= $gestion->CONTENUDOC ?>">
            <h4 class="list-group-item-heading"><?= $gestion->TITRE ?></h4>
            <p class="list-group-item-text"><?= $gestion->CONTENUDOC ?></p>
          </a>
          <button class="btn btn-outline-primary btn-lg badge badge-primary badge-pill" data-toggle="modal" data-target="#myDoc" title="Code : <?= $gestion->CODEDOC ?>" Onclick="ouvreModale(65)" >
            <i class="fas fa-pen"></i> Modifier
          </button>
        
        <!-- <div class="col-md-2">
            <button class="btn btn-outline-primary btn-lg" data-toggle="modal" data-target="#myDoc" title="Code : <?= $gestion->CODEDOC ?>" Onclick="ouvreModale(65)" >
              <i class="fas fa-pen"></i> Modifier
            </button>
        </div> -->
        
        <?php if (isAdmin() == 1) { ?>
          <!-- <div class="col-md-2"> -->
            <?php if ($gestion->IDOC != 1) { ?>
              <button class="btn btn-outline-primary btn-lg badge badge-primary badge-pill" data-toggle="modal" data-target="#myDocLock" title="Code : <?= $gestion->CODEDOC ?>">
                <img src="icons/unlocked.png" width="35px" height="35px" class="list-group-item-heading" />Bloquer
              </button>
            <?php } else { ?>
              <button class="btn btn-outline-primary btn-lg badge badge-primary badge-pill" data-toggle="modal" data-target="#myDocUnLock" title="Code : <?= $gestion->CODEDOC ?>">
                <img src="icons/lock-padlock.png" width="35px" height="35px" class="list-group-item-heading" />Déloquer</button>
            <?php } ?>
          <!-- </div> -->
  
        <?php } ?>
        </div>
      </div>
    </div>
  <?php } ?>
</div>