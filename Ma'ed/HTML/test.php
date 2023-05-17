  <?php
    if (isset($_POST["submit"])) {
        echo "<script>alert('Please adadXxadAAD')</script>";
        $selected_ingredient_id = [];


        if (!empty($_POST["check"])) {
            foreach ($_POST["check"] as $checked) {
                echo "<script>alert('Please adadXxadAAD')</script>";
                echo '<h1>' . $checked . '<hq>';
            }
        }
    }
    ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
  </head>

  <body>
      <form action="" method="get">
          <p> <input type="checkbox" name="a[]" id="">sd</p>
          <p> <input type="checkbox" name="a[]" id="">sd</p>
          <p> <input type="checkbox" name="a[]" id="">sd</p>
          <p> <input type="checkbox" name="a[]" id="">sd</p>
          <p> <input type="checkbox" name="a[]" id="">sd</p>
          <p> <input type="checkbox" name="a[]" id="">sd</p>

          <input type="submit" name="find" value="">

      </form>


  </body>

  </html>