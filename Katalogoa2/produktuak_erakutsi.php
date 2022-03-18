<DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="../images/fontello-a540fdbf/css/fontello.css">
<link rel="stylesheet" href="../css/produktua.css">
<script src="https://kit.fontawesome.com/02acaa8270.js" crossorigin="anonymous"></script>
	<link rel="shortcut icon" href="favicon.ico">
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
    <?php
//Columns must be a factor of 12 (1,2,3,4,6,12)
$numOfCols = 4;
$rowCount = 0;
$bootstrapColWidth = 12 / $numOfCols;
?>

<div id="pieitxpi" class="row" >
        <?php 
        foreach ($produktuak as $produktua) { 
        ?>
            <div class="col-md-<?php echo $bootstrapColWidth; ?>  p-4 mb-4 text-center ">
            <img src="img/<?php echo $produktua->getId() ?>.jpg" style="max-width: 250px">
            <a style="background-color: black;border: 5px solid black; padding: 5px;color: white;font-family: 'Nunito', sans-serif;text-transform:uppercase;line-height: 40px;font-weight: 900;font-size:15px;text-decoration:none;" href="./?id=<?php echo $produktua->getId() ?>"style="text-decoration: none; color: black;"> <?php echo $produktua->getIzenburua() ?></a></dt>
            <br><a style="color: white; font-family: 'Nunito', sans-serif;text-transform:uppercase;line-height: 40px;font-weight: 900;font-size:20px;text-decoration:none;"><?php  echo $produktua->getPrezioa() ?> &euro;</a>  
            </div>
        <?php 
        
        $rowCount++;
    if($rowCount % $numOfCols == 0) echo '</div><div class="row">';
        
        }
        ?>
        </div>
    </div>
    </body>
    <footer id="footer" role="contentinfo" style="clear:right">
			<div class="container-fluid">
				<div class="footer-content">
					<div class="copyright"><small>&copy; 2022 Present. Eskubide guztiak erreserbatuak. </small></div>
					<div class="social">
						<a href="#"><i class="fab fa-facebook"></i></a>
						<a href="#"><i class="fab fa-instagram"></i></a>
						<a href="#"><i class="fab fa-twitter"></i></a>
					</div>
				</div>
			</div>
		</footer>
<html>