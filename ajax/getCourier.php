  <?php

  session_start();

  require '../control/connexion.php';

  global $conx;

  // SELECTIONNER LES COURIERS
  $req = $conx->query("SELECT * FROM utilisateurs WHERE utilisateurs.`COURIER` = 1");
  $tab = array();
  if ($req) {
    while ($row = $req->fetchObject()) {
      $tab[] = $row;
    }
  }
  foreach ($tab as $courier) {

    ?>
    <tr>
      <td>1</td>
      <td><?= $courier->MATRICULE ?></td>
      <td><?= $courier->NOMS ?></td>
      <td><?= $courier->EMAIL ?></td>
      <td>
        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#validerCourier">En attente...</button>
      </td>
    </tr>
  <?php } ?>