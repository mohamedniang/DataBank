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
            <input type="text" class="form-control" id="MATRICULE" placeholder="Entrez le matricule" name="MATRICULE">
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





  






