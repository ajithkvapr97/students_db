<?php
include 'studentsform.php';

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
  $result1 = $mysqli->query($query_string);
  
 if( $result1 ){
?>
<script>
  alert("Your Data is Stored Successfully in StudentDatabase ");
  
 </script>
<?php

 }
 else {
?>
 <script>
  alert("Data not inserted Please try again");	 
  </script>
<?php 
 }
mysqli_close($mysqli);
?>

<html>

 <body>
 <a href = "studentsfrontpage.html">Front page</a >
  <button name="show" value="submit" onclick="location.href = 'showsdb.php';">Show</button>
 </body>
</html>