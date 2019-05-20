<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="YEMBI YEMBI Louis Aimé, Haddi TOURE, MAMOUR">


  <title>BANQUE DE DONNEES</title>

  <!--        L'ICON DU SITE-->
  <link rel="icon" href="../images/photo.jpg">
  <link rel="stylesheet" href="../css/main.css">
  <!-- <link href="../bootstrap-3.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="../bootstrap-3.3.2/docs/examples/signin/signin.css" rel="stylesheet"> -->
</head>

<body>
  <div class="container-connection">
    <div class="presentation">
      <img src="../images/logoFinalCS.jpg" alt="logo du club scientifique">
    </div>
    <div class="connection">
      <h1 id="forms" class="form-connection-head">Se connecter</h1>

      <div class="form-signin" data-example-id="basic-forms">
        <form enctype="multipart/form-data" action="../control/seconnecter.php" method="post">
          <div>
            <label for=" Email">Email </label>
          <input type="email" name="EMAIL" id="EMAIL" class="form-control" placeholder="Entrez votre email" required autofocus>
      </div>
      <div>
        <label for="MOTDEPASSE">Mot de passe</label>
        <input type="password" name="MOTDEPASSE" id="MOTDEPASSE" class="form-control" placeholder="Entrez votre mot de passe" required>
      </div>
      <div class="insc">
        <span>Toujours pas de compte ? <a href="ouvrircompte.php" class="btn btn-green">Inscrivez-vous</a></span>
      </div>
      <button type="submit" name="submit" class="btn btn-lg btn-primary btn-block" id="send-conx">Se connecter</button>
      </form>
      <div class="checkbox">
        <!-- <label> -->
        <!-- <input type="checkbox" name="sesouvenir"> Garder ma session ouverte -->
        <?php
        if (isset($_GET['erreur'])) {
          $error_conx = "Adresse e-mail ou mot de passe incorrect";

          echo '<div class="alert alert-danger" role="alert">
                                    <strong id="notifications">Attention!</strong> ' . $error_conx . '
                                  </div>';
        }
        ?>
        <!-- </label> -->
      </div>
    </div>
  </div>
</body>

<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="../../assets/js/ie-emulation-modes-warning.js"></script>

</html>