<?php 
    session_start();
    include("data.php");

    $connection = new data();
    $conobj = $connection->openCon();
    $sql = "select * from students where id = ".$_POST['btn'];
    $getRows = $connection->SelectQuery($conobj, $sql);
    $rows = mysqli_fetch_array($getRows);
    $_SESSION["id"] = $rows["id"];

    
    echo "Name: ".$rows['name']."<br>";
    echo "ID: ".$rows['id']."<br>";
    echo "Current mark: ".$rows['marks']."<br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Mark</title>
</head>
<body>
    <form method = "POST" action = "confirmMark.php">
        <input name = "mark" type="number" min="0" step="1">
        <button type = "submit" >submit</button>
    </form>
</body>
</html>