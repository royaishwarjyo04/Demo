<?php 
    session_start();
    include("data.php");

    $connection = new data();
    $conobj = $connection->openCon();
    $sql = "select * from resultlist where id = ".$_POST['btn'];
    $sql2 = "select * from student where userid = ".$_POST['btn'];
    $getRows = $connection->SelectQuery($conobj, $sql);
    $getRows2 = $connection->SelectQuery($conobj, $sql2);
    $rows = mysqli_fetch_array($getRows);
    $rows2 = mysqli_fetch_array($getRows2);
    $_SESSION["id"] = $rows["id"];

    
    echo "Name: ".$rows2['username']."<br>";
    echo "ID: ".$rows['id']."<br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Mark</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <form method = "POST" action = "confirmMark.php">
        <input name = "mark" type="number" min="0" step="1">
        <button type = "submit" >submit</button>
    </form>
</body>
</html>