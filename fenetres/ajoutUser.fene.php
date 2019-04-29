
<!--    AJOUT D'UN NOUVELLE UTILISATEUR-->
  <div id="ajoutUser" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Ajouter un nouvel utilisateur</h4>
        </div>
      <div class="bs-example" data-example-id="basic-forms">
        <form enctype="multipart/form-data" action="index.php?page=ajoutUser" method="POST">
          <div class="form-group modal-body">
            <label for="MATRICULE">MATRICULE ETUDIANT</label>
            <input type="text" class="form-control" id="MATRICULE" placeholder="Entrez votre matricule" name="MATRICULE">

            <label for="NOMS">NOMS</label>
            <input type="text" class="form-control" id="NOMS" placeholder="Entrez votre pseudo" name="NOMS">

            <label for="STATUS">Niveau </label>
              <input type="radio" name="NIVFIL" value="L10" onclick="met(this,'L10','L20','L30');"> <label for="L1">L1</label>
              <input type="radio" name="NIVFIL" value="L20" onclick="met(this,'L20','L10','L30');"> <label for="L2">L2</label>
              <input type="radio" name="NIVFIL" value="L30" onclick="met(this,'L30','L10','L20');"> <label for="L3">L3</label>
              <br>
              <div class="modal-body" id="L10" style="display: none;">
              <label for="exampleInputPassword1">Filières</label>
                <select type="text" class="form-control" name="FILIER" id="FILIERE">
                  <option value="">Sélectionner la filière de Licence 1</option>
                  <option value="11">Licence 1 : GLAR</option>
                  <option value="12">Licence 1 : GEER</option>
                  <option value="13">Licence 1 : TELECOM</option>
                  <option value="14">Licence 1 : GESTION</option>
                </select>
             </div>
             <div class="modal-body" id="L20" style="display: none;">
              <label for="exampleInputPassword1">Filières</label>
                  <select type="text" class="form-control" name="FILIERE" id="FILIERE" onclick="">
                    <option value="">Sélectionner la filière de Licence 2</option>
                    <option value="21">Licence 2 : GLAR</option>
                    <option value="22">Licence 2 : GEER</option>
                    <option value="23">Licence 2 : TELECOM</option>
                    <option value="24">Licence 2 : GESTION</option>
                </select>
              </div>
              <div class="modal-body" id="L30" style="display: none;">
                <label for="exampleInputPassword1">Filières</label>
                <select type="text" class="form-control" name="FILIERES" id="FILIERE">
                  <option value="">Sélectionner la filière de Licence 3</option>
                  <option value="31">Licence 3 : GLAR</option>
                  <option value="32">Licence 3 : GEER</option>
                  <option value="33">Licence 3 : TELECOM</option>
                  <option value="34">Licence 3 : GESTION</option>
                </select>
            </div>

            <label for="EMAIL">Email </label>
            <input type="email" class="form-control" id="EMAIL" placeholder="Entrez votre email" name="EMAIL">

            <label for="MOTDEPASSE">Mot de passe</label>
            <input type="password" class="form-control" id="MOTDEPASSE" placeholder="Entrez votre mot de passe" name="MOTDEPASSE">
          </div>

          <div class="modal-footer">
            <h4>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="submit" class="btn btn-primary" id="sendAjoutUser">Ajouter l'utilisateur</button>
          </h4>
          </div>
        </form>
    </div>

      </div>
    </div>
  </div>


    <!--    BLOQUER LE COMPTE-->
  <div id="bloquer" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Bloquer le compte</h4>
        </div>
      <div class="bs-example" data-example-id="basic-forms">
        <form enctype="multipart/form-data" action="index.php?page=ajoutUser" method="POST">
          <div class="form-group modal-body">
            <label for="MATRICULE">MATRICULE ETUDIANT</label>
            <!-- <input type="text" class="form-control" id="MATRICULE" placeholder="Entrez le matricule" name="MATRICULE"> -->
            <select type="text" name="MATRICULE" class="form-control" control>
              <option value="">Choisir l'email de l'utilisateur</option>
            <?php
              foreach ($tab as $mail) {
            ?>
              <option value="<?=$mail->MATRICULE?>"><?=$mail->EMAIL?></option>
          <?php } ?>
          </select>
          </div>

          <div class="modal-footer">
            <h4>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="bloquer" class="btn btn-primary" id="sendAjoutUser">Bloquer le compte</button>
          </h4>
          </div>
        </form>
    </div>

      </div>
    </div>
  </div>



<!--    AJOUT DE PRIVILIEGE D'DMINISTRATEUR-->
  <div id="ajoutAdmin" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Ajouter le privilège d'administrateur</h4>
        </div>
      <div class="bs-example" data-example-id="basic-forms">
        <form enctype="multipart/form-data" action="index.php?page=ajoutUser" method="POST">
          <div class="form-group modal-body">
            <label for="MATRICULE">MATRICULE ETUDIANT</label>
            <input type="text" class="form-control" id="MATRICULE" placeholder="Entrez le matricule" name="MATRICULE">
          </div>

          <div class="modal-footer">
            <h4>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="access" class="btn btn-primary" id="sendAjoutUser">Ajouter comme admin</button>
          </h4>
          </div>
        </form>
    </div>

      </div>
    </div>
  </div>


    <!--    RETIRER LE PRIVILIEGE D'ADMINISTRATEUR-->
  <div id="retireAdmin" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Retirer le privilège d'administrateur</h4>
        </div>
      <div class="bs-example" data-example-id="basic-forms">
        <form enctype="multipart/form-data" action="index.php?page=ajoutUser" method="POST">
          <div class="form-group modal-body">
            <label for="MATRICULE">MATRICULE ETUDIANT</label>
            <input type="text" class="form-control" id="MATRICULE" placeholder="Entrez le matricule" name="MATRICULE">
          </div>

          <div class="modal-footer">
            <h4>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="retire" class="btn btn-primary" id="sendAjoutUser">Retirer comme admin</button>
          </h4>
          </div>
        </form>
    </div>

      </div>
    </div>
  </div>
