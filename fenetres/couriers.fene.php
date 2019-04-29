
<!-- ENVOYER UN EMAIL -->
  <div id="myEMAIL" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Envoyer un email</h4>
        </div>
        <div class="modal-body">
          <form enctype="multipart/form-data" action="control/mail.php" method="post">
          <p>
          <div class="form-group modal-body">
            <label for="EMAIL">Email du destinataire</label>
            <select type="email" name="MAIL" class="form-control" control>
              <option value="">Choisir l'email du destinataire</option>
            <?php
              foreach ($tab as $mail) {
            ?>
              <option value="<?=$mail->EMAIL?>"><?=$mail->EMAIL?></option>
          <?php } ?>
          </select>
          <!-- </div> -->
          <br>
          <!-- <div class="form-group modal-body">       -->
          <label for="EMAIL">Sujet du mail</label>
          <input type="text" name="SUJET" class="form-control" placeholder="Mail de validation de compte">

            <label for="EMAIL">Email du destinataire</label>
            <textarea type="text" rows="5" class="form-control" id="EMAIL" placeholder="Entrez l'email du destinataire" name="MAILTEXTE"></textarea>
          </div>
          </p>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Anneler</button>
          <button type="submit" name="submail" class="btn btn-primary">Envoyer</button>
        </div>
        </form>
    </div>

      </div>
    </div>
  </div>



  <!--    VALIDER UN COURIER-->
  <div id="validerCourier" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Valider un courier</h4>
        </div>
      <div class="bs-example" data-example-id="basic-forms">
        <form enctype="multipart/form-data" action="index.php?page=couriers" method="POST">
          <div class="form-group modal-body">
            <label for="MATRICULE">MATRICULE ETUDIANT</label>
            <input type="text" class="form-control" id="MATRICULE" placeholder="Entrez votre matricule" name="MATRICULE">
          </div>

          <div class="modal-footer">
            <h4>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="courier" class="btn btn-primary" id="sendAjoutUser">Valider le compte</button>
          </h4>
          </div>
        </form>
    </div>

      </div>
    </div>
  </div>