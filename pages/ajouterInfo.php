

<div class="bs-docs-section">
  <h1 id="forms" class="page-header">
  <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ajouterInfo">
    Ajouter une information
  </button>
  </h1>

  <?php if(!empty($notifications)){
      echo '<div class="alert '.$class.'" role="alert">'; ?>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" title="Annuler" onclick="this.parentElement.style.display='none'">&times;</button>
            <?php
      echo '<strong id="notifications">Notifications!</strong> '.$notifications.'
      </div>';
  }
    // echo substr(rand(), 0,5);
   ?>

        <div class="col-md-14">
          <table class="table table-condensed">
            <thead>
              <div class="info-box"></div>
            </thead>
          </table>
        </div>