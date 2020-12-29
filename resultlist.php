<?php 
    session_start(); 
    include('data.php'); //inline
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <h1 align="center"> Result List </h1>
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
             <a class="btn" href= "logout.php"> Log Out</a> <br> <br>
             </th>
         </tr>
     </table>
 </div>
    <table  width = "100%" border = "1px solid black"> 
    <tr >
    <th> ID </th>
    <th> TotalMark </th>
    <th> CGPA </th>
    </tr>
    <tr >
    <td>1</td>
    <td>100</td>
    <td>4.00</td>
    </tr>
    <tr >
    <td>2</td>
    <td>80</td>
    <td>3.75</td>
    </tr>
    <tr >
    <td>3</td>
    <td>90</td>
    <td>4.00</td>
    </tr>
    </table> 
    <div class="footer">
    <p>
      developed by royaishwarjyo 
      <br>
      year 2020
</p>
 </div>
</body>
</html>