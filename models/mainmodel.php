<?php

// Create user function
function createUser($data) {
	$servername = "localhost";
	$username = "root";
	$password = "mysql";
	$dbname = "ToDoList";
	$table = $_POST['table']; 

    try {
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
	    $sql = "INSERT INTO $table (Name, Username, Password) VALUES (:name, :username, :password)";

        $query = $conn->prepare($sql);
        
        $query->bindParam(':name', $_POST["name"]);
        $query->bindParam(':username', $_POST["username"]);
        $query->bindParam(':password', $_POST["password"]);

        $query->execute();
        echo "<meta http-equiv='refresh' content='0;../' />";
    }
	catch(PDOException $e) {
    	echo $sql . "<br>" . $e->getMessage();
    }
	$conn = null;
}

// Create List function
function createList($data) {
	$servername = "localhost";
	$username = "root";
	$password = "mysql";
	$dbname = "ToDoList";
	$table = $_POST['table']; 

    try {
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
	    $sql = "INSERT INTO $table (Name, description) VALUES (:name, :description)";

        $query = $conn->prepare($sql);
        
        $query->bindParam(':name', $_POST["name"]);
        $query->bindParam(':description', $_POST["description"]);

        $query->execute();
        echo "<meta http-equiv='refresh' content='0;../views/Lists.php' />";
    }
	catch(PDOException $e) {
    	echo $sql . "<br>" . $e->getMessage();
    }
	$conn = null;
}

// Create Task function
function createTask($data) {
	$servername = "localhost";
	$username = "root";
	$password = "mysql";
	$dbname = "ToDoList";
	$table = $_POST['table']; 

    try {
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
	    $sql = "INSERT INTO $table (Name, description, status, duration, list_id) VALUES (:name, :description, :status, :duration, :list_id)";

        $query = $conn->prepare($sql);
        
        $query->bindParam(':name', $_POST["name"]);
        $query->bindParam(':description', $_POST["description"]);
        $query->bindParam(':status', $_POST["status"]);
        $query->bindParam(':duration', $_POST["duration"]);
        $query->bindParam(':list_id', $_POST["list_id"]);

        $query->execute();
        echo "<meta http-equiv='refresh' content='0;../views/Tasks.php' />";
    }
	catch(PDOException $e) {
    	echo $sql . "<br>" . $e->getMessage();
    }
	$conn = null;
}

// Update user function
function updateUser($data) {
	$servername = "localhost";
	$username = "root";
	$password = "mysql";
	$dbname = "ToDoList";
	$table = $_POST['table']; 

	try {
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	        
	    $sql = "UPDATE $table SET name=:name, username=:username, password=:password WHERE id=:id";
	    
	    $query = $conn->prepare($sql);

	    $query->bindParam(':name', $_POST["name"]);
	    $query->bindParam(':username', $_POST["username"]);
	    $query->bindParam(':password', $_POST["password"]);
	    $query->bindParam(':id', $_POST["id"]);

	    $query->execute();
	    echo "<meta http-equiv='refresh' content='0;../' />";
	}
	catch(PDOException $e) {
	    echo $sql . "<br>" . $e->getMessage();
	} 
	$conn = null;
}

// Update List function
function updateList($data) {
	$servername = "localhost";
	$username = "root";
	$password = "mysql";
	$dbname = "ToDoList";
	$table = $_POST['table']; 

	try {
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	        
	    $sql = "UPDATE $table SET name=:name, description=:description WHERE id=:id";
	    
	    $query = $conn->prepare($sql);

	    $query->bindParam(':name', $_POST["name"]);
	    $query->bindParam(':description', $_POST["description"]);
	    $query->bindParam(':id', $_POST["id"]);

	    $query->execute();
	    echo "<meta http-equiv='refresh' content='0;../views/Lists.php' />";
	}
	catch(PDOException $e) {
	    echo $sql . "<br>" . $e->getMessage();
	} 
	$conn = null;
}

// Update task function
function updateTask($data) {
	$servername = "localhost";
	$username = "root";
	$password = "mysql";
	$dbname = "ToDoList";
	$table = $_POST['table']; 

	try {
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	        
	    $sql = "UPDATE $table SET name=:name, description=:description, status=:status, duration=:duration, list_id=:list_id WHERE id=:id";
	    
	    $query = $conn->prepare($sql);

	    $query->bindParam(':name', $_POST["name"]);
	    $query->bindParam(':description', $_POST["description"]);
	    $query->bindParam(':status', $_POST["status"]);
	    $query->bindParam(':duration', $_POST["duration"]);
	    $query->bindParam(':list_id', $_POST["list_id"]);
	    $query->bindParam(':id', $_POST["id"]);

	    $query->execute();
	    echo "<meta http-equiv='refresh' content='0;../views/Tasks.php' />";
	}
	catch(PDOException $e) {
	    echo $sql . "<br>" . $e->getMessage();
	} 
	$conn = null;
}

// delete function
function delete($data) {
	$servername = "localhost";
	$username = "root";
	$password = "mysql";
	$dbname = "ToDoList";
	$table = $_POST['table']; 

	try {
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$sql = "DELETE FROM $table WHERE id=:id";

		$query = $conn->prepare($sql);
		$query->bindParam(':id', $_POST["id"]);

	    $query->execute();
	    echo "<meta http-equiv='refresh' content='0;../' />";
	}
	catch(PDOException $e) {
	    echo $sql . "<br>" . $e->getMessage();
	}
	$conn = null;
}

?>