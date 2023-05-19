<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>signup</title>
    <link rel="stylesheet" href="../styles/signup.css" />
    <script
      src="https://kit.fontawesome.com/a837bf0db4.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="wrapper">
      <div class="item1">
        <a href="home.php"><i class="fa-sharp fa-solid fa-arrow-left"></i></a>
      </div>
      <div class="item2"></div>

      <div class="item3">
        <div class="logo">
          <a href="home.php"
            ><img src="../pics/Maed_logo1-removebg.png" alt=""
          /></a>
        </div>
      </div>

      <div class="item4">
        <form action="../HTML/signup.php" method="post"   >
          <?php include('errors.php');?>
          <h4>Create an Account</h4>
          <div class="icon-login">
            <a href="#" class="icon"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="icon"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="icon"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <p>
            Enter your personal details <br />
            to Resgister
          </p>

          <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>"/>
          <input type="email" placeholder="  Email" name="email" value="<?php echo $email; ?>" />
          <input type="password" placeholder=" Password" name="password_1" />
          <input type="password" placeholder="Repeat Password" name="password_2"/>
          <button type="submit" name="reg_user">Sign Up</button>
        </form>
      </div>

      <div class="item5">
        <h1>
          Welcome to Ma'ed. <br />
          The First Recipe Generator Site in Ethiopia.
        </h1>
        <p>Sign In your Account and start journey with us</p>
        <a href="signin.php"><button>Sign In</button></a>
      </div>

      <div class="item6"></div>

      <div class="item7"></div>
      <div class="item8"></div>
    </div>
  </body>
</html>
