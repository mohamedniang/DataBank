<?php
  require '../control/connexion.php';
  require '../control/home.func.php';

  foreach ($tab as $id) {
    
  }

    // SELECTIONNER LES COURIERS
    $req = $conx->query("SELECT * FROM forum INNER JOIN sujet WHERE sujet.`IDSUJET` = forum.`IDSUJET` ORDER BY IDDISC ASC");
    $tab = array();

    while ($row = $req->fetchObject()) {
      $tab[] = $row;
    }
        foreach ($tab as $disc) {
    ?>
        <pre><img src="icons/administrator_3551.png" height="30px"><code><?=$disc->DISCUSSION?></code></pre>
    <?php } ?>