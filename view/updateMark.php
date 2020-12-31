<?php 
    session_start();
    include('../control/data.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Mark</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php
    $connection = new data();
    $conobj = $connection->openCon();
    $sql = "select * from resultlist where id = ".$_POST['btn'];
    $sql2 = "select * from students where userid = ".$_POST['btn'];
    $getRows = $connection->SelectQuery($conobj, $sql);
    $getRows2 = $connection->SelectQuery($conobj, $sql2);
    $rows = mysqli_fetch_array($getRows);
    $rows2 = mysqli_fetch_array($getRows2);
    $_SESSION["id"] = $rows["id"];

    
    echo "Name: ".$rows2['username']."<br>";
    echo "ID: ".$rows['id']."<br>Course: ".$rows['course'];
?>
    <form id="update" method = "POST" action = "../control/confirmMark.php">
        <input id = "mark" name = "mark" type="number" min="0" step="1">
        <button type = "submit" >submit</button>
    </form>
    <div id="updateResult"></div>
    <script src="../scripts/jquery.js"></script>
    <script type="text/javascript" src="../scripts/script.js"></script>
</body>
</html>