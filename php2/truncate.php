<?php
$servername = "localhost";
$username = "denda";
$password = "denda";
$dbname = "denda";


$conn = mysqli_connect($servername, $username, $password,$dbname)

or die("Ha sucedido un error inexperado en la conexion de la base de datos");

$sql=mysqli_query($conn,"TRUNCATE TABLE saskia")

or die("Problemas en el insert".mysqli_error($conn));


?>
<html><DOCTYPE html>
    <html>
        <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../images/fontello-a540fdbf/css/fontello.css">
    <link rel="stylesheet" href="../css/produktua.css">
    <script src="https://kit.fontawesome.com/02acaa8270.js" crossorigin="anonymous"></script>
        <link rel="shortcut icon" href="favicon.ico">
      <style>
          div p{
                font-family: 'Nunito', sans-serif;
        text-transform:uppercase;
        line-height: 40px;
        font-weight: 900;
        font-size:15px;
        text-decoration:none;
            }
            table{
          width: 100%;
      }
      table, th, td {
          
        font-family: 'Nunito', sans-serif;
        text-transform:uppercase;
        line-height: 40px;
        font-weight: 900;
        font-size:15px;
        text-decoration:none;
  border: 1px solid rgba(255, 255, 255, 0.404);
  border-collapse: collapse;
  color: white;
  text-align: center;
}
th, td {
  background-color: rgba(0, 0, 0, 0.466);
  padding-left: 25px;
  padding-right: 25px;
  font-size: 19px;
  text-align: center;
}
      </style>
        <header>
        <div class="sijura">
        <nav>
    
          <a id="marjinauk" href="../php2/index.php"><i class="fas fa-shopping-cart" style='font-size:20px'></i></a>
          <a id="marjinauk" href="../admin.php"><i class="fas fa-user" style='font-size:20px'></i></a>
          <a id="marjinauk" href="../insert_bezeroak.html"><i class="fas fa-user-plus" style='font-size:20px'></i></a>
    
                </nav>
          <br>
                <div id="imagesisisisi">
                        <a href="../index.html"><img src="../images/logo.png" style="width: 20%;" ></a>
                    </div>
          <div class="juuura">
                <nav>
                <a id="bestik" href="../index.html">Hasiera</a>
                <a id="bestik" href="index.php">Katalogoa</a>
                </nav>
        </div>
        </div>
            </header>
    
            <title>Produktuak</title>
            <meta htto-equiv="Content-Type" content="text/html; charset=UTF-8">
        </head>
        <body>
        <div id="pieitxpi" style=" color: white; text-align: center;">
    <p style="text-align: center; font-size: 50px">Eskaria ondo egin da<p>
</div>
           </body>
        
    <html>
   