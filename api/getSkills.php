<?php
include 'databaseConnection.php';

$skills = [];

$skillQuery = "SELECT * FROM skills";
$skillResult = $conn->query($skillQuery);

if ($skillResult->num_rows > 0) {
    while ($row = $skillResult->fetch_assoc()) {
        $skills[] = $row;
    }
}

header('Content-Type: application/json');
echo json_encode($skills);
?>
