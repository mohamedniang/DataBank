<?php
	global $conx;

    // SELECTIONNER LES VIDEOS
    $req = $conx->query("SELECT * FROM documentations,sources WHERE documentations.`CODEDOC` = sources.`CODEDOC` AND documentations.`FORMAT` = 'video' AND documentations.`IDOC` != 1 LIMIT 0,4");
    $docs = array();

    while ($row = $req->fetchObject()) {
      $docs[] = $row;
    }

    // SELECTIONNER LES IMAGES
    $req = $conx->query("SELECT * FROM documentations,sources WHERE documentations.`CODEDOC` = sources.`CODEDOC` AND documentations.`FORMAT` = 'img' AND documentations.`IDOC` != 1 LIMIT 0,4");
    $docus = array();

    while ($line = $req->fetchObject()) {
      $docus[] = $line;
    }

    // SELECTIONNER LES PDF
    $req = $conx->query("SELECT * FROM documentations,sources WHERE documentations.`CODEDOC` = sources.`CODEDOC` AND documentations.`FORMAT` = 'pdf' AND documentations.`IDOC` != 1 LIMIT 0,4");
    $doc = array();

    while ($rows = $req->fetchObject()) {
      $doc[] = $rows;
    }
    

    // SELECTION DE SUJETS DE DISCUSSION
    // $req = $conx->query("SELECT * FROM sujet ORDER BY IDSUJET ASC");
    // $tab = array();

    // while ($rows = $req->fetchObject()) {
    //   $tab[] = $rows;
    // }
?>
