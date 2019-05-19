<?php
require '../control/connexion.php';

global $conx;

// SELECTIONNER TOUTES LES DONNEES DES TABLES DOCUMENTATIONS ET SOURCES
$req = $conx->query("SELECT * FROM documentations,sources WHERE documentations.`CODEDOC` = sources.`CODEDOC` ORDER BY IDOC DESC");
$info = array();
if ($req) {
  while ($row = $req->fetchObject()) {
    $info[] = $row;
  }
}

?>
<h4 class="modal-title" id="myModalLabel">Les images</h4>
<div class="photoList">
  <?php

  foreach ($info as $img) {
    if (($img->FORMAT) == 'img') {
      ?>

      <div class="photoElt">
        <!-- <b align="center"><?= $img->TITRE ?></b> -->
        <a class="">
          <img src="donnees/images/<?= $img->CONTENUDOC ?>" title="<?= $img->TITRE ?>" alt="<?= $img->TITRE ?> | <?= $img->DATEDOC ?> | <?= $img->AUTEUR ?> <a href='donnees/images/<?= $img->CONTENUDOC ?>' download='<?= $img->CONTENUDOC ?>'>Téléchager</a>" id="myImg" width="100%" height="200px" onclick="myModal(this)" />
        </a>
        <p class="list-group-item-text" style="font-size: 0.6em; margin-top: -10px; word-break: break-all; text-align: center;"><?= $img->AUTEUR ?> | <?= $img->DATEDOC ?></p>
      </div>
    <?php }
}

?>
</div>
<br>
<h4 class="modal-title">Les fichiers pdf</h4>

<div class="courList">
<?php
foreach ($info as $pdf) {
  if (($pdf->FORMAT) == 'pdf') {
    ?>
    <div class="courElt">
      <div class="list-group">
        <a href="index.php?page=lire&home=lire&data=<?= $pdf->CONTENUDOC ?>" class="list-group-item" title="Aperçu"> <b><?= $pdf->TITRE ?></b>
          <p class="list-group-item-text"><?= $pdf->AUTEUR ?></p> <a href="donnees/pdf/<?= $pdf->CONTENUDOC ?>" download="<?= $pdf->CONTENUDOC ?>" style="position:relative; float:right; top:-30px; right:20px" title="Télécharger"><?= $pdf->CONTENUDOC ?> | <?= $pdf->DATEDOC ?></a>
        </a>

      <?php }
  }
  ?>
</div>
    <br>

    <h4 class="modal-title" id="myModalLabel">Les vidéos</h4>

<div class="videoList">
    <?php
    foreach ($info as $video) {
      if (($video->FORMAT) == 'video') {
        ?>
        <div class="videoElt">
          <!-- <div class="list-group"> -->
            <a href="donnees/videos/<?= $video->CONTENUDOC ?>" class="list-group-item" target="_blank" title="Aperçu"> <b><?= $video->TITRE ?></b>
              <p class="list-group-item-text"><?= $video->AUTEUR ?></p> <a href="donnees/videos/<?= $video->CONTENUDOC ?>" download="<?= $video->CONTENUDOC ?>" style="position:relative; float:right; top:-30px; right:20px" title="Télécharger"><?= $video->CONTENUDOC ?> | <?= $video->DATEDOC ?></a>
            </a>
            <div class="caption">d</div>
        </div>
          <?php }
      }
  ?>
</div>