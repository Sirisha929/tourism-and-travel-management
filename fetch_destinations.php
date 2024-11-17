<?php
include 'db_connect.php';
$result = $conn->query("SELECT * FROM Destinations");
$destinations = $result->fetch_all(MYSQLI_ASSOC);
echo json_encode($destinations);
?>
