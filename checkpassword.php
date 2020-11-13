<?php
include("data.php");
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
        echo "Password validated!";
        $connection = new data();
        $conobj = $connection->openCon();
        $userQuery = $connection->checkUser($conobj, "users", $_SESSION["username"], $_SESSION["password"]);

        if($userQuery->num_rows > 0)
        {
            echo "Successfully verified";
            $row = $userQuery->fetch_assoc();
            $username = $row["username"];
            $updatePassQuery = $connection->changeUserPassword($conobj, "users", $pass1, $username);
            echo "Password successfully changed!";
            echo $updatePassQuery;
        }
        else
        {
            echo "Incorrect password <br>";
        }
    }
}
?>