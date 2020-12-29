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
    <link rel="stylesheet" href="css\style.css">
    <script type="text/javascript" src="scripts/script.js"></script>
</head>
<body>
   <h1 align="center"> Result List </h1>
   <div class="sticky">
        <table>
            <tr>
                <th>
                    <button onclick="goToProfile()" class="navbtn">  Profile </button>
                </th>
                <th>
                    <button onclick = "goToCourseList()" class="navbtn">  Courses </button>
                </th>
                <th>
                    <button onclick="goToHome()" class="navbtn">  Back </button>
                </th>
                <th>
                    <button onclick = "goToLogOut()" class="navbtn">  Log Out </button>
                </th>
            </tr>
        </table>
</div>
<div class="tbl">
    <table  width = "100%" border = "1px solid black">
    <tr >
    <th> ID </th>
    <th> Course </th>
    <th> Mark </th>
    <th> GPA </th>
    <th> Update </th>
    </tr>
    
    <?php 
        $connection = new data();
        $conobj = $connection->openCon();
        $sql = "select * from resultlist";
        $getRows = $connection->SelectQuery($conobj, $sql);
        $_SESSION['rows'] = $getRows;
        while($row = mysqli_fetch_array($getRows))
        {
            echo "<tr><form method = 'POST' action = 'updateMark.php'><td>".$row['id']."</td>
            <td>".$row['course']."</td>
            <td>".$row['mark']."</td>
            <td>".$row['gpa']."</td>
            <th><button name = 'btn' class = 'btn' value = '".$row['id']."' >update</button></th>
            </form>
            </tr>";
            }
        ?>
    </table> 
</div>
    <?php include("footer/footer.php"); ?>
</body>
</html>