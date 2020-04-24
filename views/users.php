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
}

catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

?>

<div class="col-2 bg-light border-right sidenav">
	<div class="row">
		<a href="#" class="text-secondary mx-auto mt-4 h1">To do lists.</a>
	</div>
</div>

<div class="col-10 main">
	<!--start page content.-->
	<div class="row">
		<div class="col-12">
			<!--Users-->
			<div class="card border-primary mb-3" id="users">
			    <div class="card-header text-primary">
			    	Users 
					<?php 
						require("userCRUD.php");
					?>
			    	<!-- Button trigger modal -->
					<button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#userInsert">
						<i class="fas fa-user-plus"></i>
					</button>
			    </div>
			    <div class="card-body text-dark">
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
						    	<td>
						      		<button type="button" class="btn btn-primary mt-1" data-toggle="modal" data-target="#userInsert">
										<i class="far fa-eye"></i>
									</button>

						      		<button type="button" class="btn btn-warning text-white mt-1" data-toggle="modal" data-target="#userUpdate">
										<i class="fas fa-edit"></i>
									</button>

								  	<button type="button" class="btn btn-danger mt-1" data-toggle="modal" data-target="#userDelete">
										<i class="far fa-trash-alt"></i>
									</button>
							  	</td>	
							</tr>
							<?php
							  	}
							?> 
					  	</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>



