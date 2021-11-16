<?php
    $user = "root";
    $pass = "";

    try{
	$databaseconnect = new PDO( "mysql:host=localhost;dbname=phpmyadmin" , $user , $pass );
	$databaseconnect->exec("set names utf8");
    }
    catch(PDOException $e){
	header("Location: khata.php");
    }
?>
