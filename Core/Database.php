<?php
	// Difine database. 
	$host = "localhost";
	$db_name = "ToDoList";
	$username = "root";
	$password = "mysql";

	// Try to connect to database.
	try {
		$DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
		$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}

	// Display error if needed.
	catch (PDOException $e) {
		echo $e->getMessage();
	}

	include_once 'MainController.php';

	$MainController = new MainController($DB_con);

?>