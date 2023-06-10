<?php 
	session_start();
	require_once "connect.php";
	$login = $_POST['email'];
	$login = htmlentities($login, ENT_QUOTES, "UTF-8");
	$rezultat = $polaczenie->query(sprintf("SELECT * FROM gracze WHERE email='%s'",mysqli_real_escape_string($polaczenie,$login)));
	$ilu_userow =$rezultat->num_rows;
	if($ilu_userow>0) {
		$od  = "From: dominik1213141555@gmail.com \r\n";
		$od .= 'MIME-Version: 1.0'."\r\n";
		$od .= 'Content-type: text/html; charset=iso-8859-2'."\r\n";
		$adres = $login;
		$tytul = "JD wiadomości";
		$wiadomosc = "Jd";
		;
		if (mail($adres, $tytul, $wiadomosc, $od)) {
   			 echo "Email successfully sent to $login...";
		} else {
   			 echo "Email sending failed...";
		}
	}
	else {
		$_SESSION['error'] ='Nie znaleziono użytkownika z takim adresem E-mail';
		header('Location: pass_reset.php');
	}
?>