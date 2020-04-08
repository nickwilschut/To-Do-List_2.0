<?php
	// Difine database. 
	$host = "localhost";
	$db_name = "ToDoList";
	$username = "root";
	$password = "mysql";

	// Try to connect to database.
	try {
		$db = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}

	// Display error if needed.
	catch (PDOException $e) {
		echo $e->getMessage();
	}

	include_once 'MainModel.php';

	$MainModel = new MainModel($db);

?>