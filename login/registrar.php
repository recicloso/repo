<?php

include ("conexion.php");

$nombre =$_POST["txtusuario"];
$pass = $_POST["txtpassword"];
$mail =$_POST["txtmail"];
$phone = $_POST["txtphone"];


//registrar
if(isset($_POST["loginexitoso"]));
{
		$sqlgrabar = "INSERT INTO login(usuario,password,mail,phone) values(".$nombre.",".$pass.",".$mail.",".$phone.")";

		if(mysqli_query($conn,$sqlgrabar));
		{
			echo "<script> alert('Yeee... registro perfecto!, bienvenido: $nombre'); window.location='repositorio.html'</script>";
		}
		if ($nr == 0)
		{
			echo "Error: ".$sql."<br>".mysql_error($conn);
		}
}

?>