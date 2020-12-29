<?php
   session_start();
   
   $userid = $_SESSION['username'];
   $password = $_SESSION['password'];
   //echo $username;
   //include("headfoot/header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="css\style.css">
    <script type="text/javascript" src="scripts/script.js"></script>
</head>
<body>
    <h1 align="center"> Welcome </h1>
    <div class="sticky">
        <table>
            <tr>
                <th>
                    <button onclick="goToProfile()" class="navbtn">  Profile </button>
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
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <h4>end</h4>
    <?php include("footer/footer.php"); ?>
</body>
</html>