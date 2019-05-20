<?php
require '../control/connexion.php';
require '../control/ouvrircompte.func.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <!--        META ET MOT CLES-->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="ESTM DATA BANK.">
  <meta name="keywords" content="ESTM, DATA, BANK, donnée, banque, étudiant, école, dakar, Sénégal, yembi, aimé, louis, yembi yembi, hadi touré, mamour">
  <meta name="author" content="YEMBI YEMBI Louis Aimé, Hadi TOURE, et MAMOUR">

  <!--        LE TITRE DU SITRE-->
  <title>DATABANK-ESTM</title>

  <!--        L'ICON DU SITE-->
  <link rel="icon" href="../images/photo.jpg">

  <!--        FICHIERS CSS POUR LE DESIGN-->
  <!-- <link href="../bootstrap-3.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="../bootstrap-3.3.2/docs/examples/signin/signin.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="./fontawesome/css/all.css">
  <!-- <link rel="stylesheet" type="text/css" href="../bootstrap-3.3.2/dist/css/bootstrap.css" /> -->
  <!-- <link rel="stylesheet" type="text/css" href="../bootstrap-3.3.2/dist/css/bootstrap.min.css" /> -->
  <!-- <link rel="stylesheet" type="text/css" href="../bootstrap-3.3.2/dist/css/bootstrap-theme.css" />
    <link rel="stylesheet" type="text/css" href="../css/galerie_vue.css" /> -->
  <!-- <link rel="stylesheet" type="text/css" href="../css/style.css" /> -->
  <link rel="stylesheet" type="text/css" href="../css/main.css" />

  <!-- <link rel="icon" href="images/icon.png"> -->

  <!-- Custom styles for this template -->
  <!-- <link href="../bootstrap-3.3.2/docs/examples/carousel/carousel.css" rel="stylesheet"> -->

  <!--        FIXER LA BAR DE NAVIGATION-->
  <!-- <link href="../bootstrap-3.3.2/docs/examples/navbar-fixed-top/navbar-fixed-top.css" rel="stylesheet"> -->
</head>

<body>


  <?php
  if (isset($_POST['submit'])) {
    if (empty($_POST['MATRICULE']) || empty($_POST['NOMS']) || empty($_POST['MATRICULE']) || empty($_POST['EMAIL']) || empty($_POST['MOTDEPASSE'])) {
      $notifications = "Veuillez remplire tous les champs.";
      $class = "alert-info";
    } else {
      $pseudo = htmlspecialchars(addslashes($_POST['NOMS']));

      if (!empty($_POST['FILIER'])) {
        $filiere = htmlspecialchars($_POST['FILIER']);
      }
      if (!empty($_POST['FILIERE'])) {
        $filiere = htmlspecialchars($_POST['FILIERE']);
      }
      if (!empty($_POST['FILIERES'])) {
        $filiere = htmlspecialchars($_POST['FILIERES']);
      }

      $email = htmlspecialchars($_POST['EMAIL']);
      $matri = htmlspecialchars($_POST['MATRICULE']);
      $password = md5('DATA' . htmlspecialchars(trim($_POST['MOTDEPASSE'])) . 'BANK-MATIX');

      if (email_r($email) == 0) {
        if (ajoutUser($matri, $pseudo, $email, $password, $filiere) == 1) {
          $notifications = "Votre demande a bien été envoyée. Veuillez vous connecter!";
          $class = "alert-success";
        } else {
          $notifications = "Demande invalide. Veuillez réessayer";
          $class = "alert-info";
        }
      } else {
        $notifications = "Cette email existe déjà.";
        $class = "alert-info";
      }
    }
  }
  ?>
  <div class="inscriptionContainer fontify">
    <h3 id="forms" class="demiTitre">Faites une demande d'ouverture de compte</h3>
    <?php if (!empty($notifications)) {
      echo '<div class="alert ' . $class . '" role="alert">'; ?>
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true" title="Annuler" onclick="this.parentElement.style.display='none'">&times;</button>
      <?php
      echo '<strong id="notifications">Notifications!</strong> ' . $notifications . '
      </div>';
    } ?>

    <div class="form-insc">
      <form enctype="multipart/form-data" action="#" method="post">
        <div class="form-group">
          <label for="exampleInputEmail1">Matricule </label>
          <input type="number" min="0" name="MATRICULE" id="MATRICULE" class="form-control" placeholder="Entrez votre matricule">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Prénom & Nom</label>
          <input type="text" name="NOMS" id="NOMS" class="form-control" placeholder="Entrez votre nom & prénom">
        </div>
        <div class="form-group filliere">
          <label for="STATUS">Niveau </label>
          <div class="fill">
            <div class="fill-part"><input type="radio" name="NIVFIL" value="L10" onclick="met(this,'L10','L20','L30');"><span>Licence 1</span></div>
            <div class="fill-part"><input type="radio" name="NIVFIL" value="L20" onclick="met(this,'L20','L10','L30');"><span>Licence 2</span></div>
            <div class="fill-part"><input type="radio" name="NIVFIL" value="L30" onclick="met(this,'L30','L10','L20');"><span>Licence 3</span></div>
          </div>
        </div>
        <div class="form-group filliere-select" id="L10" style="display: none;">
          <label for="exampleInputPassword1">Filières</label>
          <div>
            <select type="text" class="form-control" name="FILIER" id="FILIERE">
              <option value="">Sélectionner la filière de Licence 1</option>
              <option value="11">Licence 1 : GLAR</option>
              <option value="12">Licence 1 : GEER</option>
              <option value="13">Licence 1 : TELECOM</option>
              <option value="14">Licence 1 : GESTION</option>
            </select>
          </div>
        </div>
        <div class="form-group filliere-select" id="L20" style="display: none;">
          <label for="exampleInputPassword1">Filières</label>
          <div>
            <select type="text" class="form-control" name="FILIERE" id="FILIERE" onclick="">
              <option value="">Sélectionner la filière de Licence 2</option>
              <option value="21">Licence 2 : GLAR</option>
              <option value="22">Licence 2 : GEER</option>
              <option value="23">Licence 2 : TELECOM</option>
              <option value="24">Licence 2 : GESTION</option>
            </select>
          </div>
        </div>
        <div class="form-group filliere-select" id="L30" style="display: none;">
          <label for="exampleInputPassword1">Filières</label>
          <div>
            <select type="text" class="form-control" name="FILIERES" id="FILIERE">
              <option value="">Sélectionner la filière de Licence 3</option>
              <option value="31">Licence 3 : GLAR</option>
              <option value="32">Licence 3 : GEER</option>
              <option value="33">Licence 3 : TELECOM</option>
              <option value="34">Licence 3 : GESTION</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email </label>
          <input type="email" name="EMAIL" id="EMAIL" class="form-control" id="exampleInputEmail1" placeholder="Entrez votre email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Mot de passe</label>
          <input type="password" name="MOTDEPASSE" id="MOTDEPASSE" class="form-control" id="exampleInputPassword1" placeholder="Entrez votre mot de passe">
        </div>
        <div class="form-group subBouton">
          <button type="submit" name="submit" class="btn" id="send-conx">S'inscrire</button>
          <!-- <span style="float: right;"><a href="seconnecter.php">Connexion</a></span> -->
          <a href="./seconnecter" class="btn">Se connecter</a>

        </div>

      </form>
    </div><!-- /connexion -->
  </div>
</body>
<script src="../js/jsToFenetre.js"></script>

</html>