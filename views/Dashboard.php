<?php 
    include('header.php');
?>

<html>
<head>

    <title>Dashboard</title>
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
                 <fieldset>
                  <legend>Class Schedule</legend>

                  <style >
                        table, th, td 
                        {
                     border: 1px solid black;
                     border-collapse: collapse;
                       }
                    </style>
                        
                    <table style="width:100%">
                      <tr>
                        <th>Time</th>
                        <th>Sat</th>
                        <th>Sun</th>
                        <th>Mon</th>
                        <th>Tues</th>
                        <th>Wed</th>
                        <th>Thu</th>
                        <th>Fri</th>
                      </tr>

                      <tr>
                         <td>9:00-10:00</td>
                         <td></td>
                         <td></td>
                         <td></td>
                         <td></td>
                         <td></td>
                         <td></td>
                      </tr>
  
  
                      <tr>
                         <td>10:00-11:00</td>
                         <td>Bangla</td>
                         <td>Genarel Math.</td>
                         <td>Physics</td>
                         <td>Biology</td>
                         <td></td>
                         <td></td>
                         <td></td>
                      </tr>

                      <tr>
                         <td>11:00-12:00</td>
                         <td></td>
                         <td></td>
                         <td></td>
                         <td></td>
                         <td></td>
                         <td></td>
                         <td></td>
                      </tr> 

                      <tr>
                        <td>12:00-1:00</td>
                        <td>English</td>
                        <td>Higher Math.</td>
                        <td>Chemistry</td>
                        <td>ICT</td>
                        <td></td>
                        <td></td>
                        <td></td>

                      </tr>
  
                     <tr>

                         <td>1:00-2:00</td>
                         <td></td>
                         <td></td>
                         <td></td>
                         <td></td>
                         <td></td>
                         <td></td>
                         <td></td>
    
                    </tr>

                  
  
                    </table>

                   

                </fieldset>
            </td>
        </tr>
        
        
    </table>

       <img src="../assets/School.jpg" alt="A school logo" width="700" height="300">
 </fieldset>

</body>

</html>
