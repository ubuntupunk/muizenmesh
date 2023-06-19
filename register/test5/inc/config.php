<?php  
$hostname = "localhost";  
$username = "sexthera_mecsignup";  
$password = "CaOnLO([@Pfu";  
$dbname = "sexthera_mecsignup";

$conn = new mysqli( $hostname , $username , $password, $dbname );
	
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}  
?>   
