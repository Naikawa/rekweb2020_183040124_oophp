<?php 


// require_once 'product/InfoProduct.php';
// require_once 'product/Product.php';
// require_once 'product/Komik.php';
// require_once 'product/Game.php';
// require_once 'product/CetakInfoProduct.php';



spl_autoload_register(function($class){
	require_once __DIR__ .'/Product/' . $class . '.php';
});