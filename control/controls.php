<?php
	require 'connexion.php';

	//RECUPERATION DES FICHIERS CONTENUS DANS LE DOSSIER homes POUR LES STOCKER DANS LA VARIABLE $home
	$homes = scandir('pages/');

	//RECHERCHE DU FICHIER CONTENU DANS LA VARIABLE page A L'INTERIEUR DU DOSSIER vue
	if (isset($_GET['home']) && !empty($_GET['home']) && in_array($_GET['home'].'.php', $homes)) {

		//INITIALISATION DE LA VARIABLE $vue POUR AFFICHAGE
		$home = $_GET['home'];
        $page = 'homes/'.$_GET['home'];

	}else{

		//PAGE PAR DEFAUT DE L'ACCUEIL
		$home = 'home';

	}


	//RECUPERATION DES FICHIERS CONTENUS DANS LE DOSSIER model POUR LES STOCKER DANS LA VARIABLE $model
	$model = scandir('pages/');

	//RECHERCHE DU FICHIER CONTENU DANS LA VARIABLE page A L'INTERIEUR DU DOSSIER model
	if (isset($_GET['page']) && !empty($_GET['page']) && in_array($_GET['page'].'.php', $model)) {

		//INITIALISATION DE LA VARIABLE $page POUR AFFICHAGE
		$page = $_GET['page'];

	}else{

		//PAGE PAR DEFAUT DE L'ACCUEIL
		$page = 'home';

	}


	// FONCTION DE RECHERCHE ET D'AFFICHAGE DES PAGES DE FONCTIONS PHP
    $page_func = scandir('control/');
	
	if (in_array($page.'.func.php', $page_func)) {
		require 'control/'.$page.'.func.php';
	}


	// FONCTION DE RECHERCHE ET D'AFFICHAGE DES PAGES DE CONTROL JS
	$page_js = scandir('js/');
	if (in_array($page.'.func.js', $page_js)) {
		?>
			<script type="text/javascript" src='js/<?=$page?>.func.js'></script>
		<?php
	}

	// FONCTION DE RECHERCHE ET D'AFFICHAGE DES PAGES DE CONTROL FENETRE MODALE
	$model = scandir('fenetres/');
	if (in_array($page.'.fene.php', $model)) {
		require 'fenetres/'.$page.'.fene.php';
	}

?>
<!-- <script src="js/jquery.js"></script> -->
