<div class="bodySection">
  <h1 class="demiTitre">Courier de demandes d'ouverture de compte</h1>

  <?php if (!empty($notifications)) {
    echo '<div class="alert ' . $class . '" role="alert">'; ?>
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" title="Annuler" onclick="this.parentElement.style.display='none'">&times;</button>
    <?php
    echo '<strong id="notifications">Notifications!</strong> ' . $notifications . '
        </div>';
  } ?>
  <div>
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
  </div>  
  <button class="btn" data-toggle="#" data-target="#myEMAIL">
    Envoyer un Email
  </button>
  <h1 class="demiTitre">Email d'ouverture de compte</h1>
  <div>
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
  </div>
</div>