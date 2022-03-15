<?php 
    include('header.php');
?>
    <html>
    <head>
        <title>Change password</title>
    </head>

    <body>
       <fieldset style="width:500px">
        <table border="2" style="border-collapse: collapse;" width="100%">
            <tr>
                <td>
                    <h1>A.N.S SCHOOL</h1>
                </td>
                <td>
                    Welcome !
                    <a href="./profile.php"><?=$_SESSION['current_user'][0]?></a> |
                    <a href="./logout.php">Logout</a>
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
                        <legend>Change Password</legend>
                        <form action="../controllers/changePass.php" method="post">
                            <table>
                                <tr>
                                    <td>Current Password</td>
                                    <td>: <input type="password" name="password"></td>
                                </tr>
                                <tr>
                                    <td>New Password</td>
                                    <td>: <input type="password" name="newPassword"></td>
                                </tr>
                                <tr>
                                    <td>Retype Password</td>
                                    <td>: <input type="password" name="rePassword"></td>
                                </tr>
                               
                                <tr>
                                    <td><input type="submit" name="changepass" value="Submit"></td>
                                </tr>
                            </table>
                        </form>
                    </fieldset>
                </td>
            </tr>
            </tr>
            
        </table>
        <img src="../assets/School.jpg" alt="A school logo" width="700" height="300">
    </fieldset>
    </body>

    </html>
