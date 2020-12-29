<?php 
    class data
    {
        function openCon()
        {
            $dbhost = "localhost";
            $dbuser = "root";
            $dbpass = "";
            $db = "universitymanagement";

            $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n".$conn -> error);

            return $conn;
        }

        function checkUser($conn,  $table, $username, $password)
        {
            $result = $conn->query("select * from ".$table." where userid = '".$username."' and userpassword='".$password."'");
            return $result;
        }
        function User($conn,  $table, $username)
        {
            $result = $conn->query("select * from ".$table." where username = '$username'");
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

        function getStudents($conn,  $table)
        {
            $result = $conn->query("select * from ".$table);
            return $result;
        }

        function SelectQuery($conn, $sql)
        {
            $result = $conn->query($sql);
            return $result;
        }

        function InsertQuery($conn, $sql)
        {
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
                return true;
                } 
            else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        function UpdateQuery($conn, $sql)
        {
            if ($conn->query($sql) === TRUE) {
                echo "Updated successfully!";
                return true;
                } 
            else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }
?>