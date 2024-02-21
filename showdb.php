<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentsdb";
$mysqli = mysqli_connect($servername, $username, $password, $dbname);
if (!$mysqli) {
  die('Not connected : ' . mysqli_error());
}

$result = $mysqli -> query("show databases;");
if (mysqli_num_rows($result) > 0) {   
	$db_present = 0;
    while($row = $result -> fetch_row()) {
		if(!strcmp($row[0], $dbname)) {
			$db_present = 1;
		}
		"<br>";
    }	
}
echo"success";
mysqli_close($mysqli);
?>