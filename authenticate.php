<?php
include_once("include/layout/db_connect.php");
if(isset($_post["submitsignup"]));
echo "sign seen";
$name =$_post["name"];
$lastname =$_post["lastname"];
$email =$_post["email"];
$address =$_post["address"];
$city =$_post["city"];
$number =$post["number"];
$password =$post["password"];
$cpassword =$post["cpassword"];
$submitsignup =$post["submitisgnup"];
 
echo $name."<br/>".$lastname."<br/>".$email."<br/>".$address."<br/>".$city."<br/>".$number."<br/>".$password."<br/>".$cpassword."<br/>".$submitsignup."<br/>";