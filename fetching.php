<?php 
require 'config.php';

$query = $pdo->query("SELECT * FROM users");

// fetch assoc
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
	echo $row['id']."<br>";
	echo $row['full_name']."<br>";
	echo $row['username']."<br>";
}


// fetch both
while ($row = $query->fetch(PDO::FETCH_BOTH)) {
	echo $row['id']."<br>";
	echo $row['full_name']."<br>";
	echo $row['username']."<br>";
}

// fetch lazy
while ($row = $query->fetch(PDO::FETCH_LAZY)) {
	echo $row->id."<br>";
	echo $row->full_name."<br>";
	echo $row->username."<br>";
}

// fetch BOJ
while ($row = $query->fetch(PDO::FETCH_OBJ)) {
	echo $row->id."<br>";
	echo $row->full_name."<br>";
	echo $row->username."<br>";
}

// fetch All Working only with Foreach
foreach ($query->fetchAll(PDO::FETCH_OBJ) as $row) {
    echo $row->id."<br>";
	echo $row->full_name."<br>";
	echo $row->username."<br>";
}