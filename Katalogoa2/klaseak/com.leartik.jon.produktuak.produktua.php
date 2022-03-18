<?php

namespace com\leartik\jon\produktuak; 

class Produktua
{
		private $id; 
		private $izenburua; 
		private $mota; 
		private $prezioa; 
		private $deskribapena; 
		private $talla; 
		private $stock; 
		
		public function __construct()
		{
		}
		
		public function setId($id)
		{
				$this->id = $id; 
		}

		public function getId()
		{
				return $this->id; 
		}		
		
		public function setIzenburua($izenburua)
		{
				$this->izenburua = $izenburua; 
		}

		public function getIzenburua()
		{
				return $this->izenburua; 
		}	

		public function setMota($mota)
		{
				$this->mota = $mota; 
		}

		public function getMota()
		{
				return $this->mota; 
		}	

		public function setPrezioa($prezioa)
		{
				$this->prezioa = $prezioa; 
		}

		public function getPrezioa()
		{
				return $this->prezioa; 
		}
		public function setDeskribapena($deskribapena)
		{
				$this->deskribapena = $deskribapena; 
		}

		public function getDeskribapena()
		{
				return $this->deskribapena; 
		}	
		public function setTalla($talla)
		{
				$this->talla = $talla; 
		}

		public function getTalla()
		{
				return $this->talla; 
		}	
		public function setStock($stock)
		{
				$this->stock = $stock; 
		}

		public function getStock()
		{
				return $this->stock; 
		}			
}
?>		