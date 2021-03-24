
<?php
	$con = mysqli_connect('127.0.0.1','root','','travel agency'); 
	if (!$con) 
	{
		echo 'Pas connecté au serveur'; 
	}
	
	if(!mysqli_select_db($con,'travel agency'))
	{
		echo "Base de donnée non selectionnée";
	}

	$nom = $_POST['nom'];
	$email = $_POST['email']; 
	
	$sql = "INSERT INTO contact (nom,email) VALUES ('$nom','$email')";

	if(!mysqli_query($con,$sql))
	{

		echo 'Une erreur vient de se produire'; 
	}
	else 
	{
		echo 'Vos données ont bien été enregistrées !'; 
	}

	header("refresh:2; url=index.html"); 
?>
		