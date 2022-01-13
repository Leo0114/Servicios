<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "servicios";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) 
{
	die("No hay conexión: ".mysqli_connect_error());
}

$nombre = $_POST["usser"];
$pass = $_POST["pass"];

$query = mysqli_query($conn,"SELECT * FROM usuarios WHERE us_usuario  = '".$nombre."' and us_contraseña = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{

    header('location: Gensolicitud.html');
}
else if ($nr == 0) 
{
	
	echo "<script> alert('Usuario No valido');window.location= 'index.html' </script>";
}


?>