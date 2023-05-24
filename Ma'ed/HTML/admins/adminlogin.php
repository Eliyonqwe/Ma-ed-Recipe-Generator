
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Signup</title>
  <link rel="stylesheet" href="../styles/signup.css" />
  </head>

<body>
  <form action="adminlogin.php" method="post">
    <h1>Sign In</h1>
    <p>Enter your personal information</p>
    <input required type="text" placeholder="Username" name="username" />
    <input required type="password" placeholder="Password" name="password" />
    <button name="signin_admin" >LogIn</button>
</form>
<?php
if (isset($_POST['signin_admin'])) {
    include('connect.php');
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    
    $sql = "SELECT * FROM admin WHERE username='$username' and password='$password'";
    $result = mysqli_query($conn, $sql);

    // Check if the query returned any rows
    if (mysqli_num_rows($result) == 1) {
      
        // Set the session variables and redirect to the dashboard
        session_start();
        $_SESSION['username'] = $username;
        header("Location: adminpage.php");
        exit();
    } else {
        echo "Invalid username or password";
    }

} ?>
</div>
</body>

</html>