<?php
global $conx;

if (!empty($_GET['filiere'])) {

  // SELECTIONNER LES VIDEOS
  $req = $conx->query("SELECT * FROM documentations,sources WHERE documentations.`CODEDOC` = sources.`CODEDOC` AND documentations.`FORMAT` = 'video' AND documentations.`IDOC` != 1 AND documentations.`FILIERE` = {$_GET['filiere']}");
  $docs = array();
  $docus = array();
  $doc = array();
  $fich = array();
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
    // SELECTIONNER LES PDF POUR TOUTES LES FILLIERES
    $req = $conx->query("SELECT * FROM documentations,sources WHERE documentations.`CODEDOC` = sources.`CODEDOC` AND documentations.`FORMAT` = 'pdf' AND documentations.`IDOC` != 1 AND documentations.`FILIERE` = {$_GET['filiere']}");
    while ($rows = $req->fetchObject()) {
      // foreach ($rows as $key) {
      //   print_r(" ");
      //   print_r($key);
      //   print_r(" <br/>");
      // }
      if ($rows) {
        $fich[] = $rows;
      } else {
        array_push(
          $fich,
          array(
            'CONTENUDOC' => 'rien',
            'AUTEUR' => 'rien',
            'TITRE' => 'rien'
          )
        );
      }
    }
  }
}
list($type, $licence, $fil) = explode(".", $_GET['home']);
