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



if($name != null && $email != null && $username != null && $password != null && $gender != null && $dob != null)
{

$file = fopen('../models/record.txt', 'r');
$updatedContent = "";



while(!feof($file))
{

$line = fgets($file);
$suser = explode('|', $line);




if($suser[3] == $password)
{
$line = $name."|".$email."|".$username."|".$password."|".$gender."|".$dob."\r\n";
//$updatedContent .= $line;
}
$updatedContent .= $line;

}


 }
 
 $file = fopen('../models/record.txt', 'a');
fwrite($file, $updatedContent);
header('location: ../views/profile.php');

 }

 

else
{
echo "null submission";
}


?>

