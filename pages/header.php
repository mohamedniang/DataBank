<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="style.scss">
    <script src="script.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Some dropdown menu</title>
</head>

<body> -->
<nav class="navbar navbar-default" id="hdb">
    <ul>
        <li><a href="index.php?page=home">Home</a></li>
        <li>
            <a href="#">Document <i class="fa fa-sort-down"></i></a>
            <ul>
                <li><a href="index.php?page=projets&home=Projets">Projets</a>
                    <ul>
                        <li class=""><a href="index.php?page=gestionProjets&home=Document / Gestion de projets">Gestion de projets</a></li>
                    </ul>
                </li>
                <li><a href="index.php?page=videos&home=Vidéos">Vidéos</a>
                    <ul>
                        <li class=""><a href="index.php?page=gestionVideos&home=Document / Gestion de vidéos">Gestion de vidéos</a></li>
                    </ul>
                </li>
                <li><a href="index.php?page=galerie&home=Galérie">Images</a>
                    <ul>
                        <li class=""><a href="index.php?page=gestionImg&home=Document / Gestion d'imagess">Gestion d'images</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">Options <i class="fas fa-sort-down"></i></a>
            <ul>
                <?php if (isAdmin() == 1) { ?>
                    <li>
                        <a href="index.php?page=ajoutUser&home=Ajouter un utilisateur">Ajouter un utilisateur <i class="fa fa-sort-down"></i></a>
                    </li>
                <?php } ?>
                <li>
                    <a href="index.php?page=ajouterInfo&home=Ajouter une information">Ajouter un cours / tuto <i class="fa fa-sort-down"></i></a>
                </li>
                <li>
                    <a href="index.php?page=couriers&home=Gestion des couriers">Courier <i class="fa fa-sort-down"></i></a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#">Courses <i class="fas fa-sort-down"></i></a>
            <ul>
                <li>
                    <a href="#">Licence I <i class="fa fa-sort-down"></i></a>
                    <?php if (isAdmin() == 1 || asFiliereL1($_SESSION['FILIERE']) == 1 || asFiliereL2($_SESSION['FILIERE']) == 1 || asFiliereL3($_SESSION['FILIERE']) == 1) { ?>
                        <ul>
                            <li><a href="index.php?page=cours_class&home=Cours de classes L1 glar&filiere=11">Glar</a></li>
                            <li><a href="index.php?page=cours_class&home=Cours de classes L1 geer&filiere=12">Geer</a></li>
                            <li><a href="index.php?page=cours_class&home=Cours de classes L1 télécom&filiere=13">Telecom</a></li>
                            <li><a href="index.php?page=cours_class&home=Cours de classes L1 gestion&filiere=14">Gestion</a></li>
                        </ul>
                    <?php } ?>
                </li>
                <li>
                    <a href="#">Licence II <i class="fas fa-sort-down"></i></a>
                    <?php if (isAdmin() == 1 || asFiliereL2($_SESSION['FILIERE']) == 1 || asFiliereL3($_SESSION['FILIERE']) == 1) { ?>
                        <ul>
                            <li><a href="index.php?page=cours_class&home=Cours de classes L2 glar&filiere=21">Glar</a></li>
                            <li><a href="index.php?page=cours_class&home=Cours de classes L2 geer&filiere=22">Geer</a></li>
                            <li><a href="index.php?page=cours_class&home=Cours de classes L2 télécom&filiere=23">Telecom</a></li>
                            <li><a href="index.php?page=cours_class&home=Cours de classes L2 gestion&filiere=24">Gestion</a></li>
                        </ul>
                    <?php } ?>
                </li>
                <li>
                    <a href="#">Licence III <i class="fa fa-sort-down"></i></a>
                    <?php if (isAdmin() == 1 || asFiliereL3($_SESSION['FILIERE']) == 1) { ?>
                        <ul>
                            <li><a href="index.php?page=cours_class&home=Cours de classes L3 glar&filiere=31">Glar</a></li>
                            <li><a href="index.php?page=cours_class&home=Cours de classes L3 geer&filiere=32">Geer</a></li>
                            <li><a href="index.php?page=cours_class&home=Cours de classes L3 télécom&filiere=33">Telecom</a></li>
                            <li><a href="index.php?page=cours_class&home=Cours de classes L3 gestion&filiere=34">Gestion</a></li>
                        </ul>
                    <?php } ?>
                </li>
            </ul>
        </li>
        <li><a href="index.php?page=soutenance">Soutenance</a></li>
        <!-- <li><a href="#">About Us</a></li> -->

        <span class="ctn-search">
            <form method="post" action="index.php?page=recherche" class="search-frm">
                <input type="search" name="RECHERCHE" class="form-control" id="RECHERCHE" placeholder="Sujet de recherche..." />
            </form>
        </span>


        <?php if (isset($_SESSION['databank'])) { ?>
            <!-- <li>  </li> -->
            <li class="dropdown" style="float: right; right: 70px">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?= $_SESSION['NOMS'] ?> <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <!-- <li><a href="index.php?page=profile">Profile</a></li> -->
                    <!-- <li><a href="#">Another action</a></li> -->
                    <li class="dropdown-header"><?= $_SESSION['databank'] ?></li>
                    <li><a href="pages/sedeconnecter.php">Déconnexion</a></li>
                </ul>
            </li>
        <?php } ?>

    </ul>
</nav>
<!-- 
</body>

</html> -->