<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form align = "center" method = "POST" action = "check.php">
        <h1>Log in portal</h1><br><br>
        <input type = "text" name ="username"><br><br>
        <input type = "password" name="password"><br><br>
        <button type = "submit">Log In</button>
    </form>
</body>
</html>