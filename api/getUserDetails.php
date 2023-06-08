<?php
include 'databaseConnection.php';

$user = [];

$userQuery = "SELECT * FROM user";
$userResult = $conn->query($userQuery);

if ($userResult->num_rows > 0) {
    while ($row = $userResult->fetch_assoc()) {
        $user[] = $row;
    }
}

header('Content-Type: application/json');
echo json_encode($user);
?>
