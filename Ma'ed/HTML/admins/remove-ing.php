<?php
include('connect.php');
$ingid = $_GET['status'];

$sql = "delete from fooding where ingID='$ingid'";
if (mysqli_query($conn, $sql)) {
    echo "Related records deleted successfully";
  } else {
    echo "Error deleting related records: " . mysqli_error($conn);
  }

// Delete the user from the users table
$sql = "DELETE FROM ingredient WHERE ingID = '$ingid'";
if (mysqli_query($conn, $sql)) {
  echo "ingredient deleted successfully";
} else {
  echo "Error deleting ingredient: " . mysqli_error($conn);
}
header('location: adminpage.php');
?>