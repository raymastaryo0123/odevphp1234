<?php 

try {

	//$db=new PDO("mysql:host=localhost;dbname=odev;charset=utf8",'root');
    $db=new PDO("mysql:host=remotemysql.com;dbname=uplLC4YwYx;charset=utf8",'uplLC4YwYx','5dJPF6VsTH');

} catch (PDOExpception $e) {

	echo $e->getMessage();
}


?>
