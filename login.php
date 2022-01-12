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

$nombre = $_POST["user"];
$pass = $_POST["pass"];

$query = mysqli_query($conn,"SELECT * FROM usuarios WHERE usuario = '".$nombre."' and password = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
    header('location: Gensolicitud.html');
}
else if ($nr == 0) 
{
	
	//echo "<script> alert('Error');window.location= 'index.html' </script>";
    echo "No ingresó";
}
	

?>