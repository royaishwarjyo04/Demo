<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 align="center"> Change Password </h1>
    <form  method= "POST" action = "checkpassword.php">
    <table border = "1px solid black">
    <tr>
    <td> Current Password </td>
    <td> <input type="password" name= "currentpassword" required > </td>
    </tr>
    <tr>
    <td> New Password </td>
    <td> <input type="password" name= "newpassword" required> </td>
    </tr> 
    <tr>
    <td> Confirm New Password  </td>
    <td> <input type="password" name= "confirmpassword" required> </td>
    </tr>
    </table>
    <br>
    <button type="submit"> Submit </button> 
    </form>
</body>
</html>