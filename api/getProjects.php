<?php
    include 'databaseConnection.php';

$projects = [];

$projectQuery = "SELECT * FROM projects";
$projectResult = $conn->query($projectQuery);

if ($projectResult->num_rows > 0) {
    while ($row = $projectResult->fetch_assoc()) {
        $projects[] = $row;
    }
}

header('Content-Type: application/json');
echo json_encode($projects);
?>
