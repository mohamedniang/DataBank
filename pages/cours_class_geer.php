<?php
include_once './control/cours_class.func.php';
?>
<div class="bodySection">
  <h1 class="titre">
    <?= $type ?>
    <span class="demiTitre"><?= $licence ?></span>
    <span class="sousTitre"><?= $fil ?></span>
  </h1>
  <h1 id="thumbnails" class="titreSection">Documentation avec vidéos <i class="fas fa-sort-down fa-3x icon-right"></i></h1>
  <div class="videoList">
    <?php

    foreach ($docs as $video) {
      if (($video->FORMAT) == 'video') {
        ?>

        <!-- <div class="col-xs-6 col-lg-3"> -->
        <div class="videoElt">
          <video src="donnees/videos/<?= $video->CONTENUDOC ?>" alt="<?= $video->TITRE ?>" width="100%"></video>

          <div class="caption">
            <h3><?= $video->TITRE ?></h3>
            <!-- <p><?= $video->CONTENUDOC ?></p> -->
            <h4><?= $video->AUTEUR ?> | <?= $video->DATEDOC ?></h4>
            <div>
              <a href="donnees/videos/<?= $video->CONTENUDOC ?>#lecture" target="lecture" class="btn btn-primary" role="button">Regarder</a>
              <a href="donnees/videos/<?= $video->CONTENUDOC ?>" download="<?= $video->CONTENUDOC ?>" class="btn btn-default" role="button">Télécharger</a>
            </div>
          </div>
        </div>
        <!-- </div> -->

      <?php }
  }
  ?>
  </div>

  <div class="bs-docs-section">
    <h1 id="thumbnails" class="titreSection">Documentation avec images <i class="fas fa-sort-down fa-3x icon-right"></i></h1>

    <div class="bs-example" data-example-id="simple-thumbnails">
      <div class="photoList">

        <?php
        foreach ($docus as $img) {
          if (($img->FORMAT) == 'img') {
            ?>
            <div class="photoElt">
              <img src="donnees/images/<?= $img->CONTENUDOC ?>" title="<?= $img->TITRE ?>" alt="<?= $img->TITRE ?> | <?= $img->DATEDOC ?> | <?= $img->AUTEUR ?> <a href='donnees/images/<?= $img->CONTENUDOC ?>' download='<?= $img->CONTENUDOC ?>'>Téléchager</a>" id="myImg" width="100%" height="200px" onclick="myModal(this)" />
            </div>
          <?php }
      }
      ?>
      </div>




      <div class="bs-docs-section">
        <h1 id="thumbnails" class="titreSection">Documentation écrite <i class="icon-right fas fa-sort-down fa-3x"></i></h1>

        <div class="bs-example" data-example-id="thumbnails-with-custom-content">
          <div class="courList">
            <?php
            foreach ($doc as $pdf) {
              if (($pdf->FORMAT) == 'pdf') {
                ?>
                <!-- <div class="col-sm-6 col-md-4"> -->
                <div class="courElt">
                  <div class="photoElt">
                    <img src="images/ESTM.png" alt="<?= $pdf->TITRE ?>" title="<?= $pdf->TITRE ?>">
                  </div>
                  <div class="caption">
                    <h3><?= $pdf->TITRE ?></h3>

                    <h4><?= $pdf->AUTEUR ?> | <?= $pdf->DATEDOC ?></h4>

                    <div>
                      <a href="index.php?page=lire&home=Projets&data=<?= $pdf->CONTENUDOC ?>" class="btn btn-primary" role="button">Lire</a>
                      <a href="donnees/pdf/<?= $pdf->CONTENUDOC ?>" download="<?= $pdf->CONTENUDOC ?>" class="btn btn-default" role="button">Téléchager</a>
                    </div>
                  </div>
                </div>
                <!-- </div> -->
              <?php }
          }
          ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>