

<div class="col-2 bg-light border-right sidenav">
	<div class="row">
		<a href="<?=URL?>main/index" class="text-secondary mx-auto mt-4 h1">To do lists.</a>
	</div>
</div>

<div class="col-10 main">
	<!--start page content.-->
	<div class="row">
		<div class="col-12">
			<!--Users-->
			<div class="card border-primary mb-3" id="users">
			    <div class="card-header text-primary">
			    	Users <a href="#"><i class="fas fa-user-plus text-success ml-2 float-right mt-1"></i></a>
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
						      		<a href="#" type="button" class="btn btn-primary mt-1"><i class="far fa-eye"></i></a>
						      		<a href="#" type="button" class="btn btn-warning text-white mt-1"><i class="fas fa-edit"></i></a>
								  	<a href="#" type="button" class="btn btn-danger mt-1"><i class="far fa-trash-alt"></i></a>
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



