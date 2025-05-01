<?php 

$host = 'localhost'; // is what we have for now 
$db   = 'hackathon';//for when we have one 
$user = 'root';//if we have or root
$pass = '';// probably is emprty""

$con = new mysqli($host, $user, $pass, $db); // the classic "localhost","root", "", "test", 

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

?>