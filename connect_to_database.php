<?php
//connect to database "test"
$host = "localhost";
$username = "root";
$user_pass = "";
$database_in_use = "test";

//////////////////////////////// Connect to database ////////////////////////////////////////
$mysqli = new mysqli($host, $username, $user_pass, $database_in_use);

?>