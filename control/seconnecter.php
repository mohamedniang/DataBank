<?php
	require 'connexion.php';
	require 'seconnecter.func.php';

	if (isset($_POST['submit'])) {
    echo $email = htmlspecialchars(trim($_POST['EMAIL']));
    $password = md5('DATA'.htmlspecialchars(addslashes(trim($_POST['MOTDEPASSE'])),1).'BANK-MATIX');

		// if (user_exist($email,$password) == 1 AND TimerConx($email) == 1) {
		if (1 == 1 AND 1 == 1) {

			session_start();

			$_SESSION['databank'] = $email;
			$_SESSION['db_pwd'] = $password;

			// RECUPERATIONS DES DONNEES DE CONNEXION DE SESSIONS
			if (!empty($_SESSION['databank'])) {
			   global $conx;
			   $u = array('EMAIL' => $_SESSION['databank'], 'MOTDEPASSE' => $_SESSION['db_pwd']);

			   $sql = "SELECT * FROM utilisateurs WHERE (EMAIL = :EMAIL AND MOTDEPASSE = :MOTDEPASSE)";
			   $req = $conx->prepare($sql);
			   $req->execute($u);
			   while($result = $req->fetch()){
			      $_SESSION['MATRICULE'] = $result['MATRICULE'];
			      $_SESSION['NOMS'] = $result['NOMS'];
			      $_SESSION['FILIERE'] = $result['FILIERE'];
			      $_SESSION['TYPE'] = $result['TYPE'];
			   }
			}

			header('Location:../index.php?page=home&succes=1');
		}else{
			
			header('Location:../seconnecter.php?erreur');
		}
	}else{
		echo "DQTQ";
	}
?>