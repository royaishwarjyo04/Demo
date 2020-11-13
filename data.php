<?php 
    class data
    {
        function openCon()
        {
            $dbhost = "localhost";
            $dbuser = "root";
            $dbpass = "";
            $db = "projectdb";

            $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n".$conn -> error);

            return $conn;
        }

        function checkUser($conn,  $table, $username, $password)
        {
            $result = $conn->query("select * from ".$table." where username = '".$username."' and password='".$password."'");
            return $result;
        }

        function changeUserPassword($conn, $table, $newpassword, $username)
        {
            $result = $conn->query("update ".$table." set password = '".$newpassword."' where username = '".$username."'");
            if($result === TRUE)
            {
                return "Successfully updated!";
            }
            else
            return "Failed update!";
        }
    }
?>