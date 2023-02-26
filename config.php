<?php
$host_name= 'localhost';
$name= 'root';
$pass= '';
$db= 'resume_maker';

$con= mysqli_connect($host_name, $name, $pass) or die ('Database Error!');
mysqli_select_db($con, $db);
?> 