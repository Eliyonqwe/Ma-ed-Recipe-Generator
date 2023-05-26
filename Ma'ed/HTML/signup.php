<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Signup</title>
  <link rel="stylesheet" href="../styles/signup.css" />
  <link rel="icon" type="image/x-icon" href="../pics/favicon.ico">
  <link href="https://fonts.cdnfonts.com/css/dosis" rel="stylesheet">

  <script src="https://kit.fontawesome.com/a837bf0db4.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="wrapper">
    <!-- <img src="../pics/injera.JPG" alt=""> -->
    <div class="item1">
      <a href="home.php"><i class="fa-sharp fa-solid fa-arrow-left"></i></a>
    </div>
    <div class="item2"></div>

    <div class="item3">
      <div class="logo">
        <a href="home.php"><img src="../pics/Maed_logo1-removebg.png" alt="" /></a>
      </div>
    </div>

    <div class="item4">
      <form action="../HTML/signup.php" method="post">
        <?php include('errors.php'); ?>
        <h4>Create an Account</h4>
        <div class="icon-login">
          <a href="#" class="icon"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="icon"><i class="fab fa-google-plus-g"></i></a>
          <a href="#" class="icon"><i class="fab fa-linkedin-in"></i></a>
        </div>
        <p>
          Enter your personal details to Resgister
        </p>
        <input required type="text" placeholder="First Name" name="fname" />
        <input required type="text" placeholder="Last Name" name="lname" value="" />
        <div class="inline">
          <input required type="number" id="age" name="age" min="0" max="150" placeholder="Age">

          <select id="gender" name="gender">
            <option value="" style="color:grey" disabled selected hidden>Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
        </div>

        <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" />
        <input type="email" placeholder="  Email" name="email" value="<?php echo $email; ?>" />
        <input type="password" placeholder=" Password" name="password_1" />
        <input type="password" placeholder="Repeat Password" name="password_2" />
        <div class="sec">
          <label for="agree"><input type="checkbox" name="" id="agree"> By clicking Sign Up, you agree to our <span class="link">Terms & Conditions</span>. Learn how we collect, use and share your data in our<span class="link"> Privacy Policy.</span>

          </label>

          <button type="submit" class="signup" name="reg_user">Sign Up</button>

        </div>
      </form>
    </div>

    <div class="item5">
      <h1>Welcome to Ma'ed. </h1>
      <h1> The First Recipe Generator Site in Ethiopia.</h1>
      <p>Sign In your Account and start journey with us</p>
      <button class="signin"><a href="signin.php">Sign In</a></button>
    </div>

    <div class="item6"></div>

    <div class="item7"></div>
    <div class="item8"></div>
  </div>
</body>

</html>