<?php

// INSERTION D'UN NOUVEAU SUJE TDE DISCUSSION
if (isset($_POST['SUJET']) && isset($_POST['EMAIL'])) {
	require '../control/connexion.php';

	$sujet = htmlspecialchars(addslashes($_POST['SUJET']));
	$mail = htmlspecialchars($_POST['EMAIL']);

	$tab = array('EMAIL' => $mail, 'SUJET' => $sujet);

	$sql = $conx->prepare("INSERT INTO sujet(EMAIL,SUJET,DATEPOST) VALUES(:EMAIL,:SUJET,CURTIME())");
	$sql->execute($tab);
}

// INSERTION DE DISCUSSIONS
if (isset($_POST['IDSUJET'])) {
	require '../control/connexion.php';

	$id = htmlspecialchars($_POST['IDSUJET']);
	$disc = htmlspecialchars(addslashes($_POST['DISCUSSION']));
	$mail = htmlspecialchars($_POST['MAIL']);

	$tbl = array('IDSUJET' => $id, 'MAIL' => $mail, 'DISCUSSION' => $disc);

	$sql = $conx->prepare("INSERT INTO forum(IDSUJET,MAIL,DISCUSSION,DATEDISC) VALUES(:IDSUJET,:MAIL,:DISCUSSION,CURTIME())");
	$sql->execute($tbl);
}
?>