<?php
session_start();
if (isset($_COOKIE['status'])) 
{
    if (isset($_REQUEST['changepass']))
     {
        $password = $_REQUEST['password'];
        $newPassword = $_REQUEST['newPassword'];
        $rePassword = $_REQUEST['rePassword'];

        if ($password != null && $newPassword != null && $rePassword != null)
         {
            //$user = $_SESSION['user'];

            $file = fopen('../models/record.txt', 'r');

            if ($file['password'] == $password) 
            {
                if ($newPassword == $rePassword)
                 {
                    $_SESSION[3]['password'] = $newPassword;
                    header('location: ../views/profile.php');
                } 
                else 
                {
                    echo "New Password does not match";
                }

            }
            else
            {
                echo "Wrong password";
                header('location: ../views/profile.php');

            }
        }
    }

}

  else 
   {
    echo "<center><h1>You are not logged in<h1></center>";
    }

?>