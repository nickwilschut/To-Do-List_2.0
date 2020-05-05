<!-- User insert Modal -->
<div class="modal fade" id="userInsert" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
	    <div class="modal-content">
		    <div class="modal-header btn-light">
				<div class="row text-primary ml-1">
					Create / Add user
				</div>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		            <span aria-hidden="true">&times;</span>
		        </button>
		    </div>
		    <div class="modal-body">
			    <form method="post" action="controllers/maincontroller.php">
					<!-- <form method="post" action="controllers/maincontroller"/> -->
					<input type="hidden" name="table" value="users"/>
					<input type="hidden" name="query" value="insert"/>

				 	<label for="name"><b>name</b></label>
				    <input type="text" name="name" class="form-control mb-4" placeholder="Enter name" required>

					<label for="username"><b>username</b></label>
				    <input type="text" name="username" class="form-control mb-4" placeholder="Enter username" required>

				    <label for="password"><b>password</b></label>
				    <input type="text" name="password" class="form-control mb-4" placeholder="Enter password" required>

					<div class="float-right">
	        			<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					    <button type="submit" class="btn btn-success">Send</button>
					</div>
				</form>
		    </div>
		</div>
	</div>
</div>

<!-- User Update Modal -->
<div class="modal fade" id="userUpdate" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
	    <div class="modal-content">
		    <div class="modal-header btn-light">
				<div class="row text-primary ml-1">
					Update user
				</div>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		            <span aria-hidden="true">&times;</span>
		        </button>
		    </div>
		    <div class="modal-body">
			    <form method="post" action="controllers/maincontroller.php">
					<!-- <form method="post" action="controllers/maincontroller"/> -->
					<input type="hidden" name="table" value="users"/>
					<input type="hidden" name="query" value="update"/>

				 	<label for="name"><b>name</b></label>
				    <input type="text" name="name" class="form-control mb-4" placeholder="Enter name" required>

					<label for="username"><b>username</b></label>
				    <input type="text" name="username" class="form-control mb-4" placeholder="Enter username" required>

				    <label for="password"><b>password</b></label>
				    <input type="text" name="password" class="form-control mb-4" placeholder="Enter password" required>

					<div class="float-right">
	        			<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					    <button type="submit" class="btn btn-success">Update</button>
					</div>
				</form>
		    </div>
		</div>
	</div>
</div>

<!-- User Delete Modal -->
<div class="modal fade" id="userDelete" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
	    <div class="modal-content">
		    <div class="modal-header btn-light">
				<div class="row text-primary ml-1">
					Delete users
				</div>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		            <span aria-hidden="true">&times;</span>
		        </button>
		    </div>
		    <div class="modal-body">
			    <form method="post" action="controllers/maincontroller.php">
					<input type="hidden" name="table" value="users"/>
					<input type="hidden" name="query" value="delete"/>
					<input type="hidden" name="id" value="<?=$user["id"]?>"/>

					Are you sure you want to delete this user?

					<div class="float-right">
	        			<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					    <button type="submit" class="btn btn-success">Delete</button>
					</div>
				</form>
		    </div>
		</div>
	</div>
</div>
