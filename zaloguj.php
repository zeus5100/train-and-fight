<?php 
	session_start();
	require_once "connect.php";
	$login = $_POST['email'];
	$haslo = $_POST['haslo'];
	$login = htmlentities($login, ENT_QUOTES, "UTF-8");
	$rezultat = $polaczenie->query(sprintf("SELECT * FROM gracze WHERE email='%s'",mysqli_real_escape_string($polaczenie,$login)));
	$ilu_userow =$rezultat->num_rows;
	if($ilu_userow>0) {
		$wiersz = $rezultat->fetch_assoc();
		if (password_verify($haslo, $wiersz['haslo'])){
			$_SESSION['zalogowany'] = true;
			$_SESSION['id'] = $wiersz['id'];
			header('Location: game.php');
		}
		else {
			$_SESSION['error'] ='Błędne hasło!';
			header('Location: logowanie.php');
		}
	}
	else {
		$_SESSION['error'] ='Nie znaleziono użytkownika z takim adresem E-mail';
		header('Location: logowanie.php');
	}
?>
	