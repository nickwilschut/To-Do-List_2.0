<?php

function loadAll($table) {
	$servername = "localhost";
	$username = "root";
	$password = "mysql";
	$dbname = "ToDoList";
	try {
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $stmt = $conn->prepare("SELECT * FROM $table"); 

	    $stmt->execute();

	    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
	    foreach ($stmt as $row) {
		    //echo $row['name'] . "\n";
		    return $stmt;
		}
	}

	catch(PDOException $e) {
	    echo "Error: " . $e->getMessage();
	}
	$conn = null;
}

?>