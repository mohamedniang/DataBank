<?php
		
	$host = 'localhost';
	$dbname = 'databank';
	$dbuser = 'root';
	// $dbuser = 'phpmyadmin';
	$dbpwd = '';
	// $dbpwd = 'admin';

	try{
		$conx = new PDO('mysql:host='.$host.'; dbname='.$dbname,$dbuser,$dbpwd,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
	}catch(PDOexception $e){
		die("Une erruer est survenue lors de la connexion à la banque de données! Veuillez nous excuser. <a href='mailto:'>Club Scientifique ESTM</a>");
	}


	function isLogged(){
		if (isset($_SESSION['databank'])) {
			$logged = 1;
		}else{
			$logged = 0;
		}
		return $logged;
	}

	function isAdmin(){
		if (!empty($_SESSION['TYPE'])) {
			$type = 1;
		}else{
			$type = 0;
		}
		return $type;	
	}

	function asFiliereL1($dep){
		if ($dep == 11 || $dep == 12 || $dep == 13 || $dep == 14) {
			$dep = 1;
		}else {
			$dep = 0;
		}
		return $dep;	
	}
	function asFiliereL2($dep){
		if ($dep == 21 || $dep == 22 || $dep == 23 || $dep == 24) {
			$dep = 1;
		}else {
			$dep = 0;
		}
		return $dep;	
	}
	function asFiliereL3($dep){
		if ($dep == 31 || $dep == 32 || $dep == 33 || $dep == 34) {
			$dep = 1;
		}else {
			$dep = 0;
		}
		return $dep;	
	}