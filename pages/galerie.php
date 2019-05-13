<?php
global $conx;

// SELECTIONNER LES IMAGES
$req = $conx->query("SELECT * FROM documentations,sources WHERE documentations.`CODEDOC` = sources.`CODEDOC` AND documentations.`FORMAT` = 'img' AND documentations.`IDOC` != 1");
$info = array();
if ($req) {
  while ($row = $req->fetchObject()) {
    $info[] = $row;
  }
}
?>
<div class="bodySection">
  <h1 class="titre">
    <i class="far fa-images"></i>
    <span class="desc">Galérie E.S.T.M.</span>
  </h1>

  <!-- <div class="galerieImage"> -->
    <div class="photoList">

      <?php
      foreach ($info as $galerie) {
        ?>
        <div class="photoElt">
          <img src="donnees/images/<?= $galerie->CONTENUDOC ?>" title="<?= $galerie->TITRE ?>" alt="<?= $galerie->TITRE ?> | <?= $galerie->DATEDOC ?> | <?= $galerie->AUTEUR ?> <a href='donnees/images/<?= $galerie->CONTENUDOC ?>' download='<?= $galerie->CONTENUDOC ?>'>Téléchager</a>" id="myImg" width="100%" height="200px" onclick="myModal(this)" />
          <span class="photoDescription"><?= $galerie->AUTEUR ?> | <?= $galerie->DATEDOC ?></span>
        </div>
      <?php } ?>
    </div>
  <!-- </div> -->
</div>