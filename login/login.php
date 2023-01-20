<?php

include ("conexion.php");

$nombre =$_POST["txtusuario"];
$pass = $_POST["txtpassword"];


//login
if(isset($_POST["entroentro"]))
{
	$query = mysqli_query($conn,"SELECT * FROM login WHERE usuario = '$nombre' and password = '$pass'");
	$nr = mysqli_num_rows ($query);

	if($nr == 1)
	{
        echo "<script> alert('Bienvenido al mundo recicloso: $nombre'); window.location='https://www.instagram.com/recicloso/'</script>";
	}
	else if ($nr == 0)
	{
		echo "<script> alert('Usuario no existe en universo recicloso :( '); window.location='repositorio.html'</script>";
	}
}


//registrar
if(isset($_POST["loginexitoso"]))
{
	$querygrabar = "INSERT INTO login(usuario,password) values ('$nombre','$pass')";
	
		if(mysqli_query($conn,$querygrabar))
		{
			echo "<script> alert('Yeee... registro perfecto!, bienvenido: $nombre');window.location= 'repositorio.html' </script>";
		}	
		else 
		{
			echo "Error: " .$querygrabar."<br>".mysql_error($conn);
		}
}

?>