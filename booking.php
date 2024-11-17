<?php
session_start();
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $destination_id = $_POST['destination_id'];
    $booking_date = $_POST['booking_date'];
    $status = 'Pending';

    $stmt = $conn->prepare("INSERT INTO Bookings (user_id, destination_id, booking_date, status) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("iiss", $user_id, $destination_id, $booking_date, $status);
    if ($stmt->execute()) {
        echo "Booking successful!";
    } else {
        echo "Booking failed.";
    }
}
?>
