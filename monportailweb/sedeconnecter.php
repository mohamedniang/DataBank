
    <!--        L'ICON DU SITE-->
    <link rel="icon" href="../images/photo.jpg">

  <link href="../bootstrap-3.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="../bootstrap-3.3.2/docs/examples/signin/signin.css" rel="stylesheet">

  <?php
	require '../control/connexion.php';
	require '../control/seconnecter.func.php';

	session_start();

	if(isset($_SESSION['databank']) AND TimerDonx($_SESSION['databank']) == 1){

		session_destroy();
		header('location:seconnecter.php');
	}else{
    	echo '<div class="alert alert-danger" role="alert" align="center">
                      <strong id="notifications">Attention!</strong> Une erreure est survenue, veuillez nous excusez!!
        </div>';
	}
?>