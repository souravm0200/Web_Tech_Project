<?php 
    include('header.php');
?>
<html>
<head>

    <title>Edit Profile</title>
</head>

<body>
    <fieldset style="width:500px">
    <table border="2" style="border-collapse:collapse;" width="700px" height="300px">
        <tr >
            <td >
                <h1>A.N.S SCHOOL</h1>
            </td>
            <td >
                <h4>Welcome !</h4>
                <a href="./profile.php"><?=$_SESSION['current_user'][0]?></a> |
                <a href="./logout.php">Logout</a>
            </td>
        </tr>
        <tr>
            <td>
                <b>Identity</b> <br>
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
                    <legend>EDIT PROFILE</legend>
                    <form action="../controllers/edit.php" method="post">
                        <table>
                            <tr>
                                <td>
                                    Name
                                </td>
                                <td>
                                    : <input type="text" name="name" value="">
                                </td>
                            </tr>
                         
                            <tr>
                                <td>
                                    Email
                                </td>
                                <td>
                                    : <input type="email" name="email" value="">
                                </td>
                            </tr>

                            <tr>
                
                                <td>Username</td>
                               <td>:<input type="text" name="username" value=""><hr></td>
                           </tr>

                           <tr>
                               <td>Password</td>
                               <td>:<input type="password" name="password" value=""><hr></td>
                           </tr>
                          
                           
                            <tr>
                                <td>
                                   Gender
                                </td>
                                <td>
                                        :
                                        <input type="radio" name="gender"  checked="checked" value="Male"> Male
                                        <input type="radio" name="gender"  value="Female"> Female
                                        <input type="radio" name="gender"  value="Other"> Other
                                </td>
                            </tr>


            <tr>
                <td>
                    <fieldset>
                        <legend>Date of Birth</legend>
                        <input type="date" name="dob" value="">
                        
                    </fieldset><hr>
                </td>
            </tr>
                           
                           
                            <tr>
                                <td>
                                    <input type="submit" name="submit" value="Edit">
                                </td>
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
