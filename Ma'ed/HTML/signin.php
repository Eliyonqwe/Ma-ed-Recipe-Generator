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
  <div class="item1"> <a href="signup.php"><i class="fa-sharp fa-solid fa-arrow-left"></i></a>
    <div class="logo">
      <a href="home.php"><img src="../pics/Maed_logo1-removebg.png" alt="" /></a>
    </div>
  </div>

  <div class="containers555">


    <div class="item13">

      <form action="../HTML/signin.php" method="post" class="i1">
        <?php include('errors.php'); ?>
        <img src="../pics/256-512.webp" alt="Avatar" class="avatar">
        <h1>Sign In</h1>
        <p>Enter your personal information</p>
        <input type="text" placeholder="Username" name="username" />
        <input type="password" placeholder="Password" name="password" />
        <button name="signin_user" class="signin">Sign In</button>
        <input type="checkbox" checked="checked" name="remeber">Remember Me
        <p class="new">create new account!! <br> <span><a href="signup.php">CLICK HERE!!!</a></span></p>
      </form>



    </div>

  </div>

</body>

</html>