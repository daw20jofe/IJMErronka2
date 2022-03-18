
<DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="images/fontello-a540fdbf/css/fontello.css">
<link rel="stylesheet" href="css/admin.css">
<script src="https://kit.fontawesome.com/02acaa8270.js" crossorigin="anonymous"></script>
	<link rel="shortcut icon" href="favicon.ico">
  <header>
    <div class="sijura">
    <nav>

	  <a id="marjinauk" href="index.html"><i class="fas fa-angle-double-left" style='font-size:20px'></i></a>

			</nav>
      <br>
			<div id="imagesisisisi">
					<a href="index.html"><img src="images/logo.png" style="width: 20%;" ></a>
				</div>
      <div class="juuura">
    </div>
    </div>
		</header>

        <meta htto-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>

    <div id="pieitxpi">
    <?php 

// administrazio gunean sartzeko baldintzak egiaztatu
$admin = false; 

if(isset($_POST['sartu'])) {

    if  ($_POST['erabiltzailea'] == "jim" && $_POST['pasahitza'] == "jim") {
        $admin = true; 

        //erabiltzailea izeneko kookie-a sortu, bere balioa admin eta bere iraupena egun bat
        setcookie("erabiltzailea", "jim", time()+86400);

        }

        } else if (isset($_COOKIE['erabiltzailea']) && $_COOKIE['erabiltzailea'] == "jim") {
        $admin = true;
        }

        //administrazioa baimenduta bada albisteen zerrenda ikusi, bestela hasierako formularioa

        if ($admin == true) {


         include('select_produktuak.html');


        } else {
            if (isset($_POST['sartu'])) {
            $mezua = "Datuak ez dira zuzenak";
            } else {
            $mezua = "";
         }
   
        include('login.php'); 

         ?>

<?php } ?>

        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br>
    </body>
<html>