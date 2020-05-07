<?php
/**
Select query to get all the Lists.
Set database connection varibles
*/
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "ToDoList";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Select query.
    $resultLists = $conn->prepare("SELECT * FROM Lists"); 

	// Execute query.
    $resultLists->execute();

    $result = $resultLists->setFetchMode(PDO::FETCH_ASSOC); 
}

catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
// close connection.
$conn = null;
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Users</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body class="bg-secondary">
<!--Start container div-->
<div class="container-fluid">
	<div class="row">
		<div class="col-2 bg-light border-right sidenav">
			<div class="row">
				<h1 class="text-secondary mx-auto mt-4">To do lists.</h1>
			</div>
			<div>
				<table class="table table-hover border">
				  	<thead class="bg-light">
					    <tr>
					    	<th>name</th>
					    </tr>
					</thead>
				    <tbody>
					    <!-- Loop through all the results and put them in a table. -->
					    <?php 
						  	foreach ($resultLists as $list) {
						?>
						<tr>
							<th>
								<!-- display the list name(s). -->
								<p class="text-secondary"><?=$list["name"]?></p>
							</th>
						</tr>
						<?php
						  	}
						?> 
				  	</tbody>
				</table>
			</div>
		</div>	
		<!--Start page-->

<!-- Set styling for the sidenav. -->
<style>
.sidenav {
	position: fixed;
	height: 100%;
	overflow: auto;
}	

.main {
	margin-left: 17%;
}
</style>