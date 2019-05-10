  <?php

  session_start();

  require '../control/connexion.php';

  global $conx;

  // SELECTIONNER LES COURIERS
  $req = $conx->query("SELECT * FROM couriers");
  $tab = array();
  if ($req) {
    while ($row = $req->fetchObject()) {
      $tab[] = $row;
    }
  }
  foreach ($tab as $courier) {

    ?>
    <tr>
      <td><?= $courier->IDCER ?></td>
      <td><?= $courier->EMAIL ?></td>
      <td><?= $courier->MAIL ?></td>
      <td><?= $courier->SUJET ?></td>
      <td><?= $courier->MAILTEXTE ?></td>
    </tr>

  <?php } ?>