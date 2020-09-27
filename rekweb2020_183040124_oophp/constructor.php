<?php


class Product
{
	public $judul = "judul",
			$penulis = "penulis",
			$penerbit = "penerbit",
			$harga;

public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
	$this->judul = $judul;
	$this->penulis = $penulis;
	$this->penerbit = $penerbit;
	$this->harga = $harga;
}

public function getLabel(){
	return "$this->penulis, $this->penerbit";
}

}

// $product1 = new Product();
// $product1->judul = "Naruto";

// var_dump($product1); 

// $product2 = new Product();
// $product2->judul = "Uncharted";
// $product2->tambah = "hahaha";
// var_dump($product2);


$product1 = new Product("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);



$product2 = new Product("Uncharted","Neil Druckmann", "Sony Computer", 250000);



echo "Komik : ". $product1->getLabel();
echo"<br>";
echo "Game : " . $product2->getLabel();
echo "<br>";
