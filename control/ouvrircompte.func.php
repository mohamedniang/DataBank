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

	// INSERTION DU COURIER
	function ajoutUser($matri,$pseudo, $email, $password, $filiere){
		global $conx;

		$e = 0;
		$t = 0;
		$c = 0;
		$r = array('MATRICULE' => $matri,
					'NOMS' => $pseudo,
					'EMAIL' => $email,
					'MOTDEPASSE' => $password,
					'FILIERE' => $filiere,
					'ETAT' => $e,
					'TYPE' => $t,
					'COURIER' => $c);
		$sql = 'INSERT INTO utilisateurs(MATRICULE,NOMS,EMAIL,MOTDEPASSE,FILIERE,ETAT,TYPE,COURIER) VALUES(:MATRICULE,:NOMS, :EMAIL, :MOTDEPASSE,:FILIERE,:ETAT,:TYPE,:COURIER)';
		$req = $conx->prepare($sql);
		$result = $req->execute($r);

		return $result;
	}