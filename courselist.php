<?php 
    session_start(); 
    include('data.php');
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 align="center"> Course List </h1>
    <table  width = "100%" border = "1px solid black">
    <tr>
    <th> Course ID </th>
    <th> Course Name </th>
    </tr>
    <?php $x=5;
        $_SESSION["counter".$x] = $x;
        $connection = new data();
        $conobj = $connection->openCon();
        $sql = "select * from courselist";
        $getRows = $connection->SelectQuery($conobj, $sql);
        $_SESSION['rows'] = $getRows;
        while($row = mysqli_fetch_array($getRows))
        {
        echo "
    <tr>
    <form>
    <td>".$row['id']."</td>
    <td>".$row['name']."</td>
    </form>
    </tr>";
    
    }?>
    </table>
</body>
</html>