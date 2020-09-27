<?php 


// require_once 'product/InfoProduct.php';
// require_once 'product/Product.php';
// require_once 'product/Komik.php';
// require_once 'product/Game.php';
// require_once 'product/CetakInfoProduct.php';
// require_once 'product/User.php';
// require_once 'Service/User.php';



spl_autoload_register(function($class){
	$class = explode('\\', $class);
	$class = end($class);
	require_once __DIR__ .'/product/' . $class . '.php';
});

spl_autoload_register(function($class){
	$class = explode('\\', $class);
	$class = end($class);
	require_once __DIR__ .'/Service/' . $class . '.php';
});