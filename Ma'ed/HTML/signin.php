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
  <link href="https://fonts.cdnfonts.com/css/dosis" rel="stylesheet">
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
        <div class="head">
          <p id="cont"> <a href="searchpage.php">Continue Free</a></p>
          <img src="../pics/256-512.webp" alt="Avatar" class="avatar">
          <h1>Sign In</h1>
          <p>Enter your personal information</p>
        </div>
        <input type="text" placeholder="Username" name="username" />
        <input type="password" id="password" placeholder="Password" name="password" />
        <span><i id="toggler" class="far fa-eye"></i></span>
        <sec class="foot">
          <button name="signin_user" class="signin">Sign In</button>
          <input type="checkbox" checked="checked" name="remeber" id="remember">
          <label for="remember">Remember Me</label>
          <p class="new"><a href="signup.php"> <span class="blue"> Click Here </span>to Create an Account</a></p>
        </sec>
      </form>



    </div>

  </div>

</body>

</html>
<script src="../Scripts/signin.js"></script>
<script src="https://unpkg.com/scrollreveal"></script>