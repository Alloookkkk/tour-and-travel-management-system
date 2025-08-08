<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url('https://media.istockphoto.com/id/1065782440/photo/survey-poll-or-questionnaire-for-user-experience-or-customer-satisfaction-research-quality.jpg?s=612x612&w=0&k=20&c=BN1YbeXT0acoIAaXBNicG61JqbemXexf3Htik7-Dd80=') no-repeat center center/cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            max-width: 500px;
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        h2 {
            color: #333;
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        textarea, input, select {
            width: 100%;
            padding: 12px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
        }
        button {
            background-color: #28a745;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 18px;
            transition: background 0.3s ease;
        }
        button:hover {
            background-color: #218838;
        }
        .icon {
            color: #28a745;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2><i class="fas fa-plane-departure"></i> Tour & Travel Feedback Form</h2>
        <form action="feedback.php" method="post">
            <label for="name"><i class="fas fa-user icon"></i> Full Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email"><i class="fas fa-envelope icon"></i> Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="service"><i class="fas fa-concierge-bell icon"></i> Service Used:</label>
            <select id="service" name="service">
                <option value="flight">Flight Booking</option>
                <option value="train">Train Booking</option>
                <option value="hotel">Hotel Booking</option>
                <option value="tour_guide">Tourist Guide</option>
            </select>
            
            <label for="rating"><i class="fas fa-star icon"></i> Overall Experience:</label>
            <select id="rating" name="rating">
                <option value="5">Excellent</option>
                <option value="4">Very Good</option>
                <option value="3">Good</option>
                <option value="2">Fair</option>
                <option value="1">Poor</option>
            </select>
            
            <label for="comments"><i class="fas fa-comments icon"></i> Comments/Suggestions:</label>
            <textarea id="comments" name="comments" rows="4"></textarea>
            
            <button type="submit"><i class="fas fa-paper-plane"></i> Submit Feedback</button>
        </form>
    </div>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "tour";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $name = $_POST['name'];
        $email = $_POST['email'];
        $service = $_POST['service'];
        $rating = $_POST['rating'];
        $comments = $_POST['comments'];

        $sql = "INSERT INTO feedback (name, email, service, rating, comments) VALUES ('$name', '$email', '$service', '$rating', '$comments')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Feedback submitted successfully!');</script>";
        } else {
            echo "<script>alert('Error: ' . $conn->error);</script>";
        }

        $conn->close();
    }
    ?>
</body>
</html>
