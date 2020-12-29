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
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <h1 align="center"> Student List </h1>
   <div class="sticky">
     <table>
         <tr>
             <th>
              <a class="btn" href= "homepage.php">  Back </a> <br> </br>
             </th>
             <th>
             <a class="btn" href= "courselist.php"> Course List </a> <br> <br>
             </th>
             <th>
             <a class="btn" href= "result.php"> Results </a> <br> <br>
             </th>
             <th>
             <a class="btn" href= "logout.php"> Log Out</a> <br> <br>
             </th>
         </tr>
     </table>
 </div>
    <table  width = "100%" border = "1px solid black">
    <tr >
    <th> Username </th>
    <th> ID </th>
    <th> Email </th>
    <th> Gender </th>
    <th> Date of Birth </th>
    <th> Department </th>
    <th> CGPA </th>
    <th> Status </th>
    <th></th>
    </tr>
    <?php $x=5;
        $_SESSION["count".$x] = $x;
        $connection = new data();
        $conobj = $connection->openCon();
        $sql = "select * from student";
        $getRows = $connection->SelectQuery($conobj, $sql);
        $_SESSION['rows'] = $getRows;
        while($row = mysqli_fetch_array($getRows))
        {
        echo "
    <tr>
    <form method = 'POST' action = 'updateMark.php'>
    <td>".$row['username']."</td>
    <td>".$row['userid']."</td>
    <td>".$row['email']."</td>
    <td>".$row['gender']."</td>
    <td>".$row['dateofbirth']."</td>
    <td>".$row['depertment']."</td>
    <td>".$row['cgpa']."</td>
    <td>".$row['activestatus']."</td>
    <th><button name = 'btn' value = '".$row['userid']."' type = 'submit'>update</button></th>
    </form>
    </tr>";
    
    }?>
    </table> 
</body>
</html>