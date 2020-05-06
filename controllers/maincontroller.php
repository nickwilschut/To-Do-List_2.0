<?php
require("../models/mainmodel.php");

if ($_POST['query'] == 'insertUser') {
	createUser($_POST);
}

if ($_POST['query'] == 'insertList') {
	createList($_POST);
}

if ($_POST['query'] == 'insertTask') {
	createTask($_POST);
}

if ($_POST['query'] == 'delete') {
	delete($_POST);
}

if ($_POST['query'] == 'updateUser') {
	updateUser($_POST);
}

if ($_POST['query'] == 'updateTask') {
	updateTask($_POST);
}
if ($_POST['query'] == 'updateList') {
	updateList($_POST);
}


?>