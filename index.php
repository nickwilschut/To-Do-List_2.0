<?php

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

    /*foreach ($stmt as $row) {
	    echo $row['name'] . "\n";
	}*/
}

catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;


?>

<table class="table table-striped border">
  	<thead class="bg-light">
	    <tr>
	    	<th>name</th>
	    	<th>username</th>
	    	<th style="width: 15%">action</th>
	    </tr>
	</thead>
    <tbody>
	    <?php 
		  	foreach ($stmt as $user) {
		?>
		<tr>
			<td><?=$user["name"]?></td>
	    	<td><?=$user["username"]?></td>
		</tr>
		<?php
		  	}
		?> 
  	</tbody>
</table>