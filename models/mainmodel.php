<?php

/**
This function is used for inserting users into the database.
*/
function createUser($data) {
	$servername = "localhost";
	$username = "root";
	$password = "mysql";
	$dbname = "ToDoList";
	$table = $_POST['table']; 

    try {
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
	    $sql = "INSERT INTO $table (Name, username, password) VALUES (:name, :username, :password)";

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

/**
This function is used for inserting Lists into the database.
*/
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

/**
This function is used for inserting Tasks into the database.
*/
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

/**
This function is used to update users from the database.
*/
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

/**
This function is used to update Lists from the database.
*/
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

/**
This function is used to update Tasks from the database.
*/
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

/**
This function is used to delete items from the database.
*/
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