<?php 
$host = "localhost";
$db = "homework";
$user = "root";
$password = "";

$conn = new mysqli($host,$user,$password,$db);


if ($conn->connect_errno) {
    exit ("Connection failure: error ".conn->connect_error);

}

?>