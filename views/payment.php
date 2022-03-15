<?php 
    include('header.php');
?>

<html>
<head>

    <title>Payment</title>
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
                <form>
                    <style >
                        table, th, td 
                        {
                     border: 1px solid black;
                     border-collapse: collapse;
                       }
                    </style>
                   
                     
                <fieldset>
                  <legend>Payment</legend>
                        
                    <table style="width:100%">
                      <tr>
                        <th>Course Name</th>
                        <th>Amount</th>
                      </tr>

                      <tr>
                         <td>Bangla</td>
                         <td>500</td>
                      </tr>
  
  
                      <tr>
                         <td>English</td>
                         <td>1000</td>
                      </tr>

                      <tr>
                         <td>Genarel Mathematics</td>
                         <td>1000</td>
                      </tr> 

                      <tr>
                         <td>Higher Mathematics</td>
                         <td>1000</td>
                         </tr>
  
                     <tr>

                         <td>Physics</td>
                         <td>1000</td>
    
                    </tr>

                    <tr>
                        <td>Chemistry</td>
                        <td>1000</td>
                    </tr>

                    <tr>
                        <td>Biology</td>
                        <td>1000</td>
                    </tr>

                    <tr>
                        <td>ICT</td>
                        <td>1000</td>
                    </tr>

                    <tr>
                        <td><b>Total Amount</b></td>
                        <td><b>7500</b></td>
                    </tr>

  
                    </table>

                    <a href="payOnline.php"> <b>Pay Online</b></a>

                </fieldset>
              </form>
                
            </td>
         </tr>
        </tr>
        
    </table>

       <img src="../assets/School.jpg" alt="A school logo" width="700" height="300">
 </fieldset>

</body>

</html>
