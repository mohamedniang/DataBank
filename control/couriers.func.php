
<?php

	// AUTORISER UN COMPTE
	function autoriser($to){
		global $conx;

		$c = 0;
		$e = 0;
		$a = array('EMAIL' => $to,
					'COURIER' => $c,
					'ETAT' => $e);
		$req = $conx->prepare("UPDATE utilisateur SET COURIER = :COURIER, ETAT = :ETAT WHERE EMAIL = :EMAIL");
		$user = $req->execute($a);
		return $user;
	}
	// FIN AUTORISER COMPTE


	// ENVOYER UN EMAIL
	// function envoyerMail($to,$sujet,$texte){}
	// FIN ENVOI EMAIL
?>


<?php
// AUTORISER UN COMPTER
if (isset($_POST['courier'])) {
  $matri = htmlspecialchars($_POST['MATRICULE']);
  if (!empty($matri)) {
    if (autoriser($matri) == 1) {
      $notifications = "Le compte de l'utilisateur est maintenant autorisé";
      $class = "alert-info";
    }

  }else{
    $notifications = "Veuillez saisir un matricule";
    $class = "alert-warning";
  }
}
// FIN CODE COMPTE


// RECUPERATION DE DONNEES POUR ENVOI DE L'EMAIL
if (isset($_POST['submail'])) {
	$to = htmlspecialchars($_POST['MAIL']);
	$sujet = htmlspecialchars(addslashes($_POST['SUJET']));
	$texte = htmlspecialchars(addslashes($_POST['MAILTEXTE']));
	if (empty($to) || empty($sujet) || empty($texte)) {
		$notifications = "Veuillez remplir tous les champs.";
		$class = "alert-warning";
	}else{
		if (envoyerMail($to,$sujet,$texte) == 0) {
			$notifications = "Email envoyé.";
			$class = "alert-info";
		}else{
			$notifications = "Désolé, ce message ne peut être envoyé. Veuillez vérifier votre adresse.";
			$class = "alert-warning";
		}
	}
}
?>

<?php
// SELECTION DE LA LISTE DE COURIER EN ATTENTE POUR ENVOYER UN EMAIL
  global $conx;

  // SELECTIONNER LES VCOURIERS
  $req = $conx->query("SELECT * FROM utilisateurs WHERE utilisateurs.`COURIER` = 1");
  $tab = array();

  while ($row = $req->fetchObject()) {
    $tab[] = $row;
  }
?>
