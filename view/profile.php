<?php
   session_start();
   include('../control/data.php');
   //echo $_SESSION['username']." ".$_SESSION['password'];
   if(isset($_SESSION['username'])&&isset($_SESSION['password']))
   {
    $connect=new data();
    $conobj=$connect->OpenCon();
    $sql="SELECT * FROM faculty where username = '".$_SESSION['username']."' and userpassword = '".$_SESSION['password']."'";
    //echo $sql;
 
    $result=$connect->SelectQuery($conobj, $sql);
     
     $row = $result->fetch_assoc();
   }
   else
   {
       echo "Session expired!";
       return false;
   }
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="icon" href="../images/icon.ico" type="image/icon type">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1 align="center"> Profile </h1>
    <div class="sticky">
        <table>
            <tr>
                <th>
                    <button onclick="location.href = '../homepage.php';" class="navbtn">  Back </button>
                </th>
                <th>
                    <button onclick="goToCourseList()" class="navbtn">  Course List </button>
                </th>
                <th>
                    <button onclick = "goToResults()" class="navbtn">  Result </button>
                </th>
                <th>
                    <button onclick = "goToLogOut()" class="navbtn">  Log Out </button>
                </th>
            </tr>
        </table>
    </div>
    
    <!--
    <h1>this</h1>
    <h1>this</h1>
    <h1>this</h1>
    <h1>this</h1>
    <h1>this</h1>
    -->
    <div class="tbl">
        <table border = "1px solid black" align = "left" class="tbl">
            <tr>
                <td align = "center" colspan=2><img src = "../images/profilepic.jpg" width="150" height ="150"></td>
            </tr>
            <tr>
                <td> Name: </td>
                <td> <?php echo $row["username"] ?></td>
            </tr>
            <tr>
                <td> ID: </td>
                <td> <?php echo $row["userid"] ?></td>
            </tr> 
            <tr>
                <td> Department: </td>
                <td>  <?php echo $row["depertment"] ?> </td>
            </tr>
            <tr>
                <td> Contact: </td>
                <td>  <?php echo $row["email"] ?> </td>
            </tr>
            <tr>
                <td> Date of Birth: </td>
                <td>  <?php echo $row["dateofbirth"] ?> </td>
            </tr>
            <tr>
                <td> Gender: </td>
                <td>  <?php echo $row["gender"] ?> </td>
            </tr>
            <tr>
                <td align = "center" colspan=2>
                    <br>
                    <button class="btn" onclick="goToChangePassword()">  Change Password </button> 
                    <br> <br>
                </td>
            </tr>
        </table>
    </div>
    
    <?php include("../footer/footer.php"); ?>
    <script  src="../scripts/jquery.js"></script>
    <script  src="../scripts/script.js"></script>
</body>
</html>