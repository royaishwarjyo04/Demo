<?php
   session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <h1 align="center">  Profile </h1>
    <table>
    <tr>
    <td> Name </td>
    <td> <?php echo $_SESSION["name"] ?></td>
    </tr>
    <tr>
    <td> ID </td>
    <td> <?php echo $_SESSION["id"] ?></td>
    </tr> 
    <tr>
    <td> Address </td>
    <td>  <?php echo $_SESSION["address"] ?> </td>
    </tr>
    <tr>
    <td> Contact </td>
    <td>  <?php echo $_SESSION["contact"] ?> </td>
    </tr>
    <tr>
    <td> <button> <a href= "settings.php"> Settings </a> </button> <br> </br> </td>
    </tr>
   
  </table>
</body>
</html>