<?php
global $conx;

if (!empty($_GET['filiere'])) {

  // SELECTIONNER LES VIDEOS
  $req = $conx->query("SELECT * FROM documentations,sources WHERE documentations.`CODEDOC` = sources.`CODEDOC` AND documentations.`FORMAT` = 'video' AND documentations.`IDOC` != 1 AND documentations.`FILIERE` = {$_GET['filiere']}");
  $docs = array();
  $docus = array();
  $doc = array();
  if ($req) {
    while ($row = $req->fetchObject()) {
      $docs[] = $row;
    }

    // SELECTIONNER LES IMAGES
    $req = $conx->query("SELECT * FROM documentations,sources WHERE documentations.`CODEDOC` = sources.`CODEDOC` AND documentations.`FORMAT` = 'img' AND documentations.`IDOC` != 1 AND documentations.`FILIERE` = {$_GET['filiere']}");

    while ($line = $req->fetchObject()) {
      $docus[] = $line;
    }

    // SELECTIONNER LES PDF
    $req = $conx->query("SELECT * FROM documentations,sources WHERE documentations.`CODEDOC` = sources.`CODEDOC` AND documentations.`FORMAT` = 'pdf' AND documentations.`IDOC` != 1 AND documentations.`FILIERE` = {$_GET['filiere']}");

    while ($rows = $req->fetchObject()) {
      $doc[] = $rows;
    }
  }

  list($type, $licence, $fil) = explode(".", $_GET['home']);
}
