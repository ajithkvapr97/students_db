<html>
<head>
<style> 
#rcorners1 {
  border-radius: 25px;
  background: #f2bdcd;
  padding: 20px; 
  width: 200px;
  height: 150px;  
}

table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px; 
}
 
table, th, td {
  border: 2px solid #624c3a; 
}

th, td {
  padding: 10px;
  text-align: left;
}

th {
  background-color: #8e7c69; 
  color: white;</style>
</head>
<body id="rcorners1">Show the Students Database

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentsdb";
$mysqli = mysqli_connect($servername, $username, $password, $dbname);
if (!$mysqli) {
  die('Not connected : ' . mysqli_error());
}


$sql = "SELECT * FROM StudentsDetails";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
	echo "<table border='4'>";
    echo "<tr>
	<th>ID</th>
	<th>Name</th>
	<th>DOB</th>
	<th>Phonenumber</th>
	<th>Mailid</th>
	</tr>";
    
    while($row = $result->fetch_assoc()) {
		
     echo "<tr>";
        echo "<td>{$row["ID"]}</td>";
        echo "<td>{$row["Name"]}</td>";
        echo "<td>{$row["DOB"]}</td>";
        echo "<td>{$row["Phonenumber"]}</td>";
        echo "<td>{$row["Mailid"]}</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

mysqli_close($mysqli);
?>


</body>
</html>


