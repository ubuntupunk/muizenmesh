<?php

// Get the current working directory
$dir = getcwd();

// Use the directory to include another file
include $dir . "/config.php";

//require_once "config.php";

try {

// Retrieve country data
$sql = "SELECT * FROM countries";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

$countries = array();
while ($row = mysqli_fetch_assoc($result)) {
    $countries[] = $row;
}

// Retrieve state data
    $sql = "SELECT * FROM states";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    $states = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $states[] = $row;
    }

// Retrieve city data
    $sql = "SELECT * FROM cities";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    $cities = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $cities[] = $row;
    }


// Combine all data into a single array
    $data = array(
        'countries' => $countries,
        'states' => $states,
        'cities' => $cities
    );
//print_r($data); 
   header('Content-Type: application/json');
   print json_encode($data, JSON_PRETTY_PRINT | JSON_INVALID_UTF8_IGNORE);
//if (json_last_error() !== JSON_ERROR_NONE) {
//  echo json_last_error_msg();
//}
} catch (Exception $e) {
   echo 'Caught exception: ',  $e->getMessage(), "\n";
}

/**
//DEBUGGING ROUTINE
// Query the database for countries
$query = "SELECT * FROM countries";
$result = mysqli_query($conn, $query);

// Check if the query was successful
if (!$result) {
  die("ERROR: Could not retrieve data from database. " . mysqli_error($conn));
}

// Build an array of country objects
$countries = array();
while ($row = mysqli_fetch_assoc($result)) {
  $country = array(
    'id' => $row['id'],
    'country_name' => $row['country_name']
  );
  array_push($countries, $country);
}

// Convert the array to JSON and output it
header('Content-Type: application/json');
echo json_encode($countries);

//Output any JSON error
if (json_last_error() !== JSON_ERROR_NONE) {
    echo json_last_error_msg();
}

// Dump the data to the screen for debugging purposes
//var_dump(mysqli_fetch_all($result, MYSQLI_ASSOC));
**/

mysqli_close($conn);
?>
