<html>
<head>
<style>  
 body {
     
      background-repeat: no-repeat;
      background-position: right top;
      background-attachment: fixed;
      background-color: #fde2e4;
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      position: relative;
    }

    #rcorners1 {
		margin: 10px auto; 
            text-align: center;
    }

    table {
      width: 80%;
      border-collapse: collapse;
      margin: 100px auto; 
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
      color: white;
    }

    .top-right {
      position: absolute;
      top: 10px;
      right: 20px;
    }

    a {
      background-color: #45a049;
      text-decoration: none;
      color: #333;
      font-weight: bold;
      padding: 10px;
      margin: 10px;
      display: inline-block;
    }

    a:hover {
      color: #4caf50;
    }
</style>
</head>
<div class="top-right">
    <a href="studentsfrontpage.html">Front page</a>
    <a href="studentsform.php">Form page</a>
  </div>

  <div id="rcorners1">
    Show the Students Database
  </div>
	
<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentsdb";
$mysqli = mysqli_connect($servername, $username, $password, $dbname);
if (!$mysqli) {
  die('Not connected : ' . mysqli_error());
}


$query_string = "SELECT * FROM StudentsDetails";
$result = $mysqli->query($query_string);

    if ($result->num_rows > 0) {
        echo "<table border='4'>";
        echo "<tr>    
            <th>ID</th> 		
            <th>Name</th>
            <th>DOB</th>
            <th>Phonenumber</th>
            <th>Mailid</th>
            <th>Action</th>
        </tr>";
		$counter = 1;
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
			echo "<td>{$counter}</td>";
            //echo "<td>{$row["ID"]}</td>";
            echo "<td>{$row["Name"]}</td>";
            echo "<td>{$row["DOB"]}</td>";
            echo "<td>{$row["Phonenumber"]}</td>";
            echo "<td>{$row["Mailid"]}</td>";
            echo "<td><form method='post'><input type='hidden' name='delete_id' value='{$row["ID"]}'><input type='submit' name='delete' value='Delete'></form></td>";
            echo "</tr>";
			$counter++;
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

mysqli_close($mysqli);
?>
</body>
</html>


