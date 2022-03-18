<?php
$servername = "localhost";
$username = "denda";
$password = "denda";
$dbname = "denda";

$conexion = mysqli_connect($servername, $username, $password,$dbname) 
or die("Ha sucedido un error inexperado en la conexion de la base de datos");

        $nan = $_GET['nan'];
        $registros=mysqli_query($conexion,"select a.nan, a.izena, a.abizena, a.helbidea, a.herria,a.posta_kodea, a.probintzia, a.emaila, b.id_produktuak, b.izenburua, b.prezioa, b.kopurua, b.guztira from bezeroak a,saskia b where a.nan = b.nan and a.nan='$nan'")
        or die("Problemas en el select".mysqli_error($conexion));       
        //$erregistroa = $erregistroak->fetch();
        $saskia = Array(); 
        while ($reg=mysqli_fetch_array($registros)){

            $nan = $reg['nan'];
            $izena = $reg['izena'];
            $abizena = $reg['abizena'];
            $helbidea = $reg['helbidea'];
            $herria = $reg['herria'];
            $posta_kodea = $reg['posta_kodea'];
            $probintzia = $reg['probintzia'];
            $emaila = $reg['emaila'];
            $id_produktuak = $reg['id_produktuak'];
            $izenburua = $reg['izenburua'];
            $prezioa = $reg['prezioa'];
            $kopurua = $reg['kopurua'];
            $guztira = $reg['guztira'];
          
            $vec[]=array('nan'=>$nan,'izena'=>$izena,'abizena'=>$abizena,'helbidea'=>$helbidea,'herria'=>$herria,'posta_kodea'=>$posta_kodea,'probintzia'=>$probintzia,'emaila'=>$emaila,'id_produktuak'=>$id_produktuak,'izenburua'=>$izenburua,'prezioa'=>$prezioa,'kopurua'=>$kopurua,'guztira'=>$guztira);
            
            
          }
          echo json_encode($vec);
          $close = mysqli_close($conexion)
          ?>