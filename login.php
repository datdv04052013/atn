<?php
session_start();
include 'admin/connect.php';
if(isset($_POST['login'])){
  
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query="select * from users where username='$username' AND password='$password' ";
 
  $result = mysqli_query($con, $query );
  
  $check_login = mysqli_num_rows($result);

  
  
  if($check_login == 0){
    
   echo "<script>alert('Password or username is incorrect, please try again!')</script>";
   exit();
  }  
  if($check_login > 0){ 
    while ($row= mysqli_fetch_assoc($result)) {
        if ($row["role"]== "admin") {
            $_SESSION['login'] = $row["username"];
            

            header('location: admin/index.php');
        }
        else{


            $_SESSION['login'] = $row["username"];

            header('location: index.php');
        }
    }
  echo "<script>alert('You have logged in successfully !')</script>";
  echo "<script>window.open('index.php','_self')</script>";


  
  }
  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/login.css">
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

        <form action="" method="POST">
            <h2 class="title">Login</h2>
            <div class="form-input">
                <i class="fas fa-user"></i>
                <input type="text" name="username" required placeholder="Enter your username"">
            </div>
            <div class="form-input">
                <i class="fas fa-lock"></i>
                <input type="password"required placeholder="Enter your password" name="password">
            </div>
        
            <div class="form-check">
                <input type="checkbox" id="checkbox">
                <label for="checkbox">Remember me</label>
            </div>
            <input type="submit" value="Login" name="login" class="button">
            <p>Don't have any account?<a href="register.php"> Click here</a> to sign up.</p>
            <h5 class="form-text">Or login with:</h5>
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

?>