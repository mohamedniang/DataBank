  <?php

  session_start();

  require '../control/connexion.php';

  global $conx;

  $c = 1;
  // $tu = array('EMAIL' => $_SESSION['EMAIL'],
  // 'COURIER' => $c);
  $req = $conx->query("SELECT * FROM utilisateurs WHERE (utilisateurs.`COURIER` != $c) AND EMAIL != '{$_SESSION['databank']}'");
  $user = array();
  if ($req) {
    while ($row = $req->fetchObject()) {
      $user[] = $row;
    }
  }
  foreach ($user as $utilisateur) {

    ?>

    <tr>
      <td><?= $utilisateur->MATRICULE ?></td>
      <td><?= $utilisateur->NOMS ?></td>
      <td><?= $utilisateur->EMAIL ?></td>
      <td><?php if (($utilisateur->ETAT) != '0000-00-00 00:00:00') {
            echo "Connecté";
          } else {
            echo "Déconnecté";
          } ?></td>
      <td>
        <?php if (($utilisateur->TYPE) == 1) {
            echo '<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#retireAdmin" data-content="<?= $utilisateur->MATRICULE?>"><img src="icons/administrator_3551.png" title="Administrateur" width="20px" height="20px">Admin</button>';
          } else {
            echo '<button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#ajoutAdmin" data-content="<?= $utilisateur->MATRICULE?>"><img src="icons/user.png" title="Utilisateur" width="20px" height="20px">Users</button>';
          } ?></td>
    </tr>
  <?php }
?>