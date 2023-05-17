<?php

if (isset($_POST["submit"])) {
  $ingName = $_POST["name"];
  $ingType = $_POST["type"];

  $con = mysqli_connect("localhost", "root", "", "maed");
  if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
  }
  $ing_query = "INSERT INTO ingredient VALUES('','$ingName','$ingType')";
  $query_run = mysqli_query($con, $ing_query);
  echo "<script>alert('Ingredient Insertion Succesful')</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <h1>Add Ingredient</h1>
  <form action="" method="post" autocomplete="off">
    <label for="name">Ingredient Name: </label>
    <input type="text" name="name" id="name" />
    <label for="">Ingredient Type</label>
    <?php
    $query = "select distinct ingType from ingredient";
    $query_run = mysqli_query($con, $query);
    ?>
    <select name="type" id="">
      <?php
      while ($rows = $query_run->fetch_assoc()) {
        $ingtype = $rows['ingType'];
        echo "<option value='$ingtype'>$ingtype</option>";
      }
      ?>

    </select>
    <br />
    <br />
    <br />
    <input type="submit" value="Submit" name="submit" />
  </form>
</body>

</html>