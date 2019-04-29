<?php
	// VERIFICATION DE LA NON EXISTANCE DE EMAIL
	function email_r($email){
		global $conx;
		$e = array('EMAIL' => $email);

		$sql = 'SELECT EMAIL FROM utilisateurs WHERE EMAIL = :EMAIL';
		$req = $conx->prepare($sql);
		$req->execute($e);

		$result = $req->rowcount($sql);

		return $result;
	}

	
	function ajoutUser($matri,$pseudo, $email, $password, $filiere){
		global $conx;

		$e = 0;
		$t = 0;
		$c = 0;
		$r = array('MATRICULE' => $matri,
					'PSEUDO' => $pseudo,
					'EMAIL' => $email,
					'MOTDEPASSE' => $password,
					'FILIERE' => $filiere,
					'ETAT' => $e,
					'TYPE' => $t,
					'COURIER' => $c);
		$sql = 'INSERT INTO utilisateurs(MATRICULE,NOMS,EMAIL,MOTDEPASSE,FILIERE,ETAT,TYPE,COURIER) VALUES(:MATRICULE,:PSEUDO, :EMAIL, :MOTDEPASSE,:FILIERE,:ETAT,:TYPE,:COURIER)';
		$req = $conx->prepare($sql);
		$result = $req->execute($r);

		return $result;
	}


	// DONNER LES DROITS D'ADMINISTRATION
	function addAccess($matri){
		global $conx;

		$type = 1;
		$a = array('MATRICULE' => $matri,
					'TYPE' => $type);
		$req = $conx->prepare("UPDATE utilisateurs SET TYPE = :TYPE WHERE MATRICULE = :MATRICULE");
		$user = $req->execute($a);

		return $user;
	}
	
	// RETIRER LES DROITS D'ADMINISTRATION
	function outAccess($matri){
		global $conx;

		$type = 0;
		$a = array('MATRICULE' => $matri,
					'TYPE' => $type);
		$req = $conx->prepare("UPDATE utilisateurs SET TYPE = :TYPE WHERE MATRICULE = :MATRICULE");
		$user = $req->execute($a);
		return $user;
	}
	// BLOQUER LE COMPTE
	function lockCpt($matri){
		global $conx;

		$type = 1;
		$a = array('MATRICULE' => $matri,
					'COURIER' => $type);
		$req = $conx->prepare("UPDATE utilisateurs SET COURIER = :COURIER WHERE MATRICULE = :MATRICULE");
		$user = $req->execute($a);
		return $user;
	}
	// AUTORISER UN COMPTE
	function autoriser($matri){
		global $conx;

		$type = 0;
		$e = 0;
		$a = array('MATRICULE' => $matri,
					'COURIER' => $type,
					'ETAT' => $e);
		$req = $conx->prepare("UPDATE utilisateurs SET COURIER = :COURIER, ETAT = :ETAT WHERE MATRICULE = :MATRICULE");
		$user = $req->execute($a);
		return $user;
	}

?>




<?php

// AJOUTER UN UTILISATEUR
if (isset($_POST['submit'])) {
  $email = htmlentities(trim($_POST['EMAIL']));
  if(email_r($email) != 1){
    $nom = htmlentities(addslashes(trim($_POST['NOMS'])));
    $password = md5('DATA'.htmlspecialchars(trim($_POST['MOTDEPASSE'])).'BANK-MATIX');
    $matri = htmlspecialchars($_POST['MATRICULE']);
    
    if (!empty($_POST['FILIER'])) {
    	$filiere = htmlspecialchars($_POST['FILIER']);
    }
    if (!empty($_POST['FILIERE'])) {
    	$filiere = htmlspecialchars($_POST['FILIERE']);
    }
    if (!empty($_POST['FILIERES'])) {
    	$filiere = htmlspecialchars($_POST['FILIERES']);
    }
    
    if(ajoutUser($matri,$nom,$email,$password,$filiere) == 1){
      $notifications = "Ajout utilisateur réussi!";
      $class = 'alert-success';
    }
  }else{
    $notifications = "Email invalide!";
    $class = 'alert-warning';
  }
}

// ATTRIBUER LE DROIT D'ADMINISTRATEUR
if (isset($_POST['access'])) {
  $matri = htmlspecialchars($_POST['MATRICULE']);
  if (!empty($matri)) {
    if (addAccess($matri) == 1) {
      $notifications = "Un utilisateur est nouvellement administrateur";
      $class = "alert-info";
    }

  }else{
    $notifications = "Veuillez saisir un matricule";
    $class = "alert-warning";
  }
}
// FIN ADD ADMIN

// RETIRER LE DROIT D'ADMINISTRATEUR
if (isset($_POST['retire'])) {
  $matri = htmlspecialchars($_POST['MATRICULE']);
  if (!empty($matri)) {
    if (outAccess($matri) == 1) {
      $notifications = "Un utilisateur a été retiré parmis les administrateurs";
      $class = "alert-warning";
    }

  }else{
    $notifications = "Veuillez saisir un matricule";
    $class = "alert-warning";
  }
}
// FIN RETIRE ADMIN

// BLOQUER UN COMPTER
if (isset($_POST['bloquer'])) {
  $matri = htmlspecialchars($_POST['MATRICULE']);
  if (!empty($matri)) {
    if (lockCpt($matri) == 1) {
      $notifications = "Le compte de l'utilisateur a été bloqué";
      $class = "alert-warning";
    }

  }else{
    $notifications = "Veuillez saisir un matricule";
    $class = "alert-warning";
  }
}
// FIN BLOQUER COMPTE
?>



<?php
// SELECTION DE LA LISTE DES UTILISATEUR A BLOQUER
  global $conx;

  // SELECTIONNER
  // $req = $conx->query("SELECT * FROM utilisateur WHERE utilisateurs.`COURIER` = 0 AND utilisateurs.`EMAIL` != '{$_SESSION['databank']}'");
  // $tab = array();

  // while ($row = $req->fetchObject()) {
  //   $tab[] = $row;
  // }
?>