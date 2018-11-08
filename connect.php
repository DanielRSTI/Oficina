<?php 

$servername = "localhost";
$username = "root";
$password = "vertrigo";
$bdname = "oficinadehamburguer";

$con = new mysqli($servername, $username, $password, $bdname);
mysqli_set_charset($con, "utf8");


 ?>