<?php
require("../models/mainmodel.php");

if ($_POST['query'] == 'insert') {
	createUser($_POST);
}

if ($_POST['query'] == 'delete') {
	//createUser($_POST);
	print_r($_POST['id']);
	//deleteUser($_POST);
}

if ($_POST['query'] == 'update') {
	print_r($_POST['id']);
}



?>