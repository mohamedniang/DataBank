
<h1 id="forms" class="page-header">Courier de demandes d'ouverture de compte</h1>

  <?php if(!empty($notifications)){
      echo '<div class="alert '.$class.'" role="alert">'; ?>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" title="Annuler" onclick="this.parentElement.style.display='none'">&times;</button>
            <?php
      echo '<strong id="notifications">Notifications!</strong> '.$notifications.'
      </div>';
  } ?>    

  <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myEMAIL">
    Envoyer un Email <img src="icons/email-black.png" title="Attribuer le droit d'administrateur" width="20px" height="20px">
  </button>
  <br>
  <br>
    <div class="col-md-14">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>matricule</th>
                <th>Nom & prénom</th>
                <th>Email</th>
                <th>actions</th>
              </tr>
            </thead>
            <tbody class="courier-box">
            </tbody>
          </table>
    
    <h1 id="forms" class="page-header">Email d'ouverture de compte</h1>

    <div class="col-md-14">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>From</th>
                <th>A</th>
                <th>Sujet</th>
                <th>Message</th>
              </tr>
            </thead>
            <tbody class="mail-box">
            </tbody>
          </table>

