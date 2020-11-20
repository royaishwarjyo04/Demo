<?php
   session_start();
   include("data.php");
   $mark = $_POST["mark"];

   $gpa = 0.00;

   $connection = new data();
   $conobj = $connection->openCon();
   $sql = "update students set marks = ".$mark." where id = ".$_SESSION["id"];
   $getRows = $connection->UpdateQuery($conobj, $sql);
   
   if($mark >= 90)
   {
       $gpa = 4.00;
   }
   elseif($mark < 90 && $mark >= 85)
   {
    $gpa = 3.75;
   }
   elseif($mark < 85 && $mark >= 80)
   {
    $gpa = 3.50;
   }
   elseif($mark < 80 && $mark >= 75)
   {
    $gpa = 3.25;
   }
   elseif($mark < 75 && $mark >= 70)
   {
    $gpa = 3.00;
   }
   elseif($mark < 70 && $mark >= 65)
   {
    $gpa = 2.75;
   }
   elseif($mark < 65 && $mark >= 60)
   {
    $gpa = 2.5;
   }
   elseif($mark < 60 && $mark >= 55)
   {
    $gpa = 2.25;
   }
   elseif($mark < 55 && $mark >= 50)
   {
    $gpa = 2.00;
   }
   else
   {
    $gpa = 0.00;
   }

   $gpaSql = "update students set gpa = ".$gpa." where id = ".$_SESSION["id"];
   $getRows = $connection->UpdateQuery($conobj, $gpaSql);

?>