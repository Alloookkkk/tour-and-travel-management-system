<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Example action: Store in a file or database, or send via email.
    file_put_contents("contact_messages.txt", "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message\n---\n", FILE_APPEND);

    echo "Thank you, $name! Your message has been received. We will get back to you soon.";
}
?>
