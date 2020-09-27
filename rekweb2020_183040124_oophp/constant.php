<?php 	

// define('NAMA', 'Reyhan Rasyid');

// echo NAMA;

// echo"<br>";

// const UMUR =32;
// echo UMUR; 



class Coba{
	const NAMA = 'Reyhan';
}
echo "<br>";
echo Coba::NAMA;

echo "<br>";
echo __LINE__;

echo "<br>";
echo __FILE__;


echo "<br>";
function coba(){
		return __FUNCTION__;
}

echo coba();


class test {
		public $kelas=__CLASS__;
}

echo "<br>";
$obj = new test;
echo $obj->kelas;



 ?>

