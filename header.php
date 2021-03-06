

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .col-lg-3{
            border: 1px solid black;
        }
    </style>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/song.css">
    
    <!-- Latest compiled and minified CSS -->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
        <nav class="navbar navbar-expand-lg navbar-inverse">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">ATN Toy Store</a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>           
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">

                <ul class="nav navbar-nav">
                    
                    <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                    <li class="dropdown"><a href="#" data-toggle="dropdown"><span class="glyphicon glyphicon-music"></span> Toys <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="">Can cau do choi</a></li>
                            <li><a href="">May suc do choi</a></li>
                            <li><a href="">O to do choi</a></li>
                        </ul>
                    </li>
                        
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Brand</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-headphones"></span> News</a></li>  
                    <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart (0)</a></li>  
          
                </ul>

                <!--search-->
                
                <!--navbar right-->
                <ul class="nav navbar-nav navbar-right">
                    <li style="font-size:16px" class="dropdown"><a data-toggle="dropdown" href=""><?php
                    if(isset($_SESSION['login']))
                    {
                        echo $_SESSION['login'];
                    }
                    else{
                      echo "Account";
                    }
                    ?><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <?php
                          if(isset($_SESSION['login']))
                          {
                              echo '<li><a href="logout.php">Logout</a></li>';
                              echo '<li><a href="#">Change information</a></li>';
                              echo '<li><a href="#">Change payment method</a></li>';


                          }
                          else{
                            echo '<li class="dropdown-item"><a href="login.php">Log in</a></li>';
                            echo '<li class = "dropdown-item"><a href="register.php">Register</a></li>';
                          }
                          ?>
                            
                            
                        </ul>
                    </li>
                </ul>
                <form action="" method="GET"class=" nav navbar-nav navbar-left form-inline my-3 my-lg-2">
                    <input  name="search" class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    <input  class="btn btn-info"type="submit" value=Search>
                </form>
            </div>
        </nav>
        
  </div>




