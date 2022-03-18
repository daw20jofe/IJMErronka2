<?php 

$server = "localhost";
$user = "denda";
$pass = "denda";
$bd = "denda";
$conexion = mysqli_connect($server, $user, $pass,$bd) 
or die("Ha sucedido un error inexperado en la conexion de la base de datos");

$id_bezeroak = $_GET['id_bezeroak'];
$registros=mysqli_query($conexion,"DELETE FROM bezeroak where id_bezeroak=$id_bezeroak")
    or die("Problemas en el select".mysqli_error($conexion));
echo $registros
?>
