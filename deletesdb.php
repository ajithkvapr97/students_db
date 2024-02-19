<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentsdb";
$mysqli = mysqli_connect($servername, $username, $password, $dbname);
if (!$mysqli) {
  die('Not connected : ' . mysqli_error());
}

$sql = "DELETE FROM StudentsDetails WHERE id=7;";
$result = $mysqli->query($sql);
echo"successfully Deleted data";
mysqli_close($mysqli);
?>