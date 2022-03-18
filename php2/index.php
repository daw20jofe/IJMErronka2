 <?php   
 session_start();  
 $connect = mysqli_connect("localhost", "denda", "denda", "denda");  
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'=>$_GET["id"],  
                     'item_produktu_izena'=>$_POST["izenburua"],   
                     'item_prezioa'=>$_POST["prezioa"],  
                     'item_kantitatea'=>$_POST["kopurua"] 
                    /* 'item_nan'=>$_POST["nan"] */
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Produktua dagoeneko gehitua!")</script>';  
                echo '<script>window.location="index.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'=>$_GET["id"],  
                'item_produktu_izena'=>$_POST["izenburua"],  
                'item_prezioa'=>$_POST["prezioa"],  
                'item_kantitatea'=>$_POST["kopurua"]
                /*'item_nan'=>$_POST["nan"] */
           ); 
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                       
                }  
           }  
      }  
 }  
 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Saskia</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<script src="https://kit.fontawesome.com/02acaa8270.js" crossorigin="anonymous"></script>
	<link rel="shortcut icon" href="favicon.ico">
      </head>
      <style>
body{
  background-image: url("../images/guri.jpg");
  font-family: 'Nunito', sans-serif;
}

nav{
  width: 100%;
  top:170px;
  color: white;
}

nav a{
  font-family: 'Nunito', sans-serif;
  text-transform:uppercase;
  line-height: 40px;
  font-weight: 900;
  font-size:25px;
  margin:0 15px;
  text-decoration:none;
  color:#000000;
  position:relative;
  display:inline-block;
  color: white;
   
}
nav a:before{
  content:'';
  position: absolute;
  width: 100%;
  height: 4px;
  background:#16151b;
  color:#000000;
  top:47%;
  animation:out 0.2s cubic-bezier(1, 0, 0.58, 0.97) 1 both;
  color: white;
}
nav a:hover:before{
  animation:in 0.2s cubic-bezier(1, 0, 0.58, 0.97) 1 both;
  color: white;
}

#marjinauk{
  float: right;
  border: 1px solid black;
  border-radius:50% ;
  padding-left: 12px;
  padding-right: 13px;
  padding-bottom: 5px;
  padding-top: 3px;
  margin-top: 5px;
  background-color: rgba(110, 110, 110, 0.541);
  color: white;
}

#marjinauk:hover{
  background-color: rgba(0, 0, 0, 0.151);
  border: 1px solid rgba(0, 0, 0, 0.151);
}

@keyframes in{
  0%{
    width: 0;
    left:0;
    right:auto;
  }
  100%{
    left:0;
    right:auto;
    width: 100%;
  }
}
@keyframes out{
  0%{
    width:100%;
    left: auto;
    right: 0;
  }
  100%{
    width: 0;
    left: auto;
    right: 0;
  }
}
@keyframes show{
  0%{
    opacity:0;
    transform:translateY(-10px);
  }
  100%{
    opacity:1;
    transform:translateY(0);
  }
}

#imagesisisisi{
	margin-top: 3%;
	margin-bottom: 2%;
	text-align: center;
}

.sijura{
  height: 100%;
}

.juuura{
  background-color: white;
  background-size: 100%;
  padding-left: 15px;
  margin-left: -15px;
  width: 1278px;
  color: black;
  text-align: center;
  text-decoration:none;
}
.juuura a{
  color: black;
}
table{
     background:white;
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
      <body> 
      <script>
          
          function gorde() {

               var nan = document.getElementById("nan").value;
          if(nan == ""){

               document.getElementById("informazioa").innerHTML="Nan-a sartu behar duzu";
               return;
          }

         var xhr = new XMLHttpRequest(); 
         var id_produktuak = document.getElementById("id_produktuak").value;
         var izenburua = document.getElementById("izenburua").value;
         var prezioa = document.getElementById("prezioa").value;
         var kopurua = document.getElementById("kopurua").value;
         var guztira = document.getElementById("guztira").value;
         var nan = document.getElementById("nan").value;
         xhr.onreadystatechange = function(){
              if (xhr.readyState == 4 && xhr.status == 200)
              {

              document.getElementById("texto").innerHTML = xhr.responseText;
              }
         }  
          xhr.open("GET", "saskia.php?id_produktuak="+id_produktuak+"&izenburua="+izenburua+"&prezioa="+prezioa+"&kopurua="+kopurua+"&guztira="+guztira+"&nan="+nan, true);
              xhr.send();
         }

     </script> 
           <div class="container" style="width:700px; margin-top:25px;">  
                <?php  
                $query = "SELECT * FROM produktuak ORDER BY id ASC";  
                $result = mysqli_query( $connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
                <div class="col-md-4">  
                     <form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">  
                               <img src="img/<?php echo $row["id"]; ?>.jpg" class="img-responsive" /><br />  
                               <h4 class="text-info"><?php echo $row["izenburua"]; ?></h4>  
                               <h4 class="text-danger"><?php echo $row["prezioa"]; ?>€</h4>  
                               <input type="number" name="kopurua" class="form-control" value="1" style="width:80px;"/>  
                               <input type="hidden" name="izenburua" value="<?php echo $row["izenburua"]; ?>" />  
                               <input type="hidden" name="prezioa" value="<?php echo $row["prezioa"]; ?>" />  
                               <input type="submit" name="add_to_cart" style="margin-top:15px;"  value="Gehitu" />  
                          </div> 
                        
                       
                     </form>  
                </div>  
                
                <?php  
                     }  
                }  
                ?>  
               <h1 style="color:white;">Sartu zure nan zenbakia</h1>
                <input type="text" placeholder="Idatzi hemen..." style="width:135px; text-align: center;border-radius: 5px;" name="nan" id="nan"> 
                <div style="clear:both">
               </div>
                <br/>  
                <h3>Xehetasunak</h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                              <th width="10%">Id-a</th>  
                               <th width="20%">Produktuaren Izena</th>  
                               <th width="10%">Kopurua</th>  
                               <th width="10%">Prezioa</th>  
                               <th width="10%">Totala</th>  
                               <th width="5%">Ezabatu</th>  
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  

                          <tr>  
                              <td><input style="border:none;"  size="5" id="id_produktuak" name="id_produktuak" value="<?php echo $values["item_id"]; ?>"></td>  
                               <td><input style="border:none;" size="5"  id="izenburua" name="izenburua" value="<?php echo $values["item_produktu_izena"]; ?>"></td>  
                               <td><input style="border:none;" size="5" id="kopurua" name="kopurua" value="<?php echo $values["item_kantitatea"]; ?>"></td>  
                               <td><input style="border:none;" size="1" id="prezioa" name="prezioa" value="<?php echo $values["item_prezioa"]; ?>">€</td>  
                               <td><input style="border:none;"  size="1"  id="guztira" name="guztira" value="<?php echo number_format($values["item_kantitatea"] * $values["item_prezioa"], 2); ?>">€</td>  
                               <td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Ezabatu</span></a></td>
                              
                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_kantitatea"] * $values["item_prezioa"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right"><input style="border:none;"  size="5" id="totala" name="totala" value="<?php echo number_format($total, 2); ?>">€</td>  
                               <td></td>  
                          </tr>  
                          
                          <?php  
                          }  
                          ?>  
                     </table> 

                        
                     <form>
                        <input type="submit" id="Gorde" value="Gorde" onclick="gorde()"/>
                         </form>
               </div>  
           </div>  
           <br/> 
           <div id="informazioa"></id>
           
           <div class="grey"><a href="select_eskaria_eta_bezeroa.html"><button type="button"  class="btn btn-outline-dark p-4 " style="font-size: 15px;">Jarraitu</button></a></div>
          
          
           
      </body>  
 </html>