<?php 

$server = "localhost";
$user = "denda";
$pass = "denda";
$bd = "denda";
$conexion = mysqli_connect($server, $user, $pass,$bd) 
or die("Ha sucedido un error inexperado en la conexion de la base de datos");

$id = $_GET['id'];
$registros=mysqli_query($conexion,"SELECT * FROM produktuak where id=$id")
    or die("Problemas en el select".mysqli_error($conexion));
if ($reg=mysqli_fetch_array($registros))
{
  $vec[]=$reg;
  echo json_encode($vec);
}
else{
    $vec = '';
    echo json_encode($vec);
}

$close = mysqli_close($conexion)
?>
