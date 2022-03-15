<?php 
    include('header.php');
?>

<html>
<head>

    <title>Meeting</title>
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
                    <legend>Meeting</legend>
                    Bangla[Sat: 10:00-11:00] <a href="https://meet.google.com/vzz-wnxq-gfc"> <b>Join</b></a><br><hr>

                    English[Sat: 12:00-1:00] <a href="https://meet.google.com/xhf-mbbz-afi"> <b>Join</b></a><br><hr>

                    Genarel Mathematics[Sun: 10:00-11:00] <a href="https://meet.google.com/cza-hzvr-zgk"> <b>Join</b></a><br><hr>

                    Higher Mathematics[Sun: 12:00-1:00] <a href="https://meet.google.com/pug-acny-hwn"> <b> Join</b></a><br><hr>

                    Physics[Mon: 10:00-11:00] <a href="https://meet.google.com/mxy-ochr-riv"> <b> Join</b></a><br><hr>

                    Chemistry[Mon: 12:00-1:00] <a href="https://meet.google.com/qqr-acvk-mke"> <b>Join</b></a><br><hr>

                    Biology[Tues: 10:00-11:00] <a href="https://meet.google.com/bco-fqbg-mka"> <b>Join</b></a><br><hr>

                    ICT[Tues: 12:00-1:00] <a href="https://meet.google.com/dza-zqjn-eop"> <b>Join</b></a><br><hr>

                </fieldset>
                
            </td>
        </tr>
        </tr>
        
    </table>

       <img src="../assets/School.jpg" alt="A school logo" width="700" height="300">
 </fieldset>

</body>

</html>
