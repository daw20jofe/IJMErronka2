<?php 

$server = "localhost";
$user = "denda";
$pass = "denda";
$bd = "denda";

$conexion = mysqli_connect($server, $user, $pass,$bd) 
or die("Ha sucedido un error inexperado en la conexion de la base de datos");

//$id = $_GET['id'];

$registros=mysqli_query($conexion,"SELECT * FROM produktuak")

    or die("Problemas en el select".mysqli_error($conexion));

$filmak = Array();
while ($reg=mysqli_fetch_array($registros)){
  $id = $reg['id'];
  $izenburua = $reg['izenburua'];
  $mota = $reg['mota'];
  $prezioa = $reg['prezioa'];
  $deskribapena = $reg['deskribapena'];
  $talla = $reg['talla'];
  $stock = $reg['stock'];

  $vec[]=array('id'=>$id,'izenburua'=>$izenburua,'mota'=>$mota,'prezioa'=>$prezioa,'deskribapena'=>$deskribapena,'talla'=>$talla,'stock'=>$stock);
  
  
}
echo json_encode($vec);
$close = mysqli_close($conexion)
?>