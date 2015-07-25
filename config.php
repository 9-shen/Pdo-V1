<?php 	

try {
	$pdo = new PDO('mysql:host=localhost;dbname=pdo', 'root', '');
	//echo "Connected";
} catch (PDOException $e) {
	die($e->getMessage());
}