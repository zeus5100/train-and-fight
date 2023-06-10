<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Logowanie</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
	<link href="https://fonts.googleapis.com/css2?family=Bubblegum+Sans&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<p>Logowanie</p>
	<div class="kontener">
		<div class="nazwy">
			<div class="reje" id="nick">Email</div>
			<div class="reje" id="nick">Hasło</div>
		</div>
		<div class="inputy">
			<form action="zaloguj.php" method="post">
				<div class="inpucik"><input name="email" type="email"></div>
				<div class="inpucik"><input name="haslo" type="password"></div>
		</div>
	</div>
	<?php
		if(isset($_SESSION['error']))
		{
		echo "<div class='error cent'>".$_SESSION['error']."</div>";
		unset($_SESSION['error']);
		}
	?>
	<input type="submit" value="Zaloguj się">
	</form>
	<p class="zapomnialem smallinfo"><a href="pass_reset.php">Nie pamiętasz hasła?</a></p>
	<p class="powrot"><a href="index.php">Strona Główna</a></p>
</body>
</html>