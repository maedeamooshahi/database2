<?php
    $user = "root";
	$pass = "";
    $pass = "";

	try{
		$databaseconnect = new PDO( "mysql:host=localhost;dbname=adb_ex1" , $user , $pass );
		$databaseconnect->exec("set names utf8");
	}
	catch(PDOException $e){
		header("Location: khata.php");
	}
    try{
	$databaseconnect = new PDO( "mysql:host=localhost;dbname=adb_ex2" , $user , $pass );
	$databaseconnect->exec("set names utf8");
    }
    catch(PDOException $e){
	header("Location: khta.php");
    }
?>