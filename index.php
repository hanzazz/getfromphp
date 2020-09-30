<?php

$servername = "localhost";
$username = "rebatetr_dashboard";
$password = "rebate1234";
$dbname = "rebatetr_dashboard";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	} 
 $sql = "select UserID,Account,Text,Timestamp from log";
 $result = $conn->query($sql);
 
 if($result->num_rows>0)//output data of each row
 {
	 while($row=$result->fetch_assoc())
	 {
		 echo "UserID:" .$row["UserID"]."Account:" .$row["Account"]. "Text:" .$row["Text"]. "Timestamp:" .$row["Timestamp"]. "_" ;
	 }
 }
 else
 {
	 echo "0 results";
 }
$conn->close();

?>
