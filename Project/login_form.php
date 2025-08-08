<?php

@include 'config.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {

   // Check if fields exist before using them
   $name = isset($_POST['name']) ? mysqli_real_escape_string($conn, $_POST['name']) : '';
   $email = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) : '';
   $pass = isset($_POST['password']) ? md5($_POST['password']) : '';
   $cpass = isset($_POST['cpassword']) ? md5($_POST['cpassword']) : '';
   $user_type = isset($_POST['user_type']) ? $_POST['user_type'] : '';

   // Validate if email and password are provided
   if(empty($email) || empty($pass)){
       $error[] = "Email and password are required!";
   } else {
       // Check user in database
       $select = "SELECT * FROM user_form WHERE email = '$email' AND password = '$pass'";
       $result = mysqli_query($conn, $select);

       if (mysqli_num_rows($result) > 0) {
           $row = mysqli_fetch_array($result);

           if ($row['user_type'] == 'admin') {
               $_SESSION['admin_name'] = $row['name'];
               header('location:admin_page.php');
               exit(); // Ensure script stops execution after redirect
           } elseif ($row['user_type'] == 'user') {
               $_SESSION['user_name'] = $row['name'];
               header('location:project.html');
               exit();
           }
       } else {
           $error[] = 'Incorrect email or password!';
       }
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

* {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    border: none;
    text-decoration: none;
}

body, html {
    height: 100%;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-image: url('https://img.freepik.com/free-vector/realistic-travel-background-with-elements_52683-77784.jpg?t=st=1742714293~exp=1742717893~hmac=3d82ce0db3391a1d78a4caced86db0d431d213ecce5505c80bbeabd896ef1d68&w=996');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.form-container {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    max-width: 400px;
    background: rgba(255, 255, 255, 0.8); /* Adds transparency */
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
}

form {
    width: 100%;
    text-align: center;
}

form h3 {
    font-size: 30px;
    text-transform: uppercase;
    margin-bottom: 20px;
    color: #333;
}

form input {
    width: 100%;
    padding: 10px 15px;
    font-size: 16px;
    margin: 10px 0;
    background: #f3f3f3;
    border-radius: 5px;
}

form .form-btn {
    width: 100%;
    padding: 10px;
    font-size: 18px;
    background: #fbd0d9;
    color: crimson;
    text-transform: capitalize;
    cursor: pointer;
    border-radius: 5px;
}

form .form-btn:hover {
    background: crimson;
    color: #fff;
}

form p {
    margin-top: 15px;
    font-size: 14px;
    color: #333;
}

form p a {
    color: crimson;
    text-decoration: underline;
}

.error-msg {
    margin: 10px 0;
    background: crimson;
    color: #fff;
    border-radius: 5px;
    font-size: 15px;
    padding: 10px;
}

</style>
   <title>Login Form</title>
</head>
<body>
   
<div class="form-container">
   <form action="login_form.php" method="post"> <!-- ✅ Fix form action -->
      <h3>Login Now</h3>
      
      <?php
      if (isset($error)) {
         foreach ($error as $err) {
            echo '<span class="error-msg">' . $err . '</span>';
         }
      }
      ?>

      <input type="email" name="email" required placeholder="Enter your email">
      <input type="password" name="password" required placeholder="Enter your password">
      <input type="submit" name="submit" value="Login Now" class="form-btn">
      <p>Don't have an account? <a href="register_form.php">Register Now</a></p>
   </form>
</div>

</body>
</html>