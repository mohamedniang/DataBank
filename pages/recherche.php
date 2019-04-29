<?php
if (!empty($_POST['RECHERCHE'])) {

	$donnee = htmlspecialchars(addslashes($_POST['RECHERCHE']));

	$sql = $conx->query("SELECT * FROM documentations WHERE CONCAT(`TITRE`,`DOMAINE`,`FORMAT`,`CONTENUDOC`) LIKE '%$donnee%'");
	$tab = array();
	
	while ($row = $sql->fetchObject()) {
		$tab[] = $row;
	}
}else{
	echo "Veuillez entrer un sujet de recherche!!!";
}
?>

<?php
if(!empty($tab)){
	foreach ($tab as $result) {
		if($result->FORMAT == "img"){
		echo '
        <div class="col-sm-14">
          <div class="list-group">
            <a href="donnees/images/'.$result->CONTENUDOC.'" download="'.$result->CONTENUDOC.'" title="Télécharger" class="list-group-item"> <b>'.$result->TITRE.'</b> <a style="position:relative; float:right; top:-38px; right:20px" title="Aperçu"><img src="donnees/images/'.$result->CONTENUDOC.'" width="45px" height="35px" onclick="myModal(this)"/></a></a>
          </div>';

      }elseif($result->FORMAT == "pdf"){
		echo '
        <div class="col-sm-14">
          <div class="list-group">
            <a href="index.php?page=lire&home=lire&data='.$result->CONTENUDOC.'" title="Aperçu" class="list-group-item"> <b>'.$result->TITRE.'</b> <a href="donnees/pdf/'.$result->CONTENUDOC.'" download="'.$result->CONTENUDOC.'" style="position:relative; float:right; top:-30px; right:20px" title="Télécharger">'.$result->CONTENUDOC.'</a></a>
          </div>';

      }elseif($result->FORMAT == "video"){
		echo '
        <div class="col-sm-14">
          <div class="list-group">
            <a href="donnees/videos/'.$result->CONTENUDOC.'" title="Aperçu" class="list-group-item" target="_blank"> <b>'.$result->TITRE.'</b> <a href="donnees/videos/'.$result->CONTENUDOC.'" download="'.$result->CONTENUDOC.'" style="position:relative; float:right; top:-38px; right:20px" title="Télécharger"><video src="donnees/videos/'.$result->CONTENUDOC.'" height="35px" controls></video></a></a>
          </div>';
      }
	}
}else{
  echo "Aucun résultat trouvé.";
}
?>