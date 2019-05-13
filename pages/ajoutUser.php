<div class="bodySection">
  <!-- <?php if (!empty($notifications)) {
          echo '<div class="alert ' . $class . '" role="alert">'; ?>
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true" title="Annuler" onclick="this.parentElement.style.display='none'">&times;</button>
      <?php
      echo '<strong id="notifications">Notifications!</strong> ' . $notifications . '</div>';
    } ?> -->

  <div>
    <table class="table table-condensed">
      <thead>
        <tr id="user">
          <th>MATRICULE</th>
          <th>PSEUDO</th>
          <th>EMAIL</th>
          <th>ETAT</th>
          <th>TYPE</th>
          <!-- <th>ACTION</th> -->
        </tr>
      </thead>
      <tbody class="user-box">
      </tbody>
    </table>
  </div><!-- /AJOUTER UN UTILISATEUR -->
  <div>
    <button class="btn" data-toggle="#" data-target="#ajoutUser">
      Ajouter un utilisateur
      <!-- <img src="icons/ajoutuser.png" title="Attribuer le droit d'administrateur" width="30px" height="30px"> -->
    </button>
    <button type="button" class="btn" data-toggle="#" data-target="#bloquer">
      Bloquer le compte
      <!-- <img src="icons/administrator_3551.png" title="Attribuer le droit d'administrateur" width="30px" height="30px"> -->
    </button>
  </div>
</div>