<?php

/* database configuration */


$servername = 'localhost';
$username = 'DB_User';
$password = 'Password';
$db = 'DB_Name';

// Create connection
$link = new mysqli($servername, $username, $password, $db);

// Check connection
if ($link->connect_error) {
  die("Connection failed: " . $link->connect_error);
}

?>
