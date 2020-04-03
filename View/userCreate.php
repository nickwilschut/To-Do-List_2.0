<div class="row">
	<div class="col-12 mt-4">
		<div class="alert alert-primary" role="alert">
			<div class="row text-primary ml-1">
				Create / Add
			</div>
		</div>
	</div>
</div>

<div class="card border-primary mb-3">
    <div class="card-header text-primary">Add user</div>
    <div class="card-body text-dark">
    <form name="create" method="post" action="create">
		<form method="post" action="model/MainModel"/>
		<input type="hidden" name="table" value="users"/>

	 	<label for="name"><b>name</b></label>
	    <input type="text" name="name" class="form-control mb-4" placeholder="Enter name" required>

		<label for="username"><b>username</b></label>
	    <input type="text" name="username" class="form-control mb-4" placeholder="Enter username" required>

	    <label for="password"><b>password</b></label>
	    <input type="text" name="password" class="form-control mb-4" placeholder="Enter password" required>

	    <button type="submit" class="btn btn-primary mb-3">Send</button>
	</form>
    </div>
</div>