<?php 

require_once 'app/Init.php';

// $product1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
// $product2 = new Game("Uncharted","Neil Druckmann", "Sony Computer", 250000, 50 );

// $cetakProduct = new CetakInfoProduct();
// $cetakProduct->tambahProduct($product1);
// $cetakProduct->tambahProduct($product2);

// echo $cetakProduct->cetak();


// echo "<hr>";

use app\Service\User as ServiceUser;
use app\product\User as ProductUser;

new ServiceUser();
echo "<br>";
new ProductUser();
