<?php 
    include('header.php');
?>

<html>
<head>

    <title>Course and Teacher</title>
</head>

<body>
    <fieldset style="width:500px">

    <table border="2" style="border-collapse:collapse;" width="700px" height="300px">
        <tr>

            <td>
                 <h1>A.N.S SCHOOL</h1>
            </td>

            <td>
                <h4>Welcome !</h4>
                <a href="./profile.php"><?=$_SESSION['current_user'][0]?></a> |
                <a href="../controllers/logout.php">Logout</a>
            </td>
        </tr>
        <tr>
            <td>
                <b>Account</b> <br>
                <hr>
                 <ul>
                    <li><a href="Dashboard.php">Dashboard</a></li>
                    <li><a href="profile.php">View Profile</a></li>
                    <li><a href="edit_profile.php">Edit Profile</a></li>
                    <li><a href="change_password.php">Change Password</a></li>
                    <li><a href="tests.php">Tests</a></li>
                    <li><a href="meeting.php">Meeting</a></li>
                    <li><a href="result.php">Result</a></li>
                     <li><a href="payment.php">Payment</a></li>
                     <li><a href="Mail.php">Mail</a></li>
                     <li><a href="Course_Teacher_List.php"> Course and Result</a></li>
                     <li><a href="FinancialStatement.php"> Financials</a></li>
                    
                </ul>
            </td>

            <td>
                <fieldset>
                    <legend>Course and Teacher</legend>
                    
                   <table border="1">
        <tr>
            <th>No. of Course</th>
            <th>Course</th>
            <th>Teacher</th>
    
        </tr>

        <?php

        $file = fopen('../models/ctList.txt', 'r');
        $idcount = 1;

        while (!feof($file)) {
            $user = fgets($file);
            $userArry = explode('|', $user);

            if ($userArry[0] != null) 
            {
                echo "<tr>";
                echo "<td>" . $idcount . "</td>";
                echo "<td>" . $userArry[0] . "</td>";
                echo "<td>" . $userArry[1] . "</td>";
                echo "<td>";
                echo "</td>";
                echo "</tr>";
            }
            $idcount++;
        }
        
        ?>
            
        </table>


                </fieldset>
                
            </td>
        </tr>
        </tr>
        
    </table>

       <img src="../assets/School.jpg" alt="A school logo" width="700" height="300">
 </fieldset>

</body>

</html>
