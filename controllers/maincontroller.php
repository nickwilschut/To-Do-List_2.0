<?php

function loadIndex () {
	$users = loadAll('users');
	render('view/users', ['users' => $users]);
}



?>