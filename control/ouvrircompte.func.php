<?php
	// VERIFICATION DE LA NON EXISTANCE DE EMAIL
	function email_r($email){
		global $conx;
		$e = array('EMAIL' => $email);

		$sql = 'SELECT EMAIL FROM utilisateur WHERE EMAIL = :EMAIL';
		$req = $conx->prepare($sql);
		$req->execute($e);

		$result = $req->rowcount($sql);

		return $result;
	}

	// INSERTION DU COURIER
	function ajoutUser($matri,$pseudo, $email,$password){
		global $conx;

		$e = 0;
		$t = 0;
		$c = 1;
		$r = array('MATRICULE' => $matri,
					'PSEUDO' => $pseudo,
					'EMAIL' => $email,
					'MOTDEPASSE' => $password,
					'ETAT' => $e,
					'TYPE' => $t,
					'COURIER' => $c);
		$sql = 'INSERT INTO utilisateur(MATRICULE,PSEUDO,EMAIL,MOTDEPASSE,ETAT,TYPE,COURIER) VALUES(:MATRICULE,:PSEUDO, :EMAIL, :MOTDEPASSE,:ETAT,:TYPE, :COURIER)';
		$req = $conx->prepare($sql);
		$result = $req->execute($r);

		return $result;
	}