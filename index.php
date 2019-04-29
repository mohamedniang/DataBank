<?php
session_start();
if (empty($_SESSION['databank'])) {
    header('location:seconnecter.php');
}

require 'control/controls.php';
?>


<!DOCTYPE HTML>
<html lang="fr">

<head>
    <!--        META ET MOT CLES-->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ESTM DATA BANK.">
    <meta name="keywords" content="ESTM, DATA, BANK, donnée, banque, étudiant, école, dakar, Sénégal, yembi, aimé, louis, yembi yembi, hadi touré, mamour">
    <meta name="author" content="YEMBI YEMBI Louis Aimé, Hadi TOURE, et MAMOUR">

    <!--        LE TITRE DU SITRE-->
    <title>DATABANK-ESTM</title>

    <!--        FICHIERS CSS POUR LE DESIGN-->
    <link rel="stylesheet" href="./fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.2/dist/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.2/dist/css/bootstrap-theme.css" />
    <link rel="stylesheet" type="text/css" href="css/galerie_vue.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />

    <!--        L'ICON DU SITE-->
    <link rel="icon" href="images/CSESTM.jpg">
    <!-- <link rel="icon" href="images/icon.png"> -->

    <!-- Custom styles for this template -->
    <link href="bootstrap-3.3.2/docs/examples/carousel/carousel.css" rel="stylesheet">

    <!--        FIXER LA BAR DE NAVIGATION-->
    <link href="bootstrap-3.3.2/docs/examples/navbar-fixed-top/navbar-fixed-top.css" rel="stylesheet">
</head>

<body>
    <!-- HEADER -->
    <header class='pagehead'>
        <?php
        require "pages/header.php";

        // var_dump($_GET['page']);
        if ($page != "home") { } else {
            require "pages/slider.html";
        }
        ?>
    </header>

    <!-- BODY -->
    <div class='pagebody bs-docs-section container'>
        <!--            ARBORESCENCE DES PAGES DE NAVIGATION -->
        <!-- MENU -->
        <div class='pagemenu' style="position: fixed;">
            <!-- <?php require "pages/menu.php"; ?> -->
        </div>

        <?php require "pages/" . $page . ".php"; ?>
    </div>

    <!-- FOOTER -->
    <div class='archipages'>
        <?php require "pages/footer.php"; ?>
    </div>
</body>


<?php
require 'pages/homes/modifiDoc.php';
require 'control/modales.php';
?>

</html>

<script src="js/jquery.js"></script>
<script src="js/jsToFenetre.js"></script>
<script src="js/home.func.js"></script>
<script src="js/galerie.func.js"></script>
<script src="bootstrap-3.3.2/dist/js/bootstrap.js"></script>
<!--<script src="bootstrap-3.3.2/dist/js/bootstrap.min.js"></script>-->
<script src="bootstrap-3.3.2/docs/assets/js/ie-emulation-modes-warnixng.js"></script>


<!-- JavaScript Includes -->
<script src="bootstrap-3.3.2/js/tests/vendor/jquery.min.js"></script>
<script src="bootstrap-3.3.2/js/transition.js"></script>
<script src="bootstrap-3.3.2/js/modal.js"></script>
<script src="bootstrap-3.3.2/js/tooltip.js"></script>
<script src="bootstrap-3.3.2/js/popover.js"></script>

<!-- JavaScript Test -->
<script>
    $(function() {
        $('.js-popover').popover()
        $('.js-tooltip').tooltip()
    })
</script>