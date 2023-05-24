<?php
include('connect.php');
$id = $_GET['status'];
$username_query = "SELECT username from users where id='$id'";
$query_run = mysqli_query($conn, $username_query);
$username = mysqli_fetch_array($query_run);

$sug_query = "SELECT suggestionID from suggestion where username='$username[0]'";
$query_run = mysqli_query($conn, $sug_query);
$sug_id = mysqli_fetch_array($query_run);
print_r($sug_id);



$sql = "delete FROM user_foods WHERE user_id=$id";
if (mysqli_query($conn, $sql)) {
    echo "Related records deleted successfully";
  } else {
    echo "Error deleting related records: " . mysqli_error($conn);
  }


// Delete related records in the suggestion table
$sql = "DELETE FROM suggestion WHERE username = '$username[0]'";
if (mysqli_query($conn, $sql)) {
  echo "Related records deleted successfully";
} else {
  echo "Error deleting related records: " . mysqli_error($conn);
}

// Delete the user from the users table
$sql = "DELETE FROM users WHERE username = '$username[0]'";
if (mysqli_query($conn, $sql)) {
  echo "User deleted successfully";
} else {
  echo "Error deleting user: " . mysqli_error($conn);
}
//header('location: adminpage.php');
?>