<?php
session_start();
//echo $_SESSION['password'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript">
        var myPassword = "<?php echo $_SESSION['password'];?>";
    </script>
</head>
<body>
<h1 align="center"> Change Password </h1>
<div class="tbl">
    <form  method= "POST" action = "updatePassword.php" id="password">
        <table border = "1px solid black">
            <tr>
                <td> Current Password </td>
                <td> <input type="password" id="currentPassword" name= "currentPassword" > </td>
                
            </tr>
            <tr>
                <td> New Password </td>
                <td> <input type="password" id= "newPassword" name= "newPassword" > </td>
            </tr> 
            <tr>
                <td> Confirm New Password  </td>
                <td> <input type="password" id= "confirmPassword" name= "confirmPassword" > </td>
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
    <h4>Error</h4>
    
</div>
<script  src="scripts/jquery.js"></script>
<script  src="scripts/script.js"></script>
</body>
</html>