<?php
	global $conx;
	
if (!empty($_GET['filiere'])) {

    // SELECTIONNER LES VIDEOS
    $req = $conx->query("SELECT * FROM documentations,sources WHERE documentations.`CODEDOC` = sources.`CODEDOC` AND documentations.`FORMAT` = 'video' AND documentations.`IDOC` != 1 AND documentations.`FILIERE` = {$_GET['filiere']}");
    $docs = array();

    while ($row = $req->fetchObject()) {
      $docs[] = $row;
    }

    // SELECTIONNER LES IMAGES
    $req = $conx->query("SELECT * FROM documentations,sources WHERE documentations.`CODEDOC` = sources.`CODEDOC` AND documentations.`FORMAT` = 'img' AND documentations.`IDOC` != 1 AND documentations.`FILIERE` = {$_GET['filiere']}");
    $docus = array();

    while ($line = $req->fetchObject()) {
      $docus[] = $line;
    }

    // SELECTIONNER LES PDF
    $req = $conx->query("SELECT * FROM documentations,sources WHERE documentations.`CODEDOC` = sources.`CODEDOC` AND documentations.`FORMAT` = 'pdf' AND documentations.`IDOC` != 1 AND documentations.`FILIERE` = {$_GET['filiere']}");
    $doc = array();

    while ($rows = $req->fetchObject()) {
      $doc[] = $rows;
    }
}
?>