

<div class="bs-docs-section">
  <h1 id="list-group" class="page-header titre">Gestion de images</h1>

  <?php if(!empty($notifications)){
      echo '<div class="alert '.$class.'" role="alert">'; ?>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" title="Annuler" onclick="this.parentElement.style.display='none'">&times;</button>
            <?php
      echo '<strong id="notifications">Notifications!</strong> '.$notifications.'
      </div>';
  } ?>
 
<?php
foreach ($tab as $gestion) {
?>
    
<div class="row">
        <div class="col-md-8">
            <a href="#" class="list-group-item">
            <img src="donnees/images/<?=$gestion->CONTENUDOC?>" width="20%" height="100px" onclick="myModal(this)"/>
        <h4 class="list-group-item-heading"><?=$gestion->TITRE?></h4>
        
        <p class="list-group-item-text" style="float: right;"></p>
      </a></div>
    <div class="col-md-2">
          <button class="list-group-item btn btn-primary btn-lg" data-toggle="modal" data-target="#myDocImg" title="Code : <?=$gestion->CODEDOC?>">
        <img src="icons/gestions.png" width="35px" height="35px" class="list-group-item-heading"/>Modifier
      </button>
    </div>
     
      <?php if(isAdmin() == 1){ ?>
        <div class="col-md-2">
          <?php if($gestion->IDOC != 1){ ?>
            <button class="list-group-item btn btn-primary btn-lg" data-toggle="modal" data-target="#myDocLockImg" title="Code : <?=$gestion->CODEDOC?>">
        <img src="icons/unlocked.png" width="35px" height="35px" class="list-group-item-heading"/>Bloquer</button>
        <?php }else{ ?>
            <button class="list-group-item btn btn-danger btn-lg" data-toggle="modal" data-target="#myDocUnLockImg" title="Code : <?=$gestion->CODEDOC?>">
        <img src="icons/lock-padlock.png" width="35px" height="35px" class="list-group-item-heading"/>Déloquer</button>
        <?php } ?>
    </div>
      <?php } ?>
</div>    
    
<?php } ?>