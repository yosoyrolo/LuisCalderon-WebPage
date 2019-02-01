<?php  

$link = 'mysql:host=localhost;dbname=LuisCalderon';
$user = 'root';
$pass = 'root';

try {
	$pdo = new PDO($link,$user,$pass);
} 
catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}