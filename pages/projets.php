<?php
global $conx;

// SELECTIONNER LES IMAGES
$req = $conx->query("SELECT * FROM documentations,sources WHERE documentations.`CODEDOC` = sources.`CODEDOC` AND documentations.`FORMAT` = 'pdf' AND documentations.`IDOC` != 1");
$info = array();
if ($req) {
  while ($row = $req->fetchObject()) {
    $info[] = $row;
  }
}
?>

<div class="bodySection container">
  <h1 class="titre">
    <i class="fas fa-project-diagram"></i>
    <span class="desc">Projets des étudiants de l'E.S.T.M.</span>
  </h1>
  <div class="listGroup">

    <?php
    foreach ($info as $projet) {
      ?>

      <!-- <div class="bs-example" data-example-id="list-group-custom-content">
                      <div class="list-group">
                        <a href="index.php?page=lire&home=Projets&data=<?= $projet->CONTENUDOC ?>" class="list-group-item">
                          <h4 class="list-group-item-heading"><?= $projet->TITRE ?></h4>
                          <p class="list-group-item-text"><?= $projet->AUTEUR ?></p> <a href="donnees/pdf/<?= $projet->CONTENUDOC ?>" download="<?= $projet->CONTENUDOC ?>" style="position:relative; float:right; top:-30px; right:20px" title="Télécharger">| <?= $projet->CONTENUDOC ?></a>
                        </a> -->
      <div class="fontify">
        <div class="listItem">
          <a href="index.php?page=lire&home=Projets&data=<?= $projet->CONTENUDOC ?>">
            <span class="listTitle"><?= $projet->AUTEUR ?></span>
            <span class="listDescription"><?= $projet->TITRE ?></span>
          </a>
          <a class="icon-right" href="donnees/pdf/<?= $projet->CONTENUDOC ?>" download="<?= $projet->CONTENUDOC ?>">
            <i class="fas fa-file-download"></i>
          </a>
        </div>
      </div>
    <?php }
  ?>
  </div>
</div>