<?php
$servername = "fdb29.awardspace.net";
$username = "3571483_linein";
$password = "log987878789";
$dbname = "3571483_linein";

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
