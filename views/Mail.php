<?php 
    include('header.php');
?>

<html>
<head>

    <title>Mail</title>
</head>

<body>
    <fieldset style="width:500px">

    <table border="2" style="border-collapse:collapse;" width="700px" height="300px" >
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
                <fieldset style="width:500px">
                    <legend>Mail</legend>
                      <form action="mailto:someone@example.com" method="post" enctype="text/plain">
                        <table>
                            <tr>
                                <td>Name :</td>
                                <td><input type="text" name="name" value=""></td>
                            </tr>
                            <tr>
                                <td>Email :</td>
                                <td><input type="email" name="email" value=""></td>
                            </tr>
                            <tr>
                                <td>Comments</td>
                                <td><input type="text" name="comments" size="50"></td>
                            </tr>
                            <tr>
                                <td><input type="submit" name="submit" value="Send"></td>
                                <td><input type="reset" name="reset" value="Reset"></td>
                            </tr>
                        </table>

                 

                      </form>

                </fieldset>





            </td>
        </tr>
        
        
    </table>

       <img src="../assets/School.jpg" alt="A school logo" width="700" height="300">
 </fieldset>

</body>

</html>
