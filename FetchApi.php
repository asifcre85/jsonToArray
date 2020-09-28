<!-- <?php

$api_url = 'http://dummy.restapiexample.com/api/v1/employees';

// Read JSON file
$json_data = file_get_contents($api_url);

// Decode JSON data into PHP array
$response_data = json_decode($json_data,true);
//print_r($response_data);
// All user data exists in 'data' object
$user_data = $response_data['data'];

// Cut long data into small & select only first 10 records
$user_data = array_slice($user_data, 0, 2);

// Print data if need to debug
//print_r($user_data);

// Traverse array and display user data
foreach ($user_data as $user) {
	echo "name: ".$user['employee_name'];
	echo "<br />";
	echo "name: ".$user['employee_age'];
	echo "<br /> <br />";
}

?> -->

<?php 

// PHP code to create 
// multidimensional array 

// Creating multidimensional 
// associative array 
$marks = array( 
	
	// Ankit will act as key 
	"Ankit" => array( 
		
		// Subject and marks are 
		// the key value pair 
		"C" => 95, 
		"DCO" => 85, 
		"FOL" => 74, 
	), 
		
	// Ram will act as key 
	"Ram" => array( 
		
		// Subject and marks are 
		// the key value pair 
		"C" => 78, 
		"DCO" => 98, 
		"FOL" => 46, 
	), 
	
	// Anoop will act as key 
	"Anoop" => array( 
		
		// Subject and marks are 
		// the key value pair 
		"C" => 88, 
		"DCO" => 46, 
		"FOL" => 99, 
	), 
); 

// Accessing the array element 
// using dimensions 
	
// It will display the marks of 
// Ankit in C subject 
echo $marks['Ankit']['C'] . "<br>"; 
	
// Accessing array elements using for each loop 
foreach($marks as $mark) { 
	echo $mark['C']. " ".$mark['DCO']." ".$mark['FOL']."<br>"; 
} 
	
?> 
