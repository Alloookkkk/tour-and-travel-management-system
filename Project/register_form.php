<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

};


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
    background-image: url('https://img.freepik.com/free-vector/travel-time-background-sketchy-style_23-2147507123.jpg?t=st=1742714639~exp=1742718239~hmac=c67678b2102a17356e5a6f053dcfe94e2c62436f75e2989218fae66b6ac67e57&w=740');
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
  <title>register form</title>

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="enter your name">
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="cpassword" required placeholder="confirm your password">
      <select name="user_type">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select>
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="login_form.php">login now</a></p>
   </form>

</div>

</body>
</html>