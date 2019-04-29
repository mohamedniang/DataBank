<?php
function user_exist($email, $password){
   global $conx;
   $u = array('EMAIL' => $email, 'MOTDEPASSE' => $password);

   $sql = "SELECT EMAIL,MOTDEPASSE FROM utilisateurs WHERE (EMAIL = :EMAIL AND MOTDEPASSE = :MOTDEPASSE) AND (ETAT = 0 AND COURIER != 1)";
   $req = $conx->prepare($sql);
   $req->execute($u);
   $exist = $req->rowCount($sql);

   return $exist;
}

function TimerConx($email){
	global $conx;

   $c = array('EMAIL' => $email);
   $sql = "UPDATE utilisateurs SET ETAT = NOW() WHERE EMAIL = :EMAIL";
	$req = $conx->prepare($sql);
	$req->execute($c);
   $rlt = $req->rowCount($sql);
	return $rlt;
}

function TimerDonx($email){
   global $conx;

   $c = array('EMAIL' => $email);
   $sql = "UPDATE utilisateurs SET ETAT = 0 WHERE EMAIL = :EMAIL";
   $req = $conx->prepare($sql);
   $req->execute($c);
   $rlt = $req->rowCount($sql);
   return $rlt;
}
?>