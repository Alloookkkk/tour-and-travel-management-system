<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $transactionId = $_POST['transaction_id'];
    $paymentDate = $_POST['payment_date'];
    $issueType = $_POST['issue_type'];

    // Log the data (in a real-world app, insert it into a database)
    $message = "Name: $name\nEmail: $email\nTransaction ID: $transactionId\nPayment Date: $paymentDate\nIssue Type: $issueType\n";
    file_put_contents('issues_log.txt', $message, FILE_APPEND);

    // Redirect with success message
    echo "<p>Thank you, $name. Your issue has been submitted. We will contact you shortly.</p>";
}
?>
