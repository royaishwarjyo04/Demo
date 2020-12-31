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
   
   $userid = $_SESSION['username'];
   $password = $_SESSION['password'];
   
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="icon" href="images/icon.ico" type="image/icon type">
    <link rel="stylesheet" href="css\style.css">
    <script type="text/javascript" src="scripts/script.js"></script>
</head>
<body>
    <h1 align="center"> Welcome </h1>
    <div class="sticky">
        <table>
            <tr>
                <th>
                    <button onclick="location.href = './view/profile.php';" class="navbtn">  Profile </button>
                </th>
                <th>
                    <button onclick="location.href = './view/courselist.php';" class="navbtn">  Course List </button>
                </th>
                <th>
                    <button onclick = "location.href = './view/result.php';" class="navbtn">  Result </button>
                </th>
                <th>
                    <button onclick = "location.href = '../session/logoutsession.php';" class="navbtn">  Log Out </button>
                </th>
            </tr>
        </table>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <h4>end</h4>
    <?php include("footer/footer.php"); ?>
</body>
</html>