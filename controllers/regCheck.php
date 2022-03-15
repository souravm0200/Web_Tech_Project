<?php 
	session_start();
	
	if(isset($_REQUEST['submit']))
	{
		
        

		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$gender = $_REQUEST['gender'];
		$dob = $_REQUEST['dob'];
		

    if($name != null && $email != null && $username !=null && $password != null && $gender != null && $dob != null)
		{


			$user =$name."|".$email."|".$username."|".$password."|".$gender."|".$dob."\r\n";

			$file = fopen('../models/record.txt', 'a');
			fwrite($file, $user);
			fclose($file);
			header('location: ../views/Login.php');
		}
		else
		{
			echo "null submission";
			
		}
	}
?>
