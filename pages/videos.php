<?php
global $conx;

// SELECTIONNER LES IMAGES
$req = $conx->query("SELECT * FROM documentations,sources WHERE documentations.`CODEDOC` = sources.`CODEDOC` AND documentations.`FORMAT` = 'video' AND documentations.`IDOC` != 1");
$info = array();
if ($req) {
  while ($row = $req->fetchObject()) {
    $info[] = $row;
  }
}
?>
<div class="bs-docs-section container">
  <h1 id="thumbnails" class="titre">
    <i class="fas fa-film"></i>
    <span class="desc">Vidéos E.S.T.M.</span>
  </h1>

  <div>
      <div class="videoList">

        <?php
        foreach ($info as $video) {
          ?>

          <div class="videoElt">
            <h2 class="sousTitre"><?= $video->TITRE ?></h2>
            <a href="#" class="thumbnail">
              <video src="donnees/videos/<?= $video->CONTENUDOC ?>" width="100%" height="100%" controls></video>
            </a>
            <p><?= $video->AUTEUR ?> | <?= $video->DATEDOC ?></p>
          </div>
          <!--/.col-xs-6.col-lg-4-->
        <?php }
      ?>
      </div>
  </div>
</div>