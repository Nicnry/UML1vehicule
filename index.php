<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors','On');

function __autoload($class_name) {
	require_once 'classes/'.$class_name.'.class.php';
}
?>

<!DOCTYPE html>

<html>

<head>

<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<title>Classes</title>

</head>

<body>

<div>

<?php

try{

$mavoiture = new Voiture("audi","grise");
echo "<br>";
echo $mavoiture->marque;
echo "<br>";
echo $mavoiture;
}
catch(Exception $e){
	die($e->getMessage());
}
?>

</div>

</body>
</html>
