<?php

    $izenburua = $_GET['izenburua'];
    $mota = $_GET['mota'];
    $prezioa = $_GET['prezioa'];
    $deskribapena  = $_GET['deskribapena'];
    $talla = $_GET['talla'];
    $stock  = $_GET['stock'];
    
  

    $server = "localhost";
    $user = "denda";
    $pass = "denda";
    $bd = "denda";

    $conexion = mysqli_connect($server, $user, $pass,$bd)

    or die("Ha sucedido un error inexperado en la conexion de la base de datos");

    $registros=mysqli_query($conexion,"INSERT INTO produktuak (izenburua,mota,prezioa,deskribapena,talla,stock ) VALUES ('$izenburua','$mota','$prezioa','$deskribapena','$talla','$stock')")

    or die("Problemas en el insert".mysqli_error($conexion));

    echo $registros;

?>