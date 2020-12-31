<?php
include('control/data.php');
session_start();
if (isset($_POST["currentpassword"])||isset($_POST["newpassword"])||isset($_POST["confirmpassword"]) )
{
    $pass1=$_POST["newpassword"];
    $pass2=$_POST["confirmpassword"];
    if(!preg_match("#[A-Z]+#",$pass1))
    {
        echo "password must contain a capital letter<br>";
    }
    if(!preg_match("#[0-9]+#",$pass1))
    {
        echo "password must contain a number<br>";
    }
    if(strlen($pass1) < 8)
    {
        echo "password must be atleast 8 characters<br>";
    }
    if ($pass1!=$pass2)
    {
        echo "Passwords do not match!\n";
    }

    if(preg_match("#[A-Z]+#",$pass1) == 1 && preg_match("#[0-9]+#",$pass1) == 1 && strlen($pass1) >= 8 && $pass1==$pass2)
    {
        //echo "Password validated!<br>";
        $connection = new data();
        $conobj = $connection->openCon();
        $userQuery = $connection->checkUser($conobj, "user", $_SESSION["userid"], $_SESSION["password"]);

        if($userQuery->num_rows > 0)
        {
            //echo "Successfully verified!<br>";
            $row = $userQuery->fetch_assoc();
            $username = $row["username"];
            $sql = "update user set userpassword = '".$pass1."' where username = '".$username."'";
            $sql2 = "update faculty set userpassword = '".$pass1."' where username = '".$username."'";
            $updatePassQuery = $connection->UpdateQuery($conobj, $sql);
            $updatePassQuery = $connection->UpdateQuery($conobj, $sql2);
            //echo $sql;
            echo "Password successfully changed!<br>";
            $_SESSION["password"] = $pass1;
            //echo $updatePassQuery;
        }
        else
        {
            echo "Incorrect password <br>";
        }
    }
    else
    {
        echo "Password not validated!<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3><a href = "logout.php"> Please Log In Again!</a></h3>
</body>
</html>