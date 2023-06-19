<?php
// Get the current working directory
$dir = getcwd();

// Use the directory to include another file
include $dir . "/inc/config.php";

require_once "config.php";

try {
$sql = "SELECT * FROM states";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

$states = array();
while ($row = mysqli_fetch_assoc($result)) {
    $states[] = $row;
}

header('Content-Type: application/json');
echo json_encode($states, JSON_INVALID_UTF8_IGNORE);
} catch (Exception $e) {
echo 'Caught exception: ',  $e->getMessage(), "\n";
}

mysqli_close($conn);
?>
