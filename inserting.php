<?php 
require 'config.php';

// Method #1
$query = $pdo->query("INSERT INTO users(full_name, username, password) VALUES('IQ Dev','Developer','123456')");
if ($query) {
	echo "OK";
}

// Method #2
$query = $pdo->exec("INSERT INTO users(full_name, username, password) VALUES('IQ Dev','Developer','123456')");
if ($query) {
	echo "OK";
}

// Method #3 
$sql = "INSERT INTO users(full_name, username, password) VALUES(:name, :user, :pass)";
$query = $pdo->prepare($sql);
$query->bindValue('name', 'Nouaman', PDO::PARAM_STR);
$query->bindValue('user', 'NouamanB', PDO::PARAM_STR);
$query->bindValue('pass', '123456', PDO::PARAM_INT);

echo ($query->execute()) ? 'ok' : 'error';

// Method #4
$sql = "INSERT INTO users(full_name, username, password) VALUES(?, ?, ?)";
$query = $pdo->prepare($sql);
$query->bindValue('name', 'Nouaman', PDO::PARAM_STR);
$query->bindValue('user', 'NouamanB', PDO::PARAM_STR);
$query->bindValue('pass', '123456', PDO::PARAM_INT);

echo ($query->execute()) ? 'ok' : 'error';