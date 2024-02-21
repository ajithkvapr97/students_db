
<html>
 <head>
  <style>
    body {
      background-image: url('./studentsbgimg.jpg');
      background-repeat: no-repeat;
      background-position: right top;
      background-attachment: fixed;
      background-color: pink;
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
    }

    form {
      text-align: center;
      max-width: 300px;
      margin: 10px auto;
      padding: 5px;
      background-color: rgba(255, 255, 255, 0.8);
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    label {
      font-weight: bold;
      display: block;
      margin-bottom: 8px;
    }

    input {
      width: 100%;
      padding: 8px;
      margin-bottom: 15px;
      box-sizing: border-box;
    }

    input[type="submit"],
    button {
      background-color: #4caf50;
      color: white;
      padding: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    input[type="submit"]:hover,
     button:hover {
      background-color: #45a049;
    }

    a {
		background-color: #45a049;
      text-decoration: none;
      color: #333;
      font-weight: bold;
      padding: 10px;
      position: absolute;
      top: 10px;
      right: 20px;
    }

    button {
      text-decoration: none;
      color: #333;
      font-weight: bold;
      padding: 10px;
      position: absolute;
      top: 10px;
      right: 140px;
    }

    a:hover, button:hover {
      color: #4caf50;
    }
  </style>
  
  </head>
  <body>
   <form name="myform" action="insertsdb.php" method="get" target="_self" onsubmit="return isValidForm()">
   
    <label>Name:</label><br>
	
    <input type="text" name="sname" pattern="[A-Za-z ]+" title="Only alphabets and spaces are allowed" required><br>
	
    <label>DOB:</label><br>
	
    <input type="text" name="sdob" pattern="\d{4}-\d{2}-\d{2}" title="Enter a valid date in YYYY-MM-DD format" required><br>
	
    <label>PhoneNumber:</label><br>
	
    <input type="text" name="sphnumber" pattern="\d{10}" title="Enter a valid 10-digit phone number" required><br>
	
    <label>Gmail-id:</label><br>
	
    <input type="text" name="smailid" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" title="Enter a valid mail address" required><br>
	
    <input type="submit" name="submit" value="Submit" onclick="return Validation()">
	
    <button name="show" value="show" onclick="return setValueButton();">Show</button>
  </form> 
   <a href = "studentsfrontpage.html">Front page</a >
   
	<script>
	function setValueButton() {
		document.getElementsByName("show").value = "setshow";
		//alert("Hello");
	}
	
	function isValidForm() {
		if (document.getElementsByName("show").value == "setshow") {
		   location.href = 'showsdb.php';
		   //alert(document.getElementsByName("show").value);
		   return false;
		}

	}
	function Validation(){		
		let sname = document.forms["myform"]["sname"].value;
		let sdob = document.forms["myform"]["sdob"].value;
		let sphnumber = document.forms["myform"]["sphnumber"].value;
		let smailid = document.forms["myform"]["smailid"].value;
		
			if(sname == "" || sname == null){
				alert("please enter the name");	
				return false;				
			}
			else if(sdob == "" || sdob == null){
				alert("please enter the DateOfBirth");			
				return false;
			}
			else if(sphnumber == "" || sphnumber == null){
				alert("please enter the PhoneNumber");
				return false;
				 
			}
			else if(smailid == "" || smailid == null){
				alert("please enter the Gmail-id");
				return false; 
			}
			//alert("Your Data is Stored Successfully in StudentDatabase ");
			//window.location.href = "studentsform.php";
			//alert("Your Data is Stored Successfully in StudentDatabase ");
			return true;

	}	
	
	</script>
  </body>
<html>  