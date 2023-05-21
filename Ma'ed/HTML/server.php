<?php
session_start();

// initializing variables
$fname = "";
$lname = "";
$age = "";
$gender = "";
$username = "";
$email = "";
$password_1 = "";
$password_2 = "";
$errors = array();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'maed');
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $fname = mysqli_real_escape_string($db, $_POST['fname']);
  $lname = mysqli_real_escape_string($db, $_POST['lname']);
  $age = mysqli_real_escape_string($db, $_POST['age']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($fname)) {
    array_push($errors, "First Name is required");
  }
  if (empty($lname)) {
    array_push($errors, "Last Name is required");
  }
  if (empty($age)) {
    array_push($errors, "Age is required");
  }
  if ($age > 200) {
    array_push($errors, "Age invalid age input!");
  }
  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($email)) {
    array_push($errors, "Email is required");
  }
  if (empty($password_1)) {
    array_push($errors, "Password is required");
  }
  if ($password_1 != $password_2) {
    array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = ($password_1); //encrypt the password before saving in the database

    $query = "INSERT INTO users (firstName, lastName, gender, username, age, password, email) 
  			  VALUES('$fname', '$lname', '$gender', '$username',$age ,'$password','$email')";
    echo "Error: " . $query . "<br>" . $db->error;
    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location: signin.php');
  }
}

// LOGIN USER
if (isset($_POST['signin_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    echo $username;
    echo $password;
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: searchpage.php');
    } else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}
