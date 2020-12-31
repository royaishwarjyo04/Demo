<?php
session_start();
include("data.php");
if(isset($_POST['newPassword']) == true && empty($_POST['newPassword']) == false)
{
    
    $newPassword = $_POST['newPassword'];

    $connection = new data();
    $conn = $connection->openCon();

    $sqlUser = $conn->prepare("UPDATE user SET userpassword = ? WHERE userId = ?");
    $sqlFaculty = $conn->prepare("UPDATE faculty SET userpassword = ? WHERE userId = ?");
    

    $sqlUser->bind_param("ss",$newPassword, $_SESSION['userid']);
    $sqlFaculty->bind_param("ss",$newPassword, $_SESSION['userid']);

    if($sqlUser->execute() == true && $sqlFaculty->execute() == true)
    {
        echo "Updated successfully!";
        $_SESSION['password'] = $_POST['newPassword'];
    }
    else
    {
        echo "Update failed!";
    }
    //$result = $connection->UpdateQuery($conn, $sql);

    //echo $_POST['newPassword']." ".$_SESSION['userid'];

    //echo "Update successful!";
}
else
{
    echo "Update failed";
}
?>