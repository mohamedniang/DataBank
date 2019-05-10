<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="YEMBI YEMBI Louis Aimé, Haddi TOURE, MAMOUR">
  <link rel="icon" href="images/CSESTM.jpg">

  <title>BANQUE DE DONNEES</title>

  <link href="bootstrap-3.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="bootstrap-3.3.2/docs/exemples/signin/signin.css" rel="stylesheet">
</head>

<body>

  <div class="container">
    <h1 id="forms" class="form-signin-heading" style="text-align:center">Se connecter</h1>
    <?php
     if (isset($_GET['erreur'])) {
      $error_conx = "Adresse e-mail ou mot de passe incorrect";
  
      echo '<div class="alert alert-warning" role="alert">
          <strong id="notifications">Attention!</strong> ' . $error_conx . '
        </div>';
    } ?>
    <!-- <?= $_SESSION['databank'] ?> -->
    <div class="form-signin" data-example-id="basic-forms">
      <form enctype="multipart/form-data" action="control/seconnecter.php" method="post" style="width: 300px; margin: auto;">
        <!-- <div class="form-group"> -->
        <label for="Email" class="sr-only">Email </label>
        <input type="email" name="EMAIL" id="EMAIL" class="form-control" placeholder="Entrez votre email" required autofocus>
        <!-- </div> -->
        <br>
        <!-- <div class="form-group"> -->
        <label for="MOTDEPASSE" class="sr-only">Mot de passe</label>
        <input type="password" name="MOTDEPASSE" id="MOTDEPASSE" class="form-control" placeholder="Entrez votre mot de passe" required>
        <!-- </div> -->
        <div class="checkbox">
          <label>
            <input type="checkbox" name="sesouvenir"> Garder ma session ouverte
          </label>
        </div>
        <div>
          <p>Toujours pas de compte ? <a href="#" class="link">Inscrivez-vous</a></p>
        </div>
        <button type="submit" name="submit" class="btn btn-lg btn-primary btn-block" id="send-conx">Se connecter</button>
      </form>
    </div><!-- /connexion -->
  
  </body>
  <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

</html>
