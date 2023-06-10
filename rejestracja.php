<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Darmowa Rejestracja</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
	<link href="https://fonts.googleapis.com/css2?family=Bubblegum+Sans&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<p>Rejestracja</p>
	<div class="pojemnik">
		<div class="nazwy">
			<div class="reje" id="nick">Nazwa uzytkownika</div>
			<div class="reje" id="nick">Email</div>
			<div class="reje" id="nick">Hasło</div>
			<div class="reje" id="nick">Powtórz Hasło</div>
		</div>
		<div class="inputy">
			<form action="rejestracjado.php" method="post">
				<div class="inpucik"><input name="nick" type="text"></div>
				<div class="inpucik"><input name="email" type="email"></div>
				<div class="inpucik"><input name="haslo" type="password"></div>
				<div class="inpucik"><input name="haslo2" type="password"></div>
		</div>
	</div>
	<?php
		if(isset($_SESSION['error']))
		{
		echo "<div class='error'><ul>".$_SESSION['error']."</ul></div>";
		unset($_SESSION['error']);
		}
	?>
	<input type="submit" value="Zarejestruj się">
	</form>
	<p class="powrot"><a href="index.php">Strona Główna</a></p>
</body>
</html>