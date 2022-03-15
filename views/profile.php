<?php 
    include('header.php');
?>

<html>

<head>
    <title>Profile</title>
</head>

<body>
    <fieldset style="width:500px">

    <table border="2" style="border-collapse: collapse;" width="700px" height="300px">

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
                    <legend>PROFILE</legend>
                    <table>
                        <tr>
                            <td>
                                Name
                            </td>
                            <td>
                                :<?=$_SESSION['current_user'][0]?>                     </td>
                            <td>
                                <img src="../assets/student.png" alt="Image" border="0"> <br>
                                <a href="change_dp.php">Change</a>
                            </td>
                        </tr>

                        <tr>
                            <td >
                                Email
                            </td>
                            <td>
                                :<?=$_SESSION['current_user'][1]?>                            </td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td>
                                :<?=$_SESSION['current_user'][2]?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Gender
                            </td>
                            <td >
                                :<?=$_SESSION['current_user'][4]?>                            </td>
                        </tr>

                        <tr>
                            <td>
                                Date of Birth
                            </td>
                            <td>
                                : <?=$_SESSION['current_user'][5]?>                           </td>
                            <td></td>
                        </tr>

                    </table>
                </fieldset>
                <a href="profile.php">Refresh</a>
            </td>
        </tr>
        </tr>

    </table>
           <img src="../assets/School.jpg" alt="A school logo" width="700" height="300">
 </fieldset>
</body>

</html>
