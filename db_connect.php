<?php
$mysqli = new mysqli("localhost","muller","Maryngonde6","my_db");
//check connection
if ($mysqli ->connect_errno){
    echo"failed to connect to mysqli".$mysqli ->connect_errno;
    exit();
}
?>