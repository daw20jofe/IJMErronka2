<?php

namespace com\leartik\jon\produktuak; 

use PDO; 

class ProduktuaDB
{

		public static function selectProduktuak()
		{
				try {
						
						$db = new PDO("mysql:host=localhost;dbname=denda", "denda","denda"); 
						$erregistroak = $db->query("select * from produktuak"); 
						$produktuak = array(); 
						
						while ($erregistroa = $erregistroak->fetch()) {
						
								$produktua = new Produktua(); 
								$produktua->setId($erregistroa['id']); 
								$produktua->setIzenburua($erregistroa['izenburua']);
								$produktua->setMota($erregistroa['mota']);
								$produktua->setPrezioa($erregistroa['prezioa']);
								$produktua->setDeskribapena($erregistroa['deskribapena']);
								$produktua->setTalla($erregistroa['talla']);
								$produktua->setStock($erregistroa['stock']);
								$produktuak[] = $produktua; 

						}
						
						return $produktuak; 
						
					} catch (Exception $e) {

							echo "<p>Salbuespena: " . $e->getMessage() . "</p>\n"; 
							return null; 
					}
			}
			
			public static function selectProduktua($id)
			{
					try {
							
							$db = new PDO("mysql:host=localhost;dbname=denda", "denda","denda"); 
							$erregistroak = $db->query("select * from produktuak where id=" . $id); 
							$produktua = null; 
						
							if ($erregistroa = $erregistroak->fetch()) {
						
								$produktua = new Produktua(); 
								$produktua->setId($erregistroa['id']); 
								$produktua->setIzenburua($erregistroa['izenburua']);
								$produktua->setMota($erregistroa['mota']);
								$produktua->setPrezioa($erregistroa['prezioa']);
								$produktua->setDeskribapena($erregistroa['deskribapena']);
								$produktua->setTalla($erregistroa['talla']);
								$produktua->setStock($erregistroa['stock']);
				
							}
									
							return $produktua; 
							
						} catch (Exception $e) {
						
								echo "<p>Salbuespena: " . $e->getMessage() . "</p>\n"; 
								return null; 
						}
			}
			
			public static function insertProduktua($produktua)
			{
					try {
							
							$db = new PDO("mysql:host=localhost;dbname=denda", "denda","denda"); 
							$sql = "insert into produktuak (izenburua,mota,prezioa,deskribapena,talla,stock) values "; 
							$sql = $sql . "('" . $produktua->getIzenburua() . "'"; 
							$sql = $sql . ",'" . $produktua->getMota() . "'";
							$sql = $sql . ",'" . $produktua->getPrezioa() . "'";
							$sql = $sql . ",'" . $produktua->getDeskribapena() . "'";
							$sql = $sql . ",'" . $produktua->getTalla() . "'";
							$sql = $sql . ",'" . $produktua->getStock() . "')";
							$emaitza = $db->exec($sql); 
							return $emaitza; 
							
							
						} catch (Exception $e) {
						
								echo "<p>Salbuespena: " . $e->getMessage() . "</p>\n"; 
								return 0; 
						}
					}			

			public static function updateProduktua($produktua)
				{
								try {
										
										$db = new PDO("mysql:host=localhost;dbname=denda", "denda","denda"); 
										$sql = "update produktuak set" ; 
										$sql = $sql . " izenburua='" . $produktua->getIzenburua() . "'"; 
										$sql = $sql . ",mota='" . $produktua->getMota() . "'"; 
										$sql = $sql . ",prezioa='" . $produktua->getPrezioa() . "'"; 
										$sql = $sql . ",deskribapena='" . $produktua->getDeskribapena() . "'"; 
										$sql = $sql . ",talla='" . $produktua->getTalla() . "'"; 
										$sql = $sql . ",stock='" . $produktua->getStock() .  "'" ; 
										$sql = $sql . " where id=" . $produktua->getId(); 
										$emaitza = $db->exec($sql); 
										return $emaitza; 
										
										
									} catch (Exception $e) {
									
											echo "<p>Salbuespena: " . $e->getMessage() . "</p>\n"; 
											return 0; 
									}		
						}

						public static function deleteProduktua($produktua)

						{

							try{

								$db = new PDO("mysql:host=localhost;dbname=denda", "denda","denda"); 
								$sql = "delete from produktuak" ;
								$sql = $sql . " where id=" . $produktua->getId();
								$emaitza = $db->exec($sql);
								return $emaitza;

							} catch (Exception $e) {
								echo "<p>Salbuespena: " . $e->getMessage() . "</p>\n";
								return 0;

							}

						}
				}