
<?php
//include 'showsdb.php';
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentsdb";
$mysqli = mysqli_connect($servername, $username, $password, $dbname);
if (!$mysqli) {
  die('Not connected : ' . mysqli_error());
}

//$id_delete = $_POST ['id'];
$query_string1 = "Select id from StudentsDetails";
$result = $mysqli->query($query_string1);

if($result->num_rows>0){
	
	echo "Select the id :<form method = 'post'>"; 
	echo "<select name ='id'>";
	while ($row = $result->fetch_assoc()) {
        echo "<option value='" . $row["id"] . "'>" . $row["id"] . "</option>";
    }
    echo "</select>";
    echo "<input type='submit' value='delete'>";
	echo "</form>";
	} else {
    echo "0 results";
}
if(isset($_POST['id'])){
	$id_delete = $_POST ['id'];	
	$query_string = "DELETE FROM StudentsDetails WHERE id = '$id_delete'";
$result = $mysqli->query($query_string);
if ( $result == TRUE) {
?>
<script>
	alert("successfully Deleted data");
	
</script>
<?php
}
else {
?>
<script>
   alert("Error on deleting the data");
   
</script>
<?php	
//$result = $mysqli->query($query_string);
echo"successfully Deleted data";
}}
mysqli_close($mysqli);
?>
<html>
 <body>
  <button name="show" value="submit" onclick="location.href = 'showsdb.php';">Show</button>
 </body>
</html>*/
?>
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

    .top-right {
      position: absolute;
      top: 10px;
      right: 20px;
      z-index: 1;
    }

    a, button {
      background-color: #45a049;
      text-decoration: none;
      color: #333;
      font-weight: bold;
      padding: 10px;
      margin: 10px;
      display: inline-block;
      cursor: pointer;
    }

    a:hover, button:hover {
      color: #4caf50;
    }

    table {
      width: 80%;
      border-collapse: collapse;
      margin: 150px auto;
      position: absolute;
      z-index: 0;
	  margin-top: 150px;
	  right: 150px;
    }

    table, th, td {
      border: 2px solid #624c3a;
    }

    th, td {
      padding: 10px;
      text-align: center;
    }

    th {
      background-color: #8e7c69;
      color: white;
    }

    form {
      display: inline-block;
    }
  </style>
</head>

  <div class="top-right">
    <a href="studentsfrontpage.html">Front page</a>
    <a href="studentsform.php">Form page</a>
    <button name="show" value="submit" onclick="location.href = 'showsdb.php';">Show</button>
  </div>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentsdb";
$mysqli = mysqli_connect($servername, $username, $password, $dbname);

if (!$mysqli) {
    die('Not connected : ' . mysqli_error());
}

$query_string1 = "SELECT * FROM StudentsDetails";
$result = $mysqli->query($query_string1);

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
    if (isset($_POST['delete'])) {
        $id_delete = mysqli_real_escape_string($mysqli, $_POST['delete_id']);
//in the above step connection and escape  string paramtetres are used in the mysqli_real_escape_string;
        $query_string = "DELETE FROM StudentsDetails WHERE ID = '$id_delete'";
        $result = $mysqli->query($query_string);

        if ($result == TRUE) {
			$query_string2 = "SET @counter = 1";
        $result = $mysqli->query($query_string2);
	
    	$query_string3 = "UPDATE StudentsDetails SET ID = @counter := @counter + 1;";
        $result = $mysqli->query($query_string3);
        
            echo "<script>alert('Successfully deleted data');</script>";
        } else {
            echo "<script>alert('Error on deleting the data');</script>";
        }
    }
mysqli_close($mysqli);
?>
</body>
</html>