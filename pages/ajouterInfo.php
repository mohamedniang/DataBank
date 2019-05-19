<div class="bodySection">
  <h1 class="demiTitre">
    <span>Ajouter un document (text, video, image, etc ...)</span>
<button class="btn btn-add" onclick="toggle(event)">
    <i class="fa fa-eye"></i>
    </button>
  </h1>
  <div class="show">
    <?php
    require_once 'ajouterInformation.php';
    ?>
  </div>
  <?php if (!empty($notifications)) {
    echo '<div class="alert ' . $class . '" role="alert">'; ?>
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" title="Annuler" onclick="this.parentElement.style.display='none'">&times;</button>
    <?php
    echo '<strong id="notifications">Notifications!</strong> ' . $notifications . '
      </div>';
  }
  // echo substr(rand(), 0,5);
  ?>

  <!-- <div>
    <table class="table table-condensed">
      <thead>
        <div class="info-box"></div>
      </thead>
    </table>
  </div> -->
</div>
<script>
  function toggle(ev) {
    ev.preventDefault(); // prevent the link from being followed
    let elt = document.querySelector('.show');
    if (elt) { // get the next element
      if (elt.style.display == "none") { // toggle the display
        elt.style.display = "block";
      } else {
        elt.style.display = "none";
      }
    }
  }
</script>