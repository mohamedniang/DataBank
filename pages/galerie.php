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
<div class="bs-docs-section">
  <h1 id="thumbnails" class="page-header titre">Galérie E.S.T.M.</h1>

  <div class="col">

    <div class="col-xs-12 col-sm-12">
      <div class="row">

        <?php
        foreach ($info as $galerie) {
          ?>
          <div class="col-xs-6 col-lg-3">
            <img src="donnees/images/<?= $galerie->CONTENUDOC ?>" title="<?= $galerie->TITRE ?>" alt="<?= $galerie->TITRE ?> | <?= $galerie->DATEDOC ?> | <?= $galerie->AUTEUR ?> <a href='donnees/images/<?= $galerie->CONTENUDOC ?>' download='<?= $galerie->CONTENUDOC ?>'>Téléchager</a>" id="myImg" width="100%" height="200px" onclick="myModal(this)" />
            <p style="margin-top:;"><?= $galerie->AUTEUR ?> | <?= $galerie->DATEDOC ?></p>
          </div>
        <?php }
      ?>