<?php

  $servername = "localhost";
  $username = "jumbotron";
  $dbpassword = "N@ruch1g0";
  $dbname = "my_portfolio";


  $conn = new mysqli($servername, $username, $dbpassword, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

