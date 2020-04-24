<?php
require("../models/mainmodel.php");

if ($_POST['query'] == 'insert') {
	createUser($_POST);
}




?>