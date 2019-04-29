<?php
	require '../control/connexion.php';
	require '../control/seconnecter.func.php';
	session_start();

	if(isset($_SESSION['databank']) AND TimerDonx($_SESSION['databank']) == 1){

		session_destroy();
		header('location:../seconnecter.php');
	}else{
		echo "stop";
	}
?>