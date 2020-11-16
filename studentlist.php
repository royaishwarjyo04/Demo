<?php 
    session_start(); 
    include('data.php');
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Student</title>
</head>
<body>
   <h1 align="center"> Student List </h1>
    <table  width = "100%" border = "1px solid black">
    <tr >
    <th> Name </th>
    <th> ID </th>
    <th> Course </th>
    <th> Marks </th>
    <th></th>
    </tr>
    <?php $x=5;
        $_SESSION["count".$x] = $x;
        $connection = new data();
        $conobj = $connection->openCon();
        $getRows = $connection->getStudents($conobj, "studentlist");
        $_SESSION['rows'] = $getRows;
        while($row = mysqli_fetch_array($getRows))
        {
        echo "
    <tr>
    <form method = 'POST' action = 'updateMark.php'>
    <td>".$row['name']."</td>
    <td>".$row['id']."</td>
    <td>".$row['course']."</td>
    <td>".$row['marks']."</td>
    <th><button name = 'btn' value = '".$row['id']."' type = 'submit'>update</button></th>
    </form>
    </tr>";
    
    }?>
    </table> 
</body>
</html>