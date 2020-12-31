<?php
session_start();
if(isset($_SESSION['username'])&&isset($_SESSION['password']))
{

}
else
{
    echo "Session expired!";
    return false;
}
//echo $_SESSION['password'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="icon" href="images/icon.ico" type="image/icon type">
    <link rel="stylesheet" href="../css/style.css">
    <script type="text/javascript">
        var myPassword = "<?php echo $_SESSION['password'];?>";
    </script>
</head>
<body>
<h1 align="center"> Change Password </h1>
<div align="center" class="tbl">
    <form  method= "POST" action = "../control/updatePassword.php" id="password">
        <table border = "1px solid black">
            <tr>
                <td> Current Password </td>
                <td> <input type="password" id="currentPassword"> </td>
                
            </tr>
            <tr>
                <td> New Password </td>
                <td> <input type="password" id= "newPassword" name= "newPassword" > </td>
            </tr> 
            <tr>
                <td> Confirm New Password  </td>
                <td> <input type="password" id= "confirmPassword"> </td>
            </tr>
            <tr>
                <td colspan="2" align = "center">
                    <input type="submit" class="btn" id="chngsubmit" value="Confirm">  
                </td>
            </tr>
            <tr>
                <td colspan="2" align = "center">
                    <input type="button" id="chngback" class="btn" value="Go Back" onclick="goToProfile()">
                </td>
            </tr>
        </table>
        <br>
    </form>
    <h4 align="center" id='passwordResult'></h4>
    
</div>
<script  src="../scripts/jquery.js"></script>
<script  src="../scripts/script.js"></script>
<?php include("../footer/footer.php"); ?>
</body>
</html>