<?php
  global $conx;

    // SELECTIONNER LES PDF
    $req = $conx->query("SELECT * FROM documentations WHERE documentations.`FORMAT` = 'pdf'");
    $tab = array();

    while ($row = $req->fetchObject()) {
      $tab[] = $row;
    }
?>
          
<?php

  // MODIFIER LE TITRE
  function gestion($titre,$code){
    global $conx;

    // $type = 1;
    $a = array('TITRE' => $titre,
          'CODEDOC' => $code);
    $req = $conx->prepare("UPDATE documentations SET TITRE = :TITRE WHERE CODEDOC = :CODEDOC");
    $modif = $req->execute($a);

    return $modif;
  }

  // BLOQUER LE DOCUMENT
  function bloquer($code){
    global $conx;

    $id = 1;
    $a = array('IDOC' => $id,
          'CODEDOC' => $code);
    $req = $conx->prepare("UPDATE documentations SET IDOC = :IDOC WHERE CODEDOC = :CODEDOC");
    $bloquer = $req->execute($a);

    return $bloquer;
  }

  // DEBLOQUER LE DOCUMENT
  function debloquer($code){
    global $conx;

    $id = 0;
    $a = array('IDOC' => $id,
          'CODEDOC' => $code);
    $req = $conx->prepare("UPDATE documentations SET IDOC = :IDOC WHERE CODEDOC = :CODEDOC");
    $bloquer = $req->execute($a);

    return $bloquer;
  }
  ?>



  
<?php
if (isset($_POST['submit'])) {
  if (empty($_POST['CODEDOC']) && empty($_POST['TITRE'])) {
      $notifications = "Pour voir le code référence place le curseur sur le boutton modifier.";
      $class = "alert-warning";
  }else{
    $code = htmlspecialchars($_POST['CODEDOC']);
    $titre = htmlspecialchars(addslashes($_POST['TITRE']));

    if(gestion($titre,$code) == 1){
        $notifications = "Le titre a bien été modifié.";
        $class = "alert-info";
    }else{
      $notifications = "Une erreure s'est produite. Veuillez nous excuser.";
      $class = "alert-warning";
    }
  }
}

// BLOQUER LE DOCUMENT
if (isset($_POST['sublock'])) {
  if (empty($_POST['CODEDOC'])) {
      $notifications = "Pour voir le code référence placez le curseur sur le boutton bloquer.";
      $class = "alert-warning";
  }else{
    $code = htmlspecialchars($_POST['CODEDOC']);

    if(bloquer($code) == 1){
        $notifications = "Le document a bien été bloqué.";
        $class = "alert-info";
    }else{
      $notifications = "Une erreure s'est produite. Veuillez nous excuser.";
      $class = "alert-warning";
    }
  }
}
// FIN BLOQUER VIDEOS

// DEBLOQUER VIDEOS
if (isset($_POST['subUnlock'])) {
  if (empty($_POST['CODEDOC'])) {
      $notifications = "Pour voir le code référence placez le curseur sur le boutton bloquer.";
      $class = "alert-warning";
  }else{
    $code = htmlspecialchars($_POST['CODEDOC']);

    if(debloquer($code) == 1){
        $notifications = "Le document a bien été débloqué.";
        $class = "alert-info";
    }else{
      $notifications = "Une erreure s'est produite. Veuillez nous excuser.";
      $class = "alert-warning";
    }
  }
}
// FIN DEBLOQUER
?>

