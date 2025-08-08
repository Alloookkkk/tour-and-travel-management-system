<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $date = $_POST['date'] ?? '';
    $message = $_POST['message'] ?? '';
    $guide = $_POST['guide'] ?? '';

    // Save to file or database
    $data = "$name | $email | $date | $guide | $message\n";
    file_put_contents("bookings.txt", $data, FILE_APPEND);

    echo "<script>alert('Booking submitted successfully!'); window.history.back();</script>";
    exit();
} else {
    echo "<h3>No direct access allowed!</h3>";
}
?>
