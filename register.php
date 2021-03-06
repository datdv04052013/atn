<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/register.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    
    
<div class="container-fluid">
    <div class="form-container">
        <form action="" method="POST" enctype="multipart/form-data">
          <h2 class="title">Register</h2>
          <div class="form-input">
              <i class="far fa-user"></i>
              <input type="text"required placeholder="Full name" name="fullname">
          </div>
          <div class="form-input">
              <i class="fas fa-user"></i>
              <input type="text"  required placeholder="Username" name="username">
          </div>
          <div class="form-input">
              <i class="fas fa-lock"></i>
              <input type="password"required placeholder="Password" name="password">
          </div>
          <div class="form-input">
              <i class="fas fa-lock"></i>
              <input type="password"required placeholder="Confirm Password" name="confirm_password">
          </div>
          <div class="form-input">
              <i class="fas fa-envelope"></i>
              <input type="text"required placeholder="Email" name="email">
          </div>
          <div class="form-input">
              <i class="fas fa-phone"></i>
              <input type="text"required placeholder="Phone Number" name="phone">
          </div>
          <div class="form-input">
              <i class="fas fa-map-marker"></i>
              <input type="text"required placeholder="Address" name="address">
          </div>
          
          <input type="submit"  class="button" value="Register" name="register">
          <p>Already have an account<a href="login.php"> Click here</a> to sign in.</p>

          <h5>Or sign up with:</h5>
          <div class="form-social">
              <a href="" class="form-icon"><i class="fab fa-facebook-f"></i></a>
              <a href="" class="form-icon"><i class="fab fa-instagram"></i></a>
              <a href="" class="form-icon"><i class="fab fa-twitter"></i></a>
              <a href="" class="form-icon"><i class="fab fa-google"></i></a>
              <a href="" class="form-icon"><i class="fab fa-linkedin"></i></a>
          </div>  
        </form>
    </div>
</div>
      

</body>
</html>




<?php
$con = new mysqli('34.230.84.57', 'datdv', '123@123a', 'shopmusic');
if (!$con) {
    echo "ket noi that bai";
}
if (isset($_POST['register'])) {
    if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['confirm_password'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];
        $fullname =$_POST['fullname'];
        $email = $_POST['email']; 
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $confirm_password = $_POST['confirm_password']; 
        $role = 'user';

        $check_exist = mysqli_query($con, "select * from users where username = '$username'");

        $username_count = mysqli_num_rows($check_exist);

        $row_register = mysqli_fetch_array($check_exist);

        if ($username_count > 0)
        {
            echo "<script>alert('account existed, please login or enter another account.')</script>";
        } 
        else
        {
            $run_insert = mysqli_query($con, "insert into users(fullname, address, email, phone, username, password, role) values ('$fullname','$address','$email','$phone', '$username', '$password', '$role') ");
            if ($run_insert) 
            {
                echo "<script>alert('register sucessfully, welcome to my website')</script>";
                echo "<script>window.open('login.php','_self')</script>";
            }
        }
    }
}
?>

