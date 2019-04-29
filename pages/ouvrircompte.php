<?php
if (isset($_POST['submit'])) {
  if (empty($_POST['MATRICULE']) || empty($_POST['PSEUDO']) || empty($_POST['MATRICULE']) || empty($_POST['EMAIL']) || empty($_POST['MOTDEPASSE'])) {
    $notifications = "Veuillez remplire tous les champs.";
    $class = "alert-info";
  
  }else{
    $pseudo = htmlspecialchars(addslashes($_POST['PSEUDO']));
    $email = htmlspecialchars($_POST['EMAIL']);
    $matri = htmlspecialchars($_POST['MATRICULE']);
    $password = md5('DATA'.htmlspecialchars(addslashes(trim($_POST['MOTDEPASSE'])),1).'BANK-MATIX');

    if (email_r($email) == 0) {
      if(ajoutUser($matri,$pseudo, $email,$password) == 1){
        $notifications = "Votre demande a bien été envoyée. Vous recevrez un email de validation";
        $class = "alert-success";

      }else{
        $notifications = "Demande invalide. Veuillez réessayer";
        $class = "alert-info";
      }

    }else{
      $notifications = "Cette email existe déjà.";
      $class = "alert-info";
    }
  }
}
?>


<div class="bs-docs-section">
  <h3 id="forms" class="page-header">Faites une demande d'ouverture de compte</h3>
  <?php if(!empty($notifications)){
      echo '<div class="alert '.$class.'" role="alert">'; ?>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" title="Annuler" onclick="this.parentElement.style.display='none'">&times;</button>
            <?php
      echo '<strong id="notifications">Notifications!</strong> '.$notifications.'
      </div>';
  } ?>

  <div class="bs-example" data-example-id="basic-forms">
    <form enctype="multipart/form-data" action="#" method="post">
      <div class="form-group">
        <label for="exampleInputEmail1">Prénom & Nom</label>
        <input type="text" name="PSEUDO" id="PSEUDO" class="form-control" placeholder="Entrez votre nom & prénom">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Matricule </label>
        <input type="number" min="0" name="MATRICULE" id="MATRICULE" class="form-control" placeholder="Entrez votre matricule">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email </label>
        <input type="email" name="EMAIL" id="EMAIL" class="form-control" id="exampleInputEmail1" placeholder="Entrez votre email">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Mot de passe</label>
        <input type="password" name="MOTDEPASSE" id="MOTDEPASSE" class="form-control" id="exampleInputPassword1" placeholder="Entrez votre mot de passe">
      </div>
      <div class="checkbox">
      </div>
      <button type="submit" name="submit" class="btn btn-primary" id="send-conx">Envoyer</button>
    </form>
  </div><!-- /connexion -->