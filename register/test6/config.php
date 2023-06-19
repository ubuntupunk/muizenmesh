<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'sexthera_membership');
define('DB_PASSWORD', 'R$@,G9}Rt5$-');
define('DB_NAME', 'sexthera_membership');

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($conn === false) {
    die("ERROR: Could not connect to database. " . mysqli_connect_error());
}

/** Query the database for countries
//$query = "SELECT * FROM countries";
//$result = mysqli_query($conn, $query);

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

// Dump the data to the screen for debugging purposes
//var_dump(mysqli_fetch_all($result, MYSQLI_ASSOC));

// Close the database connection
mysqli_close($conn); **/
?>
