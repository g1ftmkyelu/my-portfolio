<?php

$servername = "localhost";
$username = "root";
$dbpassword = "N@ruch1g0";
$dbname = "my-portfolio";


$conn = new mysqli($servername, $username, $dbpassword, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

