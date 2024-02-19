
<html>
 <head>
  <style>
  body{
  background-image: url('./studentsbgimg.jpg');
   background-repeat: no-repeat;
  background-position: right top;
  background-attachment: fixed;
  background-color:pink;
  }
  form{
  text-align:center;
  }
  </style>
  </head>
  <body>
   <form name= "myform" action = "insertsdb.php"method= "get" onclick = "return Validation()" >
		<label>Name:</label><br>
		<input type="text" name="sname"></input><br><br>
		<label>DOB:</label><br>
		<input type="text" name="sdob"></input><br><br>
		<label>PhoneNumber:</label><br>
		<input type="text" name="sphnumber"></input><br><br>
		<label>Gmail-id:</label><br>
		<input type="text" name="smailid"></input><br><br>
		<input type="submit" name="submit" value="Submit">
   </form>
	<script>
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
			alert("Your Data is Stored Successfully in StudentDatabase ");
			return true;
	
	}	
	
	</script>
  </body>
<html>  