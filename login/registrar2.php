<?php

include ("conexion.php");

$nombre =$_POST["txtusuario"];
$pass = $_POST["txtpassword"];

//registrar
$queryusuario 	= mysqli_query($conn,"SELECT * FROM 'login' WHERE usuario = '$nombre'AND password = '$pass'");
$nr 			= mysqli_num_rows($queryusuario); 

if ($nr == 0)
{
	$queryregistrar = "INSERT INTO login(usuario,pass) values (".$nombre.",".$pass.")";
	
if(mysqli_query($conn,$queryregistrar))
{
	echo "<script> alert('Yeee... registro perfecto!, bienvenido: $nombre');window.location= 'repositorio.html' </script>";
}
else 
{
	echo "Error: " .$queryregistrar."<br>".mysql_error($conn);
}
}
?>




