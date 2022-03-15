
<html>
<head>
	
	<title>A.N.S   SCHOOL</title>
</head>


</style>



<body>
    <h1>A.N.S    SCHOOL</h1> 

	<form method="POST" action="../controllers/regCheck.php" enctype="multipart/form-data">
            
	        <a href="Login.php">Back</a>
  

	   <fieldset style="width:500px">
	   	<legend>Regeistration</legend>
 
		      <table>
		      	<tr>
		      		<td></td>
		      		<td><input type="file" name="image"></td>
		      	</tr>

		     <tr>
        		<td>Name</td>
        		<td><input type="text" name="name" value=""><hr></td>

        	</tr>
			
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" value=""><hr></td>
			</tr>
			<tr>
				
				<td>Username</td>
				<td><input type="text" name="username" value=""><hr></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value=""><hr></td>
			</tr>
			
		   <tr>
		   	<td>
		   		<fieldset >
				       <legend>Gender</legend>
				       <input type="radio" name="gender" value="Male">Male  
					    <input type="radio" name="gender" value="Female">Female 
					    <input type="radio" name="gender" value="Others">Others
			      </fieldset><hr>
				</td>
			</tr>

			<tr>
				<td>
					<fieldset>
						<legend>Date of Birth</legend>
						<input type="date" name="dob" value="">
						
					</fieldset><hr>
				</td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
				<td><input type="reset" name="reset" value="Reset"></td>
			</tr>
		      </fieldset>
			
		
		     </table>                   
              
        
		 <img src="../assets/School.jpg" alt="A school logo" width="700" height="300">
		
	</form>
	
	</fieldset>


</body>



</html>


