<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>signin</title>
  <link rel="stylesheet" href="../styles/signin.css">
  <script src="https://kit.fontawesome.com/a837bf0db4.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="item1">  <a href="login.php"><i class="fa-sharp fa-solid fa-arrow-left"></i></a>
    <div class="logo">
      <a href="home.html"><img src="../pics/Maed_logo1-removebg.png" alt="" /></a>
     </div>
    </div>
  
  <div class="containers555">


    <div class="item13">
      
      <form action="../HTML/signin.php" method="post" class="i1">
        <?php include('errors.php'); ?>
        <img src="../pics/256-512.webp" alt="Avatar" class="avatar">
        <h1>Sign In</h1>
        <p>Enter your Email address <br>and password to LogIn</p>
        <input type="text" placeholder="   username" name="username" />
        <input type="password" placeholder=" Password" name="password" />
       <a href="home.html"> <button>Sign In</button> </a>
       <input type="checkbox" checked="checked" name="remeber">Remember Me
    </form>
       
      
     
</div>

    </div>
  
</body>
</html>