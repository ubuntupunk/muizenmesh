<?php

// Get the current working directory
 $dir = getcwd();

 // Use the directory to include another file
  include $dir . "/inc/config.php";

require_once "config.php";

try {
$sql = "SELECT * FROM cities";
$result = mysqli_query($conn, $sql) or die(msqli_error($conn));

$cities = array();
while ($row = mysqli_fetch_assoc($result)) {
    $cities[] = $row;
}

header('Content-Type: application/json');
echo json_encode($cities, JSON_INVALID_UTF8_IGNORE );
} catch (Exception $e) {
 echo 'Caught exception: ',  $e->getMessage(), "\n";
}

mysqli_close($conn);
?>
