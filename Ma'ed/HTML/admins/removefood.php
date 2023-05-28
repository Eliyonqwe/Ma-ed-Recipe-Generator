<?php
include('connect.php');
$foodid = $_GET['status'];

$sql = "delete from user_foods where foodID='$foodid'";
if (mysqli_query($conn, $sql)) {
    echo "Related records deleted successfully";
  } else {
    echo "Error deleting related records: " . mysqli_error($conn);
  }


// Delete related records in the nutritionfact table
$sql = "DELETE FROM nutritionfact WHERE foodID = '$foodid'";
if (mysqli_query($conn, $sql)) {
  echo "Related records deleted successfully";
} else {
  echo "Error deleting related records: " . mysqli_error($conn);
}

$sql = "DELETE FROM fooding WHERE foodID = '$foodid'";
if (mysqli_query($conn, $sql)) {
  echo "Related records deleted successfully";
} else {
  echo "Error deleting related records: " . mysqli_error($conn);
}
// Delete the food from the food table
$sql = "DELETE FROM food WHERE foodID = '$foodid'";
if (mysqli_query($conn, $sql)) {
  echo "food deleted successfully";
} else {
  echo "Error deleting user: " . mysqli_error($conn);
}
header('location: adminpage.php');
?>