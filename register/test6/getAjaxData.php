<?php 
// Include the database config file 
include('config.php'); 
 
if(!empty($_POST['iso2_val'])){ 
    // Fetch state data based on the specific country 
    $getiso2 = $_POST['iso2_val'];
     
    echo $Singlequery = "SELECT * FROM countries WHERE iso2 = '".$getiso2."' AND flag = 1"; 
    $GetIdResult = $link->query($Singlequery); 
    $singlerow = $GetIdResult->fetch_assoc();
	
	$GetCountryID = $singlerow['id'];
	
	// Fetch state data based on the specific country
    $query = "SELECT * FROM states WHERE country_id = ".$GetCountryID." AND flag = 1 ORDER BY name ASC"; 
    $result = $link->query($query); 
     
    // Generate HTML of state options list 
    if($result->num_rows > 0){ 
        echo '<option value="">Select State</option>'; 
        while($row = $result->fetch_assoc()){  
            echo '<option value="'.$row['iso2'].'">'.$row['name'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">State not available</option>'; 
    } 
}elseif(!empty($_POST['state_iso2'])){ 
	
	$getStateiso2 = $_POST['state_iso2'];
	$sel_country_Val = $_POST['sel_country_id'];
     
    // Fetch state id data based on the specific state iso2 and country code value
    $Singlequery = "SELECT * FROM states WHERE iso2 = '".$getStateiso2."' AND country_code = '".$sel_country_Val."' AND flag = 1"; 
    $GetIdResult = $link->query($Singlequery); 
    $singlerow = $GetIdResult->fetch_assoc();
	
	$GetStateID = $singlerow['id'];
	
    // Fetch city data based on the specific state id
    $query = "SELECT * FROM cities WHERE state_id = ".$GetStateID." AND flag = 1 ORDER BY name ASC"; 
    $result = $link->query($query); 
     
    // Generate HTML of city options list 
    if($result->num_rows > 0){ 
        echo '<option value="">Select city</option>'; 
        while($row = $result->fetch_assoc()){  
            echo '<option value="'.$row['name'].'">'.$row['name'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">City not available</option>'; 
    } 
} 
?>
