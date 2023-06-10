<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Przypominanie hasła</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
	<link href="https://fonts.googleapis.com/css2?family=Bubblegum+Sans&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<p>Przywracanie hasła</p>
	<p class="smallinfo">Podaj email przypisany do twojego konta</p>
	<form action="haslorest.php" method="post">
		<div class="emailrest"><input name="email" type="email"></div>
	<?php
		if(isset($_SESSION['error']))
		{
		echo "<div class='error cent'>".$_SESSION['error']."</div>";
		unset($_SESSION['error']);
		}
	?>
	<input type="submit" value="Przywróć">
	</form>
	<p class="powrot"><a href="index.php">Strona Główna</a></p>
</body>
</html>