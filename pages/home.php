<div class="bs-docs-section">
  <!-- <h1 id="responsive-embed" class="page-header">ACCUEIL DOCUMENTATIONS ESTM</h1> -->

  <!-- <p><strong>Lorem ipsum dolor</strong> sit amet, consectetur adipisicing elit. Sint, aliquam ut rerum excepturi commodi accusantium aperiam dicta mollitia dolorum amet. Dolores a corrupti voluptatibus eius odit soluta nisi iusto porro.</p> -->

  <!-- Carousel
    ================================================== -->

  <div class="bs-docs-section">
    <h1 id="responsive-embed" class="page-header titre"> <i class="fas fa-book"></i> Documents Audios et Vidéos</h1>

    <h2 class="sousTitre"><strong>Ici,</strong> vous trouverez tous les documents dont vous aurez besoin (<span class="marque">Cours</span>, <span class="marque">Vidéo</span>, <span class="marque">Tutorials</span>, <span class="marque">Enciens devoires</span>/<span class="marque">exament</span>, <span class="marque">Mémoire</span> et <span class="marque">Soutenance</span>)</h2>
    <div class="bs-example col-lg-6 col-xs-12 col-sm-12 col-md-6 thumbnail" data-example-id="responsive-embed-16by9-iframe-youtube">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/i_E--xM10I8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <h3>Présentation de ESTM</h3>
      <p>Date : 01/08/2016</p>
      <p><a href="#" target="lecture" class="btn btn-primary" role="button">Regarder</a> <a href="#" class="btn btn-default" role="button">Télécharger</a></p>

    </div>
    <div class="row">
      <?php

      foreach ($docs as $video) {
        if (($video->FORMAT) == 'video') {
          ?>

          <div class="col-lg-6 col-xs-12 col-sm-12 col-md-6">
            <div class="thumbnail">
              <video src="donnees/videos/<?= $video->CONTENUDOC ?>" alt="<?= $video->TITRE ?>" width="100%"></video>

              <h3><?= $video->TITRE ?></h3>
              <!-- <p><?= $video->CONTENUDOC ?></p> -->
              <p><?= $video->AUTEUR ?> | <?= $video->DATEDOC ?></p>
              <p><a href="donnees/videos/<?= $video->CONTENUDOC ?>#lecture" target="lecture" class="btn btn-primary" role="button">Regarder</a> <a href="donnees/videos/<?= $video->CONTENUDOC ?>" download="<?= $video->CONTENUDOC ?>" class="btn btn-default" role="button">Télécharger</a></p>
            </div>
          </div>

        <?php }
    }
    ?>
    </div>

    <div class="bs-docs-section">
      <h1 id="thumbnails" class="page-header titre"> <i class="fas fa-folder-open"></i> Explorez toutes les sections</h1>
      <h2 class="sousTitre">Toute les filliéres sont disponible ( <span class="marque">Glar</span>, <span class="marque">Geer</span>, <span class="marque">Gestion</span>, <span class="marque">Réseau Télécom</span> )</h2>
      <!-- <p>If you're looking for Pinterest-like presentation of thumbnails of varying heights and/or widths, you'll need to use a third-party plugin such as <a href="http://masonry.desandro.com">Masonry</a>, <a href="http://isotope.metafizzy.co">Isotope</a>, or <a href="http://salvattore.com">Salvattore</a>.</p> -->

      <div class="bs-example" data-example-id="simple-thumbnails">
        <div class="row">

          <?php
          foreach ($docus as $img) {
            if (($img->FORMAT) == 'img') {
              ?>
              <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                <img src="donnees/images/<?= $img->CONTENUDOC ?>" title="<?= $img->TITRE ?>" alt="<?= $img->TITRE ?> | <?= $img->DATEDOC ?> | <?= $img->AUTEUR ?> <a href='donnees/images/<?= $img->CONTENUDOC ?>' download='<?= $img->CONTENUDOC ?>'>Téléchager</a>" id="myImg" width="100%" height="200px" onclick="myModal(this)" />
                <!-- <span><?= $img->TITRE ?></span> -->
              </div>
            <?php }
        }
        ?>
        </div>




        <div class="bs-docs-section">
          <h1 id="thumbnails" class="page-header titre"> <i class="fas fa-file"></i> Documents Textes </h1>
          <h1 class="sousTitre">Pouvant être de differents format( <span class="marque">Word</span>, <span class="marque">PDF</span>, <span class="marque">etc</span> )</h1>
          <!-- <h3 id="thumbnails-custom-content">Projets réalisés par les étudiants</h3>
          <p>With a bit of extra marqueup, it's possible to add any kind of HTML content like headings, paragraphs, or buttons into thumbnails.</p> -->
          <div class="bs-example" data-example-id="thumbnails-with-custom-content">
            <div class="row">
              <?php
              foreach ($doc as $pdf) {
                if (($pdf->FORMAT) == 'pdf') {
                  ?>
                  <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                      <img src="images/ESTM.png" alt="<?= $pdf->TITRE ?>" title="<?= $pdf->TITRE ?>">
                      <div class="caption">
                        <h3><?= $pdf->TITRE ?></h3>

                        <p><?= $pdf->AUTEUR ?> | <?= $pdf->DATEDOC ?></p>

                        <p><a href="index.php?page=lire&home=Projets&data=<?= $pdf->CONTENUDOC ?>" class="btn btn-primary" role="button">Lire</a> <a href="donnees/pdf/<?= $pdf->CONTENUDOC ?>" download="<?= $pdf->CONTENUDOC ?>" class="btn btn-default" role="button">Téléchager</a></p>
                      </div>
                    </div>
                  </div>
                <?php }
            }
            ?>
            </div>