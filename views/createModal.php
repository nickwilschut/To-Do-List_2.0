<!-- User Modal -->
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
					<input type="hidden" name="table" value="users"/>
					<input type="hidden" name="query" value="insertUser"/>

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

<!-- Lists Modal -->
<div class="modal fade" id="listInsert" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
	    <div class="modal-content">
		    <div class="modal-header btn-light">
				<div class="row text-primary ml-1">
					Create / Add List
				</div>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		            <span aria-hidden="true">&times;</span>
		        </button>
		    </div>
		    <div class="modal-body">
			    <form method="post" action="../controllers/maincontroller.php">
					<input type="hidden" name="table" value="Lists"/>
					<input type="hidden" name="query" value="insertList"/>

				 	<label for="name"><b>name</b></label>
				    <input type="text" name="name" class="form-control mb-4" placeholder="Enter name" required>

					<label for="description"><b>description</b></label>
				    <input type="text" name="description" class="form-control mb-4" placeholder="Enter description" required>

					<div class="float-right">
	        			<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					    <button type="submit" class="btn btn-success">Send</button>
					</div>
				</form>
		    </div>
		</div>
	</div>
</div>

<!-- Task Modal -->
<div class="modal fade" id="taskInsert" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
	    <div class="modal-content">
		    <div class="modal-header btn-light">
				<div class="row text-primary ml-1">
					Create / Add task
				</div>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		            <span aria-hidden="true">&times;</span>
		        </button>
		    </div>
		    <div class="modal-body">
			    <form method="post" action="../controllers/maincontroller.php">
					<input type="hidden" name="table" value="Tasks"/>
					<input type="hidden" name="query" value="insertTask"/>

				 	<label for="name"><b>name</b></label>
				    <input type="text" name="name" class="form-control mb-4" placeholder="Enter name" required>

					<label for="description"><b>description</b></label>
				    <input type="text" name="description" class="form-control mb-4" placeholder="Enter description" required>
					
					<label for="status"><b>status</b></label>
				    <input type="text" name="status" class="form-control mb-4" placeholder="Enter status" required>

				    <label for="duration"><b>duration</b></label>
				    <input type="text" name="duration" class="form-control mb-4" placeholder="Enter duration" required>

				    <label for="list_id"><b>list id</b></label>
				    <input type="text" name="list_id" class="form-control mb-4" placeholder="Enter list id" required>

					<div class="float-right">
	        			<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					    <button type="submit" class="btn btn-success">Send</button>
					</div>
				</form>
		    </div>
		</div>
	</div>
</div>
