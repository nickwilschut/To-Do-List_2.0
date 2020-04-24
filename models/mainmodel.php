<?php

function loadAll($table) {
	$servername = "localhost";
	$username = "root";
	$password = "mysql";
	$dbname = "ToDoList";
	try {
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $stmt = $conn->prepare("SELECT * FROM users"); 

	    $stmt->execute();

	    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
	}

	catch(PDOException $e) {
	    echo "Error: " . $e->getMessage();
	}
	$conn = null;
}

?>