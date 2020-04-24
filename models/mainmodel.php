<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "ToDoList";

function loadAll($table) {
	try {
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $stmt = $conn->prepare("SELECT * FROM $table"); 

	    $stmt->execute();

	    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
	}

	catch(PDOException $e) {
	    echo "Error: " . $e->getMessage();
	}
	$conn = null;
}

// Create function
function createUser($data) {
	$servername = "localhost";
	$username = "root";
	$password = "mysql";
	$dbname = "ToDoList";
 
    try {
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    //$sql = "INSERT INTO users (Name, Username, Password) VALUES (:name, :username, :password)";
     
        $query = $conn->prepare("INSERT INTO users (Name, Username, Password) VALUES (:name, :username, :password)");
        
        $query->bindParam(':name', $_POST["name"]);
        $query->bindParam(':username', $_POST["username"]);
        $query->bindParam(':password', $_POST["password"]);

        $query->execute();
        $message = "create.success";
        return($message);
    }
	catch(PDOException $e) {
    	echo $sql . "<br>" . $e->getMessage();
    }
	$conn = null;
}

?>