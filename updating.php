<?php 
require 'config.php';

if ($query = $pdo->prepare("UPDATE users SET full_name = ? WHERE id = ?")) {
	$query->bindValue(1, 'IQ CODEs', PDO::PARAM_STR);
	$query->bindValue(2, 2, PDO::PARAM_STR);
	if ($query->execute()) {
		echo "Updated Has Been Set";
	}
}
