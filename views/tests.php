<?php 
    include('header.php');
?>

<html>
<head>

    <title>Test</title>
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
                    <legend>Exams</legend>
                    
                         
                    Bangla <input type="file" name="test"><br><hr>
                    English <input type="file" name="test"><br><hr>
                    Genarel Mathematics <input type="file" name="test"><br><hr>
                    Higher Mathematics <input type="file" name="test"><br><hr>
                    Physics <input type="file" name="test"><br><hr>
                    Chemistry <input type="file" name="test"><br><hr>
                    Biology <input type="file" name="test"><br><hr>
                    ICT <input type="file" name="test"><br><hr>
                    


                </fieldset>
                
            </td>
        </tr>
        </tr>
        
    </table>

       <img src="../assets/School.jpg" alt="A school logo" width="700" height="300">
 </fieldset>

</body>

</html>
