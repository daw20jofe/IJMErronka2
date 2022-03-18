<?php
$servername = "localhost";
$username = "denda";
$password = "denda";
$dbname = "denda";

$id_produktuak = $_GET['id_produktuak'];
    $izenburua = $_GET['izenburua'];
    $prezioa = $_GET['prezioa'];
    $kopurua  = $_GET['kopurua'];
    $guztira = $_GET['guztira'];
    $nan = $_GET['nan'];
    
 



    $conn = mysqli_connect($servername, $username, $password,$dbname)

    or die("Ha sucedido un error inexperado en la conexion de la base de datos");

$sql=mysqli_query($conn,"INSERT INTO saskia (id_produktuak,izenburua,prezioa,kopurua,guztira,nan) VALUES ('$id_produktuak','$izenburua','$prezioa','$kopurua','$guztira','$nan')")


or die("Problemas en el insert".mysqli_error($conn));

echo $sql;
?>