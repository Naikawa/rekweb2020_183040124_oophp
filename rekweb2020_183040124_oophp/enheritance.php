<?php


class Product
{
	public $judul,
			$penulis,
			$penerbit,
			$harga,
			$jmlHalaman,
			$waktuMain;

public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0){
	$this->judul = $judul;
	$this->penulis = $penulis;
	$this->penerbit = $penerbit;
	$this->harga = $harga;
	$this->jmlHalaman = $jmlHalaman;
	$this->waktuMain = $waktuMain;
}

public function getLabel(){
	return "$this->penulis, $this->penerbit";
}

public function getInfoProduct(){
	$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
	return $str;
}
}


class Komik extends Product{
		public function getInfoProduct(){
			$str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
			return $str;
		}
}



class Game extends Product{
		public function getInfoProduct(){
			$str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktuMain} Jam.";
			return $str;
		}
}


class CetakInfoProduct
{
	
	public function cetak( Product $product ){
			$str = "{$product->judul} | {$product->getLabel()} (Rp. {product->harga})";
			return $str;
	}
}

// $product1 = new Product();
// $product1->judul = "Naruto";

// var_dump($product1); 

// $product2 = new Product();
// $product2->judul = "Uncharted";
// $product2->tambah = "hahaha";
// var_dump($product2);


$product1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0 );



$product2 = new Game("Uncharted","Neil Druckmann", "Sony Computer", 250000, 0, 50 );


echo $product1->getInfoProduct();
echo "<br>";
echo $product2->getInfoProduct();