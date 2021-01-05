<?php 

try {

	$db=new PDO("mysql:host=localhost;dbname=odev;charset=utf8",'root');

} catch (PDOExpception $e) {

	echo $e->getMessage();
}


?>