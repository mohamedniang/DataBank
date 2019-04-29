<?php
	// require 'control/connexion.php';
	// require 'control/ajoutUser.php';


       if (!isset($_POST['PSEUDO'])) {
                  ?>
                  <script type="text/javascript">
                    // var msgbox = document.getElementById('notify');
                    // msgbox.addClass('alert-success');
                    alert('USER SENT');
                  </script>
                  <?php
			$_SESSION['PSEUDO'] = htmlspecialchars(trim($_POST['PSEUDO']));
			$email = htmlspecialchars(trim($_POST['EMAIL']));
			$password = md5('DATA'.htmlspecialchars(addslashes(trim($_POST['MOTDEPASSE']))).'BANK-MATIX');
            
              // VERIFICATION DE LA NON EXISTANCE DE EMAIL
              if(email_r($email) == 1){
                  ?>
                  <script type="text/javascript">
                    // var msgbox = document.getElementById('notify');
                    // msgbox.addClass('alert-success');
                    alert('Email existe');
                  </script>
                  <?php
              }else{
                if(ajoutUser($_SESSION['PSEUDO'], $email, $password) == 0){
                  ?>
                  <script type="text/javascript">
                    // var msgbox = document.getElementById('notify');
                    // msgbox.addClass('alert-success');
                    alert('User ajouter');
                  </script>
                  <?php
                }else{
                  ?>
                  <script type="text/javascript">
                    // var msgbox = document.getElementById('notify');
                    // msgbox.addClass('alert-success');
                    alert('User non ajouter');
                  </script>
                  <?php
                }
              }
            }
    ?>