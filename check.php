<?php
    include('data.php');
    session_start();
    if(isset($_POST["username"]) && isset($_POST['password']))
    {
        echo "Input valid";

        $username = $_POST["username"];
        $password = $_POST["password"];

        $connection = new data();
        $conobj = $connection->openCon();

        $userQuery = $connection->checkUser($conobj, "users", $username, $password);  //hostdatabase, table, 

        if($userQuery->num_rows > 0)
        {
            $row = $userQuery->fetch_assoc();
            echo "<br> <br>";
            $_SESSION["name"] = $row["name"];
            $_SESSION["username"] = $row["username"];
            $_SESSION["id"] = $row["id"];
            $_SESSION["password"] = $row["password"];
            $_SESSION["address"] = $row["address"];
            $_SESSION["contact"] = $row["contact"];
            $_SESSION["dob"] = $row["dob"];
            $_SESSION["gender"] = $row["gender"];
            $_SESSION["department"] = $row["department"];
            
            header("location: homepage.php" );
        }
        else
        {
            echo "error finding value in database!";
        }
    }
    else
    {
        echo "Input not valid";
    }
?>