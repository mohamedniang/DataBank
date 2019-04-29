<?php
function recherche($donnee){
	global $conx;

	// $e = array('TITRE' => $donnee);
	$sql = "SELECT * FROM documentations WHERE CONCAT(`TITRE`,`DOMAINE`,`FORMAT`,`DATE`) LIKE '%".$donnee."%'";
	$rlt = $conx->prepare($sql);
	$result = $rlt->fetchObject();
	return $result;
}


//FONCTION DE FILTRAGE
function filterTs($sql)
{
	global $conx;
	//CONNEXION A LA BASE DE DONNEES		
	$result = $conx->prepare($sql);
	return $result;
}







?>