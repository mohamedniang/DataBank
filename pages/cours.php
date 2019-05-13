<?php
include_once './control/cours_class.func.php';
?>
<div class="bodySection">
    <h1 class="titre">
        <i class="fas fa-book-open"></i>
        <span class="desc"><?= $type ?></span>
        <span class="demiTitre"><?= $licence ?></span>
    </h1>
    <div class="listGroup">
        <?php
        foreach ($fich as $projet) {
            ?>
            <div class="listItem">
                <a href="index.php?page=lire&home=Projets&data=<?= $projet->CONTENUDOC ?>">
                    <span class="listTitle"><?= $projet->AUTEUR ?></span>
                    <span class="listDescription"><?= $projet->TITRE ?></span>
                </a>
                <a class="icon-right" href="donnees/pdf/<?= $projet->CONTENUDOC ?>" download="<?= $projet->CONTENUDOC ?>">
                    <i class="fas fa-file-download fa-2x"></i>
                </a>
            </div>
            <!-- </div> -->
        <?php }
    ?>
    </div>
</div>