<?php 
require 'config.php';

if ($query = $pdo->prepare("DELETE FROM users WHERE id = ?")) {
	$query->bindValue(1, 4, PDO::PARAM_INT);
	if ($query->execute()) {
		echo "Delete Item has been done";
	}
}