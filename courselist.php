<?php 
    session_start(); 
    include('data.php');

    
   if(isset($_SESSION['username'])&&isset($_SESSION['password']))
   {
    $connect=new data();
    $conobj=$connect->OpenCon();
    $sql="SELECT * FROM faculty where username = '".$_SESSION['username']."' and userpassword = '".$_SESSION['password']."'";
    //echo $sql;
 
    $result=$connect->SelectQuery($conobj, $sql);
     
     $row = $result->fetch_assoc();
   }
   else
   {
       echo "Session expired!";
       return false;
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css\style.css">
    <script type="text/javascript" src="scripts/script.js"></script>
</head>
<body>
<h1 align="center"> Course List </h1>
<div class="sticky">
        <table>
            <tr>
                <th>
                    <button onclick="goToProfile()" class="navbtn">  Profile </button>
                </th>
                <th>
                    <button onclick="goToHome()" class="navbtn">  Back </button>
                </th>
                <th>
                    <button onclick = "goToResults()" class="navbtn">  Result </button>
                </th>
                <th>
                    <button onclick = "goToLogOut()" class="navbtn">  Log Out </button>
                </th>
            </tr>
        </table>
</div>
<div class="tbl">
    <table  width = "100%" border = "1px solid black">
        <tr>
            <th> Course name </th>
            <th> Student ID </th>
        </tr>
        <?php 
        $connection = new data();
        $conobj = $connection->openCon();
        $user=$_SESSION["userid"];
        $sql = "select * from assignecourses where tid='$user'";
        //echo $sql;
        
        $getRows = $connection->SelectQuery($conobj, $sql);
       
        if($getRows->num_rows> 0)
        {
            while($row =$getRows->fetch_assoc())
            {
                echo "<tr><form><td>".$row['cname']."</td><td>".$row['sid']."</td></form></tr>";
            }
        }
        ?>
    </table>
    <?php include("footer/footer.php"); ?>
 </div>
</body>
</html>