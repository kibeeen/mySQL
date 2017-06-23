<?php 

require 'connection.php';

$sql = "SELECT firstName, lastName FROM employees";
$result = mysqli_query($connectDB,$sql);

if(mysqli_num_rows($result) > 0) {

	while ($row = mysqli_fetch_assoc($result)){ //converts an sql query result into an associative array

		extract($row);

		echo $firstName . " " . $lastName . '<br>';
	} 
	
}


 ?>