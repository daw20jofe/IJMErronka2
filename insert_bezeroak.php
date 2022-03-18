<?php


    $nan = $_GET['nan'];
    $izena = $_GET['izena'];
    $abizena = $_GET['abizena'];
    $helbidea = $_GET['helbidea'];
    $herria = $_GET['herria'];
    $posta_kodea = $_GET['posta_kodea'];
    $probintzia = $_GET['probintzia'];
    $emaila  = $_GET['emaila'];
    $pasahitza  = $_GET['pasahitza'];
    
  

    $server = "localhost";
    $user = "denda";
    $pass = "denda";
    $bd = "denda";

    $conexion = mysqli_connect($server, $user, $pass,$bd)

    or die("Ha sucedido un error inexperado en la conexion de la base de datos");

    $registros=mysqli_query($conexion,"INSERT INTO bezeroak (nan,izena,abizena,helbidea,herria,posta_kodea,probintzia,emaila,pasahitza ) VALUES ('$nan','$izena','$abizena','$helbidea','$herria','$posta_kodea','$probintzia','$emaila','$pasahitza')")

    or die("Problemas en el insert".mysqli_error($conexion));

    echo $registros;

?>