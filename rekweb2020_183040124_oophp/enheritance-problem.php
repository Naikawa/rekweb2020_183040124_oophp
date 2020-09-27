<?php


class Product
{
	public $judul,
			$penulis,
			$penerbit,
			$harga,
			$jmlHalaman,
			$waktuMain,
			$tipe;

public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe = "tipe"){
	$this->judul = $judul;
	$this->penulis = $penulis;
	$this->penerbit = $penerbit;
	$this->harga = $harga;
	$this->jmlHalaman = $jmlHalaman;
	$this->waktuMain = $waktuMain;
	$this->tipe = $tipe;
}

public function getLabel(){
	return "$this->penulis, $this->penerbit";
}

public function getInfoLengkap(){
	$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
	if($this->tipe == "Komik"){
		$str .= "- {$this->jmlHalaman} Halaman.";
	} else if($this->tipe == "Game"){
		$str .= "- {$this->waktuMain} Jam.";
	}

	return $str;
}
}


class Komik extends Product{
	
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


$product1 = new Product("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");



$product2 = new Product("Uncharted","Neil Druckmann", "Sony Computer", 250000, 0, 50, "Game");


echo $product1->getInfoLengkap();
echo "<br>";
echo $product2->getInfoLengkap();