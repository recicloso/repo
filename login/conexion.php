<?php
$dbhost ="localhost"; //el nombre del hosting o servidor
$dbuser = "root";    //segun hosting
$dbpass = "";       //si contratas un hosting te dan la clave
$dbname = "testrecicloso";

$conn = mysqli_connect ($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn)
{
    die ("No hay conexión bebe:".mysqli_connect_error());
}

?>