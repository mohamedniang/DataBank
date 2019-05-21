<div class="bodySection">
  <!-- <h1 id="responsive-embed" class="page-header">ACCUEIL DOCUMENTATIONS ESTM</h1> -->

  <!-- <p><strong>Lorem ipsum dolor</strong> sit amet, consectetur adipisicing elit. Sint, aliquam ut rerum excepturi commodi accusantium aperiam dicta mollitia dolorum amet. Dolores a corrupti voluptatibus eius odit soluta nisi iusto porro.</p> -->

  <!-- Carousel
    ================================================== -->

  <div>
    <h1 class="titre">
      <i class="far fa-newspaper"></i>
      <span class="desc">Fil d'actualités</span>
    </h1>
    <div class="filActu">
      <div class="videoElt">
        <!-- <div class="videoElt-responsive"> -->
        <div class="videoElt-responsive">
          <iframe src="https://www.youtube.com/embed/i_E--xM10I8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <!-- </div> -->
        <div class="caption">
          <h3>Présentation de ESTM</h3>
          <h4>Date : 01/08/2016</h4>
          <div>
            <a href="#" target="lecture" class="btn" role="button">Regarder</a>
            <a href="#" class="btn" role="button">Télécharger</a>
          </div>
        </div>
      </div>
      <div class="courElt">
        <div class="photoElt">
          <img src="images/ESTM.png" alt="Messagerie &amp; Web services" title="Messagerie &amp; Web services">
        </div>
        <div class="caption">
          <h3>Messagerie et Web services</h3>

          <h4>MAMOR | 2019-04-24</h4>

          <div>
            <a href="index.php?page=lire&amp;home=Projets&amp;data=architecture_MVC.pdf" class="btn btn-primary" role="button">Lire</a>
            <a href="donnees/pdf/architecture_MVC.pdf" download="architecture_MVC.pdf" class="btn btn-default" role="button">Téléchager</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div>
    <h1 class="titre">
      <i class="fas fa-book"></i>
      <span class="desc">Documents Audios et Vidéos</span>
    </h1>
    <h2 class="sousTitre">
      <strong>Ici,</strong>
      <span class="desc">vous trouverez tous les documents dont vous aurez besoin (<span class="marque">Cours</span>, <span class="marque">Vidéo</span>, <span class="marque">Tutorials</span>, <span class="marque">Enciens devoires</span>/<span class="marque">exament</span>, <span class="marque">Mémoire</span> et <span class="marque">Soutenance</span>)</span>
    </h2>

    <div class="videoList">
      <?php

      foreach ($docs as $video) {
        if (($video->FORMAT) == 'video') {
          ?>

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

        <?php }
    }
    ?>
    </div>

    <div class="filliere-section">
      <h1 id="thumbnails" class="page-header titre"> <i class="fas fa-folder-open"></i><span class="desc"> Explorez toutes les sections</span></h1>
      <h2 class="sousTitre">Toute les filliéres sont disponible ( <span class="marque">Glar</span>, <span class="marque">Geer</span>, <span class="marque">Gestion</span>, <span class="marque">Réseau Télécom</span> )</h2>

      <div class="photoList" data-example-id="simple-thumbnails">


        <?php
        foreach ($boxs as $img => $home) {
          if ($img) {
            ?>
             <div class="photoElt home-fill"> <!-- ajouter "home-fill" pour remettre l'animation -->
              <a href="index.php?page=cours_class_<?= $img?>&home=<?= $home[0]?>&filiere=<?= $home[1]?>"><img src="images/<?= $img?>Box.png" title="<?= $img ?>" alt="<?= $img ?>" /></a>
              <!-- <span><?= $img->TITRE ?></span> -->
            </div>
          <?php }
      }
      ?>

      </div>


      <div class="bs-docs-section">
        <h1 id="thumbnails" class="page-header titre"> <i class="fas fa-file"></i> <span class="desc">Documents Textes</span> </h1>
        <h1 class="sousTitre">Pouvant être de differents format( <span class="marque">Word</span>, <span class="marque">PDF</span>, <span class="marque">etc</span> )</h1>
        <!-- <h3 id="thumbnails-custom-content">Projets réalisés par les étudiants</h3>
          <p>With a bit of extra marqueup, it's possible to add any kind of HTML content like headings, paragraphs, or buttons into thumbnails.</p> -->
        <div class="bs-example" data-example-id="thumbnails-with-custom-content">
          <div class="courList">
            <?php
            foreach ($doc as $pdf) {
              if (($pdf->FORMAT) == 'pdf') {
                ?>
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
              <?php }
          }
          ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>