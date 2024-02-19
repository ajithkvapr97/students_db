<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentsdb";
$mysqli = mysqli_connect($servername, $username, $password, $dbname);
if (!$mysqli) {
  die('Not connected : ' . mysqli_error());
}
$sname = $_REQUEST['sname'];
$sdob = $_REQUEST['sdob'];
$sphnumber = $_REQUEST['sphnumber'];
$smailid = $_REQUEST['smailid'];

/*
$query_string = "CREATE TABLE StudentsDetails (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    Name VARCHAR(50) NOT NULL,
	DOB VARCHAR(50) NOT NULL,
    Phonenumber VARCHAR(50) NOT NULL,
	Mailid VARCHAR(50) NOT NULL
)";

$result1 = $mysqli -> query($query_string);
*/
$query_string = "INSERT INTO StudentsDetails (Name,DOB,Phonenumber,Mailid) VALUES ('$sname','$sdob','$sphnumber','$smailid')";
  $result1 = $mysqli -> query($query_string);
        
mysqli_close($mysqli);
?>