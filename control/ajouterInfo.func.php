<?php
	/* VERIFIER QUE LE TITRE DU DOCUMENT N'EXISTE PAS DEJA DANS LA BANQUE DE DONNEES
	 	ET QUE LE DOMAINE LE DOMAINE D'APPRENTISSAGE DU DOCUMENT A BIEN ETE SPECIFIER
	 */
	function titre_exist($titre){
		global $conx;
		$e = array('TITRE' => $titre);

		$sql = 'SELECT TITRE FROM documentations WHERE TITRE = :TITRE';
		$req = $conx->prepare($sql);
		$req->execute($e);

		$result = $req->rowcount($sql);

		return $result;
	}
	
	function insertSRC($codedoc,$auteur,$niveau){
		global $conx;

		$e = array('CODEDOC' => $codedoc,
					'AUTEUR' => $auteur,
					'NIVEAU' => $niveau);

		$sql = 'INSERT INTO sources(CODEDOC,AUTEUR,NIVEAU) VALUES(:CODEDOC,:AUTEUR,:NIVEAU)';
		$req = $conx->prepare($sql);
		$req->execute($e);

		$result = $req->rowcount($sql);

		return $result;
	}
	// FIN IMAGE


	// TELECHEMENT ET INSERTION DE PDF
	function LoadIMG($titre,$domain,$format,$codedoc,$auteur,$niveau,$img,$filiere,$idoc){

		$target_dir = "donnees/images/";
		$target_file = $target_dir.basename($img["name"]);

		// $ext_type = array('gif','jpg','jpe','jpeg','png','bmp','ico');
		$typeImg = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		if ($typeImg != 'gif' && $typeImg != 'jpg' && $typeImg != 'jpe' && $typeImg != 'jpeg' && $typeImg != 'png' && $typeImg != 'bmp' && $typeImg != 'ico') {
			return $noType = "Désolé! Ce format d'image n'est pas pris en charge.";
		}else{

			$tmp_name = $img["tmp_name"];

			if(move_uploaded_file($tmp_name, $target_file) == 0){
				global $conx;

				$email = $_SESSION['databank'];
				$name = $img['name'];
				$e = array('CODEDOC' => $codedoc,
							'TITRE' => $titre,
							'DOMAINE' => $domain,
							'FORMAT' => $format,
							'CONTENUDOC' => $name,
							'EMAIL' => $email,
							'FILIERE' => $filiere,
							'IDOC' => $idoc);

				$sql = 'INSERT INTO documentations(CODEDOC,TITRE,DOMAINE,FORMAT,CONTENUDOC,EMAIL,DATEDOC,FILIERE,IDOC) VALUES(:CODEDOC,:TITRE,:DOMAINE,:FORMAT,:CONTENUDOC,:EMAIL,CURDATE(),:FILIERE,:IDOC)';
				$req = $conx->prepare($sql);
				$req->execute($e);
				$result = $req->rowcount($sql);

				if ($result == 1) {
					
                    if(insertSRC($codedoc,$auteur,$niveau) == 1){
                        return $uploaded = "Le document img a été enregistré. Félicitation!";
                        $class = "alert-info";
                    }
				}else{
					return $uploaded = "Le document img n'a pas été enregistré. Désolé!";
				}
			}
		}
	}
	// FIN PDF


	// TELECHEMENT ET INSERTION DE VIDEO
	function LoadVIDEO($titre,$domain,$format,$codedoc,$auteur,$niveau,$video,$filiere,$idoc){

		$target_dir = "donnees/videos/";
		$target_file = $target_dir.basename($video["name"]);




		$taille_max = 8388608;
		$taille = filesize($video['tmp_name']);
		if ($taille > $taille_max) {
			return $uploaded = "Fichier trop lourd. Désolé!";
		}

		$typeVIDEO = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		if ($typeVIDEO != 'mp4' && $typeVIDEO != 'avi' && $typeVIDEO != 'wmv' && $typeVIDEO != '3gp') {
			return $noType = "Désolé! Ce format de video n'est pas pris en charge.";
		}else{

			$tmp_name = $video["tmp_name"];

			if(move_uploaded_file($tmp_name, $target_file) == 0){
				global $conx;

				$email = $_SESSION['databank'];
				$name = $video['name'];
				$e = array('CODEDOC' => $codedoc,
							'TITRE' => $titre,
							'DOMAINE' => $domain,
							'FORMAT' => $format,
							'CONTENUDOC' => $name,
							'EMAIL' => $email,
							'FILIERE' => $filiere,
							'IDOC' => $idoc);

				$sql = 'INSERT INTO documentations(CODEDOC,TITRE,DOMAINE,FORMAT,CONTENUDOC,EMAIL,DATEDOC,FILIERE,IDOC) VALUES(:CODEDOC,:TITRE,:DOMAINE, :FORMAT,:CONTENUDOC,:EMAIL,CURDATE(),:FILIERE,:IDOC)';
				$req = $conx->prepare($sql);
				$req->execute($e);
				$result = $req->rowcount($sql);

				if ($result == 1) {
					
                    if(insertSRC($codedoc,$auteur,$niveau) == 1){
                        return $uploaded = "Le document video a été enregistré. Félicitation!";
                        $class = "alert-info";
                    }
				}else{
					return $uploaded = "Le document video n'a pas été enregistré. Désolé!";
					$class = "alert-warning";
				}
		}else{
			return $uploaded = "Taille du document trop lourd!";
			$class = "alert-warning";
		}
		}
	}


	// TELECHEMENT ET INSERTION DE PDF
	function LoadPDF($titre,$domain,$format,$codedoc,$auteur,$niveau,$pdf,$filiere,$idoc){

		$target_dir = "donnees/pdf/";
		$target_file = $target_dir.basename($pdf["name"]);

		$typePdf = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		if ($typePdf != 'pdf') {
			return $noType = "Désolé! Ce format de pdf n'est pas pris en charge.";
		}else{

			$tmp_name = $pdf["tmp_name"];

			if(move_uploaded_file($tmp_name, $target_file) == 0){
				global $conx;

				$email = $_SESSION['databank'];
				$name = $pdf['name'];
				$e = array('CODEDOC' => $codedoc,
							'TITRE' => $titre,
							'DOMAINE' => $domain,
							'FORMAT' => $format,
							'CONTENUDOC' => $name,
							'EMAIL' => $email,
							'FILIERE' => $filiere,
							'IDOC' => $idoc);

				$sql = 'INSERT INTO documentations(CODEDOC,TITRE,DOMAINE,FORMAT,CONTENUDOC,EMAIL,DATEDOC,FILIERE,IDOC) VALUES(:CODEDOC,:TITRE,:DOMAINE, :FORMAT,:CONTENUDOC,:EMAIL,CURDATE(),:FILIERE,:IDOC)';
				$req = $conx->prepare($sql);
				$req->execute($e);
				$result = $req->rowcount($sql);

				if ($result == 1) {
					
                    if(insertSRC($codedoc,$auteur,$niveau) == 1){
                        return $uploaded = "Le document pdf a été enregistré. Félicitation!";
                        $class = "alert-info";
                    }
				}else{
					return $uploaded = "Le document pdf n'a pas été enregistré. Désolé!";
				}
			}
		}
	}


	// VERIFIER LA TAILLE DU FICHIER
	function verif_zise($fichier){
      // if ($fichier['error']) {     
          switch ($fichier['error']){     
                   case 1: UPLOAD_ERR_INI_SIZE;
                   return $error = "Le fichier dépasse la limite autorisée par le serveur (fichier php.ini) !";     
                   break;     

                   case 2: UPLOAD_ERR_FORM_SIZE;     
                   return $error = "Le fichier dépasse la limite autorisée dans le formulaire HTML !"; 
                   break;     

                   case 3: UPLOAD_ERR_PARTIAL;  
                   return $error = "L'envoi du fichier a été interrompu pendant le transfert !";     
                   break;     

                   case 4: UPLOAD_ERR_NO_FILE;    
                   return $error = "Le fichier que vous avez envoyé a une taille nulle !"; 
                   break;     
          }
	}

?>




<?php
if (isset($_POST['submit'])) {

  $titre = utf8_decode(htmlentities(trim($_POST['TITRE'])));
  $domain = utf8_decode(htmlentities(trim($_POST['DOMAINE'])));
  $auteur = utf8_decode(htmlentities(trim($_POST['AUTEUR'])));
  $niveau = utf8_decode(htmlentities(trim($_POST['NIVEAU'])));

  
    if (!empty($_POST['FILIER'])) {
    	$filiere = htmlspecialchars($_POST['FILIER']);
    }
    if (!empty($_POST['FILIERE'])) {
    	$filiere = htmlspecialchars($_POST['FILIERE']);
    }
    if (!empty($_POST['FILIERES'])) {
    	$filiere = htmlspecialchars($_POST['FILIERES']);
    }
  $idoc = 0;

  if(titre_exist($titre) != 1){

    if(!empty($domain)){

      if (!empty($_POST['AUTEUR']) && !empty($_POST['NIVEAU'])) {

        if (!empty($_FILES['CONTENUDOC']) || !empty($_FILES['PDF']) || !empty($_FILES['VIDEO'])) {

          // INSERTION D'UN DOCUMENT IMG
          if($_POST['FORMAT'] == 'img'){

              $format = htmlentities(addslashes(trim($_POST['FORMAT'])));
              $codedoc = substr(rand(), 0,5);
              
                if(LoadIMG($titre,$domain,$format,$codedoc,$auteur,$niveau,$_FILES["CONTENUDOC"],$filiere,$idoc) == 0){
                   $notifications = LoadIMG($titre,$domain,$format,$codedoc,$auteur,$niveau,$_FILES["CONTENUDOC"],$filiere,$idoc);
                   $class = "alert-info";
                }else{
                  $notifications = "Une erreure est survenue. Ajout annulé!";
                  $class = 'alert-danger';
                }

              // INSERTION D'UN DOCUMENT PDF
            }elseif($_POST['FORMAT'] == 'pdf' || $_POST['FORMAT'] == 'rapport'){

              // $_FILES['CONTENUDOC'] = $_FILES['PDF'];
              $format = htmlentities($_POST['FORMAT']);
              if (!empty($_FILES['PDF'])) {
              	$file = $_FILES['PDF'];
              }
              if (!empty($_FILES['RAPPORT'])) {
              	$file = $_FILES['RAPPORT'];
              }
              $codedoc = substr(rand(), 0,5);

              if(LoadPDF($titre,$domain,$format,$codedoc,$auteur,$niveau,$file,$filiere,$idoc) == 0){
                 $notifications = LoadPDF($titre,$domain,$format,$codedoc,$auteur,$niveau,$file,$filiere,$idoc);
                 $class = "alert-info";
              }else{
                $notifications = "Une erreure est survenue. Ajout annulé!";
                $class = 'alert-danger';
              }
            }elseif($_POST['FORMAT'] == 'video'){

              if(verif_zise($_FILES['VIDEO']) == 0){
                $notifications = verif_zise($_FILES['VIDEO']);
                $class = "alert-info";
              }

              $format = htmlentities(addslashes(trim($_POST['FORMAT'])));
              $codedoc = substr(rand(), 0,5);

              if(LoadVIDEO($titre,$domain,$format,$codedoc,$auteur,$niveau,$_FILES["VIDEO"],$filiere,$idoc) == 0){
                 $notifications = LoadVIDEO($titre,$domain,$format,$codedoc,$auteur,$niveau,$_FILES["VIDEO"],$filiere,$idoc);
                 $class = "alert-info";
              }else{
                $notifications = "Une erreure est survenue. Ajout annulé!";
                $class = 'alert-danger';
              }
            }else{
              $notifications = "Problème de format du fichier!!!";
              $class = 'alert-danger';
            }

          }else{
            $notifications = "Veuillez choisir un format image, pdf ou video et sélectionner le document!";
            $class = 'alert-warning';
          }
      }else{
        $notifications = "Veuillez remplire les informations sur la source du document!";
        $class = 'alert-warning';
      }
    }else{
      $notifications = "Le domaine n'a pas été spécifié!";
      $class = 'alert-warning';
    }
  }else{
    $notifications = "Désolé ce titre fait réfférence à un document existant ou le domaine n'a pas été spécifié!";
    $class = 'alert-warning';
  }

  // FIN
}
?>
