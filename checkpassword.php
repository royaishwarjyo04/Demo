<?php
session_start();
if (isset($_POST["currentpassword"])||isset($_POST["newpassword"])||isset($_POST["confirmpassword"]) )
{
   $pass1=$_POST["newpassword"];
   $pass2=$_POST["confirmpassword"];
   if(preg_match("/^[a-zA-Z]*$/",$pass1)&& preg_match("/^[0-9]*$/",$pass1))
   {
       echo "code hoise";
   }
   /*if ($pass1==$pass2)
   {
       echo "Password matched";
   }
   */
}
?>