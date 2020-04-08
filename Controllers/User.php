<?php

class User extends MainController {
	// import all needed files.
	require_once(ROOT . 'Core/MainModel.php');
	require_once (ROOT . 'Core/MainController.php');
	require_once(ROOT . 'Core/Database.php');
	include (ROOT . 'Models/Users.php');

	$query = new MainModel($db);
	$validation = new MainController;

	$data = array($validation->cleanString('hello'),$validation->cleanString('world'));
	$col = array('col1','col2');

	$query->insert($table, $data, $col);
}

?>