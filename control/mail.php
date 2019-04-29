<?php
		session_start();
		// global $conx;

		// SEND EMAIL
		// Load Composer's autoloader
		require '../PHPMailer/PHPMailerAutoload.php';
		require 'connexion.php';
		require 'couriers.func.php';

		// Instantiation and passing `true` enables exceptions
		$mail = new PHPMailer(true);

		try {
		    //Server settings
		    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
		    $mail->isSMTP();                                            // Set mailer to use SMTP
		    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
		    $mail->Username   = 'mickaelyembi@gmail.com';                     // SMTP username
		    $mail->Password   = 'matix1024';                               // SMTP password
		    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
		    $mail->Port       = 587;                                    // TCP port to connect to

		    //Recipients
		    $mail->setFrom('mickaelyembi@gmail.com', 'ESTM CLUB SCIENTIFIQUE');
		    $mail->addAddress($to);     // Add a recipient

		    $mail->addReplyTo($to);

		    // Attachments
		    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

		    // Content
		    $mail->isHTML(true);                                  // Set email format to HTML
		    $mail->Subject = utf8_decode($sujet);
		    $mail->Body   = '<div style="padding:5px; background-color:red; color:white"> '.utf8_decode($texte).' <a href="http://www.estm.sn" style="color:#444;"><b>Connectez-vous</b></a></div>';
		    // $mail->AltBody = 'Nous vous remercions pour votre patience';

		    if($mail->send())
		    {

				$e = array('EMAIL' => $_SESSION['databank'],'MAIL' => $to,'SUJET' => $sujet,'MAILTEXTE' => $texte);
				$sql = $conx->prepare('INSERT INTO courier(EMAIL,MAIL,SUJET,MAILTEXTE) VALUES(:EMAIL,:MAIL,:SUJET,:MAILTEXTE)');
				if($sql->execute($e)){
					if(autoriser($to)){
						header('Location:../index.php?page=couriers&$notifications=Message envoyé.');
					}
				}
			}
		} catch (Exception $e) {
		    echo "Ce message ne peut être envoyé. Mailer Error: {$mail->ErrorInfo}";
		}

?>