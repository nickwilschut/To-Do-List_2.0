<?php

include "controllers/maincontroller.php";
//loadAll("users");
//print_r($result);

echo loadAll("users");
//print_r($row);
//die();

require("templates/header.php");
require("users.php");
require("templates/footer.php");

?>

