<?php
	session_start();
	if (($_POST['nick']!="") && ($_POST['email']!="") && ($_POST['haslo']!="") && ($_POST['haslo2']!="")) {
		$wszystko_OK=true;
		$komunikat="";
		$nick= $_POST['nick'];
		if (strlen($nick)>20)
		{
			$wszystko_OK=false;	
			$komunikat.="<li>Nazwa użytkownika nie może być dłuższa niż 20 znaków</li>";
			
		}
		if(ctype_alnum($nick)==false)
		{
			$wszystko_OK=false;
			$komunikat.="<li>Nazwa użytkownika może składać sie tylko z liter i cyfr(bez polskich znaków)</li>";
		}
		$email=$_POST['email'];
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$wszystko_OK=false;
			$komunikat.="<li>Wprowadź poprawny email</li>";
		}
		$haslo1 =$_POST['haslo'];
		$haslo2 =$_POST['haslo2'];
		if(strlen($haslo1)<8 || (strlen($haslo1)>26))
		{
			$wszystko_OK=false;
			$komunikat.="<li>Hasło musi posiadać od 8 do 26 znaków</li>";
		}
		if($haslo1!=$haslo2)
		{
			$wszystko_OK=false;
			$komunikat.="<li>Hasła nie są identyczne</li>";
		}
		if($wszystko_OK==false) {
			$_SESSION['error']=$komunikat;
			header('Location: rejestracja.php');
		}
		else{
			echo "sukces";
		}
	}
	else{
		$komunikat.="<li>Wypełnij wszystkie pola</li>";
		$_SESSION['error']=$komunikat;
		header('Location: rejestracja.php');
	}
?>